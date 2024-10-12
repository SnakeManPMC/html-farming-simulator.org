<!DOCTYPE html>
<html lang="en">
<head>
<title>PMC Super Six 6km Farming Simulator 22 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="PMC Super Six 6km Farming Simulator 22 - PMC Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
<h1><b>PMC Super Six 6km - Farming Simulator 22 Terrain</b></h1>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
<div class="terrain">
<p><b>2023-01-18T10:45:00Z</b> Updated. Please read <a href="pmc-terrains.php">PMC Terrains</a> page for additional information.</p>

	<h2>PMC Super Six 6km</h2>

<p>
Terrain size: 6144 meters x 6144 meters, which is 6.1 kilometers x 6.1 kilometers (elmcreek is 2km). Terrain type: american, fictional.
</p>

<div>
<p>
Click map image for more <a href="screenshots-pmc-super-six-6km.php" target="_blank">screenshots</a>.
</p>
<a href="screenshots-pmc-super-six-6km.php" target="_blank"><img src="screenshots/thumbs/PMC-Super-Six-6km-Satellite.jpg" alt="Farming Simulator 22 Terrain - PMC Super Six 6km Satellite Mapview" class="terrainimg"></a>
</div>

	<h2>New Farmer Game-Mode</h2>

<p>
New Farmer game-mode starter includes only vehicles (there are no buildings currently).
</p>

<p>
<b>Vehicles:</b> Fendt 724 Vario (tractor), Rostselmash Nova 330 (combine harvester) + Power Stream 500 (header) + Ziegler Corn Champion 5R (corn header). 
</p>

<p>
<b>Implements:</b> Kverneland Ecomat (plow), Lemken Smaragd 8/500K (cultivator), Pottinger Terrasem C6F (seeder), Lemken Azurit 9 (planter) + Solitair 23 tank, Amazone ZA-TS 3200 (fertilizer spreader), Hardi Mega 1200L (sprayer) + Mega 1200L Tank, Welger DK 115 (trailer), Bredal K105 (fert/lime spreader).
</p>

<p>
<b>Product:</b> Corteva solid fertilizer 4k liters, Pioneer seeds 4k liters, Lime 8k liters, Corteva Herbicide 4k liters.
</p>

<a href="screenshots/PMC-Super-Six-6km-New-Farmer-Vehicles.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Super-Six-6km-New-Farmer-Vehicles.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
<b>Land:</b> you own empty farm yard (northern most), ready for you to place down your own placeables.
</p>

<a href="screenshots/PMC-Super-Six-6km-New-Farmer-Yard.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Super-Six-6km-New-Farmer-Yard.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>


	<h2>Fields</h2>

<p>
Fields smallest: 16.5ha (field 6), largest 108.8ha (field 3).
</p>

<div class="farmfields">
<pre>
Field 1 (field) : 55.283 ha
Field 2 (field) : 34.087 ha
Field 3 (field) : 108.881 ha
Field 4 (field) : 19.711 ha
Field 5 (field) : 67.435 ha
Field 6 (field) : 16.579 ha
</pre>
</div>

<p>
That list was field definition size in hectares, the actual 3D in-game fields are much larger because cultivator_density has been painted to a nice shape where field definition (the part AI uses for contracts) only covers a simple shape area.
</p>

<p>
Only few fields have field definitions (numbers, AI planting and contracts) to get players started, then it is up to the player to purchase land and farm the actual fields. This is by design, its not a bug, its not lazyness, we wanted it this way. There are plenty enough contracts to do and its challenging and fun to actually farm your own fields instead making money out of contracts when every field offers them.
</p>

	<h2>Placeable Objects</h2>

<p>
When you start a savegame and not own any land with placeables, nothing shows up in ESC mapview or minimap, once you buy the land with placeables, objects like buildings appear in mapview and then you get to use them, including selling them all if you do not like their placement. No more hardcoded farm yards! <img src="../images/smileys/icon_cool.gif" alt="Smiley :cool:" loading="lazy">
</p>

<p>
Placeable objects appear in farm yards. These building objects are for example vehicle sheds, grain bin silos, fertilizer tanks (liquid/solid), diesel fuel tank, water tank etc.
</p>

<p>
Land purchase areas are detailed so that you can buy small and cheap farm yards areas. No need to save money for big huge millions costing land area if you only want to get the cool farm yard with buildings on it.
</p>

	<h2>Game-play</h2>

<p>
Selling points: total of 12 selling points are distributed around the terrain. Selling points accept all grains and production chain products. Special animal dealer bale selling point is located by the ... the.. umm cant remember where heh.
</p>

<p>
Contracts: AI does planting on field numbers 1-6, contracts are available. Plenty of money to be made on these contract fields which sizes span from 16 to over 100 hectares.
</p>

<p>
Remaining fields are just painted cultivator_density without field number or rest of the field definition. Courseplay and hired workers should function on these un-numbered fields, if they do not please send us feedback and we'll add field numbers for courseplay usage.
</p>

