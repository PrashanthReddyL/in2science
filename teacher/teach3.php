<!DOCTYPE html>
<html lang = "en">
<head>
<meta charset="utf-8" />
<meta name="description" content="Teacher page" />
<meta name="keywords" content="HTML5" />
<meta name="author" content="Umakant Gupta"  />
<link rel="stylesheet" type="text/css" href="../style/table.css">
<title>Teacher Page</title>
</head>
<body>
<script>
function showTables1() {
if (document.getElementById('table1').style.display == 'none' && document.getElementById('table2').style.display == 'none') {
document.getElementById('table1').style.display = 'block';
document.getElementById('table2').style.display = 'none';
}
else{
document.getElementById('table2').style.display = 'none';
}     
document.getElementById('finalbutton').style.display = 'block';
}
function showTables2() {
if (document.getElementById('table2').style.display == 'none' ){
document.getElementById('table2').style.display = 'block';
document.getElementById('table1').style.display = 'block';
}
document.getElementById('finalbutton').style.display = 'block';
}
function displayButton(){
if (document.getElementById('finalbutton').style.display == 'none' ){
document.getElementById('finalbutton').style.display = 'block';
}
}
</script>
<header>
<div>
<h1>Welcome to Teacher Page</h1>
<nav>
<ul>
<li><a href="teach1.php">Home</a></li>
<li><a href="logout.php">Logout</a></li>
</ul>
</nav>
</div>
</header>
<button type = "weeklybutton" class = "week1button"  onclick="showTables1()" onclick = "displayButton()" >Upload Weekly Timetable</button>
<button type = "fortnightlybutton" class = "week2button" onclick="showTables2()" onclick = "displayButton()">Upload Fortnightly Timetable</button><br>
<form id = "timeTable" name = "tableform" action = "proc.php" method = "POST" onSubmit="validateForm()">
<div class="teachbox">
<div class = "formelements">
<div class="box">
<form id = "timeTable" name = "tableform" action = "proc.php" method = "POST" onSubmit="validateForm()">
<div class="data"><p>
<?php 
$sch1 = $_POST['School'];
echo "Your School : ".$sch1;
$mysqli = NEW Mysqli('localhost', 'root', '', 'school');
$resultSet1 = $mysqli->query("SELECT uni_part FROM school_details WHERE school_name='".$sch1."'");
while ($row= $resultSet1->fetch_assoc()) {
echo "<br> Partner University : ".$row['uni_part'];
}
$std = $_POST['standard'];
$sub = $_POST['subject'];
echo "<br><br>Timetable uploading for ".$std ,"&nbsp" .$sub;
?></p>
</div>
<input type="hidden" name="sch1" value="<?php echo $_POST['School']; ?>">
<input type="hidden" name="std" value="<?php echo $_POST['standard']; ?>">
<input type="hidden" name="sub" value="<?php echo $_POST['subject']; ?>">
<div id = "main" >
<div id = "table1" class="table1" style="display:none;" >
<p align="center">Week-1</p>
<table name = "checkbox1">
<tr>
<th></th>
<th>Monday</th>
<th>Tuesday</th>
<th>Wednesday</th>
<th>Thursday</th>
<th>Friday</th>
</tr>
<tr>
<th>Period1</th>
<td><input type="checkbox" value="P1" name="Mp1"><br></td> 
<td><input type="checkbox" value="P1" name="Tp1"><br></td>
<td><input type="checkbox" value="P1" name="Wp1"><br></td>
<td><input type="checkbox" value="P1" name="Hp1"><br></td>
<td><input type="checkbox" value="P1" name="Fp1"><br></td> 
</tr>
<tr>
<th>Period2</th>
<td><input type="checkbox" value="P2" name="Mp2"><br></td> 
<td><input type="checkbox" value="P2" name="Tp2"><br></td>
<td><input type="checkbox" value="P2" name="Wp2"><br></td>
<td><input type="checkbox" value="P2" name="Hp2"><br></td>
<td><input type="checkbox" value="P2" name="Fp2"><br></td>   
</tr>
<tr>
<th>Period3</th>
<td><input type="checkbox" value="P3" name="Mp3"><br></td> 
<td><input type="checkbox" value="P3" name="Tp3"><br></td>
<td><input type="checkbox" value="P3" name="Wp3"><br></td>
<td><input type="checkbox" value="P3" name="Hp3"><br></td>
<td><input type="checkbox" value="P3" name="Fp3"><br></td>   
</tr>
<tr>
<th>Period4</th>
<td><input type="checkbox" value="P4" name="Mp4"><br></td> 
<td><input type="checkbox" value="P4" name="Tp4"><br></td>
<td><input type="checkbox" value="P4" name="Wp4"><br></td>
<td><input type="checkbox" value="P4" name="Hp4"><br></td>
<td><input type="checkbox" value="P4" name="Fp4"><br></td>  
</tr>
<tr>
<th>Period5</th>
<td><input type="checkbox" value="P5" name="Mp5"><br></td> 
<td><input type="checkbox" value="P5" name="Tp5"><br></td>
<td><input type="checkbox" value="P5" name="Wp5"><br></td>
<td><input type="checkbox" value="P5" name="Hp5"><br></td>
<td><input type="checkbox" value="P5" name="Fp5"><br></td>   
</tr>
<tr>
<th>Period6</th>
<td><input type="checkbox" value="P6" name="Mp5"><br></td> 
<td><input type="checkbox" value="P6" name="Tp5"><br></td>
<td><input type="checkbox" value="P6" name="Wp5"><br></td>
<td><input type="checkbox" value="P6" name="Hp5"><br></td>
<td><input type="checkbox" value="P6" name="Fp5"><br></td>   
</tr>
</table>
</div>
<div  id = "table2" class="table2" style="display:none;" >
<p align="center">Week-2</p>
<table name = "checkbox2">
<tr>
<th></th>
<th>Monday</th>
<th>Tuesday</th>
<th>Wednesday</th>
<th>Thursday</th>
<th>Friday</th>
</tr>
<tr>
<th>Period1</th>
<td><input type="checkbox" value="P1" name="Mp21"><br></td> 
<td><input type="checkbox" value="P1" name="Tp21"><br></td>
<td><input type="checkbox" value="P1" name="Wp21"><br></td>
<td><input type="checkbox" value="P1" name="Hp21"><br></td>
<td><input type="checkbox" value="P1" name="Fp21"><br></td> 
</tr>
<tr>
<th>Period2</th>
<td><input type="checkbox" value="P2" name="Mp22"><br></td> 
<td><input type="checkbox" value="P2" name="Tp22"><br></td>
<td><input type="checkbox" value="P2" name="Wp22"><br></td>
<td><input type="checkbox" value="P2" name="Hp22"><br></td>
<td><input type="checkbox" value="P2" name="Fp22"><br></td>   
</tr>
<tr>
<th>Period3</th>
<td><input type="checkbox" value="P3" name="Mp23"><br></td> 
<td><input type="checkbox" value="P3" name="Tp23"><br></td>
<td><input type="checkbox" value="P3" name="Wp23"><br></td>
<td><input type="checkbox" value="P3" name="Hp23"><br></td>
<td><input type="checkbox" value="P3" name="Fp23"><br></td>   
</tr>
<tr>
<th>Period4</th>
<td><input type="checkbox" value="P4" name="Mp24"><br></td> 
<td><input type="checkbox" value="P4" name="Tp24"><br></td>
<td><input type="checkbox" value="P4" name="Wp24"><br></td>
<td><input type="checkbox" value="P4" name="Hp24"><br></td>
<td><input type="checkbox" value="P4" name="Fp24"><br></td>  
</tr>
<tr>
<th>Period5</th>
<td><input type="checkbox" value="P5" name="Mp25"><br></td> 
<td><input type="checkbox" value="P5" name="Tp25"><br></td>
<td><input type="checkbox" value="P5" name="Wp25"><br></td>
<td><input type="checkbox" value="P5" name="Hp25"><br></td>
<td><input type="checkbox" value="P5" name="Fp25"><br></td>   
</tr>
<tr>
<th>Period6</th>
<td><input type="checkbox" value="P6" name="Mp26"><br></td> 
<td><input type="checkbox" value="P6" name="Tp26"><br></td>
<td><input type="checkbox" value="P6" name="Wp26"><br></td>
<td><input type="checkbox" value="P6" name="Hp26"><br></td>
<td><input type="checkbox" value="P6" name="Fp26"><br></td>   
</tr>
</table>
</div>
<div id = "finalbutton" style="display:none;" >
<input type="submit" value="Submit" align="center">
</div></div></div>
</form>
</div></div></div>
</body>
</html>