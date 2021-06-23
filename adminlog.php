<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
	$uname=$_POST['uname'];
	$pass=$_POST['pass'];
	$cn=new mysqli("localhost","root","","owner") or die("connection failed");
	$result=$cn->query("select * from login where uname='$uname' and pass='$pass'");
	if(mysqli_num_rows($result)==1)
		echo "<script>location.href='admin.html'</script>";
	else
	echo "<script>alert('Incorrect password or username')</script>";
}
?>