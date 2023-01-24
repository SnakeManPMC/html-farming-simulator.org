<!DOCTYPE html>
<html lang="en">
<head>
<title>Dev Diary PMC Korkscrew 40km PMC Farming Simulator 22</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Dev Diary PMC Korkscrew 40km PMC Farming Simulator 22">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<header>
<h1>Dev Diary PMC Korkscrew 40km PMC Farming Simulator 22</h1>
</header>

<section>
	<h2>Dev Diary PMC Korkscrew 40km FS22</h2>

<p>
This is developer diary for Farming Simulator 22 terrain called <a href="pmc-korkscrew-40km.php">PMC Korkscrew 40km</a>.
</p>

<p>
<i>Special note: this terrain was initially created under "deleteme_40km" project directory name. It got deleted and re-made as PMC Test Farm 40km with PMC_Test_Farm_40km project directory name, just before first release it was properly named "PMC Korkscrew 40km". This dev diary page text have been edited to only list the final proper name, to avoid any confusion.</i>
</p>

<p>
2021-12-13T12:42:00Z Decided to try creating 40km x 40km size terrain using 16384 res <a href="../19/terrain-density-weight-images.php">density and 8192 res weight</a> images.
</p>

<p>
Copy pasted deleteme_4km/ dir to deleteme_40km/ dir, this is our new terrain project. Then <a href="terrain-moddesc-xml.php">modDesc</a> edited title, description and class name.
</p>

<p>
Opened <a href="terrain-user-interface-images.php">icon.xcf and preview.xcf</a> in GIMP, changed texts and exported PNGs. Imagemagick converted PNG to DDS.
</p>

<p>
Copied <a href="terrain-overview-image-mapus.php">mapUS overview.dds</a> to my dir, converted to PNG and opened in GIMP. <a href="terrain-overview-image-rgb-colors.php">Wrote down all the RGB colors used</a>, I'd like to mimic giants mapview overview style one day. Resized image from 4096 down to 2048, not sure exactly why but... just felt like doing it. Imagemagick converted PNG to DDS.
</p>

<p>
Edited map.xml height/width to 40960 and map.i3d <a href="../19/terrain-unitsperpixel.php">unitsPerPixel</a> from 2 to 10. I'm going to use <a href="../19/pmc-grande-gardens-16km.php">PMC Grande Gardens 16km</a> <a href="../19/terrain-heightmap.php">heightmap</a> for this just for those nice rolling hills elevations, so I put in <a href="../19/terrain-heightscale.php">heightScale</a> 255 as thats what it uses.
</p>

<p>
Copied PMC Grande Gardens 16km heightmap into maps/mapUS/data/ dir under the name of heightmap.png, edited map.i3d to use the new file name.
</p>

<p>
Loaded in <a href="../19/terrain-giants-editor.php">Giants Editor (GE)</a> just to see if new heightmap and unitsPerPixel loads OK. It did. Edited sun -> attributes -> light -> range, to 41000 and fixed bbox min/max to 4096.
</p>

<p>
Hit CTRL-S to save ... and it was exporting a really long time, too long in fact, I ended the task. Lets start over.
</p>

<p>
Changed unitsPerPixel back to 2 and loaded it to GE, it loaded OK and my sun settings were not saved. So I just hit CTRL-S to save it now and that worked OK.
</p>

<p>
Then again changed unitsPerPixel to 10 and did the GE thing, but same endless exporting hour class happened again. Hmm cant GE handle 40km terrain?
</p>

<p>
Decided to try 4096 heightmap and 8 meter cell size which is 32.7km terrain, same as <a href="../19/pmc-eternal-sugar-beet-damnation-32km.php">PMC Eternal Sugar Beet Damnation 32km</a>.
</p>

<p>
First set unitsPerPixel back to 2 again, loaded it in GE, ran collision script just because, then saved and restarted GE, works OK. Then set unitsPerPixel to 4 which makes terrain 16.3km which I know is working, loaded it in GE, generated collision map and saved, works OK. Then set unitsPerPixel to 8 which is 32.7km terrain which I havent tried in FS22, saved and it took forever, 17 minutes in fact.
</p>

<p>
This kind of save time is unacceptable. GE v9.0.1 is broken, unusable for huge terrains. Yes I can create PMC Eternal Sugar Beet Damnation 32km as a one time joke, but there is no way anyone would develop a 32km terrain when it takes 17min to save the project.
</p>

<p>
Tested in-game, it was struggling a bit on the load but worked just fine.
</p>

<p>
Don't think there is any point testing larger because it takes this long to save in GE, other than a mere highscore. Even the highescore would be borderline cheating because if GE cant be used to normally edit the terrain, having such monster size in-game is pretty dead end choice. End users don't care how the terrain got to their dir, obviously, but its just plain wrong to claim any new highscores with FS22 engine as it in fact sucks compared to good old FS19.
</p>

	<h2>PMC Korkscrew 40km Project Name</h2>

<p>
2021-12-31T00:07:00Z Decided to try to get 40km terrain working after the initial failed attempt. I recall GE was saving the project for a very long time and I gave up, but even the 32.7km terrain saves 17min so maybe I gave up too soon. Obviously you cannot normally edit terrain which saves 17min but at least an tech demo it would be cool to have.
</p>

<p>
Used my _run_generate_terrain_template_from_sample_data_FS22.bat to create PMC_Korkscrew_40km terrain project directory.
</p>

<p>
Had to actually fix my powergrep4 mass replace text strings as I noticed it made a mistake match in "terrainsize". So I fixed that and re-created the project dir.
</p>

<p>
Using GIMP and imagemagick created icon and preview DDS images.
</p>

<p>
Loaded project in GE v9.0.2, imported vehicle shop triggers and then ran scripts -> map -> create collision map. Also changed sun -> attributes -> light -> range, to 50000.
</p>

<p>
Created robocopy sync bat file for this project and ran it. Then it was time for first in-game test. Worked fine, just had one error because heightmap was larger than weight images.
</p>

<p>
Then ran _run_graphicsmagick_FS19_weight_density_to_standard_8km.bat
</p>

<p>
Then ran _run_graphicsmagick_FS22_infoLayer_to_16384.bat
</p>

<p>
Loaded terrain in GE and ran create collision map again, just in case, saved and exited.
</p>

<p>
In-game check shows everything OK. Alright guess its time to set this terrain to 40km size and see what GE thinks about it <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
2021-12-31T01:10:00Z GE started saving the project, interesting to see how many minutes will this take. There was no edits, I simply loaded the project and straight away hit CTRL-S ...
</p>

<p>
2021-12-31T01:11:00Z And while I was still writing the above paragraph, saving finished, huh what? <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy"> ME CONFUSED hehe
</p>

<p>
First in-game test was a CTD, the normal error with too small infoLayer images:
</p>

<pre>
2021-12-31 01:12 Error: AI block info layer has invalid size.
</pre>

<p>
Sorry to bring you the bad news but FS22 will not support massive 40km x 40km size terrains. <i>Edit: or so you thought ...</i>
</p>

	<h2>2022-01-18 Its Working</h2>

<p>
2022-01-18T05:41:23Z Was idling in boredom by PMC DevSurf, reading local notes, then I came across "deleteme_40km" terrain experiment which I remember failing and me concluding that "40km terrains wont work.".
</p>

<p>
However what I have learned since that experiment was conducted is that the error "AI block map" can be fixed with larger infoLayer images. I was shocked to see that I judged 40km size to not work even though it was simply my inexperience with FS22 which lead to this conclusion.
</p>

<p>
I immediately got fired up and switchd to PMC Gaming to try again <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Guess this should be embarrassing or goofy etc, but I didn't even blink as I noticed that oh okay I do have PMC_Korkscrew_40km terrain still here in the FS22 editing directory <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
2022-01-18T05:49:50Z Started by converting GDM/GRLE into PNG and running PNG image resolution graphicsmagick bat file.
</p>

<p>
I was surprised to find out that infoLayer resolutions are already 16384 so that should not be an issue. This was a bit scary because too low infoLayer size was my best guess why it crashed previously.
</p>

<p>
Synced into FS22 mods dir and started game up, lets see what happens...
</p>

<pre>
2022-01-18 05:57 Error: AI block info layer has invalid size.
2022-01-18 05:57 Error: Failed to load DensityMap grle image 'C:/FS22.Mods/Dev/PMC_Korkscrew_40km/maps/PMC_Korkscrew_40km/data/PMC_Korkscrew_40km_farmland.grle'.
2022-01-18 05:57 Warning: Loading farmland file 'C:/FS22.Mods/Dev/PMC_Korkscrew_40km/maps/PMC_Korkscrew_40km/data/PMC_Korkscrew_40km_farmland.grle' failed!
</pre>

<p>
Hmm yeah now I remember that all other GDM/GRLE vs PNG loadings work fine except <a href="../19/terrain-farmland.php">farmland</a>, I have no idea why this one and only infoLayer GRLE wont load from PNG, really odd. Okay lets save in GE, hopefully it wont take 17min this time and then try again.
</p>

<p>
I'm also resizing <a href="terrain-fieldground.php">plow/lime etc levels</a> to 16384 while I'm at it.
</p>

<p>
PMC_Korkscrew_40km.i3d saved in 31348.859000 ms, heh luckily it was a fast GE save <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Another in-game test and nope, still crashes:
</p>

<pre>
2022-01-18 06:07 Error: AI block info layer has invalid size.
</pre>

<p>
It is odd as all infoLayer images are 16384 which is plenty of large, hmm.
</p>

