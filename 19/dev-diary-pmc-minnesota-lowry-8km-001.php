<!DOCTYPE html>
<html lang="en">
<head>
<title>Developer Diary PMC Minnesota Lowry 8km Farming Simulator 19 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Developer Diary PMC Minnesota Lowry 8km Farming Simulator 19 - PMC Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
<h1>Developer Diary PMC Minnesota Lowry 8km Farming Simulator 19 - PMC Farming</h1>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>2019 Project Started</h2>

<p>
PMC Minnesota Lowry 8km aka <b>"FS19 Millennial Farmer Map"</b> project was created back in 2019, unfortunately at this time I did not write dev diary entries or record videos of editing for FS19 yet. Only written record from 2019 I have is <a href="changelog-pmc-minnesota-lowry-8km.php">changelogs</a> and stuff that I wrote in chat, I believe this was spring of 2019 so it was on Giants Software chat server (PMC chat server did not have FS19 area at that time).
</p>

<p>
First recorded changelog entry is from 2019-03-18 when this terrain already had cultivator_density fields painted.
</p>

<p>
I would love to dig up those old chat logs from 2019 but unfortunately it is highly unlikely it would happen, but I wrote todo task for myself about it anyways.
</p>

<p>
In february 2019 all the known PMC FS19 terrain projects were created, but then later at may 2019 it was discovered that global mapper projection was MERCATOR instead of UTM which ruined the scale, terrains were about 5km instead of 8.1km, so I deleted all the existing projects and re-created them from scratch. This was a major overhaul, huge undertaking to get all that work done, paint all those cultivator_density images for multiple terrains in GIMP, but it was do or die, I could not live with myself if I had some piece of shit downscaled terrain done, PMC doesn't do minisculing terrains, it makes no sense to take real world data online source and downscale it to fictional fantasy terrain. Luckily only <a href="pmc-iowa-garden-city-8km.php">PMC Iowa Garden City 8km</a> terrain had objects placed at this time, it was playable almost in release condition, all the rest had no objects placed so none of that work got lost. But yeah, it definitely was one of those historical moments when you just decided to own your shit and get it done no matter what the cost, heh.
</p>

<p>
I just wish there was dev diary entries and captured video footage since beginning of 2019, but nothing can be done about it now.
</p>


	<h2>2022-07-09 Dev Diary Started</h2>

<p>
2022-07-09T22:13:00Z New editing day has started, just finished creating _run_backup_PMC_Minnesota_Lowry_8km.bat which backups the terrain project dir and copies 7-zip packet to three HDDs and Linux computer as well.
</p>

<p>
Then ran the bat file, terrain project has now been properly backup.
</p>

<p>
2022-07-09T22:29:00Z Just posted to PMC Tactical forum topic <a href="https://www.pmctactical.org/forum/viewtopic.php?f=75&t=22764" target="_blank">PMC Minnesota Lowry 8km Development</a>. And now, days first meal <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Checked modDesc.xml nothing out of the ordinary, defaultItems.xml and defaultVehicles.xml, basic 6 selling points and no vehicles.
</p>

<p>
PMC_Minnesota_Lowry_8km/maps/ dir is very old, its not using my PMC_Helpers/ and Exclude.for.Release/ system yet as explained in <a href="terrain-pmc-helpers.php" target="_blank">PMC Helpers (for Giants Editor) tutorial</a> page.
</p>

<p>
Heightmap is RGB 0,0,0 black single color, meaning completely flat so real heightmap has not yet been put in.
</p>

<p>
Updated _run_sync_copy_PMC_Minnesota_Lowry_8km_to_mods_dir.bat with latest robocopy parameters so unused files / dirs are not copied to FS19 mods dir.
</p>

<pre>
robocopy ..\PMC_Minnesota_Lowry_8km c:\FS19.Mods\PMC_Minnesota_Lowry_8km /MIR /xf *.cache *.bat *.txt *.7z /xd Exclude.For.Release
pause
exit
</pre>

<p>
2022-07-09T23:12:00Z Created stub of this dev-diary-pmc-minnesota-lowry-8km page <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
2022-07-09T23:15:00Z Ran _run_sync_copy_PMC_Minnesota_Lowry_8km_to_mods_dir.bat to get FS19 version of our terrain project, it did not came out perfect as the source terrain project is not using Exclude.for.Release/ dir setup as mentioned, but hopefully it works OK.
</p>

