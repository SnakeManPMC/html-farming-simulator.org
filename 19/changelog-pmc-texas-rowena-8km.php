<!DOCTYPE html>
<html lang="en">
<head>
<title>Changelog PMC Texas Rowena 8km - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Changelog PMC Texas Rowena 8km - PMC Farming">
<META name="keywords" content="Changelog, Texas, Rowena, PMC, Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
<h1><b>Changelog PMC Texas Rowena 8km</b></h1>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
<p>
Changelog for <a href="pmc-texas-rowena-8km.php">PMC Texas Rowena 8km</a> terrain. See known issues from bottom of this page.
</p>

<div class="changelog">
	<h2>v0.1 Unreleased</h2>

<p>
2019-05-11:<br>
- texas rowena, click map, pin is inserted, click the bottom center new dialog, copy paste lat/lon coordinates<br>
- texas rowena, global mapper online sources world street map, view -&gt; zoom view -&gt; zoom to spacing -&gt; view spacing selection 10, fits 8km grid with plenty of free space around<br>
- texas rowena, global mapper CTRL-HOME insert coordinates, find the spot<br>
- texas rowena, global mapper switch to UTM projection<br>
- texas rowena, global mapper create 4096 or 8192 user created feature grid<br>
- texas rowena, global mapper open online data -&gt; u.s. data -&gt; united states elevation data (NED) (10m resolution)<br>
- texas rowena, global mapper export heightmap<br>
- texas rowena, global mapper export kmz<br>
- texas rowena, terra incognita map source -&gt; openstreetmap -&gt; zoom level 500km<br>
- texas rowena, terra incognita file -&gt; load waypoints,tracks -&gt; kmz<br>
- texas rowena, terra incognita full screen, zoom into kmz black rectangle (8km is ok with openstreetmap 500m 8m/px but 16km is 1km 16m/px), draw selection rectangle<br>
- texas rowena, terra incognita waypoints,tracks -&gt; visible to disable kmz black rectangle<br>
- texas rowena, terra incognita map source -&gt; esri arcgis, zoom level 17<br>
- texas rowena, terra incognita download oziexplorer map format<br>
- texas rowena, global mapper open -&gt; oziexplorer .map/.jpg satellite imagery<br>
- texas rowena, global mapper file -&gt; export -&gt; export raster/image format -&gt; png -&gt; file type 24-bit rgb, sample spacing 1, export to bounds -&gt; crop to selected area feature(s)<br>
- texas rowena, l3dt file -&gt; import -&gt; heightfield, choose your heightmap.asc<br>
- texas rowena, l3dt CTRL-E -&gt; file format -&gt; PNG -&gt; map_dem.png<br>
- texas rowena, open satellite in gimp, create fields layer and paint fields as some bright color like red<br>
2019-05-12:<br>
- texas rowena, edit _run_generate_terrain_template_from_sample_data.bat for terrain name and run it<br>
- texas rowena, powergrep run FS19_terrain_class_name_i3d_xml.pga<br>
- texas rowena, powergrep run FS19_clean_farmlands_xml_png_vs_grle.pga (heh)<br>
- texas rowena, execute _run_convert_gdm_to_png.bat<br>
- texas rowena, execute _run_convert_grle_to_png.bat<br>
- texas rowena, execute _run_delete_gdm_and_grle.bat<br>
- texas rowena, execute _run_graphicsmagick_FS19_weight_density_to_standard_8km.bat<br>
- texas rowena, open name.i3d in GE, do some basic cleaning up, save and exit<br>
- texas rowena, powergrep run FS19_png_to_gdm_grle.pga<br>
- texas rowena, execute _run_delete_gdm_and_grle_png_equivalents.bat<br>
- texas rowena, copy satellite texture to name/maps/pda_map.png, convert it to dds with _run_imagemagick_png_to_dds.bat OR use gimp and export as DDS<br>
- texas rowena, open global mapper satellite_texture, resize down to 4096, crop to 2048 x 1024 and save as name/map_preview.png, convert it to dds with _run_imagemagick_png_to_dds.bat<br>
- texas rowena, create copy to mods dir robocopy bat file and run it<br>
- texas rowena, try in-game, check error log.txt and if there is errors fix them then loop this until log is error free<br>
- texas rowena, create backup bat, run it the first time<br>
- texas rowena, replace GoogleEarthPlane/back_of_sign_a.pngG with satellite texture, 4096 resolution<br>
- texas rowena, GE file -&gt; import -&gt; GoogleEarthPlane/back_of_sign_a.i3d set scale x and z to 4096 or 8192 depending on terrain size<br>
- texas rowena, align careerstartpoint to players farm or suitable location<br>
- texas rowena, import prefabs/FS19_vehicleShop_prefab and the triggers, also name.xml hotspot coordinates correctly<br>
- texas rowena, https://www.farming-simulator.org/19/map-making-tutorial.php Adding Selling Points<br>
- texas rowena, GE scripts -&gt; fs19 -&gt; map -&gt; create ground collision map, then copy name.i3d.plcColMap.grle to name.i3d.plcMap.grle<br>
- texas rowena, try in-game, check error log.txt and if there is errors fix them then loop this until log is error free<br>
- texas rowena, resize to 4096, background RGB 0,0,0 and red color to RGB 1,0,0 export to cultivator_density.png<br>
- texas rowena, RGB 0,0,0 to RGB 130,0,0 and RGB 1,0,0 to RGB 0,0,0 export to fruit_density.png<br>
- texas rowena, powergrep run FS19_gdm_grle_to_png.pga<br>
- texas rowena, GE load name.i3d and verify that fields are painted without grass in them, save<br>
- texas rowena, import fields_template, create only one field for now<br>
- texas rowena, https://www.farming-simulator.org/19/map-making-tutorial.php Buy Land - Farmlands, paint around the field you just created<br>
- texas rowena, paint info layer farmland around all the fields<br>
- texas rowena, update name_farmlands.xml for the new painted IDs<br>
- texas rowena, once the first field is working, do backups and then create rest of the fields :)<br>
2019-05-15:<br>
- texas rowena, global mapper US NAIP download<br>
2019-05-30:<br>
- texas rowena, global mapper exported openstreetmap painted roads image<br>
- texas rowena, roads painted in gimp<br>
- texas rowena, cultivator_densiy west side tweaked due arcgis vs us naip desync stretching<br>
2019-05-31:<br>
- texas rowena, paint detail texture layer, farms etc locations<br>
- texas rowena, copy SRTM map_dem.png into name/name_dem.png<br>
- texas rowena, align vehicle shop and sale points to the ground<br>
- texas rowena, placed objects buildings, all of them are now placed, in one sitting/day!<br>
- texas rowena, started utility pole spline creation<br>
2019-06-01:<br>
- texas rowena, finished utility pole spline creation<br>
- texas rowena, utility poles placed using the splines<br>
2019-06-10:<br>
- texas rowena, terrain.xml says maps//PMC_, fixed<br>
2019-07-13:<br>
- texas rowena moved temporary copy paste buildings to 0,0,0 coords<br>
- texas rowena utility pole in farm road intersection somewhere in the north<br>
- texas rowena road was wrongly painted in north north-west, adjusted<br>
- texas rowena placed a lot of trees from NW to NE row<br>
2019-07-14:<br>
- texas rowena placed a few of trees only on second row (like four locations only)<br>
2019-11-20:<br>
- texas rowena string sale point replaced with selling point<br>
2020-04-02:<br>
- texas rowena forests object placement<br>
- texas rowena cultivator density field shapes shrunk 4 pixels<br>
- texas rowena field definitions tweaked for new cultivator_density shrinkage<br>
2020-04-03:<br>
- texas rowena F24 short road from buildings to main road is not connected<br>
- texas rowena selling point 2 is unusable against building and under a tree<br>
- texas rowena forests object placement<br>
- texas rowena F97 cultivator_density overlapped road completely<br>
2020-04-07:<br>
- texas rowena forests object placement, looks like almost done now, difficult to find missing trees anymore<br>
2020-04-08:<br>
- texas rowena farmland image painting in gimp and xml tweaking<br>
2020-04-09:<br>
- texas rowena F99 buried trees aligned to ground<br>
2020-04-13:<br>
- texas rowena, mapUS_sounds removed coyotes and frogs etc, still some left heh<br>
- texas rowena building oriented and another placed for location-00<br>
- texas rowena forests object placement<br>
- texas rowena import terrain edge block geometrys (boundaries) so vehicles wont fall of the map<br>
- texas rowena, trees in F117 SW corner by the house are duplicate clones, added random scale<br>
- texas rowena, trees in F148 east side are duplicate clones, added random scale<br>
2020-04-14:<br>
- texas rowena dealership to crappy houses road missing<br>
2020-04-19:<br>
- texas rowena forests object placement<br>
- texas rowena defaultItems/vehicles for new farmer game-mode added<br>
2020-04-21:<br>
- texas rowena F103 farmland painting is too expensive for its size<br>
- texas rowena farmland F106, F108 and F109 must be painted into their own IDs<br>
- texas rowena defaultVehicles.xml unwanted properties removed<br>
- texas rowena defaultVehicles.xml heliantus 5700 changed to diamant header<br>
- texas rowena defaultVehicles.xml dirt and wear reset to zero<br>
- texas rowena web make note about utility poles in the fields<br>
- texas rowena two more roads painted in gimp<br>
- texas rowena fruit_density switched to RGB 66,0,0 grass green small<br>
- texas rowena two road splines created, script raised road 8m width and 0.3m amount<br>
2020-04-22:<br>
- texas rowena few road splines created, didnt elevate yet<br>
2020-04-24:<br>
- texas rowena heightmap smoothed out on elevated road intersections (unnecessary if all roads had elevations?)<br>
- texas rowena vehicleshop changed from mapDE to mapUS<br>
- texas rowena vehicleshop added vehicle selling point<br>
2020-04-25:<br>
- texas rowena forests object placement<br>
2020-04-28:<br>
- texas rowena new vehicle shop and triggers have wrong texture paths<br>
2020-04-29:<br>
- texas rowena F113 should have road coming to it from NW buildings, there is no road, paint it<br>
- texas rowena vehicle shop vehicle sell/customize placeable trigger thing is missing, its not working<br>
- texas rowena vehicle shop purchased vehicles face east, they should face west<br>
- texas rowena vehicle shop icon teleports player inside the building, moved to the yard<br>
2020-04-30:<br>
- texas rowena heightScale and original L3DT exported heightmap added, objects aligned to ground<br>
2020-05-06:<br>
- texas rowena heightmap heightScale PMC Gaming test and video<br>
- texas rowena F99 added several corner pieces, its not perfect but much nicer on those seasons new career savegame ports<br>
- texas rowena selling points aligned to ground<br>
- texas rowena vehicle selling point aligned to ground<br>
2020-05-08:<br>
- texas rowena road splines aligned to ground, new heightScale stuff<br>
- texas rowena road splines created few more, experimented with road elevation<br>
- texas rowena forest barrierwall trees placed on one location as experiment<br>
2020-05-10:<br>
- texas rowena draw splines for roads, asfalt and dirt/gravel<br>
- texas rowena road elevation and ditches using splines and script<br>
- texas rowena, F113 cut the forest treeline for the new road<br>
2020-07-26:<br>
- texas rowena F06 SW has invisibile broom handle on the field. check this residential house just north of it, its the culprit!<br>
- texas rowena F62 south side has a invisibile broom geometry<br>
- texas rowena F16 has small patch of grass and two dark dots, are those trees? because if they are, they are not placed yet.<br>
- texas rowena F145 NE has tree on the field, cultivator_density at least needs to be updated<br>
- texas rowena F133 got two trees on the field like they should be, but cultivator_density is not updated for a hole<br>
- texas rowena F04 has building in the field, its fine if its there in real life but cultivator_density needs to be updated<br>
- texas rowena F28 north east corner has a small field... which has no field definition ;)<br>
- texas rowena F145 NE has utility pole on the field, cultivator_density at least needs to be updated<br>
- texas rowena F68 and F69 has utility poles IN the field, tweak cultivator_density and field definition<br>
2020-07-27:<br>
- texas rowena utility pole holes were plugged in GE, few trees in the field holes in gimp. merged with the one in gimp.<br>
- texas rowena missing farm shack added near new farmer starting location<br>
- texas rowena farm shack on the road neear new farmer starting location moved away<br>
- seasons geo texas rowena created<br>
2020-07-29:<br>
- texas rowena road intersection empty transformgroups added for easier locating them<br>
- texas rowena road intersection elevated bumps smoothed out using small splines set to terrain height<br>
2020-08-06:<br>
- texas rowena careerStartPoint moved to new farmer farm location<br>
- texas rowena new farmer game-mode placeables aligned to ground GE/defaultitems.xml edit<br>
- texas rowena modDesc.xml description edited with author name and website<br>
- texas rowena road elevations smoothed at intersections<br>
- texas rowena F133 tree is offset, re-check the whole island of two trees setup against google/maps<br>
- texas rowena elevated roads need field entrances (not finished, only did two fields in SW)<br>
- texas rowena F68 WNW corner has ocean sounds
</p>

	<h2>v0.2 Private Testing</h2>

