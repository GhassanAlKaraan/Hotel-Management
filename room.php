<?php
session_start();
require "connection.php";


?>
<!DOCTYPE.html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Project</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<style>
@import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap");
.nav-link{
	font-size: 30px; 
	text-decoration: none; 	
	}
	
.img1{

	 background-image: url("home.jpg");
	 z-index: 1;
 background-size: 100% 100%;
		     background-repeat: no-repeat;
			
}

.single{
	 background-image: url("single.jpg");
	  width:500px;
	  height:500px;
	   background-repeat: no-repeat;
}


.logo{
		 background-image: url("logoHotel.png");
		 text-align:center;
	 width:100%;
	 height:100%;
	 margin-left:600px;
	   background-repeat: no-repeat;
		
}

.box {
  width: 100%;
  height: 240px;
  opacity:0.8;
  text-align:center;
  font-size: 16px;
  padding: 40px 40px;
  background: #212129;
 
}

.box1{

	 width: 80%;
  height: 100px;
  margin-left:120px;
  margin-top:30px;
  font-size: 16px;
  padding: 5px 5px;
  background: white;
}
.cards {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
    grid-gap: 20px;
}

.card {
    display: grid;
    grid-template-rows: max-content 250px 1fr;
}

.card img {
    object-fit: cover;
    width: 100%;
    height: 100%;
}

.container{
	text-align:center;
	justify-content: center;  
align-items: center;  
}

.column {
  float: left;
  width: 33%;
  padding: 0 10px;
}


.row {margin: 0 -5px;}

label{
		margin-left:65px;
		color:black;
	}
	
	h3{
		color:black;
	}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.nav-link{
	font-size:30px;
	color:white;
}

h4{
	color:white;
}


.nav-link{
	font-size: 25px; 
	text-decoration: none; 	
	}
	
	.dropbtn:hover, .dropbtn:focus {
  background-color: #2980B9;
}

.dropdown {
  position: relative;
  display: inline-block;
  float:right;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}

.nav justify-content-center{
	text-align:center;
	margin-Left:40px;
}

.navw{
margin-Left:680px;
font-size:10px;

}
.nav-link{
	font-size: 30px; 
	text-decoration: none; 	
	}
	
	label{
		margin-left:45px;
	}

.nav-link1{
	font-size:20px;
	color:white;
}

.nav-link{
	font-size:30px;
	color:white;
}

.nav-link active{
	margin-Left:300px;
	padding:60px;
}
.nav-item rounded{
	margin-Left:300px;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 25px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}
.arrow {
  border: solid white;
  border-width: 0 4px 4px 0;
  display: inline-block;
  padding: 3px;
}
.down {
  transform: rotate(45deg);
  -webkit-transform: rotate(45deg);
}
</style>

</head>

<body>

<div class="topnav">
  <a href="booking.php">Home</a>
  <a href="service.php">Room Service</a>
  <a href="activities.php">Facilities</a>
  <a href="cancel.php" >Cancellation</a>
 
  <a href="#" style="float:right;" onclick="myFunction()" href="#" id="navbarDropdown" role="button"><i class="bi bi-person-fill me-2"></i><?php
		  $qry="select Username_User from user where Id_User='$_SESSION[Id_User]';";
$result=mysqli_query($conn,$qry);
$val=mysqli_fetch_array($result);
$words = explode(" ", $val["Username_User"]);
$f=reset($words); 
$l = end($words);
	echo substr($f,0,1);

		echo substr($l,0,1);
?> </a>
 <a href="contact.php" style="float:right;">Contact</a>
</div>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
<div class="img1">
<div class="box">	


<div class="logo"></div>

</div>

<div class="box1">
<h3>Your booking details:</h3>
<label>CheckIn:</label>
  <input type="date" value="<?php echo $_SESSION["checkin"]; ?>" name="checkin" readonly>
  <label>CheckOut:</label>
  <input type="date" value="<?php echo $_SESSION["checkout"]; ?>" name="checkout" readonly>
   <label>Number Of Persons:</label>
  <input type="number" value="<?php echo $_SESSION["person"]; ?>" name="person" readonly>


</div>
<br><br><br><br>
</div>
<br>



