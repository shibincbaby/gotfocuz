
<?php
include 'dbcon.php';
session_start();
if(!isset($_SESSION['username'])){
	header('location:../index.php#logd');
}
$username=$_SESSION['username'];
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Gotfocuz Admin Panel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="js/jquery-2.1.1.min.js"></script>
<!--icons-css-->
<link href="css/font-awesome.css" rel="stylesheet">
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--static chart-->
<script src="js/Chart.min.js"></script>
<!--//charts-->
<!-- geo chart -->
    <script src="//cdn.jsdelivr.net/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <script>window.modernizr || document.write('<script src="lib/modernizr/modernizr-custom.js"><\/script>')</script>
    <!--<script src="lib/html5shiv/html5shiv.js"></script>-->
     <!-- Chartinator  -->
    <script src="js/chartinator.js" ></script>

<!--geo chart-->

<!--skycons-icons-->
<script src="js/skycons.js"></script>
<!--//skycons-icons-->
</head>
<body>
<div class="page-container">
   <div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
				<div class="header-main">
					<div class="header-left">
							<div class="logo-name">
									 <a href="index.php"> <h1>gotFocuz</h1>
									<!--<img id="logo" src="" alt="Logo"/>-->
								  </a>
							</div>
							<!--search-box-->
								<div class="search-box">
									<form>
										<input type="text" placeholder="Search..." required="">
										<input type="submit" value="">
									</form>
									
								</div><!--//end-search-box-->
							<div class="clearfix"> </div>
						 </div>
						 <div class="header-right">
							<div class="profile_details_left"><!--notifications of menu start -->
								<ul class="nofitications-dropdown">
									<li class="dropdown head-dpdn">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge">3</span></a>
										<ul class="dropdown-menu">
											<li>
												<div class="notification_header">
													<h3>You have 3 new messages</h3>
												</div>
											</li>
											<li><a href="#">
											   <div class="user_img"><img src="images/p4.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>
											</a></li>
											<li class="odd"><a href="#">
												<div class="user_img"><img src="images/p2.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor </p>
												<p><span>1 hour ago</span></p>
												</div>
											  <div class="clearfix"></div>
											</a></li>
											<li><a href="#">
											   <div class="user_img"><img src="images/p3.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>
											</a></li>
											<li>
												<div class="notification_bottom">
													<a href="#">See all messages</a>
												</div>
											</li>
										</ul>
									</li>
									<li class="dropdown head-dpdn">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">3</span></a>
										<ul class="dropdown-menu">
											<li>
												<div class="notification_header">
													<h3>You have 3 new notification</h3>
												</div>
											</li>
											<li><a href="#">
												<div class="user_img"><img src="images/p5.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											  <div class="clearfix"></div>
											 </a></li>
											 <li class="odd"><a href="#">
												<div class="user_img"><img src="images/p6.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>
											 </a></li>
											 <li><a href="#">
												<div class="user_img"><img src="images/p7.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>
											 </a></li>
											 <li>
												<div class="notification_bottom">
													<a href="#">See all notifications</a>
												</div>
											</li>
										</ul>
									</li>
									<li class="dropdown head-dpdn">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue1">9</span></a>
										<ul class="dropdown-menu">
											<li>
												<div class="notification_header">
													<h3>You have 8 pending task</h3>
												</div>
											</li>
											<li><a href="#">
												<div class="task-info">
													<span class="task-desc">Database update</span><span class="percentage">40%</span>
													<div class="clearfix"></div>
												</div>
												<div class="progress progress-striped active">
													<div class="bar yellow" style="width:40%;"></div>
												</div>
											</a></li>
											<li><a href="#">
												<div class="task-info">
													<span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
												   <div class="clearfix"></div>
												</div>
												<div class="progress progress-striped active">
													 <div class="bar green" style="width:90%;"></div>
												</div>
											</a></li>
											<li><a href="#">
												<div class="task-info">
													<span class="task-desc">Mobile App</span><span class="percentage">33%</span>
													<div class="clearfix"></div>
												</div>
											   <div class="progress progress-striped active">
													 <div class="bar red" style="width: 33%;"></div>
												</div>
											</a></li>
											<li><a href="#">
												<div class="task-info">
													<span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
												   <div class="clearfix"></div>
												</div>
												<div class="progress progress-striped active">
													 <div class="bar  blue" style="width: 80%;"></div>
												</div>
											</a></li>
											<li>
												<div class="notification_bottom">
													<a href="#">See all pending tasks</a>
												</div>
											</li>
										</ul>
									</li>
								</ul>
								<div class="clearfix"> </div>
							</div>
							<!--notification menu end -->
							<div class="profile_details">
								<ul>
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">
												<span class="prfil-img"><img src="images/p1.png" alt=""> </span>
												<div class="user-name">
