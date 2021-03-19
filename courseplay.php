<!DOCTYPE html>
<html lang="en">
<head>
<title>Farming Simulator Courseplay - PMC Farming</title>
<LINK href="css.css" rel=stylesheet type="text/css">
<META name="description" content="Farming Simulator Courseplay - PMC Farming">
<META name="keywords" content="Farming, Simulator, Courseplay, PMC, Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("include/google-analytics.php"); ?>

</head>
<body>

<header>
<!-- google ads -->
<?php include("include/google-ads.php"); ?>
<h1><b>PMC Farming Simulator Courseplay</b></h1>
</header>

<section>
	<h2>Courseplay</h2>

<p>
<b>Farming Simulator 17</b>, please note that the below github link in 2020-04-26 has new commits/releases for FS19 version.
</p>

<p>
Download <a href="https://github.com/Courseplay/courseplay" target="_blank">github courseplay</a> and for further documentation see <a href="http://courseplay.github.com/courseplay/" target="_blank">homepage</a> for manual etc.
</p>

<p>
Check your mod version from the modDesc.xml file on version entry, or from in-game courseplay dialog bottom right hand corner.
</p>

<p>
Activate Courseplay with RMB.
</p>


	<h2>Settings</h2>

<p>
You can turn on/off waypoint markers.
</p>


	<h2>Keyboard Shortcuts</h2>

<p>
CTRL-DEL show / hide user interface.<br>
CTRL-KEYPAD-ENTER menu accept.<br>
CTRL-KEYPAD-7 start / stop.<br>
CTRL-KEYPAD-8 cancel wait.<br>
CTRL-KEYPAD-9 drive now.<br>
CTRL-KEYPAD-??? stop at end.<br>
CTRL-PAGEUP next mode.<br>
CTRL-PAGEDOWN previous mode.
</p>

	<h2>Start Driver</h2>

<p>
Click on the start course at to choose where you want it to start. Click drive course to start.
</p>

<p>
If your course is not one of the looping ones, then you must use stop at last point or next trigger: activated. If you do not, then your vehicle attempts to loop back into the starting point which is completely against basic transport courses.
</p>


	<h2>Load Course</h2>

<p>
Click on the globe icon, click courses file folder icon. Now course is ready to use.
</p>


	<h2>Save Course</h2>

<p>
In courseplay control mode hit floppy disc icon on the right, then give a file name and hit enter.
</p>


	<h2>Manage Courses</h2>

<p>
You can create new folder by clicking the folder with star icon. You can move courses into folders with the folder and triangle icon.
</p>

<p>
Recommended organization is to have F01, F02 etc numbered folders for fields, ie <b>F</b>ield <b>01</b> etc, as those are the areas where you operate. Then another folder would be Transfer as you will be making several transfer only courses.
</p>

<p>
Courses in folders dont need indentifying prefix, so instead of doing "Field_28_cultivating_6m" you can just put it on F28 folder and call it "Cultivating_6m" instead. Simple and neat.
</p>

	<h2>Large or Huge Courses</h2>

<p>
<b>Do not save a very large courses!</b> Uh what? Whats the point of courseplay if we are not to save some courses? Well for those large or even huge fields if you generate very long course, well over 10,000 waypoints and save few of those... your game startup on <i>this terrain</i> will get extremely long, talking about several minutes of loading time, I have seen it grow as large as 5 some extreme cases even 10+ minutes. So do not save large courses on fieldwork, only use them as temporary courses.
</p>

<p>
You should not record long courses which duplicate shorter courses, let me explain: if you go from A to B to C to D, you should not record course from A to D directly, because if you then record smaller course from A to B and B to C you are duplicating the waypoints that are stored in your hard drive (well they are not identical dupes but you get my point here). Instead you should always record modular course like from A to B then B to C and finally C to D. You can load these modular course snippets depending on where you are going. Sure it does take few more clicks when appending all these courses as opposed to just one long course, but its the right way to do them.
</p>

<p>
Another good reason to use modular courses is changes, if you need to adjust a very long course you have to drive it completely through again but with modular you only need to redo the part that you have issue with.
</p>

