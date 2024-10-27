<!DOCTYPE html>
<html lang="en">
<head>
<title>Field Texture Paintable - PMC Farming Simulator 22 (FS22)</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Field Texture Paintable - PMC Farming Simulator 22 (FS22)">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
<h1>Field Texture Paintable - PMC Farming Simulator 22 (FS22)</h1>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>Paintable Field Texture In FS22</h2>

<p>
Join discussion in <a href="https://www.pmctactical.org/forum/viewtopic.php?f=78&t=22950" target="_blank">PMC Tactical Forum Terrain Paintable Field Texture FS22 Tutorial topic</a> and see what else is in <a href="https://www.pmctactical.org/forum/viewforum.php?f=78" target="_blank">PMC Tactical Forum FS22 Editing area</a>.
</p>

<p>
<b>2024-03-09T22:59:00Z</b> Updated.
</p>

<p>
HOWTO add paintable field mod into your own terrain(s). You can paint surface field ground textures in the <b>FS22 Landscaping Build Mode</b>. Other words "how can I paint fields in farmsim?" without the need to use my plough to create new fields. For how to use this texture painting, see <a href="guide-build-mode.php">FS22 Guide Build Mode</a> page for details.
</p>

<p>
Download <a href="https://www.farming-simulator.com/mod.php?mod_id=258410" target="_blank">Paintable Field mod by emproLoop</a> from giants modhub.
</p>

<p>
Unpack FS22_PaintableField_prefab.zip to temporary directory.
</p>

<p>
Move cultivatedBrush.xml, plowedBrush.xml, ridgedBrush.xml, store_cultivatedBrush.dds, store_plowedBrush.dds, store_ridgedBrush.dds, store_stubbleTillagedBrush.dds and stubbleTillagedBrush.xml into your maps/CLASSNAME/ directory, right next to your TERRAIN.xml config file. You obviously replace "CLASSNAME" of the actual class name of your own terrain.
</p>

<p>
In <a href="https://www.pmctactical.org/forum/viewtopic.php?f=66&t=22931" target="_blank">proper text editor</a> open cultivatedBrush.xml, plowedBrush.xml, ridgedBrush.xml and stubbleTillagedBrush.xml XML config files.
</p>

<p>
Edit &lt;image&gt;store_cultivatedBrush.dds&lt;/image&gt; (and the other DDS names across these XML config files) to read &lt;image&gt;maps/CLASSNAME/store_cultivatedBrush.dds&lt;/image&gt; instead. Basically adding your "maps/CLASSNAME/" directory path into front of the DDS image file name.
</p>

<p>
In text editor open TERRAIN.xml and find &lt;paintableFoliages&gt; property, in there add the following line:
</p>

<pre>
&lt;paintableFoliage layerName="terrainDetail" startChannel="0" numStateChannels="4" /&gt;
</pre>

<p>
In text editor open storeItems.xml file (if you're using one, otherwise edit modDesc.xml where storeItems property is) and add following lines (not duping storeItems property obviously):
</p>

<pre>
&lt;storeItems&gt;
	&lt;storeItem xmlFilename="cultivatedBrush.xml" /&gt;
	&lt;storeItem xmlFilename="plowedBrush.xml" /&gt;
	&lt;storeItem xmlFilename="ridgedBrush.xml" /&gt;
	&lt;storeItem xmlFilename="stubbleTillagedBrush.xml" /&gt;
&lt;/storeItems&gt;
</pre>

<p>
All done, test your terrain and you should find new paintable fields textures by emproLoop in SHIFT-P -&gt; landscaping -&gt; plants, sub tab.
</p>

<p>
Please note about game-play: using landscaping tools costs in-game money HUNDREDS OF THOUSANDS of dollars when you do few roads and try to paint even a small size field. If money is no issue for you, then no problem, but if you're beginner new farmer etc game-mode with short on cash, do not use landscaping tools as they cost a lot of money. Recommended mod to use: <a href="https://www.farming-simulator.com/mod.php?mod_id=225034" target="_blank">Free Landscaping Tools</a> from giants modhub.
</p>

<p>
<?php include("../include/fs22-keywords-base.php"); ?>
<?php include("../include/fs22-keywords-terrain-editing-tutorial.php"); ?>
This is <b>The Best FS22 Editing Tutorial</b> in our paintable fields category heh.
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
