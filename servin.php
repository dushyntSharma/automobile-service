

<?php
session_start();
$cn = new mysqli("localhost","root","","owner") or die('not connected');
if (isset($_POST['submit'])) 
{

    $a = $_POST['a'];
    $b= isset($_POST['b'])?$_POST['b']:"No";
    $c = isset($_POST['c'])?$_POST['c']:"No";
    $d = isset($_POST['d'])?$_POST['d']:"No";
    $e = isset($_POST['e'])?$_POST['e']:"No";



    if ($a !="")
{

    if($b !="No" || $c !="No" || $d !="No" || $e !="No") {
 
    $query = "UPDATE SERVIN SET ENGINESERVICE='$b',OILSERVICE='$c',WATERSERVICE='$d',ENGINEREPLACE='$e' WHERE VEHNO='$a'";
    
    $data = mysqli_query($cn, $query);
  if ($data) 
    {
echo "<script>alert('Service details submitted successfully.')</script>";
}
else
  echo "<script>alert('Not inserted".$cn->error."')</script>";
}
else{
  echo "<script>alert('Select Atleast One Service')</script>";
}
}

}


$user=$_SESSION['user'];

$vno=$cn->query("SELECT vehno FROM OWNER WHERE user='$user'");
$vno=$vno->fetch_array();
echo $cn->error;
$row=$cn->query("SELECT * FROM SERVIN WHERE VEHNO='$vno[0]'");
$row=$row->fetch_array();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Customer : Services</title>
</head>
<style type="text/css">
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
  margin: 31px 0 0 29px;
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
  padding-top:6px;
  margin: 29px 0 0 29px;
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
.back {
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
  padding-top:6px;
  margin: 29px 0 0 29px;
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
button{
    padding: 5px;
    border-radius: 5px;
    margin: 2px;
    display: block;
width: 200px;
border: 2px;
background-color: white;
color: blue;
font-family: sans-serif;
text-align: center;
}
button{
border: .5px solid black;
background-color:orange;
color: white;
}
h1,h2,h4,h3
{
  color: white;
}
</style>
<body>
<body style="background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(images/custtt.jpg); background-size:cover;">
<table>
  

     <form action="servin.php" method="POST">
     <center>
<h4>Vehicle Number:    
<input type="text" placeholder="Vehicle No." name="a" value="<?php echo $vno[0] ?>" required>

     <h1>SERVICES AVAILABLE </h1>
    <p><h3><input type="checkbox" name="b" value="Yes" <?php if($row['engineservice']=="Yes") echo "checked"?>> ENGINE SERVICE (₹1200)</h3></p>
   <p><h3><input type="checkbox" name="c"  value="Yes" <?php if($row['oilservice']=="Yes") echo "checked"?>> OIL FILTRATION (₹800)</h3></p>
   <p><h3><input type="checkbox" name="d"  value="Yes" <?php if($row['waterservice']=="Yes") echo "checked"?>> WASH SERVICE (₹400)</h3></p>
   <p><h3><input type="checkbox" name="e" value="Yes" <?php if($row['enginereplace']=="Yes") echo "checked"?>>ONE-DAY SERVICE (₹5000)</h3></p>

<input type="submit" name="submit" value="Submit">
<button class='back'> <a href="custhome.php">Back</a></button></br>
<button><a href="billing.php">GENERATE BILL</a></button>
</center>
</form>

</table>





</body>
</html>

