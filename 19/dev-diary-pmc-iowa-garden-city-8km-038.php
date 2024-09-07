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
	<h2>2021-07-16 Foliage Tweak And Field Definition Corner Pieces</h2>

<p>
2021-07-16T14:27:00Z New asphalt roads were not perfectly aligned to intersections so fixed the east/west roads intersections. It was tedious tweaking one number change at the time and exporting/importing cubes, generating road mesh etc, just terrible way to edit.
</p>

<p>
2021-07-16T14:48:00Z Finished asphalt road N/S connection intersections. They arent perfect but should be playable.
</p>

<p>
I hate SplineStreetConstructor (SSC), did I ever tell you that?
</p>

<p>
Checked latest edits in-game, they look fine to me, good to release.
</p>

<p>
2021-07-16T16:13:00Z Edited fruit_density.png to add one pixel separation to roads/fields areas and places where grass and flowers grow. Restored some custom shrubbery bushes image which seem to have way too much white flowers now, guess its better than plain grass but it needs some work.
</p>

<p>
Except for some odd reason flowers were setup properly but grass wasnt, hum makes no sense heh, okay need to re-check fruit_density.png :)
</p>

<p>
2021-07-16T16:49:00Z Got fruit_density sorted out and in-game test looks pretty good.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-07-16T1647.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-07-16T1647.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-07-16T1648.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-07-16T1648.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-07-16T1649.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-07-16T1649.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-07-16T164924.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-07-16T164924.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Hopefully in the future I can improve road 3d mesh creation.
</p>

<p>
2021-07-16T21:19:00Z Its time to start adding corner pieces to field definitions. Knowing how large task that is for 275 fields I am going to start with just simple shapes instead of trying to do detailed shapes to each field. Goal is not to have it picture perfect but enough detail that contracts are enjoyable without needing too much courseplay outlines.
</p>

<p>
2021-07-16T21:27:00Z Alright first three field definitions got simple shape corner pieces. Its a start. Now only 272 more ... <img src="../images/smileys/icon_surprised.gif" alt="Smiley :o" loading="lazy">
</p>

<p>
2021-07-16T23:00:00Z Started to do second row of field grid few moments ago, coming along nicely. Just have to keep reminding yourself not to get bogged down doing too detailed corner pieces because all they do is take my time. With simple shapes you can have great contract game-play, field definitions do not need to be super detailed. If you don't do contracts then its purely cosmetic feature.
</p>

<p>
Also need to keep myself from zooming into too close, you lose sense of relativity when too close, its easy to see that oh yeah I can quickly do that corner piece, but when you zoom out you realize that oh wow that was tiny meaningless spot heh.
</p>

<p>
2021-07-16T23:50:00Z Okay 30 fields done now, some were so fitting had to do no corner pieces, others were quite complex. This will be clearly several day task for me, its friday night now so cautiously I'd say that in monday this task will be done, hopefully.
</p>

<p>
Maybe monday could be a good release day, I would say next week we will definitely release PMC Iowa Garden City 8km, unless I hit like a complete mental block in my editing burnout, release should happen next week. Hmm yeah, sounds good.
</p>

<p>
2021-07-17T01:47:00Z Now got 41 fields done after a quick lunch break. Slow steady pace.
</p>

<p>
2021-07-17T04:08:00Z Now 50 field definitions done.
</p>

<p>
2021-07-17T06:15:00Z Now 71 field definitions done and that concludes todays editing, dead tired been up over 17hrs today, time to get some shut eye.
</p>

<p>
Continue reading <a href="dev-diary-pmc-iowa-garden-city-8km-039.php">next page</a>, back to <a href="dev-diary-pmc-iowa-garden-city-8km.php">Dev Diary PMC Iowa Garden City 8km Homepage</a> or <a href="dev-diary-pmc-iowa-garden-city-8km-037.php">previous page</a>.
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
