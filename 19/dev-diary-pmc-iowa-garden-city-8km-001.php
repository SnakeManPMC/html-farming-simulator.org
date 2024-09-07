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
	<h2>2020-09-05 Dev Diary Begins</h2>

<p>
<b>2020-09-05T12:59:00Z</b> Backupped PMC Iowa Garden City 8km project dir, edited sync to mods dir with new excluded files. Loaded terrain in <a href="terrain-giants-editor.php">Giants Editor (GE)</a> to check it out if all looks good, then started to prepare <a href="terrain-pmc-helpers.php" target="_blank">PMC_Helpers (for Giants Editor)</a> to a new way of handling it (exported). Also recorded terrain developer diary video <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2020-09-05T13:31:00Z GE initial PMC_Helpers setup created and selling points moved to a proper transformgroup. Pretty much nothing else there, shes a blank slate.
</p>

<p>
2020-09-05T13:43:00Z Moved all the unused directories and files into Exclude.For.Release directory.
</p>

<p>
2020-09-05T13:55:00Z First in-game test that everything loads up ok. There was error about mapDE vehicle shop so it was time to replace that with mapUS vehicle shop model which fixed that issue.
</p>

<p>
2020-09-05T14:25:00Z Started to create universal american PMC_Helpers.i3d to be used in all terrains. Placed giants buildings, utility poles and trees there, then of course CBJ american buildings too. I can now import this to a new terrain and have all the objects at hand right away without going through that import shuffle.
</p>

<p>
2020-09-05T15:33:00Z All preparation work for object placement is done, now just a lunch break and then I'm good to start actually putting down objects <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
2020-09-05T15:52:00Z Object placement has officially started.
</p>

<p>
2020-09-05T16:18:00Z Wind turbines placed. Nice landmark object-set for iowa terrain, you can see those far away while farming heh.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2020-09-05T1634.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2020-09-05T1634.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
At this time in fall of 2020 I was still running Windows 7 64bit with 125% user interface scaling, which can easily be seen on screenshots from this era. The desktop I was running has text font so small you need a hubble space telescope to see characters properly <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
2020-09-05T17:03:00Z Building placement officially commenced, here we go!
</p>

<p>
2020-09-05T19:52:00Z Lunch break, here is progress update at this minute, red is areas with buildings and black is buildings placed areas.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2020-09-05T1952.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2020-09-05T1952.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
2020-09-05T23:22:00Z Enough object placement for today, 53 locations created.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2020-09-05T2322.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2020-09-05T2322.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Continue reading <a href="dev-diary-pmc-iowa-garden-city-8km-002.php">next page</a> or back to <a href="dev-diary-pmc-iowa-garden-city-8km.php">Dev Diary PMC Iowa Garden City 8km Homepage</a>.
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
