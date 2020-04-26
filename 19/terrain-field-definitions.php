<!DOCTYPE html>
<html lang="en">
<head>
<title>Field Definitions Farming Simulator 19 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Field Definitions Farming Simulator 19 - PMC Farming">
<META name="keywords" content="Terrain, Field Definitions, PMC, Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<!-- google ads -->
<?php include("../include/google-ads.php"); ?>
<h1><b>PMC Farming Simulator Terrain Field Definitions</b></h1>
</header>

<section>
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
You do not need to rename the cornerXX, not even fieldXX transformgroups as game will load them fine, however please name fieldXX ones properly because who wants to see 50+ "field" transformgroups without any idea which is which heh.
</p>

<p>
Once you have created your first field, check that it works in-game, then you can simply select transformgroup field01 and CTRL-D duplicate / copy paste it and rename it to field02. Repeat this to as many fields you need to create (obviously increasing the fieldXX number every time).
</p>

<p>
General terrain and field design tip:
</p>

<p>
Paint the fields into terrain normally with proper edges, but only create standard rectangle box field definitions. This way players can buy the fields and enlarge them by using plowing implement, giving them something nice to do, or they can of course leave them as is.
</p>

<p>
You could say that this would be lazy terrain developer method as making simple rectangle field definition takes one CTRL-D while detailed several cornerXX pieces requiring field takes much longer.
</p>

<p>
Courseplay recognizes the foliage layer plowed/cultivated etc terrain type, NOT the field definition, at least I believe this is how courseplay/game works? So make sure you do not paint the foliage layer as plowed/cultivated land but that umm what was it the odd looking brown colored terrain type (no idea, the one seen in FS17 cornbelt heh)? :)
</p>

<p>
Creating fields is quicker if you just call the first "field" without any numbering and once you have finished making all of them its easier to rename them all in one go. This usually applies to my own workflow where I make placeholders for all the fields at one go, then tweak them to precision later. Also I find it quicker to edit field numbering directly in the name.i3d xml file, but thats just me who's so used to text editing heh.
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
