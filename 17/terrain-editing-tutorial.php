<!DOCTYPE html>
<html lang="en">
<head>
<title>Farming Simulator 17 Terrain Editing Tutorial - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Farming Simulator 17 Terrain Editing Tutorial - PMC Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
	<h1>PMC Farming Simulator 17 Terrain Editing Tutorial</h1>

<p>
HOWTO create and edit terrains for Farming Simulator 17 (FS17), guides and tutorials by PMC.
</p>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>

<p><a href="terrain-create-basic.php">Create Basic Terrain</a> simple basic starter terrain.</p>
<p><a href="terrain-cultivator_density.php">Terrain Base Fields cultivator_density</a> creating your fields soil texture ground types (whoah, the terminology).</p>
<p><a href="terrain-field-definitions.php">Field Definitions</a> is the proper term for farmsim fields.</p>
<p><a href="terrain-field-foliage.php">Field Foliage</a> its like grass, wheat, corn, etc.</p>
<p><a href="terrain-giants-editor.php">Giants Editor</a> software to edit terrains.</p>
<p><a href="terrain-grle-converter.php">GRLE Converter</a> or grleConverter.exe as its file name is called.</p>
<p><a href="terrain-introduction.php">Introduction</a> to FS17 terrain editing.</p>
<p><a href="terrain-size-change.php">Size Change</a> HOWTO change your terrain size specifications.</p>
<p><a href="terrain-size.php">Size</a> there are various sizes for terrain, not just 2km, 4km or 8.1km.</p>

	<h2>Giants Forum</h2>

<p>
the default size of the map01_dem.png is 1k: 1025x1025.
</p>

<p>
So for a 4km terrain you need to scale that file to 2k: 2049x2049 and for a 8km terrain to 4k: 4097x4097
</p>

<p>
To enlarge the terrain further you could increase the "unitsPerPixel" attribute of the terrain (which has to be adjusted using a texteditor)
</p>

<p>
unitsPerPixel has value of two by default. Edit the terrain with a texteditor and set it to 3 or 4, save it and open the terrain in the GIANTS Editor. The world will be larger <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
<a href="https://forum.giants-software.com/viewtopic.php?f=824&t=89809&p=693929#p693929" target="_blank">german language forum post about some 8km terrain shaders</a>.
</p>

	<h2>Terrain Starter Money</h2>

<p>
Howto setup your terrain with default starter money? Doesn't appear to be any value in XML files to edit. Looks like only method is to lua script the changed money.
</p>

	<h2>Grain Silos</h2>

<p>
Howto setup your terrain with farm grain silos, this is important as after you harvest your field, where do you store the grain? Easiest way is to export the goldcrest valley farmSiloSystem transformgroup, then import it to your terrain.
</p>

<p>
You can edit silo capacity from map01.i3d search for capacityPerType or edit normally from giants editor. Below is example setup for 10 million liters.
</p>
<pre>
Attribute name="capacityPerType" type="integer" value="10000000"
</pre>

<p>
To change the name of station (the tipTrigger) you have to change a UserAttribute of the trigger. Then locate the trigger/station you want to change. Find the actual trigger which has all the attributes, like "appearsOnPDA", "isAreaTrigger", "onCreate", "stationName" etc. Now you just need to change the value of the attribute "stationName" to what ever you like. The value for "stationName" is a string, which is either directly used or it is used to find an i18n entry. An i18n value can be defined in the modDesc of your mod.
</p>

	<h2>Animals</h2>

<p>
Howto setup your terrain with animals, chickens, sheep, pigs and cows. Basically copy the animals transformgroup from one of the good sample terrains (sorry no idea which one) or just simply from goldcrest valley. To have animals in your terrain is simple as making the navigation mesh, all the rest is feeding, dirt, manure etc eye candy, all you need is navigation mesh and animals appear.
</p>

<p>
Info layer painting channels:
</p>

<ul>
<li>0 cow</li>
<li>1 sheep</li>
<li>2 chicken</li>
<li>3 pig</li>
</ul>

<p>
NavMesh for animals is created by painting info layer with proper channel selected, then using create -> navigation mesh, you must select terrain desselation -> culling info layer channels properly. Do not just type the number here even if you know it, use the ... button to actually select it.
</p>

<p><b>
Creating navigation mesh (navmesh)</b>
</p>

<p>
In dialog terrain editing -> info layer painting -> info channels. Channel numbers are 0 cow, 1 sheep, 2 chickens and 3 pigs.
</p>

<p>
Select info channel (only one at the time), then select from main menu terrain info layer paint mode. Now paint white color where you want this specific animal type to graze.
</p>

<p>
Go to animals transformgroup (you should have already imported these from some sample terrain and they should be fully working), our transformgroup is named "animals" and has "cowsHusbandry" transformgroup, select this. Click open gameplay transformgroup and there select CowNavMesh.
</p>

<p>
From main menu create -> navigation mesh, click shape build mask three dots (opens a new dialog), click clear button and tick 0 channel, then click ok. Now back in build navigation mesh dialog click terrain tesselation -> culling info layer channels three dots, click clear button and tick 0 channel, then click ok. Again back in build navigation mesh dialog click Recreate button and your 0 cow navmesh is done.
</p>

<p>
Repeat the same for 1, 2 and 3 channels as well to finish all the animal navmeshes <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
PDA map markers for animals are setup in maps/map01.xml file. Use some transformgroup to move into the location where specific animals are located, then write down the attributes translate X and Z coordinates into the XML file.
</p>

<p>
Save game editing, open vehicles.xml and edit Animals_cow, Animals_pig and Animals_sheep to quickly add hundreds of animals for debug purposes so you dont have to go through buy menu in-game.
</p>

	<h2>Sell Points</h2>

