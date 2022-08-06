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
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link rel="stylesheet" type="text/css" href="style.css">


<link href="bootstrap/js/bootstrap.min.js" rel="stylesheet" media="screen">
<link href="bootstrap/js/bootstrap-modal.js" rel="stylesheet" media="screen">
<link href="bootstrap/js/bootstrap-transition.js" rel="stylesheet" media="screen">
	
<title>Project</title>


<style>

body{
      margin:0 auto;
      width:100%;
    }
.nav-link{
	font-size: 25px; 
	text-decoration: none; 	
	}
	
.img1{

	 background-image: url("home.jpg");
	 z-index: 1;
 background-size: 100% 40%;
 
		     background-repeat: no-repeat;
			
}

.logo{
		 background-image: url("logoHotel.png");
		 text-align:center;
	 width:100%;
	 height:100%;
	 margin-left:570px;
	   background-repeat: no-repeat;
		
}

.nav-link{
	font-size: 30px; 
	text-decoration: none;
color:white; 	
	}

.box {
  width: 100%;
  height: 170px;
  opacity:0.8;
  text-align:center;
  font-size: 16px;
  padding: 40px 40px;
  background: #212129;
 
}

.box1{

	 width: 80%;
  height: 200px;
  margin-left:120px;
  font-size: 16px;
  background: white;
}

.box2{

	 width: 75%;
  height: 180px;
  margin-left:90px;
  font-size: 16px;
  padding: 40px 40px;
  background: #CCCCFF;
}

.box3{

	width: 300px;
height: 200px;
top: 50%;
left: 50%;
margin-left: -150px;
margin-top: -100px;
  background: #CCCCFF;
}

.my-form {
  display: none;
}

.box4{
	text-align:center;
	background:white;
}

.credit-card {
    width: 360px;
    height: 460px;
    margin: 0px auto 0;
    border: 1px solid #ddd;
    border-radius: 6px;
    background-color: #fff;
    box-shadow: 1px 2px 3px 0 rgba(0,0,0,.10);
}

.form-header {
    height: 60px;
    padding: 20px 30px 0;
    border-bottom: 1px solid #e1e8ee;
}
 
.form-body {
    height: 340px;
    padding: 30px 30px 20px;

}

.card-number,
.cvv-input input,
.month select,
.year select {
    font-size: 14px;
    font-weight: 100;
    line-height: 14px;
}
 
.card-number,
.month select,
.year select {
    font-size: 14px;
    font-weight: 100;
    line-height: 14px;
}
 


.card-number {
    width: 100%;
    margin-bottom: 20px;
    padding-left: 20px;
    border: 2px solid #e1e8ee;
    border-radius: 6px;
}

h5{
	margin-left:740px;
	font-size:20px;
}
.cvv-input input {
    float: left;
    width: 145px;
    padding-left: 20px;
    border: 2px solid #e1e8ee;
    border-radius: 6px;
    background: #fff;
}
 
.cvv-details {
    font-size: 12px;
    font-weight: 300;
    line-height: 16px;
    float: right;
    margin-bottom: 20px;
}
 
.cvv-details p {
    margin-top: 6px;
}

.paypal-btn,
.proceed-btn {
    cursor: pointer;
    font-size: 16px;
    width: 100%;
    border-color: transparent;
    border-radius: 6px;
}
 
.proceed-btn {
    margin-bottom: 10px;
    background: #7dc855;
}
 
.paypal-btn a,
.proceed-btn a {
    text-decoration: none;
}
 
.proceed-btn a {
    color: white;
}
 
.paypal-btn a {
    color: rgba(242, 242, 242, .7);
}
 
.paypal-btn {
    padding-right: 95px;
    background: url('paypal-logo.svg') no-repeat 65% 56% #009cde;
}

  background-color: #3498DB;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
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



.btn btn-success{
	margin-Left:20px;
	margin-top:5px;
	
}

