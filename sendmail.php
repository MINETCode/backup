<?php

	if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
		$ip = $_SERVER['HTTP_CLIENT_IP'];
	} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	} else {
		$ip = $_SERVER['REMOTE_ADDR'];
	}

	$name = $_POST["name"];
	$address = $_POST["address"];
	$number = $_POST["number"];
	$email = $_POST["email"];
	$content = $_POST["content"];

	$msg = "School name: " . $name . "\n\nAddress: " . $address . "\n\nNumber: " . $number . "\n\nEmail: " . $email . "\n\nAchivements: " . $content . "\n\nIP:" . $ip;
	$msg = wordwrap($msg, 70);

	//mail("anandchowdhary@gmail.com", "X Invitation Request", $msg);

	header("Location: http://minet.co/thanks.php");

?>