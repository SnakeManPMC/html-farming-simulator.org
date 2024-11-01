<!DOCTYPE html>
<html lang="en">
<head>
<title>Engine Interview Ground Deformation Farming Simulator 25 (FS25) Pre-Release News - PMC Farming</title>
<LINK href="../../css.css" rel=stylesheet type="text/css">
<META name="description" content="Engine Interview Ground Deformation Farming Simulator 25 (FS25) Pre-Release News - PMC Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("../../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
	<h1>Engine Interview Ground Deformation Farming Simulator 25 Pre-Release News</h1>

<p>
Engine ground deformation for Farming Simulator 25 (FS25), and Giants Software employee Senior Software Engineer Eddie Edwards interview where he explains many things about himself and FS25 ground deformation new engine feature.
</p>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
<?php include("/var/www/include/support.php"); ?>
	<h2>Engine Interview Ground Deformation FS25</h2>

<p>
</p>
Preview & Engine Interview: Ground Deformation. -Source <a href="https://www.farming-simulator.com/newsArticle.php?news_id=569" target="_blank">Giants website blog</a>.

<p>
<i>
It's not a secret anymore, that the ground in Farming Simulator 25 will deform. But you want some details, don't you? Well, go and get some!
</i>
</p>

<p>
<i>
Alongside new screenshots visualizing how the ground will deform, Senior Software Engineer Eddie Edwards from GIANTS Software will go further into detail on how it actually works.
</i>
</p>

<img src="screenshots/Ground-Deformation-19.jpg" class="terrainimg" loading="lazy" alt="FS25 Engine Interview Ground Deformation Farming Simulator 25 Screenshot" title="FS25 Engine Interview Ground Deformation Farming Simulator 25 Screenshot">

<p>
<i>
Eddie, tell us about you and your position first - what’s your role?
</i>
</p>

<p>
<i>
I’m one of the Senior Engine Programmers for Farming Simulator. I’ve been at GIANTS since the early days of FS13. I created the original PlayStation 3 port, and I have been responsible for other ports of the GIANTS Engine to PS4, PS5, Switch and iOS. I’m very much “the PlayStation guy” at the company, but I also work on cross-platform engine technology such as Density Maps, rendering, shader compiler, some physics, audio, etc.
</i>
</p>

<p>
<i>
There’s not much in the GIANTS Engine that I haven’t worked on to some extent over the last 12 years! And in particular, of course, I created the new technologies that bring us ground deformation for FS25 - the improved Density Map system, the new terrain geometry system, and the terrain virtual texturing system.
</i>
</p>


<h2>Firmness & Viscosity How the Ground Deforms</h2>

<p>
<i>
Depending on the ground type, the deformation and compression of the soil is dependent on multiple factors. Take a look!
</i>
</p>

<a href="screenshots/Ground-Deformation-06.jpg" target="_blank"><img src="screenshots/thumbs/Ground-Deformation-06.jpg" class="terrainimg" loading="lazy" alt="FS25 Engine Interview Ground Deformation Farming Simulator 25 Screenshot" title="FS25 Engine Interview Ground Deformation Farming Simulator 25 Screenshot"></a>

<a href="screenshots/Ground-Deformation-12.jpg" target="_blank"><img src="screenshots/thumbs/Ground-Deformation-12.jpg" class="terrainimg" loading="lazy" alt="FS25 Engine Interview Ground Deformation Farming Simulator 25 Screenshot" title="FS25 Engine Interview Ground Deformation Farming Simulator 25 Screenshot"></a>

<a href="screenshots/Ground-Deformation-10.jpg" target="_blank"><img src="screenshots/thumbs/Ground-Deformation-10.jpg" class="terrainimg" loading="lazy" alt="FS25 Engine Interview Ground Deformation Farming Simulator 25 Screenshot" title="FS25 Engine Interview Ground Deformation Farming Simulator 25 Screenshot"></a>

