<!DOCTYPE html>
<html lang="en">
<head>
<title>Start From Zero Farming Simulator - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Start From Zero Farming Simulator - PMC Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<h1>Start From Zero Farming Simulator - PMC Farming</h1>
</header>

<section>
	<h2>Start From Zero Farming Simulator</h2>

<p>
"Start From Zero" is a "game-mode" where you start with absolutely nothing. 0 farmland, 0 vehicles, 0 money, 0 loan. You start by doing contracts (FS17 called them "Missions") to make money and grow your farm.
</p>

<p>
See PMC Farming stories for <a href="../17/stories.php">Farming Simulator 17 Stories</a>, <a href="stories.php">Farming Simulator 19 Stories</a> and  <a href="../22/stories.php">Farming Simulator 22 Stories</a>. This page was initially written as PMC Tactical Forum topic: <a href="https://www.pmctactical.org/forum/viewtopic.php?f=76&t=22739" target="_blank">Start From Zero - Getting Started and Rules</a>.
</p>


	<h2>Rules Of Start From Zero Savegame</h2>

<p>
<b>No AutoDrive, Courseplay or GuidanceSteering (GPS) before you own a vehicle and farm land.</b>
</p>

<p>
Rules:
</p>

<ul>
<li>no guidancesteering (GPS) before you own a vehicle and farm land</li>
<li>no courseplay before you own a vehicle and farm land</li>
<li>no autodrive before you own a vehicle and farm land</li>
<li>no bank loan, ever</li>
<li>no field flipping</li>
<li>no money making placeables (as they can be abused for silly amount of money)</li>
<li>simply no cheating money or field work</li>
</ul>

<p>
You win Start From Zero savegame by buying all the farmland (with fields on them) and harvesting every single field. Only exception for harvested fields would be if terrain has buggy fields which cant be reached or other such issues.
</p>


	<h2>HOWTO Create Start From Zero Savegame</h2>

<p>
2022-04-27T09:34:00Z
</p>

<ul>
<li>have debug console enabled in game.xml settings <a href="../17/settings.php">FS17 Settings</a></li>
<li>start a new career in farm manager mode</li>
<li>pay off bank loan</li>
<li>debug console give command: gsCheatMoney -1000000</li>
</ul>

<p>
Now your savegame has 0 vehicles, 0 bank loan and 0 money.
</p>

<p>
No need to edit savegame XML files, all you need is debug console enabled and farm manager game-mode. Farm Manager game-mode references FS19 and FS22 default games (cant recall if FS17 had this career option). Note that some terrains might have buggy configuration which adds vehicles and equipment into farm manager or start from scratch game-modes, then you have to sell those off or remove them from savegame XML files, but hopefully this is the exception as everyone should play on bug free terrains.
</p>

<p>
(NOTE: I think the loan was 250k, if its not then you need to adjust above numbers).
</p>

<p>
If you are picky, this method leaves the -250k bank loan payment into your daily stats until enough days pass so its discarded, this means nothing but dunno, maybe it bothers some people. To avoid -250k stats is to edit farms.xml and remove/zero-out the loan there.
</p>


	<h2>HOWTO Play Start From Zero Savegame</h2>

<p>
2022-04-27T09:46:00Z
</p>

<p>
HOWTO get lucrative fertilizing <a href="https://www.farming-simulator.org/19/contracts.php">contracts</a>? With FS19 v1.7.1 Seasons (3 day seasons) it seems you first have to do cultivating / ploughing contracts, then seeding contracts and only after that you get the fertilizing contracts.
</p>

<p>
<a href="https://www.farming-simulator.com/mod.php?mod_id=187736" target="_blank">FS19 Better Contracts</a> and <a href="https://github.com/Mmtrx/FS22_BetterContracts" target="_blank">FS22 Better Contracts</a> mods are essential for enjoyable farmsim contracting work. If you don't have this mod then get it now. Note that while for FS19 and FS22 it sounds like this is the same mod from same developer, it is not, however for end user (that's you and me), its the same mod, same functionality and purpose.
</p>

<p>
You could be time accelerating for in-game YEARS without much changes in the field stages by AI, only way to get things moving is to do the cultivating and seeding contracts yourself to "open up" fields for fertilizing and harvesting contracts.
</p>

