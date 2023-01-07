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


	<h2>2022-12-15 Terrain Edge Block And Some Bales</h2>

<p>
2022-12-09T17:48:00Z New editing day has started, edited modDesc.xml descVersion to 72.
</p>

<p>
2022-12-15T07:54:00Z New editing day has started, this is very late in the day for me so plan is to just plug in few small fixes in nothing major. Do whatever I can before I get too sleepy.
</p>

<p>
First took backups which 7-zip archive got copied to three HDDs and one other computer, never forget backups.
</p>

<p>
Took selling point XML config files from <a href="pmc-super-six-6km.php">PMC Super Six 6km</a> and copied them over to PMC Cereal Region 32km placeables/ dir, also did the selling point 13 which should be removed but that is another issue. Now selling points should not interfere with baling contracts offering selling points as delivery locations which do not accept bales.
</p>

<p>
Actually I'm not sure if this terrain has animal dealer, so while yeah that was a fix... the contracts still do not work as you cant deliver the bales anywhere heh. But as said, that is an separate issue <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Removed selling point 13, no more issue separate or not <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2022-12-15T08:05:00Z Scanned through bugs / issues list and there is no more text based edits I could do, now would need to fire up GE to do some heavy editing. Trying to plan ahead what to edit.
</p>

<p>
2022-12-15T08:11:00Z Installed Giants Editor v9.0.3, just didn't want to see the update announcement any longer, don't know anything in v9.0.3 readme changelog what would be useful to me.
</p>

<p>
2022-12-15T08:28:00Z Finished creating terrain edge blocks, 32768 in size, I followed my own tutorial <a href="../19/terrain-edge-block.php">FS19 Terrain Edge Block</a>. Was not difficult to do at all, just had to type in bunch of numbers. This transformgroup with those four planes can now be exported to other terrains and save few more clicks when doing other sizes, obviously for 32km terrain this can be just imported in and its done.
</p>

<p>
Hit GE v9.0.3 CTRL-S save, now this... probably is going to last a very long time, I recall some silly numbers like 17 minutes.
</p>

<p>
It took a while, but was not 17 min:
</p>

<pre>
Scenefile 'E:/Farming.Simulator.22.Editing/PMC_Cereal_Region_32km/maps/PMC_Cereal_Region_32km/PMC_Cereal_Region_32km.i3d' saved in 395991.925678 ms at Thu Dec 15 08:34:50 2022.
</pre>

<p>
Still too long though <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Now have to compile testing version, I want to make sure that terrain edge block works, it should, but until I see me hitting an invicible block in-game I cant be sure.
</p>

<p>
Changed modDesc version to v0.1.4, edited readme.txt and compilation bat files.
</p>

<p>
2022-12-15T08:42:00Z Compiled PMC_Cereal_Region_32km_v0.1.4.7z for testing.
</p>

<p>
2022-12-15T09:05:00Z Finished testing, terrain edge block works as designed, nice. However got an error:
</p>

<pre>
2022-12-15 08:46 Error: Failed to open xml file 'C:/FS22.Mods/PMC_Terrain_Testing/PMC_Cereal_Region_32km/maps/placeables/sellingpoints/sellingStation13.xml'.
</pre>

<p>
Hmm that is bizarre, how can there be error when I removed that XML from placeables.xml config file, hmm where does this terrain reference that file, hmm hmm.
</p>

<p>
Ah, found the issue. Did quick powergrep4 search across all my FS22 editing dir I3D and XML files and found this:
</p>

<pre>
&lt;storeItem xmlFilename="maps/placeables/sellingpoints/sellingStation13.xml" /&gt;
</pre>

<p>
Of course, that is on storeItems.xml file <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Got that fixed, did not change modDesc version number yet, I want to do that just before compiling new version and no point doing it right now after removing one line from XML config file. Just glad to have that fixed, there should be no more error.
</p>

<p>
2022-12-15T09:49:00Z Had hard time finding something easy to fix, that it would not require some serious GE or GIMP editing along with other GDM/GRLE fiddling, but could not really find anything. Googled some selling point names and posted to <a href="https://www.pmctactical.org/forum/viewtopic.php?f=76&t=22813" target="_blank">PMC Tactical forum Catalog of selling point names topic</a>.
</p>


	<h2>2022-12-15 Utility Pole Wires</h2>

<p>
2022-12-15T23:44:00Z New editing day has started, todays goal is to add utility pole wires and do any small text based bug fixes I can, perhaps give unique names to selling points, not sure yet what I can manage and how long the utility pole wire work takes.
</p>

