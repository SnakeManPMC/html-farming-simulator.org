<!DOCTYPE html>
<html lang="en">
<head>
<title>Farming Simulator Mods - PMC Tactical</title>
<LINK href="css.css" rel=stylesheet type="text/css">
<META name="description" content="Farming Simulator Mods - PMC Tactical">
<META name="keywords" content="Farming Simulator Mods, PMC, Tactical">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("include/google-analytics.php"); ?>

</head>
<body>

<header>
<!-- google ads -->
<?php include("include/google-ads.php"); ?>
<h1><b>PMC Tactical Farming Simulator Mods</b></h1>
</header>

<section>
	<h2>Mods</h2>

<p>
See <a href="settings.php">settings</a> for reference. In-game downloaded / updated mods are located in this directory:
</p>
<pre>
pending_downloads\
</pre>

<p>Place normally (manually) downloaded mods in <b>ZIP files</b> at this directory:
</p>
<pre>
mods\
</pre>

<p>Do not use period "." or hypen "-" in the file name, for example "file-v1.0.zip" does not work, it must be "file_v1_0.zip" instead.
</p>

<p>You can add and remove these mod zip files while game is running. Just reload savegame and choose new mods or start a new career.
</p>

	<h2>PMC Essential Mods</h2>

<p>These names are from the in-game mods menu, zip name is meaningless as everyone can name them. I try to name them according to the in-game name.
</p>

<ul>
<li>4Real Module 01 - Crop destruction, FS17_ForRealModule01_CropDestruction</li>
<li>4Real Module 02 - Tire Dirt, FS17_ForRealModule02_TireDirt</li>
<li>4Real Module 03 - Ground Response, FS17_ForRealModule03_GroundResponse</li>
<li>Compass (FS17_DCK_Compass)</li>
<li>Courseplay</li>
<li>Free Camera</li>
<li>FS17_AnimalTableManners</li>
<li>Glance</li>
<li>GPS mod</li>
<li>Manual Fast Forward, ZZZ_fastForward</li>
<li>Placeable Refill Tanks, FS17_placeableRefillStation</li>
<li>VehicleGroupsSwitcher - 'VeGS', FS17_DCK_VehicleGroupsSwitcher</li>
</ul>

<div class="wrapper_mod_vehicles">
	<h2>General Mods</h2>

<div class="mod_release_Vehicle">
<h2>Money Tool, FS17_MoneyTool</h2>
<p>
Works OK! Will be definitely useful when testing those new DLC and mods which have expensive stuff. Also Creator Tools has one billion money cheat feature.
</p>
</div>

<div class="mod_release_Vehicle">
<h2>GPS-Mod, ZZZ_GPS</h2>

<p>
CTRL-KEYPAD-ZERO on/off<br>
CTRL-KEYPAD-COMMA display on/off<br>
CTRL-W active/passive
<br><br>
<a href="https://www.youtube.com/watch?v=LogtkWJ7M04" target="_blank">GPS Mod Video Tutorial</a>
</p>

<p>
Quite essential mod indeed, must have for driving across fields systematically. Creates GPS_config.xml file into mods dir, not important so no need to backup.
</p>
</div>

<div class="mod_release_Vehicle">
<h2>Brantner DPW 18000</h2>
<p>
Bale trailer, I assume it should work with any other goods too.
</p>
</div>

<div class="mod_release_Vehicle">
<h2>Crop Destruction FS17_ForRealModule01_CropDestruction</h2>

<p>
Must have for realism, you cannot drive your vehicle through crop field in real life without destroying the crops under your tires and depending on the vehicle floor height maybe even everything covering the vehicle area.
</p>
</div>

<div class="mod_release_Vehicle">
<h2>Disable Vehicle Camera Collision, disableVehicleCameraCollision</h2>

<p>
Not sure what this does exactly?
</p>
</div>

<div class="mod_release_Vehicle">
<h2>Better Fuel Usage, FS17_FuelUsageDisplay</h2>

<p>
This is named wrong, it states it creates better fuel usage... but its only displaying it, heh. Shows liters per hour counter and adds colored indicator for the KPH circle which is bit confusing but I guess OK.
</p>
</div>

<div class="mod_release_Vehicle">
<h2>Placeable Refill Tanks, FS17_placeableRefillStation</h2>

<p>
Very nice for refilling seeders as these can be placed anywhere on the map and does not require refilling themselves, it only costs money when you refill from these. The only problem with this mod is that the refill range is extremely short, you have to park your refilled seeder / fertilizer absolutely right next to the placeable.
</p>
</div>

<div class="mod_release_Vehicle">
<h2>Creator Tools, FS17_CreatorTools</h2>

<p>
v1.5.1 by TyKonKet. From modDesc: Creator Tools. Creator Tools allow you to do magics with HUD, camera and much more.
</p>

<p>
By default G key brings up menu where you can setup various other settings. However this is the default key for changing tool selection, which is bad. You must go to options and reconfigure the keyboard shortcuts when using this mod.
</p>

<p>
Disable UI (or "HUD" as it calls it) is essential for making cool screenshots.
</p>

<p>
Change Time scale to very high. Default game is up to 120x but this goes up to 15360x, whoah. However the fast forward time accelleration mod is nicer than this feature.
</p>

<p>
Additional features: player speed increase, camera height / zoom (but this is limited for player walking, so you are blocked by objects geometry etc) and vehicle dirt change aka instant wash.
</p>

<p>
Courseplay and Hud Compass mods conflicts with this, well not really <i>conflicts</i> but they still stays on the screen (courseplays notifications) when UI is disabled.
</p>

<p>
If you have issues with Creator Tools conflicting with Glance mod, you can edit the currently saved creator tools settings from savegame dir file called creatorTools.xml but obviously this requires game savegame reload so you might as well go and change the keybinds for creator tools or glance mod instead.
</p>

<p>
<a href="https://www.farming-simulator.com/mod.php?lang=en&country=us&mod_id=69742&title=fs2017" target="_blank">Modhub</a>
</p>
</div>

<div class="mod_release_Vehicle">
<h2>Hud Compass, FS17_HudCompass</h2>

<p>
Nice compass into the bottom right corner vehicle display. When you are not in vehicle the compass is still displayed. However if you use Creator Tools then it cannot disable this compass when disabling UI (like few other UI elements).
</p>

<p>
I don't like it when it interferes with creator tools hide UI option.
</p>
</div>

<div class="mod_release_Vehicle">
<h2>Follow Me, FS17_DCK_FollowMe</h2>

<p>
Makes one vehicle follow another. Works nicely except on those rear wheel steering vehicles like many harvesters, they start to zig and zag back and forth rendering this mod useless for them. I'd say use courseplay instead.
</p>

<p>
Default control keys:
<br><br>
'Myself' is the current vehicle<br>
RIGHT-CTRL-F = Toggle 'FollowMe' on/off<br>
RIGHT-CTRL-H = Wait/Resume<br>
RIGHT-CTRL-W/S = Distance increase/decrease<br>
RIGHT-CTRL-A/D = Offset left/right adjust<br>
RIGHT-CTRL-X = Offset reset or hold for invert
<br><br>
'Behind' the followed vehicle<br>
RIGHT-SHIFT-F = Disengage 'FollowMe'<br>
RIGHT-SHIFT-H = Wait/Resume<br>
RIGHT-SHIFT-W/S = Distance increase/decrease<br>
RIGHT-SHIFT-A/D = Offset left/right adjust<br>
RIGHT-SHIFT-X = Offset reset or hold for invert
</p>
</div>

<div class="mod_release_Vehicle">
<h2>VehicleGroupsSwitcher - 'VeGS', FS17_DCK_VehicleGroupsSwitcher</h2>

