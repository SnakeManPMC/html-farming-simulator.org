<!DOCTYPE html>
<html lang="en">
<head>
<title>HOWTO Fix meadowUS.xml Warning Farming Simulator 22 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="HOWTO Fix meadowUS.xml Warning Farming Simulator 22 - PMC Farming">
<META name="keywords" content="Terrain, meadowUS.xml, Warning, Log, FS22, PMC, Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
<h1><b>HOWTO Fix meadowUS.xml Warning Farming Simulator 22 - PMC Farming</b></h1>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>Warning In The Log</h2>

<p>
FS22 v1.2.0.2 mapUS terrain source files give you editor and in-game warning in the log:
</p>

<pre>
Warning (performance): Foliage lod 1 mesh 'meadow' 'cut' 'cut' is much larger than lod 0 mesh (min/maxY (-0.175/0.082 vs -0.125/0.103).
</pre>

<p>
HOWTO fix this is easy. Open your TERRAIN.i3d file and string search for "meadowUS.xml":
</p>

<pre>
&lt;File fileId="234" filename="$data/foliage/meadow/meadowUS.xml"/&gt;
</pre>

<p>
Then change it to:
</p>
<pre>
&lt;File fileId="234" filename="$data/foliage/meadow/meadowDLC.xml"/&gt;
</pre>

<p>
This will fix the warning in both Giants Editor v9.0.2 and in FS22 game log files.
</p>

<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("/var/www/include/footer-start.php"); ?>
<p><a href="map-making-tutorial.php" class="button">PMC Farming Simulator 22 Map Making Tutorial page</a></p>
<p><a href="../index.php" class="button">PMC Farming Simulator root page</a></p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("/var/www/include/footer-end.php"); ?>
<?php include("/var/www/include/support.php"); ?>
<?php include("/var/www/include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
