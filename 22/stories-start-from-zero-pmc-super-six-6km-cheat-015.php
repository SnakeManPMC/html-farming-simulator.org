<!DOCTYPE html>
<html lang="en">
<head>
<title>Start From Zero PMC Super Six 6km Cheat PMC Farming Simulator 22 Stories</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Start From Zero PMC Super Six 6km Cheat PMC Farming Simulator 22 Stories">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<h1>Start From Zero PMC Super Six 6km Cheat PMC Farming Simulator 22 Stories</h1>
<p>PMC Farming Simulator 22 (FS22) Stories</p>
</header>

<section>
	<h2>Background</h2>

<p>
Please read background information from <a href="stories-start-from-zero-pmc-super-six-6km-cheat.php">FS22 Stories Start From Zero PMC Super Six 6km Cheat Homepage</a> which explains few things if you're first time reader.
</p>

	<h2>2023-01-25 Terrain Upgrade v0.3.1</h2>

<p>
2023-01-25T07:02:00Z New farming day has started, today is PMC Super Six 6km v0.3.1 terrain upgrade day. I honestly have no plans on actual progress for this savegame, its just to upgrade the terrain to see if anything breaks, porting an old savegame is always a tricky proposition.
</p>

<p>
First took backup of fs22 savegames directories, just in case I goof up something.
</p>

<p>
savegame3 is Start From Zero. 2022-12-24T15:19:00Z
</p>

<p>
savegame11 is autodrive MASTER. 2023-01-02T20:26:00Z, this means I have to copy autodrive configs from master to start from zero dir.
</p>

<p>
Start From Zero savegame has iconik's refill station placeables by the dealership, there are also diesel fuel refuel placeable. Then another mess is the terrain's own farm yard placeables which are saved in placeables.xml config file. Its hard to decipher what is your own purchase and what is terrain XML stuff. Then on top of that you have the mess of me selling some of the meridian flat bottom bin farm yard placeables. One more diesel fuel refuel placeable by F11 farm yard.
</p>

<p>
I opened savegame3/placeables.xml config file, searched for "placeable modName" which lists all the placeables.
</p>

<p>
modName="FS22_72x150ShedPack" and modName="FS22_90x200ShedPack" are TPF vehicle shed mods.
</p>

<p>
modName="FS22_FuelBuyStation" is the diesel fuel refill placeable.
</p>

<p>
modName="Iconik_RefillStations_FS22" is iconik's stuff.
</p>

<p>
All the in-game savegame purchased placeables are bottom of the savegame3/placeables.xml config file, dunno if this is always the case and if so, then it would be quite easy to port over your purchased placeables.
</p>

<p>
Overall lesson learned: do not sell terrain XML config placeables while playing, it just makes porting savegames to a new terrain version really complex.
</p>

<p>
Okay so time to get into business, I have backup of savegame so if anything breaks I can just revert back to how it was. Going to first fs22 in-game sell off the broken herbicide tank, modName="FS22_HerbicideTank" which gives error on downloadable content menu.
</p>

<p>
2023-01-25T07:58:00Z Sold herbicide refill tank. Saved game and exited fs22.
</p>

<p>
Removed FS22_HerbicideTank.zip from mod symlink creation and deleted the zip itself. Now the next time I'll update symlinks the broken mod is not there any more. Also deleted FS22_CustomMissionRewards.zip from mod dir and it was already deleted from symlink bat.
</p>

<p>
Changed gameSettings.xml to point into C:/FS22.Mods/PMC/ dir, created new farm-manager savegame1/ dir in-game.
</p>

<p>
2023-01-25T08:09:00Z BTW at this point I'm really tired, only slept 4hrs 30min last night so now I'm paying the price, eyes are closing and need to proceed slowly double checking all decisions/edits not to make mistakes. Hopefully wont have to go take a nap <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Copied autodrive, courseplay, guidancesteering etc XML configs from the savegame3/ to savegame1/ dir (autodrive came from savegame11/ which is autodrive MASTER dir). Now in theory I should have everything except placeables setup.
</p>

<p>
But then I realized that need to sell at least one of the farma unia grain bin silos, hmm I need to go read my previous Start From Zero story entry (which "to you" is just above, but "to me" its on editing computer right now, cant see it hehe), so had to get up and go read it, maybe copy-paste important info fro shared text file.
</p>

