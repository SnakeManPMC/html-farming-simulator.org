<!DOCTYPE html>
<html lang="en">
<head>
<title>My First Terrain Dev Diary Farming Simulator 25 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="My First Terrain Dev Diary Farming Simulator 25 - PMC Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
	<h1>My First Terrain Dev Diary Farming Simulator 25 - PMC Farming</h1>

<p>
My First Terrain Development / developer diary for Farming Simulator 25 (FS25) by Snake Man, PMC.
</p>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
<?php include("/var/www/include/support.php"); ?>
	<h2>2024-11-21 More unitsPerPixel Trials</h2>

<p>
2024-11-21T01:50:00Z New terrain editing day has started, only got 5hrs of sleep last night, did the mandatory computer morning chores, posted some forum replies and now just finished eating days first meal, now the actual editing can commence.
</p>

<p>
My goal is to start writing first brand new FS25 tutorial web page, get it released online.
</p>

<p>
But first I have to actually read what I wrote last night, yes I wrote that mere hours ago but I was so tired, in full zombi mode as mentioned that I was running on pure muscle memory at that point, fingers were typing on keyboard while my mind was somewhere else <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
This is one of the awesome benefits that dev diary writing gives you, there is no second guessing, no doubts, no false recollections or anything of the sort, just re-read what you wrote earlier to get the facts straight up as they happened. You have absolutely no idea how much dev diaries have helped me over the YEARS of writing them, it is so great to be able to reference previous editing facts.
</p>

<p>
2024-11-21T03:04:00Z All morning eating etc is over now, also discord chat slowed down, finally getting to start actual terrain editing. Going to launch last nights PMC_mapUS_1st_try/ terrain project edit, to see how it runs and looks.
</p>

<p>
In-game check shows ground textures are normal detail, terrain size is 4km, no bushes or shrubbery around. Okay then, next up I want to beef the size up to 5.1km just to see if that makes engine go belly up. Changed mapUS.i3d unitsPerPixel to 2.5 and mapUS.xml map height/width to 5120, then off to test.
</p>

<p>
In-game check done, ground textures are low resolution blur, they looks like oatmeal blur, hmm that is interesting and very scary. Are there some hardcoded limit of terrain sizes before ground texturing breaks, hmm I need to study some more <img src="../images/smileys/icon_confused.gif" alt="Smiley :?" loading="lazy">
</p>

<p>
Was browsing stuff, deleted few unused config/ dir XML config files, at least I could not find a reference to them. Then created PMC_mapUS_1st_try/mapUS/textures/ui/ directory where I copied from original mapUS dir these image files: overview.dds and preview.dds
</p>

<p>
Then needed to convert DDS images to PNG so they can be edited with GIMP. Copied _run_graphicsmagick_convert_dds_to_png.bat file into ui dir and ran it, but it gave me some "no delegate" error and no PNG was saved, huh. So I needed to get imagemagick bat file instead, at least last time that worked OK. Copied _run_imagemagick_dds_to_png.bat into ui dir and ran it, this worked OK, cool. Then copied _run_graphicsmagick_FS19_identify_PNG_resolutions.bat into ui dir and ran that to get full specifications out of overview.png and preview.png images, I want to know their pixel resolutions. I can get it from irfanview or GIMP but just wanted to use graphicsmagick for it now, to get a text file easily copy-pasteable list.
</p>

<pre>
C:\FS25.Mods\Dev\PMC_mapUS_1st_try\mapUS\textures\ui image resolutions 
overview.png PNG 4096x4096+0+0 DirectClass 8-bit 12.2Mi 0.000u 0m:0.000004s
preview.png PNG 2048x2048+0+0 DirectClass 8-bit 2.5Mi 0.000u 0m:0.000004s
</pre>

<p>
Power of two size images, overview.png is the same as in FS22 and what I recall so is preview.png as well, as can be seen from <a href="../22/terrain-user-interface-images.php">FS22 Terrain User Interface Images</a> page.
</p>

<p>
In GIMP edited preview.png, used dark green background, then created standard white text font with black outline stroke, just wrote "PMC FS25 Terrain Template Preview.png" to it, that is a clear reminder to fix a proper image in its place. Saved out preview.xcf GIMP file format image for future editing. Next copied preview.xcf image to safety in E:\Farming.Simulator.25.Editing\Images.Templates.Pre.Painted\ dir. Now that is done and will be used in all future PMC FS25 terrain projects. Always making progress, one step at the time, never going backwards.
</p>

