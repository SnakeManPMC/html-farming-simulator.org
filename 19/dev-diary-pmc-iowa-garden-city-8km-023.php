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
	<h2>2021-06-04 Various Editing Tasks</h2>

<p>
2021-06-04T08:53:00Z Vehicle shop aka dealership start / end coordinates adjusted so that bought stuff wont clip with other objects. These were from the era when there was no other objects nearby.
</p>

<p>
2021-06-04T09:18:00Z Patched hole for cultivator_density where three utility poles were on F258. It was the usual shuffle to paint the locations first in GE, then bring that cultivator_density image to GIMP, then update my actual fields source XCF image with it, then export it back to GE, heh a lot of parts to go through.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-06-04T0918.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-06-04T0918.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Then moved players farm 1 CBJ vehicle shed slightly to east which was on a field edge. Was quite tight location, there really was not much free space on either side of the building, hmm wonder if this CBJ 72x150_Building is too wide for the real life building I'm trying to replicate. Well anyways now vehicles in the field should not collide with the building.
</p>

<p>
Then there was dumb non painted strip of cultivator_density in F38 NW so painted that in and updated both cultivator and fruit density images. This also brough nice grass for the three utility pole holes (giggity) in F258.
</p>

<p>
Attempted to fix F230 field map indicator being so close to terrain edge that the game engine wont render its number on ESC mapview PDA, needs testing in-game if it was moved far away enough in order to work.
</p>

<p>
Then utility poles NE from player farm 1 were scaled 0.75, fixed this back to proper value of 1.
</p>

<p>
2021-06-04T10:01:00Z Missed a building on following location: <a href="https://www.google.com/maps/@42.2843745,-93.3431745,144m/data=!3m1!1e3" target="_blank">google/maps</a>, so added it now. Actually it was two buildings and then I also see in north side some sort of narrow tower or radio mast type structure SHADOW only, so quite difficult to juge what is it, maybe some sort of windmill type object dunno, well that did not get added as said no idea what it might be.
</p>

<p>
Changed one selling point to Max Yield CO-OP name, another for Prairie Land Cooperative, rest were named "SP1", "SP2" etc style. Hmm that prairie land is quite long name, it will clutter ESC mapview badly, oh well.
</p>

<p>
2021-06-04T10:14:00Z Had quite a lot of edits in now so next is the in-game test if everything works okay. Have to carefully go through the changelog to check every edit if they work OK. Lastly to check log for errors of course.
</p>

<p>
Well in-game test shows that F230 field map indicator was NOT fixed, it is still too close to terrain edge.
</p>

<p>
Found some additional field map indicators which were too close to the terrain edge, see below.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-06-04T102736.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-06-04T102736.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-06-04T102723.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-06-04T102723.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-06-04T102711.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-06-04T102711.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Got paintable ground textures with grass in.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-06-04T1022.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-06-04T1022.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
And tested that we have plenty of room at vehicle shop when buying new vehicles, I think this is enough space <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-06-04T1021.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-06-04T1021.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
2021-06-04T10:57:00Z Adjusted field map indicators a bit more for all those fields I found them missing. Next I needed to punch holes to F258 field definition which had the utility poles. I could have done this just on top of the normal heightmap but decided to take backups and flatten heightmap to RGB 1,1,1 so its nice and even ground, actually 0,0,0 might be best dunno.
</p>

<p>
Here is how the utility pole field definition turned out as quick simple shape. Note that this will not be the final shape, I will add detailed corner pieces once development reaches that stage.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-06-04T1105.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-06-04T1105.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Checked in-game and field defintion turned out fine around utility pole holes.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-06-04T1122.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-06-04T1122.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
2021-06-04T11:39:00Z Added vehicle shop aka dealership customizing and repairing trigger setup, vehicle sell point.
</p>

<p>
2021-06-04T22:27:00Z Adjusted dealership start/end coordinates and rotation away from the building.
</p>

<p>
2021-06-04T23:22:00Z Disabled player farm 1 bin silos completely from defaultItems.xml so testers can place auger pipe required bin silos themselves, hopefully we find best suited bin silo mod for this purpose.
</p>

<p>
And with that edit I'm ready to start put together next internal testing version and changelog web page.
</p>

<p>
Continue reading <a href="dev-diary-pmc-iowa-garden-city-8km-024.php">next page</a>, back to <a href="dev-diary-pmc-iowa-garden-city-8km.php">Dev Diary PMC Iowa Garden City 8km Homepage</a> or <a href="dev-diary-pmc-iowa-garden-city-8km-022.php">previous page</a>.
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
