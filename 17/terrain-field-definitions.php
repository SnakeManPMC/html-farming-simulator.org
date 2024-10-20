<!DOCTYPE html>
<html lang="en">
<head>
<title>Terrain Field Definitions Farming Simulator 17 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Terrain Field Definitions Farming Simulator 17 - PMC Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
	<h1>Terrain Field Definitions Farming Simulator 17 - PMC Farming</h1>

<p>
Terrain Editing Tutorial: Terrain Field Definitions for Farming Simulator 17 (FS17) by PMC.
</p>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
<?php include("/var/www/include/support.php"); ?>
	<h2>Terrain Field Definitions FS17</h2>

<p>
HOWTO create field definitions using <a href="terrain-giants-editor.php">Giants Editor FS17</a> (GE).
</p>

<p>
You must have a existing working field on your terrain project. Look for this on the default giants terrain.
</p>

<p>
In GE select fields transformgroup, use scripts -&gt; FS17 -&gt; Map -&gt; toggle render field areas, in few seconds blue shape should appear where your fields are.
</p>

<p>
Click open fields transformgroup, click on the existing field which in our example is "field01", CTRL-D to duplicate (copy automatically).
</p>

<p>
Rename the field to the next available digit, if the duplicated one was 01 like in our example then make the new one 02 so "field02".
</p>

<p>
Move field02 to items into the location on the terrain where you want this new field. Then move field02 -> fieldDimensions -> corner01_* points to match the area where you want this new field.
</p>

<p>
Select fields, use scripts -&gt; FS17 -&gt; Map -&gt; Set field sizes.
</p>

<p>
Now switch to terrain foliage paint mode, select foliage layer painting -&gt; foliage layer -&gt; terrainDetail and tick 0 channel. Now just paint the blue shape of your new field.
</p>

<p>
If you load existing savegame for your terrain after you added new fields, they do not show any crops or soil state. What I understand, you must start fresh savegame after adding fields or changing their sizes.
</p>

<p>
If you cannot plough fields, check terrain -&gt; attributes -&gt; translate Y, it must be 0. Also fields need to be defined, obviously.
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
