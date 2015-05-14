<?php $dr = str_replace($_SERVER['SCRIPT_NAME'], '/includes/', $_SERVER['SCRIPT_FILENAME']); ?>

<?php include($dr . "head.inc.php"); ?><!-- HEADER -->

<!-- SECTION SPEAKER LIST -->
<?php include($dr . "speaker-list.inc.php"); ?>

<!-- SECTION WORKSHOPS -->
<?php include($dr . "workshops.inc.php"); ?>

<!-- SECTION NEWS -->
<?php include($dr . "news.inc.php"); ?>

<!-- SECTION SCHEDULE -->
<?php include($dr . "schedule.inc.php"); ?>

<!-- SECTION SPEAKER -->
<?php include($dr . "speaker.inc.php"); ?>

<!-- SECTION WORKSHOP -->
<?php include($dr . "workshop.inc.php"); ?>

<!-- SECTION LOCATION -->
<?php include($dr . "location.inc.php"); ?>

<!-- SECTION SPONSORSHIP -->
<?php include($dr . "sponsorship.inc.php"); ?>

<!-- SECTION PODCAST -->
<?php include($dr . "podcast.inc.php"); ?>

<!-- SECTION PODCAST DETAIL -->
<?php include($dr . "podcast-detail.inc.php"); ?>

<!-- FOOTER -->
<?php include($dr . "footer.inc.php"); ?>