<p>
CTRL-NUMBER moves you to a vehicle group by that number, additional CTRL-NUMBER key presses loop you through the vehicles in that group. You can have ten groups numbered 1 through 9 and 0. Essential mod to have.
</p>

<p>
Use CTRL-E to bring up the menu and then up and down arrows to move between different groups, left and right arrows to move position inside the current group.
</p>

<p>
Naming groups: When in edit-mode, press and hold the modifier key and group number until the chat entry field appears, which shows the current group name. Type in your new group name, though do note that the text will be filtered for bad words, what the chat usually does.
</p>
</div>

<div class="mod_release_Vehicle">
<h2>Chopped Straw For Harvesters, FS17_choppedStraw</h2>

<p>
Not sure what this does actually, it makes harvested crap out some yellowish cover for the field and at the same time it acts as one stage of fertilizer. However the cover makes it impossible to see further seeding as you cannot see light colored soil turn dark colored. This is moot mod if you use one stage of fertilizer and seeder that also fertilizes.
</p>
</div>

<div class="mod_release_Vehicle">
<h2>aboveGroundPoolDeck</h2>

<p>
Small pool deck. Map prefab, only used in maps with Giants editor.
</p>
</div>

<div class="mod_release_Vehicle">
<h2>benchDrill</h2>

<p>
Bench drill. Map prefab, only used in maps with Giants editor.
</p>
</div>

<div class="mod_release_Vehicle">
<h2>benches</h2>

<p>
2 Park Benches (Dynamic Objects). Map prefab, only used in maps with Giants editor.
</p>
</div>

<div class="mod_release_Vehicle">
<h2>controlTower</h2>

<p>
Control Tower. Map prefab, only used in maps with Giants editor.
</p>
</div>

<div class="mod_release_Vehicle">
<h2>flashlight</h2>

<p>
A decorative flashlight (dynamic object) which turns on automatically at night. Map prefab, only used in maps with Giants editor.
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_AnimalNotifications</h2>

<p>
Works nice, announces animal notifications on the top right corner header. For example it announces when you have chicken eggs available and when you need to feed your pigs. Although this does not get disabled with Creator Tools hide user interface feature, same as hud compass mod, what a shame.
</p>

<p>
This mod is not required if you use Glance mod as it displays the same information with more detail. Only thing Glance do not show is when new animal is born, but that is kind of info you really dont need.
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_AnimalTableManners</h2>

<p>
Disables the need for clean up after animals which is quite tedious task. Some might call this a cheat, but its no more cheat than the robot vacuumer mod, so there you go. This is excellent mod, one less tedious grinding task removed from the game.
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_Bankofhagenstedt</h2>

<p>
User interface for banking info, also allows you to purchase and even lease(!) fields. Honestly if you are not much of a loan taker and leasing the fields (which is extremely cheaty) doesn't interest you, then this mod is not useful, yeah kind of obvious but I thought the nice GUI would have something else useful than just handling a loan and leasing or buying fields.
</p>

<p>
Also on those start from scratch savegames where you edit economy.xml file to set all fields ownership to false, bank of hagenstedt somehow resets the ownership from the actual terrain config file ignoring the savegame dir contents. Just good to know I guess.
</p>

<p>
Default keyboard shortcuts: END open the GUI, close from the button in the GUI.
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_DCK_Compass</h2>

<p>
Vehicle orientation compass values as small digits like "NW 315" into top center of the HUD, very nice mod doesnt ruin the user interface and gets the job done. MY standard mods in 2018.
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_Placeable_refillPoint</h2>

<p>
Not tested yet, dunno how this differs from placeable refill STATION heh.
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_repairVehicles</h2>

<p>
When you walk up next to your vehicle this mod offers you option to repair it instantly, it costs <del>but still you dont have to drive the vehicle to the repair shop.</del> Repairing a vehicle will remove its excessive and stupid daily running costs. <del>However, you can repair your vehicles any time you walk by them to have any point using this mod.</del> Unfortunately on newer versions of this mod it was changed that you can only repair vehicle at the repair shop... who wants to drive slow vehicle half across the terrain just to fake repair it? I don't get it...
</p>
</div>

<div class="mod_release_Vehicle">
<h2>Terrains.Required_Mods\FS17_Station_de_lavage_kaercherHDS815E_V4</h2>

<p>
possible required addon for Central Ohio map?
</p>
</div>

<div class="mod_release_Vehicle">
<h2>Terrains.Required_Mods\seven_bar_gate_four_meter_galvanized_style_2</h2>

<p>
possible required mod for MissouriRiverBottoms?
</p>
</div>

<div class="mod_release_Vehicle">
<h2>Glance</h2>

<p>
By Decker_MMIV. Status text of useful data in your screen.
</p>

<p>
<i>Glance</i> is an attempt at making a more configurable and less screen occupying <i>notification-and-status utility</i>, similar to the <i>Inspector</i> mod.
</p>

<p>
First you must <b>turn off</b> the Helpbox (default key: F1), to be able to see the Glance notifications. The first time you ever run Glance, it will create a default configuration-file called <i>Glance_Config.XML</i> in a <i>modsSettings</i> folder.
</p>

<p>
ALT-M more notifications<br>
ALT-L less notifications
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_FlieglFlatbed_UAL</h2>

<p>
Trailer with auto load feature. Can auto load bales (square and round) and pallets, maybe some other objects too not have tested those yet.
</p>
</div>

<div class="mod_release_Vehicle">
<h2>ZZZ_CommodityPrices</h2>

