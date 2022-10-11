<!DOCTYPE html>
<html lang="en">
<head>
<title>Dev Diary PMC Super Six 6km PMC Farming Simulator 22</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Dev Diary PMC Super Six 6km PMC Farming Simulator 22">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<header>
<h1>Dev Diary PMC Super Six 6km PMC Farming Simulator 22</h1>
</header>

<section>
	<h2>Dev Diary PMC Super Six 6km FS22</h2>

<p>
This is developer diary for Farming Simulator 22 terrain called <a href="pmc-super-six-6km.php">PMC Super Six 6km</a>.
</p>

<p>
Special note: this terrain was initially created on 2021-12-23 but I have no dev diary records of that day. The project name was "PMC Test Farm 6km" which was screenshotted and mentioned many times in PMC Farming discord server. It was only mere hours before release when the final name of "<b>PMC Super Six 6km</b>" was chosen. To make this dev diary easier to read for everyone I have renamed all "Test Farm" references to "Super Six" now.
</p>

<a href="screenshots/PMC-Super-Six-6km-2021-12-23T2246.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Super-Six-6km-2021-12-23T2246.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
2022-01-24T02:53:44Z So I wanted to make another fictional terrain, more training for <a href="../19/terrain-design-document.php">GIMP design doc painting</a>, graphicsmagick bat files and in general running data through my tool pipeline.
</p>

<p>
This time I don't want the terrain to be a big, it would have to be less than ten kilometers, also now I'm going to do boring grid square design for the most part as those latest designs have been so goofy screwy looking.
</p>

<p>
Looks like 6.1km x 6.1km would be nice size nobody has done before including me (well other than testing).
</p>

<pre>
Terrain size: 6.144 kilometers x 6.144 kilometers
Heightmap grid size 4096
Cell size 1.5 meters
</pre>

<p>
I already have PMC_Test_Farm_6km terrain project directory. Starting to inspect whats in these terrain files. This is <a href="../19/terrain-heightscale.php">heightScale</a>="255" <a href="../19/terrain-unitsperpixel.php">unitsPerPixel</a>="3" and heightmap was RGB 0,0,0 level 0 meters. The <a href="terrain-fieldground.php">fieldGround.xml</a> is missing so this terrain is very old relatively speaking.
</p>

<p>
File dates on PMC_Test_Farm_6km.i3d and XML are 2021-12-23, day before christmas. So yeah very old.
</p>

<p>
Cant decide if I should just re-create the whole thing or upgrade this old dir, I am nostalgic guy so would be nice to remember that this terrain was initially created back in 2021 christmas.
</p>

<p>
Yep I am going to preserve this project, just going to generate L3DT <a href="../19/terrain-heightmap.php">heightmap</a>, maybe this time I'll try to do some more hills and bad elevations for farming, not sure what would come out of that. Maybe just make a hilly heightmap and then smooth out field areas in 3d sapphire, it might become nice farming area in fs22. Dunno. Point being, you cannot farm a mountain, but maybe it could have pine/spruce trees for logging or something, overall I'm just bored for flat areas without any hilltops.
</p>

<p>
2022-01-24T03:41:26Z Used L3DT to generate new 4096 res heightmap, it came out pretty rough so I clipped it out to 1m - 150m elevations, it still looked pretty wild for a farming terrain but lets see how it looks in FS22.
</p>

<p>
Got heightScale="149" for this one.
</p>

<p>
2022-01-24T03:45:39Z Started to paint design doc in GIMP. Brought in heightmap, set its mode to RGB 8bit so it wont hogg performance, then started to paint asphalt roads on top of the lowest elevation points. Hopefully this turns out alright.
</p>

<p>
2022-01-24T04:13:30Z Made a big mistake painting that design doc, after doing the above and finishing the painting work... I realized that I forgot to resize the XCF image to one meter per pixel scale (1m/px) which means 6144 pixels by 6144 pixels resolution. Right now I painted it over the heightmap image which is 4096 x 4096 ... sigh, dumb mistake man, dumb mistake... <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
2022-01-24T04:27:04Z Started to graphicsmagick process these images into GE readable format.
</p>

<p>
Messed up design doc directory to GE directory images copying, by mistake had wrong terrain project name there, sigh. Then had to sort out some other mess with the existing terrain files, could not get weight images new paintings to work, so it requires some fiddling around.
</p>

