<!DOCTYPE html>
<html lang="en">
<head>
<title>GIMP Terrain Design Document - PMC Farming Simulator 19</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="GIMP Terrain Design Document - PMC Farming Simulator 19">
<META name="keywords" content="GIMP, Terrain, Design, Document, FS19, PMC, Farming, Simulator">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<!-- google ads -->
<?php include("../include/google-ads.php"); ?>
<h1><b>GIMP Terrain Design Document - PMC Farming Simulator 19</b></h1>
</header>

<section>
	<h2>HOWTO Paint Terrain Design Doc in GIMP</h2>

<p>
<b>2022-01-17T18:18:00Z</b> Updated.
</p>

<div class="warninglabel">
<p>
<b>WARNING! Unfinished page! WARNING!</b> This tutorial walks you through step by step how to paint terrain design document (design doc) in GIMP, however in the end all you have is "pretty picture" nothing more, you get nothing in GE yet, so this is not a full "paint and put in GE" tutorial. If a full complete guide / tutorial is what you're looking for, please stop reading now.
</p>
</div>

<p>
The RGB colors used in this tutorial are still work in progress, they match Farming Simulator 19 (FS19) PDA map meaning ESC mapview image colors pretty closely, but some parts like forest is not even used in mapUS image so we use whatever color felt like best fit. Most likely we change these RGB colors when we refine the tool pipeline.
</p>

<p>
In GIMP create new image (CTRL-N), it should be one pixel per meter scale, so if your terrain is 2.5km x 2.5km the image should be 2560 x 2560 pixel resolution.
</p>

<a href="screenshots/FS19-GIMP-Design-Doc-Tutorial-2022-01-10T1830.jpg" target="_blank"><img src="screenshots/thumbs/FS19-GIMP-Design-Doc-Tutorial-2022-01-10T1830.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 19 Screenshot"></a>

<p>
Paint background grass RGB 104,107,79 color using foreground fill tool CTRL-, (control and comma keys together).
</p>

<a href="screenshots/FS19-GIMP-Design-Doc-Tutorial-2022-01-10T1833.jpg" target="_blank"><img src="screenshots/thumbs/FS19-GIMP-Design-Doc-Tutorial-2022-01-10T1833.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 19 Screenshot"></a>

<p>
Save image with CTRL-S into GIMP XCF format. Choose proper descriptive file name to it (no special characters, etc).
</p>

<p>
Create new layer by pressing CTRL-SHIFT-N, give it name "Railroad Tracks".
</p>

<a href="screenshots/FS19-GIMP-Design-Doc-Tutorial-2022-01-10T1835.jpg" target="_blank"><img src="screenshots/thumbs/FS19-GIMP-Design-Doc-Tutorial-2022-01-10T1835.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 19 Screenshot"></a>

<p>
Click OK or press enter to create the new layer.
</p>

<p>
Open "Change Foreground Color" dialog by clicking the button in GIMP top left corner area, kind of like two squares overlapping. See below screenshot:
</p>

<a href="screenshots/GIMP-HOWTO-Open-Change-Foreground-Color-Dialog.jpg" target="_blank"><img src="screenshots/thumbs/GIMP-HOWTO-Open-Change-Foreground-Color-Dialog.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 19 Screenshot"></a>

<p>
So in "Change Foreground Color" dialog make sure "0..255" and "HSV" is selected by clicking on them.
</p>

<img src="screenshots/GIMP-Change-Foreground-Color-Dialog.png" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 19 Screenshot"/>

<p>
For railroad tracks we use RGB 68,68,60 color. In change foreground color dialog type in R 68, G 68 and B 60, as shown below.
</p>

<a href="screenshots/FS19-GIMP-Design-Doc-Tutorial-2022-01-10T1842.jpg" target="_blank"><img src="screenshots/thumbs/FS19-GIMP-Design-Doc-Tutorial-2022-01-10T1842.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 19 Screenshot"></a>

<p>
Then select to pencil tool mode (press N key), use size 8 pixels, hardness and force 100, then draw a line across the image, it doesn't matter where you draw it just somewhere you think a railroad should go. You can draw this free hand or using line drawing mode with SHIFT-LMB click. It really doesnt matter, just paint it somewhere, free hand is fine for now.
</p>

<a href="screenshots/FS19-GIMP-Design-Doc-Tutorial-2022-01-10T1850.jpg" target="_blank"><img src="screenshots/thumbs/FS19-GIMP-Design-Doc-Tutorial-2022-01-10T1850.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 19 Screenshot"></a>

<p>
Next we paint asphalt roads. By now you should know how to create "Roads Asphalt" new layer. Make sure the "Roads Asphalt" layer is selected.
</p>

