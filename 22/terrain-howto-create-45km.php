<!DOCTYPE html>
<html lang="en">
<head>
<title>HOWTO Create 45km Terrain Farming Simulator 22 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="HOWTO Create 45km Terrain Farming Simulator 22 - PMC Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
	<h1>HOWTO Create 45km Terrain Farming Simulator 22 - PMC Farming</h1>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>What We Already Know</h2>

<p>
<b>2024-10-07T11:13:00Z</b> Updated.
</p>

<p>
First please read our Farming Simulator 19 <a href="../19/terrain-howto-create-16km.php">HOWTO Create 16.3km x 16.3km Terrain Tutorial</a> as we know all that info already. If you need help with this tutorial <a href="../contact.php">contact us</a>.
</p>

	<h2>How Big Is 45km?</h2>

<p>
It is beyond any Farming Simulator players comprehension. It is 45056 meters x 45056 meters which is 45 kilometers x 45 kilometers, in short 45km.
</p>

<p>
This is <b>the largest working terrain size in Farming Simulator games history</b>.
</p>

<p>
Elmcreek and rest of the Giants terrains are 2048 x 2048 meters, which is 2km. So 2 versus 45, the size and scale should be pretty obvious now. For americans: 45km is 27.9 miles.
</p>

	<h2>terrainName.i3d</h2>

<p>
Open terrainName.i3d in proper text editor, search for string "<a href="../19/terrain-unitsperpixel.php">unitsPerPixel</a>" which is value 2 now, then change it to 11, see below:
</p>

<pre>
unitsPerPixel="11"
</pre>

<p>
You should also change sun distance values. However this is not essential to get the terrain in-game. It is &lt;Light name="sun" I3D line. These values work:
</p>
<pre>
lastShadowMapSplitBboxMin="-20480,-128,-20480" lastShadowMapSplitBboxMax="20480,148,20480" range="45056"
</pre>

	<h2>terrainName.xml</h2>

<p>
Open terrainName.xml and change &lt;map width= and height to 45056.
</p>

<pre>
&lt;map width="45056" height="45056" imageFilename="maps/PMC_King_Corn_45km/overview.png" ...
</pre>

	<h2>Density Image Resolution</h2>

<p>
For terrain of such crazy size you have to max out density image resolution, that is 16384 x 16384 pixel resolution. I tried 32768 x 32768 pixel resolution but that will crash Giants Editor v9.0.2 unfortunately.
</p>

<p>
Have to? Well guess you don't have to but the crop/fruit accuracy would be horribly bad if you used 8192 res density images, its more like that you <i>want</i> to use higher res density images.
</p>

	<h2>Weight Image Resolution</h2>

<p>
For <a href="pmc-king-corn-45km.php">PMC King Corn 45km</a> terrain I used 8192 x 8192 pixel resolution weight images. Never got around to try 16384, just don't see any actual benefit of using that size. However low resolutions such as 4096 is not recommended.
</p>

	<h2>InfoLayer Image Resolution</h2>

<p>
This is where it gets a bit crazy, but you wouldn't be reading this far if you weren't ready for it, so lets do it <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
In order for irregular size terrains to work, you have to bump up infoLayer_* image resolutions, not only that but 45km terrain needs a crazy 32768 x 32768 pixel resolution infoLayer images.
</p>

<p>
If you try the lower res 16384 size, FS22 will crash on load with log entry:
</p>
<pre>
Error: AI block info layer has invalid size.
</pre>

<p>
The only infoLayer image exception to this size is infoLayer_placementCollisionGenerated which must be 4096 x 4096 pixel resolution. Haven't done thorough testing on this but I assume its the same size as your heightmap, which in our case is 4096 x 4096 pixel resolution.
</p>

<p>
Farmland image also can be even as small as 2048 x 2048 if you so choose to (although 4096 x 4096 is recommended). Hey who knows maybe its just one of the infoLayer images which must be mega 32k I don't know, didn't do extensive testing all I'm telling you is what works for me <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>


	<h2>grleConverter And 32768 Resolution</h2>

