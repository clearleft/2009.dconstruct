<?php $dr = str_replace($_SERVER['SCRIPT_NAME'], '/includes/', $_SERVER['SCRIPT_FILENAME']); ?>

<?php
	$title = "Accessibility";
	$section = "accessibility";
?>

<?php include($dr . "head.inc.php"); ?><!-- HEADER -->

<div class="section notwide">
	
	<h2>Accessibility</h2>
	<p>The dConstruct website has been designed and built to be accessible to as wide an audience as possible. Some people with disabilities find using the web difficult and while we know that it is impossible to design a site that everyone can use, if you have problems using our site, please <a class="contact-link" href="/contact/">let us know</a> and we will do our utmost to help.</p>
		
	<h3>Conference accessibility</h3>
	<p>If you have specific accessibility requirements while at the conference, please contact us and we'll try our best to accommodate you.</p>

	<h3>Standards compliance</h3>
	<p>All pages validate as <abbr title="eHyperText Language version 4">HTML4</abbr>.</p>

	<h3>Links</h3>
	<p>Many links have title attributes which describe the link in greater detail, unless the text of the link already fully describes the target (such as the headline of an article).</p>
	<p>Whenever possible, links are written to make sense out of context. Many browsers (such as <acronym>JAWS</acronym>, Home Page Reader, Lynx, and Opera) can extract the list of links on a page and allow the user to browse the list, separately from the page. To aid this, link text is never duplicated; two links with the same link text always point to the same address.</p>
	<p>There are no <code>javascript:</code> pseudo-links.  All links can be followed in any browser, even if scripting is turned off. There are no links that open new windows without warning.</p>

	<h3>Visual design</h3>
	<p>This site uses cascading style sheets for visual layout. If your browser or browsing device does not support stylesheets at all, the content of each page is still readable.</p>
	<p>The layout is liquid, simply filling its window. It happily accommodates resizing text and, as relative units have been used, text can even be re-sized in Internet Explorer for Windows.</p>

</div>

<!-- FOOTER -->
<?php include($dr . "footer.inc.php"); ?>