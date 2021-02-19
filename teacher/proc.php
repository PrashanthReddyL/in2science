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
	  <meta name="author" content="Prashanth Reddy"  />
	  
	  <title>Teacher Page</title>
	  <link href="../style/login.css" rel="stylesheet">
	</head>

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

	<?php
	error_reporting(0);

	$mysqli = NEW Mysqli('localhost', 'root', '', 'school');
	
$school_name = $_POST["sch1"];
$std = $_POST["std"];
$sub = $_POST["sub"];


if (!empty($_POST['Mp1'])) {
	$result1 = $mysqli->query("SELECT P1 FROM timetable WHERE school_name='".$school_name."'");
	$mon = $result1->fetch_assoc();
	$mon = $mon['P1'];
}
if (!empty($_POST['Tp1'])) {
	$result2 = $mysqli->query("SELECT P1 FROM timetable WHERE school_name='".$school_name."'");
	$tue = $result2->fetch_assoc();
	$tue = $tue['P1'];
}
if (!empty($_POST['Wp1'])) {
	$result3 = $mysqli->query("SELECT P1 FROM timetable WHERE school_name='".$school_name."'");
	$wed = $result3->fetch_assoc();
	$wed = $wed['P1'];
}
if (!empty($_POST['Hp1'])) {
	$result4 = $mysqli->query("SELECT P1 FROM timetable WHERE school_name='".$school_name."'");
	$thu = $result4->fetch_assoc();
	$thu = $thu['P1'];
}
if (!empty($_POST['Fp1'])) {
	$result5 = $mysqli->query("SELECT P1 FROM timetable WHERE school_name='".$school_name."'");
	$fri = $result5->fetch_assoc();
	$fri = $fri['P1'];
}

if (!empty($_POST['Mp2'])) {
	$result1 = $mysqli->query("SELECT P2 FROM timetable WHERE school_name='".$school_name."'");
	$mon2 = $result1->fetch_assoc();
	$mon2 = $mon2['P2'];
}
if (!empty($_POST['Tp2'])) {
	$result2 = $mysqli->query("SELECT P2 FROM timetable WHERE school_name='".$school_name."'");
	$tue2 = $result2->fetch_assoc();
	$tue2 = $tue2['P2'];
}
if (!empty($_POST['Wp2'])) {
	$result3 = $mysqli->query("SELECT P2 FROM timetable WHERE school_name='".$school_name."'");
	$wed2 = $result3->fetch_assoc();
	$wed2 = $wed2['P2'];
}
if (!empty($_POST['Hp2'])) {
	$result4 = $mysqli->query("SELECT P2 FROM timetable WHERE school_name='".$school_name."'");
	$thu2 = $result4->fetch_assoc();
	$thu2 = $thu2['P2'];
}
if (!empty($_POST['Fp2'])) {
	$result5 = $mysqli->query("SELECT P2 FROM timetable WHERE school_name='".$school_name."'");
	$fri2 = $result5->fetch_assoc();
	$fri2 = $fri2['P2'];
}

if (!empty($_POST['Mp3'])) {
	$result1 = $mysqli->query("SELECT P3 FROM timetable WHERE school_name='".$school_name."'");
	$mon3 = $result1->fetch_assoc();
	$mon3 = $mon3['P3'];
}
if (!empty($_POST['Tp3'])) {
	$result2 = $mysqli->query("SELECT P3 FROM timetable WHERE school_name='".$school_name."'");
	$tue3 = $result2->fetch_assoc();
	$tue3 = $tue3['P3'];
}
if (!empty($_POST['Wp3'])) {
	$result3 = $mysqli->query("SELECT P3 FROM timetable WHERE school_name='".$school_name."'");
	$wed3 = $result3->fetch_assoc();
	$wed3 = $wed3['P3'];
}
if (!empty($_POST['Hp3'])) {
	$result4 = $mysqli->query("SELECT P3 FROM timetable WHERE school_name='".$school_name."'");
	$thu3 = $result4->fetch_assoc();
	$thu3 = $thu3['P3'];
}
if (!empty($_POST['Fp3'])) {
	$result5 = $mysqli->query("SELECT P3 FROM timetable WHERE school_name='".$school_name."'");
	$fri3 = $result5->fetch_assoc();
	$fri3 = $fri3['P3'];
}

