<!DOCTYPE html>
<html lang="en">
<head>
<title>Terrain Animals Farming Simulator 17 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Terrain Animals Farming Simulator 17 - PMC Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
	<h1>Terrain Animals Farming Simulator 17 - PMC Farming</h1>

<p>
Terrain Editing Tutorial: Terrain Animals for Farming Simulator 17 (FS17) by PMC.
</p>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
<?php include("/var/www/include/support.php"); ?>
	<h2>Terrain Animals FS17</h2>

<p>
HOWTO setup your terrain with animals, chickens, sheep, pigs and cows. Basically copy the animals transformgroup from FS17 Goldcrest Valley. To have animals in your terrain is simple as making the navigation mesh, all the rest is feeding, dirt, manure etc eye candy, all you need is navigation mesh (NavMesh) and animals appear.
</p>

<p>
<a href="terrain-giants-editor.php">Giants Editor FS17</a> info layer painting channels:
</p>

<ul>
<li>0 cow</li>
<li>1 sheep</li>
<li>2 chicken</li>
<li>3 pig</li>
</ul>

<p>
NavMesh for animals is created by painting info layer with proper channel selected, then using create -&gt; navigation mesh, you must select terrain desselation -&gt; culling info layer channels properly. Do not just type the number here even if you know it, use the ... button to actually select it.
</p>


	<h2>Creating Animal Navigation Mesh</h2>

<p>
Creating navigation mesh (navmesh) for FS17 animals.
</p>

<p>
In dialog terrain editing -&gt; info layer painting -&gt; info channels. Channel numbers are 0 cow, 1 sheep, 2 chickens and 3 pigs.
</p>

<p>
Select info channel (only one at the time), then select from main menu terrain info layer paint mode. Now paint white color where you want this specific animal type to graze.
</p>

<p>
Go to animals transformgroup (you should have already imported these from some sample terrain and they should be fully working), our transformgroup is named "animals" and has "cowsHusbandry" transformgroup, select this. Click open gameplay transformgroup and there select CowNavMesh.
</p>

<p>
From main menu create -&gt; navigation mesh, click shape build mask three dots (opens a new dialog), click clear button and tick 0 channel, then click ok. Now back in build navigation mesh dialog click terrain tesselation -&gt; culling info layer channels three dots, click clear button and tick 0 channel, then click ok. Again back in build navigation mesh dialog click Recreate button and your 0 cow navmesh is done.
</p>

<p>
Repeat the same for 1, 2 and 3 channels as well to finish all the animal navmeshes <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
PDA map markers for animals are setup in maps/map01.xml file. Use some transformgroup to move into the location where specific animals are located, then write down the attributes translate X and Z coordinates into the XML file.
</p>

<p>
Save game editing, open vehicles.xml and edit Animals_cow, Animals_pig and Animals_sheep to quickly add hundreds of animals for debug purposes so you dont have to go through buy menu in-game.
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
