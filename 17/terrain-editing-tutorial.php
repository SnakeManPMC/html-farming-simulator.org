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

<p><a href="terrain-introduction.php">Introduction</a> to FS17 terrain editing.</p>

	<h2>Giants Editor</h2>

<p>
Giants Editor is used to edit FS17 terrains. You need to register into <a href="https://gdn.giants-software.com/" target="_blank">Giants Developer Network</a> to get the latest giant editor. Download and install the latest editor.
</p>

<p>
You should have some basic windows open in it, these include; scenegraph, terrain editing, attributes, user attributes and console.
</p>

<p>
Giants Editor camera movement;<br>
RMB + WASD keys<br>
LMB-Middle Mouse Button pans<br>
ALT-LMB rotates the view<br>
ALT-RMB moves camera back and forth<br>
F key focuses / moves camera on selected object
</p>

<p>
Keyboard short cuts:<br>
CTRL-D duplicate selected object(s)<br>
CTRL-B then LMB duplicate selected object(s) where the mouse cursor is at LMB press moment.
</p>

<p>
PDA Camera. Create new scenegraph item of camera (Create -> Camera), in attributes window transform name it to PDAcamera or something. Use translate Y: 4000 and rotate X: -90. Translate Y is your terrain size, so for 2km terrains use 2000, for 4km terrains use 4000 and for 8km terrains use 8000.
</p>

<p>
Huge terrains: you need to run a script to allow the editor to display large terrains properly, download: <a href="downloads/Giants_Editor_Scripts_2018-07-11.7z" target="_blank">Giants_Editor_Scripts_2018-07-11.7z</a>.
</p>

	<h2>Start a Terrain</h2>

<p>
Modding Handbook says you can create terrain from scratch or edit existing terrain. Seems like editing existing is no brainer, but when creating brand new terrain from zero it is not that easy to bring it in-game (game crashes or loads forever etc).
</p>

<p>
You should't edit default game terrains (goldcrest valley and sosnovka) obviously as it breaks your default game. You can export these into your own terrain, but even then you should make YOUR own terrain and not edit someone elses, be original, man.
</p>

<p>
Something called "SampleMap" is good place to start for your initial terrain files. When googling there are several samplemap packages floating around, all from different devs and tastes, no idea which one is proper. Welcome to FS17 modding community <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Create directory called "MyTerrain" and do not use illegal characters anywhere on the file name or numbers as first character, if you do the terrain wont load in FS17. If you are creating your own terrain from scratch, create sub dir called "maps" so its "MyTerrain\maps\" directory structure.
</p>

<p>
Unpack SampleMap archive there so the directory structure is MyTerrain\maps\
</p>

<p>
Unpack GAMEDIR/sdk/sampleMod.zip into MyTerrain\ directory. THIS IS NOT NEEDED IF YOU USE SAMPLEMAP DOWNLOAD.
</p>

<p>
Go to MyTerrain\maps\ directory and open map01.i3d file with Giants editor.
</p>

<p>
Delete scenegraph -> HelpIcons and placeholders.
</p>

<p>
You do not need to ZIP the MyTerrain because if you just copy the directory into FS17 mods dir, the game will read it fine.
</p>

<p>
Open ModDesc.xml file, edit maps -> map id to your own unique terrain name, do not use illegal characters like space etc.
</p>

	<h2>Terrain Size</h2>

<p>
Please forget that 2X, 4X etc terrain size nonsense, use kilmeters x kilometers (in short just km) instead. Simple example; goldcrest valley is 2km, north west texas is 4km, broad acres and cornbelt are 8km. As of 2018-08-05 nobody has released 16km terrain.
</p>

<p>
0,0 coordinates is upper left corner, max coords are lower right corner.
</p>

<p>
Terrain size is defined in MyTerrain\maps\map01\map01_dem.png and the *_weight.png images, more specifically in their resolution and in map01.xml file.
<p>

<p>
map01_dem.png image resolution, in-game coordinates, kilometers x kilometers size:<br>
<s>255 x 255 pixels.<br>
513 x 513 pixels, 1535 x 1535.</s><br>
1025 x 1025 pixels, 2048 x 2048, 2km x 2km (default size, goldscrest valley, sosnovka)<br>
2049 x 2049 pixels, 4096 x 4096, 4km x 4km<br>
4097 x 4097 pixels, 8192 x 8192, 8km x 8km<br>
8193 x 8193 pixels, 16384 x 16384, 16km x 16km<br>
16385 x 16385 pixels, 32768 x 32768, 32km x 32km
</p>

	<h2>Change Terrain Size</h2>

