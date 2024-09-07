<!DOCTYPE html>
<html lang="en">
<head>
<title>Developer Diary PMC Iowa Garden City 8km FS19 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Developer Diary PMC Iowa Garden City 8km FS19 - PMC Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
<h1><b>Developer Diary PMC Iowa Garden City 8km FS19 - PMC Farming</b></h1>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>2023-03-03 Super Detailed Heightmap</h2>

<p>
2023-03-03T19:00:00Z New editing day has started, today I'm playing around with some heightmap stuff.
</p>

<p>
USGS 1 meter detail heightmap download from the website, then normal global mapper heightmap_1m.asc ASCII Grid ASC file export.
</p>

<p>
This download is <b>FRIGGING AMAZING!</b> You get automatic <b>ROAD DITCHES</b> with this level of detail. This is groundbreaking stuff for my FS19 terrain development. If there are 1 meter heightmap resolution data available, it is a MUST HAVE. You do not need to create road elevations and ditches manually in GE etc, they are good to go from 1m heightmap! <img src="../images/smileys/icon_biggrin.gif" alt="Smiley :D" loading="lazy">
</p>

<pre>
heightScale="42.23"
</pre>

<p>
Important thing to note is that while the heightmap SOURCE is 1 meter detail, the actual heightmap grid in GE / FS19 is still 4096 x 4096 points and unitsPerPixel is 2, which means two meters, so technically 50% of the details go missing from the source. However this is technical geek speech, nevermind this, the new heightmap data source is AWESOME!
</p>

<p>
Continue reading <a href="dev-diary-pmc-iowa-garden-city-8km-045.php">next page</a>, back to <a href="dev-diary-pmc-iowa-garden-city-8km.php">Dev Diary PMC Iowa Garden City 8km Homepage</a> or <a href="dev-diary-pmc-iowa-garden-city-8km-043.php">previous page</a>.
</p>

<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("/var/www/include/footer-start.php"); ?>
<p>
<a href="pmc-terrains.php" class="button">PMC Terrains FS19</a>
<a href="changelog-pmc-iowa-garden-city-8km.php" class="button">Changelog PMC Iowa Garden City 8km</a>
<a href="pmc-iowa-garden-city-8km.php" class="button">PMC Iowa Garden City 8km</a>
<a href="../index.php" class="button">PMC Farming Simulator root page</a>
</p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("/var/www/include/footer-end.php"); ?>
<?php include("/var/www/include/support.php"); ?>
<?php include("/var/www/include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
