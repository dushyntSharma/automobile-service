<html>
<body>
<form action="4.php" method="GET">
<table>
<tr>
<th>Name</th>
</tr>	
<?php
$cn=new mysqli("localhost","root","","") or die("Connection failed");
$result=$cn->query("SELECT * FROM CUSTOMER");
//echo var_dump($result);
while($row=$result->fetch_array()){
 $name=$row[0];
 echo '<tr><td>'.$row['UNAME'].'</td><td><button name="delname" type="submit" value="'.$name.'">Delete</button></td></tr>';
}
?>
<tr><td><button onclick="location.href='4.php'">Delete</button></td></tr>
</table>
</form>
</body>
</html>
