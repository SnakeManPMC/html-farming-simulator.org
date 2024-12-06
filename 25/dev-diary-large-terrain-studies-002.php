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
	<h2>2024-11-24 Trying To Get Large Terrains Working</h2>

<p>
2024-11-24T01:16:04Z New editing day has started, just woke up, did the mandatory computer morning chores and switched over to PMC Gaming computer which has Giants Editor v10.0.2 installed, now begins a long crueling 16-17hrs terrain editing session with the goal of learning how to create larger than 4km terrains without ground textures going to low resolution blur.
</p>

<p>
2024-11-24T01:49:09Z Got the mandatory chat read-through done, now just have one private message going on. Also there is one twitch live stream running which I was expecting to have some terrain editing info, but doesn't appear to be so tonight. Plan is to not be distracted with these waste of time joints, so trying to get that private message over so I can turn on music and just sink myself into editing studies.
</p>

<p>
2024-11-24T02:07:05Z Okay all the read-through and private messages are done now, however now its time to eat days first meal, wow seems like the actual PHYSICAL editing start just gets post-poned minute after minute, thats no good, okay need to eat fast and then get rocking and rolling...
</p>

<p>
2024-11-24T02:30:53Z Feeding time is over, now my editing day begins.
</p>

<p>
Hmm with that timestamp I'm scared to even check how many minutes it was since I physically got up from the bed, just way too long, valuable time wasted on morning chores and eating, heh but well you gotta get the basic stuff done, admittedly I could have cut off the whole chat check, but there has been good info on giants server editing channel.
</p>

<p>
2024-11-24T02:34:00Z Okay what do we got, what do we got! <img src="../images/smileys/icon_biggrin.gif" alt="Smiley :D" loading="lazy">
</p>

<p>
Shut off chat and twitch, useless waste of time. Now editing begins, but what do I do first. Hmm well I recall from day before yesterday I meant to try that massive crazy 8192 x 8192 heightmap image resolution, it failed with the texture lod something issue. I still have the terrain project in the dir so I'm going to launch FS25 to get a fresh error log, then see if I could fix that issue.
</p>

<p>
As I recalled:
</p>

<pre>
2024-11-24 02:37 Error: TerrainDeformation requires a terrain lod size that is a multiple of the terrain height map size
</pre>

<p>
Issue is "terrain lod size", what the hell is that in terms of GDM/GRLE or TERRAIN_CLASSNAME.i3d property, huh? Got to love descriptive error messages. This froze loading the terrain at 65% progress bar mark.
</p>

<p>
2024-11-24T02:48:10Z Still one more time wasting hurtle, while killing farming simulator game from windows 10 task manager I noticed microsoft edge and search garbage was running. This is odd as I thought those were uninstalled/disabled long time ago. So I went and created _run_kill_microsoft_edge_process.bat and _run_kill_search-exe_process.bat files, ran those as administrator and now search.exe and msedge.exe are gone. Okay windows 10 garbage is now a little bit cleaner.
</p>

<p>
NOW back to FS25 terrain editing studies. So this terrain lod size issue, going to google it just in case there might be something available online. Found few hits which lead to nothing but newbies copy-pasting error logs. On some other topic I found "lodTextureSize" info about that needs to be increased to 8192 pixels, hmm OK guess that is easy to try out. There was also info that lodTextureSize works with _weight image resolutions, that if your _weight images are lets say 4096 then that lodTextureSize will revert back to 2048 or 4096 (not sure) upon GE save.
</p>

<p>
Hmm guess its time to break out the C4 and blow stuff up, back to the roots, I'm going to convert GDM and GRLE images to PNGs so I can see what size stuff there is now. Could be as easy as rescaling those up to double, just to start with.
</p>

<p>
Created _run_graphicsmagick_FS25_identify_PNG_resolutions_ordered.bat file, copied it to C:\Farming.Simulator.25.Editing\PMC_mapUS_8km\mapUS\data dir and ran it, this gave me a good solid list of image specifications.
</p>

<p>
Going to paste the current list below here just because, hah this will be fun to sort into HTML pre tags hehe:
</p>

