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
	<h2>2021-05-21 Internal Testing v1.1.4 Release</h2>

<p>
2021-05-21T22:30:00Z Sell points aligned to ground and v1.1.4 internal testing version compiled.
</p>

<p>
2021-05-22T11:55:00Z Seasons GEO Iowa Garden City starting temperatures increased to warmer.
</p>


	<h2>2021-05-27 Asphalt Road 3D Mesh Editing</h2>

<p>
2021-05-27T05:23:00Z Started to paint chart for asphalt roads so I know where to place splines which are used to create asphalt road piece meshes.
</p>

<p>
2021-05-27T05:53:00Z Finished painting it using google/maps as source. Surprisingly low number of asphalt roads there.
</p>

<p>
Below image red is asphalt and yellow is dirt/gravel road.
</p>

<p>
<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-27T0553.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-27T0553.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>
</p>

<p>
Next I just need to actually create the asphalt roads... <i>/me backs away slowly ...</i> <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Then decided to start placing asphalt road splines right away, even though I don't remember much at all how I did them previously. What I mean is how to do them so they would look nice and not some jagged edges crap ones, but hey gotta start trying and see how it goes.
</p>

<p>
2021-05-27T06:21:00Z Took backups, always gotta have good backups, a snapshot of last properly working version before starting to add new stuff in.
</p>

<p>
Created spline from center garden city by the railroad towards west and then north west. Its coordinates aligned to ground are: -449.73498535 37.17038727 616.17468262
</p>

<p>
Yep copy pasted them here as I probably need to restore the spline to original coordinates after fiddling with it, so I had to save them somewhere and this is as good text file as any hehe.
</p>

<p>
2021-05-27T07:26:00Z Tested first asphalt road in-game, looks overall pretty good with elevated road except curves has the issue with jagged "empty" edge parts.
</p>

<p>
And when I say first asphalt road I mean in iowa garden city, my real first ever asphalt road was done in PMC Grande Gardens 16km fairly recently.
</p>

<p>
Tomorrow I'm hoping to add more roads and see if anything could be done with those curves. Also need to smooth out elevations a bit on intersections for dirt roads.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-27T0718.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-27T0718.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Continue reading <a href="dev-diary-pmc-iowa-garden-city-8km-019.php">next page</a>, back to <a href="dev-diary-pmc-iowa-garden-city-8km.php">Dev Diary PMC Iowa Garden City 8km Homepage</a> or <a href="dev-diary-pmc-iowa-garden-city-8km-017.php">previous page</a>.
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
