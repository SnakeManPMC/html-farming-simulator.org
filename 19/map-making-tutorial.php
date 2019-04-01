<!DOCTYPE html>
<html lang="en">
<head>
<title>Farming Simulator 19 Map Making Tutorial - PMC Tactical</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Farming Simulator 19 Map Making Tutorial - PMC Tactical">
<META name="keywords" content="Farming, Simulator, 19, Map, Making, Tutorial, PMC, Tactical">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<!-- google ads -->
<?php include("../include/google-ads.php"); ?>
<h1><b>PMC Tactical Farming Simulator 19 Map Making Tutorial</b></h1>
</header>

<section>
	<h2>Overview</h2>

<p>
<b>2019-02-11</b> This page is work in progress, will be updated later for example when we get official Giants Editor release (v8.1 final was released 2019-02-09) etc.
</p>

<p>
Please read <a href="../map-making-tutorial.php" target="_blank">Farming Simulator 17 (FS17) Map Making Tutorial</a> first because what you see below assumes you know all of that FS17 stuff.
</p>


	<h2>File Structure</h2>

<p>
root/ directory has modDesc.xml as every mod should, also map.xml file. Estancia Lapacho files are called "mapSA.xml", Ravenport "mapUS.xml" and Felsbrunn "mapDE.xml". So unique names hmm. Rest of the files are listed below, in this example we have mapSA files listed.
</p>

<ul>
<li>mapSA_colorGrading.xml</li>
<li>mapSA_colorGradingNight.xml</li>
<li>mapSA_environment.xml</li>
<li>mapSA_farmlands.xml</li>
<li>mapSA_items.xml</li>
<li>mapSA_sound.xml</li>
<li>mapSA_transportMissions.xml</li>
<li>mapSA_vehicles.xml</li>
</ul>

<p>
root/mapSA/ dir contains the following files all 01 through 04:
</p>

<ul>
<li>beachSand01_weight.png</li>
<li>cityAsphalt01_weight.png</li>
<li>concrete01_weight.png</li>
<li>forestGround01_weight.png</li>
<li>grass01_weight.png</li>
<li>gravel01_weight.png</li>
<li>industrialMud01_weight.png</li>
<li>mountainRock01_weight.png</li>
<li>pigMud01_weight.png</li>
<li>roughDirt01_weight.png</li>
<li>townGrass01_weight.png</li>
</ul>

<p>
Then 01 and 02 for waterPuddleSA01_weight.png
</p>

<p>
Then these individual files:
</p>

<ul>
<li>cultivator_density.gdm</li>
<li>dummy_weight.png</li>
<li>fruit_density.gdm</li>
<li>grassFlowers_color.dds</li>
<li>grassFlowers_mask.dds</li>
<li>mapSA_dem.png</li>
<li>mapSA_farmland.grle</li>
<li>mapSA_farmland.png</li>
<li>mapSA_preview.dds</li>
<li>pda_map_H.dds</li>
<li>seasons_mask.gdm</li>
<li>terrainDetailHeight_density.gdm</li>
<li>tipColInfoLayer.grle</li>
<li>weed_density.gdm</li>
</ul>

<p>
PNG resolutions are 2048 x 2048 except mapSA_dem.png is standard 1025 x 1025 and mapSA_farmland.png is 1024 x 1024 resolution.
</p>


	<h2>Create Sample Terrain</h2>

<p>
Don't download sample mod maps as they usually contain all kinds of "good stuff" the author wants you to have and quickly gets outdated. Instead just create sample terrain by yourself from the latest up to date game data available, anytime.
</p>

<p>
- start giants editor v8.1 (final)<br>
- file -> new mod from game -> map: sample mod map 1<br>
- delete all transformgroups with original terrain objects in them, basically only leave terrain and careerstartpoint<br>
- save and exit
</p>

<p>
You can of course leave the objects from mapDE or mapUS (depending which you chosen) into the sample terrain, but usually they are just in the way and its easier to delete all of them.
</p>


	<h2>Porting FS17 Terrain</h2>

<p>
If you try to load Farming Simulator 17 terrain as-is it will not show up in the game start menu.
</p>

<p>
- get mapDE sample terrain to a directory, name it lets say MyMap_4km<br>
- edit modDesc.xml for proper author, name, description, map id, configName etc<br>
- copy FS17 pda_map_h.png to MyMap_4km/maps/pda_map.png<br>
- copy FS17 map01_preview.png to MyMap_4km/map_preview.png<br>
- rename MyMap_4km/maps/mapDE/ directory to MyMap_4km/maps/MyMap_4km/<br>
- rename MyMap_4km/maps/MyMap_4km/mapDE_dem.png to MyMap_4km_dem.png<br>
- rename MyMap_4km/maps/MyMap_4km/mapDE_farmland.grle to MyMap_4km_farmland.grle<br>
- rename MyMap_4km/maps/mapDE.i3d to MyMap_4km.i3d<br>
- rename MyMap_4km/maps/mapDE.i3d.colMap.grle to MyMap_4km.i3d.colMap.grle<br>
- rename MyMap_4km/maps/mapDE.i3d.plcMap.grle to MyMap_4km.i3d.plcMap.grle<br>
- rename MyMap_4km/maps/mapDE.i3d.shapes to MyMap_4km.i3d.shapes<br>
- rename MyMap_4km/maps/mapDE.i3d.terrain.lod.type.cache to MyMap_4km.i3d.terrain.lod.type.cache<br>
- rename MyMap_4km/maps/mapDE.i3d.terrain.nmap.cache to MyMap_4km.i3d.terrain.nmap.cache<br>
- rename MyMap_4km/maps/mapDE.i3d.terrain.weights.cache to MyMap_4km.i3d.terrain.weights.cache<br>
- rename MyMap_4km/maps/mapDE.xml to MyMap_4km.xml<br>
- rename MyMap_4km/maps/mapDE_farmlands.xml to MyMap_4km_farmlands.xml<br>
- rename MyMap_4km/maps/mapDE_transportMissions.xml to MyMap_4km_transportMissions.xml<br>
- open MyMap_4km.i3d in text editor and change "mapDE/ to "MyMap_4km/<br>
- change MyMap_4km.i3d line "MyMap_4km/mapDE_dem to "MyMap_4km/MyMap_4km_dem<br>
- change MyMap_4km.i3d line "MyMap_4km/mapDE_farmland to "MyMap_4km/MyMap_4km_farmland<br>
- change MyMap_4km.i3d lines density.gdm to density.png<br>
- copy FS17 cultivator_density.gdm and fruit_density.gdm to MyMap_4km/maps/MyMap_4km/ dir<br>
- copy _run_convert_gdm_to_png.bat to MyMap_4km/maps/MyMap_4km/ dir and execute it<br>
- open MyMap_4km.i3d in GE
</p>

<p>
If you get the GE console error from GDM files not found, please refer to common errors.
</p>

