<!DOCTYPE html>
<html lang="en">
<head>
<title>Create Basic Terrain Farming Simulator 17 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Create Basic Terrain Farming Simulator 17 - PMC Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
	<h1>Create Basic Terrain Farming Simulator 17 - PMC Farming</h1>

<p>
Terrain Editing Tutorial: Create Basic Terrain for Farming Simulator 17 (FS17) by PMC.
</p>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
<?php include("/var/www/include/support.php"); ?>
	<h2>Create Basic Terrain FS17</h2>

<p>
Modding Handbook says you can create terrain from scratch or edit existing terrain. Seems like editing existing is no brainer, but when creating brand new terrain from zero it is not that easy to bring it in-game (game crashes or loads forever etc).
</p>

<p>
You should't edit default game terrains (FS17 Goldcrest Valley and FS17 Sosnovka) obviously as it breaks your default game. You can export these into your own terrain, but even then you should make YOUR own terrain and not edit someone elses, be original, man.
</p>

<p>
Something called "SampleMap" is good place to start for your initial terrain files. When googling there are several samplemap packages floating around, all from different developers and tastes, no idea which one is proper. Welcome to FS17 modding community <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Special note about "Sample Map Mods", please do not create and release them. Avoid downloading existing "Blank Maps", you should create and edit your own empty terrain instead. These "Sample Map Mods" are garbage, waste of your time, don't download not to mention release them.
</p>

<p>
Create directory called "MyTerrain" and do not use illegal characters (like " !@#$%^&*'`][\/" etc) anywhere on the file name or numbers as first character, if you do the terrain wont load in FS17. If you are creating your own terrain from scratch, create sub dir called "maps" so its "MyTerrain\maps\" directory structure.
</p>

<p>
Unpack GAMEDIR/sdk/sampleMod.zip into MyTerrain\ directory.
</p>

<p>
Go to MyTerrain\maps\ directory and open map01.i3d file with Giants editor.
</p>

<p>
Delete scenegraph -> HelpIcons and placeholders.
</p>

<p>
You do NOT need to ZIP the MyTerrain because if you just copy the directory into FS17 mods dir, the game will read it fine.
</p>

<p>
Open ModDesc.xml file, edit maps -> map id to your own unique terrain name, do not use illegal characters like space etc.
</p>

<p>
That is the basic info you need how to create your own empty terrain. From that point you can start to really edit the terrain for your needs, but that is a whole another topic <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
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
