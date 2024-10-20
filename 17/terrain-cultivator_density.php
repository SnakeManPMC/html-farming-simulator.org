<!DOCTYPE html>
<html lang="en">
<head>
<title>Terrain Base Fields cultivator_density Farming Simulator 17 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Terrain Base Fields cultivator_density Farming Simulator 17 - PMC Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
	<h1>Terrain Base Fields cultivator_density Farming Simulator 17 - PMC Farming</h1>

<p>
Terrain Editing Tutorial: Terrain Base Fields cultivator_density for Farming Simulator 17 (FS17) by PMC.
</p>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
<?php include("/var/www/include/support.php"); ?>
	<h2>Terrain Base Fields cultivator_density FS17</h2>

<p>
HOWTO create base fields for your FS17 terrain. You create cultivator_density image by painting in <a href="https://pmc.editing.wiki/doku.php?id=tools:gimp" target="_blank">GIMP</a> or in <a href="terrain-giants-editor.php">Giants Editor FS17</a>. Never ever use any other image editing tool than GIMP.
</p>

<p>
Giants Editor (GE) terrain foliage paint mode, this is the last of the modes in main GE header icons.
</p>

<p>
Channels 0, 1, 2, and 3 define the type of terrain detail you're painting. These are exclusive channels, meaning that you should enable only one of them at a time.
</p>

<p>
Foliage channels for the terrainDetail layer:<br>
0, Cultivated land<br>
1, Ploughed land<br>
2, Seeded/planted land<br>
3, Seeded/planted potatoes
</p>

<p>
Channels 4 through 6 aren't exclusive; you can mix them with each other as well as any of the other channels.
</p>

<p>
Control channels for the terrainDetail Foliage Layer:<br>
4, Sprayed/fertilized land<br>
5, Rotate detail texture 45 degrees clockwise<br>
6, Rotate detail texture 90 degrees<br>
5+6, Rotate detail texture 45 degrees counter clockwise
</p>

<p>
LMB paints, RMB erases.
</p>

<p>
See also various GIMP cultivator_density, fruit_density and road painting tutorials from <a href="../19/terrain-editing-tutorial.php">Terrain Editing Tutorial FS19</a> page.
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
