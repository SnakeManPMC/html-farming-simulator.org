<!DOCTYPE html>
<html lang="en">
<head>
<title>unitsPerPixel - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="unitsPerPixel - PMC Farming">
<META name="keywords" content="unitsPerPixel, Terrain, PMC, Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
<h1><b>PMC Farming Terrain unitsPerPixel</b></h1>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
<h2>Heightmap * unitsPerPixel Defines Size</h2>

<p>
Terrain size is defined by heightmap grid resolution multiplied by unitsPerPixel property in terrain.i3d file. unitsPerPixel can be edited from GE GUI as well.
</p>

<p>
unitsPerPixel is a one heightmap grid point in 3D. Smaller it is more detailed and smaller the terrain will be and larger it is more larger the terrain will be. unitsPerPixel is meters.
</p>

<pre>
unitsPerPixel="2"
</pre>

<p>
mapDE and mapUS both use unitsPerPixel="2" and with 1024 x 1024 heightmap grid resolution they become 2km x 2km terrains. This means one heightmap grid point covers 2 meters in-game.
</p>

<p>
<a href="pmc-grande-gardens-16km.php">PMC Grande Gardens 16km</a> is 16.3km size terrain. Its heightmap image resolution is 4096 x 4096 (in GE it turns into 4097 x 4097) and PMC_Grande_Gardens_16km.i3d lists unitsPerPixel="4" which means one heightmap grid point covers 4 meters in-game. <a href="pmc-north-dakota-wahpeton-16km.php">PMC North Dakota Wahpeton 16km</a> and <a href="pmc-texas-hereford-16km.php">PMC Texas Hereford 16km</a> uses the same specifications.
</p>

<p>
PMC Eternal Sugar Beet Damnation 32km is 32km terrain which uses 4096 x 4096 grid heightmap and unitsPerPixel="8".
</p>

<p>
Decimal values work as well, for example unitsPerPixel="3.5" works okay. Its recommended to keep these as .5 or .25 numbers instead of going wild with .12345678 or similar.
</p>

<p>
You can also use smaller unitsPerPixel for example 0.5 and with 512 x 512 grid heightmap your terrain size would be only 0.2km. In our tests unitsPerPixel 1 with 1024 x 1024 heightmap produces 1km terrain which works OK.
</p>

<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("/var/www/include/footer-start.php"); ?>
<p><a href="map-making-tutorial.php" class="button">PMC Farming Simulator Map Making Tutorial page</a></p>
<p><a href="../index.php" class="button">PMC Farming Simulator root page</a></p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("/var/www/include/footer-end.php"); ?>
<?php include("/var/www/include/support.php"); ?>
<?php include("/var/www/include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