<p>
2020-08-07:<br>
- PMC Texas Rowena 8km private testing commenced on 2020-08-07T12:35:00Z ;)<br>
2020-08-13:<br>
- texas rowena landscape tool grass painting support added<br>
2020-08-15:<br>
- fs19 all terrains modDesc descVersion changed to 51.<br>
2020-08-24:<br>
- texas rowena tree inside a building at F127 middle<br>
- texas rowena utility pole in front of vehicle shed door at F141 W<br>
- texas rowena utility pole in a road by the buildings at F145 NW<br>
- texas rowena trees buried underground slightly at F31 buildings area<br>
- texas rowena MP farm manager defaultVehicles.xml vehicles and pallets are there but placeables are gone<br>
- texas rowena road elevation smoothing missing 6613,3053<br>
- texas rowena road elevation smoothing missing 6602,4092<br>
- texas rowena road elevation smoothing missing 2786,7263<br>
- texas rowena road elevation smoothing missing 667,2391<br>
- texas rowena road elevation smoothing missing 988,2279<br>
- texas rowena road elevation smoothing missing 1009,1975<br>
- texas rowena road elevation smoothing missing 3054,825<br>
- texas rowena road elevation smoothing missing 4239,1019<br>
- texas rowena road elevation smoothing missing 4224,1897<br>
- texas rowena road elevation smoothing missing NW or vehicle shop<br>
- texas rowena F37 SW buildings on a dirt road<br>
- texas rowena PMC_Helpers deleted from testing/release version, its now external PMC_Helpers.i3d<br>
- texas rowena Exclude.For.Release dir added, unused files moved there (so not included in fs19 .zip)<br>
- texas rowena v0.2.1 uploaded for testing<br>
</p>

	<h2>v0.2.2 Private Testing</h2>