h6{
	margin-top:20px;
	margin-Left:220px;
}
.card {
    float: center;
	margin-Left:420px;
    width: 100%;
	height:440px;
    padding: .75rem;
    height:60vh;
    margin-bottom: 2rem;
    border: 0;
	margin-top:50px;
	
    box-shadow: 0px 0px 8px 0.3px rgba(0,0,0,1);
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
h3{
	margin-Left:95px;
}
	
	.dropbtn:hover, .dropbtn:focus {
  background-color: #2980B9;
}

..dropdown {
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

.frame {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 500px;
  height: 500px;
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
 
 .leftab{
	 margin-Left:200px;
 }

table th{
	font-size:18px;
	font-weight:border;
}
table td{
	font-size:16px;
	text-align:center;
}
.button0{
background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
cursor: pointer;}

.boxb {
  width: 100%;
  height: 280px;
  opacity:0.8;
  text-align:center;
  font-size: 16px;
  padding: 40px 40px;
  background: #212129;
 
}
.nav-link1{
	font-size:20px;
	color:white;
}
#map {
            height: 400px;
            width: 400px;
        }

.img2{

	 background-image: url("home.jpg");
	 z-index: 1;
 background-size: 100% 100%;
		     background-repeat: no-repeat;
			
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
  background-color: blue;
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
<div class="topnav">
  <a href="booking.php">Home</a>
  <a href="service.php">Room Service</a>
  <a href="activities.php">Facilities</a>
  <a href="cancel.php" >Cancellation</a>
 
 <a href="#"  style="float:right;" onclick="myFunction()" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php
		  $qry="select Username_User from user where Id_User='$_SESSION[Id_User]';";
$result=mysqli_query($conn,$qry);
$val=mysqli_fetch_array($result);
$words = explode(" ", $val["Username_User"]);
$f=reset($words); 
$l = end($words);
	echo substr($f,0,1);

		echo substr($l,0,1);
?>  </a>   <div id="myDropdown" class="dropdown-content">
           <a href="index.php" onclick="return confirm('Are You sure you want to logout?');" name="logout">Logout</a>
    <a href="#contact" id="myBtn" role="button">MyBooking</a>
	</p>
</div>
 <a href="contact.php" style="float:right;">Contact</a>
</div>
<div class="img1">
<div class="box">	







		

<div class="logo"></div>

</div>
<br><br><br>
<div class="card border-success mb-3" style="max-width: 28rem;">
  <div class="card-header bg-transparent border-success"><?php echo "<h1>" .$_SESSION["Name_TR"]. "</h1>";?></div>
  <div class="card-body text-success">
 <?php echo "<img src='$_SESSION[photosp]'>";
  ?>
</div>
  <div class="card-footer bg-transparent border-success"><?php echo "<h1>".$_SESSION["Price_TR"]."$</h1>";  ?></div>
</div>

</div>
</div>
<div class="box1">
<div class="box2" id="myDiv">
<?php
echo "<table style='width:800px;'><tr><th>Name<th>Room</th><th>Checkin-date</th><th>Checkout-date</th><th>Nights</th><th>Price</th></tr>
<tr><td>".$_SESSION["username"]."</td><td>".$_SESSION["Name_TR"]."</td><td>".$_SESSION["checkin"]."</td><td>".$_SESSION["checkout"]."</td><td>".$_SESSION["nights"]."</td><td>".$_SESSION["Price_TR"]."$"."</td></tr></table>";
echo "<br><h5>Total</h5><h5>".$_SESSION["total"]."$</h5>";
?>

</div>
</div></div>
<br><br><br>
<?php
$qry="select count(*) from booking where Id_User='$_SESSION[Id_User]';";
$result=mysqli_query($conn,$qry);
$val=mysqli_fetch_array($result);
if($val[0]=="0"){
echo '<form class="credit-card" id="form" method="POST" action="">
  <div class="form-header">
    <h2>Credit card detail</h2>
  </div>
 
  <div class="form-body">

	<h4>Card Number:</h4>
    <input type="text" class="card-number" name="creditcard" placeholder="Card Number">
 <h4>Expiration date:</h4>
 
  <input type="date" name="expdate" placeholder="Expiration date"><br><br>
 <h4>CVV:</h4>
    <div class="card-verification">
      <div class="cvv-input">
        <input type="text" name="cvv" placeholder="CVV">
      </div>
      <div class="cvv-details">
        <p>3 or 4 digits usually found <br> on the signature strip</p>
      </div>
    </div>
 
    <!-- Buttons -->
    <button type="submit" class="proceed-btn" name="insertbooking">Submit</button>
  </div>
</form>';
	
}else{

echo '<form action="" method="POST"><h2 style="margin-Left:180px;">Already you have entered the details of credit card <button type="submit"  class="button0" name="alreadybooking">Submit</button></h2></form>';
}
	
	

?>


<?php
 $CheckIn_Date=$_SESSION["checkin"];
    $CheckOut_Date=$_SESSION["checkout"];
$Id_TR=$_SESSION["Id_TR"];
$qry="SELECT Id_Room FROM room WHERE Id_TR=$Id_TR AND Id_Room NOT IN(SELECT Id_Room FROM booking WHERE Id_TR=$Id_TR AND ('$_SESSION[checkin]' <= CheckIn_Date
				AND '$_SESSION[checkout]' >= CheckOut_Date)	)LIMIT 1;";
$res=mysqli_query($conn,$qry);
while($row=mysqli_fetch_assoc($res)){

if(isset($_POST["insertbooking"]) && !empty($_POST["creditcard"]) && !empty($_POST["expdate"]) && !empty($_POST["cvv"])){
	
	$mysql_qry="insert into booking(CheckIn_Date,CheckOut_Date,NbrOfPers,Nights,Id_TR,Id_Room,Id_User,Credit_Card_Number,CVV_credit_card,Expiration_date_credit_card_number) values ('
	$_SESSION[checkin]','$_SESSION[checkout]','$_SESSION[person]','$_SESSION[nights]','$_SESSION[Id_TR]','$row[Id_Room]','$_SESSION[Id_User]','$_POST[creditcard]',
	'$_POST[cvv]','$_POST[expdate]')";

if($conn->query($mysql_qry)===TRUE){
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
							<p style ="font-size=30px;">Registered Sucessfully!!<h3>
                        </div>
                    </form>
                </div>
				
            </div>
        </div>
		<div id="circlude1" style="margin-Left:140px; margin-top:60px;"> ✔ </div>
    </div>
	
</div>';

}
else{
	echo "Error: " .$mysql_qry . "<br>" . $conn->error;
}

$qry1="SELECT max(Id_Book) as total1 from booking;";
$res1=mysqli_query($conn,$qry1);
while($row1=mysqli_fetch_assoc($res1)){

echo $row1["total1"];
//echo $idbook;
$mysql_qry1="insert into payment(Amount_Payment,Id_Book,Code_Type) values ('$_SESSION[total]','$row1[total1]','1')";

if($conn->query($mysql_qry1)===TRUE){
	

}
else{
echo "error";

}
}

echo("<script>location.href = 'booking.php';</script>");
}else if(isset($_POST["alreadybooking"])){
	$sql_queryavailable="SELECT count(*) as total
FROM booking

WHERE  
              (('$CheckIn_Date' <= CheckIn_Date
				AND '$CheckOut_Date' >= CheckOut_Date) OR ('$CheckIn_Date' >= CheckIn_Date
				AND '$CheckOut_Date' <= CheckOut_Date)	OR ('$CheckIn_Date' <= CheckIn_Date
				AND '$CheckOut_Date' >= CheckOut_Date)OR ('$CheckIn_Date' <= CheckOut_Date
				AND '$CheckOut_Date' >= CheckOut_Date) )
				
				AND Id_User='$_SESSION[Id_User]';


";
$resultavailable=mysqli_query($conn,$sql_queryavailable);

$row1=mysqli_fetch_assoc($resultavailable);
	if($row1["total"]!=0){
			echo'<div class="modal fade" id="WarningModal" style="text-align:center;" tabindex="-1" role="dialog" aria-labelledby="WarningModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: rgb(255,0,0) ;text-align:center;">
            <div class="modal-header" >
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h4 style="font-size:45px;"class="modal-title" id="myModalLabel">Warning!</h4>
            </div>
            <div class="modal-body form-horizontal" id="WarningModalBody">
                <div class="container">
                    <form class="form-horizontal" role="form" >
                        <div class="form-group" style="font-size:25px;">
                            <label for="WarningModal" class="col-sm-2 control-label" id="WarningModalLabel"></label>
							Cannot Booking Now!!
                        </div>
                    </form>
                </div>
				
            </div>
        </div>
		<div id="circlude" style="margin-Left:140px; margin-top:60px;"> X </div>
    </div>
	
</div>';
		
	}		
else{
	$qryz="select * from booking where Id_User='$_SESSION[Id_User]';";
	$resz=mysqli_query($conn,$qryz);
	while($rowz=mysqli_fetch_assoc($resz)){
		$qryi="insert into booking(CheckIn_Date,CheckOut_Date,NbrOfPers,Nights,Id_TR,Id_Room,Id_User,Credit_Card_Number,CVV_credit_card,Expiration_date_credit_card_number) values ('
	$_SESSION[checkin]','$_SESSION[checkout]','$_SESSION[person]','$_SESSION[nights]','$_SESSION[Id_TR]','$row[Id_Room]','$_SESSION[Id_User]','$rowz[Credit_Card_Number]',
	'$rowz[CVV_credit_card]','$rowz[Expiration_date_credit_card_number]')";
	}
	if($conn->query($qryi)===TRUE){
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
							<p style ="font-size=30px;">Registered Sucessfully!!<h3>
                        </div>
                    </form>
                </div>
				
            </div>
        </div>
		<div id="circlude1" style="margin-Left:140px; margin-top:60px;"> ✔ </div>
    </div>
	
</div>';

}
else{
	echo "Error: " .$mysql_qry . "<br>" . $conn->error;
}
$qryp="SELECT max(Id_Book) as total1 from booking;";
$resp=mysqli_query($conn,$qryp);
while($rowp=mysqli_fetch_assoc($resp)){

echo $row1["total1"];
//echo $idbook;
$mysql_qryz="insert into payment(Amount_Payment,Id_Book,Code_Type) values ('$_SESSION[total]','$rowp[total1]','1')";

if($conn->query($mysql_qryz)===TRUE){
	echo $row1["total1"];

}
else{
echo "error";

}
	
	
}
	echo("<script>location.href = 'booking.php';</script>");
}
}

}

?>

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

<br>
<br><br>
<div class="img2">
<div class="boxb">
<div class="logo"></div>
<p style="color:white;
margin-top:6px;
		font-size: 26px;
		font-family:impact;">Phone: 71 529 953 &nbsp;
Location: Jbeil,Hboub &nbsp;
Mail: hotelsea@gmail.com</p>
</div>
</div>

</body>
</html>