<p>
Don't take several harvesting contracts, they do not work if stacked, only take ONE harvesting contract at a time. If you take multiple harvesting contracts then selling / delivery point gets overwritten, all the contracts use the same delivery point. While you do the contracts they all get completed out of whack, you can finish an field which still says 50% or less complete, or contract can get finished even though you haven't even started harvesting yet, you have no idea which field did what to whom. Just make it simple and only take ONE harvesting contract at a time.
</p>

<p>
2024-02-01T03:50:00Z
</p>

<p>
When you create Start From Zero savegame using FS19 Seasons mod, first you have to do cultivating and plowing contracts as there are nothing else available. Tested with PMC Iowa Garden City 8km v1.1.11 and Seasons v1.3.2 today, using 24 day season config.
</p>

<p>
In the beginning you have zero (0) money, so you have to do cultivating, plowing, weeding or harvest contracts to get some money. As said above at career savegame creation there will be only cultivating and plowing contracts available, so you basically have to start with cultivating contracts. Scan for new contracts and take one which has the most powerful tractor and widest / fastest cultivator, there is no need to take borrowed vehicles if they are very slow and perhaps even small / narrow width too.
</p>

<p>
Once you have done cultivating contracts, then seeding contracts appear. By this time you have money from the cultivating contracts so you can take the first seeding contract and buy some seed.
</p>

<p>
Then finally after seed is on the ground and you time accelerate at least one night for fields to germinate, you'll start to get fertilizing contracts. Depending on how many contracts you endured up until now, you could lease your own bredal k165 spreader or rubicon 9000, this will speed up fertilizing contract completion, instead of using the borrowed vehicles. Sometimes though you'll get rubicon 9000 as borrowed vehicle which is very nice and you could save leasing money by taking this contract with borrowed vehicle. Note that borrowed bredal k165 does not have extensions and increased spreader width discs.
</p>

<p>
Once you accumulate money, you could buy your own bredal k165 with extensions, this would save you the trouble hustling solid fertilizer in and out of borrowed vehicles. And once you reach that amount of budget that you can buy a tractor, well that makes doing contracts even easier as you don't have to borrow vehicles anymore, but please note according to Start From Zero rules, you still cannot use automation tools at this point.
</p>

<p>
Once you buy your first land then you are allowed to use autodrive, courseplay and guidancesteering (GPS). Note that depending on the terrain configuration you're playing at, you might find some very cheap farmland to buy like few thousands so getting this land is no issue. Its is fully according to the rules if you buy some dirt cheap farmland lot, even if it doesn't have field on it, rules say; vehicles + LAND, it doesn't say anything about fields <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Once you have bought land and vehicles, then you get to use automation tools which really makes doing fertilizing contracts easy. Oddly though, from this point on its going to be a long road before you get to start planting and harvesting your own first field. Of course depending on how poor equipment you are okay to work with. Now you can start to use autodrive to get vehicles into contract fields and courseplay to do contracts using borrowed vehicles, remember to disable courseplay vehicle repair so you don't pay for AI farmers vehicle costs.
</p>

<p>
That is how you get Start From Zero off the ground <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2024-02-16T02:36:00Z
</p>

<p>
Tips to prevent frustration or simple mistakes.
</p>

<p>
Never start an fertilizing contract unless you have enough of fertilizer product. How can you tell if you have enough? Well unfortunately that only comes from experience, but if you're a newer player, just have sprayer/spreader tank full and several fertilizer tanks/pallets in reserve.
</p>

<p>
Never accept fertilizing contract on fields where you cannot see the ground fertilization status (ground texture) because growing crop. If you cannot see where you have already fertilized then any such field work becomes extremely frustrating. This obviously applies to the early phase of Start From Zero where you are not allowed to use automation tools like Courseplay or GPS.
</p>

<p>
See also <a href="https://www.pmctactical.org/forum/viewtopic.php?p=188974#p188974" target="_blank">PMC Tactical Forum "New Start From Zero savegame progression idea" post</a> for some good tips how to grow your farm.
</p>

</section>

<footer>
<p><a href="../index.php" class="button">PMC Farming Simulator root page</a></p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("../include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
