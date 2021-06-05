<!DOCTYPE html>
<html lang="en">
<head>
<title>Developer Diary PMC Iowa Garden City 8km - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Developer Diary PMC Iowa Garden City 8km - PMC Farming">
<META name="keywords" content="Developer, Diary, Iowa, Garden, City, 8km, PMC, Farming, FS19">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<!-- google ads -->
<?php include("../include/google-ads.php"); ?>
<h1><b>Developer Diary PMC Iowa Garden City 8km - PMC Farming</b></h1>
</header>

<section>
	<h2>Dev Diary Iowa Garden City</h2>

<p>
<a href="pmc-iowa-garden-city-8km.php">PMC Iowa Garden City 8km</a> developer diary was started in late 2020 and no older records exist other than <a href="changelog-pmc-iowa-garden-city-8km.php">changelogs</a>. This terrain was initially created in early 2019. Just a little background reference <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
<b>2020-09-05T12:59:00Z</b> Backupped PMC Iowa Garden City 8km project dir, edited sync to mods dir with new excluded files. Loaded terrain in <a href="terrain-giants-editor.php">Giants Editor (GE)</a> to check it out if all looks good, then started to prepare PMC_Helpers to a new way of handling it (exported). Also recorded terrain developer diary video <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2020-09-05T13:31:00Z GE initial PMC_Helpers setup created and selling points moved to a proper transformgroup. Pretty much nothing else there, shes a blank slate.
</p>

<p>
2020-09-05T13:43:00Z Moved all the unused directories and files into Exclude.For.Release directory.
</p>

<p>
2020-09-05T13:55:00Z First in-game test that everything loads up ok. There was error about mapDE vehicle shop so it was time to replace that with mapUS vehicle shop model which fixed that issue.
</p>

<p>
2020-09-05T14:25:00Z Started to create universal american PMC_Helpers.i3d to be used in all terrains. Placed giants buildings, utility poles and trees there, then of course CBJ american buildings too. I can now import this to a new terrain and have all the objects at hand right away without going through that import shuffle.
</p>

<p>
2020-09-05T15:33:00Z All preparation work for object placement is done, now just a lunch break and then I'm good to start actually putting down objects <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
2020-09-05T15:52:00Z Object placement has officially started.
</p>

<p>
2020-09-05T16:18:00Z Wind turbines placed. Nice landmark object-set for iowa terrain, you can see those far away while farming heh.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2020-09-05T1634.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2020-09-05T1634.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
At this time in fall of 2020 I was still running Windows 7 64bit with 125% user interface scaling, which can easily be seen on screenshots from this era. The desktop I was running has text font so small you need a hubble space telescope to see characters properly ;)
</p>

<p>
2020-09-05T17:03:00Z Building placement officially commenced, here we go!
</p>

<p>
2020-09-05T19:52:00Z Lunch break, here is progress update at this minute, red is areas with buildings and black is buildings placed areas.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2020-09-05T1952.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2020-09-05T1952.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
2020-09-05T23:22:00Z Enough object placement for today, 53 locations created.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2020-09-05T2322.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2020-09-05T2322.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
<b>2020-09-06T09:15:00Z</b> GIMP buildings xcf and iowa garden city loaded up in GE, lets go to work.
</p>

<p>
2020-09-06T11:02:00Z Decided to try scaling up building to match <a href="https://www.google.com/maps/@42.2530498,-93.3576931,148m/data=!3m1!1e3" target="_blank">google/maps real world data building</a>. This is a big no no in arma3 editing you simply dont scale buildings as it will mess up so many things, however natural objects like rocks, bushes and trees are perfectly fine to scale 75 to 125 percent range.
</p>

<p>
I took CBJ american vehicle shed 72x150 and GE scaled Z to 3.7 while X and Y remains at standard 1. Will be interesting to see in-game how bad it looks and does geometry work etc. This would be extremely cheap way to fit original building sizes to real world specs. But yeah at the end I or someone needs to model new buildings to fit PMC real world data terrains.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2020-09-06T1105.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2020-09-06T1105.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
2020-09-06T12:02:00Z Found <a href="https://www.google.com/maps/@42.2320671,-93.3484826,296m/data=!3m1!1e3" target="_blank">this location</a> which looks like its just silage covered up, or bales of some sort. Not sure how to place such location, I'm thinking it should be left as empty lot so players could place their own bales/silage here. So I did leave it empty.
</p>

<p>
On the next location which I labeled Location-85 there was half of the farm yard missing because terrain edge cut it off. I really try to avoid these situations but guess this one slipped through my inspection when creating this terrain location.
</p>

<p>
2020-09-06T12:26:00Z Saw the big electric thingy that was documented already in the first design of this terrain <a href="https://www.google.com/maps/@42.2245411,-93.3740411,176m/data=!3m1!1e3" target="_blank">google/maps</a> and again we have no objects to use there. Well havent scourged through mapDE/mapUS maybe there could be something.
</p>

