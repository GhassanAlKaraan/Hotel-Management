<?php
//require "conn.php";

    $CheckIn_Date=$_REQUEST['CheckIn_Date'];
    $CheckOut_Date=$_REQUEST['CheckOut_Date'];
	$CheckIn_Date = isset($_REQUEST['CheckIn_Date']) ? $_REQUEST['CheckIn_Date'] : null;
	$CheckOut_Date = isset($_REQUEST['CheckOut_Date']) ? $_REQUEST['CheckOut_Date'] : null;
 
$response=array();
$sql_query="SELECT
    Id_TR ,Name_TR
FROM
    typeofroom
WHERE
    Id_TR NOT IN (
        SELECT
            typeofroom.Id_TR
        FROM
           typeofroom
        LEFT OUTER JOIN
            booking ON booking.Id_TR = typeofroom.Id_TR
        WHERE
  
                '$CheckIn_Date' >= CheckIn_Date
               
                AND '$CheckOut_Date' <=  CheckOut_Date
            
    )
";
		 
$result=mysqli_query($conn,$sql_query);

if(mysqli_num_rows($result)>0){
	$response['success']=1;
	$temp=array();
	while($row=mysqli_fetch_assoc($result)){
		array_push($temp,$row);
		
	}
	$response['temp']=$temp;
}
else{
	$response['success']=0;
	$response['message']='The room is not available';

}
echo json_encode($response);
mysqli_close($conn);
?>