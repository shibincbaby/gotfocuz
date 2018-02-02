<?php
include 'dbcon.php';
$id=$_GET['l_id'];
$confirmation="update `tbl_user` set status='1' where l_id='$id'";
	$res=mysqli_query($connection,$confirmation);
	
$sql="SELECT `r_id` FROM `tbl_user` WHERE `status`='1'and `l_id`='$id'"; //value fetched from the table
	$re=mysqli_query($connection,$sql); // query executing function
$us='';
	while($row=mysqli_fetch_array($re))
	{
		$us=$row['r_id'];
	}
	
		
if ($us=='')
{

echo "<script>alert('Not confirmed');</script>";

}
else{
	echo "alert('confirmed')";
header('location:index.php');
}

?>
