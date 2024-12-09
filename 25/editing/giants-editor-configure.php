<!DOCTYPE html>
<html lang="en">
<head>
<title>Giants Editor Configure Farming Simulator 25 - PMC Farming</title>
<LINK href="../../css.css" rel=stylesheet type="text/css">
<META name="description" content="Giants Editor Configure Farming Simulator 25 - PMC Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("../../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
	<h1>Giants Editor Configure Farming Simulator 25 - PMC Farming</h1>

<p>
Giants Editor HOWTO Configure Farming Simulator 25 (FS25).
</p>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
<?php include("/var/www/include/support.php"); ?>
	<h2>Giants Editor HOWTO Configure FS25</h2>

<p>
You can configure Giants Editor from the graphical user interface (GUI) or manually editing the configuration file. Most people probably feel more comfortable using editor GUI.
</p>

<p>
<a href="giants-editor-preferences-general.php">Giants Editor Preferences General Tab</a>
</p>

<p>
<a href="giants-editor-preferences-viewport.php">Giants Editor Preferences Viewport Tab</a>
</p>

<p>
<a href="giants-editor-scripting.php">Giants Editor Preferences Scripting Tab</a>
</p>

<p>
<a href="giants-editor-shortcuts.php">Giants Editor Preferences Shortcuts Tab</a>
</p>

<p>
Giants Edior v10.0.x configuration file is located in the following directory:
</p>

<pre>
C:\Users\USERNAME\AppData\Local\GIANTS Editor 64bit 10.0.2
</pre>

<p>
Simply replace USERNAME with your windows user name. In the above example Giants Editor v10.0.2 user config dir is shown, you should always make sure you are editing the correct version of Giants Editor, otherwise it could lead into confusion as you do edits but they do not work in the editor after a restart.
</p>

<p>
Speaking of restarts, you should always cleanly shut down Giants Editor before manually editing configuration file.
</p>

<p>
Configuration file name for Giants Editor is called <b>editor.xml</b> which is standard XML file format, you can easily edit this with a <a href="https://pmc.editing.wiki/doku.php?id=tools:notepad-plus-plus" target="_blank">Proper Text Editor</a>.
</p>

<p>
When you open edit.xml in Notepad++ don't be alarmed by its large size, you can use CTRL-F hotkey to search for specific strings of text in the XML configuration file.
</p>

<p>
You should replace this:
</p>

<pre>
interactive_placement_scale="0.000000"
</pre>

<p>
With at least bare minimum of 0.3 value like this:
</p>

<pre>
interactive_placement_scale="0.3"
</pre>

<p>
Interactive placement scale is for using CTRL-B to place objects manually but with random scale and rotation. This feature is no match for proper large scale random object placement, but it comes handy sometimes, for vegetation you definitely are required ot have placement scale randomness.
</p>

<p>
You can also edit this value from Giants Editor graphical user interface (GUI) itself.
</p>

<p>
Another useful feature to enable is ground detail texture preview.
</p>

<pre>
enable_terrain_edit_preview="false"
</pre>

<p>
Switch that to "true" and its enabled.
</p>

<p>
To configure external text editor, Giants Studio and game installation path, search for &lt;common&gt; string, as seen below.
</p>

<pre>
&lt;common&gt;
	&lt;texteditor>C:/Wintools/Notepad.Plus.Plus/notepadPP.exe&lt;/texteditor&gt;
	&lt;giantsstudio&gt;&lt;/giantsstudio&gt;
	&lt;gameinstallationpath&gt;C:/Games/fs25/&lt;/gameinstallationpath&gt;
</pre>

<p>
The most important config is <b>gameinstallationpath</b>. If that directory path is set improperly, then you cannot edit FS25 project files.
</p>

<p>
If your graphics card is not very powerful, you could try to lower <b>performanceClass</b> setting as its seen "Very Low" in below example.
</p>

<pre>
&lt;graphic&gt;
	&lt;renderer&gt;Vulkan&lt;/renderer&gt;
	&lt;scalability&gt;
		&lt;performanceClass&gt;Very Low&lt;/performanceClass&gt;
		&lt;postProcessAA&gt;Off&lt;/postProcessAA&gt;
</pre>

<p>
Not exactly sure it makes a difference in Giants Editor, but at least it wont hurt to configure it. Please note that if your graphics card has 3 gigabytes of VRAM it will not be able to run Giants Editor v10.0.x, you have to purchase video card which has enough VRAM, one confirmed number I have is 8gb, such card with eight gigs of VRAM can run Giants Editor v10.0.3 at least.
</p>

<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("/var/www/include/footer-start.php"); ?>
<p>
<a href="giants-editor.php" class="button">Giants Editor FS25</a>
<a href="../../17/terrain-editing-tutorial.php" class="button">Terrain Editing Tutorial FS17</a>
<a href="../../19/terrain-editing-tutorial.php" class="button">Terrain Editing Tutorial FS19</a>
<a href="../../22/terrain-editing-tutorial.php" class="button">Terrain Editing Tutorial FS22</a>
<a href="../terrain-editing-tutorial.php" class="button">Terrain Editing Tutorial FS25</a>
<a href="https://www.pmctactical.org/forum/viewforum.php?f=81" target="_blank" class="button">FS25 Editing Forum</a>
<a href="../../index.php" class="button">PMC Farming Simulator root page</a>
</p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("/var/www/include/footer-end.php"); ?>
<?php include("/var/www/include/support.php"); ?>
<?php include("/var/www/include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