<p>
2020-08-27:<br>
- texas rowena seasonsMask added<br>
- texas rowena tipCol was on everywhere, removed (tipping should be possible to ground now)<br>
- texas rowena road elevations smoothed out at intersections<br>
- texas rowena utility pole was dangerously close to a road, moved away<br>
- texas rowena v0.2.2 uploaded for testing.
</p>

	<h2>v1.2.3 First Public Release</h2>

<p>
2020-12-16:<br>
- texas rowena precision farming soilmap created<br>
- texas rowena painted bushes to fruit_density in gimp, not complete yet<br>
2020-12-17:<br>
- texas rowena painted bushes to fruit_density in gimp, continued, mostly done<br>
2020-12-28:<br>
- texas rowena new farmer placeable areas grass and bushes removed<br>
- texas rowena new farmer placeable areas dirt light terrain detail texture painted<br>
2020-12-29:<br>
- texas rowena changed version number from v0.2.3 to v1.2.3 due giants testrunner being whiney<br>
- texas rowena ran through testrunner, passed<br>
2020-12-30:<br>
- texas rowena painted some roads in gimp for weight image roughdirt01<br>
- texas rowena few remaining utility pole splines placed<br>
- texas rowena F14 N/NE by the road tree is half sunked into the ground<br>
- texas rowena F29 north central, utility pole within tree<br>
- texas rowena building on cultivator_density F04<br>
- texas rowena driveway missing F06 W<br>
- texas rowena whole terrain NW corner, building on a driveway<br>
- texas rowena building on driveway F37 SE<br>
- texas rowena building ground floor flickers, just south of F125<br>
- texas rowena farm yard driveway missing at F128<br>
- texas rowena building, tree, driveway looks a bit off at F40<br>
- texas rowena shack on road at F118<br>
- texas rowena tree on road at F118<br>
- texas rowena F89 NE (?) corner creeps onto a road<br>
2020-12-31:<br>
- texas rowena vehicle shop has duplicate vehicle sell glowing orb<br>
- texas rowena plugged holes for utility poles in cultivator_density<br>
- texas rowena F123 field definition split up for utility pole holes<br>
- texas rowena F120 field definition split up for utility pole holes<br>
- texas rowena F127 field definition split up for utility pole holes<br>
- texas rowena grass removed from selling point grills<br>
- texas rowena v1.2.3 first public release!
</p>
</div>

