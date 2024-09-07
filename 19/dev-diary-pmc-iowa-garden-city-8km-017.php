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
	<h2>2021-05-17 Hasty Seasons GEO For Iowa Garden City</h2>

<p>
2021-05-17T10:33:00Z Did hasty Seasons GEO for PMC Iowa Garden City 8km, temperatures for freezing winter and moderately warm summer.
</p>


	<h2>2021-05-18 Farmland Image Painting In GIMP</h2>

<p>
2021-05-18T07:10:00Z Took a screenshot of current farmland image.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-18T0708.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-18T0708.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
2021-05-18T11:46:00Z Farmland painting in GIMP continues, almost done first full section. Also wrote notes for farmland painting using cultivator_density in GIMP tutorial: <a href="terrain-farmland-painting-gimp.php" target="_blank">Farmland Image Painting GIMP</a>.
</p>

<p>
2021-05-18T13:39:00Z Ran out of farmland ID channels, ouch! <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Okay lets create some more, all the way to 255 now.
</p>

<p>
2021-05-18T16:44:00Z Finished GIMP painting farmland image, all 255 ID channels are in use, yikes! <img src="../images/smileys/icon_surprised.gif" alt="Smiley :o" loading="lazy">
</p>

<p>
Well yeah what can you do, there are lot of fields. I guess those paintings could be tweaked for some compromise like adding two fields into one ID on some places, for example put two small fields into same land, that would free up some IDs to split up remaining huge areas.
</p>

<p>
But dunno, there is so many small individual fields buyable now that NOBODY can whine that <a href="stories.php">Start From Zero savegames</a> are hard as land lots are so large and cost so much, there is plenty of small cheapo lands available now.
</p>

	<h2>Utility Pole Wires</h2>

<p>
2021-05-18T18:18:00Z Started to create utility pole wires, did one line now.
</p>

<p>
Screenshot time.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-18T1846.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-18T1846.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
2021-05-18T19:09:00Z Ran into interesting utility pole setup in a field. Its transformgroup is called manual-01 and has tree utility poles in a field without cultivator_density holes punched through. This is pretty much reminder for myself that if I come across this location later I know what was going on.
</p>

<p>
I'm going to leave the cultivator_density holes for later because now utility pole wires need to get done first. Of course this field is courseplay / hired worker unusable until those holes are done heh.
</p>

<p>
I have to say this wire project is much more work than I imagined.
</p>

<p>
2021-05-18T19:23:00Z Quite interesting spline setup here, had to re-create it completely as the old one just didn't work for wires.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-18T1922.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-18T1922.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-18T1955.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-18T1955.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Next I discovered utility pole line which had really bizarre zig-zag in the beginning, no way the wire script could place wires for this, so I decided to rename the transformgroup to zig-zag and leave it for later date.
</p>

<p>
Check it out.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-18T1957.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-18T1957.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Another manually done only 3 poles, I just made a spline for it and got them to align pretty closely like the original ones.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-18T2010.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-18T2010.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
2021-05-18T20:35:00Z Doing good progress, several utility pole lines re-created with wires now.
</p>

<p>
Now I ran into another set of manual transformgroups which mean they were hand placed according to google/maps satellite imagery. I am afraid to touch these so I don't erase work that I did earlier, I'm just going to continue from the next traditional script created transformgroup.
</p>

<p>
These manual ones were manual-03 through 07.
</p>

<p>
2021-05-18T22:22:00Z All utility pole wires placed, except the manual ones which needs some more tinkering.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-18T2222.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-18T2222.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Then it was time to start preparing first internal testing version release <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2021-05-18T22:57:00Z Uploaded PMC_Iowa_Garden_City_8km_v1.1.3.7z to google drive for internal testers <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Continue reading <a href="dev-diary-pmc-iowa-garden-city-8km-018.php">next page</a>, back to <a href="dev-diary-pmc-iowa-garden-city-8km.php">Dev Diary PMC Iowa Garden City 8km Homepage</a> or <a href="dev-diary-pmc-iowa-garden-city-8km-016.php">previous page</a>.
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
