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
	<h2>2023-03-07 Fields, Fields And Nothing But Fields</h2>

<p>
2023-03-07T00:58:00Z New editing day has started, I'm kind of late as already did basic computer chores, then created PMC Ohio Alger 10km web pages, templates really plus yesterdays dev diary info (this page you're reading now heh), then cooked food and just finished eating, so I'm already hmm uh oh three hours for this day, oh well better late than never.
</p>

<p>
Okay GIMP cultivator_density fields painting continues.
</p>

<p>
2023-03-07T01:32:00Z Forgot to write it down while watching xr-renegade's stream, had to go cook food and eat, now all done and back to editing <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2023-03-07T01:38:00Z And just as I was starting Runsliketurtle asked help on real world data canadian terrain, so that will take few moments <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Hmm what shit is this? <a href="https://www.google.com/maps/@40.6773422,-83.8511171,52m/data=!3m1!1e3" target="_blank">google/maps</a>.
</p>

<p>
2023-03-07T03:44:00Z Now half way done, hmm quite slow progress today, maybe I'm too distracted with the Runsliketurtle terrain heightmap research and xr-renegades twitch live stream which is running on right monitor as I'm typing this.
</p>

<a href="screenshots/PMC-Ohio-Alger-10km-2023-03-07T0344.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Ohio-Alger-10km-2023-03-07T0344.jpg" alt="Farming Simulator 22 Terrain - PMC Ohio Alger 10km Screenshot" class="terrainimg" loading="lazy"></a>

<p>
2023-03-07T05:37:00Z Haven't been writing much play-by-play but there is not much to write about really, you paint in GIMP and that is it, don't want to waste server HDD (or well SSD) space for useless small progress update screenshots heh. So far it kind of feels slow progress today, but now time turns into the late night US and super early EU time when everyone is at sleep or getting ready for school / work, so its very quiet everywhere, this is good time to get some editing done <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
2023-03-07T06:53:00Z Got to put in some progress updates.
</p>

<a href="screenshots/PMC-Ohio-Alger-10km-2023-03-07T0652.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Ohio-Alger-10km-2023-03-07T0652.jpg" alt="Farming Simulator 22 Terrain - PMC Ohio Alger 10km Screenshot" class="terrainimg" loading="lazy"></a>

<p>
2023-03-07T10:15:00Z Finished lunch break, yup forgot to write it down, progress has been slow but steady with occasional fast bursts.
</p>

<p>
2023-03-07T10:48:00Z GIMP cultivator_density painting is done! <img src="../images/smileys/icon_biggrin.gif" alt="Smiley :D" loading="lazy">
</p>

<a href="screenshots/PMC-Ohio-Alger-10km-2023-03-07T1048.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Ohio-Alger-10km-2023-03-07T1048.jpg" alt="Farming Simulator 22 Terrain - PMC Ohio Alger 10km Screenshot" class="terrainimg" loading="lazy"></a>

<p>
Aah it feels good to have this task done, sure its only one task among many in terrain developing process, but still this was the first big milestone, now I have all the ground dirt fields in, the backbone of any terrain. Technically all you need is vehicle shop and cultivator_density and you are good to go.
</p>

<p>
2023-03-07T10:53:00Z I was just taking a moment marveling all those field outlines, its only been two days work to get here but still it feels like an accomplishment. Working in GIMP is fun, but when you do it hours and hours... the fun dries up real quick. So yeah just had to take a moment to enjoy it heh. Okay, moments over, lets proceed.
</p>

<p>
Started to bucket fill the outline areas, so the fields will be completely filled with RED RGB 255,0,0 color.
</p>

<p>
Fill 'em up!
</p>

<a href="screenshots/PMC-Ohio-Alger-10km-2023-03-07T1059.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Ohio-Alger-10km-2023-03-07T1059.jpg" alt="Farming Simulator 22 Terrain - PMC Ohio Alger 10km Screenshot" class="terrainimg" loading="lazy"></a>

<p>
Its lovely how sluggish GIMP bucket fill tool is for 10240 x 10240 pixel resolution image with three layers. Funny how long this relatively effortless task will take on so many fields to fill up.
</p>

<p>
Had to paint and fill up few fields I accidentally skipped.
</p>

<p>
2023-03-07T11:19:00Z Okay all filled up.
</p>

<a href="screenshots/PMC-Ohio-Alger-10km-2023-03-07T1119.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Ohio-Alger-10km-2023-03-07T1119.jpg" alt="Farming Simulator 22 Terrain - PMC Ohio Alger 10km Screenshot" class="terrainimg" loading="lazy"></a>

