<html>
<head>
<style>
  body {
    background-color: silver;
     text-align:initial;
}
h1
{
	background: black;
    color: white;
    text-align: center;
	}
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $ratingErr="";
$name = $email  =$rating =$comment =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } 
  else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } 
  else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
  if (empty($_POST["rating"])) {
    $ratingErr = "rating is required";
  } 
  else {
    $rating = test_input($_POST["rating"]);
    // check if rating only contains number
    if (!preg_match("/^[1-5 ]*$/",$rating)) {
      $ratingErr = "Only numbers allowed"; 
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } 
  else {
    $comment = test_input($_POST["comment"]);
  }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Rating: <input type="text" name="rating" value="<?php echo $rating;?>">
  <span class="error">* <?php echo $ratingErr;?></span>
  <br><br>
  
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $rating;
echo "<br>";
echo $comment;
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name=$_POST['name'];
$email=$_POST['email'];
$rating=$_POST['rating'];
$comment=$_POST['comment'];
$cn=new mysqli("localhost","root","","feedback") or die('not connected');
if($cn->query("insert into feedback values('$name','$email','$rating','$comment')"))
echo "<script>alert('Inserted successfully')</script>";
}
?>

</body>
</html>