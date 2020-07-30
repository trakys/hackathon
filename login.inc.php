<?php
if (isset($_POST['login-submit'])){
	require 'dbh.inc.php';
	$mailuid = $_POST['mailuser'];
	$password = $_POST['pass'];
	if (empty($mailuid) || empty($password)){
		header('Location: index.php?error=emptyfields');
		exit();
	} else {
		$sql = "SELECT *FROM users WHERE usernames=? OR userEmails=?;";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)){
			header('Location: index.php?error=sqlerror');
			exit();
		} else {
			mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);
			if ($row = mysqli_fetch_assoc($result)){
				$passCheck = password_verify($password, $row['password']);
				if ($passCheck == false){
					header('Location: index.php?error=wrognpass');
					exit();
				} else {
					session_start();
					$_SESSION['userID'] = $row['userID'];
					$_SESSION['username'] = $row['usernames'];
					header('Location: class.php?login=success');
					exit();
				}
			} else {
				header('Location: login.php?error=nouser');
				exit();
			}
		}
	}
} else {
	header('Location: index.php');
	exit();
}
?>