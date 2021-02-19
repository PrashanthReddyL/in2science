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
<div class="teachbox">
<form action="teach3.php" method="POST">
<div class = "formelements">
<?php 
$sch1 = $_POST['School'];
echo "Your School : ".$sch1;
$mysqli = NEW Mysqli('localhost', 'root', '', 'school');
$resultSet1 = $mysqli->query("SELECT uni_part FROM school_details WHERE school_name='".$sch1."'");
while ($row= $resultSet1->fetch_assoc()) {
echo "<br> Partner University : ".$row['uni_part'];
}
?>
<input type="hidden" name="School" value="<?php echo $_POST['School']; ?>">
<p id = "subjectheading">Choose the standard and subject to submit your timetable:</p>
<p>Please select the standard:</p>  <select id = "standard" name="standard" >  
<option value="">-------</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
</select> 
<br>
<p>Please select the subject:</p>  <select id = "subject" name="subject" >  
<option value="">-------------</option>
<option value="Science">Science</option>
<option value="Mathematics">Mathematics</option>
<option value="Engineering">Engineering</option>
</select> <br>
<input type="submit" value="submit">
</div>
</form>
</body>
</html>
