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
	<h2>2021-06-29 Debugging And Bug Fixing Farmland Image</h2>

<p>
<b>2021-06-29T06:36:00Z</b> Back to editing, this time started to fix farmland image in GIMP, it had some overlapping ie duplicate RGB colors used so need to fix or at least reduce those.
</p>

<p>
2021-06-29T07:13:00Z Finished tweaking, debugging and bug fixing farmland image <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Its now pretty cool using 256 farmland areas, but it still ran out of farmland ID channels, would need more to add all individual farm yards and fields into buyable land. Right now its fine, more than fine actually... but I just would like to have more ID channels to use heh. Oh well maybe it can be increased to 512 havent investigated that yet.
</p>

<p>
All in all there is SO MUCH small and cheap land lots for players to purchase it should be no issue for anyone to start their farm with small equipment and not much money.
</p>

<p>
2021-06-29T08:37:00Z Tested GIMP painted fruit_density flowers/shrubbery, still not getting the random jitter pencils quite right but slowly getting there. <i>Edit: these images got outdated few hours later, there ended up much less shrubbery.</i>
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-06-29T0835.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-06-29T0835.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-06-29T0836.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-06-29T0836.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
2021-06-29T10:38:00Z Was not happy with the results, either I got too little or way too much of the flower shrubbery. Painting it manually on specific spots takes way too long, but using some other brush pencil methods cause way too much of the shrubbery to appear. Had to go back and forth several times before I got somewhat decent results.
</p>

<p>
Its still very low amount of shrubbery, but I think this is now good starting point. Also it worries me as these shrubbery objects do not disappear on seasons winter, it looks stupid to have brightly colored flowers growing in a snow heh.
</p>

<p>
This latest shrubbery density is so low its like every few fields you see couple of flowers, heh.
</p>

<p>
2021-06-29T11:19:00Z Decided to add terrainDetailHeight_density channel increase whatever its called so that <a href="https://www.farming-simulator.com/mod.php?mod_id=150958" target="_blank">MaizePlus</a> and <a href="https://www.farming-simulator.com/mod.php?mod_id=177412" target="_blank">StrawMe</a> addons work properly with seasons. I really don't like this as it locks your GRLE image behind crashing GRLEConverter, but well, many people seem to request this feature so quess I have to add it.
</p>

<p>
2021-06-29T11:34:00Z terrainDetailHeight_density image and configs updated, checked in-game, no errors.
</p>

<p>
Obviously I did not test yet with all those maizeplus and strawme addons, that has to be left for internal testers.
</p>

<p>
2021-06-29T12:00:00Z Compiled PMC Iowa Garden City 8km v1.1.9 for internal testing and tested it myself that log is error free, all looks good for internal testing release <img src="../images/smileys/icon_biggrin.gif" alt="Smiley :D" loading="lazy">
</p>

<p>
Continue reading <a href="dev-diary-pmc-iowa-garden-city-8km-032.php">next page</a>, back to <a href="dev-diary-pmc-iowa-garden-city-8km.php">Dev Diary PMC Iowa Garden City 8km Homepage</a> or <a href="dev-diary-pmc-iowa-garden-city-8km-030.php">previous page</a>.
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