<pre>
C:\Farming.Simulator.25.Editing\PMC_mapUS_8km\mapUS\data image resolutions 
*** 
weight images 
*** 
asphalt01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000007s
asphalt02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000006s
asphaltCracks01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000006s
asphaltCracks02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000005s
asphaltDirt01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000005s
asphaltDirt02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000005s
asphaltDusty01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000006s
asphaltDusty02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000005s
asphaltGravel01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000006s
asphaltGravel02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000007s
asphaltTwigs01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000006s
asphaltTwigs02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000006s
concrete01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000005s
concrete02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000006s
concreteGravelSand01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000005s
concreteGravelSand02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000006s
concretePebbles01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000006s
concretePebbles02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000006s
concreteShattered01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000006s
concreteShattered02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000005s
forestGrass01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000006s
forestGrass02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000005s
forestLeaves01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000005s
forestLeaves02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000005s
forestNeedels01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000005s
forestNeedels02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000005s
grass01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 329.7Ki 0.000u 0m:0.000005s
grass02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 341.1Ki 0.000u 0m:0.000006s
grassClovers01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000005s
grassClovers02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000005s
grassCut01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000006s
grassCut02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000005s
grassDirtPatchy01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000005s
grassDirtPatchy02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000005s
grassDirtPatchyDry01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000005s
grassDirtPatchyDry02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000005s
grassDirtStones01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000005s
grassDirtStones02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000006s
grassFreshMiddle01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000005s
grassFreshMiddle02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000005s
grassFreshShort01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000006s
grassFreshShort02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000006s
grassMoss01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000005s
grassMoss02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000006s
gravel01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000005s
gravel02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000005s
gravelDirtMoss01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000005s
gravelDirtMoss02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000006s
gravelPebblesMoss01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000005s
gravelPebblesMoss02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000006s
gravelPebblesMossPatchy01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000005s
gravelPebblesMossPatchy02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000005s
gravelSmall01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000006s
gravelSmall02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000006s
mudDark01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000006s
mudDark02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000006s
mudDarkGrassPatchy01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000006s
mudDarkGrassPatchy02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000006s
mudDarkMossPatchy01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000006s
mudDarkMossPatchy02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000006s
mudLeaves01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000005s
mudLeaves02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000005s
mudLight01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000005s
mudLight02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000006s
mudPebbles01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000006s
mudPebbles02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000006s
mudPebblesLight01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000005s
mudPebblesLight02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000005s
mudTracks01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000005s
mudTracks02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000005s
pebblesForestGround01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000005s
pebblesForestGround02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000005s
rock01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000007s
rock02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000005s
rockFloorTiles01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000005s
rockFloorTiles02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000005s
rockFloorTilesPattern01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000005s
rockFloorTilesPattern02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000005s
rockForest01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000006s
rockForest02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000006s
rockyForestGround01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000006s
rockyForestGround02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000005s
sand01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000005s
sand02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki 0.000u 0m:0.000006s
*** 
density images 
*** 
densityMap_fruits.png PNG 4096x4096+0+0 DirectClass 8-bit 47.9Ki 0.000u 0m:0.000006s
densityMap_ground.png PNG 4096x4096+0+0 DirectClass 8-bit 47.9Ki 0.000u 0m:0.000006s
densityMap_groundFoliage.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.0Ki 0.000u 0m:0.000005s
densityMap_height.png PNG 4096x4096+0+0 DirectClass 8-bit 47.9Ki 0.000u 0m:0.000006s
densityMap_stones.png PNG 4096x4096+0+0 PseudoClass 256c 8-bit 16.0Ki 0.000u 0m:0.000006s
densityMap_weed.png PNG 4096x4096+0+0 PseudoClass 256c 8-bit 16.0Ki 0.000u 0m:0.000006s
*** 
infolayer images 
*** 
infoLayer_environment.png PNG 512x512+0+0 PseudoClass 256c 8-bit 334 0.000u 0m:0.000006s
infoLayer_farmlands.png PNG 1024x1024+0+0 PseudoClass 256c 8-bit 2.3Ki 0.000u 0m:0.000006s
infoLayer_fieldType.png PNG 4096x4096+0+0 PseudoClass 256c 8-bit 16.0Ki 0.000u 0m:0.000006s
infoLayer_indoorMask.png PNG 4096x4096+0+0 PseudoClass 256c 8-bit 16.0Ki 0.000u 0m:0.000006s
infoLayer_limeLevel.png PNG 4096x4096+0+0 PseudoClass 256c 8-bit 16.0Ki 0.000u 0m:0.000006s
infoLayer_navigationCollision.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.0Ki 0.000u 0m:0.000006s
infoLayer_placementCollision.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.0Ki 0.000u 0m:0.000006s
infoLayer_placementCollisionGenerated.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.0Ki 0.000u 0m:0.000005s
infoLayer_plowLevel.png PNG 4096x4096+0+0 PseudoClass 256c 8-bit 16.0Ki 0.000u 0m:0.000006s
infoLayer_rollerLevel.png PNG 4096x4096+0+0 PseudoClass 256c 8-bit 16.0Ki 0.000u 0m:0.000006s
infoLayer_sprayLevel.png PNG 4096x4096+0+0 PseudoClass 256c 8-bit 16.0Ki 0.000u 0m:0.000006s
infoLayer_stubbleShredLevel.png PNG 4096x4096+0+0 PseudoClass 256c 8-bit 16.0Ki 0.000u 0m:0.000006s
infoLayer_tipCollision.png PNG 4096x4096+0+0 PseudoClass 256c 8-bit 16.0Ki 0.000u 0m:0.000006s
infoLayer_tipCollisionGenerated.png PNG 4096x4096+0+0 PseudoClass 256c 8-bit 16.0Ki 0.000u 0m:0.000006s
infoLayer_weed.png PNG 4096x4096+0+0 PseudoClass 256c 8-bit 16.0Ki 0.000u 0m:0.000005s
</pre>

<p>
<i>Edit 2024-12-05T22:52:30Z, yep I was right, that was real "fun" to edit for HTML pre tags, haha!</i>
</p>

<p>
So looks like this terrain is basic standard giants image resolutions, I faintly recall that this is indeed the case as all I did was to increase dem.png heightmap image resolution to silly 8192 x 8192 pixels. Okay so going to run my basic double enlarge bat file on these fiels, in general weight to 4096, density to 8192 and infolayer to double (mostly 8192).
</p>

<p>
Also before doing this found yet another forum post saying that lodTextureSize is same as _weight image resolution, well if that is true then that is a new information for me, I never used that in any PMC terrains ever. Will need to check that as well.
</p>

<p>
Ran _run_graphicsmagick_FS25_density_to_8192.bat and _run_graphicsmagick_FS25_weight_to_4096.bat files, then had to copy _run_graphicsmagick_FS25_infoLayer_to_DOUBLE.bat into this projects data/ dir, ran that as well. Then opened mapUS.i3d in notepad++ and CTRL-F search for lodTextureSize, changed that to: lodTextureSize="4096", okay now its sync to mod-set dev dir and then in-game test for new list of errors <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2024-11-24T03:18:08Z It froze on 65% progress bar again with the same error as before, but it was my after meal restroom break so decided to leave game processing here while I'm away, I'm 99.99% it wont recover from that point but hey why not give it several minutes time just for once as I would never wait that long on normal testing conditions.
</p>

<p>
2024-11-24T03:30:01Z Came back from the restroom and this sumbitch is still at 65% progress bar, its frozen solid. OK time to kill it.
</p>

<p>
Went to C:\FS25.Mods\Dev dir and moved all the mods away from there, they are not needed for testing. Then finished reading log.txt entries and there was a new error now I've not seen before:
</p>

<pre>
2024-11-24 03:16 Error: Failed to read terrain occluder cache 'C:/FS25.Mods/Dev/PMC_mapUS_8km/mapUS/mapUS.i3d.terrain.occluders.cache'.
</pre>

<p>
Hmm that is very odd because that file <i>is</i> present in the dir, double checked the directory path as well, yeah project_dir/mapUS/, it is there, hmm very strange.
</p>

<p>
Created _run_graphicsmagick_FS25_weight_to_8192.bat file which is dumb to have FS25 tag as it has nothing to do with any specific game-engine version, its simply searching for *_weight.png filenames and if found goes to work rescaling them up to 8192 x 8192 resolution. Copied this file to data/ dir and ran, now weight images are larger. While that was running edited mapUS.i3d to lodTextureSize="8192" value to match the weight images as suggested in some online search hit. I think densityMap_* and infoLayer_* images should be resized along with weight images but I'm going to give this a try for now.
</p>

<p>
File sync to mod-set dev dir and then in-game test.
</p>

<p>
2024-11-24T03:46:06Z Negative, still the same error, also got new nmap error as well.
</p>

