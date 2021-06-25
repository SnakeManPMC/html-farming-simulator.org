<!DOCTYPE html>
<html lang="en">
<head>
<title>Roads Painting in GIMP FS19 Terrain Tutorial - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Roads Painting in GIMP FS19 Terrain Tutorial - PMC Farming">
<META name="keywords" content="Roads, Painting, GIMP, FS19, Terrain, Tutorial, PMC, Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<!-- google ads -->
<?php include("../include/google-ads.php"); ?>
<h1><b>Roads Painting in GIMP FS19 Terrain Tutorial - PMC Farming</b></h1>
</header>

<section>
	<h2>GIMP Road Painting Using Satellite Imagery</h2>

<p>
<b>2021-06-23</b> updated.
</p>

<p>
Painted roads means dirt/gravel ground detail textures (these are not 3D mesh objects for asphalt).
</p>

<img src="screenshots/PMC-North-Dakota-Greendale-4km-Roads-GIMP.jpg" alt="PMC North Dakota Greendale 4km Terrain, Roads Painted in GIMP" loading="lazy" class="terrainimg"></a>

<p>
In GIMP paint red color with pencil line drawing mode on top of satellite image. This is the same as <a href="terrain-cultivator_density-gimp.php">painting cultivator_density fields</a> except you paint roads using lines.
</p>

<p>
GIMP choose pencil size fitting to the road width. Save this weight image into the roughDirt01_weight or equivalent dirt/gravel texture type because it fits even under the asphalt roads which you should create as objects. You might want to use different color for asphalt and dirt roads, not sure about this because end result still would be just dirt texture... but the road width is usually different between asphalt and dirt roads.
</p>

<p>
This way you get roads painted quickly, comfortably in GIMP, it gives you fruit_density grass cleaning image at the same time and it allows full control between roads and fields to avoid overlap.
</p>

	<h2>Color and Background</h2>

<img src="screenshots/GIMP-Change-Foreground-Color-Dialog.jpg" alt="GIMP Change Foreground Color Dialog" loading="lazy" class="terrainimg">

<p>
Paint roads using RGB 255,0,0 red. This is the color which is used later when properly formatting this image.
</p>

<p>
First you have satellite image open in GIMP, then create a new layer for roads and when you export the image you just hide the satellite image and exported image has red roads with transparent background.
</p>

<img src="screenshots/GIMP-Layers-Satellite-Image-Roads.jpg" alt="GIMP Painting Roads Tutorial" loading="lazy" class="terrainimg">

<p>
When you paint roads make sure ROADS layer is selected so you wont paint over the satellite image.
</p>

	<h2>Pencil Brush Size</h2>

<p>
GIMP painting roads on top of satellite imagery, used 10 pixel pencil which is a bit FAT, maybe 8 or even 6 pixel pencil would have been better. Click for <a href="https://cdn.discordapp.com/attachments/802119216240656384/856648453144838164/GIMP-Painting-Roads-On-Satellite-Image-2021-06-21T213156.jpg" target="_blank">GIMP-Painting-Roads-On-Satellite-Image-2021-06-21T213156.jpg</a>.
</p>

<p>
<b>2019-05-30</b> pencil 8 pixels seems to be just tad too large for <a href="pmc-texas-rowena-8km.php" target="_blank">PMC Texas Rowena 8km</a> roads, maybe 7 or even 6 pixel would work better.
</p>

<p>
<b>2019-07-31</b> Very large highways I did with 10 pixel pencil, normal wide asphalt roads with 8 pixel, then depending on how narrow the dirt road looks in the satellite, 6 or even 4 pencil for those. Note that 4 pixel pencil is extremely small, it would fit only like dirt tracks almost like trails, you can barely fit a pickup truck on one of these tracks. Also the _weight image resolution plays its part, one location looks fine but another is narrow due the low resolution image (difficult to explain).
</p>

<p>
Click for larger image.
</p>
<a href="screenshots/GIMP-Satellite-Image-Roads-Line-Painting.jpg" target="_blank"><img src="screenshots/thumbs/GIMP-Satellite-Image-Roads-Line-Painting.jpg" alt="GIMP Painting Roads Tutorial" loading="lazy" class="terrainimg"></a>

<p>
Above screenshot shows you how pencil tool is propely setup without opacity etc. This was taken from <a href="pmc-north-dakota-greendale-4km.php">PMC North Dakota Greendale 4km</a> terrain source image so its resolution is smaller 4096 x 4096, ie it is a small terrain, for normal large terrains you need to use 8192 x 8192 pixel resolution images.
</p>

<p>
As you can see 8 pixel pencil brush seems to fit quite nicely for roads of this specific terrain. These are dirt/gravel roads and not very wide, kind of rural type roads.
</p>

<p>
Overall; if you need to choose, then make the road too wide rather than too narrow as narrow roads wont look nice in-game.
</p>

	<h2>Export Image</h2>

<p>
Roads RGB 255,0,0 red<br>
Background TRANSPARENT
</p>

<p>
That is the color setup <a href="terrain-cultivator-fruit-density-roads.php">_run_graphicsmagick_create_roads_roughdirt01.bat</a> accepts. If you didn't use proper road color or background is not transparent, the graphicsmagick bat file wont work.
</p>

<p>
Exported roads image filename: <b>satellite_texture_roads.png</b>
</p>

	<h2>OpenStreetMap Shape Files</h2>

<p>
This is not required when painting roads in GIMP, its just a different method of getting roads painted. Just for reference.
</p>

<p>
You can use <a href="https://www.openstreetmap.org/" target="_blank">OpenStreetMap (OSM)</a> shape files to create weight images for dirt and asphalt roads, except OSM data is occasionally inaccurate, sloppy poly lines which are just slightly but very annoyingly off and cause bad overlap with cultivator_density image. PMC Texas Rowena 8km OSM road painting in quick overview looked good, but more thorough zoom in inspection revealed it to be almost unusable. In <a href="https://www.pmctactical.org/arma3/" target="_blank">ArmA 3</a> you can get away with this to some degree but in FS19 you cant, when road and cultivator_density overlaps you're out of luck, it just doesn't work.
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
