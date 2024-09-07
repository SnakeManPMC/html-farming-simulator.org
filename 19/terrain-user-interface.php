<!DOCTYPE html>
<html lang="en">
<head>
<title>User Interface Farming Simulator 19 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="User Interface Farming Simulator 19 - PMC Farming">
<META name="keywords" content="Terrain, User Interface, PMC, Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
<h1><b>PMC Farming Simulator Terrain User Interface</b></h1>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>User Interface Image Resolutions</h2>

<p>
map_preview.png resolution is 2048 x 1024.
</p>

<p>
pda_map.png resolution is what your terrain is, 2048, 4096, 8192. Or is it... 2048 seemed to work fine on larger terrains(?).
</p>

<p>
Preview and map images are once again NOT FLIPPED, hehe. Do them as is, no need to flip vertically anymore like in FS17.
</p>

<p>
Remember to delete the source PNG image next to the destination DDS which is what FS19 reads, if you leave map_preview.png or pda_map.png into your terrain directories, FS19 will give log warning about raw format image.
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