<p>
Looks pretty, ain't it? <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Exported fields.png from the fields layer, then ran graphicsmagick bat file to process all the PNGs into one final density and weight image "product" for GE use. Copied new cultivator_density.png and fruit_density.png into PMC_Ohio_Alger_10km terrain project dir, changed PMC_Ohio_Alger_10km.I3D density image GDM extensions to PNG, then loaded the project up saved and exited... uuh a mouthful.
</p>

<p>
Then changed I3D png extensions back to gdm and deleted density png images. Then took backup from heightmap image, opened the png in GIMP and set it to RGB 0,0,0 flat zero meters elevations, now GE project is ready for some field definition work.
</p>

<p>
Started GE v9.0.2 and loaded project up, imported PMC_Helpers.i3d file, it was some sort of backup save or updated one who knows as it got UTC timestamp.
</p>

<p>
Then started to place field definition single shapes, tiny ones.
</p>

<a href="screenshots/PMC-Ohio-Alger-10km-2023-03-07T1157.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Ohio-Alger-10km-2023-03-07T1157.jpg" alt="Farming Simulator 22 Terrain - PMC Ohio Alger 10km Screenshot" class="terrainimg" loading="lazy"></a>

<p>
This will take another moment and punish my pinky finger for all the hard angle CTRL pressing. Also wont look nice in-game but the whole point is to get all field ID numbers in-game and then its easy to start enlarge the field definitions by adding corner pieces. One step at the time.
</p>

<p>
2023-03-07T12:13:00Z Finished copy-pasting tiny single shape temporary placeholder field definitions (what is it with me today, is it some most cumbersome long description possible day, huh? hehe).
</p>

<a href="screenshots/PMC-Ohio-Alger-10km-2023-03-07T1213.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Ohio-Alger-10km-2023-03-07T1213.jpg" alt="Farming Simulator 22 Terrain - PMC Ohio Alger 10km Screenshot" class="terrainimg" loading="lazy"></a>

<p>
These will be edited and made bigger, more complex shapes, this is just temporary to get field numbers in-game.
</p>

<p>
Ran get field sizes lua script, it counted total of 459 fields. Nice number, ohio hardin county has some big fields. Well hmm, yeah its 10.2km terrain so somewhere between 8 and 16 which has been long time those usual sizes, for 8km terrain that would be huge amount of fields and for 16 it would be, well yeah guess still a lot, so heh yup, good number of fields <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Exported PMC_Helpers.i3d out, deleted it, saved project and exited GE. Then took backup from the 0m elevation heightmap PNG and unpacked original heightmap backup. Now just changing of modDesc.xml version and release readme txt / bat files.
</p>

<p>
2023-03-07T12:23:00Z Compiled PMC_Ohio_Alger_10km_v0.1.6.7z for testing.
</p>

<p>
2023-03-07T12:42:00Z FS22 in-game testing complete, no errors no warnings, cultivator_density looks great and field definitions look as expected tiny single shape placeholders.
</p>

<a href="screenshots/PMC-Ohio-Alger-10km-2023-03-07T1228.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Ohio-Alger-10km-2023-03-07T1228.jpg" alt="Farming Simulator 22 Terrain - PMC Ohio Alger 10km Screenshot" class="terrainimg" loading="lazy"></a>

<p>
This is just so great, after all that talk about no promises no expectations bullshit... heh this is just what I was secretly hoping but could not almost admit even to myself, it is so awesome to have accomplished so much in so little time, its hard to believe that this terrain did not exist only three days ago <img src="../images/smileys/icon_biggrin.gif" alt="Smiley :D" loading="lazy">
</p>

<p>
2023-03-07T12:46:00Z Hmm I only got 1hrs 5min left in my day (before 17hrs been awake alarm), no wonder I started to get a bit tired and I already felt guilty that am I this wussy that I cant keep editing more, heh well its better to start preparing this dev diary update so xr-renegade can read latest updates fresh when he wakes up or whenever has time in the day <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Yeah today was a great day, time to start wrapping it up.
</p>

<p>
Continue reading <a href="dev-diary-pmc-ohio-alger-10km-004.php">next page</a>, back to <a href="dev-diary-pmc-ohio-alger-10km.php">Dev Diary PMC Ohio Alger 10km Homepage</a> or <a href="dev-diary-pmc-ohio-alger-10km-002.php">previous page</a>.
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
