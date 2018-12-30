<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://marioruns.com/forum/feed.php?f=9&amp;t=320" />

<title>MarioRuns Forums</title>
<subtitle>Triple Coins Enabled!</subtitle>
<link href="http://marioruns.com/forum/index.php" />
<updated>2014-06-04T16:26:25+01:00</updated>

<author><name><![CDATA[MarioRuns Forums]]></name></author>
<id>http://marioruns.com/forum/feed.php?f=9&amp;t=320</id>
<entry>
<author><name><![CDATA[vegard]]></name></author>
<updated>2014-06-04T16:26:25+01:00</updated>
<published>2014-06-04T16:26:25+01:00</published>
<id>http://marioruns.com/forum/viewtopic.php?t=320&amp;p=2362#p2362</id>
<link href="http://marioruns.com/forum/viewtopic.php?t=320&amp;p=2362#p2362"/>
<title type="html"><![CDATA[Re: [GS] Lag-preserving no-music code]]></title>

<content type="html" xml:base="http://marioruns.com/forum/viewtopic.php?t=320&amp;p=2362#p2362"><![CDATA[
Thanks halii!<p>Statistics: Posted by <a href="http://marioruns.com/forum/memberlist.php?mode=viewprofile&amp;u=54">vegard</a> — 04 Jun 2014, 16:26</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Haliinen]]></name></author>
<updated>2014-06-04T16:00:59+01:00</updated>
<published>2014-06-04T16:00:59+01:00</published>
<id>http://marioruns.com/forum/viewtopic.php?t=320&amp;p=2361#p2361</id>
<link href="http://marioruns.com/forum/viewtopic.php?t=320&amp;p=2361#p2361"/>
<title type="html"><![CDATA[Re: [GS] Lag-preserving no-music code]]></title>

<content type="html" xml:base="http://marioruns.com/forum/viewtopic.php?t=320&amp;p=2361#p2361"><![CDATA[
I just tested it and it does indeed preserve the lag with this no music code so I appreciate this one, thanks!<p>Statistics: Posted by <a href="http://marioruns.com/forum/memberlist.php?mode=viewprofile&amp;u=1485">Haliinen</a> — 04 Jun 2014, 16:00</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[vegard]]></name></author>
<updated>2014-06-02T21:42:22+01:00</updated>
<published>2014-06-02T21:42:22+01:00</published>
<id>http://marioruns.com/forum/viewtopic.php?t=320&amp;p=2346#p2346</id>
<link href="http://marioruns.com/forum/viewtopic.php?t=320&amp;p=2346#p2346"/>
<title type="html"><![CDATA[[GS] Lag-preserving no-music code]]></title>

<content type="html" xml:base="http://marioruns.com/forum/viewtopic.php?t=320&amp;p=2346#p2346"><![CDATA[
This disables background music (but not sound effects) but without affecting the speed of the code, so it shouldn't reduce lag in the way that the previous no-music code did. Note that I haven't actually tested this on a real console, so I can't be 100% sure if it <span style="font-style: italic">really</span> works as intended -- I would appreciate your feedback if you try it out.<br /><br /><span style="font-weight: bold">US:</span><br />  8131d3f4 2405<br />  8131d3f6 0000<br /><br /><span style="font-weight: bold">JAP:</span><br />  8131c47c 2405<br />  8131c47e 0000<br /><br /><span style="font-weight: bold">Edit</span>: In theory you can change the second number from 0000 to something like 0018 to get &quot;soft music&quot; instead of &quot;no music&quot;, but it could screw up the sound slightly since now it will force everything to be at a specific volume rather than whatever it was meant to be (so certain elements in the music can sound relatively softer or louder than it's supposed to).<p>Statistics: Posted by <a href="http://marioruns.com/forum/memberlist.php?mode=viewprofile&amp;u=54">vegard</a> — 02 Jun 2014, 21:42</p><hr />
]]></content>
</entry>
</feed>