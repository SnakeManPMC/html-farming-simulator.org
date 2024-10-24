<!DOCTYPE html>
<html lang="en">
<head>
<title>modDesc.xml Farming Simulator 19 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="modDesc.xml Farming Simulator 19 - PMC Farming">
<META name="keywords" content="Terrain, modDesc.xml, PMC, Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
<h1><b>PMC Farming Simulator Terrain modDesc.xml</b></h1>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>modDesc.xml</h2>

<p>
In your modDesc.xml is where the name of the terrain, author and version number is defined. More importantly the class or ID is set, almost all sample maps floating out there use "SampleModMap".
</p>

<p>
&lt;maps&gt;&lt;map id="SampleModMap" needs to be unique for every terrain, so <b>do not use "SampleModMap"</b>, instead you must use unique to your terrain like for our example "pmc_sample_2048" etc.
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
