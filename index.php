<?php
/**
 * index.php
 * main index page for kyleweb.dev portfolio site
 */
require 'lib/header.php'; ?>
<!--
	<nav>
		<div class="nav nav-tabs" id="nav-tab" role="tablist">
		    <a class="nav-item nav-link active" id="nav-portfolio-tab" data-toggle="tab" href="#nav-portfolio" role="tab" aria-controls="nav-portfolio" aria-selected="true">Portfolio</a>
		    <a class="nav-item nav-link" id="nav-resume-tab" data-toggle="tab" href="#nav-resume" role="tab" aria-controls="nav-resume" aria-selected="false">Resume</a>
		    <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">About</a>
		    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>
		</div>
	</nav>
-->
<main>
	<div class="divider-box"></div>
	<div id="services">
		<br>
		<div style="text-align: center;">
			<!--
			<h1 class="pb-2 display-4" style="color: #3399CC;"><em><u>Services</u></em></h1>
			<br>
			-->
		</div>
		<?php require 'lib/services.php'; ?>
	</div>
	<div class="divider-box mt-2"></div>

	<div id="portfolio">
		<br>
		<div class="container-md" style="text-align: center;">
			<h1 style="color: #3399CC;"><em><u>Portfolio</u></em></h1>
			<br>
			<p class="mt-3 mx-3 pb-3">&nbsp Hello! My name is Kyle and I'm a Web Developer from the United States. I handle everything from the webserver and database to custom front end styling. Here you will find some of my personal projects and freelance work that I have completed along with their descriptions and code. Check out my <a href="http://github.com/kh09211" target="_blank">GitHub!</a> For more info about me, see my <a href="#about">About</a> page.</p>
		</div>
		<?php require 'lib/portfolio.php'; ?>
	</div>
	<div class="divider-box"></div>
  	<div id="resume">
  		<div class="bluebox text-center">
	  		<h1 class="display-4 text-light"><i><u>Skillset</u></i></h1>
	  		<br>
	  		<br>
	        <?php require 'lib/resume.php' ?>
	        <!--
	        <br>
	        Click here to <a href="media/kyle_hopkins-resume_latest.pdf" class="text-light">download/print full resume</a>
	    -->
  		</div>
  	</div>
  	<div class="divider-box"></div>
  	<div id="about">
		<div class="container-md text-center">
			<br>
			<h1 class="display-4 mb-5" style="color: #3399CC;"><i><u>About me</u></i></h1>
			<br>
			<div class="text-center">
				<img src="media/kyle.jpg" alt="kyle_photo" style="width: 25%;" class="rounded border border-dark">
			</div>
			<div class="text-left">
				<br>
				<br>
	  			<p>&nbsp I know every programmer or computer guru says they started messing with computers when they were a little kid. Well I am no exception here, some of my earliest memories were of helping my dad who sold used computers out of our garage. I wrote my first lines of code at age 10 and by age 14 had experience with several languages. Since that time, my interest in technology has never waivered. At every point in my life I have been digging into technical projects both software and hardware. Whether it was was decompiling programs to figure out how they worked, or flashing firmware to a custom car computer, I have been and probably always will be involved and borderline obsessed with tech stuff.</p>
	  			<p>&nbsp  I've been working on web related projects since the late 1990s. The back end and server side technologies, being most fascinating to me, got my attention first. Then came my interest in modern Javascript, Vue, and the systems that tie the front and back ends together. This passion has led me to a career as a freelance developer! From styling tweaks to full-stack solutions, it would be an honor to be part of your team, to achieve and deliver the end results that you dream of. Thanks for checking out my portfolio and feel free to contact me below!</p>
	  		</div>
	  		<form action="#contact">
	  			<button class="btn btn-outline-dark mt-5 mb-3" type="submit" style="font-size:16px;">Hire Kyle</button>
	  		</form>
  		</div>
  	</div>
  	<div class="divider-box-blue"></div>
  	<div id="contact" class="bg-dark">
  		<div class="container-md text-center">
			<br>
			<h1 class="text-light display-4">Contact Kyle!</h1>
			<br>
			<?php require 'lib/contact.php'; ?>
		</div>
	</div>
</main>
<?php require 'lib/footer.php'; ?>
