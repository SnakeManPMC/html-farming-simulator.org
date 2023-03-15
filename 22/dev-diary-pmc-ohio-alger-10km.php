<!DOCTYPE html>
<html lang="en">
<head>
<title>Dev Diary PMC Ohio Alger 10km PMC Farming Simulator 22</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Dev Diary PMC Ohio Alger 10km PMC Farming Simulator 22">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<header>
<h1>Dev Diary PMC Ohio Alger 10km PMC Farming Simulator 22</h1>
</header>

<section>
	<h2>Dev Diary PMC Ohio Alger 10km FS22</h2>

<p>
This is developer diary for Farming Simulator 22 real world data American terrain called <a href="pmc-ohio-alger-10km.php">PMC Ohio Alger 10km</a>.
</p>


	<h2>2023-03-05 New Terrain Has Been Created</h2>

<p>
2023-03-05T02:55:00Z Today is the beginning of PMC Ohio Alger 10km terrain for Farming Simulator 22 (FS22). Already one month ago I spoke with <a href="https://www.twitch.tv/xr_renegade" target="_blank">xr-renegade</a> on this twitch live stream about his real life ohio farm he would like to have in FS22, he did a great presentation on google/maps document to show where farm yards and fields are.
</p>

<p>
Today I finally had a long chat on xr-renegade's discord, he was on the voice comms and I typed text chat as I don't do microphones / webcams. I warned xr-renegade that I cannot and will not make any promises about this terrain project, I explained that I've been on holiday the last time on august 3rd 2016 and since then its been sitting home doing computer stuff (editing, playing etc) 17hrs a day, I don't go out, hang out with friends, all I do is sit home and do computer stuff, so that has me burnt out really badly currently. Xr-renegade was fine with all that stuff, not to put pressure on me by saying in his twitch stream that new map is on the making and it will be "THE BEST" <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Yeah I went overboard about this background info and warning not to make any promises, but I really don't want to make empty promises, lie about "it will be done" and then dude disappears for months without doing nothing, I just simply do not want that extra pressure and expectations. When I'm doing my thing in peace and calm I can do miracles. I'm just like Star Trek (original series) Scotty, he always told Captain James T Kirk repair etc estimates in the high numbers so when he does the job in half the time, then Kirk thinks Scotty is a miracle worker, that is exactly what I want to do here <img src="../images/smileys/icon_biggrin.gif" alt="Smiley :D" loading="lazy">
</p>

<p>
But yeah joking aside, I don't want any pressure, I will not make empty promises, I just want to enjoy editing at my own pace, whether it being nothing getting done for monts or me absolutely crushing it in few days, it remains to be seen.
</p>

<p>
2023-03-05T10:47:00Z It has been a long day, I did not write down all the details, spent most of the day in discord listening to xr-renegades voice comms and text chatting with him. I created basic terrain source files, then terrain project files. Sent the first preview version of the terrain with only heightmap + PDA map image to xr-renegade. He then tested it in-game and discord streamed it when he ran around in the heightmap and was amazed how accurate it is.
</p>

<p>
Xr-renegade then downloaded <a href="https://das.ohio.gov/technology-and-strategy/OGRIP" target="_blank">ohio state .gov websites</a> detailed heightmap 3DEP DEM files, not even sure how detailed these are probably 1 meter or something. Below is example of the details they bring to the heightmap, low resolution is the usual US NED 10m detail, high res is the ohio state website downloaded one (I think its 1m detail).
</p>

<a href="screenshots/PMC-Ohio-Alger-10km-2023-03-05T0740.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Ohio-Alger-10km-2023-03-05T0740.jpg" class="terrainimg" loading="lazy" alt="Farming Simulator 22 PMC Ohio Alger 10km Screenshot"></a>

<p>
As writing this text I'm dead tired and just finished eating lunch so cant go to sleep in few hours unless you want bad sleep, anyways heh hate to be this tired.
</p>

<p>
heightScale="41.13" is the value this current heightmap data produces.
</p>


	<h2>2023-03-05 First Full Editing Day</h2>

<p>
2023-03-05T20:22:00Z New editing day has started, today is promising to be a busy day... first I'm starting to <a href="../19/terrain-cultivator_density-gimp.php" target="_blank">GIMP Paint cultivator_density Image</a> for fields, just the xr-renegade's own fields first, then some ground textures for roads, then compile a new testing version for FS22 in-game use.
</p>

<p>
These are the xr-renegade's fields:
</p>

<a href="screenshots/PMC-Ohio-Alger-10km-2023-03-05T2023.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Ohio-Alger-10km-2023-03-05T2023.jpg" alt="Farming Simulator 22 Terrain - PMC Ohio Alger 10km Screenshot" class="terrainimg" loading="lazy"></a>

<p>
2023-03-05T20:32:00Z Okay those fields outlines are now created in GIMP fields layer.
</p>

<a href="screenshots/PMC-Ohio-Alger-10km-2023-03-05T2032.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Ohio-Alger-10km-2023-03-05T2032.jpg" alt="Farming Simulator 22 Terrain - PMC Ohio Alger 10km Screenshot" class="terrainimg" loading="lazy"></a>

<p>
2023-03-05T20:49:00Z Painted few fields in the NW corner, then it was time for days first meal...
</p>

<p>
2023-03-05T21:16:00Z Feeding time is over, back to GIMP painting fields on cultivator_density image.
</p>

<p>
This was example image for xr-renegade, to ask if the field corners rounded vs squared is done according to his instructions.
</p>

<a href="screenshots/PMC-Ohio-Alger-10km-2023-03-05T2129.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Ohio-Alger-10km-2023-03-05T2129.jpg" alt="Farming Simulator 22 Terrain - PMC Ohio Alger 10km Screenshot" class="terrainimg" loading="lazy"></a>

<p>
2023-03-05T21:52:00Z Changing GIMP painting to roads now, I want that network to be done even though usually I do them after fields, but I want xr-renegade to be able to drive around the roads and give me editing feedback of the accuracy.
</p>

<p>
2023-03-05T22:41:00Z Update on asphalt road painting.
</p>

<a href="screenshots/PMC-Ohio-Alger-10km-2023-03-05T2240.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Ohio-Alger-10km-2023-03-05T2240.jpg" alt="Farming Simulator 22 Terrain - PMC Ohio Alger 10km Screenshot" class="terrainimg" loading="lazy"></a>

<p>
2023-03-05T23:37:00Z Roads are done as far as I can tell.
</p>

<a href="screenshots/PMC-Ohio-Alger-10km-2023-03-05T2337.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Ohio-Alger-10km-2023-03-05T2337.jpg" alt="Farming Simulator 22 Terrain - PMC Ohio Alger 10km Screenshot" class="terrainimg" loading="lazy"></a>

<p>
Used my <a href="../19/terrain-design-document.php" target="_blank">GIMP Terrain Design Document</a> method to bring in asphalt roads, xr-renegade told me there are no dirt roads in this terrains area which was really surprising, first terrain I see since creating all <a href="../19/pmc-terrains.php" target="_blank">PMC Terrains (FS19)</a> which has no dirt roads. Blacked out all Giants Editor (GE) _weight images in preparations to bring in new ground texture images.
</p>

<p>
2023-03-06T00:15:00Z Finally got cultivator_density, fruit_density and _weight images in terrain project dir, GE v9.0.2 loaded up.
</p>

<a href="screenshots/PMC-Ohio-Alger-10km-2023-03-06T0014.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Ohio-Alger-10km-2023-03-06T0014.jpg" alt="Farming Simulator 22 Terrain - PMC Ohio Alger 10km Screenshot" class="terrainimg" loading="lazy"></a>

