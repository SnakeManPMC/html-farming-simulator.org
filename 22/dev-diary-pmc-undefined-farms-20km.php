<!DOCTYPE html>
<html lang="en">
<head>
<title>Dev Diary PMC Undefined Farms 20km PMC Farming Simulator 22</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Dev Diary PMC Undefined Farms 20km PMC Farming Simulator 22">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<header>
<h1>Dev Diary PMC Undefined Farms 20km PMC Farming Simulator 22</h1>
</header>

<section>
	<h2>Dev Diary PMC Undefined Farms 20km FS22</h2>

<p>
This is developer diary for Farming Simulator 22 terrain called <a href="pmc-undefined-farms-20km.php">PMC Undefined Farms 20km</a>.
</p>

<p>
<i>Special note: this terrain project name was "PMC Test Farm 20km" which was just prior to first release renamed to final "PMC Undefined Farms 20km" name, this dev diary has been edited to list the final name to avoid confusion.</i>
</p>

<p>
2022-01-13
</p>

<pre>
Terrain size: 20.48 kilometers x 20.48 kilometers
Heightmap grid size 4096
Cell size 5 meters
heightScale="78.45"
</pre>

<p>
2022-01-13T15:54:08Z Got powergrep4 mass replaced config entries for XML and I3D files, then used L3DT to generate 4096 x 4096 resolution <a href="../19/terrain-heightmap.php">heightmap</a> image, heightscale is quite large (relatively for american farming) of 78m, wonder if I have to remake the heightmap to be more american looking.
</p>

<p>
Brought the terrain source files into <a href="../19/terrain-giants-editor.php">Giants Editor (GE)</a> v9.0.2 the first time, aligned careerStart to the ground and saved, this was another long saving, I really don't get it what the hell is wrong with FS22 GE as it saves forever, those dreaded 17min saves on <a href="pmc-cereal-region-32km.php">32.7km terrain</a> still haunt my dreams.
</p>

<p>
Its absolutely clear that whatever happens in the future, if GE newer versions keep saving large terrains this long, that it is not some faulty GDM/GRLE file I'm using... I won't be editing FS22 terrains that is for sure, I mean come on use your head, 17min to save one time... you usually save dozens of times per day, hundreds of times in the life time of a terrain, 17min each and yeah haha not going to happen.
</p>

<p>
Funnily I already started to <a href="../19/terrain-design-document.php">GIMP paint design doc</a> for this terrain while GE was saving on the background <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2022-01-13T16:11:46Z GIMP painted roads asphalt, roads dirt and railroad tracks.
</p>

<p>
Copied <a href="../19/terrain-design-document-graphicsmagick.php">graphicsmagick design doc bat files</a> from hmm PMC_Test_Farm_8km source dir into PMC_Undefined_Farms_20km source dir. These bat files are way outdated, I already did much more improved ones on PMC DevSurf computer, heh what a mess editing setup <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Anyways these bat files do just fine for now, this is a test of 20km size with some objects, nothing more.
</p>

<p>
GIMP painted farm yards and forest layers. Very quick sketches. Then had to paint some more roads because this is a large terrain and simple design doc just wont create anything useful in-game, fields would be just gigantic if there was just few roads.
</p>

<p>
2022-01-13T16:46:33Z Basic rough sketch design doc painting was done (I have to emphasize basic and rough).
</p>

<p>
2022-01-13T17:28:37Z Had a little lunch break, just finished. Now back to getting the graphicsmagick bat files to work nicely.
</p>

<p>
2022-01-13T17:46:09Z Finally GE files were in the state that terrain detail textures and fields show up like they are supposed to. Now just one more save in GE and then its first in-game test.
</p>

<p>
2022-01-13T17:53:17Z First in-game test, but of course I forgot to increase <a href="terrain-densitymap-infolayer-resolution-mapus.php">infoLayer size</a> and it crashed, okay one more round of GE saving ugh.
</p>

<p>
In GIMP when I press CTRL-SHIFT-E to export as, it brings up some stupid file open dialog. I searched and found out that this is some win10 bullshit keyboard shortcut:
</p>

<pre>
CTRL-SHIFT-E, Expands all directories from the tree in the navigation panel.
</pre>

<p>
In GE I tried to create new transformgroup and type in "PMC_Helpers" but before I managed to type all the characters, GE, or win10, I have no idea which one, erased the typing input dialog to default. What the fuck is going on.
</p>

<p>
Can you fucking believe I had to COPY PASTE this string into the attributes name field, sigh <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
In furious anger I formatted C: windows 10 garbage install, of course I took full backups of my personal files first. Then I proceeded to re-install win10 pro 64bit edition just to fix that stupid CTRL-SHIFT-E crap. I love microsoft.. <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

	<h2>2022-01-14 Buildings And Trees</h2>

<p>
2022-01-14T14:18:16Z New editing day has started after spending so much time yesterday reinstalling win10 + fs22 + gimp + graphicsmagic + misc tools.
</p>

<p>
Todays agenda is to add buildings and trees into PMC Undefined Farms 20km and see how the FPS are in-game. Most likely I also need to make a better design doc as the current is really stupid looking and I assume plays like crap in-game.
</p>

<p>
I re-read yesterdays dev diary text and was great to have a recap of what happened, now I know exactly where I left off before crap win10 reinstall mess took over. I was editing objects in GE, I believe created first three grain bins to placeables.xml config file.
</p>

<p>
Checked in GE and everything loads OK, PMC_Helpers is not there, placeables and storeItems XML config files look OK, okay lets copy current build to fs22 mods dir and try it in-game to see what game engine thinks of it.
</p>

<p>
In-game test looking good, vehicle shop spawns items into correct position facing away from the building, nice.
</p>

<p>
Seems like cultivator_density was 8192 pixel resolution for 20.4km terrain which results in very inaccurate field work in-game. Hmm need to reconsider switching it up a notch to 16384 pixel resolution.
</p>

<p>
2022-01-14T14:44:52Z Days first lunch break, haven't eaten anything since waking up...
</p>

<p>
2022-01-14T15:41:56Z Feeding time is over, back to terrain editing.
</p>

<p>
Design doc painting, making dirt/gravel roads.
</p>

<a href="screenshots/PMC-Undefined-Farms-20km-Design-Doc-2022-01-14T1610.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Undefined-Farms-20km-Design-Doc-2022-01-14T1610.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
2022-01-14T17:01:58Z Still painting, this feels like its taken a very long time. This is just me filling up the dirt roads now, making terrain detailed and not some fantasy land with oversize features like it was before.
</p>

<p>
2022-01-14T17:42:53Z Dirt roads finished for now. Now need to add fields back in and then its in-game test again.
</p>

<p>
2022-01-14T18:06:54Z Created backup bat file for PMC_Undefined_Farms_20km and used it, good to have working base terrain files just in case I mess things up and have to revert back to what was working.
</p>

<p>
Converted GDM/GRLE to PNG in preparations for a new cultivator_density and fruit_density images.
</p>

<p>
In order to find which infoLayer image does NOT need to be 16384 for irregular size terrains, I'm going to resize <a href="../19/terrain-farmland.php">farmland</a> into 4096 now. Lateron once everything works well I'll try some other to smaller size.
</p>

<p>
But to my surprise farmland image was already 2048 x 2048 resolution, hum I have no recollection about that, I must have discovered this fact some while back and just moved on, wonder if I even documented it anywhere, well I have now.
</p>

<p>
2022-01-14T18:28:13Z New <a href="../19/terrain-density-weight-images.php">density and weight images</a> loaded in GE and they are looking OK, saving and then going to take a look at in-game how it feels.
</p>

<pre>
PMC_Undefined_Farms_20km.i3d saved in 252749.591000 ms
</pre>

<pre>
2022-01-14 18:35 Error: Blocked area map is wrong size for terrain (16384 x 16384) vs (4096 x 4096)
</pre>

<p>
Well blocked area map ... okay that was hmm what the heck was it, infoLayer_placementCollisionGenerated maybe?
</p>

<p>
Also I forgot to create <a href="terrain-user-interface-images.php">PDA/overview.dds mapview image</a> into DDS format.
</p>

<p>
2022-01-14T18:54:07Z Resized infoLayer_placementCollisionGenerated.png down to 4096 x 4096 resolution. Created new 8192 x 8192 resolution overview.png and converted it to DDS using imagemagick. Then it was in-game testing time again.
</p>

<p>
In-game test looked pretty good.
</p>

<a href="screenshots/PMC-Undefined-Farms-20km-2022-01-14T1857.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Undefined-Farms-20km-2022-01-14T1857.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<a href="screenshots/PMC-Undefined-Farms-20km-2022-01-14T1859.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Undefined-Farms-20km-2022-01-14T1859.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
Then needed to add few mods like GPS, courseplay and proper plow before I could do further testing, as I just cant drive manually using some crappy plows. I'm not overly enthusiastic about the rock picking, but want to confirm it works.
</p>

<p>
Tested courseplay plowing a field with two tractors, FPS was not max but it was in the 50s range and felt very smooth. There was no stuttering (especially because its using 8192 res density images).
</p>

<p>
Rocks are working too, nice.
</p>

<a href="screenshots/PMC-Undefined-Farms-20km-2022-01-14T1938_34.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Undefined-Farms-20km-2022-01-14T1938_34.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
Guess its time to start adding some buildings and trees.
</p>

<p>
2022-01-14T21:11:12Z Finished playing around with GE mesh painting mode placing some trees down. Overall impression is that it sucks. You have to paint one tree type at one time, its best feature is to not stack objects which splinePlacement script does. But yeah splinePlacement script is still overall better look, especially the more object types you got.
</p>

<pre>
PMC_Undefined_Farms_20km.i3d saved in 10230.395600 ms
</pre>

<p>
Trees look okay.
</p>

<a href="screenshots/PMC-Undefined-Farms-20km-2022-01-14T2123.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Undefined-Farms-20km-2022-01-14T2123.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
The only problem is, we would need thousands more of them for them to actually make any difference in the whole terrain <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
In GE adjusted Sun range from 10km to 25.6km.
</p>

<p>
2022-01-14T21:53:02Z GE v9.0.2 crashed when using mesh paint mode <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
2022-01-14T22:12:42Z GE v9.0.2 crashed when using mesh paint mode <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
Sigh. So guess I wont be using that feature anymore.
</p>

<p>
Tested splinePlacement v1.3 script from FS19 and it didn't work with the settings I've been using on FS19, the script in general works but just not my settings, as I tried one other very simple configuration of the script with everything disabled and that placed objects just fine. But yeah if I cant place trees then "its not working" heh.
</p>

<p>
2022-01-14T23:01:31Z Added bunch of <a href="../19/terrain-field-definitions.php">field definitions</a>, just like 15min work, enough to make my pinky finger hurt and just barely enough fields to simulate <a href="../19/stories.php">Start From Zero</a> savegame.
</p>

<p>
2022-01-15T02:07:23Z Finished game-play testing session and eating some lunch, now I'm starting another set of edits to improve next gaming session. Edits I need to make is to increase density image resolution to massive 16384 resolution, increase field sizes, grow them at least 10 pixels, will have to see how it looks in GIMP. Then add few more trees with the mesh painting mode which crashes all the time, lets hope I could manage to do only few trees before it crashes.
</p>

