<!DOCTYPE html>
<html lang="en">
<head>
<title>Giants GRLE Converter Farming Simulator 17 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Giants GRLE Converter Farming Simulator 17 - PMC Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
	<h1>Giants GRLE Converter Farming Simulator 17 - PMC Farming</h1>

<p>
Terrain Editing Tutorial: Giants GRLE Converter for Farming Simulator 17 (FS17) by PMC.
</p>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
<?php include("/var/www/include/support.php"); ?>
	<h2>Giants GRLE Converter FS17</h2>

<p>
FS17 terrain editing, HOWTO convert GDM and GRLE giants format images to PNG using GRLEConverter program.
</p>

<p>
Get it from <a href="https://gdn.giants-software.com" target="_blank">Giants Developer Network (GDN)</a>. You should know that <a href="terrain-giants-editor.php">Giants Editor FS17</a> will convert PNG to proper either GRLE or GDM when saving a terrain file.
</p>

<p>
Convert GRLE (or GDM heh) are cultivator_density and fruit_density. Convert them to PNG and delete the original files, then load your map01 with Giants Editor and just save it, that generates new GRLE/GDM cultivator_density and fruit_density files.
</p>

<p>
Convert list:
</p>
<ul>
<li>cultivator_density</li>
<li>fruit_density</li>
<li>forestGrassDark_density</li>
<li>infoLayer</li>
<li>terrainDetailHeight_density</li>
<li>tipColInfoLayer</li>
<li>townDecoGrass_density</li>
</ul>

<p>
GRLEConverter only converts GDM and GRLE to PNG, it does not convert PNG to GDM, just use GE for that.
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
