<!DOCTYPE html>
<html lang="en">
<head>
<title>Changelog PMC Iowa Garden City 8km - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Changelog PMC Iowa Garden City 8km - PMC Farming">
<META name="keywords" content="Changelog, Iowa, Garden, City, Terrain, FS19, PMC, Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<!-- google ads -->
<?php include("../include/google-ads.php"); ?>
<h1><b>Changelog PMC Iowa Garden City 8km Farming Simulator 19 Terrain</b></h1>
</header>

<section>
<p>
Changelog for <a href="pmc-iowa-garden-city-8km.php">PMC Iowa Garden City 8km</a> FS19 terrain. See known issues from bottom of this page. Also check out <a href="dev-diary-pmc-iowa-garden-city-8km.php">Dev Diary PMC Iowa Garden City 8km</a>.
</p>

<div class="changelog">
	<h2>v0.1 Unreleased</h2>

<p>
2019-02-03:<br>
- first day of farming simulator 19 terrain editing. unfortunately I did not write changelogs <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy"><br>
2019-02-28:<br>
- still FS19 terrain editing, every day, 16hrs a day ...<br>
2019-03-18:<br>
- iowa garden city, added terrain_boundaries<br>
- iowa garden city, vehicle shop clip distance set to 1 million<br>
- iowa garden city, name_sound.* setup added<br>
2019-03-19:<br>
- iowa garden city, weight/density image resizing to larger<br>
- iowa garden city, generated collision map<br>
2019-03-22:<br>
- iowa garden city, paint detail texture layer, farms etc locations<br>
2019-03-23:<br>
- iowa garden city, farm 1 players SP farm created in GE, transferred to defaultItems.xml<br>
- iowa garden city, farm 1 cleaned grass from the building areas<br>
2019-03-25:<br>
- iowa garden city, bale sale point added<br>
- iowa garden city, moddesc storeitems is broken (no $moddir$ or $mapddir$ allowed), fixed<br>
2019-03-26:<br>
- iowa garden city, AI planted crops limited to corn and soybeans<br>
2019-03-27:<br>
- iowa garden city, farms 2 through 4 done with GE objects transferred to placeables<br>
- iowa garden city, main city done with mapus exported buildings<br>
- iowa garden city, railroad grain silo placed with few vehicle sheds<br>
2019-03-28:<br>
- iowa garden city, more ge hardcoded buildings added<br>
2019-03-29:<br>
- iowa garden city, more ge hardcoded buildings added, quite few actually done now<br>
2019-03-30:<br>
- iowa garden city, more ge hardcoded buildings added<br>
2019-03-31:<br>
- iowa garden city, finished ge hardcoded buildings placement, all the basic areas are now done! 52 GE hardcoded areas and 5 player farms as placeables <img src="../images/smileys/icon_biggrin.gif" alt="Smiley :D" loading="lazy"><br>
2019-04-03:<br>
- iowa garden city tried to paint forest ground in gimp but it didnt appear in ge, hmm<br>
2019-04-04:<br>
- iowa garden city, changed so that placeables show up in new farmer mode but not in farm manager/start from scratch<br>
- iowa garden city, added trees to the town and elsewhere, not all trees done yet but the biggest thickness parts<br>
2019-04-06:<br>
- iowa garden city, F104 in the NE corner has E side really close to terrain edge<br>
- iowa garden city, sale point 3 location dirt road grass is not removed from the south end of this small road<br>
- iowa garden city, sale points 1-3 removed 90 degree rotation<br>
- iowa garden city, added three more sale points, 4-6<br>
- iowa garden city, vehicle shop clipdistance increased from 250 to 800<br>
- iowa garden city, grass removed under farm id 2-4 placeables<br>
- iowa garden city, F11 south end was crooked, heh fixed but dunno why bother<br>
- iowa garden city, farmsilolarge has unloading pipe untextured mesh visible<br>
- iowa garden city, F29 farmland info layer not painted properly, land not owned when harvesting<br>
2019-04-07:<br>
- iowa garden city, farm id 1 players farm cbj sheds changed to white color<br>
- iowa garden city, F36 NW edge comes pretty much on a road<br>
2019-04-08:<br>
- iowa garden city, sale point 1 renamed to Prairie Land Cooperative<br>
- iowa garden city, train system added<br>
- iowa garden city, train system custom grain car with 143k liter capacity added<br>
2019-04-15:<br>
- iowa garden city, railroad grain station shifted slightly to west so train fits under it better<br>
- iowa garden city, grass cleaned off from train tracks<br>
- iowa garden city, placed more trees around the farms mostly<br>
- iowa garden city, train added twice more grain cars (still no grain loading points along the tracks)<br>
2019-04-17:<br>
- iran hormuz roads.shp combined features from 8102 to 4947<br>
- iowa garden city, placed utility poles to perhaps 30-40% of the terrain<br>
2019-05-03:<br>
- iowa garden city, cultivator_density painting in gimp, just like 30 or so fields around F45
</p>

	<h2>v0.2 Terrain Re-Design Project 2019</h2>