<p>
<b>ZZZ_CommodityPrices.zip crashes the game v1.5.3.1 when exiting!</b> Otherwise seems to be working fine :(
</p>

<p>
v0.1.5 by Warnat0r. From modDesc: Commodity Prices. Displays historical information on prices of the commodities available in Farming Simulator 17 in a convenient window.
</p>

<p>
Shows all highest commodity market prices on screen with transparent background and the display is movable. Also various display modes available. Very good mod to quickly check market price fluctuations and keeping eye when the best prices hit for the commodity you want to sell.
</p>

<p>
Shortcuts:<br>
END on / off<br>
END-INSERT change sorted column<br>
END-DEL normal and bullshit prices<br>
END-PGNUP increase font size<br>
END-PGNDOWN decrease font size<br>
END-CTRL-PGNUP increase opacity<br>
END-CTRL-PGNDOWN decrease opacity<br>
END-ARROW-KEYS change position in large steps<br>
END-SHIFT-ARROW-KEYS change position in small steps
</p>
</div>

<div class="mod_release_Vehicle">
<h2>Manual Fast Forward, ZZZ_fastForward</h2>

<p>
Time accelleration or time scale, speeding up time. It uses simple keyboard shortcut to increase game speed to 12,000x (default unmodded is only up to 120x). Time accelleration only works outside vehicles, which limits you accidentally activating it.
</p>
</div>

<div class="mod_release_Vehicle">
<h2>JohnDeere6RPack</h2>

<p>
Horrible 3rd person camera field of view, haha.
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_JD_2623_50FT.zip</h2>

<p>
v2.0 by benniebullock. From modDesc: 2623 50FT Disc. Farming Simulator 17 - JD 2623 50FT Disc.
</p>

<p>
Credits.txt: Original FS 15 version: author-BennieJoe with Thank you to : Justin Bartsch , Bcbuhler ,and Justin Horkman. FS 17 conversion and testing: CJWilksy. This is a conversion to FS 17 of the John Deere 2623 50ft disc. Special thanks to BennieJoe for his permission to release this version. Disc is setup as a plow and has been tweaked so that it pulls more evenly and the outer wings do not pop up out of the ground when plowing except occasionally when flexing as a by-product of that animation. At purchase, you have the option of buying a rear hitch for $700. All credit goes to BennieJoe for giving us this fantastic mod.
</p>

<p>
This version gives cube.dds missing error.
</p>

<p>
John Deere 2623VT 50ft Flex Disk plough and cultivator. Ploughs first then cultivates, so kind of like if you lift the implement up it leaves ploughing mark on the field. Has a little performance problem if you zoom too close.
</p>

<p>
This is actual real world implement, check out <a href="https://www.youtube.com/watch?v=_OlijEGupy0" target="_blank">Polen Implement field tests a new 2017 John Deere 2623 Disk</a> video. HOWEVER it is not used for plowing, so it is in fact unrealistic as in FS17 mod, use genuine plow instead of this mod if you prefer realism, not to mention do not use this as its broken (missing texture).
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_JD2623_50ft_disk_ModLandNet.zip</h2>

<p>
v1.0 by SavageMkII. From modDesc: John Deere 2623VT Flex Disc. GIANTS Software, Bennie Bullock w/ Justin Bartsch , Bcbuhler ,and Justin Horkman, FS17 Convert: SavageMkII.
</p>

<p>
Downloaded from modland.net as its so obviously splattered all over the file name, those credits stealing punks, never ever tag someone else work with your website name. But hey, thats the garbage farmsim community for you.
</p>

<p>
Seems to be the same as above but converted from FS15 by different guy.
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_JD2623Pack.zip</h2>

<p>
<b>Note: Does NOT work with courseplay.</b> See <a href="https://github.com/Courseplay/courseplay/issues/2248" target="_blank">Courseplay impropely detects front and back of tool</a> for details.
</p>

<p>
v1.0 by Lindbejb (Lindbejb Modding). From modDesc: 2623 Disc Pack.
</p>

<p>
Credits.txt says model, texture and scripting by Lindbejb (LBJ Modding).
</p>

<p>
LBJModding version comes with 30ft and 50ft implements and is listed under <b>cultivators</b>, is it then not a plough? If so, then this version would be realistic, but then again why not use Big Bud DLC flexicoil or just Seed Hawk instead which are crazy wide?
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_BetterMinimap.zip</h2>

<p>
Better Minimap by jDanek allows you to see crop types, soil composition etc on the 9 key minimap. The downside though... is that you cannot turn it off with 9 key anymore, you can do it from cumbersome menu which defeats the purpose of quick 9 key tap. This is a great mod if you want to <b>always see minimap</b> with selectable displays, if the always on bothers you... then steer clear of this one.
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_RealerNight.zip</h2>

<p>
Real Nights Mod by Danielmodding. This turns those "glow in the dark" nights into... nights, like a dark night as they should be. Your vehicle lights only show the immediate surroundings but then its almost pitch black dark. This mod fixes many terrains that have this night lighting issue. Very nice mod.
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_AdjustUpKeep.zip</h2>

<p>
v1.0 by Miki. From modDesc: Vehicle Upkeep Adjustment. Mod adjusts the rate at which vehicles calculate upkeep cost. Basically it makes upkeep maintenance to LOWER cost.
</p>

<p>
<a href="https://www.farming-simulator.com/mod.php?lang=en&country=us&mod_id=85034&title=fs2017" target="_blank">Modhub</a>
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_Coolamon_Chaser_Bins_45T_60T.zip</h2>

<p>
v1.0 by JavierZzS. From modDesc: Coolamon Chaser Bins 45T and 60T. Coolamon Chaser Bins all have modern design into the structure and the look, making them strong, durable whilst still looking great. They will stand out and yet still perform year after year.
</p>

<p>
<a href="https://www.farming-simulator.com/mod.php?lang=en&country=us&mod_id=81092&title=fs2017" target="_blank">Modhub</a>
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_Coolamon_Mother_Bins</h2>

<p>
v1.0 by JavierZzS. From modDesc: Coolamon 150T Mother Bins. Mother bins,also known as "field bins",offer the farmer a convenient storage location while harvesting. Although they both hold and unload grain in the same manner,mother bins are not designed to be used as chaser bins.
</p>

<p>
The 200T model is bit plasticy looking, too much shine to it, doesn't look like its metal. The 200T mother bin bounces in corn field, its somehow bugged and also the texture does that "LSD shapes flicker" (difficult to explain), hopefully there will be fixed version. Better to use the Bromar MBT 150 which works great.
</p>

<p>
<a href="https://www.farming-simulator.com/mod.php?lang=en&country=us&mod_id=81097&title=fs2017" target="_blank">Modhub</a>
</p>
</div>

<div class="mod_release_Vehicle">
<h2>Bromar MBT 150, FS17Contest_Bromar_MBT150</h2>

<p>
<a href="http://www.bromarengineering.com.au/products/mother-bin" target="_blank">Realistic but insane auger wagon or "chaser bin"</a>, it holds incredible 185,000 liters of crop and supports all kinds of crops even some custom made ones. Tractor with 209 horsepower seems to pull <i>empty</i> wagon just fine.
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_EggCollector.zip</h2>

<p>
v1.0 by stefan1997. From modDesc: EggCollector. The Egg Collector is a freely placeable object that places the eggs of your chicken coop directly into the backpack. Important: The Egg Collector should be placed as close as possible near the chicken coop. To be found under the category Placeables.
</p>

<p>
<a href="https://www.farming-simulator.com/mod.php?lang=en&country=us&mod_id=103619&title=fs2017" target="_blank">Modhub</a>. Works nicely. I always felt the picking of eggs was kind of... well, lame, so this mod comes handy to get rid of that annoying regular visit to the chicken coop. Also good to note that I dont think I've ever sold any eggs, its just not my thing, can't imagine getting more than few dollars out of it :)
</p>

