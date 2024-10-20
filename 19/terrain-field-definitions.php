<!DOCTYPE html>
<html lang="en">
<head>
<title>Field Definitions Farming Simulator 19 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Field Definitions Farming Simulator 19 - PMC Farming">
<META name="keywords" content="Terrain, Field, Definitions, PMC, Farming, Simulator">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
<h1><b>PMC Farming Simulator Terrain Field Definitions</b></h1>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>Creating Field Definitions</h2>

<p>
- create transformgroup fields<br>
- create transformgroup field01 and cut and paste it as child to fields<br>
- fields transformgroup add new attribute name: onCreate and type: script callback. onCreate attribute: FieldUtil.onCreate<br>
- create two transformgroups into field01, name them fieldDimensions and fieldMapIndicator<br>
- create transformgroups called corner01_1, corner01_2 and corner01_3<br>
- make corner01_2 and corner01_3 as child for corner01_1. cut and paste corner01_1 as child to fieldDimensions<br>
- field01 add attribute fieldDimensionIndex type integer<br>
- field01 add attribute nameIndicatorIndex type integer
</p>

<p>
fieldDimensionIndex is fieldDimensions -> index path, the last number (it should be 0 for field01).
</p>

<p>
nameIndicatorIndex is fieldMapIndicator -> index path, the last number (it should be 1 for field01).
</p>

<p>
First use scripts -> FS19 -> map -> toggle render field areas. Place corner01_1 as bottom left, corner01_02 as top left and corner01_03 as top right. This forms a rectangle shape, you can move these transformgroups around to shape the field area as you please.
</p>

<p>
To add more corner01 pieces allows you to create more complex fields, you can simply CTRL-D duplicate/copypaste them as there is no technical reason to name them properly, game recognizes dozen "corner01_1" pieces just fine. Add as many you need to form a complex and detailed field, I dont know if there is a limit for these, highest what I've used so far was like 10 so not that many.
</p>

<p>
Reference: mapUS has 26 field definitions, 12 of them have only one corner piece. Most corner pieces are on F17 which has 8, others have around 2-4. mapDE has 33 field definitions, 21 of them have only one corner piece. most corner pieces are on F05, F06, F09 and F25 which have 4.
</p>

<p>
You do not need to rename the cornerXX, not even fieldXX transformgroups as game will load them just fine, however please name fieldXX ones properly because who wants to see 50+ "field" transformgroups without any idea which is which heh. Not naming them saves a lot of editing time though.
</p>

<p>
Once you have created your first field, check that it works in-game, then you can simply select transformgroup field01 and CTRL-D duplicate / copy paste it and move it to correct location. Repeat this to as many fields you need to create.
</p>

<p>
General terrain and field design tips:
</p>

<p>
<a href="terrain-cultivator_density-gimp.php">GIMP paint the fields into cultivator_density</a> normally with proper edges, but only create simple rectangle box field definitions. This saves a lot of editing time and gives fully working in-game functionality.
</p>

<p>
You could say that this would be lazy terrain developer method as making simple rectangle field definition takes one CTRL-D while detailed several cornerXX pieces requiring field takes much longer, possibly hours (of wasted time heh) per field.
</p>

<p>
Courseplay recognizes the cultivator_density cultivated/plowed terrain type, NOT the field definition, but if you have no field definition at all then courseplay "cannot find" the field.
</p>

<p>
Creating fields is quicker if you just call the first "field" without any numbering and once you have finished making all of them its easier to rename them all in one go, if you so choose. This usually applies to my own workflow where I make placeholders for all the fields at one go, then tweak them to precision later. Also I find it quicker to edit field numbering directly in the name.i3d xml file, but thats just me who's so used to text editing heh.
</p>

<p>
Youtube videos (not tutorials) showing me creating field definitions: <a href="https://www.youtube.com/watch?v=pduoexeyr9A" target="_blank">Giants Editor v8.1 Creating Field Definitions 2019-02-12</a> and <a href="https://www.youtube.com/watch?v=L0aebflF100" target="_blank">PMC North Dakota Wahpeton 16km Creating Field Definitions 2019-05-20</a>.
</p>

<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("/var/www/include/footer-start.php"); ?>
<p><a href="terrain-editing-tutorial.php" class="button">PMC Farming Simulator Terrain Editing Tutorial page</a></p>
<p><a href="../index.php" class="button">PMC Farming Simulator root page</a></p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("/var/www/include/footer-end.php"); ?>
<?php include("/var/www/include/support.php"); ?>
<?php include("/var/www/include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
