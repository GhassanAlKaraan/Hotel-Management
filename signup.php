<?php session_start();
require "connection.php";

?>
<!DOCTYPE.html>
<html>
<head>
<title>Project</title>
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
background-image:url(hotel2.jpg),url(logoHotel1.png);
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
      min-height: 500px; 
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
<img src="logoHotel.png" style="margin-Left:175px;"width="85px" height="70"/>
<h1><b>HotelSea</b><br>Sign-up From</h1>

<form action ="<?php echo $_SERVER["PHP_SELF"];?>" method="POST" autocomplete="off">

        <hr>
		<label id="icon" for="name"><i class="fas fa-user"></i></label>
        <input type="text" name="username" placeholder="Name" required/>
		
        <label id="icon" for="name"><i class="fas fa-envelope"></i></label>
        <input type="text" name="email" placeholder="Email" required/>

        <label id="icon" for="name"><i class="fas fa-unlock-alt"></i></label>
        <input type="password" name="password" placeholder="Password" required/>
        
		<label id="icon" for="name"><i class="fas fa-unlock-alt"></i></label>
        <input type="password" name="cpassword" placeholder="Confirm Password" required/>
		
		<div style="margin-bottom:5px"><p> </p> </div>
		
		<!--signup-->
        <div class="btn-block">
          <p>By clicking Register, you agree on our <a href="https://www.w3docs.com/privacy-policy">Privacy Policy</a>.</p>
          <button type="submit" name="submit">Register</button>
        </div>
       
	    <hr>		
		<!--login-->
		<div class="btn-block">
                <p>Already have an account ? 
				<a href="index.php"> Login</a></p>
		</div>
</form>
<?php
		if(isset($_GET["error"]))
	echo "<p style='color:red;'>". $_GET["error"]."</p>";
	
	?>
	
</form>



</body>
</html>

<?php
if(isset($_POST["submit"])){
	if(isset($_POST["username"])&& isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["cpassword"])) {
$cid=mysqli_connect("localhost","root","","hotel") or die('error connecting');
$username=mysqli_real_escape_string($cid,$_POST["username"]);
$email=mysqli_real_escape_string($cid,$_POST["email"]);
$password=mysqli_real_escape_string($cid,$_POST["password"]);
$cpassword=mysqli_real_escape_string($cid,$_POST["cpassword"]);
$username=htmlspecialchars($username);
$email=htmlspecialchars($email);
$password=htmlspecialchars($password);
$cpassword=htmlspecialchars($cpassword);


if(!empty($_POST["password"])){
	$name=preg_match('@\b[A-Z][a-z]+(\s)[A-Z][a-z]{1,19}\b@',$username);
$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number  = preg_match('@[0-9]@', $password);
$specialChars = preg_match('@[^\w]@', $password);

if(!$name){
	echo '<div class="rederror">Your username is invalid,It should be upper case for the first character of the first name and space and upper case for the first letter of the last name.</div>';
}
else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	echo '<div class="rederror">Your email address is invalid.</div>';
	
}else
if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
    echo '<div class="rederror">Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.</div>';
}
else 
if(strcmp($password,$cpassword)==0){
	      $check_query = mysqli_query($conn, "SELECT * FROM user where Email_User ='$email'");
        $rowCount = mysqli_num_rows($check_query);
 if($rowCount > 0){
                ?>
                <script>
                    alert("User with email already exist!");
                </script>
                <?php
            }
			
else {
	
  
                //$password_hash = password_hash($password, PASSWORD_BCRYPT);

                $result = mysqli_query($conn, "INSERT INTO user (Username_User, Email_User, Password_User, Cpassword_User, Code_Role, status) VALUES ('$username','$email', '$password', '$password', '1', '0')");
//$result = mysqli_query($conn, "INSERT INTO user (Username_User, Email_User, Password_User, Cpassword_User, Code_Role, status) VALUES ('$username','$email', '$password_hash', '$password_hash', '1', '0')");
                if($result){
                    $otp = rand(100000,999999);
                    $_SESSION['otp'] = $otp;
                    $_SESSION['mail'] = $email;
                    require "login-system-main/Mail/phpmailer/PHPMailerAutoload.php";
                    $mail = new PHPMailer; //put $mail = new PHPMailer(true); for debugging
    
                    $mail->isSMTP();
                    $mail->Host='smtp.gmail.com';
                    $mail->Port=587;
                    $mail->SMTPAuth=true;
                  $mail->SMTPSecure='tls'; //ssl
					$mail->SMTPOptions = array('ssl' => array('verify_peer' => false,
														'verify_peer_name'  => false,
														'allow_self_signed' => true));
    
                    $mail->Username='hotelsea.lebanon@gmail.com';
                    $mail->Password='ejfepaaktnjazxiu';
    
                    $mail->setFrom('hotelsea.lebanon@gmail.com', 'HotelSea Acc. OTP');
                    $mail->addAddress($_POST["email"]);
    
                    $mail->isHTML(true);
                    $mail->Subject="Your verify code";
                    $mail->Body="<p>Dear user, </p> <h3>Your verify OTP code is $otp <br></h3>
                    <br><br>
                    <p>With regrads, <br> HotelSea Team</p>";
    
                            if(!$mail->send()){
                                ?>
                                    <script>
                                        alert("<?php echo "Registeration Failed, Invalid Email "?>");
                                    </script>
                                <?php
                            } //eza email not sent ello sorry invalid  mail
							else{
                                ?>
                                <script>
                                    alert("<?php echo "Registered Successfully, OTP sent to " . $email ?>");
                                    window.location.replace('login-system-main/verification.php');
                                </script>
                                <?php
                            } //eza mail sent, ello go verify it now
                } //eza fawat l data 3l table successfully, b3atle OTP

}
}else if ($_POST["password"] != $_POST["cpassword"]){
	echo "<script>window.alert('Passwords dont match!!! Please try again');</script>";
}	
	
}
}
}else if(isset($_POST["login"])){
	header("location:login.php");
}
?>
</div>
</body>
</html>