<p>
Saved the project to get GDM and GRLE images again (not that I edited in GRLE's but yeah). Then created icon.dds and preview.dds images as explained in <a href="terrain-user-interface-images.php" target="_blank">Terrain User Interface Images (FS22)</a> page.
</p>

<p>
2023-03-06T02:39:00Z Everything I edited worked OK in-game, so I send v0.1.5 testing version to xr-renegade, he discord streamed testing session and liked it. Only one field was in a wrong spot which is no big deal.
</p>

<p>
We spoke about announcing this terrain project on his friday's twitch stream. Gives me monday through thursday full days of editing time to get things in good shape for at least screenshots or perhaps even video or live demo on the stream. Everything should be looking good by friday for sure, I mean its four full days, plus half today and friday, so yeah I would be slacking badly if this terrain would not be in twitch stream presentable stage at that time <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2023-03-06T03:06:00Z Set my VPN to use Ohio USA server so I look like American internet user, then went to das.ohio.gov website and to <a href="https://gis1.oit.ohio.gov/geodatadownload" target="_blank">gis1.oit.ohio.gov/geodatadownload</a> page, then selected heightmap 3DEP DEM tiles and downloaded them one by one.
</p>

<a href="screenshots/PMC-Ohio-Alger-10km-2023-03-06T0306.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Ohio-Alger-10km-2023-03-06T0306.jpg" alt="Farming Simulator 22 Terrain - PMC Ohio Alger 10km Screenshot" class="terrainimg" loading="lazy"></a>

<p>
I am actually still not sure what is the precise resolution of this heightmap data, but I know its extremely good, probably 1 meter resolution. This is really good stuff <img src="../images/smileys/icon_cool.gif" alt="Smiley :cool:" loading="lazy">
</p>

<p>
Downloading was painful with first selecting the heightmap tiles I need from the web interface, then clicking them to download one by one, there was no automated "drag a big box and download all" way of doing it. So I had to figure out something. Well seems like there is no index.html protection stuff in the physical download directly on the web server, so I could see the whole dir with thousands of ZIP files in there.
</p>

<p>
This is the download link for raw data directory of <a href="https://gis1.oit.ohio.gov/ZIPARCHIVES_III/ELEVATION/3DEP/DEM/HAR/" target="_blank">ohio hardin county 3DEP heightmap DEM data</a>.
</p>

<p>
So I configured WGET program to leech all the zips from there <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<pre>
wget -r -np -l 1 -A zip https://gis1.oit.ohio.gov/ZIPARCHIVES_III/ELEVATION/3DEP/DEM/HAR/
</pre>

<p>
When I started the download I had no idea how many zips there are, many, but should not be thousands, I think...
</p>

<p>
2023-03-06T03:16:00Z Download was started minute or so ago, lets see how long it will take and how many gigabytes of files there are. It will be awesome to get all the heightmap data, can do more terrains <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
2023-03-06T03:24:00Z GIMP painted few more fields to cultivator_density image.
</p>

<p>
Passing through Alger, OH. Paint, paint... paint away!
</p>

<a href="screenshots/PMC-Ohio-Alger-10km-2023-03-06T0337.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Ohio-Alger-10km-2023-03-06T0337.jpg" alt="Farming Simulator 22 Terrain - PMC Ohio Alger 10km Screenshot" class="terrainimg" loading="lazy"></a>

<p>
2023-03-06T04:30:00Z Northern most pass of cultivator_density painting is now done.
</p>

<a href="screenshots/PMC-Ohio-Alger-10km-2023-03-06T0430.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Ohio-Alger-10km-2023-03-06T0430.jpg" alt="Farming Simulator 22 Terrain - PMC Ohio Alger 10km Screenshot" class="terrainimg" loading="lazy"></a>

<p>
So far things are going great, no sense of exhaustion or boredom, still going full speed with enthusiasm, although I don't have that kind of hurry rushing feeling, so I really enjoy this editing, its getting progress done but no sense of getting exhausted. Hopefully this is me understanding that I have now monday through thursday time to edit which is plenty to get these fields done, plus much more stuff what comes after that.
</p>

<p>
2023-03-06T05:04:00Z Wget is still downloading ohio .gov state website heightmap DEM tile zip files, currently the dir is 3.17gb in size with 2162 files in it, and counting... <img src="../images/smileys/icon_surprised.gif" alt="Smiley :o" loading="lazy">
</p>

<p>
Heh so much for <i>"there should not be thousands of zips..."</i> <img src="../images/smileys/icon_biggrin.gif" alt="Smiley :D" loading="lazy">
</p>

<p>
2023-03-06T06:18:00Z Reached a location where in google/maps and ArcGIS world imagery there are dairy or something cow barns, but in US NAIP imagery over which I'm painting fields... there are only a field. <a href="https://www.google.com/maps/@40.6895813,-83.8960232,412m/data=!3m1!1e3" target="_blank">This is the location in google/maps</a>.
</p>

<p>
2023-03-06T07:27:00Z One more full section and then half of cultivator_density has been painted.
</p>

<a href="screenshots/PMC-Ohio-Alger-10km-2023-03-06T0726.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Ohio-Alger-10km-2023-03-06T0726.jpg" alt="Farming Simulator 22 Terrain - PMC Ohio Alger 10km Screenshot" class="terrainimg" loading="lazy"></a>

<p>
2023-03-06T08:15:00Z Wget is still downloading, directory is now 7.8gb with 5925 files, okay time to abort that, guess Hardin County is quite large <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Then I kept Global Mapper open with PMC Ohio Alger 10km project open there with the existing 3DEP DEM tiles xr-renegade had downloaded for me. Then I selected more heightmap tiles and downloaded them one by one, this was really painful as explained above.
</p>

<p>
2023-03-06T10:23:00Z Finally got all ohio .gov state website 3DEP heightmap DEM tile downloads complete, added to global mapper and right now exporting heightmap ASCII Grid ASC file. Whoah.
</p>

<p>
New heightScale="41.08" value to be used with heightmap. Edited that into PMC_Ohio_Alger_10km.i3d and copied heightmap PNG image over to the existing one. Loaded it up on GE and saved, just in case.
</p>

<p>
2023-03-06T10:54:00Z Started to yawn and editing kind of slowed down, hard to continue doing more of those cultivator_density field paintings in GIMP, its been quite a long day, even though still have 1hrs 45min of my day left. I'd hate to watch tv for this remaining time but dunno if you cant make yourself to draw another field outline, then hum. Trying to think what else could I edit at this point hmm but nothing comes to mind, kind of tired already. It just might be that this was it for todays editing, some good 15hrs of editing.
</p>


	<h2>2023-03-07 Fields, Fields And Nothing But Fields</h2>

<p>
2023-03-07T00:58:00Z New editing day has started, I'm kind of late as already did basic computer chores, then created PMC Ohio Alger 10km web pages, templates really plus yesterdays dev diary info (this page you're reading now heh), then cooked food and just finished eating, so I'm already hmm uh oh three hours for this day, oh well better late than never.
</p>

<p>
Okay GIMP cultivator_density fields painting continues.
</p>

<p>
2023-03-07T01:32:00Z Forgot to write it down while watching xr-renegade's stream, had to go cook food and eat, now all done and back to editing <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2023-03-07T01:38:00Z And just as I was starting Runsliketurtle asked help on real world data canadian terrain, so that will take few moments <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Hmm what shit is this? <a href="https://www.google.com/maps/@40.6773422,-83.8511171,52m/data=!3m1!1e3" target="_blank">google/maps</a>.
</p>

<p>
2023-03-07T03:44:00Z Now half way done, hmm quite slow progress today, maybe I'm too distracted with the Runsliketurtle terrain heightmap research and xr-renegades twitch live stream which is running on right monitor as I'm typing this.
</p>

<a href="screenshots/PMC-Ohio-Alger-10km-2023-03-07T0344.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Ohio-Alger-10km-2023-03-07T0344.jpg" alt="Farming Simulator 22 Terrain - PMC Ohio Alger 10km Screenshot" class="terrainimg" loading="lazy"></a>

<p>
2023-03-07T05:37:00Z Haven't been writing much play-by-play but there is not much to write about really, you paint in GIMP and that is it, don't want to waste server HDD (or well SSD) space for useless small progress update screenshots heh. So far it kind of feels slow progress today, but now time turns into the late night US and super early EU time when everyone is at sleep or getting ready for school / work, so its very quiet everywhere, this is good time to get some editing done <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
2023-03-07T06:53:00Z Got to put in some progress updates.
</p>

