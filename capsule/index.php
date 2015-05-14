<?php $dr = str_replace($_SERVER['SCRIPT_NAME'], '/includes/', $_SERVER['SCRIPT_FILENAME']); ?>

<?php
	$title = "Time Capsule Competition";
	$section = "capsule";
?>

<?php include($dr . "head.inc.php"); ?><!-- HEADER -->

<div class="section notwide">

	<h2>Win a VIP Ticket to dConstruct</h2>
	
	<p>How would you like to attend <a href="/schedule/">the dConstruct conference</a>, come along to the speakers&rsquo; dinner, and spend two nights in a luxury hotel in Brighton?</p>
	
	<h4>Show us what you would put in the dConstruct time capsule</h4>
	
	<p>The theme of this year&rsquo;s dConstruct is <cite>Designing for Tomorrow</cite>. That&rsquo;s got us thinking about the future and what we would preserve in a time capsule.</p>
	
	<p>Take a look around you. What do you see that you would like to preserve for the future? Take a picture of it, upload that picture to <a href="http://www.flickr.com/">Flickr</a> and tag it with <a href="http://www.flickr.com/photos/tags/dconstructcapsule"><code>dconstructcapsule</code></a>.</p>
	
	<p>You&rsquo;ll be contributing to a collective vision of our current desires for the future. The best entry will win:</p>
	
	<ul>
		<li>Two nights at MyHotel in Brighton (Thursday, September 3rd and Friday, September 4th).</li>
		<li>A place at the speakers dinner on the evening of Thursday, September 3rd.</li>
		<li>A ticket to dConstruct on Friday, September 4th.</li>
	</ul>
	
	<p>The competition closes on Friday, August 28th&mdash;one week before the conference. At that time we will contact the winner through Flickr Mail.</p>
	
	<p>So what are you waiting for? Get thinking and get snapping.</p>

<?php

$data = array(
	'api_key'		=>	'b4144c69562716bb2a04506c1a65b8e0',
	'tags'			=>	'dconstructcapsule'
);

require_once($dr.'flickrPhotosSearch.php');

$photos = flickrPhotosSearch($data);

if (count($photos > 0)):
foreach ($photos as $photo):
echo '<a href="'.$photo['url'].'"><img style="display: block; float: left" src="'.$photo['src']['square'].'" alt="'.$photo['title'].'"></a>';
endforeach;
endif;

?>

</div>



<!-- FOOTER -->
<?php include($dr . "footer.inc.php"); ?>