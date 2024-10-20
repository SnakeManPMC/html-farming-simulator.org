<!DOCTYPE html>
<html lang="en">
<head>
<title>Terrain Grain Bin Objects Farming Simulator 17 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Terrain Grain Bin Objects Farming Simulator 17 - PMC Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
	<h1>Terrain Grain Bin Objects Farming Simulator 17 - PMC Farming</h1>

<p>
Terrain Editing Tutorial: Terrain Grain Bin Objects for Farming Simulator 17 (FS17) by PMC.
</p>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
<?php include("/var/www/include/support.php"); ?>
	<h2>Terrain Grain Bin Objects FS17</h2>

<p>
<b>What's the Difference Between Grain Bins and Silos?</b> The Difference Starts with What They Store. Grain bins and silos do not store the same products. Grain bins store dry grain that will be used for animal feed, human consumption, or fuel. This includes, but is not limited to: shelled corn, soybeans, wheat, oats, barley, sunflower seeds, and flax seeds. Silos store silage–typically something like green grass or chopped corn–which is fairly moist and is fed to livestock. The grasses or corn are more or less "pickled" so that they can keep for a long time and feed the livestock during dry seasons or other times when they have no other food to eat. -source <a href="https://www.adamsgrainbins.com/whats-difference-grain-bins-silos/" target="_blank">adamsgrainbins.com</a>.
</p>

<p>
Howto setup your terrain with farm grain bins, this is important as after you harvest your field, where do you store the grain? Easiest way is to export the FS17 Goldcrest Valley farmSiloSystem transformgroup, then import it to your terrain.
</p>

<p>
You can edit grain bin capacity from map01.i3d search for capacityPerType or edit normally from giants editor. Below is example setup for 10 million liters.
</p>
<pre>
Attribute name="capacityPerType" type="integer" value="10000000"
</pre>

<p>
To change the name of station (the tipTrigger) you have to change a UserAttribute of the trigger. Then locate the trigger/station you want to change. Find the actual trigger which has all the attributes, like "appearsOnPDA", "isAreaTrigger", "onCreate", "stationName" etc. Now you just need to change the value of the attribute "stationName" to what ever you like. The value for "stationName" is a string, which is either directly used or it is used to find an i18n entry. An i18n value can be defined in the modDesc of your mod.
</p>

<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("/var/www/include/footer-start.php"); ?>
<?php include("../include/fs17-terrain-editing-tutorial-footer.php"); ?>
<?php include("/var/www/include/footer-end.php"); ?>
<?php include("/var/www/include/support.php"); ?>
<?php include("/var/www/include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
