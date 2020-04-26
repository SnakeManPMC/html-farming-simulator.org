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
<!-- google ads -->
<?php include("../include/google-ads.php"); ?>
<h1><b>PMC Farming Simulator Terrain AI Planted Crop Types</b></h1>
</header>

<section>
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

</section>

<footer>
<p><a href="map-making-tutorial.php" class="button">PMC Farming Simulator Map Making Tutorial page</a></p>
<p><a href="../index.php" class="button">PMC Farming Simulator root page</a></p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("../include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
