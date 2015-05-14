<?php
	$title = "Podcast: Materialising and Dematerialising A Web of Data. (Or What We’ve Learned From Printing The Internet Out)";
	$section = "podcast";
?>

<?php $dr = str_replace($_SERVER['SCRIPT_NAME'], '/includes/', $_SERVER['SCRIPT_FILENAME']); ?>

<?php include($dr . "head.inc.php"); ?><!-- HEADER -->

<!-- SECTION PODCAST -->
<div class="section">

<h1>Materialising and Dematerialising A Web of Data. (Or What We’ve Learned From Printing The Internet Out)</h1>
<h2 class="vcard"><a href="/schedule/russelldavies" class="fn url">Russell Davies</a></h2>

<p><a rel="enclosure" type="audio/mpeg" href="http://dconstruct.s3.amazonaws.com/2009/podcast/dConstruct2009-Davies.mp3">Download the audio</a>.</p>
<object type="application/x-shockwave-flash" data="http://huffduffer.com/flash/player.swf?soundFile=http://dconstruct.s3.amazonaws.com/2009/podcast/dConstruct2009-Davies.mp3" width="290" height="24"><param name="movie" value="http://huffduffer.com/flash/player.swf?soundFile=http://dconstruct.s3.amazonaws.com/2009/podcast/dConstruct2009-Davies.mp3"><param name="wmode" value="transparent"><a href="http://huffduffer.com/dConstruct/8908">Materialising and Dematerialising A Web of Data. (Or What We’ve Learned From Printing The Internet Out) on Huffduffer</a></object>
<p><a href="http://huffduffer.com/add/8908">Huffduff it</a>.</p>

<p>Podcast transcripts brought to you by the <a href="http://www.opera.com/developer">Opera Developer Network</a>.</p>

<cite>Russell</cite>:

<blockquote>
<p>I saw the bloke who invented 5.1 Sound present once, and he started like that, just with that music and I just thought all presentations must start like that! It just feels like something&#8217;s beginning. But I&#8217;ve never found an equivalent ending. Whenever I get to the end of a presentation, there&#8217;s a phrase that goes round and round my head like a tune which some of you&hellip; how many of you are over forty? Put your hand up if you&#8217;re over forty. Yes, my people! There&#8217;s a phrase I probably first heard in 1981&mdash;take you back to those days. The SDP rump had just left the Labour Party, and Labour and the Conservatives were both deeply unpopular, and the SDP and the Liberals formed an alliance. And at one point, in 1981, they were polling over fifty per cent of people saying they&#8217;d vote for them in the next election. In that year, at the Liberal Conference, David Steel ended his speech like this.</p>
</blockquote>

<cite>clip</cite>:

<blockquote>
<p>Mr President, I have the good fortune to be the first Liberal leader for over half a century who was able to say to you at the end of our annual assembly&mdash;go back to your constituencies and prepare for Government.</p>
</blockquote>

<cite>Russell</cite>:

<blockquote>
<p>I mean, it&#8217;s clearly among one of the most deluded things ever said, but just feels right, feels like the ending and I&#8217;ve never worked out an ending like that. Does anyone know what that is? It&#8217;s that size, if that helps? (a cocktail stirrer) No. Good guess. I don&#8217;t want to be rude, but No. All right, well, we&#8217;ll get to it.</p>

<p>People ask me&mdash;what is it that you do? And I don&#8217;t have a good answer. I worked in marketing and advertising for thousands of years, did things that you won&#8217;t approve of. But I always say&mdash;I can&#8217;t remember where I saw it, it was at Vauxhall&mdash;I saw this sign and it spoke to me and I think that&#8217;s what I&#8217;d like to do. I try and get to the front of the train, I like hanging around at the front of the train because it&#8217;s less crowded, and interesting people at the front of the train and less crowded. So broadly what I try and do is kind of get to &#8216;front of train&#8217;. So what I&#8217;m going to talk to you today about is front of train. I&#8217;m not advocating quit your jobs tomorrow and follow me, kind of thing, and it may be the wrong train, so that&#8217;s kind of worth bearing in mind! But that&#8217;s broadly what I&#8217;m talking about and careful study of your notes will say, it&#8217;s broadly this idea of post digital. I want to talk about what I mean by it, some aspects of it. I want to talk about some of the implications I think it has broadly and why it&#8217;s coming about and why it&#8217;s interesting, and some experiences we&#8217;ve had with building proto-typical post digital products and then what that means, blah blah blah. And I&#8217;m conscious it&#8217;s the end of the day and stuff, so I&#8217;ve just put interaction design jokes in and stuff, and stupid videos. So it should go relatively quickly.</p>