<pre>
2024-11-24 03:45 Warning: Terrain normal cache 'C:/FS25.Mods/Dev/PMC_mapUS_8km/mapUS/mapUS.i3d.terrain.nmap.cache' has wrong size.
2024-11-24 03:45 Error: Failed to read terrain occluder cache 'C:/FS25.Mods/Dev/PMC_mapUS_8km/mapUS/mapUS.i3d.terrain.occluders.cache'.
2024-11-24 03:45 Error: TerrainDeformation requires a terrain lod size that is a multiple of the terrain height map size
</pre>

<p>
Next up is to rescale densityMap_*.png to 16384 high resolution, yikes.
</p>

<p>
Created new _run_graphicsmagick_FS25_density_to_16384.bat file and edited it for 16384 pixel resolution, I cant remember from FS22 if I used this size, I think I did. Copied this new bat to data/ dir and ran it. Got some big chunky densityMap_*.png images now, let FS25 choke on them. Another sync to dev dir and then in-game test, yes that nmap is wrong size but I'd like to get few more in-game test done before reverting back to GE v10.0.2 loading and generating ground collision map.
</p>

<p>
2024-11-24T03:55:26Z In-game test was what I expected, infoLayer_*.png images need resizing as well, new error coming up.
</p>

<pre>
2024-11-24 03:53 Error: Trying to set DensityMapHeightUpdater collision map with invalid size (134217728 vs 536870912)
2024-11-24 03:53   Warning: No tip collision map defined. Creating empty tip placement collision map.
</pre>

<p>
That DensityMapHeightUpdater and tip placement collision map are good old errors I've seen before. Okay then, going for 16384 infoLayer_*.png images as well. One by one, going up.
</p>

<p>
But first, there is some lame windows 10 "Game Bar" in task manager, I cannot live with crap like that, it must go...
</p>

<p>
2024-11-24T04:02:12Z Looks like that got done, hopefully last win10 garbage issue I have to deal with today, I got no time for that crap. Okay where was I, okay infolayers...
</p>

<p>
Created _run_graphicsmagick_FS25_infoLayer_to_16384.bat file, edited it for 16384 pixel resolution for following image files:
</p>

<pre>
infoLayer_fieldType.png
infoLayer_indoorMask.png
infoLayer_limeLevel.png
infoLayer_plowLevel.png
infoLayer_rollerLevel.png
infoLayer_sprayLevel.png
infoLayer_stubbleShredLevel.png
infoLayer_tipCollision.png
infoLayer_tipCollisionGenerated.png
infoLayer_weed.png
</pre>

<p>
Rest are same as before for environment, farmlands and dunno what else, navigation collision was 4096 so that went up to 8192, dunno if that is OK, will soon see on in-game test. Ran the bat and now I have big whopping infoLayer images.
</p>

<p>
2024-11-24T04:19:22Z In-game test resulted in CTD <img src="../images/smileys/icon_surprised.gif" alt="Smiley :o" loading="lazy">
</p>

<p>
PMC Gaming comptuer has 16gb RAM and because the heightmap is stupid 8192 x 8192 pixel resolution FS25 or my computer rather, ran out of RAM and FS25 crashed. When I got out of the game crashing I saw on task manager in the background having 97% RAM usage, so yeah it was up to the gills. Also same <i>"TerrainDeformation requires a terrain lod size that is a multiple of the terrain height map size"</i> error remains even though otherwise it kind of looked like it was loading in. Hmm I'm going to copy this terrain project to PMC DevSurf computer which got 64gb RAM and try to run it there...
</p>

<p>
2024-11-24T04:33:20Z Test complete, very odd as there it got stuck in 65% again, hmm. Oh well. Okay I'll conclude this silly 8192 x 8192 heightmap experiment right here and move on to normal 4096 x 4096 resolution.
</p>

<p>
Tried to read through some of my large FS22 terrain dev diaries but there is just way too much information, I'll just have to keep going from my memory.
</p>

<p>
Went back to PMC_mapUS_6km project as that is the one with ground texture low resolution blur issue, checked with graphicsmagick bat, its weight images are 4096 which is fine I guess, density is 8192 and infolayer is 4096 and 8192, overall looking good. Opened mapUS.i3d in notepad++ and lodTextureSize="2048" is that default, so changed it to 4096. It would be pretty silly if this would fix it but at this point I'm willing to try anything, so another sync and in-game test next.
</p>

<p>
2024-11-24T04:57:08Z No errors in-game but ground textures are low resolution blur same as before lodTextureSize change. Hmm going to load this terrain in GE v10.0.2 and look around in the menus just in case there would be something I missed.
</p>

<p>
Was just browsing in GE v10.0.2 and when on terrain -&gt; layer manager it crashed, OK no big deal, checked editor_log.txt anyways, was intriqued to find this:
</p>

<pre>
Error: Terrain weight map 'C:/Farming.Simulator.25.Editing/PMC_mapUS_6km/mapUS/data/forestRockRoots01.png' size incorrect. Same size (4096px) for all layers is needed .
Error: Terrain weight map 'C:/Farming.Simulator.25.Editing/PMC_mapUS_6km/mapUS/data/forestRockRoots02.png' size incorrect. Same size (4096px) for all layers is needed .
</pre>

<p>
Hmm whats this... <img src="../images/smileys/icon_confused.gif" alt="Smiley :?" loading="lazy">
</p>

<p>
Well what was interesting is that I have no such file in my data/ dir, hmm <img src="../images/smileys/icon_confused.gif" alt="Smiley :?" loading="lazy">
</p>

<p>
Went to fs25_root/data/maps/mapUS/data/ dir and sure enough, these images were there, err WHAT <img src="../images/smileys/icon_confused.gif" alt="Smiley :?" loading="lazy">
</p>

<p>
Why on green earth didn't these files get copied over when I copy-pasted the whole dir, umm this is BIZARRE <img src="../images/smileys/icon_surprised.gif" alt="Smiley :o" loading="lazy">
</p>

<p>
Then copy-pasted them to my PMC_mapUS_6km/mapUS/data/ dir... but windows file explorer said these files are present. <b>DOUBLE WHAT</b> <img src="../images/smileys/icon_confused.gif" alt="Smiley :?" loading="lazy">
</p>

<p>
Indeed forestRockRoots01.png and forestRockRoots02.png are in the dir and both are 2048 x 2048 resolution. Okay this makes less and less sense by the minute. Ran _run_graphicsmagick_FS25_weight_to_4096.bat one more time, checked the cmd.exe console carefully and my batch file did not list neither of these files, err WHY <img src="../images/smileys/icon_confused.gif" alt="Smiley :?" loading="lazy">
</p>

<p>
This is ... beyond strange <img src="../images/smileys/icon_surprised.gif" alt="Smiley :o" loading="lazy">
</p>