<?php

    $CheckIn_Date=$_SESSION["checkin"];
    $CheckOut_Date=$_SESSION["checkout"];
	$chin=strtotime($CheckIn_Date);
	$chout=strtotime($CheckOut_Date);
	$datediff=$chout-$chin;
	$_SESSION["nights"]=round($datediff / (60 * 60 * 24));
	



$sql="SELECT *
FROM
    typeofroom

	
";
if($_SESSION["person"]==4){
$sql_query="SELECT *
FROM
    typeofroom where Name_TR in('Quad-Room','Double-Room','Suite-Room','King-Room');

";
$result=mysqli_query($conn,$sql_query);
}
else if($_SESSION["person"]==3){
$sql_query="SELECT *
FROM
    typeofroom where Name_TR not in('Hollywood-Room','Single-Room');

";
$result=mysqli_query($conn,$sql_query);
}
else if($_SESSION["person"]!=1){
$sql_query="SELECT *
FROM
    typeofroom where Name_TR!='Single-Room';

";
$result=mysqli_query($conn,$sql_query);
}
else{
$sql_query="SELECT *
FROM
    typeofroom

	
";
$result=mysqli_query($conn,$sql_query);
}


//$result0=mysqli_query($conn,$sql_query0);	 


if(mysqli_num_rows($result)>0){
	echo "The available room is:<br>";

	echo '<div class="row">';
	while($row=mysqli_fetch_array($result)){
		 
	
		$sql_query1="SELECT count(*) as total
FROM room

WHERE Id_TR=$row[Id_TR];

";
$result1=mysqli_query($conn,$sql_query1);


$sql_query2="SELECT count(*) as total
FROM booking

WHERE  
              (('$CheckIn_Date' <= CheckIn_Date
				AND '$CheckOut_Date' >= CheckOut_Date) OR ('$CheckIn_Date' >= CheckIn_Date
				AND '$CheckOut_Date' <= CheckOut_Date)	OR ('$CheckIn_Date' <= CheckIn_Date
				AND '$CheckOut_Date' >= CheckOut_Date)OR ('$CheckIn_Date' <= CheckOut_Date
				AND '$CheckOut_Date' >= CheckOut_Date) )
				
				AND Id_TR=$row[Id_TR];


";
$result2=mysqli_query($conn,$sql_query2);

		while($row1=mysqli_fetch_assoc($result1)){
while($row2=mysqli_fetch_assoc($result2)){
	$total=$row1["total"]-$row2["total"];
	
 
         $output = '<input type="submit" name="'.$row["Name_TR"].'" class="btn btn-primary btn-lg btn-block" value="Book Now"/>';
    
   

		  
	if($total>0){

  echo '<div class="column">
    <div class="card">
        <header>
            <h2>'.$row["Name_TR"].'</h2>
        </header>  
        <img src="'.$row["photo"].'">
     <p>'.$row["Desc_TR"].' </p><p style="font-size:25px; color:blue;">The remaining rooms:'.$total.'<p style="font-size:25px; color:blue;">'.$row["Price_TR"].'$ per night </p><footer><form method="POST" autocomplete="off">'.
	
		$output.
	
	'</form></footer>

 
    </div>
  </div>
';

}else{
		continue;
	}

	
		}
	}


	if(isset($_POST[$row["Name_TR"]])){
		$qry1="SELECT * from typeofroom where Name_TR='".$row["Name_TR"]."'";
	$res1=mysqli_query($conn,$qry1);
	while($r1=mysqli_fetch_assoc($res1)){
		$_SESSION["Name_TR"]=$r1["Name_TR"];
		$_SESSION["Price_TR"]=$r1["Price_TR"];
		$_SESSION["Id_TR"]=$r1["Id_TR"];
		$_SESSION["photosp"]=$r1["photo"];
	
	$_SESSION["total"]=$_SESSION["Price_TR"]*round($datediff / (60 * 60 * 24));
	
	}	
	echo("<script>location.href = 'payment.php';</script>");
		
		//echo $_SESSION["Name_TR"];
	

}




	}

	echo '</div>';
	
}
else{
	
echo "all room is not available";
}


 

?>

<?php


?>
 

<div class="img1">
<div class="box">
<div class="logo"></div>
<h3 style="color:white; font-size: 26px;
		font-family:impact;">Phone: 71 529 953 &nbsp;
Location: Jbeil,Hboub &nbsp;
Mail: hotelsea@gmail.com</h3>
</div>
</div> 
</body>
</html>