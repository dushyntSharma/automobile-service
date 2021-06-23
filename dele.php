<html>
<body>
		<body style="background:url(IMG-20181128-WA0004.jpg); background-repeat:no-repeat; background-size:cover;">
<style type="text/css"> 
 table{
	border-collapse:collapse;
	color:#d96459;
	font-family:monospace;
	text-align: left;
	font-size:15px;
	text-align: left;
	margin: 3 auto;
	display: table-cell;
	vertical-align: middle;
	height: 5%;
	width: 85%;
	display: table;

	
}
tr:nth-child(even)
{
  background-color: #f5f5f5
}
 th {
 	border: 1px solid black;
    background-color:#588C7F;;
	color:white;
	padding-top: 12px;
	color: white;
	border:1px
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
		padding: 20px;
		border-radius: 5px;
		margin: 2px;
		display: block;
width: 200px;
border: 5px;
background-color: white;
color: blue;
font-family: sans-serif;
text-align: center;
}
a{

	color: blue;
	font-family: sans-serif;
}
button:hover{

background-color: orange;
color: white;
}

button{
	color:red;
	padding: 8px 20px;
	border:white;
	background:white;
	cursor: pointer;
	border: 1.5px solid transparent;
	front-size:10px;
	line-height: 1;
}

</style>
<form action="dele1.php" method="GET">
<table>
<tr>
<th>ownid</th>
<th>ownname</th>
<th>ownadd</th>
<th>ownphno</th>
<th>sex</th>
<th>vehno</th>
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
<td><button><a href="2.html">Back</a></button>
</table>
</form>
</body>
</html>
