<?php
$h=0;
include("connection.php");
$uemail=$_REQUEST["email"];
$uname=$_REQUEST["name"];
$con=mysqli_connect("localhost","root","","ict");
if(!$con)
die("Server Could Not Connect.");
$sql="update data set Email='".$uemail."', Name='".$uname."' where Email='".$_SESSION["Name"]."'";
$check=mysqli_query($con,$sql);
if($check!=0)
	header("location:home.php");
?>