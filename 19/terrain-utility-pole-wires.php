<!DOCTYPE html>
<html lang="en">
<head>
<title>Utility Poles with Wires Terrain Tutorial FS19 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Utility Poles with Wires Terrain Tutorial FS19 - PMC Farming">
<META name="keywords" content="Utility, Poles, Wires, Terrain, Tutorial, FS19, PMC, Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
<h1><b>Utility Poles with Wires Terrain Tutorial FS19 - PMC Farming</b></h1>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>Wires for Poles Tutorial</h2>

<p>
<b>2021-02-04</b> Updated.
</p>

<p>
This tutorial needs proof reading from various skill level users, if you have corrections or questions please <a href="../contact.php">contact us</a>.
</p>

	<h2>Spline Placement Scripts</h2>

<p>
This tutorial uses splinePlacement v1.3 scripts by TracMax <a href="magnet:?xt=urn:btih:2ea7bf81114123682066f35bfb8f4f472b4031e6&xt=urn:btmh:1220326fedcaec3108246181e4dbb344e52a9588668824d0150756fbf01fb9c53093&dn=Batch.Files.And.Scripts.2024-03-18&tr=udp%3a%2f%2ftracker.opentrackr.org%3a1337%2fannounce&tr=udp%3a%2f%2ftracker.openbittorrent.com%3a6969%2fannounce">Batch.Files.And.Scripts.2024-03-18 Torrent Magnet</a>. Unpack the 7-zip archive and place .lua scripts into <a href="terrain-giants-editor.php">Giants Editor</a> scripts directory.
</p>

<p>
<b>SplinePlacement_Create.lua</b> will create needed transformgroups for these scripts to function. First create empty transformgroup by Create -&gt; Transformgroup, then select this new "transform" item, now run SplinePlacement_Create.lua from the scripts menu, if you just dropped it to scripts root directory it will be named "Spline Placement Create". When executed it will create various child transformgroups.
</p>

<p>
<b>SplinePlacement_Delete.lua</b> will delete objects from splinePlacement -&gt; placedObjects transformgroup, very useful when you go back and forth testing scripting variables <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
splinePlacement_v1.3_Fixed_Distancetester.lua is not used in this tutorial.
</p>

	<h2>Creating Utility Poles</h2>

<p>
You need a utility pole and a wire objects. For utility pole object use mapUS utilityTransitionPoleUS-R and as for wire object... dunno, there is one <a href="https://www.farming-simulator.com/mod.php?mod_id=165038" target="_blank">german rural area telephone pole prefab in giants modhub</a>.
</p>

<p>
Our screenshots show utility pole object from Midwest Horizon terrain and wire object from Kjmeyer.
</p>

<p>
Create three transformgroups and place them into the utility pole where the wires connect. These three transformgroups must be right after the utility pole object, if there are any other items or transformgroups there then wire objects are connected to those.
</p>

<div class="grid-container">
<div class="grid-item">
<img class="imgresponsive" src="screenshots/Utility-Poles-With-Wires-Transformgroup-01.jpg" loading="lazy" alt="Utility Poles with Wires Transformgroup 1 Location">
</div>

<div class="grid-item">
<img class="imgresponsive" src="screenshots/Utility-Poles-With-Wires-Transformgroup-02.jpg" loading="lazy" alt="Utility Poles with Wires Transformgroup 2 Location">
</div>

<div class="grid-item">
<img class="imgresponsive" src="screenshots/Utility-Poles-With-Wires-Transformgroup-03.jpg" loading="lazy" alt="Utility Poles 
with Wires Transformgroup 3 Location">
</div>

<!-- grid-container -->
</div>

<p>
Make sure the wire locator transformgroups are first / top-most right below the utility pole (powerPole in our example) item. See below screenshot for an example.
</p>

<img class="imgresponsive" src="screenshots/Utility-Poles-With-Wires-Transformgroup-Order.jpg" loading="lazy" alt="Utility Poles with Wires Transformgroup Order">

<p>
Create utility pole line using 65 meter splinePlacement v1.3 script by TracMax <a href="magnet:?xt=urn:btih:2ea7bf81114123682066f35bfb8f4f472b4031e6&xt=urn:btmh:1220326fedcaec3108246181e4dbb344e52a9588668824d0150756fbf01fb9c53093&dn=Batch.Files.And.Scripts.2024-03-18&tr=udp%3a%2f%2ftracker.opentrackr.org%3a1337%2fannounce&tr=udp%3a%2f%2ftracker.openbittorrent.com%3a6969%2fannounce">Batch.Files.And.Scripts.2024-03-18 Torrent Magnet</a>, as usual. First create the spline, as you can see from our screenshot example you can make nice smooth flowing shapes for utility pole splines.
</p>

<img class="imgresponsive" src="screenshots/Utility-Poles-With-Wires-Spline-For-Poles.jpg" loading="lazy" alt="Utility Poles with Wires Spline for Poles">