<p>
GIMP exported preview.png and overwrote the original, it is now done. Then opened up overview.png in GIMP. This image already got gray RGB 69,69,69 (same as GIMP background gray) color applied to it, so I closed it off, its good to go.
</p>

<p>
Used _run_graphicsmagick_convert_png_to_dds.bat which did convert PNG images to DDS file format, now I want to check in-game if they actually load OK without any warnings or errors in the log. First I manually deleted overview.png and preview.png images from the dir as for example mapUS.xml references .PNG instead of .DDS in its imageFilename property.
</p>

<p>
2024-11-21T03:58:00Z In-game test complete, well I apparently forgot to make the changes in XML files, so PDA map image is still the riverbend springs and preview image is old from my FS19 era PMC Farm Lab terrain. Not only that but now I see this old error in the log again: 2024-11-21 03:56 Error: AI block info layer has invalid size. Using default values.
</p>

<p>
Hmm how come that didn't come up on my prior test, hmm <img src="../images/smileys/icon_confused.gif" alt="Smiley :?" loading="lazy">
</p>

<p>
Deleted preview.dds image file from the mod root dir, then edited mapUS.xml to point into my overview.png (DDS) image and modDesc.xml to my preview.png (DDS) image. Okay another in-game test, stay focused on the task at hand, pay no mind for the other errors that crept up on ya <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Got errors on these new overview and preview images:
</p>

<pre>
2024-11-21 04:03 Error: Invalid dds banner for file 'C:/FS25.Mods/Dev/PMC_mapUS_1st_try/mapUS/textures/ui/preview.dds'
2024-11-21 04:03 Error: Invalid dds banner for file 'C:/FS25.Mods/Dev/PMC_mapUS_1st_try/mapUS/textures/ui/preview.dds'
2024-11-21 04:03 Warning (performance): Texture C:/FS25.Mods/Dev/PMC_mapUS_1st_try/mapUS/textures/ui/preview.png raw format.
2024-11-21 04:03 Warning (performance): Texture C:/FS25.Mods/Dev/PMC_mapUS_1st_try/mapUS/textures/ui/preview.png raw format.
2024-11-21 04:03 Warning (performance): Texture C:/FS25.Mods/Dev/PMC_mapUS_1st_try/mapUS/textures/ui/preview.png raw format.
2024-11-21 04:03 Warning: CPU mip generation code activated for texture 'C:/FS25.Mods/Dev/PMC_mapUS_1st_try/mapUS/textures/ui/preview.png' - please build mips for this image
</pre>

<p>
Hmm I'm starting to slowly remember again, graphicsmagick might not be able to convert PNG to DDS, at least with my current command line parameters, that it would make giants engine accepted image format. Hmm but I also do remember very faintly that in some newer graphicsmagick bat file I resolved this issue with some additionap mipmap parameters, hmm restroom break and then I'll go browse through FS22 Batch_files/ dir.
</p>

<p>
2024-11-21T04:24:00Z Hmm I only found _run_imagemagick_generate_icon_from_preview.bat in FS22 editing Batch_files/ dir, it was quite fancy though with mipmaps and all.
</p>

<p>
Copied that bat file to textures/ui/ dir, then imagemagick converted DDS to PNG once again, then ran that bat to generate preview.dds and icon.dds images. Finally edited modDesc.xml image for "iconFilename" to point into mapUS/textures/ui/ dir. Now I just have to fix the overview.dds which is saved badly. Then ran _run_imagemagick_png_to_dds.bat to hopefully do the proper PNG to DDS conversion. Okay time for another in-game test.
</p>

<p>
Started FS25 and went into career menu, chose my terrain and now there was no errors in the log, my preview.png image though have the template text in centered vertically and horizontally, but in-game here its located just under "Savegame Options" text, meaning completely wrong place.
</p>

<p>
I do not understand why giants created preview.png (DDS) image with 2048 x 2048 pixel resolution where HALF of the image goes over the top screen edge, makes no sense, huh? <img src="../images/smileys/icon_confused.gif" alt="Smiley :?" loading="lazy">
</p>

