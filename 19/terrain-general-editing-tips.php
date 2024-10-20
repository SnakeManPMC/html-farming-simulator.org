<!DOCTYPE html>
<html lang="en">
<head>
<title>General Editing Tips Farming Simulator 19 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="General Editing Tips Farming Simulator 19 - PMC Farming">
<META name="keywords" content="Terrain, General Editing Tips, PMC, Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
<h1><b>PMC Farming Simulator Terrain General Editing Tips</b></h1>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>General Terrain Editing Tips</h2>

<p>
Error LOG is your friend, always check it first before starting to play. Either open log.txt and search for "error" and "warning" or try to see immediate bad errors from the in-game console debug log.
</p>

<p>
Do not edit extensive periods in giants editor without testing the terrain in-game because what looks very nice in giants editor might be totally crap/useless in-game, so don't waste your time editing something for hours which you regret the minute you see it in-game. Also try seeding, harvesting, cultivating and plowing to make sure the fields work properly (weight/density images). You can keep giants editor running and just for example robocopy /MIR the updated files into mods dir, that saves some time.
</p>

<p>
<b>Field sizes:</b> for the large terrain developers, include smaller fields for the early part of savegame where you start with lower end vehicles when doing <a href="contracts.php">contracts</a>. If you start by doing contracts on 200+ hectare fields... let me tell you, the contract durations make it a world of hurt <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Variety is the key, add huge 500+ hecatare and tiny 5 hectare fields, make the terrain interesting, give players options what size of fields to work on etc. Making a huge terrain doesn't mean that there is no tiny fields because sometimes those can be useful, like potato harvests etc.
</p>

<p>
Make field foliage layer matching the field definition because it looks very sloppy in-game when you see uneven field edges. Yes this sounds like a petty thing that who cares, but small details like this which are easy to get correctly done in giants editor make a huge of difference when you play.
</p>

<p>
When you edit in giants editor the stuff is stored in memory, only when you click save the GDM and GRLE etc files are saved to disk.
</p>

<p>
Saving 16km terrain, 8192 resolution DEM and 16384 res weight etc images takes several minutes on i7 4790K processor.
</p>

<p>
When you edit regularly check in-game and error log that its clean, if there are any errors fix them before proceeding editing. Trust me on this, the more errors you leave for "nah I'll fix that later", the more work you have when eventually that "later" comes <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
$moddir$ is case-sensitive.
</p>

<p>
Placing trees will require new savegame career start, trees will not show up in your existing savegame made when you had no trees. When you change heightmap (DEM) during your career savegame, you must unfortunately start a new career as heightmap image is copied to savegame dir. If you copy / update heightmap into your savegame dir then vehicles are still kept in their original elevations, meaning if you changed elevations then vehicles are floating in the air or buried underground. So new savegame is required with heightmap edits.
</p>

<p>
You should not resize images like _farmland.grle after painting it using tools that do not support interpolation: none, like GIMP, unless you can be sure no stray pixels are created during resizing.
</p>

<p>
Howto paint grass? Use foliage layer painting -> foliage layer -> grass, foliage channels 1 and 6, now you paint fully grown grass. The drop down has list of foliage growth stages.
</p>

<p>
Grass or other general foliage should be placed first when you are creating a brand new terrain, its far easier to put fields, roads etc special foliage (or erase foliage) on these small areas than to paint grass between fields and roads etc as its really frustrating to carefully place that grass to avoid overlap where grass should not be present.
</p>

<p>
If you are making authentic real world data terrain then look google street view photos to help you place objects to where they are in real life, or at least as close as possible. Its not possible to do 100 percent authentic terrain because the lacking environment engine and objects available, but you can do very good work by using google street view photos.
</p>

<p>
Make sure your terrain has few very small or cheap properties / land so that players starting from scratch (like 0 money, 0 vehicles and 0 land) can easily buy them after doing few contracts with leased vehicles. If your first land/property costs 10 million, that is a lot of contract work for players to do, maybe the cheapest field should be mere few hundred thousands to get player started on their own farm more easily. For example a new player cannot use placeables if he does not own any land.
</p>

<p>
Splines O key to close the loop, if you do not want to create a loop do not hit O key. Arrow keys cycle through the vertices in a spline. Control vertex align to ground is PGN-Down. Splines are shown in-game, so in GE you need to either delete or sink them under ground and/or set to invisible mode.
</p>

<p>
GE -> attributes -> transform -> translate Y is not above terrain level, its absolute elevation, 0 does not mean its aligned to the ground (unless terrain height happens to be 0 at that point).
</p>

<p>
Info layer painting for farmland will be very difficult if you stack field definitions right next to each other and there is supposed to be farmland / property line beween them.
</p>

<p>
The maximum number of crops in densityMapHeightTypes is 31, if you add more you will crash the game.
</p>

<p>
16km terrain you need to GE edit the Sun, use GE -> sun -> attributes -> light -> range, put it to like 20000 value or so, well beyond 16384 (I think, not confirmed this 2019-02-15).
</p>

<p>
defaultVehicles.xml sets the vehicles for career start. It will set types, coordinates and rotation. Check example from fs19root/sdk/mapde/defaultvehicles.xml, then just grab the new coordinates using GE. Look for different vehicles types from fs19root/data/vehicles/ etc dirs. Make sure you do not add dollar sign for the filename="$data as the other xml's use, this doesnt work for defaultvehicles.xml, apparently it is some bug. Change the xml to be like this: &lt;vehicle filename="data/
</p>

