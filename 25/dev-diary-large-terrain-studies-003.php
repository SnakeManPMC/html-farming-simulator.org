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
	<h2>2024-11-26 From One Issue To Another</h2>

<p>
2024-11-26T06:14:15Z New editing day has started, was not planning on conducting large terrain studies today but yesterday in PMC Tactical Forum there was so much discussion about them while I was just playing fs25 that I felt like missing out, so today is time to put another 17hrs effort into studying how to get large terrains working in fs25 and Giants Editor v10.0.2 as I posted in <a href="https://www.pmctactical.org/forum/viewtopic.php?p=189482#p189482" target="_blank">PMC Tactical Forum "Terrain Editing daily updates while waiting for Giants Editor v10 release" topic</a> (link is for the specific post).
</p>

<p>
Funny how that topic title is now quite outdated, the discussion just has carried over nicely.
</p>

<p>
Yesterday I learned that user called benkywenky released 8.1 kilometers x 8.1 kilometers template terrain which runs OK with 16gb RAM, ARG_Afb reported this along with Antler22 who initially posted link to this template terrain release, thanks guys. I then quickly tested it myself and indeed this terrain runs on PMC Gaming computer with 16gb RAM and RTX 3060 12gb GPU. Was really surprised as I saw this terrain release when it came out but discarded it as just another "samplemapmodemptyblankmodmapmapmod" junk, maybe in the early days especially when hitting my head into a brick wall for hours on end it might pay off to try out some other template terrains even though long experience over the years have teached me they are garbage.
</p>

<p>
Now I'm going to generate brand new fresh terrain source files using mapEU as in-game source. Plan is to write a new "create terrain source files from scratch" bat file, my previous one from FS22 is called _run_generate_terrain_template_from_sample_data_FS22.bat but now I need something more custom since GE v10.0.2 is broken and the "mod from game" option is not working.
</p>

<p>
2024-11-26T06:24:54Z Started to write _run_create_source_dir_from_mapEU.bat file.
</p>

<p>
2024-11-26T06:39:34Z Initial bat file done, it simply creates directory from my chosen terrain project name, then robocopies the mapEU dir excluding Textures dir into this new terrain project dir. Works OK, but it should be, its so simple bat.
</p>

<p>
Now I can start to plug in my edits to those files but I'm not sure how detailed I want to be, like should I now already load it on GE v10.0.2 and remove all objects, then save the raw mapEU.i3d, .shapes and .cache files for some "premare files" dir which can be robocopied in future terrain projects, that is the whole goal of this "generate source data" bat file, to stop the repetitive work, automate as much as possible, use already prepared images and config files, for example empty Vehicles.xml is quite universal which fits to every terrain.
</p>

<p>
I want that good old farmsim tool pipeline working where I can just edit bat file for terrain project name, run the bat and I have pretty solid terrain ready to go. Now I'm even thinking further, maybe I could somehow add config for "medium" and "large" size terrains which would use GDM/GRLE/weight images accordingly, but hmm perhaps that is just simpler to make "4km" and "8km" etc bat files, I don't think I've ever done such if conditions in dos cmd.exe environment where you could compare SET variable to a string, hmm, yeah might be too fancy for this use.
</p>

<p>
First I edited, emptied collectibles.xml nonsense config file. Not sure if that would be easier to just comment out in mapEU.xml main config or use this empty file, not sure, but I'll just empty through all these config/ dir configs now, prepapre them and then copy to safe keeping for future projects.
</p>

<p>
I left aiSystem.xml, colorGrading.xml and colorGradingNight.xml untouched. These will be used from this terrain project dir with mapEU.xml config file. However environment.xml has first path designation to $data which must be changed to my terrain dir.
</p>

<p>
I left envMaps path to $data/ but the colorgrading's are now read from mapEU/ relative dir which is my terrain project.
</p>

<p>
Then copied environment.xml into C:\Farming.Simulator.25.Editing\Config.Templates\mapEU dir for safe keeping, and now its restroom break before this project continues. Going good progress here, feeling great, I love editing terrains and future proofing my tool pipeline <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Edited farmlands.xml to point into my terrain project dir, removed IDs 2-109 as I'm going to paint farmlands image with just RGB 1,1,1 color. Copied farmlands.xml into safe keeping.
</p>