<a href="screenshots/PMC-Ohio-Alger-10km-2023-03-07T0652.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Ohio-Alger-10km-2023-03-07T0652.jpg" alt="Farming Simulator 22 Terrain - PMC Ohio Alger 10km Screenshot" class="terrainimg" loading="lazy"></a>

<p>
2023-03-07T10:15:00Z Finished lunch break, yup forgot to write it down, progress has been slow but steady with occasional fast bursts.
</p>

<p>
2023-03-07T10:48:00Z GIMP cultivator_density painting is done! <img src="../images/smileys/icon_biggrin.gif" alt="Smiley :D" loading="lazy">
</p>

<a href="screenshots/PMC-Ohio-Alger-10km-2023-03-07T1048.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Ohio-Alger-10km-2023-03-07T1048.jpg" alt="Farming Simulator 22 Terrain - PMC Ohio Alger 10km Screenshot" class="terrainimg" loading="lazy"></a>

<p>
Aah it feels good to have this task done, sure its only one task among many in terrain developing process, but still this was the first big milestone, now I have all the ground dirt fields in, the backbone of any terrain. Technically all you need is vehicle shop and cultivator_density and you are good to go.
</p>

<p>
2023-03-07T10:53:00Z I was just taking a moment marveling all those field outlines, its only been two days work to get here but still it feels like an accomplishment. Working in GIMP is fun, but when you do it hours and hours... the fun dries up real quick. So yeah just had to take a moment to enjoy it heh. Okay, moments over, lets proceed.
</p>

<p>
Started to bucket fill the outline areas, so the fields will be completely filled with RED RGB 255,0,0 color.
</p>

<p>
Fill 'em up!
</p>

<a href="screenshots/PMC-Ohio-Alger-10km-2023-03-07T1059.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Ohio-Alger-10km-2023-03-07T1059.jpg" alt="Farming Simulator 22 Terrain - PMC Ohio Alger 10km Screenshot" class="terrainimg" loading="lazy"></a>

<p>
Its lovely how sluggish GIMP bucket fill tool is for 10240 x 10240 pixel resolution image with three layers. Funny how long this relatively effortless task will take on so many fields to fill up.
</p>

<p>
Had to paint and fill up few fields I accidentally skipped.
</p>

<p>
2023-03-07T11:19:00Z Okay all filled up.
</p>

<a href="screenshots/PMC-Ohio-Alger-10km-2023-03-07T1119.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Ohio-Alger-10km-2023-03-07T1119.jpg" alt="Farming Simulator 22 Terrain - PMC Ohio Alger 10km Screenshot" class="terrainimg" loading="lazy"></a>

<p>
Looks pretty, ain't it? <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Exported fields.png from the fields layer, then ran graphicsmagick bat file to process all the PNGs into one final density and weight image "product" for GE use. Copied new cultivator_density.png and fruit_density.png into PMC_Ohio_Alger_10km terrain project dir, changed PMC_Ohio_Alger_10km.I3D density image GDM extensions to PNG, then loaded the project up saved and exited... uuh a mouthful.
</p>

<p>
Then changed I3D png extensions back to gdm and deleted density png images. Then took backup from heightmap image, opened the png in GIMP and set it to RGB 0,0,0 flat zero meters elevations, now GE project is ready for some field definition work.
</p>

<p>
Started GE v9.0.2 and loaded project up, imported PMC_Helpers.i3d file, it was some sort of backup save or updated one who knows as it got UTC timestamp.
</p>

<p>
Then started to place field definition single shapes, tiny ones.
</p>

<a href="screenshots/PMC-Ohio-Alger-10km-2023-03-07T1157.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Ohio-Alger-10km-2023-03-07T1157.jpg" alt="Farming Simulator 22 Terrain - PMC Ohio Alger 10km Screenshot" class="terrainimg" loading="lazy"></a>

<p>
This will take another moment and punish my pinky finger for all the hard angle CTRL pressing. Also wont look nice in-game but the whole point is to get all field ID numbers in-game and then its easy to start enlarge the field definitions by adding corner pieces. One step at the time.
</p>

<p>
2023-03-07T12:13:00Z Finished copy-pasting tiny single shape temporary placeholder field definitions (what is it with me today, is it some most cumbersome long description possible day, huh? hehe).
</p>

<a href="screenshots/PMC-Ohio-Alger-10km-2023-03-07T1213.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Ohio-Alger-10km-2023-03-07T1213.jpg" alt="Farming Simulator 22 Terrain - PMC Ohio Alger 10km Screenshot" class="terrainimg" loading="lazy"></a>

<p>
These will be edited and made bigger, more complex shapes, this is just temporary to get field numbers in-game.
</p>

<p>
Ran get field sizes lua script, it counted total of 459 fields. Nice number, ohio hardin county has some big fields. Well hmm, yeah its 10.2km terrain so somewhere between 8 and 16 which has been long time those usual sizes, for 8km terrain that would be huge amount of fields and for 16 it would be, well yeah guess still a lot, so heh yup, good number of fields <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Exported PMC_Helpers.i3d out, deleted it, saved project and exited GE. Then took backup from the 0m elevation heightmap PNG and unpacked original heightmap backup. Now just changing of modDesc.xml version and release readme txt / bat files.
</p>

<p>
2023-03-07T12:23:00Z Compiled PMC_Ohio_Alger_10km_v0.1.6.7z for testing.
</p>

<p>
2023-03-07T12:42:00Z FS22 in-game testing complete, no errors no warnings, cultivator_density looks great and field definitions look as expected tiny single shape placeholders.
</p>

<a href="screenshots/PMC-Ohio-Alger-10km-2023-03-07T1228.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Ohio-Alger-10km-2023-03-07T1228.jpg" alt="Farming Simulator 22 Terrain - PMC Ohio Alger 10km Screenshot" class="terrainimg" loading="lazy"></a>

<p>
This is just so great, after all that talk about no promises no expectations bullshit... heh this is just what I was secretly hoping but could not almost admit even to myself, it is so awesome to have accomplished so much in so little time, its hard to believe that this terrain did not exist only three days ago <img src="../images/smileys/icon_biggrin.gif" alt="Smiley :D" loading="lazy">
</p>

<p>
2023-03-07T12:46:00Z Hmm I only got 1hrs 5min left in my day (before 17hrs been awake alarm), no wonder I started to get a bit tired and I already felt guilty that am I this wussy that I cant keep editing more, heh well its better to start preparing this dev diary update so xr-renegade can read latest updates fresh when he wakes up or whenever has time in the day <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Yeah today was a great day, time to start wrapping it up.
</p>



	<h2>2023-03-08 The Buildings</h2>

<p>
2023-03-08T00:06:00Z New editing day has started, woke up, did morning computer chores, ate days first meal, send a message to xr-renegade in discord, now just waiting for reply and planning ahead what to do next. Regularly I would do "building pass" next which means all buildings placed as accurately as possible in 2D top-down view building for building. However I'm sort of thinking that maybe I'll do a few forest tree line patches first as those require no input from xr-renegade, I mean I know where forests are and tree types between spruce/pine and oak/maple can be seen from google/maps.
</p>

<p>
But first I'll write down chart of road names that I can find from google/maps. This is done by clicking on a road and name comes from the dialog that pops up, not sure if its a proper name but it will have to do for now. Or so I thought... when I click on lets say the non marked asphalt road which just reads "100" coming off from OH-235, it shows no road name, I recall xr-renegade calling it "county road 100", so I'll just call it what google/maps shows in the main view, so its simply "100", same for OH-235, its 235.
</p>

<p>
100, 15, 235, 35, 90, 92, Alger Rd, Lawrence Rd. These roads got written down and GIMP painted so I know which have already been checked.
</p>

<p>
2023-03-08T00:27:00Z Well xr-renegade went live in discord stream, we chatted and testing begins for v0.1.6 now. So my road listing got halted for now.
</p>

