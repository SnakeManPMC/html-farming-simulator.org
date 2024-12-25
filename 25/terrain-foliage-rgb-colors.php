<!DOCTYPE html>
<html lang="en">
<head>
<title>Foliage RGB Colors Farming Simulator 25 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Foliage RGB Colors Farming Simulator 25 - PMC Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
	<h1>Foliage RGB Colors Farming Simulator 25 - PMC Farming</h1>

<p>
Terrain Foliage RGB Colors Farming Simulator 25 (FS25), grass, flowers, shrubbery and bushes painting by PMC.
</p>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
<?php include("/var/www/include/support.php"); ?>
	<h2>Foliage RGB Colors FS25</h2>

<p>
2024-12-08T16:28:21Z
</p>

<p>
FS25 <a href="editing/giants-editor.php">Giants Editor</a> v10.0.3 terrain foliage RGB colors on mapUS source files template. Tutorials HOWTO paint cultivator_density.png and fruit_density.png images in GIMP can be found from <a href="../19/terrain-cultivator_density-gimp.php">GIMP paint cultivator_density</a>, <a href="../19/terrain-cultivator-fruit-density-roads.php">cultivator_density and roads painting in GIMP</a> and <a href="../19/terrain-fruit_density-gimp.php">fruit_density painting in GIMP</a> pages.
</p>

<p>
What I did was took mapUS 2km terrain, erased everything and set heightmap elevation to 100m flat. Then took a 2500 meter square brush, selected foliage editing mode, chose foliage (window) -&gt; foliage (section) -&gt; foliage layer -&gt; meadow and layer state -&gt; greenSmall, then clicked once at 0,0 coordinates painting the whole 2km terrain as greenSmall foliage. Saved GE mapUS.i3d project and exited.
</p>

<p>
GRLEConverter converted densityMap_fruits.gdm to PNG, opened it up in GIMP, used color picker to click anywhere in the image, then opened "change foreground color" dialog and saw that this color is RGB 67,0,0 value.
</p>

<p>
Below is all the foliage that matters, some not so regularly used crops are not listed, same as the new peas and rice whatever things. Many of the crops I did had "Small" and "Small2" type growth stage names, RGB values were different for these but the 3d model/plane texture was identical, so I didn't bother listing other than greenMiddle, harvestReady, dead and harvested, as these are the ones that could be used the most, if you must use other colors then you can find them yourself, would be nice if you shared them in <a href="https://www.pmctactical.org/forum/" target="_blank">PMC Tactical Forum</a> if you do the research.
</p>


	<h2>densityMap_fruits</h2>

<p>
This is called <b>fruit_density.gdm</b> in FS19, never forget where you're coming from.
</p>

<p>
densityMap_fruits.png RGB - description:
</p>
<pre>
3,0,0 - meadow "nothing" in combination with terrainDetail Stubble Tillage
35,0,0 - meadow invisible
67,0,0 - meadow greenSmall
99,0,0 - meadow greenMiddle
131,0,0 - meadow harvestReady
163,0,0 - meadow cut
195,0,0 - meadow cutRolled
33,0,0 - decoFoliage smallDenseMix
65,0,0 - decoFoliage smallRumex
97,0,0 - decoFoliage apera
129,0,0 - decoFoliage whiteTallWeed
161,0,0 - decoFoliage greenTallWeed
193,0,0 - decoFoliage cirsium
225,0,0 - decoFoliage papaverRhoeas
1,1,0 - decoFoliage rumex
33,1,0 - decoFoliage grassSmall
65,1,0 - decoFoliage grassMedium
97,1,0 - decoFoliage grassCut
129,1,0 - decoFoliage coneflower
161,1,0 - decoFoliage slenderMountainMint
193,1,0 - decoFoliage wildBergamot
225,1,0 - decoFoliage prairieBlazingStar
34,0,0 - decoBushUS common01
66,0,0 - decoBushUS common02
98,0,0 - decoBushUS common03
130,0,0 - decoBushUS dynamite01
162,0,0 - decoBushUS dynamite02
194,0,0 - decoBushUS dynamite03
226,0,0 - decoBushUS pawpaw01
2,1,0 - decoBushUS pawpaw02
34,1,0 - decoBushUS pawpaw03
66,1,0 - decoBushUS waterElm01
98,1,0 - decoBushUS waterElm02
130,1,0 - decoBushUS waterElm03
162,1,0 - decoBushUS wingedSumac
194,1,0 - decoBushUS witchHazel01
226,1,0 - decoBushUS witchHazel02
36,0,0 - forestPlants dry branches
68,0,0 - forestPlants clovers
100,0,0 - forestPlants starflower
132,0,0 - forestPlants bunchberry
164,0,0 - forestPlants salmonBerryBush
196,0,0 - forestPlants starryFalseSolomonSe(text cuts off here)
228,0,0 - forestPlants swordFern
4,1,0 - forestPlants deerFern
36,1,0 - forestPlants grass
68,1,0 - forestPlants riceLongGrainDeco
37,0,0 - waterPlants typhaLatifoliaSmall
69,0,0 - waterPlants typhaLatifoliaMedium
101,0,0 - waterPlants typhaLatifoliaLarge
133,0,0 - waterPlants miscanthusSinensisSmall
165,0,0 - waterPlants miscanthusSinensisMedium
197,0,0 - waterPlants miscanthusSinensisLarge
229,0,0 - waterPlants stipaTenuissimaSmall
5,1,0 - waterPlants stipaTenuissimaLarge
38,0,0 - grass invisible
70,0,0 - grass greenSmall
102,0,0 - grass greenMiddle
134,0,0 - grass harvestReady
166,0,0 - grass cut
198,0,0 - grass cutRolled
71,0,0 - wheat greenSmall
103,0,0 - wheat greenSmall2 (looks exactly the same as greenSmall)
135,0,0 - wheat greenMiddle
167,0,0 - wheat greenMiddle2 (looks exactly the same as greenMiddle)
199,0,0 - wheat greenBig
231,0,0 - wheat greenBig2 (looks exactly the same as greenBig)
7,1,0 - wheat harvestReady
39,1,0 - wheat dead
71,1,0 - wheat harvested
168,0,0 - canola greenMiddle
40,1,0 - canola harvestReady
72,1,0 - canola dead
104,1,0 - canola harvested
137,0,0 - barley greenMiddle
9,1,0 - barley harvestReady
73,1,0 - barley harvested
106,0,0 - maize greenMiddle
170,0,0 - maize harvestReadyGreen
234,0,0 - maize harvestReady3
10,1,0 - maize dead
42,1,0 - maize harvestedGreen
74,1,0 - maize harvested
139,0,0 - potato greenMiddle
203,0,0 - potato harvestReady
235,0,0 - potato dead
11,1,0 - potato harvested
43,1,0 - potato cutHaulm
140,0,0 - sugarBeet greenMiddle
12,1,0 - sugarBeet harvestReady
44,1,0 - sugarBeet dead
76,1,0 - sugarBeet harvested
108,1,0 - sugarBeet cutHaulm
110,0,0 - soybean greenMiddle
238,0,0 - soybean harvestReady
14,1,0 - soybean dead
46,1,0 - soybean harvested
</pre>


	<h2>densityMap_ground</h2>

