<?php

	$con = mysqli_connect("classrebelscom2.fatcowmysql.com", "minet", "minet12", "cryptx");

	$sql = "SELECT * FROM level ORDER BY stock DESC LIMIT 75";

	$result = $con -> query($sql);

	if ($result -> num_rows > 0) {
		echo "<table>";
		echo "<tr>";
			echo "<th>Team</th>";
			echo "<th>Stock Price</th>";
		echo "</tr>";
		while($row = $result -> fetch_assoc()) {
			echo "<tr>";
				echo "<td>" . $row["schoolname"] . "</td>";
				echo "<td>" . $row["stock"] . "." . mt_rand(0, 1000) . "</td>";
			echo "</tr>";
		}
		echo "</table>";
	}

	$con -> close();

?>