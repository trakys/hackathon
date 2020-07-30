<?php
	require "header2.php";
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
    </head>

    <style>
		
		body {
			height:700px;
		}
		
		h1 {
			padding-bottom: 20px;
			transform:translate(6px, 0px);
		}
		
        .collapsible {
            background-color: lightblue;
            color:black;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 15px;
        }

        .active, .collapsible:hover {
            opacity: 0.8;
        }

        .content {
            padding: 0 18px;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.2s ease-out;
            background-color: #f1f1f1;
        }

        .collapsible:after {
            content: '\02795';
            font-size: 13px;
            color: white;
            float: right;
            margin-left: 5px;
        }

        .active:after {
            content: "\2796"; 
        }
		
		.options {
			float: right;
			transform:translate(-30px, 15px); 
			padding: 20px 32px;
			margin: 10px;
			text-align: center;
			width: 300px;
			height: 70px;
			font-size: 20px;
			font-family: "Oswald";
			background-color: lightblue;
			border: none;
		}
		
		#className {
			float: right;
			font-size: 40px;
			transform: translate(-30px, 27px);
		}
		
		#drop_down {
			padding-left: 40px;
		}

.options:hover {
    opacity: 0.8;
}

    </style>
    <body>
	
        <div class="container-fluid">
            <div class="row no-gutters">
              <div class="col-7 padding-0 no-gutters" id="drop_down">
				
				<h1>WORK STREAM</h1>
			  
                <button class="collapsible">Chapter 7</button>
                <div class="content">
                <p><br>Read over page 356-361 in your textbook. I will post some videos explaining the lessons soon. After reading, please complete questions 1-10 on page 360-361. Upload your homework.</p>
                </div>
                <button class="collapsible">Exponential Functions Worksheet</button>
                <div class="content">
                <p><br>Print out the files I attached below and complete them by May 14. It covers the material taught from the last video tutorial.</p>
                </div>
                <button class="collapsible">Next Video Call Announcement</button>
                <div class="content">
                <p><br>Our next lesson will be on May 10 at 2:15pm. Enter our video call using the call button.</p>
                </div>
              </div>

              <div class="col-5 no-gutters">
                <a href="https://talky.io/MPM2D3" target="_blank"><button class="options">CALL</button></a>
                <a href="https://minnit.chat/MPM2D3" target="_blank"><button class="options">CHAT</button></a>
                <a href="handIn.php"><button class="options" target="_blank">HAND IN</button></a>
				<a href="class.php"><button class="options" >VIEW ALL CLASSES</button></a>
				<a href="calendar.php"><button class="options" >CALENDAR</button></a>
              </div>
            </div>
        </div>

          <script>
                var coll = document.getElementsByClassName("collapsible");
                var i;

                for (i = 0; i < coll.length; i++) {
                coll[i].addEventListener("click", function() {
                    this.classList.toggle("active");
                    var content = this.nextElementSibling;
                    if (content.style.maxHeight){
                    content.style.maxHeight = null;
                    } else {
                    content.style.maxHeight = content.scrollHeight + "px";
                    } 
                });
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
    </body>
</html>