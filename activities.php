<?php session_start();
require "connection.php";?>
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
.img{

	 background-image: url("spaimage.jpg");
	 z-index: 1;
 background-size: 100% 100%;
 width:1400px;
 height:400px;
		     background-repeat: no-repeat;
			
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
  width: 50%;
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
.box {
  width: 100%;
  height: 220px;
  opacity:0.8;

  font-size: 16px;
  padding: 40px 40px;
  background: #212129;
 
}
.boxbutton{
	
 width: 100%;
  height: 100px;
  opacity:0.8;
  font-size: 16px;
  text-align:center;
  background: white;
 
}
h3{color:white;}
</style>
</head>
<body>
<div class="img"><div class="box"><?php echo"<h2 style='color:white;'>Welcome Mr.".$_SESSION["username"]."</h2>";?>
<h3>Your ability to generate power is directly proportional to your ability to relax</h3></div></div>

<?php
$qry0="select Type_Act from activities where Type_Act!='subrelax' Group By Type_Act;";

$result0=mysqli_query($conn,$qry0);
while($row0=mysqli_fetch_array($result0)){
	echo '<div class="boxbutton" style="color:black;font-size:45px;">'.$row0["Type_Act"].'</div>';
$qry="select * from activities where Type_Act='$row0[Type_Act]';";

$result=mysqli_query($conn,$qry);
echo '<div class="row">';
while($row=mysqli_fetch_array($result)){
	
$output = '<input type="submit" name="'.$row["Name_Act"].'" class="btn btn-primary btn-lg btn-block" value="Book Now"/>';
echo '<div class="column">
    <div class="card">
        <header>
<h2>'.$row["Name_Act"].'</h2>
        </header>  
        <img src="'.$row["photo"].'">
     <p>'.$row["Desc_Act"].'</p><p style="font-size:25px; color:blue;">'.$row["Price_Act"].'$ </p><footer><form method="POST"  autocomplete="off">'
	
.$output.		
	
	'</form></footer>';
	
if(isset($_POST["Spa"])){
	 echo("<script>location.href = 'spa.php';</script>");
}else{
 if(isset($_POST[$row["Name_Act"]])){
	 
	
   $data="SELECT * from booking where ('$date'>=CheckIn_Date AND '$date'<=CheckOut_Date) And Id_Book='$_SESSION[idbook]';";
	   $resdata=mysqli_query($conn,$data);


	  $qry1="SELECT * from activities where Name_Act='".$row["Name_Act"]."'";
	$res1=mysqli_query($conn,$qry1);
	while($r1=mysqli_fetch_assoc($res1)){
		$_SESSION["Name_Act"]=$r1["Name_Act"];
		$_SESSION["photoAct"]=$r1["photo"];
		$_SESSION["PriceAct"]=$r1["Price_Act"];
		$_SESSION["typeact"]=$r1["Type_Act"];
		$_SESSION["idact"]=$r1["Id_Act"];
 
	  }
		
echo("<script>location.href = 'paymentactivities.php';</script>");
 }
}
 echo'</div>
  </div>
';

}
echo"</div>";
}
?>
<script type="text/javascript">


</script>


</body>
</html>