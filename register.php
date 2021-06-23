<html>
<head>
<title>
Login
</title>
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
	$uname=$_POST['uname'];
	$pass=$_POST['pass'];
	$cn=new mysqli("localhost","root","","test") or die("connection failed");
	$result=$cn->query("select * from login where uname='$uname' and pass='$pass'");
	if(mysqli_num_rows($result)==1)
		echo "<script>location.href='2.html'</script>";
	else
		echo "<script>alert('Login failed')</script>";
}
?>
</head>
<body>
<center>
<h1> Welcome To Vehicle Service Center Management System</h1>
<style>
  body {
    background-color: silver;
     text-align:initial;
}
h1
{
	background: black;
    color: white;
    text-align: center;
	}
</style>
<form action="register.php" method="post">
Username<input type="text" id="uname" name="uname" placeholder="Username"required><br>
Password<input type="password" id="pass" name="pass" placeholder="Password"required>
<input type="submit" value="Go">
</form>
</body>
</html>