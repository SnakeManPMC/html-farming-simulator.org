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


	<h2>Create Fields From Nothing</h2>

<p>
Step by step tutorial how to create field definitions from scratch in <a href="terrain-giants-editor.php">Giants Editor FS17</a>.
</p>

<p>
Create transformgroups fields, attributes add onCreate "script callback", then on its attribute add FieldDefinition.onCreate value.
</p>

<p>
Under fields add transformgroup field01. Add attributes fieldAngle integer, fieldArea float, fieldPriceScale integer, npcIndex integer.
</p>

<p>
If you add ownedByPlayer boolean, tick it and player owns the field.
</p>

<p>
Under field01 add fieldBuyTrigger, fieldDimensions and fieldMapIndicator transformgroups.
</p>

<p>
Under fieldBuyTrigger add triggerIconBuyField transformgroup. And there add iconLight light source (create -> light).
</p>

<p>
Under fieldDimensions add corner01_1 transformgroup. And there add corner01_2 and corner01_3 transformgroups.
</p>

<p>
corner01_1 is NW corner, 01_2 is NE corner and 01_3 is SE corner of the field. This gets more complex when you have oddly shaped fields.
</p>

<p>
Scenegraph field01 selected, CTRL-C copies, CTRL-V pastes and CTRL-X cut pastes.
</p>

<p>
Under fields add as many fields as you need numbered 01, 02, 03 etc.
</p>

<p>
Select fields in the scenegraph, then Scripts -&gt; FS17 -&gt; Map -&gt; Toggle Render Field Areas and you will see a blue polygon appear in the shape of your field.
</p>

<p>
Select fields in the scenegraph, then Scripts -&gt; FS17 -&gt; Map -&gt; Set Field Sizes.
</p>

<p>
How to enable / disable the mission function for a field? Select the specific field and add the attribute fieldJobUsageAllowed and select boolean. Then you can turn it on / off.
</p>

<p>
After editing the field/crops you need to get rid of the following files that are in the corresponding save directory:<br>
1. cultivator_density.gdm<br>
2. fruit_density.gdm<br>
3. terrain.lod.type.cache<br>
After you tested the terrain and saved again, those files are regenerated, with the crops and growth states you've set in GE.
</p>

<p>
<b>Good game-play tip:</b> Always place fieldBuyTrigger away from the terrain edge, like if your field is right on the western edge, don't place fieldBuyTrigger into west side of the field, instead put it on east side. If the trigger is very close to terrain edge the icon will not be displayed in PDA mapview. Its recommended that you place all field buy triggers to the edge of the field which is closest to the terrain center, this way you automatically avoid the edges. Also on large terrains (and maybe even medium size not sure) do not place buy triggers close to each other as its hard to mouse click on them in-game due the PDA mapview zoom levels.
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
