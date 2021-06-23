<?php
$vehno=$_POST['vehno'];
$service=$_POST['service'];
$cn=new mysqli("localhost","root","","new") or die('not connected');
$cn->query("insert into new values('$vehno','$service')");
echo "<script>alert('Inserted successfully')</script>";
?>




