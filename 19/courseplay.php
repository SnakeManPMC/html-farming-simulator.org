<!DOCTYPE html>
<html lang="en">
<head>
<title>Farming Simulator 19 Courseplay - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Farming Simulator 19 Courseplay - PMC Farming">
<META name="keywords" content="Farming, Simulator, Courseplay, PMC, Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<!-- google ads -->
<?php include("../include/google-ads.php"); ?>
<h1><b>PMC Farming Simulator 19 (FS19) Courseplay</b></h1>
</header>

<section>
	<h2>Courseplay FS19</h2>

<p>
<b>2021-01-04</b> Updated
</p>

<p>
See our <a href="../courseplay.php">FS17 Courseplay</a> page for background information. Courseplay for FS19 went to public beta in late january 2019.
</p>

<p>
Download <a href="https://github.com/Courseplay/courseplay" target="_blank">github courseplay</a> and for further documentation see <a href="http://courseplay.github.com/courseplay/" target="_blank">homepage</a> for manual etc.
</p>


	<h2>Automatic Developer Version Download</h2>

<p>
My batch file (bat) is named: _run_FS19_courseplay_create_compatible_zip.bat and I keep it on my FS19 mod STORAGE directory (not FS19 MODS dir, there is a difference). This bat needs you to have c:\Farming.Simulator.19.Mods\ directory and also edit this bat for C:\Users\YOURNAME\ to whatever is your windows user name.
</p>

<pre>
@echo off
For /f "tokens=1-2 delims=/:" %%a in ('time /t') do (set PMCTIME=%%a%%b)
set PMCUTC=%date:~0,4%-%date:~5,2%-%date:~8,2%T%PMCTIME%
md courseplay-%PMCUTC%
cd courseplay-%PMCUTC%
echo downloading zip ...
wget -c -t 0 -w 2 https://github.com/Courseplay/courseplay/archive/master.zip

if not exist master.zip goto idiot
echo ***
echo Make sure FS19 is not running because courseplay.zip would be locked!
echo Press CTRL-C to cancel or
pause

echo unpacking github courseplay-master.zip ...
7z.exe x master.zip
cd courseplay-master

echo packing dir to FS19 compatible zip ...
7z.exe a -tzip ..\courseplay.zip *

echo copying courseplay.zip into FS19 PMC Mod Storage dir
cd ..
copy courseplay.zip c:\Farming.Simulator.19.Mods\
echo creating archive version copy
copy courseplay.zip c:\Farming.Simulator.19.Mods\courseplay.%PMCUTC%.zip
echo moving courseplay.zip into FS19 mods dir
move courseplay.zip "C:\Users\YOURNAME\Documents\My Games\FarmingSimulator2019\mods\"

echo deleting temp files ...
rd /q /s courseplay-master
del master.zip
cd ..
rd /q /s courseplay-%PMCUTC%

echo all done! enjoy your upgraded Courseplay :)
pause
exit

:idiot
echo so no master.zip detected, are you stupid? press any key if yes ;)
pause
exit
</pre>


	<h2>Courseplay vs Hired Workers</h2>

<p>
Too long didnt read; forget hired workers, use courseplay.
</p>

<p>
Hired workers are super simple that can only work on a fields in 0/180 and 90/270 degree heading, they do not drive along saved courses like courseplay does.
</p>

<p>
Courseplay vehicle convoy does a good job trying to prevent traffic collisions, hired workers aimlessly collide with each other without anykind of coordination.
</p>

<p>
Courseplay can work with multiple tools using vehicle convoy feature, where hired workers mostly work in pairs. If you need to use more than two hired workers then you must split the field to two sections and send two vehicles to one section and another two vehicles to another, hired workers work best in even numbers like 2, 4, 6, 8 (although 8 would be only for the most insanely large fields). If you split field up for combine harvesters and set them off at opposite ends of the field, then grain cart needs to drive long distances back and forth between combines, larger the field longer the driving distance ie wasted time.
</p>

<p>
Combining with hired workers force your grain cart to drive into the fruit, or you to take the time to stop hired worker, back out the combine from the fruit, unload to grain cart, align combine back to the track and set off new hired worker. This is so cumbersome on large fields when you have to do this dozens of times.
</p>

<p>
Hired workers cost money where courseplay can be setup to not pay any fees (for cheapo farmers heh).
</p>

<p>
Courseplay (and hired workers alone) have bad 30FPS performance causing issue with multiple vehicles running, havent been able to track it down to which vehicles/implements cause this. Hired workers cause hosted multiplayer performance to go from 60fps to 30fps, same as courseplay. Courseplay uses "guided hired workers" so the same performance issue applies.
</p>

	<h2>Harvesting Large HUGE Field</h2>

<p>
<b>2020-03-17</b>
</p>

<p>
Large huge fields can cause courseplay to freeze badly when its generating a field work course, it is a good idea to split large fields into smaller sections. You have to drive a vehicle and record courseplay course for these smaller section outlines, courseplay will not automatically split fields for you.
</p>

<p>
<a href="pmc-grande-gardens-16km.php">PMC Grande Gardens 16km</a> F20 is 300ha in size, its not rectangle its a bit more width than height, this field absolutely is too large to harvest with single courseplay course using 4 tools. Why? well as you are driving grain cart around the distance between field edge and the center where most probably the trucks are parked takes close to a minute if not more, its just crazy driving back and forth.
</p>

