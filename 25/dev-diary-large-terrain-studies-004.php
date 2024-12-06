<!DOCTYPE html>
<html lang="en">
<head>
<title>Large Terrain Studies Dev Diary Farming Simulator 25 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Large Terrain Studies Dev Diary Farming Simulator 25 - PMC Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
	<h1>Large Terrain Studies Dev Diary Farming Simulator 25 - PMC Farming</h1>

<p>
Large Terrain Studies Development / developer diary for Farming Simulator 25 (FS25) by Snake Man, PMC.
</p>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
<?php include("/var/www/include/support.php"); ?>
	<h2>2024-12-02 This Is The End Beautiful Friend</h2>

<p>
2024-12-02T15:51:43Z New editing day has started. I'm now in my mid-day mark, just finished days second meal and been already writing Giants Editor v10 tutorials half through the day. Now I want to create new sample mapUS v1.3 data terrain and see if I might get it to work as 6.1km size.
</p>

<p>
My hopes are very slim, I don't think the original mapUS source data makes any difference when its done properly with GE v10.0.3 instead of me slapping it together with my own robocopy bat file, but of course it would ... hmm I was going to write "change everything" but heh that is just complete bull manure, there is no way that this original mapUS source data would fix that over 20gb RAM usage on large terrain or make ground deformation feature go away, its just not happening. But I am going to give it one more try before putting FS25 away and going back to FS19 and FS22 editing and playing.
</p>

<p>
Okay so I already before meal did GE -&gt; file -&gt; new mod from game -&gt; mapUS into my editing dir, now I'm going to load it up and delete all the objects from there.
</p>

<p>
2024-12-02T15:57:30Z Directory name is mapUS_sample_v1.3 and going to load mapUS.i3d from there now.
</p>

<p>
Selected "map" and "gameplay" transformgroups and deleted them. Yeah I could have used fields base transformgroup and vehicleShop on the long run, but I have so slim hope of this working that I want to make it just simple, easy and clean, so everything goes.
</p>

<p>
Ran create ground collision map script, I'm still not sure if this is necessary when you black out infoLayer files, not sure if this collision is written in one of the .cache files. Now its done thought so one more less doubt in my mind. Well sure I have to do it again once I increase terrain size, but yeah anyways.
</p>

<p>
Saved project and exited GE.
</p>

<p>
Edited modDesc.xml straight away even though this is the sample source data terrain and labeled it as "PMC mapUS 6km 2024-12-02" for now. Used map classname "PMC_mapUS_6km_2024_12_02" as I'm not sure if hyphens are accepted there.
</p>

<p>
Next opened mapUS.i3d in notepad++ and started to change $data/maps/ to just hmm was it maps/ now, hmm. Oh no wait nevermind, <b>New mod from game</b> already does much of that fixing, that is cool.
</p>

<p>
Changed densityMap GDM to PNG file extension. Changed infoLayer GRLE to PNG. Changed sun section to lastShadowMapSplitBboxMin="-4096,-512,-4096" lastShadowMapSplitBboxMax="4096,592,4096" which is multiplied original values by four, should be enought sun shine. Changed unitsPerPixel="3" to as I'm planning on using the default 2048 res heightmap, should work OK, it does in <a href="../22/pmc-super-six-6km.php">PMC Super Six 6km</a> so same applies here or otherwise FS25 sucks. Changed weight image stuff to lodTextureSize="4096" as I plan on resizing them up. Then did a brand new edit for me which is DisplacementLayer name="terrainDisplacement" size="32768" as I saw someone in giants developer network (GDN) mention this fix for the rugged heightmap on 8.1km terrains. And that is all for i3d file.
</p>

<p>
Then edited mapUS.xml config file. Obviously changed map height/width to 6144. Removed guidedTour. Copied fieldGround.xml from original fs25 dir into my config dir, setup mapUS.xml to use that config, same for farmlands.xml and fields.xml files. And that was all for mapUS.xml config file.
</p>

<p>
Then started to go through config/ dir contents. Edited farmlands.xml to use only ID 1 channel. Setup fieldGround.xml to ... not sure exactly what, I cant remember if its "maps/" or "mapUS/" relative dir, this is a config file which is called from mapUS.xml config file, which location is in maps/mapUS/ dir so ... hmm my gut feeling says it should just be data/ so I decided to set them to that path. Then copied all infoLayer*.grle images from original fs25 dir to mine. Edited fields.xml to clear it out, all riverbend springs new farmer field statuses are gone. Next edited placeables.xml which required a lot of cleaning up to do. Same for vehicles.xml config as well, all cleaned out now. Now config/ dir is done unless I forgot something obvious.
</p>

<p>
Then into data/ dir which requires several GRLEConverter and graphicsmagick bat files to help me out. First ran _run_convert_gdm_grle_to_png_and_delete_gdm_grle_FS25.bat and then _run_graphicsmagick_FS25_identify_PNG_resolutions_ordered.bat before inspecting results from _image_resolutions.txt file. Short story is: weight 2048x2048, density 4096x4096 with the exception of densityMap_groundFoliage.png 2048x2048 (no idea if this is by design or giants bug) and infolayer 4096x4096 with few exceptions. Looks about right.
</p>

<p>
First ran _run_graphicsmagick_FS25_density_to_8192.bat, then _run_graphicsmagick_FS25_infoLayer_to_DOUBLE.bat and finally _run_graphicsmagick_FS25_weight_to_4096.bat to make all image sizes suitable for 6.1km terrain.
</p>

<p>
Opened densityMap_groundFoliage.png in GIMP and scaled it to 4096x4096 just to preserve the giants image size scheme, no idea if its the right thing to do but I'll go with it now.
</p>

