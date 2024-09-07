<!DOCTYPE html>
<html lang="en">
<head>
<title>Developer Diary PMC North Dakota Fairmount 8km - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Developer Diary PMC North Dakota Fairmount 8km - PMC Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
<h1><b>Developer Diary PMC North Dakota Fairmount 8km - PMC Farming</b></h1>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>Beginning</h2>

<p>
This is a developer diary for Farming Simulator 19 (FS19) terrain called <a href="pmc-north-dakota-fairmount-8km.php">PMC North Dakota Fairmount 8km</a>.
</p>

<p>
Unfortunaely I was not writing dev diary texts back when PMC North Dakota Fairmount 8km terrain was created and edited.
<!--, only thing closest to a history is <a href="changelog-pmc-north-dakota-fairmount-8km.php">changelog</a>.-->
</p>

<p>
2023-02-24T15:31:00Z
</p>

<p>
Last night opened PMC North Dakota Fairmount 8km in global mapper, exported KMZ file and then terra incognita downloaded new ArcGIS world imagery satellite source. On the old 2019 download there was really ugly white clour puff streak going through in W to E direction in about central slightly north position, this almost ruined the whole project.
</p>

<p>
Now this 2023 ArcGIS world imagery satellite texture source is perfect, no clouds, no patches, no nothing. Of course as our website lists the US NAIP satellite imagery source was downloaded sometime in the 2019 or 2020, its already implemented into terrain PDA mapview and cultivator_density was painted on top of it.
</p>


	<h2>2023-03-03 US NAIP Download</h2>

<p>
2023-03-03T23:45:00Z New editing day has started, well sort of, just downloaded US NAIP "JP2" aka jpeg2000 images, nothing else. What this means is that now US NAIP data is saved as images to my own HDD instead of having to "live download" it everytime you need to access it.
</p>

<p>
Obviously once you global mapper export that imagery, then you have the finished product, but this is now US NAIP as close as can be to normal terra incognita downloaded ArcGIS world imagery source. Everything clear? Good <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("/var/www/include/footer-start.php"); ?>
<p>
<a href="pmc-terrains.php" class="button">PMC Terrains FS19</a>
<!--
<a href="changelog-pmc-north-dakota-fairmount-8km.php" class="button">Changelog PMC North Dakota Fairmount 8km</a>
<a href="screenshots-pmc-north-dakota-fairmount-8km.php" class="button">Screenshots PMC North Dakota Fairmount 8km</a>
-->
<a href="pmc-north-dakota-fairmount-8km.php" class="button">PMC North Dakota Fairmount 8km</a>
<a href="../index.php" class="button">PMC Farming Simulator root page</a>
</p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("/var/www/include/footer-end.php"); ?>
<?php include("/var/www/include/support.php"); ?>
<?php include("/var/www/include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
