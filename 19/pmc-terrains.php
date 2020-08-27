<!DOCTYPE html>
<html lang="en">
<head>
<title>PMC Terrains Farming Simulator 19 - PMC Farming</title>
<LINK href="pmc-terrains.css" rel=stylesheet type="text/css">
<META name="description" content="PMC Terrains Farming Simulator 19 - PMC Farming">
<META name="keywords" content="Terrain, Farming, Simulator, PMC, Farming">
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
<b>2020-08-16</b> PMC North Dakota Greedale 4km basic object placement (buildings, utility poles, trees) is complete! :)
</p>

<p>
Terrains listed below are work in progress, they are not finished. For example there is very little of objects like bushes, rocks, trees and buildings etc. These are not finished products!
</p>

<p>
See each terrains individual specifications for development progress and if there is none specified then it means there are no objects beside vehicle shop + selling points. Every terrain (at least the real world data ones) are functioning properly, cultivator_density, field definitions, farmland buy land option, contracts, vehicle shop, selling points, the basic features are there and no errors in the log.
</p>

<p>
For work in progress videos see <a href="https://www.youtube.com/playlist?list=PLKt0kt4BAeflG1eKIxMzWk01TM6swzpum" target="_blank">PMC Farming Simulator 19 youtube playlist</a> and live streams / reruns on <a href="https://www.twitch.tv/snakemanpmc" target="_blank">PMC Twitch channel</a>.
</p>

<p>
2020-08-13 PMC North Dakota Greendale 4km sent to other people for testing, release as soon as testers give all OK.
</p>

<p>
2020-08-07 PMC Texas Rowena 8km sent to other people for testing, release as soon as testers give all OK.
</p>

<p>
2020-08-05 PMC Texas Rowena 8km New Farmer game-mode play testing has finished. Terrain v0.1.9 works really nice now.
</p>

<p>
2020-04-13 PMC Texas Rowena 8km basic object placement (buildings, utility poles, trees) is complete! :)
</p>

<p>
2019-06-17 the re-design / re-make project was completed. I went through all the terrains in reversed alphabetical order and re-made then from scratch. Today all of them have the above mentioned features plus Texas Rowena even has all the buildings and utility poles placed as well.
</p>

<p>
2019-05-05 there was an issue with terrain scale being off, I started a huge project of re-design / re-make of all our terrains from ground up, I used no existing files, it was a total re-make.
</p>

<p>
2019-02-02 FS19 terrain development studies begun, I had earlier experience from 2018 doing FS17 terrains so it was not a fresh start.
</p>

<p>
<b>Releases</b> none of the below terrains have been publicly released. The fictional PMC Farm Lab test terrain would be ready to release but just havent got around to it. We are looking for dedicated testers for all the terrains in this page.
</p>

	<h2>Real World Data</h2>

<p>
These are made out of <a href="http://www.arcgis.com/home/webmap/viewer.html?useExisting=1" target="_blank">ArcGis world imagery</a> satellite imagery or <a href="https://www.fsa.usda.gov/programs-and-services/aerial-photography/imagery-programs/naip-imagery/" target="_blank">US National Agriculture Imagery Program (NAIP)</a> aerial imagery (we mostly use US NAIP now) and <a href="https://www.usgs.gov/core-science-systems/national-geospatial-program/national-map" target="_blank">US National Elevation Dataset (NED)</a> 10 meter resolution heightmap data. These are real world farming areas, some functionality like vehicle shop and sell points have been placed to suitable locations for FS19 where they would not be in real life.
</p>

<p>
Heightmap is accurate to 10 meter resolution. This means that the heightmap has realistic elevations. PMC terrain heightmaps are as good as they can be made out of US NED data.
</p>

	<h2>Design</h2>

<p>
<b>Fields</b> (field definitions) are made out of large rectangles which do not cover the satellite texture field edges precisely. We will improve field definition details on a later date but because their nature being mostly cosmetic, their priority is very low.
</p>

<p>
However cultivated / plowed field edges are painted in gimp (cultivator_density) and cover the actual satellite imagery pretty good, courseplay for example uses this field edge instead of field definition.
</p>

<p>
Please note that field hectare count comes from field definition rectangle and not from the actual cultivator_density area, every field listed in individual terrain pages is larger in-game (some are tiny amount and others maybe three four times the sizes).
</p>

<p>
<b>Roads</b> are just painted textures not a real objects as most terrains do. For example our roads are just asphalt texture, dirt/gravel texture without any center line or anything. In the future we would like to add road meshes.
</p>

<p>
<b>Farms</b> like player farm is built using placeables, if players want they can sell the placeables to remove all buildings/bin-silos. This also goes to few other farms in the terrain to allow players in multiplayer to create several different farms. We are still finding our way, the game-play design for this like should we leave the terrain mostly empty of buildings or should we FS17 alike spoon feed players their pre-built farms... difficult question as so many players like different things.
</p>

<p>
If you have any feedback regarding multiplayer farm buildings, please let us know.
</p>

<p>
<b>Terrain Size</b> is listed below on each terrain specifically, however mostly we go with 8192 meters x 8192 meters which is 8.1 kilometers x 8.1 kilometers (or just 8km in short) which is very large as we do not like small terrains, we need real world sizes and room to breathe! :)
</p>

<p>
Below green texts are links, click them to open more detailed terrain pages with screenshots etc.
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
This enormous 32km x 32km terrain started as kind of a joke, like would it work, could I do this. The goal was never to create properly done terrain with all the sell points, roads, fields and all that, this is more like a technology demonstration that such huge size works, with some limitations like density images low resolution.
</p>

<p>
Terrain has vehicle shop and one sell point in the center, then one enormous sugar beet field surrounding it covering the whole 32km x 32km terrain area from one edge to another. Oddly enough, this terrain actually works (within the mentioned limits).
</p>

<p>
This was made using cultivator and fruit density images from 8km terrain so the fields and crop handling is very inaccurate. Because of the inaccuracy while this terrain technically does work as proven, it is really not suitable for enjoyable game-play. Unless giants fixes their engine to allow better density image accuracy, we are stuck with about 15km - 20km terrains being the largest enjoyable ones.
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
