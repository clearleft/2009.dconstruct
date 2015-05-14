<?php $dr = str_replace($_SERVER['SCRIPT_NAME'], '/includes/', $_SERVER['SCRIPT_FILENAME']); ?>

<?php
	$title = "Workshops";
	$section = "workshops";
?>

<?php include($dr . "head.inc.php"); ?><!-- HEADER -->


<!-- SECTION WORKSHOP -->
<div class="section workshops">

	<div class="blurb">
		
	<h2>Workshops</h2>

	<p class="description">We’re offering a limited number of places for a few full-day exclusive masterclasses in the lead-up to the conference.</p>
	
		<div class="more-information">

			<p>Workshops will be taking place at: Clearleft Suite 3, 28 Kensington Street, Brighton, BN1 4AJ, UK. <a href="/location/">Map</a>.</p>

			<p>Workshops start promptly at 10:00am. Please arrive at 9:30am for coffee and registration.</p>
		
		</div>
		
	</div>

	<?php include($dr . "workshops.inc.php"); ?>

</div>

<!-- Workshop - Internet of Things -->

<div class="section workshop-detail">
		
	<div class="highlight">
		<img class="photo" src="/images/photo-workshop-group.jpg" alt="group of attendees"><img class="photo thumbnail" src="/images/photo-workshop-bottle.jpg" alt="bottle and flipchart"><img class="photo thumbnail"src="/images/photo-workshop-dome.jpg" alt="Brighton Dome">
		
		<img src="/images/soldout.png" alt="sorry we've sold out!" class="soldout" />
		
		
	</div>
		
	<div class="agenda" id="internet-of-things">

		<h2>Internet of Things Master Class</h2>
		
		<h4>Led by <a href="/schedule/mattbiddulph/">Matt Biddulph</a>, <a href="/schedule/nickweldin/">Nick Weldin</a> and <a href="/schedule/danielsoltis/">Daniel Soltis</a></h4>
		
		<p class="description">This one day intensive hands-on workshop will focus on getting programmers and technologists up to speed about the latest hardware technologies, allowing them to build web-enabled, responsive installations and spaces.</p>
		
		<p>With the latest interest in connecting the internet to the real world and vice versa (projects like Centograph, <a href="http://www.nabaztag.com/en/index.html">Nabaztag</a>, <a href="http://www.mcqn.com/bubblino">Bubblino</a> and <a href="http://www.touchatag.com/">Touchatag</a>), <a href="http://tinker.it/">Tinker.it!</a> will be talking through the Internet Of Things landscape, giving participants hard skills which they will be able to use immediately.</p>

		<p>Participants with programming and web development skills are encouraged to attend.</p>

		<p>What this workshop will involve:</p>

		<ul>
			<li>Introduction talk around Internet of Things, the landscape and the technologies used.</li>
			<li>Introduction to Arduino and its use with Xbee and RFID</li>
			<li>Setting up the board + examples from Getting Started with Arduino</li>
			<li>Talking to Xbee nodes</li>
			<li>Talking to RFID</li>
			<li>Introduction to Arduino and Ethernet capabilities from Dopplr CTO <a href="/schedule/mattbiddulph/">Matt Biddulph</a>.</li>
			<li>Introduction to Web APIs such as Twitter and Flickr, and the special considerations of hardware talking to them</li>
			<li>First Web API client running on Arduino - retrieve data from the internet and send it to a laptop by serial connection</li>
			<li>Introduction to web serving</li>
			<li>Setting up the Arduino as a web server. Reading values from basic sensors (potentiometer, etc) and serving web pages showing this value</li>
		</ul>

	</div>

</div>

<!-- Workshop - HTML5 CSS3 -->

<div class="section workshop-detail">
		
	<div class="highlight">
		<img class="photo" src="/images/photo-workshop-musing.jpg" alt="group of attendees"><img class="photo thumbnail" src="/images/photo-workshop-html.jpg" alt="code on screen"><img class="photo thumbnail" src="/images/photo-workshop-sketches.jpg" alt="wireframe diagrams">
		
		<img src="/images/soldout.png" alt="sorry we've sold out!" class="soldout" />
			
			
		</div>
		
	<div class="agenda" id="html5-css3">

		<h2>HTML5 and CSS3 Wizardry</h2>
		
		<h4>Led by <a href="/schedule/richardrutter/">Richard Rutter</a>, <a href="/schedule/nataliedowne/">Natalie Downe</a> and <a href="/schedule/jeremykeith/">Jeremy Keith</a></h4>
		
		<p class="description">HTML5 and CSS3 may be considered by some as distant concepts: far in the future and irrelevant to their daily lives. However, in this day-long workshop by Clearleft's expert client-side engineers Richard Rutter, Jeremy Keith and Natalie Downe, you will learn how these exciting new concepts can be applied today!</p>

		<p>Unlock the potential of the browser with some revolutionary new ideas you can take away and use in the real world. Learn how to create magical things to add delight to your design. Get up to speed with the concept of Progressive Enrichment and reward more standards-compliant and forward-thinking browsers.</p>

		<p>Learn to use CSS3 transitions and animations and then harness the power of more complex selectors to free your markup. Get to grips with how you can use elements and concepts from HTML5 to wow your friends with improved semantics and cleaner code.</p>

		<p>CSS3 and HTML5 are already with us. This workshop will show you how to prepare your websites and coding methodology for the future, and what you can use right here, right now. Don't get left behind, sign up today!</p>
		
		<ul>
			<li>Understanding Progressive Enhancement.</li>
			<li>What's new in HTML5?</li>
			<li>Using HTML5's new structural elements.</li>
			<li>Applying the HTML5 semantic vocabulary to your class names today.</li>
			<li>Making full use of CSS 2.1.</li>
			<li>What's new in CSS3?</li>
			<li>Achieving excellence in web typography.</li>
			<li>Replacing your old markup hacks with lean, mean CSS-driven effects.</li>
			<li>Putting it all together in one pretty package.</li>
			<li>Dealing with legacy browsers.</li>
		</ul>
	
	</div>

