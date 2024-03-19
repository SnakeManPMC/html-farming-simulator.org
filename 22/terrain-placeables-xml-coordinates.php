<!DOCTYPE html>
<html lang="en">
<head>
<title>Placeables.xml Coordinates Farming Simulator 22 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Placeables.xml Coordinates Farming Simulator 22 - PMC Farming">
<META name="keywords" content="Terrain, Placeables.xml, Coordinates, Objects, FS22, PMC, Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<!-- google ads -->
<?php include("../include/google-ads.php"); ?>
<h1><b>Placeables.xml Coordinates Farming Simulator 22 - PMC Farming</b></h1>
</header>

<section>
	<h2>Getting Object Coordinates for Placeables.xml</h2>

<p>
<b>2022-02-14T03:14:00Z</b> updated. Game engine v1.2.0.2 used.
</p>

<p>
See also <a href="../19/terrain-placeable-objects.php">Farming Simulator 19 placeable objects</a> and <a href="terrain-placeables-xml.php">FS22 placeables.xml</a> pages.
</p>

<a href="screenshots/FS22-Script-Make-Placeables-XML-Config-File-Automatically.jpg" target="_blank"><img src="screenshots/thumbs/FS22-Script-Make-Placeables-XML-Config-File-Automatically.jpg" loading="lazy" alt="Farming Simulator 22 - Script Make Placeables XML Automatically" class="terrainimg"></a>

<p>
Have you done the copy-paste dance of selecting object in Giants Editor (GE), copy-pasting its coordinates one by one into placeables.xml config file? Yep, I have too, its no fun. Now we can use LUA script to grab the coordinates and even object name automatically and write them into GE log.
</p>

<p>
Download LUA script written by <b>Outlaw</b> (with one LUA print command edit by Snake Man, PMC). GE.Scripts.Placeables.2022-02-14.7z <a href="magnet:?xt=urn:btih:74733636a701596d9cc932d07b0ad59fd67cf1ab&xt=urn:btmh:12208b69da774366ea6ffe49304c58915fbe63fdee2e8d7357c6424f658d0e2aa207&dn=FS22.Batch.Files.And.Scripts.2024-03-18&tr=udp%3a%2f%2ftracker.opentrackr.org%3a1337%2fannounce&tr=udp%3a%2f%2ftracker.openbittorrent.com%3a6969%2fannounce" target="_blank">FS22.Batch.Files.And.Scripts.2024-03-18 Torrent Magnet</a>.
</p>

<p>
The 7-zip archive includes "Placeables/" directory, unpack that dir into your GE scripts dir so it becomes GIANTS_Editor_9.0.2_64-bit\scripts\Placeables\ or whatever your GE install path might be. Remember that after unpacking the 7-zip into scripts dir you need to restart GE if it was running.
</p>

<p>
Now when you select objects and run the script, GE log gets written almost complete copy-paste ready line. Only thing missing is the actual path to the XML file string, which you must fill in yourself.
</p>

<p>
First select all the placeable objects you just, err, placed in GE, like this:
</p>

<img src="screenshots/FS22-GE-Transformgroup-Placeables-Selected.png" loading="lazy" alt="Farming Simulator 22 - " class="imgresponsive">

<p>
Now just run the script, by using menu scripts -> Placeables -> Get World Coordinates.
</p>

<img src="screenshots/FS22-GE-Script-GetWorldCoordinates.png" loading="lazy" alt="Farming Simulator 22 - " class="imgresponsive">

<p>
When the script runs it writes couple of empty lines and *** marked text so its easy to see where a new set of placeables appeared. Just keep GE log open in proper text editor and then copy-paste the almost ready to use placeable text lines into placeables.xml config file.
</p>

<p>
Below is just an example of the coordinates in my screenshot, do not use they wont work in your terrain heh.
</p>

<pre>
*** Placeable.xml config file copy-paste ***

&lt;placeable mapBoundId="flatBottomBin3608" filename="" position="-1798.500 11.528 2084.430" rotation="0.000 -20.885 0.000" farmId="0" /&gt;
&lt;placeable mapBoundId="flatBottomBin3608" filename="" position="-1814.000 11.332 2084.770" rotation="0.000 -20.885 0.000" farmId="0" /&gt;
&lt;placeable mapBoundId="flatBottomBin3608" filename="" position="-1828.880 11.211 2084.820" rotation="0.000 -20.885 0.000" farmId="0" /&gt;
&lt;placeable mapBoundId="flatBottomBin3608" filename="" position="-1843.610 11.147 2084.760" rotation="0.000 -20.885 0.000" farmId="0" /&gt;
&lt;placeable mapBoundId="72x150shedRedMain" filename="" position="-1851.180 10.688 2032.280" rotation="-0.000 90.000 0.000" farmId="0" /&gt;
&lt;placeable mapBoundId="waterTank2" filename="" position="-1795.740 10.988 2000.040" rotation="0.000 -0.000 0.000" farmId="0" /&gt;
</pre>

<p>
Now you need to fill in the filename="" with actual XML path and file name string. Below I have put in my example flatBottomBin3608 path + file name:
</p>

<pre>
filename="$mapdir$/maps/placeables/meridian/flatBottomBin3608/flatBottomBin3608.xml"
</pre>

<p>
I personally use powergrep4 to mass string replace the mapBoundId="flatBottomBin3608" filename="" with that above flatBottomBin3608.xml line filled in.
</p>

<p>
This whole process is not one button click method but definitely beats copy-pasting translate and rotate coordinates one by one for each object <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

</section>

<footer>
<p><a href="map-making-tutorial.php" class="button">PMC Farming Simulator 22 Map Making Tutorial page</a></p>
<p><a href="../index.php" class="button">PMC Farming Simulator root page</a></p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("../include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
