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
	<h2>2023-03-05 First Full Editing Day</h2>

<p>
2023-03-05T20:22:00Z New editing day has started, today is promising to be a busy day... first I'm starting to <a href="../19/terrain-cultivator_density-gimp.php" target="_blank">GIMP Paint cultivator_density Image</a> for fields, just the xr-renegade's own fields first, then some ground textures for roads, then compile a new testing version for FS22 in-game use.
</p>

<p>
These are the xr-renegade's fields:
</p>

<a href="screenshots/PMC-Ohio-Alger-10km-2023-03-05T2023.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Ohio-Alger-10km-2023-03-05T2023.jpg" alt="Farming Simulator 22 Terrain - PMC Ohio Alger 10km Screenshot" class="terrainimg" loading="lazy"></a>

<p>
2023-03-05T20:32:00Z Okay those fields outlines are now created in GIMP fields layer.
</p>

<a href="screenshots/PMC-Ohio-Alger-10km-2023-03-05T2032.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Ohio-Alger-10km-2023-03-05T2032.jpg" alt="Farming Simulator 22 Terrain - PMC Ohio Alger 10km Screenshot" class="terrainimg" loading="lazy"></a>

<p>
2023-03-05T20:49:00Z Painted few fields in the NW corner, then it was time for days first meal...
</p>

<p>
2023-03-05T21:16:00Z Feeding time is over, back to GIMP painting fields on cultivator_density image.
</p>

<p>
This was example image for xr-renegade, to ask if the field corners rounded vs squared is done according to his instructions.
</p>

<a href="screenshots/PMC-Ohio-Alger-10km-2023-03-05T2129.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Ohio-Alger-10km-2023-03-05T2129.jpg" alt="Farming Simulator 22 Terrain - PMC Ohio Alger 10km Screenshot" class="terrainimg" loading="lazy"></a>

<p>
2023-03-05T21:52:00Z Changing GIMP painting to roads now, I want that network to be done even though usually I do them after fields, but I want xr-renegade to be able to drive around the roads and give me editing feedback of the accuracy.
</p>

<p>
2023-03-05T22:41:00Z Update on asphalt road painting.
</p>

<a href="screenshots/PMC-Ohio-Alger-10km-2023-03-05T2240.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Ohio-Alger-10km-2023-03-05T2240.jpg" alt="Farming Simulator 22 Terrain - PMC Ohio Alger 10km Screenshot" class="terrainimg" loading="lazy"></a>

<p>
2023-03-05T23:37:00Z Roads are done as far as I can tell.
</p>

<a href="screenshots/PMC-Ohio-Alger-10km-2023-03-05T2337.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Ohio-Alger-10km-2023-03-05T2337.jpg" alt="Farming Simulator 22 Terrain - PMC Ohio Alger 10km Screenshot" class="terrainimg" loading="lazy"></a>

<p>
Used my <a href="../19/terrain-design-document.php" target="_blank">GIMP Terrain Design Document</a> method to bring in asphalt roads, xr-renegade told me there are no dirt roads in this terrains area which was really surprising, first terrain I see since creating all <a href="../19/pmc-terrains.php" target="_blank">PMC Terrains (FS19)</a> which has no dirt roads. Blacked out all Giants Editor (GE) _weight images in preparations to bring in new ground texture images.
</p>

<p>
2023-03-06T00:15:00Z Finally got cultivator_density, fruit_density and _weight images in terrain project dir, GE v9.0.2 loaded up.
</p>

<a href="screenshots/PMC-Ohio-Alger-10km-2023-03-06T0014.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Ohio-Alger-10km-2023-03-06T0014.jpg" alt="Farming Simulator 22 Terrain - PMC Ohio Alger 10km Screenshot" class="terrainimg" loading="lazy"></a>

