<!DOCTYPE html>
<html>
<head>
<title> </title>
</head>
<body>
<h2>update date using php</h2>
<p>click on main</p>
<?php 
$connection=mysql_connect("localhost","root","","owner");
$db=mysql_select_db("owner",$connection);
if(isset($_GET['submit'])){
$ownid=$_GET['ownid'];
$ownname=$_GET['ownname'];
$ownadd=$_GET['ownadd'];
$ownphno=$_GET['ownphno'];
$sex=$_GET['sex'];
$vehno=$_GET['vehno'];

$query=mysql_query("update owner set
  owner_id=$'ownid',
  owner_name=$'ownname',
  owner_add=$'ownadd',
  owner_phno=$'ownphno',
  owner_sex=$'sex',
  owner_vehno=$'vehno' where owner_id='$ownid'", $connection);
  while ($row=mysql_fetch_array($query)) {
  
  echo "<b><a herf='update.php? update={$row['ownid']}>{$row['ownname']}</a></b>";
  echo"<br/>";
  }
  ?>
  </div><?php
  if(isset($_GET['update'])){
	  $update=$_GET['update'];
	  $query1=mysql_query("select * from owner where ownid=$update",$connection);
	  while($row1=mysql_fetch_array($query1)){
		  echo "<form class='form' mathod='get'>";
		  echo "<h2> update form</h2>";
		  echo "<hr/>";
		  echo"<input class='input' type='hidden' name='ownid' value='{$row1['ownid']}'/>";
		  echo "<br/>";
		  echo"<lable>" ."ownname:" . "</lable>" ."<br/>";
		  echo"<input class='input' type='text' name='ownname' value='{$row1['owner_name']}'/>";
		  
		  echo "<br/>";
		  echo "<lable>" . "ownadd:" . "</lable>" . "<br/>";
		  echo"<input class='input' type='text' name='ownadd' value='{$row1['owner_add']}'/>";
		  
		  echo "<br/>";
		  echo "<lable>" . "ownphno:" . "</lable>" . "<br/>";
		  echo"<input class='input' type='text' name='ownphno' value='{$row1['owner_phno']}'/>";
		  echo "<br/>";
		  echo "<lable>" . "sex:" . "</lable>" . "<br/>";
		  echo"<input class='input' type='text' name='sex' value='{$row1['owner_sex']}'/>";
		  
		  echo "<br/>";
		  echo "<lable>" . "vehno:" . "</lable>" . "<br/>";
		  echo"<input class='input' type='text' name='vehno' value='{$row1['owner_vehno']}'/>";
		  echo "<br/>";
		  echo "<input class='submit' type='sumit' name='submit' value='update'/>";
		  echo "</form>";
	  }
  }
  if(isset($_GET['submit']))
  {
	  echo '<div class="form" ownid="form3"><br><br><br><br><br><br>
	  <span>data updated successfuly....!!</span></div>';
  }
  ?>
  <div class="clear"><div>
  </div>
  <div class="clear"></div>
  </div>
  </div>
  <?php mysql_close($connection);
  ?>
  </body>
  </html>		  