<p>
Or I'm just plain and simply fucking blind! HAHAHAAH!
</p>

<p>
Did you see the error by reading this dev diary, did you? <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Yes indeed if you did you got much better eyes than me <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
For those who didn't still catch the error, it was this: my bat file scans for *_weight.png images in data dir... you follow? So because these mapUS.i3d files are listed <b>WITHOUT _WEIGHT SUFFIX</b> they did not get flagged into this batch file, therefore they gave an error in GE v10.0.2 that they are not the same resolution as others (4096). Oh wow, giants, please "plz", what are you guys doing! <img src="../images/smileys/icon_biggrin.gif" alt="Smiley :D" loading="lazy">
</p>

<p>
Okay so I manually opened forestRockRoots01.png and forestRockRoots02.png images in GIMP, resized them up to 4096 x 4096 pixel resolution, saved and exited. Okay another sync and then in-game test, now I'm getting excited! <img src="../images/smileys/icon_surprised.gif" alt="Smiley :o" loading="lazy">
</p>

<p>
2024-11-24T05:19:16Z In-game test complete and to my great disappointment I have to report that no change, ground textures are still low resolution blur <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
Checked fs25 log, no errors, no warnings. Hmm okay restroom break while contemplating what to try next, at least I can report this missing _weight suffix to giants.
</p>

<p>
On my way back stopped at PMC DevSurf computer, used powergrep4 to quickly search through all fs25 game i3d and xml files for "forestrock" string, its only listed in mapUS.i3d file. Well that was easy catch then. But I didn't come up with any new ideas what to try next.
</p>

<p>
I'm going to load PMC_mapUS_6km in GE v10.0.2, generate ground collision map and save, who knows maybe that could make some change, I highly doubt it but got to try everything.
</p>

<p>
Got that done, then GE saved GDM/GRLE images which I converted back to PNG and deleted originals, just because. Hey maybe next time I'll leave GDM/GRLE files in the dir to see if that makes any difference. I also have already idea to try 8192 x 8192 resolution weight images, but first in-game test with this ground tip collision save.
</p>

<p>
2024-11-24T05:52:12Z In-game test shows ground textures as low resolution blur, log file clean, no errors, no warnings. Now going to beef up _weight images to 8192 resolution.
</p>

<p>
Changed mapUS.i3d lodTextureSize="8192", copied _run_graphicsmagick_FS25_weight_to_8192.bat to data/ dir and ran it. Then of course manually rescaled weight suffix-less forestrockroots images in GIMP to 8192 resolution. Then sync and in-game test.
</p>

<p>
2024-11-24T06:02:52Z No dice, still a blur. Okay going to do that _weight suffix fix, another GE load and save just to be sure it comes out OK.
</p>

<p>
2024-11-24T06:11:40Z Got all that done, no joy, ground textures remain low resolution blur.
</p>

<p>
Hmm now I'm out of ideas again, what shall I try next that I haven't tried yet, hmm <img src="../images/smileys/icon_confused.gif" alt="Smiley :?" loading="lazy">
</p>

<p>
Hmm going to try some idiotic sample map modz, just to see if they give me same results.
</p>

<p>
I had one of the earliers "FS25_EmptyMap" dir in my terrain editing dir, its done by "geeman72" who actually is on giants discord editing channel. Well that was a no go, its buggy terrain as is, heightmap file points to giants dir instead this mod dir, decided to delete it and find some newer version.
</p>

<p>
Downloaded <a href="https://farmingsimulator25mods.com/farmerb0bs-empty-flat-map-2x-v1-0/" target="_blank">farmerb0bs-empty-flat-map-2x-v1-0</a> to see how this is done...
</p>

<p>
After quick inspection it looks pretty clean and empty regarding files. Checked it in-game and its definitely not empty terrain, there is granpa walter, some map icons and the distance terrain mesh present.
</p>

<p>
Then downloaded two more: <a href="https://farmingsimulator25mods.com/north-sweden-v1-0/" target="_blank">north-sweden-v1-0</a> this is actually regular terrain, beta but still, and <a href="https://farmingsimulator25mods.com/sample-mod-map-8x-v1-0/" target="_blank">sample-mod-map-8x-v1-0</a> whatever bullmanure this "8x" is supposed to mean again, newbies when they learn how to <a href="../19/terrain-use-actual-size.php">use actual sizes</a> <img src="../images/smileys/icon_rolleyes.gif" alt="Smiley :rolleyes:" loading="lazy">
</p>

<p>
Also leeched this trash <a href="https://farmingsimulator25mods.com/map-1x-terrain-from-real-v1-0/" target="_blank">map-1x-terrain-from-real-v1-0</a>.
</p>

<p>
On farmer b0b's "FS25_EmptyFlatMap" changed config values to 6.1km terrain and tried in-game, no go it was also blur ground texturing, then I changed it back to 2048 unitsperpixel 1 just to confirm ground texture returns back to normal. And it did, all good, deleted this terrain.
</p>

<p>
Next checked out "FS25_NorthSwedenBeta.zip" and this was interesting, inside this zip there is "icon_saved_map" dir, err, what <img src="../images/smileys/icon_confused.gif" alt="Smiley :?" loading="lazy">
</p>

<p>
Unpacked the zip into FS25_NorthSwedenBeta/ directory. Well this was interesting, its mapUS/ dir contains two grassDirt* weight PNG images. Textures sub dir has fields.i3d hehe. Moved this project dir to mod-set dev dir for in-game test. This was indeed 2km custom terrain, heightmap and objects were made by the author, otherwise this was just his heightmap and objects (heh) thrown on top of "SampleMapMod" class name terrain project dir. Decided for the hell of it to try my standard 6144 meter untisperpixel 3 setup, just to see what happens. Same thing as others so far, ground textures turn into low resolution blur. Actually... it almost looks like it turns into single color, more or less, hmm. Deleted FS25_NorthSwedenBeta, now another restroom break while contemplating knowledge gained so far before trying that "8x" whatever the hell its supposed to be terrain.
</p>

<p>
Moved the whole sample_kyrok70_8x.zip into my dev mod-set, going to try this as-is first. At FS25 in-game name in terrain selection menu of course shows "emptymap 4x" and black "Preview" text on white background on the preview.dds image. Mod title is "samplemaps 8x" though, heh make up you mind, will ya. Author name is kyrok. While loading at 95% mark FS25 crashed. Okay this feels like kyrok increased heightmap size to 8192 or similar, just as I tried and failed earlier today. Going to inspect the mod zip next.
</p>

<p>
In fs25 log there was the usual error:
</p>

