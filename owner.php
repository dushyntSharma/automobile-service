<?php
$cn=new mysqli("localhost","root","","owner") or die('not connected');
if (isset($_POST['submit'])) {
session_start();
$_SESSION['vehno'] = $_POST['vehno']; 
$_SESSION['user'] = $_POST['user']; 
$_SESSION['ownname'] = $_POST['ownname']; 

$user=$_POST['user'];
$pass=$_POST['pass'];
$ownname=$_POST['ownname'];
$ownphno=$_POST['ownphno'];
$sex=$_POST['sex'];
$vehno=$_POST['vehno'];
$ownadd=$_POST['ownadd'];

if($user != "" && $pass != "" && $ownname != "" && $ownphno != "" && $sex != "" && $vehno != "" && $ownadd != ""){
$sql= "INSERT INTO OWNER(ownid,user,pass,ownname,ownphno,sex,vehno,ownadd) 
VALUES (NULL,'$user','$pass','$ownname','$ownphno','$sex','$vehno','$ownadd')";
$data = mysqli_query($cn,$sql);
if ($data) {
echo "<script>alert('Inserted successfully')</script>";
header('location:newlogin.php');
}
else{
  echo "<script>alert('EXISTED RECORD, Not Inserted')</script>";
}
}
else{
	echo "Fill all the fields!";
}
}

else{
?>



<!DOCTYPE HTML>
<html>
<head>
<title>Registration</title>
</head>
<style>

body {
    background-color: silver;
    background-image: url(images/5.jpg);
    background-repeat:no-repeat;
    background-size:cover;
}
h1
{
	background: black;
    color: white;
    text-align: center;
}
h4
{
    color: white;
    
}
html { height: 100% }
::-moz-selection { background: #fe57a1; color: #fff; text-shadow: none; }
::selection { background: #fe57a1; color: #fff; text-shadow: none; }
body { background-image: radial-gradient( cover, rgba(92,100,111,1) 0%,rgba(31,35,40,1) 100%), url('http://i.minus.com/io97fW9I0NqJq.png') }
.login {
  background: #eceeee;
  border: 1px solid #42464b;
  border-radius: 6px;
  height: 257px;
  margin: 20px auto 0;
  width: 298px;
}
.login h1 {
  background-image: linear-gradient(top, #f1f3f3, #d4dae0);
  border-bottom: 1px solid #a6abaf;
  border-radius: 6px 6px 0 0;
  box-sizing: border-box;
  color: #727678;
  display: block;
  height: 43px;
  font: 600 14px/1 'Open Sans', sans-serif;
  padding-top: 14px;
  margin: 0;
  text-align: center;
  text-shadow: 0 -1px 0 rgba(0,0,0,0.2), 0 1px 0 #fff;
}
input[type="password"], input[type="text"] {
  background: url('http://i.minus.com/ibhqW9Buanohx2.png') center left no-repeat, linear-gradient(top, #d6d7d7, #dee0e0);
  border: 1px solid #a1a3a3;
  border-radius: 4px;
  box-shadow: 0 1px #fff;
  box-sizing: border-box;
  color: #696969;
  height: 39px;
  margin: 21px 0 0 29px;
  padding-left: 37px;
  transition: box-shadow 0.3s;
  width: 240px;
}
input[type="password"]:focus, input[type="text"]:focus {
  box-shadow: 0 0 4px 1px rgba(55, 166, 155, 0.3);
  outline: 0;
}
.show-password {
  display: block;
  height: 16px;
  margin: 26px 0 0 28px;
  width: 87px;
}
input[type="checkbox"] {
  cursor: pointer;
  height: 16px;
  opacity: 0;
  position: relative;
  width: 64px;
}
input[type="checkbox"]:checked {
  left: 29px;
  width: 58px;
}
.toggle {
  background: url(http://i.minus.com/ibitS19pe8PVX6.png) no-repeat;
  display: block;
  height: 16px;
  margin-top: -20px;
  width: 87px;
  z-index: -1;
}
input[type="checkbox"]:checked + .toggle { background-position: 0 -16px }
.forgot {
  color: #7f7f7f;
  display: inline-block;
  float: right;
  font: 12px/1 sans-serif;
  left: -19px;
  position: relative;
  text-decoration: none;
  top: 5px;
  transition: color .4s;
}
.forgot:hover { color: #3b3b3b }
input[type="submit"] {
  width:240px;
  height:35px;
  display:block;
  font-family:Arial, "Helvetica", sans-serif;
  font-size:16px;
  font-weight:bold;
  color:#fff;
  text-decoration:none;
  text-transform:uppercase;
  text-align:center;
  text-shadow:1px 1px 0px #37a69b;
  padding-top:3px;
  margin: 21px 1 1 21px;
  position:relative;
  cursor:pointer;
  border: none;  
  background-color: #37a69b;
  background-image: linear-gradient(top,#3db0a6,#3111);
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
  border-bottom-right-radius: 5px;
  border-bottom-left-radius:5px;
  box-shadow: inset 0px 1px 0px #2ab7ec, 0px 5px 0px 0px #497a78, 0px 10px 5px #999;
}

.shadow {
  background: #000;
  border-radius: 6px 6px 4px 2px;
  box-shadow: 0 0 20px 10px #000;
  height: 12px;
  margin: 60px auto;
  opacity: 0.2;
  width: 270px;
}


input[type="submit"]:active {
  top:3px;
  box-shadow: inset 0px 1px 0px #2ab7ec, 0px 2px 0px 0px #31524d, 0px 5px 3px #999;
}
a{

    color: blue;
    font-family: sans-serif;
}
button{

background-color: orange;
color: white;
 height: 40px;
  width: 220px;
}
select{
     background: #eceeee;
  border: 1px solid #42464b;
  border-radius: 0px;
  height: 40px;
  margin: 10px auto 0;
  width: 220px;
}
</style>

<body>
<div align="center" class="container">
<form action="owner.php" method="POST">


<h1>Registration </h1>
<?php 
echo "<h3><span style='color:red'>*</span><span style='color:white'> All fields are Required!</span></h3>";
} 
?>

<table>
<td align='center'><h4>Username :</h4></td><td><input type="text" name="user" placeholder="Username" required></td></tr>
<td align='center'><h4>Password :</h4></td><td><input type="password" name="pass" placeholder="Password" required></td></tr>
<td align='center'><h4>Name :</h4></td><td><input type="text" name="ownname" placeholder="Name" required></td></tr>
<td align='center'><h4>Phone no :</h4></td><td><input type="text" name="ownphno" placeholder="phno" required></td></tr>
<td align='center'><h4>Gender :</h4></td><td>
<select name="sex" placeholder="gender"  required>
	<option value="M">Male</option>
	<option value="F">Female</option>
</select></td></tr>
<td align='center'><h4>Vehicle No :</h4></td><td><input type="text" name="vehno" placeholder="Vehicle No" required></td></tr>
<td align='center'><h4>Address :</h4></td><td> <input type="text" name="ownadd" placeholder="Address" required></td></tr>
</table></br>
<td></td><td align='center'><input type="submit" name="submit" value="Submit"></td></tr></br>
 <td></td><td align='center'><button><a href="cust.html">Back</a></button></td></tr>
</form>
</div>
</body>
</html>