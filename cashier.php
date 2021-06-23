<?php
$cas_id=$_POST['cas_id'];
$bra_id=$_POST['bra_id'];
$cas_name=$_POST['cas_name'];
$cas_phno=$_POST['cas_phno'];
$salary=$_POST['salary'];
$cn=new mysqli("localhost","root","","cashier") or die('not connected');
$cn->query("insert into cashier values('$cas_id','$bra_id','$cas_name',$cas_phno,$salary')");
?>
