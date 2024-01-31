<!DOCTYPE html>
<html lang="en">
<head>
<title>Start From Zero PMC Grande Gardens 16km - PMC Farming Simulator 19 Stories</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Farming Simulator 19 Stories Start From Zero PMC Grande Gardens 16km">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<h1>Start From Zero PMC Grande Gardens 16km PMC Farming Simulator 19 Stories</h1>
<p>Stories from the Farm</p>
</header>

<section>
	<h2>PMC Grande Gardens 16km, Start From Zero</h2>

<p>
Please read the background idea for <a href="stories.php">our Farming Simulator 19 Stories</a> so you understand what is this all about.
</p>

	<h2>2021 Re-Design Game-play Testing</h2>

<p>
<b>Note:</b> Here I started to use official <a href="https://www.timeanddate.com/worldclock/timezone/utc" target="_blank">Coordinated Universal Time (UTC)</a> time stamps instead of "2359" hour and minute custom mark I've been using all this time. This change came because in 2021 I was tired of checking the clock and typing down date + hour + minute numbers, so I configured my EditPad Pro text editor to insert UTC (with seconds zeroed out) to current line just by a hotkey, I have been using it daily in my notes and even on PMC websites, so it was logical to extend proper UTC usage into these PMC Farm Stories as well <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2021-12-17T19:07:00Z Booted up PMC Gaming with windows 7 enterprise 64bit which only has TrackIR5 and Farming Simulator 19 installed, with mods. Plan is to port over PMC Grande Gardens 16km Start From Zero savegame into terrain v1.1.12 which contains the new re-design update.
</p>

<p>
This is my first time running PMC Gaming win7 with Nvidia GTX 1060 3gb graphics card, long story short FS22 made my GTX TITAN X crash nvidia drivers so I swapped cards between PMC DevSurf and PMC Gaming. I doubt FS19 runs in 4k with very high details, interesting to see.
</p>

<p>
I started by editing gameSettings.xml to point into the existing old Start From Zero mods. Looks like during win7 re-install I restored old FS19 savegames, so it was time to launch old savegame Start From Zero.
</p>

<p>
2021-12-17T19:18:00Z FS19 booted up with PMC Grande Gardens 16km v1.1.9 and Start From Zero savegame. Performance was 30FPS and just felt sluggish, this was because gtx 1060, going to exit into main menu and set video options down to medium or something. Changed options to medium preset and advanced settings to better draw distances.
</p>

<p>
2021-12-17T19:22:00Z But now it was my lunch time...<br>
2021-12-17T19:47:00Z Feeding time over, back to setting up FS19 savegame.
</p>

<p>
Launched FS19 back up and 30FPS with very sluggish feeling performance, I really don't like this, I need to drop down details some more to get good smooth feeling performance. I also changed inputBinding.xml mouse speed from 2 to 6 so I don't have to move my mouse out of the table.
</p>

<p>
Set game video options preset to medium now, no custom changes. No change in FPS and feel of performance, but mouse control speed is now way too high heh, need to bring it back down to 3, maybe I misremember that number 6 I might have used it back in FS17 or something cant recall.
</p>

<p>
Now with video preset LOW the FPS actually fluctuates between 30, 35 maybe sometimes even 40 which is odd, its like maybe the trains on the background cause such performance hogging or something, no idea. This savegame has always been 30FPS neighborhood because how large it is, but beyond that stable 30FPS you have additional layer of "feeling" when you move in the game world, it can be 30FPS and feel smooth or just simply 30FPS slug fest stuttery horrible experience. Anytime you run more than one vehicle with courseplay its 30FPS no matter what terrain.
</p>

<p>
Alright enough yabber, time to start checking out how to port this savegame into terrain v1.1.12 next.
</p>

<p>
All vehicles was so beautifully parked all lined up etc into fields ready for terrain upgrade. The fertilizer and seeds in various grain bin silos need to be handled on items.xml level. Guess there is nothing else to do here than to start preparing the v1.1.12 terrain mods directory and game.xml setting for it.
</p>

<p>
2021-12-17T20:19:00Z Shut down FS19 for terrain v1.1.12 install.
</p>

<p>
Decided to keep the same mod directory as I'm using now, no need to edit game.xml and others, I just need to take 7-zip backup of the existing dir and savegame just for historical record, better to have backups than not.
</p>

