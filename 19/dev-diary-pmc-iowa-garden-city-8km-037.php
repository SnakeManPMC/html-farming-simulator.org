<!DOCTYPE html>
<html lang="en">
<head>
<title>Developer Diary PMC Iowa Garden City 8km FS19 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Developer Diary PMC Iowa Garden City 8km FS19 - PMC Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<h1><b>Developer Diary PMC Iowa Garden City 8km FS19 - PMC Farming</b></h1>
</header>

<section>
	<h2>2021-07-14 Asphalt Road 3D Mesh Recreation</h2>

<p>
2021-07-14T15:44:00Z New editing day has been started hour or so ago, been studying that dreaded SplineStreetConstructor (SSC) program, plan today is to fix PMC Iowa Garden City 8km roads using it. Well the idea is to fix roads what ever means possible but SSC seems like the method I know most right now. In perfect world I would need to create road 3d meshes with modo but that would be yet another layer of studying on top of everything else, so SSC it is.
</p>

<p>
First I deleted existing roads which were a bit hastily made. Then restored the original Global Mapper and L3DT exported heightmap DEM image so the road elevation and ditches are removed. Restarted GE just in case the heightmap 4096 to 4097 saving didn't load properly (cant never be too sure with GE).
</p>

<p>
Moved old asphalt road splines into transformgroup and made it invisible, they are now retired into backup state, if my plan works then they will be permantently deleted.
</p>

<p>
Then started to create the longest north to south road which runs through garden city itself. Uuh another long spline to create.
</p>

<p>
2021-07-14T16:08:00Z N/S spline created from north to south direction, I made it from just a few control vertexes so this will be kind of experiment how it comes out, I doubt it needs more of them but we'll see how it looks.
</p>

<p>
Used SSC to create road mesh and by miracle it worked using the default setting it had. No idea which texture goes along with it, shows road_diffuse.dds but there are no such texture along with SSC download.
</p>

<p>
Took roadSolid.dds from BlueWeb's tutorial files, copied it to maps/textures/ directory and used material editor to set albedo texture path and file name to this texture, it shows up OK in GE. So far so good.
</p>

<p>
Exported railRoadBarriers out of mapUS. Initially I thought there was that kind of railroad crossing object which allows vehicles to smoothly run over the tracks but there was no such thing, I think mapUS tracks have no geometry hmm.
</p>

<p>
Imported railroadBarriers and placed them next to dealership crossing. Then took a look at trainSystem.xml for railroadCrossings and was basically taking wild guess how rootNode etc work, my first assumption is that it matches GE index path value, so I used that. Will be interesting to see what happens when bringing it in-game.
</p>

<p>
2021-07-14T17:05:00Z First railroadBarrier aka railroad crossing in-game test... was a failure <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<pre>
2021-07-14 16:58   Error: Failed to find child 14 from node trainSystem, only 1 childs given
</pre>

<p>
Had to go back to mapUS files and study how railroad crossings are done there, this is my first time trying to get them in-game on PMC terrains. Always exciting learning new skills.
</p>

<p>
2021-07-14T18:11:00Z Got trainSystem.i3d and XML working with railroad crossings. Now all the barriers have been added into trainSystem.i3d and XML has been configured properly to give good warning time when the barriers go down and then lift back up again after train has passed. mapUS settings of start/end distance 125 did not work for us as we have 40 car train <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Then I continued doing roads. Next is the E / W direction road and finally then that one short connection road as well.
</p>

<p>
2021-07-14T18:41:00Z Finished GE work for all the asphalt road 3d meshes, they are now just about flat on the ground without elevation, first step was to get them done through SSC, that is about done just pending in-game test.
</p>

<p>
Well in-game test revealed that E / W road had two flips on it, sigh. This is rage inducing crap with SSC <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
Also SSC settings were from the default 9m road so it had nothing but a flat plane, no curb on it. Need to add some nice curb as just plain asphalt plane is not very nice. My current setup also lacks the elevated road with ditches.
</p>

<p>
Alright back to GE playing with cubes and in SSC trying to come up with good config INI file for road with curb.
</p>

<p>
2021-07-14T19:59:00Z Discovered I made a mistake creating the first asphalt road spline from south to north, forgot one turn. Oh well need to re-create it now for the third time, nice...
</p>

<p>
2021-07-14T21:19:00Z Battle continues to get SSC working properly. Once I got nice road curb/verge config file then curves caused bad wrinkles on the mesh. This was resolved by simply removing cube objects on the corners to make them more smooth. There was still one or two kind of wrinkles but it should be playable in-game now. Greetings to Grus-Tube in <a href="../contact.php">PMC Farming discord</a>.
</p>

<p>
Man I'm telling ya... FS19 road mesh making SUCKS so bad I'm ready to jump out of the window screaming. This is not what sane person goes through to get some ancient road tech in-game <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
I really need to learn how to use modo so I can bring in heightmap and generate nice smooth roads.
</p>

<p>
2021-07-14T23:04:00Z Got all asphalt roads re-made with intersection crossings. They don't have elevation and ditching for now.
</p>

<p>
I am exhausted, its been miserable hot day and I'm sweating in +27C heat in PMC Bunker trying to understand how this piece of crap SSC works. Its going to be a cold day in hell if I ever use SSC again this is just insanity, nobody in their right mind uses such garbage tools for terrain editing. I'm happy to stay with painted texture "asphalt" roads if the alternative is to go through such hell as what today has been <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
Yes yes sure it will get easier now that I have somewhat understanding how SSC likes its I3D imports, it will go nuts with rotation="180 NUMBER 180" values, it requires rotation="0 NUMBER 0" instead. That can now be changed with simple regex. But yes this is so stupid I cant believe of the time I spend today working on this crap <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
I could have made couple ArmA 3 terrains in this time it took me to get few asphalt road meshes done with SSC, completely insane... <img src="../images/smileys/icon_rolleyes.gif" alt="Smiley :rolleyes:" loading="lazy">
</p>

<p>
2021-07-14T23:31:00Z In-game test complete. Long drive through N/S asphalt road, then down the short N/S connector and from there towards east using the E/W road.
</p>

<p>
There was one wrinkled issue on the E/W road beginning (from the west side intersection), dunno whats wrong with it, I'm so exhausted now that I don't want to dig into it. At least I need a small break.
</p>

<p>
I guess overall I'm happy that now we have good looking asphalt roads with double yellow lines which work pretty nice.
</p>

<p>
Continue reading <a href="dev-diary-pmc-iowa-garden-city-8km-038.php">next page</a>, back to <a href="dev-diary-pmc-iowa-garden-city-8km.php">Dev Diary PMC Iowa Garden City 8km Homepage</a> or <a href="dev-diary-pmc-iowa-garden-city-8km-036.php">previous page</a>.
</p>
</section>

<footer>
<p>
<a href="pmc-terrains.php" class="button">PMC Terrains FS19</a>
<a href="changelog-pmc-iowa-garden-city-8km.php" class="button">Changelog PMC Iowa Garden City 8km</a>
<a href="pmc-iowa-garden-city-8km.php" class="button">PMC Iowa Garden City 8km</a>
<a href="../index.php" class="button">PMC Farming Simulator root page</a>
</p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("../include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
