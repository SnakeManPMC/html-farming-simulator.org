<!DOCTYPE html>
<html lang="en">
<head>
<title>densityMap infoLayer Resolution mapUS Farming Simulator 22 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="densityMap infoLayer Resolution mapUS Farming Simulator 22 - PMC Farming">
<META name="keywords" content="Terrain, densityMap, infoLayer, Resolution, mapUS, Map, Elmcreek FS22, PMC, Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
<h1><b>PMC Farming Simulator Terrain densityMap infoLayer Resolution mapUS</b></h1>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>Terrain densityMap infoLayer Resolution mapUS</h2>

<p>
<b>2021-12-14T09:02:00Z</b> updated. Game engine v1.1.1 used.
</p>

<p>
Elmcreek aka mapUS image resolutions. FS17 and FS19 these were called cultivator_density.gdm and fruit_density.gdm, now giants calls them densityMap_fruits.gdm and infoLayer_farmland.grle etc.
</p>

<p>
All densityMap_ images are 4096 x 4096 pixel resolution.
</p>
<pre>
densityMap_fruits.png PNG 4096x4096+0+0 DirectClass 8-bit 1.7Mi 0.000u 0m:0.000002s
densityMap_ground.png PNG 4096x4096+0+0 DirectClass 8-bit 57.1Ki 0.000u 0m:0.000002s
densityMap_height.png PNG 4096x4096+0+0 DirectClass 8-bit 48.1Ki 0.000u 0m:0.000003s
densityMap_stones.png PNG 4096x4096+0+0 PseudoClass 256c 8-bit 550.1Ki 0.000u 0m:0.000002s
densityMap_weed.png PNG 4096x4096+0+0 PseudoClass 256c 8-bit 16.1Ki 0.000u 0m:0.000002s
</pre>

<p>
These infoLayer_ images seem to have various sizes, 1024, 2048 and 4096.
</p>
<pre>
infoLayer_farmland.png PNG 1024x1024+0+0 PseudoClass 256c 8-bit 15.1Ki 0.000u 0m:0.000002s
infoLayer_indoorMask.png PNG 4096x4096+0+0 PseudoClass 256c 8-bit 141.2Ki 0.000u 0m:0.000002s
infoLayer_navigationCollision.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.3Ki 0.000u 0m:0.000002s
infoLayer_placementCollisionGenerated.png PNG 1024x1024+0+0 PseudoClass 256c 8-bit 59.8Ki 0.000u 0m:0.000002s
infoLayer_tipCollision.png PNG 4096x4096+0+0 PseudoClass 256c 8-bit 162.2Ki 0.000u 0m:0.000002s
infoLayer_tipCollisionGenerated.png PNG 4096x4096+0+0 PseudoClass 256c 8-bit 129.2Ki 0.000u 0m:0.000002s
</pre>

<p>
As Giants terrains always are 2km x 2km in size their heightmap is also always 1024 x 1024 (with added 1 pixel for 1025).
</p>
<pre>
map_dem.png PNG 1025x1025+0+0 PseudoClass 65536c 16-bit 829.5Ki 0.000u 0m:0.000003s
</pre>

<p>
Ground detail texture weight images are all the same 2048 x 2048 resolution. We don't list them all here as they are all the same. 2048 resolution, 8bit grayscale images, as usual.
</p>
<pre>
animalMud01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 5.9Ki 0.000u 0m:0.000004s
</pre>

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
