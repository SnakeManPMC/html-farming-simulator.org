<!DOCTYPE html>
<html>
<head>
<title>Farming Simulator Settings - PMC Tactical</title>
<LINK href="css.css" rel=stylesheet type="text/css">
<META name="description" content="Farming Simulator Settings - PMC Tactical">
<META name="keywords" content="Farming Simulator, Settings, PMC, Tactical">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("include/google-analytics.php"); ?>

</head>
<body>

<header>
<!-- google ads -->
<?php include("include/google-ads.php"); ?>
<h1><b>PMC Tactical Farming Simulator Settings</b></h1>
</header>

<section>
<h2>Users Directory</h2>

<p><b>User Settings Directory</b>
</p>

<p>In their stupidity farming simulator 17 devs decided to put user settings / saves and even damn MODS (sigh) into this one main directory... which is under windows c:\users\ dir... deep sigh... most people have C: operating system drive as small SSD and there is <i>not</i> enough space for gigabytes of mods :(
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

</section>

<footer>
<p>Back to <a href="index.php">PMC Farming Simulator root page</a></p>
<br><br>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
