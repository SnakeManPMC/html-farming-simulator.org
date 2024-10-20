<!DOCTYPE html>
<html lang="en">
<head>
<title>Terrain Edge Block Farming Simulator 19 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Terrain Edge Block Farming Simulator 19 - PMC Farming">
<META name="keywords" content="Terrain, Edge Block, PMC, Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
<h1><b>PMC Farming Simulator Terrain Edge Block</b></h1>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>Terrain Edge Block</h2>

<p>
Terrain Edge Block means that when you walk or drive any kind of vehicle at the terrain border/edge, you will stop, you do not fall of the map so to speak.
</p>

<p>
For reference check mapUS, GE -> mapBoundaries, this shows you how the terrain edge invisible blocks are created. attributes -> rigid body -> collision probably is the important piece which makes you stop to this shape.
</p>

<p>
You don't need a actual geometry shape model for this, just do create -> primitives -> plane and use that.
</p>

<p>
Plane attributes -> transform tick rigid body. Attributes -> rigid body tick collision. Attributes -> shape tick cast shadowmap, recive shadowmap, non renderable and distance blending.
</p>

<p>
Then just attributes -> transform set the scale to fit into edge of your terrain, then move manually or by typing values into translate X and Z into your terrain edge.
</p>

<p>
Scale for terrains are 2km 2048, 4km 4096, 8km 8192 and 16km 16384. The scale Z is fine with like 500.
</p>

<p>
Using 2km x 2km terrain example transform translate coordinates, edges are:<br>
0,0,-1024 rotate 90,0,0<br>
1024,0,0 rotate -90,-90,180<br>
0,0,1024 rotate -90,0,180<br>
-1024,0,0 rotate 90,90,0
</p>

<p>
For 4km terrain use -2048, for 8km -4096 etc.
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