<p>
2020-09-06T13:14:00Z PMC Iowa Garden City 8km building placement is done! <img src="../images/smileys/icon_biggrin.gif" alt="Smiley :D" loading="lazy">
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2020-09-06T1313.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2020-09-06T1313.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Took another backup, just to be safe.
</p>

<p>
2020-09-06T13:52:00Z First utility poles placed in NE corner.
</p>

<p>
2020-09-06T15:30:00Z Was creating utility poles and GE felt a bit sluggish, so I saved, exited, took 7zip backups just to be sure, restarted GE, exported fields, buildings and wind turbine transformgroups, then deleted them. Now GE should load, save and perform just slightly bit better, hopefully.
</p>

<p>
I'm thinking that on a long run on heavy editing sessions its not any use to keep hundreds of objects loaded in GE when you have no use for them, for example I dont need buildings or wind turbines when placing utility poles.
</p>

<p>
Some screensthos of utility poles in real life vs PMC terrain unfortunately got deleted, no idea why. I tried to search them later but cannot find in any directory.
</p>

<p>
2020-09-06T16:27:00Z Lunch break, still many utility pole splines to create, but we'll get there heh.
</p>

<p>
<a href="https://www.google.com/maps/@42.26659,-93.3855119,197m/data=!3m1!1e3" target="_blank">Minerva Creek has a bridge</a>.
</p>

<p>
2020-09-06T18:38:00Z Utility pole objects placement is done! <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2020-09-06T1837.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2020-09-06T1837.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
2020-09-06T19:01:00Z First in-game test with building, utility pole and wind turbine objects... zero errors heh.
</p>

<p>
2020-09-06T20:04:00Z Objects aligned to ground and in-game test completed, zero errors. We are good to go for some PMC Gaming computer full glory 4k 60fps testing, perhaps some first look twitch live stream as well.
</p>

<p>
Did twitch live stream and terrain looked awesome, I was cautiously wishing it would look great but man I underestimated it big time, even without vegetation it looks just amazing. Long view distances and you can just see buildings and farm yards everywhere you look, just awesome views. US NED 10m resolution heightmap is in first glance flat but when you drive around there its elevations everywhere making it feel just so nice. I simply cannot wait to start actually playing here.
</p>

<p>
<b>2020-09-08T11:39:00Z</b> First trees placed. I really hate placing trees one by one manually as there is no big areas of trees where I could use spline and script to randomly place trees.
</p>

<p>
Here again I had some screenshots taken, but later when trying to find them... they were nowhere to be seen <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
<b>2020-09-10T16:00:00Z</b> Tree object placement continues. Not really in the mood for placing trees manually, but well its gotta be done.
</p>

<p>
<a href="https://www.google.com/maps/@42.2533254,-93.3991134,209m/data=!3m1!1e3" target="_blank">google/maps</a>.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2020-09-10T1606.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2020-09-10T1606.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
<b>After a long break from editing this terrain...</b> last time I edited was on september last year, now february 2021 editing continues.
</p>

<p>
<b>2021-02-22T02:10:00Z</b> Decided to hastily re-create few lines of utility poles with wires, just for todays <a href="stories-from-zero-iowa-garden-city-unofficial.php">Unofficial Start From Zero</a> game-play <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Found one utility pole line which was created but never placed into the "public" Utility_poles transformgroup and was left into PMC_Helpers, that was odd. Well I re-created that right away with wires and placed into public.
</p>

<p>
Then I re-created the line going west from garden city town... and then few other locations as well.
</p>

<p>
There are so many utility pole lines it feels like they are everywhere, just re-created these few so I can have some wires to look at in-game today <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
<b>2021-04-27T15:16:00Z</b> Started to watch PMC Iowa Garden City 8km developer diary VIDEOS that I recorded in 2020, to get some reference point where I left off in october, that is the last time I added trees to this terrain.
</p>

<p>
I'm quite bummed out that its been this long with just slacking, not doing any editing for this terrain. I've been so burnt out lately for all computer work its very hard to start/continue editing. Luckily I seem to start to get that editing fire back <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2021-04-27T17:43:00Z Finished watching those previously recorded videos and was really surprised that on october 2020 I did not record anything or write these dev diary entries even though I placed a lot of trees. Hmm that is weird, I thought recording and writing was being done all the time, hmm hmm.
</p>

<p>
2021-04-27T23:02:00Z Took backups of PMC Iowa Garden City 8km and then fired up GE, lets see if we could place some trees again.
</p>

<p>
2021-04-27T23:19:00Z Alright first farm yard trees done for 2021 <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-04-27T2318.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-04-27T2318.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Note: here I have installed Windows 8.1 64bit using extra large 200% user interface scaling. This is clearly seen with larger text font and UI in general, also hard disk partition changed with operating system re-install.
</p>