<p>
This is called <b>cultivator_density.gdm</b> in FS19, old school elite.
</p>

<p>
densityMap_ground.png RGB - description:
</p>
<pre>
1,0,0 - terrainDetail Stubble Tillage
2,0,0 - terrainDetail Cultivated
3,0,0 - terrainDetail Seedbed
4,0,0 - terrainDetail Plowed
5,0,0 - terrainDetail RolledSeedbed
6,0,0 - terrainDetail Ridge
7,0,0 - terrainDetail Sown
8,0,0 - terrainDetail Direct Sown
9,0,0 - terrainDetail Planted
10,0,0 - terrainDetail Ridge (Sown)
11,0,0 - terrainDetail Rollerlines
12,0,0 - terrainDetail Harvest-Ready
13,0,0 - terrainDetail Harvest-Ready Other
14,0,0 - terrainDetail Grass (this is like field texture for grass, NOT the actual 3d grass model/texture)
15,0,0 - terrainDetail Grass (Cut)
</pre>


	<h2>densityMap_groundFoliage</h2>

<p>
This <b>densityMap_groundFoliage.gdm</b> file is brand new FS25 stuff, never used before in farmsim game series. Giants separated the big bush objects from the small grass, flower and shrubbery type foliage. Makes sense, but they should have done this already back in FS19.
</p>

<p>
densityMap_groundFoliage.png RGB - description:
</p>
<pre>
1,0,0 - decoBush Small
2,0,0 - decoBush Medium
3,0,0 - decoBush Big
4,0,0 - decoBush Super Big
5,0,0 - decoBush Blueberry Short
6,0,0 - decoBush Blueberry Small
7,0,0 - decoBush Blueberry Medium
8,0,0 - decoBush Blueberry Big
9,0,0 - decoBush Blueberry Tall
10,0,0 - decoBush Boxwood Small
11,0,0 - decoBush Boxwood Medium
12,0,0 - decoBush Boxwood Big
13,0,0 - decoBush Hazelnut Small
14,0,0 - decoBush Hazelnut Medium
15,0,0 - decoBush Hazelnut Big
</pre>

<p>
Its kind of nice that Giants Engine v10 now separates large bushes into their own groundFoliage image, looks like you can now paint small bushes, flowers and shrubbery separately so you should have small stuff in the ground level and then these larger bushes 3D model alike type things on the higher up, difficult to explain. But to me this feels like slight progress, I like it. Guess Giants can do at least <i>something</i> right in 2024 <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("/var/www/include/footer-start.php"); ?>
<?php include("../include/fs25-terrain-editing-tutorial-footer.php"); ?>
<?php include("/var/www/include/footer-end.php"); ?>
<?php include("/var/www/include/support.php"); ?>
<?php include("/var/www/include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