<p>
Generating course to a very large or huge field, talking about large 4km, 8km or even PMC insane 16km terrains 1000+ hectares fields most likely will fail. When you generate such courseplay will freeze for few seconds, let me quote myself about PMC 16km terrain:</p>

<p>
<i>Courseplay will freeze for a very long time (which essentially is just a permanent lockup) when trying to generate course / route for fields much larger than 1000 hectares. I managed to get it working on 1008 hectare field with 4 tools (so less course to generate) but when trying the same for 1200 hectare field, it locked up.</i>
</p>

<p>
Now this obviously is not a problem for most people using normal terrains, but for example in Cornbelt terrain there is one 601 hectare field which you can generate course but do still get that nasty freeze and user who doesn't know how things work might panic and think their game locked up.
</p>


	<h2>Grain Transport Mode</h2>

<p>
Start course recording at the point where you want to load your vehicle with grain etc. Then drive into the grain silo or unloading point. Then drive back and line up to the starting point so when vehicle moves forward it doesnt have to turn etc.
</p>

<p>
Load the course, select your product, number of runs to perform (if you so choose), select start at first waypoint and then just drive course. All done.
</p>

<p>Good semi truck course recording tip: do it when you have a full load, then you feel the how the semi truck handles. Semi truck carriers incredibly expensive cargo, dont be stupid, dont speed <img src="images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
If you have multiple silos in a row like in North West Texas 4km terrain, just run the course through all of the silos so if one gets full, the next one hopefully has space and it will unload there.
</p>


	<h2>Calculate Fields Edge Path</h2>

<p>
Courseplay automatically scans all fields at career mode start or savegame load. However it doesnt appear to scan the new plowed field edges (please confirm?), so you must add them by scanning them and overwriting the old field number.
</p>

<p>
Stay on the field, if its combine field work then all you need to do is to place front wheels of the combine into the field not to distrub it (of course you are using crop destruction mod, right?) or if its cultivating or plowing then just be on the field where ever you want.
</p>

<p>
Click on calculate current fields edge path. Now blue outline should appear around the field, if its not then your vehicle is not fully inside the field area.
</p>

<p>
Select field path number, his is simply a number of current field. Click add field NUMBER's edge path to list.
</p>

<p>
Tip for manually plowing fields larger; do not plow right up to a geometry block like fence or rocks etc anything that would make your tractor stop moving, also include the apparatus width in this. Courseplay seems to plot the course right in the edge of the field where it overlaps a bit, so if your field is right next to a geometry block fence... then any fieldwork mode courses will fail because vehicle will collide with object (fence) and gets stuck. You can avoid this by using headland mode.
</p>

<p>
Headland will do the field edges first from inside the field so in theory it should not collide with geometry block objects. Its good idea to do 2 rounds of headland before going to the normal zig-zag course.
</p>


	<h2>Field Work Mode</h2>

<p>
This mode is for cultivate, combine, plowing, rake, tether and forge wagon.
</p>

<p>
Click field work mode icon on bottom menu.
</p>

<p>
Calculate fields edge path (explained above).
</p>

<p>
Click course generation icon on top menu.
</p>

<p>
Choose field edge path name from the list.
</p>

<p>
Check working width of your vehicle / implement (check from shop -> garage menu). Or click the calculator icon to automatically get the width (be careful because those jointed or "articulated" equipment will give you funky auto calc results if they are not aligned straight).
</p>

<p>
Choose starting corner and starting direction.
</p>

<p>
Choose return to first position, if you so choose (eh?).
</p>

<p>
Then just click on courseplay control icon and start driver to send him on its way.
</p>

<p>
For those jointed / articulated implements like SPSL 9 plough with Big Bud 747 you need to add large number of headlands otherwise the vehicle will get stuck on anything close to the field as it takes a very long detour outside of the field. I usually put like 5-6 headlands for SPSL 9 plough field work courses.
</p>

<p>
What if your field has bad edge or you want to plow to fields together? Start recording a course, drive along the outer edge. Once done go to field work course generation and keep the course loaded, then generate course and it uses the loaded one as field edge.
</p>


	<h2>Fertilize and Seeding Mode</h2>

