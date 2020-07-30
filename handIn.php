<?php
	require "header6.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
         <link rel="stylesheet" href="style.css" type="text/css">
         <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
         <title>Cloud Class</title>

         <style>
             * {
            box-sizing: border-box;
            }
			
			body {
				height: 900px;
			}

            #myUL {
                margin: 0;
                padding: 0;
				height: 400px;
				transform:translate(0,0);
            }

            #myUL li {
                cursor: pointer;
                position: relative;
                padding: 12px 8px 12px 40px;
                background: #eee;
                font-size: 18px;
                transition: 0.2s;
				float: left;
                width: 100%;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
                list-style-type: none;
            }

            #myUL li:nth-child(odd) {
                background: #ddd;
            }

            #myUL li:hover {
                opacity: 0.8;
            }

            .close {
                position: absolute;
                right: 0;
                top: 0;
                padding: 12px 16px 12px 16px;
            }

            .close:hover {
                background-color: lightcoral;
                color: white;
            }

            .header {
                background-color: lightblue;
                padding: 30px 40px;
                color: black;
                text-align: center;
            }

            .header:after {
                content: "";
                display: table;
                clear: both;
            }


            .upload {
                float: right;
                transform:translate(40px);
                border: none;
            }

            #submit1 {
                float: right;
                border: none;
                background-color: lightcoral;
                box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
            }

            #submit2 {
                float: right;
                border: none;
                background-color: lightcoral;
                box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
            }

            #submit3 {
                float: right;
                border: none;
                background-color: lightcoral;
                box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
            }

            #submit4 {
                float: right;
                border: none;
                background-color: lightcoral;
                box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
            }

            #goBack {
				transform:translate(0px, -120px);
                border: none;
                padding: 10px 10px 10px 10px;
                background-color: #001a33;
				color: white;
				height: 70px;
				width: 120px;
                font-family: "Oswald";
                font-size: x-large;
            }

            #goBack:hover {
                opacity: 0.8;
            }

         </style>
    </head>
    <body>       
        <div class="container-fluid">
            <div class="row d-flex justify-content-center no-gutter">
                <div class="col-11 no-gutter">
                    <div id="myDIV" class="header" style="background-color: #001a33">
                        <h2 style="color: white;">Assignments</h2>
                    </div>
                      
                      <ul id="myUL">
                        <li><input class="upload" value="upload" type ="file">Chapter 7 review<button id="submit1">Submit work</button></li>
                        <li><input class="upload" value="upload" type ="file">Exponential functions worksheet<button id="submit2">Submit work</button></li>
                        <li><input class="upload" value="upload" type ="file">Sequences and series<button id="submit3">Submit work</button></li>
                        <li><input class="upload" value="upload" type ="file">Complex numbers quiz<button id="submit4">Submit work</button></li>
                      </ul>
					  
					  <div style="float: left; padding-top: 20px">
					  <li><a href = "insideClass.php"><button id="goBack">GO BACK</button></a></li>
					  </div>
					  
                </div>
            </div>
        </div>

      <script>
        document.getElementById("submit1").addEventListener("click", function(){ 
        document.getElementById("submit1").innerText = "Submitted";
        });
        document.getElementById("submit2").addEventListener("click", function(){ 
        document.getElementById("submit2").innerText = "Submitted"; 
        }); 
        document.getElementById("submit3").addEventListener("click", function(){ 
        document.getElementById("submit3").innerText = "Submitted"; 
        }); 
        document.getElementById("submit4").addEventListener("click", function(){ 
        document.getElementById("submit4").innerText = "Submitted"; 
        }); 
      </script>
	  
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