<p>
Only annoying thing is that every time there is new egg layed, eggcollector properly collects it... but that causes the egg icon to appear on the screen, that will get old real fast :(
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_hoseSystem.zip</h2>

<p>
v1.1 by Wopster and Xentro. From modDesc: Hose System. With a liquid manure hose you are able to pump a liquid fill type from source to target. If applicable you could extend the liquid manure hose to reach larger ranges.
</p>

<p>
Required addons: <a href="https://www.farming-simulator.com/mod.php?lang=en&country=ca&mod_id=104823&title=fs2017" target="_blank">Zunhammer SKE 18.5 PUD</a>, FS17_flieglSTF25000VC_HS.zip, FS17_garantFieldContainer_HS.zip. <a href="https://www.farming-simulator.com/mod.php?lang=en&country=ca&mod_id=91735" target="_blank">found in modhub</a>.
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_flieglSTF25000VC_HS.zip</h2>

<p>
v1.1 by Wopster. From modDesc: Fliegl STF 25000 VC. Fliegl STF 25000 VC with HoseSystem support<br>
Price: 53,000 eur<br>
Capacity: 25,000 liter<br>
Working width: 15 m<br>
Maintenance: 40 eur / day
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_garantFieldContainer_HS.zip</h2>

<p>
v1.1 by Wopster. From modDesc: Kotte FRC. Kotte FRC with HoseSystem support<br>
Price: 15,000 eur<br>
Capacity: 55,000 liter<br>
Maintenance: 10 eur / day
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_zunhammerSKE18_HS.zip</h2>

<p>
v1.1 by Wopster. From modDesc: Zunhammer SKE 18.5 PUD. Zunhammer SKE 18.5 PUD with HoseSystem support<br>
Price: 48,000 eur<br>
Capacity: 18,500 liter<br>
Working width: 14.8 meter<br>
Maintenance: 80 eur / day
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_itFliegl_PC.zip</h2>

<p>
v1.2 by LS-Modsource/Modder Rolf. From modDesc: Fliegl Hookliftbarrel. This barel is available in 2 different versions. It is able of loading fuel of the Fuel Station, so you can fill up the vehicles you want to or put it on your farm as a mobile fuel Station. More over the second Version can be used for lor transporting Liquid Fertilizer, Digestate, Water and Manure, These can be loaded on the loading Points for These type of liquids and you can also serve the helper while he is busy working.<br>
Capacity: 20,000 liter<br>
Price: 19,800 eur<br>
Maintenance: 25 eur / Day
</p>

<p>
<a href="https://www.farming-simulator.com/mod.php?lang=en&country=us&mod_id=94797&title=fs2017" target="_blank">Modhub</a>
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_JohnDeere6R_FBM.zip</h2>

<p>
v1.0.0.1 by Puma [FBM]. From modDesc: JohnDeere 6170R / 6210R.
</p>

<p>
<a href="https://www.farming-simulator.com/mod.php?lang=en&country=us&mod_id=81329&title=fs2017" target="_blank">Modhub</a>
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_John_Deere_S670.zip</h2>

<p>
v1.0 by Julian11 / JavierZzS / Vanquish081. From modDesc: John Deere S670. Active Ground Adjustment System for automatic adjustment of fan speed and screen box settings. DynaFlo Plus screen box for up to 5% more productivity. Active concave insulation to increase productivity in difficult conditions of the Cultivation. Telematics harvester. Its technological advantage.
</p>

<p>
<a href="https://www.farming-simulator.com/mod.php?lang=en&country=us&mod_id=97951&title=fs2017" target="_blank">Modhub</a>
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_Joskin_Q_BIG_32000.zip</h2>

<p>
v1.0 by Blacksheep Modding. From modDesc: Joskin Q-BIG Liner 32000TRS. Ideal for refueling and transport. This mod includes: 1 Joskin Q-BIG slurry Container, 1 Joskin Q-BIG water Trailer, 1 Joskin Q-BIG sprayer Tank<br>
Capacity: 32,000 Liters<br>
Option with Color green Edition
</p>

<p>
<a href="https://www.farming-simulator.com/mod.php?lang=en&country=us&mod_id=76911&title=fs2017" target="_blank">Modhub</a>
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_manualAttaching.zip</h2>

<p>
v1.3 by Wopster. From modDesc: Manual Attaching. This mod enforces you to attach/detach tools and trailers manually. A manual is available <a href="https://github.com/stijnwop/manualAttaching/blob/master/_modding/Manual%20Attaching.pdf" target="_blank">github.com/stijnwop</a>.
</p>

<p>
<a href="https://www.farming-simulator.com/mod.php?lang=en&country=us&mod_id=67536&title=fs2017" target="_blank">Modhub</a>. Works very nicely, I think this will be my new essential mod :)
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_placeableFuelStation.zip</h2>

<p>
v1.0.1 by Mario / DtP. From modDesc: placeable fuelstation. With this gas station it is possible to refuel the vehicles. Visit Us on: www.der-ls-treffpunkt.de
</p>

<p>
<a href="https://www.farming-simulator.com/mod.php?lang=en&country=us&mod_id=55432&title=fs2017" target="_blank">Modhub</a>
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_WindTurbinePlaceable.zip</h2>

<p>
v1.0 by BocieK17. From modDesc: Wind Turbine 110m Placeable. placeable Wind Turbine to Farming Simulator 17<br>
brand - LIZARD<br>
price - 1,650,000$<br>
daily upkeep - 70$<br>
income per hour - 2,200$<br>
capacity - 30kW
</p>

<p>
<a href="https://www.farming-simulator.com/mod.php?lang=en&country=us&mod_id=97998&title=fs2017" target="_blank">Modhub</a>
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_DifficultiesImprove.zip</h2>

<p>
v1.2 by TyKonKet. From modDesc: Difficulties Improve. Increase the utility of the difficulties system (Easy, Normal, Hard), by adding and editing some differences between the three game modes. The main changes are listed in the table on the image, other minor value changes are:
</p>
<ul>
<li>Vehicles price drop</li>
<li>Livestock daily upkeep</li>
<li>Livestock dirting speed</li>
<li>Livestock birth rate</li>
</ul>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_JD_DB90.zip</h2>

<p>
v1.0 by NAFEM. From modDesc: John Deere DB90. John Deere DB90.
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_kotteUniversalPack.zip</h2>

<p>
v1.0.6 by Farmer_Andy. From modDesc: Kotte Universal Pack. Kotte Universal Pack. Kotte Universal barrel. Mobile storage tank for storing various liquids. Small Universal tank for transport of various liquids. Tank trailer for transporting fuel, machines can be refueled directly at the tank trailer. Kotte Universal Truck (Water can be transported, but not filled with water triggers).
</p>
</div>

<div class="mod_release_Vehicle">
<h2>JD7030SeriesV22FS17.zip</h2>

<p>
v2.2 by Sotillo/Rysiu77/Templear. From modDesc: John Deere 7030 Serie.
</p>
</div>

<div class="mod_release_Vehicle">
<h2>JohnDeere6RPack.zip</h2>

<p>
v1.0.1 by BJR-Modding. From modDesc: John Deere 6R Pack. This pack contains the complete John Deere 6R series.
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_dogfaceRootStorage.zip</h2>

<p>
v1.0.1 by Dogface. From modDesc: Root Crop Storage. This storage building is for Beets and Potatoes. This object functions like the stock Silo or Hayloft, but for root crops. The building and conveyor belts are authentic to how root crops are actually stored.
</p>
<ul>
<li>working lights, inside and rear</li>
<li>working output conveyor</li>
<li>shovel offload</li>
<li>storage cost zero</li>
</ul>
<p>
Price: 90,000 eur<br>
Capacity: 300,000 liters<br>
Maintenance: 40 eur / day
<br><br>
To insure proper loading and unloading, building should be placed on mostly level ground.
</p>
</div>

<div class="mod_release_Vehicle">
<h2>Flood Light Trailer, FS17_lizardFloodLightTrailer</h2>

<p>
v1.0 by GIANTS Software. From modDesc: Flood Light Trailer. Transportable flood lights help you illuminate various places at night.
<br><br>
Price: 8,700 eur<br>
Maintenance: 20 eur / day
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_fendtHarvesterPackage</h2>

<p>
v1.0.2 by GIANTS Software. From modDesc: Fendt Harvester Pack. Contains: Fendt 6275, Fendt 9490X, Fendt FreeFlow 25FT, Fendt PowerFlow 35FT.
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_flieglSTF25000VC</h2>

<p>
v1.0 by GIANTS Software. From modDesc: Fliegl STF 25000 VC. Auger Wagon. Manure Spreader.
Price: 53,000 eur<br>
Capacity: 25,000 liters<br>
Working width: 15 meter<br>
Maintenance: 40 eur / day
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_flieglTMK266Bull</h2>

<p>
v1.0 by GIANTS Software. From modDesc: Fliegl TMK 266 Bull.<br>
Price: 37,000 eur<br>
Capacity: 32,000 liters<br>
Maintenance: 10 eur / day
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_flieglVFW10600</h2>

<p>
v1.0 by GIANTS Software. From modDesc: Fliegl VFW 10600.<br>
Price: 18,000 eur<br>
Max. working speed: 17 kph<br>
Required power: 85 hp<br>
Working width: 10.4 meter<br>
Capacity: 10,600 liters<br>
Maintenance: 40 eur / day
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_FuelProof_Package</h2>

