<!DOCTYPE html>
<html lang="en">
<head>
<title>Developer Diary PMC Montana Shelby 8km - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Developer Diary PMC Montana Shelby 8km - PMC Farming">
<META name="keywords" content="Developer, Diary, Montana, Shelby, Welker, Terrain, PMC, Farming, FS19">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<!-- google ads -->
<?php include("../include/google-ads.php"); ?>
<h1><b>Developer Diary PMC Montana Shelby 8km - PMC Farming</b></h1>
</header>

<section>
	<h2>Developer Diary "FS19 Welker Farms Map"</h2>

<p>
<a href="pmc-montana-shelby-8km.php">PMC Montana Shelby 8km</a> developer diary was started in late 2020 and no older records exist other than <a href="changelog-pmc-montana-shelby-8km.php">changelogs</a>. This terrain was initially created in early 2019. Just a little background reference <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
<b>2020-08-27T11:14:00Z</b> Took backups from PMC Montana Shelby 8km terrain, its object placement begins now.
</p>

<p>
First issue came with the residential buildings at welkers yard, there was not really good matches in giants data dir. Same goes with the vehicle sheds but this was known long time ago already.
</p>

<p>
Google/maps shows 9 small farm bin silos in their yards SW corner, however the giants siloExtension models were so big I only could fit 7.
</p>

<p>
2020-08-27 PMC Montana Shelby 8km, welkers farm yard, its a start with giants default objects, just a ballbark you know.
</p>

<a href="screenshots/PMC-Montana-Shelby-8km-2020-08-27T1300.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Montana-Shelby-8km-2020-08-27T1300.jpg" alt="PMC Montana Shelby 8km terrain" loading="lazy" style="padding: 3px 15px;width:auto;height:auto;"></a>

<p>
2020-08-27T13:16:00Z After the initial editing, mostly bringing real world data heightmap in and created welkers yard I took a backup.
</p>

<p>
Welker bin site <a href="https://www.google.com/maps/@48.5396236,-111.805868,260m/data=!3m1!1e3" target="_blank">google/maps</a>.
</p>

<p>
North south row has 8 bin silos. Middle has 3 bins W-E direction then two smaller bins N-S direction. Bottom right has four bins in W-E direction and top of them two smaller bins again W-E direction at the right edge. Left bottom is what looks like 6 meridian white fertilize/seed bins but not sure as google/maps image is quite bad.
</p>

<p>
All this needs verification from their youtube videos, they have three new westeel bins and some meridian bins as well from which they have shot a lot of footage, will be excellent reference point.
</p>

<p>
Farm bin silo site in north <a href="https://www.google.com/maps/@48.5545517,-111.8074671,130m/data=!3m1!1e3" target="_blank">google/maps</a>.
</p>

<p>
Again 8 bin silos in N-S direction.
</p>

<p>
Location-08 is missing gsm transmitter tower <a href="https://www.google.com/maps/@48.51875,-111.8341751,184m/data=!3m1!1e3" target="_blank">google/maps</a>.
</p>

<a href="screenshots/PMC-Montana-Shelby-8km-2020-08-27T1443.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Montana-Shelby-8km-2020-08-27T1443.jpg" alt="PMC Montana Shelby 8km terrain" loading="lazy" style="padding: 3px 15px;width:auto;height:auto;"></a>

<p>
Location-10 is missing gsm transmitter tower <a href="https://www.google.com/maps/@48.5160038,-111.8330598,130m/data=!3m1!1e3" target="_blank">google/maps</a>.
</p>

<p>
Location-11 is missing huge white water tank <a href="https://www.google.com/maps/@48.5132304,-111.835714,309m/data=!3m1!1e3" target="_blank">google/maps</a>.
</p>

<p>
Object placement in general was frustrating because giants default objects did not match almost at all what satellite imagery shows, I had to do a lot of compromises placing these buildings.
</p>

<p>
Location-30 was some odd box in middle of a field, I assume it was some electric box, some very small shack type structure, however this one had no hole painted to it in cultivator_density, uh oh, need to go back and fix that.
</p>

<p>
2020-08-27T17:11:00Z Basic buildings locations object placement with many placeholder objects is complete! Unbelievable it only took hours!? <img src="../images/smileys/icon_surprised.gif" alt="Smiley :o" loading="lazy">
</p>

