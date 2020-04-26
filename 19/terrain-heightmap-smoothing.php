<!DOCTYPE html>
<html lang="en">
<head>
<title>Heightmap Smoothing Farming Simulator 19 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Heightmap Smoothing Farming Simulator 19 - PMC Farming">
<META name="keywords" content="Terrain, Heightmap Smoothing, PMC, Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<!-- google ads -->
<?php include("../include/google-ads.php"); ?>
<h1><b>PMC Farming Simulator Terrain Heightmap Smoothing</b></h1>
</header>

<section>
	<h2>US NED Heightmap</h2>

<p>
Howto use US National Elevation Data (NED) heightmap as map_dem.png so giants engine understands how it should look.
</p>

<p>
Global mapper -> L3DT -> grayscale PNG doesnt work, elevations are really high / rough, you need to darken the image, a lot. This is because GE recognizes 0 meters to 255 meters as RGB black to white color range only. You can do this with photoshop or gimp but we use <a href="http://www.graphicsmagick.org/" target="_blank">graphicsmagick</a> as its automatic one click method.
</p>

<p>
Graphicsmagick values explained:<br>
70 way too rough<br>
35 looks nice in-game but is just <i>slightly</i> too rough when comparing to google/maps street view photos<br>
20 still can see some roughness, but looks already very nice<br>
15 smooth but still elevations, this looks realistic
</p>

<p>
_run_graphicsmagick_heightmap_just_right.bat:
</p>
<pre>
@echo off
md temp
set MAGICK_TMPDIR=%CD%\temp

copy C:\FS19_Projects\USA_Texas_Rowena_8km\map_dem.png .
gm convert -modulate 15,100 map_dem.png PMC_Texas_Rowena_8km_dem.png

rd temp
del map_dem.png
echo All done :)
pause
exit
</pre>

<p>
You need to replace the C:\FS19_Projects\USA_Texas_Rowena_8km\ path to where you placed your grayscale heightmap DEM image, if its in the current dir then remove that line completely. Also edit the PMC_Texas_Rowena_8km_dem.png to whatever file name you use. Once you have darkened the heightmap png just load the terrain up in GE and inspect how it looks, it might require in-game check where you get better sense of the elevations when you drive tractor or just walk around.
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
