<!DOCTYPE html>
<html lang="en">
<head>
<title>My First Terrain Dev Diary Farming Simulator 25 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="My First Terrain Dev Diary Farming Simulator 25 - PMC Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
	<h1>My First Terrain Dev Diary Farming Simulator 25 - PMC Farming</h1>

<p>
My First Terrain Development / developer diary for Farming Simulator 25 (FS25) by Snake Man, PMC.
</p>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
<?php include("/var/www/include/support.php"); ?>
	<h2>2024-11-13 My First Terrain For FS25</h2>

<p>
2024-11-13T04:13:05Z New editing day has started. I was just playing my <a href="stories-new-farmer-riverbend-springs.php">New Farmer Riverbend Springs game-mode savegame</a> when it got so boring that I decided to try making my own terrain from mapUS. This terrain dev diary is about that attempt.
</p>

<p>
Created _run_robocopy_fs25_mapUS_to_dev_mod-set.bat file which robocopies mapUS into C:\FS25.Mods\Dev\ dir. Idea is that if I have to go back and forth with editing, its easier to have a one click bat to do the copying.
</p>

<p>
Then took modDesc.xml from FS22 terrain <a href="../19/pmc-farm-lab.php">PMC Farm Lab</a>, edited it a bit to suit this mapUS project, set class name to PMC_mapUS_Project which is the directory and mod name. There is just "mapUS/" dir inside. Now, it either works... or completely fills game log with errors hehe, but hey maybe those errors point me into right direction debugging it, its exciting to see what happens.
</p>

<p>
2024-11-13T04:33:11Z First in-game test complete, error in the log but not exactly what I was expecting:
</p>

<pre>
Available mod:  (Version: 1.0.0.0) PMC_mapUS_hack
Error: Unsupported mod description version in mod PMC_mapUS_hack
</pre>

<p>
Err wait, was it hack or project, whats going on here hehe!
</p>

<p>
Changed class name to PMC_mapUS_hack now, also fixed that unsupported mod description version to 92 which it was on fs25 game log. Okay second try...
</p>

<p>
2024-11-13T04:37:48Z Now a new error came up:
</p>

<pre>
Available mod:  (Version: 1.0.0.0) PMC_mapUS_hack
Warning: Only zip mods are supported in multiplayer. You need to zip the mod PMC_mapUS_hack to use it in multiplayer.
  Error: Failed to load map 'PMC_mapUS_hack PMC_mapUS_hack'. Missing attribute 'modDesc.maps.map(0)#defaultHandToolsXMLFilename'.
</pre>

<p>
Hmm handtools, hmm okay going to dig through fs25root/maps/ dir and see what I can find.
</p>

<p>
I am curious though, where does fs25 internally hold the modDesc.xml data, meaning that obviously mapUS, mapAS and mapEU are not regular mods, but they are still "sort of mods", so does FarmingSimulator2025.exe game engine itself hold those three terrains as hardcoded class names so they don't need modDesc.xml's in the root dir or something. Or are there some config file where I could for example disable one or even all those base game terrains, hmm.
</p>

<p>
Went through fs25 root and maps/ dirs on surface, didn't dig too deep but on obvious places I could not find any handtool xml file, there was individual handtool xml files for like flashlight, chainsaw etc, but no overall terrain wide config file.
</p>

<p>
So I'm going to fake it, leave that config file as empty <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Well that didn't work, same error comes up, guess "" value is considered missing attribute. Next I tried to point it to $data into flashlight.xml, I highly doubt that would work but perhaps it at least could get through into the terrain itself.
</p>

<p>
2024-11-13T04:55:55Z Nope doesn't work, more errors came up and game froze on 15% loading progress.
</p>

<pre>
2024-11-13 04:54 Error: Can't load resource 'dataS/scripts/missions/mission00.lua'.
2024-11-13 04:54 Error: Failed to open xml file 'C:/FS25.Mods/Dev/PMC_mapUS_hack/mapUS/map.xml'.
2024-11-13 04:54 Error: Running LUA method 'update'.
dataS/scripts/mission00.lua:143: attempt to index nil with 'getHandle'
2024-11-13 04:54 Error: Running LUA method 'update'.
dataS/scripts/FSBaseMission.lua:635: attempt to index nil with 'password'
</pre>

<p>
Oh now I see what was the problem at least with at map.xml, filename was wrong. Okay one more try after fixing it. I also found other missing XML file names, in fs25 giants moved them from the terrain mod file root to mapUS/config/ dir, so I fixed them as well. Crossing fingers that this works now.
</p>

<p>
<b>2024-11-13T05:02:17Z</b> Whoah it worked, I got my "PMC mapUS hack" terrain project in-game! <img src="../images/smileys/icon_biggrin.gif" alt="Smiley :D" loading="lazy">
</p>