<p>
Saved the project to get GDM and GRLE images again (not that I edited in GRLE's but yeah). Then created icon.dds and preview.dds images as explained in <a href="terrain-user-interface-images.php" target="_blank">Terrain User Interface Images (FS22)</a> page.
</p>

<p>
2023-03-06T02:39:00Z Everything I edited worked OK in-game, so I send v0.1.5 testing version to xr-renegade, he discord streamed testing session and liked it. Only one field was in a wrong spot which is no big deal.
</p>

<p>
We spoke about announcing this terrain project on his friday's twitch stream. Gives me monday through thursday full days of editing time to get things in good shape for at least screenshots or perhaps even video or live demo on the stream. Everything should be looking good by friday for sure, I mean its four full days, plus half today and friday, so yeah I would be slacking badly if this terrain would not be in twitch stream presentable stage at that time <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2023-03-06T03:06:00Z Set my VPN to use Ohio USA server so I look like American internet user, then went to das.ohio.gov website and to <a href="https://gis1.oit.ohio.gov/geodatadownload" target="_blank">gis1.oit.ohio.gov/geodatadownload</a> page, then selected heightmap 3DEP DEM tiles and downloaded them one by one.
</p>

<a href="screenshots/PMC-Ohio-Alger-10km-2023-03-06T0306.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Ohio-Alger-10km-2023-03-06T0306.jpg" alt="Farming Simulator 22 Terrain - PMC Ohio Alger 10km Screenshot" class="terrainimg" loading="lazy"></a>

<p>
I am actually still not sure what is the precise resolution of this heightmap data, but I know its extremely good, probably 1 meter resolution. This is really good stuff <img src="../images/smileys/icon_cool.gif" alt="Smiley :cool:" loading="lazy">
</p>

<p>
Downloading was painful with first selecting the heightmap tiles I need from the web interface, then clicking them to download one by one, there was no automated "drag a big box and download all" way of doing it. So I had to figure out something. Well seems like there is no index.html protection stuff in the physical download directly on the web server, so I could see the whole dir with thousands of ZIP files in there.
</p>

<p>
This is the download link for raw data directory of <a href="https://gis1.oit.ohio.gov/ZIPARCHIVES_III/ELEVATION/3DEP/DEM/HAR/" target="_blank">ohio hardin county 3DEP heightmap DEM data</a>.
</p>

<p>
So I configured WGET program to leech all the zips from there <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<pre>
wget -r -np -l 1 -A zip https://gis1.oit.ohio.gov/ZIPARCHIVES_III/ELEVATION/3DEP/DEM/HAR/
</pre>

<p>
When I started the download I had no idea how many zips there are, many, but should not be thousands, I think...
</p>

<p>
2023-03-06T03:16:00Z Download was started minute or so ago, lets see how long it will take and how many gigabytes of files there are. It will be awesome to get all the heightmap data, can do more terrains <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
2023-03-06T03:24:00Z GIMP painted few more fields to cultivator_density image.
</p>

<p>
Passing through Alger, OH. Paint, paint... paint away!
</p>

<a href="screenshots/PMC-Ohio-Alger-10km-2023-03-06T0337.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Ohio-Alger-10km-2023-03-06T0337.jpg" alt="Farming Simulator 22 Terrain - PMC Ohio Alger 10km Screenshot" class="terrainimg" loading="lazy"></a>

<p>
2023-03-06T04:30:00Z Northern most pass of cultivator_density painting is now done.
</p>

<a href="screenshots/PMC-Ohio-Alger-10km-2023-03-06T0430.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Ohio-Alger-10km-2023-03-06T0430.jpg" alt="Farming Simulator 22 Terrain - PMC Ohio Alger 10km Screenshot" class="terrainimg" loading="lazy"></a>

<p>
So far things are going great, no sense of exhaustion or boredom, still going full speed with enthusiasm, although I don't have that kind of hurry rushing feeling, so I really enjoy this editing, its getting progress done but no sense of getting exhausted. Hopefully this is me understanding that I have now monday through thursday time to edit which is plenty to get these fields done, plus much more stuff what comes after that.
</p>

<p>
2023-03-06T05:04:00Z Wget is still downloading ohio .gov state website heightmap DEM tile zip files, currently the dir is 3.17gb in size with 2162 files in it, and counting... <img src="../images/smileys/icon_surprised.gif" alt="Smiley :o" loading="lazy">
</p>

<p>
Heh so much for <i>"there should not be thousands of zips..."</i> <img src="../images/smileys/icon_biggrin.gif" alt="Smiley :D" loading="lazy">
</p>

<p>
2023-03-06T06:18:00Z Reached a location where in google/maps and ArcGIS world imagery there are dairy or something cow barns, but in US NAIP imagery over which I'm painting fields... there are only a field. <a href="https://www.google.com/maps/@40.6895813,-83.8960232,412m/data=!3m1!1e3" target="_blank">This is the location in google/maps</a>.
</p>

<p>
2023-03-06T07:27:00Z One more full section and then half of cultivator_density has been painted.
</p>

<a href="screenshots/PMC-Ohio-Alger-10km-2023-03-06T0726.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Ohio-Alger-10km-2023-03-06T0726.jpg" alt="Farming Simulator 22 Terrain - PMC Ohio Alger 10km Screenshot" class="terrainimg" loading="lazy"></a>

<p>
2023-03-06T08:15:00Z Wget is still downloading, directory is now 7.8gb with 5925 files, okay time to abort that, guess Hardin County is quite large <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Then I kept Global Mapper open with PMC Ohio Alger 10km project open there with the existing 3DEP DEM tiles xr-renegade had downloaded for me. Then I selected more heightmap tiles and downloaded them one by one, this was really painful as explained above.
</p>

<p>
2023-03-06T10:23:00Z Finally got all ohio .gov state website 3DEP heightmap DEM tile downloads complete, added to global mapper and right now exporting heightmap ASCII Grid ASC file. Whoah.
</p>

<p>
New heightScale="41.08" value to be used with heightmap. Edited that into PMC_Ohio_Alger_10km.i3d and copied heightmap PNG image over to the existing one. Loaded it up on GE and saved, just in case.
</p>

<p>
2023-03-06T10:54:00Z Started to yawn and editing kind of slowed down, hard to continue doing more of those cultivator_density field paintings in GIMP, its been quite a long day, even though still have 1hrs 45min of my day left. I'd hate to watch tv for this remaining time but dunno if you cant make yourself to draw another field outline, then hum. Trying to think what else could I edit at this point hmm but nothing comes to mind, kind of tired already. It just might be that this was it for todays editing, some good 15hrs of editing.
</p>

<p>
Continue reading <a href="dev-diary-pmc-ohio-alger-10km-003.php">next page</a>, back to <a href="dev-diary-pmc-ohio-alger-10km.php">Dev Diary PMC Ohio Alger 10km Homepage</a> or <a href="dev-diary-pmc-ohio-alger-10km-001.php">previous page</a>.
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