<p>
2021-12-17T20:26:00Z Took backups into c:\Backups\ then copied them over LAN into PMC DevSurf disk as well, gotta have proper backups. Now I'm ready to start putting together the new mod set. Plan is not to add much if any mods, just upgrade to terrain v1.1.12, but courseplay can use upgrade and hmm I think there was some other new mod which was very useful.
</p>

<p>
Courseplay in the existing dir was v6.4.0.5 so I believe that is the latest. Any other mods... I cant remember, its been so many months since I played FS19 or checked out new mods heh. Oh nevermind, found courseplay v6.5 heh, installed it.
</p>

<p>
Then launched FS19 I want to check existing mods against whats on giants modhub, so easy to see if any need updates. There arent that many mods I use from modhub in this savegame, but few at least.
</p>

<p>
Only mod that had an update there was seasons, hmm. My version was v1.3.1 and there was some minor v1.3.2 update with animal buying with trailer fixed, well I don't use animals so not an issue but decided to download the update manually anyways. Got it updated.
</p>

<p>
2021-12-17T20:47:00Z Next I simply started FS19 up and created new savegame with PMC Grande Gardens 16km v1.1.12 using new farmer game mode, did some basic settings there, saved and exited.
</p>

<p>
I left seasons to default 9 days even though that is way way too short for large terrains, but I do not plan on harvesting half the terrain this time, I just want to get re-oriented with my good old friend PMC Grande Gardens 16km once again. Plan is to just do few fields and look around, write bug reports and improvement ideas.
</p>

<p>
BTW at this point I felt mildly frustrated as this process was taking forever, I'm now already on my days second meal and havent even got started playing yet, hmph.
</p>

<p>
First opened careerSavegame.xml for both new and old savegame, copied over money and playTime values. Then opened farmland.xml and set ownership to all the land lots. Then copied farms.xml from the old savegame, it should work as is. Same for Courseplay and guidanceSteering files. Also copied over items.xml and vehicles.xml as is, I bet this will break things because I changed the railroad silo ID names, but well its worth the shot anyways because otherwise its whole can of worms to try to get our vehicles ported over with their original values, I don't even want to think about what kind of line by line XML mess that would be.
</p>

<p>
Loaded the savegame up, checked vehicles, then saved and exited. Log had one issue:
</p>

<pre>
2021-12-17 21:05 Error: Failed to open xml file 'C:/FS19.Mods/Start_From_Zero_PMC_Grande_Gardens_16km/PMC_Grande_Gardens_16km/maps/placeables/grainSiloRailroad13/grainSiloRailroad13.xml'.
2021-12-17 21:05 Warning: corrupt savegame, item 65 with className SiloPlaceable could not be loaded
</pre>

<p>
Hmm I am confused of how easily stuff ported over, well with the above exception, I thought there would be much more errors if I just copy over items and vehicles XML files. So hmm railroad silo 13 does not exists, which is odd as hmm instead of having 0 - 13 there should be now 1 - 14, err dunno just cant remember the specifics.
</p>

<p>
I'm going to just ignore that error for now if at all possible, like if one of the railroad silos dropped off from the savegame 3d world then so be it, I'll fix on the next upgrade.
</p>

<p>
Restarted FS19, loaded savegame up and yeah looks like the outer edge train has now disappeared, that error was for railroad silo but apparently the train went bye bye as well. I don't need the train especially for this small re-orientation game-play, but of course its slightly scary, if the train is gone, wonder what else is too.
</p>

<p>
Its just that vehicles.xml with trains is such a huge mess there is no easy way to port it. I'll try maybe in PMC Devsurf with better time if I could find a way to copy over only tractors and other traditional vehicles, but I don't think its possible as the IDs are sequential and if you move one off the list, everything breaks down. But I'll try lateron.
</p>

<p>
Right now I want to check if fertilizer and seeds are still in the grain bins. I noticed the existing millions of liters of grain is still there, so I need to zero those out in items.xml, and can also easily see if fertilizer and seeds are present. So exited to do that.
</p>

<p>
Went through items.xml and deleted all node fillType lines from farm grain bin silos that had any grains in them, left fertilizer, lime and seeds. Then restarted FS19 and loaded the savegame up again.
</p>

<p>
2021-12-17T21:37:00Z Looks like the disappeared railroad depot is the center one, it has no mapview icon to do the teleport thing, also can see from the other silos list that we have several millions of capacity missing. But all the grains are now gone as expected.
</p>

<p>
Spotted my farm yard conflicting with F153. Here is a bug report I wrote about it, I'll just lazily copy paste everything here instead writing it the second time heh.
</p>