<p>
Move/duplicate utility pole object into splinePlacement -&gt; objectsToPlace transformgroup. Then select splinePlacement transformgroup and run the 65 meter placement script.
</p>

<img class="imgresponsive" src="screenshots/Utility-Poles-With-Wires-Spline-Created-Poles.jpg" loading="lazy" alt="Utility Poles with Wires Spline Created Poles">

<p>
We have used 65 meter distance between utility poles, it seems to be pretty decent value judging by various American real life farming areas from google/maps.
</p>

	<h2>Creating Wires</h2>

<p>
Wire object must be setup in a way that gizmo is on one end and blue arrow points along the wire.
</p>

<img class="imgresponsive" src="screenshots/Utility-Poles-With-Wires-The-Wire-Object.jpg" loading="lazy" alt="Utility Poles with Wires The Wire Object">

<p>
To measure wire length put a transformgroup on the one end, then move it to the other end using blue gizmo arrow and see translate Z value.
</p>

<p>
Download EasyFence script by modelleicher <a href="magnet:?xt=urn:btih:2ea7bf81114123682066f35bfb8f4f472b4031e6&xt=urn:btmh:1220326fedcaec3108246181e4dbb344e52a9588668824d0150756fbf01fb9c53093&dn=Batch.Files.And.Scripts.2024-03-18&tr=udp%3a%2f%2ftracker.opentrackr.org%3a1337%2fannounce&tr=udp%3a%2f%2ftracker.openbittorrent.com%3a6969%2fannounce">Batch.Files.And.Scripts.2024-03-18 Torrent Magnet</a> and open it in proper text editor (notepad++ for example).
</p>

<p>
E_wireNodesCnt is wire nodes count, how many wires does your utility pole have.
</p>

<p>
E_fenceWire is wire node number, check it by selecting the wire object and then from attributes -&gt; transform -&gt; ID.
</p>

<img class="imgresponsive" src="screenshots/Utility-Poles-With-Wires-FenceWire-Node-Number.jpg" loading="lazy" alt="Utility Poles with Wires FenceWire Node Number">

<p>
E_startWireLength is length of the wire object.
</p>

<p>
E_fenceTransform is transformgroup ID where utility pole objects are located.
</p>

<img class="imgresponsive" src="screenshots/Utility-Poles-With-Wires-FenceTransform-Node-Number.jpg" loading="lazy" alt="Utility Poles with Wires FenceTransform Node NUmber">

<p>
E_maxPosts is number of utility poles. Find this number by selecting last created utility pole object and check its attributes -&gt; index path and its the last number of that index path number, heh.
</p>

<img class="imgresponsive" src="screenshots/Utility-Poles-With-Wires-MaxPosts-Number.jpg" loading="lazy" alt="Utility Poles with Wires MaxPosts Number">

<p>
In our above example image you see the index path being "4>0|1|82" and the last number, 82 in our case (this is on our example, yours most likely will be different), is the count of how many utility pole objects the script created. Use this number for E_maxPosts variable value.
</p>

<p>
E_startPost leave it to zero (0).
</p>

<p>
Utility poles must be in sequential number order, you cant have index path 1 object being somewhere middle of the line. This is not an issue if you place utility poles using splinePlacement 65m script.
</p>

<p>
How to actually script generate the wire objects: first place the utility poles, then just run Easy Fence script (EasyFence.lua), no need to select any specific transformgroup or anything. Wires are created on those three transformgroups which indicate the wire location on each utility pole.
</p>

<p>
Once wires are placed there will be bugged wires on the LAST pole. Go to the placedObjects, open last pole transformgroup and the wire transformgroups and delete the wires, actually you can just delete all three wire transformgroups.
</p>

<img class="imgresponsive" src="screenshots/Utility-Poles-With-Wires-Buggy-Last-Pole.jpg" loading="lazy" alt="Utility Poles with Wires Buggy Last Pole">

<p>
Here is the final result overview.
</p>

<img class="imgresponsive" src="screenshots/Utility-Poles-With-Wires-Placed-Overview.jpg" loading="lazy" alt="Utility Poles with Wires Placed Overview">

<p>
Looking good, love my new wires which were created all automatic scripting way <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<img class="imgresponsive" src="screenshots/Utility-Poles-With-Wires-Placed-Closeup.jpg" loading="lazy" alt="Utility Poles with Wires Placed Closeup">

<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("/var/www/include/footer-start.php"); ?>
<p>
<a href="map-making-tutorial.php" class="button">PMC Farming Simulator 19 Map Making Tutorial</a>
<a href="../index.php" class="button">PMC Farming Simulator root page</a>
</p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("/var/www/include/footer-end.php"); ?>
<?php include("/var/www/include/support.php"); ?>
<?php include("/var/www/include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
