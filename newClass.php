<?php	
	require "header4.php";
?>
<!DOCTYPE html>
<html>
<head>
<style>
            body {
				height: 900px;
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
										echo '<p class="signuperror">Enter the name of your class!!</p>';
									} else if ($_GET["error"] == "invalidclsname"){
										echo '<p class="signuperror">Invalid Class Name!!</p>';
									} 
								} else if (isset($_GET["create"])){
									if ($_GET["create"] == "success"){
										echo '<p class="clscreatesuccess" style="text-align: center; transform:translate(0px, 600px);">Class Successfully Created</p>';
									}
								}
							?>
							
							<form action="newClass.inc.php" method="post">
								<img src="logo3.png" id="topLogo">
								<h1 style="text-align: center">CREATE YOUR CLASS</h1><br>
								<input type="text" name="newclass" placeholder="Enter the Name of your class"><br>
								<button type="submit" name="newclass-submit">Create Class</button>
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