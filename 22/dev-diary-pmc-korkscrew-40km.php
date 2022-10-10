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
Guess this should be embarrassing or goofy etc, but I didn't even blink as I noticed that oh okay I do have PMC_Korkscrew_40km terrain still here in the fs22 editing directory <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
2022-01-18T05:49:50Z Started by converting GDM/GRLE into PNG and running PNG image resolution graphicsmagick bat file.
</p>

<p>
I was surprised to find out that infoLayer resolutions are already 16384 so that should not be an issue. This was a bit scary because too low infoLayer size was my best guess why it crashed previously.
</p>

<p>
Synced into fs22 mods dir and started game up, lets see what happens...
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
Edited PMC_Korkscrew_40km.i3d for new heightScale value, actually forgot to do this before loading it in GE so exited, edited and then back into GE again. Aligned careerStart and vehicle shop to the ground and off the field, saved and then synced into fs22 mods dir, time for another in-game test.
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
Design doc dir shows graphicsmagick bat files in the separated compartmentalized file setup before the all in one bat (I don't think there are one for fs22 yet, hmm). Terrain design is the goofy screwy looking which I really don't like, especially some of the roads are so wicked looking I never seen something like that in any google/maps areas.
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
And we start by taking backups. Then the basic get me up to speed orientation in-game check. When I synced the terrain project dir to fs22 mods dir and launched the game, the terrain was 45km trial version, oh right now I remember I initially tested it on this terrains project files, so now I need to restore the previous backup to get the original 40km version back.
</p>

<p>
When done that and a new sync launched fs22, first thing I noticed this terrain only has placeaholder text version of icon/preview images, so need to take a screenshot for some nicer preview image or perhaps use the design doc image.
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
2022-01-27T06:49:11Z Okay in GE it looks good enough for me, its still not american farming realistic tight field dividers but yeah this is good for now. Started to import PMC_Helpers again and seems like the usual insane long processing time delay, well this will be todays last import. After this is done I'm switching into the next terrain in our fs22 testing terrains release list.
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
Then just copied PNG to terrain project dir, loaded it up in GE, checked (just in case) that it shows up, it did, save and exit. Next just removing GDM/GRLE equivalent PNGs, switching PMC_Korkscrew_40km.i3d PNG back to GDM/GRLE and then sync files to fs22 mods dir. Ready to test farmland.
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
First I moved PMC_Korkscrew_40km/ mod dir to fs22 dev mods dir (wow a lot of dirs) for in-game orientation check. These days always begin with some orientation, I don't even have access to the previous dev diaries I wrote (seen above in this page) when sitting and writing this paragraph now today (did I make it sound weird?). So I'm going in basically quite blind, cant remember much in what stage this terrain was on last editing session, honestly I cant even remember how this terrain looks as I have <a href="pmc-super-six-6km.php">6km</a>, <a href="pmc-redwhiteblue-10km.php">10km</a>, <a href="pmc-undefined-farms-20km.php">20km</a>, <a href="pmc-cereal-region-32km.php">32km</a>, this one and <a href="pmc-king-corn-45km.php">45km</a> terrains under work now hehe.
</p>

<p>
Synced latest project dir files into fs22 mods dir, now we are ready for in-game check.
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