<?php

	$school = $_POST["school"];
	$ans0 = $_POST["ans0"];
	$ans1 = $_POST["ans1"];
	$ans2 = $_POST["ans2"];
	$ans3 = $_POST["ans3"];
	$ans4 = $_POST["ans4"];
	$ans5 = $_POST["ans5"];
	$ans6 = $_POST["ans6"];
	$ans7 = $_POST["ans7"];
	$ans8 = $_POST["ans8"];
	$ans9 = $_POST["ans9"];
	$ans10 = $_POST["ans10"];
	$ans11 = $_POST["ans11"];
	$ans12 = $_POST["ans12"];
	$ans13 = $_POST["ans13"];
	$ans14 = $_POST["ans14"];
	$ans15 = $_POST["ans15"];
	$ans16 = $_POST["ans16"];
	$ans17 = $_POST["ans17"];
	$ans18 = $_POST["ans18"];
	$ans19 = $_POST["ans19"];
	$ans20 = $_POST["ans20"];
	$ans21 = $_POST["ans21"];
	$ans22 = $_POST["ans22"];
	$ans23 = $_POST["ans23"];
	$ans24 = $_POST["ans24"];
	$ans25 = $_POST["ans25"];
	$ans26 = $_POST["ans26"];
	$ans27 = $_POST["ans27"];
	$ans28 = $_POST["ans28"];
	$ans29 = $_POST["ans29"];
	$ans30 = $_POST["ans30"];
	$ans31 = $_POST["ans31"];

	$con = mysqli_connect("classrebelscom2.fatcowmysql.com", "minet", "minet12", "cryptx");

	$sql = "INSERT INTO quizprelims (school, ans0, ans1, ans2, ans3, ans4, ans5, ans6, ans7, ans8, ans9, ans10, ans11, ans12, ans13, ans14, ans15, ans16, ans17, ans18, ans19, ans20, ans21, ans22, ans23, ans24, ans25, ans26, ans27, ans28, ans29, ans30, ans31)
	VALUES ('" . $school . "', '" . $ans0 . "', '" . $ans1 . "', '" . $ans2 . "', '" . $ans3 . "', '" . $ans4 . "', '" . $ans5 . "', '" . $ans6 . "', '" . $ans7 . "', '" . $ans8 . "', '" . $ans9 . "', '" . $ans10 . "', '" . $ans11 . "', '" . $ans12 . "', '" . $ans13 . "', '" . $ans14 . "', '" . $ans15 . "', '" . $ans16 . "', '" . $ans17 . "', '" . $ans18 . "', '" . $ans19 . "', '" . $ans20 . "', '" . $ans21 . "', '" . $ans22 . "', '" . $ans23 . "', '" . $ans24 . "', '" . $ans25 . "', '" . $ans26 . "', '" . $ans27 . "', '" . $ans28 . "', '" . $ans29 . "', '" . $ans30 . "', '" . $ans31 . "')";

	if ($con->query($sql) === TRUE) {
		echo "Thank you for participating, " . $school . ".";
	} else {
		echo "Error: " . $sql . $con->error;
	}

?>