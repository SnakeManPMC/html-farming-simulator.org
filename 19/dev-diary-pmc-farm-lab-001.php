<!DOCTYPE html>
<html lang="en">
<head>
<title>Developer Diary PMC Farm Lab Farming Simulator 19 PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Developer Diary PMC Farm Lab Farming Simulator 19 PMC Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
<h1>Developer Diary PMC Farm Lab Farming Simulator 19 PMC Farming</h1>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>2019-03-13 Creating PMC Farm Lab</h2>

<p>
<i>Special note: technically this dev diary got started in 2021-02-14 but I have now added as many of the historical facts here I could find in my local notes.</i>
</p>

<p>
This terrain was initially created on 2019-03-13 or at least that is the oldest known record of me talking about needing to create this kind of mod testing terrain.
</p>

<p>
Below are italic text what I discussed with few farmsim community members back in 2019-03-13.
</p>

<p>
<i>
[10:10 PM] Snake Man: during developing terrains been of course monitoring new mods being released, today was mod testing day and I've been on it for hours now. when you test dozens of new mods, I use felsbrunn as it feels kind of quick for testing... it really gets old to jump through all hoops for every possible testing scenario.<br>
[10:12 PM] Snake Man: that gave me idea... create a new terrain specifically designed for new mod testing. so it would feature every possible game feature, every crop and field state, logging part, etc everything. all this build around vehicle shop so there is nothing to make your testing taking any longer than buying vehicle/implement and taking off to the task it was designed for.<br>
[10:12 PM] Snake Man: what do you guys think? <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy"><br>
[10:32 PM] Roozsta: @Snake Man if you make that I will use it a ton.  I test mods a lot.<br>
[10:33 PM] Snake Man: we need to come up with a "feature list" to cover each use case for mod testing.<br>
[10:35 PM] Snake Man: hmm different crops like wheat and potatoes need different vehicles, but is there point of adding like wheat and barley, I mean whats the difference really, texture and yield?<br>
[10:36 PM] Roozsta: Yeah no difference<br>
[10:36 PM] Roozsta: I can totally help come up with a feature list<br>
[10:37 PM] Roozsta: Honestly gonna sound weird but it needs a long drag strip for testing trucks and cars too<br>
[10:41 PM] Snake Man: sure long road for hauling <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy"><br>
[10:41 PM] MrMarcel5: set cruise control & go to sleep <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy"><br>
[10:44 PM] Roozsta: Needs beets/potatoes, corn, wheat, large grassy area, a BGA, a forest, flat area for placing test buildings<br>
[10:44 PM] Roozsta: A shop with a large lot helps when you buy lots of things at once to test<br>
[10:46 PM] Roozsta: Having already set out animal areas would help a lot for testing animal equipment.<br>
[10:47 PM] Roozsta: Silos where you could just get grain to mix and stuff without having to edit the save file to get it<br>
[10:48 PM] Snake Man: good points, keep 'em coming! <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy"><br>
[10:52 PM] Roozsta: Fields that aren’t planted yet and are already cultivated would be great for testing planters<br>
[10:52 PM] Roozsta: Fields should be close to the shop so minimal driving with slow tractors is necessary<br>
[10:53 PM] Roozsta: Not necessary<br>
[10:53 PM] Roozsta: Maybe a bumpy area for testing suspension settings<br>
[10:53 PM] Snake Man: my initial idea was vehicle shop in the middle and fields extending out right next to it just for this reason. but obviously you made a good point about large enough lot so can buy 10x seed hawk at once.<br>
[10:55 PM] Snake Man: also maybe built-in fertilizer (solid/liquid), lime and seed sellpoints with cheap price of free (is free possible? well at least some 0.0000001 if completely free is not heh).<br>
[10:57 PM] Snake Man: like right now I'm testing three new (for me) planters and already sighing about needing to buy seed/fert in felsbrunn heh<br>
[11:00 PM] village80: Michigan is close. Buy the field and put a house near the shop. No hills though so testing weight / power isn't great.<br>
[11:05 PM] Roozsta: Yeah sell points for all that stuff that costs nothing would be so good
</i>
</p>

<p>
Here is a quick description of the terrain:
</p>

