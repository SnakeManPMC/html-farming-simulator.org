<!DOCTYPE html>
<html lang="en">
<head>
<title>Farming Simulator 19 Settings - PMC Tactical</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Farming Simulator 19 Settings - PMC Tactical">
<META name="keywords" content="Farming, Simulator, Settings, PMC, Tactical">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<!-- google ads -->
<?php include("../include/google-ads.php"); ?>
<h1><b>PMC Tactical Farming Simulator 19 Settings</b></h1>
</header>

<section>

<p>
<b>2019-02-26</b> This page is work in progress.
</p>

	<h2>HOWTO Disable Intro Movies</h2>

<p>
In your FS19 shortcut add -restart startup parameter. Open game.xml and change &lt;startMode&gt;1&lt;/startMode&gt; to zero like &lt;startMode&gt;0&lt;/startMode&gt; this. Now when you start FS19 the intro logos and movie will not play saving you many key presses to bypass them :)
</p>

	<h2>HOWTO Disable Screenshot Key</h2>

<p>
Open inputBinding.xml and seach for TAKE_SCREENSHOT, then replace it with &lt;binding device="KB_MOUSE_DEFAULT" input="" axisComponent="+" neutralInput="0" index="1"/&gt;
</p>

</section>

<footer>
<p><a href="../index.php" class="button">PMC Farming Simulator root page</a></p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("../include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
