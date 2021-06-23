<!DOCTYPE html>
<html>
<head>
</head>
	<title>Bill</title>
	<style type="text/css"> 
  table{
  margin: 3 auto;
  display: table-cell;
  height: 20%;
  width: 85%;
  display: table;
	border-collapse:collapse;
	color:#d96459;
	font-family:monospace;
	font-size:20px;
	text-align: left;
}
.heading {
    background-color:#588c7e;
	color:white;
}
.data{
    background-color:white;
  color:blue;
}
button{
		padding: 5px;
		border-radius: 5px;
		margin: 2px;
		display: block;
width: 80px;
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
 body {
    background-image:linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)),url(897814460-170667a.jpg);
	background-size: cover;
	font-size: 18px;
	color: white;
}
h2{
    color:orange;
    text-align: center;
</style>
<table>
	<center>
	<h2> BILL RECEIPT</h2>
<?php
	session_start();
	$user=$_SESSION['user'];
	$cn=new mysqli("localhost","root","","owner") or die("Connection failed");
	$owner=$cn->query("SELECT * FROM OWNER WHERE USER='$user'");
	$owner=$owner->fetch_array();
	$vno=$owner['vehno'];
	$date=date("d-M-Y");

	echo "<tr><th>Username:".$user."</th><th></th><th>".$date."</th></tr><tr><th>VehicleNo:".$vno."</th></tr>";
?>
	<tr class="heading">
		<th>Type of Sevice</th>
		<th>Subscribed</th>
		<th>Rate</th>
	</tr>
<?php

	$services=$cn->query("SELECT engineservice,oilservice,waterservice,enginereplace FROM SERVIN WHERE VEHNO='$vno'");
	echo $cn->error;
	$services=$services->fetch_assoc();
	$rate=array('engineservice'=>1200,'oilservice'=>800,'waterservice'=>400,'enginereplace'=>5000);
	$sum=0;
	foreach($services as $x=>$x_value){
		$sum+=$cost=($x_value=="Yes")?$rate[$x]:0;
		echo "<tr class='data'><td>".$x."</td><td>".$x_value."</td><td>".$cost."</td></tr>";
	}
	echo "<p><tr><td></td><td><p>Total =</p></td><td>".$sum."</td></tr>";
	?>
</center>
<td><button><a href="servin.php">Back</a></button>
</td>
</table>
</body>
</html>