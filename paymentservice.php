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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<title>Project</title>


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
	margin-Left:400px;
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
  height:50px;

  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 19px;
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
.card {
    float: center;
	margin-Left:420px;
    width: 100%;
	height:550px;
    padding: .75rem;
    height:80vh;
    margin-bottom: 2rem;
    border: 0;
    box-shadow: 0px 0px 8px 0.3px rgba(0,0,0,1);
}

.card-footer{
	margin-Left:55px;
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
</style>

</head>
<body>
<div class="card border-success mb-3" style="max-width: 25rem">
  <div class="card-header bg-transparent border-success">    <?php

echo '<img width="550px" height="460px" src="'.$_SESSION["photomenu"].'"<br>';?></div>
  <div class="card-body text-success">
 
    <h5 class="card-title">Quantity:</h5>
  <form action="" method="POST" class="amount" id="my_form"><input type="number" value="1" class="equipCatValidation" name="quantity" min="1" max="5"><br><br>
   <h5 class="card-title">Price:</h5>
 <div class="cost"><?php echo $_SESSION["PriceItem"];  ?>$</div><br>
  <h5 class="card-title">Total:</h5>
 <div class="total"  name="tot"><?php echo $_SESSION["PriceItem"];
?>
</div>
<?php  ?>
  <div class="card-footer bg-transparent border-success"><input type="submit" name="ordermenu"  id="button button2"class="button button2" value="Order"/></form></div>
</div>

</div>
<script>
$(document).ready(function(){
   $("#my_form").on("submit", function () {
        var hvalue = $('.total').text();
        $(this).append("<input type='hidden' name='tot' value=' " + hvalue + " '/>");
    });
});

</script>
<?php
if(isset($_POST["ordermenu"])){
$_SESSION["total"]=$_SESSION["PriceItem"]*$_POST["quantity"];
$qry="insert into room_service(Date_Room_Service,Time_Room_Service,Cost_Room_Service,Id_Book)values('$_SESSION[date]','$_SESSION[time]','$_SESSION[PriceItem]','$_SESSION[idbook]');";
if($conn->query($qry)===TRUE){
$qry1="SELECT max(Id_Room_Service) as total from room_service;";	
$res1=mysqli_query($conn,$qry1);
while($row1=mysqli_fetch_assoc($res1)){
	$qry2="SELECT Id_Item from menu_item where Name_Item='$_SESSION[Name_Item]';";	
$res2=mysqli_query($conn,$qry2);
while($row2=mysqli_fetch_assoc($res2)){
	
$qry3="insert into room_service_menu_item(Id_Room_Service,Id_Item,Quantity,Price_Room_Service_Menu_Item)values('$row1[total]','$row2[Id_Item]','$_POST[quantity]','$_SESSION[total]');";		
if($conn->query($qry3)===TRUE){
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
                        <div class="form-group" style ="font-size:25px;">
                            <label for="WarningModal" class="col-sm-2 control-label" id="WarningModalLabel"></label>
							Ordered Sucessfully!!!
                        </div>
                    </form>
                </div>
				
            </div>
        </div>
		<div id="circlude1" style="margin-Left:140px; margin-top:60px;"> ✔ </div>
    </div>
	
</div>';
}else{
	echo "Error2";
	
}
$qry4="insert into payment_room_service(Amount_room_service,Code_Type,Id_Book)values('$_SESSION[total]',1,'$_SESSION[idbook]');";
if($conn->query($qry4)===TRUE){
	
}else{
	echo "Error2";
	
}
}
}
}else{
	echo "Error1";
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

<script>
$('.equipCatValidation').on('keydown keyup change', function(e){
    if ($(this).val() > 5 
        && e.keyCode !== 46 // keycode for delete
        && e.keyCode !== 8 // keycode for backspace
       ) {
       e.preventDefault();
       $(this).val(5);
    }
});

</script>
<script>

$('.amount > input[type="number"]').on('input', updateTotal);

function updateTotal(e){
  var amount = parseInt(e.target.value);
  
  if (!amount || amount < 0)
    return;
    
  var $parentRow = $(e.target).parent().parent();
  var cost = parseFloat($parentRow.find('.cost').text());
  var total = (cost * amount).toFixed(2);

  $parentRow.find('.total').text(total);
  
    
}

</script>


</body>

</html>
