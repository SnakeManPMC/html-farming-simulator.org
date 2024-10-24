<!DOCTYPE html>
<html lang="en">
<head>
<title>Forests Tree Placement Farming Simulator 22 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Forests Tree Placement Farming Simulator 22 - PMC Farming">
<META name="keywords" content="Terrain, Forests, Tree, Placement, Objects, FS22, PMC, Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
<h1><b>Forests Tree Placement Farming Simulator 22 - PMC Farming</b></h1>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>HOWTO Create Forests and Tree Lines</h2>

<p>
<b>2022-02-14T01:24:00Z</b> updated. Game engine v1.2.0.2 used.
</p>

<p>
See also <a href="../19/terrain-forests.php">Farming Simulator 19 forests</a> page (not much to see though heh).
</p>

<p>
Easiest way to create forests and tree lines is to use SplinePlacement v1.3 (2017-01-12) by TracMax LUA script. You can find it from <a href="https://marhu.net/phpBB3/viewtopic.php?t=5311" target="_blank">Marhu.net forum topic: GE script: Place objects along spline</a> in german language.
</p>

<p>
Here is one splinePlacement.lua config variable example for a nice thick-ish tree placement using GE v9.0.2:
</p>
<pre>
-- Parameter section
local objectDistance = 5                    -- distance between objects
local noObjectAtStart = false                -- no object at start of spline
local stayUpright = true                   -- objects stay upright
local useDistanceTable = false              -- use distanceTable instead of objectDistance - be careful
local distanceTable = {5,5,5}          -- distanceTable, has to be set for each object, too many entrys don't mind
local randomOrder = true                   -- order of objects is choosen by random
local randomObjectDistance = true          -- ranomizes distance between objects
local randomObjectDistancePercentage = 100  -- percentage of objectDistance
local randomPlacement = true               -- places the object away from the spline by random choosen displacement
local randomPlacementDistance = 10           -- dislocation distance from spline by randomPlacement
local randomYrotation = true               -- random rotation of y-Axis
local internalXrotation = 0                 -- internal rotation of x-Axis in degrees
local internalYrotation = 0                -- internal rotation of y-Axis in degrees
local internalZrotation = 0                 -- internal rotation of z-Axis in degrees
local randomScale = true                   -- random scale of objects
local randomScaleLowLimX = 0.9              -- lower limit of scaleX
local randomScaleHighLimX = 1.1             -- upper limit of scaleX
local randomScaleLowLimY = 0.9              -- lower limit of scaleY
local randomScaleHighLimY = 1.1               -- upper limit of scaleY
local randomScaleLowLimZ = 0.9                -- lower limit of scaleZ
local randomScaleHighLimZ = 1.1               -- upper limit of scaleZ
local alignWithTerrain = false               -- aligns objects with terrain
local notAtTerrainZero = true               -- if alignWithTerrain place no objects at height zero, which will be the result for objects outside the map
</pre>

	<h2>My Workflow</h2>

<p>
What I'm doing is first creating the "splinePlacement" transformgroups using the SplinePlacement_Create.lua script. Then copy my "seed" tree objects into splincePlacement -> objectsToPlace transformgroup.
</p>

<p>
Then I create the spline, I believe you cannot rotate it all so leave S and E ends like they are, just place the "spline" beginning coordinates with CTRL-B interactive placement.
</p>

<p>
Next just carefully click the E end point "control vertex", place it again with CTRL-B interactive mode, if you need more control vertexes just hit INSERT key and another one will be created, CTRL-B place it.
</p>

<p>
Once done placing control vertexes, make sure the spline name is "spline" and move it to the root of "splinePlacement" transformgroup. Yes I know this sounds silly with these names but I am telling you how they are named heh. Here is an example image:
</p>

<img src="../19/screenshots/FS19-Spline-Placement-Transformgroups.png" loading="lazy" alt="Farming Simulator 19 splinePlacement Transformgroups">

<p>
If "spline" is not in the root of "splinePlacement" transformgroup, the LUA script will not work.
</p>

<p>
Not only the location but then you have to click to select "splinePlacement" as shown in above image and only then run the actual LUA script <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Once you have successfully ran the script, trees are generated and placed in "placedObjects" transformgroup.
</p>

<p>
If you used the above LUA script config variables example, it includes "local alignWithTerrain = false" which means objects (trees in our case) are placed exactly to the spline height, so it the spline is not exactly aligned to terrain your trees will either float or get buried underground. You should change this variable to "local alignWithTerrain = true" which aligns the objects into the ground regadless what height the spline is.
</p>

<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("/var/www/include/footer-start.php"); ?>
<?php include("../include/fs22-terrain-editing-tutorial-footer.php"); ?>
<?php include("/var/www/include/footer-end.php"); ?>
<?php include("/var/www/include/support.php"); ?>
<?php include("/var/www/include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