<p>
2022-01-24T05:19:29Z Finally got all images showing up in GE, saved and exited.
</p>

<p>
Its not really ready for in-game testing, but dunno lets go take a look anyways. I want to see how bad the heightmap really is in-game.
</p>

<p>
2022-01-24T05:26:15Z Test done, elevations sure look interesting but they are way too rough/high, pulling a heavy implement like lets say grain cart or semi truck with grain load, or even a seeder would probably be really bad experience. Also the goofy shapes roads look so stupid. Dunno maybe someone in the community would like this kind of design but I don't.
</p>

<p>
Hmm probably have to remake the design, initially I wanted to do boring US road grid but dunno why I changed my mind at the last minute, maybe I got distracted by the heightmap and attempted to lay my design over it.
</p>

<p>
2022-01-24T05:35:43Z At this point I sort of lost motivation to edit, just felt like perhaps farming a bit or watching youtube real life farming videos, dunno. Sometimes you just lose the motivation in middle of the day.
</p>

<p>
There is a CTD with error:
</p>
<pre>
2021-12-23 22:04 Error: AI block info layer has invalid size.
</pre>

<p>
2021-12-24T21:05:00Z Fixed above CTD with infoLayer_* 16384 image resolution change.
</p>

<p>
2022-01-24T22:49:53Z Back to working on PMC Super Six 6km. Funnily at PMC Gaming computer I don't have my yesterdays dev diary to read here so I'm starting the editing day blind, what I recall was that heightmap is way too high/rough and the design doc layout was goofy. I can easily fix the heightmap but design doc would need some serious work, basically a remake.
</p>

<p>
Once again, we start the day by in-game check to see what is the result of yesterdays work.
</p>

<p>
Synchronized terrain project dir to fs22 mods dir. Well loading into it there are those ugly giants placeholder icon/preview dds images in place, yikes those are eye burning blinding white images, need to fix first thing. Actually I need to create some universal PMC placeholders.
</p>

<p>
There was floating elmcreek mapUS tutorial icon, hmm I thought those got commented out already. This was for animal dealer, hmm. Another was for vehicle shop.
</p>

<p>
Heightmap is way too high/rough elevations, looks just silly like this, it needs to be neutered.
</p>

<p>
Vehicle shop triggers were not present, could not purchase a simple vehicle to drive around testing the elevations on roads.
</p>

<p>
ESC mapview <a href="terrain-overview-image-mapus.php">overview.dds</a> is missing.
</p>

<p>
ESC mapview soil composition page lime/plow etc _Level images missing, fieldGround.xml, this page is displayed off scale now.
</p>

<p>
PMC Super Six 6km design has disgusting "county line" look to it with those roads being so free form that fields create that look, heh it looks stupid.
</p>

<p>
2022-01-24T23:14:59Z In-game test over, got enough data to do some edits.
</p>

<p>
Created universal PMC icon/preview dds images to be copy pasted into new terrain projects, these are now located in C:\Farming.Simulator.22.Editing\Images.Templates.Pre.Painted\ directory. Copied these right away to this terrains root dir, edited to proper name, exported PNGs and converted to dds using imagemagick bat file.
</p>

<p>
Edited <a href="terrain-moddesc-xml.php">modDesc.xml</a> for v0.1 which was included in description as well.
</p>

<p>
Deleted unused .shape etc cache files from maps\PMC_Super_Six_6km\ dir. These unused and wrong file name files seem to haunt several terrains of mine, they are now fixed in my generate_terrain bat file, but yeah residue is lingering for a long time heh.
</p>

<p>
Edited my _run_generate_terrain_template_from_sample_data_FS22.bat file according to lessons learned from PMC Super Six 6km terrain (missing) files.
</p>

<p>
Edited PMC_Super_Six_6km.xml config file, removed mapUS tutorial floating icons. Removed map interactive icons for animal dealer and vehicle shop.
</p>

<pre>
2022-01-24 22:54 Warning: Farmland-Ids not set for all pixel in farmland-infoLayer!
</pre>

<p>
Hmm activated <a href="../19/terrain-farmland.php">farmland</a> ID 1 which new farmer game-mode player owns.
</p>

<p>
L3DT loaded this project, neutered heightmap vertical range from 150 down to 30m, got new heightScale="29" and then exported heightmap_L3DT.png image.
</p>

