
<?php
session_start();
if( isset($_SESSION['login']) )
{
$a=$_SESSION['login_user'];
echo " Hello $a";

	header("location: dashboard.php");
}
?>
<html>
<head>
	<title>Home Page!! </title>
	<style type="text/css">
	body{
		font-family:courier;
		background-color:green;
	}

	
	.LoginContent{
		display:none;
		background-color: orange;
	}
	.LoginHover{
		position:absolute;
		top:255px;
		left:200px;

		padding-left: 2px;
		padding-right: 2px;
		padding-top: 2px;
		padding-bottom: 2px;
		width:300px;
		text-align:center;
	    font-size: 30;
		background-color: orange;

	}
	.LoginHover:hover .LoginContent{
		display:block;
	}

		.SignupContent{
		display:none;
		background-color: orange;
	}
	.SignupHover{
		position:absolute;
		top:255px;
		left:700px;
		padding-left: 2px;
		padding-right: 2px;
		padding-top: 2px;
		padding-bottom: 2px;
		width:300px;
		text-align:center;
	    font-size: 30;
		background-color: orange;

	}
	.SignupHover:hover .SignupContent{
		display:block;
	}

	</style>
	</head>

	<body>		
	
		<h1 style="text-align:center"> Welcome to mah Website !! </h1>
		
		<div class="LoginHover">
			<p id="logintext"> Log In </p>
				<div class=LoginContent>
					<form action='login.php' method="post">
						<input type="username" required name="usrname" placeholder="Enter Username">
						<input type="password" required name="usrpass" placeholder="Enter Password">
						<input type="submit" value="Log In">
					</form>
				</div>
		</div>



		<div class="SignupHover">
			<p> SignUp </p>

			<div class="SignupContent">
				<form action="signup.php" method="post">
					<input type="text" name="name" required placeholder="Full name please :)">
					<input type="number" name="phno" required placeholder="Phone Number ;)">
					<input type="text" name="uname" required placeholder="Username">
					<input type="password" name="pass"required  placeholder="Password">
					<input type="submit" value="SignUp!!">
					<input type="reset">
				</form>

			</div>
		</div>
	



















</body>
</html>
