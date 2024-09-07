<!DOCTYPE html>
<html lang="en">
<head>
<title>Changelog PMC Grande Gardens 16km - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Changelog PMC Grande Gardens 16km - PMC Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
<h1><b>Changelog PMC Grande Gardens 16km Farming Simulator 19 Terrain</b></h1>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
<p>
Changelog for <a href="pmc-grande-gardens-16km.php">PMC Grande Gardens 16km</a> FS19 terrain. See known issues from bottom of this page. Also check out <a href="dev-diary-pmc-grande-gardens-16km.php">Dev Diary PMC Grande Gardens 16km</a>.
</p>

<p>
Most version numbers are missing, sorry about that.
</p>

<div class="changelog">
	<h2>FS17</h2>

<p>
2018 July, prior to 2018-07-09<br>
- terrain project started for fs17, working title "MyMap_16km" or something like that
</p>

	<h2>FS19 Port</h2>

<p>
2019-02-03:<br>
- first day of farming simulator 19 terrain editing. unfortunately I did not write changelogs <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy"><br>
2019-02-28:<br>
- still FS19 terrain editing, every day, 16hrs a day ...
</p>

	<h2>2019</h2>

<p>
2019-06-19:<br>
- mymap_16km fields.xcf created, cultivator_density image cleaned up of the few streaks<br>
- MyMap_16km create design doc image for gimp<br>
2019-06-20:<br>
- MyMap_16km decide on a new name PMC Grande Gardens 16km<br>
- grande gardens, map_preview missing<br>
- grande gardens, paint PDA image in gimp<br>
- grande gardens, gimp fields background color 63,63,63 and fields 255,0,0 export to satellite_texture_cultivator_density.png<br>
- grande gardens, roads RGB 255,0,0 and background transparent gimp exported to satellite_texture_roads.png<br>
- grande gardens, gimp paint _farmland image https://www.farming-simulator.org/19/terrain-farmland-painting-gimp.php export to satellite_texture_farmland.png<br>
- grande gardens, _run_graphicsmagick_create_cultivator_density.bat<br>
- grande gardens, _run_graphicsmagick_create_roads_roughdirt01.bat<br>
- grande gardens, _run_graphicsmagick_create_fruit_density.bat<br>
- grande gardens, _run_graphicsmagick_create_farmland.bat<br>
- grande gardens, new map_preview and pda_map images installed<br>
- grande gardens, heightmap needs to be replaced with proper rolling hills version<br>
- grande gardens, paint roads in gimp<br>
- grande gardens, add grass<br>
- grande gardens, field 7 and 11 map indicator is on right side, it needs to be centered<br>
2019-06-21:<br>
- grande gardens, no special sale points, bale, straw, grass, etc<br>
- grande gardens, add more sale points, fill it to the brim hehe, total of ten now, all accepting all products<br>
- fs19 farmland image graphicsmagick convert to grle type field ID 25 bug fixed, finally<br>
- grande gardens, sale points removed from fields and in general reorganized<br>
- grande gardens, went through all field map indicators and centered them properly<br>
- grande gardens, grass removed from sale point grills<br>
2019-06-22:<br>
- grande gardens, painted more small fields to cultivator_density image, for start from zero careers<br>
- grande gardens, paint railroads in gimp design doc<br>
- grande gardens, paint farms in gimp design doc<br>
- grande gardens, paint sale points in gimp design doc<br>
2019-06-23:<br>
- grande gardens, field definitions created for the 83 through 98 new small starter fields<br>
- grande gardens, pda_map image updated with the new small fields<br>
- grande gardens, more roads painted to design doc<br>
- grande gardens, new roads (in narrower width) and interstate exported to _weight images<br>
2019-06-24:<br>
- grande gardens, road spline created for interstate<br>
2019-06-27:<br>
- grande gardens, placed dozen or so windturbines on highest points of the terrain<br>
- grande gardens, sale point 1 oriented 90 degrees, grass removed underneath<br>
- grande gardens, sale point 2 lowed tiny bit, grass removed underneath<br>
- grande gardens, sale point 3-6, 9, 10 grass removed underneath<br>
- grande gardens, sale point 7 moved off the road, lowed tiny bit, grass removed underneath<br>
- grande gardens, sale point 8 moved off the road, rotated 90 degrees, grass removed underneath<br>
- grande gardens, road near sale point 7 had a bad curve due railroad design, straightened it out<br>
- grande gardens, intersection below F32 is offset, aligned it straight<br>
- grande gardens, PDA is not updated with the new roads<br>
- grande gardens, trainSystemNW created with custom grain wagon of 143k liters capacity<br>
2019-06-28:<br>
- grande gardens, trainSystemNE created<br>
- grande gardens, trainSystemSW created<br>
- grande gardens, trainSystemSE created<br>
- grande gardens, trainSystemEdgeLoop created<br>
2019-06-29:<br>
- grande gardens, dirt road going north west of F40 needs to be removed, just use interstate<br>
2019-08-18:<br>
- grande gardens trainSystemNE spline underground and floating fixed<br>
- grande gardens trainSystem added locomotive max speed 120kph<br>
- grande gardens trainSystem added grainWagon with 143k liters capacity<br>
- grande gardens trainSystemNE added 20 grain cars<br>
- grande gardens train spline needs gray ground texture painted under the track mesh<br>
- created lua script to elevate train tracks heightmap just right<br>
2019-08-19:<br>
- grande gardens train railroad silo 1 created<br>
- grande gardens train railroad silo 2 created<br>
- grande gardens train railroad silo 3 created<br>
- grande gardens train railroad silo 4 created<br>
- grande gardens train railroad silo 5 created<br>
2019-08-20:<br>
- grande gardens train railroad silo 6 created<br>
- grande gardens train railroad silo 7 created<br>
- grande gardens train railroad silo 8 created<br>
- grande gardens train railroad silo 9 created<br>
- grande gardens train railroad silo 10 created<br>
- grande gardens train railroad silo 11 created<br>
- grande gardens train railroad silo 12 created<br>
2019-08-22:<br>
- grande gardens mapUS sounds are still in place, can hear ocean in west side of F01<br>
2019-11-20:<br>
- grande gardens string sale point replaced with selling point<br>
- grande gardens seasons mask added<br>
- grande gardens NW railroad cuts through TWO fields (just one, but ok), fixed<br>
- grande gardens SW railroad cuts through a field, fixed<br>
- grande gardens SW railroad added unloading point for railroad silo 1 center hub<br>
- grande gardens NW railroad adjusted railroad silo 1, 3 and 4 (I think) for unloading<br>
- grande gardens NE railroad adjusted railroad silos for unloading<br>
- grande gardens player farms 1-4 created  (cbj buildings) on defaultItems.xml so MP compatible<br>
- grande gardens AI cosmetic farms 5-31 created (cbj buildings)<br>
- grande gardens utility poles added to road sides<br>
2019-11-21:<br>
- grande gardens forest trees added, on several places where start from zero savegame is currently focused<br>
- grande gardens bushes gimp painted around the fields all over the start fromzero savegame areas<br>
- grande gardens farmlands IDs painted in gimp for nice and detailed small cheap lands around small or few fields<br>
- grande gardens F03 and 89-92 farmland area splitted up to smaller lands<br>
- grande gardens trainsystem increased the amount of grain wagon cars to 40 cars<br>
- grande gardens train depot capacity increased to 50 million<br>
- grande gardens railroad silos unloading speed should be increased just a little, changed to fillLitersPerSecond="4000"<br>
- grande gardens F04 field definition minor tweak, cant see anything wrong with it but courseplay still bugs, hope it works now<br>
- grande gardens F28 field definition does not fit the cultivator_density image in the east end, tweaked<br>
- grande gardens F25 east and south west edges field definition is not lining up with cultivator density, tweaked<br>
- grande gardens selling point 6 moved slightly to north and now its on railroad<br>
- grande gardens trainSystemSE added to selling point 4<br>
- grande gardens trainSystemSW added to selling point 4<br>
- grande gardens selling point 7 moved to west and now its on trainSystemSE<br>
- grande gardens selling point 8 moved to north and now its on trainSystemNW<br>
- grande gardens selling point 9 moved to east and now its on trainSystemNW<br>
- grande gardens selling point 10 moved and now its on trainSystemNE<br>
- grande gardens selling point 11 created to trainSystemNE<br>
- grande gardens selling point 12 created to trainSystemSW<br>
</p>

	<h2>2020</h2>

