<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dashboard</title>
</head>
<body>
	<h1>Dashboard</h1>
	<?php 
     session_start();
     // include 'db.php';

	if(isset($_SESSION['login'])){
      echo 'welocome to Dashboard';
	}
	else{
		header('location:login.php');
	}
	?>
	<a href="logout.php">logout</a>
</body>
</html>