<p>
"just sell all placeables, deduct 347.7k from budget, save game and then port it over to new terrain version with just career, vehicles and farms/fields dunno what else, no placeables stuff." uh ALL placeables... well dang, that doesn't really help me because its dumb to sell the perfectly good fert/seed/diesel refill points, I think only ONE farma unia is conflicting with terran XML placeable stuff. I need to go back to in-game and investigate which one is the conflicting one, hmm perhaps I just sell that off and then do the money deducting and be done with it, hmm.
</p>

<p>
Investigated some and oh my things just got easy, at fs22 in-game you can re-name placeables, so the conflicting farm unia bin silo is called "FY F43 W" and I found that string from placeables.xml, so I could just delete it from there if necessary. However in this case I'm going to sell it off in-game so saves me the trouble of editing placeables.xml and also getting proper amount of money back.
</p>

<p>
2023-01-25T08:34:00Z Sold farm unia and its extension silos off from whatever farm yard that is called, saved game and exited. Now in theory savegame3/placeables.xml and brand new savegame1/placeables.xml should be compatible, no overlapping if I copy-paste my own purchases. In theory. I am so tired, zoned out, feels like even a simple task or decision is extremely difficult or complex. I am afraid the fight against not going to take a nap is a losing one...
</p>

<p>
Savegame porting tip; always name even your basic and obvious placeables you purchase, this way you can always tell what is what from savegameX/placeables.xml config file without checking in-game. Its a great way to keep track of your own stuff.
</p>

<p>
Copy-pasted the above mentioned stuff to a new savegame, then launched fs22 for another in-game check... while fighting to stay awake. Also it doesn't help concentration that I'm listening and sometimes chatting in twitch live stream (reclininggamer). So replaced gameSettings.xml with PMC mod-set again and started fs22 for that in-game check.
</p>

<p>
2023-01-25T09:00:00Z In-game check complete, everything looks to be normal, no errors in the log and all other placeables are in except the one I sold off (obviously), no conflicts that I can see.
</p>

<p>
2023-01-25T09:15:00Z Had to go take a nap, I just cant keep my eyes open and concentrate, this would not be enjoyable farming, its not even enjoyable savegame porting / configuring fs22 like this, so yeah time for a nap...
</p>

<p>
2023-01-25T11:25:00Z Yawn nap time over, okay lets get this savegame going.
</p>

<p>
Well the nap did me good I'm now refreshed, but also I'm completely lost of what happened previously where am I now in the savegame porting progress, this feels like waking up in the morning heh. But I assume the porting is over, what I recall from two hours ago is that its done, hmm hmm.
</p>

<p>
Loded new mod-set, meaning PMC Super Six 6km v0.3.1 and old savegame, realized that when I sold the farma unia grain bin silos I got some money out of them which is not yet on the new ported savegame.
</p>

<p>
Updated couple of mods from giants modhub. Moved modSettings/FS22_ProductionInspector/savegame3/productionInspector.xml to savegame1/ dir as it gave an error. Was in-game already everything looked pretty good, but then stomach was growling...
</p>

<p>
2023-01-25T12:08:00Z Gotta grab some chow...
</p>

<p>
2023-01-25T12:38:00Z Feeding time is over, now lets get this savegame going, for real.
</p>

<p>
Finally started fs22 and loaded PMC Super Six 6km v0.3.1 Start From Zero up, this savegame now has 161hrs 28min on it. Lets hope my ported savegame works <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2023-01-25T12:58:00Z And still spent some time in twitch, seems like the whole universe is keeping me from getting to farm today, half a day gone before I get savegame up and running <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Used gsMoneyAdd -347700 to remove that previous terrain versions savegame placeable purchase mess. Now I'm more or less accurate with placeables and budget which is 15.541m oh my. That is a lot of money, A LOT of money... <img src="../images/smileys/icon_surprised.gif" alt="Smiley :o" loading="lazy">
</p>

<p>
But then again, even though this is "small" or lets say medium size terrain of 6.1km size, I bet those farmlands cost huge amounts. This have to be tested. I saved game, then proceeded to buy as much land as there is money left, well ran out of money roughly half way buying the whole terrain, more or less. So yeah 15 million is not enough to buy even half of this terrain, yikes.
</p>