<p>
Click the fertilize and seeding icon on bottom menu.
</p>

<p>
First create the refill course from the edge of the field. Refill is to drive next to the seed pallets or refill tanks. Next setup fertilizer and seeding course same as field work mode, just load/merge the refill course also.
</p>


	<h2>Combine Self-unloading Mode</h2>

<p>
You record a course near the unloading point, so the vehicle with the trailer has to be on the exact same spot every time. Place waypoint at the unloading point when pipe is aligned properly. Hum bit complicated <img src="images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Combine cannot be under courseplay control while harvesting, it needs to be run by helper. So basically this feature sucks, use the other more advanced features.
</p>

<p>Also the combine will travel through the crop it harvests, meaning with crop destruction you get nasty trails <img src="images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>


	<h2>Combi Mode</h2>

<p>
Save course in normal travel mode. Your trailer needs to <b>start on the field</b> if you want to use automatic combi search, get at least two waypoints at the field and then move for the silo unloading route. Once unloaded, return and get back to the field orienting so your starting waypoints are nicely ahead of your vehicle so when it loops the route, all it has to do is drive forward.
</p>

<p>
Now load the course (it should be already loaded, doh), use combine mode, choose nearest waypoint and drive course.
</p>

<p>
In order for automatic search to work, your vehicle and trailer <b>needs to be inside the field</b>. If you are not in the field you must select combine manually.
</p>


	<h2>Combine Overloader Mode</h2>

<p>
Overloader and truck both need to run courseplay.
</p>

<p>
Truck needs to run in grain transport mode. Just plain and simple course. Truck does not need to be in the field. See more details at grain transport mode.
</p>

<p>
Overloader needs to be in the field (see combi mode), not very close to the truck. Start course recording, drive in the field until you get two or more waypoints. Drive off the field and line up with the truck. If its not in the field, you must manually select the combine.
</p>

<p>
When overloader pipe is in unloading position with the truck, add "wait point" with the P icon. Then keep on driving back to the field and stop recording. Save this course, of course (heh).
</p>

<p>
Put your overloader in overload mode. Back it up a bit and then just drive course.
</p>

<p>
Try to design the courses so that overloader do not have to run across crops, its not only looking lame but with crop destruction mod it will destroy your crop as well. I believe courseplay disables crop destruction on coursed vehicles but I have to think its a bug or issue that has not been resolved yet. In any case its unrealistic so if nothing else, try to "role play" by setting courses so they wont cause overloader to run across your crops.
</p>

<p>
Side note: if you are plowing your fields larger size, please keep in mind that oddly shaped fields will become a nightmare for path finding in Courseplay as if there are "gaps" in the field, AI driver aka courseplay path finding will create path across this gap, whats in the gap decides if your driver gets stuck or not.
</p>

	<h2>Automatic Developer Version Download</h2>

<p>
The latest developer version, which may or may not be buggy and experimental, can be found from the github repo which is linked at top of this page. You can have one click download batch (bat) file to grab the latest version from github and package it to FS17 readable zip file.
</p>

<p>
I trust Courseplay dev team to do a good job, haven't had any issues with latest git version so far. Every day I start playing FS17 I'm going to check if there are any new commits to courseplay and download new version if there are, this is why I need such one click bat file.
</p>

<p>
You need <a href="https://eternallybored.org/misc/wget/" target="_blank">WGET</a> (for windows) and also <a href="https://www.7-zip.org/download.html" target="_blank">7-Zip Extra: standalone console version</a> for this auto downloader.
</p>

<p>
Also you need to edit the wget, 7zip and FS17 mod storage directory paths and your windows user dir in this bat file. If your wget and 7zip is on windows PATH then you dont need to edit those but unless you store your FS17 mods in c:\Farming.Simulator.17.Mods\ directory, please edit that along with your windows user name in your bat file. Replace the c:\users\YOURNAME\ part.
</p>

<p>
My bat is named: _run_FS17_courseplay_create_compatible_zip.bat and I keep it on my FS17 mod STORAGE directory (not FS17 MODS dir, there is a difference).
</p>