<p>
It is absolute nightmare to port FS17 terrain to FS19 depending how complex it is and usually these terrains are quite complex. For example I tried porting parkers prairie objects... and let me tell you it is a huge task, there are so many objects in different messy transformgroups and probably most of the buildings have shaders which need to be fixed etc etc... you would be better off doing native FS19 terrain with its own objects so you dont have to worry about any shader etc errors.
</p>

<p>
Also lets not forget that if you don't have permission to port, then why bother spending all that hard work for something you cannot release to the public.
</p>

<p>
Giants Editor v8.1 has file -> open mod option, this is basic porting of FS17 terrains.
</p>

<p>
Port to GE:
</p>
<ul>
<li>Cornbelt</li>
<li>Parkers Prairie</li>
</ul>

<p>
Fail:
</p>
<ul>
<li>North West Texas ports but doesnt load in GE after that</li>
<li>Newlin GE loads a moment then just simply stops, the porting process is incomplete, only small number of dirs/files is copied over</li>
</ul>

<p>
This is however not one click solution, you hopefully get terrain loading into GE but it is far from playable in FS19, much work needs to be done to fully port it even to make it load up without errors.
</p>


	<h3>FS19 Simple Port Tutorial</h3>

<p>
_run_graphicsmagick_FS19_mapsize_to_4096.bat in the directory where PNG files are present will convert 2km to 4km. You also need to edit TerrainName.XML file for terrain size.
</p>

<p>
- FS17 copy cultivator_density.gdm and fruit_density.gdm into FS19 maps/mapDE/ dir<br>
- use _run_convert_gdm_to_png.bat<br>
- delete cultivator_density.gdm and fruit_density.gdm files<br>
- edit mapDE.i3d and change cultivator_density.GDM to PNG and same for fruit_density<br>
- use _run_graphicsmagick_FS19_mapsize_to_4096.bat<br>
- load mapDE.i3d with GE, save and exit<br>
- edit mapDE.i3d and change cultivator_density.PNG to GDM and same for fruit_density
</p>

<p>
PMCTODO add the actual bat files ;)
</p>


	<h2>Buy Land - Farmlands</h2>

<p>
- make sure giants editor is updated to v8.1 final (beta had bugs on info layer)<br>
- terrain editing window -> info layer painting -> info layer -> farmland<br>
- make sure the terrain editing window is wide enough, on info layer painting section you need to see tick boxes for 0, 1, 2 and 3<br>
- activate terrain info layer painting mode icon form main menu, brush radius 1000m, square, then erase (RMB) whats painted in the farmland info layer<br>
- start painting with info channel 0 (layer value 1)<br>
- once done, select info channel 1 (layer value 2), etc etc, until you have covered the whole terrain (see below)<br>
- when whole terrain is done select info channels 0 through 5, layer value 63 and paint all triggers with plenty of space around them (see below)<br>
- open mapDE_farmlands.xml, assign IDs for each xml entry according to GE layer value<br>
- paint one area for new farmer game mode and assign its farmlands.xml ID with defaultFarmProperty="true"
</p>

<table id="farmlandsid">
  <tr>
    <th>Field ID</th>
    <th>Info Channel</th>
  </tr>
  <tr>
<td>1</td>
<td>0</td>
</tr>
<tr>
<td>2</td>
<td>1</td>
</tr>
<tr>
<td>3</td>
<td>01</td>
</tr>
<tr>
<td>4</td>
<td>2</td>
</tr>
<tr>
<td>5</td>
<td>02</td>
</tr>
<tr>
<td>6</td>
<td>12</td>
</tr>
<tr>
<td>7</td>
<td>012</td>
</tr>
<tr>
<td>8</td>
<td>3</td>
</tr>
<tr>
<td>9</td>
<td>03</td>
</tr>
<tr>
<td>10</td>
<td>13</td>
</tr>
<tr>
<td>11</td>
<td>013</td>
</tr>
<tr>
<td>12</td>
<td>23</td>
</tr>
<tr>
<td>13</td>
<td>023</td>
</tr>
<tr>
<td>14</td>
<td>123</td>
</tr>
<tr>
<td>15</td>
<td>0123</td>
</tr>
<tr>
<td>16</td>
<td>4</td>
</tr>
<tr>
<td>17</td>
<td>04</td>
</tr>
<tr>
<td>18</td>
<td>14</td>
</tr>
<tr>
<td>19</td>
<td>014</td>
</tr>
<tr>
<td>20</td>
<td>24</td>
</tr>
<tr>
<td>21</td>
<td>024</td>
</tr>
<tr>
<td>22</td>
<td>124</td>
</tr>
<tr>
<td>23</td>
<td>0124</td>
</tr>
<tr>
<td>24</td>
<td>34</td>
</tr>
<tr>
<td>25</td>
<td>034</td>
</tr>
<tr>
<td>26</td>
<td>134</td>
</tr>
<tr>
<td>27</td>
<td>0134</td>
</tr>
<tr>
<td>28</td>
<td>234</td>
</tr>
<tr>
<td>29</td>
<td>0234</td>
</tr>
<tr>
<td>30</td>
<td>1234</td>
</tr>
<tr>
<td>31</td>
<td>01234</td>
</tr>
<tr>
<td>32</td>
<td>5</td>
</tr>
<tr>
<td>33</td>
<td>05</td>
</tr>
<tr>
<td>34</td>
<td>15</td>
</tr>
<tr>
<td>35</td>
<td>015</td>
</tr>
<tr>
<td>36</td>
<td>25</td>
</tr>
<tr>
<td>37</td>
<td>025</td>
</tr>
<tr>
<td>38</td>
<td>125</td>
</tr>
<tr>
<td>39</td>
<td>0125</td>
</tr>
<tr>
<td>40</td>
<td>35</td>
</tr>
<tr>
<td>41</td>
<td>035</td>
</tr>
<tr>
<td>42</td>
<td>135</td>
</tr>
<tr>
<td>43</td>
<td>0135</td>
</tr>
<tr>
<td>44</td>
<td>235</td>
</tr>
<tr>
<td>45</td>
<td>0235</td>
</tr>
<tr>
<td>46</td>
<td>1235</td>
</tr>
<tr>
<td>47</td>
<td>01235</td>
</tr>
<tr>
<td>48</td>
<td>45</td>
</tr>
<tr>
<td>49</td>
<td>045</td>
</tr>
<tr>
<td>50</td>
<td>145</td>
</tr>
<tr>
<td>51</td>
<td>0145</td>
</tr>
<tr>
<td>52</td>
<td>245</td>
</tr>
<tr>
<td>53</td>
<td>0245</td>
</tr>
<tr>
<td>54</td>
<td>1245</td>
</tr>
<tr>
<td>55</td>
<td>01245</td>
</tr>
<tr>
<td>56</td>
<td>345</td>
</tr>
<tr>
<td>57</td>
<td>0345</td>
</tr>
<tr>
<td>58</td>
<td>1345</td>
</tr>
<tr>
<td>59</td>
<td>01345</td>
</tr>
<tr>
<td>60</td>
<td>2345</td>
</tr>
<tr>
<td>61</td>
<td>02345</td>
</tr>
<tr>
<td>62</td>
<td>12345</td>
</tr>
<tr>
<td>63</td>
<td>012345</td>
</tr>
</table>

