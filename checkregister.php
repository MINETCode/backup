<?php
	if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
		$ip = $_SERVER['HTTP_CLIENT_IP'];
	} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	} else {
		$ip = $_SERVER['REMOTE_ADDR'];
	}

	$code = $_POST["code"];

	$msg = "Invitation Code: " . $code . "\n\n" . $ip;
	$msg = wordwrap($msg, 70);

	mail("anandchowdhary@gmail.com", "X RSVP", $msg);

	header("Location: http://minet.co/thanks.php");

?>