<p>
v1.0 by Xentro. From modDesc: Fuel Proof Package #1. The Fuel Proof bowsers are some of the thoughest out there with their increased flexibility and efficiency for a wide range of applications, including agriculture, forestry, construction and industrial.
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_GameExtension</h2>

<p>
v0.4 by Xentro. From modDesc: Game Extension. Extends the game with more settings.
</p>

<p>
This mod has the "Farmers Touch" thing that when you walk into a field it pops up a small dialog on bottom right corner that tells you the crop type and growth stage. You can then press default C key to add marker to the current field which shows the dialog all the time, this is great for example if you are waiting impatiently some fields crop to grow so you can start harvest. Now with this dialog you can constantly see the growth status and can jump into harvesting right away when it hits 100% - very nice.
</p>

<p>
Farmers Touch works on that part of the field you are on, if crop growth stage changes on other part of the field, the dialog shows your location or the location where you left the marker. Not that is an issue because who would harvest field with half fully grown anyways heh.
</p>

<p>
Allows you to enable/disable the stupid round crosshair when not in vehicle. Can skip night time with 100x time acceleration between 2100hrs and 0600hrs which is nice... except the nine is too early and six way too late for me, too bad you cannot configure the start and end values (oh well for me its fast forward mod with CTRL-R still the best night time or crop growth skip).
</p>

<p>
The thing I dont like about Game Extension is the flashing crop name on your HUD vehicle status panel, I damn well know what crop is what icon I don't need the text to block my view of the actual liters in my vehicle.
</p>

<p>
Creates two xml config files in the game settings file directory.
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_holmerPack</h2>

<p>
v1.0.1 by GIANTS Software. From modDesc: Holmer Pack. Contains: Terra Variant, RB 35 sugar beet tank, GB 25 grain tank, Bergmann TSWA19, Zunhammer TV, Zunhammer Vibro.
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_horschTitan34UW</h2>

<p>
v1.0 by GIANTS Software. From modDesc: Horsch Titan 34 UW.<br>
Price: 64,000 eur<br>
Capacity: 34,000 liters<br>
Maintenance: 110 eur / day
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_itRunnerPack</h2>

<p>
v1.0.3 by GIANTS Software. From modDesc: ITRunner Pack. Hooklift.
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_koeckerlingTrio300</h2>

<p>
v1.0 by GIANTS Software. From modDesc: Koeckerling Trio 300 M.<br>
Price: 9,200 eur<br>
Max. working speed: 17 kph<br>
Required power: 100 hp<br>
Working width: 3 meter<br>
Maintenance: 5 eur / day
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_kotteFRP145</h2>

<p>
v1.0.2.1 by pfreek (fuqsbow.com). From modDesc: Kotte FRP 145.<br>
Price: 2,500 eur<br>
Weight: 1,200 kg<br>
Maintenance: 5 eur / day
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_krampeBigBody900</h2>

<p>
v1.0 by GIANTS Software. From modDesc: Krampe Big Body 900.<br>
Price: 57,000 eur<br>
Capacity: 46,900 liters<br>
Maintenance: 30 eur / day
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_kroneBigXPack</h2>

<p>
v1.0.1 by GIANTS Software. From modDesc: Krone BiG X 1100 Pack. Contains: Krone BiG X 1100 & Krone EasyCollect 1053.
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_kuhnPrimor3570</h2>

<p>
v1.0 by GIANTS Software. From modDesc: Kuhn Primor 3570.<br>
Price: 19,000 eur<br>
Required power: 70 hp<br>
Maintenance: 50 eur / day
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_kuhnSitera3000</h2>

<p>
v1.0 by GIANTS Software. From modDesc: Kuhn Sitera 3000.<br>
Price: 8,300 eur<br>
Max. working speed: 15 kph<br>
Required power: 120 hp<br>
Capacity: 780 liters<br>
Working width: 3 meter<br>
Maintenance: 30 eur / day
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_kuhnVB2190</h2>

<p>
v1.0.1 by GIANTS Software. From modDesc: Kuhn VB 2190.<br>
Price: 56,000 eur<br>
Max. working speed: 20 kph<br>
Required power: 68 hp<br>
Capacity: 4,000 liters<br>
Maintenance: 110 eur / day
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_kvernelandAB85</h2>

<p>
v1.0 by GIANTS Software. From modDesc: Kverneland AB 85.<br>
Price: 12,000 eur<br>
Max. working speed: 15 kph<br>
Required power: 92 hp<br>
Working width: 1.9 meter<br>
Maintenance: 10 eur / day
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_Lenkung</h2>

<p>
v1.2 by Atze. From modDesc: Better steering. This mod builds itself into all vehicles and slows the steering behavior. The steering turns slower and won't be that unrealistic anymore.
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_LightAddon</h2>

<p>
v2.0.1 by Grisu118 - Vertexdezign. From modDesc: LightAddon. Add Support for Strobe- and Daydrivelights, also reset the turnsignals.
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_lizardRoadRage</h2>

<p>
v1.0 by GIANTS Software. From modDesc: Lizard Road Rage.<br>
Price: 89,000 eur<br>
Max. power: 306 hp<br>
Max. speed: 155 kph<br>
Maintenance: 70 eur / day
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_LowerAnimalPrices</h2>

<p>
v1.0.1 by vortex1988 (Team FSI Modding). From modDesc: Lower Animal Prices. Changes animal prices in the animal shop:<br>
Cow Price: 2500<br>
Sheep Price: 500<br>
Pig Price: 750
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_marshallBC32</h2>

<p>
v1.0 by GIANTS Software. From modDesc: Marshall BC/32.<br>
Price: 11,000 eur<br>
Maintenance: 5 eur / day
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_marshallQM16</h2>

<p>
v1.0 by GIANTS Software. From modDesc: Marshall QM/16.<br>
Price: 28,000 eur<br>
Capacity: 21,700 liters<br>
Maintenance: 10 eur / day
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_marshallST1800</h2>

<p>
v1.0 by GIANTS Software. From modDesc: Marshall ST1800.<br>
Price: 14,000 eur<br>
Max. working speed: 17 kph<br>
Required power: 85 hp<br>
Working width: 11 meter<br>
Capacity: 8,000 liters<br>
Maintenance: 35 eur / day
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_newHollandBalerPack</h2>

<p>
v1.0.1 by GIANTS Software. From modDesc: New Holland Baler Pack. Contains: New Holland BigBaler 340 & New Holland Roll-Belt 460.
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_newHollandLM742</h2>

<p>
v1.0.1 by GIANTS Software. From modDesc: New Holland LM 7.42.<br>
Price: 105,000 eur<br>
Max. power: 143 hp<br>
Max. speed: 40 kph<br>
Maintenance: 180 eur / day
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_newHollandW170C</h2>

<p>
v1.0 by GIANTS Software. From modDesc: New Holland W170C.<br>
Price: 165,000 eur<br>
Max. power: 195 hp<br>
Max. speed: 40 kph<br>
Maintenance: 210 eur / day
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_shedPackage</h2>

<p>
v1.0.2 by Agrarteam Franken. From modDesc: Shed package. Three different sheds, including:<br>
Grain storage:<br>
Price: 30,000 eur<br>
Size: 16 x 34 meter<br>
Maintenance: 10 eur / day
<br><br>
Small vehicle shelter:<br>
Price: 25,000 eur<br>
Size: 20 x 21 meter<br>
Maintenance: 10 eur / day
<br><br>
Medium vehicle shelter:<br>
Price: 42,000 eur<br>
Size: 20 x 29 meter
Maintenance: 10 eur / day
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_JD_9030.zip</h2>