<p>
As usual editing day begins with taking 7-zip backup and copying the .7z archive to another computer and three separate HDDs for safety.
</p>

<p>
Started GE v9.0.3, loaded terrain project, ran script for large terrain and started to import PMC_helpers after which GE is frozen for a very long time...
</p>

<p>
While waiting I was wondering if it would be worth the effort to create few more utility pole splines, but as this terrain is already several months old and besides one dude nobody is showing any interest on it, any time spent here most likely would be wasted. On the other hand if I would edit for the sake of feedback / interest, I would not be editing much <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
GE was processing so I went and added required mods classes to modDesc.xml dependencies property.
</p>

<p>
2022-12-16T00:05:00Z GE finally finished that small I3D import task, now we can continue.
</p>

<p>
First imported the utility pole with those wire transformgroups attached to it, then imported the actual wires object. Then deleted existing two utility pole lines.
</p>

<p>
2022-12-16T00:22:00Z First utility pole objects set re-created with wires, looking good. These telephone wire lines in this terrain are just ridiculously long, this first line had 503 poles, I doubt there are that many poles in the whole elmcreek <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Now I would like to save, but hmm it might take a long time so its better to just export PMC_Helpers and the new utility pole objects to temporary I3D files until this editing session is over.
</p>

<p>
2022-12-16T00:39:00Z Finished creating second utility pole wire line, uuh maaan these lines are LONG <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Saved project, this time it only took 15517.132945 ms, and exited GE. Changed modDesc version to v0.1.5, edited readme.txt and release compilation bat files.
</p>

<p>
2022-12-16T00:43:00Z Compiled PMC_Cereal_Region_32km_v0.1.5.7z testing version. Now its time to test it out on Gaming computer before pushing it to PMC Tactical forum for public testing.
</p>

<p>
2022-12-16T00:53:00Z Testing complete, we have a green light, aayeah <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2022-12-16T01:10:00Z Started to upload v0.1.5 for PMC Tactical forum testing <img src="../images/smileys/icon_biggrin.gif" alt="Smiley :D" loading="lazy">
</p>


	<h2>Start From Zero Check</h2>

<p>
PMC Cereal Region 32km Start From Zero check. Goal is to try to <a href="../19/stories.php">play Start From Zero savegame</a> and see if "it works", are there cheap enough farmland land areas, small enough fields, etc.
</p>

<p>
2023-01-02T04:20:00Z Launched PMC Cereal Region 32km v0.1.5 farm-manager savegame.
</p>

<p>
2023-01-02T04:28:00Z Settings done, not that they matter in such quick start from zero test, if this fails it does right in the first minute and all these settings wont have mattered at all heh.
</p>

<p>
First thing I noticed that in farm-manager game-mode new farmer vehicles are still present, so this has not been fixed in v0.1.5 ouch. Second thing is farmland areas are insanely large, 3000ha in size and cost about 29 million each, there are few smaller ones in north and south edges, but these don't really help farmer with a little money.
</p>

<p>
2023-01-02T04:32:00Z I would say this test had its result here and that is: <b>FAILED!</b>
</p>

<p>
You cannot play start from zero when cheapest land costs over 20 million.
</p>

<p>
But because I'm testing, lets forget this farmland image issue and check out the field definitions for contracts; better contracts filtered out fertilizing, seeding and spraying, then refreshed as long as there was new contracts coming up. Sorted them out by net profit, highest paying was harvest canola on F84 217.8ha, must deliver: 2.291m and can keep: 172.5k liters, ETA: 20hrs 14min. Lowest paying harvest wheat F422 93ha, must deliver: 1.001m and can keep: 75.3k liters, ETA: 6hrs 50min.
</p>

<p>
I would not exactly call those small contracts <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>


	<h2>2023-01-02 Design Doc Almost Re-Design</h2>

<p>
2023-01-02T22:51:00Z New editing day has started, just checked sources dir for GIMP XCF design doc and was really disappointed to see that this terrain is not using <a href="../19/terrain-design-document.php">the now well known and documented design doc tool pipeline</a> at all. This design doc XCF image has nothing to do with the current aka new terrain design doc thing <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
Basically I would have to remake the whole terrain design doc XCF image according to my tutorial, the existing image is red and black RGB colors, red obvious fields and black is in this case dirt roads including the dealership yard. I could possibly copy-paste the roads into new proper design doc image, set major roads to asphalt and minor to dirt... it might work. Then I would get the rounded field edges as well.
</p>

