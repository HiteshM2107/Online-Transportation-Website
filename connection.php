<?php
session_start();
if(isset($_SESSION["Name"]))
{
$con=mysqli_connect("localhost","root","","ict");
if(!$con)
die("Server Could Not Connect.");
$sql="select * from data where Email='".$_SESSION["Name"]."'";
$rs=mysqli_query($con,$sql);
$value=mysqli_fetch_assoc($rs);
$img=$value["ProfilePic"];
$name=$value["Name"];
$password=$value["Password"];
}
else{
	header("location:index.php");
}
?>