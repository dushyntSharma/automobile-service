<?php
$con=mysqli_connect("localhost","root","","owner");
mysqli_select_db($con,'tutorial');
$ownid=$_POST['ownid'];
$ownname=$_POST['ownname'];
$ownadd=$_POST['ownadd'];
$ownphno=$_POST['ownphno'];
$sex=$_POST['sex'];
$vehno=$_POST['vehno'];
$sql="update owner set ownid='$ownid',ownname='$ownname',ownadd='$ownadd',ownphno='$ownphno',sex='$sex',vehno='$vehno' WHERE ownid='$ownid'";
if(mysqli_query($con,$sql))
	header("refresh:1; url=update1.php");
else
	echo"<script>not updated</script>";
?>