<p>
Edited design doc in GIMP by reworking the vehicle shop area farm yard texture, added roads in and out of that area. Then increased field sizes a bit, not sure how much larger than roads they are now, I think it was first 20 pixel grow, then 10 pixel shrink, hmm heh should have written that down, okay I'll do it the next time, promise <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Now I realized that increasing density image size to 16384 is ... not exactly possible, my design doc resolution is 10240 x 10240 which is already a very large, if I were to increase it to 16k then I honestly cant even count how many meters per pixel it would make and that alone would be really confusing from design point of view. Ideally it should be 20480 resolution meaning 1m/px but that is damn hardcore for GIMP using several layers, this 10240 image already starts to lag bad when I have every layers features selected (marching ants).
</p>

<p>
So hmm I might increase the size just technically in graphicsmagick, it would not add more details but maybe it would work smoother in-game once you start to cut crops.
</p>

<p>
2022-01-15T02:48:05Z Brought the new images into GE, noticed / realized that trees are now in fields because fields got bigger, also forgot to export farm yards image. So have to go back and export farm yards and re-create all the trees, there is no way to move them its just easier to delete and place them all over again.
</p>

<p>
I tried placing some trees with mesh painting mode but it crashed twice, then had to place few trees with the interactive mode...
</p>

<p>
What an horrible experience was it to use plain and simple GE interactive placement mode, put down one tree at the time, oh my. I need to sort out the splinePlacement script why it doesn't work in GE v9.0.2 at all with my settings.
</p>

<p>
2022-01-15T03:21:53Z Saved project and its time to do another in-game test, most likely (hopefully) it will be todays last and I get to play these last hours of the day with some nice farming.
</p>

<p>
Was game-play testing, trees and new farm yard textures looked OK. Did cultivating mission with kuhn prolander 7500 which was 7.6m wide and it generated incredibly bad looking crop accuracy, it cultivated like 1 almost 2 meters off.
</p>

<p>
I absolutely have to increase density image resolution to 16384, there is no way around it.
</p>

<p>
2022-01-15T05:32:15Z Shut down FS22, time to call it a night at least with PMC Gaming computer, this game-play testing was going nicely but dunno what else could I learn from it at this point. Need to get some computer chores done before bed time, so time to shut it all down.
</p>

	<h2>2022-01-15 Placing With Splines</h2>

<p>
2022-01-15T17:19:33Z New editing day has started... sorry, already started like half an hour ago when I was studying splinePlacement v1.3 script by TracMax, why didn't it work yesterday for placing trees.
</p>

<p>
Got splinePlacement script to work in deleteme 2km sandbox testing terrain, now I just took backups from PMC Undefined Farms 20km and plan is to place some trees, assuming the edited script still works in huge terrain.
</p>

<a href="screenshots/PMC-Undefined-Farms-20km-2022-01-15T1737.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Undefined-Farms-20km-2022-01-15T1737.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
Six tree lines / forest patches added, looking pretty thick already <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<a href="screenshots/PMC-Undefined-Farms-20km-2022-01-15T1848.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Undefined-Farms-20km-2022-01-15T1848.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
2022-01-15T19:23:41Z Pretty much the sandbox playground area around vehicle shop and field definitions now has nice sparse tree lines. Going to try it in-game and see how it runs <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
In-game test shows everything working fine. We got a nice sandbox area around vehicle shop now where we can do contracts and have some quick fun.
</p>

<p>
Resized _density images to 16384 resolution so we can have a bit nicer crop/fruit accuracy in-game.
</p>

<p>
2022-01-15T19:43:39Z Lunch break...
</p>

<p>
2022-01-15T20:04:49Z Feeding time is over, back to editing.
</p>

<pre>
PMC_Undefined_Farms_20km.i3d saved in 419125.273700 ms, uuh.
</pre>

<p>
Decided to try that german field definitions script as I don't actually want to create hundreds of field definitions right now. It actually isn't even much faster way of doing it because you still have to paint cultivator_density with unique RGBs which is painful to do for hundreds of selections.
</p>

<p>
Took backups, never forget backups.
</p>

<p>
Edited PMC_Undefined_Farms_20km.i3d and added new line there under infolayer farmland line:
</p>

<pre>
&lt;InfoLayer name="fieldDimensions" fileId="10000" numChannels="8"/&gt;
</pre>

<p>
Then in section files added:
</p>

<pre>
&lt;File fileId="10000" filename="Exclude.For.Release/Field.Definitions.Script.2022-01-15/field_definitions.png"/&gt;
</pre>

<p>
But can of worms opened up... this terrains cultivator_density is 16384 res as just mentioned above, also the far edge had a buggy field connection where all edge fields were connected together, that must be fixed in design doc level first, uuh.
</p>

<p>
In GIMP cutting that fields layer excess fat from the edge is done with rectangle selection, use position 10, 10 and size 10220, 10220 values and rectangle selection tool snaps into correct position and size, then just hit enter to "do it" and then CTRL-I to invert and finally DELete to cut off the excess fat.
</p>

<p>
2022-01-15T20:45:39Z Got the GIMP editing done and PNG exported, now need to run everything else through the graphicsmagick bat files, uuh. Hmm or maybe not, I'll try doing just fruit_density, it should work.
</p>

<p>
Actually for that german field definitions script to work I need to first test it on tiny 2km terrain as I have never done it for FS22 before. So this task will take some of my editing time again heh.
</p>

<p>
2022-01-15T21:42:25Z Alright did some work on the german field definitions script using deleteme 2km terrain and got it working, however new issue came up which I was kind of expecting...
</p>

<p>
So when I loaded cultivator_density layer in design doc and saw this following image:
</p>

<a href="screenshots/PMC-Undefined-Farms-20km-2022-01-15T2141.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Undefined-Farms-20km-2022-01-15T2141.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
Each of those fields would have to be unique RGB 1,1,1 and RGB 2,2,2 and RGB 3,3,3 etc etc...
</p>

<p>
I went like yeah eff that man, I ain't gonna do stupid shizzle like that <img src="../images/smileys/icon_biggrin.gif" alt="Smiley :D" loading="lazy">
</p>

<p>
The amount of time I would be painting those field selections to unique RGB colors would be way WAY more work than actually copy pasting field definitions in GE <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
So no, I wont be doing jawohl field definitions script <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
I might try to do fields in GE today, not sure, my pinky finger is already hurting just by thinking about it, but besides penalty_box tonights possible live stream where he does Start From Zero contracts, dunno if there is need for more fields, tonight. Obviously for eventual release it should have full field coverage.
</p>

<p>
For now I'm going to remove the german script crap lines from TERRAIN.i3d file and then proceed to make few more field definitions, just quickly.
</p>

<p>
2022-01-15T22:09:44Z Latest in-game test started. First noticed that overview.dds image is still not updated for the new vehicle shop area.
</p>

<p>
While testing contracts was talking with penalty_box in PMC discord and he wanted me to send internal testing version now so I saved, exited and started to make one.
</p>

<p>
I added two more field definitions and updated overview.dds image. Then on last final in-game test i discovered that infolayer _level images like plow, lime etc were too small, they were 8192 when they should have been 16384, so fixed that quickly.
</p>

<p>
2022-01-15T23:15:35Z Internal testing version 0.1 has been sent to penalty_box, he will be twitch live streaming it soon tonight, looking forward to seeing it. Also I'm starting to play now, doing some contracts, just having some farming fun.
</p>

<p>
2022-01-16T00:00:53Z Started to work on v0.1.1 as penalty_box pointed out there are no <a href="../19/terrain-selling-points.php">selling points</a> so cant do harvesting contracts.
</p>

<p>
2022-01-16T01:02:07Z Did v0.1.1 where selling points got added.
</p>

<p>
2022-01-16T01:33:10Z Finally v0.1.1 with selling points was loaded in-game and I was ready for some relaxing farming <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

	<h2>2022-01-20 Painting Farmlands Image</h2>

<p>
2022-01-20T04:15:10Z New editing day has started, todays goal is to add some <a href="../19/terrain-farmland-channels.php">farmland ID channels</a> so penalty_box can have more enjoyable game-play.
</p>

<p>
Right here I had copy pasted selling point XML filleTypes list but that is just way too long text/xml to be put here, just imagine all the FS22 v1.2.0.2 maps_fillTypes (or whatever it was) XML lines. Just didn't want to spam it here with all the html characters etc.
</p>

<p>
2022-01-20T04:28:33Z Added all those fillTypes to selling points, everything is there except diesel, dunno why its missing, will try to add it there too to be complete sell shizzle.
</p>

<p>
2022-01-20T04:37:48Z Diesel is in, now every single thing product type is sell-able in this terrain and all upcoming PMC terrain updates.
</p>

<p>
Then added 8 more selling points for total 20, just in placeables.xml to test how the GUI looks, I did not edit actual world coordinates to them. No need to do that work until I see how many selling points fit into the GUI before it starts to scroll.
</p>

<p>
In-game test shows that 13 selling points is the max without scrolling.
</p>

<p>
2022-01-20T04:50:23Z Edited "Objects.for.terrains" dir's sellingpoints xml files so that they can be copied over to every terrain dir and then just hook up in placeables.xml config file, they have generic names now so that they sort alphabetically.
</p>

<p>
Then it was time to add selling point 13 into PMC_Helpers which meant a very long GE import. I still don't get what the hell is GE processing this long just for importing a very small i3d file.
</p>

<p>
In GE changed sun -> attributes -> light -> fixed bbox min/max values to 8192. Humm I think it should be 10240, hmm, yeah I changed it to that.
</p>

<p>
Next on my list was to <a href="../19/terrain-farmland-painting-gimp.php">paint farmland image</a>, more ID channels buyable lands there.
</p>

<p>
2022-01-20T05:13:23Z Started to create farmland image, 2048 x 2048 res as thats what the graphicsmagick bat file resizes it to, hmm. Saved it to design-doc-farmland.xcf file name.
</p>

<p>
2022-01-20T06:48:24Z Lunch break over, back to GIMP painting farmland image.
</p>

<p>
2022-01-20T08:02:04Z Still adding farmland areas, heh this job is no joke, takes forever to add all the 255 ID channel colors to areas <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Also learned lesson while doing that, there are no shortcuts when it comes to farmland image painting, you just have to do it one ID/color/area at the time properly, if you start to do blind rectangle selections "just quickly" it leads nowhere other than bad results. Its not worth trying to do it quickly, farmland like that is not fun to play on.
</p>

<p>
2022-01-20T09:01:38Z Uuh finished painting farmland image.
</p>

<p>
Man... never do farmland image painting again for these throw away "test-farm" terrains, its way too much work I mean look at how many hours I spent painting this, wow.
</p>

<a href="screenshots/PMC-Undefined-Farms-20km-2022-01-20T0903.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Undefined-Farms-20km-2022-01-20T0903.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
Created farmland TERRAIN.i3d entry, took some copy pasting.
</p>

<p>
Again right here was the huge long list of 255 farmland ID channel XML config lines, I did not want to spam it here same as maps_fillTypes.xml above. Just imagine 255 lines of XML hehe.
</p>

<p>
2022-01-20T09:45:09Z Farmland image painting in GIMP failed, it came out as grayscale image all pixelated.
</p>

