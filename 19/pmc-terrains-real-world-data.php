<!DOCTYPE html>
<html lang="en">
<head>
<title>Real World Data PMC Terrains Farming Simulator 19 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Real World Data PMC Terrains Farming Simulator 19 - PMC Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<h1>Real World Data PMC Terrains Farming Simulator 19</h1>
</header>

<section>
	<h2>Real World Data FS19</h2>

<p>
PMC terrains for Farming Simulator 19 (FS19) are made out of <a href="http://www.arcgis.com/home/webmap/viewer.html?useExisting=1" target="_blank">ArcGis World Imagery</a> satellite imagery or <a href="https://www.fsa.usda.gov/programs-and-services/aerial-photography/imagery-programs/naip-imagery/" target="_blank">US National Agriculture Imagery Program (NAIP)</a> aerial imagery (we mostly use US NAIP now). This is the data source used for PDA map images (when you press ESC a map comes up, this is called PDA map view).
</p>

<p>
For <a href="terrain-heightmap.php">heightmap</a> (some people call this Digital Elevation Model, in short DEM) FS19 PMC terrains use <a href="https://www.usgs.gov/core-science-systems/national-geospatial-program/national-map" target="_blank">US National Elevation Dataset (NED)</a> 10 meter resolution heightmap data.
</p>

<p>
Heightmap is accurate to 10 meter resolution which means that it got realistic elevations. These heightmaps are not make belief hand wavey "close enough" free hand google earth copy pastes, PMC real world data heightmaps are as accurate as you can get from public data (US NED 10m).
</p>

<p>
Locations for PMC terrains are real world American farming areas (PMC doesn't do european terrains), some functionality like vehicle shop and sell points have been placed to suitable locations for FS19 where they would not be in real life.
</p>

<p>
Fields, roads, farm yards, rail roads etc are accurately located as they are in real life. We place building for building accuracy, with obviously dealing with limitations of often times not having properly sizes buildings (for example huge cow barns, pig sheds or grain elevators etc). For farm yards and other populated places we try to place tree for tree, meaning every tree in farm yards for example is there like it is in real life.
</p>

<p>
PMC terrains are as real as humanly possible <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
See the list of all <a href="pmc-terrains.php">Farming Simulator 19 PMC Terrains</a> available for download.
</p>

</section>

<footer>
<p>
<a href="pmc-terrains.php" class="button">PMC Terrains FS19 home page</a>
<a href="../index.php" class="button">PMC Farming Simulator root page</a>
</p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("../include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
