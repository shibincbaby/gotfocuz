<?php
	require('dbcon.php');
  if(isset($_POST['submit'])){
    // If the values are posted, insert them into the database.
    if (isset($_POST['email']) && isset($_POST['password'])){

	      $email = $_POST['email'];
        //$phone = $_POST['phone'];
        $password = $_POST['password'];
		$pass = md5($password);
		$city=$_POST['city'];

       // $cnfpassword=$_POST['cnfpassword'];
        $name=$_POST['name'];


		  $sql1="INSERT INTO `tbl_login`( `email`, `password`, `status`, `role`) VALUES ('$email','$pass',1,2)";
			$result1=mysqli_query($connection,$sql1);
		  $sql="SELECT max(l_id) as id from tbl_login";


		$res=mysqli_query($connection,$sql);
		$ar=mysqli_fetch_array($res);
		$mid=$ar['id'];

$sq="INSERT INTO `tbl_studio`(`s_name`, `email`, `city_id`, `phone`, `mobile`, `pro_pic_url`, `l_id`) VALUES ('$name','$email','$city',0,0,0,'$mid')";
$res1=mysqli_query($connection,$sq);


			 if($result1&&$res1!="")
			 {
				 echo "<script>if(confirm('Registration successful! Do you want to Login')){document.location.href='index.php#logd'}else{document.location.href='studio_login.php'};</script>";
				 
			 }
			 else{
	echo "<script>alert('Signup Unsuccessful! This email address have already registered..');</script>";
}
		 }
}
    ?>

<!DOCTYPE HTML>
<html>
<head>
<title>GOtfocuz-Studio-Signup</title>
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
<!--//charts-->
<style>
body{
background-image:url(../images/slide_2.jpg);
}
</style>
<script>

function n(){

	 var valfname= /^[A-Za-z\s]{2,15}$/;
	 $name= document.getElementById('name').value;

	 if(!valfname.test($name)){

      alert("ENTER VALID NAME");
	   document.getElementById('name').value='';
	   $("#name").focus();
      return false;
    }

}
function efn(){

	 var valemail= /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
	 $l_email= document.getElementById('email').value;

	 if(!valemail.test($l_email)){

      //alert("Enter Valid EMAIL address");
	 
	   document.getElementById('email').value='';
	   document.getElementById('pas').value='';
	   $("#email").focus();
      return false;
    }

}
/*function pass()
{
    var pass = /[a-zA-Z-_$%@]{6,16}[0-9]{1}$/;
    if (document.getElementById('password').value.search(pass) === -1)
    {
        alert("Enter a Valid Password");
        document.getElementById('password').value='';
        document.getElementById('password').focus();
        return false;
    }
}*/
  function exsist(str)
	  {
     	 if (str == "") 
	  	 {
       			document.getElementById("avail").innerHTML = "";
        		return;
    	 } 
		 else 
		 { 
         	if (window.XMLHttpRequest) 
		 	{
           		 // code for IE7+, Firefox, Chrome, Opera, Safari
           		 xmlhttp = new XMLHttpRequest();
         	} 
		 	else 
		 	{
           		 // code for IE6, IE5
            		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
         	}
         	xmlhttp.onreadystatechange = function() 
		 	{
            		if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
					{	
              			document.getElementById("avail").innerHTML =xmlhttp.responseText;
            		}
         	}
         	xmlhttp.open("GET","emailavail.php?q="+str,true);
			
         	xmlhttp.send();
    	 }
		 
		 
		 var valemail= /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
	 $l_email= document.getElementById('email').value;

	 if(!valemail.test($l_email)){

      alert("Enter Valid EMAIL address");
	 
	   document.getElementById('email').value='';
	   //document.getElementById('pas').value='eeeeee';
	   $("#email").focus();
      return false;
    }
		 
		 
		 
	  }
	  
</script>
</head>
<body>
<!--inner block start here-->
<div class="signup-page-main">
     <div class="signup-main">
			<div class="signup-block">
				<h2>Studio Signup</h2>
				<form method="post" action="">
					<input type="text" name="name" id="name" placeholder="Name"  required="">
					<input type="text" name="email" placeholder="Email" id="email" onblur="efn()" onchange="return exsist(this.value)">
					 <label style="color:RED; font-size: 15px;" id="avail"></label>
					 <label style="color:RED; font-size: 15px;" id="pas"></label>
					<input type="password" name="password" id="password" onchange="pass();" class="lock" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
					<div class="forgot-top-grids">
						
		  <p> <div class="col-md-3">

                        <select class="form-control" style="opacity: 100px; width:250px " id="district_select" name="city"> <option selected="" disabled="" value="-1">City</option>

                            <?php
							include "dbcon.php";
							$sq1="SELECT * FROM tbl_cities";
                             $res1= mysqli_query($connection,$sq1);
						// $res2 = mysqli_query($dbcon, "select * from state where status='1' ");

                            while ($row1 = mysqli_fetch_array($res1)) {

                                echo '<option value=' . $row1['city_id'] . '>' . $row1['city_name'] . '</option>';
                            }
                            ?>

                        </select>
                    </div>
					</p>
						<div class="clearfix"> </div>
					</div>
			
					<input type="submit" name="submit" value="Sign up">
				</form>
				<div class="sign-down">
				<h4>Already have an account? <a href="../index.php#logd"> Login here.</a></h4>
				  <h5><a href="../index.php">Go Back to Home</a></h5>
				</div>
			</div>
    </div>
</div>

<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>

<!-- mother grid end here-->
</body>
</html>