<p>
Second farm yard, this one had really bad building model type selections as there clearly was some pig sheds but I don't have any FS19 data/ pig sheds to use and haven't found any white iowa looking ones from the community mods.
</p>

Google/maps:
<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-04-27T2334.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-04-27T2334.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

GE:
<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-04-27T2335.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-04-27T2335.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Farm yard with few bin silos.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-04-27T2348.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-04-27T2348.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
One lone bin silo in this farm yard.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-04-27T2358.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-04-27T2358.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Another farm yard trees placed.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-04-28T0006.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-04-28T0006.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Actually I am not going to screenshot every yard, it would bloat this web page size quite a bit because there are I think 50+ farm yards heh. I'll try to screenshot most complex or interesting looking tree placements now.
</p>

<p>
<b>2021-04-28T01:30:00Z</b> Was watching twitch live stream when penalty_box_gaming was playing <a href="pmc-grande-gardens-16km.php">PMC Grande Gardens 16km</a> v1.1.10, had all editing tools open in the background but burnt out me just spent time watching the stream. Oh well.
</p>

<p>
By the time his stream ended, I was already yawning tired and had no interest of concentrating on editing. This is what happens when you are burnt out for editing / computer work. It really sucks.
</p>

<p>
2021-04-28T15:40:00Z New editing day has started, continuing adding vegetation objects. Just added days first batch of trees to one farm yard.
</p>

<p>
Hopefully today I get some serious damage done for this tree object placement, <a href="https://www.elitedangerous.net" target="_blank">Elite Dangerous</a> odyssey alpha phase 4 just started so I have to check that out but I don't think it will take much of my time today.
</p>

<p>
2021-04-28T16:31:00Z Several farm yards tree object placement done now, but feels like a struggle. Right now in fact I'll take a quick break to check out that mentioned Elite Dangerous odyssey alpha phase 4, this is the life with editing burnout heh.
</p>

<p>
2021-04-28T22:22:00Z Finally back placing trees after several hours break checking out Elite Dangerous odyssey alpha and other things. Hopefully I could get at least few farm yards done. Gotta take screenshots now again to feel like I'm making some progress, heh.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-04-28T2230.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-04-28T2230.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
And another farm yard trees done.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-04-28T2238.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-04-28T2238.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
And another ...
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-04-28T2243.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-04-28T2243.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Once I get into the editing flow, these farm yard tree placements are getting done pretty quickly (one farm yard I mean).
</p>

Google/maps:
<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-04-28T231539.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-04-28T231539.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

GE:
<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-04-28T231503.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-04-28T231503.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
<b>2021-04-29T00:23:00Z</b> Taking a lot of breaks, almost between each farm yard, however doing progress slowly but surely.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-04-29T0023.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-04-29T0023.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Here is the progress report, color codes red is trees not yet placed, black placed.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-04-29T0030.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-04-29T0030.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
This is the hilarious age old thing with terrain editing: <i>never zoom out...</i> heh.
</p>

<p>
For those who don't know, it means that when you are closely zoomed into terrain editor and place objects etc, you do good work and feel good about yourself that oh wow this will be done in no time, but then you zoom out and are shocked to see you have still incredible amount of work left to do which completely demoralizes you that "boohooo I never gonna get this done!" <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
In 2019 when I placed objects into the initial terrain version which later got re-designed, I have faint recollection that it took like a week of hard work almost 16hrs a day. Unfortunately I don't have any dates or such detailed info about it, I might be able to dig up something from PMC discord.
</p>

<p>
<b>2021-04-30T00:18:00Z</b> Todays first farm yard trees placed. Getting enough editing motivation has been a struggle, yesterday I was slacking so much, just watching movies and twitch/youtube, did the "mandatory" tree placement but nothing else.
</p>

<p>
Days second farm yard tree placement happened in the far NW corner of this terrain.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-04-30T0036.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-04-30T0036.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Well at least we reached one corner now, three more to go! heh, uuh.
</p>

<p>
Here is current progress image, showed this for guys in PMC discord so lets attach it here as well:
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-04-30T0435.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-04-30T0435.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
2021-04-30T17:51:00Z New editing day has started, got first farm yard done for today. This was now on the extreme north edge of the terrain, actually closest trees were pretty much touching the edge.
</p>

<p>
Good morning screenshot.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-04-30T1752.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-04-30T1752.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Got second farm yard done... but my mind was already elsewhere, I wanted to again play FS19, to harvest some canola from F59 in <a href="stories-from-zero-grande-gardens.php" target="_blank">PMC Grande Gardens 16km Start From Zero</a> savegame.
</p>

