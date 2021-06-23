<?php
$man_name=$_POST['man_name'];
$man_id=$_POST['man_id'];
$bra_id=$_POST['bra_id'];
$salary=$_POST['salary'];
$man_phno=$_POST['man_phno'];
$cn=new mysqli("localhost","root","","manager") or die('not connected');
$cn->query("insert into manager values('$man_name','$man_id','$bra_id',$salary,'$man_phno')");
?>
