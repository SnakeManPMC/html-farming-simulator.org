<!DOCTYPE html>
<html lang="en">
<head>
<title>Soil Types Precision Farming Tutorial - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Soil Types Precision Farming Tutorial (FS19) - PMC Farming">
<META name="keywords" content="Soil, Types, Map, Terrain, Precision, Farming, PMC">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<!-- google ads -->
<?php include("../include/google-ads.php"); ?>
<h1><b>Soil Types Precision Farming - PMC Farming</b></h1>
</header>

<section>
	<h2>Soil Types Tutorial</h2>

<p>
<a href="https://www.farming-simulator.com/mod.php?mod_id=188882" target="_blank">Precision farming</a> is a mod for Farming Simulator 19 by Giants Software (developers of FS19).
</p>

<p>
HOWTO add it to your custom terrain. In below tutorial we use CLASS and TERRAIN to designate our "maps" and terrain names. You are using your own class name for terrain so you need to replace TERRAIN with the name you are using.
</p>

	<h2>TERRAIN.i3d</h2>

<p>
Edit TERRAIN.i3d, find the line with infolayer name farmland.
</p>

<p>
For us its the following but for your terrain it will be different:
</p>
<pre>
&lt;InfoLayer name="farmland" fileId="209" numChannels="6"/&gt;
</pre>

<p>
Now copy-paste this line to a new line, then edit it as follows:
</p>
<pre>
&lt;InfoLayer name="soilMap" fileId="99999" numChannels="3"/&gt;
</pre>

<p>
In above example farmland infolayer fileID was 209, search this 209 from files section. Actually it would be easier to just search it by "_farmland.grle" string, but whatever you find easiest. In our case 209 is this:
</p>
<pre>
&lt;File fileId="209" filename="CLASS/TERRAIN_farmland.grle"/&gt;
</pre>

<p>
Now copy-paste this line to a new line, then edit fileID to 99999 and _farmland to _soilmap like this:
</p>
<pre>
&lt;File fileId="99999" filename="CLASS/TERRAIN_soilmap.png"/&gt;
</pre>

<p>
Please note that you need to use PNG instead of GRLE as file extension here.
</p>

<p>
Save and close TERRAIN.i3d file.
</p>

	<h2>Create Soil Type Image Using GIMP</h2>

<p>
Create 8 bit grayscale RGB 0,0,0 black image with 1024 x 1024 pixel resolution, save it as PNG to TERRAIN_soilmap.png file name.
</p>

<p>
Start GIMP, press CTRL-N for create a new image, use image size width 1024 and height 1024. Fill the image with RGB 0,0,0 black color by using change foreground color dialog then pressing CTRL-, (control and , keys together) or use menu edit -&gt; fill with FG color. Then export image as PNG using SHIFT-CTRL-E or File -&gt; export as and use TERRAIN_soilmap.png file name.
</p>

<p>
Colors for soilmap PNG are as follows:<br>
RGB 0,0,0 Loamy Sand<br>
RGB 1,1,1 Sandy Loam<br>
RGB 2,2,2 Loam<br>
RGB 3,3,3 Silty Clay
</p>

<p>
Those RGB colors are basically "shades of black", you cant really see other than plain black image, thats why you should first create GIMP XCF colorful image using extreme colors which are easy to see and paint, then replace these colors with the above grayscale RGB values. HOWTO create detailed colorful image is explained in <a href="terrain-soil-types-painting-gimp.php">GIMP Paint Precision Farming Soil Types Tutorial</a> page.
</p>

<p>
TERRAIN_soilmap.grle is 8 bit grayscale image. GRLE is saved out from Giants Editor.
</p>

	<h2>Giants Editor Paint Soil Maps</h2>

<p>
Start <a href="terrain-giants-editor.php" target="_blank">Giants Editor</a> and load TERRAIN.i3d file, in short start editing your terrain heh.
</p>

<p>
Select infoLayer paint tool. Then select info layer painting and info layer soilMap. Now you can paint the different soil types into your TERRAIN_soilmap image.
</p>

<p>
If you already painted this image in full using GIMP, then you can skip all the giants editor painting.
</p>

<p>
Bit settings for each soil type are (do NOT use bit 2):<br>
Loamy Sand none<br>
Sandy Loam 0<br>
Loam 1<br>
Silty Clay 0 1
</p>

<p>
Giants Editor save and exit. Now TERRAIN_soilmap.grle file has been saved, you should delete TERRAIN_soilmap.png image as its not used anymore.
</p>

	<h2>TERRAIN.xml</h2>

<p>
Edit TERRAIN.xml and add the following code:
</p>
<pre>
&lt;precisionFarming&gt;
	&lt;soilMap filename="CLASS/TERRAIN_soilmap.grle"/&gt;
&lt;/precisionFarming&gt;
</pre>

<p>
You can add that to the bottom of the xml file just before ending &lt;/map&gt; line.
</p>

<p>
Save TERRAIN.xml and close it.
</p>

	<h2>In-Game Test</h2>

<p>
Before you can do first in-game test you need to edit TERRAIN.i3d one more time with text editor. Search for TERRAIN_soilmap.png string, change that to TERRAIN_soilmap.grle file extension. Now you are ready to in-game test it.
</p>

<p>
Test in-game, check LOG for any errors.
</p>

</section>

<footer>
<p><a href="map-making-tutorial.php" class="button">PMC Farming Simulator Map Making Tutorial page</a></p>
<p><a href="../index.php" class="button">PMC Farming Simulator root page</a></p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("../include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