<p>
<b>2021-05-01T18:47:00Z</b> Todays first farm yard trees placed. Had to take a screenshot.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-01T1846.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-01T1846.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Second farm yard done, another screenshot. By this rate I have 50+ screenshots hehe, oh well.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-01T1902.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-01T1902.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Minerva Creek had some single trees.
</p>

Google/maps:
<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-01T1919.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-01T1919.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

GE:
<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-01T1920.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-01T1920.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Creek looks a bit naked without bushes or the actual heightmap creek ditch, but those will be added later.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-01T1923.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-01T1923.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
<b>2021-05-02T18:29:00Z</b> Todays first tree placement done. This was bunch of trees along the railroad track in terrains north edge.
</p>

Google/maps:
<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-02T1829.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-02T1829.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

GE:
<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-02T1830.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-02T1830.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
2021-05-02T18:39:00Z First farm yard trees placed, this yard had only two maple/volume and few very small spruce/pine trees. Very quick to place.
</p>

<p>
Next farm yard had a lot of sprune/pine trees, to break the wind and line of sight I believe.
</p>

Google/maps:
<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-02T1856.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-02T1856.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

GE:
<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-02T1857.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-02T1857.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
<b>2021-05-03T18:07:00Z</b> Todays first trees placed.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-03T1807.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-03T1807.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Second farm yard tree objects placed.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-03T1816.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-03T1816.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Third farm yard tree objects placed.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-03T1829.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-03T1829.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Did fourth farm yard, this one right at the north edge of the terrain. This farm yard was actually cut off by terrain edge, the trees from farm yard actually went into some sort of creek bed towards north, but thats beyond terrain edge so not my problem.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-03T1915.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-03T1915.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Then there was just few trees in the wilderness, one actually completely alone between two fields.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-03T1922.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-03T1922.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Did the NE corner trees on this small, umm, island type area with one structure.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-03T1943.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-03T1943.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
After this I again slid into the idling mode, just staring empty screen with blank look on my face. Editing / computer burnout is not fun.
</p>

<p>
I actually felt like playing <a href="https://www.pmctactical.org/arma3/" target="_blank">ArmA 3</a>, immersing myself into some huge european woodland rolling hills cold war terrain for hours, heck rest of the day. But unfortunately there is no LARGE such terrains available, largest is PMC Rugen and well been there done that, so yeah...
</p>

<p>
<b>2021-05-04T23:15:00Z</b> Todays first farm yard trees placed, well actually this was farm yard that was cut off, the buildings are beyond terrain edge which are not present but the trees are which I now placed.
</p>

<p>
Did another location, no farm yard just trees by side of the road.
</p>

<p>
<b>2021-05-05T01:02:00Z</b> Then did farm yard with spruce/pine trees and all.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-05T0102.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-05T0102.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Wrote down changelog entry for may 5th, it looks funny as I have been painfully slowly struggling with these tree objects. Take a look:
</p>

<pre>
2021-04-27:
- iowa garden city vegetation object placement continues
2021-04-28:
- iowa garden city vegetation object placement continues
2021-04-29:
- iowa garden city vegetation object placement continues
2021-04-30:
- iowa garden city vegetation object placement continues
2021-05-01:
- iowa garden city vegetation object placement continues
2021-05-02:
- iowa garden city vegetation object placement continues
2021-05-03:
- iowa garden city vegetation object placement continues
2021-05-04:
- iowa garden city vegetation object placement continues
2021-05-05:
- iowa garden city vegetation object placement continues
</pre>

<p>
This looks so stupid. These trees should have been placed within a day, maximum of two days. Now I have been struggling with boredom/burnout so I usually do one or two farm yards after days first meal just so I can mark changelog that I did something and then... then just slide into idling lazy mode where I stare monitor with blank look on my face, maybe watch some dumb twitch streams.
</p>

<p>
2021-05-05T08:33:00Z Did one more farm yard tree placement after idling half the day watching twitch live streams.
</p>

<p>
2021-05-05T22:14:00Z Todays first trees placed, by the railroad tracks just north of minerva creek.
</p>

Google/maps:
<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-05T2214.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-05T2214.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

GE:
<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-05T2215.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-05T2215.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Another farm yard trees done.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-05T2322.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-05T2322.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
<b>2021-05-06T00:01:00Z</b> And this next farm yard had the longest spruce/pine tree wind breakers done so far.
</p>

Google/maps:
<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-06T0001.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-06T0001.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

GE:
<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-06T0002.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-06T0002.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
And again only after doing what, two farm yards and one wilderness piece I felt like not wanting to continue editing anymore.
</p>

<p>
Then placed trees by the railroad tracks north from garden city.
</p>

<p>
2021-05-06T07:25:00Z Did one farm yard with not that many trees.
</p>