<pre>
2024-11-24 06:57 Error: TerrainDeformation requires a terrain lod size that is a multiple of the terrain height map size
</pre>

<p>
Inspection; mapUS.i3d shows unitsPerPixel="1" and lodTextureSize="4096". In data/ dir _weight images are 4096 res, heightmap is silly 8192 res, densityMap_* images are 16384 except densityMap_groundFoliage.png is 8192. infoLayer_environment.png is 2048 so four times larger, infoLayer_farmlands.png is 4096 which is interesting as it doesn't need to be that big, infoLayer_fieldType.png, infoLayer_indoorMask.png and infoLayer_limeLevel.png are 16384. infoLayer_navigationCollision.png, infoLayer_placementCollision.png and infoLayer_placementCollisionGenerated.png are 8192. infoLayer_plowLevel.png, infoLayer_rollerLevel.png, infoLayer_sprayLevel.png, infoLayer_stubbleShredLevel.png, infoLayer_tipCollision.png, infoLayer_tipCollisionGenerated.png and infoLayer_weed.png are 16384. Here PNGs were next to the GDM/GRLEs, so no cleanup took place. mapUS.xml shows terrain size as 8192 so dunno where this kyrok dude gets that "8x" from as this is 8.1 kilometers x 8.1 kilometers size terrain, he probably meant "8km" but accidentally or not wrote that eight ex weird term. Hey, this is farmsim community, weird is part of the job, hehe.
</p>

<p>
Just for the hell of it I'll copy this project dir into PMC DevSurf to give it a try with 64gb RAM. Although it might be that over there my GPU runs out of VRAM before terrain is loaded, but going to check it anyways.
</p>

<p>
2024-11-24T07:22:29Z PMC DevSurf in-game test complete for this kyrok 8.1km x 8.1km terrain and unfortunately I have to report that it works, to my amazement. There was this usual error again:
</p>

<pre>
2024-11-24 07:17 Error: TerrainDeformation requires a terrain lod size that is a multiple of the terrain height map size
</pre>

<p>
But it loads in-game as that computer has 64gb RAM, even though it has GTX 1060 3gb video card, it maxed out around 2.7/3.0gb dedicated GPU memory on windows task manager, but it loaded it up.
</p>

<p>
Ground textures are not, I say again, are NOT low resolution blur <img src="../images/smileys/icon_confused.gif" alt="Smiley :?" loading="lazy">
</p>

<p>
Okay, so what the hell... is it my 2048 x 2048 heightmap resolution that causes this issue all along, how could that be, its just the heightmap, hmm.
</p>

<p>
Okay next up, new rounds of tests with newly acquired knowledge.
</p>

<p>
I'm going to rescale my heightmap up to regular 4096 x 4096 pixel resolution, this is definitely embarrassing as forty ninety six is my go-to resolution since early 2018 days, why did I just lazily kept on that 2048 I have no frigging idea, it just never came to my mind that change heightmap resolution you imbecile.
</p>

<p>
I mean I'm assuming that is the cause because what the hell else could it be, I've ran my projects with pretty much the same settings as kurok's "8x" whatever that is supposed to be 8.1km size terrain is, only difference being heightmap size. Sure heightmap is pretty key to any terrain, its the core from everything else is built on literally and figuratively speaking, but still, heightmap, seriously? <img src="../images/smileys/icon_confused.gif" alt="Smiley :?" loading="lazy">
</p>

<p>
But man the victory will be so sweet if this fixes it, will be embarrassing to admit publicly, but hell these dev diaries are the <b>good</b>, the <b>bad</b> and the <b>ugly</b>, so you are who you are, no lying or changing facts to make yourself look good, I rather admit shameful truths than tell ego boosting lies.
</p>

<p>
Anyways, back to editing, moron.
</p>

<p>
Back to PMC_mapUS_6km/ terrain project editing, hello my six by six sweetheart, did you miss me <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Opened mapUS.i3d in notepad++, remembered from FS22 era PMC Super Six 6km editing that unitsPerPixel must be 1.5 to achieve 6144 meters x 6144 meters size. Then opened dem.png in GIMP, rescaled it up to 4097 (yeah 7, let it scale up two times, naturally pixel to pixel).
</p>

<p>
At this point I was getting, err I mean got extremely cocky in my mind, I was 100% sure without a shadow of a doubt that now with this heightmap resizing the ground texture low res blur issue goes away, not sure why, guess its just the process of elimination, if you've read all these FS25 dev diaries of mine through (including the summaries in PMC Tactical Forum) you already know I've gone through just unspeakable amount of permutations with these configs and image resolutions.
</p>

<p>
Got those edits done, hopefully didn't forget anything in my excitement, then it was just terrain project dir robocopy sync to dev mod-set dir and in-game test. Getting quite excited here, again <img src="../images/smileys/icon_surprised.gif" alt="Smiley :o" loading="lazy">
</p>

<p>
2024-11-24T07:45:12Z In-game test... failed, it froze at 65% loading progress bar, but didn't crash or use crazy amounts of RAM/VRAM, it just froze, regular good old sixty five percent freeze.
</p>

<p>
Checked game log for errors, these came back:
</p>

<pre>
2024-11-24 07:42 Warning: Terrain normal cache 'C:/FS25.Mods/Dev/PMC_mapUS_6km/mapUS/mapUS.i3d.terrain.nmap.cache' has wrong size.
2024-11-24 07:42 Error: Failed to read terrain occluder cache 'C:/FS25.Mods/Dev/PMC_mapUS_6km/mapUS/mapUS.i3d.terrain.occluders.cache'.
</pre>

<p>
So that tells me I need to load terrain project in GE v10.0.2 and generate ground collision mask, save and then try again.
</p>

<p>
Ooh chunky monkey:
</p>

<pre>
Virtual Texture initialized at 8192 x 8192 resolution
TipCollision: Updating infoLayer...
TipCollision: Update finished.
PlacementCollision: Updating infoLayer...
PlacementCollision: Update finished.
Ground collision map update finished. Run 'Save' to finally save all the infoLayer changes!
Started 7 threads for threadpool 'saveBaseLayers'
Scenefile 'C:/Farming.Simulator.25.Editing/PMC_mapUS_6km/mapUS/mapUS.i3d' saved in 96146.138300 ms at Sun Nov 24 07:51:08 2024.
</pre>

<p>
That took a while to save, almost reminded me about the 2022 GE v9.0.x series object import and save durations <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Now sync to dev mod-set dir and then I should start to see some good results in-game, man I'm telling ya, I'm just about ready for that sort right about now <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2024-11-24T08:00:10Z In-game test complete, ground textures are low resolution blur, no errors, no warnings, in fact this is looking good on the game log:
</p>