<p>
Next edited fieldGround.xml, same deal, it now points to my terrain project dir. And fields.xml had two fields simply removed. Completely emptied footballField.xml config file, hmm not sure if that works but lets give it a try, copied to safe keeping. items.xml was already empty so nothing to do there. Edited to empty pedestrianSystem.xml which was a long config file, some people love pedestrian traffic but I don't, they are just creepy and distracting so wont be featuring those in PMC terrains, if someone wants to have them they can copy over the original XML config file then, copied this one to safety as well.
</p>

<p>
Then good old placeables.xml config file, same deal here, cleaned it out and moved to safe keeping. Went through storeItems.xml to search for anything that should be used, there was indeed plants section so I left it in place, its nice to be able to paint stuff in-game.
</p>

<p>
Next was trafficSystem.xml which got cleaned out, don't need no cars in my roads, copied to safe keeping.
</p>

<p>
Then vehicles.xml which got obviously cleaned out from the mapEU specific stuff, copied to safe keeping as well.
</p>

<p>
Last config file was weed.xml which was quite short, it pointed to $data/maps/ directory so I removed that and copied file for safe keeping. Alright, that was all there was in config/ dir, its now all done hopefully until fs25 updates change something which require me to update these files.
</p>

<p>
Next up is data/ dir, this is a big one regarding decisions how to handle it. First I noticed how few files are there, much less than in mapUS which I'm more familiar. There was extra GRLE file called soilMap.grle, hmm. The new masks/ dir also only had two images, BLOCKMASK.png 2048 x 2048 and GEN_roadsMask.png 2048 x 2048 pixel resolutions.
</p>

<p>
Opened mapEU.i3d in notepad++ and searched for soilMap, why am I not surprised that nothing shows up <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
In _run_create_source_dir_from_mapEU.bat added robocopy command line "/xf soilMap.grle" so this unused file is not copied in future terrain projects.
</p>

<p>
Then edited above bat file some more, added copying of few bat files from Batch_Files_FS25/ dir into new project data/ dir. These include _call_delete_GDM_GRLE_Level_Safe_FS25.bat, _run_convert_gdm_grle_to_png_and_delete_gdm_grle_FS25.bat, _run_graphicsmagick_FS25_density_to_8192.bat, _run_graphicsmagick_FS25_identify_PNG_resolutions_ordered.bat, _run_graphicsmagick_FS25_infoLayer_to_DOUBLE.bat and _run_graphicsmagick_FS25_weight_to_4096.bat files.
</p>

<p>
Was kind of thinking that it would be so easy but obviously overkill if I were to simply dump the whole Batch_Files_FS25/ dir into data/ dir, its not that large dir yet as of today but in the future it keeps growing and then become just annoying and dirty if I were to copy everything there. These files now, kind of suggest medium size terrain with those pixel resolutions selected.
</p>

<p>
2024-11-26T07:36:47Z Okay now I need to test this bat that is my directory structure correct for copying those bat files.
</p>

<p>
Got several "The system cannot find the file specified." errors, so apparently not <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
But at least soilMap.grle was not copied over this time, so that is a step in the right direction. Now just need to figure out where my paths go bad, hmm maybe REM out echo off in the beginning and run it again to see what dir it tries to use.
</p>

<p>
Ugh nevermind, I saw the mistake from bat file inspection itself, I forgot to add the Batch_Files_FS25/ sub dir in the copy command heh. OK will fix <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Ran the bat again and now it works, selected Batch_Files_FS25 bat files got copied over, nice. One step closer to excellent terrain source file generator bat file. And in fact I can use this with slight modifications even after giants fixes GE bug with "mod from game" feature.
</p>

<p>
2024-11-26T07:51:29Z Now begins phase to figure out GDM/GRLE/weight image handling for a new terrain project, overall you would want to black out those images, but perhaps weight images should have only grass painted on them and farmlands image needs that RGB 1,1,1 painted which was designated in farmlands.xml config file, then of course heightmap dem.png is to be something like RGB 20,20,20 for 20 meters flat elevation everywhere.
</p>