<p>
2021-05-06T23:55:00Z Todays first farm yard tree object placement done.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-06T2355.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-06T2355.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
<b>2021-05-07T00:07:00Z</b> Second farm yard done right next to the first one.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-07T0006.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-07T0006.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
2021-05-07T09:37:00Z After several hours of slacking did another farm yard tree placement.
</p>

<p>
2021-05-07T20:38:00Z Todays first farm yard tree objects are placed. Basic farm yard without spruce/pine trees.
</p>

<p>
Created two more locations in the field and by the road (single tree).
</p>

<p>
Another farm yard done. On the background seen the trees on the field.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-07T2133.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-07T2133.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
2021-05-07T22:33:00Z Another farm yard trees done.
</p>

<p>
<b>2021-05-08T03:12:00Z</b> After a break did one farm yard tree objects again.
</p>

<p>
In this screenshot you can see town of garden city in the background. Placing trees in clockwise circle around the terrain and now kind of reached the area there I started, well more or less.
</p>

<p>
Still plenty of todo of course.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-08T0311.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-08T0311.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Next farm yard done, just east of garden city.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-08T0455.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-08T0455.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
And then tree object placement progress update for PMC discord.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-08T0501.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-08T0501.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
2021-05-08T09:17:00Z Another farm yard done but yeah its been slow day again.
</p>

<p>
And one more done.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-08T0924.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-08T0924.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Next farm yard.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-08T0931.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-08T0931.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
2021-05-08T10:29:00Z Did few more farm yards, felt actually pretty good getting some real progress done, at least for a short while.
</p>

<p>
2021-05-08T11:50:00Z Several more farm yards done now, suddenly got some enthusiasm and motivation to get some editing done.
</p>

<p>
East side of the terrain is now done, basically only the south side left. I start to feel like there is light at the end of the tunnel now.
</p>

<p>
2021-05-08T21:59:00Z Todays first farm yard done. Only 14 more left and then its all done.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-08T2157.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-08T2157.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Got days first meal in, then attacked tree objects placement with enthusiasm and motivation... today this will end <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
2021-05-08T22:48:00Z Another farm yard done.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-08T2248.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-08T2248.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Had good feeling for today, I really feel like these trees get done today.
</p>

<p>
Thick tree line to cover some sort of huge pig barn/shed.
</p>

Google/maps:
<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-08T2302.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-08T2302.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

GE:
<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-08T2303.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-08T2303.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
<b>2021-05-09T00:03:00Z</b> Another farm yard done.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-09T0003.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-09T0003.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
And another farm yard done, feeling excited!
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-09T0017.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-09T0017.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
2021-05-09T00:28:00Z Farm yard done, not many left now.
</p>

<p>
2021-05-09T00:38:00Z <b>PMC Iowa Garden City 8km basic object placement is complete!</b> Yeah buddy!
</p>

<p>
So now all basic buildings and trees object placement is done, this is awesome!
</p>

<p>
There will be some minor changes, tweaks etc to buildings, decorations perhaps etc added, but now the bulk work is done! <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
All objects selected, cant really fit piece of crap GE into view all at once.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-09T0044.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-09T0044.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Then exported PMC_Helpers just in case I edited them, I have no recollection as GE has been running 24hrs a day since apr 27th which is over a week now (last weeks wednesday, now its sat-sun midnight). Then took mandatory backups and finally synced terrain files to FS19 mods dir.
</p>

<p>
Its time to try it in-game first with with all basic objects done <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Brought it in-game with LOD/View distance settings of 5, did camera flyover and was shocked how awesome it looks. Took a bunch of screenshots but single screenshot wont convey the whole meaning of 8km real world data terrain, so here is one of which I liked the most.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-09T0124.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-09T0124.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Compiled new version of the terrain and copied it to PMC Gaming computer, then did flyover video capturing.
</p>

<div class="grid-container">
<div class="grid-item">
<p>
PMC Iowa Garden City 8km Fast Run Through Ground Level 2021-05-09
</p>
<iframe width="480" height="270"
src="https://www.youtube.com/embed/mPFVTd5mJDI">
</iframe>
</div>

<div class="grid-item">
<p>
PMC Iowa Garden City 8km Terrain WIP Tour 2021-05-09
</p>
<iframe width="480" height="270"
src="https://www.youtube.com/embed/-0W9F-qZVbI">
</iframe>
</div>
</div>

<p>
2021-05-17T10:33:00Z Did hasty Seasons GEO for PMC Iowa Garden City 8km, temperatures for freezing winter and moderately warm summer.
</p>

<p>
2021-05-18T07:10:00Z Took a screenshot of current farmland image.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-18T0708.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-18T0708.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
2021-05-18T11:46:00Z Farmland painting in GIMP continues, almost done first full section. Also wrote notes for farmland painting using cultivator_density in GIMP tutorial.
</p>

<p>
2021-05-18T13:39:00Z Ran out of farmland ID channels, ouch! <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Okay lets create some more, all the way to 255 now.
</p>

