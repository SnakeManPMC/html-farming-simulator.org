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
	<h2>2024-03-21 Preparing For Release</h2>

<p>
2024-03-21T00:39:00Z New editing day has started, well not exactly, today is a release day which already got started probably close to an hour ago, been editing PMC Iowa Garden City 8km HTML web home page. Just now edited modDesc.xml on the terrain itself and changed its version number from v1.1.11 to v1.2 to simplify the first release numbering.
</p>

<p>
I must say this feels weird, is it really going to be a release day today after this terrain been ready for release since frigging 2021 huh!? <img src="../images/smileys/icon_surprised.gif" alt="Smiley :o" loading="lazy">
</p>

<p>
This must be the most messed up release SCHEDULE in the history of my game editing life, never had I've had addon or mod ready to go just waiting for me to get around to release it. Hmm or do I... hmm PMC OFP Terrains new versions have been ready since 2018 unless I'm mistaken, heh I might have spoken too soon, well at least farmsim wise this is the most due release in relation to how great the terrain itself is <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2024-03-21T00:44:00Z Edited PMC_Seasons_GEO_Iowa_Garden_City modDesc.xml and changed its version number to v1.2 as well, nicely matching versions now. No changes, just an version update for this first release.
</p>

<p>
Had to edit _run_sync_copy_PMC_Seasons_GEO_Iowa_Garden_City_to_mods_dir.bat file as it for some reason still pointed to c:\fs19.mods\ instead of c:\fs19.mods\dev\ directory. Then copied both the terrain itself and this seasons GEO there. Okay now its in-game check time to make sure everything is in place before starting to generate v1.2 release mod zip.
</p>

<p>
2024-03-21T01:02:00Z When setting my C:\FS19.Mods\Dev\ dir up and launching this terrain few times I noticed that terrain preview image for mod selection is still the default, ouch, I really want to fix that before release, its the first thing people see from the terrain so it needs to be properly done. Ugh more editing <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
2024-03-21T01:13:00Z Took in-game screenshots for new farmer game-mode vehicles, equipment and placeables. Also this was a check that everything works in the unzipped dev directory install of this terrain. It indeed works OK.
</p>

<p>
Next step is to generate actual mod zip release packet out of this terrain, readme's and all.
</p>

<p>
Err no wait, have to do the same sync bat and release packet generator bat files for my PMC_Seasons_GEO_Iowa_Garden_City/ mod as well.
</p>

<p>
Checked release readme dir, the readme txt file there has date set to 2021-07-19, oh wow over two years ago, man time sure flys when you're having fun eh <img src="../images/smileys/icon_surprised.gif" alt="Smiley :o" loading="lazy">
</p>

<p>
Updated my FS19 mods _symlink batch files as well, it was a bit work to sort all the new stuff out and adding this terrain with seasons GEO into the bat as well, but got it done. Then it was another in-game testing time.
</p>

<p>
2024-03-21T01:50:00Z In-game test of zip release version complete.
</p>

<pre>
Available mod: (Hash: 6c8b208a7a81a67f82d4b9a3aaeacd2f) (Version: 1.2.0.0) PMC_Iowa_Garden_City_8km
Available mod: (Hash: c2a41c6437c0c79fcf72d0bed51a35c5) (Version: 1.2.0.0) PMC_Seasons_GEO_Iowa_Garden_City
</pre>

<p>
But uh oh!
</p>

<pre>
2024-03-21 01:45 Error: Corrupt savegame, item 42 has invalid className 'GSI_Bin.IndividualSiloPlaceable'
2024-03-21 01:45 Error: Corrupt savegame, item 43 has invalid className 'GSI_Bin.IndividualSiloPlaceable'
2024-03-21 01:45 Error: Corrupt savegame, item 44 has invalid className 'GSI_Bin.IndividualSiloPlaceable'
2024-03-21 01:45 Error: Corrupt savegame, item 55 has invalid className 'GSI_Bin.IndividualSiloPlaceable'
2024-03-21 01:45 Error: Corrupt savegame, item 56 has invalid className 'GSI_Bin.IndividualSiloPlaceable'
2024-03-21 01:45 Error: Corrupt savegame, item 63 has invalid className 'GSI_Bin.IndividualSiloPlaceable'
2024-03-21 01:45 Error: Corrupt savegame, item 64 has invalid className 'GSI_Bin.IndividualSiloPlaceable'
2024-03-21 01:45 Error: Corrupt savegame, item 65 has invalid className 'GSI_Bin.IndividualSiloPlaceable'
2024-03-21 01:45 Error: Corrupt savegame, item 73 has invalid className 'GSI_Bin.IndividualSiloPlaceable'
2024-03-21 01:45 Error: Corrupt savegame, item 82 has invalid className 'GSI_Bin.IndividualSiloPlaceable'
2024-03-21 01:45 Error: Corrupt savegame, item 83 has invalid className 'GSI_Bin.IndividualSiloPlaceable'
2024-03-21 01:45 Error: Corrupt savegame, item 85 has invalid className 'GSI_Bin.IndividualSiloPlaceable'
2024-03-21 01:45 Error: Corrupt savegame, item 86 has invalid className 'GSI_Bin.IndividualSiloPlaceable'
2024-03-21 01:45 Error: Corrupt savegame, item 112 has invalid className 'GSI_Bin.IndividualSiloPlaceable'
2024-03-21 01:45 Error: Corrupt savegame, item 113 has invalid className 'GSI_Bin.IndividualSiloPlaceable'
2024-03-21 01:45 Error: Corrupt savegame, item 114 has invalid className 'GSI_Bin.IndividualSiloPlaceable'
</pre>

