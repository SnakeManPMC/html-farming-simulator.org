<!DOCTYPE html>
<html lang="en">
<head>
<title>Changelog PMC Super Six 6km - PMC Farming Simulator 22</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Changelog PMC Super Six 6km - PMC Farming Simulator 22">
<META name="keywords" content="Changelog, Terrain, FS22, PMC, Farming, Simulator">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
<h1><b>Changelog PMC Super Six 6km Farming Simulator 22 Terrain</b></h1>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
<p>
Changelog for <a href="pmc-super-six-6km.php">PMC Super Six 6km</a> FS22 terrain. See known issues from bottom of this page. Also check out <a href="dev-diary-pmc-super-six-6km.php">Dev Diary PMC Super Six 6km</a>.
</p>

<div class="changelog">
	<h2>v0.0 Unreleased</h2>

<p>
2021-12-23:<br>
- super six 6km initial terrain creation as PMC_Test_Farm_6km project name<br>
2022-01-24:<br>
- super six 6km used l3dt to generate new 4096 res heightmap<br>
- super six 6km started to paint design doc in gimp<br>
- super six 6km preview image created<br>
- super six 6km icon image generated<br>
- super six 6km moddesc version number changed to 0.1<br>
- super six 6km deleted unused .shape etc cache files from maps\pmc_test_farm_6km\ dir<br>
- super six 6km removed mapUS tutorial floating icons<br>
- super six 6km removed map interactive icons for animal dealer and vehicle shop<br>
- super six 6km activated farmland ID 1 which new farmer game-mode player owns<br>
- super six 6km l3dt heightmap vertical range from 150 down to 30m, got new heightScale="29"<br>
- super six 6km aligned careerStartPoint transformgroup to ground<br>
- super six 6km imported vehicle shop triggers<br>
- super six 6km overview.png created<br>
- super six 6km copied infoLayer _Level images and fieldGround.xml<br>
2022-01-25:<br>
- super six 6km farmland image RGB changed to 1,1,1<br>
- super six 6km placed 12 selling points<br>
- super six 6km placed bale selling point<br>
- super six 6km generated first forest / tree line<br>
- super six 6km created few field definitions<br>
2022-01-30:<br>
- super six 6km Error: Blocked area map is wrong size for terrain (2048 x 2048) vs (4096 x 4096) fixed<br>
- super six 6km renamed transformgroup fields to Fields, hehe<br>
- super six 6km created Buildings transformgroup and moved vehicleshop there<br>
- super six 6km GIMP painted farmland XCF<br>
2022-02-03:<br>
- super six 6km rocks_density image was black, changed to proper rock image<br>
- super six 6km farm yards created into ge pmc_helpers and to placeables.xml<br>
- super six 6km created three utility pole lines<br>
- super six 6km placeholder placeables xml configs fixed for selling etc<br>
</p>

	<h2>v0.1 Initial Release</h2>

<p>
2022-02-06:<br>
- super six 6km final name changed from PMC Test Farm 6km<br>
- super six 6km technical terrain project dir rename including all the files<br>
- super six 6km new farmer game-mode vehicles and implements created<br>
- super six 6km v0.1 release!
</p>

</div>

<div class="changelog">
	<h2>Known Issues</h2>

<p>
<b>2022-02-06T19:21:00Z</b> Updated.
</p>

<p>
- super six 6km terrain edge geometry blocks are missing (vehicles "fall of the map")<br>
- super six 6km utility poles are missing wires<br>
- super six 6km asphalt road 3d meshes missing<br>
- super six 6km fert/herb/lime/seed buy point missing<br>
- super six 6km bushes, flowers and shrubbery decoration foliage is missing<br>
</p>
</div>

<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("/var/www/include/footer-start.php"); ?>
<p>
<a href="pmc-terrains.php" class="button">PMC Terrains FS22</a>
<a href="dev-diary-pmc-super-six-6km.php" class="button">Dev Diary PMC Super Six 6km</a>
<a href="pmc-super-six-6km.php" class="button">PMC Super Six 6km</a>
<a href="../index.php" class="button">PMC Farming Simulator root page</a>
</p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("/var/www/include/footer-end.php"); ?>
<?php include("/var/www/include/support.php"); ?>
<?php include("/var/www/include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
