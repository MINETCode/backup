<?php

	include("php/head.php");

	if (isset($_GET["page"])) {
		if (file_exists("pages/".$_GET["page"].".php")) {
			include("pages/".$_GET["page"].".php");
		} else {
			echo '
		<section class="hello">
			<div class="container">
				<h1>Four-oh-four!</h1>
				<p>We couldn&rsquo;t find the page you&rsquo;re looking for. :(</p>
			</div>
		</section>
			';
		}
	} else {
		include("pages/home.php");
	}

	include("php/foot.php");

?>