<!DOCTYPE html>
<html lang="en">
<head>
<title>Terrain Overview Image mapUS Elmcreek Farming Simulator 22 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Terrain Overview Image mapUS Elmcreek Farming Simulator 22 - PMC Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
<h1>Terrain Overview Image mapUS Elmcreek PMC Farming Simulator 22</h1>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>PDA Map Is Now Overview Image</h2>

<p>
<b>2024-03-03</b> updated.
</p>

<p>
Join discussion in <a href="https://www.pmctactical.org/forum/viewtopic.php?f=78&t=22946" target="_blank">PMC Tactical Forum Terrain Overview Image mapUS Elmcreek FS22 topic</a>, reply feedback if you find any errors or issues with this page.
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
First odd thing you notice in this image if you are old terrain developer from FS17/FS19 is the outline, this whole image is not anymore covering what the actual terrain size is, there is "excess" outside terrain graphics included. Looks nice but really odd way of doing things. Why not put that pixel resolution to good use in the actual terrain PDA map, now its not used for anything but outside terrain, waste of resources.
</p>

<p>
Terrain overview image has no fields as they are drawn real time in the game engine. The TERRAIN.xml had config for mapFieldColor which defines which color the field is drawn in PDA, lets call it mapview. This could be that if you enlarge fields by ploughing they would appear in real size (or "real time" perhaps) on mapview screen. Assuming they are drawn from cultivator_density image (hopefully not from field definitions).
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
