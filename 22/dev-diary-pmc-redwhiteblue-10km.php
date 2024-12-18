<!DOCTYPE html>
<html lang="en">
<head>
<title>Dev Diary PMC RedWhiteBlue 10km PMC Farming Simulator 22</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Dev Diary PMC RedWhiteBlue 10km PMC Farming Simulator 22">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
<h1>Dev Diary PMC RedWhiteBlue 10km PMC Farming Simulator 22</h1>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>Dev Diary PMC RedWhiteBlue 10km FS22</h2>

<p>
This is developer diary for Farming Simulator 22 terrain called <a href="pmc-redwhiteblue-10km.php">PMC RedWhiteBlue 10km</a>.
</p>

<p>
<i>Special note: initial day one development diaries were lost, I remember writing them, where are they now? <img src="../images/smileys/icon_surprised.gif" alt="Smiley :o" loading="lazy"></i>
</p>

<p>
Below screenshots were taken at christmas eve 2021-12-24, however I do not know where the dev diary text has been lost, I recall writing it already but now cant find it. I blame it all on windows 10 <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<a href="screenshots/PMC-RedWhiteBlue-10km-2021-12-24T0113.jpg" target="_blank"><img src="screenshots/thumbs/PMC-RedWhiteBlue-10km-2021-12-24T0113.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<a href="screenshots/PMC-RedWhiteBlue-10km-2021-12-24T0408.jpg" target="_blank"><img src="screenshots/thumbs/PMC-RedWhiteBlue-10km-2021-12-24T0408.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<a href="screenshots/PMC-RedWhiteBlue-10km-2021-12-24T0454.jpg" target="_blank"><img src="screenshots/thumbs/PMC-RedWhiteBlue-10km-2021-12-24T0454.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<a href="screenshots/PMC-RedWhiteBlue-10km-2021-12-24T0941.jpg" target="_blank"><img src="screenshots/thumbs/PMC-RedWhiteBlue-10km-2021-12-24T0941.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<a href="screenshots/PMC-RedWhiteBlue-10km-2021-12-24T2149.jpg" target="_blank"><img src="screenshots/thumbs/PMC-RedWhiteBlue-10km-2021-12-24T2149.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
2021-12-25 First release was done this day, I have no dev diary entries from that, sorry.
</p>

<!--

update 2022-02-01T18:47:00Z, start of lost and found dev diary entries :)

-->
<p>
2022-01-06T17:33:00Z Discovered that there are error in the log (<a href="terrain-common-errors.php">FS22 common errors</a>), this is very embarrassing as it is such an easy fix, I just never got around to test buying placeables. Error is this:
</p>

<pre>
Error: Blocked area map is wrong size for terrain (16384 x 16384) vs (4096 x 4096)
</pre>

<p>
Starting to fix it right now and plan is to put out update, we cant have error ridden terrains out there.
</p>

<p>
Edited <a href="terrain-moddesc-xml.php">modDesc.xml</a> to version 0.1 and update the description as well.
</p>

<p>
In GIMP opened infoLayer_placementCollisionGenerated.png and resized it down to 4096 x 4096 resolution as fs22 told me to.
</p>

<p>
2022-01-06T18:01:00Z Blocked area map error fixed. Also at the same time we have confirmation that 10.2km terrain works with <a href="terrain-densitymap-infolayer-resolution-mapus.php">infoLayer_placementCollisionGenerated</a> being 4096 x 4096 resolution.
</p>

<p>
2022-01-06T20:27:00Z Went in-game and took a screenshot, its going to be used as new <a href="terrain-user-interface-images.php">preview.dds</a> image.
</p>

<p>
2022-01-06T20:39:00Z Got the image done after few GIMP cropping mishaps <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Used L3DT to generate new rolling hills low elevation <a href="../19/terrain-heightmap.php">heightmap</a>. In <a href="../19/terrain-giants-editor.php">Giants Editor (GE)</a> imported carDealerOffice from mapUS and set triggers to its yard nicely.
</p>

<p>
<a href="../19/terrain-heightscale.php">heightScale</a>="42.96" got set and new heightmap image dropped into data dir. Of course now I have to align to ground all those transformgroups I just placed heh.
</p>

<p>
2022-01-06T21:22:00Z New <a href="../19/terrain-vehicle-shop.php">vehicle shop 3d building and triggers</a> aligned to ground.
</p>

<p>
When I hit CTRL-S to save it went again into the very long save. I believe this was 7min so not ridiculously long but anything more than "waiting time" and its too long already.
</p>

<p>
Restarted GE just in case if there is some voodoo magic going on with the infoLayer files, I doubt restart makes any difference but who knows.
</p>

<p>
Created PMC_Helpers transformgroup and placed meridian flat bottom grain bins there, copy pasted their coordinates into placeables.xml, exported PMC_Helpers to Exclude.For.Release/ dir, then saved and exited GE. Time to test the new heightmap and buildings in-game <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2022-01-06T21:52:00Z In-game check shows no errors with grain bins and dealership buildings showing up nicely. Cool.
</p>

<p>
I still got quite bad FPS while flying around in camera looking at the terrain mesh, if I look away to the terrain edge oblivion then its 60FPS. That is slightly concerning.
</p>

<p>
However I noticed hilarious bug, all fields are gone, there are no <a href="../19/terrain-cultivator_density-gimp.php">cultivator_density painting</a> at all hehe. Oops, how did that happen <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
<a href="../19/terrain-design-document.php">GIMP painted design doc</a>, switched over to the new method I'm using with <a href="../19/terrain-design-document-graphicsmagick.php">graphcismagick bat files</a>, fancy stuff.
</p>

<p>
2022-01-06T22:25:00Z Already feeling quite tired, not yawning yet but eyes are strained so just feel that zombi mode slowly coming up. Going to try edit some more as I really enjoy it now for this terrain and really don't want to go to sleep yet.
</p>

