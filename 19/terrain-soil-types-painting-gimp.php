<!DOCTYPE html>
<html lang="en">
<head>
<title>Precision Farming Soil Types Painting in GIMP - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Precision Farming Soil Types Painting in GIMP - PMC Farming">
<META name="keywords" content="Precision, Soil, Paint, GIMP, Tutorial, PMC, Farming, FS19">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
<h1><b>Precision Farming Soil Types Painting in GIMP - PMC Farming</b></h1>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>GIMP Paint Precision Farming Soil Types</h2>

<p>
<b>2021-07-05</b> updated.
</p>

<p>
See also <a href="terrain-soil-types.php">Soil Types for Precision Farming FS19</a> tutorial how to add it to your terrain.
</p>

<p>
HOWTO <a href="https://www.gimp.org/" target="_blank">GIMP</a> paint soil types easily according to elevation for Farming Simulator 19 Precision Farming.
</p>

<ul>
<li>open grayscale heightmap image</li>
<li>rescale down to 1024 resolution using image -> scale image, use interpolation cubic</li>
<li>use image -> mode -> RGB</li>
<li>press SHIFT-O for select by color and keep threshold 15</li>
<li>make sure antialiasing is DISABLED</li>
<li>now just click on heightmap elevations and get nice areas selected for painting</li>
<li>grow selection size by adding to it with SHIFT-LMB clicks</li>
<li>use color palette change foreground color to pick RGB</li>
<li>use CTRL-, to fill with foreground color</li>
</ul>

<p>
In select by color options dialog, use mode replace or add depending of your needs.
</p>

<p>
Then just repeat the process until everything is painted with the four color types you want.
</p>

<p>
At this point save your nicely colored image to XCF so its kept safe.
</p>

<p>
Once done, GIMP export SHIFT-CTRL-E image to 1024 x 1024 resolution PNG under the "GIMP_PF_soilmap.png" filename. Then run graphicsmagick bat file as shown below.
</p>

<p>
Obviously if your heightmap is completely flat this doesn't work as it only would produce one color. Your heightmap should not be flat one RGB color unless you're creating some odd test scenario terrain.
</p>


	<h2>Recommened GIMP Human Readable Colors</h2>

<p>
There are four soil types; loamy sand, sandy loam, loam and silty clay. Here are example colors that are easy to see compared to the GRLE basically all black to human eye colors used by the final GRLE image.
</p>

<p>
I have chosen these RGB colors for my soil type design GIMP images:
</p>

<p>
Loamy Sand 254,209,80<br>
Sandy Loam 123,155,118<br>
Loam 138,126,114<br>
Silty Clay 0,42,49
</p>

<p>
In-game GRLE image uses again RGB numbers of 0,0,0 and 1,1,1 and 2,2,2 and 3,3,3 so we will use graphicsmagick to automatically convert human readable RGBs into these GRLE values, see below.
</p>

	<h2>Step by Step Tutorial</h2>

<p>
No comprende eh amigo? Okay, I'll draw you a pretty picture <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Click on the below images to make them full size high resolution.
</p>

<p>
First I use GIMP to open heightmap_L3DT.png original grayscale GE readable heightmap image. Filename in this case wont matter, yours can be called mapDE_dem.png etc.
</p>

<a href="screenshots/Tutorial-Precision-Farming-Soilmap-GIMP-Heightmap-Open.jpg" target="_blank"><img src="screenshots/thumbs/Tutorial-Precision-Farming-Soilmap-GIMP-Heightmap-Open.jpg" alt="PMC Precision Farming Soilmap GIMP Image Painting Tutorial" loading="lazy" class="terrainimg"></a>

<p>
Then I rescale the image to smaller size which Precision Farming requires (blame giants for using such ridiculously low resolution image).
</p>

<p>
Use menu image -&gt; rescale image.
</p>

<a href="screenshots/Tutorial-Precision-Farming-Soilmap-GIMP-Image-Rescale-Menu.jpg" target="_blank"><img src="screenshots/thumbs/Tutorial-Precision-Farming-Soilmap-GIMP-Image-Rescale-Menu.jpg" alt="PMC Precision Farming Soilmap GIMP Image Painting Tutorial" loading="lazy" class="terrainimg"></a>

<p>
Here I have typed in 1024 width / height and chosen interpolation "cubic". Now just click Scale button and image is scaled down to tiny console loving 1024 x 1024 resolution <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<a href="screenshots/Tutorial-Precision-Farming-Soilmap-GIMP-Image-Rescale-Cubic.jpg" target="_blank"><img src="screenshots/thumbs/Tutorial-Precision-Farming-Soilmap-GIMP-Image-Rescale-Cubic.jpg" alt="PMC Precision Farming Soilmap GIMP Image Painting Tutorial" loading="lazy" class="terrainimg"></a>

