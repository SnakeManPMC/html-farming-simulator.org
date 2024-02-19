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
	<h2>2021-07-24 Asphalt Road Madness</h2>

<p>
2021-07-24T01:04:00Z New editing day is starting, todays goal is to fix the asphalt roads which have wrinkles on the curves where semi truck trailers bounce badly.
</p>

<p>
I swore to never use piece of garbage SSC anymore but within this terrain its allowed because I need to finish what was started.
</p>

<p>
Was thinking of taking backups first so have a fail safe stable release to fall back into if this road task gets too overwhelming or simply doesn't work, the current roads have wrinkles in the curves but they still work pretty OK for the most part, so its better to have this stable version instead of no asphalt roads.
</p>

<p>
To get started took backups, PMC_Iowa_Garden_City_8km_2021-07-24T0114.7z this is now my fail safe backup if this road project goes belly up, just restore this 7-zip and all is good again.
</p>

<p>
First thought was to delete existing roads and railroad as well (more about trains later), then use splines to elevate the heightmap so we can get those nice american elevated roads with ditches. Only question is... which splines do I use, the old ones are done for elevated roads and 10m road mesh pieces but it has a cut off by dealership, new ones for SSC generation might not be aligned properly for elevation purpose, hmm.
</p>

<p>
Now I'm going to list numbers again which basically means nothing for anyone else than me who sees this stuff in GE, but this is good place to write these notes and hey who knows, maybe some other terrain dev gets some ideas of how I do things.
</p>

<p>
First new SSC asphalt road spline elevation was 338.97799683 25.65399933 4094.32006836 and I elevated it 2 meters to create elevated road with ditches. Initially I thought one meter is enough but it looked like its nothing, so went with two.
</p>

<p>
So I adjusted first spline which is the long N/S one, added some control vertex points by the dealership so its nicely at stock heightmap ground level without ditches because those don't belong to city streets.
</p>

<p>
Saved in GE before running set terrain to spline script because that most likely requires few trial and errors, for example cant remember if I need to use 6 or 8 meter terrain elevating script.
</p>

<p>
Ran 8 meter elevating script, came out alright. Then it was on to the next spline, this was -4094.7199707 24.84199905 1399.75 and again elevated it 2 meters.
</p>

<p>
Next spline was -1221.34997559 37.77099991 574.44500732 which got 2m rise.
</p>

<p>
Then spline -1244.06005859 33.39839935 1408.90002441 same treatment.
</p>

<p>
Last spline 354.27200317 28.27000046 1424.64001465 and 2m up she goes.
</p>

<p>
After heightmap was elevated I saved and went to in-game to drive around to really see how the elevations look because GE is just awful showing any of that stuff.
</p>

<p>
Took fruit_density and blacked it out to remove flowers and grass, I want to see plain and simple heightmap without any distractions.
</p>

<p>
2021-07-24T03:00:00Z In-game test shows that splines were way too simple, they were extremely smooth which of course makes good driving on the road, but elevations got lost. There was some points where the road was elevated almost to the original ground level and other places it created old castle wall type barrier like 3m or so tall which looked silly. Utility poles also got buried into the ditch area (there was no ditches in this script though).
</p>

<p>
So yeah splines need more work. I feel like just restoring the backup and forgetting this road nonsense for now.
</p>

<p>
2021-07-24T03:14:00Z Restored original heightmap and started GE, was looking around about the splines... and just decided to revert back to the original stable version and try again.
</p>

<p>
Not sure how the hell to do this so it doesn't require ridiculous amount of work like making another set of splines once again. I just hate this, it feels so unpleasant to edit like this I'm in the verge of just calling roads done not giving a damn about some wrinkles or elevations.
</p>

<p>
2021-07-24T03:45:00Z Tried to SSC generate roads on top of the elevated heightmap but the intersections did not match, sigh. This sucks so bad I'm out, gotta do something else for a while I cant stand this SSC garbage.
</p>

<p>
Continue reading <a href="dev-diary-pmc-iowa-garden-city-8km-043.php">next page</a>, back to <a href="dev-diary-pmc-iowa-garden-city-8km.php">Dev Diary PMC Iowa Garden City 8km Homepage</a> or <a href="dev-diary-pmc-iowa-garden-city-8km-041.php">previous page</a>.
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