<p>
Split fields over... hmm 200ha? into 4 sections which you harvest with 4 tools one by one, this way you as grain cart driver don't have to drive ridiculous distances back and forth chasing the combines.
</p>

<p>
Try to plan the field splitting into such shapes that it minimizes the grain cart back and forth driving, meaning no long edges, make it rectangle sections if possible. Or just generally try to think how you get least amount of distance to drive with grain cart. Also keep in mind where you record semi truck grain hauling course loading point, if grain cart needs to drive long distance between semi truck and combines, its going to be a painful harvest.
</p>

<p>
This helps for the grain cart back and forth driving but its got also psychological effect, you get less bored when you have smaller task to complete and feel sense of achievement when one section has been harvested. Its better to harvest four times one hour session than one massive four hour session.
</p>

<p>
<b>2020-03-25</b>
</p>

<p>
When harvesting 200ha and smaller fields in <a href="stories-from-zero-grande-gardens.php">PMC Grande Gardens 16km Start From Zero</a> I used one generic grain truck courseplay loop course, then manually drove the trucks to grain cart to be loaded, once full I just hit CTRL-KEYPAD_7 (later I think it was just keypad 7) and grain trucks head to the loop again to unload.
</p>

<p>
This may sound weird that auger wagon is supposed to drive to the trucks, but oddly enough in the realism of FS19 it works perfectly well that auger wagon chases combines and grain trucks chase auger wagon, yes I know it sounds bizarre but works very well. I mean works very well for single player courseplay use with 4 Class Lexion 8900s with Midwest Durus 18m headers, two trucks and player manually driving grain cart.
</p>

	<h2>Multiple Tools</h2>

<p>
Too long didn't read; with experience multiple tools will be a valuable feature.
</p>

<p>
Multiple tools or vehicles, otherwise known as Vehicle Convoy. This is a feature that allows you to have two or more vehicles working on a single field work course, being it cultivating, spraying, seeding, plowing or harvesting.
</p>

<p>
Why use multiple tools? To cut back the field work time, simple. Would you rather cultivate field for 4 hours or just one?
</p>

<p>
Multiple tools doesn't work, not really (but please read on). Almost every course seems to have one choke point where the vehicles collide, how is that possible, how anyone imagines running field work when eventually your vehicles get stuck (if the field and implement width wont fit together).
</p>

<p>
Its related to field size and implement width, if size is multiples of implement width you're good but if its uneven, then you have overlap on vehicles running the course and they will collide. The overlapping course happens in beginning or the end of it.
</p>

<p>
It is a complete nightmare to clear out the mangled vehicles with implements stuck to each other, it just causes player rage and weaker persons give up and quit blaming courseplay. However don't be discouraged, you can work around with multiple tools overlapping courses. Its especially problematic as often times you cannot get the vehicle to continue same waypoint as course lines close together cant be started by "nearest waypoint", personally I use "first waypoint" starts on my 4 tools headland field work courses.
</p>

<p>
Your only care free option for cultivating and plowing for example is to set off one (1) single vehicle so it wont collide with anyone else. With sprayers and seeders etc you eventually run out of product on those long courses, but at least then the vehicle just stops and waits for a refill.
</p>

<p>
Players make courseplay be this "it plays the game for me!!1" but it really doesn't as you have to babysit it every step of the way.
</p>

<p>
When you generate field work course for multiple tools you can already see from GUI if the lines overlap too bad, with experience you can easily spot collision prone course lines. You can then be prepared to stop the vehicles before this happens (obviously this doesn't work if you ALT-TAB for a long time). Often times when multiple tools collide at the end of the course on the last pass, you can actually just stop some of them as that part of the field has already been worked.
</p>

<p>
Harvesting with multiple tools, do not use symmetric lane changes because it messes up pipe in the fruit combine positions (difficult to explain, just trust me). For example the second combine after the first turn have its pipe in the fruit. It still does cut pocket so grain cart will fit to unload... but why bother, without lane changes you could just unload on the go.
</p>


	<h2>Multiple Tools Hectare Efficiency</h2>

<p>
<b>2020-02-21</b>
</p>

<p>
Multiple tools hectare efficiency, how many is too few or too many tools for a particular field size?
</p>

<p>
Below values were recorded in <a href="pmc-grande-gardens-16km.php">PMC Grande Gardens 16km</a> terrain. Usually I seed with two bourgault 3420-100 air drills and harvest with four Claas Lexion 8900s, the more vehicles/implements you throw at a field the faster it gets done, but field must be a really large if it justifies four of these monster seeders as shown in these statistics below.
</p>

<p>
Seed Hawk is 25.6m width with 34,500 liter grain tank capacity (using the fertilizer tank as seeds mod). Sorry don't have statistics for Bourgault 3420-100 Paralink Hoe Drill (30.5 meter) air drill yet.
</p>

<p>
12ha F10 with two tools feels OK, four is absolutely too much all you get is about one headland plus collisions. Even with two tools its really quick and you could easily do this with one tool alone.
</p>

<p>
Below is four seed hawks seeding. Field hectare size, field number, duration:
</p>
<pre>
37ha F11 16min
46ha F31 19min
50ha F18 20min
91ha F02 36min
300ha F21 1hrs 51min
360ha F51 2hrs 13min
611ha F22 3hrs 37min
1475ha F30 8hrs 30min
</pre>

<p>
With four tools anything less than 15min duration should be split to two tools.
</p>

</section>

<footer>
<p><a href="../index.php" class="button">PMC Farming Simulator root page</a></p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("../include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
