<?php
$veh_no=$_POST['veh_no'];
$ownid=$_POST['ownid'];
$veh_name=$_POST['veh_name'];
$veh_mod=$_POST['veh_mod'];
$eng_no=$_POST['eng_no'];
$fuel_type=$_POST['fuel_type'];
$cn=new mysqli("localhost","root","","vehicle") or die('not connected');
$cn->query("insert into vehicle values('$veh_no','$ownid','$veh_name',$veh_mod,'$eng_no','$fuel_type')");
?>
