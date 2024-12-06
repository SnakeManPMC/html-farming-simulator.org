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
	<h2>2024-11-22 First Giants Editor 10 Editing</h2>

<p>
2024-11-22T04:46:19Z New editing day has started, so technically speaking UTC yesterday morning cant recall what time it was, something between 0900-1000hrs giants released Giants Editor v10 (GE). I installed it immediately to PMC DevSurf computer but my Nvidia GTX 1060 3gb video card is unable to run it, not enough VRAM (3gb GPU memory runs out), so right now I'm typing this text from PMC Gaming computers notepad++ with angry face because I have to copy several editing tools, batch files, GIMP XCF image sources etc here just to be able to edit FS25. I really hate this, I don't want to edit in Gaming computer, hence the name. But I have to get some FS25 terrain action going on, I cant just sit by, so here I am, editing tools up and running on PMC Gaming computer, life sucks <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
I just finished creating robocopy synchronization batch (BAT) file for PMC_mapUS_1st_try/ terrain project which is the original mapUS/ dir copy "hack" using notepad++ (<a href="dev-diary-my-first-terrain.php">my first terrain dev diary</a>), now its loaded in legitimate giants editor v10.0.1 and seems to be running without errors.
</p>

<p>
Oh yeah moments ago I installed GE v10.0.1 to Gaming computer and checked it runs OK, it does.
</p>

<p>
When GE v10.0.1 is running windows 10 task manager shows my Nvidia RTX 3060 12gb GPU is using 3.3/12gb dedicated GPU memory. Its funnily JUST over the amount that my editing compuer has which is 3gb. So close, but well what can ya do, right.
</p>

<p>
I did earlier today check "local" computer components store for video card prices, but something like RTX 4070 even standard model costs over 300 euros so yeah I have no such money, in fact dunno why I even bothered to check it out because I have more than that amount of DEBT! <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
But it would be so sweet to edit terrains with PMC DevSurf computer for countless reasons I'm not going to repeat here again.
</p>

<p>
Anyways.
</p>

<p>
Just loaded mapUS.i3d original C:\Games\fs25\ dir terrain project file up, I want to copy or export some basic buildings and trees out of there so I can start to create my own terrain, I don't want to do yet another empty object-less terrain even though I wouldn't mind farming there while learning about animals, production chains and whatever other new stuff FS25 has.
</p>

<p>
2024-11-22T05:23:59Z Been exporting trees and deleting them out of mapUS, but now have to take a break to cook and eat food, this will take a moment and most likely I have few minutes spare time between cooking phases to export few more trees, but will be back after lunch break is over...
</p>

<p>
2024-11-22T06:17:54Z Feeding time is over, back to GE v10.0.1 studies.
</p>

<p>
Just before heading to cook food I started using CTRL-W replace feature for those trees that I have exported, so I don't have to compare the names from my memory that did I already export XYZ or not. Now I just replace the exported tree with an empty transformgroup which I named "been-there-done-that", easy to spot and by-pass.
</p>

<p>
2024-11-22T07:14:08Z Restarted GE v10.0.1 after editing editor.xml for performanceClass Very Low, hopefully that helps as previously GE felt very sluggish, lagging when I click on transformgroups.
</p>

<p>
Now work continues to export and delete trees from mapUS which I saved to mapUS_ripping_project.i3d filename. Although I am thinking about priorities, that should I be doing this long term work or instead of focus on checking out large terrains compatiblity first, I mean whats the point of exporting these trees and buildings etc objects if GE and FS25 only allows 4km terrains. <a href="https://www.pmctactical.org/forum/memberlist.php?mode=viewprofile&u=12324" target="_blank">ARG_Afb in PMC Tactical Forum</a> did already say that he got 8.1km terrain in-game, so that sounds promising. I'm still going to finish this current task, export all trees, but then I'll switch to large terrain testing.
</p>

<p>
I am super excited of editing fs25, learning GE v10.0.1 etc, cool stuff! <img src="../images/smileys/icon_cool.gif" alt="Smiley :cool:" loading="lazy">
</p>

<p>
2024-11-22T07:24:34Z All trees exported, great! <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Hmm I'm looking at the exported filenames and see oak_stage03.i3d as first, dunno where stage01 and stage02 are, hmm maybe I missed them. But its not important right now as now begins experiments on large terrains, this is super exciting <img src="../images/smileys/icon_surprised.gif" alt="Smiley :o" loading="lazy">
</p>

