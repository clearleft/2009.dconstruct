<?php $dr = str_replace($_SERVER['SCRIPT_NAME'], '/includes/', $_SERVER['SCRIPT_FILENAME']); ?>

<?php
	$title = "Schedule";
	$section = "schedule";
?>

<?php include($dr . "head.inc.php"); ?><!-- HEADER -->

<!-- SECTION SCHEDULE -->
<div class="section schedule">

	<h2>Schedule</h2>

	<div class="highlight-container">

		<div class="first highlight vevent">
			<h3>02 Sept</h3>
			<h4><a href="/workshops/"><strong class="summary">Workshops</strong></a></h4>
			<h5><abbr class="dtstart" title="2009-09-02T09:30:00">09.30</abbr> &ndash; <abbr class="dtend" title="2009-09-02T17:30:00">17:30</abbr></h5>
			<p class="location">Clearleft, 28 Kensington St, BN1 4AJ</p>
		</div>
	
		<div class="highlight vevent">
			<h3>03 Sept</h3>
			<h4><a href="/workshops/"><strong class="summary">Workshops</strong></a></h4>
			<h5><abbr class="dtstart" title="2009-09-03T09:30:00">09.30</abbr> &ndash; <abbr class="dtend" title="2009-09-03T17:30:00">17:30</abbr></h5>
			<p class="location">Clearleft, 28 Kensington St, BN1 4AJ</p>
		</div>
	
		<div class="highlight vevent">
			<h3>04 Sept</h3>
			<h4><strong class="summary">Conference</strong></h4>
			<h5><abbr class="dtstart" title="2009-09-04T09:00:00">09.00</abbr> &ndash; <abbr class="dtend" title="2009-09-04T18:00:00">18:00</abbr></h5>
			<p class="location">Brighton Dome, BN1 1UG</p>
		</div>	
	</div>
	
	
	<div class="lead">
	<p class="description">Future proof your design and development skills with this year's dConstruct. We&rsquo;ll be covering the latest trends from the brightest thinkers in the industry. Everything from mobile design and gestural interactions to ubiquitous computing and sci-fi interfaces.</p>
	<p class="description">Just don&rsquo;t forget your jet pack.</p>
	
		<img src="/images/soldout.png" alt="sorry we've sold out!" class="soldout" />
	</div>
	
	
	<table>
		
		<tr class="vevent">
			<th>
				<abbr class="dtstart" title="2009-09-03T09:00:00">20.00, Thurs</abbr>
			</th>
			<td class="summary">Pre Party at Po Na Na, all welcome!</td>
			<td class="person"><a href="/location">map</a></td>
		</tr>
		
		<tr class="vevent">
			<th>
				<abbr class="dtstart" title="2009-09-04T09:00:00">09.00, Fri</abbr>
			</th>
			<td class="summary">Registration</td>
			<td class="person"></td>
		</tr>
		
		<tr class="vevent">
			<th>
				<abbr class="dtstart" title="2009-09-04T10:00:00">10.00</abbr>
				 &ndash; 
				<abbr class="dtend" title="2009-09-04T10:15:00">10.15</abbr>
			</th>
			<td class="summary">Opening Remarks</td>
			<td class="person vcard"><a class="fn url" rel="tag" href="/schedule/richardrutter/">Richard Rutter</a></td>
		</tr>
		
		<tr class="vevent">
			<th>
				<abbr class="dtstart" title="2009-09-04T10:15:00">10.15</abbr>
				 &ndash; 
				<abbr class="dtend" title="2009-09-04T11:00:00">11:00</abbr>
			</th>
			<td class="summary"><a href="/schedule/adamgreenfield/">Elements of a Networked Urbanism</a></td>
			<td class="person vcard"><a class="fn url" rel="tag" href="/schedule/adamgreenfield/">Adam Greenfield</a></td>
		</tr>
		
		<tr class="vevent">
			<th>
				<abbr class="dtstart" title="2009-09-04T11:00:00">11.00</abbr>
				 &ndash; 
				<abbr class="dtend" title="2009-09-04T11:30:00">11:30</abbr>
			</th>
			<td class="summary">Break (Tea, coffee &amp; biscuits)</td>
			<td class="person"></td>
		</tr>
		
		<tr class="vevent">
			<th><abbr class="dtstart" title="2009-09-04T11:30:00">11.30</abbr>
				 &ndash; 
				<abbr class="dtend" title="2009-09-04T12:15:00">12:15</abbr>
			</th>
			<td class="summary"><a href="/schedule/mikemigurski/">Let's See What We Can See (Everybody Online And Looking Good)</a></td>
			<td class="person vcard"><a class="fn url" rel="tag" href="/schedule/mikemigurski/">Mike Migurski</a> and <a class="fn url" rel="tag" href="/schedule/bencerveny/">Ben Cerveny</a></td>
		</tr>
		
		<tr class="vevent">
			<th>
				<abbr class="dtstart" title="2009-09-04T12:15:00">12.15</abbr>
				 &ndash; 
				<abbr class="dtend" title="2009-09-04T13:00:00">13:00</abbr>
			</th>
			<td class="summary"><a href="/schedule/brianfling/">What’s Next? How mobile is changing design</a></td>
			<td class="person vcard"><a class="fn url" rel="tag" href="/schedule/brianfling/">Brian Fling</a></td>
		</tr>
		
		<tr class="vevent">
			<th>
				<abbr class="dtstart" title="2009-09-04T13:00:00">13.00</abbr>
				 &ndash; 
				<abbr class="dtend" title="2009-09-04T14:30:00">14:30</abbr>
			</th>
			<td class="summary">Lunch (not provided)</td>
			<td class="person"></td>
		</tr>

		<tr class="vevent">
			<th>
				<abbr class="dtstart" title="2009-09-04T14:30:00">14.30</abbr>
				 &ndash; 
				<abbr class="dtend" title="2009-09-04T15:15:00">15:15</abbr>
			</th>
			<td class="summary"><a href="/schedule/nathanshedroff/">Make It So: Learning From SciFi Interfaces</a></td>
			<td class="person vcard"><a class="fn url" rel="tag" href="/schedule/nathanshedroff/">Nathan Shedroff</a> and <a class="fn url" rel="tag" href="/schedule/chrisnoessel/">Chris Noessel</a></td>
		</tr>

		<tr class="vevent">
			<th>
				<abbr class="dtstart" title="2009-09-04T15:15:00">15.15</abbr>
				 &ndash; 
				<abbr class="dtend" title="2009-09-04T16:00:00">16:00</abbr>
			</th>
			<td class="summary"><a href="/schedule/robinhunicke/">Loving Your Player with Juicy Feedback</a></td>
			<td class="person vcard"><a class="fn url" rel="tag" href="/schedule/robinhunicke/">Robin Hunicke</a></td>
		</tr>
		
		<tr class="vevent">
			<th>
				<abbr class="dtstart" title="2009-09-04T16:00:00">16.00</abbr>
				 &ndash; 
				<abbr class="dtend" title="2009-09-04T16:30:00">16:30</abbr>
			</th>
			<td class="summary">Break (tea, coffee &amp; biscuits)</td>
			<td class="person"></td>
		</tr>
		
		<tr class="vevent">
			<th>
				<abbr class="dtstart" title="2009-09-04T16:30:00">16.30</abbr>
				 &ndash; 
				<abbr class="dtend" title="2009-09-04T17:15:00">17:15</abbr>
			</th>
			<td class="summary"><a href="/schedule/augustdelosreyes/">Experience and the Emotion Commotion</a></td>
			<td class="person vcard"><a class="fn url" rel="tag" href="/schedule/augustdelosreyes/">August de los Reyes</a></td>
		</tr>
		
		<tr class="vevent">
			<th>
				<abbr class="dtstart" title="2009-09-04T17:15:00">17.15</abbr>
				 &ndash; 
				<abbr class="dtend" title="2009-09-04T18:00:00">18:00</abbr>
			</th>
			<td class="summary"><a href="/schedule/russelldavies/">Materialising and Dematerialising A Web of Data. (Or What We’ve Learned From Printing The Internet Out)</a></td>
			<td class="person vcard"><a class="fn url" rel="tag" href="/schedule/russelldavies/">Russell Davies</a></td>
		</tr>
		
		<tr class="vevent">
			<th>
				<abbr class="dtstart" title="2009-09-04T18:00:00">18.00</abbr>
				 &ndash; 
				<abbr class="dtend" title="2009-09-04T18:15:00">18:15</abbr>
			</th>
			<td class="summary">Closing announcements</td>
			<td class="person"></td>
		</tr>
		
		<tr class="vevent">
			<th>
				<abbr class="dtstart" title="2009-09-04T19:30:00">19.30</abbr>
			</th>
			<td class="summary">After Party at Above Audio</td>
			<td class="person"><a href="/location">map</a></td>
		</tr>
		
	</table>
	
	
</div>

<!-- FOOTER -->
<?php include($dr . "footer.inc.php"); ?>