<p>
Easiest way might be to prepare pre-painted images in specific terrain size sub dirs, but with graphicsmagick I could black out whole project in one bat file, assuming the sizes are set to specific terrain ... well not size but at least a size range, like "small" or "medium" or "huge". Hmm actually it might be just that easy, small would fit 2-3km, medium would fit 4-10km and huge would be 10km and up, hmm not sure if it needs a bit more variation, but that is fine tuning, I'm now going to set this bat file for medium size, kind of like just doubling up every image to get started with.
</p>

<p>
For that... I need to create brand new graphicsmagick bat file, hmm lets call it _run_graphicsmagick_black_out_medium_FS25.bat, hmm I think, trying to figure out all kinds of options here, maybe it would still be best to split up densitymap, infolayer and weight images under _call bat files for ultimate control, hmm. But for now, I want to create one bat fits all for this project, I'll keep the name I just mentioned.
</p>

<p>
Wrote heightmap and densityMap image generation, then was going to move into infoLayers but for those I need the specifications like grayscale 8bit etc info, so going to convert GDM/GRLE into PNGs and grab the precise image info out of them.
</p>

<p>
Ran _run_convert_gdm_grle_to_png_and_delete_gdm_grle_FS25.bat and then copy-pasted the whole output into safety, just in case, although GRLEConverter only lists pixel resolutions which is of course the basis of what I'm trying to re-create with my bat but I need the grayscale or RGB specifications, so need to bring up grapchismagick _run_graphicsmagick_FS25_identify_PNG_resolutions_ordered.bat which I ran, then inspected _image_resolutions.txt text file it generated. This list tells me the exact specs for these images.
</p>

<p>
First is regular RGB color 8-bit images:
</p>

<pre>
densityMap_fruits.png PNG 4096x4096+0+0 DirectClass 8-bit 2.6Mi 0.000u 0m:0.000006s
densityMap_ground.png PNG 4096x4096+0+0 DirectClass 8-bit 68.4Ki 0.000u 0m:0.000006s
densityMap_height.png PNG 4096x4096+0+0 DirectClass 8-bit 48.0Ki 0.000u 0m:0.000006s
</pre>

<p>
Then Grayscale 8-bit images:
</p>

<pre>
densityMap_groundFoliage.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.6Ki 0.000u 0m:0.000005s
densityMap_stones.png PNG 4096x4096+0+0 PseudoClass 256c 8-bit 230.6Ki 0.000u 0m:0.000005s
densityMap_weed.png PNG 4096x4096+0+0 PseudoClass 256c 8-bit 16.1Ki 0.000u 0m:0.000005s
</pre>

<p>
This is interesting, cant say I never paid much attention to these, my overall gut feeling from FS19/FS22 era was that density images are all RGB color, but guess not.
</p>

<p>
I stand corrected, <a href="../19/terrain-density-weight-images.php">density weight images</a> lists already from FS19 that "weed_density.png PNG 4096x4096+0+0 PseudoClass 256c 8-bit 16.1Ki" is indeed grayscale (256 color) 8-bit image. Dunno why I remembered it the other way around. Anyways, no big deal, I'll write my density image creating bat file accordingly.
</p>

<p>
2024-11-26T08:24:18Z Now densityMap_*.png generation part looks to be OK, starting to write infoLayer_*.png part. Man this is so cool, I feel like future proofing my FS25 terrain development, it will be absolutely golden to be able to just click a bat and generate all kinds of terrain sizes. If only placing objects would be as easy! <img src="../images/smileys/icon_biggrin.gif" alt="Smiley :D" loading="lazy">
</p>

<p>
Did one last check and yep, every infoLayer image is grayscale 256 color 8-bit image. Gotcha.
</p>

<p>
2024-11-26T08:39:20Z Finished typing and copy-pasting all infoLayer_*.png graphicsmagick lines, kind of zoning out doing those but still enjoying it, as I said I love this whole concept of future proofing my FS25 terrain editing umm dunno what, landscape? Career? heh dunno what to call it, just the whole lifetime of FS25 is now set once I get these bat files done and tested for <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
This is so cool <img src="../images/smileys/icon_cool.gif" alt="Smiley :cool:" loading="lazy">
</p>

