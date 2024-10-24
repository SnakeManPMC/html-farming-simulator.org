<!DOCTYPE html>
<html lang="en">
<head>
<title>Increase DetailHeight Density Tutorial  PMC Farming Simulator 19</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Increase DetailHeight Density Tutorial  PMC Farming Simulator 19">
<META name="keywords" content="Terrain, DetailHeight, Density, Tutorial, PMC, Farming, FS19">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
<h1><b>Increase DetailHeight Density Tutorial  PMC Farming Simulator 19</b></h1>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>Warning About grleConverter Crash</h2>

<p>
<b>2022-02-02T06:39:00Z</b> Updated.
</p>

<p>
<i>Note: this applies to both terrainDetailHeight_density.gdm and cultivator_density.gdm which is used for multi terrain angle.</i>
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

	<h2>Increase DetailHeight terrainDetailHeight_density</h2>

<p>
Convert terrainDetailHeight_density.gdm to PNG using GRLE Converter.
</p>

<p>
Open TERRAIN.i3d in proper text editor and find "map/terrainDetailHeight_density.gdm", change its extension to PNG.
</p>

<p>
Then search for line: &lt;DetailLayer name="terrainDetailHeight"
</p>

<p>
Change numDensityMapChannels="11" from 11 to 12. Then change three more values as follows.
</p>

<p>
Change compressionChannels="5" to 6.
</p>

<p>
Change combinedValuesChannels="0 5 0;5 6 0" to "0 6 0;6 6 0"
</p>

<p>
Change heightFirstChannel="5" to 6.
</p>

<p>
Save and close TERRAIN.i3d in text editor, then use GE to open TERRAIN.i3d and save it to save that PNG image to GRLE format. When done delete the PNG image.
</p>

<p>
Open TERRAIN.i3d in text editor again and change PNG to GRLE.
</p>

<p>
Go to Farming Simulator 19 install directory, in data\shaders\ you'll find groundHeightShader.xml file, copy it to your terrain directory, place it to "TERRAINROOT\maps\shaders\" directory.
</p>

<p>
Then in TERRAIN.i3d file find $data/shaders/groundHeightShader string.
</p>

<p>
Change its path from "$data/ to simply "shaders/ so this file is read from your terrains shader directory.
</p>

<p>
Next open groundHeightShader.xml in text editor, search for "../shared/groundHeightNoise.png", change "../shared/" to "$data/shared/".
</p>

<p>
Next find "globals.groundType *= 31;" and change 31 to 63.
</p>

<p>
Save the XML and close it.
</p>

	<h2>LUA Script</h2>

<p>
Create new LUA script file with file name "modMap.lua" and place it to your terrain projects root directory. Open modMap.lua in text editor, copy paste the following there:
</p>

<p>
modMap.lua:
</p>

<pre>
ModMap = {}
local ModMap_mt = Class(ModMap, Mission00)

function ModMap:new(baseDirectory, customMt, missionCollaborators)
    local mt = customMt
    if mt == nil then
        mt = ModMap_mt
    end
    local self = ModMap:superClass():new(baseDirectory, mt, missionCollaborators)

    self.terrainDetailHeightTypeNumChannels = self.terrainDetailHeightTypeNumChannels + 1;

    return self
end
</pre>

<p>
If you already have multi terrain angle or other features in your terrain that modMap.lua exists, then just add the following script line to it:
</p>

<pre>
self.terrainDetailHeightTypeNumChannels = self.terrainDetailHeightTypeNumChannels + 1;
</pre>

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
&lt;map id="PMC_Iowa_Garden_City_8km" className="modMap" filename="modMap.lua" configFilename="maps/PMC_Iowa_Garden_City_8km.xml" defaultVehiclesXMLFilename="defaultVehicles.xml" defaultItemsXMLFilename="defaultItems.xml"&gt;
</pre>

<p>
All done, congrats for increasing terrainDetailHeight_density <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("/var/www/include/footer-start.php"); ?>
<?php include("../include/fs19-terrain-editing-tutorial-footer.php"); ?>
<?php include("/var/www/include/footer-end.php"); ?>
<?php include("/var/www/include/support.php"); ?>
<?php include("/var/www/include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
