<!DOCTYPE html>
<html lang="en">
<head>
<title>Farming Simulator 19 Settings - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Farming Simulator 19 Settings - PMC Farming">
<META name="keywords" content="Farming, Simulator, Settings, PMC, Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<!-- google ads -->
<?php include("../include/google-ads.php"); ?>
<h1><b>PMC Farming Simulator 19 Settings</b></h1>
</header>

<section>

<p>
<b>2021-07-01</b> updated.
</p>

	<h2>game.xml</h2>

<p>
game.xml file is located at:
</p>
<pre>
C:\Users\MYNAME\Documents\My Games\FarmingSimulator2019\
</pre>

	<h2>Graphics Settings</h2>

<p>
<b>game.xml</b> config file allows you to configure graphics options, higher values than what in-game user interface does. Every time you change in-game options game.xml is overwritten and any edits you did there will be reset to default.
</p>

<p>
These settings go to &lt;scalability&gt; property.
</p>

<p>
Lowest settings with in-game options:
</p>
<pre>
&lt;viewDistanceCoeff&gt;0.500000&lt;/viewDistanceCoeff&gt;
&lt;lodDistanceCoeff&gt;0.500000&lt;/lodDistanceCoeff&gt;
&lt;terrainLODDistanceCoeff&gt;0.500000&lt;/terrainLODDistanceCoeff&gt;
&lt;foliageViewDistanceCoeff&gt;0.500000&lt;/foliageViewDistanceCoeff&gt;
&lt;tyreTracksSegmentsCoeff&gt;0.000000&lt;/tyreTracksSegmentsCoeff&gt;
</pre>

<p>
Highest settings from in-game options:
</p>
<pre>
&lt;viewDistanceCoeff&gt;2.000000&lt;/viewDistanceCoeff&gt;
&lt;lodDistanceCoeff&gt;2.000000&lt;/lodDistanceCoeff&gt;
&lt;foliageViewDistanceCoeff&gt;2.000000&lt;/foliageViewDistanceCoeff&gt;
</pre>

<p>
<b>Recommended</b>. These are good long view distance settings which do not cause issues to FS19 performance, we regularly play 60FPS with these settings.
</p>

<pre>
&lt;viewDistanceCoeff&gt;5.000000&lt;/viewDistanceCoeff&gt;
&lt;lodDistanceCoeff&gt;5.000000&lt;/lodDistanceCoeff&gt;
&lt;foliageViewDistanceCoeff&gt;2.000000&lt;/foliageViewDistanceCoeff&gt;
&lt;volumeMeshTessellationCoeff&gt;0.500000&lt;/volumeMeshTessellationCoeff&gt;
</pre>

<p>
view and lod distanceCoeff as 5 works for our computer GPU, it might not work for yours. Try these and if you get bad performance then try value like 4, if even that gives you a bad performance try 3. If you get bad performance even on value 3 then whatever terrain you're playing on might be too densily populated with trees and buildings etc. Try one of the <a href="pmc-terrains.php">PMC terrains</a> which all give you guaranteed 60FPS performance assuming your computer is working properly.
</p>

<p>
foliageViewDistanceCoeff seems to be the most resource heavy, be very careful when experimenting with these values as anything more than 2 most likely start to bring FPS performance down. In our experiments value foliageViewDistanceCoeff 3 still works more or less ok, but you most likely encounter some heavy CPU use scenarios which eventually bring FPS performance down. You can usually see it clearly if you watch directly into sky or ground at your feet without any objects on sight, when your FPS goes right back up, that means your scene (vehicles, objects etc) or these settings is just too heavy for your computer.
</p>

	<h2>HOWTO Disable Intro Movies</h2>

<p>
In your FS19 shortcut add -restart startup parameter. Open game.xml and change &lt;startMode&gt;1&lt;/startMode&gt; to zero like &lt;startMode&gt;0&lt;/startMode&gt; this. Now when you start FS19 the intro logos and movie will not play saving you many key presses to bypass them <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

	<h2>HOWTO Disable Screenshot Key</h2>

<p>
Open inputBinding.xml and seach for TAKE_SCREENSHOT, then replace it with &lt;binding device="KB_MOUSE_DEFAULT" input="" axisComponent="+" neutralInput="0" index="1"/&gt;
</p>

	<h2>Developer Mode</h2>

<p>
See <a href="../settings.php">FS17 Settings</a> page how to activate developer mode.
</p>

<p>
Commands: gsCheatMoney adds 10 million cheat money. gsCheatMoney NUMBER adds specific number of money.
</p>

<p>
gsAddBale straw drops star square bale in front of you, additional repeated commands drop more. use "straw", "silage". Use "silage true" to drop square silage bale.
</p>

<p>
gsCheatSilo wheat 100 adds 100 liters wheat to your farm silo.
</p>

<p>
gsToggleFlightAndNoHUDMode. Use playerspeedmod which allows you to move the camera really fast. Use tilde ` to bring up console, type "gsT" and then hit tab until you get gsToggleFlightAndNoHUDMode and then hit enter to activate it.
</p>

<p>
Now press J to enable/disable flying and Q key to increase and E key to decrease altitude. O key disables HUD so you dont need to use external mods for that either.
</p>

</section>

<footer>
<p><a href="../index.php" class="button">PMC Farming Simulator root page</a></p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("../include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
