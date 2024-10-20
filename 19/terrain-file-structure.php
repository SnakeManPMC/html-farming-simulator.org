<!DOCTYPE html>
<html lang="en">
<head>
<title>File Structure Farming Simulator 19 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="File Structure Farming Simulator 19 - PMC Farming">
<META name="keywords" content="Terrain, File, Structure, PMC, Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
<h1><b>PMC Farming Simulator Terrain File Structure</b></h1>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>File Structure</h2>

<p>
root/ directory has modDesc.xml as every mod should, also map.xml file. Estancia Lapacho files are called "mapSA.xml", Ravenport "mapUS.xml" and Felsbrunn "mapDE.xml". So unique names hmm. Rest of the files are listed below, in this example we have mapSA files listed.
</p>

<ul>
<li>mapSA_colorGrading.xml</li>
<li>mapSA_colorGradingNight.xml</li>
<li>mapSA_environment.xml</li>
<li>mapSA_farmlands.xml</li>
<li>mapSA_items.xml</li>
<li>mapSA_sound.xml</li>
<li>mapSA_transportMissions.xml</li>
<li>mapSA_vehicles.xml</li>
</ul>

<p>
root/mapSA/ dir contains the following files all 01 through 04:
</p>

<ul>
<li>beachSand01_weight.png</li>
<li>cityAsphalt01_weight.png</li>
<li>concrete01_weight.png</li>
<li>forestGround01_weight.png</li>
<li>grass01_weight.png</li>
<li>gravel01_weight.png</li>
<li>industrialMud01_weight.png</li>
<li>mountainRock01_weight.png</li>
<li>pigMud01_weight.png</li>
<li>roughDirt01_weight.png</li>
<li>townGrass01_weight.png</li>
</ul>

<p>
Then 01 and 02 for waterPuddleSA01_weight.png
</p>

<p>
Then these individual files:
</p>

<ul>
<li>cultivator_density.gdm</li>
<li>dummy_weight.png</li>
<li>fruit_density.gdm</li>
<li>grassFlowers_color.dds</li>
<li>grassFlowers_mask.dds</li>
<li>mapSA_dem.png</li>
<li>mapSA_farmland.grle</li>
<li>mapSA_farmland.png</li>
<li>mapSA_preview.dds</li>
<li>pda_map_H.dds</li>
<li>seasons_mask.gdm</li>
<li>terrainDetailHeight_density.gdm</li>
<li>tipColInfoLayer.grle</li>
<li>weed_density.gdm</li>
</ul>

<p>
PNG resolutions are 2048 x 2048 except mapSA_dem.png is standard 1025 x 1025 and mapSA_farmland.png is 1024 x 1024 resolution.
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