<p>First aspect of what I think I mean by post digital is increasingly we&#8217;re getting real objects in the world of digital identities. This is from a lamp post in Gateshead, and it has a digital identity and you can report it via its digital identity and increasingly, objects are going to get digital identities. I think one of the by-products of that is going to be bubbly writing and objects talking to you in the first person. It&#8217;s just going to happen, there&#8217;s going to be more and more of that saying &#8216;Hello, I&#8217;m a toothbrush.&#8217; And we&#8217;re just, as designers, going to have to deal with that.</p>

<p>Second aspect I think is digital stuff being expressed in physical things, and I think&mdash;again, because I&#8217;m amongst you people, I can say &#8216;connonical&#8217;&mdash;I think the connonical example of that is Bubblino&mdash;do you know Bubblino? Ever seen this? This is an arduino connected to a bubble machine connected to the Internet, watching Twitter, and if it hears its own name, it blows bubbles. And Adrian who built it, he takes it to conferences and you can do the conference name and if you see the conference name, it blows Twitter&hellip; it blows bubbles. And I feel&hellip; I think this is like the mother of all demos, this is like the mousepad or the mouse&hellip; this is an Internet of thingsy thing, that I think this is really, really important because there&#8217;s something here where the act of blowing bubbles is very closely, a kind of physical analogue, to Twitter. You know what I mean? The kind of digital thing and the physical thing are really closely aligned in a kind of way that we understand, it kind of makes sense somehow, the connection between these two things. I think it&#8217;s really done well. And the fact that it doesn&#8217;t say much but it says that it&#8217;s there and it&#8217;s saying things, I think is brilliant. And I think Adrian has built and is building brilliant and important things, but he&#8217;ll never build anything better than this, even though it&#8217;s really silly! And you&#8217;ll see it at conferences, you&#8217;ll see this sitting next to some massively impressive touch interface thing, and everyone&#8217;s trying to get it to blow bubbles, you know.</p>

<p>And then again, as designers, I think you&#8217;re all going to have to get used to the fact that the surfaces you design are migrating out into the world. Every architecture student designing everything at the moment is building a digital skin onto their building. Buildings are going to be draped in digital skins and I think the real downside of that is it will be horrible, because at the beginning, when they first launched the project and we got a new Civic Centre for Brighton and it&#8217;s got fantastic digital skin, for the first three years it will have unsatisfactory media art all over it. But then someone from Coca Cola will turn up and say &#8216;Can we put a massive logo on there?&#8217; We&#8217;re like &#8216;No&#8217;. We&#8217;ll give you a million quid&#8217;. &#8216;Oh yeah, you can.&#8217; And I&#8217;ve said before, I think the possible vision is Blade Runner brought to you by the makers of Cillit Bang. You know, all over the world. But I think the really important bit of this is I think we&#8217;re getting to a moment where we&#8217;re finally overcoming twin tectonic forces which is, on the one hand, digital infatuation that everything digital is better than everything analogue and that everything new, and shiny and screeny and touchy is better than everything analogue. And equally, that led pencil club analogue&mdash;&#8216;ooh, you can&#8217;t read it in the bath&#8217;&mdash;you know, everything printed is better and everything on paper is better, blah blah blah. I think we&#8217;re getting past that moment, and we&#8217;re getting people who are prepared to evaluate both sets of technologies and combine them together in interesting ways. And again, I think the best example of that is this thing, things I&#8217;d rather read on paper, which is a guy I think in Dublin, works for Google, called Emmett Connolly, I think his name is, who on instapaper bookmarked all this stuff and realised he would never read it. So just turned it into a PDF, sent it to Lulu and made a book of it. And you&#8217;ll read stuff on paper that you won&#8217;t read on screen, and that kind of combination of print and digital I think is going to be really interesting and kind of useful.</p>

