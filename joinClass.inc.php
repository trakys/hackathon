<?php
if (isset($_POST['joinclass-submit'])){
	require 'dbc.inc.php';
	$classcode = $_POST['joinclass'];
	if (empty($classcode)){
		header("Location: joinClass.php?error=emptyfields");
		exit();
	} else {
		$sql = "SELECT classCode FROM class WHERE classCode=?";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)){
			header("Location: joinClass.php?error=sqlerror");
			exit();
		} else {
			mysqli_stmt_bind_param($stmt, "s", $classcode);
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);
			if ($row = mysqli_fetch_assoc($result)){
				session_start();
				$_SESSION['classCode'] = $row['classCode'];
				$_SESSION['className'] = $row['className'];
				header("Location: insideClass.php?join=success");
				exit();
			} else {
				header("Location: joinClass.php?error=noclass");
				exit();
			}
		}
	}
} else {
	header("Location: joinClass.php");
	exit();
}