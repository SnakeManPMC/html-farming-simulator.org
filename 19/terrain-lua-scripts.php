<!DOCTYPE html>
<html lang="en">
<head>
<title>LUA Scripts Farming Simulator 19 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="LUA Scripts Farming Simulator 19 - PMC Farming">
<META name="keywords" content="Terrain, LUA Scripts, PMC, Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
<h1><b>PMC Farming Simulator Terrain LUA Scripts</b></h1>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>Lua Scripts</h2>

<p>
GE scripts paint_terrain_by_spline2.lua works with mapDE files:
</p>

<pre>
--[[ gray looking asphalt (not very dark tar colored) --]]
	local mLayerId = 80
	local mLayerIdL = 80
	local mLayerIdR = 80
	local mSideCount = 4
--[[ dirt gravel brown --]]
	local mLayerId = 00
	local mLayerIdL = 00
	local mLayerIdR = 00
	local mSideCount = 3
</pre>

<p>
Numbers are: 4 grass, 28 cobblestone kinda, 34 gravel, 56 kinda asfalt very light color, 80 asfalt. note that if your main spline start point is rotated like -90 then the LUA will make oddly very narrow texture paint line, so dont rotate the main spline start.
</p>

<p>
This one works with mapUS files:
</p>
<pre>
--[[ asphalt --]]
	local mLayerId = 44
	local mLayerIdL = 45
	local mLayerIdR = 46
	local mSideCount = 4
--[[ dirt / gravel --]]
	local mLayerId = 08
	local mLayerIdL = 08
	local mLayerIdR = 08
	local mSideCount = 3
</pre>

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