<p>
2019-05-14:<br>
- iowa garden city, global mapper online sources world street map, view -&gt; zoom view -&gt; zoom to spacing -&gt; view spacing selection 10, fits 8km grid with plenty of free space around<br>
- iowa garden city, global mapper CTRL-HOME insert coordinates, find the spot<br>
- iowa garden city, global mapper switch to UTM projection<br>
- iowa garden city, global mapper create 4096 or 8192 user created feature grid<br>
- iowa garden city, global mapper open online data -&gt; u.s. data -&gt; united states elevation data (NED) (10m resolution)<br>
- iowa garden city, global mapper export heightmap<br>
- iowa garden city, global mapper export kmz<br>
- iowa garden city, terra incognita map source -&gt; openstreetmap -&gt; zoom level 500km<br>
- iowa garden city, terra incognita file -&gt; load waypoints,tracks -&gt; kmz<br>
- iowa garden city, terra incognita full screen, zoom into kmz black rectangle (8km is ok with openstreetmap 250m 4m/px but 16km is 500m 8m/px), draw selection rectangle<br>
- iowa garden city, terra incognita waypoints,tracks -&gt; visible to disable kmz black rectangle<br>
- iowa garden city, terra incognita map source -&gt; esri arcgis, zoom level 17<br>
- iowa garden city, l3dt file -&gt; import -&gt; heightfield, choose your heightmap.asc<br>
- iowa garden city, l3dt CTRL-E -&gt; file format -&gt; PNG -&gt; map_dem.png<br>
- iowa garden city, terra incognita download oziexplorer map format<br>
- iowa garden city, global mapper open -&gt; oziexplorer .map/.jpg satellite imagery<br>
- iowa garden city, global mapper file -&gt; export -&gt; export raster/image format -&gt; png -&gt; file type 24-bit rgb, sample spacing 1, export to bounds -&gt; crop to selected area feature(s)<br>
- iowa garden city, edit _run_generate_terrain_template_from_sample_data.bat for terrain name and run it<br>
- iowa garden city, powergrep run FS19_terrain_class_name_i3d_xml.pga<br>
- iowa garden city, powergrep run FS19_gdm_grle_to_png.pga<br>
- iowa garden city, execute _run_convert_gdm_to_png.bat<br>
- iowa garden city, execute _run_convert_grle_to_png.bat<br>
- iowa garden city, execute _run_delete_gdm_and_grle.bat<br>
- iowa garden city, execute _run_graphicsmagick_FS19_weight_density_to_standard_8km.bat<br>
- iowa garden city, open name.i3d in GE, do some basic cleaning up, save and exit<br>
- iowa garden city, powergrep run FS19_png_to_gdm_grle.pga<br>
- iowa garden city, execute _run_delete_gdm_and_grle_png_equivalents.bat<br>
- iowa garden city, gimp open satellite texture, resize to 4096 res, export to name/maps/pda_map.png, convert it to dds with _run_imagemagick_png_to_dds.bat<br>
- iowa garden city, gimp export satellite texture as GoogleEarthPlane/back_of_sign_a.png<br>
- iowa garden city, gimp satellite texture resize it down to 2048, crop to 2048 x 1024 and save as name/map_preview.png, convert it to dds with _run_imagemagick_png_to_dds.bat<br>
- iowa garden city, create copy to mods dir robocopy bat file and run it<br>
- iowa garden city, create backup bat, run it the first time<br>
- iowa garden city, GE file -&gt; import -&gt; GoogleEarthPlane/back_of_sign_a.i3d set scale x and z to 4096 or 8192 depending on terrain size<br>
- iowa garden city, align careerstartpoint to players farm or suitable location<br>
- iowa garden city, import prefabs/FS19_vehicleShop_prefab and the triggers, also name.xml hotspot coordinates correctly<br>
- iowa garden city, https://www.farming-simulator.org/19/terrain-sale-points.php<br>
- iowa garden city, GE scripts -&gt; fs19 -&gt; map -&gt; create ground collision map, then copy name.i3d.plcColMap.grle to name.i3d.plcMap.grle<br>
- iowa garden city, global mapper US NAIP download<br>
2019-06-17:<br>
- iowa garden city, gimp fields background color 63,63,63 and fields 255,0,0 export to satellite_texture_cultivator_density.png<br>
- iowa garden city, gimp paint roads over satellite texture, 4 pixel to 8 pixel width depending on the type of road<br>
- iowa garden city, roads RGB 255,0,0 and background transparent gimp exported to satellite_texture_roads.png<br>
- iowa garden city, gimp paint _farmland image https://www.farming-simulator.org/19/terrain-farmland-painting-gimp.php export to satellite_texture_farmland.png<br>
- iowa garden city, _run_graphicsmagick_create_cultivator_density.bat<br>
- iowa garden city, _run_graphicsmagick_create_roads_roughdirt01.bat<br>
- iowa garden city, _run_graphicsmagick_create_fruit_density.bat<br>
- iowa garden city, _run_graphicsmagick_create_farmland.bat<br>
- iowa garden city, powergrep run FS19_gdm_grle_to_png.pga<br>
- iowa garden city, GE load name.i3d and verify that fields are painted without grass in them, save<br>
- iowa garden city, import fields_template, create only one field for now<br>
- iowa garden city, once the first field is working, do backups and then create rest of the fields <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy"><br>
2019-11-20:<br>
- iowa garden city string sale point replaced with selling point
</p>

	<h2>v? 2020</h2>

