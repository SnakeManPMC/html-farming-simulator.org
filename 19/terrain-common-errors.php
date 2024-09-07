<!DOCTYPE html>
<html lang="en">
<head>
<title>Common Errors Farming Simulator 19 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Common Errors Farming Simulator 19 - PMC Farming">
<META name="keywords" content="Terrain, Common Errors, PMC, Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
<h1><b>PMC Farming Simulator Terrain Common Errors</b></h1>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>Common Errors</h2>

<pre>
Error: Trying to set DensityMapHeightUpdater collision map with invalid size (33554432 vs 134217728)
Error: Blocked area map is wrong size for terrain (1024 x 1024) vs (2048 x 2048)
</pre>
<p>
Fix: GE -> scripts -> fs19 -> map -> create ground collision map. TERRAINNAME.i3d.plcMap.grle will not be updated when you create ground collision map, you must copy TERRAINAME.i3d.plcColMap.grle to TERRAINNAME.i3d.plcMap.grle for it to work.
</p>

<pre>
Error: Running LUA method 'update'.
dataS/scripts/fieldJobs/FieldManager.lua(90) : attempt to index local 'farmland' (a nil value)
Error: Running LUA method 'update'.
dataS/scripts/fieldJobs/FieldManager.lua(104) : attempt to index field 'farmland' (a nil value)
Error: Running LUA method 'update'.
dataS/scripts/fieldJobs/Field.lua(103) : attempt to index field 'farmland' (a nil value)
</pre>
<p>
Fix: you did not paint info layer farmland area over EVERY field, also check that your farmlands.xml is in order. If you forgot to paint over some fields you can easily see this in-game as the fields are not present, colored so to speak.
</p>

<pre>
Error: Failed to open xml file '$data/placeables/mapDE/sellingStationGeneric/sellingStationPort01.xml'.
Warning: corrupt savegame, item 24 with className SellingStationPlaceable could not be loaded
</pre>
<p>
Fix: edit defaultItems.xml, remove or fix the entries there.
</p>

<pre>
Error: GDM file has wrong number of channels (11 should be 13)
DensityMap: failed to load GDM file.
Error: Can't load resource 'c:/mydir/MyMap_4km/maps/MyMap_4km/cultivator_density.png'.
Error: Failed to load terrain detail layer 'terrainDetail'.
Error: GDM file has wrong number of channels (9 should be 10)
DensityMap: failed to load GDM file.
Error: Can't load resource 'c:/mydir/MyMap_4km/maps/MyMap_4km/fruit_density.png'.
</pre>
<p>
Then you need to delete the GDM and possibly GRLE files, only leave the PNG versions. open terrain again in GE and it should work now.
</p>

<pre>
Error: TerrainDeformation requires a terrain lod size that is a multiple of the terrain height map size
</pre>
<p>
Fix: some of your _weight or _density (or all maybe) image resolutions are <i>smaller than heightmap (DEM)</i>, resize them properly.
</p>

<pre>
Warning: FieldCropsUpdater requires crops and ground density map to have the same size. Ignoring spray resetting and ground type change.
Error: addRequiredCropType foliage must match the size of the ground terrain detail.
</pre>
<p>
Fix: some of your _density files are wrong size, like 2048 vs 4096 etc, check their resolutions and set them all the same size.
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