<p>
When you are using Giants grleConverter tool to convert those massive 32768 x 32768 pixel resolution GRLE images into PNGs, it will crash grleConverter.exe or it simply does not save any PNGs (I've seen both happen, no idea why).
</p>

<p>
This of course means that it is a one way street with infoLayer images, you cannot convert your 32768 res GRLE's into PNG format, once Giants Editor saves PNGs to GRLE, there is no coming back, if you lose the original source PNGs you are in trouble.
</p>

<p>
It is highly recommended that you paint infoLayer images in GIMP and save the XCF original source image in a safe place, do not delete it.
</p>


	<h2>GraphicsMagick To The Rescue</h2>

<p>
GraphicsMagick can generate RGB 0,0,0 black infoLayer_* images for you from thin air, it does not need to convert anything it just simply generates the images for you.
</p>

<p>
Here is a dos batch (bat) file to generate those black infoLayer images.
</p>

<p>
_run_graphicsmagick_FS22_infoLayer_create_black_32768.bat:
</p>
<pre>
@echo off
rem 2022-02-13T23:40:00Z
set MAGICK_TMPDIR=C:\PMC.Temp.Swap\GraphicsMagick

echo indoorMask 32768x32768 ...
gm convert -size 32768x32768 -colors 256 -depth 8 -compress none xc:black infoLayer_indoorMask.png

echo navigationCollision 32768x32768 ...
gm convert -size 32768x32768 -colors 256 -depth 8 -compress none xc:black infoLayer_navigationCollision.png

echo placementCollisionGenerated 4096x4096 ...
gm convert -size 4096x4096 -colors 256 -depth 8 -compress none xc:black infoLayer_placementCollisionGenerated.png

echo tipCollisionGenerated 32768x32768 ...
gm convert -size 32768x32768 -colors 256 -depth 8 -compress none xc:black infoLayer_tipCollisionGenerated.png

echo tipColInfoLayer 32768x32768 ...
gm convert -size 32768x32768 -colors 256 -depth 8 -compress none xc:black tipColInfoLayer.png

echo All done :)
pause
exit
</pre>

<p>
That above bat file will generate correct resolution infoLayer images in RGB 0,0,0 black color for you. It wont create farmland image because there is no need and you paint it on your own anyways. Note that the bat uses tipColInfoLayer.png file name for the last image which will match the good old FS19 file naming.
</p>

<p>
You could of course do the same thing in GIMP but why would you, it takes multiple steps (per image) and is really slow depending on your CPU + RAM capability.
</p>

	<h2>Summary</h2>

<p>
Heightmap 4096, unitsPerPixel 11, map height/width 45056, density 16384, weight 8192, infoLayer 32768 with exception to farmland 2048 and infoLayer_placementCollisionGenerated 4096.
</p>

<p>
Important image resolution is the 32768 res infoLayer, if those are not done properly you will get a game crash.
</p>

<p>
Crop/fruit accuracy is an issue, it is so low with 16384 resolution density images that it is not a very pleasant way to farm. This is the reason most people probably don't like terrains above 32km size give or take few kilometers.
</p>

<p>
On 2022-02-09T23:06:00Z PMC released the first ever 45km x 45km terrain for FS22 called <a href="pmc-king-corn-45km.php">PMC King Corn 45km</a>, you can download and play that right now to see for yourself how massive 45km terrain really is.
</p>

<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("/var/www/include/footer-start.php"); ?>
<p><a href="map-making-tutorial.php" class="button">PMC Farming Simulator 22 Map Making Tutorial page</a></p>
<p><a href="../index.php" class="button">PMC Farming Simulator root page</a></p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("/var/www/include/footer-end.php"); ?>
<?php include("/var/www/include/support.php"); ?>
<?php include("/var/www/include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