<p>
In fact I'm now wondering that why didn't I think of this before, I mean sure something like erasing heightmap to RGB 0,0,0 takes just about sixty seconds in GIMP so whats the big deal, but its the repetitive nature of creating new terrain projects especially if it involves testing multiple times because some failures, these kinds of bat files are a life saver when it comes to time usage when you just click a button and all files are generated for you from the thin air, just like I did PMC King Corn 45km and PMC Korkscrew 40km infoLayer images back in 2022.
</p>

<p>
But yeah, this rulez <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Next up would be the _weight images, hmm these are very manual labor to type in as filenames change for mapUS and mapEU, but guess when I do it once then these are set for the life time of FS25.
</p>

<p>
2024-11-26T09:01:17Z Finally done all the _weight images, about half way through copy-pasting that list I felt extremely stupid, this should have been some "FOR *_weight.png" type dos/cmd command for sure, yes its now done and as long as giants don't change these filenames through FS25 lifetime I'm set, for mapEU, of course if I were to do the same for mapUS then I need to copy-paste even more crap, but I think for that this idea needs more thought, like just generating ONE single black grayscale 4096 res image, then dos COPYing it over the other ones, no need to generate new image for each of these. Actually same applies for density and infolayer images as well, with the exception that infolayer has different resolutions and densitymap has even different image color modes. But yeah, its now done for mapEU weights and universal densityMap and infoLayers, good stuff.
</p>

<p>
Guess now there is nothing left to do than to run this bat for the very first time, ooh this is scary! <img src="../images/smileys/icon_surprised.gif" alt="Smiley :o" loading="lazy">
</p>

<p>
First try failed. Apparently graphicsmagick command line while it does generate black PNG image for me, with the default values I used make it grayscale, I thought it would be RGB. Then also those grayscale images are not grayscale 256 color ones, so hmm heh this is one of those things that I set out to do a task and I build a whole tool pipeline for the task to save time... even though if I would have just used the old proven method with GIMP etc which takes more time, it would have in fact taken less time that coming up with this fancy future proofed bat <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
But no biggie, maybe I'll just do it now with GIMP oldschool style and write todo task for myself about fixing this RGB vs Grayscale issue when I have more time. Yeah that sounds like a plan, I need to play around with large terrains now and not with graphicsmagick command lines.
</p>

<p>
Spent few minutes to scan through graphicsmagick command lines but nah, takes too long, I need to stay focused on task at hand. Created todo task for myself and now moving on.
</p>

<p>
Loaded dem.png in GIMP, set it to RGB 20,20,20 color, saved image. Then loaded densityMap_*.png images, switched to RGB and Grayscale where appropriate, made sure they were RGB 0,0,0 black, saved and closed for all of them.
</p>

<p>
2024-11-26T09:25:53Z Actually nevermind, I'll just re-create the whole terrain project and GRLEConverter generate new files, its quicker, simpler and safer.
</p>

<p>
Got all images blacked out, with heightmap RGB 20,20,20 and farmlands RGB 1,1,1 exceptions, then moved infoLayer*.png images to C:\Farming.Simulator.25.Editing\Images.Templates.Pre.Painted\infoLayer.Doubled.Blacked.Out dir and densityMap*.png images to C:\Farming.Simulator.25.Editing\Images.Templates.Pre.Painted\8192 dir. That densitymap image dir already existed but it had _groundFoliage.png with 8192 res which was wrong, its now 4096 ie double, so it fits the pattern. Good stuff.
</p>

<p>
Okay unless I forgotten something in this quite extensive and too long data/ dir editing, its now all done, will have to load into GE v10.0.2 to see if something breaks.
</p>

<p>
Next up was envMaps/ dir contents, this is 58.9mb in size so quite large and not necessarily to be here unless you edit these and I have no intention of editing these, however hmm I believe environment.xml is now pointing to this dir, hmm hmm, let me double check ...
</p>

<p>
Oh it doesn't, good, so I'm going to add "/xd envMaps" into the main robocopy command line to skip this dir.
</p>

<p>
Then was licensePlates/ dir, hmm yeah this is not necessary to be in this dir, so going to add this as well into the robocopy line. And same for missions/ dir as well. And finally added sounds/ dir too.
</p>

