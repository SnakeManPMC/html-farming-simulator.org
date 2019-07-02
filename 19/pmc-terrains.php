<!DOCTYPE html>
<html lang="en">
<head>
<title>PMC Terrains Farming Simulator 19 - PMC Tactical</title>
<LINK href="pmc-terrains.css" rel=stylesheet type="text/css">
<META name="description" content="PMC Terrains Farming Simulator 19 - PMC Tactical">
<META name="keywords" content="Terrain, Farming, Simulator, PMC, Tactical">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<!-- google ads -->
<?php include("../include/google-ads.php"); ?>
<h1><b>PMC Terrains Farming Simulator 19</b></h1>
</header>

<section>
	<h2>Work In Progress</h2>

<p>
2019-06-17 Terrains listed below are work in progress, they are nowhere near finished. For example there is very little of objects like bushes, rocks, trees and buildings etc. These are not finished products!
</p>

<p>
See each terrains individual specifications for development progress and if there is none specified then it means there literally are no objects. Every terrain (at least the real world data ones) are functioning properly, cultivator_density, field definitions, farmland buy land option, contracts, vehicle shop, sale points, the basic features are there and no errors in the log.
</p>

<p>
2019-05-05 it was discovered by Optic_killshot that the scale of the fairmount north dakota satellite imagery is all wrong, the roads should have been a mile apart (1.6km) but they were far more. I investigated and quickly figured out that indeed global mapper mercator projection causes some weird distance distortion, meaning when I create 8192 meter grid box it actually comes out very small like 5.3km or similar. Anyways, today I deleted the existing real world data terrains (not fictional ones) and started to re-create them with a <i>proper dimensions</i> using UTM projection. Sucks, but you got to fix your mess. Big thanks for Optic_killshot for pointing out this serious issue for me!
</p>

<p>
2019-06-17 the re-design / re-make project was completed. I went through all the terrains in reversed alphabetical order and re-made then from scratch. Today all of them have the above mentioned features plus Texas Rowena even has all the buildings and utility poles placed as well.
</p>

<p>
<b>Releases</b> as of 2019-06-17 none of the below terrains have been publicly released. The fictional PMC Farm Lab test terrain would be ready to release but just havent got around to it. We are looking for dedicated testers for all the terrains in this page.
</p>

<p>
For work in progress videos see <a href="https://www.youtube.com/playlist?list=PLKt0kt4BAeflG1eKIxMzWk01TM6swzpum" target="_blank">PMC FS19 youtube playlist</a>.
</p>

	<h2>Real World Data</h2>

<p>
These are made out of <a href="http://www.arcgis.com/home/webmap/viewer.html?useExisting=1" target="_blank">ArcGis world imagery</a> satellite imagery or <a href="https://www.fsa.usda.gov/programs-and-services/aerial-photography/imagery-programs/naip-imagery/" target="_blank">US NAIP</a> aerial imagery (we mostly use US NAIP now) and <a href="https://www.usgs.gov/core-science-systems/national-geospatial-program/national-map" target="_blank">US National Elevation Dataset (NED)</a> 10 meter resolution heightmap data. These are real world farming areas, some functionality like vehicle shop and sale points have been placed to suitable locations for FS19 where they would not be in real life.
</p>

<p>
Heightmap is accurate to 10 meter resolution but Farming Simulator 19 (FS19) only supports 0 meters to 255 meters elevations, it does not recognize real world locations like UTM projection or any of that. This means that while the heightmap is realistic, it is not exactly like in real life as we had to use unprecise and outdated grayscale image as the heightmap (please forward complaints about outdated technology to Giants Software heh). PMC terrain heightmaps are as good as they can be made out of US NED data.
</p>

	<h2>Design</h2>

<p>
<b>Fields</b> (field definitions) are made out of large rectangles which do not cover the satellite texture field edges precisely, this is because we want to allow players to plough their fields larger and to their liking, if they dont want then fine the fields work OK as is. This gives players more opportunities to be creative and just have something to do, always so satisfying feeling when you know it was you who plow shaped that field larger. We will improve field definition details on a later date but because their nature being mostly cosmetic, their priority is very low.
</p>

<p>
However cultivated / plowed field edges are painted in gimp (cultivator_density) and cover the actual satellite imagery pretty good, courseplay for example uses this field edge instead of field definition.
</p>

<p>
Please note that field hectare count comes from field definition rectangle and not from the actual cultivator_density area, every field listed in individual terrain pages is larger in-game (some are tiny amount and others maybe three four times the sizes).
</p>

<p>
<b>Roads</b> are just painted textures not a real objects as most terrains do. For example our roads are just asphalt texture, dirt/gravel texture without any center line or anything.
</p>

<p>
<b>Farms</b> like player farm is empty so that player can build it himself using placeables. This also goes to other farms in the terrain to allow players in multiplayer to create several different farms. We are still finding our way, the game-play design for this like should we leave the terrain mostly empty of buildings or should we FS17 alike spoon feed players their pre-built farms... difficult question as so many players like different things.
</p>

