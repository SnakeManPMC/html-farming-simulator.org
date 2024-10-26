<!DOCTYPE html>
<html lang="en">
<head>
<title>Mods With Errors - PMC Farming Simulator 25</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Mods With Errors - PMC Farming Simulator 25">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
	<h1>Mods With Errors - PMC Farming Simulator 25</h1>

<p>
With Errors mods for Farming Simulator 25 (FS25). A list of my mod testing results where errors/warnings or other issues have been detected in new mods. This list is to help other players to avoid unecessarily downlading mods that are confirmed broken. You should never add a broken mod, a mod with errors/warnings on it into your mod-set, you can destroy a perfectly fine savegame by doing so. Sometimes there are mods that don't technically have errors in them but are garbage anyways, for example under the hood mod is created/edited without brains, having "\Program Files (x86)\" style directory paths in the file structure etc, technically farmsim engine wise that is not an error but it absolutely is no way to develop mods in farmsim or any other game engine. Also some mods are error free but their in-game functionality is, well, not there, they simply wont work, imagine lets say sprayer which cannot be loaded/refilled with liquid, a grain cart thats "top trigger" is so bad that combine harvester auger pipe has to be 0.001 millimeter precision on a spot in order to unload to it, yeah that kind of stuff is "with errors" in my book. In short, this list hopefully helps people to avoid bad mods. However if you find this list to be outdated, mod has gotten a new version which fixes the given errors, then please post a message to PMC Tactical Forum to let me know and I'll update that mod info, thanks.
</p>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>Mods With Errors</h2>

<?php include("../include/fs25-placeholder-pages.php"); ?>

<div class="wrapper_mod_vehicles">

<!-- category vehicles -->
</div>

<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("/var/www/include/footer-start.php"); ?>
<p><a href="mods.php" class="button">FS25 Mods root page</a> <a href="../index.php" class="button">PMC Farming Simulator root page</a></p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("/var/www/include/footer-end.php"); ?>
<?php include("/var/www/include/support.php"); ?>
<?php include("/var/www/include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
