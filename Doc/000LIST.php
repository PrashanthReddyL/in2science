<?php
session_start();
require '../coordinator/db_connection.php';
// CHECK USER IF LOGGED IN
if(isset($_SESSION['user_email']) && !empty($_SESSION['user_email'])){

$user_email = $_SESSION['user_email'];
$get_user_data = mysqli_query($db_connection, "SELECT * FROM `users` WHERE user_email = '$user_email'");
$userData =  mysqli_fetch_assoc($get_user_data);

}else{
header('Location: ../coordinator/logout.php');
exit;
}
?>
<!DOCTYPE html>

<html lang = "en">

	<head>
	  <meta charset="utf-8" />
	  <meta name="description" content="Co-ordinator Page" />
	  <meta name="keywords" content="HTML5" />
	  <meta name="author" content="Umakant Gupta"  />
	  
	  <title>Co-ordinator Page</title>
	  <link href="../style/table.css" rel="stylesheet">
	</head>

<body>

	<header>

		<div class="container">
			<h1>Welcome to Co-ordinator Page</h1>
			<nav>
			<ul>
				<li><a href="000LIST.php">Home</a></li>
				<li><a href="../coordinator/logout.php">Logout</a></li>
			</ul>
		
			</nav>
		</div>
	</header>

<h1>List of files:</h1>

<?php
$thelist='';

  if ($handle = opendir('../Doc/.')) {
    while (false !== ($file = readdir($handle))) {
      if ($file != "." && $file != "..") {
        $thelist .= '<li><a href="'.$file.'">'.$file.'</a></li>';
      }
    }
    closedir($handle);
  }
?>
<br>
<br>
<br>
<br>
<ul><?php echo $thelist; ?></ul>
</body>
</html>