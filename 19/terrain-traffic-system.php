<!DOCTYPE html>
<html lang="en">
<head>
<title>Traffic System Farming Simulator 19 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Traffic System Farming Simulator 19 - PMC Farming">
<META name="keywords" content="Terrain, Traffic System, PMC, Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
<h1><b>PMC Farming Simulator Terrain Traffic System</b></h1>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>Traffic System</h2>

<p>
Traffic system means pedestrian, people walking around and cars driving around in a loop. Terrain includes visibility hidden transformgroup (TG) named splines. TG splines has sub TG's trafficSystem and pedestrianSystem. Below examples are from mapUS.i3d file.
</p>

<p>
trafficSystem has trafficLoop01 through 04 splines (assuming we can place any number of splines here?). Sub TG parkedCars which has TG's called parkedCars placed into parking lot spots.
</p>

<p>
trafficLoop01 spline E control vertex needs to be next to S so the spline will form a loop. When vehicle gets to E it can proceed to S right away. You could also hit O key to close the loop. Check the log file for errors if your spline is not accepted.
</p>

<p>
trafficSystem attributes onCreate: TrafficSystem.onCreate and xmlFile: $data/maps/mapUS_trafficSystem.xml
</p>

<p>
pedestrianSystem has pedestrianLoop01 and 02.
</p>

<p>
pedestrianLoop01 is the same type as trafficLoop01.
</p>

<p>
pedestrianSystem attributes onCreate: PedestrianSystem.onCreate and xmlFile: $data/maps/mapUS_pedestrianSystem.xml
</p>

<p>
mapUS traffic and pedestrian splines are not closed, but appears you can close them if you wish (please confirm! 2019-03-27).
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