<p>
You must paint the whole terrain, every single pixel, leave no pixels unpainted because that cause _farmlands.xml errors in-game.
</p>

<p>
When you mouse over existing painted layer and hit CTRL-R, it will select that info channel layer value for you.
</p>

<p>
layer value is mapDE_farmlands.xml ID like &lt;farmland id="1"
</p>

<p>
Triggers like sellpoints and shop etc need to have unused layer value painted to them which prevents players of purchasing that farmland and placing placeables there. Make sure the you paint large enough area for triggers so there are no problems with terrain changing when placeables are placed (difficult to explain heh).
</p>

<p>
Water area should not be painted as purchaseable land (dunno why?).
</p>

<p>
Giants Editor v8.1 final info layer painting, the layer value drop-down is not working for me (known issue). hmm looks like the drop-down works to tick the info channel boxes... but when you paint it has not effect, what you must do to fix this is just to untick one of the numbers and tick it back again, then your painting works... <i>usually...</i> you should experiment and see how it works for you.
</p>



	<h2>modDesc.xml</h2>

<p>
In your modDesc.xml is where the name of the terrain, author and version number is defined. More importantly the class or ID is set, almost all sample maps floating out there use "SampleModMap".
</p>

<p>
&lt;maps&gt;&lt;map id="SampleModMap" needs to be unique for every terrain, so <b>do not use "SampleModMap"</b>, instead you must use unique to your terrain like for our example "pmc_sample_2048" etc.
</p>


	<h2>Creating Field Definitions</h2>

<p>
- create transformgroup fields<br>
- create transformgroup field01 and cut and paste it as child to fields<br>
- fields transformgroup add new attribute name: onCreate and type: script callback. onCreate attribute: FieldUtil.onCreate<br>
- create two transformgroups into field01, name them fieldDimensions and fieldMapIndicator<br>
- create transformgroups called corner01_1, corner01_2 and corner01_3<br>
- make corner01_2 and corner01_3 as child for corner01_1. cut and paste corner01_1 as child to fieldDimensions<br>
- field01 add attribute fieldDimensionIndex type integer<br>
- field01 add attribute nameIndicatorIndex type integer
</p>

<p>
fieldDimensionIndex is fieldDimensions -> index path, the last number (it should be 0 for field01).
</p>

<p>
nameIndicatorIndex is fieldMapIndicator -> index path, the last number (it should be 1 for field01).
</p>

<p>
First use scripts -> FS19 -> map -> toggle render field areas. Place corner01_1 as bottom left, corner01_02 as top left and corner01_03 as top right. This forms a rectangle shape, you can move these transformgroups around to shape the field area as you please.
</p>

<p>
To add more corner01 pieces allows you to create more complex fields, you can simply CTRL-D duplicate/copypaste them as there is no technical reason to name them properly, game recognizes dozen "corner01_1" pieces just fine. Add as many you need to form a complex and detailed field, I dont know if there is a limit for these, highest what I've used so far was like 10 so not that many.
</p>

<p>
You do not need to rename the cornerXX, not even fieldXX transformgroups as game will load them fine, however please name fieldXX ones properly because who wants to see 50+ "field" transformgroups without any idea which is which heh.
</p>

<p>
Once you have created your first field, check that it works in-game, then you can simply select transformgroup field01 and CTRL-D duplicate / copy paste it and rename it to field02. Repeat this to as many fields you need to create (obviously increasing the fieldXX number every time).
</p>

<p>
General terrain and field design tip:
</p>

<p>
Paint the fields into terrain normally with proper edges, but only create standard rectangle box field definitions. This way players can buy the fields and enlarge them by using plowing implement, giving them something nice to do, or they can of course leave them as is.
</p>

<p>
You could say that this would be lazy terrain developer method as making simple rectangle field definition takes one CTRL-D while detailed several cornerXX pieces requiring field takes much longer.
</p>

<p>
Courseplay recognizes the foliage layer plowed/cultivated etc terrain type, NOT the field definition, at least I believe this is how courseplay/game works? So make sure you do not paint the foliage layer as plowed/cultivated land but that umm what was it the odd looking brown colored terrain type (no idea, the one seen in FS17 cornbelt heh)? :)
</p>

<p>
Creating fields is quicker if you just call the first "field" without any numbering and once you have finished making all of them its easier to rename them all in one go. This usually applies to my own workflow where I make placeholders for all the fields at one go, then tweak them to precision later. Also I find it quicker to edit field numbering directly in the name.i3d xml file, but thats just me who's so used to text editing heh.
</p>


	<h2>General Terrain Editing Tips</h2>

<p>
Error LOG is your friend, always check it first before starting to play. Either open log.txt and search for "error" and "warning" or try to see immediate bad errors from the in-game console debug log.
</p>

<p>
Do not edit extensive periods in giants editor without testing the terrain in-game because what looks very nice in giants editor might be totally crap/useless in-game, so don't waste your time editing something for hours which you regret the minute you see it in-game. Also try seeding, harvesting, cultivating and plowing to make sure the fields work properly (weight/density images). You can keep giants editor running and just for example robocopy /MIR the updated files into mods dir, that saves some time.
</p>

<p>
<b>Field sizes:</b> for the large terrain developers, include smaller fields for the early part of savegame where you start with lower end vehicles when doing missions. If you start by doing missions on 200+ hectare fields... let me tell you, the mission durations make it a world of hurt :)
</p>

<p>
Variety is the key, add huge 500+ hecatare and tiny 5 hectare fields, make the terrain interesting, give players options what size of fields to work on etc. Making a huge terrain doesn't mean that there is no tiny fields because sometimes those can be useful, like potato harvests etc.
</p>

<p>
Make field foliage layer matching the field definition because it looks very sloppy in-game when you see uneven field edges. Yes this sounds like a petty thing that who cares, but small details like this which are easy to get correctly done in giants editor make a huge of difference when you play.
</p>

<p>
When you edit in giants editor the stuff is stored in memory, only when you click save the GDM and GRLE etc files are saved to disk.
</p>

<p>
Saving 16km terrain, 8192 resolution DEM and 16384 res weight etc images takes several minutes on i7 4790K processor.
</p>

<p>
When you edit regularly check in-game and error log that its clean, if there are any errors fix them before proceeding editing. Trust me on this, the more errors you leave for "nah I'll fix that later", the more work you have when eventually that "later" comes :)
</p>

<p>
$moddir$ is case-sensitive.
</p>

<p>
Placing trees will require new savegame career start, trees will not show up in your existing savegame made when you had no trees. When you change heightmap (DEM) during your career savegame, you must unfortunately start a new career as heightmap image is copied to savegame dir. If you copy / update heightmap into your savegame dir then vehicles are still kept in their original elevations, meaning if you changed elevations then vehicles are floating in the air or buried underground. So new savegame is required with heightmap edits.
</p>

