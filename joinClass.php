<?php
	require "header4.php";
?>
<!DOCTYPE html>
<html>
    <head>
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
         <link rel="stylesheet" href="style.css" type="text/css">
         <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
        <title>Class Cloud</title>
        <style>
            body {
				height: 1000px;
			}
			
            form {
                border: 3px solid #f1f1f1;
                transform:translate(0px, 20px);
                padding: 20px 50px 50px 50px;
            }
			
			#topLogo {
				transform:translate(135px, 0px);
				position: relative;
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
                padding-bottom: 100px;
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
        </style>
    </head>
    <body>

        <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-6">
                            <div class="row d-flex justify-content-center">
                            </div>
							
							<?php
								if (isset($_GET["error"])){
									if ($_GET["error"] == "emptyfields"){
										echo '<p class="signuperror">Enter class code!!</p>';
									} else if ($_GET["error"] == "noclass"){
										echo '<p class="signuperror"> No class found!!</p>';
									} 
								} else if (isset($_GET["join"])){
									if ($_GET["join"] == "success"){
										echo '<p class="clscreatesuccess"></p>';
									}
								}
							?>
							
							<form action="joinClass.inc.php" method="post">
								<img src="logo3.png" id="topLogo">
								<h1 style="text-align: center">JOIN CLASS</h1><br>
								<input type="text" name="joinclass" placeholder="Enter the classcode"><br>
								<button type="submit" name="joinclass-submit">Join Class</button>
								<a href="class.php"><button type="button" class="cancelbtn">Cancel</button></a>
							</form>
							
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