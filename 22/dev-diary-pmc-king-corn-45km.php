<!DOCTYPE html>
<html lang="en">
<head>
<title>Dev Diary PMC King Corn 45km PMC Farming Simulator 22</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Dev Diary PMC King Corn 45km PMC Farming Simulator 22">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
<h1>Dev Diary PMC King Corn 45km PMC Farming Simulator 22</h1>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>Largest Terrain In The History of Farming Simulator Games</h2>

<p>
This is a developer diary for Farming Simulator 22 terrain called <a href="pmc-king-corn-45km.php">PMC King Corn 45km</a>.
</p>

<p>
<i>Special note: terrain project name was PMC Test Farm 45km and was later renamed to final and proper PMC King Corn 45km name. To avoid confusion this dev diary has been edited to only use the final name.</i>
</p>

<p>
2022-01-23T04:58:52Z I wanted to learn what is the largest terrain I can do in fs22. Currently <b>PMC Korkscrew 40km is the Largest Terrain In The History Of Farming Simulator Games</b>, but... can I squeeze few more kilometers out of it? <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Heightmap 4096 * cell 15m == 61440 x 61440 meters (61.44 km).
</p>

<p>
That would in theory still work as its twice as large as 32768 number which our infoLayer images are now, if that doesn't work then one nodge smaller should which is cell 14m 57344 x 57344 meters (57.344 km).
</p>

<p>
So I'm going to simply backup <a href="pmc-korkscrew-40km.php">PMC Korkscrew 40km</a> and change its unitsPerPixel and XML height/width to see wether fs22 loads it up, or even GE.
</p>

<p>
2022-01-23T05:03:24Z Lets get started, first took backups of PMC_Test_Farm_40km project dir and synced it into FS22 mods dir.
</p>

<p>
I wanted to get a baseline comparison, a fully working 40km terrain in my fs22 dev mods dir to start testing on. Way too much time has been wasted testing some edits on top of already broken terrain before the issue is discovered. One step at the time now to get accurate comparison results.
</p>

<p>
2022-01-23T05:09:17Z Okay it works in-game just fine.
</p>

<p>
Now just changing the text file code to the massive 61.4km size, heh it makes me laugh even thinking about it, whoah dude if this stuff works <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
2022-01-23T05:13:53Z Unfortunately fs22 crashes while loading 61.4km size terrain <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
Alright lets do a binary search, the next size up from 40km would be 11m unitsPerPixel which comes to 45056 meters.
</p>

<p>
2022-01-23T05:21:59Z In-game test for 45056 is working! Got the screenshot from bottom right corner to prove it <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Next larger size is unitsPerPixel 12 which gives us 49152 meter size, uuh so close to fiddy GEE <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
So did all the i3d and xml changes, then synced into fs22 mods dir and started fs22 up.
</p>

<p>
2022-01-23T05:26:26Z Unfortunately in-game loading CTD, 49152 meter size (49.1km) doesn't work <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
Oh well so now we have baseline that 49152 meter terrain does not work but 45056 almost even number fourty five does.
</p>

<p>
I am surprised by these numbers because I was expecting double the infoLayer image resolution terrain to work, but guess not, maybe its just some sort of memory "architecture" limitation no idea. I cant think of any other image size to adjust, it cant be any density image so yeah, here we are, we found the limit.
</p>

<p>
Sure I'll test 11.5 meter unitsPerPixel just to be thorough but I kind of expect it to CTD and besides, what difference would that make 45056 vs 47104 meters is peanuts. Well ok its more than elmcreek but heh still its nothing on the grand scheme of things <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
2022-01-23T05:32:24Z Nope, 11.5 meter unitsPerPixel 47104m terrain crashes <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
Okay it is official, Largest Terrain In The History Of Farming Simulator Games is 45km.
</p>

<p>
2022-01-23T05:37:15Z Did second test to confirm the results, even recorded video with OBS while loading into the terrain, works.
</p>

<p>
Well there you have it large terrain lovers, 45km x 45km terrain is the biggest baddest and ooh my! <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
PMC King Corn 45km, 45056 meters x 45056 meters, largest terrain in farming simulator games history 2022-01-23.
</p>

<a href="screenshots/PMC-King-Corn-45km-2022-01-23T0521.jpg" target="_blank"><img src="screenshots/thumbs/PMC-King-Corn-45km-2022-01-23T0521.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
2022-01-23T05:56:07Z Was going to start testing it a bit, farming small corner of one of the fields just to see if everything still works OK, but its my lunch break so ...
</p>

<p>
2022-01-23T06:24:01Z Feeding time over, back to mega monster 45km terrain testing.
</p>

<p>
Moved PMC_Test_Farm_40km dir from dev to my regular mods dir. I was ready to start game-play testing, well more like "does it really work" testing heh. Checked courseplay github if there is new commits, I believe there was so updated it using my bat file.
</p>

<p>
2022-01-23T06:33:13Z Savegame created and now starting to purchase equipment, going to field work the closed field, just a very tiny corner piece of it so I don't waste hours of my time doing it.
</p>

<p>
Fertilized one short pass with rubicon 9000. Plowed with versatile 620 and john deere 2623 plow. Spread lime with new holland T7.315 and bredal k165 with extensions. Seeded sorghum with case ih magnum 400 and amazone citan 15001-c. Then fertilized one more time, now yield bonus 95% which is good for me as I ain't doing no rock nonsense.
</p>

<p>
2022-01-23T07:03:06Z Everything seem to work fine so far. Now just time accelerating waiting if weeds grow, which I expect they don't as I plowed the field.
</p>

<p>
PMC King Corn 45km, field work testing, 2022-01-23.
</p>

<a href="screenshots/PMC-King-Corn-45km-2022-01-23T0700.jpg" target="_blank"><img src="screenshots/thumbs/PMC-King-Corn-45km-2022-01-23T0700.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
Time accelerated using 5000 speed, it took about 2 minutes for field stages switch in the field I'm at now which is about center of the terrain. Interesting to see how long it takes to update all the way down south, might be couple more minutes heh.
</p>

<p>
The next day same thing, 5k speed and took 2min to field stage to update. Seems pretty standard.
</p>

<p>
Purchased case ih axial flow 9250 combine with 3162 terraflex draper 45ft header. Demco 2200 auger wagon which I'm going to pull with versatile 620.
</p>

<p>
Purchased mack super liner 6x4 semi truck and wilson pacesetter grain trailer.
</p>

<p>
Finally purchased meridian flat bottom bin 3608 and convey-all 1690 auger pipe.
</p>

<p>
2022-01-23T07:59:59Z Was ready to harvest but it was dec (seasons turned off) and snowing, had to time accelerate until next morning.
</p>

<p>
Crop accuracy (density images) was pretty low/bad, they are 16384 unless I'm mistaken and it really shows on 45km terrain (16.4 vs 45).
</p>

<p>
Also sorghum is probably the worst crop to harvest as its so odd special that you just cut the tops off leaving almost crop like looking stubble result on the field.
</p>

<p>
At worst locations where pixels aligned just right against you... the accuracy was like 2 meters off where header was cutting. It was really bad, I don't think in a long run I could play with this accuracy.
</p>

<p>
2022-01-23T08:21:41Z Saved game and shut FS22 down, it was a good test, field work is a-OK for full rotation for harvesting.
</p>

<p>
PMC King Corn 45km, field work concluded, everything works OK, 2022-01-23.
</p>

<a href="screenshots/PMC-King-Corn-45km-2022-01-23T0819.jpg" target="_blank"><img src="screenshots/thumbs/PMC-King-Corn-45km-2022-01-23T0819.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
2022-01-23T08:32:04Z Going to call it a day here, still have bunch of hours left but cannot think what major stuff I could achieve in the time I have left today so going to do some computer chores before going to bed. Today was a great day, 45km terrain highscore done and basic field work tested. Awesome <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2022-01-27T13:54:09Z New editing day has started, its time to continue this mega monster killer PMC King Corn 45km terrain editing.
</p>

<p>
Previously I only edited PMC_Test_Farm_40km terrain project dir to test the max size that still works, I have now restored that terrain from backups and its time to create brand new 45km project dir.
</p>

<p>
Currently I have absolutely nothing for the 45km project, so I need to generate brand new project dir including GIMP design doc as well. Guess I should begin from the design doc, hmm. I would like to create nice looking design doc for it unlike these goofy screwy designs I've done lately. I just don't want to fall into never ending painting session, often times these design doc painting sessions drag into several hours, I really don't want that to happen.
</p>

<p>
2022-01-27T14:06:17Z Created GIMP design doc XCF file, here we go <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Basic railroad, asphalt and dirt road grid is done. When I say basic it means for 45km size there are very few roads and especially way too few dirt roads which make it possible for farmers to travel easily between fields and farm yards.
</p>

<p>
It is so extremely difficult to believe the area you are seeing in the image is so huge as 45km x 45km. Designing it is a real mind job...
</p>

<p>
2022-01-27T14:40:21Z Farm yards and forests layers are in, not finished but added bunch of them. Well I guess farm yards are looking pretty OK.
</p>

<p>
Got one hour left in my day, eyes start to get a bit strained already, I'm going to switch into computer chore mode now, need to get these dev diaries sorted to localhost and other stuff to wrap up the day. Today was a great editing day even thought I didn't get full 17hrs in, did some great progress.
</p>

<p>
2022-01-27T23:26:57Z New editing day has started, todays objective is clear; create and finish PMC King Corn 45km.
</p>

<p>
2022-01-27T23:39:22Z Finished forest patches painting, they arent that good but will do for now, I can already feel the pain placing trees with splines on those.
</p>

<p>
2022-01-27T23:56:31Z Field dividers complete. On design doc it looks like little girlie men field sizes, but we have to understand this is 10240 x 10240 pixel resolution image with 4m/px scale, so its stretched over to, oh no wait its more than 4m/px as it stretches over to 45.. had to bring up a calculator heh:
</p>

<pre>
45056 x 45056 meters (45.056 km)
Terrain size: 45.056 kilometers x 45.056 kilometers
Heightmap grid size 4096
Cell size 11 meters
</pre>

<p>
Anyways, needless to say its a mess as from design doc you scale up that much and not even 2-3-4 etc number, but its not like I could do 45056 pixel resolution multi layer XCF in GIMP heh.
</p>

<p>
Design looks like claustrophobic small terrain but trust me in-game 3D it is nothing even close to small.
</p>

<p>
Yesterday roads dirt layer got painted using paths tool and 2 pixel stroke, that looks extremely narrow now but as was just said above, it is so misleading scale wise. When painting farm yard driveways I had to use 1 pixel pencil because the two pixel jumped into odd star shape and was huge compared to the stroked paths 2 pixel roads. Heh design is hard dude <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
This is how design doc looks now, its more or less done in the ballbark level.
</p>

