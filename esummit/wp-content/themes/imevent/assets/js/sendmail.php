<?php

$name=$_POST['entry_421389354'];
	$email=$_POST['entry_1262475799'];
	$college=$_POST['entry_1702262569'];
	$phone=$_POST['entry_1414961846'];
include_once './pages/functions.php';
	include_once './swift/swift_required.php';
	$info = array(
		'competition' => 'Pitch-ur-Product',
		'name' => $name,
		'email' => $email,
		'college' => $college,
		'phone' => $phone
		);
		
		if(send_email($info)){
			$mail_status = 'sent';
		}
		else{
			$mail_status = 'mail sending failed';
		}
		echo $mail_status;


?>