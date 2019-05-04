<!DOCTYPE html>
<html lang="en">
<head>
<title>LUA Scripts Farming Simulator 19 - PMC Tactical</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="LUA Scripts Farming Simulator 19 - PMC Tactical">
<META name="keywords" content="Terrain, LUA Scripts, PMC, Tactical">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<!-- google ads -->
<?php include("../include/google-ads.php"); ?>
<h1><b>PMC Tactical Farming Simulator Terrain LUA Scripts</b></h1>
</header>

<section>
	<h2>Lua Scripts</h2>

<p>
GE scripts paint_terrain_by_spline2.lua <a href="https://www.fs-uk.com/forum/index.php?topic=205310.0" target="_blank">fs-uk.com/forum topic</a>
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
    local mSideCount = 2
</pre>

<p>
Numbers are: 4 grass, 28 cobblestone kinda, 34 gravel, 56 kinda asfalt very light color, 80 asfalt. note that if your main spline start point is rotated like -90 then the LUA will make oddly very narrow texture paint line, so dont rotate the main spline start.
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