<p>
You should not resize images like _farmland.grle after painting it using tools that do not support interpolation: none, like GIMP, unless you can be sure no stray pixels are created during resizing.
</p>

<p>
Howto paint grass? Use foliage layer painting -> foliage layer -> grass, foliage channels 1 and 6, now you paint fully grown grass. The drop down has list of foliage growth stages.
</p>

<p>
Grass or other general foliage should be placed first when you are creating a brand new terrain, its far easier to put fields, roads etc special foliage (or erase foliage) on these small areas than to paint grass between fields and roads etc as its really frustrating to carefully place that grass to avoid overlap where grass should not be present.
</p>

<p>
If you are making authentic real world data terrain then look google street view photos to help you place objects to where they are in real life, or at least as close as possible. Its not possible to do 100 percent authentic terrain because the lacking environment engine and objects available, but you can do very good work by using google street view photos.
</p>

<p>
Make sure your terrain has few very small or cheap properties / land so that players starting from scratch (like 0 money, 0 vehicles and 0 land) can easily buy them after doing few contracts with leased vehicles. If your first land/property costs 10 million, that is a lot of contract work for players to do, maybe the cheapest field should be mere few hundred thousands to get player started on their own farm more easily. For example a new player cannot use placeables if he does not own any land.
</p>

<p>
Splines O key to close the loop, if you do not want to create a loop do not hit O key. Arrow keys cycle through the vertices in a spline. Splines are shown in-game, so in GE you need to either delete or sink them under ground and/or set to invisible mode.
</p>

<p>
GE -> attributes -> transform -> translate Y is not above terrain level, its absolute elevation, 0 does not mean its aligned to the ground (unless terrain height happens to be 0 at that point).
</p>

<p>
Info layer painting for farmland will be very difficult if you stack field definitions right next to each other and there is supposed to be farmland / property line beween them.
</p>

<p>
The maximum number of crops in densityMapHeightTypes is 31, if you add more you will crash the game.
</p>

<p>
16km terrain you need to GE edit the Sun, use GE -> sun -> attributes -> light -> range, put it to like 20000 value or so, well beyond 16384 (I think, not confirmed this 2019-02-15).
</p>

<p>
defaultVehicles.xml sets the vehicles for career start. It will set types, coordinates and rotation. Check example from fs19root/sdk/mapde/defaultvehicles.xml, then just grab the new coordinates using GE. Look for different vehicles types from fs19root/data/vehicles/ etc dirs. Make sure you do not add dollar sign for the filename="$data as the other xml's use, this doesnt work for defaultvehicles.xml, apparently it is some bug. Change the xml to be like this: &lt;vehicle filename="data/
</p>

<p>
Upgrade v1.3 new feature seems to be the usage of "$mapdir$" (points to current terrain root dir). In earlier mapSA was still used "$moddir$FS19_EstanciaLapacho/".
</p>

<p>
Real world data heightmap can look very ugly in GE, you need to smooth out the jagged elevations in either L3DT, Wilbur or GE itself. I used 0.1 values for opacity, hardness and value, then 500m large round brush and smoothed out until the jagged parts were mostly gone. You could also use photoshop / gimp and add gaussian blur to the grayscale heightmap image. For proper one click solution, read below about US NED Heightmap.
</p>

<p>
The Giants engine calculates float predominantly with single precision (~7 digits). You can see just in GE that 1.00000 has become 0.99999 or 1.00001 in the saved i3d. Not very much but can be sufficient for some precision issues.
</p>

<p>
Satellite texture for PDA map painting tip: you should paint the fields as they are in farming simulator because once you plow the fields you can see the background PDA image on the map view, this looks odd if the satellite is with some real life crop imagery even though you just harvested or ploughed etc.
</p>

<p>
Placing objects is easier if you use google/maps satellite view to see where and what sort of buildings or trees etc are in your terrain area. Street view photos are excellent resource to get the feeling what the real life location is, however these photos are not usually available other than urban areas or large highways.
</p>

<p>
Place bushes around roads, they have no geometry but give a nice look. American locations add those old style telephone / electric wire poles.
</p>

<p>
Satellite image to GE map view: use <a href="https://www.fs-uk.com/mods/view/36154/any-sign-any-size-any-shape" target="_blank">fs-uk.com any sign any size any shape model</a>, save your satellite image over back_of_sign_a.png and then import back_of_sign_a.i3d model. Scale it in attributes window, put your terrain size like 2km is 2048, 4km is 4096, 8km is 8192 etc, type in scale Z and Z: 4096 but leave scale Y as 1. When you want to disable/hide this model, use attributes -> translate Y and make it like -5 value which puts it five meters underground (assuming blank flat heightmap). You can also use visibility tick box to turn it on and off, however turning it invisible still causes objects to align to this plane if you have it higher than 0 meters elevation and that plane while invisible it still exist in-game, so move the plane -5 meters elevation. For a release version terrain you need to delete this as it has no use in-game.
</p>

<p>
Road splines before you start to create these you need to check from google/maps which roads are asphalt and dirt/gravel. On Iowa Garden City I proceeded to create the road network almost completely and plan was to organize the splines later to asphalt/dirt categories, well it just happens that this location has two roads that turn from asphalt into dirt at one point so my single spline for it doesn't work, I had to go back and delete parts of the spline and create another one for the different road type. So always check google/maps before starting to create splines to avoid this problem.
</p>

<p>
When choosing a new terrain location, never include roads that have only connection to the outside terrain. For example a farm right at the edge of the terrain where its road connection leads to outside terrain only, leaving players no way to drive into that farm. This is kind of difficult to explain without a screenshot, PMC Texas Rowena north-north-west edge has two farms/locations that have no connecting roads, only roads lead to outside terrain. Also do not include farms that are right at the terrain edge or worse where the farm is cut in half by the edge, those are very bad for enjoyable game-play as you cant really operate in the edge.
</p>

<p>
Gas station is just a 3d model in terrain i3d, then you setup defaultItems.xml placeable for this gas station like:
</p>
<pre>
&lt;item mapBoundId="gasStation" className="BuyingStationPlaceable" filename="data/placeables/mapUS/gasStation/gasStation.xml" position="COORDINATES" rotation="0 0 0" /&gt;
</pre>

<p>
Bale sale point is just a defaultItems.xml placeable, pure virtual thing, its up to you what to place in that location and add the warning trigger markers to the ground:
</p>
<pre>
&lt;item mapBoundId="sellingStationBales" className="SellingStationPlaceable" filename="data/placeables/mapUS/sellingStationBales/sellingStationBales.xml" position="COORDINATES" rotation="0 0 0" /&gt;
</pre>

<p>
Field and forest / trees edge needs <b>at least a tractor width</b> of space so you get enjoyable game-play. Anything less and your players get frustrated with another stupid map with trees next to the field blocking vehicles and especially hired worker driven vehicles.
</p>