<p>So that stuff led me to this kind of overblown and portentous phrase, which I stuck as the title of the talk because I came here two years ago and saw Tom Coates talk about web data, and I came here last year and saw Matt Jones and Matt Biddulph talking about the Coral Reef, and this idea that the web is being transformed from a thing of sites to a thing of APIs and services and things like that. And that you&#8217;re moving to a place where you need never visit Doppler to use Doppler, you can use it via all kinds of other things. And the thing that seemed interesting to me is that we&#8217;re hopefully moving to a world where the data will migrate off the screens and away from the devices and into the physical world, that seems like an interesting thing. So that&#8217;s what I wanted to talk about. My problem being is that I have absolutely no intellectual foundation to do that whatsoever! They&#8217;ve all got degrees related to what it is they do and stuff, and I don&#8217;t know what &#8216;orthogonal&#8217; means. So my qualification for being here is that I can put video in PowerPoint! So I went looking for intellectual salvation and actually, coincidentally, I found it&mdash;I was on holiday and we went to visit Harvard and on the shelf in a bookshop, singing to me, was this.</p>
</blockquote>

<p>[clip plays]</p>

<cite>Russell</cite>:

<blockquote>
<p>which I just devoured and I would recommend it to anyone. To some of you, probably, it will seem like really naive or something, but I don&#8217;t know, I haven&#8217;t read many books about technology. But to me, it just seemed really useful in explaining, as it says, what technology is, and how it evolves and how it changes and things like that. So I&#8217;ve used that to frame some of my argument here. I should also say, if you&#8217;re one of those people who don&#8217;t like books with the pages folded over, or notes or anything, you should look away now!.</p>

<p>He talks about&hellip; he takes on what Trumpeter thought about the evolution of technology, which is that notion that producing innovation in technologies by combining previous technologies, that all technology sprang out of previous things and it gets combined into new things, and putting those things together in new ways provides the next way of the things. He also quotes this guy Ogden, who talks about actually in a culture where there aren&#8217;t many technologies, you&#8217;re unlikely to generate many more, you know, you can&#8217;t go directly from the Stone Age to the jet engine, kind of thing. There&#8217;s a movement of technologies and the richer the technological environment, the more invention there may be. And he talks about the idea of a domain, so that technologies that tend to work together and tend to get used together, cluster together into what you might call a domain&mdash;he talks a lot about the development of aeroplane engines and jet engines and things like that, he&#8217;ll say combinations of pistons and turbines, and all this kind of stuff&mdash;create clusters of technology which find their peaks every now and then. And he talks quite a lot about aero engines and an example of this might be the Rolls Royce Merlin which is what found its way into the Spitfire.</p>
</blockquote>

<p>[clip plays]</p>

<cite>Russell</cite>:

<blockquote>
<p>And I think we&#8217;ve lived through some equivalent domains that have triumphed massively&mdash;you know, who is the super hero of this technological era? It&#8217;s you, if you look at the massive success of the Web, followed by then the huge success of social networking, it&#8217;s two massive technological and social things which have been hugely successful, really dominant and dominated lots of culture. But&mdash;I&#8217;ve just realised, there&#8217;s loads of military references in this, I apologise for that, I think it&#8217;s because I&#8217;ve got a nine year old boy!&mdash;we were watching the World at War the other day and thinking about success, there&#8217;s a sequence where they talk about the French construction of the Maginot Line, and how the French were basically planning to re-fight the First World War, which they&#8217;d done well in. And they were massively complacent about being able to turn back the Germans and defeat, and all that kind of thing. And there&#8217;s a brilliant little moment where a French General talking about this.</p>
</blockquote>

<cite>clip</cite>:

<blockquote>
<p>You suffered from an illness which is not peculiar to the French, the illness of having been victorious and believing that we were right and very clever. A victory is a very dangerous opportunity.</p>
</blockquote>

<cite>Russell</cite>:

