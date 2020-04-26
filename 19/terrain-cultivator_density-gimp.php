<!DOCTYPE html>
<html lang="en">
<head>
<title>Gimp Paint cultivator_density Image Farming Simulator 19 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Gimp Paint cultivator_density Image Farming Simulator 19 - PMC Farming">
<META name="keywords" content="Terrain, Gimp Paint cultivator_density Image, PMC, Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<!-- google ads -->
<?php include("../include/google-ads.php"); ?>
<h1><b>PMC Farming Simulator Terrain Gimp Paint cultivator_density Image</b></h1>
</header>

<section>
	<h2>Gimp Paint Fields</h2>

<p>
Paint fields in GIMP using satellite texture as base. Paint cultivated or plowed fields. GE is extremely bad software to use so painting fields using it is a torture, it is far better to paint them in gimp.
</p>

<p>
cultivator_density uses cultivated land RGB 1,0,0 and ploughed land RGB 2,0,0 colors.
</p>

<p>
This image assumes you have high resolution satellite image for real world data terrain available, use 8192 x 8192 resolution for 8km and 4096 x 4096 resolution for 4km terrains.
</p>

<p>
- open satellite image in gimp, create fields layer and paint fields as some bright color like red<br>
- resize to cultivator_density resolution (usually smaller), background RGB 0,0,0 and red color to RGB 1,0,0 export to cultivator_density.png<br>
- replace RGB 0,0,0 with RGB 130,0,0 and RGB 1,0,0 with RGB 0,0,0 export to fruit_density.png<br>
- edit terrainname.i3d GDM to PNG on these two density images<br>
- GE load terrainname.i3d and verify that fields are painted without grass in them, save<br>
</p>

<p>
Idea: why not screenshot GE top-down view with field rectangles visible, then just gimp resize it to like 4096 res, color replace the blue with RGB 1,0,0 to create cultivated fields almost automatically? Hmm :)
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
