<!DOCTYPE html>
<html lang="en">
<head>
<title>Farmland Painting Gimp Farming Simulator 19 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Farmland Painting Gimp Farming Simulator 19 - PMC Farming">
<META name="keywords" content="Terrain, Farmland Painting Gimp, PMC, Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<!-- google ads -->
<?php include("../include/google-ads.php"); ?>
<h1><b>PMC Farming Simulator Terrain Farmland Painting Gimp</b></h1>
</header>

<section>
<p>
	<h2>Farmland Painting Gimp</h2>

<p>
<b>2019-05-01</b> This page is very much work in progress, so far we have succesfully painted one (ohio wheatville 4km) farmland image with this method. Note you need graphicsmagick to convert the colors automatically.
</p>
	
<p>
Channel 63 for roads as well triggers etc other places that players cannot own. Do this in gimp with the road painting thing.
</p>

<p>
_farmland.grle is a grayscale image. Colors are in sequential order like 0,0,0 and 1,1,1 and 2,2,2 and 3,3,3 etc etc.
</p>

<p>These colors would be extremely difficult to paint as-is in gimp because they are so dark and similar to each other (like 0,0,0 and 1,1,1 looks just black to a human eye), you must use like graphicsmagick to swap the colors automatically into some bright high contrast to each other colors so you can see the edges clearly and easily.
</p>

<p>
Simple example list of RGB colors you can use, feel free to use any colors you like the best but then you need to adjust the graphicsmagick batch file accordingly.
</p>

<pre>
0,0,255
0,255,255
25,0,0
50,0,0
50,50,0
50,50,50
100,0,0
100,100,0
100,100,100
150,0,0
150,150,0
150,150,150
200,0,0
200,200,0
200,200,200
255,0,0
255,255,0
255,255,255
</pre>

<p>
Paint your farmland image on top of the satellite image, when done make sure its grayscale and correct resolution you plan on using, then save to Sourcefarmland.png file name.
</p>

<p>
_run_graphicsmagick_farmland_color_swap.bat:
</p>
<pre>
@echo off
if not exist Sourcefarmland.png goto PNGsMissing
md temp-png-conversion
set MAGICK_TMPDIR=%CD%\temp-png-conversion

rem -fill DESTINATION COLOR
rem -opaque SOURCE COLOR
gm convert Sourcefarmland.png -fill "rgb(18, 18, 18)" -opaque "rgb(0, 0, 255)" _newfarmland1.png
gm convert _newfarmland1.png -fill "rgb(1, 1, 1)" -opaque "rgb(0, 255, 255)" _newfarmland2.png
gm convert _newfarmland2.png -fill "rgb(2, 2, 2)" -opaque "rgb(25, 0, 0)" _newfarmland3.png
gm convert _newfarmland3.png -fill "rgb(3, 3, 3)" -opaque "rgb(50, 0, 0)" _newfarmland4.png
gm convert _newfarmland4.png -fill "rgb(4, 4, 4)" -opaque "rgb(50, 50, 0)" _newfarmland5.png
gm convert _newfarmland5.png -fill "rgb(5, 5, 5)" -opaque "rgb(50, 50, 50)" _newfarmland6.png
gm convert _newfarmland6.png -fill "rgb(6, 6, 6)" -opaque "rgb(100, 0, 0)" _newfarmland7.png
gm convert _newfarmland7.png -fill "rgb(7, 7, 7)" -opaque "rgb(100, 100, 0)" _newfarmland8.png
gm convert _newfarmland8.png -fill "rgb(8, 8, 8)" -opaque "rgb(100, 100, 100)" _newfarmland9.png
gm convert _newfarmland9.png -fill "rgb(9, 9, 9)" -opaque "rgb(150, 0, 0)" _newfarmland10.png
gm convert _newfarmland10.png -fill "rgb(10, 10, 10)" -opaque "rgb(150, 150, 0)" _newfarmland11.png
gm convert _newfarmland11.png -fill "rgb(11, 11, 11)" -opaque "rgb(150, 150, 150)" _newfarmland12.png
gm convert _newfarmland12.png -fill "rgb(12, 12, 12)" -opaque "rgb(200, 0, 0)" _newfarmland13.png
gm convert _newfarmland13.png -fill "rgb(13, 13, 13)" -opaque "rgb(200, 200, 0)" _newfarmland14.png
gm convert _newfarmland14.png -fill "rgb(14, 14, 14)" -opaque "rgb(200, 200, 200)" _newfarmland15.png
gm convert _newfarmland15.png -fill "rgb(15, 15, 15)" -opaque "rgb(255, 0, 0)" _newfarmland16.png
gm convert _newfarmland16.png -fill "rgb(16, 16, 16)" -opaque "rgb(255, 255, 0)" _newfarmland17.png
gm convert _newfarmland17.png -fill "rgb(17, 17, 17)" -opaque "rgb(255, 255, 255)" _newfarmland18.png
gm convert _newfarmland18.png -colors 256 -depth 8 -compress none _finalfarmland1.png
gm convert _finalfarmland1.png -colorspace GRAY _finalfarmland2.png
gm convert _finalfarmland2.png -filter point -resize 2048x2048 PMC_Ohio_Wheatville_4km_farmland.png

rd temp-png-conversion
echo All done :)
pause
exit

:PNGsMissing:
echo some PNGs are missing, aborting.
pause
exit
</pre>

</section>

<footer>
<p><a href="map-making-tutorial.php" class="button">PMC Farming Simulator Map Making Tutorial page</a></p>
<p><a href="../index.php" class="button">PMC Farming Simulator root page</a></p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("../include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