<a href="screenshots/PMC-Montana-Shelby-8km-2020-08-27T1710.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Montana-Shelby-8km-2020-08-27T1710.jpg" alt="PMC Montana Shelby 8km terrain" loading="lazy" style="padding: 3px 15px;width:auto;height:auto;"></a>

<p>
2020-08-27T17:18:00Z Started to draw design doc for utility poles.
</p>

<p>
Was surprised to see utility poles on the welker farm yard road 98.8 meters apart, thats quite far.
</p>

<p>
2020-08-27T18:03:00Z Already creating the splines, almost done.
</p>

<p>
2020-08-27T18:10:00Z Done creating utility pole splines.
</p>

<a href="screenshots/PMC-Montana-Shelby-8km-2020-08-27T1813.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Montana-Shelby-8km-2020-08-27T1813.jpg" alt="PMC Montana Shelby 8km terrain" loading="lazy" style="padding: 3px 15px;width:auto;height:auto;"></a>

<p>
<b>2020-08-28T02:20:00Z</b> Utility poles placed with 100m separation.
</p>

<a href="screenshots/PMC-Montana-Shelby-8km-2020-08-28T0222.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Montana-Shelby-8km-2020-08-28T0222.jpg" alt="PMC Montana Shelby 8km terrain" loading="lazy" style="padding: 3px 15px;width:auto;height:auto;"></a>

<p>
2020-08-28T02:47:00Z First round of trees placed to welkers yard.
</p>

<a href="screenshots/PMC-Montana-Shelby-8km-2020-08-28T0247.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Montana-Shelby-8km-2020-08-28T0247.jpg" alt="PMC Montana Shelby 8km terrain" loading="lazy" style="padding: 3px 15px;width:auto;height:auto;"></a>

<p>
2020-08-28T03:43:00Z Trees placed, might need some further tweaking but all trees I could find from US NAIP are placed now.
</p>

<a href="screenshots/PMC-Montana-Shelby-8km-2020-08-28T0345.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Montana-Shelby-8km-2020-08-28T0345.jpg" alt="PMC Montana Shelby 8km terrain" loading="lazy" style="padding: 3px 15px;width:auto;height:auto;"></a>

<p>
I cannot believe objects got done so quickly, I was fully expecting a week+ of pure torture but now it was like one day, basically one night. There is still a lot of tweaking to do and this terrain requires many custom or just new objects other than what giants data/ offers. But still feeling very good to have basic object placement done.
</p>

<p>
2020-08-28T06:57:00Z Punched holes for utility poles in cultivator_density image.
</p>

<p>
<b>2020-09-05T10:33:00Z</b> tipColInfoLayer.png reset to allow tipping everywhere.
</p>

<p>
2020-09-05T11:27:00Z Farmland image 3 errors fixed, added few more farmland areas too to cover fields more accurately (no huge land mass without fields to buy). Oh and seasonsMask got added in as well.
</p>

<p>
<b>2021-02-02T17:22:00Z</b> Started to go through montana shelby bugs list. BTW this is exactly two years after I started to learn about Farming Simulator 19 real world data terrains <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Several objects are on the fields where cultivator_density has not been punched a holes yet, so first I loaded source images in GIMP and exported cultivator_density and roads images. Then used graphicsmagick batch files to generate GE readable PNG images. Then took backups of the terrain project directory and mass replaced GDM/GRLE with PNG on I3D file.
</p>

<p>
Converted GDM/GRLE to PNG images and loaded it on GE, sure enough some of the object locations did not have cultivator_density holes punched in.
</p>

<p>
Punched in some holes in both GIMP and GE, then imported the GE saved GDM into GIMP again. Shuffle, I know.
</p>

<p>
Had one bug report about F149 but in GE terrain.i3d there was no field numbers, so added those using EditPadPro, was a bit of painful repetition for 150 fields but at least they are done now. In the future I need to find some automated way of replacing "Field" string with "Field001" etc sequential numbers, unfortunately cant think of a regex way of doing it, might have to write small C++ tool to do it. In fact I could create terrain.i3d processing cmd line tool like auto changing GDM/GRLE to PNG etc heh, oh well thats for another time, lets stick to task at hand <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Adjusted F149 field definition which overlapped a building. GIMP created utility pole holes for F91. Then moved utility poles into their designated holes (ok, admit it, that sounded so <i>dirty</i>).
</p>

