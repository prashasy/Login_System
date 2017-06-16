<?php
session_start();
$user=$_SESSION['login_user'];
?>
<html>
<head>
	<title>Dashboard</title>
	</head>
	<body>
		<?php 
		if(isset($_SESSION['login_user']))
		{
			echo "<h1>Welcome  $user </h1>";
			echo "<a href=logout.php>Logout</a>";
		}
		else
		{
			header("location: index.php");
		}
		?>
	</body>
</html>