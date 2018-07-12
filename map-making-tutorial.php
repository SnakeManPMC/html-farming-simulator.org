<!DOCTYPE html>
<html>
<head>
<title>Farming Simulator 17 Map Making Tutorial - PMC Tactical</title>
<LINK href="css.css" rel=stylesheet type="text/css">
<META name="description" content="Farming Simulator 17 Map Making Tutorial - PMC Tactical">
<META name="keywords" content="Farming, Simulator, Map, Making, Tutorial, PMC, Tactical">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("include/google-analytics.php"); ?>

</head>
<body>

<header>
<!-- google ads -->
<?php include("include/google-ads.php"); ?>
<h1><b>PMC Tactical Farming Simulator 17 Map Making Tutorial</b></h1>
</header>

<section>
	<h2>Introduction</h2>

<p>
Beginners tutorial how to make a map aka terrain for Farming Simulator 17 (FS17). I wrote this tutorial knowing absolutely <b>nothing</b> about map making so this should help all the beginners / newbies, just like me. I do not claim this is a good tutorial or a proper way to make FS17 map, but it is what I googled and learned.
</p>

<p>
With the game came GAMEDIR/sdk/moddingHandbook/FarmingSimulatorModding_en.pdf manual for basic mod making, it is very good read when getting started.
</p>

	<h2>Giants Editor</h2>

<p>
Giants Editor is used to edit FS17 maps. You need to register into <a href="https://gdn.giants-software.com/" target="_blank">Giants Developer Network</a> to get the latest giant editor. Download and install the latest editor.
</p>

<p>
You should have some basic windows open in it, these include; scenegraph, terrain editing, attributes, user attributes and console.
</p>

<p>
PDA Camera. Create new scenegraph item of camera (Create -> Camera), in attributes window transform name it to PDAcamera or something. Use translate Y: 4000 and rotate X: -90. Translate Y is your map size, so for 2x maps use 2000, for 4x maps use 4000 and for 16x maps use 8000.
</p>

<p>
Huge maps: you need to run a script to allow the editor to display large terrains properly, download: <a href="downloads/Giants_Editor_Scripts_2018-07-11.7z" target="_blank">Giants_Editor_Scripts_2018-07-11.7z</a>.
</p>

<p>
</p>

	<h2>Start a Map</h2>

<p>
Modding Handbook says you can create map from scratch or edit existing map. Seems like editing existing is no brainer, but when creating brand new map from zero it is not that easy to bring it in-game (game crashes or loads forever etc).
</p>

<p>
You should't edit default game maps (goldcrest valley and sosnovka) obviously as it breaks your default game. You can export these into your own map, but even then you should make YOUR own map and not edit someone elses, be original, man.
</p>

<p>
Something called "SampleMap" is good place to start for your initial map files. When googling there are several samplemap packages floating around, all from different devs and tastes, no idea which one is proper. Welcome to FS17 modding community :)
</p>

<p>
Create directory called "MyMap" and do not use illegal characters anywhere on the file name or numbers as first character, if you do the map wont load in FS17. If you are creating your own map from scratch, create sub dir called "maps" so its "MyMap\maps\" directory structure.
</p>

<p>
Unpack SampleMap archive there so the directory structure is MyMap\maps\
</p>

<p>
Unpack GAMEDIR/sdk/sampleMod.zip into MyMap\ directory. THIS IS NOT NEEDED IF YOU USE SAMPLEMAP DOWNLOAD.
</p>

<p>
Go to MyMap\maps\ directory and open map01.i3d file with Giants editor.
</p>

<p>
Delete scenegraph -> HelpIcons and placeholders.
</p>

<p>
You do not need to ZIP the MyMap because if you just copy the directory into FS17 mods dir, the game will read it fine.
</p>

<p>
Open ModDesc.xml file, edit maps -> map id to your own unique map name, do not use illegal characters like space etc.
</p>

	<h2>Map Size</h2>

<p>
0,0 coordinates is upper left corner, max coords are lower right corner.
</p>

<p>
Map size is defined in MyMap\maps\map01\map01_dem.png and the *_weight.png images, more specifically in their resolution.
<p>

<p>
map01_dem.png image resolution, in-game coordinates:<br>
<s>255 x 255 pixels.<br>
513 x 513 pixels, 1535 x 1535.</s><br>
1025 x 1025 pixels, 2048 x 2048 (default size, goldscrest valley, sosnovka).<br>
2049 x 2049 pixels, 4096 x 4096.<br>
4097 x 4097 pixels, 8192 x 8192.<br>
8193 x 8193 pixels, 16384 x 16384.
</p>

	<h2>Change Map Size</h2>

