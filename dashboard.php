<?php
?>
<html>
<head>
	<title>Dashboard</title>
	</head>
	<body>
		<?php
		session_start(); 
		if(isset($_SESSION['login']))
		{	
			$user=$_SESSION['login_user'];

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