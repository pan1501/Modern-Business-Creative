<?php
	session_start();
	$username = $_POST['username'];
	$password = MD5($_POST['password']);
    $username = stripslashes($username);
    $password = stripslashes($password);
	
	if ($username && $password) {
		$connect = mysqli_connect("au-cdbr-azure-east-a.cloudapp.net", "b495cdc010cae4", "581aa129") or die("could not connect to the database");
		mysqli_select_db($connect, "infs3202a2-db") or die("couldn't find database");
		$query = mysqli_query($connect, "SELECT * FROM users WHERE username= '$username'");
		$numrows = mysqli_num_rows($query);
		
        
        
		if ($numrows !== 0) {
			while ($row = mysqli_fetch_assoc($query)) {
				$dbusername = $row['username'];
				$dbpassword = $row['password'];
			}

			
			if ($username == $dbusername && $password == $dbpassword) {
				$_SESSION['username'] = $username;
				$_SESSION['password'] = $password;
				header("Location:order-login.php");
               
			} else {
				(header("location:order.php?loginFailed=true&reason=password"));
			}

		} else        (header("location:order.php?loginFailed=true&reason=notexist"));
	} else    (header("location:order.php?loginFailed=true&reason=blank"));
	?>