<p>
Decided to increase _density image resolutions to 16384, I mean why not. The ai block info layer issue is from infolayer files, but hmm dunno man, they all should be large enough.
</p>

<p>
Who knows, maybe its farmland as its 2048 which is smaller than heightmap, heh dunno. Going to try increasing its size to 4096 as well, which I did.
</p>

<p>
Then it was again another GE save to get PNG's converted to GDM/GRLE.
</p>

<p>
2022-01-18T06:21:45Z Negative, in-game test still CTD with ai block info layer size. Hmm. I'm going to reduce the terrain size a bit, drop it to next step up from 32.7km which is known to work.
</p>

<p>
Changed unitsPerPixel to 9 which is 36864 meters. Also PMC_Korkscrew_40km.xml edited of course.
</p>

<p>
I didn't re-save it on GE, dunno if it would save some meters info into the binary files.
</p>

<p>
Still the same AI block invalid CTD. Changed unitsPerPixel to 8.5 which is 34816 meters, lets give that a try. Negative still CTD. Okay lets go back to basics, changing it to 32.7km size which I know works.
</p>

<p>
2022-01-18T06:31:27Z It works, 32.7km works OK, there is no issue with the actual infolayer images, its just an engine limitation. Very sad.
</p>

<p>
I'm going to try like 8.25m unitsPerPixel size just for the sake of it that is it everything beyond 32.7km size which doesn't work.
</p>

<p>
Next was unitsPerPixel 8.25m which makes it to 33792 meter terrain. Negative, doesn't work, its apparently ANYTHING beyond 32.7km size what goes belly up.
</p>

<p>
Oh well, we have reached the limit.
</p>

<p>
This terrain wont work as 40km config so I have nothing to lose, I'm going to try increasing infoLayer resolution to, heh yep you called it... 32768 resolution <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
I cannot remember that far back but someone might have tried to use this size resolutions in FS17 as I remember seeing some silly forum posts about such numbers, or dunno maybe they were just speculating or talking their usual nonsense.
</p>

<p>
But seriously though 32768 is <a href="https://www.pmctactical.org/arma3/terrain.php" target="_blank">ArmA 3 terrain satellite texture image</a> sizes which is just nuts, I am not even sure if graphicsmagick is able to convert the PNG to that size, hmm also aren't there some PNG resolution limit too hmm.
</p>

<p>
I shut down all extra software just incase my 16gb RAM runs out, I remember long time ago using graphicsmagick for 40960 res image and it was a huge struggle with nothing else running. Now I have firefox with discord and twitch running along with EditPadPro 7. Lets see what happens <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2022-01-18T06:54:49Z To my surprise PMC Gaming computer with 16gb RAM using graphicsmagick did resize the images to 32768 and even more suprisingly GE v9.0.2 loaded and saved the project like nothing heh. At this point I was actually really excited to try it in-game <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

	<h2>40km Terrain In-Game History In The Making</h2>

<p>
<b>2022-01-18T07:02:21Z It works! 40km x 40km Farming Simulator 22 terrain in-game!</b> <img src="../images/smileys/icon_biggrin.gif" alt="Smiley :D" loading="lazy">
</p>

<p>
Wrote the below paragraph with the screenshot into PMC discord when the news broke:
</p>

<p>
When you have crazy size 32.7km terrain and then I go <i>"hold my beverage..."</i> heh, yup, I had to do it... did few experiments and managed to get insane large 40km x 40km terrain in-game. This is absolutely far out dude. I cannot believe this works haha!
</p>

<a href="screenshots/PMC-Korkscrew-40km-2022-01-18T0700.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Korkscrew-40km-2022-01-18T0700.jpg" class="terrainimg" loading="lazy" alt="Farming Simulator 22 Terrain - PMC Korkscrew 40km Landscape"></a>

<p>
2022-01-18T07:33:13Z Was grleConverter converting the GE v9.0.2 saved infoLayer 32768 res GRLE's to PNG format... and grleConverter crashed. Its 32bit program so yeah its apparently not capabale of processing this large images. So such infolayer image resolutions are a one way street, just like in <a href="../19/terrain-multi-angle.php">FS19 the multi terrain angle</a> and <a href="../19/terrain-detailheight-density.php">detailHeight_density type</a> increases caused.
</p>

<p>
Oh well, not a complete show stopper, you could work around it, but yeah this is quite crazy stuff we're dealing with here hehe.
</p>

<p>
2022-01-18T08:07:05Z I lost those infoLayer GRLE images, so used graphicsmagick to generate brand new black 32768 res 8bit 256 color images.
</p>

<p>
I was a bit surprised to see GE loading the graphicsmagick generated images just fine at first try, I thought some graphicsmagick parameter must be wrong.
</p>

<p>
When I loaded the new project save into FS22 and went to soil composition page, game crashed. I have seen this before once but cannot remember what caused it, possibly rocks density image, or the levels images, not sure. <i>Edit: its different resolution density images, they all need to be the same pixel resolution.</i>
</p>

<p>
Obviously if this cannot be resolved, it would not be a working terrain.
</p>

<p>
Tested savegame load, that worked ok, could even purchase tractor, plow and started plowing. My density images are 16384 so obviously the crop accuracy was horrible, this felt worse than how it was on PMC Eternal Sugar Beet Damnation 32km terrain back in FS19, unless I've forgotten how bad it was.
</p>

<p>
When I checked the last graphicsmagick PNG image specifications report text file, it listed density images as 8192, which actually makes sense now as I just copied them over from the <a href="pmc-undefined-farms-20km.php">PMC Undefined Farms 20km</a> project and forgot to run increase resolution custom bat heh. Oh well.
</p>

<p>
Was planning to try if density images would work as 32768 resolution <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
I mean this is just an fishing expedition, there is no way I could make an playable 40km x 40km terrain when ESC mapview zoom level detail is so shitty in this game engine, you would have to pretty much completely navigate in 3D world using landmarks, only info you might get from mapview is the general location of your vehicles.
</p>

<p>
Decided to proceed carefully, resizing density images to 16384 resolution first.
</p>

<p>
Have to wonder though, are there any memory usage limits as FS22 is 64bit software, that will it accept pretty much any size image, hmm heh.
</p>

<p>
When loading this project to GE v9.0.2 it uses 1.9gb RAM.
</p>

<p>
PMC_Korkscrew_40km.i3d saved in 41859.951600 ms, really odd how quickly it saves.
</p>

<p>
2022-01-18T08:47:30Z Testing in-game, well I cant believe this, dunno what I did but ESC mapview soil composition page will not CTD anymore. Hmm could it have been density image resolution, hmm?
</p>

<p>
And the most ridiculous thing is that 16384 resolution density images allow about same kind of crop accuracy as we get in PMC Grande Gardens 16km using 8192 res density images, at least in ballbark it feels the same. Did some ploughing and it was more or less fine, I could live with that accuracy even if it meant living in 3D world only as ESC mapview is all but useless.
</p>

<p>
I mean shit dude... this kind of looks like you could make 3D only 40km terrain now where you would enjoy playing some absolutely sick size large scale farming <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Of course there is so million things that might not work properly, for example when you start to add mods, do you encounter some memory etc limit, who knows. Some issue might come up very far into testing kind of like the FS19 seasons did with 10.2km terrains, that odd crop grid pattern.
</p>

<p>
But yeah, plowing a field in 40km terrain works <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2022-01-18T08:53:32Z And now its so late in my day, alarm went off few minutes ago for 17hrs day mark, so its time for me to call it a night. Tomorrow for sure I'll continue editing this terrain and try to get it into release condition, I want to release historical terrain, the largest ever in history of farmsim game series, I want every farmsim community player to be able to witness and try out this kind of monster terrain.
</p>

<p>
<b>2022-01-18T17:18:56Z</b> New editing day has started. Todays agenda is to test if this terrain really works in farming conditions, plowing, seeding, fertilizing, harvesting etc.
</p>

<p>
2022-01-18T17:31:20Z Took backups of PMC_Korkscrew_40km project dir. Then went to in-game to take another look, fresh look for start of the day, I want to get my bearings that whats in-game now, how it looks and what do I want to do first.
</p>

<p>
Well I looked around in 3D and heightmap is not there, its just RGB 0,0,0 black. ESC mapview shows just blob of melted mess hehe. The actual cultivator_density and lime/etc level content is from PMC Undefined Farms 20km terrain. So what I want to do first is to make some real nice and smooth rolling hills 4096 heightmap in L3DT to give some character to this terrain.
</p>

<p>
I want heightmap to be real low level elevations so it wont be some disney world fantasy up and down roller coaster.
</p>

<p>
heightScale="34" from L3DT quickly generated heightmap, it originally came out as huge 200+ meter altitude but I nuked it down to 35m heh.
</p>

<p>
Edited PMC_Korkscrew_40km.i3d for new heightScale value, actually forgot to do this before loading it in GE so exited, edited and then back into GE again. Aligned careerStart and vehicle shop to the ground and off the field, saved and then synced into FS22 mods dir, time for another in-game test.
</p>

<p>
2022-01-18T18:18:54Z In-game test shows that while my intentions were good with the heightmap... they were way overkill for terrain of this size, now the 1m to 35m heightmap looks completely flat without any elevation features, I ran with speed of 20 for couple of minutes and did not see a single elevation haha.
</p>

<p>
Alright, lets make another heightmap and keep the elevations this time to something like 300m or so to give it some character <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<pre>
heightScale="288.61"
</pre>