<p>
2023-03-08T03:04:00Z Just finished long PMC Gaming computer discord video stream and voice comms (me typing text) chat with xr-renegade, he came up with basic plan for fridays twitch stream big announcement reveal. He will take a car from alger, drive to F186 which is his northern most field, tractor is waiting there with cultivator and he starts to work ground, then he drives car to southern most field which he calls "Bev's farm" where combine is waiting with crop ready to harvest. I'll now edit full detailed field definitions for F186 and the southern one (dont know which its number is as I'm typing this), then try to place as much buildings along OH-235 road so it looks nice, trees too I guess.
</p>

<p>
Sounds like a plan.
</p>

<p>
But wonder how far I get along 235 before thursday evening (or friday morning which ever way its defined), before the stream. Hes fridays twitch live stream begins UTC 0000hrs on saturday or 2359hrs on friday again which way you want to look at it.
</p>

<p>
Alright, lets get to work, a lot to do, cant wait to see how it turns out <img src="../images/smileys/icon_surprised.gif" alt="Smiley :o" loading="lazy">
</p>

<p>
2023-03-08T03:11:00Z Created backup bat files for PMC_Ohio_Alger_10km project dirs for source and actual terrain dirs, ran them and now I have backups, never forget backups.
</p>

<p>
Went to GE v9.0.2 and loaded mapUS.i3d v1.2 game engine version, yeah on my editing computer I only have that very old version, still need to copy v1.8.2 from Gaming computer one of these days heh. Then selected grain elevator and exported its i3d out to my own "objects.for.terrains" directory so I can easily import it to my terrains. Then did the same to as many residential buildings I could find, there were few of them but not that many as I expected.
</p>

<p>
Moved vehicle shop aka dealership to the junkyard location xr-renegade suggested. Then saved project and exited, next I need to do the field definitions and for that I need my flat 0 meter elevation heightmap. Maybe I could have done it by "reload project" but I don't trust GE that much <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
2023-03-08T03:58:00Z Field 186 done, its pretty accurate, completely accurate for me but dunno if xr-renegade wants even more detail there, also twitch audience... dunno if they mind the slight slack on the northern corners.
</p>

<a href="screenshots/PMC-Ohio-Alger-10km-2023-03-08T0358.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Ohio-Alger-10km-2023-03-08T0358.jpg" alt="Farming Simulator 22 Terrain - PMC Ohio Alger 10km Screenshot" class="terrainimg" loading="lazy"></a>

<p>
Posted that above image to xr-renegade in discord to ask what he thinks about it. I then moved to edit the Bev's farm down in the south.
</p>

<p>
2023-03-08T04:19:00Z The "Bev's farm" field definition done, quite accurate by my standards, I never would do this kind of details on my own, but this is special field so more work is fine <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<a href="screenshots/PMC-Ohio-Alger-10km-2023-03-08T0419.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Ohio-Alger-10km-2023-03-08T0419.jpg" alt="Farming Simulator 22 Terrain - PMC Ohio Alger 10km Screenshot" class="terrainimg" loading="lazy"></a>

<p>
Then saved project and exited, unpacked original heightmap and then restarted GE with the project, now starting to place buildings along OH-235, uuh scary.
</p>

<p>
2023-03-08T04:57:00Z Lunch break finished, back to editing.
</p>

<p>
Back in GE created camera_corner_screenshot and set it up so it will be overall progress report screenshotting scene heh.
</p>

<p>
I had difficult time to create Bev's farm, here is the google/maps top down screenshot.
</p>

<a href="screenshots/PMC-Ohio-Alger-10km-2023-03-08T0528.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Ohio-Alger-10km-2023-03-08T0528.jpg" alt="Farming Simulator 22 Terrain - PMC Ohio Alger 10km Screenshot" class="terrainimg" loading="lazy"></a>

<p>
And then google streetview boots on the ground view.
</p>

<a href="screenshots/PMC-Ohio-Alger-10km-2023-03-08T0530.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Ohio-Alger-10km-2023-03-08T0530.jpg" alt="Farming Simulator 22 Terrain - PMC Ohio Alger 10km Screenshot" class="terrainimg" loading="lazy"></a>

<p>
First I can see that these are white buildings, I only quickly scanned mapUS.i3d (elmcreek) through and there was residential buildings but unless I missed all of them, there are no such medium size white buildings, definitely not those small grain bins. So problem will be finding suitable objects to use.
</p>

<p>
2023-03-08T06:32:00Z Finished first round of mod searching in giants modhub, went through farm houses, sheds and grain bins, I feel frustrated because I'm all dressed up and ready to go... but have no objects to place, the elmcreek object selection is few farm houses and nothing else usable for small to medium size sheds <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
I never realized such issue might come up.
</p>

<p>
Hmm this is done with one of the big mapUS elmcreek shed type buildings where I drastically shrunk it like 0.5 scale, oddly enough it still looks somewhat like a building. Also couple of the smaller shack type buildings are still missing, could not find anything to match those in mapUS.
</p>

<a href="screenshots/PMC-Ohio-Alger-10km-2023-03-08T0659.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Ohio-Alger-10km-2023-03-08T0659.jpg" alt="Farming Simulator 22 Terrain - PMC Ohio Alger 10km Screenshot" class="terrainimg" loading="lazy"></a>

<p>
Dunno, guess from a far it reminds of the layout, but yeah I am not happy with that result and the overall situation with mapUS objects, if I cannot find ohio style white buildings... I am not sure how the object placement in the long run goes <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
2023-03-08T07:42:00Z Created transformgroups location001 and location002, hopefully there are no more than 999 locations in this terrain <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
But yeah I am very frustrated now with the lack of objects. mapUS has nice trees so cant complain about that, but man those farm houses and then sheds of all types... geez dude, dunno how this project turns out if my selection is that limited, I need to start asking around for other terrain devs where they find objects. It is out of the question to just start ripping off objects from other terrains, everything must be done with full permissions, so hopefully someone knows some objects.
</p>

<p>
At this point, going to take a quick break, I am really frustrated not because exhausting editing but just those objects, my mood is borderline desperate like depressed (not really but dunno how to explain it) as what can I do if there are no fitting objects, argh <img src="../images/smileys/icon_confused.gif" alt="Smiley :?" loading="lazy">
</p>

<p>
2023-03-08T08:06:00Z Oh well didn't take a break, I'm so frustrated that I cant even chill knowing these problems I'm facing <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
So created location003 transformgroups for buildings and trees, lets start to place some.
</p>

<p>
Google/maps:
</p>

<a href="screenshots/PMC-Ohio-Alger-10km-2023-03-08T0815.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Ohio-Alger-10km-2023-03-08T0815.jpg" alt="Farming Simulator 22 Terrain - PMC Ohio Alger 10km Screenshot" class="terrainimg" loading="lazy"></a>

<p>
Giants Editor:
</p>

<a href="screenshots/PMC-Ohio-Alger-10km-2023-03-08T0816.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Ohio-Alger-10km-2023-03-08T0816.jpg" alt="Farming Simulator 22 Terrain - PMC Ohio Alger 10km Screenshot" class="terrainimg" loading="lazy"></a>

<p>
As I said, frustrated by the lack of objects, namely sheds. Was just thinking about TrailerParkFarms (TPF) vehicle sheds but those are so huge, none of the existing farm yards I've done (whopping three) has had such large scale vehicle sheds in them. So yeah, I am really worried how this will go with the objects selection I have.
</p>

<p>
2023-03-08T08:32:00Z Created location005 which was dead easy, two buildings and two trees, still not correct looking buildings but yeah.
</p>

<p>
Now I would like to just start placing trees because those are no issue regarding types, but dunno, guess placing buildings with bad placeholders is better than leave empty areas hmm.
</p>

<p>
2023-03-08T08:40:00Z And created location006 which was two buildings and bunch of trees.
</p>

<p>
Another thing I just noticed, ground textures has no GIMP painting for farm yard dirt gravel areas, hmph, looks lame if buildings just randomly appear by the roads without driveways or any areas for vehicles to drive. Painting that part of the terrain will definitely take a while as there are so many farm yard areas.
</p>

<p>
Hmm I'm going to align objects to ground and compile new testing version, I want to see in-game how goofy these current farm yards look.
</p>

