<!DOCTYPE html>
<html lang="en">
<head>
<title>Farming Simulator 22 (FS22) Settings - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Farming Simulator 22 (FS22) Settings - PMC Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
<h1>PMC Farming Simulator 22 (FS22) Settings</h1>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>FS22 Game Settings</h2>

<p>
<b>2024-03-03</b> updated.
</p>

<p>
Join discussion in <a href="https://www.pmctactical.org/forum/viewtopic.php?f=79&t=22945" target="_blank">PMC Tactical Forum Settings game.xml FS22 topic</a>, you can post a reply if you have any feedback.
</p>

<p>
Please read <a href="../17/settings.php">Farming Simulator 17</a> and <a href="../19/settings.php">Farming Simulator 19</a> settings pages first as we don't cover stuff we already know. FS22 settings are very much the same in their core than previous FS17 and FS19 settings, in most cases what works in previous games works in FS22 too.
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

<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("/var/www/include/footer-start.php"); ?>
<p><a href="../index.php" class="button">PMC Farming Simulator root page</a></p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("/var/www/include/footer-end.php"); ?>
<?php include("/var/www/include/support.php"); ?>
<?php include("/var/www/include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