<p>
Next we need to change image mode to RGB. Use menu image -&gt; mode -&gt; RGB.
</p>

<a href="screenshots/Tutorial-Precision-Farming-Soilmap-GIMP-Image-Menu-Mode-RGB.jpg" target="_blank"><img src="screenshots/thumbs/Tutorial-Precision-Farming-Soilmap-GIMP-Image-Menu-Mode-RGB.jpg" alt="PMC Precision Farming Soilmap GIMP Image Painting Tutorial" loading="lazy" class="terrainimg"></a>

<p>
Press SHIFT-O for select by color and make sure antialiasing is DISABLED and keep threshold 15.
</p>

<a href="screenshots/Tutorial-Precision-Farming-Soilmap-GIMP-Select-By-Color.jpg" target="_blank"><img src="screenshots/thumbs/Tutorial-Precision-Farming-Soilmap-GIMP-Select-By-Color.jpg" alt="PMC Precision Farming Soilmap GIMP Image Painting Tutorial" loading="lazy" class="terrainimg"></a>

<p>
Then I start to select colors. I work from the best ground type available which is loamy sand up to the worst ground type which is silty clay, using heightmap elevations like lower areas are loamy sand and higher areas are silty clay.
</p>

<p>
I'm sure it doesn't work like this in real life but this is excellent automatic method of creating interesting looking soilmap image.
</p>

<p>
For tutorial purpose I have enlarged heightmap image to GIMP "fit image in window" using SHIFT-CTRL-J so we can see our selections and colors better.
</p>

<p>
So first I click most darkest area in our heightmap image.
</p>

<a href="screenshots/Tutorial-Precision-Farming-Soilmap-GIMP-Select-Dark-Color.jpg" target="_blank"><img src="screenshots/thumbs/Tutorial-Precision-Farming-Soilmap-GIMP-Select-Dark-Color.jpg" alt="PMC Precision Farming Soilmap GIMP Image Painting Tutorial" loading="lazy" class="terrainimg"></a>

<p>
Hmm okay not much selected in this heightmap, yours might be different, its impossible to cover all images which is obvious, I'm currently using <a href="pmc-iowa-garden-city-8km.php">PMC Iowa Garden City 8km</a> terrains original L3DT exported heightmap image.
</p>

<p>
I want to choose much more loamy sand areas, so I hold down SHIFT and LMB click to the darkest areas around my selection, basically I follow that dried up river bed towards north west. Holding down SHIFT with select by color mode active adds the selection to your existing selection.
</p>

<p>
You really need to click this next image open to a full resolution as the thumbnail wont show the selection.
</p>

<a href="screenshots/Tutorial-Precision-Farming-Soilmap-GIMP-Select-Dark-Colors-02.jpg" target="_blank"><img src="screenshots/thumbs/Tutorial-Precision-Farming-Soilmap-GIMP-Select-Dark-Colors-02.jpg" alt="PMC Precision Farming Soilmap GIMP Image Painting Tutorial" loading="lazy" class="terrainimg"></a>

<p>
That looks like a nice loamy sand soil type area. Now we start to paint it.
</p>

<p>
I click the color palette icon thing which I havent figured out good name for, there is no tooltip etc so just look at the pretty picture heh.
</p>

<a href="screenshots/Tutorial-Precision-Farming-Soilmap-GIMP-Color-Palette-Icon.jpg" target="_blank"><img src="screenshots/thumbs/Tutorial-Precision-Farming-Soilmap-GIMP-Color-Palette-Icon.jpg" alt="PMC Precision Farming Soilmap GIMP Image Painting Tutorial" loading="lazy" class="terrainimg"></a>

<p>
Click that and it bring up the actual color palette change foreground color dialog. Here we must first make sure the two buttons are activated, see below.
</p>

<img src="screenshots/GIMP-Change-Foreground-Color-Dialog.jpg" alt="PMC Precision Farming Soilmap GIMP Image Painting Tutorial" loading="lazy" class="terrainimg" >

<p>
You must click 0..255 and HSV buttons so they turn dark, active. If you do not, then GIMP uses some weird RGB colors.
</p>

<p>
Using our above human readable colors we make loamy sand as RGB 254,209,80 as seen below.
</p>

