<!doctype html>
<html lang="en">

	<head>

		<title>X</title>

		<meta charset="utf-8">
		<meta name="author" content="The MINET Team">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" type="text/css" href="http://minet.co/css/assets.css">
		<link rel="stylesheet" type="text/css" href="http://minet.co/css/styles.css">
		<link rel="stylesheet" type="text/css" href="styles.css">

		<link rel="icon" type="image/png" href="http://minet.co/img/icon.png">
		<link rel="apple-touch-icon-precomposed" href="http://minet.co/img/icon.png">
		<meta name="theme-color" content="#2979ff">

	</head>

	<body>


		<div class="question">
			<form id="theForm">
				<select name="team" class="team">
					<option selected disabled>Select Team</option>
					<?php
						$con = mysqli_connect("classrebelscom2.fatcowmysql.com", "minet", "minet12", "cryptx");
						$sql = "SELECT * FROM level";
						$result = $con -> query($sql);
						if ($result -> num_rows > 0) {
							while($row = $result -> fetch_assoc()) {
								if ($row["noncompete"] !== "1")
									echo "<option>" . $row["team"] . "</option>";
							}
						}
						$con -> close();
					?>
				</select>
				
				<input type="text" placeholder="Add Stock (eg. 5000)" name="amount" class="amount">
				<input type="submit" value="Stock Price">
			</form>
		</div>

		<div class="footer"><a href="index.html">&larr; Back</a></div>

		<script src="//use.typekit.net/dbe5tbi.js"></script>
		<script>try{Typekit.load();}catch(e){}</script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script type="text/javascript">
			$(function() {
				$("#theForm").submit(function(evt) {
					$(".answer-box").attr("disabled", "disabled");
					$.post("backend.changestock.php", { team: $(".team").val(), amount: $(".amount").val() })
						.done(function(data) {
							alert(data);
					});
					evt.preventDefault();
				});

			});
		</script>

	</body>

</html>