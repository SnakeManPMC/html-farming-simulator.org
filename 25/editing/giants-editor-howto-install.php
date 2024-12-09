<!DOCTYPE html>
<html lang="en">
<head>
<title>Giants Editor HOWTO Install Farming Simulator 25 - PMC Farming</title>
<LINK href="../../css.css" rel=stylesheet type="text/css">
<META name="description" content="Giants Editor HOWTO Install Farming Simulator 25 - PMC Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("../../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
	<h1>Giants Editor HOWTO Install Farming Simulator 25 - PMC Farming</h1>

<p>
Giants Editor HOWTO Install Farming Simulator 25 (FS25).
</p>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
<?php include("/var/www/include/support.php"); ?>
	<h2>Giants Editor HOWTO Install FS25</h2>

<p>
First read <a href="giants-editor-howto-download.php">HOWTO Download Giants Editor</a> tutorial.
</p>

<p>
Giants Editor downloaded installer filename depending on the version is like: <b>GIANTS_Editor_10.0.3_win64.exe</b>
</p>

<p>
In windows 10 (or win11 if you happen to have it installed), open file explorer, browse to the downloaded Giants Editor installer and left mouse button (LMB) double click to run the installer.
</p>

<p>
Depending on your windows 10 settings it might ask you "Do you want to run this file?", answer by clicking "Run" button. Next you see Giants license agreement, you have to tick the "I accept the agreement" option, then click Next button to proceed.
</p>

<img src="screenshots/Giants-Editor-License-Agreement.jpg" class="imgresponsive" loading="lazy" alt="Giants Editor Installer License Agreement" title="Giants Editor Installer License Agreement">

<p>
Now the installer asks you to select destination location. This default path suggests some windows directory with spaces in the directory name, you should never use special characters in directory or filenames, so you have to choose a custom directory here. See more on <a href="directory-file-names.php">Editing Directory and File Names</a> page.
</p>

<img src="screenshots/Giants-Editor-Select-Destination-Location.jpg" class="imgresponsive" loading="lazy" alt="Giants Editor Installer Select Destination Location" title="Giants Editor Installer Select Destination Location">

<p>
It is up to you if you keep it on C: partition or choose some other like D:, E: etc depending on your computer hardware. Often times (isn't it always in 2020s?) C: is either SSD or M.2 NVMe very fast devices and those have less file space capacity than regular hard disk drives (HDD), but on the other hand as most likely Farming Simulator 25 (FS25) is located in C: or other fast SSD, its recommended to use that.
</p>

<p>
In my example it is C:\Wintools\GIANTS_Editor_10.0.3 directory name, no spaces, no special meaning illegal characters, everything by the book. My C:\Wintools\ dir is most likely what you don't have in your system and that is OK, you can choose other dir or create this one, its quite self explanatory in itself, "windows tools" and Giants Editor v10.0.x definitely matches that category.
</p>

<p>
Then the installer asks you to select start menu folder.
</p>

<img src="screenshots/Giants-Editor-Select-Start-Menu-Folder.jpg" class="imgresponsive" loading="lazy" alt="Giants Editor Select Start Menu Folder" title="Giants Editor Select Start Menu Folder">

<p>
Start menu folder means where in windows programs list this software appears, just leave it as default that works fine, so click next button to proceed.
</p>

<p>
Now installer asks to create a desktop shortcut by ticking the box, you can choose not to but its pretty handy to have Giants Editor shortcut in the desktop so why not make sure is ticked like in the example image below.
</p>

<img src="screenshots/Giants-Editor-Create-Desktop-Shortcut.jpg" class="imgresponsive" loading="lazy" alt="Giants Editor Create A Desktop Shortcut" title="Giants Editor Create A Desktop Shortcut">

<p>
Once next button is clicked the actual installing of new files and registry keys begins. This only takes a moment, once its done you see this screen as shown in example image below.
</p>

<img src="screenshots/Giants-Editor-Setup-Wizard-Finish.jpg" class="imgresponsive" loading="lazy" alt="Giants Editor Setup Wizard Finish" title="Giants Editor Setup Wizard Finish">

<p>
If you do not untick those boxes then it opens readme.txt in default text editor and launches Giants Editor at the same time, its up to you what to do here, personally I like to open text files and launch programs myself so I untick those two boxes and click finish to complete Giants Editor install process.
</p>

<p>
All done, congratulations you have just installed Giants Editor v10.0.x (whatever version it is at the time you read this tutorial) <img src="../../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>


	<h2>Launching Giants Editor For The First Time</h2>

<p>
When you launch new install of Giants Editor the first time and you happen to have old versions installed, it will ask you to import settings from one of the installed ones.
</p>

<img src="screenshots/Giants-Editor-Settings-Import.jpg" class="imgresponsive" loading="lazy" alt="Giants Editor Settings Import" title="Giants Editor Settings Import">

<p>
In that example image you see I had or have v10, v10.0.1 and v10.0.2 installed previously.
</p>

<p>
Generally speaking its a good idea to import settings from previous version, just make sure that previous version had proper settings in place, if the settings are no good then your latest and current Giants Editor will have no good settings as well.
</p>

<p>
On my very first install on Giants Editor v10 release, it offered some Giants Editor v8.2.2 from Farming Simulator 19 and v9.0.6 from Farming Simulator 22 editor settings, I believe I chose the latest v9.0.6 from FS22 game install. If this is the case for you as well, then you have to be sure to go into either configuration file or the in-game GUI menu to re-configure FS25 game installation path as that does not match if you exported v8 or v9 settings.
</p>

<p>
See more about <a href="giants-editor-configure.php">HOWTO Configure Giants Editor</a> and <a href="giants-editor-log-file.php">Where Is Giants Editor Log File</a> next.
</p>

<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("/var/www/include/footer-start.php"); ?>
<p>
<a href="giants-editor.php" class="button">Giants Editor FS25</a>
<a href="../../17/terrain-editing-tutorial.php" class="button">Terrain Editing Tutorial FS17</a>
<a href="../../19/terrain-editing-tutorial.php" class="button">Terrain Editing Tutorial FS19</a>
<a href="../../22/terrain-editing-tutorial.php" class="button">Terrain Editing Tutorial FS22</a>
<a href="../terrain-editing-tutorial.php" class="button">Terrain Editing Tutorial FS25</a>
<a href="https://www.pmctactical.org/forum/viewforum.php?f=81" target="_blank" class="button">FS25 Editing Forum</a>
<a href="../../index.php" class="button">PMC Farming Simulator root page</a>
</p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("/var/www/include/footer-end.php"); ?>
<?php include("/var/www/include/support.php"); ?>
<?php include("/var/www/include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
