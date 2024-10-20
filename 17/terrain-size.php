<!DOCTYPE html>
<html lang="en">
<head>
<title>Terrain Size Farming Simulator 17 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Terrain Size Farming Simulator 17 - PMC Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
	<h1>Terrain Size Farming Simulator 17 - PMC Farming</h1>

<p>
Terrain Editing Tutorial: Terrain Size for Farming Simulator 17 (FS17) by PMC.
</p>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
<?php include("/var/www/include/support.php"); ?>
	<h2>Terrain Size FS17</h2>

<p>
Please forget that 2X, 4X etc terrain size nonsense, use kilometers (KM) which is "kilometers x kilometers" (in short just km) instead. Simple example; FS17 Goldcrest Valley is 2km, FS17 North West Texas is 4km, FS17 Broad Acres and FS17 Cornbelt are 8km. As of 2018-08-05 nobody has released 16km terrain. You can read more about using actual terrain size from <a href="../19/terrain-use-actual-size.php">Terrain Use Actual Size (FS19)</a> tutorial page.
</p>

<p>
0,0 coordinates is upper left corner, max coords are lower right corner.
</p>

<p>
Terrain size is defined in map01.xml file using meters. Also you need a supporting MyTerrain\maps\map01\map01_dem.png heightmap image and the *_weight.png ground texture images, more specifically in their resolution to fit your chosen terrain size in meters.
<p>

<p>
map01_dem.png image pixel resolution, in-game coordinates, kilometers x kilometers size:<br>
<s>255 x 255 pixels.<br>
513 x 513 pixels, 1535 x 1535.</s><br>
1025 x 1025 pixels, 2048 x 2048, 2km x 2km (size of FS17 Goldscrest Valley and FS17 Sosnovka)<br>
2049 x 2049 pixels, 4096 x 4096, 4km x 4km<br>
4097 x 4097 pixels, 8192 x 8192, 8km x 8km<br>
8193 x 8193 pixels, 16384 x 16384, 16km x 16km<br>
16385 x 16385 pixels, 32768 x 32768, 32km x 32km
</p>

<p>
Obviously you cannot use 8193 x 8193 pixel resolution heightmap size not to mention 16384 resolution, it is way too large, all you would get is performance issue lag, unplayable FS17 state.
</p>

<p>
Configure your terrain size in meters from map01.xml config file, have fitting heightmap image for it. Easy <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("/var/www/include/footer-start.php"); ?>
<?php include("../include/fs17-terrain-editing-tutorial-footer.php"); ?>
<?php include("/var/www/include/footer-end.php"); ?>
<?php include("/var/www/include/support.php"); ?>
<?php include("/var/www/include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