<p>
Farm Manager and Start From Scratch game-modes include the AI owned farm yards with buildings, once you buy the land you own the buildings with ability to sell them all, same as in New Farmer game-mode where player owns one farm yard by default.
</p>

	<h2>Background</h2>

<p>
This terrain was initially created in christmas of 2021 as "PMC Test Farm 6km" project name just to see if I can get 6.1km x 6.1km terrain size in-game and working. There was some issues in the beginning before I managed to get them resolved. Then it was full month later before I returned into this project once "test farm" series of terrains was planned for a release.
</p>

<p>
A brand new GIMP painted design doc was created and implemented into this terrain. Initial plan was to make symmetric boring american road grid, but it by accident just happened to turn into this goofy screwy looking design as you see in the release.
</p>

<p>
Spent a lot of time and effort to edit new features and game-play content into this terrain with the latest knowledge gained up to that point. This project at v0.1 release was very playable and even looked nice in the simplistic way with big irregular shape fields, big american vehicle sheds and grain bins etc on the several farm yards included in this terrain.
</p>

<p>
In short there was no specific plan to create a 6.1km terrain and release it... that just sort of happened on its own <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

	<h2>Feedback</h2>

<p>
PMC Super Six 6km terrain has basic buildings, utility poles and trees placed. Basic object placement is complete, more tweaks follow after game-play testing has produced results. If you find bugs, missing features or other issues of any kind, please send feedback so we can investigate.
</p>

<p>
Player feedback is very important to us, please feel free to share any feedback you think of while farming on this terrain.
</p>

<p>
More editing details and thoughts from <a href="dev-diary-pmc-super-six-6km.php">Developer Diary PMC Super Six 6km</a>.
</p>

<p>
Please <a href="../contact.php">contact us</a> for feedback, bug reports, etc.
</p>

	<h2>Changelog</h2>

<p>
See <a href="changelog-pmc-super-six-6km.php" target="_blank">Changelog PMC Super Six 6km</a> for all changes since this terrain was initially created. Known issues list is also available in the changelog page.
</p>

	<h2>License</h2>

<p>
License: <b><a href="https://creativecommons.org/licenses/by-nc-nd/4.0/" target="_blank">CC BY NC ND</a></b>, which means you are free to distribute/share the original 7-zip packet but NO commercial use and NO editing, see LICENSE.txt for details.
</p>

	<h2>Required Mods</h2>

<p>
TrailerParkFarms (TPF) 72x150 and 90x200 vehicle shed packs are used for various farm yards for that authentic American farming look.
</p>

<p>
Downloads: FS22_72x150ShedPack.zip 4mb <a href="https://trailerparkfarms.itch.io/fs-22-72x150-shed-pack" target="_blank">fs22-72x150-shed-pack</a> and FS22_90x200ShedPack.zip 5mb <a href="https://trailerparkfarms.itch.io/fs-22-90x200-shed-pack" target="_blank">fs22-90x200-shed-pack</a>.
</p>

<p>
Terrain config has no checks if these required mods are present, if you do not start FS22 with these mods active you will not see some building objects, with additional errors in the log.
</p>

<p>
PMC terrains are error free, as long as player uses required mods.
</p>

	<h2>Download</h2>

<p>
PMC_Super_Six_6km_v0.1.7z 45.6mb <a href="magnet:?xt=urn:btih:84118972037745f5861cacf10e866f1d52005569&xt=urn:btmh:12203a1e36a118062ec2e52ae64e900fd05624272883f6aae5e181fee9abe3585635&dn=PMC_Super_Six_6km_v0.1.7z&tr=udp%3a%2f%2ftracker.opentrackr.org%3a1337%2fannounce&tr=udp%3a%2f%2ftracker.openbittorrent.com%3a6969%2fannounce">Torrent Magnet</a>, mirror: <a href="https://drive.google.com/file/d/1XSsTXnwS4jRAcaQtEdQETdA0MSgpZLak/view?usp=sharing" target="blank">google drive</a>.
</p>

<p>
For installing please read <a href="../19/install-mods.php">how to install FS19 mods</a> and <a href="../19/install-pmc-terrain-mods.php">how to install PMC terrain mods</a>. Yes FS19 tutorials work just fine for FS22 in this case.
</p>
</div>

<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("/var/www/include/footer-start.php"); ?>
<p>
<a href="pmc-terrains.php" class="button">PMC Terrains FS22</a>
<a href="changelog-pmc-super-six-6km.php" class="button">Changelog PMC Super Six 6km</a>
<a href="dev-diary-pmc-super-six-6km.php" class="button">Dev Diary PMC Super Six 6km</a>
<a href="screenshots-pmc-super-six-6km.php" class="button">Screenshots PMC Super Six 6km</a>
<a href="../index.php" class="button">PMC Farming Simulator root</a><br>
<i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i>
</p>
<?php include("/var/www/include/footer-end.php"); ?>
<?php include("/var/www/include/support.php"); ?>
<?php include("/var/www/include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
