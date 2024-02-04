<!DOCTYPE html>
<html lang="en">
<head>
<title>Start From Zero PMC Grande Gardens 16km - PMC Farming Simulator 19 Stories</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Farming Simulator 19 Stories Start From Zero PMC Grande Gardens 16km">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<h1>Start From Zero PMC Grande Gardens 16km PMC Farming Simulator 19 Stories</h1>
<p>Stories from the Farm</p>
</header>

<section>
	<h2>PMC Grande Gardens 16km, Start From Zero</h2>

<p>
Please read the background idea for <a href="stories.php">our Farming Simulator 19 Stories</a> so you understand what is this all about.
</p>

	<h2>2022 Happy New Year!</h2>

<p>
2022-01-02T14:13:00Z After installing PMC Grande Gardens 16km v1.1.14 of the terrain I created new career savegame, saved and exited.
</p>

<p>
Took 7-zip backup of this new savegame just in case I goof something up which I most likely will, so I don't have to go through the new career creation shuffle all over again.
</p>

<p>
Created new bat file which does the file copying automatically for me because this will not be the last time I'm porting savegame, why not automate it, leave out all the guess work <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Initial careerSavegame, courseplay, guidancesteering and farm* xml copying went well, no big surprise there, just copying files over and be done with it. Next I started to parse items.xml for all the farm yard grain bin silos and other items I have which needs to be moved into new savegames items.xml without breaking any new IDs.
</p>

<p>
I copied v1.1.13 savegame dirs Items.xml to slut.xml (yeah, sorry... hah) and cleaned out all selling points (SellingStationPlaceable), railroad silos and trains (TrainPlaceable). I was actually surprised to see trains here, hmm I thought they were in vehicles.xml instead, interesting.
</p>

<p>
Removed "Workshop" which I assume is the vehicle shop repair / selling trigger.
</p>

<p>
What was left were CBJ buildings, grain bin silos, GtX silo displays (FS19_SiloDisplays), db liquid tanks (FS19_liquidStoragePack), giants buying stations and easy sheds.
</p>

<p>
I was wondering as slut.xml had several CBJ buildings in it, these must be the terrain defaultItems.xml because I don't think I bought any myself because I frankly don't play with barbie dolls meaning these vehicle sheds have no use to me, I just park my vehicles next to the field not in a farm yard vehicle sheds.
</p>

<p>
But I did comparison between slut.xml CBJ vehicle sheds with coordinates to Items.xml and found a match, so I removed it from slut.xml file.
</p>

<p>
Maybe one day it I could code savegame porting tool which would compare all these placeables etc, but these savegame ports are so rare across the years that I wonder if there is any worth coding such tool.
</p>

<p>
Don't know why but I was very excited about this task or rather where it leads to, a new fresh clean savegame on PMC Grande Gardens 16km v1.1.14 <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
What I did with placeable syncing was to check all CBJ buildings from slut.xml against items.xml, I searched for example the below line:
</p>

<p>
40x60shedRed.xml" position="5735
</p>

<p>
Which is the placeable type (40x60shedRed.xml) and position first coordinate, if there is match for this then I'm sure its the same unique placeable.
</p>

<p>
Sure it took a while to do this task but I didn't mind. I was actually looking forward to see if there will be any placeables left when done which would mean those are the ones I actually bought and placed in-game myself. And funnily the next object I checked after writing this paragraph, I found one in slut.xml which had no match in items.xml, so that CBJ building was something I bought.
</p>

<p>
Then I found grainSiloRailroad10 which had seeds in the bin, 79109.1875 liters to be exact. I do not know yet which railroad silo this is, its probably 11 in v1.1.14 terrain. Found another one with solid fertilizer.
</p>

<p>
The old train system had grainSiloRailroad12 as largest numbered silo, the terrain edit change was to rename these from 0-12 to 1-13, heh a big change <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
My first judgement call was to put fertilizer into railroad silo 3 as I simply do not remember how these were renamed. I even checked PMC Grande Gardens 16km Dev Diary but unfortunately I didn't write HOW railroad silos were renamed, just that they were. Big mistake, always be thorough <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
Seeds I put into railroad silo 11.
</p>

<p>
Once slut.xml was completely clean of any terrain placeables, I simply changed all "id=" numbers to 100 and above in sequential order, as largest one is id="99" in the items.xml config file. Then copied it as whole into last line of Items.xml before the ending /items property, then launched game and crossed fingers everything works <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Everything was working just great, no errors in the log and bunch of placeables shows up in my owned garage items, nice <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
I also realized why I had that one extra CBJ vehicle shed 40x60 size, it was the one I fixed in the terrain so it appeared as not matching in slut.xml config file. Ok this is not a big deal I simply just sold it off heh, got 5k or something from it, whee hehe.
</p>

<p>
2022-01-02T15:27:00Z Saved game and exited, next I need to start figuring out how to port vehicles.xml without breaking it up...
</p>

<p>
Copied old vehicles.xml to old-v.xml file name and opened it and new savegame vehicles.xml in editor, then started to investigate how can I port. But to my surprise I did not find anything in the train vehicles which would reference the specific trainSystem's in items.xml, they were simply vehicles... very odd, but guess the train just has to be on the tracks it doesn't matter what, who or where the tracks are... dunno. So I decided to just simply copy old-v.xml over to vehicles.xml and try to see what happens.
</p>

<p>
Everything seems to work ok, there was no issue with trains or any vehicles, I must have previously confused the one error belonging to vehicles.xml when it was in fact at items.xml instead. Oh well learned something new today.
</p>

<p>
Still looks like the outer edge train loop is not present, only four trains, but I think at some point of terrain development I removed it in attempt to improve performance and as the train was quite ... well useless in the edge. Will have to inspect dev diary, changelog and terrain itself.
</p>

<p>
2022-01-02T16:10:00Z Drove combines, grain carts and semi-trucks to header trailers, put headers on the trailers and picked up corn headers. Now our harvest fleet is ready to move into another field. Saved and exited, restroom break while I try to decide what to farm first.
</p>

<p>
2022-01-02T16:15:00Z Started FS19, this savegame now has 1070 hours in it. Decent amount of hours played, for one savegame <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Also nevermind what I said about the fifth train before, its there, it was just at bottom of VehicleExplorer so I didn't notice it haha.
</p>

<p>
I drove big bud 747's with bourgault air drills by F145 E side, was thinking of planting that field first.
</p>

<p>
Unfortunately it was getting late in the evening for me and at this point didn't feel like starting a planting season, it was not only the time of day but after the initial enthusiasm to port the savegame, I kind of lost interest again, hopefully just for today. Terrain looks and feels great now so should be no problem getting some farming action going on.
</p>

<p>
2022-01-02T16:39:00Z Saved game and shut down FS19.
</p>

<p>
Continue reading <a href="stories-start-from-zero-pmc-grande-gardens-16km-121.php">next page</a>, <a href="stories-from-zero-grande-gardens.php">Start From Zero PMC Grande Gardens 16km Home</a>, go back to <a href="stories-start-from-zero-pmc-grande-gardens-16km-119.php">previous page</a>.
</p>

</section>

<footer>
<p><a href="stories.php" class="button">FS19 Stories page</a> <a href="../index.php" class="button">PMC Farming Simulator root page</a></p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("../include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