<p>
Created new: _run_graphicsmagick_FS25_density_to_8192.bat and _run_graphicsmagick_FS25_weight_to_4096.bat batch files.
</p>

<p>
Copied new files to PMC_mapUS_1st_try/mapUS/data/ dir, these are: _call_delete_GDM_GRLE_Level_Safe_FS25.bat, _run_convert_gdm_grle_to_png_and_delete_gdm_grle_FS25.bat and the above density/weight bat files.
</p>

<p>
Used _run_convert_gdm_grle_to_png_and_delete_gdm_grle_FS25.bat to get me some PNG files, now I get to resize stuff. First ran _run_graphicsmagick_FS25_weight_to_4096.bat to process weight images for ground textures, then _run_graphicsmagick_FS25_density_to_8192.bat for density images.
</p>

<p>
Now infoLayer images have not been resized yet, this terrain should not work as is, but I'm going to give it a shot anyways, just to get warmed up here <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
2024-11-22T07:43:24Z It loaded up... because I forgot to edit terrain size properties <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Also this mod-set is C:/FS25.Mods/Dev/ where I quickly downloaded bunch of interesting mods earlier umm yesterday or today I'm not sure as sleeping schedule is so off the whack again, and one of those mods have error, so it has to go. This made me think that maybe I'll get <a href="https://github.com/FSGModding/FSG_Mod_Assistant" target="_blank">FSG Mod Assistant</a> temporarily here but hmm not sure.
</p>

<p>
2024-11-22T07:58:15Z Downloaded and installed FSG Mod Assistant v6.0 alpha, configured it for my FS22 and FS25 mod dirs. Now I can check stuff if there are some new downloads, FSG Mod Assistant is always the first line of defense against mods with errors or other issues.
</p>

<p>
Back to terrain editing, in mapUS.i3d edited unitsPerPixel="2" which means 4km terrain, just to start testing, getting a base line. Then in mapUS.xml also changed map height/width to 4096. Then a new in-game test.
</p>

<p>
2024-11-22T08:16:50Z In-game test complete, it is 4km size, it works, however inspecting game log file shows some errors.
</p>

<pre>
2024-11-22 08:14 Error: Trying to set DensityMapHeightUpdater collision map with invalid size (33554432 vs 134217728)
2024-11-22 08:14   Warning: No tip collision map defined. Creating empty tip placement collision map.
</pre>

