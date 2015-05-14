<?php //$dr = str_replace($_SERVER['SCRIPT_NAME'], '/includes/', $_SERVER['SCRIPT_FILENAME']); ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
	"http://www.w3.org/TR/html4/strict.dtd">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta name="keywords" content="User Experience Design, Conference, Event, Brighton, ClearLeft">
	<meta name="description" content="dConstruct is an affordable, one-day conference aimed at those building the latest generation of websites. The event discusses how to design websites that not only work, but are an enjoyable experience for the user.">
	<meta name="geo.position" content="50.8234;-0.1382">
	<meta name="ICBM" content="50.8234,-0.1382">

	<link rel="alternate" type="application/rss+xml" title="Clearleft Events" href="http://feeds.feedburner.com/ClearleftEvents">

	<link rel="alternate" type="application/rss+xml" title="dConstruct 2009 podcast" href="http://huffduffer.com/dConstruct/tags/dconstruct09">
	
	<?php
		$title = (isset($title) && $title != '')?"$title | ":"";
		$section = (isset($section) && $section != '')?$section:"home";
	?>
	<title><?php echo $title ?>dConstruct 2009</title>
	
	<link rel="stylesheet" href="/styles/main.css?20091130" type="text/css" media="screen,projection" charset="utf-8">
	<link rel="stylesheet" href="/styles/print.css?20091130" type="text/css" media="print" charset="utf-8">
	
	<!--[if lt IE 7]>
		<script type="text/javascript" src="/js/iepngfix_tilebg.js"></script>
		<script type="text/javascript" src="/js/minmax.js"></script>
		<link rel="stylesheet" href="/styles/ie6.css" type="text/css" media="screen,projection" charset="utf-8">
	<![endif]-->
	
	<!--[if IE 7]>
		<link rel="stylesheet" href="/styles/ie.css" type="text/css" media="screen,projection" charset="utf-8">
	<![endif]-->

	<?php echo $scripts ?>

</head>

<body class="<?php echo $section ?>">

<div class="header">

	<!-- Branding-->
	<div class="section vevent">
	<p><a href="http://clearleft.com"><span>Clearleft</span> presents</a></p>
	<h1><a class="url" href="/"><img class="summary uid" alt="dConstruct 2009" src="/images/dconstruct-logo.gif"></a></h1>
		
	<h2 class="description">Designing for Tomorrow</h2>
		
	<h3><abbr title="2009-09-04" class="dtstart">04 September 2009</abbr> &#183; <span class="location">Brighton Dome</span> UK</h3>
	</div>

	<!-- Navigation-->
	<div class="navigation">
		<ol>
			<li class="page-home"><span><a href="/">Home</a></span></li>
			<li class="page-schedule"><span><a href="/schedule/">Schedule</a></span></li>
			<li class="page-workshops"><span><a href="/workshops/">Workshops</a></span></li>
			<li class="page-location"><span><a href="/location/">Location</a></span></li>
			<li class="page-podcast"><span><a href="/podcast/">Podcast</a></span></li>
		</ol>
	</div>

</div><!-- /.header -->

<div class="content">
