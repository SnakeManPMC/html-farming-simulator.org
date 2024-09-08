<!DOCTYPE html>
<html lang="en">
<head>
<title>modDesc.xml Farming Simulator 22 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="modDesc.xml Farming Simulator 22 - PMC Farming">
<META name="keywords" content="Terrain, modDesc.xml, FS22, PMC, Farming, Simulator">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
<h1><b>Terrain modDesc.xml PMC Farming Simulator 22</b></h1>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>modDesc.xml</h2>

<p>
<b>2022-01-04T08:32:00Z</b> Updated. Game engine v1.2.0.2 used.
</p>

<p>
First please read <a href="../19/terrain-moddesc-xml.php">FS19 modDesc.xml</a> page.
</p>

	<h2>FS22 modDesc Version</h2>

<p>
You can now find modDesc version from v1.2.0.2 game log. Search for "ModDesc Version:" string in the log, the number is the current game engine modDesc version number.
</p>
<pre>
2021-12-24 22:23   ModDesc Version: 63
</pre>

<p>
Keep your modDesc.xml files first line always up to date against game engines version. Obviously this doesn't mean you need to release "re-issue" of your terrain just because new game update increments modDesc Version number, but when ever you are releasing new update make sure modDesc is up to date as well.
</p>

<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("/var/www/include/footer-start.php"); ?>
<p><a href="map-making-tutorial.php" class="button">PMC Farming Simulator 22 Map Making Tutorial page</a></p>
<p><a href="../index.php" class="button">PMC Farming Simulator root page</a></p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("/var/www/include/footer-end.php"); ?>
<?php include("/var/www/include/support.php"); ?>
<?php include("/var/www/include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
