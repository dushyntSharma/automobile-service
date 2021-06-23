<?php
$bra_id=$_POST['bra_id'];
$bra_name=$_POST['bra_name'];
$bra_phno=$_POST['bra_phno'];
$bra_add=$_POST['bra_add'];
$cn=new mysqli("localhost","root","","branch") or die('not connected');
$cn->query("insert into branch values('$bra_id','$bra_name',$bra_phno,'$bra_add')");
?>