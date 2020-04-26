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
	<div id="portfolio">
		<br>
		<div class="container-md" style="text-align: center;">
			<h1><i>Portfolio</i></h1>
			<br>
			<p>&nbsp Welcome! My name is Kyle and I'm a full-stack web developer from the United States. Here you will find links to some of the projects that I have completed along with their descriptions and the source code. Check out my <a href="http://github.com/kh09211" target="_blank">GitHub!</a> For more info about me, click on the <a href="#about">About</a> tab.</p>
		</div>
		<?php require 'lib/portfolio.php'; ?>
	</div>
	<div class="divider-box"></div>
  	<div id="resume">
  		<div class="bluebox text-center">
	  		<h1 class="display-4 text-light"><i>Skillset</i></h1>
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
			<h1 class="display-4"><i>About me</i></h1>
			<br>
			<div class="text-center">
				<img src="media/kyle.jpg" alt="kyle_photo" style="width: 25%;" class="rounded border border-dark">
			</div>
			<div class="text-left">
				<br>
				<br>
	  			<p>&nbsp I know every aspiring developer or computer guru says they started messing with computers when they were a little kid. Well I am no exception here, some of my earliest memories were of helping my dad who sold used computers out of our garage. I havn't decided yet if things back then were more or less complicated, but I do know that my interest in technology has never waivered. At every point in my life I have been digging into technical projects both software and hardware. Weather it was was decompiling programs to figure out how they worked, or flashing firmware to a freshly soldered Megasquirt control board, I have been and probably always will be intrigued and borderline obsessed with tech.</p>
	  			<p>&nbsp My most recient interest in particular has been in web development. Over the past year I have been digging deeper into the code that makes the web tick. The back end, being most fascinating to me, has gotten the most attention with PHP as my weapon of choice along with my rekindled love for command line computing. I've also learned a great deal about modern HTML, CSS, Javascript, and the protocals that tie the front and back ends together. With a mission for quality work, and a passsion for understanding the abstract concepts behind the text, I have decided to go all-in and make this interest my new life calling. Thanks for checking out the site and feel free to contact me!</p>
	  			<p>&nbsp&nbsp&nbsp&nbsp - <i>Kyle</i></p>
	  		</div>
  		</div>
  	</div>
  	<div class="divider-box-blue"></div>
  	<div id="contact" class="bg-dark">
  		<div class="container-md text-center">
			<br>
			<h1 class="text-light display-4">Contact me!</h1>
			<br>
			<?php require 'lib/contact.php'; ?>
		</div>
	</div>
</main>
<?php require 'lib/footer.php'; ?>
