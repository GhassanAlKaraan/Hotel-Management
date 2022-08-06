<?php session_start();
require "connection.php";?>
<!DOCTYPE.html>
<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://www.w3schools.com/lib/w3.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
		


<title>Project</title>
<style>
@import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap");
h5{
	font-family:fantasy;
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
	font-size:25px;
	color:white;
}

.nav-link active{
	margin-Left:300px;
	padding:60px;
}
.nav-item rounded{
	margin-Left:300px;
}
.box{
	

background-color:white;
width:900px;
height:500px;
margin-Left:250px;
margin-Top:150px;
}

.float{
	margin-Left:520px;
}

.button3{
	
  background-color: #4CAF50; /* Green */
  border: none;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
margin-Left:300px;
}

.button3:hover{
	 background-color: white; /* Green */
}

.alert {
  padding: 20px;
  background-color: #ffc107;
  color: white;
}

.frame {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 400px;
  height: 400px;
  margin-top: -200px;
  margin-left: -200px;
  border-radius: 2px;
  box-shadow: 1px 2px 10px 0px rgba(0,0,0,0.3);
	overflow: hidden;
  background: black;
  color: #415868;
	font-family: 'Open Sans', Helvetica, sans-serif;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
}

.modal {
  position: absolute;
	width: 390px;
	height: 390px;
	margin-Left:380px;
  top: 95px;
  left: 60px;
	background: #fff;
	border-radius: 3px;
	box-shadow: 4px 8px 12px 0 rgba(0,0,0,0.4);
	text-align: center;
	overflow: hidden;
	animation: show-modal .7s ease-in-out;
	
	&.hide {
		animation: hide-modal .6s ease-in-out both;
	}
	
	img {
		margin-top: 24px;
	}
	
	.title {
		display: block;
		font-size: 18px;
		line-height: 24px;
		font-weight: 400;
		margin: 14px 0 5px 0;
	}
	
	p {
		font-size: 14px;
		font-weight: 300;
		line-height: 19px;
		margin: 0;
		padding: 0 30px;
	}
	
	.button {
		position: absolute;
		height: 40px;
		bottom: 0;
		left: 0;
		right: 0;
		background: #F65656;
		color: #fff;
		line-height: 40px;
		font-size: 14px;
		font-weight: 400;
		cursor: pointer;
		transition: background .3s ease-in-out;
		
		&:hover {
			background: #EC3434;
		}
		
	}
	
}

@keyframes show-modal {
	0% {
		transform: scale(0);
	}
	60% {
		transform: scale(1.1);
	}
	80% {
		transform: scale(.95);
	}
	100% {
		transform: scale(1);
	}
}

@keyframes hide-modal {
	0% {
		transform: scale(1);
	}
	20% {
		transform: scale(1.1);
	}
	100% {
		transform: scale(0);
	}
}
#circlude {
   width: 100px;
   height: 100px;
   background-color: red;
   border-radius: 50%;
   color: white;
   font-weight: bold;
   text-align: center;
   font-size: 72px;
   font-family: calibri; /* Pick the font that works for you */
   line-height: 100px;
   border: solid 4px white;
 }
 #circlude1 {
   width: 100px;
   height: 100px;
   background-color: green;
   border-radius: 50%;
   color: white;
   font-weight: bold;
   text-align: center;
   font-size: 72px;
   font-family: calibri; /* Pick the font that works for you */
   line-height: 100px;
   border: solid 4px white;
 }
 body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
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
?></a>
 <a href="contact.php" style="float:right;">Contact</a>
</div>


<?php

$qryid="select * from booking where Id_User='$_SESSION[Id_User]' Limit 1  OFFSET 0 ;";
$resultb=mysqli_query($conn,$qryid);
while($valb=mysqli_fetch_array($resultb)){
	$_SESSION["Checkin"]=$valb["CheckIn_Date"];
	$_SESSION["Checkout"]=$valb["CheckOut_Date"];
	$_SESSION["night"]=$valb["Nights"];
	$_SESSION["idroom"]=$valb["Id_TR"];
	$_SESSION["nbrpers"]=$valb["NbrOfPers"];
	$_SESSION["idbooking"]=$valb["Id_Book"];
}
$qryroom="select Name_TR from typeofroom where Id_TR='$_SESSION[idroom]';";
$resultro=mysqli_query($conn,$qryroom);
while($valro=mysqli_fetch_array($resultro)){
	$_SESSION["nametyperoom"]=$valro["Name_TR"];
}


?>


<div class="box">
<h5>Reservation:<span class="float"><?php echo ''.$_SESSION["night"].' Nights/'.$_SESSION["nametyperoom"] ?></span><hr>
You Booked for:<span class="float"><?php echo $_SESSION['nbrpers'].' Persons'; ?></span><hr>
<h5>CheckIn:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="float"><?php  echo $_SESSION["Checkin"];  ?></span><hr>
<h5>CheckOut:&nbsp;&nbsp;&nbsp;&nbsp;<span class="float"><?php  echo $_SESSION["Checkout"];  ?></span><hr>
<h5>CancellationCost:<span class="float">15 $</span><br></h5>
<br>
<div class="alert">

  <strong>Warning!</strong> You can't cancel your booking after checkIn Date!
</div>
<form action="" method="POST">
<button class="button3" type="submit" name="butn" class="btn btn-success">Cancel your booking</button>
</form>
</div>

<?php
if(isset($_POST["butn"])){
	date_default_timezone_set('Asia/Beirut');
$date = date('Y-m-d');
	if($date<$_SESSION["Checkin"]){
	$tables = array("payment","booking");
foreach($tables as $table) {
  $query1 = "DELETE FROM $table WHERE Id_Book='$_SESSION[idbooking]';";
  mysqli_query($conn,$query1);
}
if($conn->query($query1)===TRUE){
		echo'<div class="modal fade" id="WarningModal" style="text-align:center;" tabindex="-1" role="dialog" aria-labelledby="WarningModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: rgb(0,255,0) ;text-align:center;">
            <div class="modal-header" >
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h4 class="modal-title" id="myModalLabel"></h4>
            </div>
            <div class="modal-body form-horizontal" id="WarningModalBody">
                <div class="container">
                    <form class="form-horizontal" role="form" >
                        <div class="form-group">
                            <label for="WarningModal" class="col-sm-2 control-label" id="WarningModalLabel"></label>
							<p style ="font-size=30px;">Cancellation Sucessfully!!<h3>
                        </div>
                    </form>
                </div>
				
            </div>
        </div>
		<div id="circlude1" style="margin-Left:140px; margin-top:60px;"> ✔ </div>
    </div>
	
</div>';
}
	}else{
			echo'<div class="modal fade" id="WarningModal" style="text-align:center;" tabindex="-1" role="dialog" aria-labelledby="WarningModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: rgb(255,0,0) ;text-align:center;">
            <div class="modal-header" >
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h4 class="modal-title" style="font-size:45px;" id="myModalLabel">Warning!</h4>
            </div>
            <div class="modal-body form-horizontal" id="WarningModalBody">
                <div class="container">
                    <form class="form-horizontal" role="form" >
                        <div class="form-group" style="font-size:25px;">
                            <label for="WarningModal" class="col-sm-2 control-label" id="WarningModalLabel"></label>
							Cannot Cancel Now!!
                        </div>
                    </form>
                </div>
				
            </div>
        </div>
		<div id="circlude" style="margin-Left:140px; margin-top:60px;"> X </div>
    </div>
	
</div>';
	}
	

	
}

?>
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.nav-link1')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
<script>
// Get the modal
var modal = document.getElementById("WarningModal");



// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];


// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</body>
</html>