<p>
However this editing would absolutely be trial & error type thing with the existing road and field definition locations, I bet its difficult to keep those in align especially now with autodrive network done, trees, selling points etc, oh my <img src="../images/smileys/icon_surprised.gif" alt="Smiley :o" loading="lazy">
</p>

<p>
The benefits of upgrading into new design doc XCF tool pipeline would be "everything", I could easily do many bug fixes currently pending just by doing this upgrade. I could do small fields, farm yards, train track, you name it.
</p>

<p>
One idea was to take proper backup of terrain project and sources design doc image dir, so if I screw it up its easy to revert back to current v0.1.5 (or whatever the version number was) status.
</p>

<p>
Its tempting, but requires a lot of effort for sure, first to align roads and field definitions, hell I should not even begin with anything else than asphalt roads and fields, if those cant be fit together in GE, then no point designing farm yards and other useless shit which doesn't work.
</p>

<p>
2023-01-03T01:14:00Z Checked the design doc and road pixel width is 60 which is just absolutely huge. Field size inside that road grid is 740 x 740 pixels. In GE that translates to 20 pixel radius brush.
</p>

<p>
2023-01-03T01:28:00Z Almost by accident I went and re-created 16384 x 16384 pixel resolution design doc, I copy pasted the old black and red simple road grid image, select by color did the roads and the dealership, copy-pasted into a new image, then added background color and the other layers as explained in the tutorial, the other layers were just empty now I did not paint anything on those. Saved the GIMP XCF image and it came out as 17.6mb file size. That was really fast once I just "did it" heh, now I could do a dry run by exporting these layers and putting the PNGs through the graphismagick bat file process, hmm.
</p>


	<h2>2023-01-03 Painting Design Doc</h2>

<p>
2023-01-03T19:03:00Z New editing day has started, edited Sources/ dir design doc graphicsmagic bat files, fixed old PMC Gaming computer win10 FS22 editing directory names in all bat files. Renamed two GIMP XCF images from test to PMC_Cereal_Region_32km prefix. In new.advanced/ dir (whatever that dir is haha) renamed test farm bat to proper PMC_Cereal_Region_32km file name. Replaced test strings in the bat files using powergrep4.
</p>

<p>
2023-01-03T20:51:00Z Did some background research to catch up on all the latest specs of this terrain, hey its close to one year since I've edited this (feb 2022?) so its hard to remember all the small things especially as there are so many projects across several game engines (ArmA 3, FS19 and FS22). Weight image resolution is 8192 x 8192 so I had to study my own graphicsmagick bat files that which generates design doc to GE readable images using that resolution, found such bat, it was not documented anywhere which is absolute failure on my part. But now the graphicsmagick bat is running and soon we'll see if it produces anything usable.
</p>

<p>
First attempt with my source PNGs and the graphicsmagick bat file failed, weight images came out with gray color instead of white, hmm OK lets start digging where it fails... fruit_density.png also got the gray for roads/dirt, hmm so there must be some RGB bug between PNG and graphicsmagick bat values...
</p>

<p>
Okay so fields.png is properly RGB 255,0,0 for fields, but roads_asphalt.png has RGB 120,120,120 for roads, hmm. Ah there is the bug, graphicsmagick is using "rgb(150,150,150)" so no wonder the roads are not done. Okay so WHY is this, am I using wrong color in the design doc XCF or in the graphicsmagick bat file, hrr this pisses me off, such a shit show to sort out my own tool pipeline, why, WHY have I not documented this anywhere (at least could not find any info).
</p>

<p>
PMC Farming GIMP design document tutorial instructs to use RGB 120,120,120 for asphalt roads, OK so I'm following that. FS22 user interface overview.dds image has asphalt roads as RGB 150,150,150 like my graphicsmagic bat file, OK so now we're getting somewhere.
</p>

<p>
I have to assume that I used RGB 150,150,150 for FS22 design doc asphalt roads but never documented it anywhere, no wonder I'm lost as a sheep dog now almost year later <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Then opened design doc image in GIMP, selected roads asphalt layer, selected the RGB 120,120,120 colors and shrunk the selection 5 pixels, then inverted selection and deleted the outside that shrunken 5 pixel area leftovers. Then replaced color with RGB 150,150,150 and saved project. If this 5 pixel shrinkage experiment fails... I have bunch of stuff to re-create again hehe.
</p>

<p>
Exported new RGB 150 asphalt roads, saved XCF and closed it down. Then started _run_design_doc_to_density_weight_images_all_in_one_2022-01-28.bat graphicsmagick process again, this will take several minutes as its chewing on 16384 pixel resolution images.
</p>

