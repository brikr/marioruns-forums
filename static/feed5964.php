<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://marioruns.com/forum/feed.php?f=9&amp;t=324" />

<title>MarioRuns Forums</title>
<subtitle>Triple Coins Enabled!</subtitle>
<link href="http://marioruns.com/forum/index.php" />
<updated>2015-05-28T12:49:02+01:00</updated>

<author><name><![CDATA[MarioRuns Forums]]></name></author>
<id>http://marioruns.com/forum/feed.php?f=9&amp;t=324</id>
<entry>
<author><name><![CDATA[abitalive]]></name></author>
<updated>2015-05-28T12:49:02+01:00</updated>
<published>2015-05-28T12:49:02+01:00</published>
<id>http://marioruns.com/forum/viewtopic.php?t=324&amp;p=2856#p2856</id>
<link href="http://marioruns.com/forum/viewtopic.php?t=324&amp;p=2856#p2856"/>
<title type="html"><![CDATA[Re: [GS] Lag frame counter]]></title>

<content type="html" xml:base="http://marioruns.com/forum/viewtopic.php?t=324&amp;p=2856#p2856"><![CDATA[
We managed to get this working on console, see <a href="https://sites.google.com/site/sm64gameshark/codes/lag-frame-counter" class="postlink">here</a> for the fixed codes.<br /><br />The JP code ended up working with a direct port. The US code would crash on boot if the interrupt handler was hooked, and has been adjusted so that it's only hooked after the first input frame.<p>Statistics: Posted by <a href="http://marioruns.com/forum/memberlist.php?mode=viewprofile&amp;u=1488">abitalive</a> — 28 May 2015, 12:49</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[snowman]]></name></author>
<updated>2014-06-14T17:36:52+01:00</updated>
<published>2014-06-14T17:36:52+01:00</published>
<id>http://marioruns.com/forum/viewtopic.php?t=324&amp;p=2408#p2408</id>
<link href="http://marioruns.com/forum/viewtopic.php?t=324&amp;p=2408#p2408"/>
<title type="html"><![CDATA[Re: [GS] Lag frame counter]]></title>

<content type="html" xml:base="http://marioruns.com/forum/viewtopic.php?t=324&amp;p=2408#p2408"><![CDATA[
this is amazing! adding it this morning and will be using it a bunch for sure.<br /><br />Didn't even think this was possible to create, great work!  <img src="http://marioruns.com/forum/images/smilies/simChomp.png" alt="simChomp" title="simChomp" /><p>Statistics: Posted by <a href="http://marioruns.com/forum/memberlist.php?mode=viewprofile&amp;u=74">snowman</a> — 14 Jun 2014, 17:36</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[vegard]]></name></author>
<updated>2014-06-09T10:11:29+01:00</updated>
<published>2014-06-09T10:11:29+01:00</published>
<id>http://marioruns.com/forum/viewtopic.php?t=324&amp;p=2389#p2389</id>
<link href="http://marioruns.com/forum/viewtopic.php?t=324&amp;p=2389#p2389"/>
<title type="html"><![CDATA[Re: [GS] Lag frame counter]]></title>

<content type="html" xml:base="http://marioruns.com/forum/viewtopic.php?t=324&amp;p=2389#p2389"><![CDATA[
Just wanted to add that Caivs tested this on console and it didn't work for him. We triple checked for typos and made sure everthing was correct but the game just wouldn't start. Anyway I made a video on emulator, sorry in advance for bad gameplay (I don't run this game):<br /><br /> <a href="http://www.youtube.com/v/ODBBzaE8SVk" target="_blank"><strong>object</strong></a> <p>Statistics: Posted by <a href="http://marioruns.com/forum/memberlist.php?mode=viewprofile&amp;u=54">vegard</a> — 09 Jun 2014, 10:11</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[vegard]]></name></author>
<updated>2014-06-07T01:42:30+01:00</updated>
<published>2014-06-07T01:42:30+01:00</published>
<id>http://marioruns.com/forum/viewtopic.php?t=324&amp;p=2381#p2381</id>
<link href="http://marioruns.com/forum/viewtopic.php?t=324&amp;p=2381#p2381"/>
<title type="html"><![CDATA[Re: [GS] Lag frame counter]]></title>

<content type="html" xml:base="http://marioruns.com/forum/viewtopic.php?t=324&amp;p=2381#p2381"><![CDATA[
Oh some things I found out:<br /><br />The N64 has 60 interrupts per second internally for the video interrupt, so when the game is not able to render the scene within 2 &quot;half-frames&quot; (1 frame), it extends into a 3rd half-frame (1.5 frames) or more.<br /><br />Also the dust that appears from sliding on the ground can really cause a lot of lag in certain areas.<p>Statistics: Posted by <a href="http://marioruns.com/forum/memberlist.php?mode=viewprofile&amp;u=54">vegard</a> — 07 Jun 2014, 01:42</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[vegard]]></name></author>
<updated>2014-06-07T01:34:50+01:00</updated>
<published>2014-06-07T01:34:50+01:00</published>
<id>http://marioruns.com/forum/viewtopic.php?t=324&amp;p=2380#p2380</id>
<link href="http://marioruns.com/forum/viewtopic.php?t=324&amp;p=2380#p2380"/>
<title type="html"><![CDATA[[GS] Lag frame counter]]></title>

<content type="html" xml:base="http://marioruns.com/forum/viewtopic.php?t=324&amp;p=2380#p2380"><![CDATA[
Here's a code that counts and shows the number of laggy frames. Could be useful for figuring out camera strats. It's a bit long, but whatever.<br /><br /><span style="font-weight: bold">US:</span><br /><br />      # hook new function<br />      813279ac 0c10<br />      813279ae 0100<br />     <br />      # new function (increment counter)<br />      81400400 3c0a<br />      81400402 8040<br />      81400404 8d4b<br />      81400406 0000<br />      81400408 256b<br />      8140040a 0001<br />      8140040c ad4b<br />      8140040e 0000<br />      81400410 080c<br />      81400412 9ee6<br />      81400414 0000<br />      81400416 0000<br />     <br />      # enable display<br />      81248be8 0000<br />      81248bea 0000<br />     <br />      # calculate sum<br />      81248be0 3c18<br />      81248be2 8040<br />      81248be4 8f0f<br />      81248be6 0000<br />      81248be8 8f0e<br />      81248bea 0004<br />      81248bec af0f<br />      81248bee 0004<br />      81248bf0 01ee<br />      81248bf2 6823<br />      81248bf4 8f07<br />      81248bf6 0008<br />      81248bf8 00ed<br />      81248bfa 3821<br />      81248bfc 24e7<br />      81248bfe fffe<br />      81248c14 af07<br />      81248c16 0008<br />     <br />      # reset counter with D-pad left<br />      D033AFA0 0002<br />      81400008 0000<br />      D033AFA0 0002<br />      8140000a 0000<br /><br /><!-- m --><a class="postlink" href="http://pastebin.com/aprkPa5H" target="_blank">http://pastebin.com/aprkPa5H</a><!-- m --><p>Statistics: Posted by <a href="http://marioruns.com/forum/memberlist.php?mode=viewprofile&amp;u=54">vegard</a> — 07 Jun 2014, 01:34</p><hr />
]]></content>
</entry>
</feed>