<p><?php echo $username;?></p>
													<span>Administrator</span>
												</div>
												<i class="fa fa-angle-down lnr"></i>
												<i class="fa fa-angle-up lnr"></i>
												<div class="clearfix"></div>
											</div>
										</a>
										<ul class="dropdown-menu drp-mnu">
											<li> <a href="change_password_process.php"><i class="fa fa-cog"></i> Change password</a> </li>
											<li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li>
											<li> <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="clearfix"> </div>
						</div>
				     <div class="clearfix"> </div>
				</div>
<!--heder end here-->
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop();
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });

		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">
<!--market updates updates-->
	 <div class="market-updates">
			<div class="col-md-4 market-update-gd">
				<div class="market-update-block clr-block-1">
					<div class="col-md-8 market-update-left">
					<?php
					 $sql="SELECT COUNT(r_id) as id from `tbl_user`";


		$res=mysqli_query($connection,$sql);
		$ar=mysqli_fetch_array($res);
		$mid=$ar['id'];

					?>

						<h3><?php echo $mid;?></h3>
						<h4>Registered Users</h4>
						<p></p>
					</div>
					<div class="col-md-4 market-update-right">
						<i class="fa fa-file-text-o"> </i>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-4 market-update-gd">
				<div class="market-update-block clr-block-2">
				 <div class="col-md-8 market-update-left">
			<?php

				$sql_studio="SELECT COUNT(s_id) as id from `tbl_studio`";
				$res_studio=mysqli_query($connection,$sql_studio);
				$ar_studio=mysqli_fetch_array($res_studio);
				$sid=$ar_studio['id'];

					?>

					<h3><?php echo $sid;?></h3>
					<h4>Registered Studios</h4>
					<p></p>
				  </div>
					<div class="col-md-4 market-update-right">
						<i class="fa fa-eye"> </i>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-4 market-update-gd">
				<div class="market-update-block clr-block-3">
					<div class="col-md-8 market-update-left">
					<?php

				$sql_feedback="SELECT COUNT(f_id) as id from `tbl_feedback`";
				$res_feedback=mysqli_query($connection,$sql_feedback);
				$ar_feedback=mysqli_fetch_array($res_feedback);
				$fid=$ar_feedback['id'];

					?>
						<h3><?php echo $fid?></h3>
						<h4>New Messages</h4>
						<p></p>
					</div>
					<div class="col-md-4 market-update-right">
						<i class="fa fa-envelope-o"> </i>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
		   <div class="clearfix"> </div>
		</div>
<!--market updates end here-->
<!--mainpage chit-chating-->

                            <div class="chit-chat-heading">

                                  Users
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                  <thead>
                                    <tr>
                                      <th>id</th>
                                      <th>username</th>
                                      <th>Gender</th>

                                      <th>district id</th>
                                      <th>Email </th>
										<th>Status </th>
                                  </tr>
                              </thead>
							  <tbody>
							  							<?php
include 'dbcon.php';
if(empty($_SESSION)) // if the session not yet started
   session_start();

if(!isset($_SESSION['username'])) { //if not yet logged in
  // header("Location: index.php");// send to login page
   exit;
}

