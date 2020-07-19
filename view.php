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
$pass=$value["Password"];
$order=$value["Orders"];
}
else{
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap3.3.7/css/bootstrap.min.css">
	<style type="text/css">
	body{
		background-color:#dcdcdc;
	}
	#r:hover{
		background-color:orange;
	}
	#g:hover{
		background-color:yellow;
	}
	ul{
	list-style:none;
	padding:0px;
	margin:0px;
	color:white;
}
ul li{
	float:left;
	height: auto;
	width: 80px;
	background-color:black;
	line-height: 40px;
	text-align:center;
}
ul li a{
	color:orange;
	list-style:none;
	display:block;
	text-decoration: none;
}
ul li a:hover{
	text-decoration: none;
	line-height:40px;
	background-color:yellow;
}
ul li ul li{
	display:none;
}
ul li:hover ul li{
	display: block;
}
	</style>
</head>
<body>
	<div style="position:fixed; top:300px; color:white;">
		<div>
		<ul><li>|||
		<ul><li><a href="index.php">Home</a></li>
					<li><a href="register.php">Register</a></li>
					<li><a href="login.php">Login</a></li>
					<li><a href="admin.php">Admin Login</a></li>
					<li><a href="contact.php">Contact Us</a></li>
				</ul>
				</li>
			</ul>
		</div>
	</div>	
	<div style="position:fixed; left:190px;">
		<img src="logo.png" width=1000px height=100px>
	</div>
	<br><br><br><br><br><br>
	<div class="container" style="text-align:center; background-color:grey;">
		<img src="ProfilePic/<?php echo $img ?>" alt="Upload Profile Picture.">
		<br>
		<b><h1><?php
		$con=mysqli_connect("localhost","root","","ict");
		$sql="select * from data where Email='".$_SESSION["Name"]."'";
$rs=mysqli_query($con,$sql);
$value=mysqli_fetch_assoc($rs);
$img=$value["ProfilePic"];
$name=$value["Name"];
$email=$value["Email"];
	echo "Welcome ".$name.", hope you are having a good day!";
	?></h1></b><br><br>

	<font size="5">
	<div>	
		Your Orders.
	</div>
	<br>
	<div>
		<?php
		echo $order;
		?>
	</div>
	<br>
	<a href="home.php" style="text-decoration:none; color:black;">Go Back?</a>
	
	<br>
	</a>
	<br>
	<a href="logout.php" style="text-decoration:none; color:red;">
	<div id="g">
		Log Out
	</div>
	</a>						
		<br><br>
	</div>
</font>

	<hr>
	<div class="container" style="text-align:center; background-color:grey;" id="r">
		<font size=5>...............................................</font><h2>Our Mission</h2>
		<font size=5>...............................................</font><br>
		<font size="4">"To be the most preferred LSP by continuously adapting to ever growing business environment
		 through ethical business practices and strict adherence towards the effective QMS."</font>
		<br><br>
	</div>
	<br><br> 	
	<div class="container-fluid" style="text-align:center; background-color:grey;">
			<font size=5>...............................................</font>
			<h2>Our Skills</h2>
			<font size=5>...............................................</font><br>
		<div class="row">
			<r>
		<div class="col-md-4" id="r"><font size="4"><u><h3>Compliance</h3></u>
			ISO 9001 : 2015 Certified
			<br> GDP COMPLIANT
			<br> C-TPAT COMPLIANT
			<br><br>
		</font></div>
	</r>
		<div class="col-md-4" id="r"><font size="4"><u><h3>Realtime Track and Trace</h3></u>
			All vehicles have live tracking for location and temperature.<br><br><br>
		</font></div>
		<div class="col-md-4" id="r"><font size="4"><u><h3>Best Service @Best Rates</h3></u>
			"Saving our client's money = Saving our own." <br>
			This is our company's moto. We strongly believe in value for money relaible services because you are
			worth it.
		</font></div>
		</div><br>
		<div class="row">
		<div class="col-md-4" id="r"><font size="4"><u><h3>Skilled & Trained Team</h3></u>
			None of the other skills will be complete without our fabulous hardworking team. Our team is our 
			biggest asset.<br><br>
		</font></div>
		<div class="col-md-4" id="r"><font size="4"><u><h3>New Technology</h3></u>
			High quality Thermal Insulations<br>
			Door Sensors<br>
			Inhouse Thermal Imaging<br>
			Updated DRS in all transportation vehicles.
			<br><br><br>
		</font></div>
		<div class="col-md-4" id="r"><font size="4"><u><h3>JIT</h3></u>
			Urgency is not taken lightly as our add on JIT service is our mantra to customer satisfaction.<br><br><br>
		</font></div>
		</div>
		</div>
	</div>
	<br><br>
	<div class="container" style="text-align:center; background-color:grey;" id="r">
		<font size=5>...............................................</font><h2>About Us</h2>
		<font size=5>...............................................</font><br><br>
		<font size="4">	<p>Relaible Transport & Company are a part of the Indian Transport Industry over 3 decades.
		 We are extensively present in the northern and southern India in the states of Uttar Pradesh, Punjab, Madhya Pradesh,
		  and extend services to Maharashtra and Karnataka. </p>
		  <p>We believe in opertaional efficiency and strong focus on high quality customised logistical solutions. All this with
		  a team of highly skilled and trained staff is our solution to success.</p><br></font>
	</div> <br><br>
	<div class="container-fluid" style="text-align:center; background-color:grey;">
			<font size=5>...............................................</font>
			<h2>Our Skills</h2>
			<font size=5>...............................................</font><br><br>
		<div class="row">
		<div class="col-md-3" id="r"><font size="8">1<br>_</font><br>
			<h3>Truck/500km</h3>
			<font size="4"> Vehicle of Relaible Transport & Company is seen every 500 km in the northern India sector.<br><br></font>
		</div>
		<div class="col-md-3" id="r"><font size="8">2<br>_</font><br>
			<h3>Largest Roadways</h3>
			<font size="4"> India has the second largest road networks in the world.</font><br><br>
		</div>
		<div class="col-md-3" id="r"><font size="8">30<br>_</font><br>
			<h3>Years of Experience</h3>
			<font size="4">More than 25 years of experience in the industry as we have grown with you.</font>
		</div>
		<div class="col-md-3" id="r"><font size="8">120<br>_</font><br>
			<h3>Happy Customers</h3>
			<font size="4">More than 100 satisfied customers and still counting.</font><br><br>
		</div>
		</div>
		</div> 
		<br><br> 
	<div class="container" style="text-align:center; background-color:grey;">
		<b>&copy Relaible Transport & Company. All rights reserved. Website designed by Hitesh Malhotra.</b></div>
</body>
</html>