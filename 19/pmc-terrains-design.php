<!DOCTYPE html>
<html lang="en">
<head>
<title>Design PMC Terrains Farming Simulator 19 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Design PMC Terrains Farming Simulator 19 - PMC Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
<h1>Design PMC Terrains Farming Simulator 19</h1>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>Fields</h2>

<p>
<b>Fields</b> <a href="terrain-field-definitions.php">Field Definitions</a> are made out of large simple shapes which do not cover the satellite imagery field edges precisely. <i>I'll improve field definition details on a later date</i> (add more field definition corner pieces) but because their nature being mostly cosmetic, their priority is very low. Only AI is using field definitions anyways and contracts do work on all PMC terrains. <a href="pmc-north-dakota-greendale-4km.php">PMC North Dakota Greendale 4km</a> terrain has pretty detailed field definition coverage which is our first terrain to get more corner pieces added. All properly released PMC terrains for FS19 do have detailed field definitions.
</p>

<p>
However <a href="terrain-cultivator_density-gimp.php">cultivated / plowed field edges are painted in GIMP (cultivator_density)</a> and cover the actual satellite imagery very accurately, courseplay for example uses this field edge instead of field definition.
</p>

<p>
Please note that field hectares size count comes from field definition rectangle and not from the actual cultivator_density area, every field listed in individual terrain pages is larger in-game (some are tiny amount and others maybe three four times the sizes).
</p>


	<h2>Roads</h2>

<p>
<b>Roads</b> are just painted terrain detail textures not a real objects as most terrains do. For example our roads are just asphalt texture, dirt/gravel texture without any center line or anything. In the future I would like to add road meshes. <a href="pmc-iowa-garden-city-8km.php">PMC Iowa Garden City 8km</a> has properly done asphalt road 3D mesh on all paved roads.
</p>

<p>
Roads have been painted with painstaking accuracy over the <a href="pmc-terrains-real-world-data.php">real world data</a> satellite imagery, roads are right there where they are in real life.
</p>


	<h2>Farm Yards</h2>

<p>
<b>Farms</b> like player farm is built using placeables, if players want they can sell the placeables to remove all buildings/grain-bin-silos. This also goes to few other farms in the terrain to allow players in multiplayer to create several different farms. I'm still finding my way, the game-play design for this like should I leave the terrain mostly empty of buildings or should I FS17 alike spoon feed players their pre-built farms... difficult question as so many players like different things. Design goal is to have sixteen (16) player farms, or more, with placeable buildings/objects which can be sold to clear the farm yard area, on some terrains due real life restrictions (like PMC North Dakota Greendale 4km) there are not enough farm yards to get 16 count, so on such terrains there are as many as possible.
</p>

<p>
If you have any feedback regarding multiplayer farm buildings, please let us know in <a href="https://www.pmctactical.org/forum/viewforum.php?f=75" target="_blank">PMC Tactical Forum FS19 Editing area</a>, I'd love to hear your feedback.
</p>


	<h2>Terrain Sizes</h2>

<p>
<b>Terrain Size</b> is listed below on each terrain specifically, however mostly I go with 8192 meters x 8192 meters which is 8.1 kilometers x 8.1 kilometers (or just 8km in short) which is very large as I do not like small terrains, we all need real world sizes and room to breathe! <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
PMC loves BIG FIELDS and LARGE TERRAINS <img src="../images/smileys/icon_mrgreen.gif" alt="Smiley :mrgreen:" loading="lazy">
</p>

<p>
Please note that almost all PMC terrains for FS19 were created in 2019, at this time era I was not utilizing "<a href="terrain-heightmap.php">heightmap</a> size * <a href="terrain-unitsperpixel.php">unitsPerPixel</a>" formula to create cool irregular size terrains. I feel ashamed by this design decision, many people in the community have followed my footsteps and want to create boring 4km or 8.1km terrain sizes thinking that its the size you must create, it is not, you can create almost any sizes you want, 1.2km, 2.5km, 3km, 5km, 7km, 9km, 12km, etc etc. For my part of creating so many 8.1km terrains I sincerely apologize <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
Since around 2022 PMC will not create 2km, 4km, 8.1km or 16.3km terrains anymore.
</p>


	<h2>Game-play Experience And Knowledge</h2>

<p>
<b>Game-play Experience and Knowledge</b> is <i>very</i> important when editing terrains.
</p>

<p>
I have played PMC terrains endlessly for example <a href="stories-from-zero-grande-gardens.php">PMC Grande Gardens 16km Start From Zero</a> savegame in 2024-03-13 has over 1,100 hours in it, that is just one savegame, I have several other savegames on other terrains (<a href="pmc-texas-rowena-8km.php">PMC Texas Rowena 8km</a> 566hrs, PMC North Dakota Greendale 4km 281hrs etc) where I gathered knowledge and experience of what works in-game and what doesn't.
</p>

<p>
Routine is to do bunch of edits, then start to test for days sometimes weeks maybe even months, collecting invaluable data of the game-play experience. If something doesnt work, it will be fixed / tweaked, then more game-play testing. PMC terrains are not put together hastily, they are made with care to the game-play, what works and what doesn't.
</p>

<p>
Since starting to play Farming Simulator 19 after its release, getting the editing tools and starting to learn editing, there has been so many new things I've learned about what works and what doesn't that its a very long list. You simply cannot have good design put in place on <a href="terrain-giants-editor.php">Giants Editor</a> without proper thorough in-game testing. Sometimes I feel like I play too much with the excuse of <i>"no dude, I'm only testing!!1"</i> <img src="../images/smileys/icon_biggrin.gif" alt="Smiley :D" loading="lazy">
</p>


	<h2>Current Development Status</h2>

<p>
Terrains listed in <a href="pmc-terrains.php">PMC Terrains FS19 page</a> are work in progress, they are not finished. However released terrains are very enjoyable to play. PMC does not release "broken" or un-playable terrains (obviously missed bugs will be fixed as soon as possible).
</p>

<p>
See each terrains individual specifications for development progress and if there is none specified then it means there are no objects beside vehicle shop + selling points. Every terrain (at least the real world data ones) are functioning properly, cultivator_density, field definitions, farmland buy land option, contracts, vehicle shop, selling points, the basic features are there and no errors in the log.
</p>

<p>
For the latest news and updates do daily checks on <a href="https://www.pmctactical.org/forum/viewforum.php?f=75" target="_blank">PMC Tactical Forum FS19 Editing area</a> and <a href="https://www.pmctactical.org/forum/viewforum.php?f=76" target="_blank">PMC Tactical Forum FS19 General area</a> where I'm posting all the hottes and latest information. Feel free to join the discussion I'd love to hear your feedback and ideas.
</p>

<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("/var/www/include/footer-start.php"); ?>
<p>
<a href="pmc-terrains.php" class="button">PMC Terrains FS19 home page</a>
<a href="../index.php" class="button">PMC Farming Simulator root page</a>
</p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("/var/www/include/footer-end.php"); ?>
<?php include("/var/www/include/support.php"); ?>
<?php include("/var/www/include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