<p>
Checked in-game and heightmap looks sexy <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<a href="screenshots/PMC-Korkscrew-40km-2022-01-18T1838.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Korkscrew-40km-2022-01-18T1838.jpg" class="terrainimg" loading="lazy" alt="Farming Simulator 22 Terrain - PMC Korkscrew 40km Landscape"></a>

<p>
Next I want to do new <a href="../19/terrain-design-document.php">GIMP design doc</a> for this terrain, cant be using other terrains files. The problem becomes from pixel resolution, if I were to draw design doc in one meter per pixel (1m/px) scale it would mean 40960 x 40960 resolution image which obviously wouldn't work. If I split it to two, so 2m/px scale then it still would be monster 20480 x 20480 resolution. So my only (PMC Gaming hardware) feasible option is to use 10240 x 10240 resolution which makes it 4m/px scale. So when I'm drawing a road with 2 pixel pencil it comes out as 8 meters wide in-game. I think if I use 4 pixel pencil its borderline disney land looking fantasy road as it becomes way too wide. Needs testing.
</p>

<p>
Also I'm not sure how the scaling up works like if you have diagonal road made with 4 pixel pencil, does it resize up and still looking nice or will it go broken with kind of missing pixels along the way.
</p>

<p>
Oh well nothing I can do about it, there is no way GIMP and 16gb RAM would run 20k image with multiple layers. Guess I could try designing the terrain on PMC DevSurf with GTX TITAN X and 64gb RAM, but yeah dunno.
</p>

<p>
2022-01-18T19:34:41Z GIMP design doc painting some dirt roads <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<a href="screenshots/PMC-Korkscrew-40km-2022-01-18T1932.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Korkscrew-40km-2022-01-18T1932.jpg" class="terrainimg" loading="lazy" alt="Farming Simulator 22 Terrain - PMC Korkscrew 40km Landscape"></a>

<p>
Dunno, this looks just so screwy and goofy to me heh.
</p>

<a href="screenshots/PMC-Korkscrew-40km-2022-01-18T1949.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Korkscrew-40km-2022-01-18T1949.jpg" class="terrainimg" loading="lazy" alt="Farming Simulator 22 Terrain - PMC Korkscrew 40km Landscape"></a>

<p>
2022-01-18T20:46:53Z Oops have been busy painting design doc and chatting in PMC Farming discord, guess I missed couple of dev diary entries, ouch <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Painting is done now, farm yards, forests and fields are in. Fields I did with mass select option, grew selection 30 pixels then shrunk it 5 pixels to give a bit round corners to them, then just painted all red.
</p>

<p>
Then cut asphalt and dirt roads from railroad shape and dirt roads from asphalt roads heh, got it? OK.
</p>

<p>
Then just exporting all layers into PNGs.
</p>

<p>
Copied graphicsmagick design doc to weight images bat files from PMC Undefined Farms 20km source directory. Had to edit cultivator_density bat to find the new file name "fields.png" instead of the cumbersome long satellite_texture_cultivator_density.png heh.
</p>

<p>
2022-01-18T21:17:02Z Had to do some tweaking into the bat files, but now all the PNGs are generated properly in 16384 resolution.
</p>

<p>
Hmm what the hell, I ran _run_convert_gdm_grle_to_png_and_delete_gdm_grle_FS22.bat bat file and this time grleConverter did NOT crash on the huge 32768 res GRLE images, err how come? <img src="../images/smileys/icon_surprised.gif" alt="Smiley :o" loading="lazy">
</p>

<p>
2022-01-18T21:51:31Z Lunch break time, been chatting on discord helping guys to use graphicsmagick etc, its been fairly on/off editing, like right now... I honestly lost track what I did previously heh "ooh look shiny! *runs off*" haha. Anyways off to eat, when I'm done need to figure out what is the next step <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2022-01-18T22:18:04Z Feeding time over, back to 40 kilometer beast.
</p>

<p>
Checked latest design doc converted images in GE and ... something is off, roads dont align with cultivator_density image. Investigated and found the reason to be old weight images still in the dir, blacked everything out and copied new ones in, then everything was looking as it should be.
</p>

<p>
Next GE save then took forever again, dunno why. PMC_Korkscrew_40km.i3d saved in 427817.052700 ms.
</p>

<p>
After saving ... noticed that something went wrong, several or all infoLayer_ GRLE images disappeared. No idea why. Guess its time to restore todays backup, arent we happy to have taken one before todays editing session.
</p>

<p>
Restored the backups and then ran GDM/GRLE to PNG converter batch file, grleConverter did not crash and had nothing wrong in the console output... however no files was written in the directory, the PNGs did not appear (and my bat rightfully deleted all the GRLEs).
</p>

<p>
So now I'm going to use my black image generating bat file _run_graphicsmagick_FS22_infoLayer_create_black_32768.bat this is pretty cool as it creates these from thin air heh.
</p>

<p>
2022-01-18T23:11:36Z And again got sidetracked watching a little bit elite dangerous downtoearthastronomy twitch live stream and chatting in discord. Yeah I know, this is not proper editing to have some twitch live stream running on the side, music is fine as it requires no concentration, but yeah I need to get my focus back, either I chat in discord or edit, I cant do both.
</p>

<p>
Checked in GE and fruit_density is not done right, fields are filled with grass, hmm.
</p>

<p>
2022-01-18T23:51:58Z Sorted out graphicsmagick bat files, had couple of issues because I changed how cultivator_density image is processed. Such things always break other things down the line, should not make "improvement" fixes without fully considering all the fallout you get elsewhere in the tool pipeline.
</p>

<p>
Finally got fruit_density sorted out that there was no grass in the fields due cultivator_density changes, GE had everything looking fine, I aligned careerStart to this new design doc location, then saved which was quite fast.
</p>

<p>
Checked in-game and heightmap was flat as a pancake, hmm, did I forget to update the new heightScale, must have been. Indeed it was, previous was 34 meters while new one is 288.61 meters, heh quite the change <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Umm but once I went to change that... heightscale was 255, err what? Oh right, now I remember, I forgot to update heightmap as well, heh aand back to fixing bugs <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
2022-01-19T00:08:40Z Correct heightmap png and heightScale were in GE, now I could see the nice rolling hills elevations there, finally we are getting somewhere. It already feels like a long day, dunno why, maybe it was so hectic and distracting with discord and twitch ealier, dunno.
</p>

<p>
2022-01-19T00:23:41Z In-game test complete, forgot ESC mapview overview.dds image, no big deal. Otherwise everything seems to be in order for me to start farming <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Got overview.dds done. Hmm I need to setup graphicsmagick bat to generate this for me automatically.
</p>

<a href="screenshots/PMC-Korkscrew-40km-2022-01-19T0032.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Korkscrew-40km-2022-01-19T0032.jpg" class="terrainimg" loading="lazy" alt="Farming Simulator 22 Terrain - PMC Korkscrew 40km Landscape"></a>

<p>
Then it was true farming field work testing time. Going to move the terrain project mod dir into my regular mod game-play dir and start plowing, fertilizing, seeding and hopefully then harvesting a field.
</p>

<p>
These fields are so huge that I'm just going to field work a small strip or corner of it, there is no point spending a day working on mega fields <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<pre>
2022-01-19 00:59 Error: Blocked area map is wrong size for terrain (32768 x 32768) vs (4096 x 4096)
</pre>

<p>
Hehe never gets old seeing that 32768 resolution <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2022-01-20T03:38:06Z New editing day has started. Today begins very late, spent half a day writing <a href="../19/terrain-design-document-graphicsmagick.php">GIMP design doc to GE images using graphicsmagick tutorial</a>, just finished.
</p>

<p>
So looks like yesterday ran into that well known error blocked area map is wrong size, gotta fix that now, also need to fix it on all my bat files so its automatically set to correct 4096 resolution so this issue never comes up again.
</p>

<p>
But first things first, backups <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Fixed all the bat files in root dir, now I wont see this error ever again after using these bats to process infoLayer images.
</p>

<p>
Did the usual GDM/GRLE to PNG conversion which loses the huge infoLayer GRLEs, then created RGB 0,0,0 infoLayer 32768 res ones except the placementgenerated whatever as 4096 like it needs to be. Loaded up in GE and saved.
</p>

<p>
2022-01-20T04:06:34Z PMC_Korkscrew_40km.i3d saved in 582925.336100 ms, Zzz ...
</p>

<p>
In-game check confirmed, block area map is wrong size error fixed.
</p>

<p>
And this concludes editing of PMC Korkscrew 40km for today, I need to put in some work for PMC Undefined Farms 20km as penalty_box requested some <a href="../19/terrain-farmland-painting-gimp.php">farmland image</a> fixes etc.
</p>

<p>
2022-01-27T00:51:02Z New editing day has started, kind of, I'm currently editing <a href="pmc-cereal-region-32km.php">PMC Cereal Region 32km</a> but GE is loading PMC_Helpers for approximately 12min so decided to come inspect PMC Korkscrew 40km files in the mean time, to get a jump start on this project which will be my next to work on after being done with 32km.
</p>

<p>
Looks like PMC Korkscrew 40km uses proper class name for directory and file names, good.
</p>

<p>
No placeables created.
</p>

