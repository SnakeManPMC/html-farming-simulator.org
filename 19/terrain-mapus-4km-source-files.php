<!DOCTYPE html>
<html lang="en">
<head>
<title>mapUS 4km Source Files - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="mapUS 4km Source Files - PMC Farming">
<META name="keywords" content="mapUS, 4km, Source, Files, Tutorial, FS19, PMC, Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
<h1><b>mapUS 4km Source Files Tutorial Farming Simulator 19 - PMC Farming</b></h1>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>HOWTO Create mapUS 4km Source Files Tutorial FS19</h2>

<p>
<b>2021-12-24T19:40:00Z</b> updated.
</p>

<p>
This tutorial walks you through HOWTO create 4km x 4km mapUS sample terrain source files for FS19.
</p>

<p>
You need to have <a href="http://www.graphicsmagick.org/" target="_blank">GraphicsMagick</a> downloaded, installed and working before proceeding. Also you need Giants Software grleConverter v7.0.1 which you can download from: <a href="../17/downloads.php">FS17 Downloads</a>.
</p>

<p>
First read and follow <a href="terrain-create-sample.php" target="_blank">Create Sample Terrain</a> tutorial. Use mapUS source.
</p>

<p>
Once the base source files for mapUS has been saved we start to copy some extra files which we need to handle the images. Download FS19.Terrain.GraphicsMagick.Batch.Files.2021-12-22.7z image handling batch files from: <a href="magnet:?xt=urn:btih:2ea7bf81114123682066f35bfb8f4f472b4031e6&xt=urn:btmh:1220326fedcaec3108246181e4dbb344e52a9588668824d0150756fbf01fb9c53093&dn=Batch.Files.And.Scripts.2024-03-18&tr=udp%3a%2f%2ftracker.opentrackr.org%3a1337%2fannounce&tr=udp%3a%2f%2ftracker.openbittorrent.com%3a6969%2fannounce" target="_blank">Batch.Files.And.Scripts.2024-03-18 Torrent Magnet</a>. Unpack the 7-zip archive and copy the files into maps/mapUS/ directory.
</p>

<p>
For maps/mapUS/ directory, copy:
</p>
<pre>
_run_convert_gdm_grle_to_png_and_delete_gdm_grle.bat
_run_delete_gdm_and_grle.bat
_run_delete_gdm_and_grle_png_equivalents.bat
_run_graphicsmagick_FS19_weight_density_to_standard_8km.bat
_run_graphicsmagick_FS19_weight_images_to_all_black_blank.bat
</pre>

<p>
Note that _run_convert_gdm_grle_to_png_and_delete_gdm_grle.bat file has hard disk path for grleConverter set to our drive setup, you need to edit and change the path to where you unpacked grleConverter.
</p>

<p>
Use _run_convert_gdm_grle_to_png_and_delete_gdm_grle.bat
</p>

<p>
Then _run_graphicsmagick_FS19_weight_images_to_all_black_blank.bat
</p>

<p>
And finally _run_graphicsmagick_FS19_weight_density_to_standard_8km.bat
</p>

<p>
Now all *_density and weight_* images are properly sized for large terrains. It doesnt matter if you use 4km, 5km or 9km or even 16.3km terrain, these image resolutions work just fine.
</p>

<p>
Then either <a href="https://www.powergrep.com/" target="_blank">PowerGrep</a> mass replace mapUS.i3d of GDM/GRLE to PNG, or use proper text editor to change them manually. Note: you do NOT need powergrep, just use Notepad++ its free software.
</p>

<p>
Edit maps/mapUS.xml and change map width="2048" height="2048" to 4096
</p>

<p>
Edit mapUS_farmlands.xml and delete all lines, like this:
</p>
<pre>
&lt;?xml version="1.0" encoding="utf-8" standalone="no" ?&gt;
&lt;map&gt;
    &lt;farmlands densityMapFilename="maps/mapUS/mapUS_farmland.grle" numChannels="6" pricePerHa="9500"&gt;
    &lt;/farmlands&gt;
&lt;/map&gt;
</pre>

<p>
Open _density images in GIMP and paint all black RGB 0,0,0 color. Do the same for mapUS_dem.png and tipColInfoLayer.png images. Next paint mapUS_farmland.png with RGB 63,63,63 color.
</p>

<p>
Next open mapUS_dem.png in GIMP, use image -> scale image, input size 2049 x 2049 and use interpolation: NONE. Save and close mapUS_dem.png image.
</p>

<p>
GE open mapUS.i3d, then use scripts -> fs19 -> map -> create ground collision map. Then paint ground detail textures with grass, the whole terrain, use 1000 meter brush to paint it in few clicks.
</p>

<p>
Save and exit GE.
</p>

<p>
Then mapUS.i3d replace PNG back to GDM/GRLE.
</p>

<p>
Use _run_delete_gdm_and_grle_png_equivalents.bat
</p>

<p>
Edit defaultItems.xml and remove everything between "items" properties, it should look like this:
</p>
<pre>
&lt;?xml version="1.0" encoding="utf-8" standalone="no" ?&gt;
&lt;items&gt;
&lt;/items&gt;
</pre>

<p>
Do the same for defaultvehicles.xml, like this:
</p>
<pre>
&lt;?xml version="1.0" encoding="utf-8" standalone="no" ?&gt;
&lt;vehicles&gt;
&lt;/vehicles&gt;
</pre>

<p>
Edit modDesc.xml to change &lt;map id="SampleModMap" to class name of your terrain, lets call it &lt;map id="My_4km_Sample_Terrain" also change title and description so you find this terrain easier.
</p>

<p>
Finally just copy the terrain project dir to FS19 mods dir and start the game.
</p>

<p>
You can confirm the terrain is 4km x 4km by running into the south east corner and check minimap, coordinates should show pretty close to "4096, 4096".
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
