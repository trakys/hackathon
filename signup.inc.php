<?php
if (isset($_POST['signup-submit'])){
	require 'dbh.inc.php';
	$username = $_POST['user'];
	$email = $_POST['mail'];
	$password = $_POST['pass'];
	$rpassword = $_POST['rpass'];
	if (empty($username) || empty($email) || empty($password) || empty($rpassword)){
		header("Location: index.php?error=emptyfields&user=".$username."&mail".$email);
		exit();
	} else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)){
		header("Location: index.php?error=invalidmailuser");
		exit();
	} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
		header("Location: index.php?error=invalidmail&user=".$username);
		exit();
	} else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)){
		header("Location: index.php?error=invaliduid&mail=".$email);
		exit();
	} else if ($password !== $rpassword){
		header("Location: index.php?error=diffpass&user=".$username."&mail".$email);
		exit();
	} else {
		$sql = "SELECT usernames FROM users WHERE usernames=?";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)){
			header("Location: index.php?error=sqlerror");
			exit();
		} else {
			mysqli_stmt_bind_param($stmt, "s", $username);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			$resultCheck = mysqli_stmt_num_rows($stmt);
			if ($resultCheck > 0){
				header("Location: index.php?error=usertaken&mail=".$email);
				exit();
			} else {
				$sql = "INSERT INTO users (usernames, userEmails, password) VALUES (?, ?, ?)";
				$stmt = mysqli_stmt_init($conn);
				if (!mysqli_stmt_prepare($stmt, $sql)){
					header("Location: index.php?error=sqlerror");
					exit();
				} else {
					$hashPass = password_hash($password, PASSWORD_DEFAULT);
					mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashPass);
					mysqli_stmt_execute($stmt);
					header("Location: class2.php?signup=success");
					exit();
				}	
			}
		}
	}
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
} else {
	header("Location: index.php");
	exit();
}