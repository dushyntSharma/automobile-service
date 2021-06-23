<!DOCTYPE html>
<html>
<head>
	<title>Service: Request</title>
</head>
<body style="background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(images/feed.jpg); background-size:cover;">
 <style type="text/css"> 
  table{
  margin: 3 auto;
  display: table-cell;
  vertical-align: middle;
  height: 20%;
  width: 85%;
  display: table;
	border-collapse:collaspe;
	color:#d96459;
	font-family:monospace;
	font-size:20px;
	text-align: left;
}
th {
    background-color:#588c7e;
	color:white;
}
.data{
    background-color:white;
  color:black;
}
h2{
  color: white;
}
</style>

<body>





<?php
$cn = new mysqli("localhost","root","","owner") or die('not connected');

$query = "SELECT * FROM servin";
$data = mysqli_query($cn, $query);
echo $cn->error;
if($data)
  $total = mysqli_num_rows($data);

if ($total != 0) {
    ?>
  <h2>Services Details</h2><br>
 <table>
  <thead>
    <tr>
      <th>Vehicle no</th>
      <th>Engine Service</th>
      <th>Oil Filtration</th>
      <th>Wash Service</th>
      <th>One-Day Service</th>
      <th>Completed</th>

    </tr>
  </thead>
<tbody>
  <form action="open1.php" method="POST">
<?php

	while ($result = mysqli_fetch_assoc($data))
	 {
        echo "<tr class='data'>  
<td>".$result['vehno']."</td>
<td>".$result['engineservice']."</td>
<td>".$result['oilservice']."</td>
<td>".$result['waterservice']."</td>
<td>".$result['enginereplace']."</td>
<td><input type='checkbox' name='".$result['vehno']."'value='".$result['vehno']."'></td>

</tr>";
	}
 }
?>

<tr><td><input type="submit" name="updatestatus"></td>
<td><button><a href='admin.html'>Back</button></a></button></td>
</tr>
</form>
</tbody>
</table>



</body>
</html>