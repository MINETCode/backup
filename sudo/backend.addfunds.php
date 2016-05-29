<?php

	$con = mysqli_connect("classrebelscom2.fatcowmysql.com", "minet", "minet12", "cryptx");

	$edvent = $_POST["edvent"];
	$team = $_POST["team"];
	$reason = $_POST["reason"];
	$amount = $_POST["amount"];

	$sql = "INSERT INTO thousandsofmoney (event, team, funds, reason)
	VALUES ('".$edvent."', '".$team."', '".$amount."', '".$reason."')";

	if ($con->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . $con->error;
	}

?>