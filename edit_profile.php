<?php
include 'dbcon.php';
//if (empty($_SESSION)) { // if the session not yet started
//    session_start();
//}
$username=$_SESSION["username"];
if(!isset($_SESSION['username'])) { //if not yet logged in
	header("Location: index.php");// send to login page
	exit;
}


/*$sql="SELECT l_id,username,r_id,name,address,email,phoneno,location FROM login
NATURAL JOIN register WHERE login.l_id=register.r_id";*/
$sql1="SELECT * FROM `tbl_studio` where email='$username'";
$result=mysqli_query($connection,$sql1);
$row=mysqli_fetch_array($result);

$lid=$row['l_id'];
$did=$row["d_id"];
$sql2="SELECT * FROM `tbl_district` where  d_id='$did'";
$result1=mysqli_query($connection,$sql2);


$row1=mysqli_fetch_array($result1);

if(isset($_SESSION['submit'])) {
session_start();
$username=$_SESSION['username'];
include 'dbcon.php';
$u_name=$_POST['sname'];
$dt=$_POST['district'];
$phone=$_POST['phone'];
$sql1="UPDATE `tbl_studio` SET `s_name`=[value-2],`email`=[value-3],`city_id`=[value-4],`p_o`=[value-5],`place`=[value-6],`d_id`=[value-7],`phone`=[value-8],`mobile`=[value-9],`pro_pic_url`=[value-10],`l_id`=[value-11] WHERE 1";
$result=mysqli_query($connection,$sql1);
$row=mysqli_fetch_array($result);
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>gotFocuz</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />


	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700|Roboto:400,300,700' rel='stylesheet' type='text/css'>
	<!-- Animate -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Icomoon -->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<style>
		button {
			width: 40%;
			height: 40px;
			background: #ff656c;
			box-sizing: border-box;
			border-radius: 5px;
			border: 1px solid #e15960;
			font-weight: bold;
			text-transform: uppercase;
			font-size: 14px;
			font-family: Montserrat;
			outline: none;
			cursor: pointer;
		}

		button:hover {
			background: #ff7b81;
		}
		table {
			width: 100%;


		}

		th, td {
			padding: 8px;
			text-align: left;

		}
	</style>
</head>
<body>

	<div id="fh5co-header">
		<div class="container">

			<!-- Mobile Toggle Menu Button -->
			<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
			<div id="fh5co-logo">
				<a href="index.php">gotFocuz<span>.</span></a>
			</div>
			<nav id="fh5co-main-nav">
				<ul>
					<li><a href="web/user_home.php">Back To Home</a></li>
					
				</ul>
			</nav>

		</div>
	</div>

	<div id="fh5co-about" data-section="profile">

		<div id="main">
			<div id="user_profile">
				<table id="tab" cols="2" >
					<th style="color:red; font-size:50;">Profile Info</th>
					<br>
<form action="" method="post">
					<tr><td>Username</td><td><input type="text" name="email" value="<?php echo $row['email'];?>" disabled></td></tr>
					<tr><td>Name</td><td><input type="text" name="name" value="<?php echo $row['name'];?>" required></td></tr>
					<tr><td>Mobile Number</td><td><input type="phone" name="phone" value="<?php echo $row['phone'];?>" required></td></tr>				
				 <tr><td> District&nbsp&nbsp</td><td><select class="login" name="district" required/>
				  <?php
$sql10="SELECT * FROM `tbl_district` Order By d_id;";
$rset1=mysqli_query($connection,$sql10);
$records1=mysqli_fetch_array($sql10);
echo "<option value=''>Select a District</option>";
foreach($rset1 as $records1){
	echo "<option value='{$records1["d_id"]}'>{$records1["d_name"]} </option>";
}
?>

</td></tr>
					<tr><td></td><td><input type="submit" name="submit" value="Save"></td><td>
</form>
				</div>
			</div>
		</div>
		<html>
