<!DOCTYPE html>
<html lang="en">
<head>
<title>Real World Data Terrain Farming Simulator 19 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Real World Data Terrain Farming Simulator 19 - PMC Farming">
<META name="keywords" content="Terrain, Real World Data, PMC, Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<!-- google ads -->
<?php include("../include/google-ads.php"); ?>
<h1><b>PMC Farming Simulator Real World Data Terrain</b></h1>
</header>

<section>
	<h2>Real World Data Terrain</h2>

<p>
<b>2020-08-12</b> Updated.
</p>

<p>
The tools we use are Global Mapper, Terra Incognita and L3DT. Unfortunately global mapper is a commercial software about $500. Please read <a href="https://pmc.editing.wiki/doku.php?id=arma3:terrain:real-world-data-tutorial" target="_blank">PMC Editing Wiki: ArmA 3 Real World Data Terrain Tutorial</a> how to use these tools to get satellite texture and SRTM heightmap.
</p>

<p>
FS19 default terrains use 2 meters per pixel heightmap resolution. SRTM heightmap resolution is 30 meters which is awfully low for FS19, but for world wide coverage its best and easiest option to use. For american terrains you should use the United States National Elevation Data (NED) 10m resolution which gives great results for FS19.
</p>

<p>
This is the steps I use to generate real world data terrain source files:<br>
- choose location using google/maps terrain view so you can see the fields<br>
- click map, pin is inserted, click the bottom center new dialog, copy paste lat/lon coordinates<br>
- global mapper online sources world street map, view -> zoom view -> zoom to spacing -> view spacing selection 10, fits 8km grid with plenty of free space around<br>
- global mapper CTRL-HOME insert coordinates, find the spot<br>
- global mapper switch to UTM projection<br>
- global mapper create 4096 or 8192 user created feature grid<br>
- global mapper open online data -> u.s. data -> united states elevation data (NED) (10m resolution)<br>
- global mapper export heightmap<br>
- global mapper export kmz<br>
- terra incognita map source -> openstreetmap -> zoom level 500km<br>
- terra incognita file -> load waypoints,tracks -> kmz<br>
- terra incognita full screen, zoom into kmz black rectangle (8km is ok with openstreetmap 500m 8m/px but 16km is 1km 16m/px), draw selection rectangle<br>
- terra incognita waypoints,tracks -> visible to disable kmz black rectangle<br>
- terra incognita map source -> esri arcgis, zoom level 17<br>
- terra incognita download oziexplorer map format<br>
- global mapper open -> oziexplorer .map/.jpg satellite imagery<br>
- global mapper file -> export -> export raster/image format -> png -> file type 24-bit rgb, sample spacing 1, export to bounds -> crop to selected area feature(s)<br>
- l3dt file -> import -> heightfield, choose your heightmap.asc<br>
- l3dt operations -> heightfield -> change vertical range, write down altitude range (m) this is heightScale<br>
- l3dt CTRL-E -> file format -> PNG -> heightmap_L3DT.png
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