<a href="screenshots/Start-From-Zero-PMC-Super-Six-6km-2023-01-25T1306.jpg" target="_blank"><img src="screenshots/thumbs/Start-From-Zero-PMC-Super-Six-6km-2023-01-25T1306.jpg" class="terrainimg" loading="lazy" alt="Start From Zero PMC Super Six 6km CHEAT Farming Simulator 22 Screenshot"></a>

<p>
And I would not want to end up with that many fields and only just over 100 grand of cash to be used in product and emergency purchases.
</p>

<p>
Exited game without saving, then reloaded savegame back up again so I'm in starting point with budget now 15.541m.
</p>

<p>
2023-01-25T13:10:00Z Savegame loaded back up, I'm staring at the mapview and... dunno what to do, unfortunately I clearly don't have the mad obsession farming feeling right now like I did few days ago when playing on last PMC terrain Start From Zero compatibility test where I could not stop farming until snoozing off in front of the computer <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
A large goal in PMC Super Six 6km Start From Zero would be to buy all the remaining farmland and after that harvest all the fields, however this goal is extremely long, its not about question of hours oh no, not even days its more like "could I finish this savegame by end of the next WEEK?" <img src="../images/smileys/icon_surprised.gif" alt="Smiley :o" loading="lazy">
</p>

<p>
I think my last harvest season took two days, one to seed and another to harvest, or was it even longer I cant remember.
</p>

<p>
Since my last game-play I have learned how to use autodrive and courseplay to harvest a field, with single harvester you don't need to drive grain cart anymore as autodrive does it for you. However would this work with multiple harvesters and two grain carts, I don't know but would be surprising if it would, there will be traffic jams and huge mess when that many brainless scripted vehicles hit the field at the same time. Now you could of course harvest four fields at the same time, one harvester and grain cart per field... that could work and technically it would be the same harvesting speed, wheter you use 4 * lexion 8900s on one field at the time, or 4 * one per field. Same time used, more or less.
</p>

<p>
Also I quickly was considering adding crop rotation mod to this and to start actually do other crops as well next to just spamming soybeans year after year. Farming Simulator should be fun about farming with heavy vehicles, but in my fs22 career its been all soybeans, at least in FS19 you get to enjoy proper Seasons mod with crop rotation and seasonal weather temperatures etc.
</p>

<p>
2023-01-25T13:25:00Z This sucks, I'm sitting here with brand new fancy terrain version ready to play... but just cant get started, cant decide what to do, hmm hmm. My mind keeps wondering of trying something new in fs22 that continuing this same soybeans harvest just kind of feel, dumb, well not dumb but boring, its just so boring <img src="../images/smileys/icon_confused.gif" alt="Smiley :?" loading="lazy">
</p>

<p>
Maybe if I put in crop rotation and GtX seed cleaner mods that would spice up this savegame and in my fs22 experience a little bit in general. I could also try to learn AGI pack augers and farm grain bin silos, they had seed cleaner option there too, hmm, hmm.
</p>

<p>
Browsed through AGI stuff in-game, yeah they have seed treating auger pipe but their grain bin silos kind of suck, there is only one big drive through one 5.4m liters. Hmm.
</p>

<p>
2023-01-25T13:43:00Z Saved game and shutdown fs22. I am going to download and test crop rotation mod on <a href="../19/pmc-farm-lab.php">PMC Farm Lab</a> terrain, along with GtX's seed cleaner even though it should work fine, I've used it before.
</p>

<p>
Continue reading <a href="stories-start-from-zero-pmc-super-six-6km-cheat-016.php">next page</a>, <a href="stories-start-from-zero-pmc-super-six-6km-cheat.php">Start From Zero PMC Super Six 6km Cheat Home</a>, go back to <a href="stories-start-from-zero-pmc-super-six-6km-cheat-014.php">previous page</a>.
</p>

<p>
<a href="stories.php" class="button">Stories FS22</a>
<a href="../index.php" class="button">PMC Farming Index</a>
</p>

</section>

<footer>
<p>
<i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i>
</p>
<?php include("../include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