<pre>
2024-11-24 07:56 Virtual Texture initialized at 16384 x 16384 resolution
</pre>

<p>
As there is no other entries related to that, game didn't have to scale up some virtual texture size LOD things or whatever, so looks like my source data is very appetizing to FS25 engine.
</p>

<p>
So why am I not devastated for another failure, ground textures are still blur, right? Indeed. Well once I got in-game (character customizing screen) I was so sure that now it works so once entered 3d world and saw oatmeal alike blur ground textures I immediately clicked, it was like a light swith turned on in my head, "oh... OH! Now I get it." <img src="../images/smileys/icon_surprised.gif" alt="Smiley :o" loading="lazy">
</p>

<p>
Get what you ask? Well I am so confident that this terrain now works that if the ground textures remain blurry, what could still cause that? Well... guess what, and this goes beyond embarrassing, more than that heightmap thing (which actually was false belief)... the reason those ground textures are so blurry is because they have been painted on 2km terrain and now they are stretched over to 6.1km terrain, apparently there is some sort of turnover/switch at the 4096 mark that they turn to blur, in FS19 and FS22 you see this same thing except on those game engines the ground texturing just turns pixelated, but in FS25 the engine has changed somewhat and I kind of see the same pixelation now in the ground when I use dev console gsPlayerFlightToggle command and get some altitude, some perspective. Now I have to go back to GE once more and re-paint the grass ground textures to apply new properly scaled high resolution 4096 (or was it 8192 already forgot by now) _weight image pixel distribution aka ground texturing.
</p>

<p>
I'm so sure about that now that I wrote all the above without trying it out first and if I turn out to be wrong, again, then I'll just leave that text unedited there to remind me to check myself.
</p>

<p>
Okay firing up GE v10.0.2, lets get this stuff done <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2024-11-24T08:10:10Z Yeah this is so embarrasingly stupid, I'm laughing out loud here when looking at the grass ground texture in GE v10.0.2 as it looks exactly like that in-game, why, WHY THE HELL didn't I put 1+1 together before, I've seen this blurry GE ground texture many times but never even gave another thought to it, just assumed that is how it looks in GE with very low "video settings" <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2024-11-24T08:14:52Z Well, I was wrong, in GE v10.0.2 with my current very low video settings its still blur I can hardly see what type of texture I'm painting down, so guess I'm all done making these bold predictions, okay proceeding one step at the time and comment after events have happened, saves me from further embarrasments. <i>Edit 2024-12-05T23:40:57Z, while proof reading this was smiling knowing that it would be so easy to remove all that "I'm now sure!!1" info, but as I said, none of my PMC stuff gets edited to make it look good, if I screw up then I own up to it instead of lie to make myself look better.</i>
</p>

<p>
Saved project and exited, then sync to dev mod-set dir and in-game test, although... what could have changed from previous test, umm dunno.
</p>

<p>
2024-11-24T08:19:48Z Negative, no joy. Ground textures are the same shit blur as always. I now changed FS25 main menu options video preset to ULTRA, going to just make sure there is no issue in my game although it makes no sense because riverbend springs works OK.
</p>

<p>
No luck, same blur ground textures even with ultra video-preset. Going to try ONE more time with shaders dir deleted from settings dir, just in case it would be some bizarre shader thing, I mean you probably get the sense that I'm running out of options real soon when needing to revert into this kind of voodoo mumbo jumbo magic tricks.
</p>

<p>
2024-11-24T08:35:30Z No luck after deleting shaders dir, blur is and remains. This is getting depressing <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
I continued testing by changing video settings a bit, made sure texture and shader related options were maxed out, used video preset high, went to riverbend springs, flew around to make sure GPU has hogged all the texture shader crap it needs to, then back to main menu and loaded in PMC_mapUS_6km and no change, ground textures are low resolution blur. I simply do not understand WHY <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
Hmm I need to re-download kyrok's 8.1km template terrain and load it into GE v10.0.2 to see how its ground textures look, if they are still high res there, then I am even more confused.
</p>

<p>
2024-11-24T08:56:17Z I am confused, ground textures look fine in there. Ooh my head hurts <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
Okay need to take another restroom break to contemplate that what the heck is going on with my terrain projects now, well I guess its a single project, as I copy-pasted from my one mapUS copy I did several days ago, all it needs is some hidden bit set to true there and all deratives are faulty then. Hmm maybe I'll try to drop in my 4096 heightmap into that kyrok's terrain project just to get comparison data that what happens. I'm so outta ideas that I'm grasping for straws here <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
While leaving computer to restroom, checked timer that when is lunch break and realized that on top of all the other mess-ups today I forgot to set that timer, but looks like still got 8hrs 53min left on today, so days second meal is coming soon, could probably eat it right now it wouldn't be too far off, its much easier to be hungry when tired and in the middle of the day. Anyways.
</p>

<p>
2024-11-24T09:11:32Z Oh shoot, it is my heightmap, GDM or GRLE images! I overwrote kyrok's 8.1km terrain projects images with mine, changed mapUS.i3d unitsPerPixel from 1 to 1.5 and poof, everything went belly up, kyrok's ground textures turned into oatmeal blur <img src="../images/smileys/icon_surprised.gif" alt="Smiley :o" loading="lazy">
</p>

<p>
Next I'm going to restore kyrok's 8.1km terrain project as is, then copy one by one like densityMap* set of GDMs first and check, one by one check where this stuff goes broken.
</p>

<p>
First compared my dem.png against kyrok's, they are the same, grayscale 16-bit images. So that should be OK. But I'm going to overwrite kyrok's with mine now as is, hell I'm not even going to change unitsperpixel, lets see what happens.
</p>

<p>
Done, no issues in GE v10.0.2, however this was 4096 * 1 so 4km terrain size, this was already working before. Going to change unitsPerPixel to 2 now which returns this to 8.1km size.
</p>

<p>
Using unitsPerPixel 2 it still works, hmm.
</p>

<p>
I'm going to try it the other way around, copy kyrok's GDM and GRLE images to my PMC_mapUS_6km/ terrain project dir and load it up, if its still blur then its something else than those images.
</p>

<p>
2024-11-24T09:31:20Z Yeah copy-pasting dem.png, GDM and GRLE images from kyrok's terrain project into mine results into same blur ground textures.
</p>

<p>
Okay, I am getting fed up with this, what the HELL did I mess up on my initial terrain source file creation, now I'm going to open mapUS.i3d files to notepad++ from both projects and compare the terrain sections settings one-to-one.
</p>

