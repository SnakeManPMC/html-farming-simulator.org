<!DOCTYPE html>
<html lang="en">
<head>
<title>Farming Simulator 17 Terrain Editing Tutorial - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Farming Simulator 17 Terrain Editing Tutorial - PMC Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
	<h1>PMC Farming Simulator 17 Terrain Editing Tutorial</h1>

<p>
HOWTO create and edit terrains for Farming Simulator 17 (FS17), guides and tutorials by PMC.
</p>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>

<p><a href="terrain-animals.php">Animals</a> animal buildings and configuration.</p>
<p><a href="terrain-create-basic.php">Create Basic Terrain</a> simple basic starter terrain.</p>
<p><a href="terrain-cultivator_density.php">Terrain Base Fields cultivator_density</a> creating your fields soil texture ground types (whoah, the terminology).</p>
<p><a href="terrain-design.php">Terrain Design Tips</a> essential info and tips how to design your terrains.</p>
<p><a href="terrain-field-definitions.php">Field Definitions</a> is the proper term for farmsim fields.</p>
<p><a href="terrain-field-foliage.php">Field Foliage</a> its like grass, wheat, corn, etc.</p>
<p><a href="terrain-giants-editor.php">Giants Editor</a> software to edit terrains.</p>
<p><a href="terrain-grain-bin-objects.php">Grain Bin Objects</a> farm grain bins store your grain like animal feed, human consumption or fuel, silos store silage.</p>
<p><a href="terrain-grle-converter.php">GRLE Converter</a> or grleConverter.exe as its file name is called.</p>
<p><a href="terrain-image-resolutions-goldcrest-valley.php">Image Resolutions FS17 Goldcrest Valley</a> density and other terrain image resolutions.</p>
<p><a href="terrain-image-resolutions-user-interface.php">Image Resolutions User Interface</a> PDA mapview preview image, etc.</p>
<p><a href="terrain-introduction.php">Introduction</a> to FS17 terrain editing.</p>
<p><a href="terrain-large-field-issues.php">Large Field Issues</a> its not all fun and games working on a very large fields.</p>
<p><a href="terrain-objects-import.php">Objects Import</a> HOWTO get new objects to your terrain.</p>
<p><a href="terrain-selling-points.php">Selling Points</a> is where you sell your crops, grain, eggs, milk etc.</p>
<p><a href="terrain-size-change.php">Size Change</a> HOWTO change your terrain size specifications.</p>
<p><a href="terrain-size.php">Size</a> there are various sizes for terrain, not just 2km, 4km or 8.1km.</p>
<p><a href="terrain-skybox-size.php">Skybox Size</a> HOWTO configure skybox size.</p>
<p><a href="terrain-sun-light.php">Sun Light</a> configuration.</p>

	<h2>Terrain Starter Money</h2>

<p>
Howto setup your terrain with default starter money? Doesn't appear to be any value in XML files to edit. Looks like only method is to lua script the changed money.
</p>


	<h2>Square Detail Texture Count</h2>

<p>
Each terrain square can only have four base detail textures.
</p>

	<h2>Creating Splines</h2>

<p>
Use create -> spline to create, well a spline. Then you can move and rotate it usually. If you hit INSERT key, new point in the spline is created which again can be moved around.
</p>

<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("/var/www/include/footer-start.php"); ?>
<p><a href="../index.php" class="button">PMC Farming Simulator root page</a></p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("/var/www/include/footer-end.php"); ?>
<?php include("/var/www/include/support.php"); ?>
<?php include("/var/www/include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
