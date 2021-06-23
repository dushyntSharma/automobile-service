<?php
$username=$_POST['username'];
$password=$_POST['password'];
$gender=$_POST['gender'];
$email=$_POST['Email'];
$phonecode=$_POST['phonecode'];
$phone=$_POST['phone'];

if (!empty($username) || !empty($password) || !empty($gender)  || !empty($Email) || !empty($phonecode) || !empty($phone)) {
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="register";
$conn =new mysqli($host, $dbusername, $dbpassword, $dbname);

 if (mysqli_connect_error()) {
   die('connect error('. mysqli_connect_error().')'. mysqli_connect_error());
} else {
$SELECT="SELECT email From register where email=? limit 1";
$INSERT="INSERT into register(username,password,gender,Email,phonecode,phone) values(? ,?, ?, ?, ?, ?,?)";

$stmt=$conn->prepare($SELECT);
$stmt->bind_param("s",$Email);
$stmt->execute();
$stmt->bind_result($Email);
$stmt->store_result();
$rnum=$stmt->num_rows;
if ($rnum==0) {
    $stmt->close();

    $stmt=$conn->prepare($INSERT);
	    $stmt->bind_param("ssssii",$username,$password,$gender,$Email,$phonecode,$phone);
    $stmt->execute();
    echo "New data inserted successfully";

}else{
    echo "someone already register using this Email";
}
    $stmt->close();
    $conn->close();
}
}else{
echo "all field are requried";
die();
}
?>