<!DOCTYPE html>
<html lang="en">
<head>
<title>Developer Diary PMC Ohio Alger 10km Farming Simulator 22 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Developer Diary PMC Ohio Alger 10km Farming Simulator 22 - PMC Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
	<h1>Developer Diary PMC Ohio Alger 10km Farming Simulator 22 - PMC Farming</h1>

<p>
This is <a href="pmc-ohio-alger-10km.php">PMC Ohio Alger 10km</a> terrain dev diary for Farming Simulator 22 (FS22).
</p>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
<?php include("/var/www/include/support.php"); ?>
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

<p>
Continue reading <a href="dev-diary-pmc-ohio-alger-10km-005.php">next page</a>, back to <a href="dev-diary-pmc-ohio-alger-10km.php">Dev Diary PMC Ohio Alger 10km Homepage</a> or <a href="dev-diary-pmc-ohio-alger-10km-003.php">previous page</a>.
</p>

<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("/var/www/include/footer-start.php"); ?>
<p>
<a href="pmc-terrains.php" class="button">PMC Terrains FS22</a>
<a href="changelog-pmc-ohio-alger-10km.php" class="button">Changelog PMC Ohio Alger 10km</a>
<a href="screenshots-pmc-ohio-alger-10km.php" class="button">Screenshots PMC Ohio Alger 10km</a>
<a href="pmc-ohio-alger-10km.php" class="button">PMC Ohio Alger 10km</a>
<a href="../index.php" class="button">PMC Farming Simulator root page</a>
</p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("/var/www/include/footer-end.php"); ?>
<?php include("/var/www/include/support.php"); ?>
<?php include("/var/www/include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
