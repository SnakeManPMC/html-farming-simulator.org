<!DOCTYPE html>
<html lang="en">
<head>
<title>GIMP Terrain Design Document Image Resolution - PMC Farming Simulator 19</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="GIMP Terrain Design Document Image Resolution - PMC Farming Simulator 19">
<META name="keywords" content="GIMP, Terrain, Design, Document, Image, Resolution, FS19, PMC, Farming, Simulator">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<!-- google ads -->
<?php include("../include/google-ads.php"); ?>
<h1><b>GIMP Terrain Design Document Image Resolution - PMC Farming Simulator 19</b></h1>
</header>

<section>
	<h2>GIMP Design Doc Image Resolution</h2>

<p>
<b>2022-02-02T05:28:00Z</b> Updated.
</p>

<p>
See <a href="terrain-design-document.php">GIMP Terrain Design Document</a> first.
</p>

<p>
Design document image resolution should be <b>one meter per pixel</b> (1m/px). This way it is really easy to design features to your terrain as what dimensions you paint will appear in GE/in-game as well, you paint 5 pixel pencil road and 5 meter wide road appears in GE, you paint 150 x 200 pixel farm yard and 150 meters x 200 meters size farm yard appears in GE.
</p>

<p>
What is 1m/px? It means ravenport is 2km x 2km terrain and its design doc would be 2048 x 2048 pixel resolution. <a href="pmc-north-dakota-greendale-4km.php">PMC North Dakota Greendale 4km</a> is as the name says 4km x 4km terrain and design doc should be 4096 x 4096 pixel resolution and <a href="pmc-texas-rowena-8km.php">PMC Texas Rowena 8km</a> is as you guessed ... 8km and "the doc" should be 8192 x 8192 pixel resolution.
</p>

<p>
Terrain size is included in the first line of TERRAIN.xml config file.
</p>

<p>
Large terrains are of course a problem, if your computer hardware is not very powerful GIMP can become sluggish with image resolutions 10,240 x 10,240 and above when you use many layers especially when using complex selections. It really depends on your CPU, RAM and GPU capabilities (might not even be so much about GPU).
</p>

<p>
Really large terrains for example 16.3km where design doc should be 16384 x 16384 pixel resolution it becomes so sluggish in GIMP when you have 5+ layers not to mention something selected on those layers. In this size terrain you could do 8192 x 8192 pixel resolution design doc where scale is 2m/px. Unfortunately its not scaling exactly at this level, if you wanted 5 meter wide road, you either have to paint it as 2 or 3 pixel pencil which makes it just slightly too narrow or wide.
</p>

<p>
Dumb suggestion to fix this issue is to get a better computer hardware heh. Its safe to say that 16gb RAM is so low in 2022 that you can barely paint 10240 res image with it. Its recommended to have editing computer with at least 32gb RAM.
</p>

<p>
GraphicsMagick converts exported design doc images as is, if the image is 10240 graphicsmagick will save cultivator_density and fruit_density as 10240 resolution, this is something you might not want as usual density images are either 4096 or 8192 resolution. Pretty much if you have a big terrain, you're using 8192.
</p>

<p>
Normal large terrain cultivator_density and fruit_density image resolution is 8192, easiest way to achieve this is to paint your large terrain lets say 12288 x 12288 res design doc and then resize all exported layer PNGs to 8192 x 8192 res. Or simply resize GIMP XCF design doc to 8192 before exporting BUT do not save, just close the XCF when you have done exporting so you wont ruin your original XCF image resolution.
</p>

<p>
GIMP paints images, GraphicsMagick converts / processes images. If you need to resize large images its recommended to use GraphicsMagick command line, especially with batch files if you have to do it repeatedly. GraphicsMagick is much less hardware demanding (or it can swap files through it) than GIMP with large images using several layers and selections.
</p>

</section>

<footer>
<p><a href="map-making-tutorial.php" class="button">PMC Farming Simulator 19 Map Making Tutorial page</a></p>
<p><a href="../index.php" class="button">PMC Farming Simulator root page</a></p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("../include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
