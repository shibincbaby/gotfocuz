            <!DOCTYPE html>
<html>
<head> 
<script async="async" src="https://www.google.com/adsense/search/ads.js"></script>

<!-- other head elements from your page -->

<script type="text/javascript" charset="utf-8">
(function(g,o){g[o]=g[o]||function(){(g[o]['q']=g[o]['q']||[]).push(
  arguments)},g[o]['t']=1*new Date})(window,'_googCsa');
</script>

			<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->		<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: auto;
	margin-left:200px;
	
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
</style>
</head>
<body>
					<div class="chit-chat-heading">
                            
                          
                            <div class="table-responsive">
							<center>Studio Details</center>
                                <table id="customers">
                                  <thead>
                                    <tr>
                                      <th>studio id</th>
                                      <th>studio name</th>
                                  

                                      
                                      <th>Email </th>
                                  </tr>
                              </thead>
							  <tbody>
							  							<?php
														include 'dbcon.php';

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
					 <center> <td><a href="user_home.php" button class="btn btn-primary ">Go back</button></a></td>
</center>
                  </div>

     <div class="clearfix"> </div>
</div>
    <div class="sidebar-menu">
		  	<div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span>
			      <!--<img id="logo" src="" alt="Logo"/>-->
			  </a> </div>
		    <div class="menu">
		      <ul id="menu" >
		        <li id="menu-home" ><a href="user_home.php" ><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li><br>
			
				<li id="menu-home" ><a href="user_home.php" ><i class="fa fa-tachometer"></i><span>View Profile</span></a></li><br>
				<li id="menu-home" ><a href="studio_view.php" ><i class="fa fa-tachometer"></i><span>View all Studios</span></a></li><br>
				<li id="menu-home" ><a href="../ajax/index.php" ><i class="fa fa-tachometer"></i><span>Search Near-By</span></a></li><br>
				<li id="menu-home" ><a href="#" ><i class="fa fa-tachometer"></i><span>View Highlights</span></a></li>

		         </li>
		      </ul>
			  
		    </div>
			&nbsp&nbsp&nbsp&nbsp <img src="../mypic/d.jpg" width="190" height="250">
	 </div>
	<div class="clearfix"> </div>
</div>
<div id='afscontainer1'></div>

<script type="text/javascript" charset="utf-8">

  var pageOptions = {
    "pubId": "pub-9616389000213823", // Make sure this the correct client ID!
    "query": "hotels",
    "adPage": 1
  };

  var adblock1 = {
    "container": "afscontainer1",
    "width": "700",
    "number": 2
  };

  _googCsa('ads', pageOptions, adblock1);

</script>
</body>
</html>
