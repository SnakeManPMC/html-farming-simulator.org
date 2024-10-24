<!DOCTYPE html>
<html lang="en">
<head>
<title>Environmental Sounds Farming Simulator 19 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Environmental Sounds Farming Simulator 19 - PMC Farming">
<META name="keywords" content="Terrain, Environmental Sounds, PMC, Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
<h1><b>PMC Farming Simulator Terrain Environmental Sounds</b></h1>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>Environmental Sounds</h2>

<p>
If you do not use your own _sound.* files then you inherit the mapDE/mapUS environmental sounds like birds, water, wind, etc. See below how to add custom _sound.* file setup to your terrain.
</p>

<p>
- copy mapDE_sound.i3d and mapDE_sound.xml files from fs19_root/data/maps/ directory to your terrain maps/ directory<br>
- rename mapDE_sound.* files to your terrain name like name_sound.* (one of ours is PMC_Iowa_Ringsted_8km_sound.* so its not "name" literally, its just for examples sake)<br>
- GE edit name_sound.i3d and remove the sounds you dont need, you can also move or add sounds<br>
- edit name_sound.xml and change filename="$data/maps/mapDE_sound.i3d" to filename="maps/name_sound.i3d"<br>
- edit maps/name.xml and change &lt;sounds filename="$data/maps/mapDE_sound.xml" /> to &lt;sounds filename="maps/name_sound.xml" /&gt;
</p>

<p>
All done, now your terrain will play the sounds from your maps/name_sound.i3d file, so no more ocean sounds in middle of the terrain in fields etc (assuming you removed the water sounds).
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
