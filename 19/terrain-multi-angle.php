<!DOCTYPE html>
<html lang="en">
<head>
<title>Multi Terrain Angle Tutorial - PMC Farming Simulator 19</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Multi Terrain Angle Tutorial - PMC Farming Simulator 19">
<META name="keywords" content="Multi, Terrain, Angle, Tutorial, PMC, Farming, FS19">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
<h1><b>Multi Terrain Angle Tutorial - PMC Farming Simulator 19</b></h1>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>Warning About grleConverter Crash</h2>

<p>
<b>2022-02-02T07:01:00Z</b> Updated.
</p>

<p>
<i>Note: this applies to both cultivator_density.gdm and terrainDetailHeight_density.gdm which is used for dump ground fruit type thing.</i>
</p>

<p>
After you finish edits in below tutorial, GRLE converter will <b>crash</b> when you attempt to convert cultivator_density.gdm image. This means that yes you technically could just keep GIMP XCF source image for fields, but if at any time you need to bring GE cultivator_density edits back into GIMP... you are out of luck, it cant be done. So make sure you backup your original cultivator_densigy.png or better yet GIMP XCF image.
</p>

<p>
One example why you would need to bring GE edits back to GIMP is to patch utility pole holes into fields, or tweak some field edges which get too close to roads or buildings etc.
</p>

<p>
It is just a very bad idea to have yourself locked in this situation where you cannot freely convert GDM to PNG anymore. Advice is; don't do it.
</p>


	<h2>Multi Terrain Angle Tutorial FS19</h2>

<p>
Default game config uses terrain textures in 45 degree angles. This tutorial increases that number to create more detailed ground textures (field textures). We are adding 3 more angle channels.
</p>

<p>
Open TERRAIN.i3d file in proper text editor. Search for &lt;DetailLayer name="terrainDetail" string.
</p>

<p>
Change numDensityMapChannels="11" 11 to 16.
</p>

<p>
Change combinedValuesChannels="0 3 0;6 <b>2</b> 0;3 3 1" number section to "0 3 0;6 <b>5</b> 0;3 3 1", only one number change, 2 to 5 <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Go to Farming Simulator 19 root, then to data\shaders\ directory, copy groundShader.xml file into your own terrain projects "maps\shaders" directory.
</p>

<p>
Open groundShader.xml in text editor and search for "angle = ceil(angle*3-0.0001)/4*3.14159;" string.
</p>

<p>
Change this line to "angle = ceil(angle*<b>31</b>-0.0001)/<b>32</b>*3.14159;" So angle*3 becomes angle*31 and 4*3 becomes 32*3.
</p>

<p>
Create modMap.lua script file:
</p>

<pre>
ModMap = {}
local ModMap_mt = Class(ModMap, Mission00)

function ModMap:new(baseDirectory, customMt)
local mt = customMt
if mt == nil then
mt = ModMap_mt
end
local self = ModMap:superClass():new(baseDirectory, mt)

-- Number of additional channels that are used compared to the original setting (2)
local numAdditionalAngleChannels = 3;

self.terrainDetailAngleNumChannels = self.terrainDetailAngleNumChannels + numAdditionalAngleChannels;
self.terrainDetailAngleMaxValue = (2^self.terrainDetailAngleNumChannels) - 1;

self.sprayLevelFirstChannel = self.sprayLevelFirstChannel + numAdditionalAngleChannels;

self.ploughCounterFirstChannel = self.ploughCounterFirstChannel + numAdditionalAngleChannels;

return self
end
</pre>

<p>
The line we edited was "local numAdditionalAngleChannels = 3;" so we ADD three more angle channels.
</p>

<p>
You can skip next step if you already have modMap.lua in your terrain, because modDesc.xml has already been edited.
</p>

<p>
Next open modDesc.xml in text editor and in &lt;maps&gt; property has line which says something like this:
</p>

<pre>
&lt;map id="PMC_Iowa_Garden_City_8km" className="Mission00" filename="$dataS/scripts/missions/mission00.lua" configFilename="maps/PMC_Iowa_Garden_City_8km.xml" defaultVehiclesXMLFilename="defaultVehicles.xml" defaultItemsXMLFilename="defaultItems.xml"&gt;
</pre>

<p>
Change className from Mission00 to modMap and filename from $dataS/... to modMap.lua, below you see our example line with edited properties:
</p>

<pre>
&lt;map id="PMC_Iowa_Garden_City_8km" className="ModMap" filename="modMap.lua" configFilename="maps/PMC_Iowa_Garden_City_8km.xml" defaultVehiclesXMLFilename="defaultVehicles.xml" defaultItemsXMLFilename="defaultItems.xml"&gt;
</pre>

<p>
Finally you need to re-save your terrain project so cultivator_density.gdm will be updated to 16 channels, here is how its done:
</p>

<p>
First convert cultivator_density.gdm image to PNG, then in TERRAIN.i3d edit cultivator_density.gdm to .png extension, then load terrain into GE and just save. To finish this shuffle, change TERRAIN.i3d cultivator_density.png back to original .gdm extension, <i>now</i> we are finally done, ugh <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
All done <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("/var/www/include/footer-start.php"); ?>
<p><a href="terrain-editing-tutorial.php" class="button">PMC Farming Simulator 19 Terrain Editing Tutorial page</a></p>
<p><a href="../index.php" class="button">PMC Farming Simulator root page</a></p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("/var/www/include/footer-end.php"); ?>
<?php include("/var/www/include/support.php"); ?>
<?php include("/var/www/include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