<p>
2024-12-02T16:51:26Z Took a quick restroom break and there already was excited about this last FS25 6.1km terrain editing session to fail so I can finally get back to FS19 and FS22 editing and playing, I'm actually dying to play on <a href="../22/pmc-cereal-region-32km.php">PMC Cereal Region 32km</a> or some of the other monster size terrains <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Did one more custom graphicsmagick bat file to make *.png resize up to 4096, ran that to data/masks/ dir images, now they are uniform with other images which are twice the size.
</p>

<p>
Then did another round of tasks, opened all these GDM/GRLE images in GIMP and blacked them out to RGB 0,0,0 color. Same for masks/ dir images. Set farmland to RGB 1,1,1 and heightmap to RGB 100,100,100 which is different from my previous twenty meter elevation setup.
</p>

<p>
Hmm unless I forgot something, its now time to load this thing up in GE and see what happens.
</p>

<p>
2024-12-02T17:12:19Z Started GE v10.0.3 and loaded mapUS.i3d project there, immediately I saw the ground detail textures as low resolution blur. Yeah its game over, dude, game frigging over. Its not working, ground textures turn into low res blur with unitsPerPixel being much different than 1 or 2 perhaps, I think one of my terrains worked with 2. So yeah here we are again, dunno what the hell to do man, I've tried everything.
</p>

<p>
2024-12-02T17:27:48Z Posted sad reply to <a href="https://www.pmctactical.org/forum/" target="_blank">PMC Tactical Forum</a> umm that "waiting GE v10" topic, and now its back to try out 4096 res heightmap with unitsPerPixel 1.5 to see if that would fix it, I doubt it especially with that decimal point value, but hey its a quick test.
</p>

<p>
2024-12-02T17:31:12Z Nope, we have no joy, ground textures are low resolution blur.
</p>

<p>
Okay that is it, going to take a restroom break to stretch my legs a bit and then make a decision of me ending my attempts to edit FS25. Actually was going to be politician and write "large terrains in FS25" but nah, if I'm out then I'M OUT, no half measures or weasel politicial alike loop holes. I'll walk away back to the open arms of Farming Simulator 19 and Farming Simulator 22 where GE and huge terrains flourish <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2024-12-02T17:48:26Z Been sitting here by the computer a bit, wrote private message to unnamed Giants employee asking about this ground texture low resolution issue as I sent him example terrains several days ago. No immediate reply so I'm kind of guessing any possible reply could be anytime between now and never. Guess I'm sitting here facing the decision to call it quits on FS25 editing. And well the decision is basically made, I quit FS25 editing, period. <i>Edit 2024-12-06T11:10:46Z, still no reply, guess I'm not worthy of reply.</i>
</p>

<p>
What that means is I keep PMC Gaming computer with GE v10.0.3, graphicsmagick, imagemagick, GIMP and whatever else I had installed here just so I can test things, screenshot and document them for any tutorials. And I do in fact want to learn how field definitions are made with the new system now, although that data doesn't really help me as if I cant have my huge terrains then what is the point of using GE v10.0.3 in the first place. But yeah I will not burn my bridges and leave mouth foaming while screaming profanities, I simply realize that FS25 is dead to me, I have nothing to do in that game universe with little girlie men terrains when I can enjoy 45km x 45km terrain sizes on FS22 and old school hardcore FS19 Seasons Mod in that game version, hell I could spend duration of FS25 life time playing just <a href="../19/pmc-grande-gardens-16km.php">PMC Grande Gardens 16km</a> and <a href="../19/pmc-iowa-garden-city-8km.php">PMC Iowa Garden City 8km</a> terrains alone! <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
This is kind of bitter sweet or nostalgia alike moment I guess, not sad in the traditional sense but "somber" I guess dunno how to explain it. I mean FS25 is the current game engine, no mods yet but that will change a lot even in the next month or few, so I should be focusing on that, but with it having no future for large terrains then everything is lost, FS25 is nothing but empty shell with a pretty cover for me.
</p>

<p>
2024-12-02T17:57:20Z Deleted all my terrain projects in C:\Farming.Simulator.25.Editing\ dir.
</p>

<p>
Now its time to wrap this dev diary up, I have officially quit from FS25 editing and playing, I will continue doing everything else but I will not waste my time with editing/playing FS25 as I cant have my large terrains so its goodbye until the next game engine or if by miracle giants would fix all these bugs they introduced that killed large terrains.
</p>

<p>
2024-12-02T17:59:23Z Shut GIMP down and now will switch back to FS22, do I ever write another FS25 terrain editing dev diary, I assume not but of course hoping it might happen one day, so until then, keep reading my FS19 and FS22 dev diaries, cu there <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Continue reading 
<!--
<a href="dev-diary-large-terrain-studies-005.php">next page</a>, 
-->
<a href="dev-diary-large-terrain-studies.php">Large Terrain Studies Home</a>, go back to <a href="dev-diary-large-terrain-studies-003.php">previous page</a>.
</p>

<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("/var/www/include/footer-start.php"); ?>
<p>
<a href="dev-diary-large-terrain-studies.php" class="button">Large Terrain Studies</a>
<a href="../19/dev-diary.php" class="button">Dev Diary FS19</a>
<a href="../22/dev-diary.php" class="button">Dev Diary FS22</a>
<a href="dev-diary.php" class="button">Dev Diary FS25</a>
<a href="../index.php" class="button">PMC Farming Simulator root page</a>
</p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("/var/www/include/footer-end.php"); ?>
<?php include("/var/www/include/support.php"); ?>
<?php include("/var/www/include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
