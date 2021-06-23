<!DOCTYPE html>
<html>
<head>
	<title>status</title>
</head>
<center>
<body>
<style type="text/css">
	body{
		font-size: 200px;
		color:white;
		background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(images/5.jpg);
	}
	button{
		padding: 5px;
		border-radius: 5px;
		margin: 2px;
		display: block;
width: 100px;
border: 2px;
background-color: white;
color: blue;
font-family: sans-serif;
text-align: center;
}
button{
border: .5px solid black;
background-color: orange;
color: white;
}
</style>
<table>	
  <?php
  	session_start();
  	$user=$_SESSION['user'];
	$cn=new mysqli("localhost","root","","owner");
	$vno=$cn->query("SELECT vehno FROM OWNER WHERE user='$user'");
	$vno=$vno->fetch_array();
	$result=$cn->query("SELECT * FROM SERVIN WHERE VEHNO='$vno[0]'");
	$row=$result->fetch_assoc();
	echo $row['Status'];
	
  ?>
  <td style="left"><button><a href="custhome.php">Back</a></button>
</table>
</body>
</center>

</body>
</html>