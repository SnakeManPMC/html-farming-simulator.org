<!DOCTYPE html>
<html lang="en">
<head>
<title>HOWTO Create 16km Terrain Farming Simulator 19 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="HOWTO Create 16km Terrain Farming Simulator 19 - PMC Farming">
<META name="keywords" content="Tutorial, Create, 16km, Terrain, PMC">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
<h1><b>PMC HOWTO Create 16km Terrain Farming Simulator 19</b></h1>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>Any Terrain Size You want</h2>

<p>
<b>2021-01-12</b> Updated
</p>

<p>
You can use <i>any terrain size you want</i>, it is not limited to 2 kilometer (km), 4km, 8.1km, 16.3km, 32.7km etc, this is the old uneducated way of thinking. You can create 10.2km terrain or 12.2km or 5.1km or 17.4km etc. This is done by using <a href="terrain-heightmap.php">heightmap</a> and <a href="terrain-unitsperpixel.php">unitsPerPixel</a>. Speaking of sizes, lets all <a href="terrain-use-actual-size.php">use actual size</a> when talking about terrains.
</p>

	<h2>How Big Is 16km?</h2>

<p>
Its a very big, HUGE terrain. The actual size is 16,384 x 16,384 meters which is 16.3 kilometers x 16.3 kilometers or in short 16km. This is about the <i>largest playable terrain</i> you could possibly do for Farming Simulator 19 which is still enjoyable. If you go any larger... <a href="terrain-density-weight-images.php">density/weight image</a> resolution problem becomes bigger and bigger.
</p>

<p>
Yes PMC did create monster 32km x 32km terrain but the fruit density image gets so low resolution that you cannot properly work on your fields anymore as 4 meter combine harvester header would cut a very large like probably 6-7 meters worth of crop.
</p>

	<h2>Source Files</h2>

<p>
Read our <a href="terrain-create-sample.php">Create Sample Terrain Tutorial</a> which explains how you create your own source files (do not download any pre-made ones).
</p>

<p>
Also if you want to enlarge your own existing terrain from 4km or 8.1km to 16.3km... you need to figure that out your own, do not use this guide on your existing terrain because you get problems with objects, this is meant as simple general overview what must be done.
</p>

	<h2>Weight and Density Images</h2>

<p>
Once you have created your terrain source files which are either mapDE or mapUS blank one, then first thing you need to do is increase the weight/density image resolution.
</p>

<p>
In our example we use 4096 x 4096 resolution for weight images and 8192 x 8192 resolution for density images. tipColInfoLayer and _farmland image you should resize to 2048 x 2048.
</p>

<p>
If you must get more details to tipcol and farmland images, then you could try 4096 resolution but in our experience these images cause a long delay in ESC mapview in higher resolutions and they really do not need a high resolution. (anybody remember FS17 Cornbelt ESC mapview display delays?).
</p>

	<h2>Heightmap</h2>

<p>
<a href="terrain-heightmap.php">Heightmap digital elevation map (DEM)</a> image needs to be resized to 4097 x 4097 resolution. Use GIMP with no interpolation resizing method (or photoshop with similar feature).
</p>

	<h2>terrainName.i3d</h2>

<p>
Open mapDE.i3d or mapUS.i3d depending which you chose in proper text editor, search for string "<a href="terrain-unitsperpixel.php">unitsPerPixel</a>" which is value 2 now, then change it to 4, see below:
</p>

<pre>
unitsPerPixel="4"
</pre>

<p>
unitsPerPixel means heightmap cell size (FS19 doesn't use this terminology but it fits well). Cell is how much terrain area is covered with each heightmap grid point.
</p>

	<h2>terrainName.xml</h2>

<p>
On the very first config line you have &lt;map width=, this configuration line defines the true size of a terrain, its width and height. In mapDE and mapUS.xml it is 2048 which means 2km, you need to increase this size to 16384.
</p>

<pre>
&lt;map width="16384" height="16384" imageFilename="maps/pda_map.png" &gt;
</pre>

<p>
Now your terrain xml config defines its as 16.3km size.
</p>

	<h2>Summary</h2>

<p>
So basically we took "normal" 8.1 kilometer x 8.1 kilometer terrain and simply changed it to 16.3km using i3d and xml text config, all the rest of the image files are exactly the same size. Normal 8.1km terrain unitsPerPixel is standard value 2, but we bumped it up to 4.
</p>

<p>
16.3km terrain using 8192 x 8192 fruit density image files are the largest playable, you could increase the density image resolutions and i3d/xml config values to make 32km or possibly even larger terrain, but FS19 engine cannot handle larger than 8192 x 8192 resolution density images and even these cause slight stutter (50-60 FPS performance fluctuation) which luckily doesn't ruin the game-play yet. Try 16,384 x 16,384 resolution density images and this issue is so bad the game actually freezes for a very short moment every few seconds when it accesses/writes density images. It is unplayable, you could not play in such freezes.
</p>

<p>
PMC has made <a href="pmc-terrains.php">a few 16.3 kilometer terrains</a> using 8192 density images and unitsPerPixel 4 and these work great, we are also working on one 20.4km terrain but its so early stages at the moment not sure what comes out of it, however it is in-game and working, no issues.
</p>

<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("/var/www/include/footer-start.php"); ?>
<p><a href="map-making-tutorial.php" class="button">PMC Farming Simulator Map Making Tutorial page</a></p>
<p><a href="../index.php" class="button">PMC Farming Simulator root page</a></p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("/var/www/include/footer-end.php"); ?>
<?php include("/var/www/include/support.php"); ?>
<?php include("/var/www/include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
