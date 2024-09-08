<!DOCTYPE html>
<html lang="en">
<head>
<title>FS22 Release and Install PMC Farming Simulator 22 Stories</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="FS22 Release and Install PMC Farming Simulator 22 Stories">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
<h1>FS22 Release and Install PMC Farming Simulator 22 Stories</h1>
<p>PMC Farming Simulator 22 (FS22) Stories</p>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>Foreword</h2>

<p>
This story includes a lot of frustration while getting Farming Simulator 22 (FS22) to run, this leads into heated words, a lot of profanity and such vulgar language stuff, if your sensibilities are offended by strong language then please stop reading now. I just feel like removing all that frustration stuff would diminish the context and facts of the whole story, its forever to be remembered how I got FS22, so don't want to leave anything out.
</p>

<p>
<i>You have been warned.</i>
</p>

<p>
Some background information, my gaming computer is called PMC Gaming and it is running Windows 7 64bit operating system on Samsung 850 EVO SSD 250gb, its been running that since 2015 and working very well on <a href="https://www.pmctactical.org" target="_blank">ArmA 3</a>, <a href="https://www.elitedangerous.net" target="_blank">Elite Dangerous</a>, Farming Simulator 17 and Farming Simulator 19 game-play.
</p>


	<h2>2021-11-21 FS22 Release Story and Installation</h2>

<p>
2021-11-21T22:18:00Z Switched to PMC Gaming computer, penalty_box was twitch live streaming <a href="../19/pmc-grande-gardens-16km.php">PMC Grande Gardens 16km v1.1.12 terrain</a> while doing his FS22 giveaway thing. I was... basically just sitting and waiting until clock ticks to 2300hrs when FS22 activates / releases.
</p>

<p>
2021-11-21T22:32:00Z Tried starting / activating FS22, still no go, heh.
</p>

<p>
Added -restart -cheats windows desktop shortcut parameters for FS22 <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Created C:\FS22.Mods\PMC\ in anticipation of first mods hehe.
</p>

<p>
2021-11-21T22:50:00Z Ten minutes to release. I already have FS22 serial key in clipboard ready to copy paste. Plan is to try activation at 2255min and if still not working, then at 2300hrs even.
</p>

<p>
BTW was thinking that watching these FS22 preview twitch/youtube live streams and videos has somehow spoiled the most exciting anticipation of the new game. I would recommend that for the next farm sim game you should not watch that many live streams, it just somehow spoils the game for you, a little bit at least.
</p>

<p>
2021-11-21T22:55:00Z Tried activation, no luck yet. Okay next try at top of the hour, this is getting real now <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2021-11-21T22:59:00Z 1 minute.
</p>

<p>
2021-11-21T23:00:00Z Clicked FS22 activate button... it took a really long time to process the first time around, then came up with some error (forgot already at the moment of writing this text), second attempt came up with activation limit exceeded like in some pirated serial.
</p>

<p>
2021-11-21T23:02:00Z Finally it went through, I think... because the activation dialog exited that FarmingSimulator2022Game.exe came up with "d3d12.dll" is missing error.
</p>

<p>
Downloaded that DLL and copied to c:\windows\ dir, launched FS22 and now it gives me msvcp110_win.dll missing error. Quick search shows I'm missing microsoft visual C++ 2010, so off to download and install that.
</p>

<p>
Tried to install microsoft visual C++ 2010 but that installer said "Windows SDK 7.1" is missing, off to download and install that hehe.
</p>

<p>
Well that installer said "some windows SDK components require the RTM .NET framework 4." heh. Recommended to go to <a href="https://go.microsoft.com/fwlink/?LinkID=187668" target="_blank">go.microsoft.com/fwlink/?LinkID=187668</a> to install .NET framework 4. Okay lets try that <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Had to reboot windows, sigh.
</p>

<p>
After rebooting the installers still didn't work, fucking bullshit microsoft crap. So I just downloaded msvcp110_win.dll directly from web (not scary at all). Copied it to c:\windows\ directory and ran FS22 again, next error was "The procedure entry point _W_Getdays could not be located in the dynamic link library msvcrt.dll" sigh.
</p>

<p>
Googled and downloaded some Redistributables.exe from sourceforge and installed that. Then again launched FS22, same fucking error. Tried rebooting and launch FS22 again, and still fucking same error.
</p>

