<!DOCTYPE html>
<html lang="en">
<head>
<title>HOWTO Animate Objects Using animatedObjects.xml - PMC Farming Simulator 19</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="HOWTO Animate Objects Using animatedObjects.xml - PMC Farming Simulator 19">
<META name="keywords" content="animatedObjects.xml, defaultItems.xml, Terrain, Buildings, Placeables, Doors, FS19, PMC, Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
<h1><b>HOWTO Animate Objects Using animatedObjects.xml - PMC Farming Simulator 19</b></h1>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>HOWTO Animate Objects FS19</h2>

<p>
<b>2022-02-02T06:14:00Z</b> Updated.
</p>

<p>
When you edit terrains and use <a href="terrain-giants-editor.php">Giants Editor (GE)</a> to import building models which have animated doors, you need to take extra steps to animate the doors, if you use building placeable through defaultItems.xml it will be automatically animated.
</p>

<p>
We use CBJ Midwest Buildings Pack as an example. If you want to follow this tutorial step by step then download that mod.
</p>

<p>
In short: GE import CBJ vehicle shed, make sure onCreate is AnimatedMapObject.onCreate, open that sheds placeable XML, copy all the &lt;animatedObject&gt; (note object singular not objectS plural) properties to maps/animatedObjects.xml and done.
</p>

<p>
GE file -> import, then browse to FS19_PlaceableCBJbuildings directory and choose 40x60shedRed.i3d filename.
</p>

<p>
This specific model comes with two "light" entities, you can remove those.
</p>

<a href="screenshots/AnimatedObjects-Delete-Lights.jpg" target="_blank"><img src="screenshots/thumbs/AnimatedObjects-Delete-Lights.jpg" class="terrainimg" loading="lazy" alt="FS19 Terrain Tutorial: HOWTO Animate Doors"></a>

<p>
Now place the building where you like it to be. Then open this buildings transformgroup "40x60MachineShed" and select transformgroup "shopdoor4".
</p>

<a href="screenshots/AnimatedObjects-Door-Selected.jpg" target="_blank"><img src="screenshots/thumbs/AnimatedObjects-Door-Selected.jpg" class="terrainimg" loading="lazy" alt="FS19 Terrain Tutorial: HOWTO Animate Doors"></a>

<p>
Now use windows explorer to browse into your terrain directory of "maps/", create new file here called animatedObjects.xml
</p>

<a href="screenshots/AnimatedObjects-XML-File-Created.jpg" target="_blank"><img src="screenshots/thumbs/AnimatedObjects-XML-File-Created.jpg" class="terrainimg" loading="lazy" alt="FS19 Terrain Tutorial: HOWTO Animate Doors"></a>

<p>
Open animatedObjects.xml with proper text editor, then copy this following text in there:
</p>

<pre>
&lt;?xml version="1.0" encoding="utf-8" standalone="no" ?&gt;
&lt;animatedObjects&gt;
    &lt;annotation&gt;Copyright (C) GIANTS Software GmbH, All Rights Reserved.&lt;/annotation&gt;

&lt;/animatedObjects&gt;
</pre>

<p>
Next browse to FS19_PlaceableCBJbuildings directory and open 40x60shedRed.xml in text editor. Browse down in the XML until you find &lt;animatedObjects&gt; property, now select and copy (CTRL-C) everything in animatedObjects, then paste (CTRL-V) into your animatedObjects.xml file, where the empty line is.
</p>

<p>
Difficult to explain so here is screenshot of text heh, this is just an non-working example do not use it as is:
</p>

<a href="screenshots/AnimatedObjects-Pasted-Raw-XML-Properties.jpg" target="_blank"><img src="screenshots/thumbs/AnimatedObjects-Pasted-Raw-XML-Properties.jpg" class="terrainimg" loading="lazy" alt="FS19 Terrain Tutorial: HOWTO Animate Doors"></a>

<p>
You can now close 40x60shedRed.xml file.
</p>

<p>
We need to change few things here to make it work better. First find the line:
</p>

<pre>
&lt;animatedObject saveId="shopdoor4" &gt;
</pre>

<p>
And change saveId to index, like this:
</p>

<pre>
&lt;animatedObject index="shopdoor4"&gt;
</pre>

<p>
Now jump back to GE and check user attributes, currently it looks like this, its wrong and not working this is just an example how you might find wrong values there:
</p>

