<!DOCTYPE html>
<html lang="en">
<head>
<title>Farmland Image Painting GIMP - PMC Farming Simulator 19</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Farmland Image Painting GIMP - PMC Farming Simulator 19">
<META name="keywords" content="Terrain, Farmland, Image, Painting, GIMP, GraphicsMagick, PMC, Farming, Simulator, FS19">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<!-- google ads -->
<?php include("../include/google-ads.php"); ?>
<h1><b>Farmland Image Painting GIMP - PMC Farming Simulator 19</b></h1>
</header>

<section>
<p>
	<h2>HOWTO Paint Farmland Image In GIMP</h2>

<p>
<b>2022-02-02T10:41:00Z</b> Updated.
</p>

<p>
Note that depending on your terrain size and number of farm yards and fields, you probably need to increase farmland ID channels from 64 to 127 or maybe even to 255. See <a href="terrain-farmland-channels.php">Farmland ID Channels Tutorial</a> page.
</p>
	
<p>
_farmland.grle is a grayscale image. RGB colors are in sequential order like 0,0,0 and 1,1,1 and 2,2,2 and 3,3,3 etc.
</p>

<p>
These RGB colors would be extremely difficult to paint in <a href="https://www.gimp.org/" target="_blank">GIMP</a> because they are so dark and similar to each other (like 0,0,0 and 1,1,1 looks just black to a human eye). You should use GIMP to paint bright easily seen different colors and then <a href="http://www.graphicsmagick.org" target="_blank">GraphicsMagick</a> to swap the bright colors automatically into GE readable _farmland image RGB colors.
</p>

<a href="screenshots/Tutorial-Farmland-Image-Painting-GIMP-Greendale.jpg" target="_blank"><img src="screenshots/thumbs/Tutorial-Farmland-Image-Painting-GIMP-Greendale.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 19 Screenshot"></a>

<p>
GraphicsMagick also handles all the under the hood image format stuff automatically for you, no need to worry about alpha channels, is it RGB or grayscale, how many bits and bots and whatnots, its all automatic baby <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

	<h2>Do Not Use Giants Editor</h2>

<p>
Do not use <a href="terrain-giants-editor.php">Giants Editor</a> (GE) to paint farmland image because GE sucks. Any work you can do outside GE is a win for you. Use GIMP instead, its free and open source image editing program which makes FS19 image editing very easy. Editing farmland image in GIMP gives you full control and ease of future edits.
</p>

	<h2>GIMP Painting Farmland Image Using cultivator_density</h2>

<p>
First open <a href="terrain-cultivator_density-gimp.php">cultivator_density painting image</a> with the background satellite imagery. If you have a fictional terrain then perhaps you have PDA/mapview image of your own from a <a href="terrain-design-document.php">terrain design document</a> perhaps.
</p>

<a href="screenshots/Tutorial-Farmland-Image-Painting-GIMP-Cultivator-Density.jpg" target="_blank"><img src="screenshots/thumbs/Tutorial-Farmland-Image-Painting-GIMP-Cultivator-Density.jpg" class="terrainimg" loading="lazy" alt="Farmland Image Painting in GIMP Cultivator Density"></a>

<p>
Make sure its in RGB mode, use image -&gt; mode -&gt; RGB if its not.
</p>

<img src="screenshots/GIMP-Image-Mode-RGB.jpg" class="imgresponsive" loading="lazy" alt="GIMP Image Mode RGB">

<p>
Create "Farmland" layer, you can obviously name it how ever you want. It should be on top of the layers stack but if it isn't, move it there.
</p>

<img src="screenshots/Tutorial-Farmland-Image-Painting-GIMP-Layers.jpg" class="imgresponsive" loading="lazy" alt="Farmland Image Painting in GIMP Layers">

<p>
Now switch back to cultivator_density layer, then press U for fuzzy select mode. Disable antialiasing, feather edges, select transparent areas, sample merged and leave threshold to default 15.
</p>

<img src="screenshots/GIMP-Fuzzy-Select-Options.jpg" class="imgresponsive" loading="lazy" alt="GIMP Fuzzy Select Options">

<p>
Making sure cultivator_density layer is selected click on any of your fields which if you followed PMC cultivator_density painting guide should be RED color (RGB 255,0,0) but the color doesn't matter, just click on one of your fields.
</p>

<p>
Now the field edge is selected all nice and tidy.
</p>

<a href="screenshots/Tutorial-Farmland-Image-Painting-GIMP-Fuzzy-Select.jpg" target="_blank"><img src="screenshots/thumbs/Tutorial-Farmland-Image-Painting-GIMP-Fuzzy-Select.jpg" class="terrainimg" loading="lazy" alt="Farmland Image Painting in GIMP Fuzzy Select"></a>

<p>
As we want this to be farmland buy land area and the field to be enjoyable to work like cultivating or fertilizing etc without "you dont have access to this land" warnings, we increase the selection size.
</p>