<p>
Hmph! <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
But then investigated as it was strange as my Dev mod-set did not give this error, I found that my PMC mod-set was missing one more mod, it was "GSI_Bin.zip", okay added and re-launched FS19 once more...
</p>

<p>
2024-03-21T01:58:00Z Another in-game test complete with GSI_Bin.zip included, no errors, no warnings. Yeah buddy! <img src="../images/smileys/icon_biggrin.gif" alt="Smiley :D" loading="lazy">
</p>

<p>
Then created Farm.Grain.Bin.Silo.Pack.2024-03-21/ dir to my torrents seeding dir, copied Brock_Bin.zip, FS19_GSI_Bin_Large.zip and GSI_Bin.zip there, then just generated torrent file and magnet link for this dir.
</p>

<p>
Hmm okay what next... required mod torrent magnets are done, seasons GEO and terrain itself is in release packet, hmm oh man that terrain mod preview image, almost forgot, okay okay launching GIMP and seeing if I have some already pre-made XCF image templates I could use from previous terrains.
</p>

<p>
Checked all other released FS19 terrains and negative, none of them had icon.dds image source file done yet, ugh. Then searched Farming Simulator 22 (FS22) dirs and there I had icon.xcf images on almost every terrain dir, so took one from PMC Undefined Farms 20km terrain project dir.
</p>

<p>
2024-03-21T02:20:00Z Got icon.dds image file created, just a gray background with white bold text reading terrain name, its good enough for now.
</p>

<p>
2024-03-21T02:24:00Z Robocopy sync copied terrain project to c:\fs19.mods\dev\ dir and checked in-game, works OK. Okay one more thing done, hmm what else...
</p>

<p>
Then generated new v1.2 release packet, unpacked the 7-zip into c:\fs19.mods\pmc\ mod-set dir and one more in-game test to see everything loads from this new mod zip properly...
</p>

<p>
2024-03-21T02:32:00Z In-game check complete, latest release build works just fine, no errors no issues and mod icon.dds shows up OK. Also I checked FS19 in-game mods menu, description is slightly short and there are no screenshots, I actually have no idea how to add screenshots into that unless its some giants modhub thing where it loads them, now this terrain looks a bit plain as there are no screenshots.
</p>

<p>
Speaking of screenshots, I took some from the new farmer vehicles and farm yard, so better get those done for home page.
</p>

<p>
2024-03-21T03:26:00Z Finished adding those new farmer vehicles and farm yard screenshots, then went and collected all the screenshots HTML code tags from <a href="stories.php">Stories FS19</a> pages material, that was a lot of copy-pasting uuh fingers almost hurting, now actually need to take a quick break to walk around and stretch my legs a bit. Who said release making is easy? <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2024-03-21T03:40:00Z Tour is over, bob. Okay what next, hmm cant actually think of anything else other than doing torrent magnets for the release 7-zip files and then its pretty much ready to release.
</p>

<p>
However I am still kind of cautious, I don't want to rush into releasing this thing as its already been ready to go since 2021 another few more hours wont hurt, was thinking of doing one PMC Gaming computer check kind of like in real 4k 60FPS environment, maybe load up my real proper Start From Zero savegame and fertilize contract or two, not that I'm interested of actually playing but just to get in touch with garden city a bit again. I'm just not in a rush push this thing out, I got plenty of time today and everything seems to be already done so why not do one more check with Gaming computer.
</p>

<p>
But I'm going to do those torrent magnet's now for the release 7-zip files, so everything is ready to go once I press the scary big red button.
</p>

<p>
2024-03-21T03:57:00Z Got torrent magnets done and added to the home page, now... yeah no idea what to do next, guess I'll fire up the good old Gaming computer, copy these new release 7-zip's there and kind of like simulate downloading a new mod, installing it and starting to play, see where it goes...
</p>

<p>
2024-03-21T05:28:00Z All done with Gaming computer, copied release 7-zip packets there, installed mod zips, edited symlink bat files, then checked in-game, everything looks good. Then got distracted to update Elite Dangerous odyssey garbage which took forever, launched the v4.0 horizon and was disgusted by the completely unusable crap GUI, exited and well now I'm here at editing computer, but next up is a cooking food and eating break, so more excuses... <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Continue reading <a href="dev-diary-pmc-iowa-garden-city-8km-046.php">next page</a>, back to <a href="dev-diary-pmc-iowa-garden-city-8km.php">Dev Diary PMC Iowa Garden City 8km Homepage</a> or <a href="dev-diary-pmc-iowa-garden-city-8km-044.php">previous page</a>.
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