<p>
2024-11-26T09:46:11Z Ran _run_create_source_dir_from_mapEU.bat to re-create the probject with latest changes. Robocopy did a good job, added directories are not there, nice.
</p>

<p>
Then edited this bat to add pre-painted heightmap, densitymap and infolayer image robocopy commands. To finish this off added delete commands for *.GDM and *.GRLE to remove those now obsolete images since I copied over the pre-painted ones.
</p>

<p>
Okay next up is... well mapEU.i3d and mapEU.xml files, I think I'm going to start with the XML first, I'll leave that most difficult one for last, it needs more thought before bringing into GE for editing.
</p>

<p>
Opened mapEU.xml in notepad++, time to configure this terrain. First was of course "map width="4096" height="4096"" line. Then filename to point into my terrain project dir instead of dollar data dir.
</p>

<p>
Added robocopy line to _run_create_source_dir_from_mapEU.bat file to copy over the pre-configured Config.Templates\mapEU dir content config files.
</p>

<p>
At the bottom of mapEU.xml removed precision farming config file, its not used in FS25, not yet anyways. Guess that does it for terrains main config file, copied it to safety into Config.Templates dir and also added this files copying into the creation bat file.
</p>

<p>
Next ran _run_create_source_dir_from_mapEU.bat once again to check latest edits.
</p>

<p>
2024-11-26T10:12:25Z Edited mapEU.xml for storeitems path, then ran that bat again and now everything looks to be ready for first GE v10.0.2 load.
</p>

<p>
Oops no, wait, mapEU.i3d edit of course. Okay will get to that right away after a short restroom break to stretch my legs a bit...
</p>

<p>
First edited the basic fileId config files for heightmap, densitymap, infolayer and weight images to point into my terrain dir instead of fs25 root mapEU data dir. Then edited lodTextureSize="4096" as ground texture weight images are now 4096 resolution. Saved mapEU.i3d and exited, copied the file to safety, not for the permanent file save but just for now before I load it up in GE, just in case.
</p>

<p>
2024-11-26T10:33:20Z First GE v10.0.2 load ended up in crash, ouch. OK bringing up editor_log.txt to inspect what is going on.
</p>

<pre>
Error: Failed to load DensityMap image 'C:/Farming.Simulator.25.Editing/deleteme_mapEU_4km/mapEU/mapEU/data/densityMap_ground.png'.
Error: Can't load resource 'C:/Farming.Simulator.25.Editing/deleteme_mapEU_4km/mapEU/mapEU/data/densityMap_ground.png'.
Error: Failed to load terrain detail layer 'terrainDetail'.
</pre>

<p>
Ah my bad, I seem to be getting that wrong repeatedly, dunno why. Its "data/" instead of "mapUS/data/" heh. OK fixed.
</p>

<p>
2024-11-26T10:37:52Z Now mapEU.i3d loads up in GE v10.0.2 OK, alright, I'm in business.
</p>

<p>
Decided to leave whole Procedural_Placement transformgroup in place, its got one sub group called procGenGroup. Selected map transform group and deleted it completely. Then opened gameplay transformgroup and deleted it, at first I thought there is something I could keep but nah, this is going to be completely clean template without anything. Then deleted destructibleObjects transformgroup. Finally deleted trees transformgroup. Now everything seems to be gone.
</p>

<p>
Edited sun fixed bbox min/max values from 1024 to 2048 and 128 to 256.
</p>

<p>
Then started to paint ground textures... and GE crashed, same as I seen it do before, ouch. Now this... this could be a problem <img src="../images/smileys/icon_surprised.gif" alt="Smiley :o" loading="lazy">
</p>

<p>
Okay I need to do this one step at the time, I'm suspecting ground detail texture painting crash might be because .cache files are for 2km terrain but now my terrain is 4km, so once you start to paint you get a crash.
</p>

<p>
Loaded mapEU.i3d back into GE, deleted transformgroups, ran scripts -&gt; shared scripts -&gt; map -&gt; create ground collision script, saved and exited GE.
</p>

<p>
Restarted GE and loaded mapEU.i3d back up. Did the sun 1024 to 2048 change, saved project. One step at the time. Then chose ground detail texture painting... but same crash happened again, umm OK, why is that happening <img src="../images/smileys/icon_confused.gif" alt="Smiley :?" loading="lazy">
</p>

