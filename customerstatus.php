<?php
$cn = new mysqli("localhost","root","","new") or die('not connected');

if (isset($_POST['complete'])) {
	echo "Service Completed";
}
else
{
	echo "Service Status in  still Pending!!!";
}

 ?>