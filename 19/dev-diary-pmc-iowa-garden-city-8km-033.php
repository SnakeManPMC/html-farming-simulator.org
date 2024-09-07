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
	<h2>2021-07-01 Railroad Tracks Created</h2>

<p>
2021-07-01T23:11:00Z Added american flag pole to two more player farm yards. Plan is to add them all to all player farms which just have farm house of any kind, so it looks like people actually live there.
</p>

<p>
2021-07-01T23:22:00Z Several more added, almost done.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-07-01T2322.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-07-01T2322.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
2021-07-01T23:40:00Z Finished generating new collision map, exporting PMC_Helpers and saving project. Now all player farms with farm houses have american flag pole.
</p>

<p>
2021-07-02T09:53:00Z Added fuel station (mapUS gasStation.xml) next to dealership. Not sure if I like that building object, it looks kind of odd doesn't remind me of gas station, but oh well guess its a little bit more gas station alike than just meridian fuel tank, dunno.
</p>

<p>
2021-07-02T12:36:00Z Used splines, cubes and whatnot to create railroad tracks using SplineStreetConstructor by TracMaxx. Its now just a iron train track, still no train added, but at least we have one of the noticeable landmarks in.
</p>

<p>
I really havent decided what to do with train yet, can players drive it or is it just cosmetic eye candy.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-07-02T1235.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-07-02T1235.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-07-02T1236.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-07-02T1236.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
2021-07-02T14:50:00Z Added train locomotive and grain wagons to the tracks. Its now player drivable so you can TAB into it, but I want to disable that feature as the train travels outside terrain edge and that is not where players should follow.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-07-02T144523.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-07-02T144523.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-07-02T144557.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-07-02T144557.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
It looks so great to have train back in Garden City <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
2021-07-02T16:45:00Z Finished setting train spline up one more time, previous one did not work train just disappeared. Now it casually loops around terrain west side. This is not what I really want to do, but its a train that drives by, in the future I want to configure it to purely cosmetic train which drives by once every maybe two or so hours so it will be a true treat when it goes by.
</p>

<p>
Now its bad if player drives it and goes outside the terrain edge, it will then just drive in "oblivion". But yeah, need to figure out that later how to make it cosmetic only.
</p>

<p>
Continue reading <a href="dev-diary-pmc-iowa-garden-city-8km-034.php">next page</a>, back to <a href="dev-diary-pmc-iowa-garden-city-8km.php">Dev Diary PMC Iowa Garden City 8km Homepage</a> or <a href="dev-diary-pmc-iowa-garden-city-8km-032.php">previous page</a>.
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
