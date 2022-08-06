<?php
require "connection.php";
session_start();

$qryb="select Id_Book from booking where Id_User='$_SESSION[Id_User]' Limit 1  OFFSET 0 ;";
$resultb=mysqli_query($conn,$qryb);
while($valb=mysqli_fetch_array($resultb)){
	$_SESSION["idbook"]=$valb["Id_Book"];
}
date_default_timezone_set('Asia/Beirut');
$date = date('Y-m-d');
$querydate="Select Id_Book from booking where '$date'>CheckOut_date Limit 1;";
$resultdate=mysqli_query($conn,$querydate);
while($vald=mysqli_fetch_array($resultdate)){
	$queryselect="SELECT Id_Room_Service FROM room_service where Id_Book='$vald[Id_Book]';";
	 $ress=mysqli_query($conn,$queryselect);
while($vals=mysqli_fetch_array($ress)){
	$querys = "DELETE FROM room_service_menu_item WHERE Id_Room_Service='$vals[Id_Room_Service]';";
  mysqli_query($conn,$querys);
}

$tables = array("room_service_menu_item","room_service","payment","payment_room_service","booking");
foreach($tables as $table) {
  $query1 = "DELETE FROM $table WHERE Id_Book='$vald[Id_Book]';";
  mysqli_query($conn,$query1);
}
	
}



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
	
	label{
		margin-left:45px;
	}
	
	h2{
		color:white;
		font-family:impact;
		text-align:center;
		font-size: 56px;
		
		margim-top:290px;
	}
	
	h4{
		color:white;
		text-align:center;
		font-size: 23px;
		font-family:fantazy;
	
		margim-top:390px;
	}
	
	.box {
  width: 100%;
  height: 310px;
  opacity:0.8;
  text-align:center;
  font-size: 16px;
  
  background: #212129;
 
}
.boxb {
  width: 100%;
  height: 340px;
  opacity:0.8;
  text-align:center;
  font-size: 16px;
  padding: 40px 40px;
  background: #212129;
 
}

#map {
            height: 400px;
            width: 400px;
        }

.img1{

	 background-image: url("home.jpg");
	 z-index: 1;
 background-size: 100% 100%;
		     background-repeat: no-repeat;
			
}

.img2{

	 background-image: url("flag.jpg");
	 background-repeat: no-repeat;
	  background-size: 3000px 5000px;

	
}

.img3{
	margin-top:1px;
}

.logo{
		 background-image: url("logoHotel.png");
		
	 width:100%;
	 height:100%;
  display: flex;
    background-position: center;
	   background-repeat: no-repeat;
		
}

.logo1{
		 background-image: url("logoHotel.png");
		 text-align:center;
	 width:100%;
	 height:100%;
	 margin-left:570px;

	   background-repeat: no-repeat;
		
}

h3{
	color:white;
		
		font-size: 26px;
		font-family:impact;
		margim-top:290px;	
}

p{
	color:black;
		margin-left:10px;
		font-size: 26px;
		font-family:impact;
			
}

.box1{

	 width: 80%;
  height: 100px;
  margin-left:120px;
  font-size: 16px;
  padding: 40px 40px;
  background: white;
}
.box2{

	 width: 10%;
  height: 5px;
  text-align:center;
  margim-top:2px;
  color:white;
  margin-left:620px;
  font-size: 16px;
  padding: 20px 20px 20px 20px;
  background:#008CBA;
}

.box3 {
  width: 100%;
  height: 340px;
  opacity:0.8;
  font-size: 16px;
  padding: 40px 40px;
  background: #0F044C;
 
}

.column{

	 float: left;
  width: 50%;
  padding: 10px;

}
.row:after {
  content: "";
  display: table;
  clear: both;
}
p{
	font-family:impact;
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
  min-width: 100px;
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



.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}



.navbar-nav .nav-item:hover {
  background-color: rgba(180, 190, 203, 0.4);
}


.button {
  background-color:#008CBA;
width:80px;
color:white;
height:40px;
border:2px #008CBA;
}
 input[type=date]{
    width: 150px;
}


</style>

</head>
<body>
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
<form action ="" method="POST" autocomplete="off">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
	
<div class="img1">
<div class="box">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
  
    <a class="nav-link active" aria-current="page" href="booking.php"><i class="bi bi-house-fill me-2"></i>Home</a>
        <a class="nav-link active" aria-current="page" href="service.php"><i class="bi bi-house-fill me-2"></i>Room Service</a>
 <a class="nav-link active" aria-current="page" href="activities.php"><i class="bi bi-house-fill me-2"></i>Facilities</a>	
 <a class="nav-link active" name="Cancellation" href="cancel.php">Cancellation</a> 
	
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-md-auto gap-2">
	 
       
        <li class="nav-item rounded">
          <a class="nav-link" href="contact.php"><i class="bi bi-telephone-fill me-2"></i>Contact</a>
        </li>
<li class="dropdown user user-menu">
          <a class="nav-link dropdown-toggle" onclick="myFunction()" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person-fill me-2"></i><?php
		  $qry="select Username_User from user where Id_User='$_SESSION[Id_User]';";
