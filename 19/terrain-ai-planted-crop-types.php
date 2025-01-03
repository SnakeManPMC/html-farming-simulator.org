<!DOCTYPE html>
<html lang="en">
<head>
<title>AI Planted Crop Types Farming Simulator 19 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="AI Planted Crop Types Farming Simulator 19 - PMC Farming">
<META name="keywords" content="Terrain, AI Planted Crop Types, PMC, Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
<h1><b>PMC Farming Simulator Terrain AI Planted Crop Types</b></h1>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>AI Planted Crop Types</h2>

<p>
If you want to control what crop types the AI will plant for example we customized Garden City Iowa so that AI only plants corn and soybeans.
</p>

<p>
- copy &lt;fs19_root&gt;\data\maps\maps_fruitTypes.xml to your terrain maps\ dir<br>
- rename maps_fruitTypes.xml to name_fruitTypes.xml<br>
- edit name.xml change &lt;!-- &lt;fruitTypes filename="$data/maps/maps_fruitTypes.xml" /&gt; --&gt; to &lt;fruitTypes filename="maps/name_fruitTypes.xml" /&gt;<br>
- edit name_fruitTypes.xml and change useForFieldJob="true" to false for the crop types you dont want AI to plant
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