if (!empty($_POST['Mp4'])) {
	$result1 = $mysqli->query("SELECT P4 FROM timetable WHERE school_name='".$school_name."'");
	$mon4 = $result1->fetch_assoc();
	$mon4 = $mon4['P4'];
}
if (!empty($_POST['Tp4'])) {
	$result2 = $mysqli->query("SELECT P4 FROM timetable WHERE school_name='".$school_name."'");
	$tue4 = $result2->fetch_assoc();
	$tue4 = $tue4['P4'];
}
if (!empty($_POST['Wp4'])) {
	$result3 = $mysqli->query("SELECT P4 FROM timetable WHERE school_name='".$school_name."'");
	$wed4 = $result3->fetch_assoc();
	$wed4 = $wed4['P4'];
}
if (!empty($_POST['Hp4'])) {
	$result4 = $mysqli->query("SELECT P4 FROM timetable WHERE school_name='".$school_name."'");
	$thu4 = $result4->fetch_assoc();
	$thu4 = $thu4['P4'];
}
if (!empty($_POST['Fp4'])) {
	$result5 = $mysqli->query("SELECT P4 FROM timetable WHERE school_name='".$school_name."'");
	$fri4 = $result5->fetch_assoc();
	$fri4 = $fri4['P4'];
}

if (!empty($_POST['Mp5'])) {
	$result1 = $mysqli->query("SELECT P5 FROM timetable WHERE school_name='".$school_name."'");
	$mon5 = $result1->fetch_assoc();
	$mon5 = $mon5['P5'];
}
if (!empty($_POST['Tp5'])) {
	$result2 = $mysqli->query("SELECT P5 FROM timetable WHERE school_name='".$school_name."'");
	$tue5 = $result2->fetch_assoc();
	$tue5 = $tue5['P5'];
}
if (!empty($_POST['Wp5'])) {
	$result3 = $mysqli->query("SELECT P5 FROM timetable WHERE school_name='".$school_name."'");
	$wed5 = $result3->fetch_assoc();
	$wed5 = $wed5['P5'];
}
if (!empty($_POST['Hp5'])) {
	$result4 = $mysqli->query("SELECT P5 FROM timetable WHERE school_name='".$school_name."'");
	$thu5 = $result4->fetch_assoc();
	$thu5 = $thu5['P5'];
}
if (!empty($_POST['Fp5'])) {
	$result5 = $mysqli->query("SELECT P5 FROM timetable WHERE school_name='".$school_name."'");
	$fri5 = $result5->fetch_assoc();
	$fri5 = $fri5['P5'];
}

if (!empty($_POST['Mp6'])) {
	$result1 = $mysqli->query("SELECT P6 FROM timetable WHERE school_name='".$school_name."'");
	$mon6 = $result1->fetch_assoc();
	$mon6 = $mon6['P6'];
}
if (!empty($_POST['Tp6'])) {
	$result2 = $mysqli->query("SELECT P6 FROM timetable WHERE school_name='".$school_name."'");
	$tue6 = $result2->fetch_assoc();
	$tue6 = $tue6['P6'];
}
if (!empty($_POST['Wp6'])) {
	$result3 = $mysqli->query("SELECT P6 FROM timetable WHERE school_name='".$school_name."'");
	$wed6 = $result3->fetch_assoc();
	$wed6 = $wed6['P6'];
}
if (!empty($_POST['Hp6'])) {
	$result4 = $mysqli->query("SELECT P6 FROM timetable WHERE school_name='".$school_name."'");
	$thu6 = $result4->fetch_assoc();
	$thu6 = $thu6['P6'];
}
if (!empty($_POST['Fp6'])) {
	$result5 = $mysqli->query("SELECT P6 FROM timetable WHERE school_name='".$school_name."'");
	$fri6 = $result5->fetch_assoc();
	$fri6 = $fri6['P6'];
}


// Timwtable 2

if (!empty($_POST['Mp21'])) {
	$result1 = $mysqli->query("SELECT P1 FROM timetable WHERE school_name='".$school_name."'");
	$mon1 = $result1->fetch_assoc();
	$mon1 = $mon1['P1'];
}
if (!empty($_POST['Tp21'])) {
	$result2 = $mysqli->query("SELECT P1 FROM timetable WHERE school_name='".$school_name."'");
	$tue1 = $result2->fetch_assoc();
	$tue1 = $tue1['P1'];
}
if (!empty($_POST['Wp21'])) {
	$result3 = $mysqli->query("SELECT P1 FROM timetable WHERE school_name='".$school_name."'");
	$wed1 = $result3->fetch_assoc();
	$wed1 = $wed1['P1'];
}
if (!empty($_POST['Hp21'])) {
	$result4 = $mysqli->query("SELECT P1 FROM timetable WHERE school_name='".$school_name."'");
	$thu1 = $result4->fetch_assoc();
	$thu1 = $thu1['P1'];
}
if (!empty($_POST['Fp21'])) {
	$result5 = $mysqli->query("SELECT P1 FROM timetable WHERE school_name='".$school_name."'");
	$fri1 = $result5->fetch_assoc();
	$fri1 = $fri1['P1'];
}

