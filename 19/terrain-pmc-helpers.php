<!DOCTYPE html>
<html lang="en">
<head>
<title>PMC Helpers for Giants Editor Farming Simulator 19 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="PMC Helpers for Giants Editor Farming Simulator 19 - PMC Farming">
<META name="keywords" content="Terrain, Helpers, Giants, Editor, FS19, PMC, Farming, Simulator">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
<h1><b>PMC Helpers for Giants Editor Farming Simulator 19</b></h1>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>Overview</h2>

<p>
<b>2022-02-14T05:24:00Z</b> Updated.
</p>

<p>
In Giants Editor (GE) when placing objects like trees and buildings etc, there are some special objects you do not want to save into the TERRAIN.i3d file, these are the placeables.xml object place holders, cameras, splines and other even simple transformgroups that help you with editing.
</p>

<img src="screenshots/FS19-GE-PMC-Helpers.png" loading="lazy" class="imgresponsive" alt="Farming Simulator 19 - Giants Editor PMC Helpers">

<p>
I call them PMC_Helpers both in GE and in PMC_Helpers.I3D filename. You should call them whatever you feel comfortable with.
</p>

	<h2>How Does It Work</h2>

<p>
First I create a new directory to my terrain project maps/ dir called Exclude.For.Release/ which is used for the PMC_Helpers.i3d and other files storage for example satellite image plane i3d/dds files.
</p>

<p>
PMC_Helpers is only for GE editing, do not save them into in-game use. To export select PMC_Helpers, use File -> Export Selection, browse to &lt;TERRAIN&gt;\maps\Exclude.For.Release\PMC_Helpers\ and save as PMC_Helpers.i3d
</p>

<p>
Before saving final terrain for testing or release, delete GE transformgroup PMC_Helpers and save TERRAIN.i3d
</p>

<p>
Once you are back at editing, start GE, if you need PMC_Helpers, do File -> Import -> Exclude.For.Release\PMC_Helpers\PMC_Helpers.i3d
</p>

	<h2>Transformgroup Organization</h2>

<p>
Saved transformgroup names in TERRAIN.i3d for in-game use:
</p>

<p>
<b>Fields</b> is field definitions<br>
<b>Buildings</b> is all GE hard coded buildings and related objects<br>
<b>Forests</b> is sub groups for each individual group of trees<br>
<b>Utility_Poles</b> is sub groups for each individual group / line of poles<br>
<b>Wind_Turbines</b> with possible sub groups<br>
<b>High_Voltage_Poles</b> but this could be merged with utility poles I guess, they are essentially the same thing
</p>

<p>
PMC_Helpers transformGroups organization so its same for every terrain I ever create: 
</p>
<pre>
- PMC_Center, 0,100,0
- PMC_North_West, -3000,100,-3000
- PMC_North_East
- PMC_South_West
- PMC_South_East
- Selling_Points
- TEMPLATE_COPY_PASTE_BUILDINGS
 - Giants_mapUS
 - CBJ_Red
 - CBJ_Tan
 - CBJ_White
- Road_Splines
 - Field_Entrances
 - Intersections
  - 6_Meters
  - 8_Meters
 - Asphalt
  - 6_Meters
  - 8_Meters
 - Dirt_Gravel
  - 6_Meters
  - 8_Meters
- Forest_Splines
- Utility_Pole_Splines
- Wind_Turbines
- Farm_Bin_Silos
- Player_Farms
- Creek_Bed_Splines
</pre>

<p>
Its funny though that this organization evolves quite a bit from month to month when I get new editing ideas, for example at the time of writing this I don't use "Player_Farms" anymore, its now called root "Placeables" transformgroup and then I have sub groups like "New.Farmer" and then all the different player farms or AI owned farms (are there a difference?) are just called "Location-01", "Location-02" etc as many as I need :)
</p>

<p>
So these transformgroup names arent set in stone, there is no "rule" for them, whatever you like is the best, for you :)
</p>

<p>
I like to keep master list of PMC_Helpers transformgroup names actually in an empty template PMC_Helpers.i3d file which I can import into all new terrains I'm creating. Now obviously if you only do one single terrain in your life then such templates have no use for you.
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