</div>


<!-- Workshop - jQuery for Designers -->


<div class="section workshop-detail">
		
	<div class="highlight">
		<img class="photo" src="/images/photo-workshop-session.jpg" alt="workshop attendees"><img class="photo thumbnail" src="/images/photo-workshop-post-its.jpg" alt="wireframe diagrams"><img class="photo thumbnail"src="/images/photo-workshop-coffee.jpg" alt="workshop attendees">
		
		<img src="/images/soldout.png" alt="sorry we've sold out!" class="soldout" />
		
		
	</div>
		
	<div class="agenda" id="jquery-for-designers">

		<h2>jQuery for Designers</h2>
		<h4>Led by <a href="/schedule/remysharp/">Remy Sharp</a></h4>

		<p class="description">If you've found you've needed to write a bit (or more!) of interactive functionality using JavaScript, and couldn't because you a) didn't know how and b) didn't have time to learn how: then this workshop is for you.</p>

		<p>You'll be learning jQuery from a practical point of view: what you can use out of the box to quickly get effects and interaction live in to your wireframes, prototypes and web sites.  The aim *isn't* to teach you JavaScript, but to teach you what you need to know to be able to leverage jQuery to do your bidding.</p>

		<p>During the day, Remy will show you how to dConstruct existing effects in web sites and show you how create your own using jQuery.</p>

		<p>The workshop will also cover topics such as:</p>

		<ul>
			<li>JavaScript &amp; debugging basics: how to fake it as a JavaScripter</li>
			<li>Progressive enhancement &amp; Graceful degradation - what's what</li>
			<li>jQuery: how do bend the DOM to your will</li>
			<li>Effect and animations - things that go whizz bang!</li>
			<li>Ajax: it's even simpler than you think</li>
			<li>Using jQuery UI for instant widgets, for zero work</li>
		</ul>
		
		<p>The workshop audience is aimed at beginners to intermediates - and it's very hands on!</p>

		<p>We'll start with covering the basics of JavaScript so that you have a good grounding and you can fake your way through coding. This will include anonymous functions, scope, context (what 'this' means in different places) and objects.  Then we'll move on to tabbing systems, how they work, how to recognise them when they don't look like tabbing systems, and then on to the juicier stuff such as effects, Ajax and jQuery UI.</p>
		
	</div>

</div>


<!-- Workshop - Designing Mobile Experiences -->


<div class="section workshop-detail">
		
	<div class="highlight">
		<img class="photo" src="/images/photo-workshop-flipchart.jpg" alt="atendees and a flipchart"><img class="photo thumbnail"src="/images/photo-workshop-diagrams.jpg" alt="workshop drawings"><img class="photo thumbnail"src="/images/photo-workshop-moocards.jpg" alt="dConstruct moocards">
		
		
		<img src="/images/soldout.png" alt="sorry we've sold out!" class="soldout" />
			
			
	</div>
		
	<div class="agenda" id="designing-mobile-experiences">

		<h2>Designing Mobile Experiences</h2>
		<h4>Led by <a href="/schedule/brianfling/">Brian Fling</a></h4>

		<p class="description">In the last year we've learned something that we suspected, but never really knew about mobile, great mobile design sells. But great mobile design doesn't start in Photoshop, it starts by understanding the users, the business goals, the intended devices and a million other tiny variables. Who better to solve these problems than the designer?</p>

		<p>In this workshop we will deconstruct a variety of successful mobile experiences from the old green screens to today's hottest iPhone apps. We'll identify what works in the mobile context and why. But more importantly we'll learn how we can design incredible mobile experiences for today and for tomorrow.</p>

		<p>What we will cover in this workshop:</p>
		
		<ul>
			<li>Understanding the mobile context and how to design for it</li>
			<li>Creating a device plan and a mobile design strategy around it</li>
			<li>How to design and create progressive mobile experiences</li>
			<li>How to choose the right mobile platform and application context</li>
			<li>How to get the right designs on the right devices</li>
			<li>How to design and build something insanely great</li>
		</ul>

	</div>

</div>


<!-- FOOTER -->
<?php include($dr . "footer.inc.php"); ?>