<p>
GE loaded terrain up, heightmap looks more suitable now, it still got quite few elevations but they should be fine. Aligned careerStartPoint transformgroup to ground, then imported vehicle shop triggers. This import again took forever, I simply do not understand what is wrong with GE v9.0.2 as it takes this long to import tiny i3d file. It must be something wrong on the binary files it writes, like some missing or something else strange.
</p>

<p>
I need to make a mapUS v1.2 sample terrain template with vehicle shop, animal dealer bale selling point, PMC_Helpers, basic tree types and various other things already imported as this would save so much time in the long run.
</p>

<p>
2022-01-24T23:56:58Z Only now GE finished importing that tiny vehicle shop trigger setup. Oh man these delays.
</p>

<p>
Then started to convert various PNGs into overview.png using graphicsmagick, but my bat file had some issue as fields red color did not turn into that FS22 field color. Further investigation shows that bat file was fine, it was my railroads.png which was NOT empty, GIMP apparently saves the last layer if you hide all layers, you cant have all layers hidden if you want to export transparent image, you have to have transparent layer visible <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Then copied infoLayer _Level images and fieldGround.xml into this terrain, gotta get proper size lime/plow etc images into play.
</p>

<p>
2022-01-25T00:44:20Z Its time for another in-game test, lets see what happens this time.
</p>

<pre>
2022-01-25 00:45 Warning: Farmland-Ids not set for all pixel in farmland-infoLayer!
2022-01-25 00:45 Error: Farmland-Id 1 not defined in farmland ownage file 'C:/FS22.Mods/Dev/PMC_Super_Six_6km/maps/PMC_Super_Six_6km/data/PMC_Super_Six_6km_farmland.grle'. Skipping farmland definition!
</pre>

<p>
Yikes, newbie editing INC heh. Oh well I have no recollection how the farmland image was done (if it was done at all yet). So lets take care of that now. Actually I'm going to copy it over from my mapUS v1.2 sample files, that should have nice 1 ID channel painted image. Although its PNG so ... might as well run through the normal hoops by GDM/GRLE convert etc, no way around it.
</p>

<p>
The farmland image was RGB 0,0,0 so hmm yeah cant remember does it start from zero or one, but anyways set it to RGB 1,1,1 now so it will work.
</p>

<p>
And GE is now saving forever again, sigh. I've so had it with this piece of shit win10 / fs22 / GE v9.0.2 stuff. I cant wait to wrap up these test farms and release them so I can be done with fs22 editing/playing for now, win10 crap, courseplay with atrociously bad integrated GUI and lack of other good mods is just not for me...
</p>

<pre>
PMC_Super_Six_6km.i3d saved in 894357.510200 ms
</pre>

<p>
Well got the farmland error fixed, but the soil composition page is still off scale. Hmm. It was because I forgot to edit PMC_Super_Six_6km.xml fieldGround line, got that fixed.
</p>

<p>
2022-01-25T01:26:04Z Hmm what next, well fields, selling points, bale selling point, hmm what else...
</p>

<p>
Launched GE and imported fields, it took forever again and I was getting more and more frustrated with these idiotic delays. Then imported PMC_Helpers.
</p>

<p>
Got a copy paste ready empty coordinate placeables.xml for basic stuff, pasted it here but it turned out to be way too long to read and kind of too technical without any benefit so removed it.
</p>

<p>
2022-01-25T02:48:11Z Placed 12 selling points, had a lunch and just now placed bale selling point.
</p>

<p>
2022-01-25T02:50:40Z Generated first forest / tree line.
</p>

<p>
2022-01-25T04:31:57Z Still plugging down forests, this is taking way too long <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
Noticed on one edge that there is some bug in my design doc, between field edge and terrain edge there is a small strip of something... dark grayish texture, doesnt look like gravel or mud but, something. Need to investigate that, not a big issue though.
</p>

<p>
2022-01-25T05:08:20Z Finished placing trees, oh my, this took way too long than this throw away 6.1km "test" terrain deserved <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
I cannot put this much effort to the following terrains, I can add few groups of trees but that is it, nothing like this that it took over 2 hours.
</p>

<p>
Hum well to be honest with you I feel awful of this workload but saying it as numbers "two hours" sounds like peanuts, hmm that is weird. I was expecting this been like several hours but hmm cant believe it was only two. That was two hours straight though, spline after spline, plugging down trees.
</p>