<p>
It was complete nightmare to track down the bad RGB, I believe it happened as I used pick color to a layer that had opacity 50% so the color was off, it did not pick the real color underneath but the one that was shown with the opacity. My bad.
</p>

<p>
I can see the spot where the error happened as it is odd-off number RGB, but I cant pinpoint which part of the graphicsmagick bat it is, meaning what RGB is should be.
</p>

<p>
Stupid mistake cost me a lot of time debugging and hunting a bug.
</p>

<p>
Pisses me off as this is throw away test terrain also that why am I putting so much effort making it nice.
</p>

<p>
2022-01-20T10:17:28Z Got it fixed, not sure what I did exactly heh, super tired. At least it looks like its fixed, I believe I deleted the offending RGB color so it automatically by GIMP layers reverts to RGB 255,255,255 which is the background or fall back color so to speak.
</p>

<p>
And once more, here we had <b>farmlands.xml</b> config file, all 255 lines of XML text. Did not spam it here.
</p>

<p>
Updated farmlands.xml beginning from 64:
</p>

<p>
(255 line long XML config text removed from here)
</p>

<p>
Man my copy paste finger is hurting! <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Changed farmland numChannel to 9, dunno if its correct heh, I'm so tired I might as well be sending smoke signals haha.
</p>

<p>
In-game test resulted error:
</p>

<pre>
2022-01-20 11:11 Error: Farmland-Id 82 not defined in farmland ownage file 'C:/FS22.Mods/Dev/PMC_Undefined_Farms_20km/maps/PMC_Undefined_Farms_20km/data/PMC_Undefined_Farms_20km_farmland.grle'. Skipping farmland definition!
</pre>

<p>
Newbie in action <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
2022-01-20T11:14:13Z I blame it on the late night, I am completely dead tired in zombi mode, still 24min left in this day until my 17hrs been awake alarm goes off. I slept only five or so hours last night so now its taking its toll.
</p>

<p>
But I want to get this farmland image finished before going to bed tonight.
</p>

<p>
2022-01-20T11:38:50Z And now the alarm went off to signal bed time, but farmland image is still not working, just finished in-game test and got some odd errors, says 510 farmland IDs are not used, err was the numchannels 9 wrong number then, hmm.
</p>

<p>
Checked in-game and farmland image works! Whohoo!
</p>

<p>
There was issue of the outline not showing, but either its my video preset LOW or just large terrain issue I don't know.
</p>

<p>
2022-01-20T11:56:03Z Dead tired, have to call it a night.
</p>

	<h2>2022-01-21 Utility Pole Forest</h2>

<p>
2022-01-21T01:35:43Z New editing day has started, as usual it begins by taking a backup. Then copied another 7-zip project dir archive to PMC DevSurf because I need to compile new version for penalty_box on his saturdays stream.
</p>

<p>
Was looking at bugs list, got couple of them resolved right away after discussing in penalty_box's stream when he was playing PMC Texas Rowena 8km pre-alpha version.
</p>

<p>
Created new preview.xcf image, just copy pasted overview.xcf into it.
</p>

<p>
Made a new imagemagick bat which generated icon.dds from preview.png image.
</p>

<p>
2022-01-21T02:46:42Z Added four meridian flatbottom grain bins into one of the farm yard locations. Now its in-game testing time.
</p>

<p>
In-game test complete, 4 new grain bin silos in-game, no errors in the log. And the grain bin daily upkeep is removed, that was a great fix, it was so annoying to bleed off money for no reason.
</p>

<p>
Next I'm going to add fieldGrassMission to couple of the fields, I want to have some grass contracts available.
</p>

<p>
Added one big and two small narrow field definitions all with fieldGrassMission attribute boolean true.
</p>

<p>
2022-01-21T03:36:11Z Sorry forgot to write play-by-play updates... uuh what did I do, added three big forest areas or lets call them tree lines. Now started to add utility poles but those I need to grab from mapUS first.
</p>

<p>
2022-01-21T04:11:05Z First utility pole line objects created, no wires though (snif).
</p>

<p>
2022-01-21T04:35:34Z In-game check completed, utility poles look great, even without wires, they add so much "life" to the otherwise barren terrain <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Then went and added enercon EP4 biggest wind turbines as placeables.xml config file entries.
</p>

<p>
2022-01-21T05:08:36Z In-game test show unfortunately that enercon EP4 wind turbines give error in the log.
</p>

<pre>
2022-01-21 05:00 C:/FS22.Mods/Dev/FS22_Enercon_EP4/E141_159m/Enercon_EP4.i3d (24.32 ms)
2022-01-21 05:00 Warning (script): 'setWorldRotation': Argument 2 has wrong type. Expected: Float. Actual: Nil
2022-01-21 05:00   D:\auto_builder\cache\svn\bc39c0c6d611016d38088dfeb30cadc8\src\base\scripting\lua\LuaScriptSystem.cpp (890): expectedType == Value::VoidType || expectedType == Value::ClassType
</pre>

<p>
It would be fine to use that through GE directly, I would actually prefer that, but if I do that then animations wont work.
</p>

<p>
I am really bummed out with that error, the wind turbine looks so majestic as it revolves slowly, but yeah zero tolerance policy for errors so they are out.
</p>

<p>
2022-01-21T05:39:26Z Decided to do a little bit game-play testing next, was so bummed out about wind turbines not working wanted to relax with some nice farming, maybe trying grass contracts on the new fields, dunno.
</p>

<p>
Saw that selling point 13 has a name bug, it says 12 heh, fixed.
</p>

<a href="screenshots/PMC-Undefined-Farms-20km-2022-01-21T0549.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Undefined-Farms-20km-2022-01-21T0549.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
2022-01-21T08:37:27Z Finished game-play testing, I mowed grass field, windrowed it, baled and wrapped it, collected bales and hauled them to PMC Sell 11 selling point, but nothing happened. I could not sell wrapped silage round bales.
</p>

<p>
Started new farmer game mode again, this time I'll only do fertilizing, harvest and maybe cultivating contracts.
</p>

<p>
Was dead tired when shut down PMC Gaming computer and called it a night, didn't write down the UTC time stamp, but it was pretty close to a full 17hrs editing day.
</p>

<p>
2022-01-21T19:19:02Z New editing day has started, win10 booted up and ready to try fix two issues before shipping new PMC Undefined Farms 20km version to testing.
</p>

<p>
In PMC Farming discord guys helped me out with silage bale trigger and enercon EP4 giving errors. I tried the enercon EP 4 fix first, unfortunately it did not work.
</p>

<p>
placeables.xml:
</p>

<pre>
&lt;placeable filename="$moddir$FS22_Enercon_EP4/E141_159m/Enercon_EP4.xml" position="2892 66.8744812 620.44042969" rotation="0 0 0" /&gt;
</pre>

<p>
And in-game log gets errors:
</p>

<pre>
2022-01-21 19:26 C:/FS22.Mods/Dev/FS22_Enercon_EP4/E141_159m/Enercon_EP4.i3d (22.72 ms)
2022-01-21 19:26 Warning (script): 'setWorldRotation': Argument 2 has wrong type. Expected: Float. Actual: Nil
2022-01-21 19:26   D:\auto_builder\cache\svn\bc39c0c6d611016d38088dfeb30cadc8\src\base\scripting\lua\LuaScriptSystem.cpp (890): expectedType == Value::VoidType || expectedType == Value::ClassType
2022-01-21 19:26 LUA call stack:
dataS/scripts/placeables/specializations/PlaceableWindTurbine.lua (173) : setWorldRotation
dataS/scripts/placeables/specializations/PlaceableWindTurbine.lua (155) : updateHeadRotation
dataS/scripts/placeables/Placeable.lua (372) : loadFromXMLFile
dataS/scripts/placeables/Placeable.lua (352) : onFinishedLoading
dataS/scripts/i3d/I3DManager.lua (134) : asyncCallbackFunction
</pre>

<p>
Next up, figuring out the bale sell triggers.
</p>

<p>
Giants mapUS:
</p>

<pre>
&lt;placeable mapBoundId="sellingStationBales" filename="data/placeables/mapUS/sellingStationBales/sellingStationBales.xml" position="-647.75 82 -354.5" rotation="0 0 0" /&gt;
</pre>

<p>
Well that was fairly easy fix heh, but maybe I'll move that sellingStationBales.xml into PMC terrain dir.
</p>

<p>
Did just that, also took bale selling warning stripes from mapUS into my Objects.for.terrains/ dir.
</p>

<p>
Now becomes the problem of where do I place this trigger, if its in middle of nowhere it wont look very good, it actually wont look like anything if trigger warning stripes are hidden in a grass hehe. So would need some kind of logical building, hmm. Maybe I'll just put in somewhere in dealership area for now, even though it would require SOME sort of structure there as well. Hmph.
</p>

<p>
Placed them behind dealership without a building now, hey this is a test-farm to begin with <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Had to go in-game to test it right away.
</p>

<p>
2022-01-21T20:06:01Z Bale selling trigger works, can dump raw silage from a trailer, straw and silage square bales (used dev console to create them from thin air), wrapped silage round bales should work the same.
</p>

<p>
In GE added giants water tower object, it unfortunately says in the text label elmcreek but well, dunno how to change the texture and not interested of spending time figuring out for such vanity item, big deal it says elmcreek, its almost funny for such beast of 20.4km terrain <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Put enercon EP4 into elmcreek fresh new savegame, checked out placeables.xml in the savegame and it read like this:
</p>

<pre>
&lt;placeable modName="FS22_Enercon_EP4" filename="$moddir$FS22_Enercon_EP4/E141_159m/Enercon_EP4.xml" id="48" position="186.32775878906 85.591430664063 159.88862609863" rotation="0 0 0" age="0.000000" price="500000.000000" farmId="1">
&lt;windTurbine headRotation="-113.000000"/&gt;
&lt;/placeable&gt;
</pre>

<p>
Going to try that headRotation property to my placeables.xml config file.
</p>

<p>
Did not work, if I add that headrotation property line there it gives XML error. So yeah I'm out of ideas for this one, I need to leave wind turbines out for now.
</p>

<p>
Yep I cant think of anything else to do for now so I'm going to ship out testing version, lets call it v0.1.2 for testers (penalty_box basically).
</p>

<p>
PMC_Undefined_Farms_20km_v0.1.2.7z
</p>

<p>
2022-01-21T21:04:31Z After uploading v0.1.2 to google drive I realized the grass contracts might still be bugged because selling point are now advertising they accept silage even though they don't. Or at least silage BALES are not accepted, maybe they accept silage/grass/straw in raw form.
</p>

<p>
Hmm I need to test and document that.
</p>

<p>
Okay so placeables\sellingStationBales\sellingStationBales.xml lists these:
</p>

<pre>
&lt;unloadTrigger exactFillRootNode="unloadTrigger" fillTypes="STRAW DRYGRASS_WINDROW GRASS_WINDROW SILAGE SUGARBEET_CUT" aiNode="aiNode" &gt;
&lt;baleTrigger triggerNode="baleTrigger" deleteLitersPerSecond="10000"/&gt;
&lt;/unloadTrigger&gt;
&lt;fillType name="STRAW"            priceScale="1" supportsGreatDemand="true" disablePriceDrop="false" /&gt;
&lt;fillType name="DRYGRASS_WINDROW" priceScale="1" supportsGreatDemand="true" disablePriceDrop="false" /&gt;
&lt;fillType name="GRASS_WINDROW"    priceScale="1" supportsGreatDemand="true" disablePriceDrop="false" /&gt;
&lt;fillType name="SILAGE"           priceScale="1" supportsGreatDemand="true" disablePriceDrop="false" /&gt;
&lt;fillType name="SUGARBEET_CUT"    priceScale="1" supportsGreatDemand="true" disablePriceDrop="false" /&gt;
</pre>

