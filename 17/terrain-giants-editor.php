<!DOCTYPE html>
<html lang="en">
<head>
<title>Giants Editor Farming Simulator 17 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Giants Editor Farming Simulator 17 - PMC Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
	<h1>Giants Editor Farming Simulator 17 - PMC Farming</h1>

<p>
Terrain Editing Tutorial: Giants Editor for Farming Simulator 17 (FS17) by PMC.
</p>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
<?php include("/var/www/include/support.php"); ?>
	<h2>Giants Editor FS17</h2>

<p>
Giants Editor (GE) is used to edit FS17 terrains. You need to register into <a href="https://gdn.giants-software.com/" target="_blank">Giants Developer Network</a> (giants GDN) to get the latest Giants Editor. Download and install the latest editor.
</p>

<p>
You should have some basic windows open in it, these include; scenegraph, terrain editing, attributes, user attributes and console.
</p>

<p>
Giants Editor camera movement;<br>
RMB + WASD keys<br>
LMB-Middle Mouse Button pans<br>
ALT-LMB rotates the view<br>
ALT-RMB moves camera back and forth<br>
F key focuses / moves camera on selected object
</p>

<p>
Keyboard short cuts:<br>
CTRL-D duplicate selected object(s)<br>
CTRL-B then LMB duplicate selected object(s) where the mouse cursor is at LMB press moment.
</p>

<p>
PDA Camera. Create new scenegraph item of camera (Create -> Camera), in attributes window transform name it to PDAcamera or something. Use translate Y: 4000 and rotate X: -90. Translate Y is your terrain size, so for 2km terrains use 2048, for 3km terrains use 3072 and for 6.1km terrains use 6144, etc etc.
</p>

<p>
Huge terrains: you need to run a script to allow the editor to display large terrains properly, download: Giants_Editor_Scripts_2018-07-11.7z from PMC torrent download service. PMCTODO add the missing torrent magnet.
</p>

<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("/var/www/include/footer-start.php"); ?>
<?php include("../include/fs17-terrain-editing-tutorial-footer.php"); ?>
<?php include("/var/www/include/footer-end.php"); ?>
<?php include("/var/www/include/support.php"); ?>
<?php include("/var/www/include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