<p>
Restarted GE, loaded mapEU.i3d back up, did the create ground collision script once again, saved and exited. I noticed that .shapes file was still 57mb from the previous crash so was wondering how could it be that big as there are no objects at all.
</p>

<p>
It was still that big, hmm very odd. Okay maybe I need to import one object to it to refresh it somehow. Imported one americanElm_stage03 tree, placed it on the ground, saved project and shapes file is still 57mb dating back to nov 8th before game was even released, umm err why isn't shapes file updating.
</p>

<p>
Deleted that tree, imported other one, saved, no change. Then created ground collision mask again, saved and still nothing, shapes file is 57mb heh. Okay well guess she will not budge then, okay okay...
</p>

<p>
Checked mapEU.i3d for "shapes" string and found that the XML property for shapes was empty, nothing in there, err OK heh I'm confused. So I copy-pasted one from mapUS.i3d then.
</p>

<pre>
&lt;Shapes externalShapesFile="mapEU.i3d.shapes"&gt;
&lt;/Shapes&gt;
</pre>

<p>
Loaded GE up, ran the script for create ground collision map, saved project, exited and mapEU.i3d.shapes is still 57mb haha. OK I give up, be what you want dude, I don't care <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Actually thinking about it more, create ground collision map has nothing to do with shapes file, its about tip collision stuff, so I'm barking at the wrong elm tree if I think that would somehow re-initialize shapes.
</p>

<p>
Deleted the last tree I imported, then imported vehicleShop triggers which have no 3D shape, well unless you count the light orb icon thing, saved project and NOW frigging finally shapes file is about 1kb in size, whoah that took some doing <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Tried to paint ground detail textures but no go, GE still crashes, beaufitul <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
Just for the hell of it decided to increase masks/ dir two image sizes from 2048 to 4096, discovered that GEN_roadsMask.png image has some white painting on it, like roads. So erased it to RGB 0,0,0 black and then saved.
</p>

<p>
2024-11-26T11:21:28Z Started GE back up once again, loaded mapEU.i3d and now ground detail texture painting works! Yes! <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Now its time to sync this project into dev mod-set dir and see how it runs in-game FS25.
</p>

<p>
Created _run_sync_copy_deleteme_mapEU_4km_to_fs25_mods_dir.bat file, ran it and then it was go time. Oh wow, went in-game and when nothing shows up I realized that one tiny but somewhat important bit is missing... yup, modDesc.xml <img src="../images/smileys/icon_razz.gif" alt="Smiley :p" loading="lazy">
</p>

<p>
User interface images are still missing but that doesn't matter now, I just want to see this thing in-game. Loaded it up in FS25 and got in-game, but unfortunately log had couple of errors about fieldGround level images, hmm very strange as limeLevel was missing, also fs25 complained about fieldType so I copied all of them into the dir, synced and restarted fs25.
</p>

<p>
Okay I'm still getting one error:
</p>

<pre>
2024-11-26 11:35 Error: Failed to load DensityMap image 'C:/FS25.Mods/Dev/deleteme_mapEU_4km/mapUS/data/infoLayer_fieldType.png'.
2024-11-26 11:35   Error: Loading default density map file 'C:/FS25.Mods/Dev/deleteme_mapEU_4km/mapUS/data/infoLayer_fieldType.png' failed!
2024-11-26 11:35   Error: Missing field density map data for 'fieldGround.densityMaps.fieldType'! Creating empty default
</pre>

<p>
Hmm infoLayer_fieldType.grle file is in the dir, why is it complaning it failed to load. Is it broken, or whats going on. Hmm I'm going to re-copy it from mapEU data dir just to get bottom of this.
</p>

<p>
Used GDM/GRLE to PNG bat, opened fieltype png in GIMP, blacked it out and rescaled from 4096 to 8192, everything should be good now. Another sync to dev mod-set and in-game test...
</p>

<p>
2024-11-26T11:44:47Z Another in-game test complete and same error, but this time I realized my own mistake, that error line says mapUS instead of mapEU. Umm err OK WHY does it do that, hmm.
</p>