<p>
That is the raw form of fill types, like straw can be forage wagon collected or in round/square bales. Important thing is the "baleTrigger" property, I don't think regular selling point has this. Not sure why they are separated, I mean you sell shit to fantasy oblivion black hole basically, why do these different fillTypes be separated like that.
</p>

<p>
Then placeables\sellingpoints\sellingpoint01.xml lists fillTypes of: SEEDS SILAGE SILAGE_ADDITIVE SORGHUM etc etc, so hmm not sure how all that plays out. I have no issue using forage wagon or regular trailer to dump raw form straw/grass/silage into those selling points.
</p>

<p>
I need to test in-game if the contracts can now pickup the BALE selling point specifically or will they still offer deliveries for regular selling points.
</p>

<p>
2022-01-21T21:31:21Z Ported over my previous new farmer game mode unofficial Start From Zero savegame. It was basically just testing savegame where I played in old traditional zero style. Brought over career, farms and vehicles XML files, those could be copied straight over a new fresh savegame files.
</p>

<p>
In fact this should be documented in PMC Farming web site that you should only start a career savegame once per terrain, then just copy over those above mentioned XMLs and you are good to continue your farming business in that particular terrain.
</p>

<p>
After loading the savegame up I remembered that in the latest savegame with most money, I owned rubicon, semi truck and liquid tanker trailer, I deleted that savegame at some point so those are now gone. No big deal like I said this is just testing, its not end of the world heh, but it kind of reflects on the savegame continuation, if you work hard in Start From Zero mode, why would you lose the time played, money and vehicles... makes no sense.
</p>

<p>
Always save your careerSavegame.xml, Courseplay.xml, farms.xml, guidanceSteering.xml and vehicles.xml across terrain upgrades.
</p>

<p>
2022-01-21T21:43:32Z So I bought rubicon 9000, semi truck and liquid tanker trailer. Budget now 359.3k so lets start doing some contracts <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2022-01-22T02:21:39Z Still doing contracts, I now have second liquid tanker trailer and placeable product buy point, budget is 819.8k so pretty nice. Been thinking about buying my first own land and start to harvest it. Dunno if I have enough money for land and all the vehicles required.
</p>

<p>
2022-01-22T05:59:32Z Bought the land north side around dealership, this is all field, it has no field number so its great, right next to the dealership, center of the action heh.
</p>

<p>
2022-01-22T06:32:45Z Bought fendt 942 vario and john deere 2623 disc. Budget now 276.8k, heh not enough money to buy harvester or even a seeder, oh well gonna have to do some more contracts.
</p>

<p>
2022-01-22T09:00:36Z Time to call it a night, still want to do few computer chores before going to bed. Also feel almost guilty for just playing instead of editing heh.
</p>

	<h2>2022-01-30 Farm Yard Mess</h2>

<p>
2022-01-30T13:04:51Z New editing day has started, todays goal is to check and verify this terrain is good to go for release. My issues list have note about farm yards being on fields without a road access, that is indeed troublesome, its ... unacceptable, makes no sense whatsoever to have them designed like this. However I believe the farmland image was quite detailed so if I change the farm yards in design doc, then I need to edit that pesky farmland image as well, I am really not looking forward of such re-design.
</p>

<p>
Lets start by syncing project dir to fs22 mods dir and go look in-game, how is everything.
</p>

<p>
In-game check shows error free log and very few of those farm yards and pretty much all of them without a road access, damn dude what a mess <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
It is a lot of work to do fix those farm yards and add more, because I have to add more, but... I just have to do it, I cant release it like this as it looks like a child painted the yards with crayons. So off to take backups and then fire up design doc in GIMP and start painting.
</p>

<p>
2022-01-30T13:26:56Z Going to need some motivational energy to get through this farm yard re-design because I know I'm such a fuckup that I'll go wild and add bunch of other stuff in there as well, so what better time to take a lunch break ...
</p>

<p>
2022-01-30T13:57:47Z Feeding time is over, back to GIMP doing some farming designs.
</p>

<p>
Loaded project on GE just to coordinate a bit with GIMP design doc and there I see that hmm weight images are all broken up, I must have accidentally copied some other terrains weight images here before, might have been either 40km or 45km dunno. Oh well copied 20km ones here to restore order.
</p>

<p>
Imported PMC_Helpers.i3d which again took forever. Saddest part is that how I did it now, the order of things, is that this is only the first GE save for 20km terrain today, I need to make one save to exit and once design doc new images are in then need to do another. GE does have the reload textures feature, but I never used it and I simply do not trust it.
</p>

<p>
2022-01-30T15:12:18Z Finally got somewhat OK looking design with new farm yards into GE, it has been a mess with the graphicsmagick bat files etc. Some field definitions are slightly leaking above cultivator_density on the corners but its nothing game breaking.
</p>

<p>
New farm yards with short driveways look great though.
</p>

<p>
Some of the fields turned out really goofy as I used the grow 30, invert, shrink 5, grow 25 method, there was even whole fields that disappeared in SE region, odd. Hmm might need to pay more attention to them on the whole grow/shink/grow hustle.
</p>

<p>
Painted the fields back in GIMP manually. I could have done new grow/shrink loop but just wanted to quickly paint them in and be done with it. I have no recollection which grow/shrink setup I used with this terrain initially, it must have been very crude and hasty back then.
</p>

<p>
2022-01-30T15:46:07Z Started to lose concentration, not tired yet but just mental focus is completely off, I'm slouching back in office chair head leaning to the headrest and just cant get anything productive going, cant get the mental energy together to push in further edits.
</p>

<p>
I need to call it here but write latest updates from fresh memory here so that tomorrow I don't have to scratch my head that "what the hell did I do last night!?" heh.
</p>

<p>
Personal summary message for tomorrow hah: So GIMP design doc got new farm yards and they look cool, but in the fields grow/shrink selection operation went slightly sideways, fields are now extremely rounded corners and feel smaller, also many small fields were discarded by the grow/shrink selection process. Tomorrow... it would be nice to re-try this with fresh energetic head, to get the fields right. Oh and also new farm yards have no forest tree line patch paintings on them, that should be added as well.
</p>

	<h2>2022-01-31 Grow Invert Shrink Repeat</h2>

<p>
2022-01-31T01:48:37Z Tomorrow is here! Yeah new editing day and was excellent to get started after reading the above paragraph, no need to wonder and try to figure out what I did or did not do last night, it was all written there. Now I can just jump in and continue editing.
</p>

<p>
Honestly I don't feel like re-doing the field selection, yeah they look slightly different after these new farm yards but overall they are fine. But decided to give it a try anyways, I don't need to save GIMP XCF if the selection grow/shrink shuffle goes bad.
</p>

<p>
Got the fields much bigger and less smooth corners but still so that they are comfortable to field work on. I bet there will be now many trees on fields, will have to check in GE to see if I can just fix those fields or is it too much work.
</p>

<p>
Oh right yeah I didn't take backups this morning because yesterday I did not make any progress, I was just fooling around with the design in GIMP, there has been no terrain project dir files (GE files) which were edited. Of course I could have taken backups from the design doc, but as said before pressing CTRL-S to save in GIMP we are good, and luckily the new field selections turned out alright.
</p>

<p>
There was many trees right at the field edge which would have been difficult to farm as a player and hired courseplay for sure would have collided with the trees. Luckily there arent that many trees in this terrain so I could manually custom fix those, or I could use maybe 2 pixel less selection growth, hmm.
</p>

<p>
Now I used grow 15 pixels, invert, shrink 5 and grow ... umm no that doesn't sound right; 15, invert, shrink 2, grow 13, uuh I cant remember why on earth didn't I write the list down, so stupid.
</p>

<p>
Lets try this formula again: grow 15, invert, shrink 5, grow 15. That results into <i>eeextremely</i> tight selection for fields, but it still looks like it could work, without existing tree lines or utility poles between field and a road.
</p>

<p>
This below GIMP design doc screenshot is from PMC Super Six 6km terrain XCF image because it was more light weight 6144x6144 resolution to test on than the bigger 20km terrains one, so nevermind that, just look at the selection heh.
</p>

<a href="screenshots/PMC-Undefined-Farms-20km-2022-01-31T0221.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Undefined-Farms-20km-2022-01-31T0221.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
Looks pretty tight which is good, but not good for existing trees and utility poles for sure.
</p>

<p>
g 15 -> i -> s 5 -> g 15, got it? Good... <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Going back to PMC Undefined Farms 20km design doc and paint new farm yard forest tree lines, they need them. Also, why not paint forest areas to the existing GE placed trees, yes its not ideal solution to paint them after trees are already in place, but maybe it would fit close enough.
</p>

<p>
I told you, this design doc would get out of hand and turn into a hot mess <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
2022-01-31T02:47:23Z Finished painting more forest tree lines, including all new farm yards. Oh man this will create so much more GE object placing work heh.
</p>

<p>
Actually those detailed narrow forest tree lines and g15-i-s5-g15 shuffle resulted into really nice overall design, check this out.
</p>

<a href="screenshots/PMC-Undefined-Farms-20km-2022-01-31T0252.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Undefined-Farms-20km-2022-01-31T0252.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
I like the tightness <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
2022-01-31T03:09:00Z PMC Undefined Farms 20km design doc is finalized, I just have to call it at some point otherwise its one tweak after another until the end of days. Unless there is some blatant game breaking bug in this design, this is the final design. Exported images and ready to run graphicsmagick conversion bat before GE check.
</p>

<p>
Then fixed the new farm yards on design-doc-farmland.xcf image. This was an easy task as there was only three farm yards which fell into the split farmland ID channel colors. However I did not get to paint individual colors for them, I have no idea how many colors I've used in this image so far, I think it was all, so hmm I would have to shuffle some RGBs around to make room for these farm yards and to tell you the truth, I'm too lazy to start such task right now. There are plenty of small farmlands to buy that any new farmer or Start From Zero savegames are easily doable.
</p>

<p>
Checked out farmland image graphicsmagick generated temporary PNGs and sure enough, all 255 colors are used, so yeah no individual colors for these new farm yards, sorry.
</p>

<p>
2022-01-31T03:31:51Z Its time to load final images into GE and do a first save there.
</p>

<p>
Utility poles were on a field in one location so I had to bring in PMC_Helpers which was another long "Loading..." time, sigh. OK only one for today, after I've hit CTRL-S save here today there won't be any more no matter what issues came up.
</p>

<p>
Surprisingly the loading time was rather quick this time, okay cool.
</p>

<a href="screenshots/PMC-Undefined-Farms-20km-2022-01-31T0343.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Undefined-Farms-20km-2022-01-31T0343.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
2022-01-31T04:03:21Z Had a great trouble re-creating one of the utility pole lines, it went belly up real quick as I tried to adjust the existing spline control vertexes, in the end got frustrated and had to delete and remake the whole spline heh.
</p>

