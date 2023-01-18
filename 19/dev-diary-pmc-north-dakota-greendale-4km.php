<!DOCTYPE html>
<html lang="en">
<head>
<title>Developer Diary PMC North Dakota Greendale 4km Farming Simulator 19 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Developer Diary PMC North Dakota Greendale 4km Farming Simulator 19 - PMC Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<!-- google ads -->
<?php include("../include/google-ads.php"); ?>
<h1><b>Developer Diary PMC North Dakota Greendale 4km Farming Simulator 19 - PMC Farming</b></h1>
</header>

<section>
	<h2>Dev Diary PMC North Dakota Greendale 4km</h2>

<p>
This is dev diary for <a href="pmc-north-dakota-greendale-4km.php">PMC North Dakota Greendale 4km</a> Farming Simulator 19 (FS19) real world data American terrain.
</p>

<p>
<i>Special note: this dev diary was not written live when terrain was created, a lot of daily editing text is missing from the 2019 and 2020.</i>
</p>

<p>
2021-01-03 Precision Farming soil map painted on top of <a href="terrain-heightmap.php">heightmap</a> image.
</p>


	<h2>2021-01-05 Selling Points And Forests</h2>

<p>
2021-01-05T18:04:00Z New editing day has started. Took backups from PMC North Dakota Greendale 4km terrain, development continues.
</p>

<p>
2021-01-05 Todays plan is to first make a list of everything that needs fixing like critical bugs or serious game-play issues, then <a href="terrain-giants-game-mode-review.php">New Farmer game-mode</a> defaultVehicles.xml need to be created.
</p>

<p>
Started by moving <a href="terrain-selling-points.php">selling point</a> 5 from terrain edge to more center area so it will show up in ESC mapview (icons disappear if they are too close to terrain edge).
</p>

<p>
2021-01-05T1842 Started to go through <a href="terrain-forests.php">vegetation forest objects</a> on US NAIP image, to make sure every single treeline and even individual tree is placed, currently there are couple of treelines that are still missing.
</p>

<p>
2021-01-05T21:47:00Z Finished tree object placement! There was few areas which I missed on my initial object placement, now I went through satellite imagery systematically and placed all trees, tree lines and forests.
</p>


	<h2>2021-01-07 Dealership Yard And Silos</h2>

<p>
2021-01-07T16:42:00Z New editing day has started. <a href="terrain-vehicle-shop.php">Dealership (vehicle shop)</a> vehicle orientation and yard capacity tweaked so that maximum amount of stuff can be purchased without getting that shop yard full dialog.
</p>

<a href="screenshots/PMC-North-Dakota-Greendale-4km-2021-01-07T1637.jpg" target="_blank"><img src="screenshots/thumbs/PMC-North-Dakota-Greendale-4km-2021-01-07T1637.jpg" class="terrainimg" loading="lazy" alt="PMC North Dakota Greendale 4km Farming Simulator 19 Screenshot"></a>

<p>
Players farm bin silo now accepts solid fertilizer, lime and seeds.
</p>

<p>
Roads ground textures missing from players farm yard, painted them using spline and my new mapUS roughDirt settings.
</p>

<p>
2021-01-08T02:03:00Z Removed tree from a <a href="terrain-cultivator_density-gimp.php">cultivator_density</a> on F07 south central (or south east).
</p>

<p>
Ended up tweaking cultivator_density image in GIMP as it was painted over arcgis world imagery but currently I'm using US NAIP so there was slight offset, fields crept on roads on few locations, not badly but just annoyingly. Had to adjust many many <a href="terrain-field-definitions.php">field definitions</a> because of this, also added few more corner pieces for some that were still lacking coverage.
</p>

<p>
F29 had no semi truck access to it as it was cut off by a creek bed ditch thingy, so I added a nice heightmap elevation smoothed road to its SW corner.
</p>

<p>
2021-01-08T19:02:00Z Started to create New Farmer game-mode defaultVehicles.xml file. This was done by first planning what to buy, then starting to buy those items and hauling them from dealership to players farm yard.
</p>

