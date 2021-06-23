<!DOCTYPE html
<html>
<head>
	<body style="background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(images/4.jpg); background-size:cover;">
 <title>table</title>
 <style type="text/css"> 
.container{overflow: hidden}
 .tab{float: left;}
 .tab-2{margin-left: 50px}
 .tab-2 input{display: block;margin-bottom: 20px}
 tr{transition:all .25s ease-in-out}
 tr:hover{background-color:#EEE;cursor:pointer}

button{
		padding: 5px 20px;
		border-radius: 5px;
		margin: 2px;
		display: block;
width: 80px;
border: 5px;
background-color: white;
color: blue;
font-family: sans-serif;
text-align: center;
}
tr:nth-child(even)
{
  background-color: #f5f5f5;
  }
  tr:nth-child(odd)
{
  background-color: #588C7F;
  }
th {
 	border: 1px solid black;
    background-color:#588C7F;
	color:white;
	padding-top: 5px;
	color: white;
	border:1px solid #ddd;
	padding:4px;
	text-align: left;
}
a{

	color: blue;
	font-family: sans-serif;
}
button:hover{
border: 1px solid black;
background-color: orange;
color: white;
}
marquee{
	color: red;
}
h1 {
	background: black;
    color: white;
    text-align: center;
}
table
{
	font-family:monospace;
	font-size:20px;
	text-align: left;
	margin: 3 auto;
	display: table-cell;
	vertical-align: middle;
	height:7%;
	width: 85%;
	display: table;

}
</style>
 </head>
 <body>
 <table>
 <tr>
 <th> Name </th>
 <th> Email </th>
 <th> Rating </th>
 <th> Comment </th>
 </tr>
 <?php
 $conn = mysqli_connect("localhost","root","","feedback");
 if($conn->connect_error) {
 die("connection failed:". $conn-> connect_error);
 }
 $sql="select name,email,rating,comment from feedback";
 $result=$conn->query($sql);
 
 if($result->num_rows >0){
 while ($row=$result-> fetch_assoc()){
 echo"<tr><td>".$row["name"] ."</td><td>"   .$row["email"] ."</td><td>"    .$row["rating"] ."</td><td>"   .$row["comment"] ."</td><td>";
 }
 echo"</table>";
 }
 else {
 echo "0 result";
 }
 $conn->close();
 ?>
 </table>
 <center>
 <td><button><a href="admin.html">Back</a></button>
 </td>
</center>
 </body>
 </html>