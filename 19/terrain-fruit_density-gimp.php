<!DOCTYPE html>
<html lang="en">
<head>
<title>Gimp Paint fruit_density Image Farming Simulator 19 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Gimp Paint fruit_density Image Farming Simulator 19 - PMC Farming">
<META name="keywords" content="Terrain, Gimp Paint fruit_density Image, PMC, Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<!-- google ads -->
<?php include("../include/google-ads.php"); ?>
<h1><b>PMC Farming Simulator Terrain Gimp Paint fruit_density Image</b></h1>
</header>

<section>
	<h2>Gimp fruit_density Road Painting</h2>

<p>
How to convert asphalt01_weight road image to grass removing fruit_density image, assuming fruit_density is all RGB 130,0,0 painted as grass. This guide assumes you have already converted fruit_density.gdm to png image format.
</p>

<p>
- load fruit_density.png and asphalt01_weight.png in gimp<br>
- set asphalt01_weight image -> mode -> RGB<br>
- SHIFT-O select by color, click the road white pixel, all white pixels are now selected<br>
- select -> grow -> 5<br>
- select -> shink -> 3, use any numbers here to make the selected area match your road as much as possible<br>
- CTRL-C, select fruit_density image and CTRL-V, RMB pasted selection -> to new layer<br>
- unselect the selection (roads), colors -> map -> color exchange, set white RBG 255,255,255 to black RGB 0,0,0<br>
- pasted layer RMB -> merge down<br>
- file -> overwrite fruit_density.png<br>
All done <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
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