<p>
I hated it because it feels so silly to play the game to edit it, I mean there has got to be better way to write that defaultVehicles.xml file just using coordinates, I cant imagine playing the game buying all this crap for every single <a href="pmc-terrains.php">PMC Terrain</a>, its just too much useless work.
</p>

<p>
Purchased a wheel loader, pallet fork, 2 big seed pallets, 4 fertilizer pallets, 2 herbicide tanks and 2 lime pallets. Then used the wheel loader to carry all pallets/tanks into farm yard, I felt very frustrated at this point, there has got to be better way to create/edit defaultVehicles.xml file.
</p>

<p>
Then bought john deere some 6M tractor, grain trailer, seeder, planter, spreader and herbicide sprayer. Hauled all that to CBJ sheds in players farm yard.
</p>

<p>
Then bought massey ferguson combine with corn and grain headers, same thing hauled to CBJ sheds.
</p>

<p>
Finally sold wheel loader as that is not part of New Farmer equipment list, then everything looked like purchased and parked.
</p>

<p>
2021-01-08T20:18:00Z Finished purchasing all New Farmer game-mode vehicles and equipment.
</p>

<p>
Then moved savegame vehicles.xml into terrain project dir defaultVehicles.xml file. Edited dirtNode, wearNode and operatingTime values to 0.
</p>

<p>
Problem with that file are the vehicle components, like a normal tractor has component 1 and component 2 with slighty different world coordinates, I have no idea what those components are or what happens if you just mock up the coords or use same for both. Need to try once at least I guess but they are there for a reason I would be amazed if I could just blindly write this xml using <a href="terrain-giants-editor.php">Giants Editor (GE)</a> coordinates.
</p>

<p>
2021-01-08T23:12:00Z Finished edits for this first release, I cant think of anything else to fix.
</p>

<p>
Obviously there are always something else to fix or tweak but its endless cycle and at some point you need to pull the ripcord, that time is now. Now I'm on release making mode, starting to package the release packet and prepare web page updates.
</p>

<p>
2021-01-09T00:03:00Z Oops discovered that <a href="terrain-farmland.php">farmlands</a> has nothing owned by default for New Farmer game-mode, so added players farm and F01. Had to edit farmlands image to paint new player area over F01, it was quick task no problemos.
</p>

<p>
2021-01-09T01:21:00Z Finally and this is really the last edit before I start release packaging, edited defaultItems.xml referring to $mapdir$ instead of longer $moddir$ value.
</p>

<p>
2021-01-09T02:08:00Z Created PMC_North_Dakota_Greendale_4km_v1.2.4.7z release packet. Now just big task to update web pages.
</p>

<p>
2021-01-09T21:11:00Z Few more field definition corner pieces created against my better judgement, man do I hate GE as it shows cultivator_density with different size/shape when zoomed out, when you zoom in its different size... that is so awesome when you're doing accurate field definitions, NOT.
</p>

<p>
Anyways last minute edit before release, was going to take new field sizes from GE and for some odd reason decided to put in few more corner pieces.
</p>


	<h2>2021-02-03 Utility Pole Wires</h2>

<p>
2021-02-03 New editing day has started. Used lua scripts to place <a href="terrain-utility-pole-wires.php">utility pole wires</a>. Also did high voltage power line tower wires but those look weird as the wire length is so long that it gets stretched all straight which looks unnatural, but yes there are now high voltage power line wires too.
</p>

<p>
At this point of the dev diary there has been several missing pieces of information, but everything below is written "by the book" as it happens (at the moment of this update 2023-01-18T11:59:00Z there is no further text yet heh).
</p>

</section>

<footer>
<p>
<a href="pmc-terrains.php" class="button">PMC Terrains FS19</a>
<a href="changelog-pmc-north-dakota-greendale-4km.php" class="button">Changelog PMC North Dakota Greendale 4km</a>
<a href="pmc-north-dakota-greendale-4km.php" class="button">PMC North Dakota Greendale 4km</a>
<a href="screenshots-pmc-north-dakota-greendale-4km.php" class="button">Screenshots PMC North Dakota Greendale 4km</a>
<a href="../index.php" class="button">PMC Farming Simulator root page</a>
</p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("../include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