<p>
2022-01-06T23:11:00Z Dead tired now, I'm just about ready for sleep. Been editing the GIMP design doc graphicsmagick bat files to get everything lined up with this terrain, just got cultivated ground in GE but there was smear pixels because I forgot "-filter point" option when resizing PNG, heh... uuh...
</p>

<p>
I need to get some sleep but I got eyes half open so want to finish some sort of good state of editing before going to sleep as tomorrow when I wake up I'm like "umm whaat I did yesterday?" heh.
</p>

<p>
BTW these dev diary texts help great deal on those wondering things what I did previously, there is nothing to remember when all you have to do is read last nights dev diary and oh right, I did that, heh yep its so cool.
</p>

<p>
2022-01-06T23:16:00Z Alright time to call it a night. I just got working fields and terrain detail textures in GE, but I don't want to save as it might take so long I would fall asleep. So I'm off to sleep now and more editing tomorrow for sure <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2022-01-07T04:01:00Z Back at PMC Gaming its new editing day. Launched GE and hit save right away, I'm going to grab some food to get this day started while GE is saving <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2022-01-07T04:30:00Z Days first meal is in and GE saved relatively fast "saved in 568030.736100 ms".
</p>

<p>
Checked in-game and grass is on roads, well guess I goofed up some step in design doc to GE process heh.
</p>

<p>
2022-01-07T04:46:00Z farmer77 in PMC chat had problems with his terrain so I offered to take a look. So going to start doing that now, hopefully it wont take long.
</p>

<p>
2022-01-07T06:37:00Z Okay back in PMC projects again, lets continue. Need to fix that grass on roads, so lets go back to GIMP design doc directory and inspect some PNGs.
</p>

<p>
Don't exactly know what was the issue but I ran all the data through graphicsmagick bat files and copied into GE data dir, grass is now working.
</p>

<p>
2022-01-07T07:25:00Z In-game check shows grass appearing like it should and can create placeables, no errors. Things are looking good. Only thing a bit confusing is the <a href="terrain-overview-image-mapus.php">ESC mapview overview.dds image</a>, it must be out of sync with the actual fields.
</p>

<p>
And it was, forgot to update the new roads I painted heh.
</p>

<p>
2022-01-07T07:37:00Z Updated overview.dds so now it matches terrain data. Dunno what to do next, changed version number to 0.1.1 and this will be the next release I hope.
</p>

<p>
Tested rock picking in-game, well its completely ridiculous now as apparently stones_density image is RGB 1,1,1 everywhere, or at least the field I tried was covered with rocks from one edge to the other heh. I hate this feature in FS22. Checked the density image in GIMP and indeed it was RGB 1,1,1 full image, so I took my previously painted pretty nice looking density image and used it.
</p>

<p>
2022-01-07T09:08:00Z Fixed rock picking, now the rock pixel squares are very random, I like it. But I hate rock picking how it was implemented, I'm seriously considering just ignoring this part of the editing unless giants fix it.
</p>

<p>
2022-01-08T14:31:00Z Today is the release day!
</p>

<p>
Compiled v0.1.1 release using my 7-zip bat file. At this point I don't have FS22 not even win10 installed anymore so I cannot do further editing and testing. This release packet was actually edited already on the 6th.
</p>

<p>
Edit: this was a long story about win10 and clonezilla and gaming computer and linux computer and editing computer etc yadi yada heh, wont go into the details here.
</p>
<!--

update 2022-02-01T18:47:00Z, end of lost and found dev diary entries :)

-->

<p>
2022-01-24T02:17:10Z Back at editing. Fixed elmcreek mapUS tutorial floating icons.
</p>

<pre>
    &lt;helpline filename="$dataS/helpLine.xml"&gt;
    &lt;/helpline&gt;
</pre>

<p>
Removed everything between helpline lines, icons are gone, poof <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2022-01-25T05:39:15Z Back to working on this 10km terrain project, just finished <a href="pmc-super-six-6km.php">PMC Super Six 6km</a> project and now need to get my bearings with this 10km one. This was already released, actually two releases with the PMC Test Farm 10km name, I honestly don't remember much in what stage this is, I don't think there are any objects or selling points etc, all these must be added now.
</p>

<p>
I'm going to start by syncing it to fs22 mods dir and take a look in-game. This is actually pretty exciting, cant remember much of this terrain so its like visiting an really old friend heh.
</p>

<p>
In-game test results: well its got preview image but it really sucks, I need to take another one with long distance view of landscape. No <a href="../19/terrain-field-definitions.php">field definitions</a>. Design is american road grid, extremely boring one, its not completely symmetrical as here is railroad tracks and tighter grid in the center, but yeah overall is same size square field after square field. Meridian flat bottom bins have daily upkeep so that means they are $data/ placeables, need to be replaced with our own. Asphalt roads are plenty of wide for two vehicles but dirt/gravel roads are very narrow, they fit pickup truck just nicely but I bet a large tractor with big implement wont fit anymore. Farm yards are laughable, they are so small they will not fit even one BUILDING let a lone a proper farm yard size, they need a complete remake in the design doc.
</p>

<p>
Then back to editing, while GE was importing field definitions template for ages again I opened design doc in GIMP. Roads were I believe <a href="../19/terrain-roads-painting-gimp.php">5 pixel pencil which was too narrow</a>, I'm not sure what happened I think because design doc is 10240 x 10240 pixel resolution and then its resized down to 8192 x 8192 pixel resolution to fit usual density image size, the roads and all features drawn in density images get smaller. But then again, roads are painted in <a href="../19/terrain-density-weight-images.php">weight images</a>, which is 4096 unless I'm mistaken, so its even more narrow. Damn giants engine, losing my mind figuring this stuff out heh.
</p>