<blockquote>
<p> And I kind of wonder about that and about the Web, and about social networking and stuff. It&#8217;s like, we&#8217;ve been tremendously clever and that&#8217;s really dangerous, you know what I mean, it&#8217;s like &#8216;Aha, off to meet new Internet people? Yeah. Surgery? Course we can do surgery, we&#8217;ve got the Internet, you know, well just bring that along.&#8217; There&#8217;s that kind of hubristic thing going on which you can feel at the moment, feels like the French before the Second World War&mdash;I might be stretching it a bit! And there&#8217;s another thing he says which I think is really interesting&mdash;he says one of the things that goes on with technology is as a general rule, what starts as a cluster of things that get put together because it kind of works, and they tend to get put together more and more frequently, they become a single unit. So a collection of parts becomes a turbine and people know what a turbine is and refer to it, things like that. And that just reminded me of another thing that works that way, which is a cliché. Because the origin of the word &#8216;cliché&#8217; is the set of letters, when someone was typesetting, that they didn&#8217;t bother taking off again because they use them so frequently, so a set of words and letters would be used so frequently that they didn&#8217;t bother dismantling it, it became a cliché. And I wonder again with technology whether this stuff is becoming a cliché, and I think one of the cliché s that we&#8217;re facing and dealing with at the moment is the screen. I mean, they are just getting everywhere, as &hellip; and else says, we have a future surrounded by glowing rectangles. Many of them&hellip;. and we don&#8217;t really know how to design for them. We don&#8217;t know how to write for these screens. There are some that we kind of go&mdash;&#8216;that&#8217;s fucking cool, I&#8217;ll have that&#8217;&mdash;obviously, this brilliant quote at the beginning of the article where it says &#8216;In trials, rabbits have been able to wear them for up to twenty minutes&#8217;. And you go, &#8216;Were the rabbits pleased? Did they enjoy the services being provided?&#8217; Or there&#8217;s this.</p>
</blockquote>

<p>[clip plays]</p>

<cite>Russell</cite>:

<blockquote>
<p>Obviously that&#8217;s what&#8217;s going to save magazines&hellip; turn them into screens, they even got to the point now where you can get a screen in a Kinder egg, that&#8217;s&hellip; and I was thinking at this point, probably some&hellip; would anyone like a Kinder egg? Because I&#8217;ve got loads of them. Would you like to distribute these?.</p>

<p>And that seems bad to me! And another little bit of video which is quite long, but it&#8217;s both simultaneously gripping and appalling, which is a simulation of &#8216;Brit best title for a video ever&#8217;, I think&mdash;&#8216;Drone controllers execute hellfire strike&#8217;, which is two UAV controllers in Nevada, I mean it&#8217;s a simulation unfortunately, but two UAV controllers in Nevada blowing up a van in Afghanistan.</p>
</blockquote>

<p>[clip plays]</p>

<cite>Russell</cite>:

<blockquote>
<p>&#8216;Excellent job&#8217; is the most chilling words I&#8217;ve ever heard, I think! There should be more juicy feedback in that, don&#8217;t you think?! And I think there&#8217;s something&hellip; I mean, I&#8217;m not going to deny that screens can capture the imagination and you get involved and blah blah blah&hellip; I mean I&#8217;m not anti-screen. But I think there&#8217;s something there about the way a screen that&#8217;s showing you the real world, there&#8217;s a reduction in affect somehow, there&#8217;s some kind of sense that there&#8217;s something between you and the world somehow, and that adding screens to the world may not necessarily be to our good at all times. I don&#8217;t know if this&#8217;ll work, but it feels like &#8216;that&#8217; a bit, you know what I mean? People walking around with their devices held up, there&#8217;s a distorting filtering effect somehow which&hellip;. So, that was the thing.</p>

