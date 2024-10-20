<!DOCTYPE html>
<html lang="en">
<head>
<title>Terrain Size Change Farming Simulator 17 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Terrain Size Change Farming Simulator 17 - PMC Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
	<h1>Terrain Size Change Farming Simulator 17 - PMC Farming</h1>

<p>
Terrain Editing Tutorial: Terrain Size Change for Farming Simulator 17 (FS17) by PMC.
</p>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
<?php include("/var/www/include/support.php"); ?>
	<h2>Terrain Size Change FS17</h2>

<p>
FS17 terrain size is defined in the main TERRAIN.xml config file, ie "map01.xml" by default. You are not forced to use 2km, 4km or 8.1km terrain sizes, you can choose any size you want!
</p>

<p>
When you change terrain sizes, you need to edit TERRAIN.xml config file, all the *_weight.png images and map01_dem.png image. Please note that *_weight.png images are normal 1024, 2048 etc resolutions while map01_dem.png is one pixel larger, like 1025, 2049 etc. However <a href="https://gdn.giants-software.com/thread.php?categoryId=21&threadId=3976" target="_blank">this GDN post</a> says about some layer image, but I cant see one heh. Also <a href="https://gdn.giants-software.com/thread.php?categoryId=21&threadId=5214" target="_blank">this post</a>, <a href="https://gdn.giants-software.com/thread.php?categoryId=21&threadId=4858" target="_blank">this post</a>, <a href="https://gdn.giants-software.com/thread.php?categoryId=21&threadId=4304" target="_blank">this post</a>, <a href="https://gdn.giants-software.com/thread.php?categoryId=4&threadId=4349" target="_blank">this post</a>, <a href="https://gdn.giants-software.com/thread.php?categoryId=21&threadId=3948" target="_blank">this post</a> about large terrains.
</p>

<p>
Change resolution for pda_map_H.dds image in MyTerrain\maps\ dir.
</p>

<p>
Change config of MyTerrain\maps\map01.xml file, on the line: ingameMap filename="maps/pda_map_H.png" so the width and height matches your new terrain size in meters.
</p>

<p>
After you've increased the PNG and DDS sizes, you must load the map01.i3d in <a href="terrain-giants-editor.php">Giants Editor FS17</a> and save it, not sure what it changes but this is required (otherwise FS17 hangs on load). You should save and exit your terrain in GE, only after that edit heightmap and _weight PNG images, do not edit those PNG images while GE is running, its recipe for a disaster.
</p>

<p>
And remember, you can do any size terrain you want, see <a href="../19/terrain-use-actual-size.php">Terrain Use Actual Size (FS19)</a> tutorial for details.
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
