<!DOCTYPE html>
<html>
<head>
  <title>Details</title>
</head>
<body>
<?php
$cn = new mysqli("localhost","root","","owner") or die('not connected');
  if(isset($_GET['complete'])){
    if(isset($_GET['status']))
      if(!$cn->query("UPDATE SERVIN SET STATUS='Completed'"))
        echo $cn->error;

  }
?>
<form action="" method="POST">
<?php
//$cn = new mysqli("localhost","root","","owner") or die('not connected');

$vehno = $_GET['vehno'];
$query = "SELECT * FROM servin WHERE vehno='$vehno'";
$data = mysqli_query($cn, $query);
$total = mysqli_num_rows($data);
if ($total != 0) {
?>
<h1 class="display-4">Member Details : </h1><br>
<table class="table">
  <thead class="thead-light">
    <tr>
      <th>Vehicle No</th>
      <th>Engine Service</th>
      <th>Oil Service</th>
      <th>Water Service</th>
      <th>Engine Service</th>
      <th colspan="2">Action</th>
    </tr>
  </thead>
<tbody>
<?php
      while ($result = mysqli_fetch_assoc($data)){
        echo "<tr>";
        echo "<td>".$result['vehno']."</td>";
        echo "<td>".$result['engineservice']."</td>";
        echo "<td>".$result['oilservice']."</td>";
        echo "<td>".$result['waterservice']."</td>";
        echo "<td>".$result['enginereplace']."</td>";
        echo "<td><input type='checkbox' name='status' value='Completed'>Sevice Completed. <input type='submit' name='complete' value='Submit'></td>";

        echo "<td><button><a href='ser.php'>Back</button></a></td>";
        echo "</tr>";
?>
</tbody>
</table>
</div>
<?php } }?>
</form>
</body>
</html>