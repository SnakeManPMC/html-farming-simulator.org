<!DOCTYPE html>
<html lang="en">
<head>
<title>Custom Crop Icons Farming Simulator 19 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Custom Crop Icons Farming Simulator 19 - PMC Farming">
<META name="keywords" content="Terrain, Custom Crop Icons, PMC, Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<!-- google ads -->
<?php include("../include/google-ads.php"); ?>
<h1><b>PMC Farming Simulator Terrain Custom Crop Icons</b></h1>
</header>

<section>
	<h2>Custom Crop Icons</h2>

<p>
maps/maps_fillTypes.xml
</p>
<pre>
&lt;map&gt;
    &lt;fillTypes&gt;
 	&lt;fillType name="WHEAT" title="$l10n_fillType_wheat" showOnPriceTable="true" pricePerLiter="0.337" &gt;
            &lt;image hud="maps/huds/hud_fill_wheat.png" hudSmall="maps/huds/hud_fill_wheat_sml.png" /&gt;
            &lt;physics massPerLiter="0.78" maxPhysicalSurfaceAngle="15" /&gt;
            &lt;pallet filename="$data/objects/pallets/fillablePallet/fillablePallet.xml" /&gt;
        &lt;/fillType&gt;
</pre>
<p>
hud_fill_wheat.png PNG 256x256+0+0 DirectClass 8-bit 9.7Ki<br>
hud_fill_wheat_sml.png PNG 64x64+0+0 DirectClass 8-bit 1.3Ki
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
