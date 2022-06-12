0<?php 

//session_start();

//connection
   include('connection.php');

?>

<!---->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- -->

<!DOCTYPE.html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">


<style>
 html, body {
      display: flex;
      justify-content: center;
      height: 100%;
      }
      body, div, h1, form, input, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 16px;
      color: #666;
      }
	  
	  body{
background-image:url(hotel2.jpg),url(logoHotel.png);
	   background-position: center;
  background-repeat: no-repeat;
 background-size: 100% 100%
}


		
      h1 {
      padding: 10px 0;
      font-size: 32px;
      font-weight: 300;
      text-align: center;
      }
      p {
      font-size: 12px;
      }
      hr {
      color: #a9a9a9;
      opacity: 0.3;
      }
      .main-block {
      max-width: 440px; 
      min-height: 300px; 
      padding: 10px 0;
      margin: auto;
	  opacity:0.9;
      border-radius: 5px; 
      border: solid 1px #ccc;
      box-shadow: 1px 2px 5px rgba(0,0,0,.31); 
      background: #ebebeb; 
      }
      form {
      margin: 0 30px;
      }
      .account-type, .gender {
      margin: 15px 0;
      }
      input[type=radio] {
      display: none;
      }
      label#icon {
      margin: 0;
      border-radius: 5px 0 0 5px;
      }
      label.radio {
      position: relative;
      display: inline-block;
      padding-top: 4px;
      margin-right: 20px;
      text-indent: 30px;
      overflow: visible;
      cursor: pointer;
      }
      label.radio:before {
      content: "";
      position: absolute;
      top: 2px;
      left: 0;
      width: 20px;
      height: 20px;
      border-radius: 50%;
      background: #1c87c9;
      }
      label.radio:after {
      content: "";
      position: absolute;
      width: 9px;
      height: 4px;
      top: 8px;
      left: 4px;
      border: 3px solid #fff;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
      }
      input[type=text], input[type=password] {
      width: calc(100% - 57px);
      height: 36px;
      margin: 13px 7 7 -5px;
      padding-left: 10px; 
      border-radius: 0 5px 5px 0;
      border: solid 1px #cbc9c9; 
      box-shadow: 1px 2px 5px rgba(0,0,0,.09); 
      background: #fff; 
      }/*
      input[type=password] {
      margin-bottom: 0px;
      }
	  */
      #icon {
      display: inline-block;
      padding: 9.3px 15px;
      box-shadow: 1px 2px 5px rgba(0,0,0,.09); 
      background: #1c87c9;
      color: #fff;
      text-align: center;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 75%;
      padding: 10px 0;
      margin: 15px auto;
      border-radius: 5px; 
      border: none;
      background: #1c87c9; 
      font-size: 14px;
      font-weight: 600;
      color: #fff;
      }
      button:hover {
      background: #26a9e0;
      }
	  
	  
	  .btnlogin {
      width: 30%;
      padding: 10px 0;
      margin: 10px auto;
      border-radius: 5px; 
      border: none;
      background: #aaa; 
      font-size: 14px;
      font-weight: 600;
      color: #fff;
      }
	  
	  .rederror{
	background: rgba(255, 0, 0, 0.4);
		  color:red;
		  text-size:4vw;
		  font-weight:bold;
	  }
 
</style>
</head>
<body>

<div class="main-block">
<div class="logofloat">
<img src="logoHotel.png" width="85px" height="70px" style="margin-Left:178px;"/></div>
<h1><b>Welcome to HotelSea</b><br>Please Log-in </h1>

<form action ="<?php echo $_SERVER["PHP_SELF"];?>" method="POST" autocomplete="on">

        <hr>
		<label id="icon" for="name"><i class="fas fa-user"></i></label>
        <input type="text" autocomplete="aus" id="email" name="email" placeholder="Email Address"   required/>
		
        <label id="icon" for="name"><i class="fas fa-unlock-alt"></i></label>
        <input type="password" id="password" name="password" autocomplete="new-password" placeholder="Password" required/>
        
		<div style="margin-bottom:5px"><p> </p> </div>
		
		<!--signup button-->
        <div class="btn-block">
          <button type="submit" name="login">Login</button>
		  <div><p>
		  <a href="login-system-main/recover_psw.php" class="btn btn-link">
            Forgot Your Password?
          </a></p>
		  </div>
        </div>
       
	    <hr>		
		<!-- signup? -->
		<div class="btn-block">
                <p>New to our website?  <a href="signup.php"> Sign-Up</a></p>
		</div>
</form>


</body>
</html>

<?php
    if(isset($_POST["login"])){
		$email = mysqli_real_escape_string($conn, trim($_POST['email']));
		$password = trim($_POST['password']);
		
		$email=htmlspecialchars($email);
		$password=htmlspecialchars($password);
		
		
		$_SESSION["email"]=$_POST["email"];
	$res=mysqli_query($conn,'select count(*) from user where Email_User="'.$email.'" and Password_User="'.$password.'"');
	$res1=mysqli_query($conn,'select Id_User from user where Email_User="'.$email.'" and Password_User="'.$password.'"');
	$sqlstatus=mysqli_query($conn,'select status from user where Email_User="'.$email.'" and Password_User="'.$password.'"');
	$val=mysqli_fetch_array($res);
	//var_dump($val);

		$sql = mysqli_query($conn, "SELECT * FROM user where Email_User = '$email'");
        $count = mysqli_num_rows($sql);
	

if (empty($email) && empty($password)){
		echo '<div class="rederror">Please fill out the fields</div>';
}
	
	
	else if($val[0]=="1"){ //string
	

	if($count > 0){
                //$fetch = mysqli_fetch_assoc($sql);
                //$xpassword = $fetch["Password_User"];
                if($sqlstatus == "0"){
                    ?>
                    <script>
                        alert("Please verify email account before login. Check your inbox.");
                    </script>
                    <?php
                //}else if(password_verify($password, $xpassword)){
	
				}
				/*
				else {
                    ?>
                    <script>
                        alert("Login in successful");
                    </script>
                    <?php
                }
				*/
            }
	

	$row=mysqli_fetch_assoc($res1);
	
	$_SESSION["Id_User"]=$row["Id_User"];

	$_SESSION["login"]=1;
	$qry00="select Username_User from user where Email_User = '$email'";
	$res00=mysql_query($conn, $qry00);
	
		echo("<script>location.href = 'booking.php';</script>");
}


else {
//		if(!empty($email) && !empty($password)){
		echo '<div class="rederror">You username or password is invalid!! Please try again</div>';
//	}	
}



}

?>
