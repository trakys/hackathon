<?php
	require "header.php";
?>
<main>
	<div class="wrapped-main">
		<section class="section-default">
			<h1>Signup</h1>
			<?php
				if (isset($_GET["error"])){
					if ($_GET["error"] == "emptyfields"){
						echo '<p class="signuperror">Fill in all fields!!</p>';
					} else if ($_GET["error"] == "invaludmailuser"){
						echo '<p class="signuperror">Invalid Username and Email!!</p>';
					} else if ($_GET["error"] == "invaliduser"){
						echo '<p class="signuperror">Invalid Username!!</p>';
					} else if ($_GET["error"] == "invalidmail"){
						echo '<p class="signuperror">Invalid email!!</p>';
					} else if ($_GET["error"] == "diffpass"){
						echo '<p class="signuperror">Your passwords do not match!!</p>';
					} else if ($_GET["error"] == "usertaken"){
						echo '<p class="signuperror">Username is already taken!!</p>';
					}
				} else if (isset($_GET["signup"])){
					if ($_GET["signup"] == "success"){
						echo '<p class="signupsuccess">Successfully Signed Up!!</p>';
					}
				}
			?>
			<form action="signup.inc.php" method="post">
				<input type="text" name="user" placeholder="Username"><br>
				<input type="text" name="mail" placeholder="E-mail"><br>
				<input type="password" name="pass" placeholder="Password"><br>
				<input type="password" name="rpass" placeholder="Repeat Password"><br>
				<button type="submit" name="signup-submit">Sign Up</button>
			</form>
		</section>
	</div>
</main>