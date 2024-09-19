<!DOCTYPE html>
<html lang="en">
<head>
<title>Developer Diary PMC Ohio Alger 10km Farming Simulator 22 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Developer Diary PMC Ohio Alger 10km Farming Simulator 22 - PMC Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
	<h1>Developer Diary PMC Ohio Alger 10km Farming Simulator 22 - PMC Farming</h1>

<p>
This is <a href="pmc-ohio-alger-10km.php">PMC Ohio Alger 10km</a> terrain dev diary for Farming Simulator 22 (FS22).
</p>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
<?php include("/var/www/include/support.php"); ?>
	<h2>2023-03-12 From One To Many</h2>

<p>
2023-03-12T00:46:00Z New editing day has started, todays goal is to place a farm yard, a simple one farm yard and then go from there. What I mean by this is that if I try to finish object placement today it wont happen as this task will take days if not weeks to complete because its a large 10.2km terrain with possibly hundreds of farm yards (or houses by the roads), this is very demoralizing to face such an taunting task. So I have to proceed relaxed, calmly, just one at the time not worrying about what happens after the one I'm editing.
</p>

<p>
But first I restored the good original v0.2.1 because current version was the sexy corn, soybeans and wheat fields _density image screenshot version. I simply deleted PMC_Ohio_Alger_10km/ terrain project dir and then unpacked the original v0.2.1 7-zip backup, done, now the _density painted version is like it never happened <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
I remember from my previous editing session that I forgot to place one new building there because it was not featured in US NAIP source but on google/maps todays version you can see it from both satellite imagery and from streetview, well it got added now, its fixed.
</p>

<p>
Was looking at "location001" which is the first populated place coming down OH-235 road from Alger city, I was baffled how poorly it was made, felt like HALF of the trees were missing and some trees were simply out of place, how can this be, I mean it was the very first FS22 real world data farm yard I created so okay guess I'm allowed some slack for the work quality but still man, that was some sloppy work almost as if I wrapped it up before it was finished hmm, oh well I'm going to fix it now.
</p>

<p>
2023-03-12T02:10:00Z Now location001 buildings and trees have been fixed, added the one missing building and then tons, very roughly speaking half more trees got created. Now this location should be very close to be finished with the obvious caviat of not having proper building 3D models for well most buildings but that is not something I can fix.
</p>

<p>
Location002 was OK, but added two missing maple trees to location003, its now fixed.
</p>

<p>
Here is a location in <a href="https://www.google.com/maps/@40.6900563,-83.8568256,189m/data=!3m1!1e3" target="_blank">google/maps</a> which has no buildings and faded out driveway, however in my older US NAIP image there are farm house and two or maybe three buildings next to it, hmm.
</p>

<p>
Added the above locations trees to location004 transformgroup for now. Need to figure out what shall be done with the buildings, most likely wont place them as they do not appear in 2022/2023 google/maps imagery.
</p>

<p>
2023-03-12T02:28:00Z Hmm doing good progress today even though I started today with wuss attitude of "lets make one farm yard only" <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Well OK I have not technically done that one farm yard yet, just been fixing my mess of editing from previous days <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
The reason I go through these previous days edits is because I want to GIMP paint over US NAIP image into "buildings placed" layer using red color and big pencil, to mark all the locations that have already been created. I know that few weeks from now when editing has been going on it is hard to recall which locations are already done, like when you start a new day and open this project in GE, how do you know where is the next farm yard you need to create, well sure you should remember them, but in this size terrain and after weeks of editing not to mention weeks of break from editing... yeah it ain't gonna happen, so this coordination image for buildings placed is excellent tool to guide me.
</p>

<p>
Added one missing building, two missing pine trees and one missing smaller tree to location007.
</p>

<p>
New tree patches placed on the field edges, actually its more like middle of the fields when you look at google/maps imagery, but farming simulator wise we unfortunately have to leave direct edge between fields otherwise they get drawn together, hmm.
</p>

Google/maps:
<a href="screenshots/PMC-Ohio-Alger-10km-2023-03-12T0252.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Ohio-Alger-10km-2023-03-12T0252.jpg" alt="Farming Simulator 22 Terrain - PMC Ohio Alger 10km Screenshot" class="terrainimg" loading="lazy"></a>

Giants Editor:
<a href="screenshots/PMC-Ohio-Alger-10km-2023-03-12T0249.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Ohio-Alger-10km-2023-03-12T0249.jpg" alt="Farming Simulator 22 Terrain - PMC Ohio Alger 10km Screenshot" class="terrainimg" loading="lazy"></a>

<p>
2023-03-12T02:53:00Z Alright I am very happy with todays progress, absolutely no guilty feeling about slacking, well not that I should have such in the first place after spending all that time explaining my editing habits before starting this project, but still you know... <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Also, perhaps even subconsiously... I wanted to have some progress done right after the big xr-renegade twitch live stream announcement just so it doesn't look like all editing ended as soon as terrain was mentioned in a big live stream <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
I actually want to get xr-renegades farms and fields done so I could start to do some farming there, perhaps even place all his farm equipment and try to farm just like him <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Hmm that reminds me, I have to ask him where do I get those mod equipment he uses, links to them, assuming they are available for download. Xr, when you read this, send me them mod links <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
2023-03-12T03:03:00Z Fixed location010, there was a pine tree line in the N side which I mistakenly created as usual oak/maple trees previously, replaced it now with pines. Also deleted one stray normal tree N side of the vehicle shed as well.
</p>