<a href="screenshots/Tutorial-Precision-Farming-Soilmap-GIMP-RGB-Loamy-Sand.jpg" target="_blank"><img src="screenshots/thumbs/Tutorial-Precision-Farming-Soilmap-GIMP-RGB-Loamy-Sand.jpg" alt="PMC Precision Farming Soilmap GIMP Image Painting Tutorial" loading="lazy" class="terrainimg"></a>

<p>
Then either use menu edit -&gt; fill with FG color, or use simply the keyboard shortcut CTRL-, (control and comma). This will paint fill everything withing our image selection with the current color. See above image.
</p>

<a href="screenshots/Tutorial-Precision-Farming-Soilmap-GIMP-Painted-Loamy-Sand.jpg" target="_blank"><img src="screenshots/thumbs/Tutorial-Precision-Farming-Soilmap-GIMP-Painted-Loamy-Sand.jpg" alt="PMC Precision Farming Soilmap GIMP Image Painting Tutorial" loading="lazy" class="terrainimg"></a>

<p>
Whee, cool eh? <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
First precision farming soil type color has been painted, excellent.
</p>

<p>
You might notice in above image that in north east corner area there are one empty black spot, apparently the black dried up river bed I started to click on was not actually the lowest point of the heightmap (meaning blackest). No big deal, I'll just LMB click that now to select it and then hit CTRL-, again to fill it.
</p>

<p>
Note: I'm hitting LMB alone not SHIFT, so it makes a new selection. You see it been painted on the next image.
</p>

<p>
Next we do one soil type above loamy sand and that is sandy loam (yes flipping these words around confuse me too, send help) <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
So I'll type in new RGB color to "Change Foreground Color" dialog, this time Sandy Loam's 123,155,118. I wont be screenshotting it as, well its just numbers in a dialog, you see it on the next image.
</p>

<p>
Then I do another soil type selection, I use SHIFT-CTRL-A to unselect everything as I still had that small black spot in NE corner selected. So I choose the next darkest color in the heightmap, click it once to select first area, then use SHIFT-LMB clicking to achieve good area selection.
</p>

<a href="screenshots/Tutorial-Precision-Farming-Soilmap-GIMP-Selected-Sandy-Loam.jpg" target="_blank"><img src="screenshots/thumbs/Tutorial-Precision-Farming-Soilmap-GIMP-Selected-Sandy-Loam.jpg" alt="PMC Precision Farming Soilmap GIMP Image Painting Tutorial" loading="lazy" class="terrainimg"></a>

<p>
Nice selection. Okay then just paint fill the current RGB color into our selection with CTRL-, again, boom, done.
</p>

<a href="screenshots/Tutorial-Precision-Farming-Soilmap-GIMP-Painted-Sandy-Loam.jpg" target="_blank"><img src="screenshots/thumbs/Tutorial-Precision-Farming-Soilmap-GIMP-Painted-Sandy-Loam.jpg" alt="PMC Precision Farming Soilmap GIMP Image Painting Tutorial" loading="lazy" class="terrainimg"></a>

<p>
Looking good, lets keep up painting some of them colors, two more soil types to go.
</p>

<p>
Next we do exactly the same thing, type in Loam 138,126,114 RGB colors to color palette, unselect previous selection and make a new selection, I wont be screenshotting it this time as you can see it from the painted image and then paint it again using CTRL-, keys.
</p>

<a href="screenshots/Tutorial-Precision-Farming-Soilmap-GIMP-Painted-Loam.jpg" target="_blank"><img src="screenshots/thumbs/Tutorial-Precision-Farming-Soilmap-GIMP-Painted-Loam.jpg" alt="PMC Precision Farming Soilmap GIMP Image Painting Tutorial" loading="lazy" class="terrainimg"></a>

<p>
Nice. One more soil type to go, exactly the same procedure for Silty Clay 0,42,49 RGB colors and whatnot.
</p>

<a href="screenshots/Tutorial-Precision-Farming-Soilmap-GIMP-Painted-Silty-Clay.jpg" target="_blank"><img src="screenshots/thumbs/Tutorial-Precision-Farming-Soilmap-GIMP-Painted-Silty-Clay.jpg" alt="PMC Precision Farming Soilmap GIMP Image Painting Tutorial" loading="lazy" class="terrainimg"></a>

<p>
Boom, there you go, all four precision farming soil types painted in, great! <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Now I close color palette dialog as its not needed anymore and unselect the last selection with CTRL-A.
</p>

<p>
At this time we save GIMP native XCF image of what we have painted, we wouldn't want to lose it. Hit CTRL-S to save and when GIMP asks for filename give it XCF extension, personally I use GIMP_precision_farming_soil_types.xcf filename but you can choose whatever proper filename you want.
</p>

