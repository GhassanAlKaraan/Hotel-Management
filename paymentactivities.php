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
    height:85vh;

    margin-bottom: 2rem;
    border: 0;
    box-shadow: 0px 0px 8px 0.3px rgba(0,0,0,1);
}

.card-footer{
	margin-Left:55px;
}
input[type=number]{
    width: 40px;
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
<?php

	
echo '<div class="card border-success mb-3" style="max-width: 28rem">
  <div class="card-header bg-transparent border-success"> ';   

echo '<img width="550px" height="490px" src="'.$_SESSION["photoAct"].'"<br>';echo'</div>
  <div class="card-body text-success">';
   
	
	$qrydate="select CheckIn_Date,CheckOut_Date from booking where Id_User='$_SESSION[Id_User]' Limit 1;";
	$resqd=mysqli_query($conn,$qrydate);
	while($qd=mysqli_fetch_assoc($resqd)){
		$_SESSION["checkindatespa"]=$qd["CheckIn_Date"];
		$_SESSION["checkoutdatespa"]=$qd["CheckOut_Date"];
	}
	    $CheckIn_Date=$_SESSION["checkindatespa"];
    $CheckOut_Date=$_SESSION["checkoutdatespa"];
	$chin=strtotime($CheckIn_Date);
	$chout=strtotime($CheckOut_Date);
	$datediff=$chout-$chin;
	$maxdate=round($datediff / (60 * 60 * 24))+1;


if($_SESSION["typeact"]=="Relax" || $_SESSION["typeact"]=="subrelax"){	
echo' <h5 class="card-title">Time:&nbsp;&nbsp;&nbsp;&nbsp;<span style="margin-Left:40px;">Date</span></h5><form action="" method="POST" class="amount" id="my_form"><input type="time" name="time"  id="validationDefaultUsername" required>&nbsp;<input type="date" name="sysdate" min="'.$_SESSION["checkindatespa"].'" max="'.$_SESSION["checkoutdatespa"].'"  id="validationDefaultUsername" required/>&nbsp;<br><br>';
}
else{
echo' <h5 class="card-title"><span style="margin-Left:5px;">StartDate:</span><span style="margin-Left:40px;">EndDate:</span></h5><form action="" method="POST" class="amount" id="my_form">&nbsp;<input type="date" name="sdate" id="fromDatePicker" min="'.$_SESSION["checkindatespa"].'" max="'.$_SESSION["checkoutdatespa"].'" id="validationDefaultUsername" required/>&nbsp;<input type="date" min="'.$_SESSION["checkindatespa"].'"  name="edate" max="'.$_SESSION["checkoutdatespa"].'" id="toDatePicker" id="validationDefaultUsername" required/><br><br>';
}

   
echo'
   <h5 class="card-title">Price:</h5>
 <div class="cost">'.$_SESSION["PriceAct"].'$</div><br>
  <h5 class="card-title">Total:</h5>
 <div class="total"  name="tot">'.$_SESSION["PriceAct"].'

</div>

  <div class="card-footer bg-transparent border-success"><input type="submit" name="orderactivity"   class="button button2" value="Order"/></form></div>
</div>

</div>';?>

<?php
if($_SESSION["typeact"]=="Sport"){
if(isset($_POST["orderactivity"]) && !empty($_POST["sdate"]) && !empty($_POST["edate"])){
	    $day1=$_POST["sdate"];
    $day2=$_POST["edate"];
	$chin=strtotime($day1);
	$chout=strtotime($day2);
	$datediff=$chout-$chin;
	$nb=round($datediff / (60 * 60 * 24));
	$tot=$_SESSION["PriceAct"]*$nb;
	if($nb<=0){
echo "<script>window.alert('Please Enter A valid date');</script>";
		return;
	}
$qryselect="SELECT count(Id_Act) FROM activitiesbooking where Id_Book='$_SESSION[idbook]' AND Id_Act='$_SESSION[idact]';;";
$res=mysqli_query($conn,$qryselect);
$val=mysqli_fetch_array($res);
if($val[0]>"0"){
	
	echo'<div class="modal fade" id="WarningModal" style="text-align:center;" tabindex="-1" role="dialog" aria-labelledby="WarningModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: rgb(255,0,0) ;text-align:center;">
            <div class="modal-header" >
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h4 class="modal-title" id="myModalLabel">Warning!</h4>
            </div>
            <div class="modal-body form-horizontal" id="WarningModalBody">
                <div class="container">
                    <form class="form-horizontal" role="form" >
                        <div class="form-group">
                            <label for="WarningModal" class="col-sm-2 control-label" id="WarningModalLabel"></label>
							Cannot Order Now!!
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
$qry="insert into activitiesbooking(Id_Book,Id_Act,StartDate_AB,EndDate_AB,Time_Act,Price)values('$_SESSION[idbook]','$_SESSION[idact]','$_POST[sdate]','$_POST[edate]','0','$tot');";		
if($conn->query($qry)===TRUE){
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
                        <div class="form-group" style ="font-size=30px;">
                            <label for="WarningModal" class="col-sm-2 control-label" id="WarningModalLabel"></label>
							Registered Sucessfully!!
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
	
}
}
}else{
	if(isset($_POST["orderactivity"]) && !empty($_POST["time"]) && !empty($_POST["sysdate"])){
	
$qryselect="SELECT count(Id_Act) FROM activitiesbooking where Id_Book='$_SESSION[idbook]' AND Id_Act='$_SESSION[idact]';;";
$res=mysqli_query($conn,$qryselect);
$val=mysqli_fetch_array($res);

	 
	$qryavailable="select count(*) from activitiesbooking where Id_Act='$_SESSION[idact]' AND StartDate_AB='$_POST[sysdate]' AND '$_POST[time]' BETWEEN SUBTIME(Time_Act,'5900') AND ADDTIME(Time_Act,'5900');";
	$resaaa=mysqli_query($conn,$qryavailable);
$valaaa=mysqli_fetch_array($resaaa);
if($valaaa[0]=="0"){
	$qryins="insert into activitiesbooking(Id_Book,Id_Act,StartDate_AB,EndDate_AB,Time_Act,Price)values('$_SESSION[idbook]','$_SESSION[idact]','$_POST[sysdate]','$_POST[sysdate]','$_POST[time]','$_SESSION[PriceAct]');";		
if($conn->query($qryins)===TRUE){
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
                        <div class="form-group" style="font-size:25px;">
                            <label for="WarningModal" class="col-sm-2 control-label" id="WarningModalLabel"></label>
							Registered Sucessfully!!
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
}else{

	echo'<div class="modal fade" id="WarningModal" style="text-align:center;" tabindex="-1" role="dialog" aria-labelledby="WarningModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: rgb(255,0,0) ;text-align:center;">
            <div class="modal-header" >
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h4 class="modal-title" style="font-size:45px;"id="myModalLabel">Warning!</h4>
            </div>
            <div class="modal-body form-horizontal" id="WarningModalBody">
                <div class="container">
                    <form class="form-horizontal" role="form" >
                        <div class="form-group" style="font-size:25px;">
                            <label for="WarningModal" class="col-sm-2 control-label" id="WarningModalLabel"></label>
							This room is not available now!!
                        </div>
                    </form>
                </div>
				
            </div>
        </div>
		<div id="circlude" style="margin-Left:140px; margin-top:60px;"> X </div>
    </div>
	
</div>';

	
	
}

}}


?>



<script>


function alertModal(title, body) {
  // Display error message to the user in a modal
  $('#alert-modal-title').html(title);
  $('#alert-modal-body').html(body);
  $('#alert-modal').modal('show');
}


</script>
<script>
$(document).ready(function(){
   $("#my_form").on("submit", function () {
        var hvalue = $('.total').text();
        $(this).append("<input type='hidden' name='tot' value=' " + hvalue + " '/>");
    });
});

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

<script>
var maxdate = '<?php echo $maxdate; ?>';
$('.equipCatValidation').on('keydown keyup change', function(e){
    if ($(this).val() > maxdate
        && e.keyCode !== 46 // keycode for delete
        && e.keyCode !== 8 // keycode for backspace
       ) {
       e.preventDefault();
       $(this).val(maxdate);
    }
});

</script>
<script>

$('.amount > input[type="date"]').on('input', updateTotal);

function updateTotal(e){
  var date1 = new Date(document.getElementById("fromDatePicker").value);
var date2 = new Date(document.getElementById("toDatePicker").value);

var difference = date2 - date1;

var days = difference/(24*3600*1000);


  prompt
  if (!days ||days < 0){
	   var $parentRow = $(e.target).parent().parent();
 var cost = parseFloat($parentRow.find('.cost').text());
  var total = (cost * days).toFixed(2);
  
  $parentRow.find('.total').text(total); $parentRow.find('.total').text(total); return;
  }

	 if (days >29){
		 var $parentRow = $(e.target).parent().parent();
	 var total=(100).toFixed(2); $parentRow.find('.total').text(total);}else{
  var $parentRow = $(e.target).parent().parent();
  var cost = parseFloat($parentRow.find('.cost').text());
  var total = (cost * days).toFixed(2);
  
  $parentRow.find('.total').text(total);
	 }
}
</script>

</script>


</body>

</html>