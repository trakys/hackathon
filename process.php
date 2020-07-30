<?php
	$username = $_POST['user'];
	$password = $_POST['pass'];
	
	$username = stripslashes($username);
	$password = stripslashes($password);
	$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($password);
	
	mysql_connect("localhost", "root", "");
	mysql_select_db("login");
	
	$result = mysql_query("select * from users where username = '$username' and password = '$password'")
					or die("Failed to query databases ".mysql.error());
	$row = mysql_fetch_array($result);
	if ($row['user'] == $username && $row['pass'] == $password){
		echo "Login Successful!!";
	} else {
		echo "Failed to Login!";
	}
	
?>