<!DOCTYPE html>
<html lang="en">
<head>
<title>Giants Broke Large Terrains Farming Simulator 25 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Giants Broke Large Terrains Farming Simulator 25 - PMC Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
	<h1>Giants Broke Large Terrains Farming Simulator 25 - PMC Farming</h1>

<p>
How Giants broke large terrains in Farming Simulator 25 (FS25) by PMC.
</p>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
<?php include("/var/www/include/support.php"); ?>
	<h2>Large Terrains Background</h2>

<p>
<i>Those who do not learn from the experience of history are doomed to repeat it.</i> Sorry for the long read, I'm a history buff, what can I tell ya <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Back in FS17 and FS19 we ("we" as in the farmsim community) had the performance issue with bad freeze alike stutters when trying to create large terrains with huge GDM, GRLE and _weight images forcing you to use smaller images which cause no freezes.
</p>

<p>
<b>Farming Simulator 17 (FS17)</b>
</p>

<p>
In FS17 people were making just 2km, 4km and 8.1km terrains. To my knowledge nobody did 16.3km terrain, or at least I cant recall one being released, I experimented with one and have a youtube video from 2018 <a href="https://www.youtube.com/watch?v=-oHDt15nzUo" target="_blank">16384 Meter Size Terrain 2018-07-09 Farming Simulator 17</a> to show its progress.
</p>

<p>
<b>Farming Simulator 19 (FS19)</b>
</p>

<p>
Soon after I started to learn FS19 terrain editing I discovered unitsPerPixel but unfortunately at that time I already created all those 8.1km size <a href="../19/pmc-terrains.php">PMC Terrains FS19</a> otherwise I would have created various sizes.
</p>

<p>
I released <a href="../19/pmc-eternal-sugar-beet-damnation-32km.php">PMC Eternal Sugar Beet Damnation 32km</a> terrain and while it was working in-game, the GDM/GRLE/weight image resolutions were so low relatively speaking that in-game experience was 60FPS but "crop accuracy (pixels)" and ground detail textures were so low that I highly doubt anyone would actually enjoy playing terrain like that.
</p>

<p>
My most famous and biggest FS19 terrain is <a href="../19/pmc-grande-gardens-16km.php">PMC Grande Gardens 16km</a> which is legitimate 16.3 kilometers x 16.3 kilometers terrain with enough object details. Some other users after reading my tutorials released some 16.3km terrains, but I recall you could count those with fingers on one hand, there were just really a few ones, as I'm typing this I can actually remember only one.
</p>

<p>
So the whole FS19 community was in general terms 2km, 4km, 8.1km and few 16.3km ones, plus probably one or two 10.2km terrains, overall community even after my best efforts in chat, forum and my website tutorials, were still living in the the "4km map" stone age. Greetings for those few individual developers who created 16.3km and 10.2km terrains, you have my admiration and respect, always.
</p>

<p>
<b>Farming Simulator 22 (FS22)</b>
</p>

<p>
All this got fixed with FS22 game engine updates, it added CPU multi core multi threaded tech which allows basically any size of terrain images being loaded without performance issue. This allowed terrain developers world wide to create all their huge dream terrains of various sizes. It was glorious time to be a farmsim terrain dev! <img src="../images/smileys/icon_mrgreen.gif" alt="Smiley :mrgreen:" loading="lazy">
</p>

<p>
FS22 saw ONLY, yes, ONLY, irregular size unitsPerPixel usage from me in <a href="../22/pmc-terrains.php">PMC Terrains FS22</a>, I never created 2km, 4km, 8.1km or 16.3km terrains for FS22 (yes I created test versions privately but nothing got released).
</p>

<p>
Few brave individuals did various irregular size terrains like <a href="https://afb-mapping.itch.io/fs22-spring-creek-12km" target="_blank">ARG_Afb Spring Creek 12km</a> terrain, <a href="https://www.google.com/search?q=farming+simulator+22+big+fields+xxl+zoltanm" target="_blank">Zoltanm 10.2km</a> and I know few others who got irregular size terrain source files from me but so far I have not seen releases made on them yet. In FS22 we did see good progress on community developers using all kinds of terrain sizes not limiting them to the stupid 2-4-8-16 power of two sizes, that was absolutely wonderful to see, however bulk of the community made terrains were still little girlie men sizes and using those power of two ancient way of thinking sizes.
</p>


	<h2>Giants Broke Large Terrains FS25</h2>