<p>
<i>grande gardens v1.1.12 F153 and Start From Zero players farm conflict, grain bin and sheds are IN F153 heh</i>
</p>

<p>
<i>this is not a bug in the terrain, but just a conflict between terrain and Start From Zero savegame. When I was painting those fields in GIMP I didnt remember this savegame had a farm yard in that area.</i>
</p>

<p>
<i>I can easily move the farm yard vehicle sheds and grain bin silo away to somewhere else, probably easiest is to just sell them and buy if I need them elsewhere.</i>
</p>

<p>
<i>however this was a nice historical farm yard and I would like to include it in GE placeables, so why not take start from zero v1.1.9 savegame files and extract the placeable names with coordinates.</i>
</p>

<p>
Heh.
</p>

<p>
I was glad to see that in this savegame I already have GtX grain bin silo display things, so I can snoop what contents I have in each silo. I didn't even remember I had put those in.
</p>

<p>
Was going through grain bin silos from mapview teleport thing, checking things out. Then started to write more bug reports about terrain v1.1.12 as there was few issues which I need to fix.
</p>

<p>
When I zoom out in ESC mapview, the new small field numbers are so bunched up together that I cannot even take a screenshot, open it in GIMP and mark which fields I have harvested in this savegame like I did before. Previously without many small fields I could easily draw a red circle around the field number which still needs to be harvested, now if you try to even see what the field number is you fail, not to mention drawing circle around a mess of numbers is not going to work heh.
</p>

<p>
Damn giants conzole game engine, why cant it have more details on mapview <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Yes yes of course I could have only larger fields leaving plenty of room for mapview field numbers, but well yeah. Okay I learned my lesson from this and wont be doing any more small fields on any terrains, for large terrains they have to be 20ha or above so there is plenty of space around that field ID number.
</p>

<p>
2021-12-17T22:10:00Z Because these stories are much about telling my thoughts and not just copy pasting field work reports, I might as well tell that right now I feel overwhelmed when I'm looking at all the new fields which needs to be harvested. For example I switched to Big Bud 747 with Bourgrault 3420-100 paralink hoe drill and 71300 air cart, trying to see where is the next field to seed and ... wow, it just felt so overwhelming hehe.
</p>

<p>
Seeder big bud's are located in F71 SE corner, which is in terrains SE region, there are what looks like about 20-30 or more new fields in this area, its just crazy hehe.
</p>

<p>
Also I realized I don't have anykind of list of the fields I've harvested so far, sure I remember many of them but I could easily mistake few too. But looking at the mapview a bit more I realized that well its no rocket science, last field in the old design was hmm 95 I think or 98 cant remember, so any field with triple digit number is fair game for me.
</p>

<p>
Decided to start working, I mean... that's why we all are in PMC Grande Gardens 16km, right? <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Looks like F240 is nice square and about medium size field, just nice for quick courseplay work, so fired up big bud 747 and started to drive down there while recording courseplay course for the second big bud to follow. We don't need no stinking follow me mods haha.
</p>

<p>
01/early-spring in-game 0938hrs, weather +6C/+7C and forecast predicts +1C few days from now but I don't think that could destroy our canola if I seed it now.
</p>

<p>
Man it was a interesting experience getting back into FS19 after this many months of break and then playing on FS22 for almost a month, setting up courseplay for this field was slow task as I figured out my way to do it heh. But yeah eventually it came back to me heh.
</p>

<p>
2021-12-17T22:47:00Z Started seeding canola F240, courseplay ETA 21min, 2x tools
</p>

<p>
Oh wow it felt great to be back in big boy farming with large vehicles especially these huge air drills all running under courseplay <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
In my excitement of course I made a mistake, second bourgault drill was left to soybeans seed selection so first part of the headland now will be soybeans heh. Switched it to canola then and seeding continued <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Then quickly ran into colliding vehicles as I didn't pay attention (didn't remember basically, still so rusty after getting back at this) to the course as there was one spot after headland where vehicles will collide, well bourgault air drills did as they are 30.5m wide. I watched for a while if the tractors can pull themselves apart as it would be preferred because sometimes courseplay continues the course from the wrong waypoint and goes off to who knows where or skips big parts of the course. But they didn't so I had to stop air cart number two and untangle the vehicles.
</p>

<p>
Got them sorted and canola seeding continued.
</p>