<pre>
@echo off
md courseplay-temp
cd courseplay-temp
echo downloading zip ...
wget -c -t 0 -w 2 https://github.com/Courseplay/courseplay/archive/master.zip

if not exist master.zip goto idiot
echo ***
echo Make sure FS17 is not running because courseplay.zip would be locked!
echo Press CTRL-C to cancel or
pause

echo unpacking github courseplay-master.zip ...
7z.exe x master.zip
cd courseplay-master

echo packing dir to FS17 compatible zip ...
7z.exe a -tzip ..\courseplay.zip *

echo copying courseplay.zip into FS17 Mod Storage dir
cd ..
copy courseplay.zip c:\Farming.Simulator.17.Mods\
echo moving courseplay.zip into FS17 mods dir
move courseplay.zip "C:\Users\YOURNAME\Documents\My Games\FarmingSimulator2017\mods\"

echo deleting temp files ...
rd /q /s courseplay-master
del master.zip
cd ..
rd /q /s courseplay-temp

echo all done! enjoy your upgraded Courseplay :)
pause
exit

:idiot
echo so no master.zip detected, are you stupid? press any key if yes ;)
pause
exit
</pre>

<p>
Such bat file can be used to create FS17 readable zip files from other FS17 github repos too, for example Mogli's GearboxAddon. You are one click away to being always updated <img src="images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

	<h2>Restarting Game</h2>

<p>
Sometimes for whatever reason you have to restart the game, being it too tired and needing to go to sleep, friends come over or some other real life commitment that requires your presence. If one of these times you are running multiple very complex courseplay courses you can obviously save the courses and save your game before exiting. However the problem becomes when you start your game the next time... because it is very difficult to put all the vehicles in their right courses especially when you have multiple tools on one course.
</p>

<p>
It gets more difficult when you have implements that are jointed/articulated with the horizonal off-set. The tool can be turned over like a plow and then courseplay has the offset... ok which way the tool was? which way the off-set was? Uh oh, right... we got some work to figure that out. At times it can get very frustrating trying to restart all that stuff up like it was at the moment of saving and exiting the game.
</p>

<p>
Also you must have the course saved, if you are running temporary course it will not be there when you restart your game.
</p>

<p>
Recommended method: don't restart your game until all courses have finished. Yeah as said above sometimes we <i>must</i> leave the computer so this is sort of impossible, but there just is not other way to easily get around this. For example if you are planning to go stop playing very soon and you are about to start very large course, then don't, save it for the next time you play.
</p>

	<h2>Multiple Tools</h2>

<p>
You must understand that while its cool to add like four Big Bud 747's with Seed Hawk 25.5m width implement to seed a field but if the field is too small or especially narrow or odd shape, you will run into traffic collisions all the time. The combined width of four seed hawks is damn 102 meters! <img src="images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
So do not go putting four seedhawks to 25 hectare field, there is just no point to that. You'd rather get the field worked perhaps a bit slower but without incident than having super mega fast field work setup... which falls flat to its face constantly when the vehicles are colliding with each other and you are having great difficulties figuring out which vehicle is going which direction when you clear the traffic congestion.
</p>

<p>
Combine Convoy prevents the next harvester getting too close to the one driving in front of it, they keep 100 meter separation. Unfortunately there is no such feature for other implements like seeders, cultivators or ploughs etc.
</p>

<p>
Multiple tools work quite nice if you space out the vehicles. Generate course normally but just add number of vehicles in the bottom multiple tools option. Once course is generated, go to driving settings and choose lane offset for this specific vehicle. They are for example 4 vehicles: 2 left, 1 left, center, 1 right and 2 right. This obviously depends how many vehicles you used.
</p>

<p>
Important note: auger wagons <i>will</i> get into traffic jams with multiple harvesters, they do not check at all whats in front of them. This goes for any other multiple tool as well, they blindly collide with each other why it is imporant to space them out a bit. If you want to go big and use two or more auger wagons... expect huge traffic issues, I have never got it to work sufficiently, its far better to have multiple harvesters and one auger wagon than two or more auger wagons, all you do is spend your time untangling the traffic jams.
</p>

</section>

<footer>
<p><a href="index.php" class="button">PMC Farming Simulator root page</a></p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