<p>
Oh, I'm guessing "fieldType filename="mapUS/data/" in fieldGround.xml config file is the reason. OK fixed <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Also those missing GUI image errors annoyed me, so did placeholder images for them as well. Another sync robocopy and then in-game testing time. Now in-game test shows all good, no errors no warnings. Finally.
</p>

<p>
Did one quick change for mapEU.xml which was still pointing overview.dds into original game dir, then copied xml to safety.
</p>

<p>
2024-11-26T11:55:27Z Okay at this point I'm feeling somewhat, not exactly frustrated but kind of leaning towards it, I'm not exhausted yet but definitely feel like this has taken too long and has had several annoying issues, perhaps my create source dir bat file took too long time in the beginning. I just checked phone for lunch break alarm and was really disappointed to see it still 1hrs 43min away, ugh I could use some food right about now and the break it gives me.
</p>

<p>
But guess I'll start to create the next project, which is 8.1km terrain. Lets call this deleteme_mapEU_8km, I'm still going to run this through the same process as before, I wont be just copy-pasting this existing working dir, I want to run through my tool pipeline to find all errors in it.
</p>

<p>
Ran the bat and right away noticed that modDesc.xml is missing, OK added it to the bat, then ran it again. Edited mapEU.xml and mapEU.i3d files, size to 8192 and unitsPerPixel to 2. Loaded dem.png in GIMP, rescaled it up to 4096 x 4096. Then graphicsmagick resized _weight images to 4096. I already changed mapEU.i3d lodTextureSize to that.
</p>

<p>
Loaded mapEU.i3d in GE, deleted transformgroups, then create ground collision map, save and exit.
</p>

<p>
And just at that moment I realized there are some elevations on the terrain, err... what. Oh my, this was the mapEU.i3d copy of the main terrain i3d file which still pointed out to original game dirs, didn't it, aawww maan, now I messed up my game dir again. Oh well.
</p>

<p>
Checked mapEU.i3d and indeed, it was the original from fs25 root dir, OK guess I didn't add that robocopy line to the create source dir bat then, HRR <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
Copied it manually now from my config.templates/ dir. Changed unitsPerPixel to 2 again and lets try reloading it in GE again. Now heightmap looked flat, seems its reading the right data again, then started painting ground detail textures and it crashed. Right, OK so I didn't add the masks/ images either into create source dir bat file nor did I copy them into safety before.
</p>

<p>
Edited create source dir bat, then ran it again and went to search what files are still missing.
</p>

<p>
2024-11-26T12:20:16Z Actually I'm temporarily going to stop this play-by-play dev diary writing as I'm getting slightly annoyed with this project now, I want to get it done and don't have to switch to notepad++ to make a full record of every step I took, yeah it goes slightly against what dev diaries stand for, but right now I just want to get this shit fixed and working, I'll try to remember summarize what I did.
</p>

<p>
2024-11-26T12:42:49Z Just finished in-game test on deleteme_mapEU_8km and its working, no errors, no warnings. However the heightmap has this odd ruggedness applied to it. I need to re-check that heightmap PNG is not broken but I think this has something to do with the ground deformation stuff.
</p>

<p>
Yeah checked dem.png in GIMP, its flat out RGB 20,20,20 no changes there, so its someting to do with some other files.
</p>

<p>
Checked data/masks/BLOCKMASK.png and it was filled with RGB 1,1,1 and RGB 0,0,0 mixture, so reverted it back to pure black. Loaded project to GE and I can immediately see the ruggedness at the default camera position, its there so I have to assume its somehow auto generated from who knows where, at least it was not that blockmask image.
</p>

