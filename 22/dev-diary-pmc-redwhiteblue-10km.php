<!DOCTYPE html>
<html lang="en">
<head>
<title>Dev Diary PMC RedWhiteBlue 10km PMC Farming Simulator 22</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Dev Diary PMC RedWhiteBlue 10km PMC Farming Simulator 22">
<META name="keywords" content="Farming, Simulator, Dev, Diary, PMC, RedWhiteBlue, Terrain, Map, FS22">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<header>
<h1>Dev Diary PMC RedWhiteBlue 10km PMC Farming Simulator 22</h1>
</header>

<section>
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
2022-01-06T22:25:00Z Already feeling quite tired, not yawning yet but eyes are strained so just feel that zombi mode slowing coming up. Going to try edit some more as I really enjoy it now for this terrain and really don't want to go to sleep yet.
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
2022-01-07T04:46:00Z farmer77 in PMC Farming discord had problems with his terrain so I offered to take a look. So going to start doing that now, hopefully it wont take long.
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
Finished off farm yards painting, then switched to forests, going to do them with free hand selection. Just a few forest tree lines near farm yards, wont be making too many of them as they are pure horror to create in GE as trees, but gotta do few of course. probably gong to focus on the vehicle shop area.
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
2022-01-25T09:17:59Z Still trying to match GIMP design doc colors with the graphicsmagick bat file which I actually downloaded from <a href="../19/terrain-design-document-graphicsmagick.php">our website on the not yet published/linked/git-committed page</a>. It was just a frustrating mess. I really hope win10 fs22 editing is soon over.
</p>

<p>
2022-01-25T09:37:31Z Got almost all files to GE except fruit_density, grass is missing, investigating ...
</p>

<p>
Didn't take long to figure out that yeah the bat file from out website is using FS19 RGB colors, so obviously it doesn't work. Uuh this mess, I'm going out of my mind! heh.
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
2022-01-30T11:06:42Z New editing day has started, well I hope it WONT be an editing day but just a quick overview verification that this terrain is ready for a new release. This is part of bigger operation to check all 6km, (this one), 20km, <a href="pmc-test-farm-32km.php">32km</a>, 40km and 45km terrains for release ready status.
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
Had a slight hiccup with farmland image, <a href="../19/terrain-farmland.php">ID channel 17</a> was not painted, so had to go investigate why not. Sometimes this happens that you can easily skip one RGB colors if you get distracted, farmland painting is relaxing... but make sure you are not distracted by discord/twitch or similar when you are going through the colors, start and finish one color in one go no matter which kind of notifications or distrations would appear.
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
Okay I'm going to switch to PMC Test Farm 40km which is the next terrain in the list to fix for rocks_density.
</p>

<p>
2022-02-07 Terrain project name changed from "PMC Test Farm 10km" to final "PMC RedWhiteBlue 10km" name <img src="../images/smileys/icon_biggrin.gif" alt="Smiley :D" loading="lazy">
</p>

<p>
2022-02-07T15:45:00Z Made the decision to rename PMC Test Farm 10km to PMC RedWhiteBlue 10km. Just finished renaming the terrain project directory, files and mass replacing i3d/xml strings using powergrep4.
</p>

<p>
This edit happened on PMC DevSurf computer which runs windows 8.1, so I'm editing blind, I have no way to check this in-game until I copy the project dir to PMC Gaming computer which has win10 that can actually run fs22.
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

</section>

<footer>
<p>
<a href="pmc-terrains.php" class="button">PMC Terrains FS22 page</a>
<a href="changelog-pmc-redwhiteblue-10km.php" class="button">Changelog PMC RedWhiteBlue 10km</a>
<a href="pmc-redwhiteblue-10km.php" class="button">PMC RedWhiteBlue 10km</a>
<a href="../index.php" class="button">PMC Farming Simulator root page</a>
</p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("../include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>