<p>
Upgrade v1.3 new feature seems to be the usage of "$mapdir$" (points to current terrain root dir). In earlier mapSA was still used "$moddir$FS19_EstanciaLapacho/".
</p>

<p>
Real world data heightmap can look very ugly in GE, you need to smooth out the jagged elevations in either L3DT, Wilbur or GE itself. I used 0.1 values for opacity, hardness and value, then 500m large round brush and smoothed out until the jagged parts were mostly gone. You could also use photoshop / gimp and add gaussian blur to the grayscale heightmap image. For proper one click solution, read below about US NED Heightmap.
</p>

<p>
The Giants engine calculates float predominantly with single precision (~7 digits). You can see just in GE that 1.00000 has become 0.99999 or 1.00001 in the saved i3d. Not very much but can be sufficient for some precision issues.
</p>

<p>
Satellite texture for PDA map painting tip: you should paint the fields as they are in farming simulator because once you plow the fields you can see the background PDA image on the map view, this looks odd if the satellite is with some real life crop imagery even though you just harvested or ploughed etc.
</p>

<p>
Placing objects is easier if you use google/maps satellite view to see where and what sort of buildings or trees etc are in your terrain area. Street view photos are excellent resource to get the feeling what the real life location is, however these photos are not usually available other than urban areas or large highways.
</p>

<p>
Place bushes around roads, they have no geometry but give a nice look. American locations add those old style telephone / electric wire poles.
</p>

<p>
Satellite image to GE map view: use any sign any size any shape model (sorry no link), save your satellite image over back_of_sign_a.png and then import back_of_sign_a.i3d model. Scale it in attributes window, put your terrain size like 2km is 2048, 4km is 4096, 8km is 8192 etc, type in scale Z and Z: 4096 but leave scale Y as 1. When you want to disable/hide this model, use attributes -> translate Y and make it like -5 value which puts it five meters underground (assuming blank flat heightmap). You can also use visibility tick box to turn it on and off, however turning it invisible still causes objects to align to this plane if you have it higher than 0 meters elevation and that plane while invisible it still exist in-game, so move the plane -5 meters elevation. For a release version terrain you need to delete this as it has no use in-game.
</p>

<p>
Road splines before you start to create these you need to check from google/maps which roads are asphalt and dirt/gravel. On Iowa Garden City I proceeded to create the road network almost completely and plan was to organize the splines later to asphalt/dirt categories, well it just happens that this location has two roads that turn from asphalt into dirt at one point so my single spline for it doesn't work, I had to go back and delete parts of the spline and create another one for the different road type. So always check google/maps before starting to create splines to avoid this problem.
</p>

<p>
When choosing a new terrain location, never include roads that have only connection to the outside terrain. For example a farm right at the edge of the terrain where its road connection leads to outside terrain only, leaving players no way to drive into that farm. This is kind of difficult to explain without a screenshot, PMC Texas Rowena north-north-west edge has two farms/locations that have no connecting roads, only roads lead to outside terrain. Also do not include farms that are right at the terrain edge or worse where the farm is cut in half by the edge, those are very bad for enjoyable game-play as you cant really operate in the edge.
</p>

<p>
Gas station is just a 3d model in terrain i3d, then you setup defaultItems.xml placeable for this gas station like:
</p>
<pre>
&lt;item mapBoundId="gasStation" className="BuyingStationPlaceable" filename="data/placeables/mapUS/gasStation/gasStation.xml" position="COORDINATES" rotation="0 0 0" /&gt;
</pre>

<p>
Bale sale point is just a defaultItems.xml placeable, pure virtual thing, its up to you what to place in that location and add the warning trigger markers to the ground:
</p>
<pre>
&lt;item mapBoundId="sellingStationBales" className="SellingStationPlaceable" filename="data/placeables/mapUS/sellingStationBales/sellingStationBales.xml" position="COORDINATES" rotation="0 0 0" /&gt;
</pre>

<p>
Field and forest / trees edge needs <b>at least a tractor width</b> of space so you get enjoyable game-play. Anything less and your players get frustrated with another stupid map with trees next to the field blocking vehicles and especially hired worker driven vehicles.
</p>

<p>
When you resize density image resolutions, you need to re-create collision map.
</p>

<p>
If you do not make cultivator_density fields, then any land you own in career start will be WITHOUT FIELDS. Now this can be good or a bad thing depending what you want. Overall and fitting to the standard game-play, you should paint cultivator_density or have default farm property be land that has no fields (like the actual farm house / silo area) and have player purchase land plots for fields so the AI has already created the fields.
</p>

<p>
Field definitions and cultivator_density field edges should be straight, if they are free hand jagged and wild, for example using guidancesteering looks unprofessional as the field edge goes where ever except straight.
</p>

<p>
Bushes are not real objects, they are actually painted into terrain. GE -> terrain editing -> foliage layer painting -> foliage layer -> bush01, layer state -> state 1 (etc). Then just use terrain foliage paint mode and paint. Do not use too large brush or strong values as these bushes are placed very "agressively" to the terrain.
</p>

<p>
Gimp XCF image format files are reconigzed as PNG's by the engine, they show up in the error log as PNGs, so do not copy them into your mod directories.
</p>

<p>
You can paint roughDirt01_weight.png in GIMP with RGB 255,255,255 color. It comes off as basic texture type without the four layer randomization thingy, but it looks alright considering how easy it is to paint. You should be able to paint other ground types as well, asphalt etc.
</p>

<p>
Road painting tip; Dirt gravel road painting at 6 meters, then asphalt painting in 5 meters. This leaves nice dirt edge before grass starts.
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
