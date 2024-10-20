<!DOCTYPE html>
<html lang="en">
<head>
<title>Heightmap Farming Simulator 19 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Heightmap Farming Simulator 19 - PMC Farming">
<META name="keywords" content="Terrain, Heightmap, PMC, Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
<h1><b>Heightmap Farming Simulator 19 - PMC Farming</b></h1>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>Heightmap FS19</h2>

<p>
Heightmap or Digital Elevation Model (DEM) as its called in FS19, is the terrain elevations in 16bit grayscale png image format.
</p>

<p>
The data in the heightmap is a 16bit value, encoded in the red and green channel of the image. This means the final value can be calculated as: (red&lt;&lt;8) + green.
</p>

<p>
The GIANTS Editor and the engine also support 16bit png images. For example you can create the in photoshop / gimp by switching to grayscale and 16bits / channel.
</p>

<p>
mapDE and mapUS are 2km x 2km terrains with heightmap image size of 1024 x 1024 resolution (or 1025 with the extra pixel). You can prepare your heightmap as standard size of 1024, 2048, 4096 etc and let GE automatically add the extra pixel upon first load/save.
</p>

<p>
See also <a href="terrain-unitsperpixel.php">unitsPerPixel</a> and <a href="terrain-heightscale.php">heightScale</a>.
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
