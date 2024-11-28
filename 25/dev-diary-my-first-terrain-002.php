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
	<h2>2024-11-20 Week After</h2>

<p>
2024-11-20T14:42:00Z New editing day has started. Okay so looks like its been what, a week, since my initial edits to this terrain, I have not really given much effort to this project as I've been just playing FS25 on my New Farmer Riverbend Springs savegame. I did fiddle around with it a little bit without writing anything down, I cleaned up the dir a lot of excess and large files. Right now I removed the last remnants of unused large files, now this project dir is super clean, its just got XML config and data dirs, now that is rudimentary clean <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Loaded it in-game fs25 and there are no errors, good. However there is some issue with ... something I deleted in userAttributes section on mapUS.i3d file, when you use player flight toggle cheat and get higher in the air so you can see far, then parts of the terrain disappear, or turns like water, its very odd, but this definitely is my fault of deleting some important terrain environment userAttributes XML property. However it doesn't crash the game so I'll fix that lateron but obviously before any real game-play not to mention public release.
</p>

<p>
I posted a topic to PMC Tactical Forum about <a href="https://www.pmctactical.org/forum/viewtopic.php?t=23033" target="_blank">Terrain Editing daily updates while waiting for Giants Editor v10 release</a> so here I am now doing just that, starting to edit this mapUS copy to make my own wide open smooth (not flat) terrain.
</p>

<p>
I remember back in FS22 when playing on PMC Farm Lab which was empty besides the dealership building, actually I don't know if even that was there, I created savegame and basically created whole farming world in-game using placeables, never would have believed how great it became before I deleted it some weeks after. I would like to do the same thing here with this empty object-less mapUS copy, build my own world there with placeables.
</p>

<p>
However right now I want to test what happens and how far I can take it when increasing terrain size. Keeping heightmap png as default 2048x2048 like it is now in FS25, but just editing mapUS.xml and I3D files for <a href="../19/terrain-unitsperpixel.php">unitsPerPixel</a> and map height/width. Easy transparent test, from top of my head I do not remember if farmsim game engines freak out at some point if you edit it like that, I believe the most problems come when you start to changing image sizes on heightmap, _density, infolayer and _weight files.
</p>

<p>
So what I did was edit mapUS.i3d unitsPerPixel="2" and mapUS.xml map width="4096" height="4096" which are easy text file edits and double the terrain size, yes I know I know, its the cliche 4km terrain, but this is just my first test to see if fs25 engine with all the new ground deformation etc freaks out when terrain size changes on "the config level".
</p>

<p>
2024-11-20T15:01:00Z First test complete, I am slightly surprised... it works. There was few errors though.
</p>

<pre>
2024-11-20 14:56   Warning (C:/FS25.Mods/Dev/PMC_mapUS_1st_try/mapUS/mapUS.xml): Invalid farmland 'Not buyable (255)' found for deadwood mission spot 'spot01' at -551 331!
2024-11-20 14:56   Warning (C:/FS25.Mods/Dev/PMC_mapUS_1st_try/mapUS/mapUS.xml): Invalid farmland 'Not buyable (255)' found for tree transport mission spot 'spot01' at 127 -947!
2024-11-20 14:56   Warning (C:/FS25.Mods/Dev/PMC_mapUS_1st_try/mapUS/mapUS.xml): Invalid farmland 'Not buyable (255)' found for destructible rock mission spot 'spot3' at 433 364!
</pre>

<p>
These were some special new fs25 contracts, quite self explanatory on the errors (yeah, warnings but its all the same to me). Hmm I should be able to disable those contracts from the config files.
</p>

<p>
But yeah, I am somewhat surprised this worked just like that out of the box simply by changing config files leaving all the image files untouched. Just interesting thing for the farmland with those contracts.
</p>

<p>
Used <a href="https://github.com/SnakeManPMC/arma-3-WRP_Calculator" target="_blank">PMC WRP Calculator</a> to check what might be the first interesting terrain size to try out. Chose 5120 meters one, ie 5.1 kilometer x 5.1 kilometer size. This uses 2048 heightmap and 2.5 unitsPerPixel values.
</p>

<p>
This test, if successful, is the first good news result as it confirms unitsPerPixel still working with decimal points.
</p>

<p>
2024-11-20T15:11:00Z In-game test complete with 5.1km terrain, well... it loads, however ground textures and fruit_density are quite broken, ground textures are extremely low resolution which is kind of odd as previously they were just blocky painting but now they are like oatmeal low res blur, then fruit_density has grid pattern empty spots, it kind of reminds me of the FS19 decimal point terrain, my first 10.2km x 10.2km experiment had FS19 Seasons mod doing crops with that odd grid pattern. Hopefully its just about the _density image resolution being too low, will have to see.
</p>