<p>And there&#8217;s another aspect of this which he talks about which is, what happens over time is that these clusters and domains of technology evolve, things get added on. So this bit doesn&#8217;t work, so we add this bit and this bit adds on&hellip; we need to add this and we need to that&hellip; and it kind of gets more and more perfect. He talks about &#8216;deep structure&#8217; but it also kind of, over time, also gets limiting and when it gets to a point where you can&#8217;t break out of that technological domain, and it gets more and more constrained, and that kind of thing and more and more hard to break out of, although it&#8217;s working really well, you keep adding technologies and it stops you breaking out into new places. Which brings me back to this thing. Has anyone worked out what it is? It&#8217;s obviously not a jet engine. It&#8217;s a thing&mdash;you know when you get a cup of coffee, like to take away, and you get the lid on it and there&#8217;s a little hole in the lid? What sometimes happens is the coffee spills out of the hole in the lid, but you can take one of these and put it in the hole in the lid and it will stop the coffee spilling out of the hole. And that is not the only technological solution to that problem, there&#8217;s also this. And I look at that and I don&#8217;t know why, but it says Tweet Deck to me! I can see why you&#8217;d have it, and stuff, and it&#8217;s solving a problem but it&#8217;s kind of applications built on Twitter, it&#8217;s like there&#8217;s no way of escaping that, you know what I mean? And I think a lot of stuff on the Web and social networking at the moment is trapped in this thing of solving the problems that we are causing, you know what I mean? It&#8217;s like this, it&#8217;s like coffee tape. And the coffee cup lid industry can&#8217;t escape from this kind of loop they&#8217;re stuck in, although the Solo Traveller Plus is obviously making a noble effort. And what Arthur talks about is that the way out of this, technologically, is what he calls redomaining. So it&#8217;s about going, finding another domain of technology and using components from that domain of technology to solve your problem. So not kind of iterating in the place that you are but trying to find new things and introduce them and bring them in. And again, he talks about in the jet engine, innovations like fly by wire changed completely what planes could do, and not just solve the existing problems better but unveiled new possibilities for planes. He talks about how, on the Rolls Royce Pegasus engine, new ideas about configuration of engines made new things possible like the Harrier, for instance.</p>
</blockquote>

<p>[clip plays]</p>

<cite>Russell</cite>:

<blockquote>
<p>Again, if we&#8217;re watching, as Arthur did, &#8216;Engineering Britain&#8217;s super weapons&#8217;, which it&#8217;s a brilliant programme and they had a little sequence about the Blue Streak, which is Britain&#8217;s ballistic missile programme up in Cumbria where, because Britain&#8217;s too populated to actually launch ballistic missiles, they built Blue Streak and now just test-fire it by strapping it down because it couldn&#8217;t actually take off so they would test-fire it, but make sure it was bolted to the ground so that it wouldn&#8217;t cause any damage and stuff.</p>
</blockquote>

<cite>clip</cite>:

<blockquote>
<p>A space base had sprung up in the Cumbrian bogs to harness the power of the Blue Streak missile. Pinned to its concrete stands and caged in its metal towers, the rocket&#8217;s mighty Rolls Royce engines thundered. You just look right into that flame and that was very exciting. What about the coolant? How were you going to cool this fantastic flame area? Oh, thick, thick, thick steel and the flame would just go right through that, just in seconds. 36,000 gallons of water a minute had to be pumped up to that stand to quench this flame that&#8217;s coming out. Brilliant.</p>
</blockquote>

<cite>Russell</cite>:

<blockquote>
<p>And I just think, you contrast that with the Drone Operators in Nevada&mdash;&#8216;excellent job&#8217;&mdash;you know? I think that that&#8217;s why there&#8217;s an appeal to me in embracing physical stuff in what we do, I think there&#8217;s something interesting in that kind of raw emotion you get from physical things. And it was interesting seeing Brian&#8217;s presentation and a Tweet from Matt Jones also made me think, maybe this is a peculiarly British reaction to this stuff, because I didn&#8217;t grow up watching the Jetsons. I grew up watching Thunderbirds.</p>
</blockquote>

<p>[clip plays]</p>

<cite>Russell</cite>:

<blockquote>
<p>Flying car! And if we accept&mdash;and I think it&#8217;s valid, that there&#8217;s a dialogue between design and Science Fiction, I think that&#8217;s fair&mdash;I think you also have to accept that there&#8217;s a difference between growing up in a culture that&#8217;s dominated&hellip; with a childhood media culture that&#8217;s dominated by flat, colourful, 2D Hanna Barbera cartoon and grow up here in a culture dominated by hyper-realistic, 3D multiples of the space future with greebils and blah, blah, blah, I think that&#8217;s different and that might produce a different Science future. We grew up with different engineering fiction and that might produce different futures, and I just think that&#8217;s interesting.</p>

<p>So anyway, now we have an interaction design joke. Has anyone seen &#8216;Monsters vs Aliens&#8217;? Have you? You&#8217;ll probably know this&mdash;if you haven&#8217;t, I now present an interaction design joke.</p>
</blockquote>