<p>
But now I have a good baseline info where any meaningful graphical content should be located in preview.png image, it should be below the horizontal center line of the image, ie bottom half. Dumb, but hey what can ya do, right.
</p>

<p>
My newly generated icon.dds image works good though, as designed. Nice.
</p>

<p>
2024-11-21T04:35:00Z In-game test shows overview.dds, preview.dds and icon.dds are working as designed. Good.
</p>

<p>
However there is still that "Error: AI block info layer has invalid size. Using default values." in the log, hmm.
</p>

<p>
Wonder if I should save the game, then inspect the savegame dir for GRLE images to see what resolution did those got saved, might work.
</p>

<p>
Booted FS25 back up, created new career savegame and saved game, then shutdown FS25. Now I should have proper size GRLE images saved, perhaps even GDMs.
</p>

<p>
Took savegame1 GDM's and GRLE's, converted them to PNG image format, all GDM images are 8192 x 8192 pixel resolution like they should. All infolayer images are 4096 x 4096 except infoLayer_tipCollisionGenerated.png which is 8192 x 8192.
</p>

<p>
Went back to terrain project dir, checked and infoLayer_navigationCollision.png is 2048 x 2048 pixel resolution while all others are 4096 with the exception of those tipCol ones which are 8192. Hmm.
</p>

<p>
Hmm going to increase infoLayer_navigationCollision.png resolution up to 4096 to see if that fixes the AI block info layer error.
</p>

<p>
2024-11-21T05:12:00Z Fixed, in-game test shows that when infoLayer_navigationCollision.png is 4096 pixel resolution like rest of the collision ones (except tipCol as 8192), there is no more AI block info layer error, great. Hmm wonder why did I leave that image as original size as FS22 does have infoLayer_navigationCollision.grle so my batch file should have converted it, hmm. Err no wait, that _run_graphicsmagick_FS25_weight_density_to_standard_large.bat does not even resize infoLayer*.png images, hmm I have no recollection when last night I edited those infoLayer images heh, geez maan <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
However end result is that now this project is 5.1km in size, no errors in the log but ground textures are broken, they are low res poop like oatmeal surface.
</p>

<p>
Deleted data/unprocessedHeightMap.png image and loaded the project in FS25, it loaded up fine, log file says:
</p>

<pre>
2024-11-21 05:20 Procedural Placement's unprocessed height map not set
</pre>

<p>
But it has been saying that every time. mapAS hutan pantai and mapEU (zielonka?) have no unprocessedHeightMap.png images. So I have to conclude that data/unprocessedHeightMap.png image is unused file.
</p>

<p>
2024-11-21T05:53:00Z Took a small detour to check PMC Tactical Forum new messages and RSS news etc.
</p>

<p>
Been trying to figure out why ground textures go oatmeal low res blur when terrain size is increased. I want to revert back the size to check which is the last one that works, current base line comparison is 4096 meters ie 4km cliche size.
</p>

<p>
Going to try 2048 heightmap, 2.25 unitsPerPixel which comes out to 4608 x 4608 meters (4.608 km), lets call it 4.6km in short. That unitsperpixel is quite fancy with .25 decimal points, interesting to see what FS25 says about it.
</p>

<p>
2024-11-21T06:02:00Z In-game test complete, no errors, no warnings, but ground textures are low res blur.
</p>

<p>
Okay this is now scaring me, could there be some stupid issue with unitsPerPixel not working with decimal points anymore, or is it just about the terrain size, we got two variables here. Hmm guess I could just resize heightmap back to 1024 x 1024 pixels and then try something like unitsPerPixel 3, hmm.
</p>

<p>
Next I changed terrain size in the configs to 6144 which is 6.1km, unitsPerPixel 3 nice even number no decimal points. If that also gives oatmeal blur low res ground textures then I am really going to start worrying...
</p>

<p>
2024-11-21T06:15:00Z Negative, no joy. Terrain works in-game with clean game log but ground textures are low res blur <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
Hmm I'm running out of ideas here, ground textures go low res almost like some option was turned on/off as soon as terrain size exceeds 4096 meters. This last test was with unitsPerPixel 3 which means the issue is not about decimal points in that value. Hmm.
</p>