<p>
2020-05-06:<br>
- iowa garden city heightmap heightScale PMC Gaming test and video<br>
2020-08-23:<br>
- iowa garden city gimp buildings red coverage xcf image created<br>
- iowa garden city gimp trees red coverage xcf image created<br>
2020-08-29:<br>
- iowa garden city utility pole design doc started to create<br>
2020-08-30:<br>
- iowa garden city utility pole design doc finished<br>
2020-09-05:<br>
- iowa garden city Exclude.For.Release directory created and unused dirs/files moved there<br>
- iowa garden city PMC_Helpers updated and exported to its own dir<br>
- iowa garden city mapDE vehicle shop model replaced with mapUS one<br>
- iowa garden city wind turbine objects placed<br>
- iowa garden city buildings object placement started, today finished 54 locations<br>
2020-09-06:<br>
- iowa garden city buildings object placement finished, 98 locations<br>
- iowa garden city utility pole objects placement is done<br>
2020-09-08:<br>
- iowa garden city first trees placed around buildings<br>
2020-09-10:<br>
- iowa garden city more trees placed around buildings<br>
2020-09-11:<br>
- iowa garden city more trees placed around buildings (very few, was lazy)<br>
2020-09-14:<br>
- iowa garden city more trees placed around buildings (very few, was lazy)<br>
2020-09-15:<br>
- iowa garden city more trees placed around buildings (very few, was lazy)<br>
2020-09-16:<br>
- iowa garden city more trees placed around buildings (few, was lazy)<br>
2020-09-24:<br>
- iowa garden city more trees placed around buildings (very few, was lazy)<br>
2020-12-29:<br>
- iowa garden city ran through testrunner, passed
</p>

	<h2>2021 v1.1.3 Internal Testing</h2>