<p>
2023-01-03T21:39:00Z Fixed, _weight images for asphalt roads now are black and white like they are supposed to, good. <i>Edit: this timestamp paragraph sounds like some issue came up but I forgot to write it down OR wrote it to WRONG dev diary heh, at least reading this now several days later that sudden "Fixed" sounds coming from nowhere, fixed... fixed WHAT exactly? haha</i>
</p>

<p>
Had to use powergrep to mass string replace all E:\Farming.Simulator.22.Editing\Batch_Files_FS22\*.bat files for "backups\2022" to "backups\2023" as we are now in new year heh. Then ran _run_backup_PMC_Cereal_Region_32km.bat to take backups and copy the 7-zip packet to all available hard disks and computers, maximum security all the way.
</p>

<p>
Now I can play around with this terrain project dir without fear of losing progress. How many times I get to say, never forget backups, <i>never</i> <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Copied _run_copy_weight_to_PMC_Undefined_Farms_20km_GE_data_dir.bat to cereal region design doc (temp) dir, renamed it to _run_copy_weight_to_PMC_Cereal_Region_32km_GE_data_dir.bat and edited it to switch project dir name. Then ran the bat which copied weight and density images into terrain project dir.
</p>

<p>
Then edited PMC_Cereal_Region_32km.i3d to replace cultivator_density and fruit_density GDM to PNG file extension. Started GE v9.0.3 and loaded the project up... before realizing that I forgot to delete cultivator_density.gdm and fruit_density.gdm files first, DOH! <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
GE loads GDM files first even though I3D file reads PNG extension and its available in the dir.
</p>

<p>
2023-01-03T21:56:00Z We have semi victory... field corners turned out OK, they are not as smooth / round as I'd like but that can be easily fixed, roads appear just fine, the intersections are now a bit fuzzy with the 5 pixel shrink, but its not too bad they need to be a bit wider so vehicles are easier to turn than hard 90 degree angle cut. However we have some sort of problem with fruit_density grass... its now painted not even near the roads, hmm hmm, what am I missing?
</p>

<a href="screenshots/PMC-Cereal-Region-32km-2023-01-03T2159.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Cereal-Region-32km-2023-01-03T2159.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
Alright lets go back to GIMP and figure this shizzle out...
</p>

<p>
In GIMP design doc cereal region temp dir deleted all PNG images, this was perhaps overkill, now I need to remember the exact names of these files when exporting them in GIMP, but hopefully I'll remember heh. Then in GIMP exported each of the layers to PNG images.
</p>

<p>
2023-01-03T22:07:00Z GIMP PNG export done, started graphicsmagick conversion bat again. And now we wait...
</p>

<p>
2023-01-03T22:23:00Z Done exporting and GE is loading the project for inspection. Lets see if that GIMP re-exporting fixed anything, I still cant figure out why fruit_density grass was old.
</p>

<p>
Nope, no change <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
2023-01-03T22:34:00Z Yeah cant figure it out, going to take a cooking and eating food break here, maybe some nutrition makes me come up with cause for this issue <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
2023-01-03T23:27:00Z Feeding time is over, back to fruit_density issue. Unfortunately during cooking break I did not come up with any causes for this fruit_density grass being offset or well, old.
</p>

<p>
I sat down and thought about all possible things that could have gone wrong... and then it came to me. In GIMP opened XCF design doc, enabled roads asphalt layer, then went to channels tab and turned off alpha channel... and guess what? Indeed! There was some leftover color in this alpha channel resulting from my deletion of the road 5 pixel shrinkage and leftovers.
</p>

<a href="screenshots/PMC-Cereal-Region-32km-2023-01-03T2341.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Cereal-Region-32km-2023-01-03T2341.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
2023-01-04T00:07:00Z Tried to fix that alpha channel leftover, in practical sense I did not manage to do it... until I simply foreground filled the whole outside road area with a color and deleted the color (yes, sounds stupid), now I can see the color when alpha channel is disabled, but once I export roads_asphalt.png the alpha channel is empty. So in theory this should now work. Currently graphicsmagick bat is running again.
</p>

<p>
2023-01-04T00:16:00Z Negative, GE still shows missing fruit_density grass, what the fuck is going on here now <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
In GIMP compared cultivator_density, fruit_density and roads_asphalt, all these fit together just nice. Again... what the fuck is going on, why goes GE now show dumb empty area in grass coverage which comes from fruit density... NO COMPRENDE! <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
Blacked out all _weight images in terrain project data\ dir, just in case... because I saw in one asphalt road intersection there was about pixel worth of animal mud or pigmud whatever it is, which means that one or more of the _weight images has duplicating white pixels, that they are simply not properly synced. Honestly I kinda wish that this would not be the issue because heh spent all this time hammering head to the brick wall and it was not even anything I did in GIMP or graphicsmagick heh.
</p>