<p>
2020-04-17:<br>
- grande gardens forests object placement<br>
- grande gardens 16km terrain boundaries imported<br>
- grande gardens cultivator_density field corners rounded to 30 pixel smoothness<br>
- grande gardens cultivator_density field uneven edges fixed<br>
- grande gardens field definitions tweaked to match new cultivator_density image<br>
- grande gardens utility poles placed to southern E-W road<br>
2020-04-18:<br>
- grande gardens, field corners not smooth on F03 (near dealership) and F33, F47 the inner corner<br>
2020-06-05:<br>
- grande gardens vegetation placed around farm yards<br>
- grande gardens highway elevated and one road south of F39<br>
2020-08-12:<br>
- grande gardens object placement, PMC Gaming computer twitch streaming<br>
2020-08-13:<br>
- grande gardens object placement, PMC Gaming computer twitch streaming<br>
2020-08-14:<br>
- grande gardens v0.1.3 dog is barking about middle to SW in F02, STILL<br>
2020-08-24:<br>
- grande gardens Warning (performance): Texture PMC_Grande_Gardens_16km/map_preview.png raw format.<br>
2020-08-25:<br>
- grande gardens unused directories moved to Excluded.For.Release dir<br>
- grande gardens vehicle shop changed to mapUS one<br>
2020-12-29:<br>
- grande gardens ran through testrunner, passed
</p>

	<h2>v1.1.10 Internal Testing 2021</h2>