<p>
2021-05-18T16:44:00Z Finished GIMP painting farmland image, all 255 ID channels are in use, yikes! <img src="../images/smileys/icon_surprised.gif" alt="Smiley :o" loading="lazy">
</p>

<p>
Well yeah what can you do, there are lot of fields. I guess those paintings could be tweaked for some compromise like adding two fields into one ID on some places, for example put two small fields into same land, that would free up some IDs to split up remaining huge areas.
</p>

<p>
But dunno, there is so many small individual fields buyable now that NOBODY can whine that Start From Zero savegames are hard as land lots are so large and cost so much, there is plenty of small cheapo lands available now.
</p>

<p>
2021-05-18T18:18:00Z Started to create utility pole wires, did one line now.
</p>

<p>
Screenshot time.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-18T1846.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-18T1846.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
2021-05-18T19:09:00Z Ran into interesting utility pole setup in a field. Its transformgroup is called manual-01 and has tree utility poles in a field without cultivator_density holes punched through. This is pretty much reminder for myself that if I come across this location later I know what was going on.
</p>

<p>
I'm going to leave the cultivator_density holes for later because now utility pole wires need to get done first. Of course this field is courseplay / hired worker unusable until those holes are done heh.
</p>

<p>
I have to say this wire project is much more work than I imagined.
</p>

<p>
2021-05-18T19:23:00Z Quite interesting spline setup here, had to re-create it completely as the old one just didn't work for wires.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-18T1922.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-18T1922.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-18T1955.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-18T1955.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Next I discovered utility pole line which had really bizarre zig-zag in the beginning, no way the wire script could place wires for this, so I decided to rename the transformgroup to zig-zag and leave it for later date.
</p>

<p>
Check it out.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-18T1957.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-18T1957.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Another manually done only 3 poles, I just made a spline for it and got them to align pretty closely like the original ones.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-18T2010.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-18T2010.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
2021-05-18T20:35:00Z Doing good progress, several utility pole lines re-created with wires now.
</p>

<p>
Now I ran into another set of manual transformgroups which mean they were hand placed according to google/maps satellite imagery. I am afraid to touch these so I don't erase work that I did earlier, I'm just going to continue from the next traditional script created transformgroup.
</p>

<p>
These manual ones were manual-03 through 07.
</p>

<p>
2021-05-18T22:22:00Z All utility pole wires placed, except the manual ones which needs some more tinkering.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-18T2222.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-18T2222.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Then it was time to start preparing first internal testing version release <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2021-05-18T22:57:00Z Uploaded PMC_Iowa_Garden_City_8km_v1.1.3.7z to google drive for internal testers <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2021-05-21T22:30:00Z Sell points aligned to ground and v1.1.4 internal testing version compiled.
</p>

<p>
2021-05-22T11:55:00Z Seasons GEO Iowa Garden City starting temperatures increased to warmer.
</p>

<p>
2021-05-27T05:23:00Z Started to paint chart for asphalt roads so I know where to place splines which are used to create asphalt road piece meshes.
</p>

<p>
2021-05-27T05:53:00Z Finished painting it using google/maps as source. Surprisingly low number of asphalt roads there.
</p>

<p>
Below image red is asphalt and yellow is dirt/gravel road.
</p>

<p>
<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-27T0553.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-27T0553.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>
</p>

<p>
Next I just need to actually create the asphalt roads... /me backs away slowly ... <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Then decided to start placing asphalt road splines right away, even though I don't remember much at all how I did them previously. What I mean is how to do them so they would look nice and not some jagged edges crap ones, but hey gotta start trying and see how it goes.
</p>

<p>
2021-05-27T06:21:00Z Took backups, always gotta have good backups, a snapshot of last properly working version before starting to add new stuff in.
</p>

<p>
Created spline from center garden city by the railroad towards west and then north west. Its coordinates aligned to ground are: -449.73498535 37.17038727 616.17468262
</p>

<p>
Yep copy pasted them here as I probably need to restore the spline to original coordinates after fiddling with it, so I had to save them somewhere and this is as good text file as any hehe.
</p>

<p>
2021-05-27T07:26:00Z Tested first asphalt road in-game, looks overall pretty good with elevated road except curves has the issue with jagged "empty" edge parts.
</p>

<p>
And when I say first asphalt road I mean in iowa garden city, my real first ever asphalt road was done in PMC Grande Gardens 16km fairly recently.
</p>

<p>
Tomorrow I'm hoping to add more roads and see if anything could be done with those curves. Also need to smooth out elevations a bit on intersections for dirt roads.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-27T0718.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-27T0718.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
2021-05-27T18:24:00Z New terrain editing day has started, already creating spline for the east-west direction asphalt road.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-27T1823.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-27T1823.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-27T1830.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-27T1830.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Spline coordinates are: 4094.55810547 9.91044426 1449.92602539
</p>

