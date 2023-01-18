<!DOCTYPE html>
<html lang="en">
<head>
<title>Changelog PMC North Dakota Greendale 4km Terrain - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Changelog PMC North Dakota Greendale 4km Terrain - PMC Farming">
<META name="keywords" content="Changelog, North, Dakota, Greendale, Terrain, PMC, Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<!-- google ads -->
<?php include("../include/google-ads.php"); ?>
<h1><b>Changelog PMC North Dakota Greendale 4km Terrain</b></h1>
</header>

<section>
<p>
Changelog for <a href="pmc-north-dakota-greendale-4km.php">PMC North Dakota Greendale 4km</a> terrain. See known issues from bottom of this page.
</p>

<div class="changelog">
	<h2>v0.1 Unreleased</h2>

<p>
2019-02-03:<br>
- first day of farming simulator 19 terrain editing (greendale was first). unfortunately I did not write changelogs :-(<br>
2019-03-01:<br>
- still FS19 terrain editing, every day, 16hrs a day ...<br>
2019-03-16:<br>
- today was the first day I started to write changelogs for FS19 terrain editing, I suck :-(<br>
- north dakota 4km, south west sales grill is under the farm house hehe<br>
- north dakota 4km, weight density images back to proper sizes for 4km terrain size<br>
- north dakota 4km, F36 SW edge has trees in the field, the cultivator density was painted wrongly<br>
- north dakota 4km, F36 SW edge has trees in the road<br>
- north dakota 4km, check that trees are not on fields. for example F22<br>
- north dakota 4km, trees extremely close to road in F24 SE corner or south east sale point SE corner<br>
2019-03-17:<br>
- north dakota 4km, terrain W edge has cultivated land for like 5m or so, cleaned in gimp and changed cultivated to plowed<br>
- north dakota 4km, roads are painted free hand, did them with splines<br>
- north dakota 4km, weight density images resize part 2<br>
2019-03-18:<br>
- north dakota 4km, F33 trees on the field<br>
- north dakota 4km, added terrain_boundaries<br>
- north dakota 4km, vehicle shop clip distance set to 1 million<br>
- north dakota 4km, name_sound.* setup added<br>
2019-03-19:<br>
- north dakota 4km, player farm dirt road spline done<br>
- north dakota 4km, new sale point for central added<br>
- north dakota 4km, sale point central road spline done<br>
- north dakota 4km, field definitions and cultivated land is really out of sync<br>
- north dakota 4km, added more trees to treelines as they had huge gaps in them<br>
- north dakota 4km, field crossed treeline, split to two fields<br>
- north dakota 4km, farmlands ID painting tweak<br>
- north dakota 4km, player farm objects moved to placeable system<br>
2019-03-21:<br>
- north dakota 4km, farm silo total capacity increased to 25 million liters per crop type by using my own farmSiloLarge.xml
</p>

	<h2>PMC Terrains Re-Creation Project</h2>

<p>
2019-05-05:<br>
- fs19 real world data terrains deleted due mercator projection error :(<br>
- north dakota 4km, kmz exported<br>
- north dakota 4km, terra incognita map source -&gt; openstreetmap -&gt; zoom level 500km<br>
- north dakota 4km, terra incognita file -&gt; load waypoints,tracks -&gt; kmz<br>
- north dakota 4km, terra incognita full screen, zoom into kmz black rectangle (8km is ok with openstreetmap 250m 4m/px but 16km is 500m 8m/px), draw selection rectangle<br>
- north dakota 4km, terra incognita waypoints,tracks -&gt; visible to disable kmz black rectangle<br>
- north dakota 4km, terra incognita map source -&gt; esri arcgis, zoom level 17<br>
- north dakota 4km, terra incognita download oziexplorer map format<br>
2019-05-06:<br>
- north dakota 4km renamed to north dakota greendale 4km<br>
- north dakota greendale 4km, global mapper open online data -&gt; u.s. data -&gt; united states elevation data (NED) (10m resolution)<br>
- north dakota greendale 4km, global mapper export heightmap<br>
- north dakota greendale 4km, global mapper open -&gt; oziexplorer .map/.jpg satellite imagery<br>
- north dakota greendale 4km, global mapper file -&gt; export -&gt; export raster/image format -&gt; png -&gt; file type 24-bit rgb, sample spacing 1, export to bounds -&gt; crop to selected area feature(s)<br>
- north dakota greendale 4km, l3dt file -&gt; import -&gt; heightfield, choose your heightmap.asc<br>
- north dakota greendale 4km, l3dt operations -&gt; heightfield -&gt; resize heightfield, use 2049 for 4km and 4097 for 8km terrain etc<br>
- north dakota greendale 4km, l3dt CTRL-E -&gt; file format -&gt; PNG -&gt; map_dem.png<br>
- north dakota greendale 4km, edit _run_generate_terrain_template_from_sample_data.bat for terrain name and run it<br>
- north dakota greendale 4km, powergrep run FS19_terrain_class_name_i3d_xml.pga<br>
- north dakota greendale 4km, execute _run_convert_gdm_to_png.bat<br>
- north dakota greendale 4km, execute _run_convert_grle_to_png.bat<br>
- north dakota greendale 4km, execute _run_delete_gdm_and_grle.bat<br>
- north dakota greendale 4km, execute _run_graphicsmagick_FS19_weight_density_to_standard_4km.bat<br>
- north dakota greendale 4km, open name.i3d in GE, do some basic cleaning up, save and exit<br>
- north dakota greendale 4km, powergrep run FS19_png_to_gdm_grle.pga<br>
- north dakota greendale 4km, execute _run_delete_gdm_and_grle_png_equivalents.bat<br>
- north dakota greendale 4km, copy satellite texture to name/maps/pda_map.png, convert it to dds with _run_imagemagick_png_to_dds.bat OR use gimp and export as DDS<br>
- north dakota greendale 4km, open global mapper satellite_texture, resize down to 4096, crop to 2048 x 1024 and save as name/map_preview.png, convert it to dds with _run_imagemagick_png_to_dds.bat<br>
- north dakota greendale 4km, create copy to mods dir robocopy bat file and run it<br>
- north dakota greendale 4km, try in-game, check error log.txt and if there is errors fix them then loop this until log is error free<br>
- north dakota greendale 4km, create backup bat, run it the first time<br>
- north dakota greendale 4km, replace GoogleEarthPlane/back_of_sign_a.pngG with satellite texture, 4096 resolution<br>
- north dakota greendale 4km, GE file -&gt; import -&gt; GoogleEarthPlane/back_of_sign_a.i3d set scale x and z to 4096 or 8192 depending on terrain size<br>
- north dakota greendale 4km, align careerstartpoint to players farm or suitable location<br>
- north dakota greendale 4km, import prefabs/FS19_vehicleShop_prefab and the triggers, also name.xml hotspot coordinates correctly<br>
- north dakota greendale 4km, https://www.farming-simulator.org/19/map-making-tutorial.php Adding Selling Points<br>
- north dakota greendale 4km, GE scripts -&gt; fs19 -&gt; map -&gt; create ground collision map, then copy name.i3d.plcColMap.grle to name.i3d.plcMap.grle<br>
2019-05-07:<br>
- north dakota greendale 4km, open satellite in gimp, create fields layer and paint fields as some bright color like red<br>
2019-05-08:<br>
- north dakota greendale 4km, resize to 4096, background RGB 0,0,0 and red color to RGB 1,0,0 export to cultivator_density.png<br>
- north dakota greendale 4km, RGB 0,0,0 to RGB 130,0,0 and RGB 1,0,0 to RGB 0,0,0 export to fruit_density.png<br>
- north dakota greendale 4km, powergrep run FS19_gdm_grle_to_png.pga<br>
- north dakota greendale 4km, GE load name.i3d and verify that fields are painted without grass in them, save<br>
2019-05-09:<br>
- north dakota greendale 4km, import fields_template, create only one field for now<br>
- north dakota greendale 4km, once the first field is working, do backups and then create rest of the fields :)<br>
2019-05-16:<br>
- north dakota greendale 4km, draw splines for roads, asfalt and dirt/gravel<br>
- north dakota greendale 4km, copy SRTM map_dem.png into name/name_dem.png<br>
- north dakota greendale 4km, align vehicle shop and sale points to the ground<br>
- north dakota greendale 4km, paint detail texture layer, farms etc locations<br>
- north dakota greendale 4km, remove grass from roads<br>
2019-05-17:<br>
- north dakota greendale, dirt gravel road has wrong ground texture<br>
- north dakota greendale, farmland ID 1 (maybe?) the players farm area is included in one actual field land lot in NW<br>
- north dakota greendale, F06 SE part is mis-aligned with cultivator_density and satellite imagery<br>
- north dakota greendale, move sale point 5 to SE location which is empty<br>
- north dakota greendale players farm objects placed in ge, hardcoded way<br>
2019-05-18:<br>
- north dakota greendale, created players farm dirt road splines and painted the ground textures<br>
- north dakota greendale, ge players farm objects transferred to placeable defaultitems.xml<br>
2019-05-22:<br>
- north dakota greendale 4km, placed objects four grain silos and a lot of forest rows<br>
2019-05-23:<br>
- north dakota greendale 4km, spruce_stage* trees replaced with mapleTree and volumeTree models. no spruces in real life north dakota<br>
- north dakota greendale 4km, placed objects trees<br>
- north dakota greendale 4km, painted bushes to foliage layer, first time to trying that, interesting to see how it looks in-game<br>
- north dakota greendale 4km, experimented with road elevating and ditch creation using lua scripts, not really happy with the results<br>
2019-05-25:<br>
- north dakota greendale, gimp cultivator_density painted F04-F06 separate<br>
- north dakota greendale, created forest splines and forests, few more tree lines<br>
2019-05-30:<br>
- north dakota greendale, bush01 foliage layer painting experiments in gimp and in ge<br>
- north dakota greendale, removed trees from the fields<br>
- north dakota greendale, removed trees from F30<br>
2019-11-20:<br>
- north dakota greendale string sale point replaced with selling point<br>
2020-04-27:<br>
- fs19 all terrains and PMC_FarmSilos modDesc.xml descVersion changed to 47<br>
- north dakota greendale, density images need to be resized to 4096 to remove stutter<br>
2020-08-07:<br>
- north dakota greendale, two trees floating in the air NW of players farm<br>
- north dakota greendale, F12 trees on the field, or is this an old bug report<br>
- north dakota greendale, F60 north side, trees come basically to the road at least preventing seed hawk to be traveling there<br>
- north dakota greendale, tree very close to road just west of F10<br>
- north dakota greendale, trees on a F18 west side<br>
- north dakota greendale, trees on a F27 NW corner on the road<br>
- north dakota greendale, terrain edge blocks are missing<br>
- north dakota greendale, farmland has duplicated ID used, F60, F61 and F63 are duped with NW fields<br>
- north dakota greendale, tipcol is from mapUS I think, re-paint it<br>
- north dakota greendale, cultivator_density color RGB, make sure the color RGB is CULTIVATED LAND not plowed<br>
- north dakota greendale, realistic heightmap added (heightScale)<br>
- north dakota greendale, cultivator_density needs to be limited per field definition so that courseplay wont bug out<br>
- north dakota greendale, main roads elevated with a script<br>
2020-08-08:<br>
- north dakota greendale, farm silo extensions are giants not PMC, replace them with PMC 1 million liter ones<br>
- north dakota greendale, field definitions do not match cultivator_density<br>
- north dakota greendale, F55 field definition overlaps road in the south west area<br>
- north dakota greendale, paintable grass added to terrain.xml<br>
- north dakota greendale, forest areaFill garbage must be deleted and recreated with proper scaling scripts<br>
- north dakota greendale, residential building + cbj shed added to location-01 (S-SW)<br>
- north dakota greendale, high voltage power lines does not have holes in cultivator_density<br>
- north dakota greendale, vehicle shop 3d model switched to american style building<br>
- north dakota greendale, seasons mask added<br>
- north dakota greendale, american flag pole added to players farm and location-01<br>
2020-08-10:<br>
- north dakota greendale, mapUS template _sound.i3d copied in (no ocean sounds)<br>
2020-08-11:<br>
- north dakota greendale, bushes painted to fruit_density in gimp<br>
- north dakota greendale, utility poles created<br>
- north dakota greendale, F40 field definition needs a hole patched for high volate power pole<br>
- north dakota greendale, F40 cultivator_density overlaps elevated road
</p>

	<h2>v0.1? Private Testing</h2>

<p>
2020-08-13:<br>
- north dakota greendale, align creek splines to ground and choose script values to lower the elevations<br>
- north dakota greendale, creek edge elevations smoothed out<br>
- north dakota greendale, creek road crossing smoothed and painted gravel on it<br>
- north dakota greendale, vehicle shop teleport coord put you inside the building (cant get out)<br>
- north dakota greendale, selling point 6 relocated to a better position<br>
- north dakota greendale, PMC_Helpers deleted from testing/release version, its now external PMC_Helpers.i3d<br>
- north dakota greendale, running packaging batch file and upload to google/drive testing
</p>

	<h2>v0.2 Private Testing</h2>

<p>
2020-08-14:<br>
- north dakota greendale, F16 W side trees on field<br>
- north dakota greendale, field definitions corner pieces added to several fields<br>
- north dakota greendale, packaged v0.2 test version
</p>

	<h2>v0.2.2 Private Testing</h2>

<p>
2020-08-15:<br>
- north dakota greendale, vehicle shop start end triggers place vehicles on the road and to the next field<br>
- fs19 all terrains modDesc descVersion changed to 51.<br>
2020-08-16:<br>
- north dakota greendale, selling point 2 relocated to SE<br>
- north dakota greendale, missing few buildings in E<br>
- north dakota greendale, a little gravel at sell point 2 falls in to the creek<br>
- north dakota greendale, road smoothing approches 3152,1274<br>
- north dakota greendale, road smoothing approches 3952,1249<br>
- north dakota greendale, F31 SW southern tip touches road<br>
- north dakota greendale, missing few buildings in S<br>
- north dakota greendale, selling point 5 relocated to S<br>
- north dakota greendale, missing few buildings in just south of players farm<br>
2020-08-17:<br>
- north dakota greendale, field definitions numbers go off at 49, fixed<br>
- north dakota greendale, F55 cultivator_density creeps into road elevation<br>
- north dakota greendale, F13 SW corner creeps into the elevated road<br>
- north dakota greendale, F10 south edge trees on a field<br>
- north dakota greendale, F03 field definition creeps over the cultivator_density<br>
- north dakota greendale, F07 field definition creeps over the cultivator_density<br>
- north dakota greendale, F08 field definition creeps over the cultivator_density<br>
- north dakota greendale, F13 field definition creeps over the cultivator_density<br>
- north dakota greendale, F18 field definition creeps over the cultivator_density<br>
- north dakota greendale, F24 field definition creeps over the cultivator_density<br>
- north dakota greendale, F25 field definition creeps over the cultivator_density<br>
- north dakota greendale, F26 field definition creeps over the cultivator_density<br>
- north dakota greendale, F28 field definition creeps over the cultivator_density<br>
- north dakota greendale, F36 field definition creeps over the cultivator_density<br>
- north dakota greendale, F40 field definition creeps over the cultivator_density<br>
- north dakota greendale, F42 field definition creeps over the cultivator_density<br>
- north dakota greendale, F54 field definition creeps over the cultivator_density<br>
- north dakota greendale, F60 field definition creeps over the cultivator_density<br>
- north dakota greendale, F60 field definition corner piece added<br>
- north dakota greendale, F61 field definition corner piece added<br>
- north dakota greendale, F67 field definition corner pieces added<br>
- north dakota greendale, F68 field definition creeps over the cultivator_density<br>
- north dakota greendale, F68 field definition corner pieces added<br>
- north dakota greendale, location 4 entry way road elevations are not smoothed out<br>
- north dakota greendale, compiled v0.2.2 for testing
</p>

	<h2>v1.2.4 First Public Release</h2>

<p>
2020-08-19:<br>
- north dakota greendale, gimp tree coverage red image painted<br>
- north dakota greendale, trees too close to road in F55 S<br>
- north dakota greendale, F54 has trees but I mistakenly painted cultivator_density all over it<br>
- north dakota greendale, F54 field definition cracked open for cultivator_density tree holes<br>
- north dakota greendale, treeline missing from F59 W<br>
- north dakota greendale, I placed trees to F03 E but in real life it doesnt have many<br>
- north dakota greendale, F54 east by high voltage power tower single tree missing<br>
- north dakota greendale, F48 E single tree missing (cultivator_density edited as well)<br>
- north dakota greendale, F38 N tree patches missing<br>
- north dakota greendale, treeline missing beween F70 and F69<br>
- north dakota greendale, selling point 5 location adjusted, again. placed in south central<br>
- north dakota greendale, treeline missing beween F24 and F23<br>
- north dakota greendale, treeline missing beween F22 and F23<br>
- north dakota greendale, F42 center tree spot has one drunk tilted tree<br>
- north dakota greendale, F42 center tree spot missing one tree. check satellite imagery<br>
2020-12-29:<br>
- north dakota greendale ran through testrunner, passed<br>
2021-01-03:<br>
- north dakota greendale precision farming soilmap painted on top of heightmap image<br>
2021-01-05:<br>
- north dakota greendale move selling points from terrain edges into more center area<br>
- north dakota greendale tree vegetation object placement finished, had few leftover areas which now got done<br>
2021-01-07:<br>
- north dakota greendale shop buy vehicle start/end striggers points towards the building, move them AWAY from building<br>
- north dakota greendale make sure farm bin silo accepts fertilizer, lime and seeds<br>
- north dakota greendale roads ground textures missing from players farm yard<br>
2021-01-08:<br>
- north dakota greendale F07 south central (or south east) tree is extremely close to cultivator_density<br>
- north dakota greendale F14 cultivator_density creeps into elevated road<br>
- north dakota greendale F48 cultivator_density creeps into elevated road<br>
- north dakota greendale cultivator_density image update from gimp source<br>
- north dakota greendale field definitions updated for a new cultivator_density<br>
- north dakota greendale field definitions more corner pieces added<br>
- north dakota greendale F19 still has trees on it<br>
- north dakota greendale F49 SW corner trees are tilted badly<br>
- north dakota greendale F29 is cut off there is no easy semi-truck access to it<br>
- north dakota greendale new farmer defaultVehicles.xml<br>
- north dakota greendale new farmer players farm cbj building terrain detail ground textures painted concrete<br>
- north dakota greendale dealership yard terrain detail ground textures painted concrete<br>
- north dakota greendale dealership spawn point 1 is too close to the building<br>
- north dakota greendale terrain detail texture under CBJ sheds must be made dirt instead of dry grass<br>
- north dakota greendale roads terrain detail textures painted to rough dirt using 3 texture script<br>
- north dakota greendale farmlands pricePerHa valua changed to 9500<br>
2021-01-09:<br>
- north dakota greendale farmlands owned player farm and F01 added to new farmer game-mode<br>
- north dakota greendale icon.dds created<br>
- north dakota greendale few more field definition corner pieces created, against my better judgement<br>
2021-01-10:<br>
- north dakota greendale v1.2.4 first public release!
</p>
</div>

<div class="changelog">
	<h2>Known Issues</h2>

<p>
<b>2021-01-10T00:43:00Z</b> Updated.
</p>

<p>
- sell points are just unloading/dumping grill on the ground<br>
- roads elevated and ditches script result needs L3DT careful heightmap smoothing<br>
- two ponds missing<br>
- some field entrances from elevated roads are missing
</p>
</div>

</section>

<footer>
<p>
<a href="pmc-terrains.php" class="button">PMC Terrains FS19</a>
<a href="dev-diary-pmc-north-dakota-greendale-4km.php" class="button">Dev Diary PMC North Dakota Greendale 4km</a>
<a href="pmc-north-dakota-greendale-4km.php" class="button">PMC North Dakota Greendale 4km</a>
<a href="screenshots-pmc-north-dakota-greendale-4km.php" class="button">Screenshots PMC North Dakota Greendale 4km</a>
<a href="../index.php" class="button">PMC Farming Simulator root page</a>
</p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("../include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