<p>
2021-01-12:<br>
- Grande Gardens 16km defaultItems.xml $moddir$ changed to $mapdir$<br>
2021-02-19:<br>
- grande gardens dealership map icon teleports you inside the building<br>
- grande gardens animal dealer trigger and 3d cosmetic building added<br>
- grande gardens heightmap highway elevations smoothed out (it was not finished)<br>
2021-02-20:<br>
- grande gardens all utility pole lines fixed along new roads, now with pole wires too<br>
- grande gardens high voltage power tower wires added<br>
- grande gardens high voltage power tower field definition holes missing<br>
2021-02-27:<br>
- grande gardens train camera zoom out level increased a lot, can see full 20 car train in view now<br>
2021-04-27:<br>
- grande gardens renamed all 12 selling point names to SP1, SP2 etc style<br>
- grande gardens renamed all 12 railroad silo names to RS1, RS2 etc style<br>
- grande gardens added R to selling point name which is on railroad<br>
- grande gardens AI will plant now only; canola, corn, oats, soybeans and wheat
</p>

	<h2>Terrain Re-Design Project 2021</h2>

<p>
2021-07-11:<br>
- grande gardens re-design project started, gimp xcf image editing<br>
- grande gardens player farms switched from farmId="1" to 0, can be bought with land lot now<br>
- grande gardens created players farm 7 from GE Farm_11<br>
- grande gardens created players farm 32, GE Farm_32<br>
- grande gardens created players farm 30, GE Farm_30<br>
- grande gardens created players farm ... dunno ;), GE Farm_06_hoho<br>
- grande gardens created players farm 14, GE Farm_14<br>
- grande gardens created players farm 15, GE Farm_15<br>
- grande gardens created players farm 16, GE Farm_16<br>
- grande gardens created players farm 17, GE Farm_17<br>
- grande gardens created players farm 26, GE Farm_26<br>
- grande gardens created players farm 22, GE Farm_22<br>
- grande gardens created players farm 24, GE Farm_24<br>
- grande gardens created players farm 25, GE Farm_25<br>
2021-07-12:<br>
- grande gardens re-design project continues, gimp xcf image editing<br>
- grande gardens created players farm 27, GE Farm_27<br>
- grande gardens created farm yard F39 SE area<br>
- grande gardens created farm yard F46 NW corner<br>
- grande gardens created two farm yards F50 N edge<br>
- grande gardens created two farm yards F40 S edge<br>
- grande gardens created two farm yards to roughly north side of F30<br>
- grande gardens created farm yard F15 SE<br>
2021-07-15:<br>
- grande gardens created field definitions for new re-design fields<br>
2021-07-24:<br>
- grande gardens v1.1.10 internal release<br>
2021-07-25:<br>
- grande gardens v1.1.10 field 3 is STILL square corners<br>
- grande gardens v1.1.10 two narrow fields missing field definitions between F15 and F89<br>
- grande gardens painted dirt/gravel road F24 N<br>
- grande gardens F25 enlarged S<br>
- grande gardens F27 enlarged N<br>
- grande gardens F33 enlarged N and W<br>
- grande gardens F38 enlarged N and W<br>
- grande gardens F40 enlarged N and W<br>
- grande gardens F09 enlarged<br>
- grande gardens F49 enlarged S and W<br>
- grande gardens F50 enlarged S and W<br>
- grande gardens F51 enlarged N, W and E<br>
- grande gardens F52 enlarged E, S and W<br>
- grande gardens F54 enlarged<br>
- grande gardens F78 enlarged<br>
- grande gardens F08 enlarged<br>
- grande gardens F79 enlarged E, S and W<br>
- grande gardens v1.1.10 _weight images S side has odd asphalt area<br>
- grande gardens enlarge for borth F243 and F247 to close odd gap between them<br>
- grande gardens created farm_53 to F248 N side<br>
- grande gardens F60 enlarged E, S and W<br>
- grande gardens created maple/volume treeline F07 S side<br>
- grande gardens F07 enlarged N, E and W<br>
- grande gardens created farm_54 to F06 W side<br>
- grande gardens created farm_55 to F06 W side<br>
- grande gardens created farm_56 to F06 W side<br>
- grande gardens F30 enlarged S and W<br>
- grande gardens created spruce treeline F06 N side<br>
- grande gardens created new field in F03 S-SE side<br>
- grande gardens created two new fields just west from F01 and F02<br>
- grande gardens created Farm_57 and Farm_58 right next to F01 and F02<br>
- grande gardens F02 enlarged S<br>
- grande gardens created maple/volume treeline F55 N side<br>
- grande gardens created four new fields surrounding F73<br>
- grande gardens created farm_59 to F76 S side<br>
- grande gardens enlarged F76 S both sides of farm_59<br>
- grande gardens created farm_60 to F76 SW corner<br>
- grande gardens enlarged F80 W<br>
- grande gardens enlarged F93 E<br>
- grande gardens enlarged F94 E<br>
- grande gardens enlarged F81 W<br>
- grande gardens field definitions 254-259 created<br>
- grande gardens pda image doesnt match whats in terrain, export design doc thingy<br>
- grande gardens F40 railroad tracks too close to the field<br>
2021-07-26:<br>
- grande gardens railroad tracks are not in grass cleaning fruit_density image<br>
- grande gardens F30 NE railroad track touches cultivator_density<br>
- grande gardens F181 NE corner overlaps farm yard<br>
- grande gardens F177 E edge overlaps farm yard<br>
- grande gardens F215 SW corner overlaps farm yard trees<br>
- grande gardens F96 SW corner overlaps radio mast<br>
- grande gardens F238 trees on field<br>
- grande gardens F93 NE corner farm yard clips dirt road<br>
- grande gardens SE corner road access is very bad, add dirt roads for all fields<br>
- grande gardens asphalt and dirt roads do not connect, they have nasty gap<br>
- grande gardens asphalt road 3d mesh at F38 SE needs to be removed, its offset and incomplete<br>
- grande gardens dirt road by F26 E side clips with forest, bring road curve to more east<br>
- grande gardens F30 E side asphalt road almost clips with trees, thin some trees out<br>
- grande gardens dirt road between F06 and F07 is ... empty, add few very small group of trees here and there<br>
- grande gardens F61 and F62 N side created farm yards 61 and 62<br>
- grande gardens F06 W side farm yards are missing dirt road<br>
2021-12-19:<br>
- grande gardens re-design gimp design doc work<br>
2021-12-25:<br>
- grande gardens re-design gimp design doc work<br>
2021-12-26:<br>
- grande gardens re-design gimp design doc work<br>
2021-12-27:<br>
- grande gardens re-design gimp design doc work<br>
2021-12-29:<br>
- grande gardens re-design gimp design doc work<br>
- grande gardens railroad terrain detail textures have grass on them<br>
- grande gardens F157 trees on the field (terrain posit; south central)<br>
- grande gardens dealership has no yard<br>
- grande gardens dealership has no road access<br>
- grande gardens asphalt road north from dealership is hideously narrow, its a like a horse track<br>
- grande gardens asphalt road south from dealership is hideously narrow<br>
- grande gardens F06 W edge players farms (defaultItems.xml) needs to be removed<br>
- grande gardens F56 needs to be streched down south to the road<br>
- grande gardens F22 SE corner utility poles come EXTREMELY close to the field<br>
- grande gardens F23 W player farm has no road access<br>
- grande gardens F26 E trees on road<br>
- grande gardens F30 NE/N utility poles on field<br>
- grande gardens F31 N is not tight<br>
- grande gardens F33 W utility poles on field<br>
- grande gardens F37 E utility poles on field, especially on SE corner area<br>
- grande gardens F37 NE utility pole on field, field must be retracted quite a bit, its too narrow corner overall<br>
- grande gardens F40 utility poles on field SW and SE corners<br>
- grande gardens F40 W edge overlaps railroad track texture<br>
- grande gardens F47 N utility pole on field<br>
- grande gardens F49 E side has not been resized<br>
- grande gardens F53 N edge utility poles are almost on the field (in NW corner they are)<br>
- grande gardens F79 NW CBJ building on a road<br>
- grande gardens F79 NW trees on a road<br>
- grande gardens F86 N utility poles come uncomfortably close<br>
- grande gardens F95 trees on field<br>
- grande gardens F98 farm buildings on field<br>
- grande gardens F98 farm has no road access<br>
- grande gardens F98 south end could be dragged much further out, plenty of space even for multiple vehicles there<br>
- grande gardens F100 W utility poles on field<br>
- grande gardens F101 N utility poles on field<br>
- grande gardens F132 and F133 farm yard is middle of the road
</p>

	<h2>v1.1.14 Internal Testing 2022</h2>