<p>
Terrain specifically designed for new mod testing, not for gaming. It would include every possible game feature, every unique crop type and field state, forestry logging, etc everything. All this built around vehicle shop so there is nothing to make your testing taking any longer than buying vehicle/implement and taking off to the task it was designed for. Quick and Easy!
</p>

<p>
Really important feature would be very light weight, small, fast, quick loading and absolutely error free terrain. Small file size as well, properly optimized without any extra fluff. This terrain is not meant to be pretty or playable, its meant for testing and testing only.
</p>

<p>
Features in alphabetical order:
</p>
<ul>
<li>BGA</li>
<li>animal areas already set for large amounts of animals, manure, slurry and other products</li>
<li>auto cheat money 100 million (not sure if this can be done through terrain XML)</li>
<li>bumpy / hilly area for testing engine horse power, suspension etc when pulling different size implements</li>
<li>field in cultivated and ploughed state for testing planters, sprayers etc</li>
<li>field of huge size because for example slurry spreading scale testing on tiny field you run out of field right away</li>
<li>fields ready to harvest crops; corn, wheat, potatoes, sugar beets</li>
<li>flat empty area for placing building placeables</li>
<li>forest / logging area</li>
<li>grain bin silos with all types of crops placed in them, plus empty crop space as well to test trailer tipping</li>
<li>grass</li>
<li>if possible (I dont know if it can be done through terrain), add piles of bales both round and square, for grass, hay, silage and straw</li>
<li>if possible add field with straw swaths, same for grass and hay (this would be really cool but no idea if it can be done from terrain, might need a savegame)</li>
<li>long road for large / fast truck trailer, car etc vehicle driving testing</li>
<li>pallets for testing telehandlers, front loaders, trailers, etc everything to do with moving small items around</li>
<li>silo of sorts with sells (cheap) special products like manure, slurry, grass, hay, straw, silage</li>
<li>stations for selling fertilizer solid/liquid, lime and seeds, if possible free of charge (unless we can setup 100 million starter money)</li>
<li>vehicle shop with a large enough yard / plot so you can purchase many vehicles/items at once</li>
<li>water source, old school style a river or a lake</li>
</ul>

	<h2>2020-12-14 New 1.2km Design</h2>

<p>
Initially this terrain was 2km x 2km size, then at some point I wanted to optimize it, make it more light weight and also to show people that you are not forced to use 2, 4, 8.1 and 16.3 kilometer terrain sizes, so decided to go with 1.2km size on 2020-12-14.
</p>

<p>
New 1.2km design. Heightmap 512 x 512, cell size 2.5m == 1280 meter terrain. Image resolutions, density 2048, weight 1024.
</p>

<p>
Actually after creating it I just used the default sizes density 4096 x 4096 pixel resolution and weight 2048 x 2048 pixel resolution images.
</p>


	<h2>2021-02-14 Quick modDesc storeItems Fix</h2>

<p>
2021-02-14T23:09:00Z Was testing rand0msparks placeable meridian fuel and bulk bins and got that familiar error after placing first object, which means I'm missing modDesc storeItems entries, oops.
</p>

<p>
Added those in and now placeables work fine again. Really bad that such bug got into release version but that's what happens when you have no testing team to verify these things (if you want to help test PMC terrains <a href="../contact.php">contact us</a>).
</p>

<p>
Changed modDesc.xml to v1.3.
</p>

<p>
Continue reading <a href="dev-diary-pmc-farm-lab-002.php">next page</a> or go back to <a href="dev-diary-pmc-farm-lab.php">Dev Diary PMC Farm Lab Home</a>.
</p>

<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("/var/www/include/footer-start.php"); ?>
<p>
<a href="pmc-terrains.php" class="button">PMC Terrains FS19</a>
<a href="pmc-farm-lab.php" class="button">PMC Farm Lab</a>
<a href="dev-diary-pmc-farm-lab.php" class="button">Dev Diary PMC Farm Lab</a>
<a href="changelog-pmc-farm-lab.php" class="button">Changelog PMC Farm Lab</a>
<a href="screenshots-pmc-farm-lab.php" class="button">Screenshots PMC Farm Lab</a>
<a href="../index.php" class="button">PMC Farming Simulator root page</a>
</p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("/var/www/include/footer-end.php"); ?>
<?php include("/var/www/include/support.php"); ?>
<?php include("/var/www/include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
