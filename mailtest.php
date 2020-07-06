<?php
	if (empty($to)) {
		$to      = 'mjd@computer.org';
	}
	$subject = 'the subject';
	$message = 'hello';
	$headers = 'From: mjd@e-nspect.com' . "\r\n" .
   'Reply-To: mjd@e-nspect.com' . "\r\n" .
   'X-Mailer: PHP/' . phpversion();

	mail($to, $subject, $message, $headers);
	echo "mail sent to " . $to . "\n\r";
?> 