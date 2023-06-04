<?php
session_start();
$uid=$_POST["usname"];
$pass=$_POST["uspass"];
if ($uid=="03004894" && $pass=="mygaiaedu123"){
	echo ("All OK");
	$_SESSION["usname"]=$uid; //session variables must be set after identification
	header("Location: http://localhost/lms.mygaiaedu.gr/dashboard.php");
}
else{
	echo ("An error occured. Please check your inputs and try again!");
}
?>