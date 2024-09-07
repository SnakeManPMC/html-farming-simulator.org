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
	<h2>2021-07-05 Precision Farming Soilmap</h2>

<p>
2021-07-05T09:53:00Z New editing day has started, todays goal is two fold, first write a precision farming paint soil type image in GIMP tutorial and then to paint such image for PMC Iowa Garden City 8km, lets get to work <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
PMC Farming website already has <a href="https://www.farming-simulator.org/19/terrain-soil-types.php">soil types precision farming tutorial</a> page, but this has no fancy GIMP painting info other than the RGB 1,1,1 colors, I want to add full tutorial how to get very nice soil map painted in GIMP. So I created <a href="terrain-soil-types-painting-gimp.php">Soil Types Painting in GIMP for Precision Farming tutorial</a> page.
</p>

<p>
It was bizarre feeling recording FS19 terrain dev diary video while writing farming-simulator.org terrain tutorial.
</p>

<p>
2021-07-05T10:28:00Z First draft of the tutorial page was written (copy pasted from PMC local notes) and GIMP_precision_farming_soil_types.xcf image done.
</p>

<p>
2021-07-05T10:40:00Z Used _run_graphicsmagick_create_soilmap.bat to create precision farming soilmap with graphicsmagick. Its now 1024 x 1024 pixel resolution which sucks, but hey its giants hardcoded stuff, 2048 or larger wont work, so yeah <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
Downloaded latest precision farming for testing this new soilmap of ours, edited the sampler vehicle for 50km radius. Then it was in-game testing time.
</p>

<pre>
2021-07-05 10:59   Info: Load soil map 'C:/FS19.Mods/PMC_Iowa_Garden_City_8km/maps/PMC_Iowa_Garden_City_8km/soilmap.grle'
</pre>

<p>
Yeah baby, that's how we roll, no errors on the first try [foriowagardencity] <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-07-05T110336.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-07-05T110336.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-07-05T110342.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-07-05T110342.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-07-05T110346.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-07-05T110346.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-07-05T1104.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-07-05T1104.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
2021-07-05T17:19:00Z Selling point names got added for the "SP1" ones, just some random nonsense that came to my mind like "Big Grain" or whatever heh, its a name, if you don't like it suggest better ones <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Continue reading <a href="dev-diary-pmc-iowa-garden-city-8km-035.php">next page</a>, back to <a href="dev-diary-pmc-iowa-garden-city-8km.php">Dev Diary PMC Iowa Garden City 8km Homepage</a> or <a href="dev-diary-pmc-iowa-garden-city-8km-033.php">previous page</a>.
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