<p>
Howto setup your terrain with grain / crop sell points, in order to make money you need to sell crops so where to sell them. Simply place unloadingStationFarm transformgroup, add unique name for gameplay -> IN -> triggerPos -> index, change xmlFile to point maps/ instead of $data/maps/, then write the index name into maps/map01.xml file as show below.
</p>
<pre>
tipTrigger index="PMC_Grain_Elevator" stationName="PMC Sell Point 1"
</pre>

	<h2>Square Detail Texture Count</h2>

<p>
Each terrain square can only have four base detail textures.
</p>


	<h2>Import Objects</h2>

<p>
Never ever import an object outside of your own MyTerrain directory!
</p>

<p>
Open the other terrain where you want to get the object from. Choose the object, make sure you get all the transform group if there several things, then use file -> export selection with files, then browse to your own MyTerrain\maps\objects\ directory, create new directory which easily identified this object, then finally save the i3d file. It asks do you want to get the parent directory structure, you must answer NO to this.
</p>

<p>
Place the object directory into your MyTerrain\maps\objects\ directory. Use file -> import and choose the file name.
</p>

	<h2>Creating Splines</h2>

<p>
Use create -> spline to create, well a spline. Then you can move and rotate it usually. If you hit INSERT key, new point in the spline is created which again can be moved around.
</p>

	<h2>Huge Field Issues</h2>

<p>
Terrain with huge fields have issue with courseplay, it wont generate courses. I tried it to 1565 hectare field and it refused to generate no matter what kind of settings. When you generate course for 1000 hectare field it freezes up your game so ALT-TAB is not working, it takes several seconds to save on i7 4790k with SSD.
</p>

<p>
Huge fields take a long time (real gaming time, not depending on time accelleration) for the the crops to grow, it takes several days for wheat harvest to grow. [at least I think this is abnormal behavior, usually it takes pretty much overnight to grow crops heh dunno cant remember].
</p>

<p>
Courseplay generates routes for 1008 hectare fields. Note: it takes several seconds when it does this while it freezes the game, be patient and WAIT. Also do not, I say again, do NOT save such insanely large courseplay route because next time you start the terrain it takes several minutes to start if not ultimately locking up your game. Do not save huge courseplay courses, no matter the field sizes.
</p>

<p>
Also purchasing huge fields seem to freeze the game, this is reproduceable on PMC 16384 terrain with the 1475 hectare field number 30. However this might have been some bug in the field too <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

	<h2>Goldcrest Valley GRLE and GDM Resolutions</h2>

<p>
Goldcrest Valley GRLE and GDM image file resolutions:<br>
cultivator_density.gdm 4096 x 4096<br>
forestGrass_density.gdm cant open, huh?<br>
forestGrassDark_density.gdm 4096 x 4096<br>
fruit_density.gdm 4096 x 4096<br>
infoLayer.grle 1024 x 1024<br>
seasons_mask.gdm 2048 x 2048<br>
terrainDetailHeight_density.gdm 4096 x 4096<br>
tipColInfoLayer.grle 2048 x 2048<br>
townDecoGrass_density.gdm 4096 x 4096
</p>


	<h2>User Interface Image Resolutions</h2>

<p>
map01_preview.png resolution is 2048 x 1024

pda_map_H.png resolution is what your terrain is, 2048, 4096, 8192. Or is it... 2048 seemed to work fine on larger terrains(?)

map01_preview.png and pda_map_H.png need to be flipped vertically otherwise they are upside down in-game.
</p>


	<h2>Sun Light</h2>

<p>
Sun / star light is not enough to cover whole massive 16384 x 16384 terrain area, so you must increase the sun settings. Open your terrain in giants editor, click the sun and change range to 16384. All done. For PMC 32768 Terrain I made the range to 32768.
</p>


	<h2>Skybox Size</h2>

<p>
I took the maps/sky/ directory from some sample terrain and edited maps/map01_environment.xml to read &gt;environment filename="maps/sky/ instead of "$data/sky/
</p>

<p>
Open sky_day_night.i3d file in giants editor, select sky transformgroup, then change scale x, y and z to 8. Do the same for skyUS_day_night.i3d file too. Now your skybox is enough for 8192 terrains as well. For PMC 32768 Terrain I made the scale 16.
</p>


	<h2>Terrain Design Tips</h2>

<p>
Fences kill game-play.
</p>

<p>
For those dark nights put enough lights to your farm and especially on the grain silo area where trucks are coming in with high speed.
</p>

<p>
Make fields small but leave large open area around it so players can enlargen them by ploughing if they want.
</p>

<p>
Make fields small but symmetrical so players can merge them if they want mega large fields.
</p>

<p>
Place large enough hangars / shelters to store huge fleet of implements and vehicles, you dont want to end up all road side grass areas littlered with parked vehicles.
</p>

<p>
Decoration tips; few grain silos, maybe seed / fertilizer silos as well and then one barn or hangar type building just like parkers prairie near the animals.
</p>

<p>
Near fields its good to have small open areas so you can park your vehicles there, like when you are not taking them back to the farm shelters.
</p>

<p>
Nick Welker said that in real life fields do NOT have a 90 degree square corners, watch <a href="https://youtu.be/1ZIGS8eE6xQ?t=2760" target="_blank">his comments on youtube video</a>. So its more work for you as terrain dev but if you want realism, add round(er) corners for your fields.
</p>

<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("/var/www/include/footer-start.php"); ?>
<p><a href="../index.php" class="button">PMC Farming Simulator root page</a></p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("/var/www/include/footer-end.php"); ?>
<?php include("/var/www/include/support.php"); ?>
<?php include("/var/www/include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
