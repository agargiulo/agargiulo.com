<!DOCTYPE HTML>
<html>
	<head>
<?
include_once("gravatar.php");
include_once("environment.php");
include_once("meta.php");
?>
		<meta charset="utf-8">
		<title>Anthony Gargiulo</title>
		<link rel="stylesheet" href="stylesheets/styles.css">
		<link rel="stylesheet" href="stylesheets/pygment_trac.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script src="javascripts/respond.js"></script>
		<!--[if lt IE 9]>
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<!--[if lt IE 8]>
		<link rel="stylesheet" href="stylesheets/ie.css">
		<![endif]-->
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

	</head>
	<body>
		<?
		if ($_SERVER['SERVER_NAME'] == "www.agargiulo.com")
		{
			include_once("analyticstracking.php");
		}
		?>

		<!--a href="https://github.com/agargiulo"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_gray_6d6d6d.png" alt="Fork me on GitHub"></a-->
	<div class="wrapper">

	<section id="about_me">
		<div id="title">
		<h1>Anthony Gargiulo</h1>
		<hr>
		</div>

		<p id="gravatar_image"><img src="<?=$grav_url?>" alt="Gravatar Avatar"></p>
		<div >
		<h1 class="center">About Me</h1>

		<p>I studied Computer Science at Rochester Institute of Technology.
		I was an RTP (Root-Type Person) for Computer Science House (<a href="http://www.csh.rit.edu">CSH</a>).
		For fun, I spend a large portion of my time tinkering with either my Linux boxes or random code projects that I find interesting.</p>
		</div>

	</section>
	<section id="project_section">
		<hr>
		<div class="center">
			<h2>Projects</h2>
			<p><a href="/gatekeeper-android/">CSH Gatekeeper for Android</a></p>
			<a href="/gatekeeper-android/"><img class="project_thumb" src="images/gka/welcome_about.png"></a>
		</div>
	</section>
	<section id="information">
		<hr />

		<div class="half">
		<h2>Resume</h2>

		<p><a href="http://resume.agargiulo.com/resume.pdf">PDF Copy </a>
		<br><a href="http://resume.agargiulo.com/resume.tex.html">LaTeX source</a>
		<br><a href="https://github.com/agargiulo/resume">Github repo</a>
		<br></p>
		</div>

		<div class="half">
		<h2>Contact Info</h2>

		<p><a href="mailto:anthony@agargiulo.com">anthony@agargiulo.com</a><br>
		</p>
		</div>
	</section>
	<section id="main_footer">
		<hr class="clear">
		<!--div id="under"> 
			<p> <a href="mailto:anthony@agargiulo.com">Anthony Gargiulo</a> </p>
			<p> Theme designed by <a href="http://twitter.com/#!/michigangraham">mattgraham</a> </p> 
			<p> Copyright 2013 © Anthony Gargiulo </p>
		</div--> 
	</section>
<!--
	<section id="clickables">

		<div class="half">
			<a href="https://projecteuler.net/progress=agargiulo">
			<img src="https://projecteuler.net/profile/agargiulo.png" alt="ProjectEuler profile for agargiulo"/>
			</a>
			<br>
			<br/>
			<a href="https://twitter.com/argargablar" class="twitter-follow-button" data-show-count="false">Follow @argargablar</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
	<br/>
			<div class="g-plusone" data-href="https://www.agargiulo.com"></div>
			<a href="https://www.linkedin.com/pub/anthony-gargiulo/44/526/b1a">
			<img src="https://www.linkedin.com/img/webpromo/btn_viewmy_120x33.png" style="width: 120; height: 33; border: 0;" alt="View Anthony Gargiulo's profile on LinkedIn">
			</a>
		</div>
		<div class="half">
			<a href="https://ipv6.he.net/certification/scoresheet.php?pass_name=agargiulo" target="_blank"><img src="https://ipv6.he.net/certification/create_badge.php?pass_name=agargiulo&amp;badge=3" style="border: 0; width: 229px; height: 137px" alt="IPv6 Certification Badge for agargiulo"></a>
		</div>
		<hr class="clear" />
	</section>
-->
	</div>
	<!--[if !IE]><script>fixScale(document);</script><![endif]-->

	</body>
	</html>
