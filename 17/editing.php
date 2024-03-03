<!DOCTYPE html>
<html lang="en">
<head>
<title>Farming Simulator Editing - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Editing - PMC Farming">
<META name="keywords" content="Editing, PMC, Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<!-- google ads -->
<?php include("../include/google-ads.php"); ?>
<h1><b>PMC Farming Simulator 17 Editing</b></h1>
</header>

<section>
	<h2>General Editing Info</h2>

<p>
Savegames are saved in directory which contains few XML files that you can edit. These directories are located in:
</p>
<pre>
C:\Users\YOURNAME\Documents\My Games\FarmingSimulator2017\
</pre>
<p>
directory in windows 7, might be different on other windows no idea.
</p>


	<h2>Adding Money To Savegame</h2>

<p>
In the directory you saved your game, like first is "savegame1" and second is "savegame2" etc. Open the careerSavegame.xml file in text editor.
</p>

<p>
Now search for "money" and edit that value.
</p>


	<h2>Save Game Owned Fields</h2>

<p>
In the savegame dir open economy.xml file, edit the part:
</p>
<pre>
&lt;fieldOwnership&gt;
	&lt;field number="1" ownedByPlayer="false" npcIndex="1" /&gt;
	etc
&lt;/fieldOwnership&gt;
</pre>
<p>
ownedByPlayer false or true defines if you own the field or not.
</p>

	<h2>Save Game Grain Silos Empty</h2>

<p>
If a new terrain start places grain into your silos and you want to empty them, then search savegame dir vehicles.xml file for fillLevel which is not 0 and set it to, well zero, like this:
</p>
<pre>
fillLevel="0"
</pre>


	<h2>Save Game Animals</h2>

<p>
You can edit the savegame XML to add animals and their food. Open vehicles.xml and search for "Animals_sheep", "Animals_cow", "Animals_chicken", "Animals_pig" and edit the numAnimals0 value to add/remove animals, also dont forget their food levels which can be found from tipTriggerFillLevel values.
</p>

</section>

<footer>
<p><a href="../index.php" class="button">PMC Farming Simulator root page</a></p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("../include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
