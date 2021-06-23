<html>
<body>
	<body style="background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.3)),url(images/4.jpg); background-repeat:no-repeat; background-size:cover;">
<style type="text/css"> 
 table{
	border-collapse:collaspe;
	color:white;
	font-family:monospace;
	font-size:20px;
	text-align: left;
	margin: 3 auto;
	display: table-cell;
	vertical-align: middle;
	height: 16%;
	width: 85%;
	display: table;

	
}
th {
    background-color:#588c;
	color:white;
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
th {
    background-color:#588c7e;
	color:white;
}
.data{
    background-color:white;
  color:black;
}
button{
border: .5px solid black;
background-color: orange;
color: white;
}
	
</style>
<form action="3.php" method="GET">
<table>
<tr>
<th> Owner ID </th>
 <th>  Name </th>
 <th>  Address </th>
 <th> Phone no </th>
 <th> Sex </th>
 <th> Vehicle no </th>
</tr>	
<?php
$cn=new mysqli("localhost","root","","owner") or die("Connection failed");
$result=$cn->query("SELECT * FROM OWNER");
//echo var_dump($result);
while($row=$result->fetch_array()){
 $name=$row[0];
 echo '<tr><td>'.$row["ownid"] ."</td><td>" .$row["ownname"] ."</td><td>"   .$row["ownadd"] ."</td><td>"   .$row["ownphno"] ."</td><td>"   .$row["sex"] ."</td><td>"   .$row["vehno"].'</td><td><button name="delname" type="submit" value="'.$row["ownid"].'">Delete</button></td></tr>';
}
?>
<center>
<td><button><a href="admin.html">Back</a></button>
</center>
</table>
</form>
</body>
</html>
