<!DOCTYPE html>
<html lang="en">
<head>
<title>Developer Diary PMC Iowa Garden City 8km FS19 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Developer Diary PMC Iowa Garden City 8km FS19 - PMC Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<h1><b>Developer Diary PMC Iowa Garden City 8km FS19 - PMC Farming</b></h1>
</header>

<section>
	<h2>2021-07-07 Three Hundred Thousand Lines Of XML</h2>

<p>
2021-07-07T12:04:00Z New editing day had kicked of a while ago already while I forgot to write dev diary, SORRY <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Big_guy86 was twitch live streaming last night and I noticed one tiny grass spot on F85, it was cultivator_density which had this spot unpainted, fixed that.
</p>

<p>
Then took german jahwol sausage eating LSD company garbage field definitions script and created 21.4 megabytes and 301,000 lines of XML parameters field definitions. I actually created the PNG images and setup the script already couple of days ago so this was real quick task.
</p>

<p>
It scares me so much to add such trash field definitions config to any PMC terrain, it is completely crazy to have HUNDREDS of corner pieces per field, I did not check them all but few had like 300 - 450 corner pieces per field. This is absolutely way too much, every single corner piece eats about 3 lines of XML parameters/code and as said these fields now have over three hundred thousand lines of XML.
</p>

<p>
Field definitions I3D alone is larger than rest of the TERRAIN.i3d file. Its that insane.
</p>

<p>
But the field definitions look pretty, players will be happy, they have no idea how crap these configs under the hood are.
</p>

<p>
My plan now is to experiment with these trash field definition XML lines, if any of the testers cant find anything wrong... if I cannot find anything wrong while testing some better contracts savegame playing... then I need to think this through is it good editing ethics to use such shit tech under the hood just because it looks good.
</p>

<p>
We'll see, this is now <i>highly experimental</i>.
</p>

<p>
Also forgot to write dev diary about changing map_fruitTypes.xml to only allow AI to plant american crops for iowa area, meaning corn and soybeans.
</p>

<p>
Added this template XML to my copy paste directory so further terrains that need such XML don't have to go through this same editing I can just copy paste it over.
</p>

<p>
2021-07-07T13:11:00Z Created few road splines for intersections to smooth out elevations for those roads that are, well elevated.
</p>

<p>
First few came out all right. Smooth elevations on intersections are very important because it looks childish when you see videos and twitch live streams players driving 50+ km/h into such intersection with a tractor or a semi truck and then it goes flying backflips in the air. Intersection road elevations must be so smooth that even childish fast speeding vehicle driver cant make the vehicle fly.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-07-07T1314.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-07-07T1314.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
I'm now working on the south to north direction asphalt road which is elevated.
</p>

<p>
2021-07-07T14:11:00Z Finished doing the whole south to north asphalt road plus small connecting asphalt road (difficult to explain, from city west side curve down south, hmph).
</p>

<p>
2021-07-07T14:24:00Z This is quite tiresome to do those splines for intersections, driveways and field approaches / entrances. Its easy, but otherwise just tiresome, been doing it now over an hour straight and almost need to start taking artificial restroom breaks to stretch my legs and just get few minutes of downtime from this tiresome spline creation.
</p>

<p>
Don't get me wrong, mood is good, these splines are worth the effort because now if I ever make adjustments for asphalt roads I can just come back and adjust these already existing intersection splines and run them again. Or if I edit heightmap, maybe revert it back to the original, then all I have to do is to run all these spline scripts and all intersections are smooth again.
</p>

<p>
Non destructive editing, that's what's it all about.
</p>

<p>
2021-07-07T14:38:00Z More intersections and driveways and field approaches ...
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-07-07T1437.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-07-07T1437.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
2021-07-07T15:00:00Z Finished creating splines for road intersection smoothing, uuaah <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Glad to have that task done, quite relief actually, nice to have smooth road elevations now.
</p>

<p>
2021-07-07T15:22:00Z Removed grass under player farms CBJ vehicle sheds so when players open those and drive vehicles there it looks tidy.
</p>

<p>
And now we are done for todays edits. First in-game testing begins and if I cant find anything then its just off to compile next internal testing version.
</p>

<p>
2021-07-07T15:41:00Z Compiled new PMC Iowa Garden City 8km v1.1.10 internal testing version release packet PMC_Iowa_Garden_City_8km_v1.1.10.7z
</p>

<p>
Next need to update changelog and this dev diary I'm writing right now.
</p>

<p>
Continue reading <a href="dev-diary-pmc-iowa-garden-city-8km-036.php">next page</a>, back to <a href="dev-diary-pmc-iowa-garden-city-8km.php">Dev Diary PMC Iowa Garden City 8km Homepage</a> or <a href="dev-diary-pmc-iowa-garden-city-8km-034.php">previous page</a>.
</p>
</section>

<footer>
<p>
<a href="pmc-terrains.php" class="button">PMC Terrains FS19</a>
<a href="changelog-pmc-iowa-garden-city-8km.php" class="button">Changelog PMC Iowa Garden City 8km</a>
<a href="pmc-iowa-garden-city-8km.php" class="button">PMC Iowa Garden City 8km</a>
<a href="../index.php" class="button">PMC Farming Simulator root page</a>
</p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("../include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
