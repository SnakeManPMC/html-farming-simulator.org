<!DOCTYPE html>
<html lang="en">
<head>
<title>Changelog PMC Montana Shelby 8km - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Changelog PMC Montana Shelby 8km - PMC Farming">
<META name="keywords" content="Changelog, Montana, Shelby, Terrain, FS19, PMC, Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<!-- google ads -->
<?php include("../include/google-ads.php"); ?>
<h1><b>Changelog PMC Montana Shelby 8km Farming Simulator 19 Terrain</b></h1>
</header>

<section>
<p>
Changelog for <a href="pmc-montana-shelby-8km.php">PMC Montana Shelby 8km</a> FS19 terrain. See known issues from bottom of this page.
</p>

<div class="changelog">
	<h2>v0.1 Unreleased</h2>

<p>
2019-02-03:<br>
- first day of farming simulator 19 terrain editing. unfortunately I did not write changelogs <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy"><br>
2019-02-28:<br>
- still FS19 terrain editing, every day, 16hrs a day ...<br>
2019-03-18:<br>
- montana welker farms, added terrain_boundaries<br>
- montana welker farms, vehicle shop clip distance set to 1 million<br>
- montana welker farms, name_sound.* setup added<br>
- montana welker farms weight/density/etc images resized to 4096/8192/2048, collision map regenerated
</p>

	<h2>v0.2 Terrain Re-Design Project 2019</h2>

<p>
2019-05-12:<br>
- montana shelby, renamed montana welker farms 8km to montana shelby 8km<br>
- montana shelby, choose location using google/maps terrain view so you can see the fields<br>
- montana shelby, click map, pin is inserted, click the bottom center new dialog, copy paste lat/lon coordinates<br>
- montana shelby, global mapper online sources world street map, view -&gt; zoom view -&gt; zoom to spacing -&gt; view spacing selection 10, fits 8km grid with plenty of free space around<br>
- montana shelby, global mapper CTRL-HOME insert coordinates, find the spot<br>
- montana shelby, global mapper switch to UTM projection<br>
- montana shelby, global mapper create 4096 or 8192 user created feature grid<br>
- montana shelby, global mapper open online data -&gt; u.s. data -&gt; united states elevation data (NED) (10m resolution)<br>
- montana shelby, global mapper export heightmap<br>
- montana shelby, global mapper export kmz<br>
- montana shelby, terra incognita map source -&gt; openstreetmap -&gt; zoom level 500km<br>
- montana shelby, terra incognita file -&gt; load waypoints,tracks -&gt; kmz<br>
- montana shelby, terra incognita full screen, zoom into kmz black rectangle (8km is ok with openstreetmap 250m 4m/px but 16km is 500m 8m/px), draw selection rectangle<br>
- montana shelby, terra incognita waypoints,tracks -&gt; visible to disable kmz black rectangle<br>
- montana shelby, terra incognita map source -&gt; esri arcgis, zoom level 17<br>
- montana shelby, terra incognita download oziexplorer map format<br>
- montana shelby, global mapper open -&gt; oziexplorer .map/.jpg satellite imagery<br>
- montana shelby, global mapper file -&gt; export -&gt; export raster/image format -&gt; png -&gt; file type 24-bit rgb, sample spacing 1, export to bounds -&gt; crop to selected area feature(s)<br>
- montana shelby, l3dt file -&gt; import -&gt; heightfield, choose your heightmap.asc<br>
- montana shelby, l3dt CTRL-E -&gt; file format -&gt; PNG -&gt; map_dem.png<br>
- montana shelby, edit _run_generate_terrain_template_from_sample_data.bat for terrain name and run it<br>
- montana shelby, powergrep run FS19_terrain_class_name_i3d_xml.pga<br>
- montana shelby, powergrep run FS19_gdm_grle_to_png.pga<br>
- montana shelby, execute _run_convert_gdm_to_png.bat<br>
- montana shelby, execute _run_convert_grle_to_png.bat<br>
- montana shelby, execute _run_delete_gdm_and_grle.bat<br>
- montana shelby, execute _run_graphicsmagick_FS19_weight_density_to_standard_8km.bat<br>
- montana shelby, open name.i3d in GE, do some basic cleaning up, save and exit<br>
- montana shelby, powergrep run FS19_png_to_gdm_grle.pga<br>
- montana shelby, execute _run_delete_gdm_and_grle_png_equivalents.bat<br>
- montana shelby, gimp open satellite texture, resize to 4096 res, export to name/maps/pda_map.png, convert it to dds with _run_imagemagick_png_to_dds.bat<br>
- montana shelby, gimp export satellite texture as GoogleEarthPlane/back_of_sign_a.png<br>
- montana shelby, gimp satellite texture resize it down to 2048, crop to 2048 x 1024 and save as name/map_preview.png, convert it to dds with _run_imagemagick_png_to_dds.bat<br>
- montana shelby, create copy to mods dir robocopy bat file and run it<br>
- montana shelby, create backup bat, run it the first time<br>
- montana shelby, GE file -&gt; import -&gt; GoogleEarthPlane/back_of_sign_a.i3d set scale x and z to 4096 or 8192 depending on terrain size<br>
- montana shelby, align careerstartpoint to players farm or suitable location<br>
- montana shelby, import prefabs/FS19_vehicleShop_prefab and the triggers, also name.xml hotspot coordinates correctly<br>
- montana shelby, https://www.farming-simulator.org/19/terrain-selling-points.php<br>
- montana shelby, GE scripts -&gt; fs19 -&gt; map -&gt; create ground collision map, then copy name.i3d.plcColMap.grle to name.i3d.plcMap.grle<br>
2019-06-08:<br>
- montana shelby, STARTED gimp fields background color 63,63,63 and fields 255,0,0 export to satellite_texture_cultivator_density.png<br>
2019-06-09:<br>
- montana shelby, gimp fields background color 63,63,63 and fields 255,0,0 export to satellite_texture_cultivator_density.png<br>
- montana shelby, gimp paint roads over satellite texture, 4 pixel to 8 pixel width depending on the type of road<br>
- montana shelby, roads RGB 255,0,0 and background transparent gimp exported to satellite_texture_roads.png<br>
- montana shelby, _run_graphicsmagick_create_cultivator_density.bat<br>
- montana shelby, _run_graphicsmagick_create_roads_roughdirt01.bat<br>
- montana shelby, _run_graphicsmagick_create_fruit_density.bat<br>
- montana shelby, gimp paint _farmland image https://www.farming-simulator.org/19/terrain-farmland-painting-gimp.php export to satellite_texture_farmland.png<br>
- montana shelby, _run_graphicsmagick_create_farmland.bat<br>
- montana shelby, powergrep run FS19_gdm_grle_to_png.pga<br>
- montana shelby, GE load name.i3d and verify that fields are painted without grass in them, save<br>
- montana shelby, import fields_template, create only one field for now<br>
- montana shelby, once the first field is working, do backups and then create rest of the fields <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy"><br>
2019-11-20:<br>
- montana shelby string sale point replaced with selling point
</p>

	<h2>v0.3 2020</h2>