<p>
2023-03-08T09:02:00Z Objects aligned to ground, PMC_Helpers exported and deleted. There was some weird going on with align to ground lua script as it was working, randomly... makes no sense, I had to align stuff to ground like 3-5 times before all objects were properly aligned, never seen that happen before. Only thing I can think of maybe its 2.5m unitsPerPixel or the scaling of the objects, but still... randomly, makes no sense. Oh well they are aligned now so no issue.
</p>

<p>
Saved project and exited GE.
</p>

<p>
Changed modDesc.xml to v0.1.7, same for readme.txt and release compilation bat files.
</p>

<p>
2023-03-08T09:06:00Z Compiled PMC_Ohio_Alger_10km_v0.1.7.7z for testing.
</p>

<p>
Tested in-game and vehicle shop works, field definitions work and the objects placed work, well except meridian flat bottom bin 3608s which have the non working trigger mesh visible, but no big deal they are kind of placeholders anyways.
</p>

<p>
So far so good, I guess, maybe tomorrow wednesday xr-renegade and I can figure out together where do we get some nice ohio white vehicle sheds and other farm yard objects.
</p>

<p>
Anyways needed to take a lunch break while planning the last part of today, I'd hate to continue adding those crap buildings but hmm dunno.
</p>

<p>
2023-03-08T10:00:00Z Feeding time is over, last 6hrs and 5min of today begins, plenty of hours left.
</p>

<p>
Fixed main terrain XML config as there was helpline stuff from mapUS, that created floating glowing icons in the sky, now they are gone, poof.
</p>

<p>
2023-03-08T10:40:00Z GE with terrain project loaded back up, going to add few more farm yards even though I just don't feel like it with this lack of objects to use, but dunno, maybe I'll do few forest patches too not sure, just put in some more work before this day is over.
</p>

<p>
In this first location I was excited because this clearly is TrailerParkFarms (TPF) looking vehicle shed.
</p>

<a href="screenshots/PMC-Ohio-Alger-10km-2023-03-08T1047.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Ohio-Alger-10km-2023-03-08T1047.jpg" alt="Farming Simulator 22 Terrain - PMC Ohio Alger 10km Screenshot" class="terrainimg" loading="lazy"></a>

<p>
Unfortunately TPF's smallest shed is 72x150 which is way too long, I think the old CBJ shed pack would have more fitting building, but honestly I just don't feel like digging that mod up and installing it to see, I'm just going to use the mapUS elmcreek generic non-enterable building for now. I want to smack down some farm yards so the landscape looks nicer for fridays big announcement instead of fine tuning some nitpick nonsense which makes no difference in the twitch stream.
</p>

<p>
Got it done, more or less OK with these lacking objects.
</p>

<p>
Google/maps:
</p>

<a href="screenshots/PMC-Ohio-Alger-10km-2023-03-08T1058.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Ohio-Alger-10km-2023-03-08T1058.jpg" alt="Farming Simulator 22 Terrain - PMC Ohio Alger 10km Screenshot" class="terrainimg" loading="lazy"></a>

<p>
Giants Editor:
</p>

<a href="screenshots/PMC-Ohio-Alger-10km-2023-03-08T1059.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Ohio-Alger-10km-2023-03-08T1059.jpg" alt="Farming Simulator 22 Terrain - PMC Ohio Alger 10km Screenshot" class="terrainimg" loading="lazy"></a>

<p>
This was now location007. Then created location008 and didn't even remember to write any diary stuff, this location is now east side of F186 which is one of xr-renegades fields.
</p>

<p>
2023-03-08T11:37:00Z Finished location009 now. Trees are not exactly "tree for tree" in this one, but pretty close.
</p>

<p>
Google/maps:
</p>

<a href="screenshots/PMC-Ohio-Alger-10km-2023-03-08T1136.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Ohio-Alger-10km-2023-03-08T1136.jpg" alt="Farming Simulator 22 Terrain - PMC Ohio Alger 10km Screenshot" class="terrainimg" loading="lazy"></a>

<p>
Giants Editor:
</p>

<a href="screenshots/PMC-Ohio-Alger-10km-2023-03-08T1137.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Ohio-Alger-10km-2023-03-08T1137.jpg" alt="Farming Simulator 22 Terrain - PMC Ohio Alger 10km Screenshot" class="terrainimg" loading="lazy"></a>

<p>
Alright one more location which will be symbolicly location010, then I'm going to call it a night here, not exhausted or tired or day even over for me yet, but ... uuh dunno how to explain, this just feels like "dude, quit while you're ahead..." type of thing, don't want to burn myself out today.
</p>

<p>
2023-03-08T11:55:00Z Okay location010 done, was fairly small two buildings and many trees. Yeah I think this is enough for today, I really don't want to press on anymore, tomorrow is going to show what I'm able to do with new building models etc so then object placing should continue.
</p>

<p>
2023-03-08T12:20:00Z Finally all trees aligned to the ground, that alignment script ain't working very well had to align many of them manually, uuh. Saved project and exited GE.
</p>

<p>
Did the version number change to 0.1.8 for all files listed above.
</p>

<p>
2023-03-08T12:22:00Z Compiled PMC_Ohio_Alger_10km_v0.1.8.7z for testing. Alright my day is done, but going to fire up PMC Gaming computer one more time to check this version so its good to go lateron wednesday for another xr-renegade testing session if he has time for it.
</p>

<p>
2023-03-08T12:30:00Z And FS22 in-game test complete, no issues and stuff looks like in GE, my day is over, good night <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>


	<h2>2023-03-08 Trees And Buildings</h2>

<p>
2023-03-08T22:31:00Z New editing day has started, got morning chores and meal done, now ready to continue editing. Pretty much same as yesterday, xr-renegade has not been active in discord today yet and while I've been thinking where to ask about american farm building objects, cant really think of anyone at the moment, TPF might know he should have contacts in the community so he could point me to right direction. There are some other names too who do terrains or even objects but "I don't know them" so just out of the blue getting a private message "gimmeh all yourz objectz!!1" might not go so well <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Took a backup of terrain project dir, now I'm good to go.
</p>

<p>
Started GE v9.0.2 and loaded terrain project up, did the 16km large terrain script, then went to the dealership location and placed careerStart point there, now on loading into savegame you start by the dealership, better there than in middle of a field.
</p>

<p>
Then edited PMC_Ohio_Alger_10km.xml config file, added hotspot for the dealership, easier to find vehicle shop now. Saved project and exited GE for ...
</p>

