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
	<h2>2024-09-19 Return To Alger</h2>

<p>
2024-09-19T09:42:00Z New editing day has started, hey its a brand new year <b>2024</b> and almost end of it already, at least its end of summer <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
What happened in march 16th 2023 was that I had some real life chores that took over my life, I don't go into details for privacy sensitive info reasons. I spent time doing real life chores since mar 16th after last PMC Ohio Alger 10km edits and basically these chores are still continuing but I'm kind of taking a quick break on them now so overall they have not gone anywhere.
</p>

<p>
Right now <a href="../25/news-pre-release/index.php">Farming Simulator 25 (FS25) release</a> is coming at nov 12th 2024 which is very soon relatively speaking, I feel like many of my projects are still unfinished and time have ran out as yet another game engine is released already while I still have active FS19 projects being edited. But well, what can you do, guess my editing/playing pace is slow relatively speaking per project when giants game release cycle of about 3 years is too short time frame (FS17-FS19 was 2 years, FS19-FS22 and FS22-FS25 were 3 years). See <a href="../history.php">farmsim history</a> page for release dates. Edit: actually I thought the game engine release cycle was 2 years, new game comes out every 2 years, but apparently its 3 years as the history page shows, hmm interesting. I wonder if giants modern era game engine release cycle has been changed to 3 years or is 19 to 22 and 22 to 25 just a "two game flukes"(?).
</p>

<p>
As for PMC Ohio Alger 10km terrain project, its now time to continue editing it. This was the last project I was "officially editing" back in early 2023, meaning writing change logs and dev diaries, since that ended I have not done anything except few undocumented quick edits (see <a href="https://www.pmctactical.org/forum/viewtopic.php?t=22967" target="_blank">PMC Tactical Forum "PMC Project Orange 20240609 Development" topic</a>). My goal always was to continue editing and get PMC Ohio Alger 10km terrain to playable state, but now I have spoken with xr_renegade on his youtube live streams and he said something along the lines of <i>it would mean the world to him</i> if he could get to play PMC Ohio Alger 10km before FS25 comes out. So now I want to continue editing and get some building and tree objects placed.
</p>

<p>
However like today right now, I'm here starting stuff just "for the record", not because I'm hyperventilating excited about editing, in fact I don't feel like editing at all but I have to do it as I sort of said that in xr_renegades last youtube stream, so now I have to walk the walk after talking the talk <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Today earlier I already split dev diary page into 9 individual day pages for easier reading, then took PMC Ohio Alger 10km v0.2.1 into FS22 and walked around there a bit, checked both the normal test version and screenshot version which don't have field definitions but just hardcoded crops on the fruit_density image. I also read through the dev diary (this was yesterday I recall), checked the current project in GE v9.0.6 quickly and watched several dev diary video capture MP4 clips. Looked at GIMP XCF project object placement coordination image and immediately got depressed because there is still like 4 farm yards that need object placement on OH-235 road going south bound. Yeah that is not a good start for my return to editing heh. I need to shut my mouth and not promise anything editing wise, when it [editing] happens... it happens, but I cant go running my mouth making promises I have to then keep regardless of how burnt out and bored I feel.
</p>

<p>
Anyways.
</p>

<p>
Now I'm looking at backup bat file, it needs a bit of an update. Need to add linux network computer HDD copying DOS call feature for it, its a bit excessive backup setup but hey at least I never run into issue where a project/progress is lost due lack of proper backups.
</p>

<p>
2024-09-19T10:16:00Z Finished editing _run_backup_PMC_Ohio_Alger_10km.bat, then ran it and it copied PMC_Ohio_Alger_10km.2024-09-19T1014.7z to two different computers and so many different HDD's its not even funny. Never forget backups.
</p>

<p>
Now I really don't feel like launching OBS, it actually doesn't even have windows 10 desktop compatible overlay to hide taskbar, so if I would edit some buildings and trees I am not going to video capture it, hmm that sucks <img src="../images/smileys/icon_confused.gif" alt="Smiley :?" loading="lazy">
</p>

<p>
Launched GE v9.0.6, loaded PMC_Ohio_Alger_10km.i3d project, ran 16km larger terrain script and opened PMC_Helpers transformgroup, hmm okay now what... <img src="../images/smileys/icon_surprised.gif" alt="Smiley :o" loading="lazy">
</p>

<p>
Then I was browsing to the next populated place in GE, found this odd situation.
</p>

<p>
Google/maps:
</p>

<a href="screenshots/PMC-Ohio-Alger-10km-2024-09-19T102814.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Ohio-Alger-10km-2024-09-19T102814.jpg" class="terrainimg" loading="lazy" alt="PMC Ohio Alger 10km Farming Simulator 22 Screenshot" title="PMC Ohio Alger 10km Farming Simulator 22 Screenshot"></a>

