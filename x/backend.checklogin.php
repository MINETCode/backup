<?php

	session_start();

	$username = ($_POST["username"]);
	$password = ($_POST["password"]);
	$login = 0;

$con = mysqli_connect("classrebelscom2.fatcowmysql.com", "minet", "minet12", "cryptx");
	$sql = "SELECT * FROM level";
	$result = $con -> query($sql);

		if ($result -> num_rows > 0) {
			while($row = $result -> fetch_assoc()) {
				if ($username == $row["team"]) {
					if ($password == $row["password"]) {
						$login++;
						//header("Location: index.php");
					} else {
						//header("Location: index.php");
					}
				} else {
					//header("Location: index.php");
				}
			}
		}

		$con -> close();

	if ($login == 0) {
		header("Location: index.php");
	} else {
		$_SESSION["team"] = $username;
		header("Location: index.php");
	}

?>