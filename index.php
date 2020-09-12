<!DOCTYPE html>
<html lang="en">
<head>
    <meta property="og:title" content="Exron" />
    <meta property="og:description" content="lucky 4 you" />
    <meta property="og:url" content="http://exron.xyz" />
    <meta property="og:image" content="http://exron.xyz/img/background.jpg" /> 
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
    <link rel="shortcut icon" href="img/x.ico" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>EXRON</title>
    <link href="style.css" rel="stylesheet" type="text/css" />

</head>
<body >
<?php
    $url = '';
    $url = $_SERVER['REQUEST_URI'];
  if($url == '/331'){
      include('331.php');
  }
  ?>
  		
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="script.js"></script>
</body>
</html>