<p>
Checked and TerrainTransformGroup name="terrain" are identical on both i3d files, well so much for that theory.
</p>

<p>
Looking further for differences I now see that I'm missing ProceduralPlacement XML tag/property whatever its called, could this be some new terrain tech stuff that if its gone then poof all ground textures go nuts? Only way to find out is to copy paste it to mine.
</p>

<p>
Err, wait what, I do have the exact same XML thingy, ugh.
</p>

<p>
For testing purposes I changed unitsPerPixel="2" on mine so I could compare against kyrok's just by CTRL-PAGE-UP and PAGE-DOWN switching between the two, then loaded mine up in GE v10.0.2 and... and, now it works, seriously what the hell? <img src="../images/smileys/icon_confused.gif" alt="Smiley :?" loading="lazy">
</p>

<p>
So changed PMC_mapUS_6km config XML to 8192 size and loaded it up on fs25...
</p>

<p>
2024-11-24T09:50:41Z Umm, FS25 crashed as my computer maxed out 16gb RAM usage, ouch <img src="../images/smileys/icon_surprised.gif" alt="Smiley :o" loading="lazy">
</p>

<p>
Timer in my phone is showing 8hrs 6min left in today before been awake 17hrs alarm goes off, so now is a perfect mid-day point for me to eat lunch, check chat and twitch etc...
</p>

<p>
2024-11-24T10:33:06Z Feeding time is over, back to terrain studies.
</p>

<p>
Restored mapUS.i3d unitsPerPixel 1.5 and mapUS.xml 6144 values, will now load back into GE v10.0.2 first to see if that still holds the ground textures properly.
</p>

<p>
Negative, back to blur. OK restoring 2 then, so its 8.1km terrain, I don't think the decimal point was a problem but lets see. Loaded it back and up and now ground textures look sharp, no problem there.
</p>

<p>
Umm... could the problem, still, after all these tests, be that giants engine v10 doesn't like unitsPerPixel with decimal points? If that is the case then we are back in the manure pit with only 2, 4, 8.1, 16.3 and max 32.7 kilometer terrains because you sure as hell cannot go to 65.5km in farmsim engine. Having decimal points in unitsPerPixel has helped so much over the years, well mostly in FS22 era but still. Okay more testing is required, guess I'm going to test 16.3km next just to have more confirmation data. <i>Edit 2024-12-06T00:26:21Z, actually since writing this initial text I checked, PMC King Corn 45km, PMC Korkscrew 40km and PMC Cereal Region 32km use non decimal unitsPerPixel values, so its not specifically the decimal points that cause issue. But I guess that was already been established that even number like 3 causes ground texture low resolution blur, so yeah.</i>
</p>

<p>
Oh and yeah if GE v10.0.2 loads textures OK but FS25 itself crashes loading it due more than 16gb RAM usage, well then that is again everything goes to hell situation.
</p>

<p>
2024-11-24T10:51:21Z In-game test attempt resulted with another 16gb RAM maxed out and FS25 crashing <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
Welcome to 2024, GE v10.0.2 doesn't run on 3gb VRAM and FS25 with 8.1km terrains wont run with only 16gb RAM <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
At some point in the future I have to upgrade my hardware, even Sea Power was hogging all my system RAM while playing, perhaps it truly is times changing that for gaming computer 16gb is not enough, actually let me google what is the recommended system RAM gigabytes for 2024 gaming computers...
</p>

<p>
First google hit was <i>"Depending on your rig, and the games you like to play, 32GB may be more RAM than you need. For the majority of people, 16GB of DDR5 will be more than enough to be getting along with.Oct 28, 2024"</i>, and question "is 32gb ram overkill for gaming?" had answer <i>"As for 32GB of RAM, it can be considered overkill for gaming alone. However, if you are also running other resource-intensive programs alongside your games, such as streaming or video editing software, having that much RAM can help ensure that your computer can handle the workload without slowing down.Jan 4, 2023"</i>, and also <i>"For most gamers 16GB of RAM is still the sweet spot in 2024. This amount provides enough headroom for the operating system, background processes, and the game itself to run smoothly without any bottlenecks.Mar 20, 2024"</i>, so hmm dunno.
</p>

<p>
2024-11-24T11:01:55Z Back to editing, regardless what is recommended and "standard" in 2024 it won't change my current situation, sure if I switched my nvidia RTX 3060 12gb GPU from PMC Gaming to PMC DevSurf computer then I would have pretty nice 64gb RAM + 12gb VRAM setup they play around with, but would I release terrain for frarmsim that requires more than 16gb, hell no, well not in 2024 at least and probably not even in FS25 lifetime, perhaps when FS28 or whatever the next game engine will be, is released then I have to upgrade my Gaming computer and terrain mod hardware requirements might be more than 16gb of RAM, but yeah definitely not now.
</p>

<p>
Back to the problem at hand... hmm I need to check what sizes GDM/GRLE images are now, as if they are 16384 then perhaps that is something that eats all that RAM with the new ground deformation bullmanure.
</p>

<p>
If that is the case, well just knowing the fact and using 8192 res density images is not really a fix if 16gb RAM is not enough. Man what a manure show this has turned into.
</p>

<p>
Yeah checked and its both density and infolayer 16384 with weight being 8192, so not exactly light weight stuff.
</p>

<p>
Deleted density, infolayer and weight images, will copy them over from original fs25root dir mapUS data. Then ran GDM GRLE to PNG bat. Then ran _run_graphicsmagick_FS25_weight_to_4096.bat, _run_graphicsmagick_FS25_density_to_8192.bat and _run_graphicsmagick_FS25_infoLayer_to_DOUBLE.bat so now this is basic "double" image size large terrain setup. Finally ran _run_graphicsmagick_FS25_density_infolayer_images_to_all_black_blank.bat but "just because" as I remember this not doing anything last time I ran it. Nope, no affect, nothing got blacked out, OK will have to investigate that some other time.
</p>

<p>
Now I discovered by accident that my c:/games/fs25/data/maps/mapus/data/ dir weight images have been painted all grass, this must have happened sometime during editing while I had to some broken mapUS.i3d loaded with paths still pointing to fs25root data dir instead of my own, ouch. Even though I don't need it right now, I want to fix that just to keep my game files intact. So going to launch that fs25 update thingy from the launcher thingy, you know, <i>the thing in the thing</i>.
</p>

<p>
While fs25 root dir files launcher update was running a quite long time I edited mapUS.i3d to unitsPerPixel 2 (which it was) and lodTextureSize="4096" as weight images are now smaller size. Now just have to wait until launcher update is done, hopefully wont be too long.
</p>