<p>
GE which has US NAIP satellite imagery source:
</p>

<a href="screenshots/PMC-Ohio-Alger-10km-2024-09-19T102820.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Ohio-Alger-10km-2024-09-19T102820.jpg" class="terrainimg" loading="lazy" alt="PMC Ohio Alger 10km Farming Simulator 22 Screenshot" title="PMC Ohio Alger 10km Farming Simulator 22 Screenshot"></a>

<p>
Cant remember my commentary from 2023 but apparently US NAIP is much older source than google/maps, which is kind makes sense, hell I already took one and a half year break from editing so there is that time added to whatever the difference might have been at march 8th 2023 when US NAIP was downloaded. I need to discuss with xr_renegade what to do with these situations, perhaps even specific location on alger.
</p>

<p>
2024-09-19T10:35:00Z Launched OBS just because this whole situation annoyed me so much, I cannot edit without taking historical record, yes its cool to have few desktop screenshots and this diary text, but video is like whole another level of detail into the editing, at least if I don't have video captures then I'm pissed off to myself for the rest of my life, heh not that I'd dwell on it daily but you know what I mean <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
This sucks as windows 10 desktop with my 4k settings is not compatible with existing OBS scene overlays, so I would have to do one more step to get fully into editing, ugh... <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
Loaded desktop screenshot into GIMP, when I do rectangle select on top of the win10 taskbar its position is 0 and 2080, size 3391 and 80, hmm where do I get to use those coordinate/size numbers heh dunno.
</p>

<p>
But I have absolutely zero motivation or mental energy to start creating nice windows 10 taskbar hider for OBS, those texts with stroke and possibly shadow, I just cant do it right now.
</p>

<p>
2024-09-19T10:48:00Z Got pure black no text win10 taskbark hider PNG image done, quick and dirty, but does its job. Going to use this so I can capture some video footage so that wont bug me in the future, don't feel like missing out.
</p>

<p>
Then on the next farm yard down south on OH-235 I placed three buildings as that was all the details I could see and object selection being what it is that has to do for now, next up was trees. This part has a lot of trees on the W side.
</p>

<p>
2024-09-19T11:09:00Z Finished doing this location, hey its first time editing since mar 2023 so yeah <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Google/maps:
</p>

<a href="screenshots/PMC-Ohio-Alger-10km-2024-09-19T110911.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Ohio-Alger-10km-2024-09-19T110911.jpg" class="terrainimg" loading="lazy" alt="PMC Ohio Alger 10km Farming Simulator 22 Screenshot" title="PMC Ohio Alger 10km Farming Simulator 22 Screenshot"></a>

<p>
GE view:
</p>

<a href="screenshots/PMC-Ohio-Alger-10km-2024-09-19T111012.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Ohio-Alger-10km-2024-09-19T111012.jpg" class="terrainimg" loading="lazy" alt="PMC Ohio Alger 10km Farming Simulator 22 Screenshot" title="PMC Ohio Alger 10km Farming Simulator 22 Screenshot"></a>

<p>
Not too bad, hopefully it looks OK in-game too. Now just have to align all objects to ground, this I remember I had some serious problems previously, interesting to see it it turns out now (why would it be any different though, just saying).
</p>

<p>
2024-09-19T11:15:00Z Adjusted few trees which there quite tilted/slanted because uneven terrain CTRL-B random placement. Saved I3D file, first edits are in, promise of getting back to editing has was kept, now I feel good again <img src="../images/smileys/icon_biggrin.gif" alt="Smiley :D" loading="lazy">
</p>

<p>
I'm such a weasel that for now... I'll switch to chill mode as I really have no mood for editing, I just did the mandatory one comeback farm yard so I can sign off that yep I did what I said I was going to do <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Will be just doing whatever useless stuff, watch youtube recommended videos, check news, maybe even watch a movie or something. And hey who knows, maybe I get so bored of that stuff that I actually return to check what kind of farm yard would be next.
</p>

<p>
But overall though, this self loathing aside, I feel quite good after making an terrain editing comeback after this mar 2023 started break, feels quite nice to be back again doing some serious editing, well starting it at least. More to come! <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Continue reading <a href="dev-diary-pmc-ohio-alger-10km-011.php">next page</a>, back to <a href="dev-diary-pmc-ohio-alger-10km.php">Dev Diary PMC Ohio Alger 10km Homepage</a> or <a href="dev-diary-pmc-ohio-alger-10km-009.php">previous page</a>.
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