<p>
Days ago already I had GRLEConvert processed FS25 GDM images into PNGs, so I now opened densityMap_fruits.png in GIMP, blacked it out with RGB 0,0,0 color, then copied all these density PNG images into terrain project dir and deleted the original GDMs. mapUS.i3d file references PNGs so... I'm not sure if this works or is that just some giants oversight, I think the game still requires actual GDM and GRLE images even though i3d points to PNGs. Now I'm going to test it out.
</p>

<p>
2024-11-20T15:27:00Z It was working fine, mapUS.i3d points to a .PNG file and no GDM in the dir, just PNG and it works fine, go figure. Hmm wonder whats the point of saving the files to GDM then if PNG is read just fine, no idea. Oh well maybe it needs more testing to see how it works in actual savegame.
</p>

<p>
Discovered new info: foliage like big bushes, those were painted into fruit_density in fs19 and fs22, but now apparently they have a brand new file because after blacking out fruit_density the big bushes were still present. Hmm. Could they be in densityMap_groundFoliage.png then, hmm its 2048 resolution btw while other density images are 4096. Interesting.
</p>

<p>
Opened densityMap_groundFoliage.png in GIMP, it was all black. However I know there is some shades present so opened "change foreground color" palette dialog, used hotkey O to select color picker feature and went to click around monitoring the palette, sure enough it started to flicker when I LMB pressed down moved mouse around the image. I found RGB colors for 1,1,1 and 2,2,2 and 4,4,4.
</p>

<p>
2024-11-20T15:36:00Z While I was scanning those RGBs alarm went off, its time for a lunch break...
</p>

<p>
2024-11-20T16:04:00Z Feeding time is over, back to terrain development.
</p>

<p>
Scanned the image a bit more and now found RGB 3,3,3 color value. Its quite difficult to find those different colors as the image looks just black to a human eye so you have to wield mouse randomly around to see the numbers flicker, then focus on the area where it happened.
</p>

<p>
Blacked out this image with RGB 0,0,0 and saved, then it was another in-game check to see if all the big bushes disappeared.
</p>

<p>
2024-11-20T16:12:00Z Confirmed working, RGB 0,0,0 in densityMap_groundFoliage.png removes all big bushes. In combination with blacked out densityMap_fruits.png the whole terrain is completely empty, barren, of any vegetation shrubbery.
</p>

<p>
Next I'm going to test if GRLEConverter turning GRLE into PNG works the same as GDM to PNG, meaning no GRLE just PNG in the data dir. First got the list of image names and resolutions from mapUS/ source files.
</p>

<pre>
infoLayer_environment.grle 512x512px
infoLayer_farmlands.grle 1024x1024px
infoLayer_fieldType.grle 4096x4096px
infoLayer_indoorMask.grle 4096x4096px
infoLayer_limeLevel.grle 4096x4096px
infoLayer_navigationCollision.grle 2048x2048px
infoLayer_placementCollision.grle 2048x2048px
infoLayer_placementCollisionGenerated.grle 2048x2048px
infoLayer_plowLevel.grle 4096x4096px
infoLayer_rollerLevel.grle 4096x4096px
infoLayer_sprayLevel.grle 4096x4096px
infoLayer_stubbleShredLevel.grle 4096x4096px
infoLayer_tipCollision.grle 4096x4096px
infoLayer_tipCollisionGenerated.grle 4096x4096px
infoLayer_weed.grle 4096x4096px
</pre>

<p>
Blacked out RGB 0,0,0 infoLayer_environment.png and created four color areas for infoLayer_farmlands.png, then also blacked out tipcol and other collision infolayer images, didn't write them down, heh lazy haha.
</p>

<p>
Going to copy these over to the original ones and see what happens, most likely if its GRLE vs PNG file extension issue fs25 dies regardless of what I blacked out.
</p>

<p>
2024-11-20T16:41:00Z It still loads and works in-game OK, my 4 color farmland areas work too. So far so good <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Hmm at this point I'm starting to feel tired, that general non-yawning feeling of slight exhaustion and eyes getting sore/strained. But I'll try to stay up longer as I'm really excited about learning new FS25 stuff, I'm almost hyperventilating excited, I love this stuff so much! <img src="../images/smileys/icon_biggrin.gif" alt="Smiley :D" loading="lazy">
</p>

<p>
Checked game log file, this is odd:
</p>

<pre>
2024-11-20 16:11 Error: AI block info layer has invalid size. Using default values.
</pre>

<p>
Hmm in FS22 that resulted in hard crash. Also, I didn't change any sizes, at all, NONE. How come there be invalid size error now, makes no sense. Guess its some quirk in giants engine v10 that it gives such error, possibly due GRLE image missing and only PNG present, dunno. I need to experiment more.
</p>