<a href="screenshots/AnimatedObjects-Wrong-User-Attributes.jpg" target="_blank"><img src="screenshots/thumbs/AnimatedObjects-Wrong-User-Attributes.jpg" class="terrainimg" loading="lazy" alt="FS19 Terrain Tutorial: HOWTO Animate Doors"></a>

<p>
You need to change index to "shopdoor4". Then onCreate is now saying wrongly "AnimatedObject.onCreate" which is FS17 era naming, you need to change it to "Animated<b>Map</b>Object.onCreate" instead. Also while at it, make sure xmlFilename is saying "maps/animatedObjects.xml", sometimes it can be wrong as well.
</p>

<p>
Next we go over the two other doors found in this model, "garagedoor5" and "garagedoor6". Change both just like you did above, "garagedoor5" index to "garagedoor5" etc.
</p>

<p>
Now you can save GE terrain project.
</p>

<p>
Back in animatedObjects.xml we do few more edits. Find "shopdoor4" and its "controls triggerNode" which now says "1|8|0", this needs to be changed to simply "0". Do the same for two other doors controls triggerNode's.
</p>

<p>
Next still in "shopdoor4" find "part node" which now says "1|8|1", here we do exactly the same thing, remove the node numbers and only leave last which is "1". Again do the same for the two other doors, just leave the last number.
</p>

<p>
When all that is done your building should have working doors in-game :)
</p>

<p>
Below is animatedObjects.xml working example for 40x60MachineShed building with our GE model edits:
</p>

<pre>
&lt;?xml version="1.0" encoding="utf-8" standalone="no" ?&gt;
&lt;animatedObjects&gt;
    &lt;annotation&gt;Copyright (C) GIANTS Software GmbH, All Rights Reserved.&lt;/annotation&gt;

        &lt;animatedObject index="shopdoor4"&gt;
            &lt;animation duration="1"&gt;
                &lt;part node="1"&gt;
                    &lt;keyFrame time="0.0" rotation="0 0 0"/&gt;
                    &lt;keyFrame time="1.0" rotation="0 120 0"/&gt;
                &lt;/part&gt;
            &lt;/animation&gt;
            &lt;controls triggerNode="0" posAction="ACTIVATE_HANDTOOL" posText="action_openGate" negText="action_closeGate"/&gt;
        &lt;/animatedObject&gt;
        &lt;animatedObject index="garagedoor6"&gt;
            &lt;animation duration="7.5"&gt;
		&lt;part node="1"&gt;
                    &lt;Keyframe time="0.00" translation="0 0 1.58" /&gt;
                    &lt;Keyframe time="1.00" translation="0 0 4.63" /&gt;
                &lt;/part&gt;
		    &lt;part node="2"&gt;
                     &lt;Keyframe time="0.53" translation="0 0 -1.58" /&gt;
                     &lt;Keyframe time="1.00" translation="0 0 -4.63" /&gt;
                &lt;/part&gt;
            &lt;/animation&gt;
            &lt;controls triggerNode="0" posAction="ACTIVATE_HANDTOOL" posText="action_openGate" negText="action_closeGate"/&gt;
        &lt;/animatedObject&gt;
        &lt;animatedObject index="garagedoor5"&gt;
            &lt;animation duration="7.5"&gt;
                &lt;part node="1"&gt;
                    &lt;Keyframe time="0.00" translation="0 0 1.58" /&gt;
                    &lt;Keyframe time="1.00" translation="0 0 4.63" /&gt;
                &lt;/part&gt;
		&lt;part node="2"&gt;
                     &lt;Keyframe time="0.53" translation="0 0 -1.58" /&gt;
                     &lt;Keyframe time="1.00" translation="0 0 -4.63" /&gt;
                &lt;/part&gt;
            &lt;/animation&gt;
            &lt;controls triggerNode="0" posAction="ACTIVATE_HANDTOOL" posText="action_openGate" negText="action_closeGate"/&gt;
        &lt;/animatedObject&gt;

&lt;/animatedObjects&gt;
</pre>

<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("/var/www/include/footer-start.php"); ?>
<?php include("../include/fs19-terrain-editing-tutorial-footer.php"); ?>
<?php include("/var/www/include/footer-end.php"); ?>
<?php include("/var/www/include/support.php"); ?>
<?php include("/var/www/include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