<p>
Anyways now its done and this terrain looks great with some vegetation at farm yards and few other places. As I said much more than the scope of this terrain deserves.
</p>

<p>
There are only two <a href="../19/terrain-field-definitions.php">field definitions</a> now, so going to add couple more, just a few, no hours long sessions which kill off my pinky copy-paste finger heh. Just something that we can do few contracts while rest of the fields are without field definitions.
</p>

<p>
2022-01-25T05:19:01Z Done adding few field definitions, plenty enough to get contracts going. Now its time for another in-game check.
</p>

<p>
Looks pretty good, very field oriented, nothing but few farm yards with trees and then fields fields and nothing but fields hehe.
</p>

<p>
But man that goofy screwy looking design again heh.
</p>

<a href="screenshots/PMC-Super-Six-6km-2022-01-25T0521.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Super-Six-6km-2022-01-25T0521.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<a href="screenshots/PMC-Super-Six-6km-2022-01-25T0524.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Super-Six-6km-2022-01-25T0524.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
2022-01-25T05:37:49Z Okay time to switch over to the next terrain in my list of projects to fix for a release. This 6km looks pretty good for now, all it needs is a proper name and last round of testing.
</p>

<p>
2022-01-30T09:16:30Z New editing day has started, earlier today I checked this terrain in-game to orient myself that what still needs to be done and I discovered that placeables collision image is wrong size, so that needs to be fixed and I'm starting to do that now.
</p>

<p>
First as usual took backups. Had to create _run_backup_PMC_Super_Six_6km.bat file which 7-zip compresses it tight with -mx=9 parameter, then the bat copies it to PMC Linux ubuntu server network directory.
</p>

<p>
This is our current showstopper bug:
</p>

<pre>
Error: Blocked area map is wrong size for terrain (2048 x 2048) vs (4096 x 4096)
</pre>

<p>
Unless I'm mistaken its this image: infoLayer_placementCollisionGenerated so I GDM/GRLE converted all those to PNG so I can resize that image.
</p>

<p>
Copied _run_graphicsmagick_FS22_infoLayer_to_PROPER_size.bat which is kind of temporary bat, it only resizes that above mentioned image. There are no "proper" size for the others as huge terrains require huge images and so on.
</p>

<p>
Did the usual GDM/GRLE PMC_Super_Six_6km.i3d mass replace, loaded it up in GE. Then renamed transformgroup fields to Fields, oh my major change hoho. Created Buildings transformgroup and moved vehicleshop there. Then saved (just because, no reason) and uh oh this takes a long time again <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
These loading/saving times are just killing my will to live, I cannot wait until these FS22 test farm series of projects have been wrapped up and released so I can wash my hands from this piece of shit fs22 editing.
</p>

<p>
While GE was saving I went and started to write <a href="https://trailerparkfarms.itch.io/" target="_blank">TrailerParkFarms (TPF)</a> vehicle shed pack placeables.xml config file lines heh.
</p>

<p>
2022-01-30T09:42:16Z Save finished, uuh.
</p>

<pre>
PMC_Super_Six_6km.i3d saved in 828062.468600 ms
</pre>

<p>
Imported PMC_Helpers.i3d, edited "Grain.Bins" transformgroup to "Placeables" and exported PMC_Helpers.i3d back out again, deleted it (from GE) and saved. Now saving lasted only:
</p>

<pre>
PMC_Super_Six_6km.i3d saved in 7566.849300 ms
</pre>

<p>
Eh? <img src="../images/smileys/icon_confused.gif" alt="Smiley :?" loading="lazy">
</p>

<p>
Exited GE and mass replaced I3D PNG back to GDM/GRLE for in-game test.
</p>

<p>
2022-01-30T09:50:41Z Fixed blocked area map error. Okay off to the next issue.
</p>

<p>
Farmland image has no farm yards or other detailed cheap areas, ugh <a href="../19/terrain-farmland-painting-gimp.php">farmland image painting... nice and relaxing GIMP job</a> usually but if you have to do it quickly just to "get it done", it is not very relaxing, oh well you gotta do what you gotta do...
</p>

<p>
In GIMP opened PMC_Super_Six_6km_design_doc.xcf image, well she's missing a background color, of course heh.
</p>

<p>
2022-01-30T10:38:00Z Finished GIMP painting farmland XCF, then graphicsmagick converted it to GE readable PNG, loaded the project up in GE and hit CTRL-S. Now we wait again, patiently.
</p>

