<!DOCTYPE html>
<html lang="en">
<head>
<title>Cultivator, Fruit Density with Painted Roads FS19 Terrain Tutorial - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Cultivator, Fruit Density with Painted Roads FS19 Terrain Tutorial - PMC Farming">
<META name="keywords" content="Cultivator, Fruit, Density, Painted, Roads, FS19, Terrain, Tutorial, PMC, Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<!-- google ads -->
<?php include("../include/google-ads.php"); ?>
<h1><b>Cultivator, Fruit Density with Painted Roads FS19 Terrain Tutorial - PMC Farming</b></h1>
</header>

<section>
	<h2>Overview</h2>

<p>
<b>2021-06-23</b> updated.
</p>

<p>
System to <a href="https://www.gimp.org/" target="_blank">GIMP</a> paint fields and roads, then use <a href="http://www.graphicsmagick.org/" target="_blank">GraphicsMagick</a> to generate all images (cultivator_density.png, fruit_density.png and roughDirt01_weight.png).
</p>

<p>
Farming Simulator 19 (FS19) _density and _weight image file setup is quite complex for beginner to understand, therefore this GraphicsMagick setup makes it easy one click solution to get all the GIMP source images sorted into FS19 readable format. There is no point preparing and exporting these images from GIMP using FS19 formats when GraphicsMagick does all of it automatically.
</p>

<p>
GraphicsMagick not only sets the image resolutions and formats properly, but it generates grass cutting fruit_density image for you without you ever needing to paint that in GIMP.
</p>

<p>
Every time you do edits to GIMP source images, all you need to do is to export and then run these batch files (or just the one which was edited).
</p>

	<h2>GIMP Source Images</h2>

<p>
See our individual pages for more detailed instructions how to <a href="terrain-cultivator_density-gimp.php">GIMP paint cultivator_density</a> and <a href="terrain-roads-painting-gimp.php">GIMP paint roads</a>.
</p>

<p>
GIMP image painting colors:
</p>

<p>
Our terrains are large so we use 8192 x 8192 pixel resolution for our _density images and 4096 x 4096 pixel resolution for our _weight images. If you use smaller size for example to make 2-5km terrains, then its recommended to use 4096 and 2048 resolutions. Note: its <i>recommended</i> but not necessary, you can do small 3km terrain just fine with large image resolutions.
</p>

<p>
cultivator_density background color RGB 63,63,63 and fields RGB 255,0,0 exported to filename: satellite_texture_cultivator_density.png
</p>

<p>
Roads RGB 255,0,0 and background transparent exported to filename: satellite_texture_roads.png
</p>

	<h2>GraphicsMagick</h2>

<p>
You obviously need to have graphicsmagick downloaded, installed and working before proceeding to use these batch files. If your GIMP source images are not exported properly, then graphicsmagick bat files will not work.
</p>

<p>
Download PMC graphicsmagick batch files: PMC.GraphicsMagick.Batch.Files.2021-06-23.7z <a href="magnet:?xt=urn:btih:2ea7bf81114123682066f35bfb8f4f472b4031e6&xt=urn:btmh:1220326fedcaec3108246181e4dbb344e52a9588668824d0150756fbf01fb9c53093&dn=Batch.Files.And.Scripts.2024-03-18&tr=udp%3a%2f%2ftracker.opentrackr.org%3a1337%2fannounce&tr=udp%3a%2f%2ftracker.openbittorrent.com%3a6969%2fannounce" target="_blank">Batch.Files.And.Scripts.2024-03-18 Torrent Magnet</a>.
</p>

<p>
Use in this order:<br>
1. _run_graphicsmagick_create_cultivator_density.bat<br>
2. _run_graphicsmagick_create_roads_roughdirt01.bat<br>
3. _run_graphicsmagick_create_fruit_density.bat
</p>

<p>
Bat files automatically check if necessary source image is present, if not it will inform you PNG is missing and abort.
</p>

<p>
Common mistake: these three bat files are listed in windows explorer in order of cultivator, fruit and roads, well this is NOT the order you should to run them, sometimes its easy to just filename wise alphabetically run these bat's and that is wrong. Do them in the correct order as shown above :)
</p>

<p>
Once all three bat files are ran in that order, you have new PNGs named: cultivator_density.png, fruit_density.png and roughDirt01_weight.png which can be directly copied over to your TERRAIN\maps\CLASSNAME\ directory.
</p>

	<h2>Ground Detail Texture Weight Images</h2>

<p>
_weight images found in TERRAIN\maps\CLASSNAME\ directory contain white and black pixels to designate where ground detail textures are placed. These images come in series of 1 through 4, if two or more of the images have white pixels in the same coordinates it will fail. When it fails <a href="terrain-giants-editor.php">Giants Editor</a>/game reverts to the first available texture, in mapDE/mapUS this is pigmud or similar looking brown texture.
</p>

<p>
What this means is you need to "punch a hole" into your basic grass weight image for where your roads are located. This is assuming you only have plain green grass painted currently, this is the case when you are creating a new terrain, ie roads just painted. If you have different _weight image setup, then clean/erase ground texture painting so that you only have basic grass.
</p>

<p>
I open roughtDirt01_weight roads image in GIMP, invert colors so white becomes black, then SHIFT-O select by color click black color, now all roads are selected. Then I paste this selected black area over ALL grass0*_weight images where I want to "punch a hole", once pasted and layers merged GIMP creates alpha channel for transparency, it needs to be removed by using layer -&gt; transparency -&gt; remove alpha channel.
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