<p>
When you resize density image resolutions, you need to re-create collision map.
</p>

	<h2>Adding Selling Points</h2>

<p>
- GE file -> import -> FS19_root -> data -> placeables -> mapDE -> sellingstationgeneric<br>
- create dir to your terrain maps\placeables\sellingpoints\<br>
- copy from the game placeables dir sellingStationGeneric.xml and sellingStationPort01.xml to your sellingpoints dir<br>
- edit the xml stationName to your liking, like PMC Grain Sales INC<br>
- rename xml to like PMC_sellingStationGrain.xml and PMC_sellingStationPoorMans.xml<br>
- edit PMC_sellingStationPoorMans.xml, copy paste milk line and rename it to "cotton", now this sellpoint accepts cotton too<br>
- edit YourTerrain\defaultItems.xml and add mapBoundId for names of your xml files without the file extension<br>
- move the sellingstationgeneric object in GE where you want first selling point, then check the attributes -> transform -> translate<br>
- copy paste translate coordinates to defaultitems.xml position= part, also check rotation if you want<br>
- once done for both objects, delete the objects from GE as you dont need them anymore<br>
- edit defaultitems.xml filename part to say $moddir$MyMap_2km/maps/Placeables/Sellingpoints/PMC_sellingStationGrain.xml and the poormans as well
</p>

<p>
Above example uses PMC_ tagging for the file names, that is not really necessary but it helps a lot to identify the files you're edited. You should use your own tag if you so choose.
</p>


	<h2>User Interface Image Resolutions</h2>

<p>
map_preview.png resolution is 2048 x 1024 pda_map.png resolution is what your terrain is, 2048, 4096, 8192. Or is it... 2048 seemed to work fine on larger terrains(?).
</p>

<p>
Preview and map images are once again NOT FLIPPED, hehe. Do them as is, no need to flip vertically anymore like in FS17.
</p>


	<h2>Common Errors</h2>

<pre>
Error: Trying to set DensityMapHeightUpdater collision map with invalid size (33554432 vs 134217728)
Error: Blocked area map is wrong size for terrain (1024 x 1024) vs (2048 x 2048)
</pre>
<p>
Fix: GE -> scripts -> fs19 -> map -> create ground collision map. TERRAINNAME.i3d.plcMap.grle will not be updated when you create ground collision map, you must copy TERRAINAME.i3d.plcColMap.grle to TERRAINNAME.i3d.plcMap.grle for it to work.
</p>

<pre>
Error: Running LUA method 'update'.
dataS/scripts/fieldJobs/FieldManager.lua(90) : attempt to index local 'farmland' (a nil value)
Error: Running LUA method 'update'.
dataS/scripts/fieldJobs/FieldManager.lua(104) : attempt to index field 'farmland' (a nil value)
Error: Running LUA method 'update'.
dataS/scripts/fieldJobs/Field.lua(103) : attempt to index field 'farmland' (a nil value)
</pre>
<p>
Fix: you did not info layer paint farmland area over EVERY field, also check that your farmlands.xml is in order. If you forgot to paint over some fields you can easily see this in-game as the fields are not present, colored so to speak.
</p>

<pre>
Error: Failed to open xml file '$data/placeables/mapDE/sellingStationGeneric/sellingStationPort01.xml'.
Warning: corrupt savegame, item 24 with className SellingStationPlaceable could not be loaded
</pre>
<p>
Fix: edit defaultItems.xml, remove or fix the entries there.
</p>

<pre>
Error: GDM file has wrong number of channels (11 should be 13)
DensityMap: failed to load GDM file.
Error: Can't load resource 'c:/mydir/MyMap_4km/maps/MyMap_4km/cultivator_density.png'.
Error: Failed to load terrain detail layer 'terrainDetail'.
Error: GDM file has wrong number of channels (9 should be 10)
DensityMap: failed to load GDM file.
Error: Can't load resource 'c:/mydir/MyMap_4km/maps/MyMap_4km/fruit_density.png'.
</pre>
<p>
Then you need to delete the GDM and possibly GRLE files, only leave the PNG versions. open terrain again in GE and it should work now.
</p>

<pre>
Error: TerrainDeformation requires a terrain lod size that is a multiple of the terrain height map size
</pre>
<p>
Fix: some of your _weight or _density (or all maybe) image resolutions are smaller than heightmap, resize them properly.
</p>

	<h2>Creating Forests</h2>

<p>
Select a tree, use CTRL-B, press and hold LMB, move mouse and hit left CTRL key to place the tree. GE v8.1 (final) introduced interactive placement new features, see below. Still with these features, creating forests is extremely frustrating like most things in GE, but admittedly random scale is nice improvement to the previous.
</p>


	<h2>Giants Editor</h2>

<p>
If you get huge list of errors about case sensitivity, you must fix the game installation path to be case sensitive from file -> preferences -> game installation path. Next time when you load any terrain there wont be game installation path case sensitive errors.
</p>

<p>
Giants Editor (GE) got v8.1 release on 2019-02-09, new features were toggle options for interactive placement mode. S Scale new objects randomly (range according to preferences), C Don't place new objects on objects created during the current session, T Only place new objects on terrain.
</p>

<p>
Use file -> preferences -> viewport -> interactive placement scale variance. This will set the object placing using CTRL-B with random scale.
</p>

<p>
HOWTO use new interactive placement for trees. Select a tree, press CTRL-B, click and HOLD LMB somewhere on the terrain. Now in bottom of GE status bar you see new options "Interactive placement: align to normal 'B' (Off) random scale 'S' (Off) self avoidance 'C' (Off) terrain height 'T' (Off)". While LMB down you hit B, S, C or T keys will turn on/off these toggles. Press left CTRL to place (duplicate) object into the location it is at. Once you release LMB the selected object is placed and interactive mode turns off.
</p>

<p>
Converting old terrain. Use file -> open mod, then browse to your terrains modDesc.xml file, rest is just clicking OK button and seeing what happens. While its processing be patient and wait, GE looks like its doing nothing but it is processing something on the background, you will get notification when its done.
</p>

<p>
When you change _density image resolution you must run GE -> scripts -> fs19 -> map -> create ground collision map.
</p>

	<h2>Real World Data Terrain</h2>

<p>
2019-02-20 this is very much work in progress, but decided to write down what I can today.
</p>

<p>
The tools we use are Global Mapper, Terra Incognita and L3DT. Unfortunately global mapper is a commercial software about $500. Please read <a href="https://pmc.editing.wiki/doku.php?id=arma3:terrain:real-world-data-tutorial" target="_blank">PMC Editing Wiki: ArmA 3 Real World Data Terrain Tutorial</a> how to use these tools to get satellite texture and SRTM heightmap.
</p>

<p>
FS19 terrains use 2 meters per pixel heightmap resolution. SRTM heightmap resolution is 30 meters which is awfully low for FS19, but for world wide coverage its best and easiest option to use. For american terrains you should use the United States Elevation Data (NED) 10m resolution which gives great results for FS19.
</p>