<div class="changelog">
	<h2>Known Issues</h2>

<p>
<b>2020-12-31T18:58:00Z</b> Updated.
</p>

<p>
- asphalt road 3D meshes missing (roads are just terrain detail texture)<br>
- sell points are just unloading/dumping grill on the ground<br>
- F100 NW corner area has some odd painting<br>
- F04 field definition is so close to terrain edge that courseplay cant find it (record outline for it)<br>
- F01 cultivator_density is too detailed for courseplay to work with very wide implements like 20+ meter<br>
- F31 courseplay doesnt work, two headlands 23.2m implement width<br>
- roads elevated and ditches script result needs L3DT careful heightmap smoothing<br>
- F57 SW lake/pond missing<br>
- creek river beds missing<br>
</p>
</div>

<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("/var/www/include/footer-start.php"); ?>
<p>
<a href="pmc-terrains.php" class="button">PMC Terrains FS19</a>
<a href="dev-diary-pmc-texas-rowena-8km.php" class="button">Dev Diary PMC Texas Rowena 8km</a>
<a href="screenshots-pmc-texas-rowena-8km.php" class="button">Screenshots PMC Texas Rowena 8km</a>
<a href="pmc-texas-rowena-8km.php" class="button">PMC Texas Rowena 8km</a>
<a href="../index.php" class="button">PMC Farming Simulator root page</a>
</p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("/var/www/include/footer-end.php"); ?>
<?php include("/var/www/include/support.php"); ?>
<?php include("/var/www/include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
