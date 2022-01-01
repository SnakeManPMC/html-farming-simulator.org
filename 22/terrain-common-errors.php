<!DOCTYPE html>
<html lang="en">
<head>
<title>Common Errors Farming Simulator 22 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Common Errors Farming Simulator 22 - PMC Farming">
<META name="keywords" content="Terrain, Common, Errors, FS22, PMC, Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<!-- google ads -->
<?php include("../include/google-ads.php"); ?>
<h1><b>PMC Farming Simulator 22 Terrain Common Errors</b></h1>
</header>

<section>
	<h2>Common Errors Farming Simulator 22 (FS22)</h2>

<p>
<b>2022-01-01T08:53:00Z</b> updated. Game engine v1.2.0.2 used.
</p>

<pre>
Warning (performance): Foliage lod 1 mesh 'meadow' 'cut' 'cut' is much larger than lod 0 mesh (min/maxY (-0.175/0.082 vs -0.125/0.103).

Info: transform group 'C:/FS22.Mods/Dev/deleteme/maps/mapUS/data/densityMap_fruits.gdm' has elements very far out from the cell edge (59.65% expansion)
FoliageTransformGroup 'C:/FS22.Mods/Dev/deleteme/maps/mapUS/data/densityMap_fruits.gdm' may need space for up to 4918576 instances (1819 per cell x 2704 cells)
FoliageTransformGroup 'C:/FS22.Mods/Dev/deleteme/maps/mapUS/data/densityMap_weed.gdm' may need space for up to 663552 instances (512 per cell x 1296 cells)
FoliageTransformGroup 'C:/FS22.Mods/Dev/deleteme/maps/mapUS/data/densityMap_stones.gdm' may need space for up to 93312 instances (72 per cell x 1296 cells)
</pre>
<p>
Fix: there are no fix because in FS22 v1.2.0.2 everyone gets these errors even on mapAlpine, mapFR and mapUS terrains. All we can hope is Giants fix their terrains.
</p>

<pre>
Error: Failed to load mod map 'PMC_Farm_Lab'. Missing attribute 'modDesc.maps.map(0)#defaultPlaceablesXMLFilename'.
</pre>
<p>
Fix: modDesc.xml add line defaultPlaceablesXMLFilename="maps/PMC_Farm_Lab/placeables.xml" and of course the placeables.xml file itself, which is edit of old defaultItems.xml file with few changes.
</p>

<pre>
2021-12-12 17:18   Error: Failed to find farmland in center of field '4'
2021-12-12 17:18   Error: Failed to find farmland in center of field '7'
2021-12-12 17:18 Error: Running LUA method 'update'.
2021-12-12 17:18 dataS/scripts/field/FieldManager.lua(153) : attempt to index field 'farmland' (a nil value)
2021-12-12 17:18 Error: Running LUA method 'update'.
2021-12-12 17:18 dataS/scripts/field/Field.lua(107) : attempt to index field 'farmland' (a nil value)
</pre>
<p>
Fix: farmland.xml is most likely pointing to mapUS/mapAlpine/mapFR instead your own terrain. Change this in TERRAIN.xml file on line: &lt;farmlands filename="$data/maps/mapUS/farmlands.xml" /&gt;
</p>

<pre>
2021-12-31 10:04 Error: Farmland-Id 36 not defined in farmland xml file!
</pre>
<p>
Fix: farmland.GRLE image has RGB 36,36,36 but farmlands.XML config file has no ID 36. Add it. Your ID obviously can be different, our 36 is just an example.
</p>

<pre>
2021-12-31 10:04   Error: Failed to find farmland in center of field '316'
</pre>
<p>
Fix: you have field definition 316 without a farmland. This error is accompanied by other farmland error, fix it and "center of field" gets fixed as well.
</p>

<pre>
2021-12-12 17:38 Warning (performance): Texture C:/FS22.Mods/Dev/PMC_Farm_Lab/preview.png raw format.
2021-12-12 17:38 Warning: CPU mip generation code activated for texture 'C:/FS22.Mods/Dev/PMC_Farm_Lab/preview.png' - please build mips for this image
2021-12-12 17:38 Warning (performance): Texture C:/FS22.Mods/Dev/PMC_Farm_Lab/icon.png raw format.
2021-12-12 17:38 Warning: CPU mip generation code activated for texture 'C:/FS22.Mods/Dev/PMC_Farm_Lab/icon.png' - please build mips for this image
</pre>
<p>
Fix: this often happens with the stock sample images, use your own or open these in GIMP, edit and save into DDS again (or PNG and use ImageMagick to convert PNG to DDS).
</p>

<pre>
2021-12-12 22:00 Error: Blocked area map is wrong size for terrain (1024 x 1024) vs (512 x 512)
</pre>
<p>
Fix: error itself tells you whats wrong, your size is 1024 and it should be 512. Rescale infoLayer_placementCollisionGenerated.grle image down to 512. If your error has different sizes, act accordingly. 
</p>

<pre>
Weird shadows in Giants Editor (GE).
</pre>
<p>
Fix: GE select Sun in scenegraph, goto attributes, "Light" tab and scroll down to Fixed box min and max X, Y and Z and change values from 1024 to 2048 (maybe higher for larger terrains, not sure).
</p>

<pre>
2021-12-13 09:34 Error: Trying to set DensityMapHeightUpdater collision map with invalid size (2097152 vs 33554432)
</pre>
<p>
Fix: ?
</p>

<pre>
2021-12-13 09:34   Warning: No tip collision map defined. Creating empty tip placement collision map.
</pre>
<p>
Fix: ?
</p>

<pre>
2021-12-13 17:10 Error: AI block info layer has invalid size.
</pre>
<p>
Fix: along with a CTD is fixed by increasing infoLayer_ image resolutions to 16,384 resolution. This is an ugly fix to make such monster size images, but it works, tested on several terrains now. Most likely not all of the images need to be this size, needs more testing.
</p>

<pre>
2021-12-24 06:09   Warning (map.xml): Invalid vector 2 for 'map.hotspots.placeableHotspot(0)#worldPosition'.
</pre>

<p>
Fix: change 3 number coordinates to 2 number, meaning "X Z Y" should only be "X Y", this position format does not need elevation which is the second number there.
</p>

<pre>
2021-12-31 10:04 DensityMapModifier: masks must either be scaled up or scaled down in both directions - mask size 16384x16384, mask2 size 4096x4096 and density map size 8192x8192 are incompatible
</pre>
<p>
Fix: set all densityMap and infoLayer images to 16384 x 16384 resolution. weight is 8192 x 8192 resolution. important: this doesn't mean you must use these resolutions IN GENERAL, but the above error was caused because few of the densityMap_ images was 8192 instead of the resolution as other ones.
</p>

<pre>
Error: No fillUnitIndex for fillType SILAGE_ADDITIVE found, pallet:
</pre>
<p>
Fix: add "SILAGE_ADDITIVE" to fillTypes.xml as seen below:
</p>
<pre>
&lt;fillTypeCategory name="BULK" &gt;SILAGE_ADDITIVE"&lt;/fillTypeCategory&gt;
&lt;fillTypeCategory name="PRODUCT"&gt;SILAGE_ADDITIVE"&lt;/fillTypeCategory&gt;
</pre>

</section>

<footer>
<p><a href="map-making-tutorial.php" class="button">PMC Farming Simulator 22 Map Making Tutorial page</a></p>
<p><a href="../index.php" class="button">PMC Farming Simulator root page</a></p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("../include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