<p>
2021-02-02T19:44:00Z Getting close to clear all current bugs/issues on the list, doing good progress.
</p>

<p>
GIMP painted roads to fix too narrow road NE of F117, it was barely fitting a pickup truck, it was done in GIMP using 4 pixel pencil, I redid it now with 8 pixel pencil, hopefully its wide enough. Well it was, too wide actually it merged with cultivator_density on some parts heh, had to remake it using 6 pixel pencil, then it fit there nicely.
</p>

<p>
Write note down: 4096 weight image resolution and 4 pixel pencil is too small for 8.1 kilometer terrain size. Looks like 6px is the good average size, needs more testing.
</p>

<p>
2021-02-02T21:24:00Z Finally got around to fix that one quansat location which had trees on the road, looks like the small tree patch was placed slightly offset, no idea why.
</p>

<p>
<b>2021-02-03T20:49:00Z</b> Dealership vehicle shop customize/repair/sell trigger added, also mapview jump-to icon for dealership put you inside the 3d model so that got fixed. Looking around what to do, next would be the game-play friendly functionality for farm bin silos, but that is almost like a design decision hmm...
</p>

<p>
<b>2021-02-05T15:11:00Z</b> Time to create New Farmer placeable building setup. Took a while but got all farm bin silos and CBJ buildings placed on defaultItems.xml file.
</p>

<p>
2021-02-05T21:49:00Z Finished making some testRunner fixes, there is still issue with residential house i3d's referencing textures outside of the terrain directory which apparently is not allowed according to giants standards.
</p>

<p>
<b>2021-02-13T23:25:00Z</b> Backupped terrain project dir and started working to make placeables be in place across New Farmer, Farm Manager and Start From Scratch game-modes.
</p>

<p>
<b>2021-02-14T02:11:00Z</b> Farmland image fixed from one dupe ID, bin site added to its own farmland and default farm property.
</p>

<a href="screenshots/PMC-Montana-Shelby-8km-2021-02-14T0209.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Montana-Shelby-8km-2021-02-14T0209.jpg" alt="PMC Montana Shelby 8km terrain" loading="lazy" style="padding: 3px 15px;width:auto;height:auto;"></a>

<p>
2021-02-14T03:31:00Z Used courseplay go generate field work course to all fields. F146 needed headland disabled but then worked fine. For some odd reason F150 is not detected by courseplay, it works after you drive to the field and calculate field edge and save it.
</p>

<p>
Looking at F150 on GE there is nothing that jumps out as wrong. I created more corner pieces for it just to see if that would somehow help, it didn't.
</p>

<p>
<b>2021-02-15T05:42:00Z</b> Added first batch of utility pole wires using mapUS poles.
</p>

<a href="screenshots/PMC-Montana-Shelby-8km-2021-02-15T0521.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Montana-Shelby-8km-2021-02-15T0521.jpg" alt="PMC Montana Shelby 8km terrain" loading="lazy" style="padding: 3px 15px;width:auto;height:auto;"></a>

<p>
<b>2021-02-16T02:18:00Z</b> Did another set of utility pole wires next to welker farm yard.
</p>

<p>
2021-02-16T03:03:00Z Utility poles wire project complete, all poles have now some wires <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<a href="screenshots/PMC-Montana-Shelby-8km-2021-02-16T0301.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Montana-Shelby-8km-2021-02-16T0301.jpg" alt="PMC Montana Shelby 8km terrain" loading="lazy" style="padding: 3px 15px;width:auto;height:auto;"></a>

<p>
2021-02-16T03:51:00Z Finished adding required mods rand0msparks meridian bulk bins for fertilizer, lime and seeds. Unfortunately lime bin does not work, it outputs fertilizer. Not sure if I messed up something or is the bin buggy, it was probably me, need to figure that out.
</p>

