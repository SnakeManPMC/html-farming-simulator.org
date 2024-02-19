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
<h1><b>Developer Diary PMC Iowa Garden City 8km FS19 - PMC Farming</b></h1>
</header>

<section>
	<h2>2021-06-02 Creating Players Farm 1</h2>

<p>
2021-06-02T07:00:00Z Started working on players farm 1 for defaultItems.xml
</p>

<p>
First took backups, never forget backups. Just to recap my backup batch file created 7-Zip archive with UTC time stamp, so now I created this file name: PMC_Iowa_Garden_City_8km_2021-06-02T0658.7z - with these kind of backup archives it is very easy to revert back to pick up something you messed up etc. And best yet, its one click batch file, taking backups cant get any easier than that <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2021-06-02T07:33:00Z Finished transferring players farm 1 from GE terrain.i3d into defaultItems.xml as-is, meaning that farmsilolarge will definitely not work with the unloading pipes and dumping grills.
</p>

<p>
Also as they were set to land 0, it didn't work right away.
</p>

<p>
2021-06-02T11:51:00Z Set FarmId to 1 and now the buildings show up in garage and can be sold.
</p>

<p>
There is still issue with giants siloExtension which cant be sold, no idea why, they have the same settings as farmsilolarges.
</p>

<p>
2021-06-02T21:44:00Z Asphalt road elevations smoothed out by dealership and intersections.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-06-02T2224.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-06-02T2224.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Did all that asphalt road intersection terrain heightmap smoothing manually in GE, right from the start I knew it was waste of time because next time I need to revert heightmap back to previous backup all this work will be lost. Intersection and field approaches smoothing needs to be done using splines, so its non destructive work and can be re-created at any time as many times you want. Oh well, whats done is done.
</p>

<p>
Continue reading <a href="dev-diary-pmc-iowa-garden-city-8km-023.php">next page</a>, back to <a href="dev-diary-pmc-iowa-garden-city-8km.php">Dev Diary PMC Iowa Garden City 8km Homepage</a> or <a href="dev-diary-pmc-iowa-garden-city-8km-021.php">previous page</a>.
</p>
</section>

<footer>
<p>
<a href="pmc-terrains.php" class="button">PMC Terrains FS19</a>
<a href="changelog-pmc-iowa-garden-city-8km.php" class="button">Changelog PMC Iowa Garden City 8km</a>
<a href="pmc-iowa-garden-city-8km.php" class="button">PMC Iowa Garden City 8km</a>
<a href="../index.php" class="button">PMC Farming Simulator root page</a>
</p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("../include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
