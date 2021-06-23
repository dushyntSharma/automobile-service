
<!DOCTYPE HTML>
<html>
<head>
</head>
<body style="background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(images/1.jpg); background-size:cover;">
<center>
<h1>FEEDBACK</h1>
<style>
  h1.login h1 {
  background-image: linear-gradient(top, #f1f3f3, #d4dae0);
  border-bottom: 1px solid #a6abaf;
  border-radius: 6px 6px 0 0;
  box-sizing: border-box;
  color: #727678;
  display: black;
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
a{

	color: blue;
	font-family: sans-serif;
}
a{

	color: white;
	font-family: sans-serif;
}
h3
{
	color: white;
}
h1
{
	background-color: white;
	color:orange;

}
button{

background-color: orange;
color: white;
}
</style>
<?php
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$rating=$_POST['rating'];
$comment=$_POST['comment'];
$cn=new mysqli("localhost","root","","feedback") or die('not connected');
$sql= "INSERT INTO feedback(name,email,rating,comment) 
VALUES ('$name','$email','$rating','$comment')";
$data = mysqli_query($cn,$sql);
if($data)
{
echo "<script>alert('Inserted successfully')</script>";
}
else
{
	echo "<script> not inserted</script>";
}
}
?>
<form action="" method="POST">
              <table>
<tr>
  <h3> Name:
         <input type="text" placeholder="name" name="name" size="20"
         maxlength="20"  required>
      <br><br>
     </tr>
<tr>
  <h3> Email:
         <input type="text" placeholder="email" name="email" size="20"
         maxlength="20" required>
  <br><br>
     </tr>
	 <tr>
 <h3>Rating:
         <input type="text" placeholder="1 to 5" name="rating" size="20"
         maxlength="20">
 <br><br>

</tr>
<tr>
<h3>Comment: <textarea  type="text" placeholder="messege" name="comment" size="40"
         maxlength="500">
       </textarea>
	   <br><br>
   </tr>
<input type="submit" name="submit" value="submit"></br>

	<button><a href="custhome.php">Back</a></button></br></br>
</centre>
</body>
</html>