<!DOCTYPE html>
<html lang="en">
<head>
<title>Developer Diary PMC Iowa Garden City 8km FS19 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Developer Diary PMC Iowa Garden City 8km FS19 - PMC Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
<h1><b>Developer Diary PMC Iowa Garden City 8km FS19 - PMC Farming</b></h1>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>2021-06-18 Creating New Farmer Vehicles XML</h2>

<p>
<b>2021-06-18T14:54:00Z</b> Editing continues, took backups to have another restore point to fall back into if I mess up.
</p>

<p>
Added storeItems into modDesc.xml so that placeables work properly without causing errors or even a game freeze.
</p>

<p>
2021-06-18T15:46:00Z Added animal dealer 3D model and associated trigger with warning stripes.
</p>

<p>
Was frustrated with the lack of animal hog/pig barns as we don't have any that would match these iowa ones. Didn't want to get stuck dwelling over this problem and decided to do new farmer game-mode vehicles next.
</p>

<p>
Iowa garden city player farm 1 driveway grid coordinates 2820,3320 and vehicle shop coords 3630,4690.
</p>

<p>
Purchased Lemken Titan 18 plow (width 4.9m, speed 12km/h, required horsepower 300hp). John Deere 6R with 6250R engine upgrade (300hp).
</p>

<p>
Used GtX easy dev controls to teleport tractor and plow into players farm 1 driveway, then parked plow into one of the CBJ vehicle sheds. Used easy dev control to throw tractor back to vehicle shop ready to pickup new purchases.
</p>

<p>
Purchased Horsch Tiger 6 DT cultivator (width 6m, speed 15km/h, required horsepower 300hp). Then did the same parking shuffle, next following vehicles/implements are done the same way but I don't spam every itchy pitchy detail here other than brand/model/specs.
</p>

<p>
Purchased Lemken Solitair 23 (capacity 2000 liters) and Lemken Azurit 9 (capacity 600 liters, width 6m, speed 15km/h, required horsepower 110hp). Filled with fertilizer and seeds.
</p>

<p>
Purchased Vaderstad Rapid A 600S (capacity 3100 liters, width 6m, speed 18km/h, required horsepower 180hp). Filled with fertilizer and seeds.
</p>

<p>
Purchased Agroliner TAW 30 (capacity 45,000 liters).
</p>

<p>
Purchased Kuhn PF 1500 (capacity 1500 liters) and Kuhn Deltis 1302 MTA3 (capacity 1300 liters, with 21m, speed 12km/h).
</p>

<p>
Purchased Kuhn Axis 40.2 M-EMC-W (capacity 3200 liters, width 24m, speed 20km/h).
</p>

<p>
Purchased Rostelmash Nova 330 combine, Ziegler Corn Champion 5R header (width 3.4m, speed 10km/h), Rostelmash PowerStream500 header (width 5m, speed 10km/h).
</p>

<p>
Purchased product pallets 4 seed, 4 fertilizer, 4 lime and 2 herbicide tanks. Had to use fliegl autoload trailer to transfer these pallets into one of the CBJ midwest buildings vehicle sheds in the farm, I could not figure out any way to teleport them.
</p>

<p>
Then opened savegame vehicles.xml and edited operating time and wear to zero, then copy pasted everything to terrains defaultVehicles.xml and added defaultFarmProperty="true" property.
</p>

<p>
2021-06-18T18:22:00Z Tested and stuff appears okay in New-farmer game-mode, they do not appear in Farm manager. All good.
</p>

<p>
2021-06-18T19:22:00Z Grass cleared off from farm 1 placeable buildings, didn't paint the ground to gravel or anything yet, at least now it looks a bit better than just grass growing inside your vehicle sheds.
</p>

<p>
Then added terrain edge block invisible geometry's so vehicles wont fall off the edge. This was super easy, just import pre-made terrain_boundaries_8km.i3d and boom done <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-06-18T1927.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-06-18T1927.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
2021-06-18T20:00:00Z Transferred Location-06 farm yard buildings to player farm 2. Its on farmId="2" now which I actually cant test without starting multiplayer hosted server as far as I know. Buildings show up fine in farm manager game-mode but door animations wont work (because I'm on farmId="1" in singleplayer).
</p>

<p>
Hmm I think farmId="0" which is tied to the farmland purchase is better option here.
</p>

<p>
In multiplayer server players create farms and then wont get any buildings right away, like whoever creates farm 2 doesn't necessarily want to buy this farm yard, so with farmId="0" they could buy any land they wish along with the buildings located there.
</p>

<p>
Need to figure that out and document it properly, I think my local notes have something written down but have already forgotten them heh.
</p>

<p>
<b>2021-06-19T02:10:00Z</b> Transferred Location-09 into player farms.
</p>

<p>
Then transferred Location-10, 13, 19, 20, 24 and 25 into player farms.
</p>

<p>
With Location-24 I had to create farmSiloSmall for PMC Farm Silos mod as it was not there yet, just never had any need for this smaller silo.
</p>

<p>
2021-06-19T03:11:00Z Transferred Location-26 into player farms.
</p>

<p>
Quite nice bunch of farms transferred into players ownership, all in farmId="0" which should work okay, needs testing.
</p>

<p>
Started FS19 for in-game test and got this error:
</p>

<pre>
2021-06-19 03:13 Error: C:/FS19.Mods/PMC_Iowa_Garden_City_8km/defaultItems.xml. items.
</pre>

<p>
Umm "items", thats it? Can you elaborate on that a bit? HEHE
</p>

<p>
First time I've seen such "items" error, time to go check what notepad++ copy pasting messed up in there. Discovered that farmSiloLarge.xml ending line was /&gt; instead of just &gt; heh
</p>

<p>
2021-06-19T06:16:00Z Just got all the new player farm placeable objects in so that on new savegame you don't own any of them but they are in the terrain and animations work (doors open/close), then once you buy the land you get ownership of the buildings/silos as well.
</p>

<p>
Continue reading <a href="dev-diary-pmc-iowa-garden-city-8km-027.php">next page</a>, back to <a href="dev-diary-pmc-iowa-garden-city-8km.php">Dev Diary PMC Iowa Garden City 8km Homepage</a> or <a href="dev-diary-pmc-iowa-garden-city-8km-025.php">previous page</a>.
</p>

<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("/var/www/include/footer-start.php"); ?>
<p>
<a href="pmc-terrains.php" class="button">PMC Terrains FS19</a>
<a href="changelog-pmc-iowa-garden-city-8km.php" class="button">Changelog PMC Iowa Garden City 8km</a>
<a href="pmc-iowa-garden-city-8km.php" class="button">PMC Iowa Garden City 8km</a>
<a href="../index.php" class="button">PMC Farming Simulator root page</a>
</p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("/var/www/include/footer-end.php"); ?>
<?php include("/var/www/include/support.php"); ?>
<?php include("/var/www/include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
