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
<!-- google ads -->
<?php include("../include/google-ads.php"); ?>
<h1><b>PMC Farming Simulator Terrain Heightmap</b></h1>
</header>

<section>
	<h2>Heightmap</h2>

<p>
Heightmap or Digital Elevation Map (DEM) as its called in FS19, is the terrain elevations in grayscale png image format.
</p>

<p>
The data in the heightmap is a 16bit value, encoded in the red and green channel of the image. This means the final value can be calculated as: (red&lt;&lt;8) + green.
</p>

<p>
The GIANTS Editor and the engine also support 16bit png images. For example you can create the in photoshop / gimp by switching to grayscale and 16bits / channel.
</p>

<p>
2km x 2km terrain heightmap image size is 1024 x 1024 resolution (or 1025 with the extra pixel). 4km is 2048. 8km is 4096. 16km is 8192 and 32km is 16384. You can prepare your heightmap as standard size of 2048, 4096 etc and let GE automatically add the extra pixel upon first load/save.
</p>

</section>

<footer>
<p><a href="map-making-tutorial.php" class="button">PMC Farming Simulator Map Making Tutorial page</a></p>
<p><a href="../index.php" class="button">PMC Farming Simulator root page</a></p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("../include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
