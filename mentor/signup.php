<?php 
session_start();
require 'db_connection.php';
require 'insert_user.php';
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
<title>Register Mentor</title>
<link rel="stylesheet" href="../style/login.css" media="all" type="text/css">
</head>

<body>
<div class="regbox">
<form action="" method="post">
<h2>Mentor Registration</h2>

<div class="container">
<label for="fullname"><b>Full Name</b></label>
<input type="text" placeholder="Enter fullname" id="fullname" name="fullname" required>

<label for="username"><b>MentorID</b></label>
<input type="text" placeholder="Enter mentorid" id="username" name="username" required>

<label for="email"><b>Email</b></label>
<input type="email" placeholder="Enter email" id="email" name="user_email" required>

<label for="password"><b>Password</b></label>
<input type="password" placeholder="Enter password" id="password" name="user_password" required>

<label for="phone"><b>Ph.No.</b></label>
<input type="text" placeholder="Enter phone number" id="phone" name="phone" required>

<label for="university"><b>University</b></label>
<p><select id = "myList" name="myList">
               <option value = "Swinburne University">Swinburne University</option>
               <option value = "La Trobe University">La Trobe University</option>
               <option value = "Monash University">Monash University</option>
               <option value = "Melbourne University">Melbourne University</option>
               <option value = "RMIT University">RMIT University</option>
             </select></p>

<input type="submit" value="Register">
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
<a href="index.php"><button type="button" class="Regbtn">Already Registered?</button></a>
</div>
</form>
</div>
</body></html>