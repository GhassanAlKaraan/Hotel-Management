<?php session_start();
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
body{
	
	 background-image: url("room2.jpg");
	 background-repeat: no-repeat;
	  background-size: cover;
	  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Montserrat", sans-serif;
  color: #fff;
}
h1 {
  font-weight: 900;
  margin-top:1px;
}

.hide{
	visibility:hidden;
}

.container {
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 16px;
  flex-direction: column;
}
.box {
  width: 350px;
  height: 530px;
  font-size: 16px;
  padding: 40px 40px;
  background: #0F044C;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  border-radius: 30px;
}
.user {
  margin-top: 50px;
}

.fas {
  position: absolute;
}
input {
  width: 90%;
  margin-bottom: 2px;
  padding: 0px 30px 15px;
  font-size: 16px;
  border: none;
  border-bottom: 1px solid #141E75;
  outline: none;
  background-color: #0F044C;
  color: #fff;
}

input[type=text]{
	margin-top:15px;
}
input[type=password]{
	margin-top:0px;
}
input:focus {
  border-bottom: 1px solid #EEEEEE;
}


.login-btn {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}

.btn {
  display: block;
  width: 80%;
  padding: 15px 15px 15px 15px;
  background-color: #EEEEEE;
  color: #0F044C;
  border: none;
  border-radius: 20px;
  font-size: 20px;
  margin-top:10px;
  font-weight: 600;
  opacity: 0.8;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.btn1 {
  display: block;
  width: 80%;
  marginLeft:22px;
  padding: 15px;
  background-color:red;
  color: #0F044C;
  margin-top:10px;
  border: none;
  border-radius: 20px;
  font-size: 20px;
  font-weight: 600;
  opacity: 3.8;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.btn:hover{
    opacity: 1;
}

.signup span{
    color: #7fb8e6;
}
.signup span:hover{
    color: #3793df;
}
 
</style>
</head>
<body>
<form action ="<?php echo $_SERVER["PHP_SELF"];?>" method="POST"  autocomplete="off">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">
	
    <div class="container">
        <div class="box">
		<?php
		if(isset($_GET["error"]))
	echo "<p style='color:red;'>". $_GET["error"]."</p>";
	
	?>
            <h1>Login</h1><br>
			Username:<br><br>
            <input type="text" name="username" placeholder="Full name" />
				 <i class="fas fa-user"></i>
               <div class="hide"> <input type="text" name="email"  placeholder="Email Address">
				 <i class="fas fa-envelope"></i></div>
				Password:
               <div class="hide"> <input type="password" name="password"  placeholder="Password" >
                <i class="fas fa-unlock-alt"></i></div>
                <input type="password" name="password"  placeholder="Password" />
				 <i class="fas fa-unlock-alt"></i>
				
		

            <div class="login-btn">
                <button class="btn" name="login">Login</button>
                <button class="btn1" name="signup">SignUp</button>
            </div>
        </div>
    </div>
	</form>

<?php
if(isset($_POST["signup"])){
	header("location:signup.php");
}else if(isset($_POST["login"])){
	if(isset($_POST["username"]) && isset($_POST["password"])){
		

	$cid=mysqli_connect("localhost","root","","hotel") or die('error connecting');
		$username=mysqli_real_escape_string($cid,$_POST["username"]);
$password=mysqli_real_escape_string($cid,$_POST["password"]);
$username=htmlspecialchars($username);
$password=htmlspecialchars($password);
$_SESSION["username"]=$_POST["username"];
	$res=mysqli_query($cid,'select count(*) from user where Username_User="'.$username.'" and Password_User="'.$password.'"');
	$val=mysqli_fetch_array($res);
	//var_dump($val);
	
	if($val[0]=="1"){ //string
	
	$_SESSION["login"]=1;
	header("location:booking.php");
}
	else{
		header("location:projectfe.php?error=Wrong username or password");
	}

}
}

?>
</body>
</html>
