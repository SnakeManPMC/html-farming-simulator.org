<!DOCTYPE html>
<html lang="en">
<head>
<title>Placeable Objects Farming Simulator 19 - PMC Tactical</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Placeable Objects Farming Simulator 19 - PMC Tactical">
<META name="keywords" content="Terrain, Placeable Objects, PMC, Tactical">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<!-- google ads -->
<?php include("../include/google-ads.php"); ?>
<h1><b>PMC Tactical Farming Simulator Terrain Placeable Objects</b></h1>
</header>

<section>
	<h2>Placeable Objects</h2>

<p>
$data/maps/mapUS_items.xml and mapDE_items.xml contains good examples how to setup objects into your terrain using the placeable system. Place these XML entries to your defaultItems.xml file, adjust position coordinates to fit your terrain. Note that you need to use filename="data/ as dollar sign in front of data does not work.
</p>

<p>
You can import these placeables i3d files into GE and place them where you want, then copy paste their coordinates into defaultItems.xml file. Once all that is done you need to delete the placeholder GE objects as they will conflict with in-game placeables. During development in GE you can use visibility tickbox to turn them on/off, but for actual in-game use you need to delete them, for example if you don't then you cannot get into shed/barn/garage from the animated door because the GE invisible object still has the door closed even though you opened the placeable door (yes I know, confusing).
</p>

<p>
You can export the GE placed objects to a i3d file for editing purposes, this way you can save your terrain without GE objects but when you get back to editing you can import them back in.
</p>

<p>
&lt;item mapBoundId= must match the i3d name.
</p>

<p>
defaultFarmProperty must be set to false if you want xml done placeables to show up in new farmer, farm manager and start from scratch game modes. With it set to true they only appear in new farmer mode.
</p>

<p>
$data/placeables/ reference and short descriptions:<br>
farmSilos/farmSiloLarge is standard farm grain bin/silo with input/output triggers. farmSiloSmall is the same but smaller silo model. siloExtension is single large grain bin/silo.
hayLoft/hayLoft is like a barn with some sort of hay/grass etc input/output triggers<br>
highPressureWasher/kaercher/kaercherHDS918-4M.i3d is the high pressure washer model, dunno if it works as-is in-game so you can wash your vehicles near this model?<br>
limeStation/limeStation small bin for lime, with output trigger<br>
mapDE/farmBuildings/farmBarn nice looking building but doesnt look like a barn to me<br>
mapDE/farmBuildings/farmGarage very small once car garage<br>
mapDE/farmBuildings/farmHouse detailed farm house (not the in-game placeable one that costs 350,000)<br>
mapDE/farmBuildings/farmHousePreplaced farm house with fence and a doghouse (again not the in-game placeable)<br>
mapDE/farmBuildings/farmStorageBarn wooden but sturdy looking, kinda of shed/shelter building<br>
mapUS/farmBuildings/farmBarn simple barn looking building<br>
mapUS/farmBuildings/farmGarage small building with three large vehicle sized doors (well, small vehicle)<br>
mapUS/farmBuildings/farmHouse has two pattios (spelling?), kind of small and tall building meshed together, ok looking I guess<br>
mapUS/farmBuildings/farmHut small, hut, yep<br>
mapUS/farmBuildings/farmOldBarn red nice looking barn<br>
mapUS/farmBuildings/farmShack low and small shack type building<br>
mapUS/farmBuildings/farmShed small shed looking building<br>
mapUS/farmBuildings/farmStable medium sized building with some sort of extensions to it<br>
mapUS/farmBuildings/farmStorage has small bin on the side, kind of "work-farm" looking building not industrial but something like that<br>
mapUS/farmBuildings/farmTrailer a long narrow building<br>
mapUS/sheds/easyShed01 vehicle shed, metal with tin roof<br>
mapUS/sheds/easyShed02 vehicle shed, large, metal with tin roof<br>
mapUS/sheds/easyShed03 vehicle shed, open ended, metal with tin roof<br>
mapUS/sheds/easySheds01 must be some odd setup as all the 1-3 models are in the same clump here<br>
mapUS/waterTank water tank, looks like greenish plastic<br>
mapUS/workshop vehicle workshop, has triggers for vehicle repair/customize stuff (I think)
</p>