<p>
2021-01-12:<br>
- iowa garden city defaultItems.xml $moddir$ changed to $mapdir$<br>
2021-02-22:<br>
- iowa garden city re-created utility pole line with wires and placed from PMC_Helpers to Utility_Poles transformgroup<br>
- iowa garden city re-created utility pole line with wires leaving from city towards players farm<br>
- iowa garden city re-created utility pole line with wires leaving from city towards east<br>
- iowa garden city re-created utility pole line with wires on two other locations<br>
- iowa garden city v0.1 F188 NW utility pole on the road<br>
2021-04-27:<br>
- iowa garden city vegetation object placement continues<br>
2021-04-28:<br>
- iowa garden city vegetation object placement continues<br>
2021-04-29:<br>
- iowa garden city vegetation object placement continues<br>
2021-04-30:<br>
- iowa garden city vegetation object placement continues<br>
2021-05-01:<br>
- iowa garden city vegetation object placement continues<br>
2021-05-02:<br>
- iowa garden city vegetation object placement continues<br>
2021-05-03:<br>
- iowa garden city vegetation object placement continues<br>
2021-05-04:<br>
- iowa garden city vegetation object placement continues<br>
2021-05-05:<br>
- iowa garden city vegetation object placement continues<br>
2021-05-06:<br>
- iowa garden city vegetation object placement continues<br>
2021-05-07:<br>
- iowa garden city vegetation object placement continues<br>
2021-05-08:<br>
- iowa garden city vegetation object placement continues<br>
2021-05-09:<br>
- iowa garden city vegetation object placement FINISHED! <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy"><br>
2021-05-17:<br>
- iowa garden city seasons geo created<br>
2021-05-18:<br>
- iowa garden city farmland image channels increased to 255<br>
- iowa garden city farmland image painted in gimp for 255 ID channels<br>
- iowa garden city utility pole had scale 0,0,0<br>
- iowa garden city two trees on a road<br>
- iowa garden city utility pole wires added, except on few manually placed lines<br>
- iowa garden city v1.1.3 internal testing version released <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

	<h2>v1.1.4 Internal Testing</h2>

<p>
2021-05-21:<br>
- iowa garden city sell points aligned to ground<br>
- iowa garden city v1.1.4 internal testing version released
</p>

	<h2>v1.1.5 Internal Testing</h2>

<p>
2021-05-22:<br>
- seasons geo iowa garden city starting temperatures tweaked<br>
2021-05-27:<br>
- iowa garden city asphalt road from center of city to NW created<br>
- iowa garden city remaining asphalt roads created<br>
2021-05-29:<br>
- iowa garden city started gimp painting dirt/gravel farm yard driveway roads<br>
2021-05-30:<br>
- iowa garden city finished gimp painting dirt/gravel farm yard driveway roads<br>
- iowa garden city gimp painting roads touched up intersections<br>
- iowa garden city gimp painting roads added wind turbine paths<br>
- iowa garden city v1.1.5 sent to internal testers
</p>

	<h2>v1.1.6 Internal Testing</h2>

<p>
2021-06-01:<br>
- iowa garden city tipcol painted black, can tip everywhere<br>
- iowa garden city v1.1.6 uploaded to internal testing
</p>

	<h2>v1.1.7 Internal Testing</h2>

