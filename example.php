<?php
$usn=$_POST['usn'];
$name=$_POST['name'];
$gender=$_POST['gender'];
$cn=new mysqli("localhost","root","","test") or die('not connected');
$cn->query("insert into student values('$usn','$name','$gender')");
?>
