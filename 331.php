	<?php $url = "";?>
  <body>
		<header >
      <a class="link" href="/">∑XRON</a>
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
		
		<footer> <p id="footer" ><?php $year = date("Y"); echo $year?></p> </footer>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="script.js"></script>

		
  </body>