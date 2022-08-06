<?php session_start();
require "connection.php";?>

<html lang="en"><head>
<title>Project</title>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Project</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
@import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap");
.contact-parent{
    background: #fff;
    display:flex;
    margin:80px 0;
}
.contact-child{
    display:flex;
    flex:1;
    box-shadow:0px 0px 10px -2px rgba(0,0,0,0.75);
}
.child1{
    background:linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url("https://cdn.pixabay.com/photo/2019/06/28/00/17/architecture-4303279_1280.jpg");
    background-size:cover;
    display:flex;
    flex-direction:column;
    justify-content:space-around;
    color:#fff;
    padding:100px 0;
}
.child1{
    background:linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url("https://cdn.pixabay.com/photo/2019/06/28/00/17/architecture-4303279_1280.jpg");
    background-size:cover;
    display:flex;
    flex-direction:column;
    justify-content:space-around;
    color:#fff;
    padding:100px 0;
}
.child2{
    flex-direction:column;
    justify-content:space-around;
    align-items:center;
}
.inside-contact{
    width:90%;
    margin:0 auto;
}
 
.inside-contact h2{
    text-transform:uppercase;
    text-align:center;
    margin-top:50px;
}
 
.inside-contact h3{
    text-align:center;
    font-size:16px;
    color:#0085e2;
}
.inside-contact input, .inside-contact textarea{
    width:100%;
    background-color:#eee;
    border:1px solid rgba(0,0,0,0.48);
    padding:5px 10px;
    margin-bottom:20px;
}

.inside-contact input[type=submit]:hover{
    background-color:#fff;
    color:#000;
    transition:0.2s;
}
@media screen and (max-width:991px){
    .contact-parent{
        display:block;
        width:100%;
    }
 
    .child1{
        display:none;
    }
 
    .child2{
        background-image:linear-gradient(rgba(255,255,255,0.7),rgba(255,255,255,0.7)), url("https://cdn.pixabay.com/photo/2019/06/28/00/17/architecture-4303279_1280.jpg");
        background-size:cover;
    }
 
    .inside-contact input, .inside-contact textarea{
        background-color:#fff;
    }
}

span{
	margin-Left:120px;
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
<div class="container">
   <div class="contact-parent">
      <div class="contact-child child1">
         <p>
            <i class="fas fa-map-marker-alt"></i><span> Address</span> <br />
            <span> Jbeil Hboub
            <br />
            
            </span>
         </p>
         <p>
            <i class="fas fa-phone-alt"></i><span> Let's Talk </span><br />
            <span> 71 529 953</span>
         </p>
         <p>
            <i class=" far fa-envelope"></i><span>General Support</span> <br />
            <span>hotelsea@gmail.com</span>
         </p>
      </div>
      <div class="contact-child child2">
         <div class="inside-contact">
            <h2>Contact Us</h2>
            <h3>
               <span id="confirm">
            </h3>
			<form action ="" method="POST" autocomplete="off">
            <p>Name *</p>
            <input name="name" id="txt_name" type="text" class="custom-validated-form" id="validationDefaultUsername" required
            <p>Email *</p>
            <input id="txt_email" name="email" type="text"  id="validationDefaultUsername" required>
            <p>Phone *</p>
            <input id="txt_phone" name="phone" type="text"  id="validationDefaultUsername" required>
            <p>Subject *</p>
            <input id="txt_subject" name="subject" type="text"  id="validationDefaultUsername" required>
            <p>Message *</p>
            <textarea id="txt_message" name="message" rows="4" cols="20" Required="required" ></textarea>
            <input type="submit"  name="btn" id="btn_send" value="SEND">
			</form>
         </div>
      </div>
   </div>
</div>

<?php
if (isset($_POST["btn"])){
	if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["phone"]) && isset($_POST["subject"]) && isset($_POST["message"])){
	$name=mysqli_real_escape_string($conn,$_POST["name"]);
$email=mysqli_real_escape_string($conn,$_POST["email"]);
$phone=mysqli_real_escape_string($conn,$_POST["phone"]);
$subject=mysqli_real_escape_string($conn,$_POST["subject"]);
$message=mysqli_real_escape_string($conn,$_POST["message"]);
$name=htmlspecialchars($name);
$email=htmlspecialchars($email);
$phone=htmlspecialchars($phone);
$subject=htmlspecialchars($subject);
$message=htmlspecialchars($message);

$qryi="insert into contact(Name_contact,Email_contact,Phone_contact,Subject_contact,Message_contact) values ('$name','$email','$phone','$subject','$message')";
	
	if($conn->query($qryi)===TRUE){
	echo "<script>window.alert('Booking is successfully submitted!');</script>";
		
		
	}else{
	echo "Error: " .$qryi . "<br>" . $conn->error;
}
	
	}
}


?>
<script>
$('.custom-validated-form').submit(function(event) {

  required:"dfdfdfdf";

    event.preventDefault()
})


</script>
</body>
</html>