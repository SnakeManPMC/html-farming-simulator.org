<!DOCTYPE html>
<html lang="en">
<head>
<title>Farmland Farming Simulator 19 - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Farmland Farming Simulator 19 - PMC Farming">
<META name="keywords" content="Terrain, Farmland, PMC, Farming">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<!-- google ads -->
<?php include("../include/google-ads.php"); ?>
<h1><b>PMC Farming Simulator Terrain Farmland</b></h1>
</header>

<section>
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
When you mouse over existing painted layer and hit CTRL-R, it will select that info channel layer value for you. Note that if you have just used the drop down menus then CTRL-R doesn't work because the "focus" is on the other dialog and not in your 3D viewport (yeah, its weird).
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
Giants Editor v8.1 final info layer painting, the layer value drop-down is not working for me (known issue). hmm looks like the drop-down works to tick the info channel boxes... but when you paint it has no effect, what you must do to fix this is just to untick one of the numbers and tick it back again, then your painting works... <i>usually...</i> you should experiment and see how it works for you.
</p>

<p>
_farmland.grle 1024 resolution is WAY TOO LOW for 8km terrains, in GE doing farmland info layer is like painting with lego blocks, you cannot do fields that are close to each other with that resolution, bump it to at least bare minimum 2048 but probably to 4096 to get good accurate results. Check in-game lands X view startup lag if you increase the size to 4096 because that seems to cause that well known FS17 8km terrain "ESC map lag" which is really ennoying. Fields close together is a common problem with real world data terrains.
</p>

<p>
Unconfirmed tip, or rather idea: resize your _farmland.grle (well, png) to 4096 while you're painting it in GE farmland info layer to have some accuracy, then once you're done resize it back to 2048 for in-game use without the mapview lag. Maybe this works, maybe it doesn't, needs testing...
</p>

</section>

<footer>
<p><a href="map-making-tutorial.php" class="button">PMC Farming Simulator Map Making Tutorial page</a></p>
<p><a href="../index.php" class="button">PMC Farming Simulator root page</a></p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("../include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