<p>
When you change map sizes, you need to edit all the *_weight.png images and map01_dem.png image. Please note that *_weigth.png images are normal 1024, 2048 etc resolutions while map01_dem.png is one pixel larger, like 1025, 2049 etc. However <a href="https://gdn.giants-software.com/thread.php?categoryId=21&threadId=3976" target="_blank">this post</a> says about some layer image, but I cant see one heh. Also <a href="https://gdn.giants-software.com/thread.php?categoryId=21&threadId=5214" target="_blank">this post</a>, <a href="https://gdn.giants-software.com/thread.php?categoryId=21&threadId=4858" target="_blank">this post</a>, <a href="https://gdn.giants-software.com/thread.php?categoryId=21&threadId=4304" target="_blank">this post</a>, <a href="https://gdn.giants-software.com/thread.php?categoryId=4&threadId=4349" target="_blank">this post</a>, <a href="https://fs-uk.com/mods/view/38253/blank-4fach-starter-map-with-models-and-more" target="_blank">this post</a>, <a href="https://gdn.giants-software.com/thread.php?categoryId=21&threadId=3948" target="_blank">this post</a> about large maps.
</p>

<p>
Change resolution for pda_map_H.dds image in MyMap\maps\ dir.
</p>

<p>
Change config of MyMap\maps\map01.xml file, on the line: ingameMap filename="maps/pda_map_H.png" so the width and height matches your new map size.
</p>

<p>
After you've increased the png and dds sizes, you must load the map01.i3d in Giants Editor and save it, not sure what it changes but this is required (otherwise FS17 hangs on load).
</p>


	<h2>Create Base Fields</h2>

<p>
Terrain foliage paint mode, this is the last of the modes in main header icons.
</p>

<p>
Channels 0, 1, 2, and 3 define the type of terrain detail you're painting. These are exclusive channels, meaning that you should enable only one of them at a time.
</p>

<p>
Foliage channels for the terrainDetail layer:<br>
0, Cultivated land<br>
1, Ploughed land<br>
2, Seeded/planted land<br>
3, Seeded/planted potatoes
</p>

<p>
Channels 4 through 6 aren't exclusive; you can mix them with each other as well as any of the other channels.
</p>

<p>
Control channels for the terrainDetail Foliage Layer:<br>
4, Sprayed/fertilized land<br>
5, Rotate detail texture 45 degrees clockwise<br>
6, Rotate detail texture 90 degrees<br>
5+6, Rotate detail texture 45 degrees counter clockwise
</p>

<p>
LMB paints, RMB erases.
</p>

	<h2>Create Foliage for Fields</h2>

<p>
or plant life, the first four channels (0 through 3) control the type of plant. The next row of channels (4 through 7) dictates that plant's growth state. In the third row of channels, only channel 8 has any effect. It defines whether the crop is in a windrow (a row of cut vegetation, ready to be baled or stored) or not.
</p>

<p>
Foliage channel settings for various crops:<br>
0, Wheat<br>
1, Grass<br>
2, Barley<br>
3, Sugar beet<br>
0 + 1, Rape (canola)<br>
0 + 2, Maize (corn)<br>
1 + 2, Dry grass<br>
1 + 2 + 3, Potato
</p>

<p>
Fortunately, GIANTS Editor helps you out a bit here. When choosing the crop you want from the Foliage Layer drop-down menu, it automatically sets the bitmask for the first four foliage channels.
</p>

	<h2>GRLE Converters</h2>

<p>
Get it from Giants Developer Network. You should know that Giants Editor will convert PNG to proper either GRLE or GDM when saving a map file.
</p>


	<h2>Dajnet Info Bits</h2>

<p>
Dajnet used FS15 Leere_4Fach_map (4X sample map) as base.
</p>

<p>
Open Goldcrest valley, then file -> export all with files, browse to your MyMap\maps\ directory, give filename map01 and hit save.
</p>

<p>
Copy from FS17 data\maps\ directory map01.i3d.colMap.grle, map01.xml, map01_environment.xml, map01_sound.xml, map01_trafficSystem.xml, map01_trainSystem01.xml, map01_trainSystem01.xml and pedestrialSystem.xml files into MyMap\maps\ directory.
</p>

<p>
Use GrleConverter to convert GRLE files into PNG images. These PNG images can then be edited and used instead of the GRLE files.
</p>