<p>
Started FS19 and new career with PMC Minnesota Lowry 8km loaded <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Boo!
</p>

<pre>
2022-07-09 23:18 Error: Farmland-Id 25 not defined in farmland ownage file 
</pre>

<p>
Hehe
</p>

<p>
Seems like one farmland ID is not set, probably just an oversight in farmlands.xml file I'm guessing.
</p>

<p>
There are a lot of lands available for purchase, so quite extensive work was done to them, I'm actually surprised, have no recollection of doing these heh.
</p>

<p>
Selling points are in and show up in markets menu and in 3D, vehicle shop ugly german LANDSMACHINENHUHUHU 3D model is there with working map icon teleport, _weight images have roads painted and even yard area for the vehicle shop.
</p>

<p>
I am quite surprised how nice this looks for a base source files, all it needs is proper heightmap and some buildings <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
2022-07-09T23:31:00Z In PMC_Minnesota_Lowry_8km_farmlands.xml commented out farmland id="25" property. Quick fix for that single error in the log.
</p>

<p>
Synced project to FS19 mods dir and launched FS19 for another test, hopefully error free this time.
</p>

<p>
2022-07-09T23:35:00Z FS19 test concluded, terrain project is now error free <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Copied _run_create_exclude_for_release_dir.bat file to root/maps/ dir and ran it, now all in-game useless editing directories got moved into Exclude.For.Release/ dir, which is then excluded when project is synchronized to FS19 mods dir or when packing an release packet.
</p>

<p>
Then of course another FS19 in-game test to verify everything is working error free...
</p>

<p>
As I expected, there was some errors:
</p>

<pre>
2022-07-10 00:06 Error: Can't load resource 'C:/FS19.Mods/PMC_Minnesota_Lowry_8km/maps/prefabs/FS19_vehicleShop_prefab/textures/buildingsWindowsResidential_diffuse.png'.
2022-07-10 00:06 Error: Can't load resource 'C:/FS19.Mods/PMC_Minnesota_Lowry_8km/maps/prefabs/FS19_vehicleShop_prefab/textures/buildingsWindowsResidential_specular.png'.
2022-07-10 00:06 Error: Can't load resource 'C:/FS19.Mods/PMC_Minnesota_Lowry_8km/maps/prefabs/FS19_vehicleShop_prefab/textures/buildingsArray_diffuse.png'.
2022-07-10 00:06 Error: Can't load resource 'C:/FS19.Mods/PMC_Minnesota_Lowry_8km/maps/prefabs/FS19_vehicleShop_prefab/textures/buildingsArray_normal.png'.
2022-07-10 00:06 Error: Can't load resource 'C:/FS19.Mods/PMC_Minnesota_Lowry_8km/maps/prefabs/FS19_vehicleShop_prefab/textures/buildingsArray_specular.png'.
2022-07-10 00:06 Error: Can't load resource 'C:/FS19.Mods/PMC_Minnesota_Lowry_8km/maps/prefabs/FS19_vehicleShop_prefab/textures/vehicleShop_specular.png'.
2022-07-10 00:06 Error: Can't load resource 'C:/FS19.Mods/PMC_Minnesota_Lowry_8km/maps/prefabs/FS19_vehicleShop_prefab/textures/buildingDecals01_diffuse.png'.
2022-07-10 00:06 Error: Can't load resource 'C:/FS19.Mods/PMC_Minnesota_Lowry_8km/maps/prefabs/FS19_vehicleShop_prefab/textures/buildingDecals01_normal.png'.
2022-07-10 00:06 Error: Can't load resource 'C:/FS19.Mods/PMC_Minnesota_Lowry_8km/maps/prefabs/FS19_vehicleShop_prefab/textures/buildingDecals01_specular.png'.
2022-07-10 00:06 Error: Can't load resource 'C:/FS19.Mods/PMC_Minnesota_Lowry_8km/maps/GoogleEarthPlane/back_of_sign_a.dds'.
2022-07-10 00:06 Warning: Missing texture 'albedo' in 'buildingsArray_mat' (data/shaders/buildingShader.xml).
2022-07-10 00:06 Warning: Missing texture 'normal' in 'buildingsArray_mat' (data/shaders/buildingShader.xml).
2022-07-10 00:06 Warning: Missing texture 'gloss' in 'buildingsArray_mat' (data/shaders/buildingShader.xml).
</pre>

