<!DOCTYPE html>
<html lang="en">
<head>
<title>GIMP Paint cultivator_density Image Farming Simulator 19 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="GIMP Paint cultivator_density Image Farming Simulator 19 - PMC Farming">
<META name="keywords" content="Terrain, GIMP, Paint, cultivator_density, PMC, Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
<h1><b>PMC Farming Simulator Terrain GIMP Paint cultivator_density Image</b></h1>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>GIMP Paint Fields</h2>

<p>
<b>2022-01-10T15:56:00Z</b> Updated.
</p>

<p>
Paint fields in GIMP using satellite texture as base. Paint cultivated or plowed fields. <a href="terrain-giants-editor.php">Giants Editor (GE)</a> is extremely bad software to use so painting fields using it is a torture, it is far better to paint them in GIMP.
</p>

<p>
cultivator_density uses cultivated land RGB 1,0,0 and ploughed land RGB 2,0,0 colors.
</p>

<p>
cultivator_density image assumes you have high resolution satellite image for real world data terrain available, but fictional terrains can be painted the same way as well. Use 8192 x 8192 resolution for large and 4096 x 4096 resolution for small terrains.
</p>

<p>
- open satellite image in gimp, <a href="https://docs.gimp.org/en/gimp-using-layers.html" target="_blank">create fields layer</a> and paint fields with RGB 255,0,0 color<br>
- <a href="https://docs.gimp.org/2.10/en/gimp-filter-color-exchange.html" target="_blank">change colors</a> background RGB 0,0,0 and red color to RGB 1,0,0 export to cultivator_density.png<br>
- replace RGB 0,0,0 with RGB 130,0,0 and RGB 1,0,0 with RGB 0,0,0 export to fruit_density.png<br>
- save satellite image + painted fields as XCF so you can later make tweaks if necessary<br>
- edit terrainname.i3d GDM to PNG on these two density images<br>
- GE load terrainname.i3d and verify that fields are painted without grass in them<br>
- save and exit<br>
- edit terrainname.i3d PNG to GDM on these two density images<br>
- delete PNG images of these two density images (not GDM, be careful)
</p>

<p>
Pencil you paint the fields must be HARD EDGE. It cannot have antialiasing or any other "smoothing" features on, do not use soft edge pencil, paint brush etc. We don't want smearing pixels appear in the painted image. If there are such smear pixels other than RGB 1,0,0 or 2,0,0 then they appear as random crop types etc which you do not want. Reference <a href="https://docs.gimp.org/2.10/en/gimp-tool-pencil.html" target="_blank">docs.gimp.org - Pencil tool</a>.
</p>

<p>
fruit_density image we exported mostly as RGB 130,0,0 is mapUS grass everywhere except on painted fields.
</p>

<p>
Youtube video (not tutorial): <a href="https://www.youtube.com/watch?v=KwRsKoVGasQ" target="_blank">Gimp Painting Cultivator Density Texas Red Springs 8km 2019-05-16</a>.
</p>

<p>
Some reference images: <a href="https://i.imgur.com/fBxK68p.jpg" target="_blank">Texas Red Springs I believe</a>, 
<a href="https://cdn.discordapp.com/attachments/245423404822298625/553205625086017537/FS19_Cultivated_Fields_Painted_In_GIMP_2019-03-07T1320.jpg" target="_blank">2019-03-07T1320</a>, <a href="https://cdn.discordapp.com/attachments/245423404822298625/553223007129305088/FS19_Cultivated_Fields_Painted_In_GIMP_2019-03-07T1429.jpg" target="_blank">2019-03-07T1429</a>, <a href="https://cdn.discordapp.com/attachments/245423404822298625/553323212449120271/FS19_Cultivated_Fields_Painted_In_GIMP_2019-03-07T2106.jpg" target="_blank">2019-03-07T2106</a> and <a href="https://cdn.discordapp.com/attachments/557685453801914379/700102099752714250/GIMP-Properly-Colored-Cultivator-Density-Field-Areas.png" target="_blank">GIMP properly colored cultivator_density field areas</a>.
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
