<!DOCTYPE html>
<html lang="en">
<head>
<title>Developer Diary PMC Grande Gardens 16km - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Developer Diary PMC Grande Gardens 16km - PMC Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<!-- google ads -->
<?php include("../include/google-ads.php"); ?>
<h1><b>Developer Diary PMC Grande Gardens 16km - PMC Farming</b></h1>
</header>

<section>
	<h2>Dev Diary Grande Gardens</h2>

<p>
This is dev diary for <a href="pmc-grande-gardens-16km.php" target="_blank">PMC Grande Gardens 16km</a> Farming Simulator 19 fictional American style terrain, created and developed by PMC.
</p>

<p>
<b>2020-12-07T03:09:00Z</b> Created first draft of <a href="terrain-soil-types.php" target="_blank">Soil Types</a> image for upcoming precision farming upgrade/DLC.
</p>

<p>
With <a href="https://pmc.editing.wiki/doku.php?id=tools:gimp" target="_blank">GIMP</a> opened grayscale <a href="terrain-heightmap.php" target="_blank">Heightmap</a> png, changed mode to RGB, then used select by color with fuzzy/range 15 to get nice areas selected, then just fill with foreground color. Did this for all four soil types. Worked out pretty well.
</p>

<p>
2020-12-07T1639 Started to place high voltage power towers and radio gsm transmitter towers.
</p>

<p>
Placed high voltage power line towers 300m apart and that is way too close span. Checked google/maps on north dakota greendale (just a spot I knew had them) and they range from 380m to 415m span. Then adjusted span to 500m as it looks quite alright for this terrains scope.
</p>

<p>
Placed five GSM transmitter radio mast/towers, all corner areas of the terrain and one in the middle. Not sure if this is very realistic on 16.3km area but placing only one limits so much how much players encounter those towers.
</p>

	<h2>2021-02-17 Design Doc Synchronization</h2>

<p>
2021-02-17T10:18:00Z Took backups and started to work on getting terrain in <a href="terrain-giants-editor.php" target="_blank">Giants Editor (GE)</a> and design document synchronized as now design doc is quite close but not entirely accurate.
</p>

<p>
First I deleted PMC_Grande_Gardens_16km.i3d.terrain.lod.type.cache and .i3d.terrain.nmap.cache files as I recall from 2019 that these somehow hold cache info to ground texturing, <a href="terrain-density-weight-images.php" target="_blank">Weight Images</a>, might not be true but good to delete them anyways.
</p>

<p>
Then copied new and improved <a href="https://pmc.editing.wiki/doku.php?id=tools:graphicsmagick" target="_blank">GraphicsMagick</a> _run_graphicsmagick_FS19_weight_images_to_all_black_blank.bat to project dir and ran it to clear all weight images to black, ie empty. This of course means terrain has no texturing and reverts to first one in the file ID list which I believe is mud or pig mud whatever it is. So I copied over my pre-painted 4096 resolution grassDry01 - 04 images.
</p>

<p>
Loaded project in GE, imported <a href="terrain-pmc-helpers.php" target="_blank">PMC Helpers (for Giants Editor)</a> and used spline paint ground textures for the splines, mapUS asphalt.
</p>

<p>
Loaded asphalt*_weight images into GIMP and merged them into one solid color line painting of our <a href="terrain-train-system.php" target="_blank">Train System (train tracks)</a>.
</p>

<p>
Then reset weight images all black and copied grassDry over again. Next on GE I painted asphalt01 over to all railroad silos.
</p>

<p>
This could have been done all in one go, but hey its my first time synchronizing design doc with whats actually in GE, so heh tool pipeline has some tweaking to do <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Again loaded asphalt01 to GIMP and cleaned black background out then merged with design doc on its own Rail Road Silos layer.
</p>

<p>
2021-02-17T11:25:00Z Players farms for <a href="terrain-placeable-objects.php" target="_blank">defaultItems.xml (placeable objects)</a>. First I needed to sync design doc whats in GE/defaultItems.xml currently.
</p>

<p>
So same as railroads above, weight images were reset and ready to go, then just loaded up PMC_Helpers in GE and started to go through each of the players farms, painting down ground textures for asphalt01.
</p>

<p>
In GIMP there was nothing to do, design doc matched perfectly. Okay not pixel by pixel but that was never the intention to paint player farm location in GIMP, although... I might do that at some point hmm. Its just difficult to get the building sizes correctly, there is no way to paint ground textures in GIMP for a specific building but its fine for general area. Edit: 2022-04-29T09:03:00Z, you absolutely must paint design doc in GIMP and that is the only source and "coordination" of there things like farm yards, roads etc are placed.
</p>

<p>
After checking in GIMP and all looked good, went to reset weight images again. I created bat file to do this reset in one click of a button as I knew it would come handy doing these shuffle for many times on several different design doc layers.
</p>

<p>
Then did similar shuffle for farms, not player farms but just static hard coded GE farm buildings.
</p>

<p>
Next and I believe last synchronizing step is <a href="terrain-selling-points.php" target="_blank">Selling Points</a>, those are like... heh not even close. This was a good sync. It was done real quick as I had not much to sync because they were so not even close to each other that I simply deleted design doc sell points layer and made the GE asphalt01 painting the new sell points layer. Boom, done.
</p>

<p>
2021-02-17T12:05:00Z In design doc changed railroads to RGB 255,255,0 yellow. Railroad silo markers to RGB 0,255,0 bright green. Railroad boonie silos RGB 255,0,255 pink.
</p>

<p>
Sell points to RGB 255,0,0 red.
</p>

<p>
2021-02-17T12:15:00Z Next I merged actual fields <a href="terrain-cultivator_density-gimp.php" target="_blank">cultivator_density</a> image into this design doc as so far its been using just generic background <a href="terrain-pda-map-image-rgb-colors.php" target="_blank">PDA Map Image RGB Colors</a> alike layer for fields + grass.
</p>

<p>
Wow that RGB 255,0,0 red for cultivator_density was really "strong" in the design doc image. It was much more pleasing to work with that field and grass texture instead heh.
</p>

<p>
Next was to choose roads design doc RGB colors. Was thinking of gray for dirt/gravel and black for asphalt roads. With asphalt roads there is still the issue of normal two lane roads and highways, of course we only have one almost cosmetic highway running through the terrain but I like it as overall landmark.
</p>

<p>
Dirt / gravel road RGB 100,100,100 gray and asphalt RGB 0,0,0 black.
</p>

<p>
While painting roads had to go into GE to paint vehicle shop location to asphalt01 as there was no marking for it in design doc.
</p>

<p>
2021-02-17T13:10:00Z Finished painting roads over the existing single color dirt roads. Plan now is to keep asphalt black and dirt gray separate, to paint weight images for more easier distinction in-game.
</p>

	<h2>2021-02-18 Design Doc Painting Continues</h2>

<p>
2021-02-18T00:38:00Z Design doc tweaks for roads, dirt / gravel roads were too wide, I painted them with 10 pixel pencil which was way too wide, looked unnatural so reverted back to 8 or 7 pixel pencil.
</p>

<p>
Pencil pixel size used was highway asphalt road 14, dirt / gravel roads 6 and asphalt roads 8. However that was still really wide, roads looked unnatural and that one 3d mesh for asphalt road I had was tiny on top of that painting.
</p>

<p>
2021-02-18T07:00:00Z Looks like 10 pixel pencil is just right for the large highway and 4 pixel pencil just under the 3d road mesh object with, so perhaps using 5 pixel for asphalt roads is okay and 4 pixel for dirt roads.
</p>

<p>
There is a slight issue with weight image resolution being 4096 and terrain size 16.3km, the 0/180/90/270 oriented roads look fine, but when they are diagonal... then textures are drawn in like two pixel narrower, it just looks weird. But I don't think its worth to start fixing such issues, need some game-play experience to see how annoying it is during actual playing.
</p>

