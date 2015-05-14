<?php $dr = str_replace($_SERVER['SCRIPT_NAME'], '/includes/', $_SERVER['SCRIPT_FILENAME']); ?>

<?php
	$title = "Workshops: HTML5 and CSS3 Wizardry";
	$section = "workshops";
?>

<?php include($dr . "head.inc.php"); ?><!-- HEADER -->


<!-- SECTION WORKSHOP -->
<div class="section">
		
	<h2>HTML5 and CSS3 Wizardry</h2>

	<h3>HTML5</h3>

	<ul>
		<li><a href="html5/slides/">Slides</a></li>
		<li><a href="html5/examples/">Examples</a></li>
	</ul>
	
	<h3>CSS3</h3>
	
	<ul>
		<li><a rel="enclosure" type="application/pdf" href="http://dconstruct.s3.amazonaws.com/2009/slides/css3/css3-deck.pdf">Slides</a> (<abbr title="Portable Document Format">PDF</abbr> 9.6<abbr title="MegaBytes">MB</abbr>)</li>
		<li><a rel="enclosure" href="http://dconstruct.s3.amazonaws.com/2009/slides/css3/examples.zip">Examples</a> (.zip 9.3<abbr title="MegaBytes">MB</abbr>)</li>
	</ul>

</div>

<!-- FOOTER -->
<?php include($dr . "footer.inc.php"); ?>