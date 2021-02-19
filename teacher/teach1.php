<?php
session_start();
require 'db_connection.php';
// CHECK USER IF LOGGED IN
if(isset($_SESSION['user_email']) && !empty($_SESSION['user_email'])){

$user_email = $_SESSION['user_email'];
$get_user_data = mysqli_query($db_connection, "SELECT * FROM `users` WHERE user_email = '$user_email'");
$userData =  mysqli_fetch_assoc($get_user_data);
}else{
header('Location: logout.php');
exit;
}
?>
<!DOCTYPE html>
<html lang = "en">
<head>
<meta charset="utf-8" />
<meta name="description" content="Teacher page" />
<meta name="keywords" content="HTML5" />
<meta name="author" content="Umakant Gupta"  />

<title>Teacher Page</title>
<link href="../style/login.css" rel="stylesheet">
<link href="teach1.css" rel="stylesheet">
<body>
<header>
<div class="container">
<h1>Welcome to Teacher Page</h1>
<nav>
<ul>
<li><a href="teach1.php">Home</a></li>
<li><a href="logout.php">Logout</a></li>
</ul>
</nav>
</div>
</header>
<div class="teachbox">
<form action="teach2.php" method="POST">
<h3> Class timings </h3>
<div class = "formelements">
<label for="schools"><b>Please select your School:</b></label>
<?php
$resultSet = $db_connection->query("SELECT school_name FROM school_details");
?>
<p><select name="School" id="school">
<option value="">Please Select the School Name</option>
<?php
while($rows = $resultSet->fetch_assoc())
{
$school_name = $rows['school_name'];
echo "<option value='$school_name'>$school_name</option>";
}
?>
</select> </p>

<input type="submit" name="submit" value="Submit">
</div>
</form>
</div>
</body>
</html>
