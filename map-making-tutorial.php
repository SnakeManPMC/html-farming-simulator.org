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
You need to register into <a href="https://gdn.giants-software.com/">Giants Developer Network</a> to get the latest giant editor. Download and install the latest editor.
</p>

<p>
With the game came GAMEDIR/sdk/moddingHandbook/FarmingSimulatorModding_en.pdf manual for basic mod making, it is very good read when getting started.
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

	<h2>Map Size</h2>

<p>
0,0 coordinates is upper left corner, max coords are lower right corner.
</p>

<p>
Map size is defined in MyMap\maps\map01\map01_dem.png and the *_weight.png images, more specifically in their resolution.
<p>

<p>
map01_dem.png image resolution and in-game coordinates:<br>
<s>255 x 255 pixels.<br>
513 x 513 pixels, 1535 x 1535.</s><br>
1025 x 1025 pixels, 2048 x 2048 (default size).<br>
2049 x 2049 pixels, 4096 x 4096.<br>
4097 x 4097 pixels, 8192 x 8192.<br>
<s>8193 x 8193 pixels, dunno as coord indicator shut off at 8192 hehe.</s>
</p>

	<h2>Change Map Size</h2>

<p>
When you change map sizes, you need to edit all the *_weight.png images and map01_dem.png image. Please note that *_weigth.png images are normal 1024, 2048 etc resolutions while map01_dem.png is one pixel larger, like 1025, 2049 etc. However <a href="https://gdn.giants-software.com/thread.php?categoryId=21&threadId=3976">this post</a> says about some layer image, but I cant see one heh. Also <a href="https://gdn.giants-software.com/thread.php?categoryId=21&threadId=5214">this post</a>, <a href="https://gdn.giants-software.com/thread.php?categoryId=21&threadId=4858">this post</a>, <a href="https://gdn.giants-software.com/thread.php?categoryId=21&threadId=4304">this post</a>, <a href="https://gdn.giants-software.com/thread.php?categoryId=4&threadId=4349">this post</a>, <a href="https://fs-uk.com/mods/view/38253/blank-4fach-starter-map-with-models-and-more">this post</a>, <a href="https://gdn.giants-software.com/thread.php?categoryId=21&threadId=3948">this post</a> about large maps.
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
<a href="https://youtu.be/z-NhFDwV_84?t=2828">16X map skybox fix</a>
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
<a href="https://forum.giants-software.com/viewtopic.php?f=824&t=89809&p=693929#p693929">german language forum post about some 16x map shaders</a>.
</p>

</section>

<footer>
<p>Back to <a href="index.php">PMC Farming Simulator root page</a></p>
<br><br>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
