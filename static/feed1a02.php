<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://marioruns.com/forum/feed.php?f=9&amp;t=323" />

<title>MarioRuns Forums</title>
<subtitle>Triple Coins Enabled!</subtitle>
<link href="http://marioruns.com/forum/index.php" />
<updated>2014-10-29T15:10:18+01:00</updated>

<author><name><![CDATA[MarioRuns Forums]]></name></author>
<id>http://marioruns.com/forum/feed.php?f=9&amp;t=323</id>
<entry>
<author><name><![CDATA[vegard]]></name></author>
<updated>2014-10-29T15:10:18+01:00</updated>
<published>2014-10-29T15:10:18+01:00</published>
<id>http://marioruns.com/forum/viewtopic.php?t=323&amp;p=2701#p2701</id>
<link href="http://marioruns.com/forum/viewtopic.php?t=323&amp;p=2701#p2701"/>
<title type="html"><![CDATA[Re: [GS] Always display 50th star text box after grabbing a ]]></title>

<content type="html" xml:base="http://marioruns.com/forum/viewtopic.php?t=323&amp;p=2701#p2701"><![CDATA[
This is the code for japanese:<br /><br /><span style="font-weight: bold">JP</span>:<br />  81257180 0000<br />  81257182 0000<br />  812571a0 2406<br />  812571a2 0091<p>Statistics: Posted by <a href="http://marioruns.com/forum/memberlist.php?mode=viewprofile&amp;u=54">vegard</a> — 29 Oct 2014, 15:10</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[vegard]]></name></author>
<updated>2014-06-20T11:27:10+01:00</updated>
<published>2014-06-20T11:27:10+01:00</published>
<id>http://marioruns.com/forum/viewtopic.php?t=323&amp;p=2417#p2417</id>
<link href="http://marioruns.com/forum/viewtopic.php?t=323&amp;p=2417#p2417"/>
<title type="html"><![CDATA[Re: [GS] Always display 50th star text box after grabbing a]]></title>

<content type="html" xml:base="http://marioruns.com/forum/viewtopic.php?t=323&amp;p=2417#p2417"><![CDATA[
<blockquote><div><cite>ClysmiC wrote:</cite><br />Great little write-up. I'm surprised the first method didn't work, it sounded pretty ingenious to me.<br /></div></blockquote><br /><br />It could be that grabbing the star sets a flag which gets cleared when the text box is displayed or something. So the flag would have the same value in both the &quot;before&quot; and &quot;after&quot; save states. Dunno, just a theory.<p>Statistics: Posted by <a href="http://marioruns.com/forum/memberlist.php?mode=viewprofile&amp;u=54">vegard</a> — 20 Jun 2014, 11:27</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[ClysmiC]]></name></author>
<updated>2014-06-20T01:42:34+01:00</updated>
<published>2014-06-20T01:42:34+01:00</published>
<id>http://marioruns.com/forum/viewtopic.php?t=323&amp;p=2416#p2416</id>
<link href="http://marioruns.com/forum/viewtopic.php?t=323&amp;p=2416#p2416"/>
<title type="html"><![CDATA[Re: [GS] Always display 50th star text box after grabbing a ]]></title>

<content type="html" xml:base="http://marioruns.com/forum/viewtopic.php?t=323&amp;p=2416#p2416"><![CDATA[
Great little write-up. I'm surprised the first method didn't work, it sounded pretty ingenious to me.<p>Statistics: Posted by <a href="http://marioruns.com/forum/memberlist.php?mode=viewprofile&amp;u=84">ClysmiC</a> — 20 Jun 2014, 01:42</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[vegard]]></name></author>
<updated>2014-06-04T21:04:56+01:00</updated>
<published>2014-06-04T21:04:56+01:00</published>
<id>http://marioruns.com/forum/viewtopic.php?t=323&amp;p=2366#p2366</id>
<link href="http://marioruns.com/forum/viewtopic.php?t=323&amp;p=2366#p2366"/>
<title type="html"><![CDATA[[GS] Always display 50th star text box after grabbing a star]]></title>

<content type="html" xml:base="http://marioruns.com/forum/viewtopic.php?t=323&amp;p=2366#p2366"><![CDATA[
This code was requested by Harper as a way to practice Mips using the restart code after getting the 50th star in LLL (since just using the restart code by itself will not cause the text box to show after jumping out the painting, thus messing up the camera slightly).<br /><br /><span style="font-weight: bold">US:</span><br />  812573f8 0000<br />  812573fa 0000<br />  81257418 2406<br />  8125741a 0091<br /><br />In the interest of getting more GS hacking knowledge out there, here's how I found it:<br /><br />The first thing I tried was to create some save states at 49 stars and some save states at 50 stars (before the text box shows). The idea is generally to compare memory between the save states. We are looking for some flag, some byte of memory that when set to a certain value causes the text box to display. I tried to make 9 save states at 49 stars and 5 save states at 50 stars. Then I made a Python script to go over all the addresses (from 0x80000000 to 0x8040000000) and compare them; any addresses that have different values between the 49 star save states are discarded, any addresses that have different values between the 50 star save states are discarded, and any addreses which are the *same* between the 49 and the 50 star save states are discarded. This left me with 51 addresses that seemed to be candidates for this flag. I tried them out by creating a 51-line gameshark code that fixed the values of these addresses to the value they had in the 50 star save states and grabbed a random star (having e.g. 6 stars). Some of them crashed the game, you can rule those out by commenting out half of the gameshark lines and checking if the game still crashes, recursively. Unfortunately, this technique didn't work for me as I couldn't get the textbox to show.<br /><br />The second thing I tried was to patch mupen64plus to count the number of times it executes the code at a certain address. The output is a file with every address from 0x80000000 to 0x80400000 and an associated number (the number being the number of times the CPU executed an instruction from that address). These files are really useful because it allows you to compare what code was executed when you did one thing vs. what code was executed when you did another thing. So again I recorded what addresses was executed for the following scenarios: 1) when I grab the 50th star and I see the text box, 2) the same thing again, but for a different star, 3) when I have 49 stars and I die, 4) when I grab the 50th star and don't see the text box. With this data I again used a Python script to show me *only* those addresses that were executed when I got the text box. This gave me something like 3000 addresses at first, but I recorded some more traces to narrow it down to about 300 (sometimes I recorded a trace that coincidentally contained a kick when I got the 50th star and didn't contain a kick in any of the others, that would give a false positive result because the kick was confounded with seeing the text box). However, the final result of 300 addresses contained a lot of adjacent addresses, so they only belonged to 25 or so functions. I went into the disassembler for each of them and found a branch instruction that would cause an address to be executed for the 50th star but not any other. Again I used a gameshark code to patch out all of these branches (the result is that the text box should presumably appear). This worked, but when I grabbed the 50th star and got out of LLL I was shown the text box that you get the first time you enter BOB. So I narrowed down the gameshark code again using the same technique of deleting half the lines until I was left with only 2 lines that caused the BOB text box to show. Then I looked at the disassembly and saw that the code was calling a function with a certain argument (that argument was being tested in the branch that caused the text box to be displayed). So I manually changed the parameter to a fixed value (again using a gameshark code) and indeed the text inside the text box changed. Now it was just a matter of putting a breakpoint on that instruction and grabbing the 50th star to see which was the right value to fix it to.<p>Statistics: Posted by <a href="http://marioruns.com/forum/memberlist.php?mode=viewprofile&amp;u=54">vegard</a> — 04 Jun 2014, 21:04</p><hr />
]]></content>
</entry>
</feed>