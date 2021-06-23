<!DOCTYPE html
<html>
<head>
 <title>table</title>
 <style type="text/css"> 
 table{
	border-collapse:collaspe;
	width:50%;
	color:#d96459;
	font-family:monospace;
	font-size:15px;
	text-align: left;
	
}
th {
    background-color:#588c7e;
	color:white;
}
</style>
 </head>
 <body>
 <table>
 <tr>
 <th> service </th>
 <th> amount </th>
 </tr>
 <?php
 $conn = mysqli_connect("localhost","root","","service");
 if($conn->connect_error) {
 die("connection failed:". $conn-> connect_error);
 }
 $sql="select ser_name,amt from service";
 $result=$conn->query($sql);
 
 if($result->num_rows >0){
 while ($row=$result-> fetch_assoc()){
 echo"<tr><td>".$row["ser_name"] ."</td><td>"   .$row["amt"] ."</td><td>";
 }
 echo"</table>";
 }
 else {
 echo "0 result";
 }
 $conn->close();
 ?>
 </table>
 
 <td><button><a href="cust.html">Back</a></button>
 </body>
 </html>