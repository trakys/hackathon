<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="uft-8">
		<meta name="description" content="This">
		<meta name="viewpoint" content="width=device-width, initial-scale=1">
		<title>Cloud Class</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="style.css" type="text/css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
	</head>
	<body>
		<header>
			<nav class="nav-header-main">
				<ul>
					<li style="float: left; transform:translate(0px, 0px);"><a href="index.php">
							<img src="logo.png" id="logoImage"></img>
						</a>
					</li>
					<li><a href = "login.php"><button id="logIn">LOG IN</button></a></li>
					<li><a href = "newClass.php">Create a new Class</a></li>
					<li><a href = "joinClass.php">Join a Class</a></li>

				</ul>
			</nav>
			<div class="header-login">
				
				
			</div>
		</header>
	</body>
</html>