<?php
  if ($_SERVER['HTTP_HOST'] != $_SERVER['SERVER_NAME'])
  {
    header("Location: https://{$_SERVER['SERVER_NAME']}", true, 301);
    die();
  }
?>
<!DOCTYPE HTML>
<html>
	<head>
<?php
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
		<!--[if lt IE 8]>
		<link rel="stylesheet" href="stylesheets/ie.css">
		<![endif]-->
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

		<?php
		if ($_SERVER['HTTP_HOST'] == "www.agargiulo.com")
		{
			include_once("analyticstracking.php");
		}
		?>
	</head>
	<body>
	<div class="wrapper">

	<section id="about_me">
		<div id="title">
		<h1>Anthony Gargiulo</h1>
		<hr>
		</div>

		<p id="gravatar_image"><img src="<?php echo($grav_url);?>" alt="Gravatar Avatar"></p>
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
			<h3><a href="https://src.doom.fm/tcelfer-me">Tcelfer</a></h3>
			<p>Reflect on your day with this color coded mood tracker.</p>
			<br>
			<img src="images/tcelfer_report.png">
			<br/><br/>
			<h3><a href="//github.com/agargiulo/git-fukit">Git Fukit</a></h3>
			<p>For all the times you just want to throw your hands up and shout at git
			<br>Just <b>git fukit</b> and carry on coding away</p>
			<br>
			<img src="images/git-fukit-warning.png">
			<br><br>
			<h3><a href="gatekeeper-android/">CSH Gatekeeper for Android</a></h3>
			<a href="gatekeeper-android/"><img class="project_thumb" src="images/gka/welcome_about.png"></a>
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
		<p><a rel="me" href="https://toot.doom.fm/@agargiulo">@agargiulo@doom.fm</a><br>
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
	</div>
	<!--[if !IE]><script>fixScale(document);</script><![endif]-->

	</body>
	</html>