<p>
So now I have a working modDesc.xml for clone mapUS riverbend springs terrain loaded as a mod, all files duplicated in the terrain mod dir, good stuff. Now I can start to rip off stuff from it, goal would be to notepad++ edit and take out all objects, if I would manage to do that... then I would have a empty source terrain which I could add anykind of heightmap and cultivator_density files, making terrain of my liking. But I highly doubt its that easy to just delete crap from the mapUS.i3d file <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
But I'll try to find out <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
First I tried to delete everyting in ProceduralPlacement xml tag. No idea what it does but will try deleting these tags, one by one.
</p>

<p>
2024-11-13T05:20:24Z It worked, PMC mapUS hack terrain loaded in-game just fine <img src="../images/smileys/icon_surprised.gif" alt="Smiley :o" loading="lazy">
</p>

<p>
Next I deleted userAttributes tag only leaving the first entry, environment there, that sounded important. Who knows how many other important ones got deleted in the <i>thousands</i> of xml lines below it. This... this I doubt would work, but hey lets give it a try, that's what this project is all about, at least I gain the knowledge for possible future farmsim games on this same situation where I'm impatiently waiting for the next giants editor release.
</p>

<pre>
  &lt;UserAttributes&gt;
    &lt;UserAttribute nodeId="4986"&gt;
      &lt;Attribute name="onCreate" type="scriptCallback" value="Environment.onCreateSunLight"/&gt;
    &lt;/UserAttribute&gt;
  &lt;/UserAttributes&gt;
</pre>

<p>
This is the only entry left in userAttributes tag now.
</p>

<p>
2024-11-13T05:27:40Z It still loaded in-game without even warnings in the log, oh wow <img src="../images/smileys/icon_surprised.gif" alt="Smiley :o" loading="lazy">
</p>

<p>
Next up is Scene xml tag, now this should contain all the GE placed objects like trees and buildings, although I have a suspicion that these new procedural mask thingies could be, just maybe, could be used to place trees, if not trees then shrubbery flowers and grass type stuff maybe even bushes. Or then procedural stuff is just for ground textures, although I don't really see that in-game. But yeah, this scene deletion might backfire quickly, there is a lot of functionality there. But then again, most objects have no functionality, the functionality comes from placeables.xml and such config files.
</p>

<p>
Oh and such things as InfoLayer name="farmlands" is quite important, cant remove that.
</p>

<p>
This is most likely the big cosmetic thing which can be removed: TransformGroup name="gameplay" nodeId="5009", what I recall from FS19 and FS22 is that its bulk of the terrain objects, but this also included fields if I'm correct. I'll try to browse it through a bit to see whats in there. The problem comes from the nodeID, if that index order is broken then terrain definitely wont load in-game, so I might be limited what I can just cut off like a dead skin.
</p>

<p>
Unfortunately scene begins around line 10,000 and ends... around 205,000 so there is snowball chance in hell you could go through all the scene properties one entity at time, I just have to delete them in bulk when it looks like the transformgroups just hold objects and hope it works. I am extremely doubtful this works anymore, there has to be some essential functionality things in the scene that break the terrain, but I'll give it a try, hey I got this far already <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
I then deleted the whole transformgroup "map" which looked like its just the plain objects, okay this most likely will crash but here goes nothing ...
</p>

<p>
2024-11-13T05:43:33Z It still works and all the objects are there, I see no changes. Hmm this is very odd to say the least, hmm could it be that my terrain still reads $data/ dirs that no local xml or i3d file is read, hmm hmm.
</p>

<p>
Checked PMC_mapUS_hack/mapUS/mapUS.xml and indeed it was pointing to all those $data/ dirs, I changed them now to $mapdir$/ assuming that still works or that I remember how to use it heh.
</p>

<p>
Indeed I missed mapUS.xml on the first line one of the most important lines, the line pointing to mapUS/mapUS.i3d file I've just been editing and it was not even read hehe, oh man, OK another try, now its most likely going to crash on me, if my config file for the i3d is even correct.
</p>

<p>
2024-11-13T05:53:16Z Yep, first of all my $mapdir$ didn't work, so need to rethink that first.
</p>

<p>
2024-11-13T05:57:11Z Yeah now it crashes with huge amounts of errors, hmm wonder if I should revert the original mapUS.i3d back and try once more. First I'll inspect log file to see what kind of errors it throws.
</p>

<pre>
2024-11-13 05:55 Error: Parse error in 'C:/FS25.Mods/Dev/PMC_mapUS_hack/mapUS/mapUS.i3d' at line 23734. mismatched tag.
</pre>

<p>
Ah, well that cant be good, broken xml.
</p>

<p>
Then hundreds of pages of:
</p>

<pre>
2024-11-13 05:55 Warning (script): 'getTerrainHeightAtWorldPos': Argument 1 has wrong type. Expected: Int. Actual: Nil
  D:\auto_builder\cache\svn\7741beb42f4ec919989899a3508d8d12\src\base\scripting\lua\LuauScriptSystem.cpp (1118): expectedType == Value::VoidType || expectedType == Value::ClassType2024-11-13 05:55 