<p>
When you change terrain sizes, you need to edit all the *_weight.png images and map01_dem.png image. Please note that *_weight.png images are normal 1024, 2048 etc resolutions while map01_dem.png is one pixel larger, like 1025, 2049 etc. However <a href="https://gdn.giants-software.com/thread.php?categoryId=21&threadId=3976" target="_blank">this post</a> says about some layer image, but I cant see one heh. Also <a href="https://gdn.giants-software.com/thread.php?categoryId=21&threadId=5214" target="_blank">this post</a>, <a href="https://gdn.giants-software.com/thread.php?categoryId=21&threadId=4858" target="_blank">this post</a>, <a href="https://gdn.giants-software.com/thread.php?categoryId=21&threadId=4304" target="_blank">this post</a>, <a href="https://gdn.giants-software.com/thread.php?categoryId=4&threadId=4349" target="_blank">this post</a>, <a href="https://gdn.giants-software.com/thread.php?categoryId=21&threadId=3948" target="_blank">this post</a> about large terrains.
</p>

<p>
Change resolution for pda_map_H.dds image in MyTerrain\maps\ dir.
</p>

<p>
Change config of MyTerrain\maps\map01.xml file, on the line: ingameMap filename="maps/pda_map_H.png" so the width and height matches your new terrain size.
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

	<h2>Create Field Definitions</h2>

<p>
You must have a existing working field on your terrain project. Look for this on the various sample terrain mods.
</p>

<p>
Select fields transformgroup, use scripts -> FS17 -> Map -> toggle render field areas, in few seconds blue shape should appear where your fields are.
</p>

<p>
Click open fields transformgroup, click on the existing field which in our example is "field01", CTRL-D to duplicate (copy automatically).
</p>

<p>
Rename the field to the next available digit, if the duplicated one was 01 like in our example then make the new one 02 so "field02".
</p>

<p>
Move field02 to items into the location on the terrain where you want this new field. Then move field02 -> fieldDimensions -> corner01_* points to match the area where you want this new field.
</p>

<p>
Select fields, use scripts -> FS17 -> Map -> Set field sizes.
</p>

<p>
Now switch to terrain foliage paint mode, select foliage layer painting -> foliage layer -> terrainDetail and tick 0 channel. Now just paint the blue shape of your new field.
</p>

<p>
If you load existing savegame for your terrain after you added new fields, they do not show any crops or soil state. What I understand, you must start fresh savegame after adding fields or changing their sizes.
</p>

<p>
If you cannot plough fields, check terrain -> attributes -> translate Y, it must be 0. Also fields need to be defined, obviously.
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


	<h2>Create Fields From Nothing</h2>

<p>
Create transformgroups fields, attributes add onCreate "script callback", then on its attribute add FieldDefinition.onCreate value.
</p>

<p>
Under fields add transformgroup field01. Add attributes fieldAngle integer, fieldArea float, fieldPriceScale integer, npcIndex integer.
</p>

<p>
If you add ownedByPlayer boolean, tick it and player owns the field.
</p>

<p>
Under field01 add fieldBuyTrigger, fieldDimensions and fieldMapIndicator transformgroups.
</p>

<p>
Under fieldBuyTrigger add triggerIconBuyField transformgroup. And there add iconLight light source (create -> light).
</p>

<p>
Under fieldDimensions add corner01_1 transformgroup. And there add corner01_2 and corner01_3 transformgroups.
</p>

<p>
corner01_1 is NW corner, 01_2 is NE corner and 01_3 is SE corner of the field. This gets more complex when you have oddly shaped fields.
</p>

<p>
Scenegraph field01 selected, CTRL-C copies, CTRL-V pastes and CTRL-X cut pastes.
</p>

<p>
Under fields add as many fields as you need numbered 01, 02, 03 etc.
</p>

<p>
Select fields in the scenegraph, then Scripts -> FS17 -> Map -> Toggle Render Field Areas and you will see a blue polygon appear in the shape of your field.
</p>

<p>
Select fields in the scenegraph, then Scripts -> FS17 -> Map -> Set Field Sizes.
</p>

<p>
How to enable / disable the mission function for a field? Select the specific field and add the attribute fieldJobUsageAllowed and select boolean. Then you can turn it on / off.
</p>

<p>
After editing the field/crops you need to get rid of the following files that are in the corresponding save folder:<br>
1. cultivator_density.gdm<br>
2. fruit_density.gdm<br>
3. terrain.lod.type.cache<br>
After you tested the terrain and saved again, those files are regenerated, with the crops and growth states you've set in GE.
</p>

<p>
<b>Good game-play tip:</b> Always place fieldBuyTrigger away from the terrain edge, like if your field is right on the western edge, dont place this trigger into west side of the field, instead put it on east side. If the trigger is very close to terrain edge the icon will not be displayed in PDA. Its recommended that you place all field buy triggers to the edge of the field which is closest to the terrain center, this way you automatically avoid the edges. Also on 8km or 16km terrains (and maybe even 4km not sure) do not place buy triggers close to each other as its hard to mouse click on them in-game due the mapview zoom levels.
</p>


	<h2>GRLE Converters</h2>

<p>
Get it from Giants Developer Network. You should know that Giants Editor will convert PNG to proper either GRLE or GDM when saving a terrain file.
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
