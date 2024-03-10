<!DOCTYPE html>
<html lang="en">
<head>
<title>Animals Guide Placeables Manure Heap Extension - PMC Farming Simulator 22 (FS22)</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Animals Guide Placeables Manure Heap Extension - PMC Farming Simulator 22 (FS22)">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<h1>Animals Guide Placeables Manure Heap Extension - PMC Farming Simulator 22 (FS22)</h1>
</header>

<section>
	<h2>Animals Guide Placeables Manure Heap Extension (FS22)</h2>

<p>
One manure heap extension can be connected to two <a href="guide-animals-cows.php">cows</a> barns, these manure heap extension's have fairly long range so you don't have to physically connect them to the building you want extract manure from. The range connectivity is calculated on the fly, savegame XML config files has no index etc referrals from barns to <a href="guide-animals-placeables-manure-heap.php">manure heap</a> or <a href="guide-animals-placeables-liquidmanure-tank.php">liquidmanure tank (slurry)</a>, they just need to be close enough and during game run-time they get connected to any closeby barns. Most likely the range is defined in either in manure heaps / liquidmanure tanks or in the barns XML configs, or it could be just hardcoded engine value "close enough" and connection happens. You can see this distance on SHIFT-P <a href="guide-build-mode.php">build mode</a> when you move for example manure heap extension or liquidmanure tank extension around a barn.
</p>

<p>
HOWTO pickup manure from manure heap extension? Take a trailer with capable of transporting manure, then simply drive next to the manure heap and refill when "Start Refilling" appears in F1 menu. Or you could use wheel loader etc with bucket/fork tool to pick manure up.
</p>

</section>

<footer>
<p>
<a href="guide-animals.php" class="button">FS22 Animals Guide root page</a>
<a href="guide.php" class="button">FS22 Guide root page</a>
<a href="../index.php" class="button">PMC Farming Simulator root page</a>
</p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("../include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
