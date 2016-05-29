<?php

	session_start();

	if (isset($_SESSION["team"])) {

$con = mysqli_connect("classrebelscom2.fatcowmysql.com", "minet", "minet12", "cryptx");$team = $_SESSION["team"];
?>

<!doctype html>
<html lang="en">

	<head>

		<title>MINET X &middot; Edit People</title>

		<meta charset="utf-8">
		<meta name="author" content="The MINET Team">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" type="text/css" href="css/assets.css">
		<link rel="stylesheet" type="text/css" href="css/styles.css">

		<link rel="icon" type="image/png" href="../
../
../img/icon.png">
		<link rel="apple-touch-icon-precomposed" href="../
../
../img/icon.png">
		<meta name="theme-color" content="#2979ff">

	</head>

	<body class="edit_people">

	<header id="masthead">
		<div class="container">
			<div class="one-third column left">
				<a href="http://minet.co" target="_blank" class="handletter">MINET</a>
			</div>
				<div class="two-thirds column right">
					<nav>
						<ul>
							<li><a href="backend.logout.php">Logout</a></li>
						</ul>
					</nav>
				</div>
		</div>
	</header>
<form action="submit.php" method="post">
	<section class="edit-main">
		
		<div class="container">
			
				<div class="row">
					
					<div class="twelve columns">
						
						<h1 class="hero-head">Registration</h1>

					<?php
$sql = "SELECT * FROM level WHERE team = '" . $team . "'";

		$result = $con -> query($sql);

		if ($result -> num_rows > 0) {
			while($row = $result -> fetch_assoc()) {
				echo '	<h3 class="subhead" name="school-name">'. $row["schoolname"] . '</h3>';
				echo '<h3 class="subhead" name="school-email">'.$row["inchargeemail"].'</h3>';
						?>

					</div>

				</div>

				<div class="row edits">
					
					<div class="six columns">

						<div class="row">
							
							<div class="twelve columns">
								
								<h4 class="form-heading">Student Incharge</h4>
	
								<div class="participant">

									<input name="inchargename" class="u-full-width" value="<?php echo $row["inchargename"]; ?>" type="text" placeholder="Student Incharge Name">
									<input name="inchargeemail" class="u-full-width" value="<?php echo $row["inchargeemail"]; ?>" type="email" placeholder="Student Incharge Email">

								</div>

							</div>

						</div>

						<div class="row">
							
							<div class="twelve columns">
								
								<h4 class="form-heading">Quiz</h4>
								
								<div class="participant">
									
									<input name="quiz1name" class="u-full-width" value="<?php echo $row["quiz1name"]; ?>" type="text" placeholder="Quiz Participant 1 Name">
									<input name="quiz1email" class="u-full-width" value="<?php echo $row["quiz1email"]; ?>" type="email" placeholder="Quiz Participant 1 Email">

								</div>
								
								<div class="participant">

									<input name="quiz2name" class="u-full-width" value="<?php echo $row["quiz2name"]; ?>" type="text" placeholder="Quiz Participant 2 Name">
									<input name="quiz2email" class="u-full-width" value="<?php echo $row["quiz2email"]; ?>" type="email" placeholder="Quiz Participant 2 Email">
								</div>

								<div class="participant">

									<input name="quiz3name" class="u-full-width" value="<?php echo $row["quiz3name"]; ?>" type="text" placeholder="Quiz Participant 3 Name">
									<input name="quiz3email" class="u-full-width" value="<?php echo $row["quiz3email"]; ?>" type="email" placeholder="Quiz Participant 3 Email">

								</div>

							</div>

						</div>	

						<div class="row">
							
							<div class="twelve columns">
								
								<h4 class="form-heading">Programming</h4>
								
								<div class="participant">
									
									<input name="programming1name" class="u-full-width" value="<?php echo $row["programming1name"]; ?>" type="text" placeholder="Programming Participant 1 Name">
									<input name="programming1email" class="u-full-width" value="<?php echo $row["programming1email"]; ?>" type="email" placeholder="Programming Participant 1 Email">

								</div>
								
								<div class="participant">

									<input name="programming2name" class="u-full-width" value="<?php echo $row["programming2name"]; ?>" type="text" placeholder="Programming Participant 2 Name">
									<input name="programming2email" class="u-full-width" value="<?php echo $row["programming2email"]; ?>" type="email" placeholder="Programming Participant 2 Email">
								</div>

							</div>

						</div>	
						
					</div>

					<div class="six columns">

						<div class="row">
							
							<div class="twelve columns">
								
								<h4 class="form-heading">Gaming</h4>
	
								<div class="participant">

									<input name="gamingname" class="u-full-width" value="<?php echo $row["gamingname"]; ?>" type="text" placeholder="Gaming Participant Name">
									<input name="gamingemail" class="u-full-width" value="<?php echo $row["gamingemail"]; ?>" type="email" placeholder="Gaming Participant Email">

								</div>

							</div>

						</div>

						<div class="row">
							
							<div class="twelve columns">
								
								<h4 class="form-heading">Design</h4>
								
								<div class="participant">
									
									<input name="design1name" class="u-full-width" value="<?php echo $row["design1name"]; ?>" type="text" placeholder="Design Participant 1 Name">
									<input name="design1email" class="u-full-width" value="<?php echo $row["design1email"]; ?>" type="email" placeholder="Design Participant 1 Email">

								</div>
								
								<div class="participant">

									<input name="design2name" class="u-full-width" value="<?php echo $row["design2name"]; ?>" type="text" placeholder="Design Participant 2 Name">
									<input name="design2email" class="u-full-width" value="<?php echo $row["design2email"]; ?>" type="email" placeholder="Design Participant 2 Email">
								</div>

								<div class="participant">

									<input name="design3name" class="u-full-width" value="<?php echo $row["design3name"]; ?>" type="text" placeholder="Design Participant 3 Name">
									<input name="design3email" class="u-full-width" value="<?php echo $row["design3email"]; ?>" type="email" placeholder="Design Participant 3 Email">

								</div>

							</div>

						</div>	

						<div class="row">
							
							<div class="twelve columns">
								
								<h4 class="form-heading">Speaking</h4>
								
								<div class="participant">
									
									<input name="speakingname" class="u-full-width" value="<?php echo $row["speakingname"]; ?>" type="text" placeholder="Speaking Participant Name">
									<input name="speakingemail" class="u-full-width" value="<?php echo $row["speakingemail"]; ?>" type="email" placeholder="Speaking Participant Email">

								</div>

								<div class="participant">
								
									<input class="u-full-width" type="submit">

									<input class="u-full-width red" type="submit" value="Reset">

								</div>
						
							</div>

						</div>	
						
					</div>
						
				</div>

		</div><?php 
			}
		}?>

	</section>
</form>
<script src="//use.typekit.net/dbe5tbi.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>

</body>
</html>

<?php

	} else {
		include "backend.login.php";
	}

?>