<p>
Anyways now I made dirt roads 6 pixel wide "pencil size 6 pixels", hopefully that helps a bit. Then I simply erased the farm yards as there was only few of them, same goes for forests.
</p>

<p>
Plan was to try to add some randomness and character to the design so it wouldn't be just mathematical accurate grid. I'll try to add more dirt roads but so that fields get a bit bigger. Also I would like to try first time adding kind of like a filter/mask for field dividers, not dirt roads but just an empty area between fields. This would need to be done with extra layer with whatever color would fit, and then this was used as selection when bucket fill painting fields.
</p>

<p>
Finished bunch of dirt roads, straight boring grid roads heh. Then proceeded to add some farm yards.
</p>

<p>
2022-01-25T07:05:50Z Lunch break ...
</p>

<p>
2022-01-25T08:04:09Z Feeding time over, back to PMC RedWhiteBlue 10km editing.
</p>

<p>
Finished off farm yards painting, then switched to forests, going to do them with free hand selection. Just a few forest tree lines near farm yards, wont be making too many of them as they are pure horror to create in GE as trees, but gotta do few of course. Probably going to focus on the dealership aka vehicle shop area.
</p>

<p>
Then had to do the small farm yard driveway road bits.
</p>

<p>
2022-01-25T08:30:37Z Design doc updates all done, all layers exported from GIMP.
</p>

<p>
Then had a bit confusion trying to find latest graphicsmagick bat files, this is the mess I mean when needing to edit in win10 garbage system on PMC Gaming computer while PMC DevSurf computer is made for editing. Sigh. I know there is latest bat file in somewhere but trying to find it in all the dirs was interesting to say the least.
</p>

<p>
Maybe today is the last time editing with Gaming computer, probably not but lets hope so.
</p>

<p>
2022-01-25T09:17:59Z Still trying to match GIMP design doc colors with the graphicsmagick bat file which I actually downloaded from <a href="../19/terrain-design-document-graphicsmagick.php">our website on the not yet published/linked/git-committed page</a>. It was just a frustrating mess. I really hope win10 fs22 editing will be over soon.
</p>

<p>
2022-01-25T09:37:31Z Got almost all files to GE except fruit_density, grass is missing, investigating ...
</p>

<p>
Didn't take long to figure out that yeah the bat file from our website is using FS19 RGB colors, so obviously it doesn't work. Uuh this mess, I'm going out of my mind! heh.
</p>

<p>
<a href="terrain-densitymap_fruits-rgb-colors.php">FS22 fruit_density grass color is RGB 101,0,0</a> and now its fixed.
</p>

<p>
2022-01-25T10:12:31Z Attempted to start painting fruit_density bushes, flowers and shrubbery, but that is such a large task for 8192 x 8192 resolution image that it will have to be done at later date. No bushes for now.
</p>

<p>
Loaded terrain project with GE and imported PMC_Helpers ... and it again took forever, sigh.
</p>

<p>
I am so glad once I get these releases out and can get out of fs22 and GE v9.0.2 editing.
</p>

<p>
Looking at GE log it seems the actual PMC_Helpers.i3d got imported in 102ms but then GE went into processing mode for probably like 10min or so, I never timed it but it feels like forever, this processing time is not shown on the log so I have no hard data on it.
</p>

<p>
2022-01-25T10:53:04Z Oops forgot to write down when the import finally finished, but now I have already placed trees using splines for umm three farm yards. Doing good progress but I am not going to finish all the farm yard trees, no way.
</p>

<p>
2022-01-25T11:29:01Z Placed one long and two shorter utility pole lines. Now its time for in-game test. I still want to add meridian flat bottom grain bins and selling points to placeables.xml too after this test.
</p>

<p>
In-game it looked nice, not super impressive but nice and farmable place.
</p>

<p>
2022-01-25T11:38:08Z Started to import PMC_Helpers once again. Okay so I saved and shut down GE for the in-game test, that was a mistake as getting GE back up to editing conditions takes another 10-15min when it imports PMC_Helpers, sigh.
</p>

<p>
No idea what the fuck is bugging in GE as it takes this long to process after its imported a simple i3d file, I'm suspecting its some of my files that are wrong size or format etc, I'm going to try running collision map script although I don't think its used anymore as it appears to have no effect in anything, but maybe it would change something internally in GE cache etc files. Who knows maybe deleting the cache files might cure this, because not all terrains have this issue.
</p>

<p>
This is getting into my nerves SO bad right now...
</p>

<p>
Anyways.
</p>

<p>
Plan is to place selling points and bale selling point so there is functionality in this terrain.
</p>

<p>
2022-01-25T11:46:40Z GE finished importing PMC_Helpers, so it took fucking 8 minutes <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
Imported bale trigger warning markers, this imported fast, I don't get it. Placed 12 selling points and the bale trigger. Imported mapUS water tower as well, placed it by the vehicle shop area, a nice landmark and navigation beacon.
</p>

<p>
2022-01-25T12:24:21Z Created two farm yard meridian flat bottom grain bin placeable setups.
</p>

<p>
2022-01-25T12:42:45Z Created bunch of field definitions around vehicle shop, then few larger fields a little bit on the side. Should be a great start from zero setup now.
</p>

<p>
And with that... I don't think I'm going to be able to do much more today, going to do some in-game testing before shutting Gaming computer down.
</p>

<p>
Changed PMC RedWhiteBlue 10km to v0.1.2 now.
</p>

<p>
2022-01-30T11:06:42Z New editing day has started, well I hope it WONT be an editing day but just a quick overview verification that this terrain is ready for a new release. This is part of bigger operation to check all 6km, (this one), 20km, <a href="pmc-cereal-region-32km.php">32km</a>, 40km and 45km terrains for release ready status.
</p>

