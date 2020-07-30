<?php
function randomClassCode(){
	$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < 8; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
if (isset($_POST['newclass-submit'])){
	require 'dbc.inc.php';
	$classname = $_POST['newclass'];
	$classcode = randomClassCode();
	if (empty($classname)){
		header("Location: newClass.php?error=emptyfields");
		exit();
	} else if (!preg_match("/^[a-zA-Z0-9 _]*$/", $classname)){
		header("Location: newClass.php?error=invalidclsname");
		exit();
	} else {
		$sql = "SELECT className FROM class WHERE className=?";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)){
			header("Location: newClass.php?error=sqlerror1");
			exit();
		} else {
			mysqli_stmt_bind_param($stmt, "s", $classname);
			mysqli_stmt_execute($stmt);
			$sql = "INSERT INTO class (classCode, className) VALUES (?, ?)";
			$stmt = mysqli_stmt_init($conn);
			if (!mysqli_stmt_prepare($stmt, $sql)){
				header("Location: newClass.php?error=sqlerror2");
				exit();
			} else {
				mysqli_stmt_bind_param($stmt, "ss", $classcode, $classname);
				mysqli_stmt_execute($stmt);
				header("Location: newClass.php?create=success");
				exit();
			}	
		}
	}
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
} else {
	header("Location: newClass.php");
	exit();
}