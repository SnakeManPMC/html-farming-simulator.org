<!DOCTYPE html>
<html lang="en">
<head>
<title>Terrain Skybox Size Configuration Farming Simulator 17 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Terrain Skybox Size Configuration Farming Simulator 17 - PMC Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
	<h1>Terrain Skybox Size Configuration Farming Simulator 17 - PMC Farming</h1>

<p>
Terrain Editing Tutorial: Terrain Skybox Size Configuration for Farming Simulator 17 (FS17) by PMC.
</p>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
<?php include("/var/www/include/support.php"); ?>
	<h2>Terrain Skybox Size Configuration FS17</h2>

<p>
HOWTO configure FS17 terrain skybox Size.
</p>

<p>
I took the maps/sky/ directory from your sample terrain and edited maps/map01_environment.xml to read &gt;environment filename="maps/sky/ instead of "$data/sky/
</p>

<p>
Open sky_day_night.i3d file in <a href="terrain-giants-editor.php">Giants Editor FS17</a>, select sky transformgroup, then change scale X, Y and Z to 8. Do the same for skyUS_day_night.i3d file too. Now your skybox is enough for 8.1 kilometer x 8.1 kilometer terrains as well. For PMC 32768 Terrain I made the scale 16.
</p>

<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("/var/www/include/footer-start.php"); ?>
<?php include("../include/fs17-terrain-editing-tutorial-footer.php"); ?>
<?php include("/var/www/include/footer-end.php"); ?>
<?php include("/var/www/include/support.php"); ?>
<?php include("/var/www/include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
