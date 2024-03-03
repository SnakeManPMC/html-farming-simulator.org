<!DOCTYPE html>
<html lang="en">
<head>
<title>Farming Simulator Settings - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Farming Simulator Settings - PMC Farming">
<META name="keywords" content="Farming Simulator, Settings, PMC, Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<!-- google ads -->
<?php include("../include/google-ads.php"); ?>
<h1><b>PMC Farming Simulator Settings</b></h1>
</header>

<section>
<h2>Users Directory</h2>

<p><b>User Settings Directory</b>
</p>

<p>In their stupidity farming simulator 17 devs decided to put user settings / saves and even damn MODS (sigh) into this one main directory... which is under windows c:\users\ dir... deep sigh... most people have C: operating system drive as small SSD and there is <i>not</i> enough space for gigabytes of mods <img src="images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>Settings dir:
</p>
<pre>
C:\Users\YOURNAME\Documents\My Games\FarmingSimulator2017\
</pre>

<p>Every path and file name in this page references to this idiotic dir, so add it to the beginning of the stuff listed below.
</p>

<p><b>Controls</b>
</p>

<p>Print Screen button conflicts with FRAPS or other screenshotting software, so open:
</p>
<pre>
inputBinding.xml
</pre>
<p>
file and edit <b>TAKE_SCREENSHOT</b> value there to empty. Now the game wont take screenshots.
</p>

<p>Mouse sensitivity, to change the ridiculously slow movement in camera view, change:
</p>
<pre>
	mouseSensitivityScaleX="6.000000" mouseSensitivityScaleY="6.000000"
</pre>

<p>Note that when you change in-game settings, the inputBinding.xml file's mouse sensitivity gets resetted to default, so every time you change settings you have to re-edit this xml file.
</p>

<h2>Music</h2>

<p>I think there is few "radio channel" music stuffs in the game itself, but you can add local MP3 files and internet radio stations. However its 2017 and people use their favorite software / sites to listen to music, its kind of moot point to have such feature in-game, but here are the details how to use that feature.
</p>

<p><b>Directory</b>
</p>

<p>In this directory you'll find the XML config file for streaming radio stations links or where you place your MP3 files (or windows short-cuts).
</p>

<pre>
Music\
</pre>

<p><b>Local MP3 Files</b>
</p>

<p>Place the files in this dir or short-cut into those directories. Sub dirs are also supported.
</p>

<p><b>Radio Stations</b>
</p>

<p>URLs ending in .mp3 .m3u or .pls are supported for streaming radio stations.
</p>

<p>However you cannot have game .EXE blocked by firewall obviously in this case.
</p>

<p>Stream URLs:
</p>
<pre>
streamingInternetRadios.xml
</pre>

<p>For example some psychobilly:
</p>
<pre>
	&lt;streamingInternetRadio href="http://listen.radionomy.com/rockin-devilradio.m3u" /&gt;
	&lt;streamingInternetRadio href="http://listen.radionomy.com/rockin-therapy-radio.m3u" /&gt;
	&lt;streamingInternetRadio href="http://listen.radionomy.com/surfabillyfreakout.m3u" /&gt;
	&lt;streamingInternetRadio href="http://uk6.internet-radio.com:8465/listen.pls&t=.m3u" /&gt;
	&lt;streamingInternetRadio href="http://listen.shoutcast.com/113fmbigkickin-country.m3u" /&gt;
</pre>
<p>That is how you setup music / radio channels in-game.
</p>

<p>
<b>Savegame directories</b> are located in:
</p>
<pre>
"C:\Users\USERNAME\Documents\My Games\FarmingSimulator2017\savegame1"
</pre>
<p>And going from savegame1 to savegame20.
</p>

<p>If you need to organize your saves so that lets say you dont have to scroll to your latest save everytime to position 15, you can simply swap the contents of savegame1 and savegame15.
</p>

<p>
Always nice to have your often used save, or perhaps if you keep slot 1 free for testing of all kinds of mods and maps then you dont have to scroll to the first free savegame slot.
</p>

<p>
<b>Developer Mode</b>
</p>

<p>
game.xml at bottom you'll find &lt;development&gt; parameter, set this to TRUE. Development mode: tilde is console log. F5 is the view trigger wireframe mode. F2 framerates.
</p>

<p>
<b>Graphical Settings</b>
</p>

<p>
Normal graphics options are in the options menu in-game, but you can also change the LOD and view distance settings from the game.xml file to increased numbers depending on your hardware capabilities.
</p>

<p>
These control the detail LOD distance stuff, default is 2. My nVidia GTX Titan X started to stutter with value 8.
</p>
<pre>
	&lt;lodDistanceCoeff&gt;4.000000&lt;/lodDistanceCoeff&gt;
	&lt;foliageViewDistanceCoeff&gt;4.000000&lt;/foliageViewDistanceCoeff&gt;
	&lt;foliageDensitySlider&gt;1.000000&lt;/foliageDensitySlider&gt;
	&lt;viewDistanceCoeff&gt;4.000000&lt;/viewDistanceCoeff&gt;
</pre>

<p>
<b>Custom MOD Directory</b>
</p>

<p>
Sometimes its useful to be able to map mod directory to whatever you want instead of the game default on c:\users\, here is how you customize it.
</p>
<pre>
	&lt;modsDirectoryOverride active="false" directory="C:/Temp"/&gt;
</pre>

</section>

<footer>
<p><a href="../index.php" class="button">PMC Farming Simulator root page</a></p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("../include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
