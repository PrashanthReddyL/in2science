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
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Mentor Login</title>
<link rel="stylesheet" href="../style/login.css" media="all" type="text/css">
</head>
</head> 
<body>
	<header>
	<div class="container">
	<h1>Welcome to Mentor Availability Page</h1>
	
		<nav>
			<ul>
				<li><a href="home.php">Home</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		
			</nav>
	</div>
</header>
	<?php
	error_reporting(0);
	
$Mentor_name = $_POST["Mentor_id"];

$mon = $_POST['Mp1'];
$tue = $_POST['Tp1'];
$wed = $_POST['Wp1'];
$thu = $_POST['Hp1'];
$fri = $_POST['Fp1'];

$mon2 = $_POST['Mp2'];
$tue2 = $_POST['Tp2'];
$wed2 = $_POST['Wp2'];
$thu2 = $_POST['Hp2'];
$fri2 = $_POST['Fp2'];

$mon3 = $_POST['Mp3'];
$tue3 = $_POST['Tp3'];
$wed3 = $_POST['Wp3'];
$thu3 = $_POST['Hp3'];
$fri3 = $_POST['Fp3'];

$mon4 = $_POST['Mp4'];
$tue4 = $_POST['Tp4'];
$wed4 = $_POST['Wp4'];
$thu4 = $_POST['Hp4'];
$fri4 = $_POST['Fp4'];

$mon5 = $_POST['Mp5'];
$tue5 = $_POST['Tp5'];
$wed5 = $_POST['Wp5'];
$thu5 = $_POST['Hp5'];
$fri5 = $_POST['Fp5'];

$mon6 = $_POST['Mp6'];
$tue6 = $_POST['Tp6'];
$wed6 = $_POST['Wp6'];
$thu6 = $_POST['Hp6'];
$fri6 = $_POST['Fp6'];


$head = 'Monday'. ",".'Tuesday'. ",".'Wednesday'. ",".'Thursday'. ",".'Friday';

$data =$mon. ",".$tue. ",".$wed. ",".$thu. ",".$fri ;
$data2=$mon2.",".$tue2.",".$wed2.",".$thu2.",".$fri2;
$data3=$mon3.",".$tue3.",".$wed3.",".$thu3.",".$fri3;
$data4=$mon4.",".$tue4.",".$wed4.",".$thu4.",".$fri4;
$data5=$mon5.",".$tue5.",".$wed5.",".$thu5.",".$fri5;
$data6=$mon6.",".$tue6.",".$wed6.",".$thu6.",".$fri6;


$file="../Doc/$Mentor_name.csv";

file_put_contents($file, $head  . PHP_EOL);
file_put_contents($file, $data  . PHP_EOL, FILE_APPEND);
file_put_contents($file, $data2 . PHP_EOL, FILE_APPEND);
file_put_contents($file, $data3 . PHP_EOL, FILE_APPEND);
file_put_contents($file, $data4 . PHP_EOL, FILE_APPEND);
file_put_contents($file, $data5 . PHP_EOL, FILE_APPEND);
file_put_contents($file, $data6 . PHP_EOL, FILE_APPEND);

print " Thank you for submitting your Availability! ";


?>
    
</body>
</html>