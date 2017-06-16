<html>
<head>
	<title>"Sign Up!!"</title>
</head>
<body>
	<?php

		$dbhost="localhost";
		$dbuser="root";
		$dbpass="";
		$name=$_POST['name'];
		$uname=$_POST['uname'];
		$phno=$_POST['phno'];
		$pass=$_POST['pass'];
		$conn=mysqli_connect($dbhost, $dbuser, $dbpass);
		if(! $conn)
		{
			die('Could not connect' . mysqli_error());
		}
		echo "<p>Connected Successfully!!</p>";
		$c=mysqli_select_db($conn, "User_Database");
		if($c)
		{	$sql="select * from login_data where usrname='$uname' ";
			$result=mysqli_query($conn, $sql);
			if(!$result)
			{die ("mysqli_error($conn)");}
		else{
			if(mysqli_num_rows($result)>0)
			{
				die("Username Already Exists");
			}
			else
			{
			$sql="INSERT INTO login_data(usrname,pass) VALUES('" . $uname . "','" . $pass. "')";
			if(mysqli_query($conn, $sql))
				echo "<p>Record Inserted in login_data!!</p>";
			else 
				echo "<p>Record could not be inserted in login_data</p>" . mysqli_error($conn);
			$sql="INSERT into user_data(name,phone) values ('" . $name . "' , '" . $phno . "')";
			if(mysqli_query($conn , $sql))
			
				echo "<p> Record inserted into user_data Successfully </p>";
			else
				echo "<p> Record could not be inserted into user-data </p>";
			

		}
		}
	}
		mysqli_close($conn);
		echo "<p>Connection closed!! </p>";
	?>
</body>
</html>