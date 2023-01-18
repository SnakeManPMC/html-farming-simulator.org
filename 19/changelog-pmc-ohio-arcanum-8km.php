<!DOCTYPE html>
<html lang="en">
<head>
<title>Changelog PMC Ohio Arcanum 8km - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Changelog PMC Ohio Arcanum 8km - PMC Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<!-- google ads -->
<?php include("../include/google-ads.php"); ?>
<h1><b>Changelog PMC Ohio Arcanum 8km Farming Simulator 19 Terrain</b></h1>
</header>

<section>
<p>
Changelog for <a href="pmc-ohio-arcanum-8km.php">PMC Ohio Arcanum 8km</a> FS19 terrain. See known issues from bottom of this page. Also check out <a href="dev-diary-pmc-ohio-arcanum-8km.php">Dev Diary PMC Ohio Arcanum 8km</a>.
</p>

<div class="changelog">
	<h2>v0.1 Unreleased</h2>

<p>
2020-05-18:<br>
- ohio arcanum choose location using google/maps terrain view so you can see the fields<br>
- ohio arcanum click map, pin is inserted, click the bottom center new dialog, copy paste lat/lon coordinates<br>
- ohio arcanum global mapper online sources world street map, view -> zoom view -> zoom to spacing -> view spacing selection 10, fits 8km grid with plenty of free space around<br>
- ohio arcanum global mapper CTRL-HOME insert coordinates, find the spot<br>
- ohio arcanum global mapper switch to UTM projection<br>
- ohio arcanum global mapper create 4096 or 8192 user created feature grid<br>
- ohio arcanum global mapper open online data -> u.s. data -> united states elevation data (NED) (10m resolution)<br>
- ohio arcanum global mapper export heightmap<br>
- ohio arcanum global mapper export kmz<br>
- ohio arcanum terra incognita map source -> openstreetmap -> zoom level 500km<br>
- ohio arcanum terra incognita file -> load waypoints,tracks -> kmz<br>
- ohio arcanum terra incognita full screen, zoom into kmz black rectangle (8km is ok with openstreetmap 250m 4m/px but 16km is 500m 8m/px), draw selection rectangle<br>
- ohio arcanum terra incognita waypoints,tracks -> visible to disable kmz black rectangle<br>
- ohio arcanum terra incognita map source -> esri arcgis, zoom level 17<br>
- ohio arcanum l3dt file -> import -> heightfield, choose your heightmap.asc<br>
- ohio arcanum l3dt CTRL-E -> file format -> PNG -> map_dem.png<br>
- ohio arcanum terra incognita download oziexplorer map format<br>
- ohio arcanum global mapper open -> oziexplorer .map/.jpg satellite imagery<br>
- ohio arcanum global mapper file -> export -> export raster/image format -> png -> file type 24-bit rgb, sample spacing 1, export to bounds -> crop to selected area feature(s)<br>
- ohio arcanum edit _run_generate_terrain_template_from_sample_data.bat for terrain name and run it<br>
- ohio arcanum powergrep run FS19_terrain_class_name_i3d_xml.pga<br>
- ohio arcanum execute _run_graphicsmagick_FS19_weight_density_to_standard_8km.bat<br>
- ohio arcanum open name.i3d in GE, do some basic cleaning up, save and exit<br>
- ohio arcanum powergrep run FS19_png_to_gdm_grle.pga<br>
- ohio arcanum execute _run_delete_gdm_and_grle_png_equivalents.bat<br>
- ohio arcanum gimp open satellite texture, resize to 4096 res, export to name/maps/pda_map.png, convert it to dds with _run_imagemagick_png_to_dds.bat<br>
- ohio arcanum gimp export satellite texture as GoogleEarthPlane/back_of_sign_a.png<br>
- ohio arcanum gimp satellite texture resize it down to 2048, crop to 2048 x 1024 and save as name/map_preview.png, convert it to dds with _run_imagemagick_png_to_dds.bat<br>
- ohio arcanum create copy to mods dir robocopy bat file and run it<br>
- ohio arcanum try in-game, check error log.txt and if there is errors fix them then loop this until log is error free<br>
- ohio arcanum create backup bat, run it the first time<br>
- ohio arcanum GE file -> import -> GoogleEarthPlane/back_of_sign_a.i3d set scale x and z to 4096 or 8192 depending on terrain size<br>
- ohio arcanum align careerstartpoint to players farm or suitable location<br>
- ohio arcanum import prefabs/FS19_vehicleShop_prefab and the triggers, also name.xml hotspot coordinates correctly<br>
- ohio arcanum https://www.farming-simulator.org/19/terrain-selling-points.php<br>
- ohio arcanum GE scripts -> fs19 -> map -> create ground collision map, then copy name.i3d.plcColMap.grle to name.i3d.plcMap.grle<br>
- ohio arcanum try in-game, check error log.txt and if there is errors fix them then loop this until log is error free<br>
2020-05-22:<br>
- ohio arcanum open satellite in gimp, create fields layer and paint fields as some bright color like red<br>
- ohio arcanum resize to 8192, background RGB 0,0,0 and red color to RGB 1,0,0 export to cultivator_density.png<br>
- ohio arcanum RGB 0,0,0 to RGB 130,0,0 and RGB 1,0,0 to RGB 0,0,0 export to fruit_density.png<br>
- ohio arcanum powergrep run FS19_gdm_grle_to_png.pga<br>
- ohio arcanum GE load name.i3d and verify that fields are painted without grass in them, save<br>
- ohio arcanum import fields_template, create only one field for now<br>
- ohio arcanum try in-game, check error log.txt and if there is errors fix them then loop this until log is error free<br>
2020-05-28:<br>
- ohio arcanum once the first field is working, do backups and then create rest of the fields :)<br>
</p>

</div>

<div class="changelog">
	<h2>Known Issues</h2>

<p>
<b>2022-06-08T17:59:00Z</b> Updated.
</p>

<p>
- too many to list, its a WIP
</p>
</div>

</section>

<footer>
<p>
<a href="pmc-terrains.php" class="button">PMC Terrains FS19</a>
<a href="dev-diary-pmc-ohio-arcanum-8km.php" class="button">Dev Diary PMC Ohio Arcanum 8km</a>
<a href="pmc-ohio-arcanum-8km.php" class="button">PMC Ohio Arcanum 8km</a>
<a href="../index.php" class="button">PMC Farming Simulator root page</a>
</p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("../include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