<p>
I have to change my editing habits with GE v9.0.2 with these remaining terrain edits. I need to pool every single bug report and issue fix into ONE SAVE in GE, no more, absolutely no further unnecessary saves and PMC_Helper loads in GE, just one time before first release. It is just so much wasted time sitting here fiddling my thumbs while GE is thinking about wonders to the universe or what the hell ever its doing <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2022-01-30T10:52:50Z Finished saving, finally.
</p>

<pre>
PMC_Super_Six_6km.i3d saved in 862658.429800 ms
</pre>

<p>
During loading I noticed <a href="terrain-user-interface-images.php">icon/preview images</a> are still the basic name text, need to add mapview image to them.
</p>

<p>
2022-01-30T11:01:26Z In-game check complete, farmland is looking superb, no errors in the log. This terrain is good to go for the first release <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2022-02-03T08:03:58Z New editing day is upon us, I actually quickly started two or so hours ago when I converted GDM/GRLE to PNG but did nothing else. Now its time to continue and fix rocks_density image to a proper one.
</p>

<p>
Got rocks_density.png copied from C:\Farming.Simulator.22.Editing\Images.Templates.Pre.Painted\ dir, its 8192 res like the other density images and its good to go.
</p>

<p>
In my bugs/issues list there are no other items for this terrain, so guess we are done here, just need to load it up in GE and save to get GDM/GRLE saved.
</p>

<p>
But I am going to import PMC_Helpers with the long loading time, then TrailerParkFarms (TPF) big vehicle sheds. Plan is to start using those in PMC terrains as they fit so nicely to the huge landscapes and TPF is a nice guy who is willing to tweak the clip distance issues I found previously.
</p>

<p>
2022-02-03T08:33:04Z PMC_Helpers import finished, finally. Man this is such a torture, I cant believe I'm actually doing these kind of crap delays. Cant wait to get back to FS19 editing without such nonsense.
</p>

<p>
Okay so this terrain has NO placeables done. Going to add some basic stuff in, but trying not to get bogged down to minor details when doing those, I don't want to spend eight hours doing them.
</p>

<p>
2022-02-03T08:45:15Z Had TPF 72x150 and 90x200 sheds imported and also did PMC_Helpers style import i3d file out of them to "Objects.for.terrains/" dir, but now... its lunch time...
</p>

<p>
2022-02-03T09:11:14Z Feeding time over, back to making placeables.
</p>

<p>
Placed three meridian flat bottom 3608 grain bins and one red TPF 72x150 and 90x200 vehicle shed. It wasn't a very large farm yard so its kind of packed tight, I like it. Those vehicle sheds really give life to the farm yards, bins alone were a bit odd, not necessarily unrealistic as I've seen bins in the boonies on google/maps and real life farming videos, but still some other buildings make it cosy heh.
</p>

<p>
Then added some more, meridian fuel tank and fertilizer bins, water tank too. Starts to look crowded in this yard heh.
</p>

<a href="screenshots/PMC-Super-Six-6km-2022-02-03T0939.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Super-Six-6km-2022-02-03T0939.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
Then added second farm yard.
</p>

<a href="screenshots/PMC-Super-Six-6km-2022-02-03T1001.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Super-Six-6km-2022-02-03T1001.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
Then another, slightly smaller yard this time, could not fit another vehicle shed here heh.
</p>

<a href="screenshots/PMC-Super-Six-6km-2022-02-03T1009.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Super-Six-6km-2022-02-03T1009.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
And one more farm yard, this had a bit more space.
</p>

<a href="screenshots/PMC-Super-Six-6km-2022-02-03T1035.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Super-Six-6km-2022-02-03T1035.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
This 6.1km x 6.1km terrain is really small, I'm looking around here that <i>wait what, we only have few farm yards available</i>, heh.
</p>

<p>
2022-02-03T11:06:32Z Finished creating three utility pole lines.
</p>

<a href="screenshots/PMC-Super-Six-6km-2022-02-03T1106.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Super-Six-6km-2022-02-03T1106.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
That concludes PMC Super Six 6km new placeable additions, nothing more to do. Now its just in-game test to verify everything works. After powergrep4 mass replacing the placeables.xml strings of course.
</p>

<p>
2022-02-03T11:16:15Z Finished cleaning up placeables.xml config file, now we are ready for in-game test.
</p>

