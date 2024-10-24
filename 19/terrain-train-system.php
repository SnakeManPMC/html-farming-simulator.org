<!DOCTYPE html>
<html lang="en">
<head>
<title>Train System Farming Simulator 19 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Train System Farming Simulator 19 - PMC Farming">
<META name="keywords" content="Terrain, Train System, PMC, Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
<h1><b>PMC Farming Simulator Terrain Train System</b></h1>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>Train System</h2>

<p>
This is for the standard looping and player drivable train where you can TAB into.
</p>

<p>
&lt;fs19_root&gt;\data\placeables\mapUS\trainSystem\trainSystem.i3d contains transformgroup trainSystem which has one hidden spline called track01, then railroadCrossing01 through 09.
</p>

<p>
mapUS_items.xml:
</p>
<pre>
&lt;item mapBoundId="trainSystem" className="TrainPlaceable" filename="data/placeables/mapUS/trainSystem/trainSystem.xml" position="0 0 0" rotation="0 0 0" /&gt;
</pre>

<p>
- create transformgroup trainSystem, do not move it, leave it to 0,0,0 coordinates<br>
- create spline called track01 into trainSystem transformgroup, make it hidden by setting visibility off<br>
- when finished creating track01 control vertexes, close the loop with O key<br>
- select trainSystem export selection, save it as trainSystem.i3d, then delete trainSystem transformgroup<br>
- place trainSystem.xml next to your trainSystem.i3d file
</p>

<p>
trainSystem train does work with open ended spline (not closed loop). Once train reaches the end point, it teleports to start point. This causes no error in the log.
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