<a href="screenshots/PMC-Cereal-Region-32km-2023-01-04T0045.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Cereal-Region-32km-2023-01-04T0045.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
It worked, unbelievable! <img src="../images/smileys/icon_surprised.gif" alt="Smiley :o" loading="lazy">
</p>

<p>
But now we have another issue, what happened with our <b>PHAT</b> and <b>THiCK</b> roads? <img src="../images/smileys/icon_confused.gif" alt="Smiley :?" loading="lazy">
</p>

<p>
Oh well lets do another GIMP edit and shrink the roads hmm 10 pixels, maybe. Got it done, intersections came out really nice round looking now. Then exported roads_asphalt.png and ran graphicsmagick bat again.
</p>

<p>
2023-01-04T01:08:00Z GE check shows its still too wide, intersection utility poles are on the road and the ones along road are too close, I'm going to take another 10 pixel notch shrink to it, lets see what happens then.
</p>

<p>
Well 10 pixels was way too much, it came so narrow, did 5 pixel and even that looked like a lot but I left it there, lets see how it plays out in GE. The thing is that I don't want roads to be too narrow because yesterday or when it was I spent several hours recording autodrive network waypoint routes, so if those routes end up in the grass... its unacceptable.
</p>

<p>
This 5 pixel shrink most likely will bring the roads so narrow that autodrive waypoints are just on the edge or already in the grass.
</p>

<p>
It starts to piss me off how long time these 16384 pixel resolution images process with graphicsmagick, it gets boring waiting here everytime that runs. GIMP editing and GE check is very quick. But yeah what can you do, they are big images, it takes a while to process them.
</p>

<p>
Should have tested this tool pipeline in PMC Super Six 6km instead <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
2023-01-04T01:29:00Z Looked OK in GE so saved project.
</p>

<p>
2023-01-04T01:48:00Z Project saved and I edited PMC_Cereal_Region_32km.i3d back to GDM, then deleted data\cultivator_density.png and fruit_density.png images.
</p>

<p>
Changed modDesc.xml to v0.1.6, edited readme.txt and release compilation bat file for new info.
</p>

<p>
2023-01-04T01:51:00Z Compiled PMC_Cereal_Region_32km_v0.1.6.7z testing version.
</p>

<p>
In-game test shows that roads are now asphalt ground texture, odd but they seem exactly the same width as before which is weird. Field definitions are larger than cultivator density painted fields, so I need to increase the cultivator_density field size which is great, get real nice round corners for fields now.
</p>

<p>
Back in GIMP cleared the old fields layer, then selected roads layer colors... and hmm wonder how many pixels do I grow the selection now, 30? Hmm. I did grow 30, shrink 15. Now there are nice round corners on the fields. Then foreground filled fields with red and exported fields.png, saved image and closed it. Then just ran graphicsmagick bat and waited.
</p>

<p>
In the mean time edited PMC_Cereal_Region_32km.i3d for the usual GDM vs PNG shuffle and deleted data\cultivator_density.gdm and fruit_density.gdm files.
</p>

<p>
GE loaded terrain project and unfortunately road selection grow 30 and shrink 15 created too large fields, they are now OK with roads and utility poles... however they get under forest tree lines. There are only hmm 3 or 4 forest tree lines, just a few, so fixing those would not be a big deal if this field size works in-game OK.
</p>

<p>
I want to go check in FS22 to see if mapview and minimap now loses roads because fields get drawn together, if fields work OK then I'm going to fix those few tree lines.
</p>

<p>
So GE save, plus all the other jargon I already explained above to get FS22 in-game testing version <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
GE saved PMC_Cereal_Region_32km.i3d forever, apparently its the .cache file which takes this long to save. <i>Edit: "The .cache file"? err yes, WHICH ONE! hehe, apparently I forgot to write it down, not sure if its occluders hmm.</i>
</p>

<p>
2023-01-04T02:55:00Z Compiled PMC_Cereal_Region_32km_v0.1.7.7z for testing, hopefully fields are OK in mapview etc, off to FS22 in-game test it.
</p>

<p>
2023-01-04T03:11:00Z FS22 in-game test complete, cultivator_density fields are OK with the trees exception, actually there was several tree lines I thought there was literally three or four, but yeah anyways not a big deal to fix those.
</p>