<p>
v4.0 by JHHG Modding FS17. From modDesc: John Deere 9030.
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_No_HUD.zip</h2>

<p>
v1.0 by Kinddross. From modDesc: No HUD MOD. HUD: Show / Hide. Default Keys: LEFT-ALT + RIGHT-CTRL.
</p>

<p>
<a href="https://www.farming-simulator.com/mod.php?lang=en&country=sk&mod_id=91135&title=fs2017" target="_blank">Modhub</a>. Note, Creator Tools does the same thing.
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_Big_Brute_425_BsM.zip</h2>

<p>
v1.0 by BlackSheep Modding. From modDesc: Big Brute 425/100. Price: 195,000 eur<br>
Max. power: 425 hp<br>
Max. speed: 60 kph<br>
Capacity: 6,200 liter<br>
Maintenance: 295 eur / day
</p>

<p>
It overall is nice as everything works and is good quality... except sounds, oh my it sounds horrible. When you decelerate it sounds like a old ladys Singer sewing machine, too bad I had high hopes for this mod but noway I'm going to play with this one.
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_JD7R_2014_AGO.zip</h2>

<p>
v1.0.0.1 by Ago-Modding. From modDesc: John Deere 7R Series 2014. John Deere 7R Series tractor 2014, 169 to 228 kW (230 to 310 hp) 97/68EC with Intelligent Power Management. Equipped with new PowerTech PSS engines, from 6.8 - 9.0 l. Mod, main features:
</p>
<ul>
<li>Power from 230 to 310 Hp</li>
<li>European version</li>
<li>Wide choice of wheels and ballast, including front standard and Ez-Ballast</li>
<li>Zuidberg Track system</li>
<li>Optional front linkage</li>
<li>Optional rear linkage Forest loader</li>
<li>Forest protection option</li>
<li>Bonnet protection option</li>
<li>Fully animated</li>
<li>Compatible to DynamicHoses</li>
<li>Gearbox integrated and compatible</li>
<li>Real sound</li>
<li>Real Map PDA</li>
<li>IC control of the latest generation, (also works outdoors and before getting on the tractor)</li>
<li>Front loader option</li>
</ul>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_RealGPSMod.zip</h2>

<p>
v1.0 by Martin Fab?k (LoogleCZ). From modDesc: Real GPS Mod. Ingame GPS map with custom settings. This is support mod. Specialization also needs to be inserted in vehicle. If you're modder who wants to insert Real GPS mod into you vehicle, please follow guide in README.txt found in mod's root directory. For further details see GitHub repository.
</p>
</div>

<div class="mod_release_Vehicle">
<h2>John Deere S690i</h2>

<p>
v1.0 by Julian11 / JavierZzS. From modDesc: John Deere S690i. Mother bins,also known as "field bins",offer the farmer a convenient storage location while harvesting. Although they both hold and unload grain in the same manner,mother bins are not designed to be used as chaser bins.
</p>

<p>
Umm why does combine harvester modDesc read about coolamon monther bins? Hmm :)
</p>

<p>
<a href="https://www.modhoster.com/mods/john-deere-s690i--13" target="_blank">Modhoster.com</a> (2018-10-14 bad external download link)
</p>
</div>

<div class="mod_release_Vehicle">
<h2>John Deere 995</h2>

<p>
v1.0 by Steenkamp Modding. From modDesc: John Deere 995. John Deere 995 7 furrow plow.<br>
Price: 30,000 eur<br>
Maintenance: 100 eur / day<br>
Working width: 4m<br>
Required power: 250 hp<br>
Max. working speed: 15 kph
</p>

<p>
FS17_JohnDeere_995.zip <a href="https://www.farming-simulator.com/mod.php?lang=en&country=us&mod_id=88606&title=fs2017" target="_blank">Modhub</a>
</p>
</div>

<div class="mod_release_Vehicle">
<h2>John Deere Mower Pack</h2>

<p>
v1.0 by KMN Modding/Vnsfdg2/Zombek. From modDesc: John Deere Mower Pack.<br>
R990R<br>
Price: 73,755 eur<br>
Maintenance: 42 eur / day<br>
Max. working speed: 22 kph<br>
Required power: 190 hp<br>
Working width: 9.9m
<br><br>
F350R<br>
Price: 30,579 eur<br>
Maintenance: 11 eur / day<br>
Max. working speed: 22 kph<br>
Required power: 90 hp<br>
Working width: 3.5m
</p>

<p>
 <a href="https://www.farming-simulator.com/mod.php?lang=en&country=us&mod_id=87972&title=fs2017" target="_blank">Modhub</a>
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_starkIndustriesSCT635B</h2>

<p>
v1.0.0.1 by GIANTS Software. From modDesc: Stark Industries SCT 635 B.<br>
Price: 25,000 eur<br>
Max. working speed: 15 kph<br>
Working width: 4.5 m<br>
Maintenance: 45 eur / day
</p>

<p>
<a href="https://www.farming-simulator.com/mod.php?lang=en&country=us&mod_id=49740&title=fs2017" target="_blank">Modhub</a>
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_treeSet</h2>

<p>
v1.0 by GIANTS Software. From prefabDesc: Tree Set. This set consists of all available trees of FS17.
</p>

<p>
<a href="http://www.farming-simulator.com/mod.php?lang=en&country=us&mod_id=72703" target="_blank">Modhub</a>
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_vaederstadRapid300</h2>

<p>
v1.0 by GIANTS Software. From modDesc: Vaederstad Rapid 300C.<br>
Price: 35,000 eur<br>
Max. working speed: 20 kph<br>
Required power: 130 hp<br>
Capacity: 3,150 l
Working width: 3 m<br>
Maintenance: 90 eur / day
</p>

<p>
<a href="https://www.farming-simulator.com/mod.php?lang=en&country=us&mod_id=57361&title=fs2017" target="_blank">Modhub</a>
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_vaederstadTopDown500</h2>

<p>
v1.0.0.1 by GIANTS Software. From modDesc: Vaederstad Top Down 500.<br>
Price: 24,000 eur<br>
Max. working speed: 17 kph<br>
Required power: 250 hp<br>
Working width: 5 m<br>
Maintenance: 5 eur / day
</p>

<p>
<a href="https://www.farming-simulator.com/mod.php?country=us&lang=en&mod_id=50214&title=fs2017" target="_blank">Modhub</a>
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_valtraTSeriesWREdition</h2>

<p>
v1.0 by GIANTS Software. From modDesc: T234 WR Edition. T234 Series WR Edition.<br>
Price: 295,000 eur<br>
Max. power: 250 hp<br>
Max. speed: 130 kph<br>
Maintenance: 400 eur / day
</p>

<p>
<a href="https://www.farming-simulator.com/mod.php?lang=en&country=se&mod_id=61257" target="_blank">Modhub</a>
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_well</h2>

<p>
v1.0 by GIANTS Software. From prefabDesc: Fountain. At this well you can remove water.
</p>

<p>
<a href="https://www.farming-simulator.com/mod.php?lang=en&country=no&mod_id=72702&title=fs2017" target="_blank">Modhub</a>
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_zetorCrystal12045</h2>

<p>
v1.0 by GIANTS Software. From modDesc: Zetor Crystal 12045.<br>
Price: 65,000 eur<br>
Max. power: 75 hp<br>
Max. speed: 40 kph<br>
Maintenance: 90 eur / day
</p>

<p>
<a href="https://www.farming-simulator.com/mod.php?lang=en&country=cz&mod_id=76994" target="_blank">Modhub</a>
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_prefab_gasZylinder.zip</h2>