<p>
Loaded mapUS.i3d in GE, went to search for spruce / pine trees, to my surprise I did not find any. That was surprising even though those tree types are mostly used as decorative wind breakers on farm yards, but that is how I would like to use them, yesterday I already saw one farm yard with kind of same type trees although they were a bit different. Hmm maybe those trees are on the mapFR then (that's the french, haylet beyleronetoblerone whatever its sick european name is).
</p>

<p>
Went through mapFR and all I could find was <b>spruceVar01_stage01</b> and <b>spruceVar01_stage02</b> tree types, okay then. Exported those trees out to my objects.for.terrains dir, then imported them into my template Trees.Zeroed.Translate.Rotate.and.Scale.i3d file.
</p>

<p>
2023-03-08T23:20:00Z Created first forest patch and tree line, came out alright using splinePlacement script.
</p>

<p>
Short time later created another forest patch, this was near southern most xr-renegade field.
</p>

<p>
2023-03-09T00:34:00Z During xr-renegade's twitch live stream went to GIMP and painted asphalt roads that were missing from the well guess you could call it real world data terrain design doc. Exported roads_asphalt.png out.
</p>

<p>
Saved project in GE and exited. Moved roads_asphalt.png into actual design doc dir, then ran _run_design_doc_to_density_weight_images_all_in_one_2022-01-28.bat which processed new density and weight images. In GIMP the roads were painted with too small pencil, I think it was 6 pixels (didn't really check just eyeballed it), that came out too small on 4096 x 4096 pixel resolution _weight images, then re-painted the roads with 8 pixel pencil and ran all the bat files again.
</p>

<p>
The ground textures still came out weird, they look more narrow now and you can see it from the grass not coming up to texture, hmm, strange.
</p>

<p>
2023-03-09T01:25:00Z At this point is a time for break, just don't feel like editing anything right now, xr-renegades twitch stream is still running for hmm one and a half hours, hopefully after that we got to chat and hopefully he or his crew knows about american buildings, if not... then ouch, dunno where do I find some, maybe I'll get the CBJ american buildings pack, just dunno.
</p>

<p>
2023-03-09T06:33:00Z Already almost an hour ago did latest testing version tour with xr-renegade him discord live streaming it privately for me, he first read this dev diary and then we jumped into v0.1.8 testing. He was telling me how awesome this terrain already looks that its incredible to walk through his Ohio area in FS22, I tried to tell him that well its nice that he likes it but I am definitely "sad" about the lack of objects, its so frustrating to place some completely mickey mouse looking buildings there. Its not that I'm some sort of perfectionist freak, definitely not... but there is a difference being perfectionist and doing complete crap work like I now feel I'm doing with this single one (1) mapUS elmcreek warehouse type building which is used for ALL vehicle sheds and even small barns etc.
</p>

<p>
But yeah sure, it was great to hear that xr-renegade loved the look already. He has no idea whats coming once object placement for buildings and vegetation is finished, when I first time took a john deere tractor and drove around <a href="../19/pmc-iowa-garden-city-8km.php">PMC Iowa Garden City 8km</a> after objects were placed, I was simply speechless, just awed by the landscape. Its not that *I* am a great terrain maker, absolutely not, its the REAL WORLD DATA that makes the terrain so awesome, I'm just the dumb dude who plugs down buildings where US NAIP satellite imagery tells me to <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
So it will definitely be worth to witness when xr-renegade first time tests the final object placement product, in fact I might at some point start to withold testing versions from him once we are maybe like half done object placement so the experience is just shock and awe once he launches object placement finished terrain <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
But that is still a long time away, if I can get nice white american ohio style buildings so I don't have to struggle what I place down, then making these farm yards wont take a long time at all relatively speaking.
</p>

<p>
Also I mentioned to xr-renegade that now I'm slightly scared / worried about fridays twitch big announcement because of the situation with the objects, no idea how the audience will receive the look this terrain now has. Some of the people there who are xr-renegades friends know the area, but of course the usual 100+ viewers probably has most people who have never been there so they don't know any better and I highly doubt any average viewer has ever checked Alger, OH area google street photos view.
</p>

<p>
Anyways, I'm mumbling again <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2023-03-09T08:09:00Z Started GE v9.0.2 and loaded PMC Ohio Alger 10km terrain project, not much has changed I still feel kind of frustrated and lost with the lack of objects, but guess if xr-renegade says it looks awesome, then I'll go with that. Maybe I could squeeze in few more farm yards tonight, even though my motivation is really low right now.
</p>

<p>
2023-03-09T08:30:00Z Finished creating location011, its this <a href="https://www.google.com/maps/@40.6800922,-83.8572082,168m/data=!3m1!1e3" target="_blank">google/maps</a> location, yeah no screenshot this time, I am just not in the mood to be so enthusiastic to take screenshots and besides, if I screenshot every farm yard with google/maps reference image as well... our web server soon runs out of SSD space heh.
</p>

<p>
Actually I'm quite happy that I got this one farm yard done as my previous motivation was about zero, I just had nothing else to do and of course the fridays big announcement is looming closer by every hour so would be dumb to just fiddle my thumbs here. This is one of the issues I warned xr-renegade about my editing life that no promises, no guarantees, if I want to slack a day I will, its simple as that. Well here I am obviously not slacking but just demonstrating how close it came today <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2023-03-09T08:56:00Z Created location012, farm house and two sheds, few trees.
</p>

<p>
2023-03-09T09:10:00Z And got location013 done, it got quite thick tree coverage, hopefully wont cause performance issues, shouldn't with that amount but yeah always have to be careful with tress.
</p>

<p>
2023-03-09T09:41:00Z Finished location014 and okay some screenshots are in order...
</p>

<p>
Google/maps:
</p>

<a href="screenshots/PMC-Ohio-Alger-10km-2023-03-09T0940.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Ohio-Alger-10km-2023-03-09T0940.jpg" alt="Farming Simulator 22 Terrain - PMC Ohio Alger 10km Screenshot" class="terrainimg" loading="lazy"></a>

<p>
Giants Editor:
</p>

<a href="screenshots/PMC-Ohio-Alger-10km-2023-03-09T0941.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Ohio-Alger-10km-2023-03-09T0941.jpg" alt="Farming Simulator 22 Terrain - PMC Ohio Alger 10km Screenshot" class="terrainimg" loading="lazy"></a>

<p>
But now, I'm taking another break, even though I got into some rolling speed getting few farm yards done, its still kind of "blah another farm yard.. uuh..." <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>


	<h2>2023-03-09 Last Day Before Announcement</h2>

<p>
2023-03-09T23:40:00Z New editing day has started, did the morning computer chores, just finished eating days first meal, already asked from TPF about small/medium size american buildings but he didn't know, okay time to start editing.
</p>

<p>
First took backups as usual when beginning an new editing day.
</p>

<p>
Basically I followed instructions in <a href="../19/terrain-ai-planted-crop-types.php">Terrain AI Planted Crop Types</a> tutorial page and made it so that only corn, soybeans and wheat is planted by the AI. That was a quick edit and gives that american look for the terrain in 3D world and in ESC mapview.
</p>

<p>
BTW as a side note, GE v9.0.2 and google/maps is still open like I left them last night before crashing to sleep, good, no need to fire those up today heh.
</p>

<p>
Then copied fs22root/data/maps/mapUS/npcs.xml into PMC_Ohio_Alger_10km/maps/PMC_Ohio_Alger_10km/ai_names.xml, changed main terrain config to point into this file, then edited ai_names.xml and added NPC_US_16 which is now "Xr-renegade" with michael hammonds character portrait image.
</p>

<p>
Figured out what went wrong with design doc to _weight image creation, the road RGB color was RED 255,0,0 but it should have be RGB 150,150,150 hmm really strange it works AT ALL like this, makes no sense, oh well now I need to fix that but in order to get it done I'll save terrain project in GE and exit, need to mess with _weight images and cant do that while terrain is open in GE.
</p>

<p>
GIMP painted farm yard driveway road dirt gravel textures.
</p>

<a href="screenshots/PMC-Ohio-Alger-10km-2023-03-10T0024.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Ohio-Alger-10km-2023-03-10T0024.jpg" alt="Farming Simulator 22 Terrain - PMC Ohio Alger 10km Screenshot" class="terrainimg" loading="lazy"></a>

<p>
Exported roads_asphalt.png out and then realized I should have painted that stuff into roads dirt layer, oh well no big deal a slight cosmetic issue. Then ran _run_design_doc_to_density_weight_images_all_in_one_2022-01-28.bat to graphicsmagic process all the density and weight images for GE readable format. Well still have to adjust density resolution but anyways.
</p>

<p>
Forgot to fix northern most xr-renegade field which came too close to the road on N and E sides, shaved off a little bit from it, also cleared the flower garden area from field paint.
</p>

<p>
Exported fields.png out.
</p>

<p>
Got xr-renegade's mom (?) flower garden done, not sure if he approves these "daylily" deco flowers I found in mapUS, but they looked to me the most appropriate memorial site flowers, there are some other various color flowery things like meadow harvest ready but that sort of reminds me of weeds which is kind of not appropriate memorial site flower. Have to hear feedback from xr of what he thinks about this now, can always be changed later. Also I don't know if mapUS decofoliage daylily can be plowed under.
</p>

<p>
2023-03-10T01:05:00Z Saved project and exited GE, time to create another testing version to see if all the latest edits work in-game FS22.
</p>

<p>
Changed modDesc.xml to v0.1.9 along with readme.txt and release compilation bat files.
</p>

<p>
2023-03-10T01:08:00Z Compiled PMC_Ohio_Alger_10km_v0.1.9.7z for testing.
</p>

<p>
2023-03-10T01:25:00Z In-game FS22 test complete, overall looking good but I forgot several things.
</p>

<pre>
- ohio alger moms flower garden field definition overlaps it
- ohio alger floating buildings and trees on new farm yards
- ohio alger flip bevs farm vehicle shed umm 180 so doors face east instead of west
</pre>

<p>
2023-03-10T01:55:00Z Got floating buildings and tree objects aligned to ground, that align to ground script ain't just working at all, the objects go all over the place, had to align all of them manually, this might become a problem on the long run, nobody in their right mind align thousands of trees or objects in general.
</p>

<p>
Also flipped Bev's farm vehicle shed so doors face east like in real life, for what it matters in this crap looking building object anyways.
</p>

<p>
Then on xr-renegade's moms flower garden deleted field definition corner pieces so crop will not be overwritten on top of the flower area. And that was pretty much all those three issues I wrote down.
</p>

<p>
2023-03-10T02:12:00Z Saved terrain project and exited GE, hmm dunno what else to do right now as I'm kind of hoping to have another xr-renegade discord live stream testing session soon, so going to compile new testing version now.
</p>

<p>
Changed modDesc.xml to v0.2.1 (skipping v0.2 as it causes nasty look in windows file explorer hah), same for readme.txt and release compilation bat files.
</p>

<p>
2023-03-10T02:15:00Z Compiled PMC_Ohio_Alger_10km_v0.2.1 for testing.
</p>

<p>
2023-03-10T02:25:00Z Testing complete, no errors no warnings and all fixes work in-game FS22, things are looking good now I just need xr-renegade to put eyes on this <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Was doing some background research on how to port terrain objects from FS19, for example high voltage power line towers, the ones I have in <a href="../19/pmc-grande-gardens-16km.php">PMC Grande Gardens 16km</a> are all black, textures and materials are all messed up or simply missing. I don't have any documentation on how to port individual objects, other than fixing the utility pole wire LSD flashy colors to pure black.
</p>

<p>
2023-03-10T05:25:00Z In GE on my temporary 2km testing terrain painted corn, soybeans and wheat harvest ready foliage, saved project and exited, then GRLEConverted the GDM to fruit_density.png and inspected which RGB colors are used, posted the color values to <a href="https://www.pmctactical.org/forum/viewtopic.php?f=78&t=22861" target="_blank">PMC forum fruit_density aka densityMap_fruits RGB colors</a> topic. Then in GIMP hand painted, bucked filled design doc fields layer randomly to corn, soybeans and wheat RGB colors, exported it to fields-sexy-corn-soybeans-wheat.png image, edited the graphicsmagick bat which processes these source files to read this new PNG, then just ran it.
</p>

<p>
Next took backup from the existing working terrain project dir to PMC_Ohio_Alger_10km_2023-03-10T0530.7z file name, this is my fall back the last good stable version. Then I copied these new files into PMC_Ohio_Alger_10km/ project dir, ran powergrep4 to fix i3d file GDM to PNG extensions for cultivator_density and fruit_density files only, loaded project in GE... only to not see what I was expecting.
</p>

<p>
Looks like GE v9.0.2 needs both cultivator_density and fruit_density images edited for those RGB colors, not sure, back in FS19 GE v8.2.2 (or which ever version was it) when I did this same method for at least <a href="../19/pmc-texas-rowena-8km.php">PMC Texas Rowena 8km</a> possibly to PMC Iowa Garden City 8km too, it worked just fine by painting fruit_density... as far as I recall, hmm. Oh well this was a nice little gimmick anyways no big deal if it doesn't work right at the first time.
</p>

<p>
Ugh, never mind, my bad... yeah I painted the RGB's correctly... but because I ran my graphicsmagick bat file it did not copy those colors to fruit_density image where they belong to heh.
</p>

<p>
Checked out again in my 2km testing terrain and cultivator_density gets RGB 139,0,0 for "harvest ready fertilizer" ground texture type. So making sexy screenshots harvest ready crop fields terrain version, you have to do both cultivator and fruit_density images, OK gotcha, I don't remember this from FS19 so maybe I missed it there so crops were just on top of cultivated ground or it has changed now with FS22, oh well now I should have it sorted out, just need to do a custom graphicsmagick bat file to handle that stuff.
</p>

<p>
2023-03-10T06:12:00Z Managed to get graphicsmagick bat file to work, now density images RGBs are correct and awesome corn, soybeans and wheat fields appear in GE, then just deleted Fields transformgroup so AI will not plant anything, saved and exited GE <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Switched PMC_Ohio_Alger_10km.i3d PNG to GDM file extensions again, deleted cultivator_density.png and fruit_density.png images, edited modDesc.xml to have terrain name with "Screenshots" suffix to recognize it, did not touch readme but changed release compilation bat file to include screenshots string after the version number.
</p>

<p>
2023-03-10T06:16:00Z Compiled PMC_Ohio_Alger_10km_v0.2.1.Screenshots.7z for, well not really testing but at least to check in-game how sexy it looks with full corn, soybeans and wheat harvest ready fields <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2023-03-10T06:23:00Z In-game test complete, wow it looks good with full cultivator_density crops, real nice <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Its too bad terrain cant be released in this form, without AI owning fields and planting crops there will be no contracts so unless players want to jump right into their own farm with millions of money (yes, millions, you cant really get started with less than that unless you go with completely ridiculous BRITISH MAPZ euro trash vehicles), there is nothing they can make money with. I mean sure with farm manager mode and loan maxed out, sure you can get started, but it wont be easy farming with that kind of budget depending on the farmland prices. Anyways I and hopefully everyone else considers any such terrain "unfinished" or "incomplete" if not broken, so that's that.
</p>


	<h2>2023-03-11 The Big Reveal</h2>

<p>
2023-03-11T05:21:00Z Tonight was the big announcement in xr-renegades twitch live stream, there were 130 viewers, KingDavid is I believe xr-renegades brother who grew up in Alger with xr and he was amazed how realistic the terrain is, that was really great to hear, first time for me to hear feedback from people who actually live in the area of my terrain. I didn't confirm this but how it sounded on the stream how surprised KingDavid was, I believe xr-renegade did not tell him what will be on the stream other than KingDavid definitely should be there tonight.
</p>

<a href="screenshots/PMC-Ohio-Alger-10km-2023-03-11T0247.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Ohio-Alger-10km-2023-03-11T0247.jpg" alt="Farming Simulator 22 Terrain - PMC Ohio Alger 10km Screenshot" class="terrainimg" loading="lazy"></a>

<p>
Also many other people in the twitch chat were happy for xr-renegade, I recall couple of guys commenting how he has been waiting to get his own farm terrain to farmsim game a long time, unless I'm mistaken one viewer even commented how they got emotional about xr-renegades happiness, his reaction, to the terrain.
</p>

<p>
What can I say, that is well beyond what I could have ever imagined when doing any terrain, let alone one that the actual farmer who lives there plays it. THIS is why I develop addons & mods, terrains, so that people can really enjoy the game/sim just the way I do. Really great stuff.
</p>

<p>
Today I'm going to just chill after those hard editing days, it was on the early hours of march 5th when this terrain got started, first source files got in-game, then edited all the way to 9th pretty hardcore, so after this announcement its good time to take a day off and relax. Hopefully editing continues real soon with more buildings placed.
</p>


	<h2>2023-03-12 From One To Many</h2>

<p>
2023-03-12T00:46:00Z New editing day has started, todays goal is to place a farm yard, a simple one farm yard and then go from there. What I mean by this is that if I try to finish object placement today it wont happen as this task will take days if not weeks to complete because its a large 10.2km terrain with possibly hundreds of farm yards (or houses by the roads), this is very demoralizing to face such an taunting task. So I have to proceed relaxed, calmly, just one at the time not worrying about what happens after the one I'm editing.
</p>

<p>
But first I restored the good original v0.2.1 because current version was the sexy corn, soybeans and wheat fields _density image screenshot version. I simply deleted PMC_Ohio_Alger_10km/ terrain project dir and then unpacked the original v0.2.1 7-zip backup, done, now the _density painted version is like it never happened <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
I remember from my previous editing session that I forgot to place one new building there because it was not featured in US NAIP source but on google/maps todays version you can see it from both satellite imagery and from streetview, well it got added now, its fixed.
</p>

<p>
Was looking at "location001" which is the first populated place coming down OH-235 road from Alger city, I was baffled how poorly it was made, felt like HALF of the trees were missing and some trees were simply out of place, how can this be, I mean it was the very first FS22 real world data farm yard I created so okay guess I'm allowed some slack for the work quality but still man, that was some sloppy work almost as if I wrapped it up before it was finished hmm, oh well I'm going to fix it now.
</p>

<p>
2023-03-12T02:10:00Z Now location001 buildings and trees have been fixed, added the one missing building and then tons, very roughly speaking half more trees got created. Now this location should be very close to be finished with the obvious caviat of not having proper building 3D models for well most buildings but that is not something I can fix.
</p>

<p>
Location002 was OK, but added two missing maple trees to location003, its now fixed.
</p>

<p>
Here is a location in <a href="https://www.google.com/maps/@40.6900563,-83.8568256,189m/data=!3m1!1e3" target="_blank">google/maps</a> which has no buildings and faded out driveway, however in my older US NAIP image there are farm house and two or maybe three buildings next to it, hmm.
</p>

<p>
Added the above locations trees to location004 transformgroup for now. Need to figure out what shall be done with the buildings, most likely wont place them as they do not appear in 2022/2023 google/maps imagery.
</p>

<p>
2023-03-12T02:28:00Z Hmm doing good progress today even though I started today with wuss attitude of "lets make one farm yard only" <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Well OK I have not technically done that one farm yard yet, just been fixing my mess of editing from previous days <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
The reason I go through these previous days edits is because I want to GIMP paint over US NAIP image into "buildings placed" layer using red color and big pencil, to mark all the locations that have already been created. I know that few weeks from now when editing has been going on it is hard to recall which locations are already done, like when you start a new day and open this project in GE, how do you know where is the next farm yard you need to create, well sure you should remember them, but in this size terrain and after weeks of editing not to mention weeks of break from editing... yeah it ain't gonna happen, so this coordination image for buildings placed is excellent tool to guide me.
</p>

<p>
Added one missing building, two missing pine trees and one missing smaller tree to location007.
</p>

<p>
New tree patches placed on the field edges, actually its more like middle of the fields when you look at google/maps imagery, but farming simulator wise we unfortunately have to leave direct edge between fields otherwise they get drawn together, hmm.
</p>

Google/maps:
<a href="screenshots/PMC-Ohio-Alger-10km-2023-03-12T0252.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Ohio-Alger-10km-2023-03-12T0252.jpg" alt="Farming Simulator 22 Terrain - PMC Ohio Alger 10km Screenshot" class="terrainimg" loading="lazy"></a>

Giants Editor:
<a href="screenshots/PMC-Ohio-Alger-10km-2023-03-12T0249.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Ohio-Alger-10km-2023-03-12T0249.jpg" alt="Farming Simulator 22 Terrain - PMC Ohio Alger 10km Screenshot" class="terrainimg" loading="lazy"></a>

<p>
2023-03-12T02:53:00Z Alright I am very happy with todays progress, absolutely no guilty feeling about slacking, well not that I should have such in the first place after spending all that time explaining my editing habits before starting this project, but still you know... <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Also, perhaps even subconsiously... I wanted to have some progress done right after the big xr-renegade twitch live stream announcement just so it doesn't look like all editing ended as soon as terrain was mentioned in a big live stream <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
I actually want to get xr-renegades farms and fields done so I could start to do some farming there, perhaps even place all his farm equipment and try to farm just like him <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Hmm that reminds me, I have to ask him where do I get those mod equipment he uses, links to them, assuming they are available for download. Xr, when you read this, send me them mod links <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
2023-03-12T03:03:00Z Fixed location010, there was a pine tree line in the N side which I mistakenly created as usual oak/maple trees previously, replaced it now with pines. Also deleted one stray normal tree N side of the vehicle shed as well.
</p>

<p>
2023-03-12T03:17:00Z On location012, my first ever culvert in Farming Simulator games <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<a href="screenshots/PMC-Ohio-Alger-10km-2023-03-12T0316.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Ohio-Alger-10km-2023-03-12T0316.jpg" alt="Farming Simulator 22 Terrain - PMC Ohio Alger 10km Screenshot" class="terrainimg" loading="lazy"></a>

<p>
Plan is not to do such useless decorations, but it was just so easy to plug it in there so decided to do it heh.
</p>

<p>
2023-03-12T03:23:00Z But now, a quick break, already done much more than I planned to today even though haven't done that one brand new farm yard yet, but so far good progress so now a quick breather.
</p>

<p>
2023-03-12T05:59:00Z Just finished lunch break and that is a good spot to end previous break as well, back to google/maps and GE, gonna be stamping down some objects. Actually turning camera around just after starting my break I spotted on the horizon Bev's farm the southerm most field areas, yes there are still several farm yards in between but at least its can already be seen which is nice, not too much to do before OH-235 is done.
</p>

<p>
2023-03-12T06:27:00Z Created location015 which is a brand new farm yard with house, two vehicle sheds and bunch of trees.
</p>

<p>
2023-03-12T07:45:00Z Finished creating location016 with the additional forest patch nearby.
</p>

Google/maps:
<a href="screenshots/PMC-Ohio-Alger-10km-2023-03-12T0742.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Ohio-Alger-10km-2023-03-12T0742.jpg" alt="Farming Simulator 22 Terrain - PMC Ohio Alger 10km Screenshot" class="terrainimg" loading="lazy"></a>

Giants Editor:
<a href="screenshots/PMC-Ohio-Alger-10km-2023-03-12T0744.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Ohio-Alger-10km-2023-03-12T0744.jpg" alt="Farming Simulator 22 Terrain - PMC Ohio Alger 10km Screenshot" class="terrainimg" loading="lazy"></a>

<p>
2023-03-12T08:15:00Z And got location017 done, nice setup with house, two vehicle sheds, two grain bin silos and then pine and regular trees.
</p>

<p>
2023-03-12T08:48:00Z Created location018 which was quite various with object selection, unfortunately as already whined many times, with a single giants mapUS elmcreek vehicle shed it is just painful to create those nice white ohio buildings, but yeah.
</p>

<a href="screenshots/PMC-Ohio-Alger-10km-2023-03-12T0850.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Ohio-Alger-10km-2023-03-12T0850.jpg" alt="Farming Simulator 22 Terrain - PMC Ohio Alger 10km Screenshot" class="terrainimg" loading="lazy"></a>

<p>
2023-03-12T12:50:00Z Okay had a lunch break plus some research / studying time for other than editing stuff, now back in GE browsing to a new farm yard location.
</p>

<p>
2023-03-12T13:04:00Z And the next farm yard done, this one had three grain bin silos and three vehicle sheds, well one was cattle shed, one of the vehicle sheds was actually just about TPF shed size but with routine I just did it with mapUS elmcreek placeholder.
</p>

<p>
Okay one step closer to the southern location again, nice.
</p>

<p>
2023-03-12T13:34:00Z Now finished location020 was had few buildings but mostly trees, almost wilderness alike area. Hmm now got to admit I'm getting not exhausted but can just feel that enthuasism run on low supply, but hey gotta remember that todays editing goal was to make a one (1) farm yard and oh boy how many have I made so far, so today has been in that context an excellent editing day <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2023-03-12T14:44:00Z Decided to call it a night, still have two hours in my day left but it just feels right to call it here without trying to push into the last minutes. Now going to do some web work to get this dev diary added to its own page and also update posted to PMC forum development topic, this also takes a moment with screenshots and all.
</p>

</section>

<footer>
<p>
<a href="pmc-terrains.php" class="button">PMC Terrains FS22</a>
<a href="changelog-pmc-ohio-alger-10km.php" class="button">Changelog PMC Ohio Alger 10km</a>
<a href="screenshots-pmc-ohio-alger-10km.php" class="button">Screenshots PMC Ohio Alger 10km</a>
<a href="pmc-ohio-alger-10km.php" class="button">PMC Ohio Alger 10km</a>
<a href="../index.php" class="button">PMC Farming Simulator root page</a>
</p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("../include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>