<p>
I truly felt like visiting an good old friend being back in PMC Grande Gardens 16km with courseplay running large air drills, it was just so awesome, hard to put into words. Most people have switched over to FS22 now and are hyped by the new stuff in it, but to me its an pretty but empty shell as there is no good mods, only worthwhile mod released so far is Wopster's guidanceSteering, nothing else has been released which would even remotely to match the awesome mods you see in FS19 for example Courseplay.
</p>

<p>
Also editing with Giants Editor is a mess right now, as I'm typing this in 2021-12-17T23:06:00Z the fs22 v1.2 patch was just released day or so ago and it broke GE v9.0.1, we cannot edit terrains now, heh hilarious. Also I found few other issues like placeables that I cant even use required mods method with CBJ buildings, it just gives error. So yeah.
</p>

<p>
I will enjoy FS19 now as I have few projects to finish like this savegame which story you are reading right now. Eventually I move fully into FS22, if you'd ask me today, it would probably be when Courseplay with field work mode comes out and I have some PMC terrains ported with trees and buildings. I wont be switching over sooner, there is just no point. <i>Edit: 2024-01-31T04:59:00Z, who would have known that years later I still haven't fully switched over, FS19 is still my main Farming Simulator game, mainly due FS22 being dumbed down conzole peasant game without Seasons mod.</i>
</p>

<p>
Anyways, back to seeding canola <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
2021-12-17T23:14:00Z Finished seeding canola F240<br>
2021-12-17T23:48:00Z Finished eating, had to take a quick lunch break and forgot to write it down, it wouldn't be a farm story if I didn't sometimes forgot to write timestamps <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Back to seeding. Okay F241 is right next to us and its a new one, going to seed canola there too. But once I approached the field there was trees on it from the nearby farm yard tree line, its a bug report time, didn't seed this field because its bugged, there are plenty of other fields to choose from heh.
</p>

<p>
Next field I drove was F242, it was right at the south edge of the terrain, one false move and you fall off heh. Quite a small field, almost felt like driving with GPS but I want to watch Farmhand Mike youtube real life farming videos so courseplay it is.
</p>

<p>
Hmm nevermind, this field is so tiny in relatively speaking that I will seed this manually using GPS because two big bud 747 bourgault air drills just cause mayhem traffic jams, its quicker and easier to do with GPS manual driving. Also gives me the satisfaction that I did at least one field manually <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2021-12-18T00:12:00Z Started to seed canola F242, manually with GPS.
</p>

<p>
This like other fields had field definition in the center as SINGLE shape trying to cover as much of the cultivator_density as possible, however the outside area of cultivator_density was with what I first thought to be plowed texture but in fact is seeded sugar beets... so bourgault air drill was incapable of seeding it, huh I have never seen air drill not being able to work on any type field before.
</p>

<p>
I'm now getting 50-60FPS fluctuating performance which is a great increase to the stable 30FPS what it was earlier, dunno why, maybe its the terrain southern edge which has nothing behind it.
</p>

<p>
But I do run video preset LOW so the graphics are awful. I need to change at least the draw distance to a bit higher on the next restart because I cant see my other seeding tractor from the other end of the field. Hopefully that setting alone doesn't kill performance.
</p>

<p>
2021-12-18T00:23:00Z Finished seeding canola F242.<br>
2021-12-18T00:28:00Z Started seeding canola F245, courseplay ETA 18min, 2x tools<br>
2021-12-18T00:49:00Z Finished seeding canola F245
</p>

<p>
Stopped for a short moment to order food online, then continued. Also pumped up video options draw distance and foliage draw distance, hopefully that wont kill performance but makes the game-play a bit easier as I can see further out. Man I need a proper graphics card so bad, maybe I need to switch the GTX TITAN X back from PMC DevSurf so I can crank up the heat with 4k resolution.
</p>

<p>
Decided to leave this planting season just for these three fields, I mean this is just a quick test on new re-design terrain so I don't want to go too crazy deep yet. Most likely I'll do a quick update after this season because there seems to be some trees on fields and I would like to sort out that savegame porting properly, no point of testing terrain if half of the farm yard buildings are missing.
</p>

<p>
2021-12-18T01:21:00Z In-game 01/early-spring 1222hrs, weather 9/7C. Going to start time accelerating day at the time to get into canola harvest season.
</p>