<p>
Final step in GIMP is to export this image and for that we MUST use <b>GIMP_PF_soilmap.png</b> filename. So hit SHIFT-CTRL-E for export image, and type (or copy-paste) that filename exactly, of course make sure you wont do duplicate .png.png extension to the exported image heh.
</p>

<p>
Now you can close current image by CTRL-W.
</p>

<p>
Next we are using graphicsmagick to generate GE readable PNG image automatically. Trust me there would be so many steps to jump through if you wanted to do all this in GIMP, graphicsmagick is beautiful as its single click of a button to run this BAT file.
</p>

<p>
From below grab the code and save it to _run_graphicsmagick_create_soilmap.bat (I might add actual .bat file to download if people find making new files in windows difficult?).
</p>

<p>
Then simply double click _run_graphicsmagick_create_soilmap.bat so it runs and... you see some text on the screen like below.
</p>

<a href="screenshots/Tutorial-Precision-Farming-Soilmap-GraphicsMagick-Bat.jpg" target="_blank"><img src="screenshots/thumbs/Tutorial-Precision-Farming-Soilmap-GraphicsMagick-Bat.jpg" alt="PMC Precision Farming Soilmap GIMP Image Painting Tutorial" loading="lazy" class="terrainimg"></a>

<p>
Soilmap.png image has been created for you if everything went well, now you are ready to bring in this image into GE.
</p>

<p>
All done, congratulations for painting your Precision Farming custom soilmap image! <img src="../images/smileys/icon_biggrin.gif" alt="Smiley :D" loading="lazy">
</p>


	<h2>GraphicsMagick Create Soil Map</h2>

<p>
Requires GIMP painted human readable (see above) RGB colors using GIMP_PF_soilmap.png in the directory. This batch file uses <a href="http://www.graphicsmagick.org/" target="_blank">GraphicsMagick</a> to convert your PNG into GE readable format.
</p>

<p>
_run_graphicsmagick_create_soilmap.bat
</p>
<pre>
@echo off
if not exist GIMP_PF_soilmap.png goto PNGsMissing
md temp-png-conversion
cd temp-png-conversion
set MAGICK_TMPDIR=C:\PMC.Temp.Swap\GraphicsMagick

rem -fill DESTINATION COLOR
rem -opaque SOURCE COLOR
echo ID 0
gm convert ..\GIMP_PF_soilmap.png -fill "rgb(0, 0, 0)" -opaque "rgb(254, 209, 80)" id0.png
echo ID 1
gm convert id0.png -fill "rgb(1, 1, 1)" -opaque "rgb(123, 155, 118)" id1.png
echo ID 2
gm convert id1.png -fill "rgb(2, 2, 2)" -opaque "rgb(138, 126, 114)" id2.png
echo ID 3
gm convert id2.png -fill "rgb(3, 3, 3)" -opaque "rgb(0, 42, 49)" id3.png

echo converting to 256 color 8 bit 256color.png ...
gm convert id3.png -colors 256 -depth 8 -compress none 256color.png
echo converting to grayscale grayscale.png ...
gm convert 256color.png -colorspace GRAY grayscale.png

copy grayscale.png ..\soilmap.png
cd ..
rd /q /s temp-png-conversion
echo All done :)
pause
exit

:PNGsMissing:
echo some PNGs are missing, aborting.
pause
exit
</pre>

<p>
That above _run_graphicsmagick_create_soilmap.bat will check if GIMP_PF_soilmap.png is present in the current directory and will exit if it isn't. When its done running you have a new "soilmap.png" image ready to be used in <a href="terrain-giants-editor.php">Giants Editor</a>. See <a href="terrain-soil-types.php">Soil Types Precision Farming tutorial</a> how to add soilmap to your terrain.
</p>

<p>
If something went wrong and you do not get soilmap.png or it will "not work" in GE, then just jump at the beginning of this tutorial and try again, you must have missed some part or made some sort of mistake. Remember that you cannot just copy soilmap.png over and expect it to work as-is, you must edit your terrain project files as explained in <a href="terrain-soil-types.php">Soil Types Precision Farming tutorial</a> page.
</p>

<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("/var/www/include/footer-start.php"); ?>
<p><a href="map-making-tutorial.php" class="button">PMC Farming Simulator Map Making Tutorial page</a></p>
<p><a href="../index.php" class="button">PMC Farming Simulator root page</a></p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("/var/www/include/footer-end.php"); ?>
<?php include("/var/www/include/support.php"); ?>
<?php include("/var/www/include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
