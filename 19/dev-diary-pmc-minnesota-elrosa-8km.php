<!DOCTYPE html>
<html lang="en">
<head>
<title>Developer Diary PMC Minnesota Elrosa 8km - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Developer Diary PMC Minnesota Elrosa 8km - PMC Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
<h1><b>Developer Diary PMC Minnesota Elrosa 8km - PMC Farming</b></h1>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>Beginning</h2>

<p>
This is a developer diary for Farming Simulator 19 (FS19) terrain called <a href="pmc-minnesota-elrosa-8km.php">PMC Minnesota Elrosa 8km</a>.
</p>

<p>
Unfortunaely I was not writing dev diary texts back when PMC Minnesota Elrosa 8km terrain was created and edited.
<!--, only thing closest to a history is <a href="changelog-pmc-minnesota-elrosa-8km.php">changelog</a>.-->
</p>

<p>
2023-02-24T16:22:00Z
</p>

<p>
Opened PMC Minnesota Elrosa 8km terrain in global mapper, exported KMZ and then terra incognita downloaded ArcGIS world imagery satellite imagery source. This was done out of pure curiosity, how has the satellite imagery changed since 2019, there was no need to download this because existing US NAIP source is mere perfect.
</p>

<p>
Checked the new ArcGIS world imagery download in global mapper and whoah it was worse than old 2019 one, there was a cloud puff around in the center area, well so much for that then heh. But as said there is already great US NAIP source so no worries.
</p>

<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("/var/www/include/footer-start.php"); ?>
<p>
<a href="pmc-terrains.php" class="button">PMC Terrains FS19</a>
<!--
<a href="changelog-pmc-minnesota-elrosa-8km.php" class="button">Changelog PMC Minnesota Elrosa 8km</a>
<a href="screenshots-pmc-minnesota-elrosa-8km.php" class="button">Screenshots PMC Minnesota Elrosa 8km</a>
-->
<a href="pmc-minnesota-elrosa-8km.php" class="button">PMC Minnesota Elrosa 8km</a>
<a href="../index.php" class="button">PMC Farming Simulator root page</a>
</p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("/var/www/include/footer-end.php"); ?>
<?php include("/var/www/include/support.php"); ?>
<?php include("/var/www/include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