<p>
After time accelerating two days I was already bored for the seasons game syncing dialog as in 16km terrain it takes forever <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Next time when I'm doing these small scale tests on new small fields, I will definitely select shortest possible seasons length because this 9 day seasons feels way too long to time accelerate for days while waiting crops to grow. Seasons length should always be adjusted to game-play style/purpose, like here this is just a quick test, one day season would have been more than enough for a quick results.
</p>

<p>
05/mid-summer in-game 0939hrs, weather 19/19C, forecast predicts a lot of rain for today, only noon hours are without rain. Canola is harvest ready. Going to start moving combines towards canola fields but I doubt harvest gets started because it should start raining any moment now.
</p>

<p>
2021-12-18T02:20:00Z Got all of my harvest fleet moved by F245 SE corner, in-game 0959hrs and the weather forecast predicts rain for 0900, 1200, 1800 and 2100hrs. I'm going to time accelerate until tomorrow because I don't think there will be time to harvest today, I don't want to start and immediately stop, also most likely the small window of no rain we get at 1500hrs is probably not enough to dry the crop so its going to be tomorrow anyways.
</p>

<p>
And I was right, soon after 1000hrs it started to rain, good call to post pone the harvest start. One more night and then we get to cut some canola.
</p>

<p>
06/mid-summer in-game 1302hrs, weather 28/20C and forecast predicts sunshine.
</p>

<p>
2021-12-18T02:30:00Z Started harvesting canola F245, courseplay ETA 29min, 4x tools
</p>

<p>
Budget now 206.650m so I'm going to sell truck loads directly to selling point 4 railroad as its right next to the field. I don't need the money so down the drain right away.
</p>

<p>
2021-12-18T03:13:00Z Finished harvesting canola F245
</p>

<p>
Was quite fun to harvest that smallish field, without any care it yielded two full semi-truck loads (140k liters per truck) of grain, budget now 207.158m. I did start to get that feeling that driving grain cart gets quite stressful because its a whack-a-mole, you empty one row of 4 combines, dump the cart to a semi-truck and then you already start to have the last combine near full if already not stopped as full. But that is the life of large scale farming guy playing single player with courseplay that doesn't have working overloader (grain cart) mode. Yeah you could always run less combines per field, but then you have the downtime and that gets boring. Its never good hehe. Don't get me wrong I love farming and playing this way, but just saying how wonderful it would be to play for example multiplayer with 6+ guys or have better functionality in courseplay (grain cart).
</p>

<p>
Next field would be F242 but its so small I probably need to drive it manually using GPS, or max two combines with courseplay. That is the hilarious thing with small fields, I'm not used to them in this terrain and I always roll in every field with 4 combines, now that we have small almost tiny fields its like err what the fuck is this <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2021-12-18T04:00:00Z Took a quick lunch break here, now back to harvesting. This next small field annoys me, guess I'll just drive one combine there and see how wide the midwest durus 18.2m header looks in that field.<br>
2021-12-18T04:03:00Z Started harvesting canola F242, manually with GPS<br>
2021-12-18T04:29:00Z Finished harvesting canola F242
</p>

<p>
This field was just slightly too big for single GPS driven combine, should have brought over two courseplay combines instead.
</p>

<p>
2021-12-18T05:00:00Z Started harvesting canola F240, courseplay ETA 31min, 4x tools<br>
2021-12-18T05:46:00Z Finished harvesting canola F240
</p>

<p>
It was good testing session today, because thats what it turned into even though wasnt really expecting it get this, well bad is not the proper word but, well something like that. Trees on a field and cannot see the field IDs because so many small fields bunched close together. PMC Grande Gardens 16km v1.1.12 needs some work, I need to "sit down and rethink" the small fields, I might have to merge many of them to larger because the overlapping field IDs just bother me so much.
</p>

<p>
2021-12-18T05:56:00Z Shut down FS19, most likely going to do more terrain edits and have to do another savegame porting the next time, have no plans on playing tomorrow with v1.1.12 as there is basically no point, well kinda.
</p>

<p>
Continue reading
<!--
 <a href="stories-start-from-zero-pmc-grande-gardens-16km-118.php">next page</a>,
-->
 <a href="stories-from-zero-grande-gardens.php">Start From Zero PMC Grande Gardens 16km Home</a>, go back to <a href="stories-start-from-zero-pmc-grande-gardens-16km-116.php">previous page</a>.
</p>

</section>

<footer>
<p><a href="stories.php" class="button">FS19 Stories page</a> <a href="../index.php" class="button">PMC Farming Simulator root page</a></p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("../include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
