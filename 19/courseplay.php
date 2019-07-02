<!DOCTYPE html>
<html lang="en">
<head>
<title>Farming Simulator 19 Courseplay - PMC Tactical</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Farming Simulator 19 Courseplay - PMC Tactical">
<META name="keywords" content="Farming, Simulator, Courseplay, PMC, Tactical">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<!-- google ads -->
<?php include("../include/google-ads.php"); ?>
<h1><b>PMC Tactical Farming Simulator 19 (FS19) Courseplay</b></h1>
</header>

<section>
	<h2>Courseplay FS19</h2>

<p>
Courseplay for FS19 went to public beta in late january 2019. See our <a href="../courseplay.php">FS17 Courseplay</a> page for background information.
</p>

<p>
Download <a href="https://github.com/Courseplay/courseplay" target="_blank">github courseplay</a> and for further documentation see <a href="http://courseplay.github.com/courseplay/" target="_blank">homepage</a> for manual etc.
</p>


	<h2>Automatic Developer Version Download</h2>

<p>
My bat is named: _run_FS19_courseplay_create_compatible_zip.bat and I keep it on my FS19 mod STORAGE directory (not FS19 MODS dir, there is a difference).
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
2019-04-27 using courseplay v6.01 build 196
</p>

<p>
Hired workers are super simple that can only work on a fields, they do not drive along saved courses like courseplay does.
</p>

<p>
Hired workers are multiplayer compatible where courseplay is not (in 2019-04-27, but MP support is planned according to devs). But one could argue that in proper MP with several people you do not need couseplay. In perfect world this is true, but most people seem to be playing with only one other person or perhaps 2-4 or so, that is still very few for real world data terrains and especially if you create separate farms.
</p>

<p>
Courseplay vehicle convoy does a good job trying to prevent traffic collisions, hired workers aimlessly collide with each other without anykind of coordination.
</p>

<p>
Courseplay can work with multiple tools using vehicle convoy feature, where hired workers mostly work in pairs. If you need to use more than two vehicles then you must split the field to two sections and send two vehicles to one section and another two vehicles to another, hired workers work best in even numbers like 2, 4, 6, 8 (although 8 would be only for the most insanely large fields). If you split field up for combine harvesters and set them off at opposite ends of the field, then grain cart needs to drive long distances back and forth between combines, larger the field longer the driving distance ie wasted time.
</p>

<p>
Combining with hired workers force your grain cart to drive into the fruit, or you to take the time to stop hired worker, back out the combine from the fruit, unload to grain cart, align combine back to the track and set off new hired worker. This is so cumbersome on large fields when you have to do this dozens of times.
</p>

<p>
Hired workers cost money where courseplay can be setup to not pay any fees (for cheapo farmers heh).
</p>

<p>
Courseplay has bad 30FPS performance causing issue with multiple vehicles running, havent been able to track it down to which vehicles/implements cause this. Hired workers cause hosted MP performance to go from 60fps to 30fps, same as courseplay. Hmm so does courseplay use "guided hired workers" or something so the same performance issue applies?
</p>

</section>

<footer>
<p><a href="../index.php" class="button">PMC Farming Simulator root page</a></p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("../include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
