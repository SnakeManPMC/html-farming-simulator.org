<!DOCTYPE html>
<html lang="en">
<head>
<title>HOWTO Increase Farmland ID Channels - PMC Farming Simulator 19</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="HOWTO Increase Farmland ID Channels - PMC Farming Simulator 19">
<META name="keywords" content="Farmland, Channels, Increase, Tutorial, FS19, PMC, Farming, Simulator">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<!-- google ads -->
<?php include("../include/google-ads.php"); ?>
<h1><b>HOWTO Increase Farmland ID Channels - PMC Farming Simulator 19</b></h1>
</header>

<section>
	<h2>HOWTO Increase Farmland ID Channels FS19</h2>

<p>
<b>2022-02-02T07:15:00Z</b> updated.
</p>

<p>
Large terrains have many fields and farm yards, most of the time these fields / farm yards should have unique farmland ID area assigned to them, so you buy fields instead of massive chunks of land possibly with dozen or more fields in it. Imagine being new farmer game-mode with limited money and all the land lots available to purchase cost over one million, that's not fun. We need more detailed small land lots and that requires many farmland ID channels.
</p>

<p>
127 Farmland IDs:<br>
- edit PMC_Texas_Rowena_8km_farmlands.xml, change numChannels="6" to numChannels="7"<br>
- edit PMC_Texas_Rowena_8km.i3d, &lt;InfoLayer name="farmland" fileId="209" numChannels="6"/&gt; change to numChannels="7"
</p>

<p>
255 Farmland IDs:<br>
- edit PMC_Texas_Rowena_8km_farmlands.xml, change numChannels="6" to numChannels="8"<br>
- edit PMC_Texas_Rowena_8km.i3d, &lt;InfoLayer name="farmland" fileId="209" numChannels="6"/&gt; change to numChannels="8"
</p>

<p>
PMC_Iowa_Garden_City_8km_farmlands.xml
</p>

<p>
Make sure not to use fictional fantasy npcName= entries, we have seen several terrain developers use NPC_US_?? numbers all the way up to 30 which means nothing as they do not exist, highest mapUS NPC ID is NPC_US_20, do not use higher numbers.
</p>

<p>
defaultFarmProperty="true" means new farmer game-mode player owns that land lot.
</p>

<p>
Example 255 ID terrain_farmlands.xml config file:
</p>

<pre>
&lt;?xml version="1.0" encoding="utf-8" standalone="no" ?&gt;
&lt;map&gt;
    &lt;farmlands densityMapFilename="maps/PMC_Iowa_Garden_City_8km/PMC_Iowa_Garden_City_8km_farmland.grle" numChannels="8" pricePerHa="9500"&gt;
&lt;!--
example of new farmer owning land ID 1
        &lt;farmland id="1"  priceScale="1" npcName="NPC_US_01" defaultFarmProperty="true" /&gt;