<p>
During this process I also discovered why GE started to lag in the RMB-WASD camera movement mode, its apparently because if you press W when object is selected it turn into some odd mode dunno what it is, that causes the gizmo handles disappear and camera control subsequently becomes sluggish.
</p>

<p>
Another lesson learned, nice.
</p>

<p>
Removed selling point 13.
</p>

<p>
2022-01-31T04:20:35Z Hmm now the existing objects are looking OK, utility poles arent on fields, well the other line is just on the field edge, but I'm thinking of leaving it like that for now, the poles arent on the field physically but right on the edge.
</p>

<p>
2022-01-31T04:25:22Z Created first farm yard tree line and decided to do CTRL-S save. This time though, save was really fast, meaning normal speed, odd.
</p>

<p>
Exited GE and changed PNG back to GDM/GRLE in I3D file, then removed PNGs and loaded terrain project back to GE. Then just adding more trees to farm yards.
</p>

<p>
2022-01-31T04:50:42Z Getting really tired again, almost zombi mode alike feeling. Only slept a bit over 5hrs last night so this is the result. Really annoying if you have to stop a good editing day for a nap. Hmm I need to put alarm on phone when sleeping that I wont be allowed to get up from the bed until 6hrs has passed or something.
</p>

<p>
When you are tired the chances of making mistakes increases a lot. Also the zombi mode is often bad that when you return to editing after a nap you are looking that huh what the heck was I doing in these last edits heh.
</p>

<p>
Would be wonderful if you could just "decide" to sleep 7hrs every night and be super refreshed for a full 17hrs editing day then.
</p>

<p>
2022-01-31T05:02:05Z Unfortunately I had to call it, just way too zombi mode on I'm going on with pure muscle memory here heh, nap time...
</p>

<p>
2022-01-31T08:01:03Z Back, editing day continues.
</p>

<p>
2022-01-31T08:12:02Z Two forest tree lines done for farm yards. I started to use my lua script called "Live" where I can edit the settings I want and discard it later, as GE cannot add new scripts on the fly so its good to have such live script which can be edited without any regard to saving it or erasing earlier nice variables.
</p>

<p>
2022-01-31T08:19:28Z Lunch break ...
</p>

<p>
2022-01-31T08:42:33Z Feeding time is over, back to placing farm yard forest tree lines.
</p>

<p>
Several farm yard tree lines got done.
</p>

<a href="screenshots/PMC-Undefined-Farms-20km-2022-01-31T0903.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Undefined-Farms-20km-2022-01-31T0903.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
In that image you have a slightly bad terrain design doc drawing for a field, can you spot it (without looking below)? <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
So here is the below image which explains what I mean. This farm yard is located too close to the field corner which created this kind of narrow field spot, its otherwise a big field but now this long narrow spot causes issues with courseplay multiple tools operations, try to imagine harvesting that field with four combines or cultivating it with two wide implements, there will be bad overlap.
</p>

<a href="screenshots/PMC-Terrain-Design-Doc-Bad-Field-Shape-2022-01-31.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Terrain-Design-Doc-Bad-Field-Shape-2022-01-31.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
This design level issue should have been solved by having better overall "vision" not to place the farm yard so close to the west side road. This could have been achieved in various ways, either creating this location more center of the field in general, or simply making the farm yard less wide and more "deep" instead. Just overall you have to be careful not go create those narrow spots on otherwise a big field.
</p>

<p>
Don't get me wrong, there is nothing wrong in a big terrain to have small fields, but you have to decide if you are generating a large field or a small field, you just cant do large field with such narrow spots, it just frustrates players/farmers and especially courseplay.
</p>

<p>
Top down, baby!
</p>

<a href="screenshots/PMC-Undefined-Farms-20km-2022-01-31T0931.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Undefined-Farms-20km-2022-01-31T0931.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
And another angle.
</p>

<a href="screenshots/PMC-Undefined-Farms-20km-2022-01-31T0935.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Undefined-Farms-20km-2022-01-31T0935.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
Cute little farm yard for those small scale hobby farms, where you tend your garden... hmm no wait, that must have been some other terrain <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<a href="screenshots/PMC-Undefined-Farms-20km-2022-01-31T0950.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Undefined-Farms-20km-2022-01-31T0950.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
Joking aside, that is truly a small farm yard, when you look at the sizes of trees and then imagine putting a grain bin(s) and vehicle shed(s) there, yeah it wont leave much room. Heh need to make a note about that too small farm yards are all but useless, bare minimum yard size should be maybe like two grain bins and two vehicle sheds so that there are still room to maneuvre your vehicles around them.
</p>

<p>
In these huge terrains, what is the point of making a small farm yard, I mean even if you design it for the new farmer or Start From Zero savegames, lets be honest... all you want to achieve if "variation" for the sizes, it has nothing to do with proper game-play. So be careful with these small farm yards...
</p>

<p>
2022-01-31T10:14:27Z Forest tree lines done for farm yards, well unless I missed some yard out there, its so hard without having them all marked on a huge terrain.
</p>

<p>
I do have empty transformgroups to mark the locations, but I cant tell if I missed some. I need to come up with a better easier way to marking them for navigation, quick bookmarks if you will. Actually GE would require bookmark feature for camera position <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2022-01-31T10:27:17Z Started to create farm yard grain bins, fertilizer bins and fuel tanks. This is going to take a while, placing them in GE and typing all those coordinates into placeables.xml uh my copy-paste finger is already hurting even though I try to use SHIFT-DEL/INSERT as much as possible.
</p>

<p>
These objects in farm yards really bring this terrain to life.
</p>

<p>
2022-01-31T10:41:03Z Created placeables.xml Location-01 which already had four meridian flat bottom 3608 grain bins, now added fuel tank and liquid/solid fertilizer bins three each.
</p>

<a href="screenshots/PMC-Undefined-Farms-20km-2022-01-31T1042.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Undefined-Farms-20km-2022-01-31T1042.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
Then created transformgroup with empty transformgroups for all farm yards which need placeables done. This way I can just systematically go through them one by one and make sure all get done, no need to fly around aimlessly with the camera view trying to see if there are any yards missing placeables.
</p>

<p>
Unfortunately looking at the list, I'm pretty sure rest of the day will be spent doing those and most likely beginning of tomorrow. Oh well lets get started.
</p>

<p>
Farm yar placables Location-02 done.
</p>

<a href="screenshots/PMC-Undefined-Farms-20km-2022-01-31T1105.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Undefined-Farms-20km-2022-01-31T1105.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
And now I need to take a shower, about 20min break to refreshen myself a bit...
</p>

<p>
2022-01-31T11:31:16Z Cleaning time over, all refreshen and ready to continue until I snooze off to sleep tonight.
</p>

<p>
Was talking with Octanen on PMC Farming discord #fs22_modeling channel about using blender to place roads, railroad tracks and utility poles. That is exciting if he manages to get it to work so I could actually use it to populate PMC terrains with objects.
</p>

<p>
Alright back to creating farm yard placeables.
</p>

<p>
Location-03 farm yard done, this had a bad slope but I managed to plug in objects into somewhat OK less sloped locations.
</p>

<a href="screenshots/PMC-Undefined-Farms-20km-2022-01-31T1148.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Undefined-Farms-20km-2022-01-31T1148.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
And Location-04 created with big boy stuff.
</p>

<a href="screenshots/PMC-Undefined-Farms-20km-2022-01-31T1217.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Undefined-Farms-20km-2022-01-31T1217.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
When doing these farm yards in placeables.xml config file I was thinking how this could be easier, well would be great to have LUA script to read for example "Location-04" transformgroup and transform (pun inteded) all of it into placeables.xml clipboard copy-paste text or if possible directly into a txt file on HDD.
</p>

<a href="screenshots/FS22-Script-Make-Placeables-XML-Config-File-Automatically.jpg" target="_blank"><img src="screenshots/thumbs/FS22-Script-Make-Placeables-XML-Config-File-Automatically.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
Farm yard Location-05 done, a slight slope there, these dang nice rolling hills elevation heightmaps <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<a href="screenshots/PMC-Undefined-Farms-20km-2022-01-31T1247.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Undefined-Farms-20km-2022-01-31T1247.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
Farm yard Location-06 created, another sloped and slightly smaller yard.
</p>

<a href="screenshots/PMC-Undefined-Farms-20km-2022-01-31T1306.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Undefined-Farms-20km-2022-01-31T1306.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
Work in progress farm yard, uuh copy paste fingers are hurtin' so bad... <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<a href="screenshots/PMC-Undefined-Farms-20km-2022-01-31T1320.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Undefined-Farms-20km-2022-01-31T1320.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
Farm yard Location-07 done, uuh this copy pasting is killing me hehe.
</p>

<a href="screenshots/PMC-Undefined-Farms-20km-2022-01-31T1334.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Undefined-Farms-20km-2022-01-31T1334.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
2022-01-31T14:06:23Z Lunch break finished, uh oh forgot to write it down, was hectic in discord PMC Farming server and then got hungry heh, anyways Location-07 is done. And now I'm going to study LUA scripting, if I could come up with a LUA script that reads transformgroup and outputs placeables.xml format farm yard object info.
</p>

<p>
Smeby in PMC discord gave me a link to german forum (ugh) with rudimentary lua script to get transformgroup name and position/rotation coordinates. I did a quick modification of that lua script and now I can select all objects for the farm yard, run the script and have the names/coords in almost ready to go placeables.xml config file line.
</p>

<p>
Only thing missing is the actual placebale XML file name for the transformgroup like "flatBottomBin3608" which XML is "$mapdir$/maps/placeables/meridian/flatBottomBin3608/flatBottomBin3608.xml" string. But this is already saving so SO MUCH copy-paste finger pain it is incredible. May sound silly but this is one of the nicest additions for my editing work flow in a long time (as blender roads/railroads/utility-poles are still pending heh).
</p>

<p>
2022-01-31T14:33:27Z Now work continues and it sped up a great deal with this script <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<a href="screenshots/PMC-Undefined-Farms-20km-2022-01-31T1434.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Undefined-Farms-20km-2022-01-31T1434.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
Next created Location-08, it was another smaller farm yard. But man what a joy it was to just run a script to get those placeable config lines done <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<a href="screenshots/PMC-Undefined-Farms-20km-2022-01-31T1457.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Undefined-Farms-20km-2022-01-31T1457.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
And Location-09 farm yard placeables done, boom.
</p>

<a href="screenshots/PMC-Undefined-Farms-20km-2022-01-31T1521.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Undefined-Farms-20km-2022-01-31T1521.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
And then Location-10 done heh.
</p>

<a href="screenshots/PMC-Undefined-Farms-20km-2022-01-31T1532.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Undefined-Farms-20km-2022-01-31T1532.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
It is so nice to do these farm yards now using this LUA script which removes all copy-pasting, man it was so tedious and painful task to do. I cant believe it took me this long to get around to search such script and with a little edit got it fixed to really nice placeables.xml generating one.
</p>

