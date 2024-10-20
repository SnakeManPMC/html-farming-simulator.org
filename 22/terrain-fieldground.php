<!DOCTYPE html>
<html lang="en">
<head>
<title>fieldGround.xml Farming Simulator 22 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="fieldGround.xml Farming Simulator 22 - PMC Farming">
<META name="keywords" content="Terrain, fieldGround.xml, limeLevel, plowLevel, rollerLevel, sprayLevel, stubbleShredLevel, FS22, PMC, Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
<h1><b>fieldGround.xml PMC Farming Simulator 22</b></h1>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>fieldGround.xml Farming Simulator 22 (FS22)</h2>

<p>
<b>2022-02-13T20:33:00Z</b> updated. Game engine v1.2.0.2 used.
</p>

<p>
fieldGround.xml file contains several infoLayer_* images.
</p>

<p>
infoLayer_limeLevel.png<br>
infoLayer_plowLevel.png<br>
infoLayer_rollerLevel.png<br>
infoLayer_sprayLevel.png<br>
infoLayer_stubbleShredLevel.png
</p>

<p>
ESC mapview soil composition page lists these image contents. infoLayer_limeLevel is used for lime, infoLayer_plowLevel is used for plow or ploughing, infoLayer_rollerLevel is used for rolling (rocks under ground, preparing seedbed), infoLayer_sprayLevel is used for liquid fertilizer and herbicide spraying (I think, maybe solid fertilizer as well, and possibly manure/slurry too?) and infoLayer_stubbleShredLevel must be used for that mulching thing.
</p>

<p>
Stock FS22 resolutions are 4096 x 4096. For larger terrains you need to resize these to 8192 x 8192 resolution. You cant easily turn these to GRLE but leaving them to PNG works just fine. These files are GRLE in Giants $data/ dir, but work just fine as PNGs in your own terrain dir.
</p>

<p>
If you forget to copy and edit fieldGround.xml and these GRLE images into PNGs, then your large terrain has for example soil composition lime page offset and wrong scale. Fix it by increasing the resolution of infoLayer_limeLevel etc PNGs.
</p>

<p>
When you use GE v9.0.2 to create new sample terrain, these files are left in $data/ directory and you have to manually copy fieldGround.xml and the GRLE files into your terrain directory. Use grleConverter to convert GRLE into PNG and keep the PNGs only.
</p>

<p>
You can find Elmcreek mapUS fieldGround.xml file from below location:
</p>

<pre>
data\maps\mapUS\fieldGround.xml
</pre>

<p>
After copying fieldGround.xml to your own terrain directory, edit it to remove $data/ directory so it points to your own terrain directory. You also must edit your TERRAIN.xml config file to point into new fieldGround.xml config file.
</p>

<p>
Below example terrain uses "maps/PMC_Test_Farm_10km/" directory path.
</p>

<pre>
&lt;?xml version="1.0" encoding="utf-8" standalone="no" ?&gt;
&lt;fieldGround&gt;
    &lt;densityMaps&gt;
        &lt;sprayLevel filename="maps/PMC_Test_Farm_10km/data/infoLayer_sprayLevel.png" firstChannel="0" numChannels="2" maxValue="2"/&gt;
        &lt;limeLevel filename="maps/PMC_Test_Farm_10km/data/infoLayer_limeLevel.png" firstChannel="0" numChannels="2" /&gt;
        &lt;plowLevel filename="maps/PMC_Test_Farm_10km/data/infoLayer_plowLevel.png" firstChannel="0" numChannels="1" /&gt;
        &lt;stubbleShredLevel filename="maps/PMC_Test_Farm_10km/data/infoLayer_stubbleShredLevel.png" firstChannel="0" numChannels="1" /&gt;
        &lt;rollerLevel filename="maps/PMC_Test_Farm_10km/data/infoLayer_rollerLevel.png" firstChannel="0" numChannels="1" /&gt;
    &lt;/densityMaps&gt;
&lt;/fieldGround&gt;
</pre>

<p>
With large terrains for example when you fertilize it leaves that kind of spotted or pixelated empty areas in the wet field texture, this happens (most likely) because infoLayer_sprayLevel.png is too low pixel resolution.
</p>

<div>
<a href="screenshots/fsScreen_2021_12_21_12_08_40.jpg" target="_blank"><img src="screenshots/thumbs/fsScreen_2021_12_21_12_08_40.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a> 
<p style="font-size: 10px;">
Image credit: Runsliketurtle
</p>
</div>

<p>
Below is screenshot of fieldGround.xml edit with infoLayer_sprayLevel.png 8192 x 8192 resolution, no more spots or pixelation.
</p>

<a href="screenshots/FS22-10km-Terrain-2021-12-24T0941.jpg" target="_blank"><img src="screenshots/thumbs/FS22-10km-Terrain-2021-12-24T0941.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a> 

<p>
HOWTO turn infoLayer "Level" PNG images into GRLE file format? See <a href="terrain-infolayer-level-grle.php">infoLayer Level GRLE</a> page for details.
</p>

<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("/var/www/include/footer-start.php"); ?>
<p><a href="terrain-editing-tutorial.php" class="button">PMC Farming Simulator 22 Terrain Editing Tutorial page</a></p>
<p><a href="../index.php" class="button">PMC Farming Simulator root page</a></p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("/var/www/include/footer-end.php"); ?>
<?php include("/var/www/include/support.php"); ?>
<?php include("/var/www/include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
