<!DOCTYPE html>
<html lang="en">
<head>
<title>InfoLayer Level GRLE Farming Simulator 22 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="InfoLayer Level GRLE Farming Simulator 22 - PMC Farming">
<META name="keywords" content="Terrain, infoLayer, Level, GRLE, fieldGround.xml, FS22, PMC, Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
<h1><b>InfoLayer Level GRLE Farming Simulator 22 - PMC Farming</b></h1>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>HOWTO Create GRLEs For infoLayer Level Files</h2>

<p>
<b>2022-02-13T20:33:00Z</b> updated.
</p>

<p>
What are infoLayer "Level" images and where to get them? See details from <a href="terrain-fieldground.php">fieldGround.xml</a> page.
</p>

<p>
You can generate infoLayer_ "Level" GRLE files by starting a new career and save it, FS22 will generate those lime/plow/roller/spray/stubble level GRLE's image files in the savegame directory.
</p>

<p>
You can then just copy them over to your terrain project GDM/GRLE/PNG aka data/ directory.
</p>

<p>
Note that infoLayer Level images work just fine as PNG image format, no errors or issues. Giants Test Runner for FS22 does complain about Level images not being GRLE though.
</p>

<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("/var/www/include/footer-start.php"); ?>
<?php include("../include/fs22-terrain-editing-tutorial-footer.php"); ?>
<?php include("/var/www/include/footer-end.php"); ?>
<?php include("/var/www/include/support.php"); ?>
<?php include("/var/www/include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
