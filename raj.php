<?php
$services=$_POST['services'];
$amount=$_POST['amount'];

// Create connection
$cn = new mysqli("localhost","root","","services");
// Check connection
if ($cn->connect_error) {
    die("Connection failed: " . $cn->connect_error);
} 

$cn->query("INSERT INTO services1 (services,amount) VALUES ('services',amount)");

if($cn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $cn->error;
}

$cn->close();
?>