<p>
v1.0 by GIANTS Software. From prefabDesc: Gas cylinder. Gas can be stored in a gas canister. industrial.
</p>

<p>
<a href="http://www.farming-simulator.com/mod.php?lang=en&country=si&campaignIndex=6&mod_id=96765" target="_blank">Modhub</a>
</p>
</div>

<div class="mod_release_Vehicle">
<h2>HudHiderbyClodls17v101</h2>

<p>
v1.01 by CLOD. From modDesc: HUD hider LS17 v1. Show-hide HUD by Clod.
</p>

<p>
Looking at modDesc apparently this mod can disable specific parts of the GUI or all of it, kind of neat if you want to choose what to show like only vehicle info.
</p>

<p>
<a href="" target="_blank">Modhub</a>
</p>
</div>

<div class="mod_release_Vehicle">
<h2>lookoutTower</h2>

<p>
v1.0 by GIANTS Software. From prefabDesc: Lookout Tower. Building.
</p>

<p>
<a href="https://www.farming-simulator.com/mod.php?lang=en&country=us&mod_id=61915&title=fs2017" target="_blank">Modhub</a>
</p>
</div>

<div class="mod_release_Vehicle">
<h2>stones</h2>

<p>
v1.0 by GIANTS Software. From prefabDesc: 7 Large Stones. Natural.
</p>

<p>
<a href="https://www.farming-simulator.com/mod.php?lang=en&country=us&mod_id=62204&title=fs2017" target="_blank">Modhub</a>
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_flatbedTrailer</h2>

<p>
v1.0 by Consi, Vnsfdg2. From modDesc: Flatbed Trailer.<br>
Price: 1,200 eur<br>
Working lenght: 6 m<br>
Maintenance: 5 eur / day
</p>

<p>
<a href="https://www.farming-simulator.com/mod.php?lang=en&country=es&mod_id=71533&title=fs2017" target="_blank">Modhub</a>
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_slow_hall_placeable</h2>