<a href="screenshots/Ground-Deformation-18.jpg" target="_blank"><img src="screenshots/thumbs/Ground-Deformation-18.jpg" class="terrainimg" loading="lazy" alt="FS25 Engine Interview Ground Deformation Farming Simulator 25 Screenshot" title="FS25 Engine Interview Ground Deformation Farming Simulator 25 Screenshot"></a>

<a href="screenshots/Ground-Deformation-08.jpg" target="_blank"><img src="screenshots/thumbs/Ground-Deformation-08.jpg" class="terrainimg" loading="lazy" alt="FS25 Engine Interview Ground Deformation Farming Simulator 25 Screenshot" title="FS25 Engine Interview Ground Deformation Farming Simulator 25 Screenshot"></a>

<p>
<i>
Which factors define how the ground deforms?
</i>
</p>

<p>
<i>
Eddie: A number of factors affect this. Firstly, every ground type has a different level of “firmness” and “viscosity”. Tarmac cannot be deformed at all, for instance, while mud can be deformed a lot (due to different “firmness”), and driving on snow instantly crushes it, while driving on mud causes it to compress over a longer time (due to different “viscosity”).  Also, if the ground is wet, this affects the deformation as well.
</i>
</p>

<p>
<i>
Which vehicle you are driving also affects the deformation - the weight of the tractor and the width of its tires both affect the reaction of the terrain. And a slower-moving vehicle will sink faster than a fast-moving vehicle.
</i>
</p>

<a href="screenshots/Ground-Deformation-04.jpg" target="_blank"><img src="screenshots/thumbs/Ground-Deformation-04.jpg" class="terrainimg" loading="lazy" alt="FS25 Engine Interview Ground Deformation Farming Simulator 25 Screenshot" title="FS25 Engine Interview Ground Deformation Farming Simulator 25 Screenshot"></a>

<a href="screenshots/Ground-Deformation-01.jpg" target="_blank"><img src="screenshots/thumbs/Ground-Deformation-01.jpg" class="terrainimg" loading="lazy" alt="FS25 Engine Interview Ground Deformation Farming Simulator 25 Screenshot" title="FS25 Engine Interview Ground Deformation Farming Simulator 25 Screenshot"></a>

<a href="screenshots/Ground-Deformation-02.jpg" target="_blank"><img src="screenshots/thumbs/Ground-Deformation-02.jpg" class="terrainimg" loading="lazy" alt="FS25 Engine Interview Ground Deformation Farming Simulator 25 Screenshot" title="FS25 Engine Interview Ground Deformation Farming Simulator 25 Screenshot"></a>

<a href="screenshots/Ground-Deformation-03.jpg" target="_blank"><img src="screenshots/thumbs/Ground-Deformation-03.jpg" class="terrainimg" loading="lazy" alt="FS25 Engine Interview Ground Deformation Farming Simulator 25 Screenshot" title="FS25 Engine Interview Ground Deformation Farming Simulator 25 Screenshot"></a>

<p>
<i>
How does ground deformation affect gameplay? What will players “feel”? 
</i>
</p>

<p>
<i>
For the first time, FS25 gives a real physical response from the terrain - you will feel the tractor bumping over the ground, and you will see it creating ruts and tracks, and if you go back and drive over those ruts and tracks you will feel the effect from them as well.
</i>
</p>

<p>
<i>
It is also harder to steer if you have dug into the ground, just as it is in real life. Driving in rain will be more difficult than driving when it is sunny. Your tire configuration now has a greater effect, too, and you may need to consider which tires are best to use for different seasons and different types of field work.
</i>
</p>

<img src="screenshots/Ground-Deformation-15.gif" class="terrainimg" loading="lazy" alt="FS25 Engine Interview Ground Deformation Farming Simulator 25 Screenshot" title="FS25 Engine Interview Ground Deformation Farming Simulator 25 Screenshot">