<p>
Then started Giants Editor (GE) v8.2.2 and loaded minnesota lowry project up. PMC_Helpers transformgroup was there with visibility disabled, this was the good old 2019 way of doing things heh. Changed visibility to enabled, inspected transformgroup contents which was very little, saved project and exited.
</p>

<p>
Started GE back up and loaded project, now exported PMC_Helpers into Exclude.For.Release/PMC_Helpers/PMC_Helpers.i3d file, then deleted it. Also deleted vehicle shop because it was texture-less due textures not being found in a specified directory and then I saved the project, the bogus texture links were discarded by GE.
</p>

<p>
Reloaded GE with the project and no more texture or shader path errors. Well guess it was a fix as the whole vehicle shop building is now gone heh. But anyways I hate that german sausage eating euro trash building, it will be replaced with mapUS ravenport building which looks more american.
</p>

<p>
2022-07-10T00:23:00Z Okay now GE and FS19 both are error free. I still need to work on the PMC_Helpers as google maps background plane texture is not showing up, but heh yeah at least its error free <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Further testing shows that unfortunately PMC_Helpers.i3d now lost the texture name and path to google maps back plane DDS, guess it was my mistake to export/save/something heh, in my defense GE is just plain stupid with these texture path things, if you're not super careful and know what you're doing (like I didn't REMEMBER what I was doing), textures can be lost. I never learned how to actually add textures back to specific faces/planes. Might have to research that.
</p>

<p>
Right now I'm thinking easiest way to fix this crap is to simply restore the initial working version from backup 7-zip and pick the working PMC_Helpers from there. This is why <b>backups are so critically important</b>.
</p>

<p>
Did some thinking, this shit is slowly coming back to me, its been MONTHS since I did any heavy farmsim especially FS19 editing, I cant remember all the fine details hehe. So discovered / remembered that I can simply RE-import back_of_sign.dds plane with texture from the original "GoogleEarthPlane" dir and the texture shows up OK.
</p>

<p>
2022-07-10T00:46:00Z Now I had error free main empty terrain project and Exclude.For.Release/PMC_Helpers/PMC_Helpers.i3d file with working satellite imagery back plane texture.
</p>

<p>
Next was time to add proper heightmap to this terrain.
</p>

<p>
Found E:\Global.Mapper\USA_Minnesota_Lowry_8km\ directory which had files:
</p>

<pre>
2019-06-29T05:05:00Z unnamed_sucks_giraffe_cock.gmw
2019-06-12T15:06:00Z satellite_texture_farmland.xcf
2019-06-12T10:29:00Z satellite_texture_fields_MN_Lowry.xcf
2019-06-12T13:39:00Z satellite_texture_roads.xcf
2021-12-23T04:00:00Z USA_Minnesota_Lowry_8km.gmw
</pre>

<p>
Started global mapper, opened USA_Minnesota_Lowry_8km.gmw, this is the main global mapper source project for our terrain, enabled US NED heightmap online source and exported heightmap.asc ASCII Grid ASC file.
</p>

<a href="screenshots/PMC-Minnesota-Lowry-8km-2022-07-10T0106.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Minnesota-Lowry-8km-2022-07-10T0106.jpg" class="terrainimg" loading="lazy" alt="PMC Minnesota Lowry 8km Farming Simulator 19 Screenshot" title="PMC Minnesota Lowry 8km Farming Simulator 19 Screenshot"></a>

<p>
Then imported heightmap.asc into L3DT, extracted the heightScale="" value which was 61.51 and then exported heightmap_L3DT.png image which is our heightmap or "DEM" as kids call it.
</p>

<p>
Added US NAIP online source for global mapper, then started to export it which was again really slow 60-80kb/s speed.
</p>

<p>
I honestly have no idea which source I used for the original satellite imagery, it kind of looks like US NAIP but would have to do comparison with ArcGIS 17 level download.
</p>

<p>
I'm just downloading this for reference, 2022 update of sorts, however dirt roads and cultivator_density have already been painted over the original satellite imagery source so even if I had better, it would be a bad idea to change it now. Also no idea if I need better, to my knowledge there was nothing wrong with the 2019 downloaded imagery.
</p>

<p>
Looks like I've painted all the roads on top of the satellite imagery.
</p>

<a href="screenshots/PMC-Minnesota-Lowry-8km-2022-07-10T0120.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Minnesota-Lowry-8km-2022-07-10T0120.jpg" class="terrainimg" loading="lazy" alt="PMC Minnesota Lowry 8km Farming Simulator 19 Screenshot" title="PMC Minnesota Lowry 8km Farming Simulator 19 Screenshot"></a>

<p>
And yeah original 2019 satellite imagery source was indeed US NAIP as can be seen from satellite_texture_fields_MN_Lowry.xcf GIMP image.
</p>

<a href="screenshots/PMC-Minnesota-Lowry-8km-2022-07-10T0122.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Minnesota-Lowry-8km-2022-07-10T0122.jpg" class="terrainimg" loading="lazy" alt="PMC Minnesota Lowry 8km Farming Simulator 19 Screenshot" title="PMC Minnesota Lowry 8km Farming Simulator 19 Screenshot"></a>

<p>
Cant find ArcGIS 17 level download anywhere, could be that I never downloaded it back in 2019.
</p>

<p>
Then global mapper exported user created feature grid as KMZ file, started terra incognita, loaded the KMZ up and zoomed in. Chose arcgis 17 level as map source, disabled the KMZ visibility. Then started to download.
</p>

<a href="screenshots/PMC-Minnesota-Lowry-8km-2022-07-10T0130.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Minnesota-Lowry-8km-2022-07-10T0130.jpg" class="terrainimg" loading="lazy" alt="PMC Minnesota Lowry 8km Farming Simulator 19 Screenshot" title="PMC Minnesota Lowry 8km Farming Simulator 19 Screenshot"></a>

<p>
2022-07-10T01:45:00Z Finished downloading arcgis 17 level satellite imagery. Imported the oziexplorer .map image to global mapper and uh oh, it had clouds, well of course it did heh. Oh well I have perfect US NAIP so I'm all good.
</p>

<p>
Copied heightmap_L3DT.png into terrain project dir maps/PMC_Minnesota_Lowry_8km/PMC_Minnesota_Lowry_8km_dem.png file, opened PMC_Minnesota_Lowry_8km.i3d in text editor and edited heightScale="255" to read the proper value, heightScale="61.51". Saved I3D and loaded terrain project in GE.
</p>

<p>
Had to do some dance as there was one more texture path issue with satellite imagery back plane, but got it sorted out.
</p>

<p>
2022-07-10T01:58:00Z As far as I can tell now this terrain project is ready to be shipped to guys who want to help me place objects, which is <a href="https://www.pmctactical.org/forum/memberlist.php?mode=viewprofile&u=12324" target="_blank">ARG_afb</a> as of today <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2022-07-12T15:43:00Z GIMP loaded US NAIP satellite imagery of this terrain, painted with red over all building areas.
</p>

<img src="https://www.farming-simulator.org/19/screenshots/PMC-Minnesota-Lowry-8km-Buildings.jpg" alt="Lowry buildings">

<p>
2022-07-12T15:59:00Z Started to put together chart for players farm locations. Obviously player farm number one will be millennial farmers farm yard.
</p>

<p>
Not very good image size and quality but anyways.
</p>

<img src="https://www.farming-simulator.org/19/screenshots/PMC-Minnesota-Lowry-8km-Players-Farms.jpg" alt="Lowry players farms">

<p>
Continue reading <a href="dev-diary-pmc-minnesota-lowry-8km-002.php">next page</a>, or back to <a href="dev-diary-pmc-minnesota-lowry-8km.php">Dev Diary PMC Minnesota Lowry 8km Homepage</a>.
</p>

<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("/var/www/include/footer-start.php"); ?>
<p>
<a href="pmc-terrains.php" class="button">PMC Terrains FS19</a>
<a href="changelog-pmc-minnesota-lowry-8km.php" class="button">Changelog PMC Minnesota Lowry 8km</a>
<a href="pmc-minnesota-lowry-8km.php" class="button">PMC Minnesota Lowry 8km</a>
<a href="../index.php" class="button">PMC Farming Simulator root page</a>
</p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("/var/www/include/footer-end.php"); ?>
<?php include("/var/www/include/support.php"); ?>
<?php include("/var/www/include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
