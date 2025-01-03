<!DOCTYPE html>
<html lang="en">
<head>
<title>Giants Editor Farming Simulator 19 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Giants Editor Farming Simulator 19 - PMC Farming">
<META name="keywords" content="Terrain, Giants, Editor, FS19, PMC, Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
<h1><b>Giants Editor Farming Simulator 19 - PMC Farming</b></h1>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>Giants Editor</h2>

<p>
<b>2021-07-11</b> updated.
</p>

<p>
Giants Editor (GE) is used to edit Farming Simulator 19 (FS19) terrains and models.
</p>

<p>
If you get huge list of errors about case sensitivity, you must fix the game installation path to be case sensitive from file -> preferences -> game installation path. Next time when you load any terrain there wont be game installation path case sensitive errors.
</p>

<p>
GE got v8.1 release on 2019-02-09, new features were toggle options for interactive placement mode. S Scale new objects randomly (range according to preferences), C Don't place new objects on objects created during the current session, T Only place new objects on terrain.
</p>

<p>
GE got v8.2 release on 2019-11-22. Some nice fixes for terrain editing.
</p>

<p>
Use file -> preferences -> viewport -> interactive placement scale variance. This will set the object placing using CTRL-B with random scale.
</p>

<p>
HOWTO use new interactive placement for trees. Select a tree, press CTRL-B, click and HOLD LMB somewhere on the terrain. Now in bottom of GE status bar you see new options "Interactive placement: align to normal 'B' (Off) random scale 'S' (Off) self avoidance 'C' (Off) terrain height 'T' (Off)". While LMB down you hit B, S, C or T keys will turn on/off these toggles. Press left CTRL to place (duplicate) object into the location it is at. Once you release LMB the selected object is placed and interactive mode turns off.
</p>

<p>
Converting old terrain. Use file -> open mod, then browse to your terrains modDesc.xml file, rest is just clicking OK button and seeing what happens. While its processing be patient and wait, GE looks like its doing nothing but it is processing something on the background, you will get notification when its done.
</p>

<p>
When you change _density image resolution you must run GE -> scripts -> fs19 -> map -> create ground collision map.
</p>

<p>
Large terrain support for GE by using <a href="downloads/GE.Setup.8km.16km.32km.Terrain.Scripts.2020-05-05.7z">GE.Setup.8km.16km.32km.Terrain.Scripts.2020-05-05.7z</a>. This includes 8km, 16km and 32km scripts. Unpack 7zip to scripts directory, start GE, load a huge terrain, then run one of these scripts and your terrain is properly rendered in scenegraph.
</p>

<p>
Spline align to terrain, you can align whole spline to terrain using CTRL-B and LMB. Aligning to ground individual control vertexes use PGN-DOWN key, make sure the control vertex is above the terrain otherwise it wont work.
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