<p>
But as the routine goes, first I took backups.
</p>

<p>
I'm not happy and enthusiastic about this testing, I'm honestly cranky and fed up with this ongoing fs22 terrain project series editing, I am so ready for releases and being done with fs22 editing. So I am crossing my fingers hoping there wont be any issues or nothing major which would require new GE PMC_Helpers import and save as that takes forever it seems.
</p>

<p>
Then in-game check...
</p>

<p>
2022-01-30T11:13:30Z Hmm so <a href="../19/terrain-farmland-painting-gimp.php">farmland image</a> is not done, icon/preview images suck but luckily these are quick to do. So yes, we are looking for one GE save at least, so far I see no reason to import PMC_Helpers there.
</p>

<p>
Alright off to work, GIMP opened design doc, lets get that farmland image done, sigh...
</p>

<p>
This was so old terrain relatively speaking that it was still using the old now obsolete design doc RGB colors, fixed those (even though I didn't need to, just.. well had to heh). Then exported all the images and ran graphicsmagick bat file to process them, this was absolutely unnecessary as I don't need these images now.
</p>

<p>
2022-01-30T11:45:48Z Farmland image all farm yards done. Next we start to do the smallest fields, which might be a bit problematic as there really aren't any, kinda.
</p>

<p>
2022-01-30T11:57:05Z Small fields done, nice group around vehicle shop. Now started to make those big whopping multi millions costing chunks. I mean why not, you have all the small fields a new farmer to Start From Zero savegame player needs, once you have the big money you can buy big chunks.
</p>

<p>
2022-01-30T12:09:37Z GIMP painting phase complete, those were big chunks. Next up, graphicsmagick conversion to GE readable PNG format.
</p>

<p>
2022-01-30T12:14:59Z All the GDM/GRLE shuffle done, GE up and project loaded, hit CTRL-S to save and now, now we wait...
</p>

<p>
In the mean time I'm alredy fixing mapview overview.dds image. Got that done quickly, same as icon/preview images too. Now we continue fiddling our thumbs while GE takes its time saving...
</p>

<p>
2022-01-30T12:25:43Z GE done saving.
</p>

<pre>
PMC_Test_Farm_10km.i3d saved in 553976.246600 ms
</pre>

<p>
Then project dir sync to fs22 mods dir and in-game check. Hopefully everything works OK.
</p>

<p>
Had a slight hiccup with farmland image, <a href="../19/terrain-farmland.php">ID channel 17</a> was not painted, so had to go investigate why not. Sometimes this happens that you can easily skip one RGB colors if you get distracted, farmland painting is relaxing... but make sure you are not distracted by chat/twitch or similar when you are going through the colors, start and finish one color in one go no matter which kind of notifications or distractions would appear.
</p>

<p>
2022-01-30T12:50:34Z Another GE save started, yawn...
</p>

<p>
2022-01-30T13:00:41Z GE finished, let that be last one for today heh.
</p>

<p>
In-game check shows that farmland image is working and no errors in the log, awesome, we are done here <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>
<!--
2022-02-04T12:40:00Z
-->

<p>
2022-02-03T12:43:33Z Back at PMC RedWhiteBlue 10km, todays agenda is to fix rocks_density being empty and add <a href="https://trailerparkfarms.itch.io/" target="_blank">TrailerParkFarms (TPF)</a> big vehicle sheds to placeables, also fix placeables with regarding farmland buy/sell stuff.
</p>

<p>
Converted GDM/GRLE to PNG, then copied rocks_density_8192.png over to rocks_density.png in data\ dir, now we have working rocks.
</p>

<p>
And then horror begins again, GE loading project up and importing PMC_Helpers with insane "Loading..." time hehe.
</p>

<p>
Once done loaded in TPF red and white sheds, I think in this terrain will be using white. Its kind of gray walls and white roof.
</p>

<p>
2022-02-03T14:32:11Z Lunch break over (forgot to write it down heh). Back to editing.
</p>

<p>
Noticed that TPF buildings are very picky with flat heightmap, if there are any elevations then one of the ends is floating, there is very little of that sort of underground foundation mesh. But I guess CBJ buildings were the same as well, there is not much can be done with doors for example.
</p>

<p>
2022-02-03T14:55:49Z Two farm yards done. I quickly noticed how small these yards in this terrain are.
</p>

<a href="screenshots/PMC-RedWhiteBlue-10km-2022-02-03T1455.jpg" target="_blank"><img src="screenshots/thumbs/PMC-RedWhiteBlue-10km-2022-02-03T1455.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
No space for trees <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
I need to do ball bark measurements for average farm yard sizes, you know few vehicle sheds and several grain bins with those additional fertilizer etc bins, write down the required minimum meters x meters value and then not to make smaller farm yards after that. I don't remember if I kept anykind of baseline size when doing these farm yards, these are really small, almost all of them. Very tight.
</p>

<a href="screenshots/PMC-RedWhiteBlue-10km-2022-02-03T1505.jpg" target="_blank"><img src="screenshots/thumbs/PMC-RedWhiteBlue-10km-2022-02-03T1505.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
2022-02-03T15:09:12Z Then it was time to export PMC_Helpers the last time and save the project, next up editing placeables.xml for string replace.
</p>

<p>
2022-02-03T15:25:18Z In-game check complete, buildings show up fine and no errors in the log, great <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Oh and the initial goal, rocks, work too, of course <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Okay I'm going to switch to <a href="pmc-korkscrew-40km.php">PMC Korkscrew 40km</a> which is the next terrain in the list to fix for rocks_density.
</p>

<p>
2022-02-07 Terrain project name changed from "PMC Test Farm 10km" to final "PMC RedWhiteBlue 10km" name <img src="../images/smileys/icon_biggrin.gif" alt="Smiley :D" loading="lazy">
</p>

<p>
2022-02-07T15:45:00Z Made the decision to rename PMC Test Farm 10km to PMC RedWhiteBlue 10km. Just finished renaming the terrain project directory, files and mass replacing i3d/xml strings using powergrep4.
</p>

<p>
This edit happened on PMC DevSurf computer which runs windows 8.1, so I'm editing blind, I have no way to check this in-game until I copy the project dir to PMC Gaming computer which has win10 garbage that can actually run fs22.
</p>

<p>
2022-02-07T21:05:00Z A while ago now finished creating new farmer game-mode starter vehicles. Basic small equipment fleet with few product bags/pallets.
</p>

<a href="screenshots/PMC-RedWhiteBlue-10km-New-Farmer-Vehicles.jpg" target="_blank"><img src="screenshots/thumbs/PMC-RedWhiteBlue-10km-New-Farmer-Vehicles.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
Compiled release version and sent it to penalty_box_gaming to try out if it works, it did and he twitch live streamed some game-play. Looks like current version is ready to go for a release.
</p>

<p>
2022-02-08T18:35:00Z PMC RedWhiteBlue 10km v0.1.2 has been released! <img src="../images/smileys/icon_biggrin.gif" alt="Smiley :D" loading="lazy">
</p>

<p>
2022-02-09T14:42:57Z New editing day has started, debugging why landscaping tool is not working.
</p>

<p>
I tested, its not working. Then copy pasted mapUS/storeItems.xml trees and plants lines into PMC_RedWhiteBlue_10km storeItems.xml and now it works.
</p>


	<h2>DensityMapHeightUpdater Error Fixed</h2>

<p>
2022-12-09T17:49:00Z New editing day has started, edited modDesc.xml descVersion to 72.
</p>

<p>
This terrain has old error in the log:
</p>

<pre>
2022-09-30 23:02 Error: Trying to set DensityMapHeightUpdater collision map with invalid size (536870912 vs 134217728)
2022-09-30 23:02   Warning: No tip collision map defined. Creating empty tip placement collision map.
</pre>

<p>
Quite embarrassing actually that it sneaked in there, I have no recollection of seeing that during development and first release phase. Lets get it fixed now. I don't know what that error is, but logical thing would be to just run the script which generated ground collision map.
</p>

<p>
2022-12-09T20:43:00Z First took backups using _run_backup_PMC_RedWhiteBlue_10km.bat which copied the 7-zip backup archive to two other HDDs. Never forget backups.
</p>

<p>
Started GE v9.0.2 which complained about v9.0.3 update available, hoh not now I'm busy. Loaded PMC_RedWhiteBlue_10km.i3d project, ran the large terrain script even though I'm not sure if its visual thing only, then ran scripts -> map -> create ground collision map, saved project and exited GE.
</p>

<p>
BTW I was shocked how long time GE v9.0.2 saved this 10.2km terrain project.
</p>

<pre>
Scenefile 'E:/Farming.Simulator.22.Editing/PMC_RedWhiteBlue_10km/maps/PMC_RedWhiteBlue_10km/PMC_RedWhiteBlue_10km.i3d' saved in 347844.341409 ms at Fri Dec  9 20:55:06 2022.
</pre>

<p>
Whoah <img src="../images/smileys/icon_surprised.gif" alt="Smiley :o" loading="lazy">
</p>

<p>
Next changed modDesc to v0.1.3 so I can tell these versions apart in-game mod selector menu. Then edited compilation bat file and readme.txt where I added <a href="https://www.pmctactical.org/forum/viewtopic.php?f=79&t=22719" target="_blank">PMC RedWhiteBlue 10km official forum topic link</a>.
</p>

<p>
Then it was time to test this edit, does it fix the error or not. Need to fire up PMC Gaming computer, copy the new release there and launch FS22.
</p>

<p>
2022-12-09T22:02:00Z Tried to fix "Error: Trying to set DensityMapHeightUpdater collision map with invalid size" and used v0.1.4 as new release, no idea if it works but that is why we are testing it.
</p>

<p>
2022-12-09T22:09:00Z FS22 test complete, no more error! <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
tipColInfoLayer.grle and infoLayer_tipCollisionGenerated.grle were 16384 res, so I converted them to PNG, resized them DOWN to 8192 and then GE re-saved the project to create new GRLE's. All the rest GDM/GRLE images were 8192 so this error was exactly what it said "invalid size" which means 16384 pixel versus 8192 pixel. Now that all GDM/GRLE are 8192, no more error <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2022-12-10T03:27:00Z Started to upload new PMC_RedWhiteBlue_10km_v0.1.4.7z so it can be linked in PMC Tactical forum for users to test and play.
</p>


	<h2>2022-12-19 Utility Pole Wires</h2>

<p>
2022-12-19T00:37:00Z New editing day has started, todays goal is to add wires to utility poles, plus some smaller fixes anything I can manage.
</p>

<p>
Day started by taking 7-zip backup, copying the .7z archive into three different HDDs and one other computer, never forget backups, especially today when starting to fiddle with utility pole wires.
</p>

<p>
Loaded terrain project in GE v9.0.3 and ran setup large terrains script. Then imported PMC_Helpers which was fast but of course GE went into (Not Responding) mode for a long time, this shit never gets old... (not) <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
2022-12-19T00:47:00Z GE took ages in (Not Responding) mode, so I decided to go grab days first meal...
</p>

<p>
2022-12-19T01:14:00Z Feeding time is over, back to PMC RedWhiteBlue 10km terrain editing.
</p>

<p>
Imported utility pole object I3D with those three transformgroups setup so wires can be attached to them, then imported the actual wire object with plain and simple black color. Was again surprised to see that this terrain only has three (3) splines for the poles, hmm why so few <img src="../images/smileys/icon_confused.gif" alt="Smiley :?" loading="lazy">
</p>

<p>
Well makes my job here quite easy or quick rather, wont take long to get these three splines done.
</p>

<p>
2022-12-19T01:18:00Z Deleted the old utility poles which have no transformgroups for the wires, then started to create new ones.
</p>

<p>
2022-12-19T01:27:00Z First spline placement with wires is complete. Looks like second one is very short, hmm.
</p>

<p>
2022-12-19T01:34:00Z All three splines done, utility poles with wires created, all looking good. Well that did not take long, I haven't even finished my days first meal beverage yet.
</p>

<p>
Next on the fixing list is to get terrain edge block geometry done so vehicles wont fall off the terrain, I'm using my <a href="https://www.farming-simulator.org/19/terrain-edge-block.php" target="_blank">Farming Simulator 19 Terrain Edge Block Tutorial</a> for that.
</p>

<p>
2022-12-19T01:42:00Z OK terrain edge block geometry planes done, whats next? <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Vehicle shop aka the dealership spawn points were facing the building which made it annoying to drive your vehicles out of the yard, rotated these to face away from the building.
</p>

<p>
2022-12-19T01:51:00Z Added several grass fields for contracts, small ones mostly, with one quite large one, should be a great grass contracting setup now.
</p>

<p>
Saved GE terrain project and exited, oddly enough saving was instant aka normal now. Now its time to test this terrain, after a short restroom break <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Changed modeDesc version to v0.1.5, added required mods dependency config for TrailerParkFarms (TPF) vehicle sheds, edited readme.txt and release compilation bat files.
</p>

<p>
2022-12-19T02:04:00Z Compiled new PMC_RedWhiteBlue_10km_v0.1.5.7z for testing. And now switching to Gaming computer to test that everything is working OK before pushing this release to public testing.
</p>

<p>
2022-12-19T02:15:00Z v0.1.5 test complete, no errors no warnings, we're good to go <img src="../images/smileys/icon_biggrin.gif" alt="Smiley :D" loading="lazy">
</p>

<p>
2022-12-19T02:28:00Z Started to upload v0.1.5 for PMC Tactical forum testing, aayeah! <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>


	<h2>Start From Zero check</h2>

<p>
2023-01-02T05:45:00Z Launched PMC RedWhiteBlue 10km v0.1.5 farm-manager savegame.
</p>

<p>
First thing I noticed that in farm-manager game-mode new farmer vehicles are still present, so this has not been fixed in v0.1.5 ouch.
</p>

<p>
Farmland areas are small for farm yards, smallest field area was farmland 35 which is 0.85ha and costs mere 8k. Absolutely no problem whatsoever to have start from zero here regarding farmland areas, this is probably one of the best farmlands I've done.
</p>

<p>
Two small and one "huge" grass fields.
</p>

<p>
Contracts filtered out fertilizing, sowing and spraying, then refreshed as much as possible... and available contracts list was less than one page. This terrain needs more field definitions, definitely. Highest paying contract was baling silage F29 15.3ha with ETA 2hrs 15min, must deliver 773.7k and can keep 86k liters. Lowest paying was harvest wheat F17 0.4ha with ETA 5min (haha), must deliver 6.3k and can keep 500 liters.
</p>

<p>
This terrain needs more field definitions. But dunno isn't the goal anyways to make copy-paste field definitions to all fields aka those 0.9ha size place holders.
</p>

<p>
2023-01-02T05:55:00Z This test result was: SUCCESS! <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2023-01-03T19:11:00Z New editing day has started, not really, but in Sources/ dir GIMP design doc image dir files are still named "test" so I renamed it properly to PMC_RedWhiteBlue_10km. Renamed one bat and two GIMP XCF files too. Replaced test strings in the bat files using powergrep4.
</p>


	<h2>2023-01-15 Field Definitions</h2>

<p>
2023-01-15T02:46:00Z New editing day has started, todays goal is to prepare PMC RedWhiteBlue 10km terrain to autodrive network and Start From Zero game-play compatibility.
</p>

<p>
First created _run_backup_Design_Doc_PMC_RedWhiteBlue_10km.bat backup file for design doc, not planning on editing it today but still want to have good backup. Ran that and also _run_backup_PMC_RedWhiteBlue_10km.bat for the terrain project itself. Now we are ready to continue editing without fear of losing progress if mistakes happen.
</p>

<p>
Launched GE v9.0.2 (yeah .2 because .3 crashes often), loaded terrain project up, ran script setup large terrains 16km to cover whole 10km area, then ... uuh realized I forgot to do the heightmap PNG dance, argh hah. Okay exit GE <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Took 7-zip backup of PMC_RedWhiteBlue_10km_dem.png image, then opened PNG in GIMP, RGB 0,0,0 foreground filled the whole image, saved and closed PNG. Now our heightmap elevations are 0m everywhere, aka FLAT MAPZ <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
GE back up with the terrain and script, also selected Fields transformgroup and turned on toggle render field areas, then started to import PMC_Helpers, this surprisingly did not take a long time, odd. Okay now we are ready to start putting down single shape field definitions.
</p>

<p>
Apparently there was no 2d top-down camera at all, hum, so created one with rotate X -90, NOW we are ready to start copy-pasting field definitions <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
2023-01-15T03:23:00Z First row is complete, this was the NW to NE corners top most row of three fields. This terrain has road grid pattern so there are several different field sizes... yet they are pretty uniform, there is square big, square medium, narrow horizontal, narrow vertical and very narrow vertical, these are the types / shapes I've seen so far. So I am copy-pasting from the so called "first one" of each type so I don't have to edit corner pieces and get pretty much ready to be CTRL-B stamped down perfect size for a new field. Its somewhat slow going, I could be very fast by just copy pasting a small "one size fits all" template, but I rather want to have as fitting corner pieces as possible.
</p>

<p>
2023-01-15T03:41:00Z And reached W end, switching to the next row of three fields, its going... not too fast, but, its going <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2023-01-15T04:32:00Z Forgot to write reaching E end and turning back, now reached W end again. Getting quite well not tired but hum bored and just simply don't want to do these crap field definitions in crap GE, but hey what can ya do, gotta take care of business.
</p>

<p>
Need to take a short break though so I can get through this stuff.
</p>

<p>
2023-01-15T05:05:00Z E end reached, I'm tempted to zoom out and take a look how much is left to do but that is always the big no no in terrain development, <i>"never ever zoom out..."</i> <img src="../images/smileys/icon_biggrin.gif" alt="Smiley :D" loading="lazy">
</p>

<p>
Actually I know this is only about 50% done because in this row I tipped the bottom end of the central dealership area fields, so I hate to admit it but there is still about half left. I'm sort of wanting to just start using "tiny one size fits all" copy-paste field definition and with proper GE keyboard shortcuts do rest of the terrain in few minutes. However if I do that, then editing the corner pieces later is more work, than proceeding like this nice and slow.
</p>

<p>
2023-01-15T05:26:00Z W end reached, uuh when does this torture stop? <img src="../images/smileys/icon_evil.gif" alt="Smiley :evil:" loading="lazy">
</p>

<p>
Checked if I could go cook food already at this time and yes! I can, awesome, any moments I can stay away from shitty field definitions is a victory <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
2023-01-15T05:29:00Z Cooking food and lunch break...
</p>

<p>
2023-01-15T06:16:00Z Feeding time is over, back to terror of field definitions <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
2023-01-15T06:46:00Z reached W end and now the next row down is one single field at the S edge of the terrain, not much more to go, excited.
</p>

<p>
<b>2023-01-15T06:55:00Z Field definitions are all done now!</b>
</p>

<a href="screenshots/PMC-RedWhiteBlue-10km-2023-01-15T0655.jpg" target="_blank"><img src="screenshots/thumbs/PMC-RedWhiteBlue-10km-2023-01-15T0655.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
Uuh so glad that torture is over, what an relief. So now I'm going to scan through bugs / issues list of anything I can edit while GE is still running.
</p>

<p>
Grass, hay, silage, straw is accepted on all selling points, replaced placeables/sellingpoints/ dir with objects.for.terrains/ template ones, now they have proper product list.
</p>

<p>
Added unique proper names for all selling points.
</p>

<p>
2023-01-15T07:07:00Z GE exported PMC_Helpers then saved project and exited.
</p>

<p>
Restored original heightmap from backup, elevations are back.
</p>

<p>
Hmm at this point I don't really know what else to edit, so did one last check in GE to make sure there are enough grass fields for those lucrative and easy (silage) baling contracts. Added few more small to medium size grass fields, saved and exited. We are done with GE for now, next it FS22 in-game test.
</p>

<p>
Well this time saving seems to take a long time again. In the mean time changed modDesc.xml to v0.1.6, edited readme.txt and release compilation bat files.
</p>

<p>
2023-01-15T07:26:00Z Compiled PMC_RedWhiteBlue_10km_v0.1.6.7z for testing, this is now the last terrain to be tested for Start From Zero compatibility, all others are OK.
</p>


	<h2>2023-01-17 Final Definition</h2>

<p>
2023-01-17T02:02:00Z New editing day has started, todays goal is just a minor tweaks, bug fixes really, delete duplicate field definition, fix another field definition going over a farm yard, remove new farmer vehicles from other game modes, and any other small text based edits I can squeeze in.
</p>

<p>
As usual started the editing day by taking a backup, you never know.
</p>

<p>
Restored 0m elevation heightmap for field definition editing. Then started GE v9.0.2 and loaded terrain project up with usual script setup's. Next imported PMC_Helpers because I love my 2d top-down camera angle.
</p>

<p>
Edited field definitions one row N from the dealership as alignment was off, shifted them properly dead center of cultivator_density field area. This was hilarious "issue" as the field ID number was just <i>slightly</i> off alignment and I went nuts in-game... heh dude, children are starving in afrika's savannas and you are worrying about your stupid ID alignment!? <img src="../images/smileys/icon_biggrin.gif" alt="Smiley :D" loading="lazy">
</p>

<p>
Edited field definitions NW corner one as its duped, two stacked on top of each other, looks like F34 and F31 in-game. This was a super quick fix, just move camera on top of NW corner, DOWN arrow key browse through fields transformgroup until you come up to the duplicating (second) field definition, hit delete and its done. More this kind of editing, please <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
<i>Edit: later hindsight... little did I know that because I deleted field 34 all the remaining field numbers are now ONE less, so lets say F035 just became F034 and F036 became F035 and so on and so on... Oh well, I didn't release this version yet so only one suffering about this edit is myself and my extensive autodrive network waypoints where targets are now wrong, they are close but still, wrong... sucks. Well another lesson learnt, never ever DELETE field definition if you have a dupe, just MOVE it somewhere else and all field numbers remain the same.</i>
</p>

<p>
2023-01-17T02:26:00Z Just finished adding "-do-me" suffix to all field definitions that has a farm yard next to them, meaning there is like U shape field definition which is now done with a single shape, meaning the tips of the U are missing, if you allow this odd description of it.
</p>

<p>
Also I am thinking of experimenting with one or two MEGA fields, like 240ha full section sizes here. Its not easily doable because it requires design doc change for cultivator density and I have already created autodrive network waypoint routes which would have to be re-made, but I just wanted to see in-game with contracts that what sort of effect a huge field would have in this terrain.
</p>

<p>
2023-01-17T03:21:00Z Finished editing field definition corner pieces for the farm yards, also fixed alignment for several tiny fields just N of the dealership area.
</p>

<p>
Deleted PMC_Helpers and saved terrain project, exited GE. Restored original heightmap elevations.
</p>

<p>
New farmer vehicles appear in farm manager and start from scratch game-modes, that got fixed by editing vehicles.xml and adding defaultFarmProperty="true" next to farmId="1" value. Easy fix.
</p>

<p>
2023-01-17T03:28:00Z And now hmm cant think of anything small to edit. I am a bit scared of experimenting with that huge field so didn't do it. Guess there is not more to do than change version and compile a new release.
</p>

<p>
Edited modDesc.xml to v0.2, readme.txt and compilation bat files as well.
</p>

<p>
2023-01-17T03:30:00Z Compiled PMC_RedWhiteBlue_10km_v0.2.7z for testing.
</p>

<p>
2023-01-17T03:50:00Z Something went wrong with... dunno where exactly, modDesc.xml was still v0.1.6 when I unpacked the "v0.2" release packet in PMC Gaming, so changed modDesc.xml and compiled v0.2.1 release <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>


	<h2>2023-02-09 GIMP Painting Farmland Image</h2>

<p>
2023-02-09T02:29:00Z New editing day has started, earlier today I was playing Start From Zero and discovered sadly that farmland image is unusable to anything between tiny and massive, there was no middle ground at all, you could either do too small stuff or needed about 5 million to buy those massive blobs which had about elmcreek worth of land. This has to be fixed.
</p>

<p>
Took backup from terrain project itself and also design doc. Then started to investigate which is the last farmland ID number / RGB color I used on last edit.
</p>

<p>
Opened farmlands.xml config file, it had ID channels used up to 63, meaning all "default" channels. The config already had numChannels="8" which supports up to 255 channels.
</p>

<p>
Read <a href="../19/terrain-farmland-channels.php">HOWTO Increase Farmland ID Channels FS19 tutorial</a> and copy-pasted 64 - 255 config files into my farmland.xml file. Now all I need to do is continue editing GIMP XCF farmland design doc image from ID 64.
</p>

<p>
2023-02-09T03:22:00Z First big blob farmland ID color painted over with new colors for very tight one field size chunks.
</p>

<p>
2023-02-09T03:36:00Z Lunch break, starvin' here ...
</p>

<p>
2023-02-09T03:51:00Z Feeding time is over, back to painting few more farmland ID channels.
</p>

<p>
2023-02-09T04:15:00Z Okay done painting farmland ID channels to the GIMP XCF design doc image, there is now plenty of enough 32ha fields to buy for my farm growing needs.
</p>

<p>
GIMP exported satellite_texture_farmland.png image, then ran _run_graphicsmagick_create_farmland_2022-01-30.bat file which processes a new farmland image for me. While it was doing that I alredy went to PMC_RedWhiteBlue_10km.i3d and edited PMC_RedWhiteBlue_10km_farmland.grle to .png file extension.
</p>

<p>
While at it I opened PMC_RedWhiteBlue_10km.xml config file and enabled maps_sprayTypes.xml for better fertilizer, seed and herbicide use. Copied maps_sprayTypes.xml from PMC_Super_Six_6km/ terrain project dir. Copied farmland.png from design doc dir to maps/PMC_RedWhiteBlue_10km/data/ dir over its correct PMC_RedWhiteBlue_10km_farmland.png file name. Then it was time to fire up GE v9.0.2 and see what breaks <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Unfortunately PMC_RedWhiteBlue_10km.i3d file did not have the 255 ID channel setup for farmland as it only shows 63. Opened this file up and up indeed; &lt;Option value="63" name="Farmland 63"/&gt; was the last entry, hmm I got to have these on some other terrain projects I3D file so I don't have to copy-paste and edit all those 64 - 255 numbers in. Did powergrep4 search for the whole FS22 editing dir and found one, PMC_Undefined_Farms_20km.i3d had them in, awesome. Copy-pasted them into this terrains I3D and launched GE back up.
</p>

<p>
2023-02-09T04:30:00Z All 255 farmland channels now appear in GE, didn't go looking through all of them, either they work or don't but its way too cumbersome to browse through them in GE, so just hit CTRL-S to save so can get a new farmland.grle file in data dir and then we are done.
</p>

<p>
GE took its sweet time to save again, expecting something like 10min save time, sigh <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
Scenefile 'E:/Farming.Simulator.22.Editing/PMC_RedWhiteBlue_10km/maps/PMC_RedWhiteBlue_10km/PMC_RedWhiteBlue_10km.i3d' saved in 481976.123519 ms at Thu Feb  9 04:38:14 2023.
</p>

<p>
Opened PMC_RedWhiteBlue_10km.i3d and edited it back to farmland.grle file extension and deleted data/PMC_RedWhiteBlue_10km_farmland.png image.
</p>

<p>
Edited modDesc.xml to v0.2.2, then readme.txt and release compilation bat files.
</p>

<p>
2023-02-09T04:41:00Z Compiled PMC_RedWhiteBlue_10km_v0.2.2.7z release for testing.
</p>

<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("/var/www/include/footer-start.php"); ?>
<p>
<a href="pmc-terrains.php" class="button">PMC Terrains FS22</a>
<a href="changelog-pmc-redwhiteblue-10km.php" class="button">Changelog PMC RedWhiteBlue 10km</a>
<a href="pmc-redwhiteblue-10km.php" class="button">PMC RedWhiteBlue 10km</a>
<a href="../index.php" class="button">PMC Farming Simulator root page</a>
</p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("/var/www/include/footer-end.php"); ?>
<?php include("/var/www/include/support.php"); ?>
<?php include("/var/www/include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
