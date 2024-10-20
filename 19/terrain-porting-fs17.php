<!DOCTYPE html>
<html lang="en">
<head>
<title>Porting FS17 Terrain Farming Simulator 19 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Porting FS17 Terrain Farming Simulator 19 - PMC Farming">
<META name="keywords" content="Terrain, Porting FS17 Terrain, PMC, Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
<h1><b>PMC Farming Simulator Terrain Porting FS17 Terrain</b></h1>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>Porting FS17 Terrain</h2>

<p>
If you try to load Farming Simulator 17 terrain as-is it will not show up in the game start menu.
</p>

<p>
- get mapDE sample terrain to a directory, name it lets say MyMap_4km<br>
- edit modDesc.xml for proper author, name, description, map id, configName etc<br>
- copy FS17 pda_map_h.png to MyMap_4km/maps/pda_map.png<br>
- copy FS17 map01_preview.png to MyMap_4km/map_preview.png<br>
- rename MyMap_4km/maps/mapDE/ directory to MyMap_4km/maps/MyMap_4km/<br>
- rename MyMap_4km/maps/MyMap_4km/mapDE_dem.png to MyMap_4km_dem.png<br>
- rename MyMap_4km/maps/MyMap_4km/mapDE_farmland.grle to MyMap_4km_farmland.grle<br>
- rename MyMap_4km/maps/mapDE.i3d to MyMap_4km.i3d<br>
- rename MyMap_4km/maps/mapDE.i3d.colMap.grle to MyMap_4km.i3d.colMap.grle<br>
- rename MyMap_4km/maps/mapDE.i3d.plcMap.grle to MyMap_4km.i3d.plcMap.grle<br>
- rename MyMap_4km/maps/mapDE.i3d.shapes to MyMap_4km.i3d.shapes<br>
- rename MyMap_4km/maps/mapDE.i3d.terrain.lod.type.cache to MyMap_4km.i3d.terrain.lod.type.cache<br>
- rename MyMap_4km/maps/mapDE.i3d.terrain.nmap.cache to MyMap_4km.i3d.terrain.nmap.cache<br>
- rename MyMap_4km/maps/mapDE.i3d.terrain.weights.cache to MyMap_4km.i3d.terrain.weights.cache<br>
- rename MyMap_4km/maps/mapDE.xml to MyMap_4km.xml<br>
- rename MyMap_4km/maps/mapDE_farmlands.xml to MyMap_4km_farmlands.xml<br>
- rename MyMap_4km/maps/mapDE_transportMissions.xml to MyMap_4km_transportMissions.xml<br>
- open MyMap_4km.i3d in text editor and change "mapDE/ to "MyMap_4km/<br>
- change MyMap_4km.i3d line "MyMap_4km/mapDE_dem to "MyMap_4km/MyMap_4km_dem<br>
- change MyMap_4km.i3d line "MyMap_4km/mapDE_farmland to "MyMap_4km/MyMap_4km_farmland<br>
- change MyMap_4km.i3d lines density.gdm to density.png<br>
- copy FS17 cultivator_density.gdm and fruit_density.gdm to MyMap_4km/maps/MyMap_4km/ dir<br>
- copy _run_convert_gdm_to_png.bat to MyMap_4km/maps/MyMap_4km/ dir and execute it<br>
- open MyMap_4km.i3d in GE
</p>

<p>
If you get the GE console error from GDM files not found, please refer to common errors.
</p>

<p>
It is absolute nightmare to port FS17 terrain to FS19 depending how complex it is and usually these terrains are quite complex. For example I tried porting parkers prairie objects... and let me tell you it is a huge task, there are so many objects in different messy transformgroups and probably most of the buildings have shaders which need to be fixed etc etc... you would be better off doing native FS19 terrain with its own objects so you dont have to worry about any shader etc errors.
</p>

<p>
Also lets not forget that if you don't have permission to port, then why bother spending all that hard work for something you cannot release to the public.
</p>

<p>
Giants Editor v8.1 has file -> open mod option, this is basic porting of FS17 terrains.
</p>

<p>
Port to GE:
</p>
<ul>
<li>Cornbelt</li>
<li>Parkers Prairie</li>
</ul>

<p>
Fail:
</p>
<ul>
<li>North West Texas ports but doesnt load in GE after that</li>
<li>Newlin GE loads a moment then just simply stops, the porting process is incomplete, only small number of dirs/files is copied over</li>
</ul>

<p>
This is however not one click solution, you hopefully get terrain loading into GE but it is far from playable in FS19, much work needs to be done to fully port it even to make it load up without errors.
</p>


	<h3>FS19 Simple Port Tutorial</h3>

<p>
_run_graphicsmagick_FS19_mapsize_to_4096.bat in the directory where PNG files are present will convert 2km to 4km. You also need to edit TerrainName.XML file for terrain size.
</p>

<p>
- FS17 copy cultivator_density.gdm and fruit_density.gdm into FS19 maps/mapDE/ dir<br>
- use _run_convert_gdm_to_png.bat<br>
- delete cultivator_density.gdm and fruit_density.gdm files<br>
- edit mapDE.i3d and change cultivator_density.GDM to PNG and same for fruit_density<br>
- use _run_graphicsmagick_FS19_mapsize_to_4096.bat<br>
- load mapDE.i3d with GE, save and exit<br>
- edit mapDE.i3d and change cultivator_density.PNG to GDM and same for fruit_density
</p>

<p>
PMCTODO add the actual bat files <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
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