<a href="screenshots/Ground-Deformation-09.jpg" target="_blank"><img src="screenshots/thumbs/Ground-Deformation-09.jpg" class="terrainimg" loading="lazy" alt="FS25 Engine Interview Ground Deformation Farming Simulator 25 Screenshot" title="FS25 Engine Interview Ground Deformation Farming Simulator 25 Screenshot"></a>

<a href="screenshots/Ground-Deformation-05.jpg" target="_blank"><img src="screenshots/thumbs/Ground-Deformation-05.jpg" class="terrainimg" loading="lazy" alt="FS25 Engine Interview Ground Deformation Farming Simulator 25 Screenshot" title="FS25 Engine Interview Ground Deformation Farming Simulator 25 Screenshot"></a>


<h2>The Fun of Plowing, Plowing on another level</h2>

<p>
<i>
While the deformation on the soil is individual to the machines, their weight and other conditions, one field activity in particular will probably feel a whole lot different in Farming Simulator 25.
</i>
</p>

<p>
<i>
What kind of machines/equipment will showcase ground deformation best?
</i>
</p>

<p>
<i>
Plowing is a new experience now - the plow creates real physical furrows which can not only be seen more clearly on screen but also affects the tractor when driving over them.  Also, machines with caterpillar tracks come into their own now, as they can handle uneven ground so well.
</i>
</p>

<a href="screenshots/Ground-Deformation-13.jpg" target="_blank"><img src="screenshots/thumbs/Ground-Deformation-13.jpg" class="terrainimg" loading="lazy" alt="FS25 Engine Interview Ground Deformation Farming Simulator 25 Screenshot" title="FS25 Engine Interview Ground Deformation Farming Simulator 25 Screenshot"></a>

<a href="screenshots/Ground-Deformation-16.jpg" target="_blank"><img src="screenshots/thumbs/Ground-Deformation-16.jpg" class="terrainimg" loading="lazy" alt="FS25 Engine Interview Ground Deformation Farming Simulator 25 Screenshot" title="FS25 Engine Interview Ground Deformation Farming Simulator 25 Screenshot"></a>

<a href="screenshots/Ground-Deformation-17.jpg" target="_blank"><img src="screenshots/thumbs/Ground-Deformation-17.jpg" class="terrainimg" loading="lazy" alt="FS25 Engine Interview Ground Deformation Farming Simulator 25 Screenshot" title="FS25 Engine Interview Ground Deformation Farming Simulator 25 Screenshot"></a>

<a href="screenshots/Ground-Deformation-14.jpg" target="_blank"><img src="screenshots/thumbs/Ground-Deformation-14.jpg" class="terrainimg" loading="lazy" alt="FS25 Engine Interview Ground Deformation Farming Simulator 25 Screenshot" title="FS25 Engine Interview Ground Deformation Farming Simulator 25 Screenshot"></a>


<h2>Performance, Visuals & Challenges</h2>

<a href="screenshots/Ground-Deformation-11.jpg" target="_blank"><img src="screenshots/thumbs/Ground-Deformation-11.jpg" class="terrainimg" loading="lazy" alt="FS25 Engine Interview Ground Deformation Farming Simulator 25 Screenshot" title="FS25 Engine Interview Ground Deformation Farming Simulator 25 Screenshot"></a>

<a href="screenshots/Ground-Deformation-07.jpg" target="_blank"><img src="screenshots/thumbs/Ground-Deformation-07.jpg" class="terrainimg" loading="lazy" alt="FS25 Engine Interview Ground Deformation Farming Simulator 25 Screenshot" title="FS25 Engine Interview Ground Deformation Farming Simulator 25 Screenshot"></a>

<p>
<i>
The ground deformation works on a grid size of 12.5cm which works out to 16K x 16K for a 2km map (that’s 256 megapixels - the map itself is only 4 megapixels). There were various technical challenges with storing this data efficiently, and also with processing the data efficiently, for instance when tools like cultivators or plows work on the fields, and when vehicles drive over the fields and react to these fine-scale bumps and ridges.
</i>
</p>