--&gt;
        &lt;farmland id="1"  priceScale="1" npcName="NPC_US_01" /&gt;
        &lt;farmland id="2"  priceScale="1" npcName="NPC_US_01" /&gt;
        &lt;farmland id="3"  priceScale="1" npcName="NPC_US_02" /&gt;
        &lt;farmland id="4"  priceScale="1" npcName="NPC_US_03" /&gt;
        &lt;farmland id="5"  priceScale="1" npcName="NPC_US_04" /&gt;
        &lt;farmland id="6"  priceScale="1" npcName="NPC_US_05" /&gt;
        &lt;farmland id="7"  priceScale="1" npcName="NPC_US_05" /&gt;
        &lt;farmland id="8"  priceScale="1" npcName="NPC_US_03" /&gt;
        &lt;farmland id="9"  priceScale="1" npcName="NPC_US_10" /&gt;
        &lt;farmland id="10" priceScale="1" npcName="NPC_US_06" /&gt;
        &lt;farmland id="11" priceScale="1" npcName="NPC_US_06" /&gt;
        &lt;farmland id="12" priceScale="1" npcName="NPC_US_06" /&gt;
        &lt;farmland id="13" priceScale="1" npcName="NPC_US_07" /&gt;
        &lt;farmland id="14" priceScale="1" npcName="NPC_US_07" /&gt;
        &lt;farmland id="15" priceScale="1" npcName="NPC_US_07" /&gt;
        &lt;farmland id="16" priceScale="1" npcName="NPC_US_08" /&gt;
        &lt;farmland id="17" priceScale="1" npcName="NPC_US_08" /&gt;
        &lt;farmland id="18" priceScale="1" npcName="NPC_US_09" /&gt;
        &lt;farmland id="19" priceScale="1" npcName="NPC_US_09" /&gt;
        &lt;farmland id="20" priceScale="1" npcName="NPC_US_09" /&gt;
        &lt;farmland id="21" priceScale="1" npcName="NPC_US_10" /&gt;
        &lt;farmland id="22" priceScale="1" npcName="NPC_US_10" /&gt;
        &lt;farmland id="23" priceScale="1" npcName="NPC_US_11" /&gt;
        &lt;farmland id="24" priceScale="1" npcName="NPC_US_11" /&gt;
        &lt;farmland id="25" priceScale="1" npcName="NPC_US_12" /&gt;
        &lt;farmland id="26" priceScale="1" npcName="NPC_US_12" /&gt;
        &lt;farmland id="27" priceScale="1" npcName="NPC_US_12" /&gt;
        &lt;farmland id="28" priceScale="1" npcName="NPC_US_13" /&gt;
        &lt;farmland id="29" priceScale="1" npcName="NPC_US_13" /&gt;
        &lt;farmland id="30" priceScale="1" npcName="NPC_US_13" /&gt;
        &lt;farmland id="31" priceScale="1" npcName="NPC_US_14" /&gt;
        &lt;farmland id="32" priceScale="1" npcName="NPC_US_14" /&gt;
        &lt;farmland id="33" priceScale="1" npcName="NPC_US_14" /&gt;
        &lt;farmland id="34" priceScale="1" npcName="NPC_US_14" /&gt;
        &lt;farmland id="35" priceScale="1" npcName="NPC_US_14" /&gt;
        &lt;farmland id="36" priceScale="1" npcName="NPC_US_14" /&gt;
        &lt;farmland id="37" priceScale="1" npcName="NPC_US_15" /&gt;
        &lt;farmland id="38" priceScale="1" npcName="NPC_US_15" /&gt;
        &lt;farmland id="39" priceScale="1" npcName="NPC_US_16" /&gt;
        &lt;farmland id="40" priceScale="1" npcName="NPC_US_15" /&gt;
        &lt;farmland id="41" priceScale="1" npcName="NPC_US_16" /&gt;
        &lt;farmland id="42" priceScale="1" npcName="NPC_US_16" /&gt;
        &lt;farmland id="43" priceScale="1" npcName="NPC_US_18" /&gt;
        &lt;farmland id="44" priceScale="1" npcName="NPC_US_18" /&gt;
        &lt;farmland id="45" priceScale="1" npcName="NPC_US_17" /&gt;
        &lt;farmland id="46" priceScale="1" npcName="NPC_US_18" /&gt;
        &lt;farmland id="47" priceScale="1" npcName="NPC_US_18" /&gt;
        &lt;farmland id="48" priceScale="1" npcName="NPC_US_19" /&gt;
        &lt;farmland id="49" priceScale="1" npcName="NPC_US_20" /&gt;
        &lt;farmland id="50" priceScale="1" npcName="NPC_US_20" /&gt;
        &lt;farmland id="51" priceScale="1" npcName="NPC_US_20" /&gt;
        &lt;farmland id="52" priceScale="1" npcName="NPC_US_20" /&gt;
        &lt;farmland id="53" priceScale="1" npcName="NPC_US_20" /&gt;
        &lt;farmland id="54" priceScale="1" npcName="NPC_US_20" /&gt;
        &lt;farmland id="55" priceScale="1" npcName="NPC_US_20" /&gt;
        &lt;farmland id="56" priceScale="1" npcName="NPC_US_20" /&gt;
        &lt;farmland id="57" priceScale="1" npcName="NPC_US_20" /&gt;
        &lt;farmland id="58" priceScale="1" npcName="NPC_US_20" /&gt;
        &lt;farmland id="59" priceScale="1" npcName="NPC_US_20" /&gt;
        &lt;farmland id="60" priceScale="1" npcName="NPC_US_20" /&gt;
        &lt;farmland id="61" priceScale="1" npcName="NPC_US_20" /&gt;
        &lt;farmland id="62" priceScale="1" npcName="NPC_US_20" /&gt;
        &lt;farmland id="63" priceScale="1" npcName="NPC_US_20" /&gt;
        &lt;farmland id="64" priceScale="1" npcName="NPC_US_20" /&gt;
        &lt;farmland id="65" priceScale="1" npcName="NPC_US_20" /&gt;
        &lt;farmland id="66" priceScale="1" npcName="NPC_US_20" /&gt;
        &lt;farmland id="67" priceScale="1" npcName="NPC_US_20" /&gt;
        &lt;farmland id="68" priceScale="1" npcName="NPC_US_20" /&gt;
        &lt;farmland id="69" priceScale="1" npcName="NPC_US_20" /&gt;
        &lt;farmland id="70" priceScale="1" npcName="NPC_US_01" /&gt;
        &lt;farmland id="71" priceScale="1" npcName="NPC_US_02" /&gt;
        &lt;farmland id="72" priceScale="1" npcName="NPC_US_03" /&gt;
        &lt;farmland id="73" priceScale="1" npcName="NPC_US_04" /&gt;
        &lt;farmland id="74" priceScale="1" npcName="NPC_US_05" /&gt;
        &lt;farmland id="75" priceScale="1" npcName="NPC_US_06" /&gt;
        &lt;farmland id="76" priceScale="1" npcName="NPC_US_07" /&gt;
        &lt;farmland id="77" priceScale="1" npcName="NPC_US_08" /&gt;
        &lt;farmland id="78" priceScale="1" npcName="NPC_US_09" /&gt;
        &lt;farmland id="79" priceScale="1" npcName="NPC_US_10" /&gt;
        &lt;farmland id="80" priceScale="1" npcName="NPC_US_11" /&gt;
        &lt;farmland id="81" priceScale="1" npcName="NPC_US_12" /&gt;
        &lt;farmland id="82" priceScale="1" npcName="NPC_US_13" /&gt;
        &lt;farmland id="83" priceScale="1" npcName="NPC_US_14" /&gt;
        &lt;farmland id="84" priceScale="1" npcName="NPC_US_15" /&gt;
        &lt;farmland id="85" priceScale="1" npcName="NPC_US_16" /&gt;
        &lt;farmland id="86" priceScale="1" npcName="NPC_US_17" /&gt;
        &lt;farmland id="87" priceScale="1" npcName="NPC_US_18" /&gt;
        &lt;farmland id="88" priceScale="1" npcName="NPC_US_19" /&gt;
        &lt;farmland id="89" priceScale="1" npcName="NPC_US_20" /&gt;
        &lt;farmland id="90" priceScale="1" npcName="NPC_US_01" /&gt;
        &lt;farmland id="91" priceScale="1" npcName="NPC_US_02" /&gt;
        &lt;farmland id="92" priceScale="1" npcName="NPC_US_03" /&gt;
        &lt;farmland id="93" priceScale="1" npcName="NPC_US_04" /&gt;
        &lt;farmland id="94" priceScale="1" npcName="NPC_US_05" /&gt;
        &lt;farmland id="95" priceScale="1" npcName="NPC_US_06" /&gt;
        &lt;farmland id="96" priceScale="1" npcName="NPC_US_07" /&gt;
        &lt;farmland id="97" priceScale="1" npcName="NPC_US_08" /&gt;
        &lt;farmland id="98" priceScale="1" npcName="NPC_US_09" /&gt;
        &lt;farmland id="99" priceScale="1" npcName="NPC_US_10" /&gt;
        &lt;farmland id="100" priceScale="1" npcName="NPC_US_11" /&gt;
        &lt;farmland id="101" priceScale="1" npcName="NPC_US_12" /&gt;
        &lt;farmland id="102" priceScale="1" npcName="NPC_US_13" /&gt;
        &lt;farmland id="103" priceScale="1" npcName="NPC_US_14" /&gt;
        &lt;farmland id="104" priceScale="1" npcName="NPC_US_15" /&gt;
        &lt;farmland id="105" priceScale="1" npcName="NPC_US_16" /&gt;
        &lt;farmland id="106" priceScale="1" npcName="NPC_US_17" /&gt;
        &lt;farmland id="107" priceScale="1" npcName="NPC_US_18" /&gt;
        &lt;farmland id="108" priceScale="1" npcName="NPC_US_19" /&gt;
        &lt;farmland id="109" priceScale="1" npcName="NPC_US_20" /&gt;
        &lt;farmland id="110" priceScale="1" npcName="NPC_US_01" /&gt;
        &lt;farmland id="111" priceScale="1" npcName="NPC_US_02" /&gt;
        &lt;farmland id="112" priceScale="1" npcName="NPC_US_03" /&gt;
        &lt;farmland id="113" priceScale="1" npcName="NPC_US_04" /&gt;
        &lt;farmland id="114" priceScale="1" npcName="NPC_US_05" /&gt;
        &lt;farmland id="115" priceScale="1" npcName="NPC_US_06" /&gt;
        &lt;farmland id="116" priceScale="1" npcName="NPC_US_07" /&gt;
        &lt;farmland id="117" priceScale="1" npcName="NPC_US_08" /&gt;
        &lt;farmland id="118" priceScale="1" npcName="NPC_US_09" /&gt;
        &lt;farmland id="119" priceScale="1" npcName="NPC_US_10" /&gt;
        &lt;farmland id="120" priceScale="1" npcName="NPC_US_11" /&gt;
        &lt;farmland id="121" priceScale="1" npcName="NPC_US_12" /&gt;
        &lt;farmland id="122" priceScale="1" npcName="NPC_US_13" /&gt;
        &lt;farmland id="123" priceScale="1" npcName="NPC_US_14" /&gt;
        &lt;farmland id="124" priceScale="1" npcName="NPC_US_15" /&gt;
        &lt;farmland id="125" priceScale="1" npcName="NPC_US_16" /&gt;
        &lt;farmland id="126" priceScale="1" npcName="NPC_US_17" /&gt;
        &lt;farmland id="127" priceScale="1" npcName="NPC_US_18" /&gt;
        &lt;farmland id="128" priceScale="1" npcName="NPC_US_19" /&gt;
        &lt;farmland id="129" priceScale="1" npcName="NPC_US_20" /&gt;
        &lt;farmland id="130" priceScale="1" npcName="NPC_US_01" /&gt;
        &lt;farmland id="131" priceScale="1" npcName="NPC_US_02" /&gt;
        &lt;farmland id="132" priceScale="1" npcName="NPC_US_03" /&gt;
        &lt;farmland id="133" priceScale="1" npcName="NPC_US_04" /&gt;
        &lt;farmland id="134" priceScale="1" npcName="NPC_US_05" /&gt;
        &lt;farmland id="135" priceScale="1" npcName="NPC_US_06" /&gt;
        &lt;farmland id="136" priceScale="1" npcName="NPC_US_07" /&gt;
        &lt;farmland id="137" priceScale="1" npcName="NPC_US_08" /&gt;
        &lt;farmland id="138" priceScale="1" npcName="NPC_US_09" /&gt;
        &lt;farmland id="139" priceScale="1" npcName="NPC_US_10" /&gt;
        &lt;farmland id="140" priceScale="1" npcName="NPC_US_11" /&gt;
        &lt;farmland id="141" priceScale="1" npcName="NPC_US_12" /&gt;
        &lt;farmland id="142" priceScale="1" npcName="NPC_US_13" /&gt;
        &lt;farmland id="143" priceScale="1" npcName="NPC_US_14" /&gt;
        &lt;farmland id="144" priceScale="1" npcName="NPC_US_15" /&gt;
        &lt;farmland id="145" priceScale="1" npcName="NPC_US_16" /&gt;
        &lt;farmland id="146" priceScale="1" npcName="NPC_US_17" /&gt;
        &lt;farmland id="147" priceScale="1" npcName="NPC_US_18" /&gt;
        &lt;farmland id="148" priceScale="1" npcName="NPC_US_19" /&gt;
        &lt;farmland id="149" priceScale="1" npcName="NPC_US_20" /&gt;
        &lt;farmland id="150" priceScale="1" npcName="NPC_US_01" /&gt;
        &lt;farmland id="151" priceScale="1" npcName="NPC_US_02" /&gt;
        &lt;farmland id="152" priceScale="1" npcName="NPC_US_03" /&gt;
        &lt;farmland id="153" priceScale="1" npcName="NPC_US_04" /&gt;
        &lt;farmland id="154" priceScale="1" npcName="NPC_US_05" /&gt;
        &lt;farmland id="155" priceScale="1" npcName="NPC_US_06" /&gt;
        &lt;farmland id="156" priceScale="1" npcName="NPC_US_07" /&gt;
        &lt;farmland id="157" priceScale="1" npcName="NPC_US_08" /&gt;
        &lt;farmland id="158" priceScale="1" npcName="NPC_US_09" /&gt;
        &lt;farmland id="159" priceScale="1" npcName="NPC_US_10" /&gt;
        &lt;farmland id="160" priceScale="1" npcName="NPC_US_11" /&gt;
        &lt;farmland id="161" priceScale="1" npcName="NPC_US_12" /&gt;
        &lt;farmland id="162" priceScale="1" npcName="NPC_US_13" /&gt;
        &lt;farmland id="163" priceScale="1" npcName="NPC_US_14" /&gt;
        &lt;farmland id="164" priceScale="1" npcName="NPC_US_15" /&gt;
        &lt;farmland id="165" priceScale="1" npcName="NPC_US_16" /&gt;
        &lt;farmland id="166" priceScale="1" npcName="NPC_US_17" /&gt;
        &lt;farmland id="167" priceScale="1" npcName="NPC_US_18" /&gt;
        &lt;farmland id="168" priceScale="1" npcName="NPC_US_19" /&gt;
        &lt;farmland id="169" priceScale="1" npcName="NPC_US_20" /&gt;
        &lt;farmland id="170" priceScale="1" npcName="NPC_US_01" /&gt;
        &lt;farmland id="171" priceScale="1" npcName="NPC_US_02" /&gt;
        &lt;farmland id="172" priceScale="1" npcName="NPC_US_03" /&gt;
        &lt;farmland id="173" priceScale="1" npcName="NPC_US_04" /&gt;
        &lt;farmland id="174" priceScale="1" npcName="NPC_US_05" /&gt;
        &lt;farmland id="175" priceScale="1" npcName="NPC_US_06" /&gt;
        &lt;farmland id="176" priceScale="1" npcName="NPC_US_07" /&gt;
        &lt;farmland id="177" priceScale="1" npcName="NPC_US_08" /&gt;
        &lt;farmland id="178" priceScale="1" npcName="NPC_US_09" /&gt;
        &lt;farmland id="179" priceScale="1" npcName="NPC_US_10" /&gt;
        &lt;farmland id="180" priceScale="1" npcName="NPC_US_11" /&gt;
        &lt;farmland id="181" priceScale="1" npcName="NPC_US_12" /&gt;
        &lt;farmland id="182" priceScale="1" npcName="NPC_US_13" /&gt;
        &lt;farmland id="183" priceScale="1" npcName="NPC_US_14" /&gt;
        &lt;farmland id="184" priceScale="1" npcName="NPC_US_15" /&gt;
        &lt;farmland id="185" priceScale="1" npcName="NPC_US_16" /&gt;
        &lt;farmland id="186" priceScale="1" npcName="NPC_US_17" /&gt;
        &lt;farmland id="187" priceScale="1" npcName="NPC_US_18" /&gt;
        &lt;farmland id="188" priceScale="1" npcName="NPC_US_19" /&gt;
        &lt;farmland id="189" priceScale="1" npcName="NPC_US_20" /&gt;
        &lt;farmland id="190" priceScale="1" npcName="NPC_US_01" /&gt;
        &lt;farmland id="191" priceScale="1" npcName="NPC_US_02" /&gt;
        &lt;farmland id="192" priceScale="1" npcName="NPC_US_03" /&gt;
        &lt;farmland id="193" priceScale="1" npcName="NPC_US_04" /&gt;
        &lt;farmland id="194" priceScale="1" npcName="NPC_US_05" /&gt;
        &lt;farmland id="195" priceScale="1" npcName="NPC_US_06" /&gt;
        &lt;farmland id="196" priceScale="1" npcName="NPC_US_07" /&gt;
        &lt;farmland id="197" priceScale="1" npcName="NPC_US_08" /&gt;
        &lt;farmland id="198" priceScale="1" npcName="NPC_US_09" /&gt;
        &lt;farmland id="199" priceScale="1" npcName="NPC_US_10" /&gt;
        &lt;farmland id="200" priceScale="1" npcName="NPC_US_11" /&gt;
        &lt;farmland id="201" priceScale="1" npcName="NPC_US_12" /&gt;
        &lt;farmland id="202" priceScale="1" npcName="NPC_US_13" /&gt;
        &lt;farmland id="203" priceScale="1" npcName="NPC_US_14" /&gt;
        &lt;farmland id="204" priceScale="1" npcName="NPC_US_15" /&gt;
        &lt;farmland id="205" priceScale="1" npcName="NPC_US_16" /&gt;
        &lt;farmland id="206" priceScale="1" npcName="NPC_US_17" /&gt;
        &lt;farmland id="207" priceScale="1" npcName="NPC_US_18" /&gt;
        &lt;farmland id="208" priceScale="1" npcName="NPC_US_19" /&gt;
        &lt;farmland id="209" priceScale="1" npcName="NPC_US_20" /&gt;
        &lt;farmland id="210" priceScale="1" npcName="NPC_US_01" /&gt;
        &lt;farmland id="211" priceScale="1" npcName="NPC_US_02" /&gt;
        &lt;farmland id="212" priceScale="1" npcName="NPC_US_03" /&gt;
        &lt;farmland id="213" priceScale="1" npcName="NPC_US_04" /&gt;
        &lt;farmland id="214" priceScale="1" npcName="NPC_US_05" /&gt;
        &lt;farmland id="215" priceScale="1" npcName="NPC_US_06" /&gt;
        &lt;farmland id="216" priceScale="1" npcName="NPC_US_07" /&gt;
        &lt;farmland id="217" priceScale="1" npcName="NPC_US_08" /&gt;
        &lt;farmland id="218" priceScale="1" npcName="NPC_US_09" /&gt;
        &lt;farmland id="219" priceScale="1" npcName="NPC_US_10" /&gt;
        &lt;farmland id="220" priceScale="1" npcName="NPC_US_11" /&gt;
        &lt;farmland id="221" priceScale="1" npcName="NPC_US_12" /&gt;
        &lt;farmland id="222" priceScale="1" npcName="NPC_US_13" /&gt;
        &lt;farmland id="223" priceScale="1" npcName="NPC_US_14" /&gt;
        &lt;farmland id="224" priceScale="1" npcName="NPC_US_15" /&gt;
        &lt;farmland id="225" priceScale="1" npcName="NPC_US_16" /&gt;
        &lt;farmland id="226" priceScale="1" npcName="NPC_US_17" /&gt;
        &lt;farmland id="227" priceScale="1" npcName="NPC_US_18" /&gt;
        &lt;farmland id="228" priceScale="1" npcName="NPC_US_19" /&gt;
        &lt;farmland id="229" priceScale="1" npcName="NPC_US_20" /&gt;
        &lt;farmland id="230" priceScale="1" npcName="NPC_US_01" /&gt;
        &lt;farmland id="231" priceScale="1" npcName="NPC_US_02" /&gt;
        &lt;farmland id="232" priceScale="1" npcName="NPC_US_03" /&gt;
        &lt;farmland id="233" priceScale="1" npcName="NPC_US_04" /&gt;
        &lt;farmland id="234" priceScale="1" npcName="NPC_US_05" /&gt;
        &lt;farmland id="235" priceScale="1" npcName="NPC_US_06" /&gt;
        &lt;farmland id="236" priceScale="1" npcName="NPC_US_07" /&gt;
        &lt;farmland id="237" priceScale="1" npcName="NPC_US_08" /&gt;
        &lt;farmland id="238" priceScale="1" npcName="NPC_US_09" /&gt;
        &lt;farmland id="239" priceScale="1" npcName="NPC_US_10" /&gt;
        &lt;farmland id="240" priceScale="1" npcName="NPC_US_11" /&gt;
        &lt;farmland id="241" priceScale="1" npcName="NPC_US_12" /&gt;
        &lt;farmland id="242" priceScale="1" npcName="NPC_US_13" /&gt;
        &lt;farmland id="243" priceScale="1" npcName="NPC_US_14" /&gt;
        &lt;farmland id="244" priceScale="1" npcName="NPC_US_15" /&gt;
        &lt;farmland id="245" priceScale="1" npcName="NPC_US_16" /&gt;
        &lt;farmland id="246" priceScale="1" npcName="NPC_US_17" /&gt;
        &lt;farmland id="247" priceScale="1" npcName="NPC_US_18" /&gt;
        &lt;farmland id="248" priceScale="1" npcName="NPC_US_19" /&gt;
        &lt;farmland id="249" priceScale="1" npcName="NPC_US_20" /&gt;
        &lt;farmland id="250" priceScale="1" npcName="NPC_US_01" /&gt;
        &lt;farmland id="251" priceScale="1" npcName="NPC_US_02" /&gt;
        &lt;farmland id="252" priceScale="1" npcName="NPC_US_03" /&gt;
        &lt;farmland id="253" priceScale="1" npcName="NPC_US_04" /&gt;
        &lt;farmland id="254" priceScale="1" npcName="NPC_US_05" /&gt;
        &lt;farmland id="255" priceScale="1" npcName="NPC_US_06" /&gt;
    &lt;/farmlands&gt;
&lt;/map&gt;
</pre>

<p>
Enjoy your many new farmland IDs <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
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