<p>
2022-01-01:<br>
- grande gardens several forest ground textures are missing tree objects<br>
2022-01-02:<br>
- grande gardens re-design field definitions unfinished<br>
- grande gardens F15 tree line E of field has to be moved to the new forest ground texture<br>
- grande gardens F15 has grass spot, missed spot in cultivator_density<br>
- grande gardens F106 W player farm has building on road<br>
- grande gardens F23 W player farm has building on road<br>
- grande gardens F113 NW utility poles on field<br>
- grande gardens re-design pda missing<br>
- grande gardens v1.1.14 internal testing release
</p>

	<h2>v1.2 First Official Release</h2>

<p>
2022-05-30:<br>
- grande gardens moddesc.xml changed version to 1.2<br>
- grande gardens v1.2 has been released!
</p>
</div>


<div class="changelog">
	<h2>Known Issues</h2>

<p>
<b>2022-05-30T18:53:00Z</b> Updated.
</p>

<p>
- animal placeables missing<br>
- asphalt road 3d meshes missing<br>
- farm bin silo placeables missing<br>
- farm house placeables missing<br>
- new farmer vehicles missing<br>
- railroad tracks 3d meshes missing<br>
</p>
</div>

<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("/var/www/include/footer-start.php"); ?>
<p>
<a href="pmc-terrains.php" class="button">PMC Terrains FS19</a>
<a href="dev-diary-pmc-grande-gardens-16km.php" class="button">Dev Diary PMC Grande Gardens 16km</a>
<a href="pmc-grande-gardens-16km.php" class="button">PMC Grande Gardens 16km</a>
<a href="../index.php" class="button">PMC Farming Simulator root page</a>
</p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("/var/www/include/footer-end.php"); ?>
<?php include("/var/www/include/support.php"); ?>
<?php include("/var/www/include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