<p>
Select RGB 120,120,120 color and then size 10 pixel pencil. Then start painting asphalt roads, free hand is fine again as you can see from below example.
</p>

<a href="screenshots/FS19-GIMP-Design-Doc-Tutorial-2022-01-10T1902.jpg" target="_blank"><img src="screenshots/thumbs/FS19-GIMP-Design-Doc-Tutorial-2022-01-10T1902.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 19 Screenshot"></a>

<p>
Now we repeat basically identical procedure for dirt/gravel roads by using RGB 162,144,120 and pencil size 5 pixels. Drag the "Roads Dirt" layer below asphalt layer by middle mouse button drag.
</p>

<p>
I painted several dirt roads connecting to the asphalt roads, these are extremely inaccurate and screwy, just an example roads, check below.
</p>

<a href="screenshots/FS19-GIMP-Design-Doc-Tutorial-2022-01-10T1912.jpg" target="_blank"><img src="screenshots/thumbs/FS19-GIMP-Design-Doc-Tutorial-2022-01-10T1912.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 19 Screenshot"></a>

<p>
Next we draw some farm yard dirt / gravel areas, these will not be in roads dirt layer but in their own called "Farm Yards". So create farm yards layer and choose RGB 140,100,20 color.
</p>

<p>
Then choose rectangle select tool with R key. Make sure feather edges option is not selected as that creates "smear pixels" which are not allowed in design doc.
</p>

<p>
Next I'm just lazily dragging few boxes and paint them into "Farm Yards" layer using foreground fill tool CTRL-, (control and comma keys together). It really doesn't matter how or where you paint these colors, but don't overlap them with other colors, I chose to put farm yards somewhere nearby dirt roads.
</p>

<a href="screenshots/FS19-GIMP-Design-Doc-Tutorial-2022-01-10T1922.jpg" target="_blank"><img src="screenshots/thumbs/FS19-GIMP-Design-Doc-Tutorial-2022-01-10T1922.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 19 Screenshot"></a>

<p>
Then we do forests, for this I use RGB 60,180,40 and new layer called "Forests". For painting I use free hand selection tool, F key. Make sure antialiasing and feather edges are not selected because that creates those smear pixels.
</p>

<p>
Then just draw free hand forest blob areas where ever you want, for tutorial purposes it really doesn't matter, its up to you, just don't overlap other colors. Oh and make sure you are in "Forests" layer.
</p>

<a href="screenshots/FS19-GIMP-Design-Doc-Tutorial-2022-01-10T1933.jpg" target="_blank"><img src="screenshots/thumbs/FS19-GIMP-Design-Doc-Tutorial-2022-01-10T1933.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 19 Screenshot"></a>

<p>
Then fields, create a new layer called "Fields" and choose RGB 255,0,0 which is red color.
</p>

<p>
Now we have few options how to draw our fields, it really depends what you want to achieve and how lazy you are (heh).
</p>

<p>
Quick mass automated way is to paint everything except our existing terrain features into fields, this works surprisingly well for those fictional american style terrains with big fields coming right up to roads and farm yards.
</p>

<p>
Free hand method is to simply use free hand selection tool with F key, draw selection for each field individually and then CTRL-, foreground fill the selection with red color. Or you could use rectangle selection tool and make those boring square fields.
</p>

<p>
The quick mass automated way is somewhat complex or tricky, in short you make selections using existing layers and colors, then invert it and paint everything red in fields layer.
</p>

<p>
Use SHIFT-O select by color, one by one select each of the layers and click the layers color. For example select forests layer and click the green forest color, all of the green pixels are now selected with "marching ants" animation. Its a bit difficult to see from a screenshot but lets try anyways.
</p>

<a href="screenshots/FS19-GIMP-Design-Doc-Tutorial-2022-01-10T1950.jpg" target="_blank"><img src="screenshots/thumbs/FS19-GIMP-Design-Doc-Tutorial-2022-01-10T1950.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 19 Screenshot"></a>

<p>
Next comes the tricky part, select farm yards layer and make sure SHIFT-O select by color option is .. well selected. Then click one of the farm yards with SHIFT-LMB which is "add to selection", if you click simply with LMB then its "create new selection" instead. Make sure you SHIFT-LMB click, now you should have forests and farm yards selected.
</p>

<a href="screenshots/FS19-GIMP-Design-Doc-Tutorial-2022-01-10T1953.jpg" target="_blank"><img src="screenshots/thumbs/FS19-GIMP-Design-Doc-Tutorial-2022-01-10T1953.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 19 Screenshot"></a>

<p>
Then go through all the remaining layers except background, you sould end up ALL the terrain feature painting colors selected.
</p>

