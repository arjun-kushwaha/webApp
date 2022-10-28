<?php

	use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

function mailto($name,$email,$password) {


    require 'vendor/autoload.php';

    $mail = new PHPMailer(true);
	try {
	//$mail->SMTPDebug = 2;									
	$mail->isSMTP();											
	$mail->Host	 = 'smtp.gmail.com;';					
	$mail->SMTPAuth = true;							
	$mail->Username = 'arjun.phoneme@gmail.com';				
	$mail->Password = 'bnrjaymncrlmdciu';						
	$mail->SMTPSecure = 'tls';							
	$mail->Port	 = 587;

	$mail->setFrom('arjun.phoneme@gmail.com', 'arjun');		
	$mail->addAddress($email);
	
	
	$mail->isHTML(true);								
	$mail->Subject = 'Your login Password';
	#HTML message body in <b>bold</b> 
	$mail->Body = 'Hello <strong>'. $name. '</strong> your Password is <b>'. $password.'</b> never share your password to anybody, click below link to login <br> http://localhost/myapp/login.php';
	#Body in plain text for non-HTML mail clients
	$mail->AltBody = 'Body in plain text for non-HTML mail clients';
	$mail->send();
	return "Mail has been sent successfully!";
} catch (Exception $e) {
	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

}

?>