<a href="screenshots/PMC-Montana-Shelby-8km-2021-02-16T0346.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Montana-Shelby-8km-2021-02-16T0346.jpg" alt="PMC Montana Shelby 8km terrain" loading="lazy" style="padding: 3px 15px;width:auto;height:auto;"></a>

<p>
<b>2021-02-24T18:18:00Z</b> Animal dealer added to SW corner in somewhat industrial looking area.
</p>

<p>
Sell point 1 moved next to a building where it might look a bit more natural. Deleted sell point 5 and 6, moved 4 to 5ths coordinates. Cleaned up some grass from the sell point dump grills too.
</p>

<p>
Big water tank <a href="https://www.google.com/maps/@48.5139447,-111.8341765,153m/data=!3m1!1e3" target="_blank">google/maps</a> show in <a href="https://youtu.be/QGpQ3aVk2Zs?t=93" target="_blank">this youtube video time code</a>. 6,819,135 liter (1.5 million gallon) capacity.
</p>

<p>
Cell towers <a href="https://youtu.be/QGpQ3aVk2Zs?t=245" target="_blank">youtube video time code</a>.
</p>

<p>
Added meridian fuel tank to welkers farm yard so players can refill diesel fuel for vehicles and tankers.
</p>

<p>
<b>2021-02-25T05:26:00Z</b> Took backup of the terrain project, then reset heightmap RGB 0,0,0 to make it flat. Then loaded project in GE and started to add more field definition corner pieces to make them mode detailed, ie complex shapes, better for contracts.
</p>

<p>
2021-02-25T06:16:00Z I hate doing field definitions, accurately, detailed <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<a href="screenshots/PMC-Montana-Shelby-8km-2021-02-25T0616.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Montana-Shelby-8km-2021-02-25T0616.jpg" alt="PMC Montana Shelby 8km terrain" loading="lazy" style="padding: 3px 15px;width:auto;height:auto;"></a>

<p>
2021-02-25T07:17:00Z More corner pieces, to make contract game-play much nicer.
</p>

<a href="screenshots/PMC-Montana-Shelby-8km-2021-02-25T0717.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Montana-Shelby-8km-2021-02-25T0717.jpg" alt="PMC Montana Shelby 8km terrain" loading="lazy" style="padding: 3px 15px;width:auto;height:auto;"></a>

