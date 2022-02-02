<!DOCTYPE html>
<html lang="en">
<head>
<title>Blender Roads Tutorial - PMC Farming Simulator 19</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Blender Roads Tutorial - PMC Farming Simulator 19">
<META name="keywords" content="Terrain, Blender, Roads, Tutorial, FS19, PMC, Farming, Simulator">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<!-- google ads -->
<?php include("../include/google-ads.php"); ?>
<h1><b>Blender Roads Tutorial - PMC Farming Simulator 19</b></h1>
</header>

<section>
	<h2>HOWTO Create Roads in Blender for Giants Editor</h2>

<p>
<b>2022-02-02T11:02:00Z</b> Updated.
</p>

<p>
These are my raw notes without screenshots currently, plan is to improve this bare bones basic step by step list in the future. Join <a href="../contact.php">PMC Farming discord</a> to chat about it.
</p>

<p>
GE -> file -> preferences -> general -> save and export as wavefront obj -> scale: 1
</p>

<p>
GE -> file -> preferences -> general -> save and export as wavefront obj -> frustum culled: unticked / un-selected / disabled
</p>

<p>
GE -> terrain -> file -> export selected -> obj
</p>

<p>
blender -> a -> x, yes for delete.
</p>

<p>
blender -> SHIFT-A -> Mesh -> Plane
</p>

<p>
blender -> N -> panel appears on right, view tab -> End: type in large number like 10,000 m
</p>

<a href="https://cdn.discordapp.com/attachments/910907101465940019/933834073338691594/unknown.png" target="_blank">unknown.png 1</a> and <a href="https://cdn.discordapp.com/attachments/910907101465940019/933834431330918440/unknown.png" target="_blank">unknown.png 2</a>.

<p>
blender -> SHIFT-S (hold SHIFT) -> cursor to world origin
</p>

<p>
blender -> SHIFT-A -> curve -> bezier. press G and move it.
</p>

<p>
blender -> TAB, switched between edit mode and optic mode. Go to edit mode. Zoom into the placed bezier, click one of the handles (edges, ends) of the bezier and start moving it where the road goes.
</p>

<p>
While the bezier handles are selected press S so you can scale them up/down.
</p>

<p>
Press R and Z to rotate on Z axis.
</p>

<p>
Press E for (echo? huh what? hehe) to create another control vertex for the bezier and move it further down the road.
</p>

<p>
Once finished creating bezier curve for the road hit TAB back to optics mode.
</p>

<p>
Modifier properties is on the right hand side dialog panel, its BLUE WRENCH looking icon (tooltip shows its name), click that to open beziercurve and click "add modifier" and then choose "Shrinkwrap".
</p>

<p>
Press CTRL-A -> all transforms, this resets transform values to zero.
</p>

<p>
Then in right hand side panel beziercurve add modified shrinkwrap -> target, select your terrain heightmap. Now bezier curve "spline" is aligned to ground in the heightmap.
</p>

<p>
Adding road model into the bezier curve.
</p>

<p>
blender -> file -> import -> wavefront obj -> choose your road model.obj. Click the standard-road.obj to select it (get this from PMC Farming discord).
</p>

<p>
blender -> top / main menu -> object -> set origin -> origin to geometry. Now dot has appeared in the center of standard-road.obj.
</p>

<p>
blender -> SHIFT-S -> selection to cursor.
</p>

<p>
Have standard-road.obj selected, click on right side panel wrench icon modifier properties -> add modifier -> array. Then again add modifier -> curve.
</p>

<p>
Then check what is the road bezier curve name by looking at the scene collection right side panel. It should be "BezierCurve" nothing more.
</p>

<p>
Modifier properties -> curve -> curve object, click and choose "BezierCurve".
</p>

<p>
Standard-road.obj is now moved to the end of your beziercurve object.
</p>

<p>
Add texture to standard-road.obj by pressing SHIFT-A -> search -> image texture, now image texture dialog appears. From image texture dialog drag yellow color circle to principled BSDF dialog base color yellow color circle. Click image texture -> open, then browse into your texture and choose it, open image.
</p>

<p>
If your road in the beziercurve end is twisted up mangled like "the thing", select the beziercurve in editing mode, select the ending handle where twisting happens, hit R to rotate and Z for z axis, now just move until the road straightens up.
</p>

<p>
Starting to create the road.
</p>

<p>
Right hand side panel modifier properties -> array -> fit type, choose "fit length". Now just start adding more meters into the "length" slider and your 3d object mesh for road is grown / generated.
</p>

<p>
Note that the road mesh generation just follows the beziercurve, it does not stop once it reaches the end, so you cannot just type in some "100000 m" to fill it all at once, you have to painstakingly use the slider and scroll with mouse to grow road mesh until you reach the end.
</p>

<p>
Exporting roads its simple, click on the road, file -> export -> obj -> save it and load it in GE.
</p>

</section>

<footer>
<p><a href="map-making-tutorial.php" class="button">PMC Farming Simulator 19 Map Making Tutorial page</a></p>
<p><a href="../index.php" class="button">PMC Farming Simulator root page</a></p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("../include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
