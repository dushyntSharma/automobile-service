<?php
$email=$_POST['email'];
$psw=$_POST['psw'];
$pswrepeat=$_POST['pswrepeat'];
$cn=new mysqli("localhost","root","","reg") or die('not connected');
$cn->query("insert into reg values('$email','$psw','$pswrepeat')");
echo "<script>alert('Inserted successfully')</script>";
?>