<p>
Just enjoying myself when creating another one, Location-11, heh dishing out these yards left and right <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<a href="screenshots/PMC-Undefined-Farms-20km-2022-01-31T1544.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Undefined-Farms-20km-2022-01-31T1544.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
Farm yard Location-12 done, nice yard. Hmm although dunno if I'm cramming these bins too close together that there are no free space for players to put down vehicle sheds and such buildings they want. It kind of defeats the purpose if farm yards are spoon fed forced crap, obviously players can sell these and put down what they want, but yeah optimum solution would be to have basic functionality grain bins etc in place and players could then customize it by placing their own buildings whatever they need, big vehicle sheds or something else.
</p>

<a href="screenshots/PMC-Undefined-Farms-20km-2022-01-31T1554.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Undefined-Farms-20km-2022-01-31T1554.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
And farm yard Location-13 done in no time <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<a href="screenshots/PMC-Undefined-Farms-20km-2022-01-31T1606.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Undefined-Farms-20km-2022-01-31T1606.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
Farm yard Location-14 done, yeah baby!
</p>

<a href="screenshots/PMC-Undefined-Farms-20km-2022-01-31T1618.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Undefined-Farms-20km-2022-01-31T1618.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
This has turned into screenshot gallery eh? <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
2022-01-31T16:36:51Z Just finished creating farm yard Location-15 is plenty of farming functionality for large scale farmer <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<a href="screenshots/PMC-Undefined-Farms-20km-2022-01-31T1637.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Undefined-Farms-20km-2022-01-31T1637.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
And then created sixteenth placeable farm yard location, so that is 1 new farmer and 1-16 (so 17 total) buyable and sellable farm yards with buildings <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<a href="screenshots/PMC-Undefined-Farms-20km-2022-01-31T1647.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Undefined-Farms-20km-2022-01-31T1647.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
Edited selling points locations in PMC_Helper because fields got bigger they were partly on fields now, almost all of them. All got fixed.
</p>

<p>
2022-01-31T17:05:22Z Hmm not sure what to edit next, well adding trees and utility pole lines for the new farm yards, sure, hmm but I kind of want to hold off for the utility pole work as there might be a way to do it in blender tomorrow (after I learn it).
</p>

<p>
So I'm going to casually add some tree lines to populate the place now before getting tired and need to call it a night. I have no idea when that happens as with the nap my sleeping schedule is off whack and I don't even have my next meal timer running in phone, I'm just free falling here heh. Anyways, more trees, coming up! <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Managed to place very nice sparse tree coverage in first try on one of those forest patches.
</p>

<a href="screenshots/PMC-Undefined-Farms-20km-2022-01-31T1718.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Undefined-Farms-20km-2022-01-31T1718.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
2022-01-31T17:58:58Z OK my eyes start to get that eye strain of being up too long staring computer screen, body doesn't otherwise announce being tired but yeah eyes are sure to give that sign. So I exported PMC_Helpers, deleted it and then saved the project.
</p>

<p>
Time for todays first(?) and last in-game check, how does it look and run. Exciting.
</p>

<p>
Except I forgot placeables.xml, the filenames are not set, uuh need to put those in. Hmm going to make powergrep4 regexp replacement line for them.
</p>

<p>
2022-01-31T18:25:16Z In-game check complete, its looking good, no errors <img src="../images/smileys/icon_biggrin.gif" alt="Smiley :D" loading="lazy">
</p>

<a href="screenshots/PMC-Undefined-Farms-20km-2022-01-31T1821.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Undefined-Farms-20km-2022-01-31T1821.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<a href="screenshots/PMC-Undefined-Farms-20km-2022-01-31T1822.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Undefined-Farms-20km-2022-01-31T1822.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<a href="screenshots/PMC-Undefined-Farms-20km-2022-01-31T1824.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Undefined-Farms-20km-2022-01-31T1824.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

	<h2>2022-02-01 Resolving Map CTD</h2>

<p>
2022-02-01T02:58:00Z New editing day has started, but honestly after yesterdays big push... not sure what would I edit today. Day starts with usual in-game orientation check and, yeah dunno what then.
</p>

<p>
In-game orientation check. Looks like icon/preview image is from outdated mapview image. Silage is still accepted on all selling points, this might cause issue with BALES supposedly accepted there but in reality they are not so contracts will break when they ask you to drop silage bales to lets say selling point 2 but it will not accept them, nothing happens when you drop them off.
</p>

<p>
2022-02-01T03:44:37Z Created new updated overview and icon/preview PNG images.
</p>

<p>
Updated selling points XML config files from <a href="pmc-king-corn-45km.php">PMC King Corn 45km</a> which had BALE type filltypes removed. This should fix the contracts deliveries to selling points which do not accept bales.
</p>

<p>
2022-02-01T04:04:24Z During another in-game check I discovered a critical bug: ESC mapview -> soil composition causes CTD. Yikes! <img src="../images/smileys/icon_surprised.gif" alt="Smiley :o" loading="lazy">
</p>

<p>
Investigating density images especially stones_density image resolutions and looks like for some reason cultivator/fruit density images are 8192 resolution while rest are 16384. That could be the cause for the crash. Going to increase design doc density image resolution to 16384.
</p>

<p>
Created new _run_graphicsmagick_resize_design_doc_to_CUSTOM_VALUE.bat file which resizes current 10240 x 10240 resolution images to 16384 x 16384 resolution. Yes I know resizing smaller image to larger is fake bullshit, but yeah.. insert excuses here haha.
</p>

<p>
Then ran _run_design_doc_to_density_weight_images_all_in_one_2022-01-28.bat to generate new terrain project images, then copied them to the project dir and launched GE to see whats up.
</p>

<p>
Saved in GE and exited. Then did the usual GDM/GRLE/PNG shuffle to get ready for another in-game check.
</p>

<p>
2022-02-01T04:58:42Z In-game checking, ESC mapview -> soil composition, works OK, no issue anymore after resizing cultivator_density and fruit_density back up to 16384 pixel resolution.
</p>

<p>
Checked selling points, now silage, grass and hay is only accepted on animal dealer (by the vehicle shop area), however straw is still accepted on all selling points.
</p>

<p>
2022-02-01T05:08:41Z I feel very good about this current build, yes it needs more trees and utility pole lines, but it is awesome for what it is, I'm going to switch editing into the next terrain project which is PMC Cereal Region 32km.
</p>

	<h2>2022-02-04 Editing Objects</h2>

<p>
2022-02-04T09:29:24Z New editing day has started, I think, my sleeping schedule is so off everything has become a o.n.e.b.i.g.b.l.u.r...
</p>

<p>
This is the last terrain which is missing TrailerParkFarms (TPF) big vehicle sheds and today those get added in. So took backups just in case, loaded terrain project in GE and started to import PMC_Helpers with the insane "Loading..." time.
</p>

<p>
While GE was thinking, I fixed the mapUS tutorial floating icons finally, dunno how that simple PMC_Undefined_Farms_20km.xml text edit didn't get done until now.
</p>

<p>
2022-02-04T09:43:43Z GE PMC_Helpers loaded in, now we get to start.
</p>

<p>
Started to go through the farm yard locations and it was slope after slope after slope... and I got frustrated real quick, this ain't going to work. I only got to add TPF vehicle sheds to few of the most level heightmap farm yards.
</p>

<p>
The flat enough farm yards were location: 4, 7, 9 and 10. Heh not much out of 17 locations.
</p>

<p>
Oh well, in the future I know that before I even export L3DT heightmap it has to be leveled out for all farm yards. No idea how it would work, I know how to level a spot on a heightmap but how to make it look natural, no clue whatsoever. But that is for future date and seeing how things are going, it will be very <i>very</i> far in the future.
</p>

<p>
I numbered 276 objects in placeables.xml config file, plus then there were close to 10 already numbered ones, plus usual selling points of course. That is a lot of placeable objects heh.
</p>

<p>
2022-02-04T10:20:11Z Then it was in-game testing time again.
</p>

<p>
During testing I discovered there is a liquid fertilizer tank in center coordinates of the terrain, underground. This must have been some accidental leftover in PMC_Helpers into one of the Location-0? placeable transformgroups. Or who knows maybe there are more of them underground, I just see the liquid fert tank in ESC mapview. Well this is easy fix, just requires one more GE load and save. I actually started loading while still at in-game testing things out.
</p>

<p>
Well in GE I did not see anything in 0,0,0 coordinates, hmm, interesting. So I imported PMC_Helpers, no idea what might be there which would help me but this issue right away feels like "all hands on deck" type of situation, so lets bring all the tools to the table.
</p>

<p>
Hmm in GE there was nothing in those coordinates, so it must be from placeables.xml then. I saved GE terrain project just to make sure and exited.
</p>

<p>
Quickly scanned placeables.xml through with string search position="" and position="0 but found no matches, hmm. That is odd. Need to sync the project files into fs22 mod dir once again and re-check.
</p>

<p>
New in-game test and nope, its still there. Hmph. Okay time to empty placeables.xml config file to verify its not coming from there (I mean it is).
</p>

<p>
Deleted every object line from placeables.xml, in-game test shows nothing anywhere, no icons of any kind. So yeah placeables.xml is our culprit for this bug. Okay time to start combing through it line by line to find the offending liquid fertilizer tank, or well I could just search those through first because if liquid fert tank is the problem why inspect vehicle shed lines.
</p>

<p>
Okay that was easy to find, it was fifth liquid fertilizer line to check where I found this: position="-180 -68.94999695 -180" so its not exactly zeroed out but the elevation -68m matches my description and those -180s make it more or less center of the terrain. Okay time to fix it, once again we load GE and PMC_Helpers, etc, oh my...
</p>

<p>
2022-02-04T11:01:57Z Found the coordinates from PMC_Helpers and fixed them in placeables.xml config file.
</p>

<p>
I left GE still running when I went to in-game to make sure its fixed.
</p>

<p>
2022-02-04T11:07:26Z In-game test confirms, its fixed, liquid fert icon near terrain center underground is gone.
</p>

<p>
But now I discovered a new bug, none of the placeable objects work, meaning I cannot buy diesel for the fuel tank etc, the refill tank option does not come up. Hmm that means the object XML files have not been updated and are lacking the buy with farmland property. Hmm wonder how many of these terrains have them missing, better to check them all while I'm at it.
</p>

<p>
Went through this terrains placeable/ dir, yeah it was outdated, there was even the I3D/shape files present, deleted those and copied over the new updated ones. Now all placeables should work as designed.
</p>

<p>
Doing in-game test I could already see from minimap view that its now working. When you start a savegame and not own any land with placeables, nothing shows up in ESC mapview or minimap, once you buy the land with placeables... they appear in mapview and then you get to use their functionality, cool.
</p>

<p>
During another in-game check found three more errors:
</p>

<pre>
2022-02-04 11:12 Error: Failed to open xml file 'C:/FS22.Mods/Dev/PMC_Undefined_Farms_20km/maps/placeables/unia/farma/farma400/farma400.xml'.
2022-02-04 11:12 Error: Failed to open xml file 'C:/FS22.Mods/Dev/PMC_Undefined_Farms_20km/maps/placeables/unia/farma/farma500/farma500.xml'.
2022-02-04 11:12 Error: Failed to open xml file 'C:/FS22.Mods/Dev/PMC_Undefined_Farms_20km/maps/placeables/unia/farma/farma800/farma800.xml'.
</pre>

<p>
This is caused by storeItems.xml having lines for these placeables, but I am not using these placeables, their XML config files are not present in maps/placeables/... dir. The storeItems.xml file includes these as it was copy pasted from my template "one size fits all" dir. Removed those and error went away.
</p>

