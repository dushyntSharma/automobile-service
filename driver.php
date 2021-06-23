<?php
$dri_id=$_POST['dri_id'];
$dri_name=$_POST['dri_name'];
$dri_phno=$_POST['dri_phno'];
$ownid=$_POST['ownid'];
$vehno=$_POST['vehno'];
$dri_add=$_POST['dri_add'];
$cn=new mysqli("localhost","root","","driver") or die('not connected');
$cn->query("insert into driver values('$dri_id','$dri_name','$dri_phno','$ownid','$vehno','$dri_add')");
?>
