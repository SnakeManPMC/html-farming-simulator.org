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
	<h2>2023-03-08 Trees And Buildings</h2>

<p>
2023-03-08T22:31:00Z New editing day has started, got morning chores and meal done, now ready to continue editing. Pretty much same as yesterday, xr-renegade has not been active in discord today yet and while I've been thinking where to ask about american farm building objects, cant really think of anyone at the moment, TPF might know he should have contacts in the community so he could point me to right direction. There are some other names too who do terrains or even objects but "I don't know them" so just out of the blue getting a private message "gimmeh all yourz objectz!!1" might not go so well <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Took a backup of terrain project dir, now I'm good to go.
</p>

<p>
Started GE v9.0.2 and loaded terrain project up, did the 16km large terrain script, then went to the dealership location and placed careerStart point there, now on loading into savegame you start by the dealership, better there than in middle of a field.
</p>

<p>
Then edited PMC_Ohio_Alger_10km.xml config file, added hotspot for the dealership, easier to find vehicle shop now. Saved project and exited GE for ...
</p>

<p>
Loaded mapUS.i3d in GE, went to search for spruce / pine trees, to my surprise I did not find any. That was surprising even though those tree types are mostly used as decorative wind breakers on farm yards, but that is how I would like to use them, yesterday I already saw one farm yard with kind of same type trees although they were a bit different. Hmm maybe those trees are on the mapFR then (that's the french, haylet beyleronetoblerone whatever its sick european name is).
</p>

<p>
Went through mapFR and all I could find was <b>spruceVar01_stage01</b> and <b>spruceVar01_stage02</b> tree types, okay then. Exported those trees out to my objects.for.terrains dir, then imported them into my template Trees.Zeroed.Translate.Rotate.and.Scale.i3d file.
</p>

<p>
2023-03-08T23:20:00Z Created first forest patch and tree line, came out alright using splinePlacement script.
</p>

<p>
Short time later created another forest patch, this was near southern most xr-renegade field.
</p>

<p>
2023-03-09T00:34:00Z During xr-renegade's twitch live stream went to GIMP and painted asphalt roads that were missing from the well guess you could call it real world data terrain design doc. Exported roads_asphalt.png out.
</p>

<p>
Saved project in GE and exited. Moved roads_asphalt.png into actual design doc dir, then ran _run_design_doc_to_density_weight_images_all_in_one_2022-01-28.bat which processed new density and weight images. In GIMP the roads were painted with too small pencil, I think it was 6 pixels (didn't really check just eyeballed it), that came out too small on 4096 x 4096 pixel resolution _weight images, then re-painted the roads with 8 pixel pencil and ran all the bat files again.
</p>

<p>
The ground textures still came out weird, they look more narrow now and you can see it from the grass not coming up to texture, hmm, strange.
</p>

<p>
2023-03-09T01:25:00Z At this point is a time for break, just don't feel like editing anything right now, xr-renegades twitch stream is still running for hmm one and a half hours, hopefully after that we got to chat and hopefully he or his crew knows about american buildings, if not... then ouch, dunno where do I find some, maybe I'll get the CBJ american buildings pack, just dunno.
</p>

<p>
2023-03-09T06:33:00Z Already almost an hour ago did latest testing version tour with xr-renegade him discord live streaming it privately for me, he first read this dev diary and then we jumped into v0.1.8 testing. He was telling me how awesome this terrain already looks that its incredible to walk through his Ohio area in FS22, I tried to tell him that well its nice that he likes it but I am definitely "sad" about the lack of objects, its so frustrating to place some completely mickey mouse looking buildings there. Its not that I'm some sort of perfectionist freak, definitely not... but there is a difference being perfectionist and doing complete crap work like I now feel I'm doing with this single one (1) mapUS elmcreek warehouse type building which is used for ALL vehicle sheds and even small barns etc.
</p>

<p>
But yeah sure, it was great to hear that xr-renegade loved the look already. He has no idea whats coming once object placement for buildings and vegetation is finished, when I first time took a john deere tractor and drove around <a href="../19/pmc-iowa-garden-city-8km.php">PMC Iowa Garden City 8km</a> after objects were placed, I was simply speechless, just awed by the landscape. Its not that *I* am a great terrain maker, absolutely not, its the REAL WORLD DATA that makes the terrain so awesome, I'm just the dumb dude who plugs down buildings where US NAIP satellite imagery tells me to <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
So it will definitely be worth to witness when xr-renegade first time tests the final object placement product, in fact I might at some point start to withold testing versions from him once we are maybe like half done object placement so the experience is just shock and awe once he launches object placement finished terrain <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
But that is still a long time away, if I can get nice white american ohio style buildings so I don't have to struggle what I place down, then making these farm yards wont take a long time at all relatively speaking.
</p>

<p>
Also I mentioned to xr-renegade that now I'm slightly scared / worried about fridays twitch big announcement because of the situation with the objects, no idea how the audience will receive the look this terrain now has. Some of the people there who are xr-renegades friends know the area, but of course the usual 100+ viewers probably has most people who have never been there so they don't know any better and I highly doubt any average viewer has ever checked Alger, OH area google street photos view.
</p>

<p>
Anyways, I'm mumbling again <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2023-03-09T08:09:00Z Started GE v9.0.2 and loaded PMC Ohio Alger 10km terrain project, not much has changed I still feel kind of frustrated and lost with the lack of objects, but guess if xr-renegade says it looks awesome, then I'll go with that. Maybe I could squeeze in few more farm yards tonight, even though my motivation is really low right now.
</p>

<p>
2023-03-09T08:30:00Z Finished creating location011, its this <a href="https://www.google.com/maps/@40.6800922,-83.8572082,168m/data=!3m1!1e3" target="_blank">google/maps</a> location, yeah no screenshot this time, I am just not in the mood to be so enthusiastic to take screenshots and besides, if I screenshot every farm yard with google/maps reference image as well... our web server soon runs out of SSD space heh.
</p>

<p>
Actually I'm quite happy that I got this one farm yard done as my previous motivation was about zero, I just had nothing else to do and of course the fridays big announcement is looming closer by every hour so would be dumb to just fiddle my thumbs here. This is one of the issues I warned xr-renegade about my editing life that no promises, no guarantees, if I want to slack a day I will, its simple as that. Well here I am obviously not slacking but just demonstrating how close it came today <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2023-03-09T08:56:00Z Created location012, farm house and two sheds, few trees.
</p>

<p>
2023-03-09T09:10:00Z And got location013 done, it got quite thick tree coverage, hopefully wont cause performance issues, shouldn't with that amount but yeah always have to be careful with tress.
</p>

<p>
2023-03-09T09:41:00Z Finished location014 and okay some screenshots are in order...
</p>

<p>
Google/maps:
</p>

<a href="screenshots/PMC-Ohio-Alger-10km-2023-03-09T0940.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Ohio-Alger-10km-2023-03-09T0940.jpg" alt="Farming Simulator 22 Terrain - PMC Ohio Alger 10km Screenshot" class="terrainimg" loading="lazy"></a>

<p>
Giants Editor:
</p>

<a href="screenshots/PMC-Ohio-Alger-10km-2023-03-09T0941.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Ohio-Alger-10km-2023-03-09T0941.jpg" alt="Farming Simulator 22 Terrain - PMC Ohio Alger 10km Screenshot" class="terrainimg" loading="lazy"></a>

<p>
But now, I'm taking another break, even though I got into some rolling speed getting few farm yards done, its still kind of "blah another farm yard.. uuh..." <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Continue reading <a href="dev-diary-pmc-ohio-alger-10km-006.php">next page</a>, back to <a href="dev-diary-pmc-ohio-alger-10km.php">Dev Diary PMC Ohio Alger 10km Homepage</a> or <a href="dev-diary-pmc-ohio-alger-10km-004.php">previous page</a>.
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
