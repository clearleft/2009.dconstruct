<?php $dr = str_replace($_SERVER['SCRIPT_NAME'], '/includes/', $_SERVER['SCRIPT_FILENAME']); ?>

<?php 
	$bodyclass='home';
		$scripts = '
<script type="text/javascript" src="/js/clearform.js"></script>
';

	include($dr . "head.inc.php"); ?><!-- HEADER -->

<!-- SPEAKER LIST -->
<div class="section speaker-list">
	
	<div class="highlight">
		
		<div class="photos">
			<img class="photo thumbnail" alt="workshop attendees" src="/images/photo-workshop.jpg">
			<img class="photo thumbnail" alt="attendee relaxing on a sofa" src="/images/photo-shoes.jpg">
			<img class="photo" alt="crowd of attendees" src="/images/photo-crowd.jpg">
			<img class="photo" alt="conference speaker" src="/images/photo-speaker.jpg">
			<img class="photo thumbnail" alt="silverback banana" src="/images/photo-banana.jpg">
			<img class="photo thumbnail" alt="conference attendees" src="/images/photo-attendees.jpg">
		</div>
		
		<img id="onsalebutton" src="/images/soldout.png" alt="sorry we've sold out!" class="soldout" />
		
		<p class="description"><strong>dConstruct 09</strong> brings together leading <dfn title="self-actuating media nodes">thinkers</dfn> from the fields of ubiquitous computing, interface design, gaming and mobile to explore the challenges of designing for tomorrow.</p>
		
		<p class="add-to-cal"><a href="http://suda.co.uk/projects/microformats/hcalendar/get-cal.php?uri=http://2009.dconstruct.org/">Add it to your calendar</a></p>
		
		
		
		
			<p class="get-updates">Follow <a href="http://twitter.com/dconstruct">@dConstruct</a> and <a href="http://twitter.com/clearleft">@clearleft</a> on <img src="/images/twitter_logo_sml.png" alt="Twitter" width="76" height="19"></p>
			
	</div><!-- ./highlight -->

	<ul>
		<li class="vcard"><h2><a class="url fn" href="/schedule/adamgreenfield/">Adam Greenfield</a></h2></li>
		<li class="vcard"><h2><a class="url fn" href="/schedule/brianfling/">Brian Fling</a></h2></li>
		<li class="vcard"><h2><a class="url fn" href="/schedule/russelldavies/">Russell Davies</a></h2></li>		
		<li class="vcard"><h2><a class="url fn" href="/schedule/mikemigurski/">Mike Migurski</a></h2></li>	
		<li class="vcard"><h2><a class="url fn" href="/schedule/bencerveny/">Ben Cerveny</a></h2></li>
		<li class="vcard"><h2><a class="url fn" href="/schedule/nathanshedroff/">Nathan Shedroff</a></h2></li>
		<li class="vcard"><h2><a class="url fn" href="/schedule/chrisnoessel">Chris Noessel</a></h2></li>
		<li class="vcard"><h2><a class="url fn" href="/schedule/robinhunicke/">Robin Hunicke</a></h2></li>
		<li class="vcard"><h2><a class="url fn n" href="/schedule/augustdelosreyes/"><span class="given-name">August</span> <span class="family-name">de los Reyes</span></a></h2></li>
	</ul>

</div><!-- /.section .speaker-list -->

<!-- NEWS -->
<?php include($dr . "news.inc.php"); ?>

<!-- FOOTER -->
<?php include($dr . "footer.inc.php"); ?>