<p>
2021-06-02:<br>
- iowa garden city player farms 1 transferred from GE to defaultItems.xml<br>
- iowa garden city asphalt road elevations smoothed out by dealership and intersections<br>
2021-06-04:<br>
- iowa garden city vehicle shop start/end coordinates adjusted<br>
- iowa garden city vehicle shop hotspot teleports you inside the building geometry<br>
- iowa garden city painted landscaping grass does not grow (it should grow)<br>
- iowa garden city seagull sounds just W of town<br>
- iowa garden city F258 utility poles on field and no cultivator_density holes (but not field definitions yet)<br>
- iowa garden city players farm cbj shed on a field, west side<br>
- iowa garden city F38 NW cultivator_density has grass strip in it<br>
- iowa garden city utility poles with scale 0.75 on NE of players farm<br>
- iowa garden city created two buildings by F15 which I missed doing previously<br>
- iowa garden city two selling points renamed to custom names<br>
- iowa garden city four selling points renamed to "SP1", "SP2" etc style<br>
- iowa garden city selling points now accept ALL crops and products<br>
- iowa garden city F258 utility poles on field and no field definition holes<br>
- iowa garden city F230 in SE area is so near east edge that its ID wont show up in a mapview<br>
- iowa garden city F66 in NW area is so near east edge that its ID wont show up in a mapview<br>
- iowa garden city F179 in W area is so near east edge that its ID wont show up in a mapview<br>
- iowa garden city F275 in SW corner is so near east edge that its ID wont show up in a mapview<br>
- iowa garden city vehicle shop does not have repair trigger<br>
- iowa garden city dealership first start/end coords are too close to building, farm king auger ends up inside it <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy"><br>
- iowa garden city dealership start/end points need to face AWAY from the building<br>
- iowa garden city player farm 1 bin silos disabled temporarily<br>
2021-06-05:<br>
- iowa garden city v1.1.7 uploaded to internal testing
</p>

	<h2>v1.1.8 Internal Testing</h2>

<p>
2021-06-12:<br>
- seasons geo iowa garden city increased winter clouds, rain chance and amount of rain<br>
2021-06-13:<br>
- iowa garden city tipcol painted RGB 0,0,0 black, tipping allowed. for sure this time heh<br>
- iowa garden city seasons mask added<br>
2021-06-15:<br>
- iowa garden city tipcol fixed, real proper this time <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy"><br>
2021-06-18:<br>
- iowa garden city modDesc storeItems is properly set (using placeables works)<br>
- iowa garden city animal dealer functionality with decorations<br>
- iowa garden city new farmer game-mode vehicles created<br>
- iowa garden city grass cleared off from farm 1 placeable buildings<br>
- iowa garden city edge block invisible geometry so vehicles wont fall off<br>
- iowa garden city transferred Location-06 farm yard buildings to player farm<br>
2021-06-19:<br>
- iowa garden city transferred Location-09 into player farms.<br>
- iowa garden city transferred Location-10 into player farms.<br>
- iowa garden city transferred Location-13 into player farms.<br>
- iowa garden city transferred Location-19 into player farms.<br>
- iowa garden city transferred Location-20 into player farms.<br>
- iowa garden city transferred Location-24 into player farms.<br>
- iowa garden city transferred Location-25 into player farms.<br>
- iowa garden city transferred Location-26 into player farms.<br>
2021-06-20:<br>
- iowa garden city defaultItems.xml SiloExtensionPlaceable has wrong className<br>
- iowa garden city new farmer vehicles kuhn sprayer switched to bredal k105 with 6m spreader discs<br>
- iowa garden city new farmer lemken azurit 9 clips through vehicle shed wall<br>
- iowa garden city new farmer added F163 to this/him
</p>

	<h2>v1.1.9 Internal Testing</h2>

<p>
2021-06-22:<br>
- iowa garden city player farm 1 bin silos switched to auger pipe operated ones<br>
2021-06-23:<br>
- iowa garden city rest of player farms bin silos switched to auger pipe operated ones<br>
2021-06-26:<br>
- iowa garden city players farm 11 transferred from static ai farms, with auger pipe bin silo<br>
- iowa garden city players farm 12 transferred from static ai farms, with auger pipe bin silo<br>
2021-06-27:<br>
- iowa garden city players farm 13 transferred from static ai farms, with auger pipe bin silo<br>
- iowa garden city players farm 14 transferred from static ai farms, with auger pipe bin silo<br>
- iowa garden city players farm 15 transferred from static ai farms, with auger pipe bin silo<br>
- iowa garden city players farm 16 transferred from static ai farms, with auger pipe bin silo<br>
2021-06-29:<br>
- iowa garden city farmland image removed several duplicate or buggy IDs<br>
- iowa garden city fruit_density painted in gimp, shrubbery flowers only<br>
- iowa garden city terrainDetailHeight_density image updated for more channels for maizeplus and strawme addons
</p>

	<h2>v1.1.10 Internal Testing</h2>

