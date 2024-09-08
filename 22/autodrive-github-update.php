<!DOCTYPE html>
<html lang="en">
<head>
<title>AutoDrive GitHub Update Farming Simulator 22 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="AutoDrive GitHub Update Farming Simulator 22 - PMC Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
<h1>AutoDrive GitHub Update Farming Simulator 22 - PMC Farming</h1>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>FS22 AutoDrive GitHub Updating</h2>

<p>
Here is a batch file to automatically download FS22 AutoDrive from the official GitHub repository and pack FS22 compatible mod ZIP packet. This batch file requires windows WGET software, in my example its on path or in the directly you are running this bat.
</p>

<p>
_run_FS22_download_autodrive.bat:
</p>

<pre>
@echo off
wget https://github.com/Stephan-S/FS22_AutoDrive/archive/refs/heads/main.zip
md temp
cd temp
7za x ..\main.zip
cd FS22_AutoDrive-main
del credits.txt
del README.md
7za a -tzip ..\..\FS22_AutoDrive.zip *
cd ..\..
del main.zip
rd /q /s temp
pause
exit
</pre>

<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("/var/www/include/footer-start.php"); ?>
<p><a href="autodrive.php" class="button">FS22 AutoDrive root page</a> <a href="../index.php" class="button">PMC Farming Simulator root page</a></p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("/var/www/include/footer-end.php"); ?>
<?php include("/var/www/include/support.php"); ?>
<?php include("/var/www/include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