<p>
Then comes the dreaded FS25 release with "Giants Engine v10", well lets begin by saying that Giants broke <a href="../19/terrain-unitsperpixel.php">unitsPerPixel</a> as that now causes ground detail textures (from _weight image pixels) to turn into low resolution blur. New feature in giants engine v10 is ground deformation which was a big driver for giants FS25 advertising leading to the release, its my speculation but makes perfect sense, that ground deformation is the thing that broke large terrains, it ties itself into terrain config and image files so deeply and most likely is what causes over 20 gigabytes (GB) of system RAM usage (memory usage) on 8.1km terrains, making then unusable (its unrealistic to ask your players to upgrade 16gb RAM computer just for your terrain mod).
</p>

<p>
If you want to dig deeper into large terrains being broken in FS25 you should definitely read through my dev diaries and PMC Tactical Forum topics, there is plenty of read but if you really want to understand the issue its highly recommdend read.
</p>

<p>
Forum topics: <a href="https://www.pmctactical.org/forum/viewtopic.php?t=23035" target="_blank">PMC Tactical Forum "Giants Editor v10 for Farming Simulator 25" topic</a> which covers Giants Editor (GE) v10, <a href="https://www.pmctactical.org/forum/viewtopic.php?t=23057" target="_blank">PMC Tactical Forum "FS25 unitsPerPixel bug report submitted" topic</a>, information about bug reporting and then the big <a href="https://www.pmctactical.org/forum/viewtopic.php?t=23033" target="_blank">PMC Tactical Forum "Terrain Editing daily updates while waiting for Giants Editor v10 release" topic</a> where several experienced terrain devs are discussing issues with large FS25 terrains.
</p>

<p>
Dev diaries: <a href="dev-diary-my-first-terrain.php" target="_blank">Dev Diary My First Terrain for FS25</a> is about Notepad++ text based editing before GE v10.0.1 release and <a href="dev-diary-large-terrain-studies.php" target="_blank">Dev Diary Large Terrain Studies FS25</a> with GE leading up to conclusion with v10.0.3 release of the editor.
</p>

<p>
There are plenty of reading material but if you are dedicated maybe even hardcore terrain dev, you will love to read those for all the experiences I had in the early days of FS25 release and the terrain research discoveries.
</p>

<p>
Now if you happen to know something I don't, if you managed to get terrain over 10km in-game FS25 and without issues, please share the knowledge and post into <a href="https://www.pmctactical.org/forum/" target="_blank">PMC Tactical Forum</a>, it would be much appreciated, the whole community benefits from shared knowledge.
</p>


	<h2>Conclusion</h2>

<p>
<i>The terrains are gone and I've got the blues...</i> Large terrains wont work and none, not a single one, of my terrains can be ported to from FS22 to FS25. Nobody in the community has provided solution or a fix of any sorts how to run large terrains, nobody I've met has any info.
</p>

<p>
What happens next? Well my speculation is that ground deformation is the root cause here and if that is true, it is extremely unlikely that Giants would fix it as its such a core piece of advertised and hyped new FS25 game feature. What I mean by fixing is that in order to Giants to fix it would pretty much mean to take it off and you know it as well as I do that Giants are definitely not going to do that just to fix large terrains.
</p>

<p>
However maybe I'm wrong and the issues explained above are from some other cause and Giants would fix them, nothing would make me more happier regarding FS25 than that to happen, but lets just say that I've given up on FS25, I've gone back to FS22 as explained in <a href="https://www.pmctactical.org/forum/viewtopic.php?t=23050" target="_blank">PMC Tactical Forum "Back to the roots, baby!" topic</a>. I will keep monitoring news on FS25 from Giants and the community, but I simply don't see myself ever playing FS25 if the largest terrain is an insulting 4 kilometers x 4 kilometers (or over 20gb RAM hogging 8.1km). This, makes me extremely sad <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
Only thing to bring joy to my life are all the fabulous user made large and my own PMC terrains I get to enjoy in FS19 and FS22 <img src="../images/smileys/icon_cool.gif" alt="Smiley :cool:" loading="lazy">
</p>

<p>
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