<p>
Next I changed terrain config back to default 2km size, I want to see if that would have anything to do with it, also I'm hoping to see ground textures returning to normal level of detail quality.
</p>

<p>
2024-11-20T17:07:00Z Another in-game test complete now with 2km size, hmm now log is error free, hmm <img src="../images/smileys/icon_confused.gif" alt="Smiley :?" loading="lazy">
</p>

<p>
2024-11-20T17:26:00Z Changed config back to 4096 meters which is 2 unitsPerPixel, I want to see if this is still error free with ground textures decent resolution.
</p>

<p>
Test confirms ground textures look OK and no error in the log. I'm getting more tired by every passing minute, but still need to edit, experiment, learn. I cant wait for tomorrow after a good night sleep when I attack these terrain studies again <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
After I edited mapUS/config/farmlands.xml file for my actual 1-4 colors/IDs used, there are no errors in the log anymore with 4km terrain in-game. This in my understanding matches the good old FS19 and FS22 4km terrain sizes quality wise, I think... or dunno, maybe weight images should be larger, ugh I don't know, its getting harder and harder to think straight as I'm so tired. Dunno maybe I need to get some sleep soon, but if I can stay awake even half an hour more it would be cool as I just recently ate, would not want to waste energy from that meal for just sleeping. Anyways.
</p>

<p>
I would like to increase density, infolayer, heightmap and weight image resolutions now, just one notch up, nothing too crazy, but I'd just want to see if it still works easily or becomes a can of worms. At least I would have my foot in the door so to speak for tomorrow if I get it started today.
</p>

<p>
Hmm was thinking about the mapUS.i3d.shapes file, wonder if there are geometry blocks for buildings, structures and trees, if there are... well then its quite nasty to try to farm in such terrain, not sure if that shapes file could be somehow nuked empty or simply deleted, hmm or perhaps take some empty terrains .shapes file from GE v9.0.6 meaning FS22 game data.
</p>

<p>
Hmm F5 debug command did show occluders which looked like terrain surface, it was high up in the air as I flattened heightmap to 20m elevation, guess riverbend springs is located much higher elevation in the heightScale. But no building or any other geometries, very odd, does farmsim engine calculate those in real time, what is .shapes file for if not geometry shapes? <img src="../images/smileys/icon_confused.gif" alt="Smiley :?" loading="lazy">
</p>

<p>
Because I alredy had written _run_graphicsmagick_FS22_weight_density_to_standard_large.bat file I decided to use it as-is, not sure if it works for all the FS25 filenames but I'm about to find out ...
</p>

<p>
Nope didn't work right off the bat, giants changed infoLayer_farmland.png filename to infoLayer_farmlands.png, oh man like REALLY? You had to fix the farmland vs farmlands plural thing, in such filename... geez, man talking about having priorities messed up big time <img src="../images/smileys/icon_biggrin.gif" alt="Smiley :D" loading="lazy">
</p>

<p>
2024-11-20T18:16:00Z In-game test complete with larger density and weight images. Everything looks OK in-game but log shows an error.
</p>

<pre>
2024-11-20 18:12 Error: Trying to set DensityMapHeightUpdater collision map with invalid size (33554432 vs 134217728)
2024-11-20 18:12   Warning: No tip collision map defined. Creating empty tip placement collision map.
</pre>

<p>
Hmm that sounds like infoLayer being too small.
</p>

<p>
But uah I'm so tired this is full zombi mode editing now, dunno guess I have to call it a night, I just want to do one more test by taking tip placement collision and increase its size a bit.
</p>

<p>
Resized infoLayer_placementCollision.png from 2048 to 4096 and infoLayer_placementCollisionGenerated.png the same.
</p>

<p>
2024-11-20T18:24:00Z Tested in-game and negative, still the same error.
</p>

<pre>
2024-11-20 18:22 Error: Trying to set DensityMapHeightUpdater collision map with invalid size (33554432 vs 134217728)
2024-11-20 18:22   Warning: No tip collision map defined. Creating empty tip placement collision map.
</pre>

<p>
Hmm wait what, I goofed that up, error clearly says *TIP* collision but I edited only those placement collisions, ugh, okay ONE more try with tipcol's resized to larger <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Resized infoLayer_tipCollision.png and infoLayer_tipCollisionGenerated.png from 4096 to 8192.
</p>

<p>
2024-11-20T18:31:00Z And its fixed, in-game test shows everything OK and log is clean, no more error. Excellent, now I can get some sleep <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Continue reading <a href="dev-diary-my-first-terrain-003.php">next page</a>, <a href="dev-diary-my-first-terrain.php">My First Terrain Home</a>, go back to <a href="dev-diary-my-first-terrain-001.php">previous page</a>.
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
