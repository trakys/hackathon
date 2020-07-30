<?php
	require "header3.php";
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
    <head>
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
         <link rel="stylesheet" href="style.css" type="text/css">
         <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <title>Cloud Class</title>

         <style>
			
			body {
				height: 100%;
			}
			
            .sidebar {
                height: 100%; 
                width: 0; 
                position: absolute;
                z-index: 1;
                top: 0;
                right: 0;
                background-color: #111; 
                overflow-x: hidden; 
                padding-top: 60px; 
                transition: 0.5s; 
                margin-left: 50px;
           }

           .sidebar a {
               padding: 8px 8px 8px 32px;
               text-decoration: none;
               font-size: 25px;
               color: white;
               display: block;
               transition: 0.3s;
           }
           
           .sidebar a:hover {
               color: lightblue;
           }

           .sidebar .closebtn {
               position: absolute;
               top: 0;
               right: 25px;
               font-size: 36px;
               margin-left: 50px;
           }

           .openbtn {
               transform: translate(-8px, 12px);
               font-size: 20px;
               cursor: pointer;
               background-color: #111;
               color: white;
               padding: 10px 15px;
               border: none;
               font-family: "Oswald";
               float: right;
           }

           .openbtn:hover {
               opacity: 0.8;
           }

           #main {
               transition: margin-left .5s; 
               padding: 20px;
           }

           @media screen and (max-height: 450px) {
               .sidebar {padding-top: 15px;}
               .sidebar a {font-size: 18px;}
           }

           #classbtn {
               border: none;
               padding: 8px 8px 8px 8px;
               transform:translate(40px, 300px);
               background-color: lightblue;
               font-family: "Oswald";
           }

           #classbtn:hover {
               opacity: 0.8;
           }

           .classroom {
                width: 300px;
                border: 15px solid lightblue;
                background-image: url('classroom.jpg');
                text-align: center;
                font-weight: bold;
                font-size: xx-large;
                opacity: 0.6;
                color: black;
                padding: 50px;
                margin: 20px;
            }

            .classroom2 {
                width: 300px;
                border: 15px solid lightblue;
                background-image: url('classroom2.jpg');
                text-align: center;
                font-weight: bold;
                font-size: xx-large;
                opacity: 0.6;
                color: black;
                padding: 50px;
                margin: 20px;
            }

            .classroom3 {
                width: 300px;
                border: 15px solid lightblue;
                background-image: url('classroom3.jpg');
                text-align: center;
                font-weight: bold;
                font-size: xx-large;
                opacity: 0.6;
                color: black;
                padding: 50px;
                margin: 20px;
            } 

            .classroom:hover, .classroom2:hover, .classroom3:hover {
                opacity: 1;

            }
        </style>
    </head>

    <body>
            <div id="mySidebar" class="sidebar">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="insideClass.php">MPM2D3</a>
                <a href="#">SNC1D1</a>
                <a href="#">ICS4U1</a>
            </div>
              
            <div id="main">
                <button class="openbtn" onclick="openNav()">OPEN &#9776;</button>
            </div>

        <div class="row">
            <div class="col">
                <a href="insideClass.php"><div class="classroom">MPM2D3</div></a>
            </div>
            <div class="col">
                <a href=#><div class="classroom2">SNC1D1</div></a>
            </div>
            <div class="col">
                <a href=#><div class="classroom3">ICS4U1</div></a>
            </div>
        </div>

        <script>
            function openNav() {
                document.getElementById("mySidebar").style.width = "250px";
                document.getElementById("main").style.marginLeft = "250px";
            }

            function closeNav() {
                document.getElementById("mySidebar").style.width = "0";
                document.getElementById("main").style.marginLeft = "0";
            }
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
    </body>>
</html>