<p>
2020-08-23:<br>
- montana shelby gimp buildings red coverage xcf image created<br>
2020-08-25:<br>
- montana shelby gimp trees red coverage xcf image created<br>
- montana shelby moddesc description added farming-simulator link<br>
- montana shelby created Exclude.For.Release dir and moved unused dirs there<br>
- montana shelby copy heightmap_L3DT.png into name/name_dem.png<br>
- montana shelby heightScale 72.10 added<br>
- montana shelby align vehicle shop and selling points to the ground<br>
- montana shelby import terrain edge block geometrys (boundaries) so vehicles wont fall of the map Objects.for.terrains\terrain_boundaries\<br>
- montana shelby gimp paint farms etc locations over satellite texture, just a few roads, yards in SW<br>
- montana shelby place building objects, created crude welkers yard using giants and cbj buildings<br>
- montana shelby place building objects<br>
2020-08-28:<br>
- montana shelby place utility poles<br>
- montana shelby place trees<br>
- montana shelby punched holes for utility poles in cultivator_density image<br>
2020-09-05:<br>
- montana shelby tipcol reset to allow tipping everywhere<br>
- montana shelby three errors in farmland image fixed<br>
- montana shelby two new farmland areas added to cover fields more accurately<br>
- montana shelby seasonsMask added
</p>

	<h2>v0.4 2021</h2>

<p>
2021-01-12:<br>
- Montana Shelby 8km defaultItems.xml $moddir$ changed to $mapdir$<br>
2021-02-02:<br>
- montana shelby Location-30 is not a hole in cultivator_density<br>
- montana shelby cultivator_density holes bunched for few object locations<br>
- montana shelby terrain.i3d field numbers added (just a editing convenience)<br>
- montana shelby F149 cultivator_density needs to be holed for a building<br>
- montana shelby F61 NW building doesnt exactly fit into cultivator_density hole<br>
- montana shelby F87 has one odd grass spot in NW corner area<br>
- montana shelby utility poles do not fit cultivator_density holes, F91 is actually missing cultivator_density holes!<br>
- montana shelby F109 field definition edited for utility poles<br>
- montana shelby F109 utility poles moved to their holes (giggity)<br>
- montana shelby F108 utility poles moved to their holes (giggity)<br>
- montana shelby F107 utility poles moved to their holes (giggity)<br>
- montana shelby F150 utility poles moved to their holes (giggity)<br>
- montana shelby F126 utility poles moved to their holes (giggity)<br>
- montana shelby F77 SW re-check that dirt roads are painted properly in gimp, they were, cultivator_density was not hehe<br>
- montana shelby F117 NE starting narrow road is painted too narrow, its undrivable width<br>
- montana shelby utility pole placement wrong by welker farm yard<br>
2021-02-03:<br>
- montana shelby dealership mapview icon throws you inside the 3d model<br>
- montana shelby dealership vehicle customize/repair/sell trigger missing
</p>

	<h2>v1.1</h2>