<p>
Third splne done with coordinates: 339.76501465 25.62941742 4094.38110352
</p>

<p>
Road 10m mesh piece placing method:
</p>

<p>
DOESNT WORK:<br>
1) create spline where asphalt road is<br>
2) run scripts -&gt; Roads.Ditches -&gt; Place Roads 9.8m<br>
3) increase spline elevation with 1 meter<br>
4) run scripts -&gt; Roads.Ditches -&gt; set terrain height by spline no raise no smoothing 6m<br>
5) select road 10m piece transformgroup and increase its elevation by 1.5m or until all terrain is beneath the whole road<br>
Done
</p>

<p>
2021-05-27T20:09:00Z works OK:
</p>

<p>
- create spline where asphalt road is, DO NOT ROTATE IT!<br>
- run scripts -&gt; Roads.Ditches -&gt; set terrain height by spline width 8m, raise 1m<br>
- run scripts -&gt; Roads.Ditches -&gt; Place Roads 9.8m
</p>

<p>
This makes nice elevations kind of ditch type (sort of) and placed road objects nicely aligned on top of them.
</p>

<p>
Struggling with curves <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-27T2033.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-27T2033.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
2021-05-27T21:05:00Z Finished asphalt roads with splineplacement method, intersections and well connections in general look real ugly, also the long east-west road was elevated too high with improper ditch smoothness, but yeah asphalt roads are now in and will have to check in-game how they look.
</p>

<p>
More tweaks, probably like complete rework will happen later.
</p>

<p>
2021-05-27T21:13:00Z In-game test done and overall I like the roads even though there are couple of rought spots as mentioned above.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-27T2111.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-27T2111.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
2021-05-29T16:44:00Z New editing day has started, going to GIMP paint those farm yard driveway dirt/gravel roads a bit now. Not feeling overly enthusiastic about it, but lets try and see what happens.
</p>

<p>
2021-05-29T16:57:00Z Northern most row of US NAIP image painted with RGB 255,0,0 red dirt/gravel roads now. There was already few of them done previously in far NW corner, but basically all the rest remain untouched.
</p>

<p>
2021-05-30T01:09:00Z Was GIMP painting dirt/gravel driveway roads, didn't zoom out so don't know how much is done other than two road grids east-west alignment.
</p>

<p>
2021-05-30T02:18:00Z Done painting the driveway parts! <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
There is still few touchups I need to do on intersections, here is couple of examples:
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-30T0220.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-30T0220.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-30T0222.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-30T0222.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Also looks like many of the wind turbine paths are missing:
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-30T0223.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-30T0223.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Then started to do this touchup pass. Better get it done right away so road painting is completely done and I can move into other tasks.
</p>

<p>
2021-05-30T02:44:00Z And all intersection and wind turbine touchups done, now GIMP road painting is 100% complete, if anything was missed then that falls to bugs category <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2021-05-30T03:56:00Z Compiled PMC_Iowa_Garden_City_8km_v1.1.5.7z for internal testers.
</p>

<p>
Asphalt roads are pretty rough at few places in this first iteration but those will be tweaked later.
</p>

<p>
2021-06-01T02:07:00Z Was watching penalty_box play testing v1.1.5 and live streaming, tipCol was from mapUS so he could not tip to fields on some locations, so we decided that I'll fix it on the fly while he streams, so I did.
</p>

<p>
Compiled v1.1.6 for internal testers.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-06-02T0207.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-06-02T0207.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Talking about real time bug fixing <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
2021-06-02T07:00:00Z Started working on players farm 1 for defaultItems.xml
</p>

<p>
First took backups, never forget backups. Just to recap my backup batch file created 7-Zip archive with UTC time stamp, so now I created this file name: PMC_Iowa_Garden_City_8km_2021-06-02T0658.7z - with these kind of backup archives it is very easy to revert back to pick up something you messed up etc. And best yet, its one click batch file, taking backups cant get any easier than that :)
</p>

<p>
2021-06-02T07:33:00Z Finished transferring players farm 1 from GE terrain.i3d into defaultItems.xml as-is, meaning that farmsilolarge will definitely not work with the unloading pipes and dumping grills.
</p>

<p>
Also as they were set to land 0, it didn't work right away.
</p>

<p>
2021-06-02T11:51:00Z Set FarmId to 1 and now the buildings show up in garage and can be sold.
</p>

<p>
There is still issue with giants siloExtension which cant be sold, no idea why, they have the same settings as farmsilolarges.
</p>

<p>
2021-06-02T21:44:00Z Asphalt road elevations smoothed out by dealership and intersections.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-06-02T2224.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-06-02T2224.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Did all that asphalt road intersection terrain heightmap smoothing manually in GE, right from the start I knew it was waste of time because next time I need to revert heightmap back to previous backup all this work will be lost. Intersection and field approaches smoothing needs to be done splines, so its non destructive work and can be re-created at any time as many times you want. Oh well, whats done is done.
</p>