<p>[clip plays]</p>

<cite>Russell</cite>:

<blockquote>
<p>So I&#8217;m going to talk now a little bit about our personal adventure in this stuff. Round end of last year, I found out just through conversation how cheap it is to print newspapers. It&#8217;s astonishingly cheap to print newspapers, and working with a designer friend of mine, my design partner Ben, we thought it would be nice to make something for everyone for Christmas, for our friends. And so what we thought why don&#8217;t we take stuff that they&#8217;ve written over that last year and reprint it as a newspaper and make it a gift for everyone and we&#8217;ll print up fifty and it&#8217;ll be nice. And we started with Dan Hill&#8217;s, a connonical again, &#8216;The Street as Platform&#8217; post, we thought well I bet no-one&#8217;s actually ever read that. We&#8217;ve all looked at it and stuff, but we thought well, if we print it out, people will actually read it and probably it&#8217;s about a spread in a newspaper&mdash;it&#8217;s actually two spreads. But we thought that would be interesting, that&#8217;s just the first half. And so we printed it up and it looked really nice and we discovered we couldn&#8217;t actually make fifty, the minimum they&#8217;d let us print was a thousand. But it&#8217;s so cheap, we just thought well we&#8217;ll print a thousand anyway. So we gave them to all the people whose blogs basically we&#8217;d stolen, and they were all not very nice about it, and we just said well, the other thousand we&#8217;ll give away to people and it became quite popular. In making it, there was quite a lot of&mdash;well frankly I had nothing to do with&mdash;interesting design decisions, so it&#8217;s kind of hybrid of blog and newspaper design. It doesn&#8217;t ape a newspaper particularly, and it&#8217;s not just straight reprinting of blogs, it&#8217;s kind of a hybrid of the two and I think it works in that way. Because one of the things you notice, for instance, is if you don&#8217;t have something above that line, it looks weird. But it doesn&#8217;t have to be the date, you can have all things up there so we just put some Tweets and stuff up there. And the other brilliant thing is you suddenly get access to industrial age technology. You go to these massive sheds where all they do is print newspapers, and they&#8217;re fantastic technology. So we got to press Print and see this happen.</p>
</blockquote>

<p>[clip plays]</p>

<cite>Russell</cite>:

<blockquote>
<p>and it&#8217;s fantastic. So we sent these things out, we just wrote a blog&hellip; we wrote a poster, we&#8217;ve got them if you want them, send us your address and we&#8217;ll send them out. And it was January actually&mdash;it&#8217;s a good tip, do stuff like that in January because there&#8217;s nothing else to talk about. So it got popular and more people wanted them, and things like that, and it went out in the world. And we&#8217;d done numbered editions which made it popular again, so actually someone started a Flickr group to try and collect all of the ones&hellip; you know, find out who&#8217;d got them all&hellip; and it just became quite interesting. And we realised it turned from stupid joke into interaction design. So we thought we should change the music.</p>
</blockquote>

<p>[clip plays]</p>

<cite>Russell</cite>:

<blockquote>
<p>because that&#8217;s what interaction design sounds like. And then I had to go and do a talk at The Guardian and I was trying to work out what the implications of this were for The Guardian, you know what I mean? This way that we&#8217;d seized control of the means of production for ourselves, as it were, and what the message was for a newspaper group that was being sent by this thing and being sent by the Internet, as it were. And I thought, how can I bring this home to them in a persuasive manner. So I did this.</p>
</blockquote>

<p>[clip plays]</p>

<cite>Russell</cite>:

<blockquote>
<p>And I think it&#8217;s was like we&#8217;ve broken the newspapers but your machines are cool! And I think that&#8217;s the message more broadly to be honest for lots of things.</p>