<p>
But still one more in-game test just to verify log is error free...
</p>

<p>
2022-02-04T11:29:29Z In-game verify complete, log is error free. We are SO done here.
</p>

<p>
Uuh what a great feeling to have this terrain finished for its first release <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

	<h2>2022-02-09 Proper Name</h2>

<p>
2022-02-09T15:22:35Z New editing day has started. Its time to give this terrain project a proper name, its "PMC Undefined Farms 20km" <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
So the usual rename shuffle, change directly and file names, then powergrep4 mass string replace to all the i3d/xml files.
</p>

<p>
2022-02-09T15:29:42Z Directory and file name rename and mass string replace complete.
</p>

<p>
Next copy pasted mapUS storeItems.xml trees and plants lines to our storeItems.xml which fixes the landscaping tool not being able to see those tabs.
</p>

<p>
2022-02-09T15:43:19Z In-game test complete, works ok, landscaping tool also does trees and plants.
</p>

	<h2>2022-02-11 Final Editing Day</h2>

<p>
2022-02-11T04:30:52Z Final editing day before release has started <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Plan now is to create new farmer game-mode starter vehicles.
</p>

<p>
And it got done.
</p>

	<h2>2022-02-13 First Release Day</h2>

<p>
2022-02-13T17:18:00Z Created PMC_Undefined_Farms_20km_v0.1.3.7z release packet, we are good to go.
</p>

<p>
2022-02-13T18:06:00Z PMC Undefined Farms v0.1.3 first release! <img src="../images/smileys/icon_biggrin.gif" alt="Smiley :D" loading="lazy">
</p>

	<h2>2022-05-09 Farmland Image And Field Definitions</h2>

<p>
2022-05-09T01:07:55Z Notes from my bugs/issues website (used rather honest language there heh):
</p>

<p>
undefined farms 20km farmland image for farm yards is basically missing
</p>

<p>
today's game-play test shows that you cannot buy a single farm yard, you have to buy some 1 million - 2.5 million costing mega land lot.
</p>

<p>
central east farm yard actually is split in half between two land lots costing more than 2 million each. hah awesome farm yard, no? <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
make farm yards their individual farmland images, you know this, why the fuck didn't you do it before. moron. fix your shit.
</p>

<p>
2022-05-10T1644 not only farm yards are missing, but most of the fields are split between two farmland lots, this is just extremely sloppy and stupid.
</p>

<p>
hate to tell you this, but easiest way would probably be to just remake the whole fucking thing with detailed 255 colors.
</p>

	<h2>2022-06-15 Farm Yards Image Editing</h2>

<p>
2022-06-15T01:03:00Z New editing day has started, been long time on my mind mainly due my Start From Zero savegame, but need to add field numbers and fix farm yards in the farmland image.
</p>

<p>
Just took backups of the terrain project, then GIMP design doc dir.
</p>

<p>
2022-06-15T01:19:00Z First row in the north is done, all farm yards in that row are now individual small compact and cheap farmland buyable land lots <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2022-06-15T01:48:00Z About half of the terrain's farm yards are now their own individual buyable land lots.
</p>

<p>
2022-06-15T02:32:00Z Done, all farm yards painted. Hopefully didn't make any RGB mistakes.
</p>

<p>
Then ran graphicsmagick bat file to generate farmland PNG image for GE importing. Copied it over to terrain project dir, deleted farmland.grle, edited TERRAIN.i3d to swap grle with png file extension, then loaded terrain project in GE v9.0.2 and checked it out. Looks good so far.
</p>

<p>
Saved, exited. Then edited TERRAIN.i3d farmland.png back to .grle, then loaded project back up again to check if everything is OK. It does.
</p>

<p>
Next I opened fields and toggled render field areas... hmm now I should add all the field numbers, only numbers no corner pieces, so they would still be "meadow" fields without AI planting them but having numbers so players can identify them.
</p>

<p>
But once I started to add new fields numbers only... I realized that there is no way for me to tell which field has field definitions already because the corner piece-less transformgroup is not show in the map, well obviously, DOH! <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
Hmm this needs more thought... Then proceeded to create those very small field definitions with corner piece.
</p>

<p>
2022-06-15T03:33:00Z My pinky copy-paste CTRL pressing finger is screaming in agony <img src="../images/smileys/icon_redface.gif" alt="Smiley :redface:" loading="lazy">
</p>

<p>
Also getting really tired, almost in full zombi mode.
</p>

<p>
2022-06-15T05:05:00Z Field definitions done, total number of fields 1880 <img src="../images/smileys/icon_biggrin.gif" alt="Smiley :D" loading="lazy">
</p>

	<h2>2022-06-18 Painful Field Definitions</h2>

<p>
2022-06-18T05:08:00Z New editing day has started, todays goal is to sort out the mess I did with v0.1.4 which was the version I created couple of days ago. Issues there are that all the new fields are GRASS, I accidentally copy-pasted one of the grass fields so now we have 1800+ tiny hectare size grass fields. Another issue is that all these new fields have field definition corner pieces so AI will plant on them and they appear as contracts, we don't want that, all we want is the field number to identify the field.
</p>

<p>
So while its not copy-paste finger torture, its going to be quite huge task to delete corner pieces from 1800+ fields, not to mention the field grass mission. Yesterday I already took a look at TERRAIN.i3d file and the node bullshit is just linked together with ID numbers so we cant just use text editor to remove stuff from there, it would all fall apart like a house of cards.
</p>

<p>
Need to fire up GE and painstakingly delete all corner pieces, I'm hoping the field grass mission attribute wont matter after that. This whole deal pisses me off as I cannot just do one field and test as my win10 computer (SSD device) is offline.
</p>

<p>
2022-06-18T05:14:00Z Loaded undefined farms project in GE v9.0.2 and then simply exported Fields transformgroup, let me try if I could actually text edit and remove those attributes and corner pieces, I believe you cant but lets get a confirmation for it right now...
</p>

<p>
This is the actual first field I added, its identified by "fieldXX" name:
</p>

<pre>
        &lt;TransformGroup name="fieldXX" translation="532.734 9.50049 91.683" nodeId="24544"&gt;
          &lt;TransformGroup name="fieldDimensions" nodeId="24545"&gt;
            &lt;TransformGroup name="corner01_1" translation="75.5767 0.72699 -15.2097" nodeId="24546"&gt;
              &lt;TransformGroup name="corner01_2" translation="-40.4294 -0.31366 85.3845" nodeId="24547"/&gt;
              &lt;TransformGroup name="corner01_3" translation="-168.792 0.153137 35.031" nodeId="24548"/&gt;
            &lt;/TransformGroup&gt;
          &lt;/TransformGroup&gt;
</pre>

<p>
So I loaded the exported fields i3d in text editor, searched that above location, then simply deleted "corner01_1" transformgroup and its child transformgroups corner01_2 and corner01_3, I assume that when I load this i3d back to GE there will be some missing / mismatch nodeId error, but lets try and see what happens.
</p>

<p>
It worked without errors, hmm very strange, wonder what use the nodeId's are then if they have no bearing in missing stuff heh.
</p>

<p>
2022-06-18T05:53:00Z Uuh been deleting what feels like endless number of transformgroups now and the scroll bar in text editor hasn't move much at all, it is just insane amount of stuff I need to delete in these 1800+ fields. Was even considering just re-creating the field definitions in GE but that would be much worse.
</p>

<p>
Oh man, such a small mistake of choosing the wrong field definition to copy-paste and now I'm suffering through all this text editing work.
</p>

<p>
Luckily I won't be doing the same mistake again so lesson learned.
</p>

<p>
2022-06-18T07:16:00Z Unfuckingbelievable it took me all this time to get those transformgroup deleted with text editor, uuh my mind is blur right now and fingers are hurting from 1800+ repetitive 5+ (at least) commands <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
Never. Again. <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
And now, if it doesn't work in GE or in-game... yeah I don't even want to think about that, its rage quit time then <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
2022-06-18T07:18:00Z Loaded terrain project in GE, deleted Fields transformgroup, then started to import the text editor edited fields I3D file...
</p>

<p>
It took a really long time while GE was processing, that was a bad sign...
</p>

<p>
2022-06-18T07:25:00Z Finished importing, no errors that I can see, pfewf! <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Well get field sizes script of course it not working as there is no corner pieces to measure, I'm just hoping that this crap works in-game, if it doesn't then we are back in square one, we need to decide if we add fields to our terrain or not, there is no "just add field numbers" option then. But that is for testers to discover.
</p>

<p>
Changed modDesc to v0.1.5, updated readme, generic release compile bat and then compiled that 7-zip release packet.
</p>

<p>
2022-06-18T07:29:00Z We are done here, now its up to testers to report back does this version even work in-game.
</p>

	<h2>2022-07-03 Broken Fields Editing</h2>

<p>
2022-07-03T21:06:00Z Was extremely pissed off yesterday when discovered that v0.1.5 edits are total garbage, those gave over 1800 multi-line errors in the log. This is what you get when you edit blindly without the ability to immediately test your edits. PMC DevSurf computer is running windows 8.1 which as we all know, doesn't run fs22 so I did not test these edits.
</p>

<p>
Now I wanted to restore the old v0.1.3 official first release version project dir just to erase the memory of that editing fuckup. Well turns out... the backup is nowhere to be seen. I am baffled because as it reads above I did take that backup on june 15th but I cannot find it now, only thing I have is june 18th backup which is from v0.1.4 which already has those 1800 field definitions and the farmland image edits.
</p>

<p>
I have no idea where I placed the backup taken in jun 15th, its not in PMC DevSurf or PMC Linux hard disks anywhere, yes I looked everywhere. Makes no sense.
</p>

<p>
2022-07-03T21:14:00Z So nothing more to do than try to fix this piece of shit broken ass v0.1.4 now. I selected all the new field definitions labeled "fieldXX" transformgroups and deleted them.
</p>

<p>
Edited modDesc.xml and changed version number to v0.1.6 to erase the shame of zero point one point five crap. Also changed descVersion to 67 as I saw on courseplay github repo that it is the current version.
</p>

	<h2>2022-07-04 v0.1.6 Into Testing</h2>

<p>
2022-07-04T23:10:00Z Compiled v0.1.6 for testing, went to PMC Gaming computer to test it out and was relieved to see that farmland image works as designed.
</p>

<p>
Uploaded PMC_Undefined_Farms_20km_v0.1.6.7z to farming-simulator.org and then posted message to PMC Tactical forum about the testing release (nothing to test I tested it already but still).
</p>

<p>
Now all is good as the terrible 1800 error mess has been fixed. Sure its not really a fix when all the erroneous field definitions got simply deleted, but hey zero tolerance policy for errors no matter the collateral damage. All the way.
</p>


	<h2>2022-12-09 Fix My Fields Punk</h2>

<p>
2022-12-09T17:50:00Z New editing day has started, edited modDesc.xml descVersion to 72.
</p>

<p>
2022-12-10T04:09:00Z Took 7-zip backup, copied the .7z archive to three HDDs for safe keeping. Now I want to add few more field definitions.
</p>

