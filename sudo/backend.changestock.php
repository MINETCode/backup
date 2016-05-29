<?php

	$con = mysqli_connect("classrebelscom2.fatcowmysql.com", "minet", "minet12", "cryptx");

	$current = 0;
	$team = $_POST["team"];
	$amount = $_POST["amount"];

						$asql = "SELECT * FROM level WHERE team = '".$team."'";
						$result = $con -> query($asql);
						if ($result -> num_rows > 0) {
							while($row = $result -> fetch_assoc()) {
								if ($row["noncompete"] !== "1")
									$current = $row["stock"];
							}
						}

	$sql = "UPDATE level SET stock = '".($amount + $current)."' WHERE team = '".$team."' ";

	if ($con->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . $con->error;
	}

?>