<p>
When you create farm or location using the placeable system on defaultItems.xml file, you also need to add the placeable XML file into modDesc.xml under &lt;storeItems&gt;, like here:
</p>
<pre>
&lt;/maps&gt;
	&lt;storeItems&gt;
		&lt;storeItem xmlFilename="$data/placeables/farmSilos/farmSiloLarge.xml" /&gt;
		&lt;storeItem xmlFilename="$data/placeables/farmSilos/siloExtension.xml" /&gt;
		&lt;storeItem xmlFilename="$data/placeables/mapUS/farmBuildings/farmHouse.xml" /&gt;
		&lt;storeItem xmlFilename="$data/placeables/mapUS/farmBuildings/farmGarage.xml" /&gt;
		&lt;storeItem xmlFilename="$data/placeables/mapUS/farmBuildings/farmBarn.xml" /&gt;
		&lt;storeItem xmlFilename="$data/placeables/mapUS/farmBuildings/farmShack.xml" /&gt;
	&lt;/storeItems&gt;
&lt;/modDesc&gt;
</pre>

<p>
If you do not add these storeitems xml lines for all your used placeables, then you get error in the log and cannot place more than one placeable per game start.
</p>

<p>
CBJ Midwest Building pack usage as required mod:<br>
- download the FS19_PlaceableCBJbuildings mod<br>
- place the zip into FS19 mods directory<br>
- unpack the zip into your editing directory next to (not INTO, a big difference) your own terrain directory<br>
- GE import the model i3d's, duplicate and place them where you want<br>
- defaultItems.xml add the buildings, take the coordinates from GE, use the $moddir$/mod_name/possible_path/file.xml like this:
</p>
<pre>
&lt;!-- CBJ Midwest Buildings Pack --&gt;
    &lt;item className="Placeable" filename="$moddir$FS19_PlaceableCBJbuildings/40x60QuonsetShop.xml" position="-247.824 0 -452.005" rotation="0 0 0" defaultFarmProperty="false" farmId="1"/&gt;
    &lt;item className="Placeable" filename="$moddir$FS19_PlaceableCBJbuildings/40x60shedRed.xml" position="-281.304 0 -453.415" rotation="0 0 0" defaultFarmProperty="false" farmId="1"/&gt;
    &lt;item className="Placeable" filename="$moddir$FS19_PlaceableCBJbuildings/40x60shedTan.xml" position="-304.048 0 -453.887" rotation="0 0 0" defaultFarmProperty="false" farmId="1"/&gt;
    &lt;item className="Placeable" filename="$moddir$FS19_PlaceableCBJbuildings/40x60shedWht.xml" position="-330.634 0 -463.089" rotation="0 0 0" defaultFarmProperty="false" farmId="1"/&gt;
    &lt;item className="Placeable" filename="$moddir$FS19_PlaceableCBJbuildings/52x72MachineShedRed.xml" position="-332.673 0 -422.682" rotation="0 0 0" defaultFarmProperty="false" farmId="1"/&gt;
    &lt;item className="Placeable" filename="$moddir$FS19_PlaceableCBJbuildings/52x72MachineShedTan.xml" position="-303.283 0 -419.608" rotation="0 0 0" defaultFarmProperty="false" farmId="1"/&gt;
    &lt;item className="Placeable" filename="$moddir$FS19_PlaceableCBJbuildings/52x72MachineShedWht.xml" position="-271.45 0 -418.133" rotation="0 0 0" defaultFarmProperty="false" farmId="1"/&gt;
    &lt;item className="Placeable" filename="$moddir$FS19_PlaceableCBJbuildings/72x150shedRed.xml" position="-223.154 0 -416.791" rotation="0 0 0" defaultFarmProperty="false" farmId="1"/&gt;
    &lt;item className="Placeable" filename="$moddir$FS19_PlaceableCBJbuildings/72x150shedTan.xml" position="-177.859 0 -422.9" rotation="0 0 0" defaultFarmProperty="false" farmId="1"/&gt;
    &lt;item className="Placeable" filename="$moddir$FS19_PlaceableCBJbuildings/72x150shedWht.xml" position="-181.229 0 -507.31" rotation="0 0 0" defaultFarmProperty="false" farmId="1"/&gt;
</pre>
<p>
- delete CBJ objects from GE<br>
All done, when you go in-game the buildings show up as defined in defaultItems.xml as long as you have FS19_PlaceableCBJbuildings mod loaded.
</p>

