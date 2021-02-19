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
<html lang="">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Update</title>
<link href="../style/table.css" rel="stylesheet">
</head>
<body>
<header>

	<div>
	<h1>Welcome to Mentor Availability Page</h1>
	
		<nav>
			<ul>
				<li><a href="home.php">Home</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		
			</nav>
	</div>
	</header>
    <div class="data">

	<p>Your Name: <?php echo $userData['fullname'];?></p>
		<p>Your MentorID: <?php echo $userData['username'];?></p>
</div>

<div class="box">
	<form action="process.php" method="post">

    <input type="hidden" name="Mentor_id" value=<?php echo $userData['username'];?>>

    <div class="table">
        <table>
            <script type="text/javascript">
                function toggle(source) {
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
    for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i] != source)
            checkboxes[i].checked = source.checked;
    }
}
            </script>
            <caption>Enter your Availability</caption>
            <input type="checkbox" onclick="toggle(this);" />Available Anytime !!<br />
            <tr>
                <th>Period</th>
                <th>Monday</th>
                <th>Tuesday</th>
                <th>Wednesday</th>
                <th>Thursday</th>
                <th>Friday</th>
            </tr>
            <tr>
                <th>8am-9am</th>
                <td><input type="checkbox" value="8am-9am" name="Mp1"><br></td> 
                <td><input type="checkbox" value="8am-9am" name="Tp1"><br></td>
                <td><input type="checkbox" value="8am-9am" name="Wp1"><br></td>
                <td><input type="checkbox" value="8am-9am" name="Hp1"><br></td>
                <td><input type="checkbox" value="8am-9am" name="Fp1"><br></td> 
            </tr>
            <tr>
                <th>9am-10am</th>
                <td><input type="checkbox" value="9am-10am" name="Mp2"><br></td> 
                <td><input type="checkbox" value="9am-10am" name="Tp2"><br></td>
                <td><input type="checkbox" value="9am-10am" name="Wp2"><br></td>
                <td><input type="checkbox" value="9am-10am" name="Hp2"><br></td>
                <td><input type="checkbox" value="9am-10am" name="Fp2"><br></td>   
            </tr>
            <tr>
                <th>10am-11am</th>
                <td><input type="checkbox" value="10am-11am" name="Mp3"><br></td> 
                <td><input type="checkbox" value="10am-11am" name="Tp3"><br></td>
                <td><input type="checkbox" value="10am-11am" name="Wp3"><br></td>
                <td><input type="checkbox" value="10am-11am" name="Hp3"><br></td>
                <td><input type="checkbox" value="10am-11am" name="Fp3"><br></td>   
            </tr>
            <tr>
                <th>11am-12</th>
                <td><input type="checkbox" value="11am-12" name="Mp4"><br></td> 
                <td><input type="checkbox" value="11am-12" name="Tp4"><br></td>
                <td><input type="checkbox" value="11am-12" name="Wp4"><br></td>
                <td><input type="checkbox" value="11am-12" name="Hp4"><br></td>
                <td><input type="checkbox" value="11am-12" name="Fp4"><br></td>  
            </tr>
            <tr>
                <th>1pm-3pm</th>
                <td><input type="checkbox" value="1pm-3pm" name="Mp5"><br></td> 
                <td><input type="checkbox" value="1pm-3pm" name="Tp5"><br></td>
                <td><input type="checkbox" value="1pm-3pm" name="Wp5"><br></td>
                <td><input type="checkbox" value="1pm-3pm" name="Hp5"><br></td>
                <td><input type="checkbox" value="1pm-3pm" name="Fp5"><br></td>   
            </tr>
            <tr>
                <th>3pm-4pm</th>
                <td><input type="checkbox" value="3pm-4pm" name="Mp6"><br></td> 
                <td><input type="checkbox" value="3pm-4pm" name="Tp6"><br></td>
                <td><input type="checkbox" value="3pm-4pm" name="Wp6"><br></td>
                <td><input type="checkbox" value="3pm-4pm" name="Hp6"><br></td>
                <td><input type="checkbox" value="3pm-4pm" name="Fp6"><br></td>   
            </tr>
            <tfoot>
                <input type="submit" value="Submit">
            </tfoot>
        </table>
    </div>
</form>
</div>
</body>
</html>