<a href="screenshots/FS19-GIMP-Design-Doc-Tutorial-2022-01-10T1956.jpg" target="_blank"><img src="screenshots/thumbs/FS19-GIMP-Design-Doc-Tutorial-2022-01-10T1956.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 19 Screenshot"></a>

<p>
Please note that if you have several layers selected and the image resolution is very large, lets say higher than 10240 x 10240 resolution, GIMP becomes quite sluggish. Well at least it does in our i7 4790K + nvidia GTX 1060 3gb hardware computer. This is unfortunate, but expected behavior so be aware of that.
</p>

<p>
Now comes the next tricky part. We must enlarge / grow this selection by 30 pixels. Use menu select -&gt; grow.
</p>

<a href="screenshots/FS19-GIMP-Design-Doc-Tutorial-2022-01-10T2000.jpg" target="_blank"><img src="screenshots/thumbs/FS19-GIMP-Design-Doc-Tutorial-2022-01-10T2000.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 19 Screenshot"></a>

<p>
When the dialog comes up use 30 pixels. Then just hit enter or click OK and we get this nice selection done.
</p>

<a href="screenshots/FS19-GIMP-Design-Doc-Tutorial-2022-01-10T2001.jpg" target="_blank"><img src="screenshots/thumbs/FS19-GIMP-Design-Doc-Tutorial-2022-01-10T2001.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 19 Screenshot"></a>

<p>
Next we invert the selection, use menu select -&gt; invert or press CTRL-I.
</p>

<a href="screenshots/FS19-GIMP-Design-Doc-Tutorial-2022-01-10T2007.jpg" target="_blank"><img src="screenshots/thumbs/FS19-GIMP-Design-Doc-Tutorial-2022-01-10T2007.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 19 Screenshot"></a>

<p>
You can hardly see a difference in the selection but don't be alarmed. For this reason no screenshot example as it looks almost identical to the above selection image.
</p>

<p>
Then we are ready to paint, select "Fields" layer and RGB 255,0,0 color.
</p>

<a href="screenshots/FS19-GIMP-Design-Doc-Tutorial-2022-01-10T2009.jpg" target="_blank"><img src="screenshots/thumbs/FS19-GIMP-Design-Doc-Tutorial-2022-01-10T2009.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 19 Screenshot"></a>

<p>
Then press CTRL-, foreground fill, now your fields appear as red.
</p>

<a href="screenshots/FS19-GIMP-Design-Doc-Tutorial-2022-01-10T2010.jpg" target="_blank"><img src="screenshots/thumbs/FS19-GIMP-Design-Doc-Tutorial-2022-01-10T2010.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 19 Screenshot"></a>

<p>
Now would be a good time to CTRL-S save this image <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
This mass selection automated method unfortunately generates those sharp corners for the fields, on some cases it even causes "peak" narrow corners which are impossible to work with farm implements unless there are huge empty area around the corner, but in any case its highly unrealistic.
</p>

<p>
But mass selection is incredibly fast method to fill in hundreds of fields depending on terrain size and roads / features complexity.
</p>

<p>
Once fields were done I used rectangle tool to make a big selection almost all the way to terrain edges, inverted the selection and with delete key erased all the far terrain edge field painting, this way you don't have a problem with vehicles hitting the edge geometry.
</p>

<p>
To round off field corners I used select by color, clicked a field to select all red pixels, then shrink 5 pixels and grow 10 pixels, now all fields are a bit larger and corners are nice and round. This method requires you to have some extra empty space around the fields.
</p>

<p>
For fancy screenshot purpose I changed red fields color to FS19 standard fields RGB 142,119,101 so now besides farm yards and forest blobs it looks almost like felsbrunn / ravenport PDA map image, well at least color wise <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<a href="screenshots/FS19-GIMP-Design-Doc-Example-2022-01-10T2117.jpg" target="_blank"><img src="screenshots/thumbs/FS19-GIMP-Design-Doc-Example-2022-01-10T2117.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 19 Screenshot"></a>

<p>
That is all <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
GIMP Terrain Design Document tutorial was specific to GIMP painting design doc image, on other tutorial you'll learn how to use GraphicsMagick when processing GIMP exported images to <a href="terrain-giants-editor.php">Giants Editor</a> readable _weight images, unfortunately that tutorial haven't been written, the GraphicsMagick bat files haven't been finalized and released yet.
</p>

<p>
Hey don't look at me! I told you this was unfinished tutorial <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

</section>

<footer>
<p><a href="map-making-tutorial.php" class="button">PMC Farming Simulator 19 Map Making Tutorial page</a></p>
<p><a href="../index.php" class="button">PMC Farming Simulator root page</a></p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("../include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
