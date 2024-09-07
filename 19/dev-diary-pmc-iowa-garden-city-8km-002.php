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
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
<h1><b>Developer Diary PMC Iowa Garden City 8km FS19 - PMC Farming</b></h1>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>2020-09-06 Building Object Placement Complete</h2>

<p>
<b>2020-09-06T09:15:00Z</b> GIMP buildings xcf and iowa garden city loaded up in GE, lets go to work.
</p>

<p>
2020-09-06T11:02:00Z Decided to try scaling up building to match <a href="https://www.google.com/maps/@42.2530498,-93.3576931,148m/data=!3m1!1e3" target="_blank">google/maps real world data building</a>. This is a big no no in <a href="https://www.pmctactical.org/arma3/" target="_blank">ArmA 3</a> editing you simply don't scale buildings as it will mess up so many things like geometry, however natural objects like rocks, bushes and trees are perfectly fine to scale 75 to 125 percent range.
</p>

<p>
I took CBJ american vehicle shed 72x150 and GE scaled Z to 3.7 while X and Y remains at standard 1. Will be interesting to see in-game how bad it looks and does geometry work etc. This would be extremely cheap way to fit original building sizes to real world specs. But yeah at the end I or someone needs to model new buildings to fit PMC real world data terrains.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2020-09-06T1105.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2020-09-06T1105.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
2020-09-06T12:02:00Z Found <a href="https://www.google.com/maps/@42.2320671,-93.3484826,296m/data=!3m1!1e3" target="_blank">this location</a> which looks like its just silage covered up, or bales of some sort. Not sure how to place such location, I'm thinking it should be left as empty lot so players could place their own bales/silage here. So I did leave it empty. <i>Edit: 2024-02-19 now google/maps has updated satellite imagery and iowa farmers have since cleaned out these old rotten silage bales, today sat imagery just shows empty lot.</i>
</p>

<p>
On the next location which I labeled Location-85 there was half of the farm yard missing because terrain edge cut it off. I really try to avoid these situations but guess this one slipped through my inspection when creating this terrain location.
</p>

<p>
2020-09-06T12:26:00Z Saw the big electric thingy that was documented already in the first design of this terrain <a href="https://www.google.com/maps/@42.2245411,-93.3740411,176m/data=!3m1!1e3" target="_blank">google/maps</a> and again we have no objects to use there. Well havent scourged through mapDE/mapUS maybe there could be something.
</p>

<p>
2020-09-06T13:14:00Z PMC Iowa Garden City 8km building placement is done! <img src="../images/smileys/icon_biggrin.gif" alt="Smiley :D" loading="lazy">
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2020-09-06T1313.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2020-09-06T1313.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Took another backup, just to be safe.
</p>

<p>
<i>Edit: 2024-02-19, its hilarious how simplistic and short "broad strokes" this first ever Farming Simulator 19 dev diary is, its like "building placement begins" and then next paragraph "building placement is finished" heh, okay but I'd like to read at least SOME details how the development went hehe!</i>
</p>

<p>
2020-09-06T13:52:00Z First utility poles placed in NE corner.
</p>

<p>
2020-09-06T15:30:00Z Was creating utility poles and GE felt a bit sluggish, so I saved, exited, took 7zip backups just to be sure, restarted GE, exported fields, buildings and wind turbine transformgroups, then deleted them. Now GE should load, save and perform just slightly bit better, hopefully.
</p>

<p>
I'm thinking that on a long run on heavy editing sessions its not any use to keep hundreds of objects loaded in GE when you have no use for them, for example I don't need buildings or wind turbines when placing utility poles.
</p>

<p>
Some screensthos of utility poles in real life vs PMC terrain unfortunately got deleted, no idea why. I tried to search them later but cannot find in any directory.
</p>

<p>
2020-09-06T16:27:00Z Lunch break, still many utility pole splines to create, but we'll get there heh.
</p>

<p>
<a href="https://www.google.com/maps/@42.26659,-93.3855119,197m/data=!3m1!1e3" target="_blank">Minerva Creek has a bridge</a>.
</p>

<p>
2020-09-06T18:38:00Z Utility pole objects placement is done! <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2020-09-06T1837.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2020-09-06T1837.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
2020-09-06T19:01:00Z First in-game test with building, utility pole and wind turbine objects... zero errors heh.
</p>

<p>
2020-09-06T20:04:00Z Objects aligned to ground and in-game test completed, zero errors. We are good to go for some PMC Gaming computer full glory 4k 60fps testing, perhaps some first look twitch live stream as well.
</p>

<p>
Did twitch live stream and terrain looked awesome, I was cautiously wishing it would look great but man I underestimated it big time, even without vegetation it looks just amazing. Long view distances and you can just see buildings and farm yards everywhere you look, just awesome views. US NED 10m resolution heightmap is in first glance flat but when you drive around there its elevations everywhere making it feel just so nice. I simply cannot wait to start actually playing here.
</p>

<p>
See <a href="https://www.youtube.com/watch?v=GaStm37o7dI" target="_blank">PMC Iowa Garden City 8km Twitch Stream First Look Object Placement 2020-09-06 Farming Simulator 19</a> youtube video of twitch live stream VOD.
</p>

<p>
Continue reading <a href="dev-diary-pmc-iowa-garden-city-8km-003.php">next page</a>, back to <a href="dev-diary-pmc-iowa-garden-city-8km.php">Dev Diary PMC Iowa Garden City 8km Homepage</a> or <a href="dev-diary-pmc-iowa-garden-city-8km-001.php">previous page</a>.
</p>

<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("/var/www/include/footer-start.php"); ?>
<p>
<a href="pmc-terrains.php" class="button">PMC Terrains FS19</a>
<a href="changelog-pmc-iowa-garden-city-8km.php" class="button">Changelog PMC Iowa Garden City 8km</a>
<a href="pmc-iowa-garden-city-8km.php" class="button">PMC Iowa Garden City 8km</a>
<a href="../index.php" class="button">PMC Farming Simulator root page</a>
</p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("/var/www/include/footer-end.php"); ?>
<?php include("/var/www/include/support.php"); ?>
<?php include("/var/www/include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