<p>
Then needed to create terrain edge hmm what should I call it, its not exactly field divider, more like a eraser, because in E and S edges fields are drawn right up to the edge so that makes them incredibly bad to field work in-game.
</p>

<p>
In GIMP created new empty layer, used rectangle selection tool, moved the selection rectangle with the mouse to position: 15, 15 and size: 16354, 16354. Once that was in place, hit CTRL-I invert the selection and foreground filled with RGB 0,0,0 black. This is now our S and E field edge eraser so to speak.
</p>

<p>
2023-01-04T04:13:00Z Did a test with road + "edge field limiter" layers selected, grow 30, shrink 15, invert and foreground will with red, fields appear just great. Very happy with these results, except that layer name <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Then painted few dirt roads using RGB 178,164,142 color. Put these roads to split up the field just north from the dealership. This would be good for our Start From Zero savegames for those small fields.
</p>

<p>
2023-01-04T04:28:00Z Painted roads dirt layer, then redid the whole asphalt + dirt roads and edge field limiter selection, grow 30 shrink 15, painted fields, exported PNGs, saved XCF, closed XCF. Then started running graphicsmagick bat, hooyah.
</p>

<p>
While that was again running forever, I did usual GE I3D shuffle and GDM deletion, you know the drill by now. I should probably do a powergrep4 action-set just for this, I've now done it so many times it would save some time and definitely typing <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Edited vehicles.xml and added defaultFarmProperty="true" after farmId="1" so now new farmer vehicles will not appear in farm-manager and start from scratch game-modes.
</p>

<p>
2023-01-04T04:46:00Z Terrain project loaded in GE, guess I forgot one step in GIMP, now dirt roads are painted over asphalt heh. Not a big deal, cosmetic thing, will fix on the next GIMP session.
</p>

<p>
Created small field definitions on top of the new dirt road divided cultivator_density fields N of the dealership. Created grass fields (fieldGrassMission attribute) on different sizes of fields here.
</p>

<p>
Then had to fix the E and southern edge field definitions because now cultivator_density is much smaller than previously.
</p>

<p>
2023-01-04T05:16:00Z Field definitions for the E edge done, was doing S edge when got hungry and realized hey, its my lunch time...
</p>

<p>
2023-01-04T05:38:00Z Feeding time is over, back to the joy of editing field definitions.
</p>

<p>
2023-01-04T05:43:00Z Finished editing S side field definitions, all edges are now all good.
</p>

<p>
2023-01-04T06:12:00Z Went through forest tree lines, all trees are now off the fields, no issues with field work anymore. This task started to get pretty tedious, luckily it was over pretty quick.
</p>

<p>
Saved project and exited GE. Next need to edit farmland image for more detailed smaller areas which are cheap to buy.
</p>

<p>
2023-01-04T06:38:00Z Finished adding new areas for farmland XCF image, last color used was "rgb(0, 100, 255)". Now short restroom break.
</p>

<p>
Last added farmland ID is 51, so added that to farmlands.xml config file. Edited PMC_Cereal_Region_32km.i3d and changed farmland GRLE to PNG, copied the new farmland PNG image to data\ dir, then launched GE and loaded project up.
</p>

<p>
Checked that farmland image works OK in GE then saved project, which again took forever.
</p>

<p>
2023-01-04T07:07:00Z Got tired of waiting, need to go take a shower to give some energy boost for remaining few hours of tonight, I want to do as many edits as possible tonight.
</p>

<p>
2023-01-04T07:22:00Z Back, GE had finished its save, imported PMC_helpers and brough up selling points transformgroup.
</p>

<p>
Moved SellingPoint02 object to the next field on the west, updated coordinates into placeables.xml config file. Now autodrive semi-truck will plenty of space to drive there. Removed grass from the selling points, I mean why not. Deleted selling point 13 object, its not used anymore, exported PMC_Helpers.i3d back out again.
</p>

<p>
2023-01-04T07:30:00Z Saved terrain project once again and exited GE, we are done for now.
</p>

<p>
Deleted PMC_Cereal_Region_32km_farmland.png and edited PMC_Cereal_Region_32km.i3d back to farmland GRLE file extension.
</p>

<p>
Changed modDesc.xml to v0.1.8, edited readme.txt and release compilation bat as well.
</p>

<p>
2023-01-04T07:33:00Z Compiled PMC_Cereal_Region_32km_v0.1.8.7z for testing. Then switched to PMC Gaming hoping that every edit works OK <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>


	<h2>2023-01-04 Creating Farm Yard</h2>

