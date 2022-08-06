<?php session_start();
require "connection.php";
$qrye="select count(*) from booking where Id_User='$_SESSION[Id_User]' Limit 1;";
$resulte=mysqli_query($conn,$qrye);
$val=mysqli_fetch_array($resulte);
if($val[0]=="0"){
	header("location:booking.php");
}else{
	
}

?>
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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<title>Project</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
@import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap");
.img1{

	 background-image: url("service.jpg");
	 z-index: 1;
	 width:100%;
	 height:90%;
 background-size: 100% 100%;
		     background-repeat: no-repeat;
			
}


.box {
  width: 100%;
  height: 200px;
  opacity:0.8;
  font-size: 16px;
  
  background: #212129;
 
}

h2{
	color:white;
}

h3{
	color:white;
	margin-Left:600px;
}

.box1{

	 width: 80%;
  height: 100px;
  margin-left:120px;
  margin-top:370px;
  font-size: 16px;
  padding: 5px 5px;
  background: white;
}#hide { opacity: 0; }
#hide:target {opacity: 1;}
#hide1 { opacity: 0; }
#hide1:target {opacity: 1;}
#hide2 { opacity: 0; }
#hide2:target {opacity: 1;}

#container{
	margin-top:470px;
}
.content:not(:first-child) {
    display: none;
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
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  width:220px;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 34px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}
.button2{
 background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}
.button2:hover {
  background-color: #008CBA;
  color: white;
}
.tab{
     Padding-left:670px;
}

.boxbutton{
	
 width: 100%;
  height: 100px;
  opacity:0.8;
  font-size: 16px;
  text-align:center;
  background: white;
 
}

.rightimage{
	float:right;
}
	
}
</style>

</head>
<body>

<div class="img1">
<div class="box">

<?php 
$qry="select Id_Room,Id_Book from booking where Id_User='$_SESSION[Id_User]' Limit 1  OFFSET 0 ;";
$result=mysqli_query($conn,$qry);
while($val=mysqli_fetch_array($result)){
	$_SESSION["idbook"]=$val["Id_Book"];
$qry1="select * from room where Id_Room='$val[Id_Room]'";
$result1=mysqli_query($conn,$qry1);
while($val1=mysqli_fetch_array($result1)){
echo "<img src='logo5.png' style='float:left;'>";	
echo"<h2>Welcome Mr.".$_SESSION["username"]."</h2>"; 
echo "<h2>".$val1["Name_Room"].""."</h2>";
}
}

date_default_timezone_set('Asia/Beirut');
$date = date('Y-m-d');
$time = date('h:i:s');
echo "<h3>Date:".$date."</h3>";
echo "<h3>Time:".$time."</h3>";
$_SESSION["date"]=$date;
$_SESSION["time"]=$time;
?>
</div>


	<div id="container">
	


<!-- Menu -->
<div id="menu" style="background-color:#212129;" >
<h1  style="color:white;text-align:center;" >THE MENU</h1>
<form action="" method="POST">
<div class="boxbutton">

<div class="selectSection">
<?php
$i=1;
$qry="select Type_Item,min(Id_Item) from menu_item group by Type_Item;";
$result=mysqli_query($conn,$qry);
while($val=mysqli_fetch_array($result)){
echo $out='<button type="button" data-number="'.$i++.'" id="button button2"class="button button2">'.$val["Type_Item"].'</button>';
}
 ?>
</div>

</div>
</form>
<div class="contentSection">
<?php
$i=1;
$qry1="select Type_Item,min(Id_Item) from menu_item group by Type_Item;";
$result1=mysqli_query($conn,$qry1);
while($v=mysqli_fetch_array($result1)){
	
	echo '<div class="content" data-number="'.$i++.'">';
$qryr="select *  from menu_item where Type_Item='".$v["Type_Item"]."';";
$resultr=mysqli_query($conn,$qryr);
	echo'<h1 id="pasta"  style="color:white;font-size:55px;text-align:center;">'.$v["Type_Item"].'</h1><div id="pizza" class="w3-container w3-white w3-padding-32">';
while($valr=mysqli_fetch_array($resultr)){
	
	   $output = '<input type="submit" name="'.$valr["Name_Item"].'" id="delete-btn"class="button button2" class="delete-button" value="Order"/>';
echo '<h1 style="color:#008CBA;; font-size:55px;"><b>'.$valr["Name_Item"].'</b> <span class="rightimage"><img width="450px" height="290px" src='.$valr["photo"].'></span></h1>
<p style="color:black;font-size:45px;">'.$valr["Desc_Item"].'</p>
<p style="color:black;font-size:45px;"><b>'.$valr["Price_Item"].'$</b></p><form method="POST">'.$output.'</form><br>
<hr>';


		


   if(isset($_POST[$valr["Name_Item"]])){
	   $data="SELECT * from booking where ('$date'>=CheckIn_Date AND '$date'<=CheckOut_Date) And Id_Book='$_SESSION[idbook]';";
	   $resdata=mysqli_query($conn,$data);

if(mysqli_num_rows($resdata)>0){
	  $qry1="SELECT * from menu_item where Name_Item='".$valr["Name_Item"]."'";
	$res1=mysqli_query($conn,$qry1);
	while($r1=mysqli_fetch_assoc($res1)){
		$_SESSION["Name_Item"]=$r1["Name_Item"];
		$_SESSION["photomenu"]=$r1["photo"];
		$_SESSION["PriceItem"]=$r1["Price_Item"];
 
	  }
		
echo("<script>location.href = 'paymentservice.php';</script>");
 }else{
	 echo "<script>window.alert('Cannot Order Now!!');</script>";
 }
   }
   
}

echo'</div>
</div>';
}
echo '</div></div>';
?>


  


<script>
$(document).ready(function(){
  $('.delete-button').click(function(){
    $('#delete-modal').modal('show');
  });
  $('.delete-comment,.close').click(function(e){
    e.preventDefault();
    $('#delete-modal').modal('hide');
  })

})


</script>

<script>
let Buttons = document.querySelectorAll(".selectSection button");

// loop through the buttons using for..of 
for (let button of Buttons) {

 // listen for a click event 
 button.addEventListener('click', (e) => {
  // Store the event target in a const
  const et = e.target;

  // select active class
  const active = document.querySelector(".active");

  /* when a button is clicked, remove the active class 
from the button that has it */
  if (active) {
    active.classList.remove("active");
   }

  // Add active class to the clicked element
  et.classList.add("active");

  // select all classes with the name content
  let allContent = document.querySelectorAll('.content');

  // loop through all content classes
  for (let content of allContent) {

    /* display the content if the value in the data attribute of the button and content are the same */
    if(content.getAttribute('data-number') === button.getAttribute('data-number')) {
      content.style.display = "block";
     }

     // if it's not equal then hide it.
     else {
        content.style.display = "none";
      }
    }
 });
}

</script>
</body>
</html>