<p>
It got done and then I launched fs25 just to see if everything works OK. Yeah its working OK, then moving on to PMC_mapUS_6km again, hmm GDM and GRLE images need to be blacked out, but graphicsmagick wont do it, hmm I'll see if I can fix the bat file although that is kind of deviating too far from the goal at hand, I am not here to fiddle with graphicsmagick command lines, I need to get this large terrain issue resolved.
</p>

<p>
2024-11-24T12:12:17Z Just got all density and infolayer images blacked out in GIMP, one by one, again. Now I copied them into safety to my C:\Farming.Simulator.25.Editing\Images.Templates.Pre.Painted dir under sub dirs, should be easy to find them there next time creating a new terrain or needing to revert back to default starting status.
</p>

<p>
Got mapUS.i3d loaded in GE, ground texture looks OK. Tried to paint ground textures and GE crashed, heh, ouch.
</p>

<p>
Tried it again and crashes, again. Hmm, well this doesn't feel very good, is GE v10.0.2 unable to paint ground textures without crashing on large terrains, hmm. For my PMC_mapUS_4km I could paint just fine. Hmm could this be what ARG_Afb mentioned in PMC Tactical Forum and few other people have been saying in giants developer network (GDN) forum through google translate so its very hard to understand what the hell they are saying. I wish ARG_Afb would have been clear what he meant that looks like 4km is the only terrain we can do, but it would make sense that he and others have run into this issue that once you LMB click on 8.1km terrain with texture painting mode it will immediately crash.
</p>

<p>
Hmm going to load mapUS.i3d up once more, generate collision mask, save and restart, then try to paint, perhaps there is something fishy going on in the .cache files. Actually thinking it about some more, yeah this is definitely the issue as from previous save this terrain still had the massive 16384 infolayer etc images in place.
</p>

<p>
2024-11-24T12:43:51Z Now GE crashes even when unitsPerPixel is 1 so it would be 4km terrain, umm man I'm starting to zone out here not because being tired but this starts to feel quite exhausting day of editing even though I still have 5hrs 12min left on my been awake 17hrs alarm, so need to keep going especially as I boasted last night that today I'll press on hardcore editing stuff. Hmm now I need to get my bearings, maybe load that kyrok's once more to see if it runs OK, I'm starting to doubt my GE install is working anymore <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Nah its working fine, but yeah I am definitely getting more and more frustrated, I have never ever in my farmsim life experienced this many problems, in general GE v7, v8 and v9 have been "lightweight kiddie" tools compared to ofp/arma editing (especially ArmA 3), but this GE v10.0.2 feels like a fat sleepy elephant. Right now I really miss those good old FS19 GE v8.2.2 editing times <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
On kyrok's 8.1km template terrain I painted, saved and restarted few times, works OK. Then generated collision mask, saved and now plan on testing in-game, dunno why exactly but yeah.
</p>

<p>
2024-11-24T13:04:56Z Nope, doesn't work, my 16gb RAM maxes out and fs25 crashes, boom. Yeah this stuff ain't working.
</p>

<p>
It feels so frustrating as throwing more hardware to the problem would fix it, if you have 64gb RAM like my PMC DevSurf computer has, then terrain such as this loads OK, but users with 16gb RAM out of luck, its not working <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
Also as I already mentioned, even if you were to take such attitude that <i>"go buy more RAM, punk."</i>, it really doesn't fly in this community, I mean there are still many people with 16gb RAM in their computers, its just not realistic to ask large terrain fans to buy 32gb RAM in order to play on a large terrain. And lets not forget that this is 8.1 kilometer x 8.1 kilometer terrain with 4096 res heightmap (unitsPerPixel 2), that standard 8.1km setup as we've known it since basically FS17 times, definitely from FS19.
</p>

<p>
This is quite sad to realize how FS25 giants engine v10 functions, I assume it is the useless gimmick ground deformation crap that causes this insane memory hogging.
</p>

<p>
With these specifications there is snowball chance in hell I could ever bring monster like PMC King Corn 45km into FS25, heh no way! <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
Today been spending much time to get that ground texture low resolution issue resolved, well once that happened... these 16gb RAM hogging issues came up, its like one thing after another.
</p>

<p>
In fact just for reference, I'm going to launch FS22 up and see how much RAM does it use when I load for example PMC Korkscrew 40km terrain.
</p>

<p>
2024-11-24T13:19:07Z Loaded into FS22 Start From Zero PMC Korkscrew 40km savegame, giants engine v9 uses now 7.2gb RAM. PMC Gaming computer overall RAM usage is 9.6/15.8gb (61%). Not too bad, plenty of RAM left.
</p>

<p>
Its quite sad state of affairs when GE v10.0.2 has this many problems and once you manage to sneak in a properly laid out terrain you will hit system RAM hardware limit. Who knows maybe this is just quitter talk, I mean if this test were done in PMC DevSurf computer with its 64gb RAM then I wouldn't even know about any issue, kind of crazy to think it from that perspective.
</p>

<p>
Right now I'm feeling more and more that this large terrain study project is over, the ground texture low resolution blur issue got fixed, kind of, but then while testing that fix I ran into the 16gb RAM limit.
</p>

<p>
Hmm thinking about computer life right now... Sea Power already hogged all my RAM+VRAM and now FS25 does the same on these huge terrains, although its matter of perspective if its legit to let that ground deformation crap to hogg that much system resources, but anyways... yeah it might be that I'm facing an GPU and RAM upgrade very soon, too bad I have nothing but debt so it ain't gonna happen anytime soon, talking about at least one year or more, bare minimum, and even that is a very optimistic estimate.
</p>

<p>
Anyways enough of that.
</p>

<p>
My been awake alarm goes off 4hrs 28min from now, still plenty of time but I don't know what else could I test here, this large terrain testing project is over, at least I would need much more information from other people, perhaps make example terrain for people with RTX 4090 and 32gb RAM systems or something like that, but for now, tonight... yeah I'm done, there is nothing I can think of to do anymore <img src="../images/smileys/icon_surprised.gif" alt="Smiley :o" loading="lazy">
</p>

<p>
2024-11-24T13:31:51Z Time to call it a night, it was excellent day of testing but results unfortunately are definitely not what I wanted to hear. Cu on the next one.
</p>

<p>
Continue reading <a href="dev-diary-large-terrain-studies-003.php">next page</a>, <a href="dev-diary-large-terrain-studies.php">Large Terrain Studies Home</a>, go back to <a href="dev-diary-large-terrain-studies-001.php">previous page</a>.
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
