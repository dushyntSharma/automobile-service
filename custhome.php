<?php 

session_start();

 ?>






 <!DOCTYPE html>
 <html>
 <head>
 	<title>Customer : Home</title>
 </head>
 <style>
  body {
    background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(images/bg1.jpg);
    background-size:cover;">
     text-align:initial;
}
h1
{
	background: black;
    color: white;
    text-align: center;
	}
	button{
		padding: 20px;
		border-radius: 5px;
		margin: 2px;
		display: block;
width: 200px;
border: 5px;
background-color: white;
color: blue;
font-family: sans-serif;
text-align: center;
}
a{

	color: blue;
	font-family: sans-serif;
}
a:hover{

	color: white;
	font-family: sans-serif;
}
button:hover{

background-color:yellow;
color: white;
}
</style>

 <body>
 	<center>
<form action="" method="POST">
<h1> Customer Homepage</h1>

<?php 

echo "<h2>Welcome ".$_SESSION['user'].", Feel free to browse</h2>";

 ?>

<button><a href="servin.php">Services</a> </button>


<button><a href="status.php">Status</a></button>
<button> <a href="feed1.php">Feedback</a></button>
<button> <a href="cust.html">Logout</a></button>





</form>
</center>
 </body>
 </html>