<p>
2021-06-04T08:53:00Z Vehicle shop aka dealership start / end coordinates adjusted so that bought stuff wont clip with other objects. These were from the era when there was no other objects nearby.
</p>

<p>
2021-06-04T09:18:00Z Patched hole for cultivator_density where three utility poles were on F258. It was the usual shuffle to paint the locations first in GE, then bring that cultivator_density image to GIMP, then update my actual fields source XCF image with it, then export it back to GE, heh a lot of parts to go through.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-06-04T0918.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-06-04T0918.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Then moved players farm 1 CBJ vehicle shed slightly to east which was on a field edge. Was quite tight location, there really was not much free space on either side of the building, hmm wonder if this CBJ 72x150_Building is too wide for the real life building I'm trying to replicate. Well anyways now vehicles in the field should not collide with the building.
</p>

<p>
Then there was dumb non painted strip of cultivator_density in F38 NW so painted that in and updated both cultivator and fruit density images. This also brough nice grass for the three utility pole holes (giggity) in F258.
</p>

<p>
Attempted to fix F230 field map indicator being so close to terrain edge that the game engine wont render its number on ESC mapview PDA, needs testing in-game if it was moved far away enough in order to work.
</p>

<p>
Then utility poles NE from player farm 1 were scaled 0.75, fixed this back to proper value of 1.
</p>

<p>
2021-06-04T10:01:00Z Missed a building on following location: <a href="https://www.google.com/maps/@42.2843745,-93.3431745,144m/data=!3m1!1e3" target="_blank">google/maps</a>, so added it now. Actually it was two buildings and then I also see in north side some sort of narrow tower or radio mast type structure SHADOW only, so quite difficult to juge what is it, maybe some sort of windmill type object dunno, well that did not get added as said no idea what it might be.
</p>

<p>
Changed one selling point to Max Yield CO-OP name, another for Prairie Land Cooperative, rest were named "SP1", "SP2" etc style. Hmm that prairie land is quite long name, it will clutter ESC mapview badly, oh well.
</p>

<p>
2021-06-04T10:14:00Z Had quite a lot of edits in now so next is the in-game test if everything works okay. Have to carefully go through the changelog to check every edit if it works ok not. Lastly to check log for errors of course.
</p>

<p>
Well in-game test shows that F230 field map indicator was NOT fixed, it is still too close to terrain edge.
</p>

<p>
Found some additional field map indicators which were too close to the terrain edge, see below.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-06-04T102736.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-06-04T102736.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-06-04T102723.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-06-04T102723.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-06-04T102711.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-06-04T102711.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Got paintable ground textures with grass in.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-06-04T1022.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-06-04T1022.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
And tested that we have plenty of room at vehicle shop when buying new vehicles, I think this is enough space <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-06-04T1021.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-06-04T1021.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
2021-06-04T10:57:00Z Adjusted field map indicators a bit more for all those fields I found them missing. Next I needed to punch holes to F258 field definition which had the utility poles. I could have done this just on top of the normal heightmap but decided to take backups and flatten heightmap to RGB 1,1,1 so its nice and even ground, actually 0,0,0 might be best dunno.
</p>

<p>
Here is how the utility pole field definition turned out as quick simple shape. Note that this will not be the final shape, I will add detailed corner pieces once development reaches that stage.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-06-04T1105.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-06-04T1105.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Checked in-game and field defintion turned out fine around utility pole holes.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-06-04T1122.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-06-04T1122.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
2021-06-04T11:39:00Z Added vehicle shop aka dealership customizing and repairing trigger setup, vehicle sell point.
</p>

<p>
2021-06-04T22:27:00Z Adjusted dealership start/end coordinates and rotation away from the building.
</p>

<p>
2021-06-04T23:22:00Z Disabled player farm 1 bin silos completely from defaultItems.xml so testers can place auger pipe required bin silos themselves, hopefully we find best suited bin silo mod for this purpose.
</p>

<p>
And with that edit I'm ready to start put together next internal testing version and changelog web page.
</p>

<p>
2021-06-05T06:40:00Z Compiled PMC_Iowa_Garden_City_8km_v1.1.7.7z for internal testing.
</p>

</section>

<footer>
<p>
<a href="pmc-terrains.php" class="button">PMC Terrains</a>
<a href="changelog-pmc-iowa-garden-city-8km.php" class="button">Changelog PMC Iowa Garden City 8km</a>
<a href="pmc-iowa-garden-city-8km.php" class="button">PMC Iowa Garden City 8km</a>
<a href="../index.php" class="button">PMC Farming Simulator root page</a>
</p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("../include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