<p>
Tested in-game and it took few trys to get it right, first I forgot to load TPF shed packs, then had error in the log because I forgot to add lines to storeItems.xml config file. And third time failed because I forgot to copy the actual XML's into PMC_Super_Six_6km/maps/placeables/ directories <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2022-02-03T11:51:03Z Still had to go back and forth few times, got stuff in.
</p>

<p>
Then I started to debug why I could not sell meridian flat bottom 3608 grain bins. Had to add below value to flatBottomBin3608.xml config file.
</p>

<pre>
&lt;placeable ... &gt;
	&lt;base&gt;
		&lt;boughtWithFarmland&gt;true&lt;/boughtWithFarmland&gt;
</pre>

<p>
Then I could sell 3608 grain bins <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Also if you add &lt;canBeRenamed&gt;true&lt;/canBeRenamed&gt; into the placeable - base, you can rename the placeables.
</p>

<p>
Was looking at giants placeables and they have canBeSold property in placeable - storeData, hmm.
</p>

<pre>
&lt;placeable ... &gt;
	&lt;storeData&gt;
		&lt;canBeSold&gt;true&lt;/canBeSold&gt;
</pre>

<p>
Added these values to all placeables in my copy-paste objects.for.terrains/ dir, for the future use. Copied to PMC Super Six 6km dir as well.
</p>

<p>
2022-02-03T12:18:56Z In-game check complete, I can now buy farmland and all placeables already there (placeables.xml) come along with the land lot, then I can sell all the placeables like lizard water tank, meridian fuel tank, solid/liquid fertilizer bins, 3608 and 3609 grain bins etc <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
But there was some weird thing going on, at first I could not sell TPF sheds, then in another test when I bought all the farmland (not used dev console) I could sell the sheds, so now we are good for cleaning out all buildings/objects.
</p>

<p>
2022-02-03T12:42:06Z And here we are, I don't know what to edit next, bug/issue list is clear and no errors in the log, awesome <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
I am going to switch editing the next terrain on the list <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2022-02-06T11:27:00Z Decided on the name: <b>PMC Super Six 6km</b> <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2022-02-06T14:14:37Z Finished creating savegame with new farmer starter vehicles.
</p>

<p>
Then copy-pasted savegame vehicles.xml over to PMC_Super_Six_6km\maps\PMC_Super_Six_6km\vehicles.xml config file.
</p>

<p>
Checked in-game and vehicles, implements and products appear just fine. Cant tell if anything essential is missing which would prevent player from starting his own farm.
</p>

<p>
Farmland image has area owned by player set on an empty farm yard. Not sure if this is a good idea, guess game-play will reveal it later, but that will have to come from player feedback. For a first v0.1 release this setup is fine as it is.
</p>

<p>
2022-02-06T14:22:19Z Took a backup which I will copy to PMC DevSurf computer for the release packet creation.
</p>

<p>
Once I copied that backup .7z to editing computer and turned off Gaming computer... I realized that uh oh forgot to actually rename the terrain files for the new name, sigh. The thing is I could do it without testing here at editing computer, but it would be extremely stupid to do a release without testing it first, so guess I need to start Gaming computer for the third time during todays quick edits heh.
</p>

<p>
Oh well this was good reminder for the tool pipeline what comes to a release, screenshots, new farmer vehicles, proper file names, etc heh.
</p>

<p>
2022-02-06T14:37:00Z Felt a bit lazy that blah I dont wanna go jumping through hoops to rename this projects files and verify them in-game, checked out time can I take a lunch break, it was still half an hour away but decided to take it now anyways, was just not in the mood to bunny hop back to Gaming computer as of this minute, hopefully I'm with refreshed energy after a meal <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
2022-02-06T15:32:00Z Feeding time over, time to fire up Gaming computer, again, and get those rename and testing tasks done.
</p>

<p>
2022-02-06T15:35:44Z PMC Gaming computer win10 crap fully booted up, linux network login and everything. Ready to start renaming this project for the first release.
</p>

<p>
First another set of backups, yes, never forget backups especially when there is extremely high change of messing this up.
</p>

<p>
Final old name backup 7-zip filename is: PMC_Super_Six_6km_2022-02-06T1536.7z
</p>

