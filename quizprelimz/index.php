<!doctype html>
<html lang="en">

	<head>

		<title>Quiz Prelims</title>

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

		<form action="submit.php" method="post">

		<div style="margin-bottom: 50px"><select name="school"><option>Select School</option>
			<?php
				$con = mysqli_connect("classrebelscom2.fatcowmysql.com", "minet", "minet12", "cryptx");
				$sql = "SELECT * FROM level";
				$result = $con -> query($sql);
				if ($result -> num_rows > 0) {
					while($row = $result -> fetch_assoc()) {
						if ($row["noncompete"] !== "1")
							echo "<option>" . $row["schoolname"] . "</option>";
					}
				}
				$con -> close();
			?></select>
		</div>

<?php

	$questions = Array("Last year, NASA and Google collaborated with a company known as D-Wave to give rise to a device in the computational field. Which device is this?", "‘This is a program to deliver a fast, easy wireless experience in close partnership with leading carriers, hardware makers, and our users.’ — Google. Identify.", "No campfire is complete without one of these.", "What is ‘the result of years of research and development, and, of course, an interplay of hardware and software’?", "‘... And now the cookie monster is sad because there are no cookies, and you’re sad because you have no friends.’ Whose response is this, and to what?", "Connect: Millenials, Baby boomers and Business decision-makers. ", "‘Oh ok.’ This two word tweet, subsequently deleted, was whose reaction to what?", "‘... I'm also curious about whether there is a fundamental mathematical law underlying human social relationships that governs the balance of who and what we all care about. I bet there is.’ During a recent Q&A session, this was X’s response to Y’s question, which proved to be the most liked. Identify.", "If _____, then the world would be a profoundly different place than we usually assume it to be. There would be no special value in 'creative leaps', no fundamental gap between solving a problem and recognizing the solution once it’s found. Everyone who could appreciate a symphony would be Mozart; everyone who could follow a step-by-step argument would be Gauss…", "300615... RUN! IT'S GOING TO CRASH", "The original inspiration for this technology occurred when a friend of the inventor was unable to complete a sale of his glass faucets and fittings because he could not accept credit cards. Several names were considered but rejected, including squirrel, stash and wallet. The name Squirrel was in use during a meeting the company had with Apple, wherein Scott Forstall, SVP of iPhone Software, informed them that they should change the name. Identify.", "Who were the following lines addressed to — ‘I bleed in 6 colours.’", "‘Once he leaves, I'm not going to need him for anything. That's the principle. Use him, yes, need him, no.’ Identify the person who said this, and the person who this is regarding.", "An ______, as the title text explains, is the idea that an entire way of thinking is dependent on the surroundings. Thus, this April Fools comic changes based on the browser, location, or referrer. Whatever the viewer is viewing the comic on, where they live, or where they came from determines which comic they actually see. As a result, there are actually multiple comics that went up on April Fools' Day, although only one is seen. ", "‘All the best games are easy to learn and difficult to master. They should reward the first quarter and the hundredth.’ What is this crisp statement better known as?", "In 1972, before Atari's official incorporation, Bushnell wrote down several words from the game go, eventually choosing atari, a term which means ‘to hit the target’, as the previous company was never officially incorporated. What was the previous name of the company?", "You don’t know who wrote this. ", "But, is it not utterly barmy to send _____ through the mail? Dave Rotheroe doesn’t think so. He raised nearly $4,200 on Kickstarter — nearly double his original goal — to create the service, which he says will start shipping at the end of August or beginning of September. Subscribers will be presented with a series of questions including ‘Sweet or savory?’ and ‘Are you vegetarian or gluten free?’ ", "A South American reverberation. ", "Since leaving Apple in 1984, he has co-founded three new companies — Radius (1986), General Magic (1990) and Eazel (1999). In August 2005, he joined Google, where he was a key designer of the Google+ Circles component user interface. Who are we talking about?", "Hail hindi.", "It was this many: [ :( ] ^ 30000", "In reference to an article in X slamming the company’s work culture, Y’s CEO had this to say: “I strongly believe that anyone working in a company that really is like the one described in X would be crazy to stay. I know I would leave such a company.” ID X and Y.", "While he was still in college, he started a company that involved a search engine. He sold it, and started One97. In 2010, after the crash of the stock market, he started an online e-commerce service, which is now a valued billion dollar company. Among his investors are Jack Ma of the Alibaba Group. Who are we talking about here?", "A concatenation of two famous female names. ", "After being denied admission to IIT, this man decided to study at the University of Pennsylvania, where he created a detergent which he tried to sell at Walmart, but wasn’t able to. He returned to India, where he started an ecommerce company. Who are we talking about here?",  "“We spent a lot of time with people who were having all kinds of trouble with their Wi-Fi,” says Trond Wuellner, whose company is launching a new device in partnership with router-maker TP-Link. Name the device.", "Jordan’s got a really good one, it seems.", "Connect the following: Loved, Hardware & Software, Amazing Apps, Photos & Videos. What’s next in this series?", "In 2013, they signed a two year contract with Robert Downey Jr to be their new ‘Instigator of Change’. After being credited for making the World’s first Microsoft powered phone, they have now moved into an alliance with Valve Corporation to create a virtual reality head mounted display. Name the company and this HMD.", "Which company, started by ex-Microsoft employees, runs and maintains the Source engine?", "Apple seems to be working on a project for a self driving car. In fact, earlier this week, Jamie Carlson, one of the leading engineers from X came on board to help. What do we better know this project as? Identify X.");

		for ($i = 0; $i < 32; $i++) { 
			echo "<div class='question'>" . $questions[$i] . "<br><br><input type='text' placeholder='Answer' name='ans" . $i. "'></div>\n\n";
		}

?>

		<input type="submit">

		</form>

		<script src="//use.typekit.net/dbe5tbi.js"></script>
		<script>try{Typekit.load();}catch(e){}</script>

	</body>

</html>