<a href="screenshots/PMC-King-Corn-45km-2022-01-28T0013.jpg" target="_blank"><img src="screenshots/thumbs/PMC-King-Corn-45km-2022-01-28T0013.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
Copied design doc graphicsmagick all in one bat file from PMC DevSurf computer, there was two, the original I created for PMC Grande Gardens 16km and the new tutorial one more suited for general source image location (which I don't use), these are using FS19 RGB colors so need to edit those if I want to use the bat's.
</p>

<p>
This fs22 editing really, REALLY pisses me off, hopping like a bunny rabbit between PMC DevSurf and PMC Gaming computers to edit, using win10 garbage, having thousand bat files on two different computers... uuh my head hurts, I want to stop, I want to format C: on this win10 trash system, aargh.
</p>

<p>
2022-01-28T01:37:30Z Was sorting out the mess of design doc graphicsmagick bat files with the extra layer of complexity by having super high res images, this terrain design doc is 10240 res and density images need to be resized to 16384 resolution which is another thing I don't like, taking lesser quality and making it better quality by faking it (10240 to 16384 resolution).
</p>

<p>
Created _run_graphicsmagick_resize_source_images_to_16384.bat which reads the design doc standard export image file names and resizes them up to 16384 x 16384 pixel resolution without smearing any colors. Now the actual design doc to weight images bat file can run without issues, it just happens to process a bit larger images.
</p>

<p>
That took extremely long time to run the design doc to weight images conversion as each and every process was done on huge 16384 res image. Also there is no benefit or need to do that when I can just resize the final cultivator_density and fruit_density images.
</p>

<p>
So restored the 10240 x 10240 res version back, basically just didn't resize the images after exporting.
</p>

<p>
After all the density and weight images looked good, I used _run_graphicsmagick_resize_cult-fruit_density_to_16384.bat to change density image sizes.
</p>

<p>
2022-01-28T03:16:56Z Design doc has been converted to GE density and weight images. Next up, to create actually the terrain project dir heh.
</p>

<p>
So created PMC_King_Corn_45km terrain project dir using 11 meter unitsPerPixel which comes to 45056 meter terrain size.
</p>

<p>
2022-01-28T03:23:26Z Project dir created. When I was updating the files I realized... there is no heightmap yet, I havent generated one, oops.
</p>

<p>
Fired up L3DT and generated really smooth low elevation large features heightmap. Well heightScale="99" is not exactly really smooth low heh, there is plenty of meters in 99. But lets check it out anyways, if its ridiculous then we'll go back down to like 25m or so.
</p>

<p>
Then prepared data\ dir density, infolayer and weight images. Density went up to 16384 res, infolayer to 32768 res and weight to 8192.
</p>

<p>
2022-01-28T03:48:34Z Copied design doc source dir images to GE project dir.
</p>

<p>
Checked in GE, looks like dirt roads are too narrow now, they were created with GIMP paths tool 2 pixel stroke. Apparently I need to use 3 pixel. Okay, we'll do that change and run through all the hoops again. Well its now documented and wont be making the same mistake again.
</p>

<p>
Heightmap looks super flat, there are no elevations I can spot from quick GE camera fly-around.
</p>

<p>
2022-01-28T03:54:15Z And now, its my lunch break ...
</p>

<p>
2022-01-28T04:29:08Z Feeding time over, back to design doc work.
</p>

<p>
Was inspecting design doc in GIMP but cant figure out which pixel size was used for the railroad tracks, it kind of fits 3 pixels but just slightly too narrow, then 4 pixels is too wide. Dunno maybe path tool uses some kind of relative thing around the actual path heh dunno how to explain, but it doesnt look like path tool stroke and pencil sizes are exactly the same, or at least path gets drawn differently.
</p>

<p>
Anyways dirt roads too narrow, make it larger <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Looks like dirt roads would be fine with 3 pixel pencil or path tool stroke assuming they are the same width.
</p>

<p>
When I opened B path tool in GIMP, then used edit -> stroke path, it offered 2 pixel line width, so I have to assume this was for dirt/gravel roads as I recall those were the last ones I used it for. So re-created those paths with 3 pixels now.
</p>

<a href="screenshots/PMC-King-Corn-45km-2022-01-28T0506.jpg" target="_blank"><img src="screenshots/thumbs/PMC-King-Corn-45km-2022-01-28T0506.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
That doesn't look very good, but its 8192 weight and 16384 fruit_density image resolution, not much we can do about it, its giants console engine. Hell some people would say 16.3km terrain is already "too big!!1" and here I am looking badly on 45km terrain crop accuracy heh.
</p>

<p>
Edited PMC_King_Corn_45km.i3d in EditPadPro v7 and edited bbox max/min and range values. Will implement this to my mapUS v1.2 sample terrain source files as well.
</p>

<p>
Decided to do simple farmland image now too, lets get all that done right away. This time though I wont be spending hours painting farmland areas, I just do couple of new farmer / Start From Zero small areas to buy, then rest as whopping big massive areas.
</p>

<p>
2022-01-28T05:31:25Z Took the copy-paste farmlands RGB color list from PMC DevSurf and then started to paint farm yard areas first.
</p>

<p>
2022-01-28T05:44:19Z Farm yards done, now starting to add smallest fields which would be fitting for Start From Zero style game-play with minimum budget.
</p>

<p>
Farm yards and few smallest fields done.
</p>

<a href="screenshots/PMC-King-Corn-45km-2022-01-28T0552.jpg" target="_blank"><img src="screenshots/thumbs/PMC-King-Corn-45km-2022-01-28T0552.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
Then on third pass I started to add fields right next to farm yards, so that even though these fields might not be the smallest out there, at least the are the closest one to the farm yard just in case player wants to buy the yard and field next to it.
</p>

<p>
Used fuzzy select with sample merged mode on, clicked a field, it got selected, then select -> grow, 3 pixels and CTRL-, foreground fill. Done. Next color.
</p>

<p>
2022-01-28T06:12:09Z All fields next to a farm yard done.
</p>

<p>
This is now pretty nice coverage, lets assume someone would buy all of these, they would have so much money from grain harvest profits that they could easily buy most of the terrain at that point. Yeah its unlikely scenario that someone would buy so many farm yards for their own use, usually farm yards just accidentally come along with bigger field / land purchases.
</p>

<p>
Anyways the overall point I'm trying to make that Start From Zero savegame is now very much possible and enjoyable in this terrain config (ok field definitions are still missing, those come soon).
</p>

<p>
Decided to add few more small fields along the railroad tracks (fields split in half), but after that I start spamming huge farmland areas for big business men bulk buying <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2022-01-28T07:11:46Z Finished painting farmland image. Last RGB color is 230,0,255 which went to the background, just in case if there is any unpainted pixels.
</p>

<p>
Its decent farmland image for this terrains scope, all farm yards are individual land lots and then several smallest fields are available. Rest of it is big chunks which cost hundreds of millions. The idea is that once player owns all the small detailed farm yards and fields, he has plenty of money to buy rest of the terrains land.
</p>

<p>
I decided now that there wont be anymore design changes, it is what it is and if you don't like it, make a new terrain. I am ready for placing objects and once I do that then there is no turning back, the terrain gets finished and released.
</p>

<p>
Alright cant think of what else to do other than firing up GE and start placing objects. Well OK perhaps I do the save and first in-game test without objects first just to get my bearings on brand new terrain, I've only seen it on GIMP and GE so far <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Loaded the project in GE, aligned careerStartPoint to one farm yard which will become our vehicle shop area, then saved. Expecting a nice 10min save or so. Actually I'm going to quickly check out RSS news from PMC DevSurf computer while GE is processing.
</p>

<p>
It was done saving when I came back.
</p>

<pre>
PMC_King_Corn_45km.i3d saved in 399780.741200 ms
</pre>

<p>
Exited GE and did the GDM/GRLE shuffle again. Created backup bat file (didn't ran) and sync to fs22 mods dir which I did ran.
</p>

<p>
2022-01-28T07:39:57Z Checked in-game and well heightmap is so absolutely flat I was sure I forgot to copy the L3DT generated 99 meter PNG in place, but after running 20 speed with SHIFT turbo pressed on for a long while I finally found some elevations.
</p>

<p>
<i>This heightmap is not flat and there are no americans in baghdad... nooo americansk</i> <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Heightmap elevations are tricky thing, if you have nice rolling hills type terrain then building placement for farm yards is difficult as one side of the building is almost floating while other aligns to ground nicely. If you go really extreme with the elevations with erosion and all kinds of stuff like that, then it gets so bad your combine harvesters header cannot even cut the crop properly, you see this even on elmcreek in a field just N-NW from the vehicle shop. Yeah you don't want that. But if the heightmap is too smooth or with so large features you cant stand anywhere and see the actual elevation changes... then everyone (including me) screams "UR FLAT MAPZ!!1" hehe.
</p>

<p>
Its super easy to make nice rolling hills heightmap with L3DT, its very difficult to make one where you can place buildings nicely but still see breath taking views from some hillside.
</p>

<p>
Otherwise in-game check was pretty cool, besides the farmland.xml error which I already knew about, there was no errors, so I got 45km terrain from scratch to in-game without errors (except farmalnds) after working on it almost a day <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Updated farmlands.xml config file and tried again, there was some odd error about every other ID missing, hmm strange. Checked numChannels and it was 8 like it is in I3D file as well, hmm. Guess I need to convert it again and inspect the resulted PNG in more thorough.
</p>

<p>
Found that farmland.png is broken, its pixelated like what happens when graphicsmagick tries to replace color which isn't there, or something like that. So I have made a mistake and skipped/missing one or more colors. Now I'm running graphicsmagick bat file so that it wont delete the temporary files which I can inspect and see in which ID number (PNG filename) it goes bad.
</p>

<p>
2022-01-28T08:17:52Z Found the issue, there was alpha channel in the satellite_texture_farmland.png source image. I faintly recall there was mentioning this in some of my documentation but no idea where. I edited the graphicsmagick bat file to remove alpha channel, so now it doesnt matter if there is one or not, it will be dealt with.
</p>

<p>
But it was not the bug, huh what? <img src="../images/smileys/icon_surprised.gif" alt="Smiley :o" loading="lazy">
</p>

<p>
Yeah after adding that fix in I ran the bat again and still the same pixelation, what is going on, then started to search image by image (ID by ID) where the oddity happens and spotted one wrong color area, it was ID 67 which was painted with RGB 35,0,0 when it should have been RGB 35,45,45 heh. Fixed and ran the bat again.
</p>

<p>
No more pixelation, we are good to go <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2022-01-28T08:50:12Z Another in-game check complete, farmland ID 106 is the highest we have, fixed farmlands.xml and now we should be error free.
</p>

<p>
2022-01-28T08:54:53Z Error free, aayeah <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
So now next step is to take first backups which I did. Then started GE and loaded the project up, imported template PMC_Helpers.i3d which again took only few milliseconds but then GE went into "Loading ..." mode for 10 or so minutes.
</p>

<p>
2022-01-28T09:09:00Z Lunch break ...
</p>

<p>
2022-01-28T09:32:00Z Feeding time over, back to GE.
</p>

<p>
Heightmap, its so low elevations, ugh... I mean don't get me wrong I could live with it but I'm sure the average joe farmer out there will complain that there are no heightmap at all. So yeah I still need to go back one time and generate higher elevations to this. While I'm doing that I'll import vehicle shop 3d model in, if it takes 10min again then I have plenty of time to generate nice heightmap (which wont take more than few minutes anyways).
</p>

<p>
Imported vehicle shop 3d model and aligned it OK to one of the farm yards. Then exported PMC_Helpers.i3d into its regular Exclude.for.Release/ dir, saved and exited.
</p>

<p>
Eh dunno why I flip flopped and decided to try quite rough elevated heightmap, heightScale="484.98" heh.
</p>

<p>
This heightmap is very rough in GE, vehicle shop is sitting on a slope its like some damn ski lodge hehe. Yeah what can I say, either its too flat or a nightmare for buildings.
</p>

<p>
Not sure how is it to farm a large field with rough elevations even if they are in wide area, uphill cultivating or pulling a heavy grain cart probably ain't that much fun. I love the elevations in <a href="../19/pmc-grande-gardens-16km.php">PMC Grande Gardens 16km</a>, so extremely flat terrain definitely is not my favorites even though I could live with it.
</p>

<p>
Checked heightmap in-game and I like it, but the farm yards are sloped and therefore to put it harshly, unusable. You cant park vehicles to sheds there if its sloped.
</p>

<p>
Hmm yeah sorry to say but I have to generate another really neutered heightmap with probably less than 50m elevation changes, it does look like a flat landscape, but yeah, dunno.
</p>

<p>
There are pleny of flat spots in this current heightmap as well, but there is no such random chance that those would happen where our farm yards are in the design doc.
</p>

<p>
New neutered heightScale="49", hoh.
</p>

<p>
Was saddened to see what kind of flat map there was waiting for me in GE, but oh well we'll stick to this now and start placing objects so this terrain can be finalized sometimes today.
</p>

<p>
2022-01-28T10:19:48Z Imported fields.i3d template, placed first field with a sad look on my face as I'm the owner of new flatmapz.
</p>

<p>
After making second field I decided to go check in-game one last time... I am still not sure I can live with this smooth elevation heightmap, it just looks super boring.
</p>

<p>
Yeah after running with 20 speed and SHIFT pressed for a while, could not see ANY elevations whatsoever, average users would definitely say its a flat one RGB color heightmap and justifiably so. No. I have to go back for the third time and create some maybe 200m elevations heightmap. Or maybe I could use L3DT 3d sapphire and flat out the farm yard areas so there is no problem with vehicles and placeables, hmm.
</p>

<p>
Generated new L3DT heightmap with 299 heightScale, I tried to smooth out a location in 3d sapphire but, it just wasnt working, I could not find the set-to elevation etc, so yeah it was a frustration.
</p>

<p>
Lets see how this 299m heightScale heightmap works, maybe we got lucky and at least vehicle shop area is smoother now.
</p>

<p>
Before I update the heightmap I blacked out RGB 0,0,0 the old one, I want to place few more field definitions and want to do it on flat surface.
</p>

<p>
When getting the new heightmap into GE I discovered that vehicle shop location was fairly level, very good for career savegame starting point and to buy vehicles.
</p>

<p>
Honestly I am slightly frustrated right now with the editing progress and especially the heightmap, so I'm going to start placing objects not matter if the heightmap is good or not, vehicle shop looks ok so that is enough for me, if the other farm yards are on slopes so be it. Once save is finished (yeah takes forever) its object placing time.
</p>

<pre>
PMC_King_Corn_45km.i3d saved in 643208.585200 ms.
</pre>

<p>
Sigh.
</p>

<p>
2022-01-28T11:22:10Z Started to place selling points. Not sure why but heightmap seems to be very accomodating for these objects.
</p>

<p>
2022-01-28T11:32:48Z Selling points done, including the bale selling point by the dealership. That was fairly easy and quick. No idea if the locations are good in-game meaning distributed out, I might have placed some close to other selling points as you cant really know the terrain yet while flying in GE camera view.
</p>

<p>
Next was trees, probably not going to place many but some forest tree lines at least.
</p>

<p>
2022-01-28T11:37:46Z Forest tree line placed by the vehicle shop.
</p>

<p>
2022-01-28T11:51:42Z Then switched to place few utility pole lines.
</p>

<p>
2022-01-28T12:03:16Z First long utility pole line placed. From what I believe is east side of the terrain along asphalt road to the vehicle shop.
</p>

<p>
Then placed six meridian flat bottom grain bins to vehicle shop area. And another three for regular farm yard at "location 1".
</p>

<p>
2022-01-28T12:28:40Z Feeling slightly.. bored, not exhausted so much but just, bored. Decided to save, exit and go check out in-game how it looks now and to verify all functionality is there.
</p>

<p>
In-game check shows that okay it is just absolutely HUGE and those utility pole lines along asphalt road seem to go forever heh. With day or two more object placing work and it might start to look really nice.
</p>

<p>
Crop accuracy, grass from fruit_density is a shame though, the dirt roads look so bad right now because of the grass and well also weight image resolutions too, but as said we cant do nothing about that.
</p>

<p>
I got plenty of hours left in this day, but I just cant get the motivation / energy to put in more objects right now, just feeling bored and want to go do some other computer chores for the rest of the night.
</p>

<p>
Kind of disappointed as I was hoping this terrain would be finished today but it definitely needs a bit more work tomorrow. Simple things as ESC mapview overview.dds and icon/preview images are still to do. Oh and I noticed the selling point distribution went a bit badly, now SE region has none and south central has two really close to each other. Yeah nothing says they must be evenly distributed, but it would be preferred.
</p>

<p>
I have to call it a night regarding fs22 terrain editing, just don't feel like continuing. I am sure in next editing day will see this terrain finished and in release condition.
</p>

<p>
2022-01-28T12:47:39Z Shut down FS22 editing tools for the night, was a pretty nice editing day.
</p>

<p>
2022-01-28T22:11:01Z Back at PMC Gaming win10 horrible garbage system, time to edit some more terrains. Todays goal, hum finish PMC King Corn 45km and finally be done with the editing phase of these test-farm series of terrains.
</p>

<p>
Started GE and loaded project in. Then imported PMC_Helpers and again it took forever to import so in the mean time I launched FS22 and went to check out the latest progress in-game.
</p>

<p>
This time I changed video settings to LOW preset, just to make it high performance during testing. Once its time to play I can crank up a little bit details again (my nvidia gtx 1060 3gb card cant run very high settings).
</p>

<p>
In-game check shows that design doc farm yard roads made with 1 pixel pencil are way too narrow, width is exactly pickup 1978 truck size which is too narrow for farm vehicles. Its more like a walking path width. This has to be remade, so yeah another round of GIMP design doc XCF and then GDM/GRLE shuffle work today, oh well.
</p>

<p>
Selling point 2 needs to be moved to south central coordinates, basically slightly to the center of the terrain. Selling point 10 needs to be moved to south west region. Selling point 9 needs to be moved to east (N-S coordinates are fine).
</p>

<p>
2022-01-28T22:30:22Z When I shut down FS22, GE was still loading PMC_Helpers heh, crazy. Nobody can edit like this.
</p>

<p>
2022-01-28T22:33:01Z Started placing some trees, lets get this editing day going. Farm yard trees.
</p>

<p>
You know the terrain is large when you have to leave breadcrums, transformgroups to "TODO" areas heh, I left now an empty transformgroup so I know which farm yard needs grain bins placed (only has trees, no bins) and utility pole line drawn to it.
</p>

<p>
Found also on this particular farm yard that the driveway weight texture is missing, hmm that is odd, I must have only GIMP design doc exported the new roads and ran fruit_density but not... hmm well, err that doesn't make sense, its either all or nothing, how the hell can there be terrain detail ground textures missing if fruit_density still has hole punched to the grass, hmm strange. OK will investigate when done adding objects.
</p>

<p>
Got three farm yards done with trees.
</p>

<p>
2022-01-29T00:25:10Z Lost count how many farm yard tree lines I've created now, a LOT, heh. When flying around this terrain in GE camera and knowing its massive 45km size with fields over 100ha each, it is clear that this would need 50+ more farm yards, kind of like PMC Grande Gardens 16km did before the re-design.
</p>

<p>
There is just way too much to farm for one family/farm-yard now, its out of scale, clearly. Oh well, its just an tech demo testing terrain so no-one should expect anything fancy <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2022-01-29T01:05:50Z Its slowly creeping in, I'm feeling really tired, slept just a bit over 5hrs last night which is low to mid sleep duration, lets just say 4hrs and I will snooze off during the day, 6hrs and technically then I don't have the excuse of being sleepy, so 5 is kind of in the between. But then again I've snoozed off even with 8hrs sleep so heh there is no hard rule here. Anyways it sucks as its friday night and the american farmsim streams are just about to go live within the hour and I'm just about to snooze off, would be real bad timing to be sleeping through this prime time.
</p>

<p>
Anyways more trees have gotten in, its amazing I still keep finding forest terrain detail textures here even after adding so many trees already. Also marked tons of farm yards for grain bins and utility pole lines, so plenty of editing to do.
</p>

<p>
2022-01-29T02:07:06Z Was shocked to see that I have 20 empty transformgroups marking farm yards which needs grain bins. Uuh the amount of placeables.xml copy pasting that requires is hilarious heh.
</p>

<p>
2022-01-29T02:25:49Z Created farm yard location 1 meridian flat bottom bins, six of them.
</p>

<p>
Created utility pole line to "location-03" farm yard.
</p>

<p>
2022-01-29T02:56:33Z Feeling way too tired, yawning and lazy, just cant get the motivational energy going for proper editing, need to go take a nap.
</p>

<p>
2022-01-29T08:00:07Z A break of sort is over, slept a bit, cooked food and ate, now I'm fully energized and ready to edit.
</p>

<p>
Farm yard "location-04" added, fix meridian flat bottom 3608 grain bins, luckily utility pole electric network was already there.
</p>

<p>
2022-01-29T09:07:04Z Continuing to place meridian grain bins and utility pole lines, now total of 7 farm yards have grain bin location. Also added first meridian flat bottom bin 3609 placeable.
</p>

<p>
Need to check out the big grain bin silo complex with the semi-truck drive through load and unload point. Hopefully it has placeable.xml config already.
</p>

<p>
Had to go in-game to check what actual farm grain bin silo placeables the game has, those dir/xml file names don't tell me much, I don't want to add some hijo de puta goofy looking grain bin setups.
</p>

<p>
Actually even though the nuevo whatever sounds hijo de puta, they looked pretty OK for fictional american terrain, I am surprised giants added 16 million liter mega bin complex into the base game. Also the meridian liquid fertilizer, fuel and the other tank looked pretty nice, I will absolutely use those.
</p>

<p>
Here is my debug help text to find these interesting looking placeable model file names heh.
</p>

<pre>
2022-01-29 09:12 data/placeables/unia/farma/farma400/farma400.i3d (69.52 ms)
2022-01-29 09:13 data/placeables/unia/farma/farma500/farma500.i3d (21.86 ms)
2022-01-29 09:13 data/placeables/unia/farma/farma800/farma800.i3d (25.03 ms)
2022-01-29 09:13 data/placeables/neuero/nl1622_2000/nl1622_2000.i3d (14.19 ms)
2022-01-29 09:14 data/placeables/neuero/nl1622_6000/nl1622_6000.i3d (45.71 ms)
2022-01-29 09:14 data/placeables/neuero/nl1622_16000/nl1622_16000.i3d (42.84 ms)
2022-01-29 09:15 data/placeables/meridian/fuelTank25000L/fuelTank25000L.i3d (5.49 ms)
2022-01-29 09:15 data/placeables/meridian/liquidFlatBottomTank1630/liquidFlatBottomTank1630.i3d (4.81 ms)
2022-01-29 09:16 data/placeables/meridian/fertilizerBins1620/fertilizerBins1620.i3d (40.65 ms)
2022-01-29 09:16 data/placeables/lizard/waterTanks/level02/waterTankLevel02.i3d (34.90 ms)
</pre>

<p>
Copied most of those directories to my fs22 editing objects.for.terrains/ directory, edited XML config files to zero out dailyUpkeep as I don't like to bleed off money. Now all I have to do is to import them into GE project and insert into my placeables.xml / storeItems.xml config files.
</p>

<p>
2022-01-29T09:53:08Z Created empty zeroed out placeables.xml and storeItems.xml config files for further copy pasting to new and existing terrains. Then copy pasted those to this terrains config files. Now we are ready to start adding them into GE as well for coordinates.
</p>

<p>
Added three meridian liquid fertilizer bins and one fuel tank to farm yard location-07.
</p>

<a href="screenshots/PMC-King-Corn-45km-2022-01-29T1003.jpg" target="_blank"><img src="screenshots/thumbs/PMC-King-Corn-45km-2022-01-29T1003.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
Then created farm yard location-08, and there added solid(?) fertilize bin to it as well. Now its in-game testing time before I add any more of these because if they don't work like I've done them here, why add 20 of them if its a faulty config.
</p>

<p>
2022-01-29T10:34:59Z In-game test has placeables being created in the farm yards, however when I purchase the land I do not see any meridian grain bin silo display of the contents, hmm probably needs that "buy with farmland" XML option, need to look into that.
</p>

<p>
Also I got this error in the log:
</p>

<pre>
2022-01-29 10:22 Warning: Loading file with invalid case 'C:/FS22.Mods/Dev/PMC_King_Corn_45km/maps/placeables/sellingpoints/sellingStation01.xml'.
</pre>

<p>
Realized that my placebles copy-paste dir was "Placeables/" instead of case sensitive "placeables/" heh, fixed <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Searched my local notes and found placeable XML config info, I need canBeSold true, showInStore false, dailyUpkeep 0 (which I already did) and boughtWithFarmland true values for them to work so they can be bought with the farmland using farmId="0" config.
</p>

<p>
2022-01-29T10:47:43Z In-game test shows no errors, I did not add those XML configs in yet so I cant use the meridian bins, but yeah now its error free, looking good so far. Lets continue editing <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2022-01-29T10:58:11Z Was adding utility poles to one of the farm yards, long line coming from outside terrain, created them and then was inspecting by RMB hold and WASD flying along the line... and GE v9.0.2 become really sluggish and the transformgroup move options disappeared as well.
</p>

<p>
I probably pressed some wrong key to enable/disable some feature, no idea what could it have been, so I saved and exited GE, time for a restart to a clean start again.
</p>

<p>
I also got up from my office chair and walked around a bit, this would have been great time for a lunch break but unfortunately it was still one and half hour away. Heh yeah I'm no freak but I'll try to eat every 4hrs 30min when I'm just doing computer stuff, keeps some balance in my life, I don't generally eat any snacks etc so yeah. Anyways, time for just few minutes break as getting kind of sore sitting and editing.
</p>

<p>
2022-01-29T11:11:16Z Alright enough stretching my legs, back to editing <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
GE seems to work good, latest utility pole line looks good.
</p>

<a href="screenshots/PMC-King-Corn-45km-2022-01-29T1112.jpg" target="_blank"><img src="screenshots/thumbs/PMC-King-Corn-45km-2022-01-29T1112.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<a href="screenshots/PMC-King-Corn-45km-2022-01-29T1126.jpg" target="_blank"><img src="screenshots/thumbs/PMC-King-Corn-45km-2022-01-29T1126.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
More and more utility poles.
</p>

<a href="screenshots/PMC-King-Corn-45km-2022-01-29T1134.jpg" target="_blank"><img src="screenshots/thumbs/PMC-King-Corn-45km-2022-01-29T1134.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
2022-01-29T12:16:34Z Just finished creating farm yard location-11 with all the goodies including medium long utility pole line along dirt roads.
</p>

<p>
Man, this terrain is starting to look sweet <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
How crazy would it be if this terrain, all 45 kilometers x 45 kilometers of it, would somehow turned out to be "fully playable"... umm, <i>crazy</i>.
</p>

<p>
2022-01-29T12:18:11Z Lunch break, ah yeah I needed that, lets eat!
</p>

<p>
2022-01-29T12:55:22Z Feeding time over, back to slave labor in GE to work on <b>Largest Terrain In The History Of Farming Simulator Games.</b> OK.
</p>

<p>
Created farm yard locations 12 and 13, including utility pole lines.
</p>

<a href="screenshots/PMC-King-Corn-45km-2022-01-29T1323.jpg" target="_blank"><img src="screenshots/thumbs/PMC-King-Corn-45km-2022-01-29T1323.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
Location 14 and 15 done. On the 15th farm yard I used the big 16 million liter nuevo grain bin silo complex.
</p>

<a href="screenshots/PMC-King-Corn-45km-2022-01-29T1408.jpg" target="_blank"><img src="screenshots/thumbs/PMC-King-Corn-45km-2022-01-29T1408.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
2022-01-29T14:21:02Z Got location 16 done, was fairly small farm yard only one meridian 3608 grain bin there. Now I'm thinking, okay there are sixteen farm yards done, plus new player default farm so total of seventeen, hmm how many do we actually need as you cant even have more than 16 players in multiplayer.
</p>

<p>
Hmm.
</p>

<p>
Guess they wont hurt, unless there is some size limitations in placeables.xml but there has been some silly long FS19 defaultItems.xml config files so mine should not cause any issues even with double the amount of locations.
</p>

<p>
For the scope of this "test-farm" terrain series, heh this is well and beyond the call of duty to put this amount of work into it, I mean its a simple fact that this terrain has turned into legit and I didn't even realize when that happened hehe.
</p>

<a href="screenshots/PMC-King-Corn-45km-2022-01-29T1425.jpg" target="_blank"><img src="screenshots/thumbs/PMC-King-Corn-45km-2022-01-29T1425.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
Cranking out farm yard locations.
</p>

<a href="screenshots/PMC-King-Corn-45km-2022-01-29T1448.jpg" target="_blank"><img src="screenshots/thumbs/PMC-King-Corn-45km-2022-01-29T1448.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
2022-01-29T15:13:50Z GE was getting laggy again and transformgroup gizmos did not work properly, I could not select the simple X/Y/Z axis movement gizmo handle, and the RMB + WASD camera movement was stuttering, I had to move my mouse in one smooth motion to keep the camera moving forward somewhat smoothly.
</p>

<p>
I am really hoping this is not some sort of limitation in GE v9.0.2 that it could not edit large terrain project I3D's properly. Well so far its been working OK but yeah dunno.
</p>

<p>
Restarted and finished the location 18 utility pole line. Now there are three farm yards (that I know of) that needs grain bins and utility pole lines, but one of them doesn't have forest tree line in design doc and two others are so badly sloped I doubt I can place any buildings there, so maybe I just leave them for now, let players see if they manage to do something with them.
</p>

<p>
Next I'm going to go through my check list for this terrain, there are few issues I want and need to fix.
</p>

<p>
2022-01-29T15:30:31Z Created three fieldGrassMission true tagged field definitions, these are some nice grass contract fields. Also created two more field definitions for regular fields.
</p>

<p>
Checked in-game, grass fields are working and contracts appeared too.
</p>

<a href="screenshots/PMC-King-Corn-45km-2022-01-29T1547.jpg" target="_blank"><img src="screenshots/thumbs/PMC-King-Corn-45km-2022-01-29T1547.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
Looking good.
</p>

<p>
Next up is fruit_density bushes, flowers and shrubbery missing issue, hmm, well "missing" as no other than <a href="../19/pmc-north-dakota-greendale-4km.php">PMC North Dakota Greendale 4km</a> has bushes in our terrains today, I don't think iowa garden city or montana shelby ever got that painted, so yeah its not really a bug, per say.
</p>

<p>
Opened design doc in GIMP and took a look if I could spray some odd fruit colors around... and I did... but ... realized that I would have to come up a new fruit_density handling graphicsmagick bat command line setup and that is WAY beyond the scope of this project right now, I mean imagine testing brand new bushes and flowers painting method (well "new", heh but you know what I mean) on the <b>Largest Terrain In The History Of Farming Simulator Games</b> haha.
</p>

<p>
Yeah how about NO. There is time and a place...
</p>

<p>
Hmm okay so whats next, hmm hmm.
</p>

<p>
Err, this terrain is ready? Well no idea what to edit anymore, there are metric tons of farm yards with grain bins and product bins, utility poles and few fields too including grass fields. What else would such test terrain need hehe.
</p>

<p>
Well one thing is missing; vehicle sheds. We don't have ANY right now, because well, either I would use the good old CBJ buildings or try to find something new, maybe TrailerParkFarm's (TPF) big sheds but I never tested those so no idea, again out of the scope.
</p>

<p>
Odd thing that I've haven't even considered vehicle sheds before this, I was just happy plugging in grain bin silos. Most farmsim players like to park their vehicles into sheds, play house so to speak, so yeah make no mistake vehicle sheds are important.
</p>

<p>
Although this terrain has been very nice without required mods, just start the game up and off you go without need to worry if you are missing addon or two.
</p>

<p>
Vehicle sheds especially those CBJ ones with 1 million meter view distance would be a nice landmark though, hmm. I am also very interested of checking out TPF's big sheds, hmm hmm.
</p>

<p>
2022-01-29T16:13:18Z Downloaded TPF's 72x150 and massive 90x200 vehicle sheds packs, going to check those out. I really do not like this kind of editing where I'm downloading stuff to add into the terrain, that is messed up, you need to have well tested and proven mods which you add after careful consideration.
</p>

<p>
So I started PMC King Corn 45km terrain up in farm-manager game mode, oh right that seems to work OK too, its tested now heh, with TPF's both vehicle shed packs included. No errors and the vehicle sheds look great.
</p>

<p>
Todays editing session is ... hmm looks like 55min left on the clock if I would keep track on the 17hrs workday, which is not really possible because of my nap which always messes your day up. So hmm not really sure how much more energy and time I have left for todays editing sessions.
</p>

<p>
I'm going to try playing new farmer game mode a bit, most likely if it takes hour or more then I'm probably ready for bed or hungry for food, we'll see.
</p>

<p>
So yeah lets move the terrain dir into regular mods dir, check if there are any Courseplay updates and then start playing <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
But first I need to GE save the project without PMC_Helpers. The usual finalization routine.
</p>

<pre>
PMC_King_Corn_45km.i3d saved in 29823.552900 ms
</pre>

<p>
2022-01-29T16:52:59Z Now switching to game-play testing mode, I'm going to write different page/story about it, maybe, dunno.
</p>
<!--
2022-02-04T13:14:00Z
-->
<p>
2022-02-03T17:13:04Z New editing day has started, been editing for hours already on the other terrains in this series, getting quite tired but hopefully can squeeze in few more edits in this one before its my bed time.
</p>

<p>
Started by taking backups, this is too big of a terrain to mess it up by not having a proper backup heh.
</p>

<p>
2022-02-03T17:40:47Z Loaded into GE, imported PMC_Helpers, took forever. Then added TrailerParkFarms (TPF) big vehicle sheds, fertilizer and grain bins to new farmer game-mode placeables by the dealership.
</p>

<a href="screenshots/PMC-King-Corn-45km-2022-02-03T1742.jpg" target="_blank"><img src="screenshots/thumbs/PMC-King-Corn-45km-2022-02-03T1742.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
Added TPF sheds and grain bins to location 1.
</p>

<a href="screenshots/PMC-King-Corn-45km-2022-02-03T1749.jpg" target="_blank"><img src="screenshots/thumbs/PMC-King-Corn-45km-2022-02-03T1749.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
2022-02-03T17:51:54Z And now I only have one and half hour of this day left, already feeling a bit tired so going to switch into chill mode, do some computer chores with PMC DevSurf before calling it a night.
</p>

<p>
2022-02-04T02:16:21Z New editing day has started, time to continue adding TPF vehicle sheds to farm yard locations (placeables.xml).
</p>

<p>
Created Location-02 placeable objects, could not use vehicle sheds because the whole area was badly sloped, but used fertilizer bins and fuel tank.
</p>

<a href="screenshots/PMC-King-Corn-45km-2022-02-04T0225.jpg" target="_blank"><img src="screenshots/thumbs/PMC-King-Corn-45km-2022-02-04T0225.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
Location-03 was not that bad slope but still enough to mess up vehicle sheds, but I still tried to use them, not sure if they came out alright.
</p>

<a href="screenshots/PMC-King-Corn-45km-2022-02-04T0232.jpg" target="_blank"><img src="screenshots/thumbs/PMC-King-Corn-45km-2022-02-04T0232.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
I really need to level the heightmap out on these farm yard locations, its just useless to have a sloped area as buildings cant be used there. Need to come up with some sort of method how to smooth it out without looking goofy on the connecting edges, hmm.
</p>

<p>
Its going to be L3DT heightmap tools work for sure, need to bring in mapview image there as texture map and then just off to smooth out the slopes. Not my favorite activity.
</p>

<p>
At Location-04, unfortunately pretty much the same story, could not use vehicle sheds due slope.
</p>

<p>
Well if nothing else, this is a big... hmm was going to say lesson learnt but its not that, I knew it already, but just a reminder that you simply cannot do buildings on slopes no matter what. You have to smooth out and level that stuff.
</p>

<p>
Did Location-05, same thing.
</p>

<p>
On Location-06 I was able to squeeze in buildings on the less sloped end of the farm yard.
</p>

<a href="screenshots/PMC-King-Corn-45km-2022-02-04T0250.jpg" target="_blank"><img src="screenshots/thumbs/PMC-King-Corn-45km-2022-02-04T0250.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
Got two vehicle sheds and some fertilizer bins for Location-07. But it was a tight squeeze again with the slope.
</p>

<a href="screenshots/PMC-King-Corn-45km-2022-02-04T0256.jpg" target="_blank"><img src="screenshots/thumbs/PMC-King-Corn-45km-2022-02-04T0256.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
Location-08 had pretty good coverage on fertilizer bins and fuel tank, added two vehicle sheds. It looked to be not that sloped but sure enough the bigger shed had quite bad floating in one end/side.
</p>

<p>
Man do I hate sloped farm yards. I simply need to make then absolutely flat even ground in L3DT from now on.
</p>

<p>
Then had to skip farm yard Location-09 through 14 because of slopes, heh what an horror slope terrain is this <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2022-02-04T03:14:23Z Created two vehicle sheds to Location-15, it looked pretty even but sure enough some floatation was going on there as well.
</p>

<a href="screenshots/PMC-King-Corn-45km-2022-02-04T0315.jpg" target="_blank"><img src="screenshots/thumbs/PMC-King-Corn-45km-2022-02-04T0315.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
Then Location-16 was very flat, nice... except it was so small I could only fit one 72x150 size vehicle shed there heh.
</p>

<a href="screenshots/PMC-King-Corn-45km-2022-02-04T0317.jpg" target="_blank"><img src="screenshots/thumbs/PMC-King-Corn-45km-2022-02-04T0317.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
Next farm yard looked flat, Location-17, but sure enough it wasnt. These huge buildings require so little slope to have other end floating, its amazing.
</p>

<a href="screenshots/PMC-King-Corn-45km-2022-02-04T0322.jpg" target="_blank"><img src="screenshots/thumbs/PMC-King-Corn-45km-2022-02-04T0322.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
Last was Location-18, deceiving little thing, looked so flat, but it wasn't. Oh well there is no such thing as flat in L3DT generated heightmaps when it comes to these huge buildings, just got to learn that fact.
</p>

<a href="screenshots/PMC-King-Corn-45km-2022-02-04T0327.jpg" target="_blank"><img src="screenshots/thumbs/PMC-King-Corn-45km-2022-02-04T0327.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
2022-02-04T03:30:25Z Alright all new vehicle sheds are done, now just need to clean up placeables.xml and then do in-game test.
</p>

<p>
It was quite a lot of typing to clean up placeables.xml, I assume mapBoundId must be unique so I did those, thats where the time went typing in the sequential unique numbers there.
</p>

<p>
2022-02-04T03:51:19Z First in-game test complete, no errors but no rocks show up either, hmm did I forget to update the rocks_density image, heh need to read my own dev diary from yesterday to verify <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Yup as I suspected, I just jumped right away to add those TPF vehicle sheds, did not update the rocks_density image.
</p>

<p>
Converted GDM/GRLE to PNG, generated new 32k res infoLayer images, copied that rocks_density 16384 res image over, updated placeables building XML files. Then had to do a save in GE, so loading that beast up there took a while.
</p>

<p>
2022-02-04T04:02:47Z GE with PMC_King_Corn_45km terrain project loaded up and hit CTRL-S to save...
</p>

<p>
2022-02-04T04:14:57Z Restroom break, dunno if saving finishes before I return ...
</p>

<p>
2022-02-04T04:19:02Z Back and saving complete.
</p>

<pre>
PMC_King_Corn_45km.i3d saved in 765559.062900 ms, uuh.
</pre>

<p>
2022-02-04T04:24:39Z In-game check confirms, rocks_density is in place, it has been fixed.
</p>

<p>
And that... concludes PMC King Corn 45km editing session for today. Not only today but for the first release. It also means this whole "test-farm" terrain series is now ready for a release.
</p>

<p>
2022-02-07T14:28:35Z New editing day has started, not really, its more like release preparations day.
</p>

<p>
Changed "$data/foliage/meadow/meadowUS.xml" to "$data/foliage/meadow/meadowDLC.xml" as I was told this fixes the one warning you see even on mapUS.
</p>

<p>
That seems to have fixed it.
</p>

<p>
2022-02-08T09:40:23Z New editing day has started, even though I was hoping these are already over.
</p>

<p>
I was talking with The Farm Sim Guy about him making a preview etc video of this terrain, he checked it out and we talked some more, he asked if I could squeeze in a bit more density/weight image details as I mentioned density image resolution is now 16384 so I could try 32768 res but most likely it would not work. Then penalty_box reported that vehicle shop repair/selling trigger is missing on other terrains so it will be on this one too. Decided that okay lets get the trigger added and while I'm at it test also if the mega 32k res density images would work.
</p>

<p>
Also I want to clear my bugs list as there are several (obviously outdated) issues reported, good to go through them and clear obsolete one, maybe fix what I can.
</p>

<p>
First thing was to take another backup, I am really not confident that this 32k res density and... hum 16k weight image(?) res works, so lets take a backup that we can fall back to the last stable working version.
</p>

<p>
2022-02-08T09:48:27Z But now, just before editing even begins, its lunch break ...
</p>

<p>
2022-02-08T10:12:45Z Feeding time over, back to monster terrains.
</p>

<p>
While eating I tried to plan what I do, first instinct was to fix the trigger first but then I remember how long it takes for GE to import/save so I need to pile up all edits into one saving session. So I started to go through the bugs list on file level, what can I find out without using GE, for example "selling points missing" is an easy check, just see placeables.xml and check maps/placeables/ dir.
</p>

<p>
Checked placeables.xml and indeed there was all the proper selling point info, so one bug crossed off the list.
</p>

<p>
2022-02-08T10:26:05Z GIMP design doc painted farm yard driveway roads with 3 pixel pencil size, the previous 1 pixel was just silly narrow.
</p>

<p>
Now rest of the bug/issue reports are all there I need to launch GE, so guess there is nothing more to do than to getting ready to launch that horrible software.
</p>

<p>
Exported roads_dirt.png from GIMP, then ran _run_design_doc_to_density_weight_images_all_in_one_2022-01-28.bat to process the images.
</p>

<p>
While that was running I copied placeables/storeItems.xml config lines for fuel station and vehicle shop sell/repair trigger lines.
</p>

<p>
Then converted GDM/GRLE to PNG which of course again broke the infoLayer 32k res images, so I ran _run_graphicsmagick_FS22_infoLayer_create_black_32768.bat to generate new ones.
</p>

<p>
Heh listing all this shuffle just feels sometimes so silly <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Prepared vehicle shop selling/repair trigger warning stripes transformgroup for import.
</p>

<p>
Increased *_density image resolution to 32768 pixels, uah.
</p>

<p>
2022-02-08T11:08:33Z It was time to start GE and load terrain project up.
</p>

<p>
However GE v9.0.2 crashes right in the beginning same way as if you try to load a project with some GDM images missing. Hmm, is it not capable of loading 32768 resolution density images? Hmm.
</p>

<p>
Then resized *_density images back to 16384 and tried again. It worked. So there you have it, GE v9.0.2 will crash on 32768 resolution _density.png images.
</p>

<p>
2022-02-08T11:17:32Z Started to import PMC_Helpers.
</p>

<p>
2022-02-08T11:31:59Z Finished importing PMC_Helpers. Always fun.
</p>

<p>
I messed up something in the GIMP design doc graphicsmagick processing part, fruit_density image was half the size it should have been, sigh. Okay so saved GE project which finished in normal time, wow how did that happen. Next it was to figure out what went wrong in design doc images.
</p>

<p>
Ran _run_design_doc_to_density_weight_images_all_in_one_2022-01-28.bat which generated proper PNGs, then had to resize cultivator_density and fruit_density images to 16384 resolution and finally copy all the new images into GE terrain project dir.
</p>

<p>
2022-02-08T11:49:56Z Started up GE and imported vehicle shop warning stripes, which of course took another 10 or so minutes waiting time, sigh. Yeah this was the last import for this terrain, unfortunately I need to do the same for couple of more terrains which are lacking these warning stripes.
</p>

<p>
Although I should be able to just copy the bale selling trigger warning stripes, I mean they are simply textures really. Hmm yeah that is what I'm going to do on those other terrains, no need to waste 10 minutes of my life just for some stupid GE import.
</p>

<p>
Again feeling extremely frustrated with these idiotic GE v9.0.2 loading times. I sound like a broken record but cant wait for these projects to be released and going back to FS19 editing without such issues. Heck I'm already good to go back to ArmA 3 editing at this point.
</p>

<p>
2022-02-08T12:07:57Z Finished importing vehicle shop selling/repair warning strips and saved GE project, was going to say hopefully this was the last time before release but heh this definitely was the last time.
</p>

<p>
Then it was in-game testing time. Well, I saw the warning stripes on the ground but heh forgot to actually test it as I just went and purchased new farmer game-mode starter vehicles <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
So had to load this savegame on FS22 back up and go test it out, also forgot to buy a bit product so did that as well <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<a href="screenshots/PMC-King-Corn-45km-New-Farmer-Vehicles.jpg" target="_blank"><img src="screenshots/thumbs/PMC-King-Corn-45km-New-Farmer-Vehicles.jpg" class="terrainimg" loading="lazy" alt="Farming Simulator 22 Terrain - PMC King Corn 45km New Farmer Vehicles"></a>

<p>
2022-02-08T12:40:31Z Done. Products purchased to the savegame and tested that vehicle shop sell/repair trigger works, it does.
</p>

<p>
All done here. Time to copy these latest edits to PMC DevSurf computer for release compilation.
</p>

<p>
2022-02-08T21:20:00Z Decided to rename this terrain to "PMC King Corn 45km" <img src="../images/smileys/icon_biggrin.gif" alt="Smiley :D" loading="lazy">
</p>

<p>
2022-02-09T13:52:27Z Last editing day before release has begun! <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Today we go. Today is release day.
</p>

<p>
Plan is to rename this project properly and then finish of web page text. Then I'm sending preview copy to The Farm Sim Guy who will live stream a preview of this terrain and after the stream I will release it.
</p>

<p>
First thing to do is another set of backups, just in case I mess something up. Then renamed backup bat and fs22 mods dir sync bat files.
</p>

<p>
2022-02-09T13:59:04Z Terrain project directories and files renamed, including mass string replacement with powergrep4.
</p>

<p>
Changed version number to 0.1, then it was first in-game test, so first used the new (well, renamed) fs22 mods dir sync robocopy bat file.
</p>

<p>
2022-02-09T14:08:49Z In-game test complete, no errors.
</p>

<p>
2022-02-09T14:52:06Z Landscaping tool was not working for trees and plants, fixed it by copying mapUS storeItems.xml config lines for trees and plants into PMC King Corn 45km storeItems.xml file. Easy fix.
</p>

<p>
2022-02-09T15:00:37Z Ran backup bat file to sync latest project files into other PMC computers, its time to compile the release packet <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2022-02-09T23:06:00Z PMC King Corn 45km v0.1 has been released! <img src="../images/smileys/icon_biggrin.gif" alt="Smiley :D" loading="lazy">
</p>


	<h2>DensityMapHeightUpdater Error Begone</h2>

<p>
2022-12-09T17:49:00Z New editing day has started, edited modDesc.xml descVersion to 72.
</p>

<p>
2022-12-10T00:42:00Z I already fixed "Error: Trying to set DensityMapHeightUpdater collision map with invalid size" on <a href="pmc-redwhiteblue-10km.php">PMC RedWhiteBlue 10km</a> and <a href="pmc-korkscrew-40km.php">PMC Korkscrew 40km</a>, now its time to fix it on PMC King Corn 45km as well. Issue is infoLayer_tipCollisionGenerated should not be 32768 pixel resolution but only 16384, heh.
</p>

<p>
First took backup of the existing terrain project, copied the 7-zip archive safety to three other HDDs. Then graphicsmagick generated new infoLayer images 32k and that one tip-thing 16k, deleted the old GRLEs and edited I3D file.
</p>

<p>
Then started GE v9.0.2 which screamed update to v9.0.3 hoh, loaded PMC_King_Corn_45km.i3d and immediately hit save, which again took forever...
</p>

<pre>
Scenefile 'E:/Farming.Simulator.22.Editing/PMC_King_Corn_45km/maps/PMC_King_Corn_45km/PMC_King_Corn_45km.i3d' saved in 831570.837178 ms at Sat Dec 10 01:06:54 2022.
</pre>

<p>
Uuh. Then edited PMC_King_Corn_45km.i3d back from PNG to GRLE and changed modDesc to v0.1.1 before compiling new testing version.
</p>

<p>
2022-12-10T01:20:00Z Testing done, v0.1.1 got no more DensityMapHeightUpdater error <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
2022-12-10T03:56:00Z Started to upload PMC_King_Corn_45km_v0.1.1.7z for PMC Tactical forum users testing and playing.
</p>


	<h2>2022-12-18 Utility Pole Wires And Bug Hunt</h2>

<p>
2022-12-18T01:01:00Z New editing day has started, todays goal is to add wires to utility poles which means re-creating the poles and then add wires to them.
</p>

<p>
First took backup of the terrain project dir, just in case there will be any issues while editing, backup 7-zip archive got copied to three different HDDs and one other computer for safety.
</p>

<p>
Started GE v9.0.3, loaded terrain project up, ran large terrain script, then started to import PMC_Helpers which is fast but after which GE goes to (Not Responding) mode for a very very long time.
</p>

<p>
2022-12-18T01:05:00Z While GE was processing whatever crap its doing, I'm going to grab a days first meal ...
</p>

<p>
2022-12-18T01:30:00Z Feeding time is over, back to editing. GE had resolved its issues by now, nice.
</p>

<p>
When I opened PMC_Helpers/Splines/ tranformgroup I was shocked to see how many splines there are, this re-creating poles with wires will take a long time as I got this many splines to do and its a huge 45km size terrain <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
Imported the new non flashing wire.i3d object, then imported utility pole object which has those three transformgroups where wires attach. Set them up to right transformgroups and added their IDs to EasyFence.lua script. Okay we are ready to begin re-creating some telephone / utility pole lines <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Was wondering how do I keep track which spline lines have been done or not, of course its easy to see if there are poles in the spline but still it would be nicer to have the actual splines in transformgroup be handled in some systematical way where no checking of existing poles is necessary, hmm hmm. So decided to create temporary jail-cell transformgroup for the done splines.
</p>

<p>
2022-12-18T01:50:00Z First utility pole line with wires created and stored into fresh transformgroup, uuh it took a while to get that done as the spline was SO long. My estimate of this will take a while might have been a slightly optimistic, this will take hours <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
When creating the second line I realized that it could be tricky to RMB-WASD flying along the line that I don't mistakenly start flying along the first line, err difficult to explain. But if I want to be sure which line I'm following I'd have to select the pole root transformgroup and that causes slight performance issue with GE v9.0.3, nothing too bad but when wires are added then it gets real bad.
</p>

<p>
Why am I RMB-WASD flying along a placed utility pole line? Well to make sure that on crossing roads the pole is not ON the road, also if there are any forests or tree lines, we don't want to end up really deep into the forest although usually that is not an issue as the spline does avoid forests. Its just an good idea to make sure the objects got created properly.
</p>

<p>
Also after the fly around check I'll align all the objects to ground again, they are supposedly aligned to ground in the first place, but don't ask me how, sometimes they still "align better" when you use the align to ground LUA script.
</p>

<p>
Actually nevermind about the difficulties following created utility pole lines, its easy to spot the just created objects as those are the ones WITHOUT wires <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
2022-12-18T03:14:00Z Finished re-creating utility poles with wires, uuh took a while, but in the end after all... not actually as long as I feared. Feels great to have these fixed, now I get to attack the next bug on the list.
</p>

<p>
2022-12-18T03:28:00Z Created terrain edge block geometry border thing. Terrain size is 45056 meters and that divided to two is 22528 meters, used <a href="../19/terrain-edge-block.php">PMC Farming Terrain Edge Block Tutorial</a>.
</p>

<p>
Went through the bugs / issues list to find something else to fix, but hmm there was nothing "small" and easy to fix, was again hard to choose what issue to attack next. One issue was "small fields are missing" which would require heightmap PNG set to zero meters elevations for easy field definition editing, hmm so exit and reload of GE which takes ages, but guess its gotta be done.
</p>

<p>
2022-12-18T03:36:00Z Exported PMC_Helpers and then deleted it. Saved project and exited GE.
</p>

<p>
Took backup from heightmap PNG image, opened it in GIMP, set to RGB 0,0,0 flat zero meters and saved. Then started GE and loaded terrain project back up. Imported PMC_Helpers (for top down camera) and for some bizarre reason this did not take long time, no idea why, it just did earlier today on first start, heh odd <img src="../images/smileys/icon_confused.gif" alt="Smiley :?" loading="lazy">
</p>

<p>
For some odd reason field definitions were oddly colored, they were not blue, they had different colors, huh what never seen that before? <img src="../images/smileys/icon_confused.gif" alt="Smiley :?" loading="lazy">
</p>

<a href="screenshots/PMC-King-Corn-45km-2022-12-18T0347.jpg" target="_blank"><img src="screenshots/thumbs/PMC-King-Corn-45km-2022-12-18T0347.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a> 

<p>
Oh well, time to add some fields.
</p>

<p>
2022-12-18T04:10:00Z Exported temporary deleteme-fields i3d file for "saving" the fields, I don't want to save the whole 45km terrain project with 32768 pixel resolution infolayer files heh. Been adding several fields now, not copy pasting small field everywhere but just doing the old school style one by one, mostly single shapes but where its necessary I've added multiple corner pieces as well. Slow going, in big picture you could hardly tell that new fields were added yet, its only been like less than 10 new fields maybe.
</p>

<p>
I was fixing the bug / issue of <i>"king corn 45km small fields are missing"</i>, but haven't actually added any small fields <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
2022-12-18T04:52:00Z Finished adding field definitions, for now. Pretty good result, more fields, more corner pieces.
</p>

<p>
Unpacked heightmap PNG original backup file to restore elevations. Okay its again time to do FS22 in-game test to see if I messed up anything that needs immediate correction.
</p>

<p>
But while updating modDesc.xml config file I added required mods dependencies lines for TrailerParkFarms (TPF) vehicle sheds, then changed version to v0.1.2, updated readme.txt and compilation bat files.
</p>

<p>
2022-12-18T05:06:00Z Compiled new PMC_King_Corn_45km_v0.1.2.7z testing version.
</p>

<p>
2022-12-18T05:36:00Z FS22 in-game testing complete, and we got bad news. For some reason this terrain now screams for following error:
</p>

<pre>
Available mod: (Hash: b7efedce205a332582d0568091a1a004) (Version: 0.1.1.0) PMC_King_Corn_45km
2022-12-18 05:25 Error: Blocked area map is wrong size for terrain (32768 x 32768) vs (4096 x 4096)

Available mod: (Hash: a6424a1d86da1932df676da678db73e1) (Version: 0.1.2.0) PMC_King_Corn_45km
2022-12-18 05:13 Error: Blocked area map is wrong size for terrain (32768 x 32768) vs (4096 x 4096)
</pre>

<p>
I also added v0.1.1 as reference point there, this error is on that version as well, I did test before releasing v0.1.1 to PMC Tactical forum testing and I got no error... I don't know why there is error now on the release packet. So started GE, loaded terrain project up and ran script -> setup large terrains and map -> create ground collision map, which took a long time to process. While GE was chewing on the collisions, I already changed moddesc version to 0.1.3 and updated rest of the compile files.
</p>

<p>
Running that script took so long I was bored to DEATH.
</p>

<p>
2022-12-18T06:20:00Z Its my lunch break, I'll leave piece of shit GE processing on the background <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
2022-12-18T06:40:00Z Feeding time is over, lets get back to GE. During feeding collision map generation script finished so I hit CTRL-S to save, this saving did not take too long.
</p>

<p>
I left GE running when I compiled v0.1.3 for in-game test, just in case there is still issues and need to do something in GE. Although... dunno what, if GDM / GRLE stuff is broken then those need to be edited in grleConverter PNG format.
</p>

<p>
2022-12-18T06:42:00Z Compiled PMC_King_Corn_45km_v0.1.3.7z and switched to Gaming computer to test it out.
</p>

<p>
2022-12-18T06:51:00Z Negative, still the same error, it was not the ground collision map.
</p>

<pre>
Available mod: (Hash: d01da98cdb02d3bdaac549329d06fb78) (Version: 0.1.3.0) PMC_King_Corn_45km
2022-12-18 06:46 Error: Blocked area map is wrong size for terrain (32768 x 32768) vs (4096 x 4096)
</pre>

<p>
Exited GE as we need to start digging into GDM and GRLE images.
</p>

<p>
Spent a lot of time debugging what resolution GDM and GRLE images are, GDM are 16384 and GRLE are 32768 except infoLayer_tipCollisionGenerated.grle is 16384 res.
</p>

<p>
So I just proceeded to re-create infoLayer images and run them through GE save conversion to GRLE again, I doubt this changes anything but lets give it a try. On the next FS22 in-game test I'll try the official v0.1 release that what errors does that give with FS22 v1.8.2 engine version.
</p>

<p>
2022-12-18T07:54:00Z Compiled PMC_King_Corn_45km_v0.1.4.7z for testing. I don't have high hopes for this, but gotta give it a try...
</p>

<p>
Tested and no change, still the same error. Then tested v0.1 which is the first official release and current stable version... it does not give this blocked area map error, but the same old error I fixed already several days ago by adjusting size of the infoLayer images.
</p>

<p>
Alright I'm going to take a quick frustration break to watch two tv show episodes, then I'll continue editing <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
2022-12-18T10:18:00Z TV watching is over, back to editing. Got back several minutes ago, did some background research before broke back into dev diary. Next I'm going to try putting infoLayer all 32768 except placementCollisionGenerated to 4096, this should give the same densitymap error I had before... or something, I'm so confused with all these shit resolutions that takes a moment to write all variations down etc.
</p>

<p>
Annoying that have to go through the infoLayer black image creation, GE loading and saving which takes forever, but yeah well.
</p>

<p>
So once again used _run_graphicsmagick_FS22_infoLayer_create_black_32768.bat which now sets placementCollisionGenerated to 4096 res.
</p>

<p>
2022-12-18T10:51:00Z All done, changed modDesc version to v0.1.5 and updated readme and compilation files.
</p>

<p>
2022-12-18T11:03:00Z Yeah buddy! We have a winner and its called v0.1.5 <img src="../images/smileys/icon_biggrin.gif" alt="Smiley :D" loading="lazy">
</p>

<p>
Tested: created new savegame, saved it, restarted FS22, reloaded savegame, no errors no warnings <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Awesome.
</p>

<p>
So the fix here was to put placementCollisionGenerated to 4096 res and tipCollisionGenerated to 16384 res. That gives completely error and warning free terrain.
</p>

<p>
Have to say that this was quite a bit of confusion, few days ago fixed densitymap error by adjusting infoLayer resolutions against what they were back in february 2022. I cant be sure, cant even remember, but it would not surprise me of the stuff worked error free back then and now giants changed something in the engine and I had to do this fix. But maybe it was never working and I just somehow didn't see the error... that sounds crazy, but yeah... anyways this is now, there is no error anymore so why dwell on what-was scenarios <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
2022-12-18T11:15:00Z Started to upload PMC_King_Corn_45km_v0.1.5.7z for PMC Tactical forum testing <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>


	<h2>Start From Zero Check</h2>

<p>
2023-01-02T04:45:00Z Launched PMC King Corn 45km v0.1.5 farm-manager savegame.
</p>

<p>
First thing I noticed that in farm-manager game-mode new farmer vehicles are still present, so this has not been fixed in v0.1.5 ouch.
</p>

<p>
Farmland image is decent, smallest area was farm yard farmland 3 which costs 19.7k. Cheapest actual field farmland was farmland 33 which is 8ha and costs 76.3k which is nothing really, not in terrain of this size.
</p>

<p>
Land buy areas result is: EXCELLENT <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Grass fields count: 5 and go from smallish to medium to large.
</p>

<p>
Contracts in this savegame start were oddly many plowing ones. Highest paying was plowing F39 711.5ha for 1.643m with estimated time 94hrs 45min haha. Cheapest contract plowing F09 10.5ha for 24.4k with estimated time 1hrs 20min. Harvest contracts were few mostly for fields over 100ha which means crazy big with ETAs beginning from 9hrs.
</p>

<p>
However that movie duration F09 plowing contract is doable, its hard to steer plow tractor manually for one and a half hours, but... it is doable considering this is The Largest Terrain In Farming Simulator History.
</p>

<p>
Just wondering if creating new savegames randomizes these contracts a bit, or are they more or less the same every time, that can this result be generalized on all starts.
</p>

<p>
2023-01-02T05:01:00Z This test result was: SUCCESS! <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2023-01-03T19:06:00Z New editing day has started, not really, just renaming some Source/ dir GIMP XCF design doc files and graphicsmagick bat files. Renamed two XCF images from test to PMC_King_Corn_45km file names, plus one L3DT exported PNG file. Replaced test strings in the bat files using powergrep4.
</p>


	<h2>2023-01-07 Editing For Zero</h2>

<p>
2023-01-07T20:23:00Z New editing day has started, todays goal is to add full Start From Zero compatibility or lets say confirm its there, add more if not all field definitions single shapes and once all that is done begin recording autodrive network routes. Also overall plan is to quickly fix any text based bug / issue reports I can for example proper names for all selling points.
</p>

<p>
Day begins with backup, I created new _run_backup_Design_Doc_PMC_King_Corn_45km.bat bat file to backup design doc directory even though I am not planning on editing design doc, just want to get a backup to archives from it now. So ran that bat first, then ran _run_backup_PMC_King_Corn_45km.bat which took backup of the terrain project dir itself. Both of these 7-zip archives were copied to three different HDDs and also to PMC Linux computer. Never forget backups.
</p>

<p>
Decided to begin todays editing with possibly the hardest task, creating single shape field definitions to all fields. If I manage to get this done, then rest will be a childs play in comparison.
</p>

<p>
It was good to see my previous _backup_PMC_King_Corn_45km_dem_0meters.7z heightmap PNG backup file for 0m elevations which is perfect for greating field definitions on flat surface, so I unpacked that, now we have a "FLAT MAP" <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Started GE v9.0.3 and loaded PMC Kign Corn 45km terrain project, ran script setup for large terrains and toggle render field areas. Alright we are ready to begin creating field definitions. Err no wait, have to import PMC_Helpers to get 2D top-down camera, that will take a while with FS22 GE crap delays.
</p>

<p>
2023-01-07T20:37:00Z Uh what, it loaded already, took no time, it just normally imported without delays, that is odd? Well I'm not complaining <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Okay first batch of copy-pasted single shape field definitions done.
</p>

<a href="screenshots/PMC-King-Corn-45km-2023-01-07T2043.jpg" target="_blank"><img src="screenshots/thumbs/PMC-King-Corn-45km-2023-01-07T2043.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
Now we continue doing rest of them, uuh this is going to be fun (not) heh.
</p>

<p>
2023-01-07T20:57:00Z GE v9.0.3 crashed <img src="../images/smileys/icon_surprised.gif" alt="Smiley :o" loading="lazy">
</p>

<p>
What the fuck was that, I mean... REALLY? It just crashed when I LMB clicked field definition? <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
I lost a lot of work, in the grand scheme of things not a lot, but yeah crashes are completely unacceptable! <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
This sucks! <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
Okay, lets begin again <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
But this time I'll export field definitions transformgroup to an I3D file after every row of new field definitions are created. What really scares me is I did nothing special, just copy-pasted (duplicate CTRL-D using my shortcut "1" key) and then LMB clicked the actual field definition transformgroup for last field done, if that simply crashes... oh boy.
</p>

<p>
2023-01-07T21:12:00Z First (northern most, from NW corner) row re-created, not yet there where it crashed the last time.
</p>

<p>
2023-01-07T21:27:00Z Unbelievable, another crash <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<a href="screenshots/PMC-King-Corn-45km-2023-01-07T2127.jpg" target="_blank"><img src="screenshots/thumbs/PMC-King-Corn-45km-2023-01-07T2127.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
Not exactly crash, but GE failed to export the fields transformgroup. This is not good, not good at all <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
Saved GE and exited, worked OK, now lets restart and load the project back up, is it still working or not. Actually I'm going to use GE v9.0.2 which might work better, at least it never crashed on me before.
</p>

<p>
Loaded still with same GE v9.0.3, project seems to work fine, I'll continue creating field definitions and if / when it crashes the next time, I'll switch to GE v9.0.2 then.
</p>

<p>
2023-01-07T21:36:00Z Hmm reached end of second row, I think now we are somewhere near where the first crash went down, OK we continue.
</p>

<p>
2023-01-07T21:45:00Z Another error dialog when trying to export Fields transfromgroup, alright saving the whole project then loading it back up with GE v9.0.2 (nine point zero point TWO). Lets see if that crap tool version would work any better.
</p>

<p>
2023-01-07T21:55:00Z Had a problem configuring GE v9.0.2 shortcut hotkeys, could not get them to work so now have to use the piece of shit CTRL-D duplicate and CTRL-B interactive placement which is killing my pinky CTRL pressing finger on long run working / typing <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
But we continue, one row at the time <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
Some of these fields are a bit smaller than others, then have to shrink corner piece in the single shape I'm using as copy-paste template.
</p>

<a href="screenshots/PMC-King-Corn-45km-2023-01-07T2208.jpg" target="_blank"><img src="screenshots/thumbs/PMC-King-Corn-45km-2023-01-07T2208.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
2023-01-07T22:14:00Z Finished another row, so far no crashes with v9.0.2, crossing fingers even that pinky finger which presses CTRL and starts to get pretty sore already, ouch.
</p>

<p>
2023-01-07T22:33:00Z Another row, another field export I3D.
</p>

<p>
2023-01-07T22:45:00Z Row completed in W end, fields I3D exported. This is about the center height of the terrain now, about half way done.
</p>

<p>
2023-01-07T22:52:00Z Reached E end of the row, exporting I3D again.
</p>

<p>
2023-01-07T22:57:00Z Aand W end reached, this goes pretty well now, no crashed and pinky copy-paste CTRL finger while hurting, I can take the pain so far...
</p>

<p>
2023-01-07T23:08:00Z Reached E end and was pleasantly surprised when scrolled 2D top-down view down, we have reached SE corner of the terrain, yes! One more row to go and then we are done <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
<b>2023-01-07T23:13:00Z All field definition single shapes done! Whohoo!</b> <img src="../images/smileys/icon_biggrin.gif" alt="Smiley :D" loading="lazy">
</p>

<p>
Ran the script to get field sizes, there are total of 1095 fields now. Surprisingly low number but guess these fields in average are so much larger that it balances out the massive 45km terrain size. For example PMC Undefined Farms 20km has 1888 fields and its less than half the size of this terrain <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Then deleted PMC_Helpers transformgroup and saved terrain project, need to restore the real heightmap PNG before continuing next bug fix.
</p>

<p>
Bulk of the single shape field definitions I copy-pasted around are 71.163 hectares of field size.
</p>

<p>
Restored original heightmap PNG with elevations, started GE v9.0.2 and loaded terrain project up. Imported PMC_Helpers so get to work with selling point placeable models and now GE went into the 10+ min (Not Responding) mode where it does some processing on the background, no idea why.
</p>

<p>
While GE was doing whoever knows what, I went to created proper selling point names for all 12 of them.
</p>

<p>
New farmer vehicles appear in farm-manager and start from scratch game-modes, fixed that with vehicles.xml edit to add farmId="1" defaultFarmProperty="true" properties (farmid was already there but, they go together).
</p>

<p>
2023-01-07T23:36:00Z Don't have anymore small text based editing to do, now need to wait until GE finished processing.
</p>

<p>
Moved selling point 2 to south central region. Moved 9 to eastern region. Moved 10 to south east region. Updated new coordinates to placeables.xml config file.
</p>

<p>
Spotted that selling point 12 was in a tree line, moved it across the road.
</p>

<p>
Once all that was done exported PMC_helpers out again with these new edits, then saved project and shutdown GE, we are done here for now, its time to fs22 in-game test this beast.
</p>

<p>
Changed modDesc.xml to v0.1.6, edited readme.txt and release compilation bat files.
</p>

<p>
2023-01-08T00:02:00Z Compiled PMC_King_Corn_45km_v0.1.6.7z for testing.
</p>

<p>
Tested in FS22, no errors, field definitions actually looked pretty decent in mapview, unfortunately I messed up the selling point coordinates and now those locations is very north heavy.
</p>

<p>
2023-01-08T02:43:00Z Loaded terrain up in GE v9.0.2, imported PMC_Helpers which again took forever. Need to fix those selling point coordinates, they cant all be slammed into the northern region. I would like to paint selling point locations in GIMP design doc, but its a huge ordeal to go through all that tool pipeline to get new images show up in GE. Basically I do want to make nice fixes, but I don't want to end up messing up the whole terrain design for minimal gain (sure we have backup but still).
</p>

<p>
Plan is now to move at least three selling points from the north to SE region, if I just can figure out the GE coords heh.
</p>

<p>
2023-01-08T02:57:00Z Finally GE had gotten through the (Not Responding) process crap, lets get to work.
</p>

<p>
The thing is that I don't remember all the locations in PMC King Corn 45km, in GE I can easily get disoriented that north looks like south and east looks like west, which is what happened earlier with selling point 2 for example, I tried to place it on SE region but it appeared in NW region heh. But now I have oriented myself correctly, I checked the train tracks which are coming from NE and go diagonally to S-SW, its now fairly easy to get your bearings.
</p>

<p>
Placed selling point 2, 9, 10 and 12 into about SE region. Exported and deleted PMC_helpers, then saved project and exited. Its new in-game test.
</p>

<p>
Changed modDesc.xml to v0.1.7, edited readme and compile files.
</p>

<p>
2023-01-08T03:09:00Z Compiled PMC_King_Corn_45km_v0.1.7.7z for testing, here we go again.
</p>

<p>
Test shows that selling points are now evenly distributed around the terrain, literally, in the center by the dealership we have selling point 1 (didn't check its proper name) and all the others are almost like in circle shape 50% way to the edges dunno how to explain it, its like a ring around the center of the terrain, which means that ANY other selling point besides the first and you are looking for huge distance to drive, there are no groups of selling points in the center area. Not that its anykind of requirement, selling points can be where ever because fields and farm yards are where ever, but just for someone who measures from the dealership, yup... every other than first selling point and its probably like 15-20km driving distance, one way <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
But that is fine for me, this is not a claustrophobic BRITISH MAPZ heh.
</p>


	<h2>2023-01-09 Narrow Roads Just Got PHAT</h2>

<p>
2023-01-09T00:28:00Z New editing day has started, todays goal is to increase asphalt and dirt road width and then start recording autodrive network waypoint routes. Day starts by taking backup of the terrain project, no need to take backup of design doc as I just did it (yesterday or day before?) and there has been no edits.
</p>

<p>
First need to load design doc in GIMP, then enabled roads asphalt layer only, did select by color, grow 2 pixels and then foreground fill with asphalt color. Then selected layer railroads, select by color, then selected roads asphalt and hit delete, same for roads dirt, now there are no overlap on the ground detail textures for these three.
</p>

<p>
Exported roads_asphalt.png and roads_dirt.png images. Saved XCF image and closed it. Then ran _run_design_doc_to_density_weight_images_all_in_one_2022-01-28.bat to graphicsmagick process all the PNG images into GE readable format.
</p>

<p>
I am hoping this "simple" edit wont cause any havoc, I need to bring in fruit_density.png into GE because along with ground detail textures the grass has to be removed from roads which are now wider, so fruit_density is required, but for example cultivator_density is not needed because there were no changes to it.
</p>

<p>
While graphicsmagick took its time processing, I already edited PMC_King_Corn_45km.i3d file to replace fruit_density.gdm with PNG file extension. Before copying new weight and density images to terrain project dir I ran _run_graphicsmagick_resize_cultivator-fruit_density_to_16384.bat file which sounds silly, but the design doc is 10240 x 10240 pixel resolution and density on terrain project dir are 16384 pixel resolution, so yup.
</p>

<p>
Started GE v9.0.2 (yeah, I dislike v9.0.3 now with it crashing and LSD colored field definitions), loaded project up and ran setup large terrain script. Everything came out OK in GE... except roads are now way too fat, these start to remind me of the massive PMC Cereal Region 32km "50m wide" roads heh, at least dirt road is way way too fat. Also spotted that dirt road creeps into asphalt road so I forgot to cut dirt roads same as I did with train track selection.
</p>

<p>
Close GE without saving, need to go back to GIMP and enlarge the selections only with 1 pixel, well I mean now I have to re-create them from scratch. Back in GIMP had to rename the "unnamed NUMBER" paths to railroad, asphalt and dirt so I recognize which is which. Then deleted roads asphalt painting, selected all the paths, selected RGB 150,150,150 and did stroke path using 6 pixels.
</p>

<p>
Then selected roads dirt layer, next I'm going to do dirt roads with ... 4 pixels I think heh. Selected RGB 178,164,142 color, then went through each and every dirt (road) path and did stroke path with 4 pixels, this took a while as there are thirty dirt roads.
</p>

<p>
Once all that was done I cut the railroad down to asphalt and dirt roads and asphalt roads down to dirt roads, get it? Good <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Then exported road PNGs again, saved XCF and close it, then ran graphicsmagick bat times two, copied PNGs to terrain project dir and launched GE.
</p>

<p>
2023-01-09T01:34:00Z Terrain loaded up, setup large terrain script ran and results are; awesome! both asphalt and dirt roads now look "natural" regarding width, excellent <img src="../images/smileys/icon_biggrin.gif" alt="Smiley :D" loading="lazy">
</p>

<p>
There was only one problem, all farm yards lost their "driveway" short dirt road. Hmm hmm. I recall doing that manually because using paths to that would have been too much work for no gain, hmm but guess thinking about it now, I would rather paint the paths than go paint driveways by hand all over again. Lesson learned.
</p>

<p>
But for now I'll just save the project and I want to see how things look in FS22. Its one thing to see this in GE, its completely another matter how it works in practical vehicle driving conditions, like recording autodrive networks using semi-truck and grain trailer.
</p>

<p>
2023-01-09T01:38:00Z I'm starving, while GE is saving going to grab some lunch ...
</p>

<p>
2023-01-09T02:05:00Z Feeding time is over, back to GE to finish this terrain edit. Project was saved so exited.
</p>

<p>
Edited PMC_King_Corn_45km.i3d to change fruit_density.png back to .GDM again, then deleted _density.png images from data\ dir. Changed modDesc.xml to v0.1.8, edited readme.txt and release compilation bat files to new version.
</p>

<p>
2023-01-09T02:08:00Z Compiled PMC_King_Corn_45km_v0.1.8.7z for testing, time to switch to PMC Gaming computer with hopes that this works OK.
</p>

<p>
2023-02-01T21:47:00Z New editing day has started, added maps_spraytypes.xml, compiled v0.1.9, kthnxby.
</p>

<p>
2023-02-22T18:07:00Z New editing day has started, now going to GIMP paint PDA mapview overview.dds image for the outside terrain area.
</p>

<p>
2023-02-22T18:40:00Z Finished GIMP painting, it was okay alone but doesn't quite match the actual field sizes, new outside terrain fields are twice the size than actual fields, its easy to see from ESC mapview, but oh well, dunno, maybe I'll edit it a bit more later, add those field dividers there. But for now, its more than good enough.
</p>

<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("/var/www/include/footer-start.php"); ?>
<p>
<a href="pmc-terrains.php" class="button">PMC Terrains FS22</a>
<a href="changelog-pmc-king-corn-45km.php" class="button">Changelog PMC King Corn 45km</a>
<a href="pmc-king-corn-45km.php" class="button">PMC King Corn 45km</a>
<a href="../index.php" class="button">PMC Farming Simulator root</a><br>
<i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i>
</p>
<?php include("/var/www/include/footer-end.php"); ?>
<?php include("/var/www/include/support.php"); ?>
<?php include("/var/www/include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
