<?php $dr = str_replace($_SERVER['SCRIPT_NAME'], '/includes/', $_SERVER['SCRIPT_FILENAME']); ?>

<?php
	$title = "Workshops: HTML5 and CSS3 Wizardry";
	$section = "workshops";
?>

<?php include($dr . "head.inc.php"); ?><!-- HEADER -->


<!-- SECTION WORKSHOP -->
<div class="section">
		
	<h2><a href="../">HTML5 and CSS3 Wizardry</a></h2>

	<h3>HTML5</h3>

	<ul>
		<li><a href="slides/">Slides</a></li>
		<li><a href="examples/">Examples</a></li>
	</ul>

</div>

<!-- FOOTER -->
<?php include($dr . "footer.inc.php"); ?>