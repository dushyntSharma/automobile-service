<?php
$ownid=$_GET['delname'];
$cn=new mysqli("localhost","root","","owner");
echo var_dump($cn->query("DELETE FROM OWNER WHERE OWNID='$ownid'"));
echo "<script>location.href='dele.php'</script>";
?>