<p>
2021-11-21T23:30:00Z At this point I started to get really frustrated and evaluated my options. Trying to repair this fucking win7 bullshit, install windows 8.1 or go to PMC DevSurf (my editing and daily surfing computer) and launch FS22 there using the underpowered nvidia GTX 1060 3gb graphics card which most definitely would not run FS22 very good.
</p>

<p>
Honestly the PMC DevSurf option would be fastest, but it would suck in every other way possible when playing, mainly performance, no TrackIR 5 Pro etc. I am really not looking forward to installing win8.1 to PMC Gaming but I will do whatever it takes so I get to play FS22 <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Tried to google this issue one more time...
</p>

<p>
Then downloaded some microsoft visual C++ redistributable NDP452-KB2901907-x86-x64-AllOS-ENU.exe and ran it, but this said its already installed.
</p>

<p>
Then downloaded dotnetfx35.exe but that didn't install, just exited.
</p>

<p>
Then downloaded Visual C++ Redistributable for Visual Studio 2015 both 32bit and 64bit installers, but those were already installed.
</p>

<p>
Then NDP46-KB3045557-x86-x64-AllOS-ENU.exe but it was already installed...
</p>

<p>
Aarrgh! <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
Then downloaded dotNetFx40_Full_setup.exe and tried to run it but it said something about another installer running, hehe, ok time to reboot windows <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Just in case after reboot ran FS22 if it had suddenly started to work, nope. Then ran dotNetFx40_Full_setup.exe again but it says "same or higher version of .NET framework 4 has already been installed on this computer" sigh.
</p>

<p>
Starting to run out of ideas here <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
I fucking hate installing windows 8.1 to PMC Gaming as I love my old 2015 installed windows 7, but also that it would take at least an fucking hour if not more to get it running with FS22, most likely several hours knowing the can of worms a operating system reinstall can be.
</p>

<p>
Not only that but I would lose all my fucking configuration settings I've done since 2015.
</p>

<p>
Decided to hop into PMC DevSurf and launch FS22 there to see if it even runs with GTX 1060 3gb card and if so, how well it would perform with medium or low settings, if at all. Maybe I can get some more ideas there, also if everything else fails... I can start to create that windows 8.1 installer USB stick.
</p>

<p>
<b>2021-11-22T00:00:00Z</b> Back at PMC DevSurf, well under all and mighty windows 8.1 when launching FS22 it says the same fucking thing as win7 initially, "d3d12.dll" is missing error.
</p>

<p>
Then same shit repeated with "msvcp110_win.dll" is missing error, shit I've been down this route before ...
</p>

<p>
Then downloaded "Microsoft Visual C++ 2010 Service Pack 1 Redistributable Package MFC Security Update", three installers. Installed two of them (one was some odd not compatible) and tried to run FS22, now it says "msvcp_win.dll" is missing. Downloaded that DLL only and unpacked to c:\windows\ dir, then tried to launch FS22 yet again, now it says "api-ms-win-core-libraryloader-l1-2-1.dll" is missing haha.
</p>

<p>
Downloaded and unpacked to c:\windows\ dir, and still FS22 says the same fucking error.
</p>

<p>
Reinstalled FS22 on top of the existing install, I mean why not, starting to lose patience here.
</p>

<p>
Deleted the existing DLLs I copied into c:\windows\ dir, apparently they need to be in windows\system32\ dir and even run some registry program to "patch them in" or something. Anyways, starting from scratch by downloading "Visual C++ Redistributable for Visual Studio 2015" and installing 32bit and 64bit versions.
</p>

<p>
But I had those already installed. Then I downloaded "Visual Studio 2015, 2017, 2019, and 2022" and installed, and still FS22 says "d3d12.dll" is missing.
</p>

<p>
2021-11-22T02:30:00Z Still struggling, had a lunch then continued the fight. Uninstalled and installed the windows 7 installer version, no luck still screams about d3d12.dll missing. <i>Edit: 2024-02-06T17:05:00Z "windows 7 installer version" most likely mean FS22 even though I forgot to specifically mention it when writing this story live.</i>
</p>

<p>
So same stupid fucking loop starts all over again.
</p>

