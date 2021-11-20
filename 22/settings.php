<!DOCTYPE html>
<html lang="en">
<head>
<title>Farming Simulator 22 Settings - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Farming Simulator 22 Settings - PMC Farming">
<META name="keywords" content="Farming, Simulator, FS22, Settings, PMC, Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<!-- google ads -->
<?php include("../include/google-ads.php"); ?>
<h1><b>PMC Farming Simulator 22 Settings</b></h1>
</header>

<section>

	<h2>FS22 Game Settings</h2>

<p>
<b>2021-11-20T16:27:00Z</b> updated. This page is SPECULATION until after 2021-11-21T23:00:00Z when we get to activate the game and try this info ourselves.
</p>

<p>
Please read <a href="../settings.php">Farming Simulator 17</a> and <a href="../19/settings.php">Farming Simulator 19</a> settings pages first as we don't cover stuff we already know.
</p>

	<h2>game.xml</h2>

<p>
game.xml file is located at:
</p>
<pre>
C:\Users\MYNAME\Documents\My Games\FarmingSimulator2022\
</pre>

<p>
FS22 includes new properties for game.xml file, these are excellent for clean game running. Below you see first we have enabled "controls" with TRUE value, then we also enabled openDevConsole for both errors and warnings.
</p>

<pre>
    &lt;development&gt;
        &lt;controls&gt;true&lt;/controls&gt;
        &lt;openDevConsole onWarnings="true" onErrors="true"/&gt;
    &lt;/development&gt;
</pre>

<p>
This openDevConsole is awesome addition for developers or even regular players who want to run the game error free, because that is the only way to play the game. If you allow errors and warnings in your mods, it degrades performance and causes game-play issues.
</p>

<p>
Always run error free log.
</p>

</section>

<footer>
<p><a href="../index.php" class="button">PMC Farming Simulator root page</a></p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("../include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
