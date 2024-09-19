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
	<h2>2023-03-09 Last Day Before Announcement</h2>

<p>
2023-03-09T23:40:00Z New editing day has started, did the morning computer chores, just finished eating days first meal, already asked from TPF about small/medium size american buildings but he didn't know, okay time to start editing.
</p>

<p>
First took backups as usual when beginning an new editing day.
</p>

<p>
Basically I followed instructions in <a href="../19/terrain-ai-planted-crop-types.php">Terrain AI Planted Crop Types</a> tutorial page and made it so that only corn, soybeans and wheat is planted by the AI. That was a quick edit and gives that american look for the terrain in 3D world and in ESC mapview.
</p>

<p>
BTW as a side note, GE v9.0.2 and google/maps is still open like I left them last night before crashing to sleep, good, no need to fire those up today heh.
</p>

<p>
Then copied fs22root/data/maps/mapUS/npcs.xml into PMC_Ohio_Alger_10km/maps/PMC_Ohio_Alger_10km/ai_names.xml, changed main terrain config to point into this file, then edited ai_names.xml and added NPC_US_16 which is now "Xr-renegade" with michael hammonds character portrait image.
</p>

<p>
Figured out what went wrong with design doc to _weight image creation, the road RGB color was RED 255,0,0 but it should have be RGB 150,150,150 hmm really strange it works AT ALL like this, makes no sense, oh well now I need to fix that but in order to get it done I'll save terrain project in GE and exit, need to mess with _weight images and cant do that while terrain is open in GE.
</p>

<p>
GIMP painted farm yard driveway road dirt gravel textures.
</p>

<a href="screenshots/PMC-Ohio-Alger-10km-2023-03-10T0024.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Ohio-Alger-10km-2023-03-10T0024.jpg" alt="Farming Simulator 22 Terrain - PMC Ohio Alger 10km Screenshot" class="terrainimg" loading="lazy"></a>

<p>
Exported roads_asphalt.png out and then realized I should have painted that stuff into roads dirt layer, oh well no big deal a slight cosmetic issue. Then ran _run_design_doc_to_density_weight_images_all_in_one_2022-01-28.bat to graphicsmagic process all the density and weight images for GE readable format. Well still have to adjust density resolution but anyways.
</p>

<p>
Forgot to fix northern most xr-renegade field which came too close to the road on N and E sides, shaved off a little bit from it, also cleared the flower garden area from field paint.
</p>

<p>
Exported fields.png out.
</p>

<p>
Got xr-renegade's mom (?) flower garden done, not sure if he approves these "daylily" deco flowers I found in mapUS, but they looked to me the most appropriate memorial site flowers, there are some other various color flowery things like meadow harvest ready but that sort of reminds me of weeds which is kind of not appropriate memorial site flower. Have to hear feedback from xr of what he thinks about this now, can always be changed later. Also I don't know if mapUS decofoliage daylily can be plowed under.
</p>

<p>
2023-03-10T01:05:00Z Saved project and exited GE, time to create another testing version to see if all the latest edits work in-game FS22.
</p>

<p>
Changed modDesc.xml to v0.1.9 along with readme.txt and release compilation bat files.
</p>

<p>
2023-03-10T01:08:00Z Compiled PMC_Ohio_Alger_10km_v0.1.9.7z for testing.
</p>

<p>
2023-03-10T01:25:00Z In-game FS22 test complete, overall looking good but I forgot several things.
</p>

<pre>
- ohio alger moms flower garden field definition overlaps it
- ohio alger floating buildings and trees on new farm yards
- ohio alger flip bevs farm vehicle shed umm 180 so doors face east instead of west
</pre>

<p>
2023-03-10T01:55:00Z Got floating buildings and tree objects aligned to ground, that align to ground script ain't just working at all, the objects go all over the place, had to align all of them manually, this might become a problem on the long run, nobody in their right mind align thousands of trees or objects in general.
</p>

<p>
Also flipped Bev's farm vehicle shed so doors face east like in real life, for what it matters in this crap looking building object anyways.
</p>

<p>
Then on xr-renegade's moms flower garden deleted field definition corner pieces so crop will not be overwritten on top of the flower area. And that was pretty much all those three issues I wrote down.
</p>

<p>
2023-03-10T02:12:00Z Saved terrain project and exited GE, hmm dunno what else to do right now as I'm kind of hoping to have another xr-renegade discord live stream testing session soon, so going to compile new testing version now.
</p>

<p>
Changed modDesc.xml to v0.2.1 (skipping v0.2 as it causes nasty look in windows file explorer hah), same for readme.txt and release compilation bat files.
</p>

<p>
2023-03-10T02:15:00Z Compiled PMC_Ohio_Alger_10km_v0.2.1 for testing.
</p>