<p>
Well at this point I already had 32gb USB stick in PMC DevSurf and Rufus tool installing windows 7/8/10 ISO to it ...
</p>

<p>
American community manager kerminator just pasted support link to me when I asked in giants discord about win7/8 missing DLLs errors. Wonder what the fuck have I done to deserve this kind of treatment.
</p>

<p>
2021-11-22T02:52:00Z Sent to <a href="https://www.farming-simulator.com/support.php" target="_blank">farming-simulator.com/support.php</a>.
</p>

<p>
---cut---
</p>

<p>
<i>
I have two computers windows 7 64bit and windows 8.1 64bit. I downloaded FS22 win7 and win8/10 installers from giants eshop. On both win7 and win8.1 computers when I launch FS22 and get through activation, it gives first d3d12.dll missing error, then various other missing DLLs after I one by one google and download them.
</i>
</p>

<p>
<i>
I even tried to install win7 installer to win8.1 machine which worked ok, but same DLL issues when launching FS22.
</i>
</p>

<p>
<i>
FS22 minimum requirements say win10, yes I have seen that. Assumption on my part is that FS22 does work on at least win 8 because its support continues to 2023 and was hoping it would work on win 7 too, was pleasantly surprised when saw win7 installer in giants eshop. However launching FS22... didn't work out that well <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</i>
</p>

<p>
<i>
Please help a farmer out, I got mouths to feed and soybeans to sow <img src="../images/smileys/icon_biggrin.gif" alt="Smiley :D" loading="lazy">
</i>
</p>

<p>
<i>
For additional info, I am on giants discord with username: Snake Man#5843
</i>
</p>

<p>
---cut---
</p>


	<h2>2021-11-22 Windows 10 Installation</h2>

<p>
<i>Edit: 2024-02-06T17:28:00Z in this part of the story I didn't mention it specifically, but on twitch etc chats and googling, it became apparent to me that indeed FS22 minimum operating system requirements is unfortunately windows 10, it does not work in win7 or win8.1. It was extremely frustrating because giants at this time were still providing *WINDOWS 7 INSTALLER* on their eShop downloads, why did they have win7 installer if the game doesn't even work on that operating system version, makes no sense.
</i>
</p>

<p>
2021-11-22T05:48:00Z Long time later, I'm now at PMC Gaming computer, already backupped and nuked Samsung EVO 850 250gb C: boot drive, installed <b>windows 10</b> which didn't work, LAN was down as I had no drivers and then PMC DevSurf internet connection was down so I went to take care of it, after this I decided to go back to basics and installed <b>windows 8.1</b> to PMC Gaming. Right now at this time stamp win8.1 is running, motherboard drivers are in and LAN is working. Firefox installed, twitch playing big_guy86's FS22 live stream, and I'm installing FS22.
</p>

<p>
I am so pissed off, disappointed of myself and everything else that... <i>Edit: 2024-02-06T17:11:00Z serious amounts of furiously angered profanity removed, yes it was what I felt at the time, I remember being actually physically hot with anger, but I decided for "common good" to remove the list of expletitives from this paragraph, not trying to censor myself but... I mean it was really bad so decided to cut it out.</i>
</p>

<p>
2021-11-22T05:59:00Z FS22 installed, tried to run it and same fucking d3d12.dll missing bullshit <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
Installed DirectX from Psycho Utils DVD. It appeared to leech something from internet so hopefully this would now fix it, heh wishful thinking.
</p>

<p>
2021-11-22T06:22:00Z Didn't work, same d3d12.dll missing. Then I tried to edit game.xml to change &lt;renderer&gt;D3D_12&lt;/renderer&gt; to D3D_11, as some user suggested in giants discord.
</p>

<p>
2021-11-22T07:13:00Z Another win10 install attempt, fdisk erased and formatted the disk, then proceeded with enterprise installation... and computer got stuck into reboot never ending loop, after it booted and got into loading files turning circle animation... it rebooted again starting the loop. Sigh.
</p>

<p>
I am so fucking angry I am lost for words.
</p>

<p>
2021-11-22T07:44:00Z Had win10 installed, still in process of installing the basic software. <i>Edit: 2024-02-06T17:14:00Z I assume this was now back at win10 64bit home version.</i>
</p>