<p>
In PMC_mapUS_1st_try\mapUS\data\masks\ dir there are several 2048 res PNG images, going to resize those up to 4096 res and see if that helps. Also going to revert back to 4km for initial test, to get another baseline comparison that changing masks dir image resolution wont mess something else up.
</p>

<p>
2024-11-21T06:33:00Z In-game test... well as soon as game reached the character creation phase, performance went to 5-6FPS and did not recover from that. I ESC got out of it and in-game ground textures looked normal again, but the performance was just 6FPS and I waited for some time if it would recover but nope, nothing happened. Game log is clean, no errors, no warnings.
</p>

<p>
Hmm <img src="../images/smileys/icon_confused.gif" alt="Smiley :?" loading="lazy">
</p>

<p>
Going to try something wild, I simply deleted the masks/ dir PNG images, I'm expecting this to crash FS25 or at least spam log with errors, but I want to see what happens.
</p>

<p>
2024-11-21T06:40:00Z Umm, what... There was no errors in the log and in-game 4km terrain works as designed, err... WHAT? <img src="../images/smileys/icon_eek.gif" alt="Smiley :bender-eyes:" loading="lazy">
</p>

<p>
How come the game wont give any error when all of those mask images are simply gone <img src="../images/smileys/icon_surprised.gif" alt="Smiley :o" loading="lazy">
</p>

<p>
Changed configs back to 6.1km and going to try again, see if missing masks/ dir images cause any difference to ground texture blur issue.
</p>

<p>
2024-11-21T06:46:00Z Negative, still getting ground textures as one big blur.
</p>

<p>
Hmm what have I not thought of yet, hmm <img src="../images/smileys/icon_confused.gif" alt="Smiley :?" loading="lazy">
</p>

<p>
Well infoLayer_environment.png is 512 x 512 pixel resolution, no idea what this file is, googled it and 0 results.
</p>

