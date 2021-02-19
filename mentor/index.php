<?php
session_start();
require 'db_connection.php';
require 'login.php';
// IF USER LOGGED IN
if(isset($_SESSION['user_email'])){
header('Location: home.php');
exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Mentor Login</title>
<link rel="stylesheet" href="../style/login.css" media="all" type="text/css">
</head>

<body>
	<header>

			<div class="container">
				<h1>In2science</h1>
				<nav>
			<ul>
				<li><a class="active" href="../index.html">Home</a></li>
				<li><a href="../teacher/index.php">Teachers</a></li>
				<li><a href="index.php">Mentors</a></li>
				<li><a href="../coordinator/index.php">Co-ordinators</a></li>
			</ul>
			</nav>
		</div>
	</header>
<div class="box">
<form action="" method="post">
<h2>Mentor Login</h2>

<div class="container">
<label>Email</label>
<input type="email"  id="email" name="user_email" required="">
</div>
<div class="container">
<label>Password</label>
<input type="password"  id="password" name="user_password" required="">
<div>
<input type="submit" value="Login">
</div>
<?php
if(isset($success_message)){
echo '<div class="success_message">'.$success_message.'</div>'; 
}
if(isset($error_message)){
echo '<div class="error_message">'.$error_message.'</div>'; 
}
?>
<div class="container">
<a href="signup.php"><button type="button" class="Regbtn">Not Registered?</button></a>
</div>
</form>
</div>
</body></html>