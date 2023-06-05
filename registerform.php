<?php
	include("dbconnection.php");
	$name = "";
	$emailid = "";
	$phonenumber = "";
	$gender = "";
	$address = "";
	$password = "";
	if(isset($_POST["name"])){
		$name .= $_POST["name"];
		$emailid .= $_POST["email"];
		$phonenumber .= $_POST["number"];
		$gender .= $_POST["gender"];
		$address .= $_POST["address"];
		$password .= $_POST["password"];
		$qry = "INSERT INTO userregisteration(username,emailid,phonenumber,gender,address,password) values('".$name."','".$emailid."','".$phonenumber."','".$gender."','".$address."','".$password."')";
		if(mysqli_query($con,$qry)){
			header("location:loginform.php");
		}
		else{
			echo "Error";
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Sign Up Form</title>

<link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="main">
<section class="signup">

<div class="container">
<div class="signup-content">
<form method="POST" id="signup-form" class="signup-form" action="registerform.php">
<h2 class="form-title">Create account</h2>
<div class="form-group">
<input type="text" class="form-input" name="name" id="name" placeholder="Your Name" />
</div>
<div class="form-group">
<input type="email" class="form-input" name="email" id="email" placeholder="Your Email" />
</div>
<div class="form-group">
<input type="number" class="form-input" name="number" id="number" placeholder="Your Phone Number" />
</div>
<div class="form-group">
<select class="form-input" name="gender" id="gender">
	<option>Male</option>
	<option>FeMale</option>
</select>
</div>
<div class="form-group">
	<textarea class="form-input" placeholder="Your Address" name="address" id="address"></textarea>
</div>
<div class="form-group">
<input type="text" class="form-input" name="password" id="password" placeholder="Password" />
<span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
</div>
<div class="form-group">
<input type="password" class="form-input" name="re_password" id="re_password" placeholder="Repeat your password" />
</div>
<div class="form-group">
<input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
<label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in <a href="#" class="term-service">Terms of service</a></label>
</div>
<div class="form-group">
<input type="submit" name="submit" id="submit" class="form-submit" value="Sign up" />
</div>
</form>
<p class="loginhere">
Have already an account ? <a href="loginform.php" class="loginhere-link">Login here</a>
</p>
</div>
</div>
</section>
</div>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="js/main.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
</body>
</html>