<?php
	require "header.php";
?>
<DOCTYPE! html>
<html>
    <head>
		 <meta charset="utf-8">
		 <meta name="description" content="This">
		 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		 <link rel="stylesheet" href="style.css" type="text/css">
		 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
        <title>Class Cloud</title>
        <style>
			
			body {
				height: 800px;
			}
			
			#topLogo {
				transform:translate(135px, 0px);
				position: relative;
			}
			
            form {
                border: 3px solid #f1f1f1;
				width: 600px;
				height: 600px;
                transform:translate(0px, 20px);
				padding: 20px 50px 50px 50px;
            }

            input[type=text], input[type=password] {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;
            }

            button {
                background-color:lightblue;
                color: black;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 100%;
            }

            button:hover {
                opacity: 0.8;
            }

            .cancelbtn {
                width: 100%;
                padding: 14px 20px;
                background-color:lightcoral;
            }

            .container {
                padding: 0px;
				background-color:light-blue;
            }

            span.psw {
                float: right;
                padding-top: 16px;
            }

            @media screen and (max-width: 300px) {
                span.psw {
                    display: block;
                    float: none;
                }
                .cancelbtn {
                        width: 100%;
                }
            }
			
			.header-login {
				padding-bottom: 100px;
			}
			
			.header-signup {
				transform:translate(500px, 0px);
			}	
				
        </style>
    </head>
<body>
        <div class="container">
				<div class="row d-flex justify-content-center">
					<div class="col-6">
							<div class="row d-flex justify-content-center">
								
								<div class="header-login">
			
								<?php
									if (isset($_SESSION['userID'])){
										echo '<form action="logout.inc.php" method="post">
												<img src="logo3.png" id="topLogo">
												<button type="submit" name="logout-submit">Logout</button>
											</form>';
									} else {
										echo '<form action="login.inc.php" method="post">
												<img src="logo3.png" id="topLogo">
												<h1 style="text-align: center">LOGIN</h1>
												<input type="text" name="mailuser" placeholder="Student Number"><br>
												<input type="password" name="pass" placeholder="Password"><br>
												<button type="submit" name="login-submit">Login</button><br>
												<a class="header-signup" href="signup.php">Sign Up</a>
											</form>';
									}
								?>
								
								</div>
								
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
		
    </body>
</html>