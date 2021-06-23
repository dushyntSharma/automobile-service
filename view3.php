<!DOCTYPE html
<html>
<head>
	<body style="background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(4k-wallpaper-automobile-automotive-1149137.jpg); background-repeat:no-repeat; background-size:cover;">
 <title>table</title>
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
 <body>
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
 $conn = mysqli_connect("localhost","root","","owner");
 if($conn->connect_error) {
 die("connection failed:". $conn-> connect_error);
 }
 $sql="select ownid,ownname,ownadd,ownphno,sex,vehno from owner";
 $result=$conn->query($sql);
 
 if($result->num_rows >0){
 while ($row=$result-> fetch_assoc()){
 echo"<tr><td>".$row["ownid"] ."</td><td>"   .$row["ownname"] ."</td><td>"    .$row["ownadd"] ."</td><td>"   .$row["ownphno"] ."</td><td>"  
 .$row["sex"] ."</td><td>"  .$row["vehno"] ."</td><td>";
 }
 echo"</table>";
 }
 else {
 echo "no records";
 }
 $conn->close();
 ?>
 
 <td><button><a href="admin.html">Back</a></button>
 </table>
 </body>
 </html>