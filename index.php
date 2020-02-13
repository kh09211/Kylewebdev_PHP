<?php
/**
 * index.php
 * main index page for kyleweb.dev portfolio site
 */
?>
<?php require 'lib/header.php'; ?>
	<nav>
		<div class="nav nav-tabs" id="nav-tab" role="tablist">
		    <a class="nav-item nav-link active" id="nav-portfolio-tab" data-toggle="tab" href="#nav-portfolio" role="tab" aria-controls="nav-portfolio" aria-selected="true">Portfolio</a>
		    <a class="nav-item nav-link" id="nav-resume-tab" data-toggle="tab" href="#nav-resume" role="tab" aria-controls="nav-resume" aria-selected="false">Resume</a>
		    <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">About</a>
		    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>
		</div>
	</nav>
<main>
	<div class="tab-content" id="nav-tabContent">
		<div class="tab-pane fade show active" id="nav-portfolio" role="tabpanel" aria-labelledby="nav-portfolio-tab">
			<br>
			<div class="container-md">
				<p>&nbsp Welcome! My name is Kyle and I'm a developer from the United States. Here you will find a short portfolio of some projects that I have completed along with their descriptions. Also each project has a link to view the source code. Check out my GitHub! For more info about me, click on the About tab.</p>
  			</div>
  			<?php require 'portfolio.php'; ?>
  		</div>
  		<div class="tab-pane fade" id="nav-resume" role="tabpanel" aria-labelledby="nav-resume-tab">
  			<div class="container-md">
  				<br>
  				<embed src="../media/Kyle_Hopkins-Resume_Latest.pdf" width="100%" height="800px" />
  			</div>
  		</div>
  		<div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
  			<div class="container-md">
  				<br>
  				<div class="text-center">
  					<img src="media/kyle.jpg" alt="kyle_photo" style="width: 25%;" class="rounded border border-dark">
  				</div>
  				<br>
	  			<p>&nbsp I know every aspiring developer or computer guru says they started messing with computers when they were a little kid. Well I am no exception here, some of my earliest memories were of helping my dad who sold used computers out of our garage. I havn't decided yet if things back then were more or less complicated, but I do know that my interest in technology has never waivered. At every point in my life I have been digging into technical projects both software and hardware. Weather it was was decompiling programs to figure out how they worked, or flashing firmware to a freshly soldered Megasquirt control board, I have been and probably always will be intrigued and borderline obsessed with tech.</p>
	  			<p>&nbsp My most recient interest in particular has been in web development. Over the past year I have been digging deeper into the code that makes the web tick. The back end, being most fascinating to me, has gotten the most attention with PHP as my weapon of choice along with my rekindled love for command line computing. I've also learned a great deal about modern HTML, CSS, Javascript, and the protocals that tie the front and back ends together. With a mission for quality work, and a passsion for understanding the abstract concepts behind the text, I have decided to go all-in and make this interest my new life calling. Thanks for checking out the site and feel free to contact me!</p>
	  			<p>&nbsp&nbsp&nbsp&nbsp - Kyle</p>
	  		</div>
  		</div>
  		<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
  			<br>
  			<p>Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit</p>
  		</div>
	</div>
</main>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<?php require 'lib/footer.php'; ?>