<p>
2021-11-22T08:38:00Z QuiteRSS had news relating to Farming Simulator 22, but I wont go into that on this story text.
</p>


	<h2>After A Nap</h2>

<p>
2021-11-22T16:03:00Z Woke up half an hour or so ago, slept three-some hours after snoozing off while installing windows 10 updates which took fucking forever.
</p>

<p>
I am so angry, disappointed and completely lost all control of rules and good behavior now, I don't give a fuck, I just want to play FS22, I'll do fucking anything to get it done which included installing win10 to PMC Gaming.
</p>

<p>
2021-11-22T17:53:00Z and now FS22 activation says online activation limit exceeded. So had to send support a message:
</p>

<p>
---cut---
</p>

<p>
<i>
Hours ago I sent support a message about Windows 7 and 8.1 directx 12 DLL issues. Since then I've caved in and installed Windows 10 Home 64bit.
</i>
</p>

<p>
<i>
I had to try several FS22 re-installs and that caused activation count to increase, also I did this on my editing computer (windows 8.1) which is using VPN and my Gaming computer (windows 7 before, now windows 10) from direct IP from (redacted for privacy reasons), so I just finished windows 10 install with the horrible hours long upgrade process and when I go to activate FS22 I get the online activation limit exceeded.
</i>
</p>

<p>
<i>
This is extremely frustrating, JUST when I cave in and installed win10 to finally get to run FS22, we have yet another issue <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</i>
</p>

<p>
<i>
Dunno what can I say, I'm not a pirate, I'm not using some leaked serial key, I purchased it from you guys in giants website, I have only used my two computers at my house, yes it looks fishy as one IP is from sweden (private internet access VPN) and another from (redacted for privacy reasons).
</i>
</p>

<p>
<i>
So what is my request? Well please zero out my serial key activation count so I can finally activate FS22 on win10 and get to play <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</i>
</p>

<p>
<i>
If you have any questions, send me an email or more quicker response private message me on discord, my user name is: Snake Man#5843
</i>
</p>

<p>
---cut---
</p>

<p>
2021-11-22T20:56:00Z Installed windows 7 ... home(?) edition to PMC Gaming because I was so frustrated with the current situation that just wanted to get back to farming while I wait for giants support to get back to me about serial key reset. Funnily at that point, I'm again looking for another fucking win10 install haha.
</p>

<p>
Also its completely another matter do I even wish to install that win10 atrocious trash into my computer anymore.
</p>

<p>
Installed Farming Simulator 19 (to PMC Gaming computer).
</p>

<p>
2021-11-22T21:42:00Z Had FS19 installed.
</p>

<p>
Unfortunately that version is somehow broken, it is v1.5.1 but when you load my mod dir with it, it doesn't find for example PMC Grande Gardens 16km, just shows this in the game log:
</p>

<pre>
Load mod: PMC_Grande_Gardens_16km (Version: 1.1.10.0) (Hash: c28666388fce2b675a260715fd8c5d46)
Error: Unsupported mod description version in mod PMC_Grande_Gardens_16km
</pre>

<p>
No idea whats going on with that.
</p>

<p>
Fuck this, guess I have to install FS19 again and burn one more serial key activation for it, this would be really bad because if tomorrow giants support gets back to me about the FS22 serial key activations reset, then I am back at installing win10 and FS22 therefore completely wasting that one activation for one evenings fun.
</p>


	<h2>Giants Support Responds</h2>

<p>
2021-11-22T23:33:00Z An hour ago at 2239hrs got email reply from giants support team, wow that is surprising as its what I believe midnight in germany right now. The reply was for the first ticket the DLL issue, but content was that they added more activation numbers for my serial key. Awesome!
</p>

<p>
Funny coincidence that I was just starting to install win10, yes I was this is no bullshit about the coincidence. My plan now is to install win10 home edition, NOT to run windows update but just immediately install FS22 and see if it runs, if it does then I don't give fuck about any windows stuff because its simply running empty system just for FS22. Only thing I need is EditPadPro to keep writing these text file story notes.
</p>

<p>
Now I am excited again that maybe there is light at the end of the tunnel that I could actually get to play within hour or so <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
<b>2021-11-23T00:37:00Z</b> Win10 installed, basic LAN and nvidia drivers installed as well as editpadpro and firefox with bookmarks. Now FS22 installer is running from PMC Linux network mount.
</p>

