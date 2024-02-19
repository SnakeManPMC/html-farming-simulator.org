<!DOCTYPE html>
<html lang="en">
<head>
<title>Developer Diary PMC Iowa Garden City 8km FS19 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Developer Diary PMC Iowa Garden City 8km FS19 - PMC Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<h1><b>Developer Diary PMC Iowa Garden City 8km FS19 - PMC Farming</b></h1>
</header>

<section>
	<h2>2021-06-26 Editing Player Farms</h2>

<p>
<b>2021-06-26T21:31:00Z</b> After few days break just playing in PMC Iowa Garden City v1.1.8 its time to get back to editing. Todays goal is to transfer SIX (6) farm yard buildings into player farms placeables using defaultItems.xml config.
</p>

<p>
I want to focus on the SE and NE area, well lets just say eastern area because right now somehow all the 10 farm yards I did are in very close proximity to farm 1 in west, south west area.
</p>

<p>
In GE transformgroup Buildings have Location sub transformgroups, looks like number 57 is in north central and from there buildings are placed in clockwise direction where 93 is directly south from garden city.
</p>

<p>
2021-06-26T21:54:00Z Took a moment but Location-36 transferred to players farm, this is now farm 11 (farmid="0" but yeah eleventh player farm).
</p>

<p>
2021-06-26T22:15:00Z Players farm 11 transferred from static AI farms, with auger pipe bin silo.
</p>

<p>
Continue reading <a href="dev-diary-pmc-iowa-garden-city-8km-030.php">next page</a>, back to <a href="dev-diary-pmc-iowa-garden-city-8km.php">Dev Diary PMC Iowa Garden City 8km Homepage</a> or <a href="dev-diary-pmc-iowa-garden-city-8km-028.php">previous page</a>.
</p>
</section>

<footer>
<p>
<a href="pmc-terrains.php" class="button">PMC Terrains FS19</a>
<a href="changelog-pmc-iowa-garden-city-8km.php" class="button">Changelog PMC Iowa Garden City 8km</a>
<a href="pmc-iowa-garden-city-8km.php" class="button">PMC Iowa Garden City 8km</a>
<a href="../index.php" class="button">PMC Farming Simulator root page</a>
</p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("../include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
