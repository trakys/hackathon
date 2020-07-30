<?php
	require "header.php";
?>
<main>
		<div id="colour_block">
			<p class="info">CLOUD CLASS IS AN ONLINE VIRTUAL CLASSROOM THAT MAKES LEARNING EASIER</p>
			<p class="info2">With Cloud Class, students and teachers can communicate exactly what they need to with exactly the right tools! Video-chatting, group messaging, and posting assignments are just bare limits of what can be achieved through Cloud Class. Sign up <a href= "#sign_up">here</a>!</p>
			<img src="question.png" id="question"></img>
		</div>
		
		<div id="colour_block2">
			<p class="why_us">WHY CHOOSE US</p>
			<p class="info3">Cloud Class is an incredibly secure program that uses school district student numbers and class codes to ensure complete internet security and privacy. With everything you'll ever need to run an online classroom, Cloud Class guarantees that students and teachers get the best learning experience virtually.</p> 
		</div>

        <div>
                <div class="container-fluid" id="sign_up">
					<div class="row">
						<div class="col-6 padding-0 no-gutters">
							<h1>Create an account</h1>
							
							<hr>
							<div class="wrapped-main">
							<section class="section-default">
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
									<input type="text" name="user" placeholder="Enter Your Student Number"><br>
									<input type="text" name="mail" placeholder="Enter Your E-mail"><br>
									<input type="password" name="pass" placeholder="Enter a Password"><br>
									<input type="password" name="rpass" placeholder="Repeat Password"><br>
									<p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
									<button type="submit" name="signup-submit" class="registerbtn">Register</button>
								</form>
							</section>
							</hr>
							</div>
						</div>
						<div class="col-6" id="slideshow">
							<div class="slideshow-container">

								<div class="mySlides">
									<div class="numbertext">1 / 2</div>
									<img src="need_help.png" style="width:100%" id="picture1">
								</div>
						
								<div class="mySlides">
									<div class="numbertext">2 / 2</div>
									<img src="instructions.png" style="width:100%" id="picture1">
								</div>
							
								<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
								<a class="next" onclick="plusSlides(1)">&#10095;</a>
							
							</div>
							
							<br>

							<div style="text-align:center">
								<span class="dot" onclick="currentSlide(1)"></span>
								<span class="dot" onclick="currentSlide(2)"></span>
							</div>

							<script>
								var slideIndex = 0;
								showSlides();

								function showSlides() {
									var i;
									var slides = document.getElementsByClassName("mySlides");
									for (i = 0; i < slides.length; i++)
									{
										slides[i].style.display = "none";
									}
									slideIndex++;
									if (slideIndex > slides.length) {slideIndex = 1}
									slides[slideIndex-1].style.display = "block";
									setTimeout(showSlides, 3000); 
									}
							  </script>
						</div>
					</div>
				</div>
		</div>

		<div id="colour_block3" class="container-fluid">
			<div class="row no-gutters">
				<div class=col-6">
					<p class="contact">CONTACT US</p>
				</div>
				<div class="col-6 contact_info">
					<p>For any questions or concerns, you can contact each of the creators by their Linkedin profiles!</p>
					<p>Annie Cai: <a href="https://www.linkedin.com/in/annie-cai-344514191/">https://www.linkedin.com/in/annie-cai-344514191/</a></p>
					<p>Yevan Sheen: <a href="https://www.linkedin.com/in/yevan-sheen-4390071a7/">https://www.linkedin.com/in/yevan-sheen-4390071a7/</a></p>
					<p>Daniel Jiang: <a href="https://www.linkedin.com/in/daniel-jiang-4ba0181a6/">https://www.linkedin.com/in/daniel-jiang-4ba0181a6/</a></p>
					<p>Tracy Xu: <a href="https://www.linkedin.com/in/tracy-xu-8444391a6/">https://www.linkedin.com/in/tracy-xu-8444391a6/</a></p>
					<p><img src="linkedin.png" style="height: 100px; width: 100px; transform:translate(430px, -120px);"></p>
				</div>
			</div>
		</div>
</main>