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
	<h2>2021-05-27 Road 3D Mesh Work Continues</h2>

<p>
2021-05-27T18:24:00Z New terrain editing day has started, already creating spline for the east-west direction asphalt road.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-27T1823.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-27T1823.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-27T1830.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-27T1830.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Spline coordinates are: 4094.55810547 9.91044426 1449.92602539
</p>

<p>
Third spline done with coordinates: 339.76501465 25.62941742 4094.38110352
</p>

<p>
Road 10m mesh piece placing method:
</p>

<p>
DOESNT WORK:<br>
1) create spline where asphalt road is<br>
2) run scripts -&gt; Roads.Ditches -&gt; Place Roads 9.8m<br>
3) increase spline elevation with 1 meter<br>
4) run scripts -&gt; Roads.Ditches -&gt; set terrain height by spline no raise no smoothing 6m<br>
5) select road 10m piece transformgroup and increase its elevation by 1.5m or until all terrain is beneath the whole road<br>
Done
</p>

<p>
2021-05-27T20:09:00Z works OK:
</p>

<p>
- create spline where asphalt road is, DO NOT ROTATE IT!<br>
- run scripts -&gt; Roads.Ditches -&gt; set terrain height by spline width 8m, raise 1m<br>
- run scripts -&gt; Roads.Ditches -&gt; Place Roads 9.8m
</p>

<p>
This makes nice elevations kind of ditch type (sort of) and placed road objects nicely aligned on top of them.
</p>

<p>
Struggling with curves <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-27T2033.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-27T2033.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
2021-05-27T21:05:00Z Finished asphalt roads with splineplacement method, intersections and well connections in general look real ugly, also the long east-west road was elevated too high with improper ditch smoothness, but yeah asphalt roads are now in and will have to check in-game how they look.
</p>

<p>
More tweaks, probably like complete rework will happen later.
</p>

<p>
2021-05-27T21:13:00Z In-game test done and overall I like the roads even though there are couple of rough spots as mentioned above.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-27T2111.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-27T2111.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Continue reading <a href="dev-diary-pmc-iowa-garden-city-8km-020.php">next page</a>, back to <a href="dev-diary-pmc-iowa-garden-city-8km.php">Dev Diary PMC Iowa Garden City 8km Homepage</a> or <a href="dev-diary-pmc-iowa-garden-city-8km-018.php">previous page</a>.
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
