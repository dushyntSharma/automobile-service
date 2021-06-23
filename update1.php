<html>
<head>
<title>update records in mysql database</title>
</head>
<body style="background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(4k-wallpaper-automobile-automotive-1149137.jpg); background-repeat:no-repeat; background-size:cover;">
<body>
<style>
table{
	border-collapse:collaspe;
	color:#d96459;
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
    background-color:#588c7e;
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
button{
border: .5px solid black;
background-color: orange;
color: white;
}

</style>
<?php
$con=mysqli_connect("localhost","root","","owner");
mysqli_select_db($con,'tutorial');
$sql="select * from owner";
$records=mysqli_query($con,$sql);
?>
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
while($row=mysqli_fetch_array($records))
{
	echo "<tr><form action=update2.php method=post>";
	echo "<td><input type=text name='ownid' value='".$row['ownid']."'</td>";
	echo "<td><input type=text name='ownname' value='".$row['ownname']."'</td>";
	echo "<td><input type=text name='ownadd' value='".$row['ownadd']."'</td>";
     echo "<td><input type=text name='ownphno' value='".$row['ownphno']."'</td>";
    echo "<td><input type=text name='sex' value='".$row['sex']."'</td>";
     echo "<td><input type=text name='vehno' value='".$row['vehno']."'</td>";
	 echo "<input type=hidden name='ownid' value='".$row['ownid']."'>";
	 echo "<td><input type=submit value=update></td>";
	 echo "</form></tr>";
}
?>
<td><button><a href="admin.html">Back</a></button>
</body>
</html>