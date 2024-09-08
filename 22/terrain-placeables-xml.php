<!DOCTYPE html>
<html lang="en">
<head>
<title>Placeables.xml Farming Simulator 22 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Placeables.xml Farming Simulator 22 - PMC Farming">
<META name="keywords" content="Terrain, Placeables.xml, Objects, FS22, PMC, Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
<h1><b>Placeables.xml Farming Simulator 22 - PMC Farming</b></h1>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>Basics Of Placeables.XML</h2>

<p>
<b>2022-02-14T00:41:00Z</b> updated. Game engine v1.2.0.2 used.
</p>

<p>
See also <a href="../19/terrain-placeable-objects.php">Farming Simulator 19 placeable objects</a> page.
</p>

<p>
Use placeables.xml to create objects which appear in New Farmer game-mode owned by the players farm.
</p>

<p>
placeables.xml:
</p>
<pre>
&lt;placeable mapBoundId="gasStation" filename="data/placeables/mapUS/gasStation/gasStation.xml" position="COORDS" rotation="COORDS" /&gt;
&lt;placeable mapBoundId="farmStorageSilo1" filename="data/placeables/meridian/flatBottomBin3608/flatBottomBin3608.xml" position="COORDS" rotation="COORDS" defaultFarmProperty="true" farmId="1" /&gt;
&lt;placeable mapBoundId="40x60MachineShed01" filename="$moddir$FS22_PlaceableCBJsheds/40x60shedWht.xml" position="COORDS" rotation="COORDS" /&gt;
</pre>

<p>
storeItems.xml:
</p>
<pre>
&lt;storeItem xmlFilename="$data/placeables/mapUS/gasStation/gasStation.xml" /&gt;
&lt;storeItem xmlFilename="$data/placeables/meridian/flatBottomBin3608/flatBottomBin3608.xml" /&gt;
</pre>

<p>
When you load placeables.xml using $moddir$ from external 3rd party mod, you do not need to set storeItems.xml entry for it as the (properly made) mod already has done it.
</p>

<p>
Reference for existing giants placecable config file names:
</p>
<pre>
data\placeables\meridian\fertilizerBins1620\fertilizerBins1620.xml
data\placeables\meridian\flatBottomBin3608\flatBottomBin3608.xml
data\placeables\meridian\flatBottomBin3609\flatBottomBin3609.xml
data\placeables\meridian\fuelTank25000L\fuelTank25000L.xml
data\placeables\meridian\liquidFlatBottomTank1630\liquidFlatBottomTank1630.xml
data\placeables\mapUS\farmBuildings\farmBarn\farmBarn02.xml
data\placeables\mapUS\farmBuildings\farmHouse\farmHouse02.xml
data\placeables\mapUS\farmBuildings\farmGarage\farmGarage01.xml
data\placeables\mapUS\farmBuildings\farmShed\farmShed.xml
</pre>

<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("/var/www/include/footer-start.php"); ?>
<p><a href="map-making-tutorial.php" class="button">PMC Farming Simulator 22 Map Making Tutorial page</a></p>
<p><a href="../index.php" class="button">PMC Farming Simulator root page</a></p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("/var/www/include/footer-end.php"); ?>
<?php include("/var/www/include/support.php"); ?>
<?php include("/var/www/include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