<p>
2021-02-05:<br>
- montana shelby farmland ID added for new farmer game-mode<br>
- montana shelby new farmer GE objects moved to placeables<br>
- montana shelby map_preview.dds has unnecessary mipmaps<br>
- montana shelby pda_map.dds has unnecessary mipmaps<br>
- montana shelby moddesc descversion changed to 53<br>
- montana shelby moddesc version changed to v1.1<br>
- montana shelby CDATA added to moddesc description<br>
2021-02-13:<br>
- montana shelby placeables appear now in all game-modes but can be sold<br>
2021-02-14:<br>
- montana shelby farmland image is buggy, new farmer owns two lands when its supposed to own only one (welkers yard)<br>
- montana shelby farmland image bin site separated to its own id and added to default farm property<br>
- montana shelby F150 added few corner pieces<br>
- montana shelby selling point 1 name changed to SP1<br>
- montana shelby selling points accept now all crops and bunch of animal products<br>
2021-02-15:<br>
- montana shelby utility poles got wires added to them<br>
2021-02-24:<br>
- montana shelby residential building placeables are all the same name<br>
- montana shelby residential building placeables daily upkeep removed<br>
- montana shelby animal dealer added<br>
- montana shelby sell point 1 moved next to a building<br>
- montana shelby grass removed from sell point 2 and 3<br>
- montana shelby sell point 5 and 6 deleted, no suitable places come to mind<br>
- montana shelby sell point 4 moved to 5th coordinates<br>
- montana shelby fuel station added to new farmer game-mode welkers yard<br>
2021-02-25:<br>
- montana shelby field definitions corner pieces added, some might still need a bit work but overall they rock now<br>
2021-02-26:<br>
- montana shelby gimp painted few farmland IDs<br>
- montana shelby field definitions corner pieces added, its now finished, well at least I'm not going to bother with them more<br>
2021-02-27:<br>
- montana shelby sell point names changed to something unique<br>
- montana shelby sell point now accepts every filltype found in map_filltypes.xml<br>
- montana shelby placeable farm houses no longer be available in store/garage to buy<br>
2021-02-28:<br>
- montana shelby new farmer game-mode defaultVehicles.xml created including use of big bud 450 and big brute mods<br>
- montana shelby defaultItems.xml farms 2 through 4 created, works in MP (at least 2 is)<br>
- montana shelby players farm house with a sleep trigger added<br>
2021-03-01:<br>
- montana shelby farmlands areas painted in GIMP, all 127 of them<br>
- montana shelby added custom _fruitTypes.xml, ai plants only barley, canola, oats and wheat now<br>
2021-03-09:<br>
- montana shelby cbj buildings clip distances tweaked for inner walls and rafters<br>
- montana shelby cbj buildings set as placeables under farmid 0, doors are working<br>
- montana shelby outside terrain dds texture mipmaps added<br>
</p>

	<h2>v1.1.3 First Internal Testing Release</h2>

<p>
2021-03-09:<br>
- prepared internal testing release packet, I guess <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

	<h2>v1.1.4</h2>

<p>
2021-04-26:<br>
- montana shelby F48 map marker was not shown, fixed<br>
- montana shelby F49 map marker moved just a bit SW<br>
- montana shelby water tank added to SW location<br>
- montana shelby three cell phone towers added to SW location
</p>

	<h2>v1.1.6</h2>

<p>
2021-04-27:<br>
- montana shelby water tank texture path wrong, textures missing<br>
2021-05-16:<br>
- montana shelby precision farming soil map image added<br>
2021-05-17:<br>
- montana shelby seasons geo created<br>
- montana shelby increase farmland image channels to 255<br>
- montana shelby farmland image painted in gimp for few smaller areas
</p>

	<h2>v1.2 First Public Release!</h2>
<p>
2021-05-25:<br>
- montana shelby giants modhub mod welker workshop added as required mod<br>
2021-05-28:<br>
- montana shelby v1.2 first public release! <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>
</div>

<div class="changelog">
	<h2>Known Issues</h2>

<p>
<b>2021-05-28T20:35:00Z</b> Updated.
</p>

<p>
- outside terrain missing
</p>
</div>

</section>

<footer>
<p>
<a href="pmc-terrains.php" class="button">PMC Terrains</a>
<a href="dev-diary-pmc-montana-shelby-8km.php" class="button">Dev Diary PMC Montana Shelby 8km</a>
<a href="pmc-montana-shelby-8km.php" class="button">PMC Montana Shelby 8km</a>
<a href="../index.php" class="button">PMC Farming Simulator root page</a>
</p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("../include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