<p>
This is the steps I use to generate real world data terrain source files:<br>
- choose location using google/maps terrain view so you can see the fields<br>
- click map, pin is inserted, click the bottom center new dialog, copy paste lat/lon coordinates<br>
- global mapper online sources world street map, view -> zoom view -> zoom to spacing -> view spacing selection 10, fits 8km grid with plenty of free space around<br>
- global mapper CTRL-HOME insert coordinates, find the spot<br>
- global mapper create 4096 or 8192 user created feature grid<br>
- global mapper open online data -> u.s. data -> united states elevation data (NED) (10m resolution)<br>
- global mapper export heightmap<br>
- global mapper export kmz<br>
- terra incognita map source -> openstreetmap -> zoom level 500km<br>
- terra incognita file -> load waypoints,tracks -> kmz<br>
- terra incognita full screen, zoom into kmz black rectangle (8km is ok with openstreetmap 250m 4m/px but 16km is 500m 8m/ps), draw selection rectangle<br>
- terra incognita waypoints,tracks -> visible to disable kmz black rectangle<br>
- terra incognita map source -> esri arcgis, zoom level 17<br>
- terra incognita download oziexplorer map format<br>
- global mapper open -> oziexplorer .map/.jpg satellite imagery<br>
- global mapper file -> export -> export raster/image format -> png -> file type 24-bit rgb, sample spacing 1, export to bounds -> crop to selected area feature(s)<br>
- l3dt file -> import -> heightfield, choose your heightmap.asc<br>
- l3dt operations -> heightfield -> resize heightfield, use 2049 for 4km and 4097 for 8km terrain etc<br>
- l3dt CTRL-E -> file format -> PNG -> map_dem.png
</p>


	<h2>Weight Image Resolutions</h2>

<p>
<b>mapDE - Felsbrunn</b> _weight image resolutions:<br>
animalMud01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki<br>
animalMud02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki<br>
animalMud03_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki<br>
animalMud04_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki<br>
asphalt01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 18.4Ki<br>
asphalt02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 19.3Ki<br>
asphalt03_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 19.0Ki<br>
asphalt04_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 18.4Ki<br>
beachSandWet01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 17.1Ki<br>
beachSandWet02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 17.1Ki<br>
beachSandWet03_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 16.8Ki<br>
beachSandWet04_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 17.1Ki<br>
concrete01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 24.2Ki<br>
concrete02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 25.7Ki<br>
concrete03_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 26.5Ki<br>
concrete04_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 24.2Ki<br>
concreteDirt01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 7.5Ki<br>
concreteGravel01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 7.0Ki<br>
forestGround01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 17.3Ki<br>
forestGround02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 19.2Ki<br>
forestGround03_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 35.1Ki<br>
forestGround04_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 17.3Ki<br>
forestGroundUS01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 15.9Ki<br>
forestGroundUS02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 15.9Ki<br>
forestGroundUS03_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 15.9Ki<br>
forestGroundUS04_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 20.0Ki<br>
grass01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 85.2Ki<br>
grass02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 85.0Ki<br>
grass03_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 84.9Ki<br>
grass04_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 84.9Ki<br>
grassRough01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 329.8Ki<br>
grassRough02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 350.4Ki<br>
grassRough03_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 353.0Ki<br>
grassRough04_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 329.7Ki<br>
grassTown01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 12.0Ki<br>
grassTown02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 12.4Ki<br>
grassTown03_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 12.4Ki<br>
grassTown04_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 12.1Ki<br>
gravel01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 16.8Ki<br>
gravel02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 18.1Ki<br>
gravel03_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 18.2Ki<br>
gravel04_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 16.9Ki<br>
mountainRock01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 38.3Ki<br>
mountainRock02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 38.1Ki<br>
mountainRock03_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 39.0Ki<br>
mountainRock04_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 37.9Ki<br>
mountainRockDark01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 71.7Ki<br>
mountainRockDark02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 72.0Ki<br>
mountainRockDark03_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 72.0Ki<br>
mountainRockDark04_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 72.3Ki<br>
plate01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 19.5Ki<br>
plate02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 20.6Ki<br>
plate03_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 20.6Ki<br>
plate04_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 19.6Ki<br>
plateDamaged01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 6.4Ki<br>
plateDamaged02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 6.5Ki<br>
plateDamaged03_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 6.6Ki<br>
plateDamaged04_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 6.4Ki<br>
riverStoneBank01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 56.0Ki<br>
riverStoneBank02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 55.9Ki<br>
riverStoneBank03_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 56.8Ki<br>
riverStoneBank04_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 56.2Ki<br>
riverStoneBankWater01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 5.8Ki<br>
riverStoneBankWaterEdge01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 7.3Ki<br>
roughDirt01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 29.3Ki<br>
roughDirt02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 24.8Ki<br>
roughDirt03_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 24.7Ki<br>
roughDirt04_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 24.9Ki<br>
waterPuddle01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki
</p>

<p>
<b>mapUS - Ravenport</b> _weight image resolutions:<br>
asphalt01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 33.5Ki<br>
asphalt02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 33.8Ki<br>
asphalt03_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 33.6Ki<br>
asphalt04_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 33.0Ki<br>
cliffRock01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 30.8Ki<br>
cliffRock02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 31.2Ki<br>
cliffRock03_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 31.0Ki<br>
cliffRock04_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 31.0Ki<br>
concrete01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 7.6Ki<br>
concrete02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 7.6Ki<br>
concrete03_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 7.5Ki<br>
concrete04_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 7.6Ki<br>
dustyRockUS01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 11.0Ki<br>
dustyRockUS02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 10.8Ki<br>
dustyRockUS03_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 10.8Ki<br>
dustyRockUS04_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 10.8Ki<br>
forestGround01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 39.4Ki<br>
forestGround02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 39.5Ki<br>
forestGround03_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 39.2Ki<br>
forestGround04_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 39.4Ki<br>
forestNeedles01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki<br>
graniteYellow01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.9Ki<br>
graniteYellow02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 5.0Ki<br>
graniteYellow03_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.8Ki<br>
graniteYellow04_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.9Ki<br>
grass01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki<br>
grass02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki<br>
grass03_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki<br>
grass04_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki<br>
grassDry01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 239.5Ki<br>
grassDry02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 238.4Ki<br>
grassDry03_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 237.4Ki<br>
grassDry04_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 238.5Ki<br>
grassRough01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 233.1Ki<br>
grassRough02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 244.0Ki<br>
grassRough03_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 245.0Ki<br>
grassRough04_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 232.9Ki<br>
gravel01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 5.0Ki<br>
gravel02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 5.1Ki<br>
gravel03_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 5.1Ki<br>
gravel04_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 5.0Ki<br>
mudDark01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 6.2Ki<br>
mudDark02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 6.2Ki<br>
mudDark03_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 6.2Ki<br>
mudDark04_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 6.2Ki<br>
roughDirt01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.5Ki<br>
roughDirt02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.5Ki<br>
roughDirt03_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.6Ki<br>
roughDirt04_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.6Ki<br>
roughMud01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 122.6Ki<br>
roughMud02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 123.1Ki<br>
roughMud03_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 123.1Ki<br>
roughMud04_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 122.4Ki<br>
sand01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 24.6Ki<br>
sand02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 25.2Ki<br>
sand03_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 25.6Ki<br>
sand04_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 24.5Ki<br>
sandPuddle01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.4Ki<br>
sandPuddle02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 11.1Ki<br>
sandRough01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 17.3Ki<br>
sandRough02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 17.1Ki<br>
sandRough03_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 17.1Ki<br>
sandRough04_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 17.4Ki<br>
sandWet01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 10.2Ki<br>
sandWet02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 10.3Ki<br>
sandWet03_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 10.5Ki<br>
sandWet04_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki<br>
waterPuddle01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki
</p>

