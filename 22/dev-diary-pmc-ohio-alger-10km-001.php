<!DOCTYPE html>
<html lang="en">
<head>
<title>Developer Diary PMC Ohio Alger 10km Farming Simulator 22 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Developer Diary PMC Ohio Alger 10km Farming Simulator 22 - PMC Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
	<h1>Developer Diary PMC Ohio Alger 10km Farming Simulator 22 - PMC Farming</h1>

<p>
This is <a href="pmc-ohio-alger-10km.php">PMC Ohio Alger 10km</a> terrain dev diary for Farming Simulator 22 (FS22).
</p>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
<?php include("/var/www/include/support.php"); ?>
	<h2>2023-03-05 New Terrain Has Been Created</h2>

<p>
2023-03-05T02:55:00Z Today is the beginning of PMC Ohio Alger 10km terrain for Farming Simulator 22 (FS22). Already one month ago I spoke with <a href="https://www.twitch.tv/xr_renegade" target="_blank">xr-renegade</a> on this twitch live stream about his real life ohio farm he would like to have in FS22, he did a great presentation on google/maps document to show where farm yards and fields are.
</p>

<p>
Today I finally had a long chat on xr-renegade's discord, he was on the voice comms and I typed text chat as I don't do microphones / webcams. I warned xr-renegade that I cannot and will not make any promises about this terrain project, I explained that I've been on holiday the last time on august 3rd 2016 and since then its been sitting home doing computer stuff (editing, playing etc) 17hrs a day, I don't go out, hang out with friends, all I do is sit home and do computer stuff, so that has me burnt out really badly currently. Xr-renegade was fine with all that stuff, not to put pressure on me by saying in his twitch stream that new map is on the making and it will be "THE BEST" <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Yeah I went overboard about this background info and warning not to make any promises, but I really don't want to make empty promises, lie about "it will be done" and then dude disappears for months without doing nothing, I just simply do not want that extra pressure and expectations. When I'm doing my thing in peace and calm I can do miracles. I'm just like Star Trek (original series) Scotty, he always told Captain James T Kirk repair etc estimates in the high numbers so when he does the job in half the time, then Kirk thinks Scotty is a miracle worker, that is exactly what I want to do here <img src="../images/smileys/icon_biggrin.gif" alt="Smiley :D" loading="lazy">
</p>

<p>
But yeah joking aside, I don't want any pressure, I will not make empty promises, I just want to enjoy editing at my own pace, whether it being nothing getting done for monts or me absolutely crushing it in few days, it remains to be seen.
</p>

<p>
2023-03-05T10:47:00Z It has been a long day, I did not write down all the details, spent most of the day in discord listening to xr-renegades voice comms and text chatting with him. I created basic terrain source files, then terrain project files. Sent the first preview version of the terrain with only heightmap + PDA map image to xr-renegade. He then tested it in-game and discord streamed it when he ran around in the heightmap and was amazed how accurate it is.
</p>

<p>
Xr-renegade then downloaded <a href="https://das.ohio.gov/technology-and-strategy/OGRIP" target="_blank">ohio state .gov websites</a> detailed heightmap 3DEP DEM files, not even sure how detailed these are probably 1 meter or something. Below is example of the details they bring to the heightmap, low resolution is the usual US NED 10m detail, high res is the ohio state website downloaded one (I think its 1m detail).
</p>

<a href="screenshots/PMC-Ohio-Alger-10km-2023-03-05T0740.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Ohio-Alger-10km-2023-03-05T0740.jpg" class="terrainimg" loading="lazy" alt="Farming Simulator 22 PMC Ohio Alger 10km Screenshot"></a>

<p>
As writing this text I'm dead tired and just finished eating lunch so cant go to sleep in few hours unless you want bad sleep, anyways heh hate to be this tired.
</p>

<p>
heightScale="41.13" is the value this current heightmap data produces.
</p>

<p>
Continue reading <a href="dev-diary-pmc-ohio-alger-10km-002.php">next page</a>, back to <a href="dev-diary-pmc-ohio-alger-10km.php">Dev Diary PMC Ohio Alger 10km Homepage</a>.
</p>

<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("/var/www/include/footer-start.php"); ?>
<p>
<a href="pmc-terrains.php" class="button">PMC Terrains FS22</a>
<a href="changelog-pmc-ohio-alger-10km.php" class="button">Changelog PMC Ohio Alger 10km</a>
<a href="screenshots-pmc-ohio-alger-10km.php" class="button">Screenshots PMC Ohio Alger 10km</a>
<a href="pmc-ohio-alger-10km.php" class="button">PMC Ohio Alger 10km</a>
<a href="../index.php" class="button">PMC Farming Simulator root page</a>
</p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("/var/www/include/footer-end.php"); ?>
<?php include("/var/www/include/support.php"); ?>
<?php include("/var/www/include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
