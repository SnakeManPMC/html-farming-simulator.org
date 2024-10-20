<!DOCTYPE html>
<html lang="en">
<head>
<title>Vehicle Shop Farming Simulator 19 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Vehicle Shop Farming Simulator 19 - PMC Farming">
<META name="keywords" content="Terrain, Vehicle Shop, PMC, Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
<h1><b>PMC Farming Simulator Terrain Vehicle Shop</b></h1>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>Import Vehicle Shop</h2>

<p>
Vehicle shop is possibly one of the most important objects because if you cant buy vehicles... you cant do nothing except walk around. Vehicle shop is the 3D model building which is just cosmetic eyecandy without any function and then the transformgroups which create the functionality.
</p>

<p>
Open mapUS.i3d and select gameplay -> vehicleShopGameplay and then file -> export selection, choose directory and use the same vehicleShopGameplay.i3d filename to save.
</p>

<p>
Select placeholders -> vehicleSellingPoint and export to like vehicleShopTriggers.i3d or similar name.
</p>

<p>
Now you are ready to import these into your own terrain, place them as you please. Only thing to be careful is to set the storePlace1Start and storePlace1End so that there are no other objects in the way. There are total of three storePlace?Start transformgroups.
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