<p>
If you have any feedback regarding multiplayer farm buildings, please let us know.
</p>

<p>
<b>Terrain Size</b> is listed below on each terrain specifically, however mostly we go with 8192 meters x 8192 meters which is 8.1km x 8.1km (or just 8km in short) which is very large as we do not like small terrains, we need real world sizes and room to breathe! :)
</p>

<p><a href="pmc-iowa-garden-city-8km.php">PMC Iowa Garden City 8km</a></p>
<p><a href="pmc-iowa-ringsted-8km.php">PMC Iowa Ringsted 8km</a></p>
<p><a href="pmc-kentucky-middleton-8km.php">PMC Kentucky Middleton 8km</a></p>
<p><a href="pmc-minnesota-elrosa-8km.php">PMC Minnesota Elrosa 8km</a></p>
<p><a href="pmc-minnesota-lowry-8km.php">PMC Minnesota Lowry 8km</a></p>
<p><a href="pmc-montana-shelby-8km.php">PMC Montana Shelby 8km</a></p>
<p><a href="pmc-north-dakota-fairmount-8km.php">PMC North Dakota Fairmount 8km</a></p>
<p><a href="pmc-north-dakota-greendale-4km.php">PMC North Dakota Greendale 4km</a></p>
<p><a href="pmc-north-dakota-sonora-8km.php">PMC North Dakota Sonora 8km</a></p>
<p><a href="pmc-north-dakota-wahpeton-16km.php">PMC North Dakota Wahpeton 16km</a></p>
<p><a href="pmc-ohio-westhope-8km.php">PMC Ohio Westhope 8km</a></p>
<p><a href="pmc-ohio-wheatville-8km.php">PMC Ohio Wheatville 8km</a></p>
<p><a href="pmc-texas-hereford-16km.php">PMC Texas Hereford 16km</a></p>
<p><a href="pmc-texas-red-springs-8km.php">PMC Texas Red Springs 8km</a></p>
<p><a href="pmc-texas-rockwood-8km.php">PMC Texas Rockwood 8km</a></p>
<p><a href="pmc-texas-rowena-8km.php">PMC Texas Rowena 8km</a></p>
<!--
<p><a href="pmc-.php">PMC </a></p>
-->

	<h2>Fictional</h2>

<p>
These are fictional free hand created terrains, not based on any real world location or have any geo specific location like america or europe etc.
</p>

<p><a href="pmc-grande-gardens-16km.php">PMC Grande Gardens 16km</a></p>

	<h2>PMC Farm Lab</h2>

<p>
This is mod testing terrain, designed specifically to make it easier to test various mods (obviously not terrain mods as... this is... a terrain heh). For example simple thing as having vehicle shop real close to fields where to test your implements etc.
</p>

<p>
Terrain size 2km x 2km.
</p>

<p>
Included fields:
</p>
<ul>
<li>Cultivated</li>
<li>Ploughed</li>
<li>Wheat ready to harvest</li>
<li>Corn ready to harvest</li>
<li>Sugar Beets ready to harvest</li>
<li>Potatoes ready to harvest</li>
<li>Grass ready to harvest</li>
</ul>

<p>
Includes small forest area for logging. Grain silo bin with 10,000 liters of all (or at least many) crop types.
</p>

	<h2>PMC Eternal Sugar Beet Damnation 32km</h2>

<p>
Largest terrain in Farming Simulator history, size 32 kilometers x 32 kilometers. Field 1 (field01) : 107,331.031 ha
</p>

<p>
Started off as a joke during Optic_killshot's twitch live stream when we were hauling endless loads of sugar beets on Hankinson, ND. So during one of this streams I started to create this terrain and when it was done couple of hours later we tested it on multiplayer (Optic_killshot hosted) with Optic and Swath. We had a great fun doing so pretty much laughing all the time about how hysterically huge this terrain is.
</p>

<p>
Terrain has vehicle shop and one sale point in the center, then one enormous sugar beet field surrounding it covering the whole 32km x 32km terrain area from one edge to another. Oddly enough, this terrain actually works. Watch beginning from roghly 4h 47min part <a href="https://www.twitch.tv/videos/423730468" target="_blank">Optic_killshot twitch VOD</a> (notice that this VOD will disappear by twitch auto delete after some time). In voice comms you hear Optic_killshot and Swath.
</p>

<p>
This was made using cultivator and fruit density images from 8km terrain so the fields and crop handling is very inaccurate. Because of the inaccuracy while this terrain technically does work as proven, it is really not suitable for enjoyable game-play. Unless giants fixes their engine to allow better density image accuracy, we are stuck with 16km terrains being the largest enjoyable ones.
</p>

<!--
	<h2></h2>

<p>
</p>

<a href="" target="_blank"></a>

<ul>
<li></li>
</ul>
-->
</section>

<footer>
<p><a href="../index.php" class="button">PMC Farming Simulator root page</a></p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("../include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