<p>
v1.0 by slowtide63. From modDesc: Slow Config Hall. This placeable hall is free configurable ingame. It is possible to switch between different walls and doors, if you hold key "n" or "m". Every second changes the wall if you press the key. The triggers for this are at the middle of the walls which you want to change. (First you should use the help-box to find the triggers. After a short time this shouldn't be neccesary anymore.) All doors can be opened as usual with mouse buttons. At the four corners of the hall you can switch between green and red wall-colour, also with the keys "n" and "m". This hall can be uses as a shelter, a closed garage, or as a storage for bulk. If you want to tip the bulk inside the hall be sure that you aren't to close to the walls because the bulk could fall through the walls.
</p>

<p>
<a href="https://www.farming-simulator.com/mod.php?lang=fr&country=be&mod_id=77675" target="_blank">Modhub</a>
</p>
</div>

<div class="mod_release_Vehicle">
<h2>Inspect17</h2>

<p>
v1.2 by Inspect17. From modDesc: Inspect17. Displays a list of all vehicles in use, either by players or by helpers. It also shows the status of vehicles fill level.
</p>

<p>
Unless I'm mistaken this mod has been superceded by Glance? Also judging by modhoster.com comments, does this even work?
</p>

<p>
<a href="https://www.modhoster.com/mods/inspect17" target="_blank">Modhoster.com</a>
</p>
</div>

<div class="mod_release_Vehicle">
<h2>Terrains.Required_Mods\AnimationMapTrigger</h2>

<p>
v1.0.4 by Xentro. From modDesc: AnimationMapTrigger.
</p>

<p>
This is for terrain developers only, required addon for a terrain.
</p>

<p>
<a href="http://www.modhub.us/farming-simulator-2017-mods/8774-fs17-animation-map-trigger-v1-1-1-1/" target="_blank">Modhub.us</a>
</p>
</div>

<div class="mod_release_Vehicle">
<h2>Terrains.Required_Mods\FS17_choppedStraw</h2>

<p>
v1.0.0.4 by webalizer. From modDesc: Chopped Straw For Harvesters. With activated chopper the straw is visibly left on the field. By cultivating or ploughing it may fertilize your field. This can be controlled by the map creator.
</p>

<p>
The map has to be prepared for this mod. SDK is included.
</p>

<p>
<a href="https://www.farming-simulator.com/mod.php?lang=en&country=us&mod_id=56564" target="_blank">Modhub</a>
</p>
</div>

<div class="mod_release_Vehicle">
<h2>Terrains.Required_Mods\LS17_Raffinerie_placeable</h2>

<p>
v3.0 by Auwgl. From modDesc: Refinery with salestrigger. Refinery for the production of biodiesel. The plant processes 10000 liters of rapeseed per hour. 66% of organic diesel, 22% of fermentation residues and 22% of feed are used as products Of the raw materials delivered. BIO diesel is dispensed at the dispensing station in front of the BIO oil tanks. Fermentation residues are also left on the left Buildings. The food was a little bit older, but The cows do not see it.
</p>

<p>
<a href="https://www.modhoster.com/mods/bio-diesel-raffinerie-platzierbar" target="_blank">Modhub</a>
</p>
</div>

<div class="mod_release_Vehicle">
<h2>Terrains.Required_Mods\vrataTrigger</h2>

<p>
v2.0 by Defender. From modDesc: VrataTrigger. Gate trigger.
</p>
</div>

<div class="mod_release_Vehicle">
<h2>Terrains.Required_Mods\FoerderBandOffRoad</h2>

<p>
v2.2 by Marhu. From modDesc: ConveyorBelt OffRoad. The conveyor belt can attach to the tractor, you can also tractor without a switch on / off. It is suitable for overloading all fruit varieties also silos can thus effectively empty.
</p>
</div>

<div class="mod_release_Vehicle">
<h2>B_Krone_Beastpack_1100_by_Bullgore.zip</h2>

<p>
v12.0b by Bullgore,Upsidedown,Biedens,xyzspain,Repi,Johnny1980. From modDesc: Krone BigX BeastPack. With the BiG X 1100 KRONE offers currently the most powerful country in the world machine. But when KRONE Forage convinced not only the engine performance, but also the almost proverbial chopping. This is based on the innovative feature of the BiG X. *** by Bullgore ***
</p>
</div>

<div class="mod_release_Vehicle">
<h2>Terrains.Required_Mods\KroneBigX128k</h2>

<p>
v1.0 by niklasgamejoker. From modDesc: Krone BigX 1100 mit 128000l puffer.
</p>
</div>

<div class="mod_release_Vehicle">
<h2>Terrains.Required_Mods\LS2015_KrampeSB3060Multifruit</h2>

<p>
v3.0 by Gnescher. From modDesc: krampeSB3060 with clutch.
</p>
</div>

<div class="mod_release_Vehicle">
<h2>Terrains.Required_Mods\zzzAutoCombine</h2>

<p>
v4.0.1 by Mogli. From modDesc: Auto Combine.
</p>
</div>

<div class="mod_release_Vehicle">
<h2>Terrains.Required_Mods\GuelleMistMod</h2>

<p>
v3.0 by TMT. From modDesc: Slury, manure and agricultural lime Mod. Slury, manure and agricultural lime Mod with switchable area limitation. Maps must be prepard.
</p>
</div>

<div class="mod_release_Vehicle">
<h2>Terrains.Required_Mods\aaa_LS17_ccmmod</h2>

<p>
v1.0 by derelky. From modDesc: CCM Mod. 
</p>
</div>

<div class="mod_release_Vehicle">
<h2>Terrains.Required_Mods\LS17_cornmill</h2>

<p>
v2.0 by GIANTS Software/derelky. From modDesc: Cornmill. A Cornmill is used to milled corn to get CCM(Corn-Cob-Mix)
</p>
</div>

<div class="mod_release_Vehicle">
<h2>Terrains.Required_Mods\Trailer_BA1428</h2>

<p>
v1.0 by Getsome2030 Converted to 17 by Keith Skin by Hobgoblin. From modDesc: BA1428. AB Texel Trailer with clutch.
</p>
</div>

<div class="mod_release_Vehicle">
<h2>Terrains.Required_Mods\Trailer_HFE117_hobbsfarm</h2>

<p>
v1.0 by Getsome2030 Converted to 17 by Keith skin by Hobgoblin. From modDesc: HFE117. Hobbs Farm Estate HFE117.
</p>
</div>

<div class="mod_release_Vehicle">
<h2>Terrains.Required_Mods\Truck_peterbilt_ABTexel_17</h2>

<p>
v1.0 by winston9587. From modDesc: Peterbilt AB Texel. AB Texel Peterbilt.
</p>
</div>

<div class="mod_release_Vehicle">
<h2>Terrains.Required_Mods\Truck_peterbilt_HFE_17</h2>

<p>
v1.0 by winston9587. From modDesc: HFE Peterbilt.
</p>

<p>
Descriptions, once again, makes just absolutely zero sense ...
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_Guellepack.zip</h2>

<p>
v7.0.0.2 by monteur1. From modDesc: FS17 Slurrypack. 
</p>

<p>
<a href="https://www.farming-simulator.com/mod.php?lang=en&country=us&mod_id=89464&title=fs2017" target="_blank">Modhub</a>
</p>
</div>

<div class="mod_release_Vehicle">
<h2>GearboxAddon</h2>

<p>
<a href="https://github.com/Mogli12/GearboxAddon" target="_blank">github.com/Mogli12/GearboxAddon</a>
</p>
</div>

<div class="mod_release_Vehicle">
<h2>Semi-Tipper 70000/6</h2>

<p>
v1.0.0.3 by Blacksheep Modding. From modDesc: Semi-Tipper 70000/6. Long trailer of the brand BsM Trailer.<br>
Price: 69,000 eur<br>
Maintenance: 75 eur / day<br>
Capacity: 70,000 liter<br>
Option with OVERSIZE LOAD: 150 eur<br>
Colors option: 500 eur<br>
Colors Base option: 500 eur<br>
Option wheels: 600 eur
</p>

<p>
<a href="https://www.farming-simulator.com/mod.php?lang=en&country=us&mod_id=74397&title=fs2017" target="_blank">Modhub</a>
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_JohnDeere_9R.zip</h2>

<p>
v1.0 by KMN Modding/TechMod. From modDesc: John Deere 9R.
</p>

<p>
<a href="https://www.modhoster.com/mods/john-deere-9r--2" target="_blank">Modhoster.com</a>
</p>
</div>

<div class="mod_release_Vehicle">
<h2>JohnDeere_9870_0965.zip</h2>

<p>
v1.1 by Reaper9111. From modDesc: John Deere 9870 sts.
</p>

<p>
modDesc has some references to CaseIHAxialFlow7130 so not sure if this is some mocked up model and not real new john deere model made from scratch?
</p>

<p>
<a href="http://www.modhub.us/farming-simulator-2015-mods/9352-john-deere-9870-sts/" target="_blank">Modhub.us</a>
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FS17_TankTechPack.zip</h2>

<p>
v by . From modDesc: 
</p>

<p>
Excellent mod, if you have to haul heavy loads of liquids this is the mod to use. Nice model and texture, nice feature for the hose and digital readout for amount of liquid, capacity 40,000 liter per tank and you can dolly ea link them up. Just a great mod.
</p>

<p>
<a href="" target="_blank">Modhub</a>
</p>
</div>

<div class="mod_release_Vehicle">
<h2>FarmingTablet</h2>

<p>
v2.3.2 by kevink98/Eribus. From modDesc: FarmingTablet.
</p>

<p>
<a href="https://www.farming-simulator.com/mod.php?lang=en&country=us&mod_id=84643" target="_blank">Modhub</a>
</p>
</div>

<div class="mod_release_Vehicle">
<h2>Big M500</h2>

<p>
v1.2.0.1 by GtX (LS-MODCOMPANY). From modDesc: 2017 Big M500. The Big M 500 - 2017 Edition. Some people will remember this fantastic piece of equipment from Farming Simulator 2013. The 2017 edition has a brand new cabin design, improved parts including operating blades and components. One of the largest mowers available with a cutting width of 13.2 meters and the ability to create a windrow this mower is the perfect choice for any large field work.<br>
Price: 280,000 eur<br>
Upkeep: 320 eur / day.<br>
Original Model: Giants Software (FS2013)<br>
Fully reconditioned with a newly designed cabin added. The Krone Big M 500 will make light work of your grass fields. With an impressive cutting width of 13.2 meters this is one of the largest Self Propelled Mower available.
</p>

<p>
FS17_BigM500_2017Edition.zip <a href="https://www.farming-simulator.com/mod.php?lang=en&country=us&mod_id=92677" target="_blank">Modhub</a>
</p>
</div>

<div class="mod_release_Vehicle">
<h2>John Deere R4045</h2>

<p>
v1.0 by KMN Modding. From modDesc: John Deere R4045.
</p>

<p>
Default keyboard shortcuts: right CTRL is I_CONTROL_SWITCH, keypad 7 is Booms, keypad 8 is Boom_Left and keypad 9 is Boom_Right.
</p>

<p>
FS17_JohnDeere_R4045.zip <a href="https://www.modland.net/farming-simulator-2017-mods/implements-tools/john-deere-r4045-by-kmn-modding.html" target="_blank">Modland.net</a>
</p>
</div>

<div class="mod_release_Vehicle">
<h2>John Deere 2710</h2>

<p>
v1.0 by Lindbejb (Lindbejb Modding). From modDesc: 2720 Combination Ripper.
</p>

<p>
FS17_JD2720.zip <a href="https://www.modhoster.com/mods/john-deere-2720--2" target="_blank">Modhoster.com</a>
</p>
</div>

<div class="mod_release_Vehicle">
<h2>John Deere 2100</h2>

<p>
v1.1 by Shun7171, Reaper 9111, Rafiki. From modDesc: John Deere 2100.
</p>

<p>
JohnDeere_2100.zip, External bad download <a href="https://www.modhoster.com/mods/john-deere-2100" target="_blank">Modhoster.com</a>
</p>
</div>

<div class="mod_release_Vehicle">
<h2>John Deere 1770</h2>

<p>
v1.0 by abel663/Abel Modding. From modDesc: John Deere 1770 Planter.
</p>

<p>
FS17_JohnDeere1770.zip <a href="http://www.modhub.us/farming-simulator-2017-mods/john-deere-1770-planter-1/" target="_blank">Modhub.us</a>
</p>
</div>

<div class="mod_release_Vehicle">
<h2>John Deere 2730</h2>

<p>
v1.0 by Lindbejb (Lindbejb Modding). From modDesc: 2730 Combination Ripper. FS17 conversion: KMN Modding
</p>

<p>
FS17_JohnDeere_2730.zip <a href="http://www.modhub.us/farming-simulator-2017-mods/plow-john-deere-2730-2017/" target="_blank">Modhub.us</a>
</p>
</div>

<!-- category vehicles -->
</div>

<!--
<div class="mod_release_Vehicle">
<h2></h2>

<p>
v by . From modDesc: 
</p>

<p>
<a href="" target="_blank">Modhub</a>
</p>
</div>
-->
</section>

<footer>
<p><a href="index.php" class="button">PMC Farming Simulator root page</a></p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