$username=$_SESSION["username"];
$sql1="SELECT * FROM `tbl_user` where status=0";
$result=mysqli_query($connection,$sql1);
while($fetch=mysqli_fetch_array($result)){
?>

<tr>
<td><?php echo $fetch["r_id"];?></td>
<td><?php echo $fetch["name"];?></td>
<td><?php echo $fetch["gender"];?></td>
<td><?php echo $fetch["d_id"];?></td>
<td><?php echo $fetch["email"];?></td>
<td><a href="user_approve.php?l_id=<?php echo $fetch['l_id']?>">confirm</a></td>
</tr>
<?php
}

?>
							  </tbody>

                      </table>
										</div>
&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

                            <div class="chit-chat-heading">
                            Studio Details
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                  <thead>
                                    <tr>
                                      <th>studio id</th>
                                      <th>studio name</th>
                                  

                                      <th>mobile</th>
                                      <th>Email </th>
                                  </tr>
                              </thead>
							  <tbody>
							  							<?php

$sql1_studio="SELECT * FROM `tbl_studio`";
$result_studio=mysqli_query($connection,$sql1_studio);
while($fetch_studio=mysqli_fetch_array($result_studio)){

?>

<tr>
<td><?php echo $fetch_studio["s_id"];?></td>
<td><?php echo $fetch_studio["s_name"];?></td>
<td><?php echo $fetch_studio["email"];?></td>
</tr>
<?php
}
?>
							  </tbody>

                      </table>
                  </div>

     <div class="clearfix"> </div>
</div>
<!--main page chit chating end here-->

<!--main page chart start here-->
<div class="main-page-charts">
   <div class="work-progres">
                            <div class="chit-chat-heading">

                              Messages
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                  <thead>
                                    <tr>
                                      <th>feedback id</th>
                                      <th>email</th>
                                      <th>messages</th>


                                  </tr>
                              </thead>
							  <tbody>
<?php

$sql1_feedback="SELECT * FROM `tbl_feedback`";
$result_feedback=mysqli_query($connection,$sql1_feedback);
while($fetch_feedback=mysqli_fetch_array($result_feedback)){

?>

<tr>
<td><?php echo $fetch_feedback["f_id"];?></td>
<td><?php echo $fetch_feedback["email"];?></td>
<td><?php echo $fetch_feedback["feedback"];?></td>

</tr>
<?php
}
?>
							  </tbody>

                      </table>
                  </div>
             </div>
			</div>
		</div>
		<div class="col-md-6 chart-layer1-right">
			<div class="user-marorm">
			<div class="malorum-top">
			</div>
			<div class="malorm-bottom">
				<span class="malorum-pro"> </span>
			     <h4></h4>
				 <h2><?php echo $username;?></h2>
				<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising.</p>
				<ul class="malorum-icons">
					<li><a href="#"><i class="fa fa-facebook"> </i>
						<div class="tooltip"><span>Facebook</span></div>
					</a></li>
					<li><a href="#"><i class="fa fa-twitter"> </i>
						<div class="tooltip"><span>Twitter</span></div>
					</a></li>
					<li><a href="#"><i class="fa fa-google-plus"> </i>
						<div class="tooltip"><span>Google</span></div>
					</a></li>
				</ul>
			</div>
		   </div>
		</div>
	 <div class="clearfix"> </div>

  </div>
 </div>
<!--main page chart layer2-->
<div class="chart-layer-2">

	<div class="col-md-6 chart-layer2-right">

	</div>

  <div class="clearfix"> </div>
</div>


<!--slider menu-->
    <div class="sidebar-menu">
		  	<div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span>
			      <!--<img id="logo" src="" alt="Logo"/>-->
			  </a> </div>
		    <div class="menu">
		      <ul id="menu" >
		        <li id="menu-home" ><a href="index.php"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
				<li id="menu-home" ><a href="addcity.php"><i class="fa fa-tachometer"></i><span>Add City</span></a></li>
				  <li id="menu-home" ><a href="deletecity.php"><i class="fa fa-tachometer"></i><span>Delete City</span></a></li>

		         </li>
		      </ul>
		    </div>
	 </div>
	<div class="clearfix"> </div>
</div>
<!--slide bar menu end here-->
<script>
var toggle = true;

$(".sidebar-icon").click(function() {
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }
                toggle = !toggle;
            });
</script>
<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>