<p>
Railroad track painting is 5 pixels in GIMP once brough in from GE, however this is uneven number for GIMP painting as 4 pixel pencil is one pixel too narrow and 5 pixel pencil... doesnt change the pencil shape heh, then 6 pixel is of course too large. So painting any railroad tracks using this width requires fiddling with selections and not sure if that is even possible, you might have to paint then manually which is painful. So yeah either use 4 or 6 pixel pencil and be done with it.
</p>

	<h2>2021-02-20 High Voltage Power Towers</h2>

<p>
2021-02-20T17:22:00 Well I didn't write any dev diary from yesterday, sorry about that. Yesterdays edit included animal dealer, vehicle shop teleport inside building fix, few utility poles re-created with wires.
</p>

<p>
Today... I finished re-creating utility poles with wires so that they match the new road paintings. Then I re-created high voltage power towers with wires.
</p>

<p>
And right now 17:22:00Z finished doing field definition high voltage tower holes for F82.
</p>

<p>
2021-02-20T18:25:00Z Finished punching holes for high voltage power towers on field definitions, checked in-game all looking good.
</p>

<a href="screenshots/PMC-Grande-Gardens-16km-2021-02-20T1824.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Grande-Gardens-16km-2021-02-20T1824.jpg" alt="PMC Grande Gardens 16km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
2021-02-21T00:55:00Z Grass is missing so I need to bring that back with dirt/gravel, asphalt roads and railroad tracks emptied out.
</p>

<p>
2021-02-27T14:46:00Z Train camera zoom out distance increased a lot. This was bothering me for a long time as our trains have 20 cars but I could not zoom out 3rd person camera enough to see them all. Now I can.
</p>

	<h2>2021-04-27 Renaming Selling Points</h2>

<p>
2021-04-27T02:50:00Z Took backup of current version.
</p>

<p>
Then renamed all "Selling Point 1" etc names to "SP1" to keep them short and therefore mapview / minimap not so cluttered.
</p>

<p>
And renamed all "Railroad Silo 1" etc names to "RS1" to... well you figure it out.
</p>

<p>
Added R to selling point name which is on railroad. There was surprisingly many of these along those regular road access selling points. Well this is large scale farming stuff with logistics in play, we sell crops by the train loads <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
2021-04-27T03:46:00Z Adjusted AI planted crop types to only canola, corn, oats, soybeans and wheat. American style.
</p>

<p>
2021-04-27T14:31:00Z Compiled PMC_Grande_Gardens_16km_v1.1.10.7z internal testing release packet for testers.
</p>

	<h2>2021-07-01 Big Re-Design Project</h2>

<p>
2021-07-01 Big PMC Grande Gardens 16km re-design project <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Selected fields and grew selection by 5 pixels which result had no fields touching each other yet. Some of them were really close like the 35 row in north, four medium size squares in SW and F10 and F... err well whatever was next to it, those were closer than 6 pixels pencil size. But yeah none overlapped yet. Some fields though were still really far apart so this growth did not single handledly fix anything.
</p>

<p>
5 pixels growth is the maximum what you can do without overlap.
</p>

<p>
2021-07-09 Tried out 10 pixels, way too much, 8 pixels overlaps few fields like the F35 row, F14-15 I think and then the four squares in SW area. Also elsewhere 8 pixel makes fields so tight that it will definitely cause mapview field merging and who knows possibly courseplay as well.
</p>

<p>
6 pixels growth causes all the above to be extremely close to each other but not overlapping anymore.
</p>

<p>
Next step would be to manually increase individual field sides. Steps after that would be to simply add new fields to cover the huge empty areas for example in terrain center.
</p>

<p>
Huge empty areas could be used for animal placeables and big grain elevators etc man made stuff as well. Or simply new farm yards. This is a huge terrain and farm yards should be made using huge vehicle sheds, biggest CBJ midwest buildings pack ones or perhaps new TrailerParkFarms sheds if they do not cause performance issues.
</p>

<p>
Empty area needs to be really huge if you can fit buildings there like animal placeables. If this is on along huge field then are you prepared to add that many buildings all the way the edge, I don't think so, few buildings or tree groups might be okay but if its one of the biggest fields then you cant make a city just along the field edge.
</p>

<p>
Big grain elevators landmark objects with sell point features would be awesome, it would help to fix current stupid sell point dump grills on the ground in middle of the nowhere.
</p>

<p>
Objects ... when you grow cultivator_density field selection you cannot forget objects next to the field, for example this famous F35 row had spruce/pine trees between every field, what do you imagine happens to those objects if tields are grown several meters?
</p>

<p>
6 pixel growth testing results:<br>
F04 has plenty of space in N and W edges but E edge will have trees on field. S edge trees are even worse, but there is plenty of space in S to move the whole tree spline and transformgroup at once, no issue, just have to do it. So enlarge this field but move trees in E and S edges with splines.<br>
F23 radio mast is on the field. Trees between F23 and F24 has plenty of space, enlarge the fields in that direction to save space in N for the radio mast.<br>
F25 N edge trees clip just barely like few of them, tree spline cant be moved further south so you have to move tree by tree, its not too bad, doable.<br>
F27 S side roads just barely clip on the field, tree by tree move I think, doable.<br>
F26 W side clips with train track and E side ONE (1) single tree clips to field.<br>
F28 NE trees clip badly, trees cant really be moved N because utility poles are there. I'd say this field needs a custom shape where NW side is a bit larger and NE is a bit smaller maybe no enlarging at all.<br>
F05 SW corner trees clip badly, cant be moved as utility poles are already in the trees. S trees clip mildly, cant be moved. Fix cultivator_density in SW and S edges for this field.<br>
F12 N and S edge trees clip, S ones are the pines where gap between fields gets way too small.<br>
Okay enough of this... its clear that growing cultivator_density selection by 6 pixels is causing more work to fix it than it improves by removing empty space.
</p>

<p>
Real core issue by bulk growing cultivator_density is that you cannot see where trees are, until its too late.
</p>

<p>
2021-07-09T1823 Shrunk fields by 1 pixel, so this should be now more or less same as 5 pixel enlarge. To my surprise this didn't help pretty much at all, trees are still badly clipping the fields, wow.
</p>

<p>
This was re-design project PLANS only since 2021-07-01, I did not actually edit any files yet, well I did but first took backups, then goofed around wildly with the designs and once done I just restored original terrain from the backup. Learned important information about increasing field size by GIMP grow, basically meaning don't do it.
</p>

	<h2>2021-07-11 Actual Re-Design Work Begins</h2>

<p>
2021-07-11T17:02:00Z Actual re-design work where files are saved begins now <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">

<p>
First I opened design doc in GIMP and was confused about the colors used, I had pink dots and LARGE pink circles. Need to fix this to be more clear coloring. Normal size pink dots are players farms not yet done and large pink dots are railroad track bin silos in the boonies (mostly in the edge loop track).
</p>

<p>
So lets start from the begin, here is the legend of PMC Grande Gardens 16km design doc colors <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<ul>
<li>Red areas, fields</li>
<li>Yellow dots, player farms</li>
<li>Pink dots, planned player farms meaning not created yet</li>
<li>Dark blue dots, farms</li>
<li>Red dots, sell points</li>
<li>White square, dealership / vehicleshop</li>
<li>Black line, interstate highway</li>
<li>Gray line, dirt / gravel roads</li>
<li>Black line (again????), asphalt roads</li>
<li>Pink big dots, railroad track bin silos in the boonies</li>
<li>Green dots, railroad depots (grain elevators)</li>
<li>Yellow lines, railroad tracks</li>
</ul>

<a href="screenshots/PMC-Grande-Gardens-16km-Design-Doc-2021-07-11T1716.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Grande-Gardens-16km-Design-Doc-2021-07-11T1716.jpg" class="terrainimg" loading="lazy" alt="PMC Grande Gardens 16km Farming Simulator 19 Screenshot"></a>

<p>
That is how it looks right now, no re-design edits done to it yet.
</p>