$result=mysqli_query($conn,$qry);
$val=mysqli_fetch_array($result);
$words = explode(" ", $val["Username_User"]);
$f=reset($words); 
$l = end($words);
	echo substr($f,0,1);

		echo substr($l,0,1);
?></a>
		   <div id="myDropdown" class="dropdown-content">
         
           <a href="index.php" onclick="return confirm('Are You sure you want to logout?');" name="logout">Logout</a>
    <a href="#contact" id="myBtn" role="button">MyBooking</a>
</div>
        
        </li>
      </ul>
    </div>
  </div>
</nav>

</form>


<div class="logo"></div>


</div>
<br><br>
<h2>Welcome To The HotelSea</h2><br><br>

<br><br>
<div class="box2">Book now
</div>
<form action ="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" autocomplete="off">
<div class="box1">
<label>CheckIn:</label>

  <input type="date" placeholder="CheckIn" class="custom-validated-form" name="checkin"  id="validationDefaultUsername" required>
  <label>CheckOut:</label>
  <input type="date" placeholder="CheckOut" name="checkout"  id="validationDefaultUsername" required>
   <label>Number Of Persons:</label>
  <input type="number" placeholder="0" class="equipCatValidation" min="1" max="4" name="person"  id="validationDefaultUsername" required>
<input type="submit" value="search" class="button" name="typeroom">
 

  <?php if(isset($_POST["typeroom"]) && !empty($_POST["checkin"]) && !empty($_POST["checkout"]) && !empty($_POST["person"])){
	$_SESSION["checkin"]=$_POST["checkin"];
	$_SESSION["checkout"]=$_POST["checkout"];
	$_SESSION["person"]=$_POST["person"];
	 if($_POST["checkin"] >= $_POST["checkout"]){
	echo'<div style="color:red;">Checkin-date greater than to CheckOut-date!</div>';
	
}else if($_POST["checkin"] <= date("Y-m-d")){
	echo'<div style="color:red;">Checkin-date less than to the current date</div>';
	

}
	else{
echo("<script>location.href = 'room.php';</script>");
}
	
}?>
</div>
</form>

<script>
$('.custom-validated-form').submit(function(event) {

  required:"dfdfdfdf";

    event.preventDefault()
})


</script>

<script>
$('.equipCatValidation').on('keydown keyup change', function(e){
    if ($(this).val() > 4 
        && e.keyCode !== 46 // keycode for delete
        && e.keyCode !== 8 // keycode for backspace
       ) {
       e.preventDefault();
       $(this).val(4);
    }
});

</script>

<br><br><br>
</div>


<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
<?php

$query="Select * from booking where Id_User='$_SESSION[Id_User];'";
$result=mysqli_query($conn,$query);

if(mysqli_num_rows($result)>0){

	while($row=mysqli_fetch_array($result)){
	$query1="Select * from user where Id_User='$_SESSION[Id_User];'";
$result1=mysqli_query($conn,$query1);	
while($row1=mysqli_fetch_array($result1)){
$query2="Select * from typeofroom where Id_TR='$row[Id_TR];'";
$result2=mysqli_query($conn,$query2);	
while($row2=mysqli_fetch_array($result2)){		
$_SESSION["total1"]=$row2["Price_TR"]*$row["Nights"];
echo "<table style='width:800px;'><tr><th>Name<th>Room</th><th>Checkin-date</th><th>Checkout-date</th><th>Nights</th><th>Price</th><th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Total</tr>
<tr><td>".$row1["Username_User"]."</td><td>".$row2["Name_TR"]."</td><td>".$row["CheckIn_Date"]."</td><td>".$row["CheckOut_Date"]."</td><td>".$row["Nights"]."</td><td>".$row2["Price_TR"]."$"."</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$_SESSION["total1"]."$"."</td></tr></table>";

		
	}
}
	
	}
}


else{
	echo "no booking";
}

?>

  </div>

</div>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

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
<form action ="" method="POST" autocomplete="off">
<div class="row">
<div class="column">
<p>Location:<p>
<div><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31419.973789168806!2d35.659584786798526!3d34.13053016643135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151f5b68ebae5db5%3A0xca61dd269c6441f6!2sHboub!5e0!3m2!1sen!2slb!4v1651307292277!5m2!1sen!2slb" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
</div>
<div class="column">
<p>Hotel:<p>
<p>Come alone or bring your family with you,stay here<br>
for a night or for a weeks,stay here while on a business<br>
or a some kind of conference-either way our hotel is the best<br>
possible variant.Feel free to contact us anytime in case you have any questions or concerns.We're always glade to see you in our hotel.<br>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
  <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
</svg><i class="bi bi-check2">4 stars</i><br>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
  <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
</svg><i class="bi bi-check2">Jbeil-Hboub</i><br>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
  <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
</svg><i class="bi bi-check2">Phone: 71 529 953</i></p>
</div>
</div>
</form>

<div class="img1">
<div class="boxb">
<div class="logo1"></div>
<h3>Phone: 71 529 953 &nbsp;
Location: Jbeil,Hboub &nbsp;
Mail: hotelsea@gmail.com</h3>
</div>
</div>




		</body>
		
		</html>