<?php include('contactform.php'); ?>

<!DOCTYPE html>
<html>
  <head>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
		<link rel="shortcut icon" href="img/x.ico" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>EXRON</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
  </head>
  <body>


		<header >
      <a class="link" href="https://EXRON.guifgr.repl.co">∑XRON</a>
    <header>

		<div id="darken">
		</div><!--darken-->

		<div class="container">
				<div class="img-hover-zoom--colorize item" id="RU">
					<img class="lang" src="img/RU.png" alt="Russia">	
			  </div>
				
				<div class="img-hover-zoom--colorize item" id="BR">
			  	<img class="lang" src="img/BR.png" alt="brazil">
  			</div>
				
				<div class="img-hover-zoom--colorize item" id="JP">
					<img class="lang" src="img/JP.png" alt="japan">
			  </div>

				<div class="img-hover-zoom--colorize item" id="ES">
					<img class="lang" src="img/ES.png" alt="spain">	
				</div>
				

				<div class="img-hover-zoom--colorize item" id="US">
					<img class="lang" src="img/US.png" alt="United States">
			  </div>
				
			</div>
		<!--  -->
		<div class="QEA pergunta">
      <form class="pergunta" action="contactform.php" method="post">
				<input type="email" name="email" id="email" placeholder="" required>
				<input type="text" name="pergunta" id="pergunta" placeholder="" required>
				<input type="submit" name="submit" id="enviar" value=""> 

      <form>
		</div>
		
		<footer> <p id="footer" >©2020 ∑XRON</p> </footer>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="script.js"></script>

		
  </body>
</html>