<p>
Also piece of shit windows update is running, there indeed are no way to fucking stop that whore from running, well besides the ShutUp10 tool.
</p>

<p>
2021-11-23T00:40:00Z FS22 installed and activated. However now I'm at the same situation as earlier, FS22 gives "Error: Could not init 3D system. Shader Model 6.0 is required. Please install the latest video drivers. Download latest GPU driver now?"
</p>

<p>
And when I click yes, it will open <a href="https://farming-simulator.com/gpuDriverDownload.php" target="_blank">farming-simulator.com/gpuDriverDownload.php</a> link, when I click nvidia it goes to <a href="https://www.nvidia.com/Download/index.aspx" target="_blank">nvidia.com/Download/index.aspx</a> and there firefox shows me the drivers I ALREADY HAVE INSTALLED.
</p>

<p>
My drivers are 472.12 and there are 496 released but that driver does not work with my win10.
</p>

<p>
<b>2021-11-23T00:59:00Z I did it, Farming Simulator 22 running the first time in PMC Gaming computer! Whooohooo!</b> <img src="../images/smileys/icon_mrgreen.gif" alt="Smiley :mrgreen:" loading="lazy">
</p>

<p>
Yeah so I had to go to game.xml and change renderer from D3D_12 to D3D_11 so I could get past that fucking shader model 6 error.
</p>

<p>
But man, I have to tell you, after all this fucking bullshit anger and frustration I almost burst to tears when the intro movie launched and I realized that fuck me its actually running hehe. Emotional moment thats for sure.
</p>

<p>
Edited users dir XML files a bit for my liking.
</p>

<p>
2021-11-23T01:28:00Z Installed the pre-order bonus download mods, those installers asked serial key.
</p>

<p>
After installing all those pre-order bonuses, FS22 didn't start anymore, haha OF FUCKING COURSE! <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Then I used SHIFT-LMB click on FS22 desktop start icon which brought up that menu thing, I did verify file integrity there. After it was done the dialog asked if I want to launch the game and I clicked yes, then FS22 started ok. Okay good, now I am not going to exit until win10 does some bullshit update and requires reboot, I'm gonna play as looong as possible <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
The End. Continue reading from my FS22 Elmcreek New Farmer game-mode savegame, you'll find it in <a href="stories.php">FS22 Stories</a> page.
</p>


	<h2>Conclusion</h2>

<p>
2024-02-06T17:38:00Z Sorry for the excessive amount of profanity (and I even redacted worst of it), but if you read all the way through here you hopefully understand what I endured during this "HELL journey to install FS22" to my gaming computer, as I said in the story I lost all "reality and boundaries", all I cared about is getting the job done regardless of the price it costs me. I will always remember this dreaded 2021 november time fondly even though during the time it happened I was in a very bad place mind-set wise, its somewhat hilarious to read now in 2024 when I have played FS22 hundreds of hours, created <a href="pmc-terrains.php">several large american terrains</a> etc for it, I'm really happy I wrote this story so I remember it vividly for rest of my life <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Since this FS22 installation day I purchased Samsung 870 EVO 500gb SSD which is dedicated to host only windows 10 64bit operating system with FS22 installed, there are nothing else installed other than what I need with FS22, the software I'm using is text editor, firefox browser and OBS for video capturing. I previously had giants editing tools installed in this SSD but now those have been migrated to PMC DevSurf where editing belongs. With this SSD I can easily swap SATA cable between good old windows 7 64bit (arma3, elite, fs19) and windows 10 64bit (fs22, only), it gives me stress free gaming environment. I mean don't get me wrong I hate win10 and the fact that FS22 requires it, but nothing can be done about it, if you want to play FS22 you need to install win10 garbage. Overall I'm happy with this SSD swapping method.
</p>

<p>
<a href="stories.php" class="button">Stories FS22</a>
<a href="../index.php" class="button">PMC Farming Index</a>
</p>

<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("/var/www/include/footer-start.php"); ?>
<p>
<i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i>
</p>
<?php include("/var/www/include/footer-end.php"); ?>
<?php include("/var/www/include/support.php"); ?>
<?php include("/var/www/include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