<p>
Started GE v9.0.2 which announced v9.0.3 update, not now. Loaded PMC_Undefined_Farms_20km.i3d, ran script for setup large terrain, then toggled field view thing and then imported PMC_Helpers.i3d which took fooooorever, man what a bizarre piece of shit GE v9 is <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Its already been quite a long editing day for me, did some good edits, but I would still like to add several field definitions to PMC Undefined Farms 20km before bed time, then hopefully continue tomorrow with the ultimate goal of adding all of them. I'm just a bit scared of how many fields there are in this terrain, its 20.4km with nothing but fields after all <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Once got started I realized heightmap PNG is still in place which means not very enjoyable 2D top down flat field definition work plane, saved and exited GE, I need to level the heightmap out, its the best way to create field definitions.
</p>

<p>
Took backup of PMC_Undefined_Farms_20km_dem.png, opened PNG in GIMP and set it to RGB 0,0,0 which is 0 meters flat. Then again loaded all that junk to GE <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
2022-12-10T04:41:00Z Total of 38 new field definitions are done and my copy-paste pinky finger is already screaming in agony <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
Creating field definitions wouldn't be that bad, if the controls were just a bit easier to operate, CTRL-D to duplicate/copy-paste a field definition and CTRL-B at least 4 times to align it and its corner pieces to correct location. Not fun.
</p>

<p>
2022-12-10T05:04:00Z Hmm decided to create a tiny field definition which will be pasted to all cultivator_density field areas to have full "NUMBER" coverage, then once pinky copy-paste finger gets better and I have more enthusiasm, I'll edit the corner pieces to fit the cultivator density better. This regular even single shape creation just feels so fucking awful right now, its like torture, heh no joke <img src="../images/smileys/icon_redface.gif" alt="Smiley :redface:" loading="lazy">
</p>

<p>
Then I configured GE keyboard shortcuts to have CTRL-D set to key 1 and CTRL-B to key 2. Those keys are easy to press and then you have ready to place field definition, small yes which doesn't fit very well to larger cultivator_density area, but at least this way its a bit more comfortable to create those many field definitions for the number purpose.
</p>

<p>
2022-12-10T07:57:00Z Had to take couple of hours break to do a chore, now back few more moments before bed time, I'm actually already over 17hrs awake today so dunno how long can I go on.
</p>

<p>
2022-12-10T08:22:00Z Okay need to call it a night, going into zombi mode now, more editing tomorrow...
</p>


	<h2>1888 Field Definitions Clutter</h2>

<p>
2022-12-10T15:52:00Z New editing day has started, today we continue creating single shape field definitions, those small patches. Lets see how many I'll manage to do.
</p>

<p>
2022-12-10T17:09:00Z GE finished creating single shape small patch field definitions! Now they are all done, I cant see any fields without field definition now, nice! <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Yes of course these are copy-pasted identical size patches, too small to be useful, but now field NUMBERS are are in, its easy to start improving them from this point <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2022-12-10T17:36:00Z Did some tweaks to few fields, exported fields-2022-10-10.i3d for backups as that saves time, no need to CTRL-S save the whole project which is slow when you can just export small I3D. Then counted field sizes, there are total of 1212 fields now, hmm that is odd I remember it being 1880 before when there was the buggy grass field thing going on, oh well anyways.
</p>

<p>
Usually I'd continue editing here, but lately those "editing blindly" things have scared me so bad that now I'm going to compile a new testing version and right away check it out at Gaming computer just to see if new fields work OK.
</p>

<p>
Changed modDesc version to 0.1.7, edited compile bat and readme.
</p>

<p>
2022-12-10T17:55:00Z Compiled PMC_Undefined_Farms_20km_v0.1.7.7z for testing.
</p>

<p>
And of course I forgot to unpack the original heightmap PNG so everything was flat 0m elevations <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
So changed to v0.1.8 and compiled a new release.
</p>

<p>
2022-12-10T18:17:00Z Tested v0.1.8 and it runs good, no errors. However those new fields were total of 1888 (dunno why GE v9.0.2 only showed me 1212, maybe it was still processing when I checked the log) and they completely clutter minimap (9) so its useless.
</p>

<p>
Goofy stuff man.
</p>

<a href="screenshots/PMC-Undefined-Farms-20km-2022-12-10T1757.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Undefined-Farms-20km-2022-12-10T1757.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<a href="screenshots/PMC-Undefined-Farms-20km-2022-12-10T1808.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Undefined-Farms-20km-2022-12-10T1808.jpg" class="terrainimg" loading="lazy" alt="PMC Farming Simulator 22 Screenshot"></a>

<p>
But guess there are no other way around it if you have a huge terrain with small fields. If the fields were larger, lets say well above 20ha or maybe even 50ha, then I don't think there would be that much cluttering in minimap (9).
</p>

<p>
Anyways, time to ship v0.1.8 for testers in our forum.
</p>

<p>
2022-12-10T18:30:00Z Started uploading PMC_Undefined_Farms_20km_v0.1.8.7z for testers.
</p>


	<h2>2022-12-13 Field Definition Corner Pieces</h2>

<p>
2022-12-13T22:12:00Z New editing day has started, kind of... I'm currently editing ArmA 3 terrain PMC Latvia Lielvarde and there are long processes running leaving me bored with nothing to do, so why not add few more field definition corner pieces into PMC Undefined Farms 20km FS22 terrain ;)
</p>

<p>
As always I first ran 7-zip backup bat file which copied the created .7z archive into three other HDDs and one other computer, never forget backups. Then unpacked heightmap PNG with 0 meter elevation flat setup, yeah I still had the 7-zip backup of that file too, good choice to save it for future use.
</p>

<p>
Started GE v9.0.2, loaded terrain project up, ran large terrain script and toggle render field areas script. Now I'm ready to start adding editing field definition corner pieces.
</p>

<p>
2022-12-13T22:36:00Z Finished editing field definition corner pieces, added few more grass fields too, all in the dealership neighborhood for short traveling distance.
</p>

<p>
Changed modDesc version to v0.1.9 and edited compilation bat file and readme.txt file.
</p>

<p>
2022-12-13T22:39:00Z Compiled PMC_Undefined_Farms_20km_v0.1.9.7z new testing version packet.
</p>

<p>
Short while later tested these edits, I did F591 oat harvest contract and it worked fine, it was close with the "can keep" better contracts mod announced value but yeah it worked fine.
</p>


	<h2>2022-12-15 Final Field Definition Corner Piece Edit</h2>

<p>
2022-12-15T05:55:00Z New editing day has started, plan is to add few more field definition corner pieces around the dealership.
</p>

<p>
You know the drill, first taking backups, then unpacking 0m elevation heightmap PNG and only then launching GE v9.0.2 to start editing.
</p>

<p>
2022-12-15T06:00:00Z First corner piece just W of the dealership edited, increased the single corner piece size now its much bigger field and covers cultivator_density pretty nicely.
</p>

<p>
2022-12-15T06:11:00Z Finished small editing session, dunno how many fields I did, funny how it was only 11 minutes and my pinky copy-paste finger is already hurting (the previous keyboard shortcut keys did not work anymore, dunno why huh), but I pretty much got those fields done that I had plans for. Now I'm taking a lunch break.
</p>

<p>
2022-12-15T06:37:00Z Lunch break over, hmm I'm going to do few more corner pieces...
</p>

<p>
2022-12-15T06:56:00Z Uuh another set of corner pieces done, got some pretty nice medium to big size fields done now. At this point we are in the "what difference does it make" situation, there are already SO many fields with field definitions that nobody can claim there aren't enough to get Start From Zero or any other kind of savegame going and with 1888 fields... there is probably about 1800 field definitions to fix which I am for sure not going to do. So any further work would be just waste of time for no tangible result.
</p>

<p>
Exited GE v9.0.2 and then restored original heightmap PNG again. Changed modDesc version to v0.2, edited readme.txt and release compilation bat files for new version.
</p>

<p>
2022-12-15T07:00:00Z Compiled PMC_Undefined_Farms_20km_v0.2.7z new testing version <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>


	<h2>2022-12-15 Utility Pole Wires</h2>

<p>
2022-12-15T22:18:00Z New editing day has started, todays short term goal is to add utility pole wires which I learned to do late last night (black wires for FS22). Also late last night I released v0.2 for testing with more field definition corner pieces, so that update was somewhat small even though it adds a lot of playability.
</p>

<p>
Editing day starts with taking backups, as usual. Now backups are especially important as I start to mess with utility poles.
</p>

<p>
Started GE v9.0.3, loaded terrain project, ran script to setup GE for large terrain and imported PMC_Helpers. Importing that tiny I3D again took forever, well I believe the I3D imports fast but then GE v9.0.3 is frozen (Not Responding) mode for many many minutes.
</p>

<p>
2022-12-15T22:38:00Z Created first utility pole line with wires attached to the poles, it went through alright, starting to get muscle memory back, I have placed a lot of these wires with this technique.
</p>

<p>
2022-12-15T22:43:00Z Second utility pole wire setup created, there was only two very long lines in this terrain. Cant recall if they were work in progress or by design only two lines.
</p>

<p>
Then saved project and exited GE, we are done for utility pole wire editing <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Changed modDesc version to v0.2.1, edited readme.txt and release compilation bat files.
</p>

<p>
2022-12-15T22:48:00Z Compiled PMC_Undefined_Farms_20km_v0.2.1.7z testing version, first I'm going to test it on Gaming computer before uploading to PMC Tactical forum developer testing, cant let buggy stuff through.
</p>

<p>
2022-12-15T23:03:00Z Utility pole wire test was successful, no issues no errors. However after test was complete I checked required mods functionality... and there was none, log got errors for missing required mods when I started it without TrailerParkFarms (TPF) vehicle sheds.
</p>

<pre>
2022-12-15 23:00   Warning: PlaceableUtil.loadPlaceable can only load existing store items, no store item for xml filename 'C:/FS22.Mods/PMC_Terrain_Testing/FS22_90x200ShedPack/92x200RedWhite.xml'
2022-12-15 23:00   Warning: PlaceableUtil.loadPlaceable can only load existing store items, no store item for xml filename 'C:/FS22.Mods/PMC_Terrain_Testing/FS22_72x150ShedPack/72x150shedRedMain.xml'
</pre>

<p>
So came back to editing computer and added modDesc.xml lines for:
</p>

<pre>
	&lt;dependencies&gt;
		&lt;dependency&gt;FS22_72x150ShedPack&lt;/dependency&gt;
		&lt;dependency&gt;FS22_90x200ShedPack&lt;/dependency&gt;
	&lt;/dependencies&gt;
</pre>

<p>
And changed version to v0.2.2, then compiled another test version before heading to restroom for a much needed relief <img src="../images/smileys/icon_razz.gif" alt="Smiley :p" loading="lazy">
</p>

<p>
2022-12-15T23:18:00Z Started to put together forum post for PMC_Undefined_Farms_20km_v0.2.2.7z testing release.
</p>

</section>

<footer>
<p>
<a href="pmc-terrains.php" class="button">PMC Terrains FS22</a>
<a href="changelog-pmc-undefined-farms-20km.php" class="button">Changelog PMC Undefined Farms 20km</a>
<a href="pmc-undefined-farms-20km.php" class="button">PMC Undefined Farms 20km</a>
<a href="../index.php" class="button">PMC Farming Simulator root page</a>
</p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("../include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>