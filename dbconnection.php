<?php
	$server = "localhost";
	$user = "root";
	$password = "";
	$database = "dhomi";
	$con = mysqli_connect($server,$user,$password,$database) or die("connection error".mysqli_connect_error());
?>