<p>
Convert GRLE (or GDM heh) are cultivator_density and fruit_density. Convert them to PNG and delete the original files, then load your map01 with Giants Editor and just save it, that generates new GRLE/GDM cultivator_density and fruit_density files.
</p>

<p>
Convert list:
</p>
<ul>
<li>cultivator_density</li>
<li>fruit_density</li>
<li>forestGrassDark_density</li>
<li>infoLayer</li>
<li>terrainDetailHeight_density</li>
<li>tipColInfoLayer</li>
<li>townDecoGrass_density</li>
</ul>

<p>
<a href="https://youtu.be/z-NhFDwV_84?t=2828" target="_blank">16X map skybox fix</a>
</p>


	<h2>Giants Forum</h2>

<p>
the default size of the map01_dem.png is 1k: 1025x1025.
</p>

<p>
So for a 4x map you need to scale that file to 2k: 2049x2049 and for a 16x map to 4k: 4097x4097
</p>

<p>
While a size of 2k worked for me without problems I got vsiual artefacts with a 4k height map.
</p>

<p>
Maybe you should stick to a 4x map. I 'ld say such a map is large enough ... especially if you think about the amount of data which has to be processed, especially in MP.
</p>

<p>
To enlarge the map further you could increase the "unitsPerPixel" attribute of the terrain (which has to be adjusted using a texteditor)
</p>

<p>
unitsPerPixel has value of two by default. Edit the map with a texteditor and set it to 3 or 4, save it and open the Map in the GIANTS Editor. The world will be larger :)
</p>

<p>
<a href="https://forum.giants-software.com/viewtopic.php?f=824&t=89809&p=693929#p693929" target="_blank">german language forum post about some 16x map shaders</a>.
</p>

	<h2>Map Starter Money</h2>

<p>
Howto setup your map with default starter money? Doesn't appear to be any value in XML files to edit. Looks like only method is to lua script the changed money.
</p>

	<h2>Grain Silos</h2>

<p>
Howto setup your map with farm grain silos, this is important as after you harvest your field, where do you store the grain? Easiest way is to export the goldcrest valley farmSiloSystem transformgroup, then import it to your map.
</p>

<p>
You can edit silo capacity from map01.i3d search for capacityPerType or edit normally from giants editor. Below is example setup for 10 million liters.
</p>
<pre>
Attribute name="capacityPerType" type="integer" value="10000000"
</pre>

	<h2>Animals</h2>

<p>
Howto setup your map with animals, chickens, sheep, pigs and cows. Basically copy the animals transformgroup from one of the good sample maps (sorry no idea which one) or just simply from goldcrest valley. To have animals in your map is simple as making the navigation mesh, all the rest is feeding, dirt, manure etc eye candy, all you need is navigation mesh and animals appear.
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


<p>
PDA map markers for animals are setup in maps/map01.xml file. Use some transformgroup to move into the location where specific animals are located, then write down the attributes translate X and Z coordinates into the XML file.
</p>

<p>
Save game editing, open vehicles.xml and edit Animals_cow, Animals_pig and Animals_sheep to quickly add hundreds of animals for debug purposes so you dont have to go through buy menu in-game.
</p>

	<h2>Sell Points</h2>

<p>
Howto setup your map with grain / crop sell points, in order to make money you need to sell crops so where to sell them. Simply place unloadingStationFarm transformgroup, add unique name for gameplay -> IN -> triggerPos -> index, change xmlFile to point maps/ instead of $data/maps/, then write the index name into maps/map01.xml file as show below.
</p>
<pre>
tipTrigger index="PMC_Grain_Elevator" stationName="PMC Sell Point 1"
</pre>

	<h2>Square Detail Texture Count</h2>

<p>
Each map square can only have four base detail textures.
</p>


	<h2>Import Objects</h2>

<p>
Never ever import an object outside of your own MyMap directory!
</p>

<p>
Open the other map where you want to get the object from. Choose the object, make sure you get all the transform group if there several things, then use file -> export selection with files, then browse to your own MyMap\maps\objects\ directory, create new directory which easily identified this object, then finally save the i3d file. It asks do you want to get the parent directory structure, you must answer NO to this.
</p>

<p>
Place the object directory into your MyMap\maps\objects\ directory. Use file -> import and choose the file name.
</p>

	<h2>Creating Splines</h2>

<p>
Use create -> spline to create, well a spline. Then you can move and rotate it usually. If you hit INSERT key, new point in the spline is created which again can be moved around.
</p>

</section>

<!--
	<h2></h2>

<p>
</p>
-->

<footer>
<p>Back to <a href="index.php">PMC Farming Simulator root page</a></p>
<br><br>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