<p>
2022-02-06T15:47:10Z And done. First renamed the directory and sub dir for classname, then ran powergrep4 mass replace i3d/xml strings. Renamed my backup and fs22 mod dir sync bat files. Then went through all XML files, renamed PMC_Test_Farm_6km_dem.png to PMC_Super_Six_6km_dem.png and same for farmland image. Checked in-game, works okay and no errors.
</p>

<p>
Aayeah! <img src="../images/smileys/icon_biggrin.gif" alt="Smiley :D" loading="lazy">
</p>

<p>
That is it, nothing else to do, now its just release packet creation left.
</p>

<p>
I could do some game-play testing, but that takes hours if not days, if players find bugs then I'll fix them.
</p>

<p>
2022-02-06T18:25:00Z Have been staring at the html web page code for the official homepage for a long time now, nothing to edit or add, its time for a release.
</p>

<p>
2022-02-06T19:15:00Z Finished proof reading <i>this</i> dev diary page and now its go time, release is upon us <img src="../images/smileys/icon_cool.gif" alt="Smiley :cool:" loading="lazy">
</p>

<p>
2022-02-09T14:49:56Z New editing day has started, fixed landscaping tool not working for trees and plants. Copied mapUS storeItems.xml config lines for trees and plants into PMC Super Six 6km storeItems.xml file. Easy fix.
</p>

	<h2>Grass Is Always Greener</h2>

<p>
2022-09-21T15:55:00Z New editing day has started. Todays goal is to quickly add several new field definitions where few of them are also grass fields for contracts.
</p>

<p>
First ran _run_backup_PMC_Super_Six_6km.bat which 7-zip compressed .7z packet and then copied it to two other hard drives and one other computer in LAN. Never forget backups.
</p>

<p>
Then went to E:\Farming.Simulator.22.Editing\PMC_Super_Six_6km\maps\PMC_Super_Six_6km\data\ dir, took 7zip backup of PMC_Super_Six_6km_dem.png heightmap image, then opened this PNG in GIMP, painted the image RGB 0,0,0 black which is 0 meter elevations and then saved.
</p>

<p>
Started Giants Editor v9.0.2 which notified that v9.0.3 is available, pfft I need no stinking updates (heh), loaded PMC Super Six 6km terrain project up and got to work.
</p>

<p>
Imported PMC_Helpers.i3d so can get my 2d top-down camera.
</p>

<p>
2022-09-21T16:49:00Z Finished editing in GE, added bunch of new fields, added few more corner pieces to couple of fields, then turned about four small to medium size fields to grass contracts aka fieldGrassMission boolean attribute. Exported new PMC_Helpers.i3d with the top-down camera, saved project and we are done.
</p>

<p>
Unpacked 7-zip backup of the heightmap PNG.
</p>

<p>
Edited modDesc.xml to v0.2.2 and now we are ready for new release packaging.
</p>

<p>
2022-09-21T16:52:00Z PMC_Super_Six_6km_v0.2.2.7z compiled, we are ready for testing :)
</p>

<p>
2022-09-21T20:50:00Z Was playing at PMC Gaming when ran into a bug, all selling points accept grass, hay and silage etc but this does not work in the game engine, bales are not accepted in normal selling points, they only work at animal dealer trigger.
</p>

<p>
This is extremely frustrating as I already fixed this issue, why is it still in this particular terrain, sigh.
</p>

<p>
Okay looks like PMC Undefined Farms 20km has selling points fixed for bales, but my copy-paste template dir in my editing dir is NOT. Also in my faint memory I recall perhaps it was just fixed for undefined farms as kind of test and the fix was never applied to other terrains or even into my XML copy-paste template dir.
</p>

<p>
So now I took all the undefined farms 20km placeables/sellingpoints/ XML files and copied over to PMC Super Six 6km dir. That should fix the regular selling points.
</p>

<p>
2022-09-21T20:57:00Z Compiled v0.2.3 and now it needs testing after my lunch break. Probably if it works then this dev diary gets text written hours from now after todays farming session heh.
</p>

<p>
2022-10-02T06:33:00Z Yup v0.2.3 worked just fine, played several real life days on it.
</p>

</section>

<footer>
<p>
<a href="pmc-terrains.php" class="button">PMC Terrains FS22</a>
<a href="changelog-pmc-super-six-6km.php" class="button">Changelog PMC Super Six 6km</a>
<a href="pmc-super-six-6km.php" class="button">PMC Super Six 6km</a>
<a href="../index.php" class="button">PMC Farming Simulator root page</a>
</p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("../include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>