<p>
Design doc dir shows graphicsmagick bat files in the separated compartmentalized file setup before the all in one bat (I don't think there are one for FS22 yet, hmm). Terrain design is the goofy screwy looking which I really don't like, especially some of the roads are so wicked looking I never seen something like that in any google/maps areas.
</p>

<p>
PMC_Korkscrew_40km_design_doc.xcf is 10240 x 10240 resolution, so that makes it what, 4m/px or something.
</p>

<p>
2022-01-27T01:06:00Z Well back to <a href="pmc-cereal-region-32km.php">PMC Cereal Region 32km</a> as GE finished loading. Also I started to feel schizo by editing two terrains at the same time, that is not going to work heh. One at the time, one at the time <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
2022-01-27T01:17:20Z Back to PMC Korkscrew 40km, now this terrains editing day really starts <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
And we start by taking backups. Then the basic get me up to speed orientation in-game check. When I synced the terrain project dir to FS22 mods dir and launched the game, the terrain was 45km trial version, oh right now I remember I initially tested it on this terrains project files, so now I need to restore the previous backup to get the original 40km version back.
</p>

<p>
When done that and a new sync launched FS22, first thing I noticed this terrain only has placeaholder text version of icon/preview images, so need to take a screenshot for some nicer preview image or perhaps use the design doc image.
</p>

<p>
In-game inspection shows: no <a href="../19/terrain-vehicle-shop.php">vehicle shop</a> 3d building, no trees, no <a href="../19/terrain-field-definitions.php">field definitions</a>, no <a href="../19/terrain-selling-points.php">selling points</a>, no grain bins, no detailed farmland image.
</p>

<p>
Went to drive into a dirt/gravel road and noticed grass was painted with extremely low resolution images, hmm so this is fruit_density of ... could it be 8192 res, I hope its at least 16384, I doubt I would ever increase it to 32768 as it is such an silly high res, but yeah this is borderline unplayable with this low res images.
</p>

<p>
Dirt/gravel road was very wide, not disneyland goofy wide but yeah it was wide for sure. If any way possible design doc should be painted with smaller pencil for roads.
</p>

<p>
2022-01-27T01:34:27Z Exited game from the menu and it crashed. Interesting, need to keep an eye on that. Alright I guess the basic info is at hand now, got fairly long bugs list to go through when making improvements.
</p>

<p>
Loaded the project in GE and first thing I did was to change sun -> attributes -> light -> bbox min/max to 20480 for a 40km terrain size. Then saved immediately, just to see what we are dealing with here. Well, it seems to take a long time so I proceeded to copy those placeable files into this projects dir in preparation of adding some of them in.
</p>

<p>
So copied placeable files for meridian and sellingpoints dirs, then the actual placeables.xml and storeItems.xml which are pre-filled with zeroed out lines for basic functionality.
</p>

<pre>
PMC_Korkscrew_40km.i3d' saved in 544790.997800 ms
</pre>

<p>
Oh my these save times. I will try to be smart today, when I place lets say trees I only export the PMC_Helpers for the created splines and well maybe Forests transformgroups instead of pressing simply CTRL-S to save everything if it really takes nine (9) minutes to save as seen above.
</p>

<p>
Created GE v9.0.2 script to setup large terrain viewport, I did it for 45km terrain now, I am not sure what issues it might cause but assuming it just works there is no point having script for 8km, 16km, 32km and so fort, I just have my biggest terrain and that is it, 45km heh.
</p>

<p>
Then imported template PMC_Helpers.i3d, created Exclude.for.Release/PMC_Helpers/ dir and exported PMC_Helpers.i3d there. Now we are good to go for editing.
</p>

<p>
2022-01-27T02:20:33Z Finished adding 12 selling points to GE PMC_Helpers and in placeables.xml config file. Then added four new farmer game-mode meridian flat bottom grain bins.
</p>

<p>
2022-01-27T02:24:34Z Created first forest tree line near the vehicle shop area.
</p>

<p>
2022-01-27T02:44:34Z First line of utility poles added, usual across the train by the vehicle shop area.
</p>

<p>
Then created another long set of utility poles leading into two farm yard areas.
</p>

<p>
2022-01-27T03:01:18Z Created first field definition next to the vehicle shop area. Then decided to hit CTRL-S to save while going to the head, lets see how long it saves this time, lets hope its not the same 9min because I'll be done long before that heh.
</p>

<p>
PMC_Korkscrew_40km.i3d saved in 19751.696700 ms. Hmm I don't understand why GE v9.0.2 saves the first time awfully long time and the second time is normal speed meaning quick.
</p>

<p>
Design doc for fields is really odd, some fields near the vehicle shop are extreeeeeemely long, just silly fields, I don't know what I was thinking when painting that design doc heh. Oh well, they could be somewhat easily fixed by just adding some filter/mask type area/lines to one layer and use them as field dividers. Actually... maybe I'll do that, it would improve the field layout a great deal, also interesting editing method to try out as I never done it before.
</p>

<p>
2022-01-27T03:21:46Z Anyways field definitions are mostly done now, I did several, close to ten, so making any more is just waste of my time because the impact on game-play would not change much unless it was the whole terrains fields done.
</p>

<p>
After doing few more field definitions (heh) it was time to add couple of more meridian flat bottom grain bins to some farm yards. Got two farm yards done, four grain bins each. Not sure if I should change the amount of grain bins, maybe 2, maybe 6 etc to keep some variation between farm yards.
</p>

<p>
Then placed trees next to the farm yards with grain bin silos and utility poles. Then it was time for another, well kind of first object version in-game test again.
</p>

<p>
2022-01-27T04:01:44Z In-game test was okay. The absolute huge size of 40km really shows in my design doc, there are great distance between field - road - field, for example then utility poles are there between field and the road it really shows the scale, which is big.
</p>

<p>
I should tighten up the design doc for sure, expecially as its 4m/px scale what I recall. But yeah this is more like spectacle megalodon test terrain so this will do just fine for now.
</p>

<p>
However next I need to add some details to farmland image because this will not do that there are only one painting covering everything.
</p>

<p>
2022-01-27T04:04:40Z It was 13min until my lunch break so decided to start it right now, good time for a break, then we blast off another 4hrs 30min editing session.
</p>

<p>
2022-01-27T04:40:22Z Feeding time over, back to fourty kilometers. Todays second editing session begins. Oddly enough there was pretty much nothing going on in discord during the first editing session.
</p>

<p>
Alright so lets GIMP paint a farmland image so we can have some sexy land lots to buy.
</p>

<p>
In Design doc created new layer called "Field Dividers" and then just painted with 10 pixel pencil using RGB 0,0,0 black color those areas where I want the fields to be divided. Interesting to see if it comes out any good.
</p>

<p>
Actually... before doing any more work on this, I'm going to bring in them to GE for a look.
</p>

<p>
Err haha mister "oh look shiny!" is in business again, just realized I was supposed to start painting *FARMLAND* image, not any field dividers hehe, oh man... oh well, editing is editing even if it took shiny never ending leap path <img src="../images/smileys/icon_biggrin.gif" alt="Smiley :D" loading="lazy">
</p>

<p>
But in all fairness, my next task / staying on task mistake was fortunate one, if these field dividers work then I can paint more accurate farmland image so yeah dividers first, then farmland.
</p>

<p>
Saved GE project and exited, then powergrep4 mass changed GDM/GRLE to PNG and used grleConverter to do the images, it crashed on the 32768 res infoLayer images, so used my graphicsmagick bat file to generate fresh new black ones.
</p>

<p>
Turns out the field dividers drawn with 10 pixel pencil were WAY too wide heh, they looked like ... just very odd huge areas between fields, not even slightly resembling an narrow divider.
</p>

<a href="screenshots/PMC-Korkscrew-40km-2022-01-27T0514.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Korkscrew-40km-2022-01-27T0514.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
So in GIMP I shrunk the painted area with 2 pixels, not sure what it should be now, it kind of matches 5 pixel pencil so lets give this a try.
</p>

<p>
2022-01-27T05:58:17Z Had to play around with selection grow, invert, shrink and grow again quite a while before got the desired results or even somewhat close to it. Loaded it in GE and field dividers are still way too wide, they just look way too fat. It is so damn misleading as design doc is 4m/px scale. Oh well more tweaking to do.
</p>

<p>
Did another round of field dividers, actually deleted the previous ones and created new ones with 2 pixel pencil, they still look awfully wide in GE heh.
</p>

<p>
Also as I beefed up field sizes with the selection grow/shrink method, now pretty much all trees and utility poles are on fields. Not sure if I should re-create the splines or adjust the fields. I guess adjusting the fields would be faster, but the issue is WHERE are the trees and utility poles as I didn't put them into the design doc.
</p>

<p>
Then did... umm what, third? field divider adjustment in GIMP, this time it looked even better, then ran it through the graphicsmagick voodoo magic again before copying PNGs into GE project dir.
</p>

<p>
2022-01-27T06:49:11Z Okay in GE it looks good enough for me, its still not american farming realistic tight field dividers but yeah this is good for now. Started to import PMC_Helpers again and seems like the usual insane long processing time delay, well this will be todays last import. After this is done I'm switching into the next terrain in our FS22 testing terrains release list.
</p>

<p>
But uh oh, that fucking farmland, oops, almost forgot hehe. Oh well I can hopefully PNG to GRLE convert that much faster than the i3d import. So I'm now going to fix those trees and utility poles on fields (ugh) and after that farmland image.
</p>

<p>
Man this should have been planned before hand, objects on fields. <b>Never do major design doc field adjustments after you have placed objects</b>, it always ruins the perfectly working terrain as objects appear in fields (or rather fields are dragged under objects).
</p>

<p>
Always finish design doc fields first, once you are 100% happy with them, then lock that shit down, no more design doc field edits when you start placing objects.
</p>

<p>
I already knew this but where it was not lesson learned, its lesson refreshed in memory heh.
</p>

<p>
2022-01-27T07:17:15Z First utility pole line re-created.
</p>

<p>
2022-01-27T07:31:41Z Second utility pole line re-created, and well thats all of them. Now switching to fix forest tree lines.
</p>

<p>
2022-01-27T07:44:14Z And forest tree lines re-created, PMC_Helpers exported and GE project saved. Off to the next phase which is finally the farmland image.
</p>

<p>
Oh btw I did mess up tree transformgroups, two of the tree lines are now in the same transformgroup, honestly no idea how did that happen but makes no difference in-game so I leave it be.
</p>

<p>
Created <a href="../19/terrain-farmland-painting-gimp-rgb-list.php">farmland image RGB color value copy-paste list</a> which I can use in EditPadPro tab/txtfile to go through the colors systematically not making many mistakes (well unless I type wrong numbers into GIMP).
</p>

<p>
2022-01-27T08:13:28Z All farm yard areas painted, now started to add the small fields around vehicle shop for those new farmer or start from zero game-mode types with limited funds, cheap to buy.
</p>

<p>
2022-01-27T09:07:07Z Lunch break, doing good progress on the farmland image, again I'm wondering why I'm putting so much effort to such "test" terrain, but yeah it will be real nice as all core terrain functionality is here and done properly. But now, food <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
2022-01-27T10:01:28Z Feeding time over, jumping back to farmland.
</p>

<p>
Alright days last editing session commences, I have 5hrs 40min before my official bedtime (17hrs timer), lets get some terrains edited.
</p>

<p>
2022-01-27T11:38:12Z Finished farmland image. Aayeah.
</p>

<p>
Just in case I continue this one day, last color used was RGB 255,80,80
</p>

<p>
Created _run_rename_farmland_image_to_terrain_specific.bat file to rename farmland.png into PMC_Korkscrew_40km_farmland.png file name.
</p>

<p>
Then just copied PNG to terrain project dir, loaded it up in GE, checked (just in case) that it shows up, it did, save and exit. Next just removing GDM/GRLE equivalent PNGs, switching PMC_Korkscrew_40km.i3d PNG back to GDM/GRLE and then sync files to FS22 mods dir. Ready to test farmland.
</p>

<p>
Yeah I don't even bother doing the farmlands.xml yet because I don't know what the last ID is, I'll check the error from the log and then do it.
</p>

<p>
2022-01-27T11:59:58Z In-game testing complete, log had very odd errors only to 62 ID channels, hum why not more I know there are more than sixty two colors painted thats for sure. Hmm will investigate farmlands.xml config file.
</p>

<p>
Copy pasted full 255 farmlands ID lines to farmlands.xml just because, also I think the numChannels="6" need to be increased but cant remember to what right now. Going to try 7.
</p>

<pre>
2022-01-27 12:06 Error: Farmland-Id 128 not defined in farmland ownage file
</pre>

<p>
Hmm could that be from the numChannels or would it be such coincidence that I painted 127 areas/colors heh. Probably the numChannels. Another test with numChannels="8".
</p>

<pre>
2022-01-27 12:11 Warning: Farmland-Ids not set for all pixel in farmland-infoLayer!
2022-01-27 12:11 Error: Farmland-Id 11 not defined in farmland ownage file
2022-01-27 12:11 Error: Farmland-Id 191 not defined in farmland ownage file
</pre>

<p>
Okay looks like I missed RGB color for ID 11, numChannels="8" seems to work and 190 is the highest ID channel I painted.
</p>

<p>
Found that ID 11 missing, dunno what happened there. Fixed that by painting with that RGB color (checked from graphicsmagick farmland bat file). But now have to jump through the GRLE - PNG - GRLE hoops again, sigh.
</p>

<p>
2022-01-27T12:48:00Z New farmlands image is working as expected and without errors, nice.
</p>

<p>
Next I need to fix the field definitions that got outdated after new design doc field divider stuff. And some selling points are now on fields heh, what a mess. Never change design doc after you place objects (including field definitions).
</p>

<p>
GE was "Loading ..." after importing PMC_Helpers and I got tired of waiting, decided to go cut my hair <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
2022-01-27T13:22:01Z Back to editing. Lets relocate those selling points first.
</p>

<p>
Pressed some wrong key again and transformgroups, objects, went into some bizarre locked axis mode where they cannot be moved normally, luckily CTRL-B still works at that point. Who knows maybe its a random bug but most likely I pressed some wrong key in my shit logitech cheapo keyboard.
</p>

<p>
2022-01-27T13:43:41Z Field definitions fixed, few new bonus fields added as well.
</p>

<p>
Checked in-game, everything seems to be working.
</p>

<p>
I think that wraps it up for this 40km on todays editing session. I want to get started with that PMC King Corn 45km monster terrain.
</p>

<p>
2022-02-01T11:24:21Z New editing day has started, I'm hoping this wont be much editing but more like wrapping this project up for a next release, at least I don't want to get bogged in for another days long editing marathon heh.
</p>

<p>
That opening paragraph for today is copy-paste (except UTC stamp) because nothing has changed, it applies to PMC Korkscrew 40km as well.
</p>

<p>
First I moved PMC_Korkscrew_40km/ mod dir to FS22 dev mods dir (wow a lot of dirs) for in-game orientation check. These days always begin with some orientation, I don't even have access to the previous dev diaries I wrote (seen above in this page) when sitting and writing this paragraph now today (did I make it sound weird?). So I'm going in basically quite blind, cant remember much in what stage this terrain was on last editing session, honestly I cant even remember how this terrain looks as I have <a href="pmc-super-six-6km.php">6km</a>, <a href="pmc-redwhiteblue-10km.php">10km</a>, <a href="pmc-undefined-farms-20km.php">20km</a>, <a href="pmc-cereal-region-32km.php">32km</a>, this one and <a href="pmc-king-corn-45km.php">45km</a> terrains under work now hehe.
</p>

<p>
Synced latest project dir files into FS22 mods dir, now we are ready for in-game check.
</p>

<p>
2022-02-01T11:32:09Z When I got in-game I was pleasantly surprised seeing trees and utility poles around vehicle shop area, wow at least this ain't some empty object-less terrain heh. Design doc is somewhat american road grid type, its free hand made so its not so boring symmetrical. Has a lot of farm yads. Has several field definitions. Not sure but it doesn't appear to have any grass fields, at least cant see any from the ESC mapview. Has 12 selling points with all products accepted including bales (need to copy new templates). Has contracts as you would expect with field definitions. Has very detailed farmland image, cool.
</p>

<p>
Overall I am happy what I'm seeing here. Expecting nothing and seeing this is, very nice.
</p>

<p>
Guess you could say I didn't remember anything about this terrain hehe, I need to reduce my bunny hopping from one project to another to keep better track on things or create official web page for each terrain with screenshots to refresh my memory. It ain't easy when you have so many terrain projects running <img src="../images/smileys/icon_biggrin.gif" alt="Smiley :D" loading="lazy">
</p>

<p>
Farm yards are huge with no driveway piece of dirt to them. No trees other than few around the vehicle shop area. Long utility pole line connection to outside world. Selling points are distributed out, but still contained in fairly small area relatively speaking, outer edges of the terrain have no selling points, to me it looks weird but technically they are distributed far enough.
</p>

<p>
Terrain overall looks very barren empty deserted because there are no trees and farm yards even though there are many of them, has no objects not even trees on them, so yeah it honestly doesn't look very sexy. Looks empty. Heightmap does look sexy, just the right amount of elevations rolling hills type to make it look interesting but not impossible to farm. Has field dividers, those kind of roads but without roads heh. Many farm yards are sloped badly, will be painful to place buildings on those.
</p>

<p>
One farm yard has four meridian flat bottom 3608 grain bins.
</p>

<p>
Okay first in-game check going on and I'm like a damn newbie here, this is stupid, I should get off from PMC Gaming computer and go read the dev diary above, its dumb to list this stuff here as I go while its already been written above days prior.
</p>

<p>
So yeah anyways, its done and written but in the future I wont be doing these guessing games, when I return to a old terrain project (well "old" relatively speaking) I need to read my own dev diaries to get up to speed, hey thats one of the reasons I write these.
</p>

<p>
Heh sorry for todays opening text, bunch of useless thoughts while getting oriented, wont happen again <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
2022-02-01T12:08:10Z Hmm what to do next... I am not going to start days long editing phase on PMC Korkscrew 40km, its good to go as is. So hmm guess that wraps everything up as the last terrain I already know for sure is good to go as well. I have now edited and went through all these "Test-Farm" series of terrains.
</p>

<p>
Yeah I am now switching over to screenshots taking phase so I can create the official web pages for all these terrains. Trying to also come up with proper terrain names, I am not going to release them as test-farm's anymore.
</p>

<p>
2022-02-03T15:47:13Z New editing day has started, well short one at least. Today I'm going to fix the rocks_density image which is black, it needs some rocking fixes, then going to add few TrailerParkFarms (TPF) big vehicle sheds to placeables.
</p>

<p>
First I took backups, its scary to work with these huge terrains, I don't want to make any mistakes and lose progress.
</p>

<p>
Added two(?) TPF sheds to new farmer game-mode placeables. Then on second location the slope was too steep for these huge buildings, other end would have floated so I skipped that location. These nice rolling hills heightmaps are difficult for buildings. Yeah yeah I could sculpt the heightmap, but not with GE heightmap tools heh, I need to do it in L3DT.
</p>

<p>
Location 3 farm yard beefed up a bit, two vehicle sheds and more bins of all sorts.
</p>

<a href="screenshots/PMC-Korkscrew-40km-2022-02-03T1630.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Korkscrew-40km-2022-02-03T1630.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
Well this is interesting, I could not find any farm yards which didn't have really bad slope <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
Heightmaps with rolling hills type elevations look cool, but are impossible to place buildings because you cant place them on a slope. Yeah you can terrain sculpt but yeah I'm not going to try GEs bad tools, it would have to be done in L3DT and, well yeah..
</p>

<p>
So I only did one farm yard, half way. This has to be enough for now.
</p>

<p>
2022-02-03T16:38:48Z Next was to export final PMC_Helpers and save the project.
</p>

<p>
Then used powergrep4 to mass replace placeables.xml strings, new file paths for our new objects.
</p>

<p>
Updated placeables.xml and storeItems.xml by hand what was necessary.
</p>

<p>
2022-02-03T16:57:24Z In-game test complete, one TPF 92x200 shed type didn't work. Rocks have been fixed.
</p>

<p>
Go that fixed. Then updated icon/preview images.
</p>

<p>
2022-02-03T17:11:44Z In-game test complete, no errors.
</p>

<p>
Yeah there aren't that many new vehicle sheds, but as said slopes, man... This concludes todays editing session, this terrain is good to go for a release now.
</p>

<p>
2022-02-11T05:08:19Z Final editing day before release has started <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Talked with penalty_box in his twitch live stream chat when he was playing on PMC Super Six 6km, he came up with a name for this terrain, "PMC Korkscrew 40km".
</p>

<p>
Plan now is to create new farmer game-mode starter vehicles. And it got done.
</p>

<p>
2022-02-12T15:18:00Z New editing day has started. I would say this is mopping up day basically. Now its time to give this terrain its proper name for the project files, which is PMC Korkscrew 40km.
</p>

<p>
First thing to do is to take one last backup of the old PMC_Test_Farm_40km/ directory, never forget backups heh. Then renamed the directory to its final proper name.
</p>

<p>
In the PMC_Korkscrew_40km.xml config file saw that mapus floating tutorial icons are still present, so removed them. Poof, gone.
</p>

<p>
2022-02-12T15:51:00Z Terrain project directory and file naming complete. Powergrep4 mass replace strings seems to have worked as well. Loaded it up in GE v9.0.2 and it works fine, didn't save though as if it loads it should work OK.
</p>

<p>
Unpacked new farmer starter vehicles.xml from 7zip file, that should be ready to use now.
</p>

<p>
2022-02-12T22:34:00Z Updated selling point XML config files with silage and such removed (I think they have been removed).
</p>

<p>
2022-02-12T23:14:00Z PMC Korkscrew 40km v0.1 released! <img src="../images/smileys/icon_biggrin.gif" alt="Smiley :D" loading="lazy">
</p>


	<h2>DensityMapHeightUpdater Terror</h2>

<p>
2022-12-09T17:49:00Z New editing day has started, edited modDesc.xml descVersion to 72.
</p>

<p>
Took backup from the current project dir, now plan is to try to fix the "Error: Trying to set DensityMapHeightUpdater collision map with invalid size" which comes from wrong size GDM/GRLE images. I said "try" because cant remember how these mega big terrains infoLayer and density images are done, meaning that grleConverter cannot convert the huge GDM/GRLE back to PNG and it has to be created from scratch using graphicsmagick.
</p>

<p>
Converted all GDM images to PNG, they were 16384 pixel resolution. Then did same for GRLE and here is where the problems start, all except infoLayer_placementCollisionGenerated.grle were 32768 pixel resolution, so grleConverter crashed.
</p>

<p>
This means those GRLE images have to be created from scratch using graphicsmagick.
</p>

<p>
So I checked out _run_graphicsmagick_FS22_infoLayer_create_black_32768.bat file and for some odd reason infoLayer_placementCollisionGenerated was set for 4096x4096 pixel resolution, hmm odd. I have no recollection to late winter 2022 when I discovered how to get 40km terrains working and created these huge terrains like PMC Korkscrew 40km, maybe the 4096 res image "works" but then gives error in the log. Previously the "does huge terrain work" issue was that whole FS22 crashed when tried to load 40km terrain with 16k res GRLEs.
</p>

<p>
Anyways this is just speculation before getting to GE and then maybe in-game.
</p>

<p>
Edited PMC_Korkscrew_40km.p3d, changed GRLE to PNG for these new images, then started GE v9.0.2 and loaded the project up. Then ran script for large terrains, saved project and exited. Project saving took forever again with these huge terrains hehe.
</p>

<pre>
Scenefile 'E:/Farming.Simulator.22.Editing/PMC_Korkscrew_40km/maps/PMC_Korkscrew_40km/PMC_Korkscrew_40km.i3d' saved in 551344.175502 ms at Fri Dec  9 22:50:44 2022.
</pre>

<p>
Yikes. Then deleted the 32k res PNGs, edited PMC_Korkscrew_40km.i3d to point back to GRLEs and we were ready to test FS22 in-game.
</p>

<p>
Changed modDesc to v0.1.1, edited terrain release compilation bat and readme.txt files.
</p>

<p>
2022-12-09T22:56:00Z PMC_Korkscrew_40km_v0.1.1.7z has been compiled, now off to test it in-game <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Unfortunately in-game test still shows same error in the log <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
Loaded terrain project in GE again, used create ground collision map script, I hightly doubt this does anything as the image file was already correct size, but hey lets try anyways. Files tipColInfoLayer.grle and infoLayer_tipCollisionGenerated.grle both are currently 4.01mb in size, if that size changed after saving the project, well then most likely the script did change the collision map somehow.
</p>

<p>
This generation lasted so long I was bored to death while waiting. Once done, hit save and again more waiting heh. This save did not take long at all, well at least some good news.
</p>

<p>
The mentioned GRLE's are same file size. Next changed modDesc.xml to v0.1.2 and did the usual compiling, time for another in-game test.
</p>

<p>
2022-12-09T23:56:00Z Negative, still the same error, hmm hmm.
</p>

<p>
2022-12-10T00:36:00Z Did several tests almost randomly, just throwing shit to the wall in hopes that something would stick... and finally managed to get rid of this densitymapcrap error by going FS22 in-game, starting a new savegame, saving it, then copying infoLayer_placementCollisionGenerated.grle and infoLayer_tipCollisionGenerated.grle files into terrain project dir and compiling an new version.
</p>

<p>
infoLayer_tipCollisionGenerated.png from the savegame is 16384 pixel resolution, hmm hmm. Okay so, maybe I assumed all infoLayer images need to be 32k res when I created that graphicsmagick bat, I just cant remember anymore. Oh well now the error is gone and I know how to fix it, make infoLayer_tipCollisionGenerated to 16k res <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
2022-12-10T03:42:00Z Started to upload PMC_Korkscrew_40km_v0.1.4.7z for PMC Tactical forum testing.
</p>


	<h2>2022-12-18 Utility Pole Wires</h2>

<p>
2022-12-18T12:08:00Z New editing day has started, todays goal is to add utility pole wires.
</p>

<p>
First took backup, copied the 7-zip archive to three different HDDs and one another computer for safety, never forget backups, especially when you start to fiddle with big feature like utility poles (well, at least visible feature).
</p>

<p>
Started GE v9.0.3, loaded terrain project up, ran setup large terrains script and then imported PMC_Helpers which caused GE to go into (Not Responding) mode for a very long time.
</p>

<p>
Its so stupid that I'm wasting my valuable editing time just waiting for GE to finish freezing, just crazy stuff man.
</p>

<p>
2022-12-18T12:19:00Z Finally GE sorted itself out, project loaded we are good to go. Was happy to see that this terrain only has two (2) utility pole splines so adding wires wont take long at all. However guess in a big picture its kind of bad that we only have two telephone lines here, hmm.
</p>

<p>
Deleted existing utility pole objects which had no wires on them, imported new utility pole object with three transformgroups setup for the wires to connect and then imported the actual wire object, setup initial transformgroup IDs for EasyFence.lua script, now we are ready to start <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2022-12-18T12:29:00Z First utility pole objects (without wires) line re-created, whoah it was really long total of 745 poles on it, felt like flying along with it using RMB-WASD never ends heh.
</p>

<p>
2022-12-18T12:42:00Z Finished re-creating both utility pole lines, put the new objects into Utility.Poles transformgroup and moved the source objects into PMC_Helpers and exported PMC_Helpers to its Exclude.For.Release/ dir location. Okay, it is done <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Decided to save the project at this point while I am going to stretch my legs and visit the head while GE is processing that saving (assuming it takes forever again).
</p>

<p>
2022-12-18T12:59:00Z Saving done and now its time to add terrain edge block geometry things.
</p>

<p>
Finished doing the planes, used my own <a href="../19/terrain-edge-block.php">PMC Farming Terrain Edge Block Tutorial</a>. Then ran into issue that cant find anything small and quick to fix, so lets delete PMC_Helpers, save the project, compile a new testing version and check it out so if there was some issue, its better to catch it now than hours later.
</p>

<p>
Changed modDesc to v0.1.5 version. Added required mods dependency for TrailerParkFarms (TPF) vehicle sheds. Edited readme.txt and release compilation bat files.
</p>

<p>
2022-12-18T13:12:00Z Compiled new PMC_Korkscrew_40km_v0.1.5.7z testing version.
</p>

<p>
FS22 in-game test gives bad error:
</p>

<pre>
2022-12-18 13:18 Error: Blocked area map is wrong size for terrain (32768 x 32768) vs (4096 x 4096)
</pre>

<p>
Luckily its a known bug, so can easily fix, well ok not "easily" but there is nothing to it, just have to suffer through some GE work.
</p>

<p>
Ran _run_graphicsmagick_FS22_infoLayer_create_black_32768.bat to create proper size infoLayer images. Then created new powergrep4 action file to replace GRLE with PNG on *.i3d and *.xml files, ran it, loaded terrain project in GE.
</p>

<p>
2022-12-18T13:35:00Z Started GE saving.
</p>

<p>
2022-12-18T13:44:00Z Finished saving, uuuh.
</p>

<p>
Then did the usual new testing release shuffle.
</p>

<p>
2022-12-18T13:45:00Z Compiled new PMC_Korkscrew_40km_v0.1.6.7z testing release.
</p>

<p>
2022-12-18T13:51:00Z FS22 in-game test complete, no errors no warnings <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2022-12-18T14:00:00Z Started to put together PMC Tactical forum release for v0.1.6 testing version <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>


	<h2>Start From Zero Check</h2>

<p>
2023-01-02T05:30:00Z Launched PMC Korkscrew 40km v0.1.6 farm-manager savegame.
</p>

<p>
First thing I noticed that in farm-manager game-mode new farmer vehicles are still present, so this has not been fixed in v0.1.6 ouch.
</p>

<p>
Farmland areas for farm yards are done. Cheapest and smallest farmland area is 55 which is 34.2ha and costs 325.6k. This terrain in the center area has tons of 300-600k costing land areas which surround farm yard land area 2 which costs 632.3k.
</p>

<p>
No grass fields.
</p>

<p>
Contracts filtered out fertilizing, sowing and spraying, then refreshed as much as possible... and available contracts list was less than one page. This terrain needs more field definitions, definitely. Highest paying contract was harvest oat F15 207.9ha with ETA 16hrs 35min, must deliver 2.039m and can keep 153.5k liters. Lowest paying was plowing F04 44ha with ETA 3hrs 21min, which is kind of in the high duration even for plowing.
</p>

<p>
2023-01-02T05:43:00Z This test result was: FAILED!
</p>

<p>
2023-01-03T19:00:00Z New editing day has started, not really, but in Sources/ dir GIMP design doc image dir is still named "test" so I renamed it properly to PMC_Korkscrew_40km. Renamed one bat and two GIMP XCF files too. Replaced test strings in the bat files using powergrep4.
</p>


	<h2>2023-01-11 Editing Field Definitions</h2>

<p>
2023-01-11T08:49:00Z New editing day has started, today is on the last quarter for me already but there is still several hours time so need to get started, no specific goal just to add as many fixes as I can within time and motivation remaining.
</p>

<p>
Took backup of design doc even though I have no plans of editing it today, copied it over three different HDDs and also PMC Linux computer for safety. Then did same for the terrain project dir itself.
</p>

<p>
Edited vehicles.xml and changed farmId="1" to farmId="1" defaultFarmProperty="true" string, now new farmer vehicles do not show up in farm-manager and start from scratch game-modes. Easy fix <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Selling points accepted grass, hay, silage etc which should only be accepted in animal dealer because the bale thing, fixed this by replacing sellingpoints/ dir from my objects.for.terrains/ template dir, a very simple fix heh.
</p>

<p>
Then added selling point proper unique names, I made these from top of my head dunno if they came out OK but easy to change later if they still suck.
</p>

<p>
Took backup of PMC_Korkscrew_40km_dem.png heightmap image, then opened PNG in GIMP, foreground fill painted RGB 0,0,0 meaning 0 meter flat elevations everywhere, saved and closed the image. Took backup of this 0m elevation heightmap PNG for future use as well.
</p>

<p>
2023-01-11T09:17:00Z Started GE v9.0.2 (yeah v0.9.3 is buggy for me, crashes often) and loaded terrain project up, ran setup large terrains script, imported PMC_Helpers which was done fast and that surprised me.
</p>

<p>
Then ran script to toggle field render areas. Had to go into GIMP design doc to check how this terrain looks like as I don't remember from top of my head, need to orient myself to north/south in GE heh.
</p>

<p>
2023-01-11T09:23:00Z Started to create single shape field definitions, this will take a while and tortures my CTRL copy-paste finger <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
2023-01-11T09:45:00Z Reached end of first row, NW corner to NE corner, three cultivator_density fields.
</p>

<p>
But now... I'm going to cook food and eat before continuing any further.
</p>

<p>
2023-01-11T10:37:00Z Feeding time is over, back to suffering with field definitions.
</p>

<p>
2023-01-11T11:23:00Z Reached SE corner, now one more row to go and then we are done unless I missed any spots <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
<b>2023-01-11T11:27:00Z Field definitions single shapes are now done!</b> <img src="../images/smileys/icon_biggrin.gif" alt="Smiley :D" loading="lazy">
</p>

<p>
Did preferences hotkeys configuration as G for CTRL-D and H for CTRL-B, this way it was easier to press without using CTRL key which always murders my pinky finger in long typing sessions.
</p>

<p>
Flew around in WASD-RMB mode, could not spot any missing field definitions, I think we are solid here.
</p>

<p>
Moments later I realized that my G and H hotkeys were bad, if you type in transformgroup or attribute names, those keys trigger their shortcut action, ouch. Oh well need to disable them after done editing field definitions.
</p>

<p>
2023-01-11T12:32:00Z Short break to do a household chore, now back to edit field definition corner pieces for the dealership area fields.
</p>

<p>
2023-01-11T13:42:00Z Finished adding more corner pieces to the dealership area so Start From Zero savegames can get to easy beginning, don't have to drive half across the terrain for lucrative fertilizing contracts etc.
</p>

<p>
Ran get field sizes script, number of fields 719, largest is Field 18 361.086ha, bulk of the copy-pasted single shape fields are 19ha and smallest field is Field 472 2.247ha in size.
</p>

<p>
Then added several small to medium size grass fields. Did not manage to add any tiny ones for quick baling contracts, but well they are small enough I guess.
</p>

<p>
Bugs / issues list had "small fields missing", well its up for a debate but yeah now I hadded tons of small fields when single shape field definitions got created.
</p>

<p>
2023-01-11T13:58:00Z Deleted PMC_Helpers and saved project, exited GE. Right now I'm feeling tired, happy to have done all field definitions but I just feel tired like sleepy and kind of exhausted from the editing as well, going to "reward myself" with some TV watching now before snoozing off to sleep tonight. Today was pretty nice and important day for PMC Korkscrew 40km editing, cant wait to check out the results tomorrow in FS22 <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>


	<h2>2023-01-11 Corner Pieces</h2>

<p>
2023-01-11T23:30:00Z New editing day has started, todays goal is to umm err hopefully create Start From Zero savegame to see if this terrain is compatible after all these fixes. But editing wise, hmm selling point locations might need a reshuffle, hmm dunno what else, need to do FS22 in-game test to find out.
</p>

<p>
Last night field definition editing left heightmap as 0m elevations PNG, so I now restored the original from 7-zip backup packet.
</p>

<p>
Copied maps_sprayTypes.xml from PMC Cereal Region 32km terrain, edited PMC_Korkscrew_40km.xml to point into this new file, now our fields spray rates are more decent levels.
</p>

<p>
Edited modDesc.xml to v0.1.7, edited readme.txt and release compilation bats as well.
</p>

<p>
2023-01-11T23:38:00Z Compiled PMC_Korkscrew_40km_v0.1.7.7z for testing, crossing fingers everything works.
</p>

<p>
2023-01-12T00:05:00Z FS22 in-game check complete, everything was fine, great actually, except field definitions where the F020 - F071 were done with big single shapes and rest are just the tiny "copy-paste tiny fitting anywhere template" field definition. It looks extremely bad as just a bit more than half of the first two rows are big fields and rest are copy-paste tiny ones, that needs to be fixed no matter how crappy editing field definitions is.
</p>

<p>
So unpacked 7-zip with heightmap 0m PNG image on it and started GE v9.0.2, ran setup large terrains and toggle render field areas scripts. Imported PMC_Helpers as I need my 2D top-down camera for accurate field definition creation, luckily that import did not take forever, dunno why. Then just browsed to F071 transformgroup and started to enlarge corner pieces. I am not going to do them all, but at least several, we'll see.
</p>

<p>
2023-01-12T02:57:00Z All done editing field definition corner pieces, did some good work but I don't think its even half way done yet, probably more like 25% heh. Its just so mind numbingly boring and tedious task that I cant do any longer. Now I need to get into FS22 in-game test and if its OK then start autodrive MASTER savegame to record some network waypoints.
</p>

<p>
Unpacked 7-zip heightmap backup, then edited modDesc readme etc yadi yada.
</p>

<p>
2023-01-12T03:00:00Z Compiled PMC_Korkscrew_40km_v0.1.8.7z for testing and autodrive recording session, possibly even Start From Zero compatibility test as well.
</p>

<p>
2023-01-12T03:48:00Z Finished FS22 in-game test and autodrive recording session for 2 selling points around the dealership, I immediately was shocked by the disgusting low res ground detail textures aka _weight image resolution, they were so blocky it was horrible. I need to change _weight image resolution from 4096 to 8192, also need to double check that _density images are 16384 res. All this requires graphcismagick work from design doc source, should not be a problem but lets take it carefully one step at the time.
</p>

<p>
Took backup from terrain project dir, but not from design doc dir as that was done just hum yesterday or when it was. Now I can mess up the project and can still restore this last good stable version.
</p>

<p>
Deleted some old PNGs and graphicsmagick bat files from design doc dir, then copied latest all-in-one graphicsmagick design doc to GE image processor bat file.
</p>

<p>
I would like to increase GIMP XCF design doc image resolution to 16384, but hmm nah not now, some other time, lets not make things more complicated than they have to be.
</p>

<p>
Used _run_graphicsmagick_FS19_weight_to_8192_ADVANCED.bat to resize _weight PNG images from 4096 to 8192 pixel resolution in PMC_Korkscrew_40km/data/ dir. Now these match the new ones coming from design doc. Next ran _run_graphicsmagick_FS19_weight_images_to_all_black_blank.bat to make sure there are no leftover overlapping etc pixels. Deleted cultivator_density.gdm and fruit_density.gdm images.
</p>

<p>
Then edited PMC_Korkscrew_40km.i3d and replaced cultivator_density.gdm and fruit_density.gdm file extensions with PNG. Copied new _weight images into terrain project dir and then loaded it up with GE v9.0.2 fearing what might broke ...
</p>

<p>
2023-01-12T04:23:00Z Well something did, hmm looks like cultivator_density and fruit_density are 10240 x 10240 resolution so number one, why do they work, I thought GE wont accept such resolutions? Interesting. Then second they make the terrain off-set, err dunno how to explain it, fields are too big for the terrain scale, hmm.
</p>

<p>
Oops now I see what I did wrong, forgot to run _run_graphicsmagick_resize_cultivator-fruit_density_to_16384.bat to resize those images to 16384 res heh. Got that done, copied images to terrain dir and launched GE again ... and no issues. Hit CTRL-S to save GDM images, which took forever, it was now saving some new .cache. file.
</p>

<p>
Once GE was finally done I again edited PNG to GDM file extensions in I3D file, deleted the _density.PNG's and thats about it.
</p>

<p>
Did the file edit shuffle for v0.1.9 release.
</p>

<p>
2023-01-12T04:41:00Z Compiled PMC_Korkscrew_40km_v0.1.9.7z for testing, hopefully now I can enjoy autodrive network recording better.
</p>

<p>
2023-01-15T00:31:00Z With the above v0.1.9 testing release I did autodrive network and Start From Zero game-play compatibility test without any problems. Sure field definitions were unfinished, but single shapes are working OK.
</p>


	<h2>2023-01-23 Massive 13 Hours Field Definition Editing Session</h2>

<p>
2023-01-23T09:10:00Z New editing day has started, todays goal is to do field definition corner pieces, would be wonderful to get them all done but even doing few here and there through out the day would be just fine, a bit of progress.
</p>

<p>
First I took backup, read above its described few times already. Then restored heightmap with 0m elevations, started GE v9.0.2, loaded terrain project up and set it up for field definition work.
</p>

<p>
Found a field definition called "field-CONTINUEEEE" heh this must be the one I left off last time, so I'll continue from here <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Now its just painful field definition corner piece editing, enlarge them using CTRL-B key pressing, hmm maybe I'll again configure GE to have it bind to some other key, dunno. Anyways, lets get started.
</p>

<p>
2023-01-23T10:20:00Z At this point feel a bit not exhausted but pinky finger CTRL pressing starts to wear on me, need to walk around a bit, to stretch my legs and "reset" before continuing. Doing a good progress though, feeling good otherwise. Hmm interesting that its been barely an hour of work at this point, feels like its been much longer but UTC timestamps wont lie.
</p>

<p>
2023-01-23T10:54:00Z Alright break is over, back to corner pieces ...
</p>

<p>
2023-01-23T12:01:00Z Lunch break finished (forgot to write it down, few moments ago). Back to suffering with corner pieces.
</p>

<p>
2023-01-23T14:02:00Z Had to take another break, starting to crawl out of my skin, having that "caged animal" feeling... dunno what is it with field definition creation as its such repeating task which would be perfectly suited for computers to handle but here I am sitting hours and HOURS doing it. It is very frustrating physical task as funny as that sound, how can sitting in front of the computer be "physical" but yeah like I said, I have to take breaks, walk around stretch my legs a bit and especially my arms, hands on keyboard and mouse just doing this repeating task for long periods of time is very demanding, really weird.
</p>

<p>
2023-01-23T14:21:00Z And back, had nothing else to do after trying to do some dumbbell curls with water bottles hehe, lets get back to corner piece editing.
</p>

<p>
uuuh, me, no, like... uuuh..
</p>

<a href="screenshots/PMC-Korkscrew-40km-2023-01-23T1530.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Korkscrew-40km-2023-01-23T1530.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
2023-01-23T15:53:00Z Okay that's it, need to take a good solid at least hour maybe more break, my pinky finger is hurtin' from all the CTRL-B pressing and mind starting to go numb of hammering corner pieces. Have to take a longer break, hopefully will continue lateron today, still plenty of time left in the day.
</p>

<p>
Exported latest fields transformgroup to I3D file with UTC timestamp.
</p>

<p>
2023-01-23T17:42:00Z Just finished eating a meal, now its good time to get back to field definition corner pieces editing, while watching fs22 twitch stream.
</p>

<p>
2023-01-23T20:42:00Z Exported fields I3D once again and went on a little break, I really don't think this is it for tonight, but we are getting late in the evening. I want to do few more before calling it a night.
</p>

<p>
2023-01-23T21:05:00Z Okay I'm bored of not having anything to do, no RSS news to read, nothing on forums heh, back to field definitions, trying to take it easy now not to burn myself out on the last two hours of today.
</p>

<p>
2023-01-23T21:52:00Z When switching to the next field definition it was on SE corner, oh wow we have reached the bottom row! <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
This still doesn't mean I can finish this tonight, because just being in the bottom row, or in SE tip, doesn't mean much for the workload, there can still be a huge number of field definitions to go through, in fact I cannot even see the bottom yet on that scenegraph scroll list heh, but hey its a very very good sign to have reached this point <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
<b>2023-01-23T22:34:00Z Field definition corner pieces as single shapes "and more!" are completed!</b> <img src="../images/smileys/icon_biggrin.gif" alt="Smiley :D" loading="lazy">
</p>

<p>
Oh my, this was about 13hrs editing session with obvious lunch breaks and few stretching my legs breaks. Uuh I feel exhausted but SO HAPPY that these corner pieces are now done, they came out way too detailed which probably explains why it took me 13hrs to do it, I should have just let them be more simple. Some field definitions had 5 or more corner pieces which is a lot.
</p>

<p>
But man, I am so relieved now that these are done, PMC Korkscrew 40km is awesome Start From Zero contracts terrain now <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2023-01-24T07:19:00Z New editing day has started, todays goal is simply to compile a new testing version and try it out fs22 in-game to see how the new field definition corner pieces look like, to verify everything is OK.
</p>

<p>
Unpacked original heightmap elevations PNG, decided not to do save in GE just to see if that causes any issues or is heightmap PNG completely detached from the rest of the TERRAIN.I3D config file stuff. Edited modDesc.xml to v0.2.1, readme.txt and release compilation bat file.
</p>

<p>
Well this is odd, version number was v0.2 in modDesc but in readme.txt and release compilation bat files it was v0.1.9 which is listed in previous dev diary entries as well, hmm when did I change modDesc then and why no new release compilation was made, hmm how can that be... really odd. Oh well we are now in v0.2.1 and that is it, go with it <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2023-01-24T07:23:00Z Compiled PMC_Korkscrew_40km_v0.2.1.7z for testing.
</p>

<p>
2023-01-24T07:58:00Z FS22 in-game test complete, no errors no warnings, field definitions are looking GREAT! Contracts board is ballooning with absolutely massive contract rewards, Start From Zero contract players are like kids in a candy store now! <img src="../images/smileys/icon_biggrin.gif" alt="Smiley :D" loading="lazy">
</p>

<p>
Field size summary 2023-01-23T22:55:00Z
</p>

<pre>
smallest field:
Field 472 (field) : 2.247 ha

largest field:
Field 398 (field) : 847.544 ha

grass fields:
Field 3 (field-grass) : 57.086 ha
Field 5 (field-grass) : 49.761 ha
Field 7 (field-grass) : 38.310 ha
Field 341 (field-grass) : 24.575 ha
Field 342 (field-grass) : 28.557 ha
Field 343 (field-grass) : 25.879 ha
Field 350 (field-grass) : 69.242 ha
</pre>

<p>
Things are looking pretty good field wise. Although I would still like to have smaller grass fields so Start From Zero savegame farmers could quickly do the initial silage baling contract without spending exhausting 6hrs on very first contract. For example that 69.2 hectare grass field is massive, you will spend endless hours field working it, smallest is 24.5ha which is... do-able... sure, but man that is still fairly large.
</p>

<p>
2023-01-24T08:27:00Z Starting to upload PMC Korkscrew 40km v0.2.1 to PMC Tactical forum for testing <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

</section>

<footer>
<p>
<a href="pmc-terrains.php" class="button">PMC Terrains FS22</a>
<a href="changelog-pmc-korkscrew-40km.php" class="button">Changelog PMC Korkscrew 40km</a>
<a href="pmc-korkscrew-40km.php" class="button">PMC Korkscrew 40km</a>
<a href="../index.php" class="button">PMC Farming Simulator root</a><br>
<i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i>
</p>
<?php include("../include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>