<!DOCTYPE html>
<html lang="en">
<head>
<title>Object View Distance Farming Simulator 19 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Object View Distance Farming Simulator 19 - PMC Farming">
<META name="keywords" content="Terrain, Object View Distance, PMC, Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
<h1><b>PMC Farming Simulator Terrain Object View Distance</b></h1>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>Object View Distance</h2>

<p>
Object view distance, how far out it is drawn, in GE is called clip distance under attributes -> transform -> clip distance. CBJ midwest buildings pack and even giants farm silos use 1,000,000 value, no idea what this value means other than "large". Odd thing though that giants silos do not after all show up very far away, hmm. However clip distance definitely is what controls how far out your model will be rendered.
</p>

<p>
CBJ midwest buildings can be seen from the other side of the terrain (and I do mean 8km x 8km one), which is great but I'm always concerned about performance issues, so far in my testing the mentioned buildings cause no issues.
</p>

<p>
We heard a rumor (gosh, not one of these old wives tales!) that Giants official modhub policy is to set terrain object view / clip distance to <b>300</b> which I assume means meters. If this is true, then that is all but useless for large terrains as 300 meters is nothing.
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
