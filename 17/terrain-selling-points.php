<!DOCTYPE html>
<html lang="en">
<head>
<title>Terrain Selling Points Farming Simulator 17 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Terrain Selling Points Farming Simulator 17 - PMC Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
	<h1>Terrain Selling Points Farming Simulator 17 - PMC Farming</h1>

<p>
Terrain Editing Tutorial: Terrain Selling Points for Farming Simulator 17 (FS17) by PMC.
</p>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
<?php include("/var/www/include/support.php"); ?>
	<h2>Terrain Selling Points FS17</h2>

<p>
HOWTO setup your terrain with grain / crop and animal goods sell points.
</p>

<p>
In order to make money you need to sell crops so where to sell them. Simply place unloadingStationFarm transformgroup, add unique name for gameplay -&gt; IN -&gt; triggerPos -&gt; index, change xmlFile to point maps/ instead of $data/maps/, then write the index name into maps/map01.xml file as show below.
</p>
<pre>
tipTrigger index="PMC_Grain_Elevator" stationName="PMC Sell Point 1"
</pre>

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