<p>
2023-03-12T03:17:00Z On location012, my first ever culvert in Farming Simulator games <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<a href="screenshots/PMC-Ohio-Alger-10km-2023-03-12T0316.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Ohio-Alger-10km-2023-03-12T0316.jpg" alt="Farming Simulator 22 Terrain - PMC Ohio Alger 10km Screenshot" class="terrainimg" loading="lazy"></a>

<p>
Plan is not to do such useless decorations, but it was just so easy to plug it in there so decided to do it heh.
</p>

<p>
2023-03-12T03:23:00Z But now, a quick break, already done much more than I planned to today even though haven't done that one brand new farm yard yet, but so far good progress so now a quick breather.
</p>

<p>
2023-03-12T05:59:00Z Just finished lunch break and that is a good spot to end previous break as well, back to google/maps and GE, gonna be stamping down some objects. Actually turning camera around just after starting my break I spotted on the horizon Bev's farm the southerm most field areas, yes there are still several farm yards in between but at least its can already be seen which is nice, not too much to do before OH-235 is done.
</p>

<p>
2023-03-12T06:27:00Z Created location015 which is a brand new farm yard with house, two vehicle sheds and bunch of trees.
</p>

<p>
2023-03-12T07:45:00Z Finished creating location016 with the additional forest patch nearby.
</p>

Google/maps:
<a href="screenshots/PMC-Ohio-Alger-10km-2023-03-12T0742.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Ohio-Alger-10km-2023-03-12T0742.jpg" alt="Farming Simulator 22 Terrain - PMC Ohio Alger 10km Screenshot" class="terrainimg" loading="lazy"></a>

Giants Editor:
<a href="screenshots/PMC-Ohio-Alger-10km-2023-03-12T0744.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Ohio-Alger-10km-2023-03-12T0744.jpg" alt="Farming Simulator 22 Terrain - PMC Ohio Alger 10km Screenshot" class="terrainimg" loading="lazy"></a>

<p>
2023-03-12T08:15:00Z And got location017 done, nice setup with house, two vehicle sheds, two grain bin silos and then pine and regular trees.
</p>

<p>
2023-03-12T08:48:00Z Created location018 which was quite various with object selection, unfortunately as already whined many times, with a single giants mapUS elmcreek vehicle shed it is just painful to create those nice white ohio buildings, but yeah.
</p>

<a href="screenshots/PMC-Ohio-Alger-10km-2023-03-12T0850.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Ohio-Alger-10km-2023-03-12T0850.jpg" alt="Farming Simulator 22 Terrain - PMC Ohio Alger 10km Screenshot" class="terrainimg" loading="lazy"></a>

<p>
2023-03-12T12:50:00Z Okay had a lunch break plus some research / studying time for other than editing stuff, now back in GE browsing to a new farm yard location.
</p>

<p>
2023-03-12T13:04:00Z And the next farm yard done, this one had three grain bin silos and three vehicle sheds, well one was cattle shed, one of the vehicle sheds was actually just about TPF shed size but with routine I just did it with mapUS elmcreek placeholder.
</p>

<p>
Okay one step closer to the southern location again, nice.
</p>

<p>
2023-03-12T13:34:00Z Now finished location020 was had few buildings but mostly trees, almost wilderness alike area. Hmm now got to admit I'm getting not exhausted but can just feel that enthuasism run on low supply, but hey gotta remember that todays editing goal was to make a one (1) farm yard and oh boy how many have I made so far, so today has been in that context an excellent editing day <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2023-03-12T14:44:00Z Decided to call it a night, still have two hours in my day left but it just feels right to call it here without trying to push into the last minutes. Now going to do some web work to get this dev diary added to its own page and also update posted to PMC forum development topic, this also takes a moment with screenshots and all.
</p>

<p>
Continue reading <a href="dev-diary-pmc-ohio-alger-10km-009.php">next page</a>, back to <a href="dev-diary-pmc-ohio-alger-10km.php">Dev Diary PMC Ohio Alger 10km Homepage</a> or <a href="dev-diary-pmc-ohio-alger-10km-007.php">previous page</a>.
</p>

<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("/var/www/include/footer-start.php"); ?>
<p>
<a href="pmc-terrains.php" class="button">PMC Terrains FS22</a>
<a href="changelog-pmc-ohio-alger-10km.php" class="button">Changelog PMC Ohio Alger 10km</a>
<a href="screenshots-pmc-ohio-alger-10km.php" class="button">Screenshots PMC Ohio Alger 10km</a>
<a href="pmc-ohio-alger-10km.php" class="button">PMC Ohio Alger 10km</a>
<a href="../index.php" class="button">PMC Farming Simulator root page</a>
</p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("/var/www/include/footer-end.php"); ?>
<?php include("/var/www/include/support.php"); ?>
<?php include("/var/www/include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