<p>
_weight files RGB black is off and white is on, meaning everything that is painted white will be that particular _weight type like asphalt or sand or grass etc.
</p>

	<h2>Density Image Resolutions</h2>

<p>
<b>mapDE - Felsbrunn</b> _density image resolutions:<br>
cultivator_density.png PNG 4096x4096+0+0 DirectClass 8-bit 61.0Ki<br>
forestGrassDark_density.png PNG 4096x4096+0+0 PseudoClass 256c 8-bit 56.8Ki<br>
fruit_density.png PNG 4096x4096+0+0 DirectClass 8-bit 809.8Ki<br>
terrainDetailHeight_density.png PNG 4096x4096+0+0 DirectClass 8-bit 48.1Ki<br>
townDecoGrass_density.png PNG 4096x4096+0+0 PseudoClass 256c 8-bit 29.2Ki<br>
weed_density.png PNG 4096x4096+0+0 PseudoClass 256c 8-bit 16.1Ki
</p>

<p>
<b>mapUS - Ravenport</b> _density image resolutions:<br>
cultivator_density.png PNG 4096x4096+0+0 DirectClass 8-bit 78.5Ki<br>
fruit_density.png PNG 4096x4096+0+0 DirectClass 8-bit 1.3Mi<br>
terrainDetailHeight_density.png PNG 4096x4096+0+0 DirectClass 8-bit 48.5Ki<br>
weed_density.png PNG 4096x4096+0+0 PseudoClass 256c 8-bit 16.1Ki
</p>


	<h2>Farmland and tipColInfoLayer Resolution</h2>

<p>
<b>mapDE - Felsbrunn</b> _farmland and tipColInfoLayer image resolutions:<br>
mapDE_farmland.png PNG 1024x1024+0+0 PseudoClass 256c 8-bit 14.8Ki<br>
tipColInfoLayer.png PNG 1024x1024+0+0 PseudoClass 256c 8-bit 28.1Ki
</p>

<p>
<b>mapUS - Ravenport</b> _farmland and tipColInfoLayer image resolutions:<br>
mapUS_farmland.png PNG 1024x1024+0+0 PseudoClass 256c 8-bit 19.7Ki<br>
tipColInfoLayer.png PNG 1024x1024+0+0 PseudoClass 256c 8-bit 22.3Ki
</p>


	<h2>Object View Distance</h2>

<p>
Object view distance, how far out it is drawn, in GE is called clip distance under attributes -> transform -> clip distance. CBJ midwest buildings pack and even giants farm silos use 1,000,000 value, no idea what this value means other than "large". Odd thing though that giants silos do not after all show up very far away, hmm. However clip distance definitely is what controls how far out your model will be rendered.
</p>

<p>
CBJ midwest buildings can be seen from the other side of the terrain (and I do mean 8km x 8km one), which is great but I'm always concerned about performance issues, so far in my testing the mentioned buildings cause no issues.
</p>


	<h2>Heightmap</h2>

<p>
Heightmap or Digital Elevation Map (DEM) as its called in FS19, is the terrain elevations in grayscale png image format.
</p>

<p>
The data in the heightmap is a 16bit value, encoded in the red and green channel of the image. This means the final value can be calculated as: (red&lt;&lt;8) + green.
</p>

<p>
The GIANTS Editor and the engine also support 16bit png images. For example you can create the in photoshop / gimp by switching to grayscale and 16bits / channel.
</p>


	<h2>Import Vehicle Shop</h2>

<p>
Vehicle shop is possibly one of the most important objects because if you cant buy vehicles... you cant do nothing except walking around. Vehicle shop is the 3D model building which is just cosmetic eyecandy without any function and then the transformgroups which create the functionality.
</p>

<p>
Open mapUS.i3d and select gameplay -> vehicleShopGameplay and then file -> export selection, choose directory and use the same vehicleShopGameplay.i3d filename to save.
</p>

<p>
Select placeholders -> vehicleSellingPoint and export to like vehicleShopTriggers.i3d or similar name.
</p>

<p>
Now you are ready to import these into your own terrain, place them as you please. Only thing to be careful is to set the storePlace1Start and storePlace1End so that there are no other objects in the way. There are total of three storePlace?Start transformgroups.
</p>


	<h2>Lua Scripts</h2>

<p>
GE scripts paint_terrain_by_spline2.lua <a href="https://www.fs-uk.com/forum/index.php?topic=205310.0" target="_blank">fs-uk.com/forum topic</a>
</p>

<pre>
--[[ gray looking asphalt (not very dark tar colored) --]]
	local mLayerId = 80
	local mLayerIdL = 80
    local mLayerIdR = 80
    local mSideCount = 4
--[[ dirt gravel brown --]]
	local mLayerId = 00
	local mLayerIdL = 00
    local mLayerIdR = 00
    local mSideCount = 2
</pre>

<p>
Numbers are: 4 grass, 28 cobblestone kinda, 34 gravel, 56 kinda asfalt very light color, 80 asfalt. note that if your main spline start point is rotated like -90 then the LUA will make oddly very narrow texture paint line, so dont rotate the main spline start.
</p>


	<h2>Environmental Sounds</h2>

<p>
If you do not use your own _sound.* files then you inherit the mapDE/mapUS environmental sounds like birds, water, wind, etc. See below how to add custom _sound.* file setup to your terrain.
</p>

<p>
- copy mapDE_sound.i3d and mapDE_sound.xml files from fs19_root/data/maps/ directory to your terrain maps/ directory<br>
- rename mapDE_sound.* files to your terrain name like name_sound.* (one of ours is PMC_Iowa_Ringsted_8km_sound.* so its not "name" literally, its just for examples sake)<br>
- GE edit name_sound.i3d and remove the sounds you dont need, you can also move or add sounds<br>
- edit name_sound.xml and change filename="$data/maps/mapDE_sound.i3d" to filename="maps/name_sound.i3d"<br>
- edit maps/name.xml and change &lt;sounds filename="$data/maps/mapDE_sound.xml" /> to &lt;sounds filename="maps/name_sound.xml" /&gt;
</p>

