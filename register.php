<?php

	include("php/header.php");

?>

		<header id="masthead">
			<div class="container">
				<div class="one-third column left">
					<span class="handletter">MINET</span>
				</div>
				<div class="two-thirds column right">
					<nav>
						<ul>
							<li class="mob-logo"><a href="#">MINET</a>
							<li><a href="index.php">Back Home</a>
						</ul>
					</nav>
				</div>
			</div>
		</header>

		<section class="page">
			<div class="container">
				<div class="three columns">&nbsp;</div>
				<div class="one-half column">
					<h1>Registration</h1>
					<p>Teams that have received their invitations can preregister themselves for X. If there are any changes in names of participants, teams will be allowed to make them on-site on the first day.</p>
					<p>Please note that participation in every event in <strong>compulsory</strong> to be eligible for the Overall Winners&rsquo; prize.</p>
					<form class="big-form" action="checkregister.php" method="post">
						<input name="code" required placeholder="Invitation Code" type="text">
						<input type="submit" value="Continue">
					</form>
				</div>
			</div>
		</section>

		<script type="text/javascript">
			window.onload = function() { setPage("Registration"); }
		</script>

<?php

	include("php/footer.php");

?>