<p>
Decided to simplify colors a bit, right now there was railroad bin silos in the boonies and railroad depots, this is dumb, they are the exact same thing, it just happens to be that the boonies depots are in the far reach areas of the terrain. So I'm going merge boonie bins into railroad depots now, eliminating one GIMP layer and the duplicate pink colors.
</p>

<p>
Got that done and added one more depot in south central edge.
</p>

<p>
2021-07-11T17:47:00Z Opened defaultItems.xml, edited all existing player farms to farmId="0" and removed defaultFarmProperty setting so these objects can be bought with land lot.
</p>

<p>
2021-07-11T19:18:00Z Finished transferring 11 farm yards into players farms, including creating one fresh new one.
</p>

<p>
Tested in-game, no errors, nice. These are now pretty much copy pasted and shuffled around basic CBJ red vehicle sheds, no farm house or bin silos. Very basic player farms stuff, well ok not even basic but a starting point, anchor in the terrain so to speak. Need to add house and bin silos plus some other decorations as well. Most likely need to add more vehicle sheds because this terrain is about big boy farming <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

	<h2>2021-07-12 Give Me Big Fields</h2>

<p>
2021-07-12T13:12:00Z New editing day has started, opened design doc in GIMP and changed sell point dot color to RGB 0,255,255 umm light blue? cyan? dunno what that color is called <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Hmm next I need to start cranking out those fields larger to remove empty spaces, that is the big goal of this re-design project in the first place. Seems like yesterday I just did the first thing that came to my mind which was player farms into defaultItems.xml, it was a good work no problem with that, but not really anything to do with re-design work.
</p>

<p>
2021-07-12T13:43:00Z Decided to make a new layer in GIMP for "new fields" where I can splatter fields around like its nothing. Non destructive editing, always.
</p>

<p>
Chose RGB 0,0,255 for new fields color.
</p>

