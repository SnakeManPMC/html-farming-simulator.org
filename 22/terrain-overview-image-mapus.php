<!DOCTYPE html>
<html lang="en">
<head>
<title>Terrain Overview Image mapUS Elmcreek Farming Simulator 22 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Terrain Overview Image mapUS Elmcreek Farming Simulator 22 - PMC Farming">
<META name="keywords" content="Terrain, Overivew, Image, mapUS, Elmcreek, Map, PDA, FS22, PMC, Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<!-- google ads -->
<?php include("../include/google-ads.php"); ?>
<h1><b>Terrain Overview Image mapUS Elmcreek PMC Farming Simulator 22</b></h1>
</header>

<section>
	<h2>PDA Map Is Now Overview Image</h2>

<p>
<b>2021-11-21T01:37:00Z</b> updated. This page is SPECULATION until after 2021-11-21T23:00:00Z when we get to activate the game and try this info ourselves.
</p>

<p>
In FS17 and FS19 it was called "PDA Map" image, in FS22 that changed to "overview.dds" which is odd, cant see any reason why to change it but on the other hand PDA is kind of odd name so overview... is better, I wouldn't call it that but hey I wasn't giants terrain dev so, hehe
</p>

<p>
data\maps\mapUS\map.xml:
</p>

<pre>
&lt;map width="2048" height="2048" imageFilename="$data/maps/mapUS/overview.png"  mapFieldColor="0.1500 0.1195 0.0953" mapGrassFieldColor="0.1470 0.1441 0.0823"&gt;
</pre>

<p>
Elmcreek mapUS overview.dds resolution is 4096 x 4096 pixels.
</p>

<a href="screenshots/Terrain-mapUS-Overview.jpg" target="_blank"><img src="screenshots/thumbs/Terrain-mapUS-Overview.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a> 

<p>
First odd thing you notice in this image if you are old terrain developer from FS17/FS19 is the outline, this whole image is not anymore covering what the actual terrain size is, there is "excess" outside terrain graphics included. Looks nice but really odd way of doing things.
</p>

<p>
Terrain overview image has no fields as they are drawn real time in the game engine. The TERRAIN.xml had config for mapFieldColor which defines which color the field is drawn in PDA, lets call it mapview. This could be that if you enlarge fields by ploughing they would appear in real size (or "real time" perhaps) on mapview screen. Assuming they are drawn from cultivator_density image (hopefully not from field definitions).
</p>

</section>

<footer>
<p><a href="map-making-tutorial.php" class="button">PMC Farming Simulator 22 Map Making Tutorial page</a></p>
<p><a href="../index.php" class="button">PMC Farming Simulator root page</a></p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("../include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
