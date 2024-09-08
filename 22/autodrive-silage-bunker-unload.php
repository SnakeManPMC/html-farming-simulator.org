<!DOCTYPE html>
<html lang="en">
<head>
<title>AutoDrive Silage Bunker Unload Farming Simulator 22 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="AutoDrive Silage Bunker Unload Farming Simulator 22 - PMC Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
<h1>AutoDrive Silage Bunker Unload Farming Simulator 22 - PMC Farming</h1>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>FS22 AutoDrive Silage Bunker Unload</h2>

<p>
HOWTO use autodrive and courseplay to empty forage harvester and then go dump chaff trailer to the silage bunker?
</p>

<p>
Autodrive and courseplay-gui garbage corn chaff silage harvest and silage bunker leveling is a babysitting job, if you cannot accept that then stop reading now and drive tractors manually.
</p>

<p>
Courseplay-gui garbage running silage blade leveling tractor sometimes makes just brain-dead turn into silage bunker wall and gets stuck there. Courseplay-gui garbage also messes up many times when it makes room for the incoming tractor trailer to dump more chaff, its common to see silage blade tractor getting stuck in bunker wall at this time (case ih steiger 620 with rear mounted holaras blade).
</p>

<p>
Silage blade tractor courseplay, set park position away from the autodrive network waypoints of trailer tractor, set silo position to the silage bunker silo (well, doh).
</p>

<p>
Silage trailer tractor autodrive, set it to combine unload setting, target point same as forage chopper harvester.
</p>

<p>
Forage harvester chopper is just regular courseplay harvester field work mode which autodrive is using same target point as silage trailer tractor. Silage trailer tractor is on autodrive combine unload mode and at the silage bunker it has to have "backing up to the bunker" waypoints created. Silage bunker compacting tractor pretty much needs to have a silage blade, then courseplay set silage bunker target and parking spot, then just hit play and the silage blade tractor does its thing. There is not much more to a full corn chaff silage harvest and bunker compacting.
</p>

<p>
When you start corn chaff forage harvester on a field using courseplay, do not start more than one autodrive tractor with silage chaff trailer because most likely the two tractors will get into traffic jam right in the beginning, there is plenty of time to start second or more silage chaff trailer tractors once forage harvester is well on its way. Trust me, you'll see what I mean if you put several tractors under autodrive at the starting point.
</p>

<p>
Silage trailer tractor, set corner speed to 70%, record the silage bunker course WITHOUT a trailer so you can back up all the way at the end of the wedge bunker for the target point.
</p>

<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("/var/www/include/footer-start.php"); ?>
<p><a href="autodrive.php" class="button">FS22 AutoDrive root page</a> <a href="../index.php" class="button">PMC Farming Simulator root page</a></p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("/var/www/include/footer-end.php"); ?>
<?php include("/var/www/include/support.php"); ?>
<?php include("/var/www/include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
