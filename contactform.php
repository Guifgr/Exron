    <?php 
    
        $message = $_POST['pergunta'];
        
    	$email = $_POST['email'];
        $to_email = 'guifgr@hotmail.com';
        $subject = $email;
        $headers = 'Novo email recebido de: '.$email.' o email diz:';

        mail($to_email, $subject, $message, $headers);
        header("Location:   http://exron.xyz/?send=1"); /* Redirect browser */
        
    
?>