<p>
2021-07-12T13:49:00Z First fields sketched out to north central, here we go! <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Created another players farm yard on north central, this one number 27 but its duplicate as these numbers are all out of whack (there's not twenty seven farms). There was just too nice place for a farm yard so had to do it.
</p>

<p>
Here is a view of the current re-design progress, blue color is new fields.
</p>

<a href="screenshots/PMC-Grande-Gardens-16km-2021-07-12T1406.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Grande-Gardens-16km-2021-07-12T1406.jpg" alt="PMC Grande Gardens 16km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
The yellow dot in middle of right side new fields is the new farm yard, that location was flat and top of the hill so just had to do farm yard there.
</p>

<p>
Animal areas design, wow another layer of stuff to add, ok lets do it. RGB 100,60,0 is color for animal areas, these will be painted as areas instead of dots to designate the general area.
</p>

<p>
Created two farm yards for F50 north side. Two farm yards F40 south side symmetrically fit between existing farm yards. One farm yard on F22 NW corner. One on F20 north central area. One on F10 NW area, mostly north. Got fair number of new farm yards created here, starts to get populated, feeling good about this.
</p>

<p>
2021-07-12T15:16:00Z New farm yards shown:
</p>

<a href="screenshots/PMC-Grande-Gardens-16km-2021-07-12T1516.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Grande-Gardens-16km-2021-07-12T1516.jpg" alt="PMC Grande Gardens 16km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
I am very excited and mostly surprised how much progress I can do, I'm simply dishing out some major damage to this terrain re-design project, whether its good or bad remains to be seen. I am very glad about this because been struggling with computer / editing burnout for a long time and spending days just idling or watching mindless "youtube cat videos" is really not fun. So when I'm getting this kind of motivational energy going on... stuff gets <i>done</i> <img src="../images/smileys/icon_biggrin.gif" alt="Smiley :D" loading="lazy">
</p>

<p>
2021-07-12T16:04:00Z Created another two new farm yards to roughly north side of F30.
</p>

<p>
Was looking at the design doc and its almost half way done now regarding new fields and animal areas coverage. Lets take a look at it in full size.
</p>

<a href="screenshots/PMC-Grande-Gardens-16km-2021-07-12T1614.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Grande-Gardens-16km-2021-07-12T1614.jpg" class="terrainimg" loading="lazy" alt="PMC Grande Gardens 16km Farming Simulator 19 Screenshot"></a>

<p>
2021-07-12T17:11:00Z Brought new cultivator_density field designs into GE and found few tree and building overlaps, fixed those right away in GIMP.
</p>

<p>
2021-07-12T19:09:00Z Had a good discussion in PMC discord about this re-design with the guys, mainly SinisterSockz, got some good feedback.
</p>

<p>
During that chat I uploaded few screenshots:
</p>

<a href="screenshots/PMC-Grande-Gardens-16km-2021-07-12T1753.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Grande-Gardens-16km-2021-07-12T1753.jpg" class="terrainimg" loading="lazy" alt="PMC Grande Gardens 16km Farming Simulator 19 Screenshot"></a>

<a href="screenshots/PMC-Grande-Gardens-16km-2021-07-12T1754.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Grande-Gardens-16km-2021-07-12T1754.jpg" class="terrainimg" loading="lazy" alt="PMC Grande Gardens 16km Farming Simulator 19 Screenshot"></a>

<a href="screenshots/PMC-Grande-Gardens-16km-2021-07-12T1755.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Grande-Gardens-16km-2021-07-12T1755.jpg" class="terrainimg" loading="lazy" alt="PMC Grande Gardens 16km Farming Simulator 19 Screenshot"></a>

<p>
SinisterSockz said: <i>the space on off the road is probably ok.  but not the space between the fields.</i>
</p>

<p>
Few more screenshots from the raw cultivator_density painted fields without field definitions:
</p>

<a href="screenshots/PMC-Grande-Gardens-16km-2021-07-12T1807.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Grande-Gardens-16km-2021-07-12T1807.jpg" class="terrainimg" loading="lazy" alt="PMC Grande Gardens 16km Farming Simulator 19 Screenshot"></a>

<a href="screenshots/PMC-Grande-Gardens-16km-2021-07-12T1808.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Grande-Gardens-16km-2021-07-12T1808.jpg" class="terrainimg" loading="lazy" alt="PMC Grande Gardens 16km Farming Simulator 19 Screenshot"></a>

<p>
Sockz said about my irregular field shapes and sizes: <i>they do look pretty large. Not sure I like the shape though.  It doesnt make sense.  THere is no creek or road that would make you have a field shaped that way.  If that makes sense.  You only have non square fields if something is in the way to make them not square.</i>
</p>

<p>
That last part makes perfect sense: you only have non square fields if something is in the way. I have to remember that and keep it as my field design guideline.
</p>

<p>
Also funny quote from Sockz: <i>farming is about efficiency.  Not the scenery <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy"></i>
</p>

<p>
I'm going to focus on the southern part of the terrain by doing larger more square fields, not completely square but free hand drawn squares. There will be farm yards, grain elevators, bin silo sites and animal areas as well.
</p>

<p>
Then it was time to do work on the design doc in GIMP.
</p>

<p>
Created new farm yard south east of F15.
</p>

<p>
Created new fields south of F15.
</p>

<p>
Created somewhat grid system dirt / gravel roads south of F03, then painted square fields among the dirt roads.
</p>

<p>
Created bunch of square fields, then farm yard on the corner of railroad tracks from F06 NE corner.
</p>

<p>
2021-07-12T20:02:00Z Grid road area new fields done.
</p>

<p>
Created farm yard (names are not final) 46 through 51 along the asphalt road... in south central I guess it is, east of F06.
</p>

<a href="screenshots/PMC-Grande-Gardens-16km-2021-07-12T2014.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Grande-Gardens-16km-2021-07-12T2014.jpg" alt="PMC Grande Gardens 16km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
2021-07-12T20:51:00Z Proceeding to paint dirt road grid and fields towards south, this GIMP design doc work feels like it takes quite a while.
</p>

<p>
Drew some more roads to the south east area, sorry these are really bad position calls without field numbers or screenshots hehe.
</p>

<p>
2021-07-12T21:36:00Z Work on the SE region continues, drew some more dirt roads and painted many square and irregular size fields.
</p>

<p>
Created farm yard for intersection at F60 E side.
</p>

<p>
2021-07-12T21:56:00Z All new fields done, there might be some small ones that need to be created on some spots but overall they are now done, there is no more huge empty gaping holes of empty spaces in this terrain.
</p>

<p>
There still are too much space between fields and roads, but that is not enough space to create a new field, there we need to manually edit fields larger to remove the gap. Or maybe we can add some buildings, trees or something like that to take away the empty space, it remains to be seen field by field basis.
</p>

<p>
But yeah feels good to have terrain filled up to the gills with fields now, oh wow did I lose control of the scope when adding these fields hehe, I had NEVER imagined this re-design work is this much work and FUN <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Here is current design doc as whole.
</p>

<a href="screenshots/PMC-Grande-Gardens-16km-2021-07-12T2200.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Grande-Gardens-16km-2021-07-12T2200.jpg" class="terrainimg" loading="lazy" alt="PMC Grande Gardens 16km Farming Simulator 19 Screenshot"></a>

<p>
Looks <b>THiCK</b> to me <img src="../images/smileys/icon_biggrin.gif" alt="Smiley :D" loading="lazy">
</p>

<p>
2021-07-13T02:40:00Z Finally after excruciatingly painful bug hunt I discovered what was wrong with my road weight images. I had wrong source file format from which graphicsmagick started to process them and always failed no matter what I tried.
</p>

<p>
I feel exhausted after banging head to a brick wall for hours, but great to have the issue figured out and everything is working again.
</p>

<p>
PMC Grande Gardens 16km new fields, dirt/gravel roads and farm yards are looking great, its so amazing that I'm having hard time recognizing this terrain anymore it has changed so much during this re-design.
</p>

	<h2>2021-07-15 Field Definitions</h2>

<p>
2021-07-15T16:36:00Z Started to add <a href="terrain-field-definitions.php" target="_blank">Field Definitions</a> to the new re-design added fields. But first, took backups of course. Also added new layer of security to my backup batch files, 7-zip archive is copied to another hard disk drive (HDD) in this computer and also over local area network (LAN) to PMC Linux ubuntu server computer. That gives very good backups in case of HDD failure or even editing computer failure.
</p>

<p>
First I took additional backup of heightmap DEM PNG, opened it up in GIMP and foreground paint filled it with RGB 0,0,0 black which means 0 meter elevations, perfect flat surface to do field definitions.
</p>

<p>
2021-07-15T17:04:00Z First 20 or so new field definitions created.
</p>

<p>
2021-07-15T17:42:00Z Left hand pinky finger already starts to hurt from CTRL pressing when copy pasting and CTRL-B'ing these field definitions and corner pieces. Man this is not fun, field definitions are such a bad technology to be used, oh well gotta get them done...
</p>

<p>
2021-07-15T18:51:00Z Finished creating field definitions for all the new fields, total of 250 fields in this terrain now. I'm thinking... could easily add some more small ones.
</p>

<p>
Todays motivation to edit PMC Grande Gardens 16km was to add field definitions and then continue playing active <a href="stories-from-zero-grande-gardens.php" target="_blank">PMC Grande Gardens 16km Start From Zero</a> savegame again as decent amount of re-design edits are in, however I suddenly feel like there are not enough new cool stuff in for me to continue right now. Hmm.
</p>

<p>
I want to add some more functionality or at least field design before continuing as that savegame is such a beast that once I load it up... it will take several weeks of my life just playing 17hrs/day.
</p>

<p>
Actually there are now about 150 new fields so heh maybe its more like months instead of weeks <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
2021-07-15T19:20:00Z Checked things out in-game, new fields overall look good. I still see so much empty space though, so after all this work the core visual look and feel of empty space around fields haven't been eliminated, at all basically.
</p>

<p>
Those old big fields need to be increased in size, a lot in some cases. Bring in field edge right up to road only leaving meter or two ditch area there. Of course if you have utility poles or trees there then its not possible, but we'll bring field as close we can.
</p>

	<h2>2021-07-25 Re-Design Work Continues</h2>

<p>
2021-07-25T03:34:00Z Re-Design work continues. First was on PMC Gaming computer with plan on game-play testing a bit but once in-game didn't feel like starting all the field work as it would have taken as much time I'd give it. So I just flew around with flight toggle, screenshotted and wrote down info how to enlarge fields.
</p>

<p>
Then did F04, F25 and F27 enlarge sides. Next did F33, F38 and F40 N and W side enlarge.
</p>

<p>
F40 got its north edge now closed as there was high voltage power line previously so close to the field edge that there was opening, now there is enough field coverage to leave this north tower as simple hole.
</p>

<p>
2021-07-25T03:59:00Z Then did F09 enlarge for all sides, basically it was brand new field shape with simple 10 pixel grow feature in GIMP to make round corners. These corners are now much smaller than all the rest of the fields which use whopping 30 pixel grow what I recall.
</p>

<p>
Next did F49 S and W enlarge, in S it came right up to the dirt/gravel road and in W it hopefully came up to utility poles and not overlapping them. I cant see utility pole or tree/forest info in GIMP unfortunately.
</p>

<p>
Then did F50 S and W enlarge, it was tricky as in W we had utility poles again. Also created dirt/gravel road to the railroad depot in S side.
</p>

<p>
Next was F51 all sides except S where we had one group of trees and a farm yard.
</p>

<p>
Then F52 which got E, S and W sides enlarge. Easy job as there was no objects on these sides.
</p>

<p>
Next did F54 all edges up to road and railroads, another easy one, well okay N side had trees so just estimated it but should be fine.
</p>

<p>
F08 got complete enlarge as there was no objects around to it, just railroad which was painted in GIMP so easy task.
</p>

<p>
F79 was all sides but north enlarge.
</p>

<p>
2021-07-25T04:49:00Z Had odd bug where S edge of the terrain weight images had asphalt painted on it, discovered that GIMP design doc XCF image had background gray layer moved up a bit leaving empty transparent area, oops, fixed it now.
</p>

<p>
Did enlarge for borth F243 and F247 to close odd gap between them.
</p>

<p>
Created Farm_53 to F248 N side. Just a placeholder three stock CBJ red vehicle sheds for now, will add farm house and other stuff later.
</p>

<p>
Next field enlarge was massive F60, it got E, S and W sides fattened.
</p>

<p>
2021-07-25T05:24:00Z Created treeline / forest F07 S side. Hopefully it doesn't cause any performance issues.
</p>

<p>
Then F07 enlarge N, E and W sides.
</p>

<p>
Next created Farm_54, Farm_55 and Farm_56 W side of F06.
</p>

<p>
Then F30 S and W side enlarge.
</p>

<p>
2021-07-25T05:57:00Z Created new field S-SE area of F03, it came out as nice large well semi large triangle shape, rounded corners of course.
</p>

<p>
Then created Farm_57 and Farm_58 right next to F01 and F02.
</p>

<p>
Next did F02 enlarge S all the way up to railroad tracks.
</p>

<p>
Then another forest, create maple/volume treeline N side of F55.
</p>

<p>
2021-07-25T06:30:00Z Created four new narrow style fields to F73 area.
</p>

<p>
Created Farm_59 S side of F76, another placeholder for now. Enlarged F76 both sides of Farm_59.
</p>

<p>
My design doc F76 SW corner had trees, but because there was huge long treeline already right next to it I decided to just create fewer objects requiring farm yard there, also it kind of fits there nicely.
</p>

<p>
Unless my GE farm yard numbering is off, this is now 60th farm yard. Now that is quite few farm yards for a terrain <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Then enlarged F80 W side all the way up to the road. And F93 and F94 E sides got enlarged.
</p>

<p>
2021-07-25T07:04:00Z And finally as last new todo task I enlarged F81 W side all the way up to utility poles, of course needs to be checked in-game that I didn't do any overlap, should be good.
</p>

<p>
Now all tasks are done from todays brief PMC Gaming testing session. Feels good to get those issues resolved right away because usually I just write endless list of bug reports, ideas, issues etc and they "never" get done.
</p>

<p>
2021-07-25T07:19:00Z Finished quick overview flight in-game, NOW I would like to go back to PMC Gaming and start farming <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
But I already saw couple of fields that were off, one of the triangle fields was too large and went to overlap forest treeline and one farm yard was on field. Quick easy fixes.
</p>

<p>
2021-07-25T07:52:00Z Did few fixes for cultivator_density, should be on overlap now.
</p>

<p>
2021-07-25T09:58:00Z Field definitions 254-259 created.
</p>

<p>
Then created new PDA map image in GIMP, had already cultivator and grass texture patterns ready to go so it was quick and easy task.
</p>

<a href="screenshots/PMC-Grande-Gardens-16km-2021-07-25T1014.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Grande-Gardens-16km-2021-07-25T1014.jpg" alt="PMC Grande Gardens 16km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
That PDA mapview image is just for debug purposes, not planning on leaving those yellow lines and other colored dots there at least with those colors. I just want to be able to navigate all the farm yards, railroad tracks etc during development.
</p>

	<h2>2021-07-25 Design Doc Cleanup</h2>

<p>
2021-07-25T21:59:00Z New editing day has started, renamed railroad silo XML directories and files for sequential order. Edited these in EditPadPro / notepad++ so no GE work, was wondering if I can edit I3D file with text editor and have no issues with the shape file, apparently you can. Checked in-game and railroad silos show up as designed, no errors. Nice.
</p>

<p>
On yesterdays re-design editing I missed asphalt interstate road, so added that back in, also changed railroad track ground texture color to mapUS roughDirt.
</p>

<p>
2021-07-26T01:51:00Z Did some cleanup work on the new re-design fields and farm yards, various little things like trees on a field, farm yard buildings on a field etc.
</p>

<p>
Then went off the rails and painted some new dirt roads heh. Dirt road between F06 and F07 is ... empty, added spruce trees to north and maple/volume trees on south side. F61 and F62 N side created farm yards 61 and 62.
</p>

<p>
2021-11-20T02:39:00Z Quick note: was watching <a href="https://www.twitch.tv/penalty_box_gaming" target="_blank">penalty_box_gaming</a> twitch stream and he wanted to try latest dev version of PMC Grande Gardens 16km so I came to editing computer to compile and upload it for him, I cant even remember in which state the current dev "build" is. Hehe.
</p>

<p>
This version is called v1.1.12
</p>

	<h2>2021-12-17 Aftermath of Farming Simulator 22 Release</h2>

<p>
November 22nd 2021 Farming Simulator 22 for windows 10/11 was released... I hate windows, especially 10 and I will never ever going to install 11 or anything even more crap than that version. FS22 to me was crap too, guidanceSteering mod was a nice release but once Courseplay (FS22) came out... it was utter trash with the hideous integrated GUI setup, eeww!
</p>

<p>
2021-12-17T15:22:00Z Wrote the below paragraph into PMC discord servers #fs19 channel, thought I could copy paste it here:
</p>

<p>
<i>Did a walk-about around PMC Grande Gardens 16km, even after that big re-design there is still so much empty space. Hmm I need to read my dev diary for specific details, maybe the re-design was not finished yet that the biggest fields were without enlarge. You could fit couple of ravenports for all the empty space you see between fields and roads. The place just feels.. "off" somehow. Of course a lot of empty space gives room to breathe, to park vehicles, to put down placeables etc. Dunno, I just want the place to be more, "busy".</i>
</p>

<p>
Background note: on 2021-07-28 was my last FS19 editing/playing day, after that I only edited and played <a href="https://www.pmctactical.org/arma3/" target="_blank">ArmA 3</a>, all day every day, not giving even a thought for FS19 or the community, none of it. I was completely living in ArmA 3 universe.
</p>

<p>
2021-12-17T18:12:00Z Did a read through of this dev diary beginning from re-design part to catch up on what was done, also read PMC discord server #fs19 channel of what we talked about this, added those few screenshots from discord attache. Looks like it is quite advanced re-design but which still leaves me feeling like its an empty space everywhere.
</p>

<p>
Farming Simulator 22 was released almost a month ago now, been playing it not done any fs19 editing/playing. When it comes to editing I feel like I've lost the edge, that sharpness even on my own projects. I would like to just take v1.1.12 and port over Start From Zero savegame to it and farm few fields for few days, to get my "mojo back" heh.
</p>

<p>
Sounds kind of weird but thats how it is, been away from FS19 since end of july and now just been playing FS22 for the past few weeks, I feel so detached to FS19 and the person I was in july. I need to get my editing magic back <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
2021-12-17T18:34:00Z Decided to continue playing v1.1.12 Start From Zero savegame, lets see where that leads us...
</p>

	<h2>2021-12-18 Re-Design Reveal</h2>

<p>
2021-12-18T20:07:00Z Last nights PMC Grande Gardens 16km new re-design game-play revealed that while the new irregular shape small fields looked very cool in GIMP, they are in fact pretty bad in-game.
</p>

<p>
Re-design idea was to remove empty space by adding small fields and enlarge old fields dragging them closer to roads and other fields.
</p>

<p>
So I added tons of new oddly shaped small fields, drew them free hand (selection) in GIMP.
</p>

<p>
This resulted in clutter on ESC mapview. There is one area where all you see is one big blob of field color without borders/edges and field ID numbers are overlapping making it hard, well basically impossible to see what the field number actually is.
</p>

<p>
My new small fields idea backfired, badly <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
This terrain has so many insane size square fields that in balance I wanted to have some smaller irregular shape ones which are useful for New Farmer game-mode career starts.
</p>

<p>
But guess you cant take the spots out of leopard, this terrain is known and will always be known for the crazy big fields and trying to change that, trying to cater into all kinds of players... is just fooling yourself.
</p>

<p>
Dunno how to explain it heh.
</p>

<p>
Now I made a decision to backtrack on the re-design and merging many of the smallest fields into larger irregular sizes so that field ID numbers have plenty of space in ESC mapview. Also leaving more gap between fields so they arent "melted" together.
</p>

<p>
2021-12-19T02:53:00Z Time to paint some cultivator_density fields in GIMP.
</p>

<p>
2021-12-19T03:35:00Z Finished painting all the new fields in blue so they are now merged where possible.
</p>

<p>
Yes I guess all the small fields went bye bye now, but as said the field IDs cluttering ESC mapview ruins gameplay for me, this is large scale farming get the hell out with your tiny little girlie men fields! <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
2021-12-19T04:01:00Z Deleted all field definitions that were no longer used because merged fields, there was so many of them, I love it.
</p>

<p>
Checked in-game and found few field definitions I forgot to delete, so launched GE and get rid of them. There is still some spots that have ugly empty spaces, damn what do I have to do to fill this terrain with stuff <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
2021-12-19T04:12:00Z Now its time to compile v1.1.13 and do some actual in-game testing to see how it really looks and plays.
</p>

	<h2>2021-12-25 Wrapping Up Re-Design Project</h2>

<p>
2021-12-25T21:46:00Z Time has come to finish the design doc work with full synchronization to whats actually in GE. I'm going to start by taking backups for obvious reasons, then painting some sort of forest bacground texture in GE for all the places with trees, then bringing those forest areas from weight images into design doc. Then I'll finish design doc so its tight without empty space and hopefully then I'm finally happy how this terrain looks and I can continue my Start From Zero savegame <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2021-12-25T22:04:00Z First forest_ground textures painted, plenty of more to go. Now the only issue will be, how do I distinct already painted areas so I don't have to browse back and fort trying to find them. Well obvious solution is to simply delete all trees where I already painted them. This of course requires backups so I can restore the trees back, which I just took. But also why not save the forest_ground painting layer too, hmm so I'm going to export forest.i3d as backup, and once the whole painting task is done I'm going to restore it back.
</p>

<p>
Painting was coming along nicely.
</p>

<a href="screenshots/PMC-Grande-Gardens-16km-2021-12-25T2221.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Grande-Gardens-16km-2021-12-25T2221.jpg" alt="PMC Grande Gardens 16km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Then painted wind turbines, high voltage power towers and GSM transmitters with roughDirt01 ground detail texture. I want to see in GIMP where these important landmarks are, also few of the wind turbines and high voltage towers were in field and road now, so those needs to get fixed.
</p>

<p>
2021-12-25T23:57:00Z Finished ground detail texture painting.
</p>

<p>
Next I moved the forestGround0* images into GIMP design doc, all merged into one big blob. This needed some figuring out as first the weight image resolution was 4096 while design doc is 8192 same as density images, then the 1-4 weight images did not actually produce a blob, there still was some missing pixels.
</p>

<p>
Decided to paint forest with dark green RGB 20,80,10 color, but in the design doc that appeared way too dark against background and even for the other colors, so brightened it up to RGB 60,180,40 which was nice green and snappy.
</p>

<p>
What a mess that GE roughtDirt01 painting for wind turbines etc was, it apparently went into the same image as railroad tracks which was roughMud01, I don't get it, I specifically chose roughDirt01, heh oh well whats done is done. Now I had to take roughMud01 into GIMP and erase all the railroad track painted pixels, ugh.
</p>

<p>
2021-12-26T00:53:00Z Lunch break, I'm starving.<br>
2021-12-26T01:21:00Z Feeding time over, back to painting roughMud01 in GIMP.
</p>

<p>
Patched holes for high voltage power towers and wind turbines on cultivator_density including new fields painting layers. Looking good.
</p>

<p>
2021-12-26T02:10:00Z There are still some empty spaces, but now I have plenty of new forest patches painted.
</p>

<p>
Was looking around what to fill and while todays goal was to finish this design, well I cant make up my mind what to fill in those few remaining empty spaces, heh damn dude how hard can it be, make a field, or a forest, anything hehe. Oh well yeah, I want to get this current design in-game and fly around in real 3d world to see for myself.
</p>

<p>
2021-12-26T02:25:00Z Starting to bring the design into GE and therefore in-game. Its a tricky as there are asphalt and dirt roads, plus those new farm yards and high voltage tower spots. I don't remember currently how I did graphicsmagick bat files for asphalt + dirt road merging into two different weight image sets so that grass would be still patched properly.
</p>

<p>
2021-12-26T02:30:00Z Decided to merge the 2021-07-12 created BLUE fields layer into our actual big RED Cultivator_density layer, I mean these new fields are our current stuff no need to keep them in their own layer anymore which causes me extra step of work when exporting satellite_texture_cultivator_density.png image.
</p>

<p>
Design doc interstate highway and regular smaller asphalt roads RGB 0,0,0 ie black. Dirt/gravel RGB 100,100,100 ie gray.
</p>

<p>
Filename dirt_farm_yards_etc.png is all the dirt/gravel in farm yards, wind turbine / high voltage tower bottoms, RGB 255,255,255 white.
</p>

<p>
I tried to get graphicsmagick to read my asphalt and dirt road PNGs, merge them together with farm yards etc dirt PNG, then change any color to white and background black, to finally create weight image. Had some issues to get it working. The problem was that graphicsmagick considers RGB 0,0,0 to be transparent, it is not, its BLACK, for fucks sake there is a difference <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
So decided to give up and just use RGB 1,0,0 for my asphalt roads and interstate highway design doc color, I don't have time to play kiddie games with crap values. Sigh.
</p>

<p>
2021-12-26T05:07:00Z Finished graphicsmagick bat files to generate asphalt road asphalt01_weight.png and dirt road roughDirt01_weight.png images.
</p>

<p>
2021-12-26T07:09:00Z Got a lot of graphicsmagick bat file work done, now have asphalt / dirt roads and farm yards ground detail textures in GE. This is all GIMP export and then just run a bat file to process all images.
</p>

<p>
2021-12-26T08:45:00Z Uuh its been a long day already and most part of it been spent working on graphicsmagick bat files, I feel like my brain is melting heh. Right now terrain detail textures for asphalt, dirt roads and farm yards is done. Grass cutting from fields, roads and farm yards is done. Wind turbine and high voltage power tower gravel textures fit nicely. Overall I like it.
</p>

<p>
Next I need to patch in forest terrain detail textures so I get to finalize the tree object placement.
</p>

<p>
However while I don't feel sleepy tired yet, I just somehow wheel ... not even exhausted, but "overwhelmed", difficult to explain as usual. I just want to stop brain storming and switch into brainless TV watching mode for the rest of the evening <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Naah I'll keep going for hour or two more, gotta get some more work in before calling it a day.
</p>

<p>
2021-12-26T09:46:00Z Its time to call it a night for editing and switch to tv watching, just don't feel like I can squeeze any more editing energy out of myself for today, its been a great day, hopefully tomorrow can continue and start to game-play test these new edits.
</p>

	<h2>2021-12-26 GraphicsMagick Editing</h2>

<p>
2021-12-26T22:38:00Z New editing day has started, just finished days first meal and time to get to work, unfortunately there are some chat going on in PMC Farming discord and unfortunately unless I simply close discord it will take my editing time. But we'll try to get through it.
</p>

<p>
Today, well hmm guess its time to try terrain in-game to see how it looks and whats missing. I think all the graphicsmagick bat files were finished last night and images generated properly.
</p>

<p>
2021-12-26T23:08:00Z Tested it in-game, no errors and overall terrain detail textures look good. Railroad tracks do not have a texture set yet, that needs to be added.
</p>

<p>
2021-12-26T23:39:00Z I'm really bogged down with discord chat, helping one guy to get his fs22 real world data terrain in-game, step by step even the most basic stuff. I love to help people, but at the same time its painful as my own terrain editing tasks are halted when I type stuff in discord.
</p>

<p>
Railroad tracks textures; first erased or blacked out all weight images, then in GE imported PMC_Helpers, selected rail road track splines one by one and ran mapUS asphalt single color terrain detail texture painting script to them, saved and brought the asphalt01_weight.png into GIMP. Then basically realized that my design doc already has exactly the same railroad tracks painting layer already, oh well.
</p>

<p>
Was thinking about my graphicsmagick bat files, railroad tracks are perhaps a bit uncommon terrain feature, not sure if its a good idea to write them into my bat files as required item like asphalt and dir roads are.
</p>

<p>
2021-12-27T01:15:00Z Got special railroad track version of my terrain detail texture generating graphicsmagick bat file done, its kind of dumb to have second bat for railroads, but I don't see railroads being so common that you'd have to have them on by default, not sure how that would work if you have no railroads. So yeah its better to have specific custom bat for railroad version. Also was thinking about "if exists" type scenarios, but nah it kind of gets messy.
</p>

<p>
Anyways now I have asphalt roads, dirt roads, forest backgrounds, farm yards / wind turbines / high voltage towers and mentioned railroads terrain detail textures done in GE.
</p>

<p>
Next I need to add more trees to few locations where I painted forest ground textures.
</p>

<p>
2021-12-27T01:33:00Z First short tree line / bunch / patch created.
</p>

<p>
2021-12-27T03:07:00Z Been adding several forest patches / treelines, doing good progress. But now its lunch time ...<br>
2021-12-27T03:37:00Z Feeding time over, back to editing.
</p>

<p>
Added one more forest treeline, this time with spruce/pine trees for variation. Then it was time to sync latest version into fs19 and try it in-game to see where can I find more forest ground textures without trees.
</p>

<p>
2021-12-27T03:55:00Z In-game test on editing computer.
</p>

<p>
Then got side tracked by helping a guy in PMC Farming discord to create 16.3km real world data terrain source files for in-game.
</p>

<p>
2021-12-27T08:06:00Z After a break compiled new terrain detail texture and then tested in-game, everything looks to be running OK.
</p>

<p>
I felt lack of motivation, just felt very lazy not tired but all I wanted/could do is to watch some dumb youtube videos or some throw away entertainment. And now its lunch time, I have to say I'd be surprised if I can squeeze out any editing today, but hey who knows maybe that lunch gives me some calories to burn in form of mental energy heh, we'll see.
</p>

<p>
2021-12-27T08:38:00Z After a meal I decided to just cleanly not even attempt of getting back to editing today, just didn't feel like. Hey this is my life with a burnout... I returned from my last holiday on august 3rd 2016 and since that I've been staying home editing or doing computer stuff every day, I have been out with a friend precisely 3 times (few hours) in all these years. So yeah, guess I should be happy to get any editing done, at all...
</p>

	<h2>2021-12-29 GIMP Design Doc Painting Once Again</h2>

<p>
2021-12-29T00:36:00Z New editing day has started, todays goal is to finish this design doc work. It doesnt help that I've done some FS22 editing on the side etc, but today will be disappointment if the field shape/size removing of empty space work is not completed, I mean how hard is it to paint a GIMP image huh.
</p>

<p>
I'm going to launch FS19 and check all empty space in-game where I can see all player farms etc coming together nicely with better view distances than in GE, when I find empty spaces I will ALT-TAB to GIMP and paint the design doc right away and continue until I have gone through the whole terrain. Will try to do this from west to east direction coming down from north to south, not just randomly jumping around the terrain hoping to find empty areas.
</p>

<p>
First took backups of Sources directory XCF images, never forget backups. These were copied again to two different HDDs and even on PMC Linux computer. Then synced latest project dir to FS19 mods dir before launched FS19 itself.
</p>

<p>
Created new dirt road around F97 and increased field size. Did this on new field fix layer in GIMP and in the usual dirt road layer.
</p>

<p>
2021-12-29T01:13:00Z Well, done several field resizes and reshapes, added two roads, heh this play-by-play dev diary is hard to do when you're excited about editing <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2021-12-29T01:34:00Z When editing the northern row of fields/roads I suddenly got heavy GIMP stutter even though twitch live stream in right window and OBS video recording was working just fine, had to save and close the design doc XCF file just in case. At this point I was almost done with the northern row.
</p>

<p>
It still felt like it took a long time to get close of being done with this northern row/edge, if its this rate through the terrain until reaching south row/edge, man it will take hours to paint. Anyways, back to work.
</p>

<p>
2021-12-29T02:36:00Z Created brand new field at F30 NE corner, filled some empty space nicely and came out large enough to fit field ID number just fine.
</p>

<p>
2021-12-29T04:02:00Z Uuh hard at work, painting <b>fatter</b> fields, also moved one treeline completely to the side a bit so it has to be re-created in GE but it was a good design decision for game-play so well worth doing. Now design doc is half way done, so hum how many hours its taken now, its probably good indicator how many more hours before its done.
</p>

<p>
I love this, PMC Grange Gardens 16km will look SO GOOD after this re-design is complete I simply cannot wait to continue playing <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Here you see the progress snapshot, all the blue fillers are the areas I've covered so far, about half way done.
</p>

<a href="screenshots/PMC-Grande-Gardens-16km-2021-12-29T0405.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Grande-Gardens-16km-2021-12-29T0405.jpg" alt="PMC Grande Gardens 16km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Was looking at food timer and still 56min to go before next meal, dang I'm already hungry, but we'll keep putting in more painting work before alarm goes off.
</p>

<p>
When eyeballing at the non player farms in west edge of F06 which is right at the terrain edge... those look so stupid... they have to go. I don't know what I was thinking while creating those locations, they are so close to each other that it makes no sense to have farms that close, also the terrain edge is bad because one false move and klonk you hit the edge geometry, not to mention that currently there is just oblivion beyond the edge.
</p>

<a href="screenshots/PMC-Grande-Gardens-16km-2021-12-29T0408.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Grande-Gardens-16km-2021-12-29T0408.jpg" alt="PMC Grande Gardens 16km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
So I painted off those farm yards from the desing doc. Poof, gone.
</p>

<p>
2021-12-29T04:44:00Z Still 25min for food alarm but its time to expedite it, I'm starving and getting that "stress frustrated" physical feeling when editing so intensively for so many hours straight, so this is good time to take a cooking food break.
</p>

<p>
2021-12-29T05:45:00Z Feeding time over, back to GIMP.
</p>

<p>
Railroad silo 11 down in SE needs to be flipped over so that the semi-truck access point is south side of the railroad tracks. Wrote a bug report about it.
</p>

<p>
2021-12-29T09:17:00Z Done! <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
I'm sure there will be some small missed spots, or places which needs still some tweaking after I actually get to game-play test it, but yeah now its all done.
</p>

<a href="screenshots/PMC-Grande-Gardens-16km-2021-12-29T0918.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Grande-Gardens-16km-2021-12-29T0918.jpg" alt="PMC Grande Gardens 16km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Looking <b>TiGHT</b> <img src="../images/smileys/icon_biggrin.gif" alt="Smiley :D" loading="lazy">
</p>

<p>
First in-game test was really surprising, I was hoping for a good result but I never expected it to look so good, everything just falls into place, it looks so awesome! <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Screenshots from testing the re-design work from the past few days almost a week it feels like.
</p>

<a href="screenshots/PMC-Grande-Gardens-16km-2021-12-29T1003.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Grande-Gardens-16km-2021-12-29T1003.jpg" alt="PMC Grande Gardens 16km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<a href="screenshots/PMC-Grande-Gardens-16km-2021-12-29T1138.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Grande-Gardens-16km-2021-12-29T1138.jpg" alt="PMC Grande Gardens 16km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<a href="screenshots/PMC-Grande-Gardens-16km-2021-12-29T1139.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Grande-Gardens-16km-2021-12-29T1139.jpg" alt="PMC Grande Gardens 16km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<a href="screenshots/PMC-Grande-Gardens-16km-2021-12-29T1152.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Grande-Gardens-16km-2021-12-29T1152.jpg" alt="PMC Grande Gardens 16km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
2021-12-29T11:54:00Z Been hunting for bugs, found several, nothing too bad except many utility poles on fields. Overall terrain looks now amazing, I am blown away how great it turned into when that empty space got removed or lets say 95% reduced.
</p>

<p>
2021-12-29T14:11:00Z Started to hunt down bugs like utility poles on fields. This is cumbersome as I cannot see the utility poles OR field numbers in GIMP, so I cant just go to GIMP and start fixing, I need to GE load the terrain with field definitions and not only that but check actual field numbers from editor log as the field "name" numbers are bogus now when many of them got deleted due merging fields.
</p>

<p>
Fixed F79 N side player farm CBJ building on a road, also moved the trees from the road into the boonies.
</p>

<p>
Deleted Farm_21, Farm_54, Farm_55, Farm_56 and trees to go along with them on west side of F06 as planned.
</p>

<p>
2021-12-29T16:02:00Z Finished editing for today, been 16hrs day already and nothing I could do anymore would make any difference, going to just chill for last hour of this day and then off to sleep. Really hoping that tomorrow I get to actually continue Start From Zero savegame.
</p>

	<h2>2021-12-30 Confirming Fixes</h2>

<p>
2021-12-30T00:05:00Z New editing day has started, today begins by going over fixes I did last night. I have bugs/changelog list open in EditPad Pro and going through all fields that had utility poles etc issues fixed.
</p>

<p>
2021-12-30T01:03:00Z All yesterdays fixed but unconfirmed bugs checked, only one was not properly fixed (utility poles <i>right</i> at the field edge). Pretty good result.
</p>

<p>
When running with 20 speed from one bug report to the next across terrain it was funny as it took so long running with that speed, I had to use any nearby teleport icon to my advantage hehe.
</p>

	<h2>2022-01-01 Happy New Year!</h2>

<p>
2022-01-01T14:49:00Z Happy new year 2022! <img src="../images/smileys/icon_biggrin.gif" alt="Smiley :D" loading="lazy">
</p>

<p>
OK time to get back to work on to finalize design doc, need to add some forest / treeline patches in GE (the actual tree objects).
</p>

<p>
2022-01-01T15:03:00Z First forest treeline patch created in the far NE corner. GE is too slow to find those new forest textures, I had to start actual FS19 game and in there with camera fly mode and running speed 20 its much faster and easier to go find the forest areas <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Was thinking about adding some spruce/pine (you know those logging trees) between fields with extreme sparse tree interval so it would not kill FPS. Been trying to avoid making too many forest/treelines because the last thing I want to do is to turn this awesome 60FPS long viewdistance terrain to pixel porno HELL with crappy performance.
</p>

<p>
Funny to say that while adding trees heh. What I mean is normally if I add spruce/pine trees they will be thick that you cannot drive a vehicle through it, but adding almost a decorative tree line would be easier to performance and had at least something between the fields other than empty space.
</p>

<p>
Dunno, guess it just needs to be done and if FPS drops too much I can always remove the extra trees.
</p>

<p>
2022-01-01T16:55:00Z I'm placing every forest tree line into its own spline (well doh) and transformgroup so if we end up with laggy terrain I can just go back to GE and simply delete every other new tree transformgroup to see when performance gets back to normal 60FPS.
</p>

<p>
2022-01-01T17:30:00Z Doing great progress adding trees, hopefully not too great so it ruins performance haha. But yeah been adding several tree groups now lost count already.
</p>

<p>
Screenshots? Well, dunno somehow it feels dumb again to take screenshots of these tree object creation setups, I mean when you've seen one you've seen them all, right? Oh well lets put one since you asked <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<a href="screenshots/PMC-Grande-Gardens-16km-2022-01-01T1733.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Grande-Gardens-16km-2022-01-01T1733.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
2022-01-01T18:50:00Z All done, went through whole terrain in-game and placed down all missing trees in GE, uah. Great to have that task done. Now just creating collision map, saving and then another in-game test.
</p>

<p>
In-game test looked overall pretty good.
</p>

	<h2>2022-01-02 Field Definitions From Hell</h2>

<p>
2022-01-02T04:18:00Z New editing day has started, need to mop up those design doc edits like field definitions for new fields being pretty much broken, new PDA mapview image and few player farm buildings were on roads.
</p>

<p>
First took full backup of the PMC_Grande_Gardens_16km terrain project dir, then copied PMC_Grande_Gardens_16km_dem.png to backup PNG, then opened PMC_Grande_Gardens_16km_dem.png in GIMP and with RGB 0,0,0 blacked it out. Now our heightmap is completely flat, perfect for field definition work.
</p>

<a href="screenshots/PMC-Grande-Gardens-16km-2022-01-02T0425.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Grande-Gardens-16km-2022-01-02T0425.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
2022-01-02T04:33:00Z Uuh do I hate editing file definitions <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
2022-01-02T05:27:00Z Finished cleaning up and going through all field definitions, most I did not do nothing other than removing field number (from the transformgroup only).
</p>

<p>
Then restored that backup heightmap PNG and synced files to FS19 mods dir, time for another in-game test.
</p>

<p>
Fixed F15 E side tree line which needed to be moved because we made field wider. Also F15 NE corner had missed spot on cultivator_density design doc so fixed that.
</p>

<p>
Fixed players farm 15 (GE Farm_15) vehicle shed positions in GE PMC_Helpers and in defaultItems.xml config file.
</p>

<p>
Players farm 1 (start from zero farm, NW, by F39 NE corner) had one building on the new road, fixed.
</p>

<p>
Players farm 7, GE Farm_11, building on a road, fixed.
</p>

<p>
2022-01-02T07:04:00Z Painted PDA aka mapview image using FS22 overview.dds and field colors hehe.
</p>

<a href="screenshots/PMC-Grande-Gardens-16km-2022-01-02T0704.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Grande-Gardens-16km-2022-01-02T0704.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
Haven't yet decided if I keep those colors, lets give them a try <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Tested in-game and it looks okay I guess.
</p>

<a href="screenshots/PMC-Grande-Gardens-16km-2022-01-02T0717.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Grande-Gardens-16km-2022-01-02T0717.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<a href="screenshots/PMC-Grande-Gardens-16km-2022-01-02T0718.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Grande-Gardens-16km-2022-01-02T0718.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
2022-01-02T07:37:00Z At this point I ran into the somewhat common issue that "what do I do next?", there was several issues on the re-design doc era bugs list but most of the field listing positions are now out of date as field numbers changed so basically I have to delete those bug reports.
</p>

<p>
Was thinking of continuing Start From Zero as well that is the whole point here to finish these edits and then continue farming, but I'm so scared of the savegame porting because almost everything has now been changed, density images, placeables, trains, objects, everything... that I just cant think of a way I could port over my existing savegame without losing trains, vehicles and placeable buildings.
</p>

<p>
I could just start brand new savegame and only drop in farmlands, farms/career file, then in-game BUY all the vehicles I own but this will lose all the hours used statistics which I really don't want to do, it just doesn't feel the same if your 350 hours tractor is suddenly replaced with brand new 0 hours one. I know its a nitpicky thing but I just cant get over it.
</p>

<p>
And playing the savegame knowing its not identical true new terrain version as stuff is missing also feels like... whats the point.
</p>

<p>
Hmm maybe if I could finish the terrain edits like "for real" that there truly arent any planned edits coming along, bugs list would be empty etc, but that is such an huge undertaking as my bugs list is very extensive with most of the items being new ideas for whatever railroad silo grain bins or something like that. I think many of the actual bug reports are now obsolete with this re-design.
</p>

<p>
Dunno, this is my dilemma, what to do.
</p>

<p>
Hmm actually this should have been written to the Start From Zero story page, oh well <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
2022-01-02T07:47:00Z But now a lunch break while I figure this thing out <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2022-01-02T13:11:00Z Watched some TV, cooked food and ate while figuring out what to do. This is so dumb, its not rocket science or life threatening decision, just pick something, ANYTHING to work on hehe. In all fairness this terrain looks super good right now, its hard to pick something to edit on this point as I should probably just start game-play testing it instead.
</p>

<p>
2022-01-02T13:51:00Z Decision was made (yeah only took like 40min haha), I'm going to compile new version of the terrain and switch to PMC Gaming computer, then try to port as many of the placeables into new savegame, that is all.
</p>

<p>
This is now v1.1.14.
</p>

	<h2>2022-05-30 First Official Release Day</h2>

<p>
2022-05-30T15:32:00Z Short time ago started to merge my local web pages and screenshots into our website directories, release will happen today, there is no turning back now.
</p>

<p>
2022-05-30T17:50:00Z Finished proof reading and adding links to this dev diary page, uuh that always takes forever.
</p>

<p>
2022-05-30T18:11:00Z Changed modDesc.xml version to v1.2 and compiled release 7-zip packet.
</p>

<p>
Sorry for this terrain being under development for YEARS, looking back today I feel like this terrain should have been released months if not years ago already. It feels shitty that fs22 crap got released and most of the community jumped ship to the shiny new thing and now this terrain gets released to basically... for nobody, an empty community. For example all PMC internal terrain testers have jumped ship to fs22, they no longer play fs19.
</p>

<p>
If anyone reads this, download, play and enjoy PMC Grande Gardens 16km terrain please send me an giants forum message, email or discord message as I would love to hear your feedback. Links from <a href="../contact.php" target="_blank">contact us</a> page.
</p>

<p>
2022-05-30T18:57:00Z PMC Grande Gardens 16km v1.2 first official public release has been finally released! <img src="../images/smileys/icon_cool.gif" alt="Smiley :cool:" loading="lazy">
</p>

</section>

<footer>
<p>
<a href="pmc-terrains.php" class="button">PMC Terrains</a>
<a href="changelog-pmc-grande-gardens-16km.php" class="button">Changelog PMC Grande Gardens 16km</a>
<a href="pmc-grande-gardens-16km.php" class="button">PMC Grande Gardens 16km</a>
<a href="../index.php" class="button">PMC Farming Simulator root</a>
</p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("../include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