<p>
As I suspected, infoLayer images have not been resized so this is where the error comes from. tipCol image, most likely infoLayer_tipCollision, infoLayer_tipCollisionGenerated or both. Perhaps even infoLayer_navigationCollision, infoLayer_placementCollision and infoLayer_placementCollisionGenerated which are all original sizes at 2048 (tipCol's are 4096).
</p>

<p>
Hmm thinking about creating a custom bat to set all of the infoLayer images to blacked out color and specific size, kind of initialization for specific terrain sizes, err or something.
</p>

<p>
But before that I want to test 6.1km terrain (6144 meters), that was the size that caused the low resolution blur ground textures for me yesterday when editing blindly with notepad++ before GE v10 release.
</p>

<p>
Edited unitsPerPixel="3" and &lt;map width="6144" height="6144"
</p>

<p>
I'm getting that old school farmsim terrain editing mood again, reminds me of 2021 and early 2022 when I was editing all those huge <a href="../22/pmc-terrains.php" target="_blank">PMC Terrains (FS22)</a> <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
2024-11-22T08:26:27Z In-game test done, low resolution blur ground textures are back, uh oh! <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
Also a new error with larger terrain, it doesn't like the small infoLayer images:
</p>

<pre>
2024-11-22 08:24 Error: AI block info layer has invalid size. Using default values.
</pre>

<p>
Hmm I think now I have to create brand new terrain project from FS25 v1.2.1 source data using GE v10.0.1 even though its "mod from game" feature is broken, I need to open mapUS and just save the whole thing to my FS25 editing project dir. There has got to be something nasty I goofed up with notepad++ editing so time for a full reset, start from scratch.
</p>

<p>
2024-11-22T08:37:44Z Deleted whole PMC_mapUS_1st_try/ project dir, bye bye 1st try, now its time for a new breed, 2nd_try <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Renamed old sync bat file to _run_sync_copy_PMC_mapUS_2nd_try_to_fs25_mods_dir.bat and edited its project dir to PMC_mapUS_2nd_try/ name. Created this dir to C:\Farming.Simulator.25.Editing\PMC_mapUS_2nd_try and moved my old modDesc.xml there. Edited modDesc.xml for new project name and class name etc. In GE loaded mapUS.i3d, then did file -&gt; save as, pointed it to C:\Farming.Simulator.25.Editing\PMC_mapUS_2nd_try directory, gave it mapUS.i3d name and hit Save. Unfortunately I saved it to wrong dir, it should have had additional mapUS/ sub dir, oh well I'll move files there manually.
</p>

<p>
Created mapUS/ dir and moved the GE saved files there. From C:\Games\fs25\data\maps\mapUS dir copied mapUS.xml file and dirs data and config to my terrain project dir. In mapUS/config/ dir deleted all XML files except farmlands.xml, fieldGround.xml, items.xml, placeables.xml, storeItems.xml and vehicles.xml.
</p>

<p>
Edited farmlands.xml for pricePerHa="9500" and commented out all but one farmland ID.
</p>

<p>
Edited fieldGround.xml by removing $data/maps/ at the beginning of those lines. Then had to take a quick restroom break <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Opened items.xml but it was already empty, nothing to edit.
</p>

<p>
Edited placeables.xml and removed every line from there, just left the XML property tag things whatever they are called.
</p>

<p>
Edited storeItems.xml and cleaned it out as well.
</p>

<p>
And last edited vehicles.xml with the same setup, deleted all vehicles.
</p>

<p>
That was all for the config dir, next opened mapUS.i3d in notepad++ for editing. Changed all filename="$data/maps/mapUS/data/ lines to point into filename="data/ instead, this should be the correct dir, but maybe I get that confused, not sure if it needs the mapUS there, I don't think so as mapUS.i3d is in that dir already, so relative dir is it and data/ would then be next up from there.
</p>

<p>
Opened mapUS.i3d in GE v10.0.1, time to remove objects, game-play and paint some ground textures.
</p>

<p>
Clicked transformgroup map and deleted it, same for gameplay. Poof, gone. Saved mapUS.i3d and exited GE.
</p>

<p>
Opened dem.png heightmap image in GIMP and flattened it out with RGB 20,20,20 color which makes it 20 meter elevations everywhere. Overwrite original PNG and closed it, OK heightmap is good to go.
</p>

<p>
Those bat files I used earlier, copied them into data/ dir and ran the GDM/GRLE to PNG one converter one, to get some source images.
</p>

<p>
Copied _run_graphicsmagick_FS19_weight_images_to_all_black_blank.bat into my new Batch_Files_F25/ dir, then renamed it to FS25. But once I opened it in notepad++ I realized this bat file is universal across all farmsim games, there is no point labeling it with any game engine version, it simply blacks out *_weight.png images in the current dir, very clear cut. Re-copied the same file to FS25 dir and renamed it now to _run_graphicsmagick_FS25_density_infolayer_images_to_all_black_blank.bat filename. This will be the new terrain initialization bat file.
</p>

<p>
Edited the bat to work on densityMap*.png and infoLayer_*.png filename range, then copied to my terrain project data dir and ran it. Now I should have pretty neutral looking terrain.
</p>

<p>
Farmland image hmm I cant remember if it works with RGB 0,0,0 I think it requires 1,1,1 as first ID channel farmland iD, but cant remember, so that might give error but hmm going to give it a first try in-game FS25 to see where the project is at this point. At least I get an error list to resolve.
</p>

<p>
Used _run_sync_copy_PMC_mapUS_2nd_try_to_fs25_mods_dir.bat to sync files into mod-set dev dir, then it was time for in-game test. Crossing fingers not much breaks <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
First error came from preview.png image being missing, OK easy fix. Got in-game 3d world and... everything was there, heightmap, objects, everything but placeables, heh err hmm... oh, now I know, completely forgot to edit mapUS.xml config file <img src="../images/smileys/icon_razz.gif" alt="Smiley :p" loading="lazy">
</p>

<p>
Created mapUS/textures/ui/ directories, copied icon.xcf and preview.xcf images there from my FS22 terrain source files. Opened preview.xcf in GIMP, changed the text title to PMC mapUS 2nd try, created stroke shadow and saved. Then exported it as PNG.
</p>

<p>
Created overview.xcf which is dark-ish green single color 4096 x 4096 pixel resolution image, exported as overview.png into my C:\Farming.Simulator.25.Editing\Images.Templates.Pre.Painted dir, then moved the PNG into mapUS/textures/ui/ dir.
</p>

<p>
copied _run_imagemagick_generate_icon_from_preview.bat into mapUS/textures/ui/ dir and ran it. But there was no imagemagick installed on PMC Gaming computer win10, hum okay need to download and install it. Downloaded ImageMagick-7.1.1-41-Q16-x64-dll.exe and installed it. Then ran _run_imagemagick_generate_icon_from_preview.bat again and now it worked, well it did complain about some command line issue but DDS images got generated so I'm fine with that.
</p>

<p>
Okay guess I need to load mapUS.i3d in GE again to remove the objects, or rather figure out whey they are still there, I mean... I did delete them, right? Hehe
</p>

<p>
Err no wait, it was the mapUS.xml which I forgot to edit, got it, opening it in notepad++ and going to work. Edited i3d filename path, storeItems, deleted guidedTour line, edited fieldGround and farmlands paths, then saved file. Should be good to go. Synced new edits into mod-set dev, then it was in-game testing time.
</p>

<p>
Going in-game shows preview.dds and icon.dds are working as designed, nice. Got in-game 3d world and PDA map image is still riverbend springs, heightmap is 20m elevations so that is working, but there are still bushes and shrubbery on the ground which means... that hmm one of the infoLayer I think images did NOT get properly blacked out, hmm how come.
</p>

<p>
2024-11-22T10:10:19Z In-game test complete, farmlands gave issues, hmm that is odd because I did comment it out, hmm. But no other errors in the log. Okay going to debug overview.dds and farmlands.xml after a restroom break.
</p>

<p>
Okay found the issue with overview.dds, its two fold, first of the PNG was not converted to DDS, so used _run_imagemagick_png_to_dds.bat to take care of that, and then second... I forgot to change the path in mapUS.xml config file <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2024-11-22T10:24:55Z In-game test complete, overview.dds issue fixed, however farmlands errors are still there as I could not find anything wrong in the XML or I3D, hmm.
</p>

<p>
Oh realized I never ran (according to this dev diary) _run_graphicsmagick_FS25_density_infolayer_images_to_all_black_blank.bat file so all density and infolayer images are still with their riverbend springs coloring, OK going to run the bat now to take care of that issue.
</p>

<p>
Umm, I ran the bat... but nothing happened, PNG images did not go black, whats going on here <img src="../images/smileys/icon_confused.gif" alt="Smiley :?" loading="lazy">
</p>

<p>
Hmm opened densityMap_fruits.png in GIMP and it shows up as RGB color 8-bit gamma integer. Umm so this should be regular RGB image, hmm. Opened infoLayer_farmlands.png and it shows up as Grayscale 8-bit gamma integer, so yeah at least infolayer images are grayscales, but I'm not sure if graphicsmagick bat should handle that hmm. OK this is slowing me down, I'll write a todo task about graphicsmagick blacking out command lines and just do it now manually in GIMP, its one hotkey and save so no big deal to do it once to keep this train rolling.
</p>

<p>
2024-11-22T10:35:27Z I think I just created my very first "fs25terrains" tagged todo task to my local website <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Went through all densityMap_*.png and infoLayer_*.png images in GIMP and RGB 0,0,0 blacked them out, then copied these to C:\Farming.Simulator.25.Editing\Images.Templates.Pre.Painted for future use, they will come handy many times I assume.
</p>

<p>
Hmm guess now its another in-game test then, at least to get the next log error list to fix. Synced terrain project dir to mod-set dev and then off to in-game testing.
</p>

<p>
2024-11-22T10:48:32Z In-game test complete, as I hoped no errors other than farmland ID which is known issue, actually I could have fixed it in GIMP but was just too lazy to change from RGB 0,0,0 to RGB 1,1,1 heh.
</p>

<pre>
2024-11-22 10:47   Warning (C:/FS25.Mods/Dev/PMC_mapUS_2nd_try/mapUS/config/farmlands.xml): Farmland-Id was not set for all pixels in farmland-infoLayer!
2024-11-22 10:47   Error (C:/FS25.Mods/Dev/PMC_mapUS_2nd_try/mapUS/config/farmlands.xml): Farmland-Id '1' not defined in farmland info layer. Skipping farmland definition!
</pre>

<p>
Known issue, accepted issue, for now <img src="../images/smileys/icon_razz.gif" alt="Smiley :p" loading="lazy">
</p>

<p>
Now I have to grab backup bat file UTC timestamping and PMC Linux moving bat call files, I got nothing in Gaming computer. Got it done, created _run_backup_PMC_mapUS_2nd_try.bat into batch_files_fs25 dir, then edited it as this was copy from project animal bat file. This bat file is super annoying as drive letters are different than what I have in PMC DevSurf computer, this is one of those things I hate about editing in this computer, oh well just have to remember to change them back when I migrate these files back to their rightful place once I have a video card that runs GE v10.x software.
</p>

<p>
2024-11-22T11:17:48Z Took first backup from PMC_mapUS_2nd_try terrain project dir.
</p>

<p>
While doing this got caught chatting in giants editing channel, kind of lost track what I was doing, this is also one reason I should stay away from these distracting twitch live streams and chats.
</p>

<p>
Back to editing, trying at least. Changed mapUS.i3d unitsPerPixel to 3 and mapUS.xml to 4096, going to sync files and try to see what happens, GDM/GRLE has not been changed so I'm expecting something bad to happen.
</p>

<p>
<i>Edit 2024-12-05T22:04:51Z, hmm 4096, that is not right, I must have mistyped it, 2048 resolution heightmap * unitsPerPixel 3 is 6144, so that is what I mean but accidentally typed in four oh ninety six looks like it.</i>
</p>

<p>
2024-11-22T11:43:07Z In-game test completed some moments ago already, still getting the same nasty ground texture low resolution blur issue <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
Not sure what to do, posted message to PMC Tactical Forum if ARG_Afb had some more knowledge on that matter as he said he already had 8.1km terrain in-game unless I misunderstood what he said.
</p>

<p>
Hmm dunno, maybe I'll just launch FS25 up with the 4km config and simply farm a bit, try out some animal placeables, production chains, dunno, I just don't really know what to do next with large terrain studies <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
Changed terrain config to 4km and synced files. Hmm dunno if I get lost now just farming or what, I'm also somewhat hungry would love to grab a bite to eat but dunno when that time comes, it might be still hours away.
</p>

<p>
Went in-game and forgot that the farmland ID 1 is still broken, so exited, loaded infoLayer_farmlands.png in GIMP, set everything to RGB 1,1,1 which is the ID channel one, saved and synced to mod-set dev, done.
</p>

<p>
2024-11-22T12:06:35Z Was trying to start farming, but realized that the dealership functionality is not in, no transformgroups to create / buy vehicles, ugh well now I start to get frustrated. Maybe I'll add that stuff but I'll chill a moment watching some live streams and stuff.
</p>

<p>
2024-11-22T12:47:41Z At this time I was contacted in discord by ... a guy, I'm not going to say his name yet I have to clear it up first as it was a private message not sure if its OK for me to write details down to my website, but if its going to be OK then I wanted to mention it in this timestamp, stay tuned. PMCTODO
</p>

<p>
I can say that I was chatting privately with darius_frost from SGA group, he had issue with 8.1km terrain as heightmap causes sharp gradients. I kind of wanted to help him out as his ground textures are normal high res while he was standing in 4200 coordinates which is beyond the 4096 range that kills my terrains.
</p>

<p>
Created PMC_mapUS_8km/ terrain project dir. This will be with massive 8192 x 8192 res heightmap png image.
</p>

<p>
Changed mapUS.i3d and mapUS.xml configs to unitsPerPixel 1 and 8192. Then it was time to rescale *CANVAS* of that mapUS heightmap png into massive 8192 pixel resolution, darius_frost said 8193 like the extra pixel but I'll give my regular 8192 a shot first.
</p>

<p>
GIMP resized dem.png canvas to 8192 which feels so crazy.
</p>

<p>
2024-11-22T13:23:36Z Created robocopy sync bat file and ran it, now its in-game testing time, this is scary <img src="../images/smileys/icon_surprised.gif" alt="Smiley :o" loading="lazy">
</p>

<p>
No dice as I kind of expected. Now I'm baffled how darius_frost made his screenshot as it was not done with a simple heightmap canvas resize. Hmm.
</p>

<pre>
2024-11-22 13:24 Error: TerrainDeformation requires a terrain lod size that is a multiple of the terrain height map size
</pre>

<p>
Terrain LOD size, what the hell is that!? <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Yeah been editing terrains since 2018 with FS17 but yeah no idea what terrain LOD size could be, its definitely none of the GDM/GRLE by filename, could it actually be some mapUS.I3D config entry, hmm, there is some LOD stuff for sure.
</p>

<p>
Searched mapUS.i3d but I cant find anything relating to terrain LOD size.
</p>

<p>
2024-11-22T13:45:04Z darius_frost went live on twitch but as I don't have twitch account anymore I cant chat there, was thinking about should I re-register account but it feels just stupid so didn't do it, not yet anyways, lets see how this goes minute by minute. I am frustrated how darius_frost had apparently 8.1km terrain in-game with working ground textures, yet I cant do it no matter what I try, makes no sense, I want to learn how he did it.
</p>

<p>
But for now I'm going to create that 4km working ground texture version of PMC_mapUS_2nd_try terrain project dir.
</p>

<p>
2024-11-22T13:57:07Z In-game test complete, PMC_mapUS_4km terrain project is now working with vehicle shop. Okay 4km done, next need to do larger, like 6.1km which gives me the nasty low resolution blur ground textures. But also at the same time my alarm went off for a lunch break, I'm starving and no matter how interesting and important stuff is going on, I gotta get some chow ...
</p>

<p>
2024-11-22T14:34:37Z Feeding time is over, back to terrain editing.
</p>

<p>
Funny thing that as I've been watching darius_frost twitch live stream where he edits terrain while I was eating, now I actually don't feel at all like I need to be in the chat, yes nothing has changed I still want to know how this dude got 8.1km terrain in-game with ground textures not going to low resolution blur.
</p>

<p>
Now I'm going to create PMC_mapUS_6km terrain project. Maybe I'll try tweaking GDM/GRLE image sizes too, not sure yet.
</p>

<p>
Did the 6.1km changes to that terrain project, going to load it up in GE v10.0.1 and generate ground collision map, just because, no particular reason, why not. Also changed lodTextureSize="2048" to 4096, just to see if that would help anything.
</p>

<p>
Loaded it in GE, that lodtexturesize change messed up that odd purple thing/texture shown there, dunno what the purple thing is. I generated collision mask and saved. Okay guess its time to robocopy sync to mod-set dev dir and then give it a try.
</p>

<p>
2024-11-22T14:47:00Z In-game test complete, ground textures are low resolution blur and error in the log.
</p>

<pre>
2024-11-22 14:45 Error: AI block info layer has invalid size. Using default values.
</pre>

<p>
Same AI block info layer error, hmm guess I could beef up that resolution to fix that error, just on principle.
</p>

<p>
BTW also checked mapUS.i3d and now lodTextureSize="" had reverted back to 2048, very odd. Oh well no clue what that property even does so, yeah.
</p>

<p>
Converted GDM/GRLE to PNG, then resized densityMap*.png images to 8192 resolution and _weight.png images to 4096, just because. This would be done for regular release quality terrain, I just didn't do it here as it most likely has nothing to do with issue at hand, and I already tried this before GE v10 was released.
</p>

<p>
Created _run_graphicsmagick_FS25_infoLayer_to_DOUBLE.bat file which doubles infoLayer_*.png image resolutions. Copied this bat file to Batch_Files_FS25/ dir for future use.
</p>

<p>
Then robocopy synced files to mod-set dev dir, was thinking if I should have recalculated tipcollision but humm dunno, in-game test next.
</p>

<p>
2024-11-22T15:20:02Z In-game test complete, well game log is now error free, but ground textures are still low resolution blur, didn't work. Oh well it was worth the shot.
</p>

<p>
2024-11-22T15:56:10Z I have now finished that one private conversation I had, which I need to confirm if I can mention it publicly. PMCTODO
</p>

<p>
2024-11-22T16:06:09Z Installed Giants Editor v10.0.2 and setup editor.xml and editor_log.txt files to notepad++ workspace panel.
</p>

<p>
Was playing around a bit with the new field definition creation script menu, but could not make it work right away.
</p>

<p>
2024-11-22T17:06:56Z Managed to create my new field definition in GE v10.0.2 <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Seems like GE v10.0.2 field toolkit also has option to convert old field definitions to this new system, I think. Its called "Convert old" selected field button and all fields button.
</p>

<p>
2024-11-22T17:21:58Z Now I'm starting to feel tired, yawning also, guess its time to call it a night, cant think of anything to do with one and a half hours left in my alarm for possible bed time (cant say with the nap I took today), its been a great day, learned a lot, edited a lot, cant wait for tomorrow to start hammering stuff with the gained knowledge from today. Cu next time.
</p>

<p>
Continue reading <a href="dev-diary-large-terrain-studies-002.php">next page</a> or back to <a href="dev-diary-large-terrain-studies.php">Large Terrain Studies Home</a>.
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
