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
	<h2>2021-07-18 Selling Points And Courseplay Field Work Courses</h2>

<p>
2021-07-18T17:25:00Z New editing day has started, took backups and loaded terrain in GE, started to eyeball sell point locations. Todays plan is to find good locations for sell points and add decorations if there is no existing ones.
</p>

<p>
2021-07-18T18:39:00Z Got sell points moved a bit, found nice locations from existing farm yards which fit quite well. I mean mapUS ravenport has that one location really lame just dump grate and some random building, so guess that level of detail is enough.
</p>

<p>
Placed sell point 2 by animal dealer and added giants farm stable or some building to that area. Cleaned grass out of all sell point dump grates, no elevation changes were necessary but I did few anyways.
</p>

<p>
Updated defaultItems.xml with new coordinates. Then created new ground collision map while PMC_Helpers was in GE so those buildings get added to the collisions.
</p>

<p>
2021-07-18T22:06:00Z SinisterSockz was twitch live streaming North Dakota Regent 8.1km terrain editing in GE so I started to watch that a bit... well this "a bit" turned into over 3hrs session heh. Was helping him to GIMP paint terrain roads and fields.
</p>

<p>
2021-07-18T23:08:00Z Finally was able to check sell points in-game, all look good, couple could use some heightmap leveling underneath them but nothing that prevents vehicles drive over the dump grate.
</p>

<p>
2021-07-19T00:36:00Z A while ago started in-game testing courseplay field work course generation for all 275 fields. I see that some complex shape fields for example F10 takes minutes to generate course with headlands.
</p>

<p>
F27 and F112 could not be detected by courseplay, odd. After finished first round of course generation I went back to GE and studied what is wrong with these fields, well turns out (I think) that fieldMapIndicator was not in field definition corner piece, in both fields there was empty space in middle of the field just where fieldMapIndicator was and there you go, courseplay could not see the field. Hmm thinking about it now a bit later it might actually been because there was no cultivator_density painting underneath fieldMapIndicator, hmm maybe, maybe... Anyways moved them into cultivator_density and corner piece.
</p>

<p>
2021-07-19T01:44:00Z New in-game test for F27 + F112 and courseplay can detect them fine, excellent.
</p>

<p>
2021-07-19T01:48:00Z Compiled new v1.1.11 (one one eleven, huh) internal testing version and uploaded it <img src="../images/smileys/icon_biggrin.gif" alt="Smiley :D" loading="lazy">
</p>

<p>
Then just some web page changelog and this dev diary updating, kind of rushed job as the internal testing release is already out but changelog hasn't even been updated heh, oh well. Maybe next release will have everything ready so all I have to do is to upload.
</p>

<p>
Tonight I'm going to test PMC Iowa Garden City 8km v1.1.11 myself to see if I can spot anything broken or not suitable for first general public release. Will be good times running around and doing cultivating contracts <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Continue reading <a href="dev-diary-pmc-iowa-garden-city-8km-041.php">next page</a>, back to <a href="dev-diary-pmc-iowa-garden-city-8km.php">Dev Diary PMC Iowa Garden City 8km Homepage</a> or <a href="dev-diary-pmc-iowa-garden-city-8km-039.php">previous page</a>.
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
