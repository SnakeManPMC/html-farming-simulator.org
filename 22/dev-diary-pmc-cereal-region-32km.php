<!DOCTYPE html>
<html lang="en">
<head>
<title>Developer Diary PMC Cereal Region 32km - PMC Farming Simulator 22</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Developer Diary PMC Cereal Region 32km - PMC Farming Simulator 22">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<!-- google ads -->
<?php include("../include/google-ads.php"); ?>
<h1><b>Developer Diary PMC Cereal Region 32km - PMC Farming Simulator 22</b></h1>
</header>

<section>
	<h2>Dev Diary PMC Cereal Region 32km FS22</h2>

<p>
This is developer diary for Farming Simulator 22 terrain called <a href="pmc-cereal-region-32km.php">PMC Cereal Region 32km</a>.
</p>

<p>
<i>Special Note: there are a lot of dev diaries missing here, I did TWO releases before I created this web page, no idea where those dev diaries are now, they most likely are lost, sorry about this. Project was renamed from "PMC Test Farm 32km" to "PMC Cereal Region 32km" shortly before v0.1.3 release, this dev diary page has been edited to only use the final name to avoid confusion.</i>
</p>

<p>
Initial project directory name was: deleteme_32km, <a href="../19/terrain-heightscale.php">heightScale</a>="255" <a href="../19/terrain-unitsperpixel.php">unitsPerPixel</a>="8".
</p>

<p>
2021 Unknown Date: When trying to import <a href="../19/terrain-vehicle-shop.php">vehicle shop</a> I3D using <a href="../19/terrain-giants-editor.php">Giants Editor (GE)</a> v9.0.1(?) its just loading endlessly, waited probably over 10min and it was still processing with 40% CPU usage and memory usage was increasing extremely slowly. It finally imported it, but something must be wrong with this project as that i3d import should be instant.
</p>

<p>
2021-12-13 First date when I mention "FS22 32.7km" terrain in PMC discord server.
</p>

<p>
2021-12-22T06:58:00Z Field grid is in, minimap is working but ESC mapview field growth stages get some junk display drawn to there, no idea why. Oh also GE v9.0.2 saves for 17 minutes.
</p>

<p>
2021-12-31 This deleteme_32km terrain was renamed to PMC Cereal Region 32km.
</p>

<p>
Below screenshots were initially uploaded to PMC discord server, click to open high resolution images.
</p>

<a href="screenshots/PMC-Cereal-Region-32km-2021-12-31T0128.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Cereal-Region-32km-2021-12-31T0128.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<a href="screenshots/PMC-Cereal-Region-32km-2021-12-31T0334.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Cereal-Region-32km-2021-12-31T0334.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<a href="screenshots/PMC-Cereal-Region-32km-2021-12-31T0350.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Cereal-Region-32km-2021-12-31T0350.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<a href="screenshots/PMC-Cereal-Region-32km-2021-12-31T0700.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Cereal-Region-32km-2021-12-31T0700.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<a href="screenshots/PMC-Cereal-Region-32km-2021-12-31T0908.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Cereal-Region-32km-2021-12-31T0908.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<a href="screenshots/PMC-Cereal-Region-32km-2021-12-31T1119.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Cereal-Region-32km-2021-12-31T1119.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<a href="screenshots/PMC-Cereal-Region-32km-2021-12-31T1253.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Cereal-Region-32km-2021-12-31T1253.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
2022-01-01T06:50:00Z FS22 PMC Cereal Region 32km terrain released! 
</p>

<!--
update from 2022-02-01T18:42:00Z, start of first lost and found dev diary entry :)
-->
<p>
2022-01-06T17:33:00Z Discovered that there are error in the log, this is very embarrassing as it is such an easy fix, I just never got around to test buying placeables. Error is this:
</p>

<pre>
Error: Blocked area map is wrong size for terrain (16384 x 16384) vs (4096 x 4096)
</pre>

<p>
2022-01-06T18:02:00Z Started to fix this error after just completing fixing PMC RedWhiteBlue 10km which had the exact same error.
</p>

<p>
Finished resizing infoLayer_placementCollisionGenerated.png to 4096 resolution, then proceeded to add grass RGB to fruit_density image in GIMP.
</p>

<p>
Generated fruit_density and roughDirt01_weight images, still need to decide to which weigh image I'm going to copy over that roughDirt.
</p>

<p>
Painted roads_dirt.png with RGB 178,164,142 color.
</p>

<p>
Then roads_asphalt.png with just transparent image because I don't have any asphalt roads hehe. Same for dirt_farm_yards_etc.png, forests.png and railroad_tracks.png images.
</p>

<p>
2022-01-06T19:07:00Z This task started to drag on, simply adding grass and road textures was kind of bad idea, I had to do a lot of work to get bat files setup for 32km terrain, oh well once they are done its then just using the tool pipeline to channel through edits.
</p>

