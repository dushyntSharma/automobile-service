<!DOCTYPE html
<html>
<head>
	<body style="background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(images/5.jpg); background-size:cover;">
 <title>table</title>
 <center>
 <style type="text/css"> 
 table{
	border-collapse:collapse;
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
    background-color:#588c7e;
	color:white;
	height: 16px;
	width: 90px;
}
h2
{
	color:white;
}
.data{
    background-color:white;
  color:black;

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
 </head>
 <h2>Actions performed</h2>
 <body>
 <table>
 <tr>
 <th> Owner ID </th>
  <th> Username</th>
 <th> Password</th>
 <th>  Name </th>
 <th> Phone no </th>
 <th> Sex </th>
 <th> Vehicle no </th>
 <th>  Address </th>
 <th> Action </th>
 <th> cdate </th>
 </tr>
 <?php
 $conn = mysqli_connect("localhost","root","","owner");
 if($conn->connect_error) {
 die("connection failed:". $conn-> connect_error);
 }
 $sql="select ownid,user,pass,ownname,ownphno,sex,vehno,ownadd,action,cdate from ownlog";
 $result=$conn->query($sql);
 
 if($result->num_rows >0){
 while ($row=$result-> fetch_assoc()){
 echo"<tr><td>".$row["ownid"] ."</td><td>" .$row["user"] ."</td><td>" .$row["pass"] ."</td><td>" .$row["ownname"] ."</td><td>" .$row["ownphno"] ."</td><td>" .$row["sex"] ."</td><td>" .$row["vehno"] ."</td><td>".$row["ownadd"] ."</td><td>".$row["action"] ."</td><td>".$row["cdate"] ."</td></tr>";
 }
 echo"</table>";
 }
 else {
 echo "no records";
 }
 $conn->close();
 ?>
 <center>
 <td><button><a href="admin.html">Back</a></button>
 </center>
</center>
 </table>
 </body>
 </html>