<p>And so in having that conversation, talking about that, we thought actually maybe there&#8217;s a business in this because the reaction to this printed thing was so positive, because it&#8217;s just a newspaper, I mean people have seen newspapers before. But the reaction was incredibly positive, so we actually went to 4IP and said, we think there&#8217;s a business in building a tool that will let people curate and edit their own newspapers so that they&#8217;ll be able to curate their own newspapers on line, and we&#8217;ll do deals with printers that they can print&hellip; communities can print their own newspapers, and hopefully that will actually reinvent what newspapers are, it won&#8217;t just have to be things of news but it can be things of photography, or it can be whatever it was. And 4IP were brilliant and there are a couple of them and they&#8217;re just really positive and I would urge you, if you&#8217;ve got an interesting idea, to talk to them about it because they&#8217;re very supportive about this stuff. And also we may be approaching peak 4IP, so it&#8217;s worth slamming in an idea because it&#8217;s a really interesting way of funding stuff, because this is not an idea that we would ever have gone to conventional venture capitalists with but somehow, I think they&#8217;re exactly the right people to do this. So talking to 4IP, suddenly we&#8217;re in the world of Channel 4 and all that kind of stuff, thought we should change the music again.</p>
</blockquote>

<p>[clip plays]</p>

<cite>Russell</cite>:

<blockquote>
<p>So we&#8217;re in beta at the moment, trying to do various things. We&#8217;re doing bespoke newspapers for little projects at the moment, the full programme hasn&#8217;t rolled out. But it&#8217;s been really interesting again to see what people have done. This was a project we did for the BBC who&#8217;d commissioned a bunch of really interesting essays and thought pieces and stuff, and it was all online but they wanted a way to get it into people&#8217;s hands and distribute so we made a newspaper like this. This was a thing of friend of ours, James Bridle, made for a thing called Book Club Boutique where again it was a festival and a literary kind of club night in a pub, and they were all going on to another festival and they wanted a thing to be able to distribute, so they made a newspaper up and did it like that. This is a thing we did for Penguin. This is the first half of the new Hitchhiker&#8217;s Guide book which they wanted to use as a preview thing, and again, the newspaper just seems like an interesting format. And I think what this is showing is if we give the tools to other people, they&#8217;ll reinvent newspapers for us. So that&#8217;s going on, and hopefully something interesting will happen out of that.</p>

<p>But we are starting to learn a few little lessons out of it, so I just thought I&#8217;d close with what some of the implications of some of that mean.</p>
</blockquote>

<p>[clip plays]</p>

<cite>Russell</cite>:

<blockquote>
<p>We discovered newspaper printers and at the point we discovered them&hellip; the newspaper industry&#8217;s withdrawing rapidly from those things. There are these brilliant infrastructures, there&#8217;s these brilliant machines lying around the world and machines are not evil&mdash;what you do with them and who does it may sometimes be wrong, but playing with machines is brilliant and there are these brilliant infrastructures that have been abandoned and just because a business is in decline doesn&#8217;t mean it&#8217;s not huge. The newspaper business is still massive. It might be in decline, but it&#8217;s still massive. A great example is video, which we all knew five/ten years ago was going to be transformed by downloads. Video was going to become a thing which would be about downloading, become entirely frictionless, it would be entirely digital, and what&#8217;s actually transforming video is DVDs through the post and vending machines. So RedBox in the States is a machine where you go and get a DVD from a vending machine for a dollar, and that&#8217;s actually what&#8217;s changing that business. And again, the postal system and vending machines, there are all these infrastructures out there that we can access and the joy of digital tools somewhat is getting access to these infrastructures, not bypassing them all the time. That&#8217;s interesting. Similarly, again, Timo and &hellip; pointed to this&mdash;the Gartner hike chart pointed out that RFID is right at the bottom of the trough of disillusionment at the moment. And poised for growth, I&#8217;d say&mdash;I mean RFID&#8217;s another thing that&#8217;s out there in massive numbers, there are infrastructures for RFID sitting out there in the world, just because Nabaztag failed, we didn&#8217;t take Minitel&#8217;s failure as a sign that people weren&#8217;t going to do computers. RFID I think, again, has a huge amount of potential because it&#8217;s out there, it&#8217;s cheap, it&#8217;s easy.</p>
</blockquote>

<p>[clip plays]</p>

<cite>Russell</cite>:

<blockquote>
<p>The thing you do have to watch when you&#8217;ve grown up in a kind of webby, digital world is you forget about some of the implications of analogue friction. You can&#8217;t just stick another server on it, you know what I mean? There are all kinds of issues that crop up. This, for instance, is&hellip; that&#8217;s what five thousand newspapers looks like, because it&#8217;s very easy&hellip; you print it, you go&hellip; because the cost difference between a thousand and five thousand, not very much to be honest. But a thousand newspapers go in the back of a car. Five thousand you suddenly&hellip; oh, so this is five thousand newspapers in James&#8217; house. Suddenly, you&#8217;re dealing with all that, like physical atoms, you&#8217;re dealing with stuff all of a sudden, and when you&#8217;re dealing with stuff, there are other things you need to think about. There&#8217;s delivery, there&#8217;s infrastructure. Very often, the cost of getting something from A to B is higher than the cost of making it. So that becomes a thing that you suddenly need to remind yourself of and think about.</p>
</blockquote>

<p>[clip plays]</p>

<cite>Russell</cite>:

<blockquote>
<p>And you know, that kind of Arthur C. Clarke thing about sufficiently advanced technology indistinguishable from magic, that&#8217;s obviously true but also&mdash;frankly&mdash;printing things out, indistinguishable from magic. It&#8217;s like doing things in the real world, people think it&#8217;s really hard. It&#8217;s really, I find at least, I don&#8217;t know about you guys, but these days it&#8217;s really difficult to impress anyone with anything on a screen any more. You can spend millions on developing stuff and have the best thing&hellip; and they&#8217;re looking at the screen, you go &#8216;Yeah, it&#8217;s alright&#8217;. Because they&#8217;ve seen it all before. When someone finally launches gestural interface in that Minority Report, everyone will go, &#8216;Yeah, we&#8217;ve seen that&#8217;. Whereas if you can actually make something appear in the world, people are genuinely impressed, people keep going&mdash;&#8216;How do you print newspapers?&#8217; And you go, &#8216;Well, you&#8217;ve seen newspapers, you know, it&#8217;s not hard,&#8217; but it&#8217;s actually not the act of it, but it&#8217;s the fact that you&#8217;ve done it, it&#8217;s the fact that someone, an individual has done it, someone they know has done it. And I think that&#8217;s the big interesting thing that&#8217;s going on at the moment. That&#8217;s what happens to you, it&#8217;s like physical transformation is very impressive. I think of it as the difference between Special Effects, you know, watching a magician on telly versus sleight of hand in front of your face in the real world, and that&#8217;s actually much more impressive, doing physical things is, I think somehow, much more impressive. Plus there&#8217;s a brilliant, magnificent grandeur to what some of these physical things do, which is undeniable. It&#8217;s not brought to you through this screen, it&#8217;s brought to you in this world. And it&#8217;s just impressive. I still get excited, and we still go and watch a lot of these things getting printed because when we press Print, stuff like this happens.</p>
</blockquote>

<p>[clip plays]</p>

<cite>Russell</cite>:

<blockquote>
<p>Right, running out of time!.</p>

<p>So I thought I&#8217;d try and sum up, because actually, I&#8217;ve really enjoyed all the stuff today and I just thought I saw some themes coming through. From all the talks, there does seem to be this notion that what people are often advocating is redomaining. It&#8217;s finding some other domain and bringing it into the one you&#8217;re working on in order to inspire new ideas and get new stuff out of it, and ideas from this to that will depend on bringing thinking from new areas, and that seemed really interesting. And I think Tom and I were trying to work out what we thought our From and To is and I think it&#8217;s about from representing the world on the Web to embedding the Web in the world, that seems to be the kind of&hellip; maybe the redomaining that we&#8217;re thinking of, that I think is interesting about post digital. We&#8217;re starting with paper because paper scales, it&#8217;s really easy to print stuff out. There&#8217;s an infrastructure for printing stuff out&mdash;paper and printing is really scaleable kind of world, there are other worlds where you can do this as well. Some won&#8217;t scale as easily, but lots of them will work in the same way. And then the other thing I noticed is&mdash;Adam used the word&mdash;constituent, and I thought that was interesting. So if we think of all of these domains and all these new forms of technology and things as constituencies, and then we think of our goal to go out and master those technologies and those domains, and make the most of them and really kind of get on top of them, we could think of that as Government. And then what we&#8217;re able to say is what I would suggest to you all, is what you should do is go back to your constituencies and prepare for Government.</p>
</blockquote>

</div>

<!-- FOOTER -->
<?php include($dr . "footer.inc.php"); ?>