<p>
Use menu select -&gt; grow.
</p>

<img src="screenshots/GIMP-Select-Grow.jpg" class="imgresponsive" loading="lazy" alt="GIMP Select Grow">

<p>
Type in value 5 pixels, then click OK.
</p>

<img src="screenshots/GIMP-Select-Grow-5-Pixels.jpg" class="imgresponsive" loading="lazy" alt="GIMP Select Grow 5 Pixels">

<p>
Now your field has nice buffer zone around it with the selection.
</p>

<a href="screenshots/Tutorial-Farmland-Image-Painting-GIMP-Buffer-Selection.jpg" target="_blank"><img src="screenshots/thumbs/Tutorial-Farmland-Image-Painting-GIMP-Buffer-Selection.jpg" class="terrainimg" loading="lazy" alt="Farmland Image Painting in GIMP Buffer Selection"></a>

<p>
Next click the color palette umm icon or whatever it is illustrated here.
</p>

<img src="screenshots/GIMP-Color-Palette-Icon.jpg" class="imgresponsive" loading="lazy" alt="GIMP Color Palette Icon">

<p>
On change foreground color dialog make sure "0..255" and "HSV" are selected, click them to be sure. Then just choose RGB color using the R, G and B values.
</p>

<p>
Use our <a href="terrain-farmland-painting-gimp-rgb-list.php">Farmland GIMP Painting RGB Color Copy-paste List</a> page to get the colors.
</p>

<img src="screenshots/GIMP-Foreground-Color-Palette.jpg" class="imgresponsive" loading="lazy" alt="GIMP Foreground Color Palette">

<p>
Next select farmland layer or whatever you called it, also make sure its not hidden so you can see whats there.
</p>

<a href="screenshots/Tutorial-Farmland-Image-Painting-GIMP-Selected-Layer.jpg" target="_blank"><img src="screenshots/thumbs/Tutorial-Farmland-Image-Painting-GIMP-Selected-Layer.jpg" class="terrainimg" loading="lazy" alt="Farmland Image Painting in GIMP Selected Layer"></a>

<p>
Now fill in the selection using CTRL-, which is control and comma keys together.
</p>

<a href="screenshots/Tutorial-Farmland-Image-Painting-GIMP-CTRL.jpg" target="_blank"><img src="screenshots/thumbs/Tutorial-Farmland-Image-Painting-GIMP-CTRL.jpg" class="terrainimg" loading="lazy" alt="Farmland Image Painting in GIMP CTRL-,"></a>

<p>
Done <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Next is to continue do further farmland areas, so loop back this page up to "Now switch back to cultivator_density layer," and continue the same way until all your fields are painted.
</p>

<a href="screenshots/Tutorial-Farmland-Image-Painting-GIMP-Done.jpg" target="_blank"><img src="screenshots/thumbs/Tutorial-Farmland-Image-Painting-GIMP-Done.jpg" class="terrainimg" loading="lazy" alt="Farmland Image Painting in GIMP"></a>

<p>
Once farmland image has been painted, use CTRL-SHIFT-E "export as..." to satellite_texture_farmland.png file name.
</p>

	<h2>GraphicsMagick Farmland Processing</h2>

<p>
After the hard work of painting farmland image on top of satellite or other source image is done, we use GraphicsMagick to automatically convert and process the image into GE readable format.
</p>

<p>
Download PMC.Graphicsmagick.Farmland.2022-02-02.7z <a href="magnet:?xt=urn:btih:2ea7bf81114123682066f35bfb8f4f472b4031e6&xt=urn:btmh:1220326fedcaec3108246181e4dbb344e52a9588668824d0150756fbf01fb9c53093&dn=Batch.Files.And.Scripts.2024-03-18&tr=udp%3a%2f%2ftracker.opentrackr.org%3a1337%2fannounce&tr=udp%3a%2f%2ftracker.openbittorrent.com%3a6969%2fannounce">Batch.Files.And.Scripts.2024-03-18 Torrent Magnet</a> and unpack it to the same directory your GIMP farmland XCF image is located.
</p>

<p>
This 7-zip contains _run_graphicsmagick_create_farmland.bat file. Execute this bat file and if it finds satellite_texture_farmland.png in the same directory it will start processing it, otherwise you'll get an error and the batch file aborts.
</p>

<p>
While its processing you see CMD.EXE dos box command prompt dialog which has a lot of ID numbers flashing by, once its done press any key to close it.
</p>

<img src="screenshots/Tutorial-Farmland-Image-Painting-GIMP-GraphicsMagick-Done.png" class="imgresponsive" loading="lazy" alt="GraphicsMagick Farmland Processing Done">

<p>
Now you should have new farmland.png image file in the dir. If all went well and you didn't make any RGB mistakes in GIMP, this farmland.png can be directly used in GE.
</p>

<p>
Done, for real <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
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