if (!empty($_POST['Mp22'])) {
	$result1 = $mysqli->query("SELECT P2 FROM timetable WHERE school_name='".$school_name."'");
	$mon22 = $result1->fetch_assoc();
	$mon22 = $mon22['P2'];
}
if (!empty($_POST['Tp22'])) {
	$result2 = $mysqli->query("SELECT P2 FROM timetable WHERE school_name='".$school_name."'");
	$tue22 = $result2->fetch_assoc();
	$tue22 = $tue22['P2'];
}
if (!empty($_POST['Wp22'])) {
	$result3 = $mysqli->query("SELECT P2 FROM timetable WHERE school_name='".$school_name."'");
	$wed22 = $result3->fetch_assoc();
	$wed22 = $wed22['P2'];
}
if (!empty($_POST['Hp22'])) {
	$result4 = $mysqli->query("SELECT P2 FROM timetable WHERE school_name='".$school_name."'");
	$thu22 = $result4->fetch_assoc();
	$thu22 = $thu22['P2'];
}
if (!empty($_POST['Fp22'])) {
	$result5 = $mysqli->query("SELECT P2 FROM timetable WHERE school_name='".$school_name."'");
	$fri22 = $result5->fetch_assoc();
	$fri22 = $fri22['P2'];
}

if (!empty($_POST['Mp23'])) {
	$result1 = $mysqli->query("SELECT P3 FROM timetable WHERE school_name='".$school_name."'");
	$mon33 = $result1->fetch_assoc();
	$mon33 = $mon33['P3'];
}
if (!empty($_POST['Tp23'])) {
	$result2 = $mysqli->query("SELECT P3 FROM timetable WHERE school_name='".$school_name."'");
	$tue33 = $result2->fetch_assoc();
	$tue33 = $tue33['P3'];
}
if (!empty($_POST['Wp23'])) {
	$result3 = $mysqli->query("SELECT P3 FROM timetable WHERE school_name='".$school_name."'");
	$wed33 = $result3->fetch_assoc();
	$wed33 = $wed33['P3'];
}
if (!empty($_POST['Hp23'])) {
	$result4 = $mysqli->query("SELECT P3 FROM timetable WHERE school_name='".$school_name."'");
	$thu3 = $result4->fetch_assoc();
	$thu33 = $thu33['P3'];
}
if (!empty($_POST['Fp23'])) {
	$result5 = $mysqli->query("SELECT P3 FROM timetable WHERE school_name='".$school_name."'");
	$fri33 = $result5->fetch_assoc();
	$fri33 = $fri33['P3'];
}

if (!empty($_POST['Mp24'])) {
	$result1 = $mysqli->query("SELECT P4 FROM timetable WHERE school_name='".$school_name."'");
	$mon44 = $result1->fetch_assoc();
	$mon44 = $mon44['P4'];
}
if (!empty($_POST['Tp24'])) {
	$result2 = $mysqli->query("SELECT P4 FROM timetable WHERE school_name='".$school_name."'");
	$tue44 = $result2->fetch_assoc();
	$tue44 = $tue44['P4'];
}
if (!empty($_POST['Wp24'])) {
	$result3 = $mysqli->query("SELECT P4 FROM timetable WHERE school_name='".$school_name."'");
	$wed44 = $result3->fetch_assoc();
	$wed44 = $wed44['P4'];
}
if (!empty($_POST['Hp24'])) {
	$result4 = $mysqli->query("SELECT P4 FROM timetable WHERE school_name='".$school_name."'");
	$thu44 = $result4->fetch_assoc();
	$thu44 = $thu44['P4'];
}
if (!empty($_POST['Fp24'])) {
	$result5 = $mysqli->query("SELECT P4 FROM timetable WHERE school_name='".$school_name."'");
	$fri44 = $result5->fetch_assoc();
	$fri44 = $fri44['P4'];
}

