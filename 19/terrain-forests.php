<!DOCTYPE html>
<html lang="en">
<head>
<title>Forests Farming Simulator 19 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Forests Farming Simulator 19 - PMC Farming">
<META name="keywords" content="Terrain, Forests, PMC, Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
<h1><b>PMC Farming Simulator Terrain Forests</b></h1>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>Creating Forests</h2>

<p>
Select a tree, use CTRL-B, press and hold LMB, move mouse and hit left CTRL key to place the tree. GE v8.1 (final) introduced interactive placement new features, see below. Still with these features, creating forests is extremely frustrating like most things in GE, but admittedly random scale is nice improvement to the previous.
</p>

<p>
Spline placement for forest creation is... not perfect but helps a lot for the randomness. First you create a spline, then you use the spline_placement lua script with specific parameters to create string of trees randomly placed along the spline. This is no arma3 forest creation using shape files, but its as close we can get in <a href="terrain-giants-editor.php">Giants Editor (GE)</a>.
</p>

<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("/var/www/include/footer-start.php"); ?>
<?php include("../include/fs19-terrain-editing-tutorial-footer.php"); ?>
<?php include("/var/www/include/footer-end.php"); ?>
<?php include("/var/www/include/support.php"); ?>
<?php include("/var/www/include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
