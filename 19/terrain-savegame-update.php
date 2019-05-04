<!DOCTYPE html>
<html lang="en">
<head>
<title>Savegame Update Farming Simulator 19 - PMC Tactical</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Savegame Update Farming Simulator 19 - PMC Tactical">
<META name="keywords" content="Terrain, Savegame Update, PMC, Tactical">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<!-- google ads -->
<?php include("../include/google-ads.php"); ?>
<h1><b>PMC Tactical Farming Simulator Terrain Savegame Update</b></h1>
</header>

<section>
	<h2>Terrain Savegame Update</h2>

<p>
<b>2019-05-01</b> Page is work in progress, if you see any errors or have more information please let us know.
</p>

<p>
Generally when you edit your terrain you need to start a new career savegame, however you can bring over your old savegame vehicles and money etc stuff with a bit of file moving work.
</p>

<p>
Keeping the same savegame after terrain files updates: start new career, copy your OLD careerSavegame, economy, farmland and vehicles xml files over to the new savegame dir.
</p>

<ul>
<li>shut down server, well doh!</li>
<li>download server savegame (or backup, if you're hosting)</li>
<li>start a new savegame in local machine, save it heh</li>
<li>copy all the gdm/grle/png images from the new savegame dir into the old savegame dir</li>
<li>zip up the merged server savegame to savegame1.zip and upload back to server (or place into savegame dir if youre hosting)</li>
<li>start server using the save and join</li>
</ul>

<p>
When you load up server with this savegame, the field states like crop growth stages are reset to their original values. So this is kind of cheaty way, you could harvest same field without ever seeding it, but why would you go through all that trouble for what you can do through dev console. Just keep it in mind that its best to reset savegame when you have harvested a field so there is no more work to be done.
</p>

<p>
If you have not edited heightmap dont copy over terrain.heightmap.png
</p>

<p>
If you have not edited ? dont copy over cultivator_density.gdm
</p>

<p>
If you have not edited foliage layers dont copy over fruit_density.gdm
</p>

<p>
weed_density.gdm hmm I dont think this is edited in GE, I have never edited it?
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
