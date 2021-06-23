<?php
	if(isset($_POST['updatestatus'])){
		$cn=new mysqli("localhost","root","","owner") or die("Failed to connect");
		foreach($_POST as $x=>$x_value)
		 if(!$cn->query("UPDATE SERVIN SET STATUS='Completed' WHERE VEHNO='$x'"))
		 	echo $cn->error;
		 else
		 	echo "Success";
	}
	echo "<script>alert('Success');location.href='ser.php'</script>";
?>