<p>
2022-01-06T19:25:00Z Finally got everything lined up just right, grass and road textures appeared in GE heh nice. Started to save in GE, expecting another 17 min save here...
</p>

<p>
Went to take a shower when GE was saving hehe.
</p>

<p>
2022-01-06T20:02:00Z Shower and GE saving done hehe. Gotta love these save times.
</p>

<pre>
Scenefile 'C:/Farming.Simulator.22.Editing/PMC_Cereal_Region_32km/maps/mapUS/map.i3d' saved in 1109078.665800 ms at Thu Jan  6 19:43:41 2022.
</pre>

<p>
Checked in-game and everything looks good, grass and roads show up, no errors.
</p>

<p>
Went in-game and took two screenshots of some nice views for the landscape, then used one of them to create <a href="terrain-user-interface-images.php">preview.xcf</a> for in-game preview use. It came out alright.
</p>
<!--
update from 2022-02-01T18:42:00Z, end of first lost and found dev diary entry :)
-->

<p>
2022-01-25T21:54:52Z New editing day has started, first I'm going to sync fs22 mods dir with latest terrain project dir and check in-game how it looks and feels. Its been several days (weeks?) since I played this one so cant remember much more than this one being symmetric repeating boring road grid design with 441 fields.
</p>

<p>
In-game test: hilarious boring american road grid design indeed, but its too late to change that now as there are 441 <a href="../19/terrain-field-definitions.php">field definitions</a> too. Rock picking density image is working good, kind of goofy looking but at least its working. Asphalt roads seem extremely wide like 50m or more haha. Crops on the fields are so far off from the roads you can barely see them. Vehicle shop 3d building and grain bins are missing. <a href="../19/terrain-selling-points.php">Selling points</a> are missing including bale selling point. ESC mapview has map hotspot icons for NW, center and SE, these are debug and should be removed.
</p>

