<!DOCTYPE html>
<html lang="en">
<head>
<title>Sale Points Farming Simulator 19 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Sale Points Farming Simulator 19 - PMC Farming">
<META name="keywords" content="Terrain, Sale Points, PMC, Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<!-- google ads -->
<?php include("../include/google-ads.php"); ?>
<h1><b>PMC Farming Simulator Terrain Sale Points</b></h1>
</header>

<section>
	<h2>Adding Sale Points</h2>

<p>
- GE file -> import -> FS19_root -> data -> placeables -> mapDE -> sellingstationgeneric<br>
- create dir to your terrain maps\placeables\sellingpoints\<br>
- copy from the game placeables dir sellingStationGeneric.xml and sellingStationPort01.xml to your sellingpoints dir<br>
- edit the xml stationName to your liking, like PMC Grain Sales INC<br>
- rename xml to like PMC_sellingStationGrain.xml and PMC_sellingStationPoorMans.xml<br>
- edit PMC_sellingStationPoorMans.xml, copy paste milk line and rename it to "cotton", now this sellpoint accepts cotton too<br>
- edit YourTerrain\defaultItems.xml and add mapBoundId for names of your xml files without the file extension<br>
- move the sellingstationgeneric object in GE where you want first selling point, then check the attributes -> transform -> translate<br>
- copy paste translate coordinates to defaultitems.xml position= part, also check rotation if you want<br>
- once done for both objects, delete the objects from GE as you dont need them anymore<br>
- edit defaultitems.xml filename part to say $moddir$MyMap_2km/maps/Placeables/Sellingpoints/PMC_sellingStationGrain.xml and the poormans as well
</p>

<p>
Above example uses PMC_ tagging for the file names, that is not really necessary but it helps a lot to identify the files you're edited. You should use your own tag if you so choose.
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
