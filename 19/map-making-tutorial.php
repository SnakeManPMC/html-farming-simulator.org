<!DOCTYPE html>
<html lang="en">
<head>
<title>Farming Simulator 19 Map Making Tutorial - PMC Tactical</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Farming Simulator 19 Map Making Tutorial - PMC Tactical">
<META name="keywords" content="Farming, Simulator, 19, Map, Making, Tutorial, PMC, Tactical">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<!-- google ads -->
<?php include("../include/google-ads.php"); ?>
<h1><b>PMC Tactical Farming Simulator 19 Map Making Tutorial</b></h1>
</header>

<section>
	<h2>Overview</h2>

<p>
<b>2018-11-25</b> This page is work in progress, will be updated later for example when we get official Giants Editor release etc.
</p>

<p>
Please read <a href="../map-making-tutorial.php" target="_blank">Farming Simulator 17 (FS17) Map Making Tutorial</a> first because what you see below assumed you know all of that stuff.
</p>


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

	<h2>Porting FS17 Terrain</h2>

<p>
If you try to load FS17 terrain as-is it will not show up in the game start menu.
</p>


	<h2>Land Slots</h2>

<p>
<i>how to create the buyable land plots. It is in the Giants Editor v8.0 info layer, you just paint the area with the info channels, Each buyable zone must have its own unique channel and it maps to the farmlands.xml file.</i> and <i>First paint all of the different layers of farmland with ge. Load the game and check the console for the missing farmland id's. Then associate when with farmland.xlm</i> <a href="https://gdn.giants-software.com/thread.php?categoryId=4&threadId=6466" target="_blank">GDN</a>
</p>

<p>
Or this?: As to those who wants to edit the "land" you need to buy, its the mapDE_farmland.grle or mapUS_farmland.grle, depending on what map youve used to build from. <a href="https://gdn.giants-software.com/thread.php?categoryId=4&threadId=6452" target="_blank">GDN</a>
</p>


	<h2>modDesc.xml</h2>

<p>
In your modDesc.xml is where the name of the terrain, author and version number is defined. More importantly the class or ID is set, almost all sample maps floating out there use "SampleModMap".
</p>

<p>
&lt;maps&gt;&lt;map id="SampleModMap" needs to be unique for every terrain, so <b>do not use "SampleModMap"</b>, instead you must use unique to your terrain like for our example "pmc_sample_2048" etc.
</p>

<!--
	<h2></h2>

<p>
</p>

<a href="" target="_blank"></a>

<ul>
<li></li>
</ul>
-->
</section>

<footer>
<p><a href="../index.php" class="button">PMC Farming Simulator root page</a></p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("../include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