<p>
2023-01-04T17:27:00Z New editing day has started, todays goal is to finish these game-play bug fixing edits for PMC Cereal Region 32km terrain, then I want to try out actual Start From Zero savegame, can I get such game-mode working with the current terrain specifications. It should work because there are small fields, small grass fields and farmland land areas are very small only a field sizes in the new area N of the dealership, I cant see a reason on paper why Start From Zero would not work.
</p>

<p>
Created _run_backup_Design_Doc_PMC_Cereal_Region_32km.bat backup bat file and ran it, now it created 7-zip archive from both the old and yesterdays new design doc directories. Then took backup from the terrain project dir using _run_backup_PMC_Cereal_Region_32km.bat which copies it to three different HDDs and PMC Linux computer as well. Now we are ready to start editing without any fear of losing progress.
</p>

<p>
2023-01-04T17:40:00Z Created proper "random" names for all 12 selling points.
</p>

<p>
Then it was time to create at least one farm yard so players can establish some sort of base of operations. Opened design doc in GIMP, selected farm yards layer and picked "rgb(140,100,20)" color, lets choose a spot. But there was editing dilemma, if I just stamp down several farm yards across the road grid, then I have to edit all those field definitions because the new farm yard area would break up the existing field, doable of course but some work for a single farm yard and for lets say 5 or more, its a lot of work to edit field definition corner pieces properly. Hmm.
</p>

<p>
Another thing was the size and heightmap, how many buildings do I want to fit in there and is the elevations how steep in the area I pick, hmm hmm. Turns out seeing heightmap grayscale PNG image is not very helpful, you cant really tell in detail how elevated the terrain is at spots, maybe in some really rough locations but overall nah.
</p>

<p>
2023-01-04T17:59:00Z Created farm yard center of a road grid with connecting dirt roads right next to the dealership and the other new area from yesterday. Farm yard size is 150 x 200 pixels, honestly no idea how large will that be in-game, I assume its twice the size in meters, so 300 meters x 400 meters, hmm is that a large one, dunno heh.
</p>

<a href="screenshots/PMC-Cereal-Region-32km-2023-01-04T1800.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Cereal-Region-32km-2023-01-04T1800.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
Selected roads asphalt and farm yards, then cut roads dirt so they are not overlapping anything else.
</p>

<p>
Decided to rename GIMP design doc layer "edge field limiter" which sounds stupid, to simply a "field dividers", as thats what it was called in hmm was it PMC Korkscrew 40km or PMC King Corn 45km terrain, one of those.
</p>

<p>
Selected RGB by color on layers: field dividers, roads asphalt, roads dirt and farm yards, then selection grow 30, shrink 15. Invert selection CTRL-I, choose RGB 255,0,0 red and then just foreground fill CTRL-, on fields layer. Then exported all layers one by one as PNGs.
</p>

<p>
2023-01-04T18:11:00Z Started graphicsmagick bat to convert and process density and weight images while I go to the restroom <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
While graphicsmagick was processing I did the usual shuffle in terrain project dir, also just in case blacked out all _weight images as we have new ground detail texture type coming in (farm yards).
</p>

<p>
If this round of edits works as is, then my plan is to switch over to PMC Gaming computer and create Start From Zero savegame to test out if everything works game-play wise. Will be fun to do some actual farming again <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Graphicsmagick finished but oops I forgot farmland image, I want the new farm yard to appear in detailed small land to buy. In GIMP exported "mapview-for-farmland.png" image with everything on it, rescaled it down to 4096 x 4096 pixel resolution with interpolation none, then opened farmland XCF and copy-pasted mapview-for-farmand into it. Now I need to hunt down the last farmland ID channel RGB I used last night.
</p>

<p>
2023-01-04T18:39:00Z Farmland ID channel RGB colors painted, last ID / RGB are: -fill "rgb(62, 62, 62)" -opaque "rgb(35, 100, 100)".
</p>

<p>
Saved farmland XCF, exported satellite_texture_farmland.png and ran _run_graphicsmagick_create_farmland.bat which is the latest from 2022-02-02T10:01:00Z timestamp. Did the usual farmland GRLE to PNG shuffle.
</p>

<p>
2023-01-04T18:44:00Z Started GE and loaded the project up, I'm still getting that stupid "Warning: Loading file with invalid case" hmm.
</p>

<p>
Looked pretty good in GE, only thing was on the new farm yard road dirt, there was utility pole right at the side of the road, technically it is not in the road... but yes, it has to be moved. But that is a issue for another day, I'm not going to re-create that utility pole line right now as its not a showstopper critical bug. Saved project.
</p>

