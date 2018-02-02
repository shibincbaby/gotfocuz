 <!DOCTYPE html>
<html>
<head> 
			<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">       
        <title>studio search</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="icon" href="bootstrap/images/unnamed.png" type="icon">
        <!--<link rel="stylesheet" type="text/css" href="bootstrap/css/main.css"> -->
<?php
 include 'dbcon.php';
 session_start();
 $lid=$_SESSION["lid"];
 $sid=$_GET['id'];
 //echo $sid;
            date_default_timezone_set('Asia/Kolkata');
			$date3 = date('Y-m-d', time());
			$time2=date('h:i:s a', time());
			$v=date("H:i:s", strtotime($time2));
			$date="$date3 $v";
			//echo $date;
// date_default_timezone_set('Asia/Kolkata');
// $date = date('Y/m/d h:i:s', time());
 //echo $date;
	if(isset($_POST['submit']))
    {
		
		$datime=$_POST['datime'];
		$time=$_POST['time'];
		$tim24 = date("H:i", strtotime("$time"));
		//echo $tim24;
		$dd="$datime $tim24:00";
		//echo $dd;
		$landmark=$_POST['landmark'];
		$place=$_POST['place'];
		
		$sql4="SELECT * FROM `tbl_booking` WHERE `s_id`='$sid' AND `date_occ`='$datime'";
		$res=mysqli_query($connection,$sql4);
		$row=mysqli_fetch_array($res);
		$bid=$row['book_id'];
		if($bid=="")
		{
			$sql="INSERT INTO `tbl_booking`(`s_id`, `book_date_time`, `occ_id`, `place_occ`, `date_occ`, `time_occ`, `l_id`) 
		VALUES ('$sid', '$date', '$place', '$landmark', '$datime', '$tim24', '$lid')";
		//echo $sql;
		$result=mysqli_query($connection,$sql);
			echo "<script>alert('studio booked for this date!!!!')){document.location.href='user_home.php'}else{document.location.href='index.php'};</script>";
		}
		else
		{
			echo "<script>if(confirm('studio not avilable for this date!!!!')){document.location.href='index.php'}else{document.location.href='index.php'};</script>";
	 		}
		
		//INSERT INTO `tbl_booking`(`book_id`, `s_id`,`date_occ``time_occ`
		//`book_date_time`, `occ_id`, `place_occ`, `datetime_occ`, `l_id`) VALUES
		
	}
?>

<!DOCTYPE html>


<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">       
        <title>Book a Studio</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<div style="margin-top:60px; margin-left:450px;">
  <h3>Book a Studio</h3>
  <br>
  <form action="#" method="post">

<div >
  <select class="form-control" style="opacity: 100px; width:250px;" name="place" id="occasion_select">   <?php
							include "dbcon.php";
							$sq="SELECT * FROM tbl_occassion";
                             $res = mysqli_query($connection,$sq);
						// $res2 = mysqli_query($dbcon, "select * from state where status='1' ");

                            while ($row = mysqli_fetch_array($res)) {

                                echo '<option value=' . $row['occ_id'] . '>' . $row['occa_name'] . '</option>';
                            }
                            ?></select><br>
</div>
 
<div >
<?php
date_default_timezone_set('Asia/Kolkata');
$date3 = date('Y-m-d', time());
?>

 <input type="date" class="form-control" min="<?php echo $date3;?>" style="opacity: 100px; width:250px;" name="datime"> 
 </div>

 <br><br>
 <div>
 <input type="time" name="time"/>
 </div>
 <br><br>
<div >
 <input type="text" class="form-control" placeholder="Landmark" style="opacity: 100px; width:250px;" name="landmark"> 
 </div>

  <br><br>
 <button type="submit" name="submit" class="btn btn-success" style="opacity: 100px; width:250px;">Confirm booking</button>
 </form>


</div>
      <div class="sidebar-menu">
		  	<div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span>
			      <!--<img id="logo" src="" alt="Logo"/>-->
			  </a> </div>
		    <div class="menu">
		      <ul id="menu" >
		        <li id="menu-home" ><a href="../web/user_home.php" ><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li><br>
			
				<li id="menu-home" ><a href="../web/user_home.php" ><i class="fa fa-tachometer"></i><span>View Profile</span></a></li><br>
				<li id="menu-home" ><a href="../web/studio_view.php" ><i class="fa fa-tachometer"></i><span>View all Studios</span></a></li><br>
				<li id="menu-home" ><a href="../ajax/index.php" ><i class="fa fa-tachometer"></i><span>Search Near-By</span></a></li><br>
				<li id="menu-home" ><a href="#" ><i class="fa fa-tachometer"></i><span>View Highlights</span></a></li>

		         </li>
		      </ul>
			  
		    </div>
			&nbsp&nbsp&nbsp&nbsp <img src="../mypic/d.jpg" width="190" height="250">
	 </div>
	<div class="clearfix"> </div>
</div>
<script src="bootstrap/js/jquery.js"></script>
</body>
<script src="location.js" ></script>
</html>