<p>
2021-02-25T12:04:00Z Still adding corner pieces, this is getting so exhausting by now and only been at it for... well ok six and a half hours, straight (just had a lunch in between but that didn't take long).
</p>

<p>
I hate doing field definition corner pieces because they are painful to do, dumb and only used for contracts. However if you want to play contracts game-mode then it becomes really old fast if you have to do courseplay outlines for field definitions on pretty much every field.
</p>

<p>
I actually like doing contracts game-mode playing, its essential part of <a href="stories.php">Start From Zero</a> savegames.
</p>

<p>
This is pretty much the only reason I spend this many hours for such a tedious task.
</p>

<p>
2021-02-25T13:39:00Z Finished, finally! Uah man it sucks to do field definition corner pieces, argh!
</p>

<a href="screenshots/PMC-Montana-Shelby-8km-2021-02-25T1342.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Montana-Shelby-8km-2021-02-25T1342.jpg" alt="PMC Montana Shelby 8km terrain" loading="lazy" style="padding: 3px 15px;width:auto;height:auto;"></a>

<p>
Then restored original heightmap image from the backup and placed into terrain project dir.
</p>

<p>
And in-game fields in general now looks good, sure the field definitions look like jagged edges, but that is much better than single shapes.
</p>

<a href="screenshots/PMC-Montana-Shelby-8km-2021-02-25T1353.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Montana-Shelby-8km-2021-02-25T1353.jpg" alt="PMC Montana Shelby 8km terrain" loading="lazy" style="padding: 3px 15px;width:auto;height:auto;"></a>

<p>
<b>2021-02-26T05:40:00Z</b> Plan was to live stream painting farmlands in GIMP, but was so tired/bored/blank that couldn't get started with streaming, watched someone elses stream while did 10+ farmland RGB paintings.
</p>

<p>
Farmlands last ID channel used is 79, RGB 185, 0, 100
</p>

<p>
2021-02-26T09:49:00Z Back adding some finishing touches to field definition corner pieces. Uuh this is so stuuupid...
</p>

<p>
2021-02-26T11:32:00 Field definition corner pieces are done, I am not going to add them any more detail, if someone is not happy with them they can go play on some claustrobhobic BRITISH MAPZ instead <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<a href="screenshots/PMC-Montana-Shelby-8km-2021-02-26T1130.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Montana-Shelby-8km-2021-02-26T1130.jpg" alt="PMC Montana Shelby 8km terrain" loading="lazy" style="padding: 3px 15px;width:auto;height:auto;"></a>

<p>
2021-02-26T:16:04:00Z Finished almost 4 hours twitch/youtube live stream testing field definitions by doing contracts, all the fields I did contract worked very nicely.
</p>

<p>
<b>2021-02-27T15:28:00Z</b> Started to experiment with outside terrain.
</p>

<p>
Terra incognita coordinates for 16.3 km size montana shelby chunk:
</p>

<pre>
48.617931N 111.897812W, 48.617931N 111.669846W, 48.464727N 111.669846W, 48.464727N 111.897812W
</pre>

<p>
First in-game test:
</p>

<a href="screenshots/PMC-Montana-Shelby-8km-2021-02-27T1646.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Montana-Shelby-8km-2021-02-27T1646.jpg" alt="PMC Montana Shelby 8km terrain" loading="lazy" style="padding: 3px 15px;width:auto;height:auto;"></a>

<a href="screenshots/PMC-Montana-Shelby-8km-2021-02-27T1647.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Montana-Shelby-8km-2021-02-27T1647.jpg" alt="PMC Montana Shelby 8km terrain" loading="lazy" style="padding: 3px 15px;width:auto;height:auto;"></a>

<a href="screenshots/PMC-Montana-Shelby-8km-2021-02-27T1648.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Montana-Shelby-8km-2021-02-27T1648.jpg" alt="PMC Montana Shelby 8km terrain" loading="lazy" style="padding: 3px 15px;width:auto;height:auto;"></a>

<a href="screenshots/PMC-Montana-Shelby-8km-2021-02-27T1655.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Montana-Shelby-8km-2021-02-27T1655.jpg" alt="PMC Montana Shelby 8km terrain" loading="lazy" style="padding: 3px 15px;width:auto;height:auto;"></a>

<p>
It looks stupid as I'm using flat plane which is just underneath the lowest part of the terrain, so even though yes it is 16.3 kilometer plane underneath there, it just doesn't look right as its not the continuous real heightmap.
</p>

<p>
<b>2021-02-28T06:24:00Z</b> Started creating defaultVehicles.xml config for New Farmer game-mode <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Was conflicted about using <a href="https://www.farming-simulator.com/mod.php?mod_id=120575" target="_blank">Big Bud 450</a> and <a href="https://www.farming-simulator.com/mod.php?mod_id=130607" target="_blank">Big Brute</a> mods in defaultVehicles.xml New Farmer game-mode starter vehicles, I didn't want to do it... but this is "welker farms map" and it wouldn't be much without using big bud's.
</p>

<p>
There are several vehicles which we don't have a mod like that new international truck and case 8230 combines, these must be done using placeholders hoping that sometime in the future someone makes these vehicle mods.
</p>

<p>
Also as editing standpoint, it was painful to drive those vehicles and implements from shop to the welkers farm yard, I wish there was some editing method to just purchase vehicles and edit xml directly without breaking everything. Heck it would be awesome if we could do all of this by just using coordinates in defaultVehicles.xml but the components part goes over my head, no idea what those are.
</p>

<p>
Welker farms equipment tour <a href="https://www.youtube.com/watch?v=XicysWJUzf0" target="_blank">youtube Equipment Tour! - It's Finally Here!</a>.
</p>

<p>
2021-02-28T13:23:00Z Finished configuring new farmer game-mode defaultVehicles.xml, in-game test shows that if player does not load big bud 450 and big brute mods, they simply do not appear on new farmer and there will be no error in the log. FS19 just quietly fails, heh beautiful... not <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
2021-02-28T14:17:00Z Moved buildings Location-06 as hard coded GE placement into defaultItems.xml as farm 2.
</p>

<p>
2021-02-28T15:31:00Z Finished two more farms so total of 4 now, forgot to check their location numbers but one in south west and another in south east, not very ideal farm yards but at least this should satisfy basic multiplayer people, so that they cant complain there not being any farms.
</p>

<p>
2021-02-28T20:53:00Z Continued GIMP painting farmlands image from ID 79 onwards. Lets see how many new land lots we get to paint now.
</p>

<p>
2021-02-28T22:06:00Z Reached farmland ID 96 RGB 125, 20, 250 which was the last one configured in my graphicsmagic bat, now I need to write more ID RGB's there <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
<b>2021-03-01T01:07:00Z</b> Farmland image painted in GIMP using all 127 ID channels is done. Aayeah! <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<a href="screenshots/PMC-Montana-Shelby-8km-2021-03-01T0105.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Montana-Shelby-8km-2021-03-01T0105.jpg" alt="PMC Montana Shelby 8km terrain" loading="lazy" style="padding: 3px 15px;width:auto;height:auto;"></a>

<p>
2021-03-01T09:06:00Z Added custom _fruitTypes.xml and disabled AI planting other crops than barley, canola, oat and wheat.
</p>

<a href="screenshots/PMC-Montana-Shelby-8km-2021-03-01T0906.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Montana-Shelby-8km-2021-03-01T0906.jpg" alt="PMC Montana Shelby 8km terrain" loading="lazy" style="padding: 3px 15px;width:auto;height:auto;"></a>

<p>
<b>2021-03-09T06:23:00Z</b> Tweaked CBJ buildings clip distances a bit, for those planks inside the building which were flickering at long distance, they are now set to a very short 100m clipdistance.
</p>

<p>
Also started to work on CBJ building door animations, one building type works already but others are still problematic for me, dunno if its that I don't understand how to configure animatedObjects.xml or that these buildings are wrongly setup in the first place (two types of buildings with same door transformgroup names with different translations).
</p>

<p>
But I ran into issue, looks like each building would need their unique door name in terrain.i3d, which means insane amount of typing that crap in there. Not only that but CBJ buildings pack is a bit broken in the first place, quansat building has wrong door name in the xml and there are NO animation xml lines for that F1 light thing, so I would have to fix someone elses mod in order to make my error free, yeah I'll pass...
</p>

<p>
2021-03-09T08:10:00Z Made a decision and put ALL remaining CBJ buildings into defaultItems.xml under farmId="0" which means that doors are animated for every player and once you purchase the land then you own the buildings as well and can sell them if you so choose.
</p>

<p>
I am not happy with this feature with those buildings but it would have taken way too much work to fix CBJ buildings to work properly with animated doors when placed in GE.
</p>

<p>
Players cant tell the difference, that placeable farmId 0 is actually bonus in that sense that they can sell buildings from the land they buy.
</p>

<p>
Hopefully in the future I get better american vehicle sheds or can somehow fix this myself.
</p>

<p>
2021-03-09T22:12:00Z PMC Montana Shelby 8km v1.1.3 testing release packet compiled.
</p>

<p>
Then took backups of the project directory, good to have a snapshot at this point, easy to fall back to if necessary.
</p>

<p>
<b>2021-04-14</b> Sent v1.1.3 to two testers. Yeah about time, its been sitting in my directory for over a month now, dunno how that happen <img src="../images/smileys/icon_confused.gif" alt="Smiley :?" loading="lazy">
</p>

<p>
<b>2021-04-26T16:30:00Z</b> Removed outside terrain face/plane as it got lighting in-game 24/7, meaning in the middle of the night in complete darkness the outside terrain shines bright like in daylight.
</p>

<p>
Did some google searching and asked on discord, no solution found.
</p>

<p>
If the feature isn't working like expected then better to remove it completely as its purely cosmetic it has no functionality in farming.
</p>

<p>
Also penalty_box tester reported that field 48 map marker is not showing up, it was on the extreme NE location so I moved field definition fieldmapindicator quite a bit left and slightly down, did the same for F49 even though it worked fine. Checked in-game and they show up correctly now.
</p>

<p>
2021-04-26T18:08:00Z Added water tank using giants placeable water tank model scaled up 10 times heh, its kind of hacky but hey, it looks like a huge water tank. Its not the right color, but close enough.
</p>

<a href="screenshots/PMC-Montana-Shelby-8km-2021-04-26T1806.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Montana-Shelby-8km-2021-04-26T1806.jpg" alt="PMC Montana Shelby 8km terrain" loading="lazy" style="padding: 3px 15px;width:auto;height:auto;"></a>

<p>
Location-10 deleted two farm huts and replaced them with radio tower models, these are the cell phone towers. I would like to use some more fitting models for shack and fence whatever stuff these locations have, but don't recall mapDE/mapUS having such stuff, probably need to take another look.
</p>

<a href="screenshots/PMC-Montana-Shelby-8km-2021-04-26T1824.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Montana-Shelby-8km-2021-04-26T1824.jpg" alt="PMC Montana Shelby 8km terrain" loading="lazy" style="padding: 3px 15px;width:auto;height:auto;"></a>

<p>
Then also one more just tad north.
</p>

<a href="screenshots/PMC-Montana-Shelby-8km-2021-04-26T1823.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Montana-Shelby-8km-2021-04-26T1823.jpg" alt="PMC Montana Shelby 8km terrain" loading="lazy" style="padding: 3px 15px;width:auto;height:auto;"></a>

<p>
Checked in-game and no errors, looks good for sending v1.1.4 to testers.
</p>

<a href="screenshots/PMC-Montana-Shelby-8km-2021-04-26T1845.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Montana-Shelby-8km-2021-04-26T1845.jpg" alt="PMC Montana Shelby 8km terrain" loading="lazy" style="padding: 3px 15px;width:auto;height:auto;"></a>

<p>
2021-04-26T18:57:00Z PMC Montana Shelby 8km v1.1.4 sent for testers.
</p>

<p>
2021-04-26T20:26:00Z Took backups, another good snapshot to save into archives, just in case you need it.
</p>

<p>
<b>2021-05-16T07:48:00Z</b> Started to work on precision farming soil types image in GIMP.
</p>

<p>
2021-05-16T08:12:00Z GIMP XCF image painted and soilmap.png exported. Took backups of terrain project dir and then started to add the terrain.i3d stuff for soilmap fileId's etc.
</p>

<p>
2021-05-16T08:32:00Z Precision Farming soilmap complete.
</p>

<p>
Sucks to edit such things as I have NO use for precision farming, it doesn't work with large terrains and in general while I like the idea of "more data", it just doesn't play well with FS19 right now, at least not for me. Besides if it doesn't work on large terrains, it barely works for 8.1 kilometer ones, its a moot point, the mod is crap.
</p>

<p>
2021-05-16T09:11:00Z Finished updating screenshots for homepage, with the new farmland and precision farming images.
</p>

<p>
<b>2021-05-17T10:20:00Z</b> Did hasty Seasons GEO for PMC Montana Shelby 8km, temperatures for freezing winter and moderately warm summer. Just little bit worried about the first region of days in planting season, for example 9 day seasons the days 1-3 are now not available for planting.
</p>

<p>
This seems to be the case on most custom GEOs released, seen several of them.
</p>

<p>
2021-05-17T10:54:00Z Increased farmland image channel count to 255 (or is it 256 dunno). Image not painted yet though.
</p>

<p>
Then painted several new farmland ID channels, buyable land lots to split up those huge "desert" areas without fields.
</p>

<p>
Whoah those colors, gooovy! <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<a href="screenshots/PMC-Montana-Shelby-8km-2021-05-17T1220.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Montana-Shelby-8km-2021-05-17T1220.jpg" alt="PMC Montana Shelby 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Thats now total of 158 ID channels painted (159 if you count the last color as well).
</p>

<p>
2021-05-17T12:43:00Z Compiled PMC_Montana_Shelby_8km_v1.1.5.7z for internal testers.
</p>

</section>

<footer>
<p>
<a href="pmc-terrains.php" class="button">PMC Terrains</a>
<a href="changelog-pmc-montana-shelby-8km.php" class="button">Changelog PMC Montana Shelby 8km</a>
<a href="pmc-montana-shelby-8km.php" class="button">PMC Montana Shelby 8km</a>
<a href="../index.php" class="button">PMC Farming Simulator root page</a>
</p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("../include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
