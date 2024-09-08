<!DOCTYPE html>
<html lang="en">
<head>
<title>Animals Guide Cows - PMC Farming Simulator 22 (FS22)</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Animals Guide Cows - PMC Farming Simulator 22 (FS22)">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
<h1>Animals Guide Cows - PMC Farming Simulator 22 (FS22)</h1>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>Animals Guide Cows (FS22)</h2>

<p>
Cows produce <a href="guide-animals-product-manure.php">manure</a>, <a href="guide-animals-product-milk.php">milk</a> and <a href="guide-animals-product-liquidmanure.php">slurry (liquidmanure)</a>. Be careful when you pickup either one of the liquids that you don't accidentally pickup / refill the wrong type.
</p>

<p>
Buy cow barn, then if you want manure you need a "<a href="guide-animals-placeables-manure-heap-extension.php">manure heap extension</a>" which is located in <a href="guide-build-mode.php">build mode</a> (SHIFT-P) under buildings -&gt; silo extensions. Do NOT use "<a href="guide-animals-placeables-manure-heap.php">manure heap</a>" from silos menu. It is bizarre as "manure heap", not the extension... is not supposed to be used, but it still works, several guides I've seen state that use "manure heap extension" instead, on my 2023-09-02 PMC Farm Lab animal studies savegame I used "manure heap" next to cow and pig barns which did get manure in it, however same setup for <a href="guide-animals-placeables-liquidmanure-tank.php">liquidmanure tank (slurry)</a> did not work, no slurry appeared there (it appears on cow / pig barn "pipe unloading" point instead), (EDIT: liquidmanure tank did not work because it was not CLOSE ENOUGH, if you put it close enough then it registers as barns capacity which is odd because lets say if you add a brand new cown barn within range of semi full liquidmanure tank and instantly when purchasing the barn, it already has as many liters of slurry as the tank has, its kind of confusing actually). Very very weird configuration indeed, it works - it doesn't work - aarrgh what the heck is going on!? <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Cow barns have a liquid manure tank built in. Depending on how many cows you have and how much liquid manure they produce, you can buy a liquid manure tank in the "silo extension" tab of the construction menu to store even more. Place it near the barn.
</p>

<p>
Breeding cattle: whether cows reproduce depends on three factors: Their age, the space available and the health of the animals. From the age of 18 month onwards, cows are mature and can give birth to offspring. But this is only possible if there is room for more cows in the barn, of course. Also, their health has to be at 100%. You can achieve this by feeding the animals regularly.
</p>

<p>
Cow barn feeding/<a href="guide-animals-straw.php">straw</a> trailer size, Farmking Fortis 3000 is the largest (tallest) tractor trailer you can pull into giants cow barns (hormann), its capacity is 45k liters which is decent haul for TMR and straw. Many other trailers are either too tall to fit through the door, or they are tipping so they clip the roof and then bad mojo happens.
</p>

<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("/var/www/include/footer-start.php"); ?>
<p>
<a href="guide-animals.php" class="button">FS22 Animals Guide root page</a>
<a href="guide.php" class="button">FS22 Guide root page</a>
<a href="../index.php" class="button">PMC Farming Simulator root page</a>
</p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("/var/www/include/footer-end.php"); ?>
<?php include("/var/www/include/support.php"); ?>
<?php include("/var/www/include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