<p>
2023-01-04T19:05:00Z GE finished saving while I googled about "Warning: Loading file with invalid case", that comes from the ROOT of the game directory and I cant figure out how it gives that error, my game path is C:/Games/fs22 and the same path is written in GE v9.0.3 editor.xml &lt;gameinstallationpath&gt;C:/Games/fs22/&lt;/gameinstallationpath&gt; property, so no idea why do I get that warning in the log <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
Restarted GE and loaded PMC Super Six 6km project, it does not give invalid case warning, hmm. Neither does PMC Farm Lab or PMC RedWhiteBlue 10km.
</p>

<p>
Then discovered this in PMC_Cereal_Region_32km.i3d file:
</p>

<pre>
    &lt;File fileId="281" filename="data/weed_density.gdm"/&gt;
    &lt;File fileId="275" filename="c:/games/fs22/data/fillPlanes/dummyFillplane_diffuse.dds"/&gt;
    &lt;File fileId="276" filename="c:/games/fs22/data/fillPlanes/dummyFillplane_normal.dds"/&gt;
    &lt;File fileId="277" filename="c:/games/fs22/data/fillPlanes/dummyFillplane_specular.dds"/&gt;
</pre>

<p>
Whoah, why on earth did it somehow input absolute path from PMC DevSurf into there? Well technically its the same in PMC Gaming computer as well c:/Games/fs22/ dir name, but still.
</p>

<p>
That is bizarre, but now its easy to fix, I can just EditPadPro text string mass replace that c:/games/fs22/ with nothing.
</p>

<p>
2023-01-04T19:22:00Z Fixed. Now in GE v9.0.3 PMC_Cereal_Region_32km.i3d loads without errors or warnings, we are good to go.
</p>

<p>
Deleted _density.png and _farmland.png, then edited modDesc.xml to v0.1.9, did same for readme.txt and release compilation bat files too.
</p>

<p>
2023-01-04T19:28:00Z Compiled PMC_Cereal_Region_32km_v0.1.9.7z for testing, crossing fingers hopefully everything works OK.
</p>

<p>
But uh oh first fs22 in-game load shows I forgot to edit farmlands.xml file for the new channel IDs <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Added IDs 53 through 62, changed modDesc.xml to v0.2 along with readme compilation shizzle, compiled v0.2 for testing.
</p>

<p>
2023-01-04T19:54:00Z Argh v0.2 was a bust too, got all the farmland stuff fixed but once in fs22 I realized that uh oh forgot to edit field definitions for the new farm yard area haha.
</p>

<p>
Its always something, ain't it? <img src="../images/smileys/icon_biggrin.gif" alt="Smiley :D" loading="lazy">
</p>

<p>
So once again started GE, loaded terrain project up, setup for large terrains script, toggle render field areas, then searched through 450 field definitions to find the one by the farm yard, with a little logic it was fairly easy to find, then just started creating new small field definitions to this new area.
</p>

<p>
2023-01-04T20:03:00Z Done editing, added all new fields for that area and turned one of the big corner fields to a grass field too, will be interesting to see how massive grass mowing contracts you can get for that field heh. Hit save and well, now we wait again until GE does its thing with the useless 10+ min delay.
</p>

<p>
2023-01-04T20:15:00Z Done saving, uuh. Okay shuffle for v0.2.1 compile.
</p>


	<h2>2023-01-06 Cool Your Sprays Hot Shot</h2>

<p>
2023-01-06T21:40:00Z New editing day has started, I'm currently playing Start From Zero test savegame in PMC Gaming computer, did savegame and exited there, now its time to fix the fertilizer / seed / slurry / manure / herbicide usage rate.
</p>

<p>
Copied maps_sprayTypes.xml from PMC Super Six 6km terrain, edited PMC_Cereal_Region_32km.xml config file and added that spraytypes xml in there with proper path.
</p>

<pre>
	&lt;sprayTypes filename="maps/PMC_Cereal_Region_32km/maps_sprayTypes.xml" /&gt;
</pre>

<p>
Now spray rates should be better.
</p>

<p>
Changed selling point 8 name to Big Barn Grain, as the previous name was kind of duping.
</p>

<p>
Changed modDesc.xml to v0.2.2, edited readme.txt and release compilation bat files.
</p>

<p>
2023-01-06T21:50:00Z Compiled PMC_Cereal_Region_32km_v0.2.2.7z for testing, moments later uploaded and posted it to PMC Tactical forums for testing as well (hopefully it works haha).
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