<p>
2022-01-25T22:26:43Z In-game check done, guys in PMC Farming discord are kind of interrupting me (hopefully they don't read this, track down UTC times and see whom am I talking about heh, juust joking I love helping terrain enthusiasts heh).
</p>

<p>
But yeah man this 32.7km terrain is a BEAST, it is insanely large.
</p>

<p>
2022-01-25T23:15:43Z Still helping guys in PMC Farming discord, lost track of what I was doing in PMC Cereal Region 32km, luckily I have the stuff written above heh.
</p>

<p>
Alright so I could technically adjust the <a href="../19/terrain-design-document.php">GIMP design doc</a> so that roads would be several pixels more narrow, that would not break any fields, but for fields themselves I cant really do anything as it would require me to edit 441 field definitions and that is something I will not do <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2022-01-25T23:37:30Z Took backups, just incase I goof up something especially with these huge image sizes etc it is essential to have backups before starting to fiddle something.
</p>

<p>
Was looking at "deleteme_32km" terrain design doc directory and well need to rename that file name right away, which I did. Opened PMC_Cereal_Region_32km_design_doc.xcf image in GIMP and wow are we simple, there are "roads", "fields" and "background" layers on a 16384 x 16384 resolution image.
</p>

<p>
Looking at this image I'm thinking how could I improve it without destroying the old design or spend unbearable amount of minutes saving stuff in GE. Well dunno, this whole image is outdated as current <a href="../19/terrain-design-document-graphicsmagick.php">design doc graphicsmagick bat technology</a> is not using black roads and yeah the list goes on from there. If it werent my 441 field definitions I would change this design right away.
</p>

<p>
But I should be able to make the roads more narrow while keeping fields at the same size. Hmm. Fields are also using disgusting 90 degree corners, ugh. I would really like to do a new design this but the terrain is way too big with too many field definitions which would be absolute murder to edit.
</p>

<p>
Also we need to remember that <a href="pmc-korkscrew-40km.php">PMC Korkscrew 40km</a> and <a href="pmc-king-corn-45km.php">PMC King Corn 45km</a> are kind of replacing what this 32.7km "little" terrain is heh. So I might just let this be as-is and put in more work on those two other terrains instead. Hmm.
</p>

<p>
South and east edge fields are drawn right into the terrain edge, this should be fixed even if it would mean some field definition work.
</p>

<p>
<a href="../19/terrain-farmland-painting-gimp.php">PMC_Cereal_Region_32km_farmland.xcf</a> has bunch of areas but they are extremely large, I recall penalty_box said that they cost like close to hundred million dollar each, don't remember how much it was but just crazy amount of money. Those farmland areas probably wont matter much as I doubt many people would seriously play a proper savegame on this one, dunno.
</p>

<p>
2022-01-26T00:32:59Z I am extremely distracted by discord, feel like I should simply shut it down to concentrate on task at hand. I cannot brag about todays editing hardcore plan if all I do is chat in discord. And I believe in top of the hour penalty_box goes live on twitch while hes playing on <a href="pmc-undefined-farms-20km.php">PMC Undefined Farms 20km</a>.
</p>

<p>
The more I look at the design doc the more neanderthal it looks like, I'm going to pass on editing it and just add stuff in GE, selling points, grain bins and some trees.
</p>

<p>
2022-01-26T00:37:25Z Starting GE now, lets see how many minutes PMC_Helpers gets imported.
</p>

<p>
Noticed that this terrain uses disgusting "mapUS.i3d" directory and file naming, eeww. Also only partial data\ dir fs19 file naming which is odd, I must have changed just few of them manually instead of using the v1.2 mapUS terrain sample data. Again no issue for average player but would have been nice to have this made from ground up properly.
</p>

<p>
2022-01-26T00:44:54Z Started to import new TEMPLATE.PMC_Helpers.i3d file... GE logged right away: TEMPLATE.PMC_Helpers.i3d (384.33 ms) which is pretty fast, but then it went into "Loading ..." mode and I expect this process to take at least 10 minutes, hopefully not much more. This means that what lessons I learned from yesterday is that I wont be closing this terrain in GE until I have completely finished all edits for today. I have better things to do than to waste time sitting here while GE is processing bogus bullshit. In-game tests need to be done with PMC_Helpers or I could try to set visibility off for this transformgroup, not sure if it can still cause issues in-game.
</p>

<p>
2022-01-26T00:57:02Z Finished importing, about 12 or so minutes. Heh lovely.
</p>

<p>
Edited map.xml to add storeItems.xml into our terrain dir, then copied placeables.xml and storeItems.xml files from PMC_Undefined_Farms_20km terrain.
</p>

<p>
Then realized I need to empty out all translation="" and rotation="" fields but I already did this yesterday, unfortunately I didn't save it anywhere as I just overwrote it with another terrains data heh. Okay I'm going to do it now and actually create placeables.xml and storeItems.xml into my "Objects.for.terrains" dir where I can easily copy it to any new terrain I'm creating. Might as well copy them to mapUS v1.2 terrain sample data dir as well, ready to go for any new generated terrains. Point being, do not do the same work multiple times for no reason.
</p>

<p>
2022-01-26T01:21:07Z Lunch break... also saved GE because, why not, interesting to see how many milliseconds it saves this time.
</p>

<p>
2022-01-26T01:42:35Z Feeding time over.
</p>

<pre>
PMC_Cereal_Region_32km/maps/mapUS/map.i3d saved in 23644.183600 ms.
</pre>

<p>
Alright lets continue adding selling points.
</p>

<p>
2022-01-26T01:54:26Z Twitch live stream for penalty_box_gaming started, <a href="pmc-undefined-farms-20km.php">PMC Undefined Farms 20km</a>, another distraction heh. No, not really, it runs nicely on my second monitor while I'm editing, wont get too much distracted.
</p>

<p>
Created 13 selling points in GE an grabbed coordinates to placeables.xml config file. Did also bale selling point by the vehicle shop.
</p>

<p>
Then created 4 placeable.xml meridian flat bottom grain bins to the vehicle shop area.
</p>

<p>
2022-01-26T02:17:56Z Started to place some trees using splines. Because there is so much empty space around fields I'm going to use looong splines and the extremely sparse object generating lua script. Distribute trees out to a very large area so no specific area will get performance issues.
</p>

<p>
2022-01-26T02:27:54Z Right away needed to take a small break to check JcL guys terrain GDM fruit_density issue as he sent me his terrain project dir. Hopefully this wont take long.
</p>

<p>
2022-01-26T05:01:41Z While checking out JcL's terrain something else happened which details I wont go into, but it derailed me from my "editing groove" big time and it took a really long time like seen from timestamps over two hours to get this point when JcL terrain has been resolved (for today) and the other thing I wont mention still has me off from my editing game so to speak. Hey not all these dev diaries are about editing files, painting images or compiling terrains <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Its life, shit happens, when you deal with people..
</p>

<p>
Anyways.
</p>

<p>
2022-01-26T05:25:20Z When clicked back to GE and got the terrain in view... I was like, umm what was I doing previously, which part of the terrain is this. With all these distractions today seem to be one of the worst editing days in a long time <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
I'm now thinking that maybe tomorrow I'll shut down discord, twitch and youtube completely and isolate myself into the terrain universe where its just me and terrain projects with whole bunch of progress on the way <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2022-01-26T07:26:49Z Time goes on and still havent got back to editing mood, sucks. I am pretty sure that tomorrow will be 17hrs without discord/twitch distractions.
</p>

<p>
Shit this is so stupid, now I'm getting hungry too and decided its perfect time for a lunch break <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
2022-01-26T07:57:11Z Feeding time over, shall we try to get back into editing and forget all the other stupid bullshit, well shall we?
</p>

<p>
Alright lets do this, last push for the day, last quarter of this editing day, hooyah!
</p>

<p>
Trees with splines, ok I got this...
</p>

<p>
Placed few tree lines, sparse script. Then was moving further into the terrain and the shadow appeared, so clicked scenegraph sun -> attributes -> light and edited the fixed bbox min/max to 15360 value.
</p>

<p>
2022-01-26T08:34:44Z Okay several forest tree lines added, looks pretty nice, but its just a small spec on this huge terrain, I'm not going to add more trees because ... well this is so huge test oriented project that these trees will do just fine.
</p>

<p>
Exported PMC_Helpers, set its visibility off, saved project and left GE running. Time to try in-game while GE is up, hopefully it works OK.
</p>

<p>
But first I'll fix few more things. Those mapUS tutorial floating icons and hotspots had to be removed from map.xml config file. Then added vehicle shop 3d model, luckily it imported and saved fast.
</p>

<p>
In-game looked pretty nice, tree lines were there. Had to exit rather soon because PMC_Helpers visibility off still have the geometries present so you cant see stuff but they are still there, I just need to remove them no if's or but's about it.
</p>

<p>
Had selling point number 13 bug, its listed in placeables.xml but not in storeItems.xml so fixed that.
</p>

<p>
2022-01-26T09:24:20Z I had still 3hrs 27min until bed time (heh no I'm not counting minutes but just listing what phone 17hrs timer shows), but I already feel like lazy, very disappointed for todays performance as it was mostly spent in discord and twitch. Tomorrow I am absolutely going to leave discord running in PMC DevSurf computer when coming to PMC Gaming for editing sessions, there cannot be any distractions, I want full 17hrs hardcore editing day.
</p>

<p>
2022-01-26T09:28:44Z Hmm actually yes, I cant concentrate on editing anymore, just kind of pissed off and frustrated, going to switch into chilling and tv watching mode for the rest of today. Tomorrow will be hardcore rocking editing day, hell yeah! <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2022-01-27T00:04:49Z New editing day has started. Todays agenda... is ... err, dunno really, first is to check it in-game to get my bearings what still needs to be done, then go from there. My bugs list has: asphalt roads are huge and fields on E and S edges needs to be cut down, well these issues are quite drastic changes so I don't think I'll be doing those and I think it was covered on yesterdays dev diary already.
</p>

<p>
BTW today I left discord running on PMC DevSurf computer when I switched over to PMC Gaming win10 to edit fs22, to avoid any distractions like yesterday. I love helping people on addon/mod making, terrain editing especially, but I have to draw the line somewhere that if my own editing projects are suffering because I spend half a day in discord helping others ... its no good.
</p>

<p>
2022-01-27T00:08:32Z And win10 garbage update was ready to reboot the computer, of course, lets start the day with an update restart.
</p>

<p>
2022-01-27T00:20:09Z Finally done with all win10 update and configuring bullshit. Insane. Took me this long to get editing day started for no other reason than using spying piece of shit win10 crap system <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
First thing I did was to take backups, regular bat 7-zip and copy to PMC Linux drive as well for maximum protection. Then synced files to fs22 mods dir and went in-game checking.
</p>

<pre>
2022-01-27 00:23 Error: Failed to open xml file 'C:/FS22.Mods/Dev/PMC_Cereal_Region_32km/maps/placeables/meridian/flatBottomBin3608/flatBottomBin3608.xml'.
2022-01-27 00:25   Warning: PlaceableUtil.loadPlaceable can only load existing store items, no store item for xml filename 'C:/FS22.Mods/Dev/PMC_Cereal_Region_32km/maps/placeables/meridian/flatBottomBin3608/flatBottomBin3608.xml'
2022-01-27 00:25   Warning: PlaceableUtil.loadPlaceable can only load existing store items, no store item for xml filename 'C:/FS22.Mods/Dev/PMC_Cereal_Region_32km/maps/placeables/meridian/flatBottomBin3608/flatBottomBin3608.xml'
2022-01-27 00:25   Warning: PlaceableUtil.loadPlaceable can only load existing store items, no store item for xml filename 'C:/FS22.Mods/Dev/PMC_Cereal_Region_32km/maps/placeables/meridian/flatBottomBin3608/flatBottomBin3608.xml'
2022-01-27 00:25   Warning: PlaceableUtil.loadPlaceable can only load existing store items, no store item for xml filename 'C:/FS22.Mods/Dev/PMC_Cereal_Region_32km/maps/placeables/meridian/flatBottomBin3608/flatBottomBin3608.xml'
</pre>

<p>
Forgot to copy the meridian/ dir into placeables/ dir, quick fix. There was no other errors in the log. After fixes second in-game test had no more errors, great.
</p>

<p>
Selling point 4 and 8 are right next to each other, time to move those apart, spread them out a bit. Started GE and imported PMC_Helpers which caused the unknown "Loading ..." delay for whatever 12 minutes or something, just insane. I knew this was coming but once GE is up and running I wont be shutting it down until all edits for this terrain have been done for today and its release ready.
</p>

<p>
Actually while GE was processing, I already went to take a sneak peek on the next terrain on my list, just to save some valuable editing time.
</p>

<p>
2022-01-27T01:05:47Z GE finished importing PMC_Helpers.i3d file. Lets continue.
</p>

<p>
Moved selling point 8 a bit more towards center of the terrain.
</p>

<p>
Okay I don't know what else to edit right now, that is a good sign its ready for release. So I'm going to change version number and then that is it.
</p>

<p>
2022-01-27T01:13:59Z Changed version number to v0.1.2 which concludes this editing, nothing to do other than taking screenshots for a web page and package the release. We're done here for v0.1.2 <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2022-02-01T05:09:23Z New editing day has started, I'm hoping this wont be much editing but more like wrapping this project up for a next release, at least I don't want to get bogged in for another days long editing marathon heh.
</p>

<p>
As usual with getting oriented with latest edits, I synced PMC_Cereal_Region_32km terrain project dir into fs22 mods dir, then launched fs22 to see in-game whats up.
</p>

<p>
Well hmm, looking at it in-game and ... dunno what to say, looks to be working OK, rocks and other soil composition page looks OK, 441 field definitions, 13 selling points + animal dealer for the few bale types (needs to be fixed), contracts work. No grass fields. Hmm what else...
</p>

<p>
Selling points arent distributed evenly, its now very south heavy. Not a big deal, but I would prefer somewhat even distribution or at least not too many points close to each other.
</p>

<p>
Design doc fields (cultivator_density) is almost critical bug a showstopper issue, the fields are drawn right until the terrain edge and your vehicles will fall of the terrain if you for example seed a field edge there.
</p>

<p>
Was watching RedDirtRanch twitch live stream and we chatted about fs22 courseplay field outline recording, so decided to switch to general mods dir and try it out, while testing PMC Cereal Region 32km as well heh.
</p>

<p>
2022-02-01T06:02:34Z Enough courseplay testing, back to my regularly scheduled testing <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Opened design doc in GIMP, well its not really a design doc as this was the first time I tried to auto generate that boring american road grid on 1.6km x 1.6km squares, it doesn't use regular RGB colors and there is nothing but red for fields (full screen color fill) and the black for roads in the grid pattern. You could be mean and say that there is no design doc.
</p>

<p>
However this poor design doc is now tied to the 441 field definitions I painstakingly created, so if I were to change this regarding fields, those field definitions would break and I am certainly not going to be fixing them.
</p>

<p>
Design doc is what it is, you cannot do any modifications other than maybe make roads more narrow and perhaps change some of them to dirt instead all being asphalt. You just cannot touch field shapes and sizes.
</p>

<p>
I recall mentioning this previously but project dir structure is using mapUS/ which I don't like.
</p>

<p>
Weight images are 8192 x 8192 so I have to assume density are 16384 then.
</p>

<p>
2022-02-01T06:24:53Z Got so tired that I was in zombie mode snoozing while trying to read XML configs and such things, gotta go take a nap.
</p>

<p>
2022-02-01T09:31:58Z Nap time and one tutorial discussion later, back at PMC Gaming and ready to continue editing. BTW I confirmed that GE v9.0.2 runs under windows 8.1 so all this time I could have edited in PMC DevSurf. Of course its difficult to test because win7/8.1 wont run fs22 game itself, so I would have to copy terrain project dir to PMC Gaming to test it and if there was errors... then switch back to PMC DevSurf, do edits and start the loop all over again. Not my idea of fun.
</p>

<p>
My large goal now is to finish fs22 editing, release these terrains I created and then go back to FS19 editing/playing using win8.1 and win7. When I would be returning to fs22 remains to be seen, courseplay GUI integration is so atrociously bad, there are no good mods like big air drills etc, there is just nothing for me to play on in fs22.
</p>

<p>
Anyways.
</p>

<p>
PMC Cereal Region 32km, hmm what should I do with this project... well I was thinking while taking a nap, yep that is a thing heh, that maybe I should take out few fields here and there you know those massive grid boxes of 213 hectares and turn them into placeable areas. They would be absolutely enormous never seen before mega size placeable areas, they wouldn't be any farm yards anymore, but... if the other option is this suffocating field after field mass landscape, I think some huge placeable areas would let the terrain or at least the player/farmer breathe a bit in there.
</p>

<p>
Or I could just cut off a small corner on some fields for placeable farm yard usage, fixing few of those field definitions would not be a big deal.
</p>

<p>
It all comes down to the scope. What do I want to achieve with this terrain, really. When it was first created it was largest terrain in the farming simulator games history, but after that I created <a href="pmc-king-corn-45km.php">PMC King Corn 45km</a> which took that high score world record, so this terrain is now just kind of huge without identity or purpose heh.
</p>

<p>
Do I really want to spend a lot of time tinkering with the new farm yards placeable areas... hmm not really, all I want to do is to get all these terrains released so I can go back to FS19 editing and to my regular editing life so to speak.
</p>

<p>
Currently this terrain works nicely, there are no errors and has plenty of selling points, contracts work, hmm well OK I can turn few fields to grass so that would give some spice to the contracts. Not that I expect many if any people actually play legit savegame on this monster size terrain, but at least the features would be there if someone decides to do that. Hey I've seen crazier setups in FS19 where I was shaking my head that why do you play that broken crap terrain that do you really want big fields that bad, heh.
</p>

<p>
So to not let this editing day and dev diary to be all talk no action, I'm going to backup the terrain project, then add couple of grass fields at vehicle shop area. I'm hoping I could do that without GE saving just by editing TERRAIN.i3d file directly, but probably need to do it in GE with long saving time. And I at least need to load it up in GE to see which fields numbers I use.
</p>

<p>
Loaded the project up in GE, tracked down the two fields next to the vehicle shop area, then added fieldGrassMission attribute for them to turn them to grass fields, now we have some spicing up in the contracts as well. Of course these are stupid large 213ha grass fields so yeah have fun doing some silage baling contract on those hehe.
</p>

<p>
Saved in GE and it as usual took forever on these huge terrain sizes.
</p>

<pre>
PMC_Cereal_Region_32km/maps/mapUS/map.i3d saved in 697120.080400 ms
</pre>

<p>
Then in-game check that grass fields appear, all is good, two fields appear OK. However farmland image was not detailed enough, cheapest land around vehicle shop was 29 million, so yeah there wont be any New Farmer or <a href="../19/stories.php">Start From Zero</a> savegames in this terrain thats for sure.
</p>

<p>
GIMP opened up PMC_Cereal_Region_32km_farmland.xcf as I have to get the farmland fixed, I'm a big believer for those two starter savegame modes and if they are not working, the terrain is not worth playing.
</p>

<p>
Was looking at the XCF image and thinking to myself... how do I make cheap starter area to buy when all of them are over 200ha in size, heh. Hmm. Okay well I'll make the dealership area to be owned by New Farmer game-mode with farmId="1" in placeables for silos and in farmlands.xml set it owned by player, that will solve the New Farmer game-mode issue (its irrelevant that new farmer has no vehicles heh). Then it leaves the Start From Zero savegames, they need small area to buy, but again we are in the same problem, 200ha fields, ugh.
</p>

<p>
Dunno man, I'm hungry, I'll go eat lunch and think this design over a bit, I have to get a proper Start From Zero option here and I don't even want to say it but that requires one 213ha full section to be split up to several small fields so the price can come down. Hum.
</p>

<p>
2022-02-01T10:30:39Z Lunch break ...
</p>

<p>
2022-02-01T10:48:22Z Feeding time over, back to terrain design.
</p>

<p>
Well I considered it during eating, but unfortunately all I see is never ending editing loop if I touch the design doc because its such a can of worms to edit already working terrain. So I am going to somewhat cheat, I'll just set new farmer game mode to own the vehicle shop land lot and then put the surrounding land areas to dirt cheap like maybe 250k or something.
</p>

<p>
This terrain is fictional and boring grid just quickly made up, I don't think any player will continue if there are huge land areas with unrealistic cheap price.
</p>

<p>
Went in-game, started Farm Manager game-mode just because and to confirm it starts without errors, it did. Then purchased vehicle shop area land lot, saved game, opened savegame1\farmlands.xml and checked the farmland ID number. Did the same for areas just north and south from vehicle shop. Then edited farmlands.xml from the terrain project dir, set the vehicle shop ID channel to defaultFarmProperty="true" for new farmer game-mode, then edited priceScale="0.1" to the two land lots north and south from vehicle shop. Now it should be possible to do Start From Zero savegame, assuming the 29 million with 0.1 scale comes down to something reasonable price heh.
</p>

<p>
I mean its a dirty hack, those land areas are just huge blocks with several road grid full section fields in them, if you get to buy one cheap you can spend weeks farming the massive area of fields you get from one block.
</p>

<p>
Here is a good lesson: I wanted to save time when painting the farmland image and because the terrain was such 32.7km highscore testing throw-away type I just didn't want to spent the hours of work editing GIMP XCF image to create a proper detailed farmland image... so now I'm paying the lazy guys price, terrain game-play suffers because farmland image is such bulky one.
</p>

<p>
But yeah I doubt anyone really plays a proper savegame here so its not a big deal.
</p>

<p>
Checked in-game and those north/south farmland blocks with priceScale="0.1" turned into 2.9 million price, hmm I mean that is doable... sort of, relatively speaking, but as said I want it to be like 250k or around that price, so I'm going to put it to 0.01 maybe that will get it somewhere close to cheap price. In farmsim if you get 2.9 million you basically have all the best equipment available to you and after the next harvest you have so much money its not even funny. But yeah, it takes a long way to do fertilizing contracts before you reach that 2.9 million so it must come down to few hundred thousand.
</p>

<p>
Another edit, sync and in-game check... now with priceScale="0.01" the price is 290.8k and that is just perfect. I mean its ridiculous for the area of that size, but should take no time to get that money from contracts.
</p>

<p>
And with those edits, we are done here, nothing more to edit within this scope. Next its release screenshotting and such <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2022-02-09T15:47:43Z New editing day has started, today we give this terrain a proper name.
</p>

<p>
So took the old directory name and renamed it to PMC_Cereal_Region_32km project dir name. Then ran powergrep mass string replace, but it missed a lot of lines because the bad mapUS/ default stuff still in place, okay okay, I need to do those manually, no big deal, for this one time only.
</p>

<p>
Edited by hand any XML file lines I could find.
</p>

<p>
2022-02-09T16:08:36Z Unfortunately I realized I fucked this up. Reason is that the terrain source files were with the mapUS/ directory and file naming, this was very very old terrain relatively speaking, it did not use the proper PMC_CLASSNAME tagged stuff, thats why my powergrep mass replace basically screwed it all up, I could not make heads or tails out of it.
</p>

<p>
So decided that lets remake this thing from scratch, I'll use _run_generate_terrain_template_from_sample_data_FS22.bat to generate brand new project directory.
</p>

<p>
2022-02-09T16:17:31Z Brand new mapUS v1.2 source files terrain project dir generated and powergrep4 mass string replaced for PMC Cereal Region 32km <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Edited touchups to modDesc.xml. Replaced placeables/ dir with latest copy paste dir. Replaced farmlands.xml placeholder with the old xml lines. Replaced placeables.xml with the old xml lines. Replaced storeItems.xml with old xml lines.
</p>

<p>
Copied old projects data\ directory all PNG images to new projects data\ dir. Did the same for all XCF and DDS user interface images.
</p>

<p>
Then it was time to load it in GE v9.0.2 for the very first time, just to see what breaks as I must have forgotten something.
</p>

<p>
2022-02-09T16:38:54Z Well GE loaded it just fine, but then I realized which another goof up I did, there are no objects export I3D backup of the well objects and now the old project is broken with all kinds of wrong strings in the dir/file names so I cant just load it up and expor them out. Hmm. Hopefully I have a good backup of the last stable version. Yes I indeed forgot to take backups.
</p>

<p>
If everything fails yes the objects are still perfectly safe in the i3d, they havent been touched, but the trick is... how do I load those objects from there as GE wont load the broken ass project hehe.
</p>

<p>
Was eyeballing PMC_Cereal_Region_32km.i3d file and nodeId= values are sequential, I am not sure if I could just copy paste those lines from the old broken project into this new one and I won't dare to try heh.
</p>

<p>
I found backup from PMC_Cereal_Region_32km_2022-02-01T0946.7z dated file name, but hmm backups always mean that something was edited AFTER taking the backup, so that is the latest but still, old, heh.
</p>

<p>
Oh man, do I really need to fix that mass string replace broken i3d project now by hand, argh.
</p>

<p>
This ladies and gentlemen... is why you <b>NEVER FORGET BACKUPS</b>. Hah, all of this shit would have been avoided if I just clicked one bat before jumping into editing this terrain today. Yeah, sucks.
</p>

<p>
Loaded the above backup in GE, exported all objects. BTW the date on i3d file is 2022-01-27 so its few days older than the backup itself, which makes sense of course.
</p>

<p>
2022-02-09T16:51:19Z Started to import the objects into GE, expecting another 10+ minute "Loading..." delay.
</p>

<p>
2022-02-09T17:09:16Z GE finished importing old objects.
</p>

<p>
Then imported warningStripesVehicleSelling.i3d and placed them near the vehicle shop building, grabbed the coordinates and copy-pasted sellingStationVehicles.xml line to placeables.xml config file. Now we have vehicle sell/repair trigger.
</p>

<p>
2022-02-09T17:15:40Z Then saved project and exited GE, I've done what needed to be done.
</p>

<p>
Deleted GDM/GRLE PNG equivalents, synced files to fs22 mods dir and then it was in-game testing time, what breaks... it loaded up fine, only one sellingpoint XML file was missing and vehicle selling station entry from storeItems, quick fixes, then another in-game test.
</p>

<p>
2022-02-09T17:29:50Z In-game test error free, all is good. Well OK regular selling points accept all products even silage which fails the bale contracts, so updated those from the template placeables XML files.
</p>

<p>
2022-02-09T17:32:05Z Then it was time to shut down editing for today, I need to prepare for PMC King Corn 45km v0.1 release <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<!--
-->

<p>
2022-02-11T19:50:46Z New editing day has started, todays goal is to create new farmer starter vehicle fleet.
</p>

<p>
Discovered bug as icon.dds is still not updated with mapview image. Hmm gotta fix that.
</p>

<p>
2022-02-11T20:08:35Z Took a new farmer game-mode farmland screenshot, then created savegame for the purchased vehicles which will be used as new farmer vehicles.xml config file.
</p>

<p>
2022-02-11T21:22:00Z Copied vehicles.xml from PMC Gaming computer to PMC DevSurf computer which is now my one and only place for Farming Simulator terrain editing. Moved vehicles.xml into PMC_Cereal_Region_32km/maps/PMC_Cereal_Region_32km/ dir and overwrote the existing empty file. Now our new farmer game-mode starter vehicles, implements and products are done.
</p>

<p>
2022-02-11T21:59:00Z I was not planning on this, at all, but discovered that this terrain basically has no objects other than vehicle shop and four meridian 3608 grain bins even though web page reads (now?) that there are utility poles, so I had to fire up GE v9.0.2, load this project up, import PMC_Helpers and place some utility poles.
</p>

<p>
It would be easier to just remove the HTML line about the utility poles? Whats your point? <img src="../images/smileys/icon_biggrin.gif" alt="Smiley :D" loading="lazy">
</p>

<p>
Indeed, but hey adding utility poles is quite easy and it brings this terrain more to the level of other PMC terrains so yeah definitely I'll add them in. Also... most likely going to add some meridian bins, perhaps even TrailerParkFarms (TPF) big vehicle sheds, dunno if I find any empty room for them.
</p>

<p>
As usual importing PMC_Helpers.i3d was very quick, but GE v9.0.2 did its own thing with "Loading..." for unbearable amount of minutes. Once done I renamed PMC_Helpers/GrainBins/ to Placeables. We have started.
</p>

<p>
2022-02-11T22:16:00Z Ran into a problem, placed first utility poles like I've done many times before... and the object was untextured, hmm. I have no idea why its missing textures, yes I moved GE and this project to another computer but in both PMC Gaming computer and PMC DevSurf computer the FS22 installation is case sensitive C:/Games/fs22/ directory path, so hmm dunno really why textures would just disappear like that. Other objects seem to have textures just fine. Hmm very strange.
</p>

<p>
Oh and while I didn't plan on editing anything, this kind of debugging is the last thing I want to do.
</p>

<p>
2022-02-11T22:35:00Z Okay so imported template of PMC_Helpers.i3d from Objects.for.terrains/ dir and it came in with textures just fine, so deleted the existing untextured models. Also got in TrailerParkFarms vehicle sheds and giants meridian etc bin objects.
</p>

<p>
2022-02-11T22:51:00Z Second line (north-south) line of utility poles created, across the whole terrain.
</p>
<a href="screenshots/PMC-Cereal-Region-32km-2022-02-11T2256.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Cereal-Region-32km-2022-02-11T2256.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
2022-02-11T23:14:00Z Finished placing placeable objects in GE, then used the get placeable coordinates LUA script to get them coords, copy pasted them into placeables.xml and edited them by hand for the proper paths and XML file names, plus unique mapBoundIds too. Yeah I didn't have powergrep replacement config in PMC DevSurf computer yet, need to copy that over next time PMC Gaming is up.
</p>

<p>
This is now how the vehicle shop aka new farmer farm yard looks like.
</p>

<a href="screenshots/PMC-Cereal-Region-32km-2022-02-11T2316.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Cereal-Region-32km-2022-02-11T2316.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
Looks a bit more busy than before and is much more useful. I'm still thinking it could have used one of those drive through grain bin complexes but yeah well.
</p>

<p>
2022-02-11T23:20:00Z Exported PMC_Helpers, then deleted it and saved whole project. Guess we're done here.
</p>

<p>
2022-02-12T00:11:00Z Compiled v0.1.3 build 2 for my internal testing. Yeah here we go second time compiling an internal build release for testing as PMC DevSurf computer does not run fs22.
</p>

<p>
2022-02-12T00:13:10Z Back at PMC Gaming computer, time to test v0.1.3 build 2.
</p>

<p>
Glad I did in-game test, it shows meridian bin placeables missing from storeItems.xml file and also noticed there are still (or rather again) mapUS floating tutorial icons which needs to be remove. Okay another round of edits coming up.
</p>

<p>
Going to bunny hop back to PMC DevSurf, do these edits and then compile v0.1.3 build 3. Isn't this fun, all thanks to piece of shit win10 <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
2022-02-12T00:26:42Z Compiled v0.1.3 build 3 and copied it over to Gaming computer, lets give this another try.
</p>

<p>
Further testing shows that all selling points are STILL accepting all crops including silage etc, which would eventually ruin baling contracts as the selling points wont accept bales.
</p>

<p>
Otherwise v0.1.3 build 3 is good to go, no errors in the log <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2022-02-12T00:43:00Z New icon.dds image generated from the preview.png image.
</p>

<p>
2022-02-12T01:07:00Z PMC Cereal Region 32km v0.1.3 released! <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

</section>

<footer>
<p>
<a href="pmc-terrains.php" class="button">PMC Terrains FS22</a>
<a href="changelog-pmc-cereal-region-32km.php" class="button">Changelog PMC Cereal Region 32km</a>
<a href="pmc-cereal-region-32km.php" class="button">PMC Cereal Region 32km</a>
<a href="../index.php" class="button">PMC Farming root page</a>
</p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("../include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