<p>
All done, now your terrain will play the sounds from your maps/name_sound.i3d file, so no more ocean sounds in middle of the terrain in fields etc (assuming you removed the water sounds).
</p>


	<h2>Global Mapper Painted Roads</h2>

<p>
This info requires you to know how to use openstreetmap shapes in global mapper, check <a href="https://pmc.editing.wiki/doku.php?id=arma3:terrain:real-world-data-tutorial" target="_blank">PMC Editing Wiki: ArmA 3 Real World Data Terrain Tutorial</a>.
</p>

<p>
Global Mapper Painted Openstreetmap Roads:<br>
- crop the roads as usual<br>
- select all road features<br>
- RMB -> edit - edit selected features<br>
- tick modify name, give no name<br>
- tick specify style to use when rendering features<br>
- style solid, width READ_NOTES_ABOUT_WIDTH pixels, color black<br>
- background line width READ_NOTES_ABOUT_WIDTH pixels, color black<br>
- enable user created feature grid and export satellite image normally
</p>

<p>
GIMP Color Replace:<br>
- colors -> map -> color exchange<br>
- swap background color to black and road color to white
</p>

<p>
Road width 4 pixels transforms into FS19 as very narrow dirt road where a lizard pickup fits just nicely, you cant have two cars pass each other in this road width, its too narrow. So you either have to separate asphalt roads in global mapper openstreetmap stage, or just go with much wider roads in general. Any tractor with large implement would not fit into 4 pixel road width, it really is the narrowest small dirt road you can imagine, almost a path, if you drive large size combine on road like this its almost twice as wide as the road heh. Experiment the values, but 8 pixels would be a good start.
</p>

<p>
You can paint weight, cultivator and fruit density images in gimp, just remember to keep the weight images as grayscale 8 bit single channel format (no alpha channel), density images are RGB.
</p>

<p>
Error: Terrain weight map 'roughDirt01_weight.png' incorrect format. Must be 8bit single channel. Fix this with gimp -> layer -> transparency -> remove alpha channel, this makes your image single channel.
</p>


	<h2>Gimp fruit_density Road Painting</h2>

<p>
How to convert asphalt01_weight road image to grass removing fruit_density image, assuming fruit_density is all RGB 130,0,0 painted as grass. This guide assumes you have already converted fruit_density.gdm to png image format.
</p>

<p>
- load fruit_density.png and asphalt01_weight.png in gimp<br>
- set asphalt01_weight image -> mode -> RGB<br>
- SHIFT-O select by color, click the road white pixel, all white pixels are now selected<br>
- select -> grow -> 5<br>
- select -> shink -> 3, use any numbers here to make the selected area match your road as much as possible<br>
- CTRL-C, select fruit_density image and CTRL-V, RMB pasted selection -> to new layer<br>
- unselect the selection (roads), colors -> map -> color exchange, set white RBG 255,255,255 to black RGB 0,0,0<br>
- pasted layer RMB -> merge down<br>
- file -> overwrite fruit_density.png<br>
All done ;)
</p>


	<h2>Gimp Paint Fields</h2>

<p>
Paint fields in GIMP using satellite texture as base. Paint cultivated or plowed fields. GE is extremely bad software to use so painting fields using it is a torture, it is far better to paint them in gimp.
</p>

<p>
This image assumes you have high resolution satellite image for real world data terrain available, use 8192 x 8192 resolution for 8km and 4096 x 4096 resolution for 4km terrains.
</p>

<p>
- open satellite image in gimp, create fields layer and paint fields as some bright color like red<br>
- resize to cultivator_density resolution (usually smaller), background RGB 0,0,0 and red color to RGB 1,0,0 export to cultivator_density.png<br>
- replace RGB 0,0,0 with RGB 130,0,0 and RGB 1,0,0 with RGB 0,0,0 export to fruit_density.png<br>
- edit terrainname.i3d GDM to PNG on these two density images<br>
- GE load terrainname.i3d and verify that fields are painted without grass in them, save<br>
</p>

<p>
Idea: why not screenshot GE top-down view with field rectangles visible, then just gimp resize it to like 4096 res, color replace the blue with RGB 1,0,0 to create cultivated fields almost automatically? Hmm :)
</p>


	<h2>US NED Heightmap</h2>

<p>
Howto use US National Elevation Data (NED) heightmap as map_dem.png so giants engine understands how it should look.
</p>

<p>
Global mapper -> L3DT -> grayscale PNG doesnt work, elevations are really high / rough, you need to darken the image, a lot. This is because GE recognizes 0 meters to 255 meters as RGB black to white color range only. You can do this with photoshop or gimp but we use <a href="http://www.graphicsmagick.org/" target="_blank">graphicsmagick</a> as its automatic one click method.
</p>

<p>
Graphicsmagick values explained:<br>
70 way too rough<br>
35 looks nice in-game but is just <i>slightly</i> too rough when comparing to google/maps street view photos<br>
20 still can see some roughness, but looks already very nice<br>
15 smooth but still elevations, this looks realistic
</p>

<p>
_run_graphicsmagick_heightmap_just_right.bat:
</p>
<pre>
@echo off
md temp
set MAGICK_TMPDIR=%CD%\temp

copy C:\FS19_Projects\USA_Texas_Rowena_8km\map_dem.png .
gm convert -modulate 15,100 map_dem.png PMC_Texas_Rowena_8km_dem.png

rd temp
del map_dem.png
echo All done :)
pause
exit
</pre>

<p>
You need to replace the C:\FS19_Projects\USA_Texas_Rowena_8km\ path to where you placed your grayscale heightmap DEM image, if its in the current dir then remove that line completely. Also edit the PMC_Texas_Rowena_8km_dem.png to whatever file name you use. Once you have darkened the heightmap png just load the terrain up in GE and inspect how it looks, it might require in-game check where you get better sense of the elevations when you drive tractor or just walk around.
</p>


	<h2>AI Planted Crop Types</h2>

<p>
If you want to control what crop types the AI will plant for example we customized Garden City Iowa so that AI only plants corn and soybeans.
</p>

<p>
- copy &lt;fs19_root&gt;\data\maps\maps_fruitTypes.xml to your terrain maps\ dir<br>
- rename maps_fruitTypes.xml to name_fruitTypes.xml<br>
- edit name.xml change &lt;!-- &lt;fruitTypes filename="$data/maps/maps_fruitTypes.xml" /&gt; --&gt; to &lt;fruitTypes filename="maps/name_fruitTypes.xml" /&gt;<br>
- edit name_fruitTypes.xml and change useForFieldJob="true" to false for the crop types you dont want AI to plant
</p>

<!--
	<h2></h2>

<p>
</p>

<a href="" target="_blank"></a>

<ul>
<li></li>
</ul>
-->
</section>

<footer>
<p><a href="../index.php" class="button">PMC Farming Simulator root page</a></p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("../include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
