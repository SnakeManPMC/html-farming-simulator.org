<!DOCTYPE html>
<html lang="en">
<head>
<title>Terrain heightScale - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Terrain heightScale - PMC Farming">
<META name="keywords" content="heightScale, heightmap, terrain, PMC, Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
<h1><b>PMC Farming Terrain heightScale</b></h1>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
<h2>Terrain heightScale</h2>
<p>
Terrain heightmap in Farming Simulator 19 is grayscale image, heightScale is a property in terrain.i3d which defines the range of elevation meters between darkest and brightest colors in heightmap image. Giants terrains use heightScale of 255.
</p>

<pre>
heightScale="255"
</pre>

<p>
Value of 255 is most likely wrong for your specific terrain.
</p>

<p>
You can edit terrain.i3d in proper text editor and search for heightScale= or in GE click scenegraph -> terrain -> attributes -> height scale.
</p>

<p>
Real world data terrains benefit from proper heightScale the most as you want elevations as accurate as possible. In fictional terrains its less important as "whatever works" kind of works fine, elevations are what you sculpt them to be. Obviously if you create heightmap accurately in tool like L3DT and want to bring in the fictional heightmap into GE properly you should still use correct heightScale.
</p>

<p>
L3DT shows you lowest and highest elevations when you have heightmap loaded and do operations -> heightfield -> change vertical range. Now you see dialog with Min alt (m) and Max alt (m) which are meters. Simply look at Altitude range (m) which directly tells you what the heightScale is.
</p>

<p>
See also <a href="terrain-heightmap.php">heightmap</a>.
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
