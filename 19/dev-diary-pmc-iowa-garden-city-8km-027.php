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
	<h2>2021-06-20 New Farmer Farmland And Equipment Tweaks</h2>

<p>
<b>2021-06-20T00:09:00Z</b> PMC Farm Silo Extension gave some lua index error when you attempted to sell it, well there was a bug in defaultItems.xml where className was SiloPlaceable which was wrong, it needs to be SiloExtensionPlaceable, its now finally fixed.
</p>

<p>
2021-06-20T15:17:00Z New farmer game-mode vehicles, Kuhn axis 40.2 m-emc-w spreader cant do lime so you have now NO lime spreading ability, had to fix this by selling kuhn and buying Bredal K105 with 6m spreading unit.
</p>

<p>
Then updated defaultVehicles.xml with operating time and wear set to zero, also added defaultFarmProperty="true" as usual.
</p>

<p>
2021-06-20T21:36:00Z Decided to add land to New Farmer game-mode which contains field 163. This field (and land) is tiny, its cute little field, however it matches really nicely to the small starter vehicles I chose to add into this game-mode.
</p>

<p>
Continue reading <a href="dev-diary-pmc-iowa-garden-city-8km-028.php">next page</a>, back to <a href="dev-diary-pmc-iowa-garden-city-8km.php">Dev Diary PMC Iowa Garden City 8km Homepage</a> or <a href="dev-diary-pmc-iowa-garden-city-8km-026.php">previous page</a>.
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
