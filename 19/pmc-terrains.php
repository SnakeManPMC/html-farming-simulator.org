<!DOCTYPE html>
<html lang="en">
<head>
<title>PMC Terrains Farming Simulator 19 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="PMC Terrains Farming Simulator 19 - PMC Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<h1><b>PMC Terrains Farming Simulator 19</b></h1>
</header>

<section>
	<h2>PMC Terrain News</h2>

<p>
<b>2022-06-08T17:59:00Z</b> New terrain announced <a href="pmc-ohio-arcanum-8km.php">PMC Ohio Arcanum 8km</a>.
</p>

<p>
Read more news from <a href="../news.php">PMC Farming News page</a>.
</p>

<p>
Latest work in progress videos see <a href="https://www.youtube.com/playlist?list=PLKt0kt4BAeflG1eKIxMzWk01TM6swzpum" target="_blank">PMC Farming Simulator 19 youtube playlist</a>.
</p>

	<h2>Real World Data</h2>

<p>
PMC terrains are made out of <a href="http://www.arcgis.com/home/webmap/viewer.html?useExisting=1" target="_blank">ArcGis world imagery</a> satellite imagery or <a href="https://www.fsa.usda.gov/programs-and-services/aerial-photography/imagery-programs/naip-imagery/" target="_blank">US National Agriculture Imagery Program (NAIP)</a> aerial imagery (we mostly use US NAIP now) and <a href="https://www.usgs.gov/core-science-systems/national-geospatial-program/national-map" target="_blank">US National Elevation Dataset (NED)</a> 10 meter resolution heightmap data. These are real world farming areas, some functionality like vehicle shop and sell points have been placed to suitable locations for FS19 where they would not be in real life.
</p>

<p>
Heightmap is accurate to 10 meter resolution which means that it got realistic elevations. These heightmaps are not make belief hand wavey "close enough" free hand google earth copy pastes, PMC real world data heightmaps are as accurate as you can get from public data (US NED 10m).
</p>

<p>
Fields, roads, farm yards, rail roads etc are accurately located as they are in real life. We place building for building accuracy, with obviously dealing with limitations of often times not having properly sizes buildings (for example huge cow sheds or grain elevators etc). For farm yards and other populated places we try to place tree for tree, meaning every tree in farm yards for example is there like it is in real life.
</p>

<p>
PMC terrains are as real as humanly possible :)
</p>

	<h2>Design</h2>

<p>
<b>Fields</b> field definitions are made out of large simple shapes which do not cover the satellite imagery field edges precisely. <i>We will improve field definition details on a later date</i> (add more corner pieces) but because their nature being mostly cosmetic, their priority is very low. Only AI is using field definitions anyways and contracts do work on all PMC terrains. PMC North Dakota Greendale 4km terrain has pretty detailed field definition coverage which is our first terrain to get more corner pieces added.
</p>

<p>
However cultivated / plowed field edges are painted in GIMP (cultivator_density) and cover the actual satellite imagery very accurately, courseplay for example uses this field edge instead of field definition.
</p>

<p>
Please note that field hectare count comes from field definition rectangle and not from the actual cultivator_density area, every field listed in individual terrain pages is larger in-game (some are tiny amount and others maybe three four times the sizes).
</p>

<p>
<b>Roads</b> are just painted terrain detail textures not a real objects as most terrains do. For example our roads are just asphalt texture, dirt/gravel texture without any center line or anything. In the future we would like to add road meshes.
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
We love BIG FIELDS and BIG MAPS ;)
</p>

<p>
<b>Game-play Experience</b> is <i>very</i> important when editing terrains. I have played PMC terrains endlessly for example <a href="stories-from-zero-grande-gardens.php">PMC Grande Gardens 16km Start From Zero</a> savegame in 2021-01-18 has 950 hours in it, that is just one savegame, I have several other savegames on other terrains (texas rowena 566hrs, north dakota greendale 281hrs etc) where I gathered knowledge and experience of what works in-game and what doesn't. I do bunch of edits, then start to test for days sometimes weeks maybe even months, collecting invaluable data so to speak of the game-play experience. If something doesnt work, it will be fixed / tweaked, then more game-play testing. PMC terrains are not put together hastily, they are made with care to the game-play, what works and what doesn't.
</p>

	<h2>Current Development Status</h2>

<p>
Terrains listed below are work in progress, they are not finished. However released terrains are very enjoyable to play. PMC does not release "broken" or un-playable terrains (obviously missed bugs will be fixed as soon as possible).
</p>

<p>
See each terrains individual specifications for development progress and if there is none specified then it means there are no objects beside vehicle shop + selling points. Every terrain (at least the real world data ones) are functioning properly, cultivator_density, field definitions, farmland buy land option, contracts, vehicle shop, selling points, the basic features are there and no errors in the log.
</p>

<p>
Released terrains 2021-01-18: PMC Eternal Sugarbeet Damnation 32km, PMC Farm Lab, PMC North Dakota Greendale 4km, PMC Texas Rowena 8km.
</p>

	<h2>Terrains - Real World Data</h2>

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
<p><a href="pmc-ohio-arcanum-8km.php">PMC Ohio Arcanum 8km</a></p>
<p><a href="pmc-ohio-westhope-8km.php">PMC Ohio Westhope 8km</a></p>
<p><a href="pmc-ohio-wheatville-8km.php">PMC Ohio Wheatville 8km</a></p>
<p><a href="pmc-texas-hereford-16km.php">PMC Texas Hereford 16km</a></p>
<p><a href="pmc-texas-red-springs-8km.php">PMC Texas Red Springs 8km</a></p>
<p><a href="pmc-texas-rockwood-8km.php">PMC Texas Rockwood 8km</a></p>
<p><a href="pmc-texas-rowena-8km.php">PMC Texas Rowena 8km</a></p>

	<h2>Terrains - Fictional</h2>

<p>
These are fictional free hand created terrains, not based on any real world location or have any GEO specific location like america or europe etc.
</p>

<p><a href="pmc-eternal-sugar-beet-damnation-32km.php">PMC Eternal Sugar Beet Damnation 32km</a></p>
<p><a href="pmc-farm-lab.php">PMC Farm Lab</a></p>
<p><a href="pmc-grande-gardens-16km.php">PMC Grande Gardens 16km</a></p>

</section>

<footer>
<p><a href="../index.php" class="button">PMC Farming Simulator root page</a></p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("../include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