if (!empty($_POST['Mp25'])) {
	$result1 = $mysqli->query("SELECT P5 FROM timetable WHERE school_name='".$school_name."'");
	$mon55 = $result1->fetch_assoc();
	$mon55 = $mon55['P5'];
}
if (!empty($_POST['Tp25'])) {
	$result2 = $mysqli->query("SELECT P5 FROM timetable WHERE school_name='".$school_name."'");
	$tue55 = $result2->fetch_assoc();
	$tue55 = $tue55['P5'];
}
if (!empty($_POST['Wp25'])) {
	$result3 = $mysqli->query("SELECT P5 FROM timetable WHERE school_name='".$school_name."'");
	$wed55 = $result3->fetch_assoc();
	$wed55 = $wed55['P5'];
}
if (!empty($_POST['Hp25'])) {
	$result4 = $mysqli->query("SELECT P5 FROM timetable WHERE school_name='".$school_name."'");
	$thu55 = $result4->fetch_assoc();
	$thu55 = $thu55['P5'];
}
if (!empty($_POST['Fp25'])) {
	$result5 = $mysqli->query("SELECT P5 FROM timetable WHERE school_name='".$school_name."'");
	$fri55 = $result5->fetch_assoc();
	$fri55 = $fri55['P5'];
}

if (!empty($_POST['Mp26'])) {
	$result1 = $mysqli->query("SELECT P6 FROM timetable WHERE school_name='".$school_name."'");
	$mon66 = $result1->fetch_assoc();
	$mon66 = $mon66['P6'];
}
if (!empty($_POST['Tp26'])) {
	$result2 = $mysqli->query("SELECT P6 FROM timetable WHERE school_name='".$school_name."'");
	$tue66 = $result2->fetch_assoc();
	$tue66 = $tue66['P6'];
}
if (!empty($_POST['Wp26'])) {
	$result3 = $mysqli->query("SELECT P6 FROM timetable WHERE school_name='".$school_name."'");
	$wed66 = $result3->fetch_assoc();
	$wed66 = $wed66['P6'];
}
if (!empty($_POST['Hp26'])) {
	$result4 = $mysqli->query("SELECT P6 FROM timetable WHERE school_name='".$school_name."'");
	$thu66 = $result4->fetch_assoc();
	$thu66 = $thu66['P6'];
}
if (!empty($_POST['Fp26'])) {
	$result5 = $mysqli->query("SELECT P6 FROM timetable WHERE school_name='".$school_name."'");
	$fri66 = $result5->fetch_assoc();
	$fri66 = $fri66['P6'];
}

$head = 'Monday'. ",".'Tuesday'. ",".'Wednesday'. ",".'Thursday'. ",".'Friday';

$data =$mon. ",".$tue. ",".$wed. ",".$thu. ",".$fri ;
$data2=$mon2.",".$tue2.",".$wed2.",".$thu2.",".$fri2;
$data3=$mon3.",".$tue3.",".$wed3.",".$thu3.",".$fri3;
$data4=$mon4.",".$tue4.",".$wed4.",".$thu4.",".$fri4;
$data5=$mon5.",".$tue5.",".$wed5.",".$thu5.",".$fri5;
$data6=$mon6.",".$tue6.",".$wed6.",".$thu6.",".$fri6;

$data1 =$mon1. ",".$tue1. ",".$wed1. ",".$thu1. ",".$fri1 ;
$data22=$mon22.",".$tue22.",".$wed22.",".$thu22.",".$fri22;
$data33=$mon33.",".$tue33.",".$wed33.",".$thu33.",".$fri33;
$data44=$mon44.",".$tue44.",".$wed44.",".$thu44.",".$fri44;
$data55=$mon55.",".$tue55.",".$wed55.",".$thu55.",".$fri55;
$data66=$mon66.",".$tue66.",".$wed66.",".$thu66.",".$fri66;

$file="../Doc/$school_name "."$std "."$sub".".csv";

file_put_contents($file, $head . PHP_EOL);
file_put_contents($file, $data . PHP_EOL, FILE_APPEND);
file_put_contents($file, $data2 . PHP_EOL, FILE_APPEND);
file_put_contents($file, $data3 . PHP_EOL, FILE_APPEND);
file_put_contents($file, $data4 . PHP_EOL, FILE_APPEND);
file_put_contents($file, $data5 . PHP_EOL, FILE_APPEND);
file_put_contents($file, $data6 . PHP_EOL, FILE_APPEND);
file_put_contents($file, $data1 . PHP_EOL, FILE_APPEND);
file_put_contents($file, $data22 . PHP_EOL, FILE_APPEND);
file_put_contents($file, $data33 . PHP_EOL, FILE_APPEND);
file_put_contents($file, $data44 . PHP_EOL, FILE_APPEND);
file_put_contents($file, $data55 . PHP_EOL, FILE_APPEND);
file_put_contents($file, $data66 . PHP_EOL, FILE_APPEND);
print " Thank you for submitting your Timetable! ";


?>
    
</body>
</html>