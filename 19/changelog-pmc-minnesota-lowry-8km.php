<!DOCTYPE html>
<html lang="en">
<head>
<title>Changelog PMC Minnesota Lowry 8km Farming Simulator 19 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Changelog PMC Minnesota Lowry 8km Farming Simulator 19 - PMC Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<h1><b>Changelog PMC Minnesota Lowry 8km Farming Simulator 19 Terrain</b></h1>
</header>

<section>
<p>
Changelog for <a href="pmc-minnesota-lowry-8km.php">PMC Minnesota Lowry 8km</a> FS19 terrain. See known issues from bottom of this page. Also check out <a href="dev-diary-pmc-minnesota-lowry-8km.php">Dev Diary PMC Minnesota Lowry 8km</a>.
</p>

<div class="changelog">
	<h2>v0.1 Unreleased</h2>

<p>
Please note that 2019 era changelogs are missing the early parts, also at may 2019 this terrain had the major re-design to fix wrong global mapper projection error.
</p>

<p>
2019-03-18:<br>
- minnesota lowry, added terrain_boundaries<br>
- minnesota lowry, vehicle shop clip distance set to 1 million<br>
- minnesota lowry, name_sound.* setup added<br>
2019-03-21:<br>
- minnesota lowry weight/density/etc images resized to 4096/8192/2048, collision map regenerated<br>
2019-05-13:<br>
- minnesota lowry, global mapper online sources world street map, view -&gt; zoom view -&gt; zoom to spacing -&gt; view spacing selection 10, fits 8km grid with plenty of free space around<br>
- minnesota lowry, global mapper CTRL-HOME insert coordinates, find the spot<br>
- minnesota lowry, global mapper switch to UTM projection<br>
- minnesota lowry, global mapper create 4096 or 8192 user created feature grid<br>
- minnesota lowry, global mapper open online data -&gt; u.s. data -&gt; united states elevation data (NED) (10m resolution)<br>
- minnesota lowry, global mapper export heightmap<br>
- minnesota lowry, global mapper export kmz<br>
- minnesota lowry, terra incognita map source -&gt; openstreetmap -&gt; zoom level 500km<br>
- minnesota lowry, terra incognita file -&gt; load waypoints,tracks -&gt; kmz<br>
- minnesota lowry, terra incognita full screen, zoom into kmz black rectangle (8km is ok with openstreetmap 250m 4m/px but 16km is 500m 8m/px), draw selection rectangle<br>
- minnesota lowry, terra incognita waypoints,tracks -&gt; visible to disable kmz black rectangle<br>
- minnesota lowry, terra incognita map source -&gt; esri arcgis, zoom level 17<br>
- minnesota lowry, l3dt file -&gt; import -&gt; heightfield, choose your heightmap.asc<br>
- minnesota lowry, l3dt CTRL-E -&gt; file format -&gt; PNG -&gt; map_dem.png<br>
- minnesota lowry, terra incognita download oziexplorer map format<br>
- minnesota lowry, global mapper open -&gt; oziexplorer .map/.jpg satellite imagery<br>
- minnesota lowry, global mapper file -&gt; export -&gt; export raster/image format -&gt; png -&gt; file type 24-bit rgb, sample spacing 1, export to bounds -&gt; crop to selected area feature(s)<br>
- minnesota lowry, edit _run_generate_terrain_template_from_sample_data.bat for terrain name and run it<br>
- minnesota lowry, powergrep run FS19_terrain_class_name_i3d_xml.pga<br>
- minnesota lowry, powergrep run FS19_gdm_grle_to_png.pga<br>
- minnesota lowry, execute _run_convert_gdm_to_png.bat<br>
- minnesota lowry, execute _run_convert_grle_to_png.bat<br>
- minnesota lowry, execute _run_delete_gdm_and_grle.bat<br>
- minnesota lowry, execute _run_graphicsmagick_FS19_weight_density_to_standard_8km.bat<br>
- minnesota lowry, gimp open satellite texture, resize to 4096 res, export to name/maps/pda_map.png, convert it to dds with _run_imagemagick_png_to_dds.bat<br>
- minnesota lowry, open name.i3d in GE, do some basic cleaning up, save and exit<br>
- minnesota lowry, powergrep run FS19_png_to_gdm_grle.pga<br>
- minnesota lowry, execute _run_delete_gdm_and_grle_png_equivalents.bat<br>
- minnesota lowry, gimp export satellite texture as GoogleEarthPlane/back_of_sign_a.png<br>
- minnesota lowry, gimp satellite texture resize it down to 2048, crop to 2048 x 1024 and save as name/map_preview.png, convert it to dds with _run_imagemagick_png_to_dds.bat<br>
- minnesota lowry, create copy to mods dir robocopy bat file and run it<br>
- minnesota lowry, create backup bat, run it the first time<br>
- minnesota lowry, GE file -&gt; import -&gt; GoogleEarthPlane/back_of_sign_a.i3d set scale x and z to 4096 or 8192 depending on terrain size<br>
- minnesota lowry, align careerstartpoint to players farm or suitable location<br>
- minnesota lowry, import prefabs/FS19_vehicleShop_prefab and the triggers, also name.xml hotspot coordinates correctly<br>
- minnesota lowry, https://www.farming-simulator.org/19/terrain-sale-points.php<br>
- minnesota lowry, GE scripts -&gt; fs19 -&gt; map -&gt; create ground collision map, then copy name.i3d.plcColMap.grle to name.i3d.plcMap.grle<br>
2019-05-14:<br>
- minnesota lowry, global mapper US NAIP download<br>
2019-05-15:
- minnesota lowry, global mapper US NAIP download<br>
2019-06-10:<br>
- minnesota lowry, STARTED gimp fields background color 63,63,63 and fields 255,0,0 export to satellite_texture_cultivator_density.png<br>
2019-06-11:<br>
- minnesota lowry, CONTINUED gimp fields background color 63,63,63 and fields 255,0,0 export to satellite_texture_cultivator_density.png<br>
2019-06-12:<br>
- minnesota lowry, FINISHED gimp fields background color 63,63,63 and fields 255,0,0 export to satellite_texture_cultivator_density.png<br>
- minnesota lowry, gimp paint roads over satellite texture, 4 pixel to 8 pixel width depending on the type of road<br>
- minnesota lowry, roads RGB 255,0,0 and background transparent gimp exported to satellite_texture_roads.png<br>
- minnesota lowry, _run_graphicsmagick_create_cultivator_density.bat<br>
- minnesota lowry, _run_graphicsmagick_create_roads_roughdirt01.bat<br>
- minnesota lowry, _run_graphicsmagick_create_fruit_density.bat<br>
- minnesota lowry, gimp paint _farmland image https://www.farming-simulator.org/19/terrain-farmland-painting-gimp.php export to satellite_texture_farmland.png<br>
- minnesota lowry, _run_graphicsmagick_create_farmland.bat<br>
- minnesota lowry, powergrep run FS19_gdm_grle_to_png.pga<br>
- minnesota lowry, GE load name.i3d and verify that fields are painted without grass in them, save<br>
- minnesota lowry, import fields_template, create only one field for now<br>
- minnesota lowry, once the first field is working, do backups and then create rest of the fields :)<br>
2019-11-20:<br>
- minnesota lowry string sale point replaced with selling point<br>
2021-01-12:<br>
- Minnesota Lowry 8km defaultItems.xml $moddir$ changed to $mapdir$<br>
2022-07-09:<br>
- minnesota lowry Error: Farmland-Id 25 not defined in farmland ownage file<br>
2022-07-10:<br>
- minnesota lowry heightmap.asc exported from global mapper<br>
</p>

</div>

<div class="changelog">
	<h2>Known Issues</h2>

<p>
<b>2024-05-27T09:09:07Z</b> Updated.
</p>

<p>
- minnesota lowry building objects missing<br>
- minnesota lowry trees/vegetation objects missing<br>
</p>
</div>

</section>

<footer>
<p>
<a href="pmc-terrains.php" class="button">PMC Terrains</a>
<a href="dev-diary-pmc-minnesota-lowry-8km.php" class="button">Dev Diary PMC Minnesota Lowry 8km</a>
<a href="pmc-minnesota-lowry-8km.php" class="button">PMC Minnesota Lowry 8km</a>
<a href="../index.php" class="button">PMC Farming Simulator root page</a>
</p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("../include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