<p>
2023-03-10T02:25:00Z Testing complete, no errors no warnings and all fixes work in-game FS22, things are looking good now I just need xr-renegade to put eyes on this <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Was doing some background research on how to port terrain objects from FS19, for example high voltage power line towers, the ones I have in <a href="../19/pmc-grande-gardens-16km.php">PMC Grande Gardens 16km</a> are all black, textures and materials are all messed up or simply missing. I don't have any documentation on how to port individual objects, other than fixing the utility pole wire LSD flashy colors to pure black.
</p>

<p>
2023-03-10T05:25:00Z In GE on my temporary 2km testing terrain painted corn, soybeans and wheat harvest ready foliage, saved project and exited, then GRLEConverted the GDM to fruit_density.png and inspected which RGB colors are used, posted the color values to <a href="https://www.pmctactical.org/forum/viewtopic.php?f=78&t=22861" target="_blank">PMC forum fruit_density aka densityMap_fruits RGB colors</a> topic. Then in GIMP hand painted, bucked filled design doc fields layer randomly to corn, soybeans and wheat RGB colors, exported it to fields-sexy-corn-soybeans-wheat.png image, edited the graphicsmagick bat which processes these source files to read this new PNG, then just ran it.
</p>

<p>
Next took backup from the existing working terrain project dir to PMC_Ohio_Alger_10km_2023-03-10T0530.7z file name, this is my fall back the last good stable version. Then I copied these new files into PMC_Ohio_Alger_10km/ project dir, ran powergrep4 to fix i3d file GDM to PNG extensions for cultivator_density and fruit_density files only, loaded project in GE... only to not see what I was expecting.
</p>

<p>
Looks like GE v9.0.2 needs both cultivator_density and fruit_density images edited for those RGB colors, not sure, back in FS19 GE v8.2.2 (or which ever version was it) when I did this same method for at least <a href="../19/pmc-texas-rowena-8km.php">PMC Texas Rowena 8km</a> possibly to PMC Iowa Garden City 8km too, it worked just fine by painting fruit_density... as far as I recall, hmm. Oh well this was a nice little gimmick anyways no big deal if it doesn't work right at the first time.
</p>

<p>
Ugh, never mind, my bad... yeah I painted the RGB's correctly... but because I ran my graphicsmagick bat file it did not copy those colors to fruit_density image where they belong to heh.
</p>

<p>
Checked out again in my 2km testing terrain and cultivator_density gets RGB 139,0,0 for "harvest ready fertilizer" ground texture type. So making sexy screenshots harvest ready crop fields terrain version, you have to do both cultivator and fruit_density images, OK gotcha, I don't remember this from FS19 so maybe I missed it there so crops were just on top of cultivated ground or it has changed now with FS22, oh well now I should have it sorted out, just need to do a custom graphicsmagick bat file to handle that stuff.
</p>

<p>
2023-03-10T06:12:00Z Managed to get graphicsmagick bat file to work, now density images RGBs are correct and awesome corn, soybeans and wheat fields appear in GE, then just deleted Fields transformgroup so AI will not plant anything, saved and exited GE <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Switched PMC_Ohio_Alger_10km.i3d PNG to GDM file extensions again, deleted cultivator_density.png and fruit_density.png images, edited modDesc.xml to have terrain name with "Screenshots" suffix to recognize it, did not touch readme but changed release compilation bat file to include screenshots string after the version number.
</p>

<p>
2023-03-10T06:16:00Z Compiled PMC_Ohio_Alger_10km_v0.2.1.Screenshots.7z for, well not really testing but at least to check in-game how sexy it looks with full corn, soybeans and wheat harvest ready fields <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2023-03-10T06:23:00Z In-game test complete, wow it looks good with full cultivator_density crops, real nice <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Its too bad terrain cant be released in this form, without AI owning fields and planting crops there will be no contracts so unless players want to jump right into their own farm with millions of money (yes, millions, you cant really get started with less than that unless you go with completely ridiculous BRITISH MAPZ euro trash vehicles), there is nothing they can make money with. I mean sure with farm manager mode and loan maxed out, sure you can get started, but it wont be easy farming with that kind of budget depending on the farmland prices. Anyways I and hopefully everyone else considers any such terrain "unfinished" or "incomplete" if not broken, so that's that.
</p>

<p>
Continue reading <a href="dev-diary-pmc-ohio-alger-10km-007.php">next page</a>, back to <a href="dev-diary-pmc-ohio-alger-10km.php">Dev Diary PMC Ohio Alger 10km Homepage</a> or <a href="dev-diary-pmc-ohio-alger-10km-005.php">previous page</a>.
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
