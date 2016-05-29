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
					<h1>Invitation</h1>
					<p>X is an exclusive invite-only event, and invites are extended to no more than 16 of the very best schools in New Delhi, based on significant achievements in the previous years.</p>
					<p>Schools are requested to list only IT-specific achievements in their invitation requests. Achievements in MUNs, music competitions, etc. will <strong>not</strong> be taken into consideration.</p>
					<form class="big-form" action="sendmail.php" method="post">
						<input name="name" required placeholder="Name of Institution" type="text">
						<input name="address" required placeholder="Address" type="text">
						<input name="number" required placeholder="Contact No." type="tel">
						<input name="email" required placeholder="Email" type="email">
						<textarea name="content" required placeholder="Previous Achivements"></textarea>
						<input type="submit" value="Request an Invitation">
					</form>
				</div>
			</div>
		</section>

<?php

	include("php/footer.php");

?>