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

        <style>
           
            .m-t-10 {
                margin-top: 10px;
            }

            .show_error{
                display: inline;           
            }
            .hide_error{
                display: none;
            }
            div#find_studio{
                margin-left: 250px;
            }
			</style>
    </head>
   <script src="bootstrap/js/jquery.js"></script>


    <body >
<br><br><center><h3>Search Near-by Studios</h3></center><br>
        <div class="container" style="position:relative; margin-top:10px; margin-left:550px;">

            <div class="row">
               
                    <div class="col-md-3">

                            <select class="form-control" style="opacity: 100px; width:250px " id="district_select"> <option selected="" disabled="" value="-1">District</option>

                            <?php
							include "dbcon.php";
							$sq="SELECT * FROM tbl_district";
                             $res = mysqli_query($connection,$sq);
						// $res2 = mysqli_query($dbcon, "select * from state where status='1' ");

                            while ($row = mysqli_fetch_array($res)) {

                                echo '<option value=' . $row['d_id'] . '>' . $row['d_name'] . '</option>';
                            }
                            ?>

                        </select>
                    </div>
				
					
                    <div class="col-md-3">

                        <select class="form-control" id="place_select" style="opacity: 100px; width:250px " > <option value="-1" disabled="" selected="">Place</option>
                        </select>

                    </div>
				
                   
                </div>
            </div>
<br><br>
            <div class="container-fluid">
                <div class="row">
                   &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp  <div class="col-md-offset-5 col-sm-3">
                       <input type="button" id="find" class="btn btn-primary " style="width: 250px; " value="Find Studio">
                    </div>
                </div>
            </div>
            <center><div class="row col-md-12 hide_error " style="color:white; font-size: 60px;" id="place_error" >Error</div></center>

  

        <div class="container-fluid">
            <div id="find_studio">

            </div>
        </div>

        <!--        <div class="container-fluid" style="position:absolute; margin-top: 575px; width: 100%;">
                    <div id="check_fare">
                        <iframe src="maps2.php" width="100%" height="600px"  frameBorder="0">
        
                        </iframe>
                    </div>
                </div>-->





   
      <div class="sidebar-menu">
		  	<div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span>
			      <!--<img id="logo" src="" alt="Logo"/>-->
			  </a> </div>
		    <div class="menu">
		      <ul id="menu" >
		        <li id="menu-home" ><a href="../web/user_home.php" ><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li><br>
			
				<li id="menu-home" ><a href="../web/user_home.php" ><i class="fa fa-tachometer"></i><span>View Profile</span></a></li><br>
				<li id="menu-home" ><a href="../web/studio_view.php" ><i class="fa fa-tachometer"></i><span>View all Studios</span></a></li><br>
				<li id="menu-home" ><a href="../ajax/index.php" ><i class="fa fa-tachometer"></i><span>Book Studio</span></a></li><br>
				<li id="menu-home" ><a href="#" ><i class="fa fa-tachometer"></i><span>View Highlights</span></a></li>

		         </li>
		      </ul>
			  
		    </div>
			&nbsp&nbsp&nbsp&nbsp <img src="../mypic/d.jpg" width="190" height="250">
	 </div>
	<div class="clearfix"> </div>


</body>
<script src="location.js" ></script>
</html>

