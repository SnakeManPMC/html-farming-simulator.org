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
<h1>Developer Diary PMC Farm Lab Farming Simulator 19 PMC Farming</h1>
</header>

<section>
	<h2>2024-04-25 v1.3 Update</h2>

<p>
2024-04-25T11:41:00Z New editing day has started, just edited _run_backup_PMC_Farm_Lab.bat 7-zip backup file to include copying into PMC Linux directories for maximum security, then ran the bat to take backup of the current v1.3 project dir.
</p>

<p>
I have already been doing research for loose straw, bales etc, edited and released dev diary for PMC Farm Lab terrain. Next up is few more edits and then v1.3 release.
</p>

<p>
2024-04-25T11:59:00Z Created new field definition, set its corner01_1 piece to translate X -25 and translate Z 50, corner01_2 to Z -100 and corner01_3 X 50 and Z -100, it came out as perfect 0.5ha in size.
</p>

<p>
But guess my math is not up to the bar for creating "simple hectare size" rectangles as I tried to use basic increasing of 25 or 50 coordinates for these corner pieces and they didn't match at all for 1ha or 2ha etc, so kind of gave up on that with joke "math is hard dude" <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Checked source\PMC_Farm_Lab\ dir and there was Design_Doc_PMC_Farm_Lab.xcf dated 2021-01-02T16:35:00Z which was nice to see as I have to-do task to create this design document in GIMP, guess I already did it years ago heh.
</p>

<p>
2024-04-25T12:33:00Z Created new design doc cultivator_density field paintings and field definitions in GE v8.2.2 for the following sizes:
</p>

<pre>
Field 9 (field1) : 0.999 ha
Field 10 (field2) : 2.245 ha
Field 11 (field3) : 3.987 ha
Field 12 (field4) : 6.242 ha
Field 13 (field5) : 8.979 ha
</pre>

<p>
Basically those sizes were increased in GIMP using 100 pixels, 150 pixels, 200 pixels, 250 etc. It is quite amazing how large, if not "huge" that almost 9ha field is on this 1.2km terrain size, it looks like a mammoth field.
</p>

<p>
Why did I create these fields, umm well I wanted to create 1ha field which is that "field1" field definition, but these others 2.2, 3.9, 6.2 and 8.9ha are just bonus like "why not" type of way.
</p>

<p>
2024-04-25T12:37:00Z Saved project in GE and renamed PMC_Farm_Lab.i3d cultivator_density.png back to .gdm and of course deleted cultivator_density.png image file. Okay its ready for in-game testing.
</p>

<p>
2024-04-25T12:43:00Z Test complete, now the terrain felt stupid with those why not fields, I mean how about NOT heh, they just don't belong to such testing terrain, this terrain was released years ago and doing such a big change to it now just feels too stupid too late, if that makes any sense. There just ain't no need to add more than that one 1ha field.
</p>

<p>
Deleted those new big fields from GIMP design doc.
</p>

<p>
2024-04-25T12:57:00Z Had to restore GIMP patterns from old 2023 backup so I could pattern fill field areas to PDA_map.png image. Got it done. Its interesting that its been over a year since I used GIMP pattern fill the last time, time sure flys fast.
</p>

<p>
Copied pda_map.png into PMC_Farm_Lab\maps\ dir, ran _run_imagemagick_png_to_dds.bat to convert PNG to DDS while leaving the source image to 1280 x 1280 pixel resolution, interesting to see if FS19 gives error with that resolution.
</p>

<p>
Completed in-game test and 1280 x 1280 resolution pda_map.dds works fine <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
So now PMC Farm Lab has 1ha field there for easy yield testing as one (1) is such a nice number to reference. Now I'm happy.
</p>

<p>
Then copied icon.xcf GIMP image file from PMC Iowa Garden City 8km, edited it to read PMC Farm Lab, exported to PNG and then ran png to dds imagemagick bat file, synced to fs19 mods dir and then another in-game check. Oh and also edited modDesc.xml description for a bit more thorough info.
</p>

<p>
2024-04-25T13:21:00Z In-game FS19 test complete, icon image shows up OK no errors in the log, okay I guess edits are complete <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Edited readme.txt to include official forum topic, then ran _run_pack_release_packet_GENERIC.bat to generate brand new v1.3 release packet. Tested it in-game FS19 one last time and everything looked OK and log.txt was clean, its good to go for release. Then started to edit web pages for v1.3 update release.
</p>

<p>
Continue reading 
<!--
<a href="dev-diary-pmc-farm-lab-003.php">next page</a>, 
-->
<a href="dev-diary-pmc-farm-lab.php">Dev Diary PMC Farm Lab Home</a>, go back to <a href="dev-diary-pmc-farm-lab-001.php">previous page</a>.
</p>

</section>

<footer>
<p>
<a href="pmc-terrains.php" class="button">PMC Terrains FS19</a>
<a href="changelog-pmc-farm-lab.php" class="button">Changelog PMC Farm Lab</a>
<a href="dev-diary-pmc-farm-lab.php" class="button">Dev Diary PMC Farm Lab</a>
<a href="pmc-farm-lab.php" class="button">PMC Farm Lab</a>
<a href="screenshots-pmc-farm-lab.php" class="button">Screenshots PMC Farm Lab</a>
<a href="../index.php" class="button">PMC Farming Simulator root page</a>
</p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("../include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