<p>
Got to say, getting more and more frustrated here, feels like just overwhelming odds one thing after another when trying to make a simple terrain for FS25. I'm just about ready to go back to FS19 and FS22 to happily play another two three years. I don't see anything in FS25 that would benefit me, I'm here studying this stuff just because its a new game engine, but so far I have seen only negative impact on large terrain developers point of view. Who knows maybe giants engine v10 is still buggy, one unnamed giants employee asked me the 4km and next bigger up non working terrain as examples, it sounded like he wanted to hand it over to programmers to check and fix something in the engine, or who knows maybe I'm just imagining shit, dunno <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
But yeah in FS19 and FS22 there was never such issues like this, yes I did have to squint my eyebrows a little when creating PMC King Corn 45km terrain, it took me one failed day of tries and then on the next I made a break through. But FS25 is like you try a WEEK and constantly fail, also its pretty much established by few different community terrain devs that unitsPerPixel is broken with decimal points, ground textures turn into low resolution blur when decimal points are used. And now in my deleteme 8km mapEU sourced data, it looks like while ground textures are normal in 8.1km terrain, there is this bizarre ruggedness on the heightmap, like its applied by some FS25 feature like ground deformation. No idea just guessing here. So yeah, this is not fun, it stopped being fun many <i>many</i> days ago now.
</p>

<p>
2024-11-26T12:56:44Z Its 43min until my lunch break alarm but this is great time to take a break, I don't want to continue this uphill battle with large terrains, I'm going to eat, check forums and chats, don't expect there to be anything new but need to check anyways. Then, well dunno, I really don't want to continue this hammering right now, it just doesn't seem to lead anywhere, but will have to see once lunch break and forum checks are over, so until then...
</p>

<p>
2024-11-26T14:28:28Z Feeding time is over.
</p>

<p>
After eating posted update report on PMC Tactical Forum, wrote huge rant in the second half of the post but in the end decided to delete it, just posted to somewhat neutral report first part, just so I didn't came across overly negative. Right now I have just about no motivation to continue hammering these edits as its similar result it looks like as before, fix one problem and next one comes up, there is no winning in FS25 terrain editing it seems.
</p>

<p>
But now I'm going to try 8192 x 8192 pixel resolution heightmap just on principle to see if that makes that stupid perlin noise alike ruggedness go away.
</p>

<p>
Felt so stupid to load 4096 heightmap into GIMP and scale it up to 8192, this is just so dumb.
</p>

<p>
Loaded project up in GE, it looks rugged, if possible even more rugged than before but I might be imagining it. Hmm going to try beefing up density and infolayer images next.
</p>

<p>
Resized density and infolayer to 16384 res and weight to 8192. Edited mapEU.i3d to lodTextureSize="8192" value, was thinking if I need to been up the masks images, so decided to do that as well, they went from 4096 to 8192. Loaded project in GE, then did create ground collision map, saved and restarted GE. That saving took several minutes, ouch.
</p>

<p>
Hmm I'm looking GE heightmap, it almost looks like it gets plowed ground applied to it, there are those "burroghs" or whatever they are called what comes from moldboard plowing when ground is turned over. Could this be ground deformation going nuts somehow, hmm <img src="../images/smileys/icon_confused.gif" alt="Smiley :?" loading="lazy">
</p>

<p>
What pisses me off is that now this terrain should have same specifications as that yesterdays 8.1km terrain that was first to load with 16gb RAM machine, what I recall all image sizes are now the same.
</p>

<p>
2024-11-26T15:03:41Z Hmm just realized that the yesterdays 8.1km template terrain is mixture between mapEU and mapUS, it uses EU XML config file but ground textures are indeed from US terrain, err whoah why didn't I spot that earlier, it was just the "mapEU.xml" that made me think that oh he is using european terrain source files.
</p>

<p>
Synced files to dev mod-set, going to try in-game even though I already know the jagged ruggedness crap is there as its seen on GE.
</p>

<p>
2024-11-26T15:08:02Z Loaded it in-game... and it crashed, no I didn't have task manager open but this is just the 95% progress bar loading CTD which comes from RAM running out. Yeah I'm done, I'm completely fed up with this exhausting terrain editing horror, I want out. Now I'm going to do source files for ARG_Afb that I promised so I can clean my hands form that task and then probably going to find a medium size tv show what I can watch as marathon to get my mind of farmsim things. Or at least couple of "feel good" movies for tonight to get me until bed time and... hey tomorrow is another day.
</p>

<p>
Continue reading <a href="dev-diary-large-terrain-studies-004.php">next page</a>, <a href="dev-diary-large-terrain-studies.php">Large Terrain Studies Home</a>, go back to <a href="dev-diary-large-terrain-studies-002.php">previous page</a>.
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
