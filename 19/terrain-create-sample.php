<!DOCTYPE html>
<html lang="en">
<head>
<title>Create Sample Terrain Farming Simulator 19 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Create Sample Terrain Farming Simulator 19 - PMC Farming">
<META name="keywords" content="Terrain, Create Sample Terrain, PMC, Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
<h1><b>PMC Farming Simulator Terrain Create Sample Terrain</b></h1>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>Create Sample Terrain</h2>

<p>
<b>2020-08-09</b> Updated.
</p>

<p>
Don't download sample mod maps as they usually contain all kinds of "good stuff" the author wants you to have and quickly gets outdated. Instead just create sample terrain by yourself from the latest up to date game data available, anytime.
</p>

<p>
- start giants editor v8.2 (at the time of writing this)<br>
- file -> new mod from game -> map: sample mod map 1 (1 is mapDE felsbrunn, 2 is mapUS ravenport)<br>
- working directory dialog is where you want to save/export this new terrain copy (do NOT save to "my documents")<br>
- delete all transformgroups with original terrain objects in them, basically only leave terrain and careerStartPoint<br>
- save and exit
</p>

<p>
You can of course leave the objects from mapDE or mapUS (depending which you chosen) into the sample terrain, but usually they are just in the way and its easier to delete all of them.
</p>

<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("/var/www/include/footer-start.php"); ?>
<p><a href="terrain-editing-tutorial.php" class="button">PMC Farming Simulator Terrain Editing Tutorial page</a></p>
<p><a href="../index.php" class="button">PMC Farming Simulator root page</a></p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("/var/www/include/footer-end.php"); ?>
<?php include("/var/www/include/support.php"); ?>
<?php include("/var/www/include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
