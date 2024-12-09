<!DOCTYPE html>
<html lang="en">
<head>
<title>Giants Editor Preferences General Tab Farming Simulator 25 - PMC Farming</title>
<LINK href="../../css.css" rel=stylesheet type="text/css">
<META name="description" content="Giants Editor Preferences General Tab Farming Simulator 25 - PMC Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("../../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
	<h1>Giants Editor Preferences General Tab Farming Simulator 25 - PMC Farming</h1>

<p>
Giants Editor Preferences General Tab Farming Simulator 25 (FS25).
</p>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
<?php include("/var/www/include/support.php"); ?>
	<h2>Giants Editor Preferences General Tab FS25</h2>

<p>
In Giants Editor when you use file -&gt; preferences as shown below.
</p>

<img src="screenshots/Giants-Editor-File-Preferences.jpg" class="imgresponsive" loading="lazy" alt="Giants Editor File Prefrences" title="Giants Editor File Prefrences">

<p>
It opens up prefrences general tab.
</p>

<img src="screenshots/Giants-Editor-Preferences-General-Tab.jpg" class="imgresponsive" loading="lazy" alt="Giants Editor Preferences General Tab" title="Giants Editor Preferences General Tab">

<p>
Perhaps the most imporatant first time configuration setting is to make sure <b>Game Installation Path</b> is set properly to point into your Farming Simulator 25 install directory.
</p>

<p>
In my above example image it points to C:/Games/fs25/ dir. Giants Editor uses forward slash '/' instead of backwards slash '\' characters for directory paths, that is normal, for Giants Editor and Farming Simulator 25 use, those work fine but don't use them elsewhere in your windows environment.
</p>

<p>
<b>Resource Consumption</b> max undo memory percentage of system memory, then it lists your current system memory.
</p>

<p>
<b>Warnings</b> show save warning, when this is disabled the editor will exit immediately when you tell you to do so, otherwise it asks for confirmation that do you want to save before exiting. Overall I would say its a good idea to leave the confirmation in place, just in case you accidentally clicked top-right corner X to close the program.
</p>

<p>
<b>Update</b> enable update notification will show a dialog when there is a new Giants Editor update available.
</p>

<p>
<b>Drag & Drop</b> import I3D as reference on/off.
</p>

<p>
<b>Logging</b> enable file logging is the text <a href="giants-editor-log-file.php">editor_log.txt</a> file, this should be always on, editor_log.txt gives you valuable information during editing, especially when there are errors. Even though it might appear so, you cannot change the file directory path here which is unfortunate, also you cant change the path even at editor.xml config file.
</p>

<p>
<b>Save and Export as Wavefront OBJ</b> this part has three options. Frustum Culled on/off, Only Terrain on/off and Scale.
</p>

<p>
<b>External Tools</b> text editor path should be set to <a href="https://pmc.editing.wiki/doku.php?id=tools:notepad-plus-plus" target="_blank">Proper Text Editor</a> and giants studio path if you are using that studio.
</p>

<p>
<b>Game Installation</b> path to the dir where FS25 is installed.
</p>

<p>
<b>Editor Language</b> english do you speak it!? What? say what one more time, I dare you, I double dare you Mmmhh, say what one more time! <img src="../../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
<b>Primitives</b> cube, plane, sphere, cylinder, cone, pyramid and custom primitives path (browse dialog button).
</p>

<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("/var/www/include/footer-start.php"); ?>
<p>
<a href="giants-editor-configure.php" class="button">Giants Editor Configure page</a>
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
