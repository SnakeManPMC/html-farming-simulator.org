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
	<h2>2021-07-23 Farmland Image RGB Shuffle</h2>

<p>
2021-07-23T02:09:00Z New editing day has started, farmland image work continues, need to split off farm yards from those huge RGB color areas. Its pointless to have small farm yards attached to huge land which cost over half a million.
</p>

<p>
This is tedious task to shuffle RGB colors from one location to another. Below is my own notes about which RGB colors I switched and shuffled around in order to get room for small farm yards.
</p>

<p>
RGB 45, 110, 210 changed to 210, 45, 110<br>
RGB 135, 0, 255 changed to 135, 255, 0<br>
RGB 115, 225, 35 changed to 115, 35, 225<br>
RGB 151, 150, 150 changed to 5, 120, 220<br>
RGB 175, 235, 25 changed to 25, 175, 235<br>
RGB 235, 25, 175 changed to 175, 25, 235<br>
RGB 110, 210, 45 changed to 25, 25, 50<br>
RGB 30, 0, 255 changed to 0, 30, 255<br>
RGB 125, 100, 255 changed to 125, 255, 25<br>
RGB 5, 70, 255 changed to 255, 70, 5<br>
RGB 200, 30, 100 changed to 130, 40, 130
</p>

<p>
2021-07-23T05:30:00Z Finally finished all GIMP farmland image painting, graphicsmagic converting to GE readable farmland PNG and then in-game testing all farm yard land lots. Also tested selling all the bin silos and buildings which is more like defaultItems.xml stuff.
</p>

<p>
Everything looks good, now we have many extremely cheap farm yards to purchase for poor starting farmers.
</p>

<p>
Continue reading <a href="dev-diary-pmc-iowa-garden-city-8km-042.php">next page</a>, back to <a href="dev-diary-pmc-iowa-garden-city-8km.php">Dev Diary PMC Iowa Garden City 8km Homepage</a> or <a href="dev-diary-pmc-iowa-garden-city-8km-040.php">previous page</a>.
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