<p>
Using other peoples mods as "required mods" instead of putting them into your terrain directory to be included in your terrain release is the right way to do it. Do not, I say again, do not include other peoples mods in your terrain directory. You save file space and downloading time for your users when you do it required mod way.
</p>

<p>
Keep FS19_PlaceableCBJbuildings/ next to your terrain directory, not inside it. For example your root editing dir would be "c:\fs19editing\terrains\" so your terrain would be "c:\fs19editing\terrains\myTerrain\" and CBJ buildings would be "c:\fs19editing\terrains\FS19_PlaceableCBJbuildings\" where GE i3d would reference ..\..\FS19_PlaceableCBJbuildings\ relative dir.
</p>

<p>
If you dont like the placeable method you can always have them hardcoded in GE, this removes the option from players to sell the buildings if they don't like them and makes farm manager and start from scratch game modes basically not working as intended.
</p>

<p>
If you are making optional singleplayer and multiplayer defaultItems.xml configs, SP should be default and MP optional because there are more SP users. Optional means that user first downloads your terrain, then unpacks it and swaps the defaultItems.xml into the optional version, then packs the terrain dir into zip again.
</p>

<p>
Farm grain bin silo farmSiloLarge total capacity is tricky as if you place the siloExtension placeables they do not get added to total capacity. So what you need to do is to copy &lt;fs19_root&gt;\data\placeables\farmSilos\farmSiloLarge.xml into your own terrain directory and edit it to increase the capacity, then just keep siloExtension as cosmetic eye candy only.
</p>

<p>
For example defaultItems.xml:
</p>
<pre>
&lt;item mapBoundId="farmSiloLarge" className="SiloPlaceable" filename="$mapdir$/maps/placeables/farmSilos/farmSiloLarge.xml" position="COORDINATES" rotation="0 0 0" defaultFarmProperty="false" 
</pre>

<p>
And farmSiloLarge.xml:
</p>
<pre>
    &lt;storages&gt;
        &lt;storage node="0|2" fillTypes="wheat barley canola maize oat sunflower soybean" capacityPerFillType="9000000" /&gt;
    &lt;/storages&gt;
</pre>
<p>
Above XML would put capacity to 9 million liters per crop type.
</p>

<p>
modDesc.xml storeItems cannot include $moddir$ or $mapdir$, they do not work. modDesc storeItems defaults already to your terrain root directory, so only use "maps/path1/path2/filename.xml" naming.
</p>

<p>
If you get the following error:
</p>
<pre>
Error: Failed to open xml file 'mapdir$/maps/placeables/farmSilos/farmSiloLarge.xml'.
Error (mapdir$/maps/placeables/farmSilos/farmSiloLarge.xml): No storeData found. StoreItem will be ignored!
</pre>
<p>
You can fix it by not using $mapdir$ in modDesc.xml
</p>

<p>
defaultItems.xml created placeable farmSiloLarge gets random liters of crops placed in it at career start. You can configure how these crops are created when you add "storage" property in your defaultItems.xml file in the farmSiloLarge location.
</p>
<pre>
&lt;item className="SiloPlaceable" filename="data/placeables/farmSilos/farmSiloLarge.xml" position="COORDINATES" rotation="0 0 0" defaultFarmProperty="true" farmId="1"&gt;
	&lt;storage index="1" farmId="1"&gt;
		&lt;node fillType="WHEAT" fillLevel="0"/&gt;
		&lt;node fillType="BARLEY" fillLevel="0"/&gt;
		&lt;node fillType="OAT" fillLevel="0"/&gt;
		&lt;node fillType="CANOLA" fillLevel="0"/&gt;
		&lt;node fillType="SUNFLOWER" fillLevel="0"/&gt;
		&lt;node fillType="SOYBEAN" fillLevel="0"/&gt;
		&lt;node fillType="MAIZE" fillLevel="0"/&gt;
	&lt;/storage&gt;
&lt;/item&gt;
</pre>

<p>
Adjust the tillType's for crops you need. Also you can set fillLevel to high amounts as well.
</p>

</section>

<footer>
<p><a href="map-making-tutorial.php" class="button">PMC Farming Simulator Map Making Tutorial page</a></p>
<p><a href="../index.php" class="button">PMC Farming Simulator root page</a></p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("../include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
