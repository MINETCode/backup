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
					<h1>RSVP</h1>
					<p>Teams that have received their invitations can RSVP for X. Please enter the code you received in your invitations to RSVP.</p>
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