<p>
2021-06-30:<br>
- iowa garden city american flag pole added to players farm 1<br>
- iowa garden city new farmer player does not own his farm yard land (only F163)<br>
2021-07-01:<br>
- iowa garden city american flag pole added to remaining players farms with farm houses<br>
2021-07-02:<br>
- iowa garden city fuel station added next to vehicle shop<br>
- iowa garden city modDesc.xml description updated with website link<br>
- iowa garden city train tracks created, no train yet though<br>
2021-07-05:<br>
- iowa garden city precision farming custom soilmap added<br>
- iowa garden city sell point more unique names than "selling point 1"<br>
2021-07-07:<br>
- iowa garden city F85 has one grass spot, cultivator_density not painted 100%<br>
- iowa garden city field definitions german jahwol script thousands of corner pieces experiment<br>
- iowa garden city ai will only plant corn and soybeans now<br>
- iowa garden city road elevation smoothing for intersections, driveways and field approaches/entrances
</p>

	<h2>v1.1.11 Internal Testing</h2>

<p>
2021-07-09:<br>
- iowa garden city field definitions german jahwol script thousands of corner pieces experiment reverted back to original<br>
- iowa garden city asphalt road by the dealership railroad tracks quick dirty fix for elevations<br>
2021-07-14:<br>
- iowa garden city created railroad track road crossings<br>
- iowa garden city asphalt road re-make using splinestreetconstructor and crossingconstructor<br>
2021-07-16:<br>
- iowa garden city asphalt road N/S connection road south intersection uneven<br>
- iowa garden city asphalt road N/S connection road north intersection uneven<br>
- iowa garden city asphalt road E/W road east intersection uneven<br>
- iowa garden city fruit_density tweaked for grass and flowers distance from roads and fields<br>
- iowa garden city field definitions more corner pieces at least to the most lacking shapes<br>
2021-07-17:<br>
- iowa garden city field definitions more corner pieces at least to the most lacking shapes<br>
2021-07-18:<br>
- iowa garden city field definitions finished simple shape corner pieces<br>
- iowa garden city sell point locations shuffled a bit for better decorations<br>
- iowa garden city clear grass from placeable buildings especially from defaultVehicles.xml farm sheds<br>
2021-07-19:<br>
- iowa garden city courseplay generate field work course for all fields after field definitions are done
</p>

</div>

<div class="changelog">
	<h2>Known Issues</h2>

<p>
<b>2021-07-19T02:01:00Z</b> Updated.
</p>

<p>
- iowa garden city courseplay cannot generate course for F80 due narrow spot (by the vehicle shed) with WIDE implements<br>
- iowa garden city outside terrain<br>
- iowa garden city utility pole on driveway GE Location-88<br>
- iowa garden city utility pole missing wires on 2 farm yards<br>
- iowa garden city utility poles missing from the city streets<br>
- iowa garden city electric sub station missing<br>
- iowa garden city round bales for that one area in SE (animal dealer?)<br>
- iowa garden city flickering zfighting tree textures on garden city railroad treeline<br>
- iowa garden city asphalt road elevations are missing<br>
- iowa garden city dealership north side treeline, plug the holes so *I* cant cut through with tractors <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy"><br>
- iowa garden city animal hog/pig barns placeholders because we dont have large iowa style hog buildings<br>
- iowa garden city F203 farm house concrete bottom flickers with terrain
</p>

</div>

</section>

<footer>
<p>
<a href="pmc-terrains.php" class="button">PMC Terrains FS19</a>
<a href="dev-diary-pmc-iowa-garden-city-8km.php" class="button">Dev Diary PMC Iowa Garden City 8km</a>
<a href="pmc-iowa-garden-city-8km.php" class="button">PMC Iowa Garden City 8km</a>
<a href="../index.php" class="button">PMC Farming Simulator root page</a>
</p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("../include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