<p>
<i>
There is also a “procedural” level of ground deformation, which is mapped with geometry in a similar way to how the terrain is texture-mapped with images, except it runs on the CPU instead of on the faster GPU, so we had to heavily optimize this code.
</i>
</p>

<p>
<i>
How is ground deformation data stored and managed?
</i>
</p>

<p>
<i>
Since ground deformation works at a higher resolution than we’ve dealt with before we wanted to save memory in areas which are not deformed (e.g. on rocky mountains, or in places where the player has not yet been), so we created a “sparse” version of the Density Maps.  This stores tiles of data only in regions where deformation actually exists. Furthermore, to reduce memory footprint even more, the tiles are all compressed, using a more advanced version of the existing Density Map compression that we’ve used in the past.
</i>
</p>

<p>
<i>
Additionally, to support fast operations on this high-resolution data we created a Density Map Processing Unit (DPU) which is like a little GPU emulator that runs on the CPU, and is capable of performing operations on Density Maps at much higher speeds than previously.  It can actually be programmed using our in-house shader language, although this feature is not used in FS25 yet.
</i>
</p>

<p>
<i>
For speed, the whole system (data compression, DPU operations, and procedural generation) is written using native SIMD instructions (SSE4.1 or AVX2 on PC and consoles, and NEON on ARM-based Macs).  There is far more SIMD-optimized code in this version of Farming Simulator than we’ve ever had before.
</i>
</p>

<p>
<i>
Tell us about how you optimized deformation physics for performance?
</i>
</p>

<p>
<i>
In previous versions of Farming Simulator the custom vehicle physics was dealing with terrain at a resolution of 0.5m. With terrain deformation and displacement, the resolution is now 0.125m - 4x greater in each direction, or 16x as many triangles.  This made our wheel vs terrain collision detection 16x slower, so we wrote a custom implementation of this for FS25 which is approximately thirty times faster than the old code, so overall our vehicle physics is now about twice as fast as before, even with all the new features.
</i>
</p>

<p>
<i>
The new physics code involved some quite heavy math and numerical analysis - fortunately I have a Master’s Degree in Mathematics, which helped me a lot on this task!
</i>
</p>

<p>
<i>
How does the game handle visual transitions for ground deformation?
</i>
</p>

<p>
<i>
Another new feature for FS25 is the terrain quadtree mesh, which enables high resolution triangle rendering near the player but uses a lower resolution further away - there is no need to render the deformed geometry when it is hundreds of meters away.
</i>
</p>

<p>
<i>
The geometry smoothly morphs from deformed to not-deformed some distance from the player.  However, this transition is quite well hidden because of another new technology in FS25, which is the terrain virtual texture system.
</i>
</p>

<p>
<i>
Although deformation is not rendered in the distance using triangles, it is still shaded and rendered into the terrain texture (using a graphics technique called normal mapping). So the deformation is still clearly visible, even on distant areas where the rendered triangle count is very low, and you can see the tracks left by the AI vehicles even if you are watching them from half a kilometer away!
</i>
</p>

<p>
<i>
What do you personally like most about ground deformation in the game?
</i>
</p>

<p>
<i>
It was a very rewarding experience to implement all these new technologies, and I love the fact that the result is not only a better visual experience for the player, but also that it interacts with physics and gameplay in such interesting ways, making FS25 a much more interesting and realistic “simulator” than ever before!
</i>
</p>

<p>
Youtube <a href="https://www.youtube.com/watch?v=8hwimCW2hkQ" target="_blank">Ground Deformation in 25 Seconds | Farming Simulator 25</a> video.
</p>

<p>
See also <a href="engine.php">FS25 Engine</a> page for more details on engine upgrades.
</p>

<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("/var/www/include/footer-start.php"); ?>
<p>
<a href="../../index.php" class="button">PMC Farming Simulator index page</a>
<a href="index.php" class="button">FS25 Pre-Release News</a>
</p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("/var/www/include/footer-end.php"); ?>
<?php include("/var/www/include/support.php"); ?>
<?php include("/var/www/include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
