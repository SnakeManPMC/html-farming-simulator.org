<!DOCTYPE html>
<html lang="en">
<head>
<title>Global Mapper Painted Roads Farming Simulator 19 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Global Mapper Painted Roads Farming Simulator 19 - PMC Farming">
<META name="keywords" content="Terrain, Global Mapper Painted Roads, PMC, Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
<h1><b>PMC Farming Simulator Terrain Global Mapper Painted Roads</b></h1>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>Global Mapper Painted Roads</h2>

<p>
This info requires you to know how to use openstreetmap shapes in global mapper, check <a href="https://pmc.editing.wiki/doku.php?id=arma3:terrain:real-world-data-tutorial" target="_blank">PMC Editing Wiki: ArmA 3 Real World Data Terrain Tutorial</a>.
</p>

<p>
Global Mapper Painted Openstreetmap Roads:<br>
- crop the roads as usual<br>
- select all road features<br>
- RMB -> edit - edit selected features<br>
- tick modify name, give no name<br>
- tick specify style to use when rendering features<br>
- style solid, width READ_NOTES_ABOUT_WIDTH pixels, color black<br>
- background line width READ_NOTES_ABOUT_WIDTH pixels, color black<br>
- enable user created feature grid and export satellite image normally
</p>

<p>
GIMP Color Replace:<br>
- colors -> map -> color exchange<br>
- swap background color to black and road color to white
</p>

<p>
Road width 4 pixels transforms into FS19 as very narrow dirt road where a lizard pickup fits just nicely, you cant have two cars pass each other in this road width, its too narrow. So you either have to separate asphalt roads in global mapper openstreetmap stage, or just go with much wider roads in general. Any tractor with large implement would not fit into 4 pixel road width, it really is the narrowest small dirt road you can imagine, almost a path, if you drive large size combine on road like this its almost twice as wide as the road heh. Experiment the values, but 8 pixels would be a good start.
</p>

<p>
You can paint weight, cultivator and fruit density images in gimp, just remember to keep the weight images as grayscale 8 bit single channel format (no alpha channel), density images are RGB.
</p>

<p>
Error: Terrain weight map 'roughDirt01_weight.png' incorrect format. Must be 8bit single channel. Fix this with gimp -> layer -> transparency -> remove alpha channel, this makes your image single channel.
</p>

<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("/var/www/include/footer-start.php"); ?>
<p><a href="terrain-editing-tutorial.php" class="button">PMC Farming Simulator Terrain Editing Tutorial page</a></p>
<p><a href="../index.php" class="button">PMC Farming Simulator root page</a></p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("/var/www/include/footer-end.php"); ?>
<?php include("/var/www/include/support.php"); ?>
<?php include("/var/www/include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