Script error: 'getTerrainHeightAtWorldPos': Argument 1 has wrong type. Expected: Int. Actual: Nil
</pre>

<p>
So yeah, pretty broken setup. I'll restore the original mapUS.I3D and try one more time, lets see what happens, did I do all these tests up until this point on the wrong files <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
2024-11-13T06:02:18Z Now it loads with original mapUS.i3d file, okay well so far so good, now I can re-try my steps with deleting that stuff from it.
</p>

<p>
Deleted procedural xml tag contents first.
</p>

<p>
2024-11-13T06:07:08Z It loaded without procedural stuff, OK first item down, now to the next.
</p>

<p>
Then deleted userAttributes after environment and mission00.
</p>

<p>
2024-11-13T06:11:46Z Still works, oh wow. Next up is the big scene xml tag, this is scary, it now probably breaks...
</p>

<p>
Instead of further editing mapUS.i3d I went and deleted everything from mapUS/config/placeables.xml which should, if it works, remove many many buildings and other structures. And in my experience... this should be standalone file, it does not reference to anything else, it just plugs in placeable objects into the terrain coordinates.
</p>

<p>
2024-11-13T06:17:55Z Hmm this is interesting, it still loaded OK, but some things like grandpa walter was gone, cow pasture was gone with animals and fence but the feeding structure was still there. All fields are now gone, what remains is just kind of wet if not flooded brown dirt ground texture, at first I thought it was pigmud but no this is kind of like regular field which is just very wet, like after raining. Very interesting.
</p>

<p>
And now in ESC PDA mapview there are no fields, like the crop field things, but farmland IDs are still there, very interesting. Oh and also all hotspots are gone now as said those are done through placeables.xml config file.
</p>

<p>
Okay getting there, now if I could just remove those static objects from mapUS.i3d then this project would have been success, but man, I have my doubts...
</p>

<p>
Removed both gameplay and map transformgroups. Now I am truly amazed if this thing still loads heh.
</p>

<p>
2024-11-13T06:27:55Z It still works, all objects are gone, just ground textures, fields, bushes and shrubbery left! <img src="../images/smileys/icon_biggrin.gif" alt="Smiley :D" loading="lazy">
</p>

<a href="screenshots/My-First-Terrain-2024-11-13T0626.jpg" target="_blank"><img src="screenshots/thumbs/My-First-Terrain-2024-11-13T0626.jpg" class="terrainimg" loading="lazy" alt="RELEASENAME Farming Simulator 25 Screenshot" title="My First Terrain Farming Simulator 25 Screenshot"></a>

<p>
Hehe I did it, just as I expected initially, after all my doubts <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Actually now is perfect time for me to take care of one real life chore, I'm hoping to continue after this but my been awake 17hrs alarm is just about to go off so who knows when I'm getting hit by yawns and then its bed time.
</p>

<p>
2024-11-13T06:54:04Z Back, still not tired which is crazy considering I fell asleep few times while playing on new farmer riverbend springs savegame earlier today. However now I'm thinking that whats the next step, well only thing I can easily do here is to black out heightmap image, I don't have GRLEConverter.exe here so I could do any further density image work and besides that would require GE v9.0.6 as well (or v8 I think). So now I'm going to black out the heightmap to see riverbend springs flattened to the ground.
</p>

<p>
Loaded dem.png to GIMP, set RGB color to 20,20,20 which to my recollection brings the heightmap elevations to a flat 20m, then just CTRL-, foreground fill painted the whole image with that single color. Done.
</p>

<a href="screenshots/My-First-Terrain-2024-11-13T0711.jpg" target="_blank"><img src="screenshots/thumbs/My-First-Terrain-2024-11-13T0711.jpg" class="terrainimg" loading="lazy" alt="My First Terrain Farming Simulator 25 Screenshot" title="My First Terrain Farming Simulator 25 Screenshot"></a>

<p>
2024-11-13T07:14:31Z Got it working, RGB 20,20,20 color heightmap is in. Heh someone flattened riverbend springs out, ouch! <img src="../images/smileys/icon_biggrin.gif" alt="Smiley :D" loading="lazy">
</p>

<p>
Still don't feel like tired but I'm going to call it a night here, not sure what could I do anymore from Gaming computer without proper editing tools so I'll take the victory and maybe tomorrow if I'm still interested I'll return to this project.
</p>

<p>
Continue reading <a href="dev-diary-my-first-terrain-002.php">next page</a> or go back to <a href="dev-diary-my-first-terrain.php">My First Terrain Home</a>.
</p>

<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("/var/www/include/footer-start.php"); ?>
<p>
<a href="dev-diary.php" class="button">Dev Diary FS25</a>
<a href="../index.php" class="button">PMC Farming Simulator root page</a>
</p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("/var/www/include/footer-end.php"); ?>
<?php include("/var/www/include/support.php"); ?>
<?php include("/var/www/include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
