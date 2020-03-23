<?php
if (isset($_POST['submit'])) {
    
    $subject = iconv('UTF-8', 'ISO-8859-1//TRANSLIT//IGNORE', $_POST['pergunta']);
    $mailFrom = iconv('UTF-8', 'ISO-8859-1//TRANSLIT//IGNORE', $_POST['email']);
    
    $mailTo = "exronnorxe@protonmail.com";
    $headers = "De: ".$mailFrom;
    $txt = "Voce recebeu um email de: ".$mailFrom.".\n\nA pergunta foi:\n".$subject;
    

    mail($mailTo, $subject, $txt, $headers);
    header("Location: https://www.exron.org/?send=1");
    
    }
?>