<p>
It is really scary to think that what if giants "messed up" their game engine with the ground deformation garbage so that now nothing larger than 4096 meters is working. The outrage from the terrain development community would be huge, even though people who have done 8.1km terrains not to mention 16.3km and the very few outside PMC who have done 10.2km terrains (Zoltanm and who was that canadian dude who made that canadian 10.2km terrain, I'm drawing a blank here. <i>Edit 2024-11-28T09:21:21Z, <a href="https://camil-canuck.itch.io/" target="_blank">Camil Canuck</a></i>), anyways, number of those devs is really really low but still I bet there are many players who enjoy larger terrains than 4km, so if by accident or design giants have restricted their giants engine v10 to go bonkers with ground textures beyond 4096 meter terrain sizes ... it would be really bad news. But this is just speculation, who knows maybe I made some kind of mistake somewhere.
</p>

<p>
Anyways back to infoLayer_environment.png image, dunno where I went into such tangent with that above paragraph, scary thoughts are flooding into my head, yikes hehe. Okay going to scale this image up to, lets say 2048 x 2048 would probably be alright.
</p>

<p>
That was blank black RGB 0,0,0 empty image btw.
</p>

<p>
2024-11-21T07:00:00Z In-game test complete, nope, not working, ground textures remain as blur.
</p>

<p>
Hmm now I'm hitting a wall here, not sure what to try next, that drastic on/off ground textures turning into blur when above 4096 terrain size gives me no clues of the possible causes. I mean _weight images are 4096 so dunno, I could turn them into 8192 of course, it wont take long, yeah going to try that next.
</p>

<p>
Copy-pasted new graphicsmagick bat file to simply resize *_weight.png images to 8192 resolution no questions asked.
</p>

<p>
2024-11-21T07:13:00Z Still a big fat negative, no go, ground textures are low res blur <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
I don't know what to do next <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
2024-11-21T07:16:00Z Oh.. fieldGround.xml, hmm that was the level file stuff, hmm <img src="../images/smileys/icon_confused.gif" alt="Smiley :?" loading="lazy">
</p>

<p>
Copied fieldGround.xml from original fs25 install dir maps/mapUS/config/ dir. Then edited it to match my mapUS/ dir structure. And of course edited mapUS.xml to point to fieldGround filename="mapUS/config/fieldGround.xml". Honestly I would be surprised if this was the cause, but you never know with a new giants engine. Another in-game test...
</p>

<p>
First test was success until I realized that well doh, its the 4km config again. So switched back to 6144 meters unitsPerPixel 3. Now lets try this again...
</p>

<p>
2024-11-21T07:33:00Z Nope, no dice, its not working, ground textures are low resolution blur.
</p>

<p>
Yeah at this point I am seriously running out of ideas, I cant think of what it might be, why do ground textures suddenly switch to completely and utterly low resolution blur like it was 32 x 32 pixel image being used, well not quite but you get my point from the exaggeration.
</p>

<p>
Checked maps/mapUS/config/environment.xml config but cant see anything relating to ground textures.
</p>

<p>
I'm sort of thinking about reverting mapUS.i3d back to its original state, who knows maybe I messed up something when I deleted all the objects. Hmm that might help, even if I would simply restore riverbend springs and then try to increase the terrain size, I cant remember if objects remain in the center on original coordinates or will they go crazy somehow. I mean its a very simple test to do, backup old i3d, copy over original, edit few directories and run the game.
</p>

<p>
As I'm running out of ideas that begins to sound like better and better idea by the minute... hmm <img src="../images/smileys/icon_confused.gif" alt="Smiley :?" loading="lazy">
</p>

<p>
After restroom break and some contemplation, took a 7-zip backup of mapUS.i3d file, copy-pasted original from fs25 dir on top of it overwriting. Then edited it to replace mandatory directory paths.
</p>

<p>
2024-11-21T08:03:00Z Was browsing around the original mapUS.i3d, edited some essential paths to point into those edited data/ images, set size to 4096 with unitsperpixel 2, then it was in-game testing time again and btw, I'm starving, would be great if alarm went off in the phone for a lunch break, this is my first time now since fs25 release that I eat only two times a day, can right away feel the affect, so hungry heh.
</p>

<pre>
2024-11-21 08:05 Error: Failed to load DensityMap image 'C:/FS25.Mods/Dev/PMC_mapUS_1st_try/mapUS/mapUS/data/densityMap_ground.png'.
2024-11-21 08:05 Error: Can't load resource 'C:/FS25.Mods/Dev/PMC_mapUS_1st_try/mapUS/mapUS/data/densityMap_ground.png'.
2024-11-21 08:05 Error: Failed to load terrain detail layer 'terrainDetail'.
</pre>

<p>
Yikes, what kind of newbie is editing here <img src="../images/smileys/icon_razz.gif" alt="Smiley :p" loading="lazy">
</p>

<p>
Quick edit to fix those directory paths and then another try in-game.
</p>

<p>
2024-11-21T08:18:00Z In-game test complete, 4km terrain shows up, all riverbend springs objects are there with my own heightmap, density, infolayer and weight images, so its flat 20m elevation with objects floating high in the air. Now I'll try to increase the size to 6144 meters with unitsperpixel 3, if that goes crazy with ground textures then I know it was not caused by anything I deleted from mapUS.i3d file.
</p>

<p>
2024-11-21T08:23:00Z Guess final in-game test complete, it didn't work, ground textures turn into low resolution blur, same as in my I3D most-things-deleted file as well. Yeah sorry but I'm fresh out of ideas <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
2024-11-21T08:45:00Z Posted an update to PMC Tactical Forum topic and now going to take a lunch break, then if I cant figure out anything, dunno what I do next, but this moment causes a pause, possibly even end to this dev diary day page. I'll most likely bring that 4km terrain in-game in Gaming computer and try to farm there a bit learning about productions chains and animals, dunno, assuming it even works properly like that. Anyways, I'm starvin' its time to eat...
</p>

<p>
<!--
Continue reading <a href="dev-diary-my-first-terrain-004.php">next page</a>, <a href="dev-diary-my-first-terrain.php">My First Terrain Home</a>, go back to <a href="dev-diary-my-first-terrain-002.php">previous page</a>.
-->
Back to <a href="dev-diary-my-first-terrain.php">My First Terrain Home</a> or <a href="dev-diary-my-first-terrain-002.php">previous page</a>.
</p>

<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("/var/www/include/footer-start.php"); ?>
<p>
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
