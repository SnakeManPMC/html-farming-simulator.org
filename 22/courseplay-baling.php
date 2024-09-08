<!DOCTYPE html>
<html lang="en">
<head>
<title>Courseplay Farming Simulator 22 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Courseplay Farming Simulator 22 - PMC Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
<h1>Courseplay Farming Simulator 22 - PMC Farming</h1>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>FS22 Courseplay Baling</h2>

<p>
2023-09-24T02:14:00Z
</p>

<p>
Baling is done usually in two situations; combine harvester finished harvesting a field while discharging a straw swath, or grass mowing windrower finished putting grass or hay into nice narrow pile. Courseplay should use either harvester or windrower field work course for a baler so baler would collect where the material was dropped.
</p>

<p>
Baler tractor should have combine harvester field work course loaded, or better yet generate brand new field work course using the exact same settings for starting location and headland overlap, field size etc, except choose starting point CENTER instead of headland. When you start at the center, all bales will be dropped off at the center of the field instead of the headland turns where baler tractor could get stuck "blocked by object". If you use combine harvester existing field work course, then start it manually from "nearest waypoint" on the first inner / center row to avoid this headland bale collision issue. Once done driving the inner rows and field work course finishes, then just start it "again" from the "first waypoint" so it runs the headland avoiding all the inner row bales, you have to of course stop the tractor once its done headland as now the whole field has been baled.
</p>

<p>
Don't worry about leftover straw because it mounts to just about nothing, its not worth to go collecting that no matter how Obsessive Compulsive Disorder (OCD) person you are, only exception is if there are real big heaps of straw on the field by some odd combine harvester grain cart unloading positions etc. Just ignore all the small drizzle leftovers, they are only few dozen liters in a small to medium size field.
</p>

<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("/var/www/include/footer-start.php"); ?>
<p><a href="courseplay.php" class="button">FS22 Courseplay root page</a> <a href="../index.php" class="button">PMC Farming Simulator root page</a></p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("/var/www/include/footer-end.php"); ?>
<?php include("/var/www/include/support.php"); ?>
<?php include("/var/www/include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
