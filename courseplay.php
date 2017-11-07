<!DOCTYPE html>
<html>
<head>
<title>Farming Simulator Courseplay - PMC Tactical</title>
<LINK href="css.css" rel=stylesheet type="text/css">
<META name="description" content="Farming Simulator Courseplay - PMC Tactical">
<META name="keywords" content="Farming, Simulator, Courseplay, PMC, Tactical">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("include/google-analytics.php"); ?>

</head>
<body>

<header>
<!-- google ads -->
<?php include("include/google-ads.php"); ?>
<h1><b>PMC Tactical Farming Simulator Courseplay</b></h1>
</header>

<section>
	<h2>Courseplay</h2>

<p>
Download <a href="https://github.com/Courseplay/courseplay">github courseplay</a> and see <a href="http://courseplay.github.com/courseplay/">homepage</a> for manual etc.
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
Recommended organization is to have F1, F2 etc numbered folders for fields, ie <b>F</b>ield <b>1</b> etc, as those are the areas where you operate. Then another folder would be Transfer as you will be making several transfer only courses.
</p>

<p>
Courses in folders dont need indentifying prefix, so instead of doing "Field_28_cultivating_6m" you can just put it on F28 folder and call it "Cultivating_6m" instead. Simple and neat.
</p>


	<h2>Grain Transport Mode</h2>

<p>
Start course recording at the point where you want to load your vehicle with grain etc. Then drive into the grain silo or unloading point. Then drive back and line up to the starting point so when vehicle moves forward it doesnt have to turn etc.
</p>

<p>
Load the course, select your product, number of runs to perform (if you so choose), select start at first waypoint and then just drive course. All done.
</p>

<p>Good semi truck course recording tip: do it when you have a full load, then you feel the how the semi truck handles. Semi truck carriers incredibly expensive cargo, dont be stupid, dont speed :)
</p>

<p>
If you have multiple silos in a row like in North West Texas 4X map, just run the course through all of the silos so if one gets full, the next one hopefully has space and it will unload there.
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
Check working width of your vehicle (check from shop -> garage menu). Or click the calculator icon to automatically get the width.
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


	<h2>Fertilize and Seeding Mode</h2>

<p>
Click the fertilize and seeding icon on bottom menu.
</p>

<p>
First create the refill course from the edge of the field. Refill is to drive next to the seed pallets or refill tanks. Next setup fertilizer and seeding course same as field work mode, just load/merge the refill course also.
</p>


	<h2>Combine Self-unloading Mode</h2>

<p>
You record a course near the unloading point, so the vehicle with the trailer has to be on the exact same spot every time. Place waypoint at the unloading point when pipe is aligned properly. Hum bit complicated :)
</p>

<p>
Combine cannot be under courseplay control while harvesting, it needs to be run by helper. So basically this feature sucks, use the other more advanced features.
</p>

<p>Also the combine will travel through the crop it harvests, meaning with crop destruction you get nasty trails :(
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

</section>

<footer>
<p>Back to <a href="index.php">PMC Farming Simulator root page</a></p>
<br><br>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
