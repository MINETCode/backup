<?php

	session_start();

$team = $_SESSION["team"];

$inchargename = $_POST["inchargename"];
$inchargeemail = $_POST["inchargeemail"];
$quiz1name = $_POST["quiz1name"];
$quiz1email = $_POST["quiz1email"];
$quiz2name = $_POST["quiz2name"];
$quiz2email = $_POST["quiz2email"];
$quiz3name = $_POST["quiz3name"];
$quiz3email = $_POST["quiz3email"];
$programming1name = $_POST["programming1name"];
$programming1email = $_POST["programming1email"];
$programming2name = $_POST["programming2name"];
$programming2email = $_POST["programming2email"];
$gamingname = $_POST["gamingname"];
$gamingemail = $_POST["gamingemail"];
$design1name = $_POST["design1name"];
$design1email = $_POST["design1email"];
$design2name = $_POST["design2name"];
$design2email = $_POST["design2email"];
$design3name = $_POST["design3name"];
$design3email = $_POST["design3email"];
$speakingname = $_POST["speakingname"];
$speakingemail = $_POST["speakingemail"];

$con = mysqli_connect("classrebelscom2.fatcowmysql.com", "minet", "minet12", "cryptx");

	$sql = "UPDATE level
	SET inchargename='".$inchargename."', inchargeemail='".$inchargeemail."', quiz1name='".$quiz1name."', quiz1email='".$quiz1email."', quiz2name='".$quiz2name."', quiz2email='".$quiz2email."', quiz3name='".$quiz3name."', quiz3email='".$quiz3email."', programming1name='".$programming1name."', programming1email='".$programming1email."', programming2name='".$programming2name."', programming2email='".$programming2email."', gamingname='".$gamingname."', gamingemail='".$gamingemail."', design1name='".$design1name."', design1email='".$design1email."', design2name='".$design2name."', design2email='".$design2email."', design3name='".$design3name."', design3email='".$design3email."', speakingname='".$speakingname."', speakingemail='".$speakingemail."'
	WHERE team = '" . $team . "'";

	if ($con->query($sql) === TRUE) {
		header("Location: index.php");
	} else {
		echo "Error: " . $sql . $con->error;
	}

?>