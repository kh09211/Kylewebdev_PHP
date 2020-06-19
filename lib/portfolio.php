<?php
/**
 * Portfolio page of kyleweb.dev
 * uses projects.json in a loop to display project data
 */
require 'lib/functions.php';
$projects = array_reverse(import_projects());
?>
<div class="container-md">
	<div class="row justify-content-center">
	<?php foreach ($projects as $project) { ?>
		<div class="col-md-6">
			<div class="rounded text-center mt-4 fulllength">

				<a href="<?php echo $project['link']; ?>" target="_blank">
				<img class="img-fluid border-bottom" src="media/<?php echo $project['filename']; ?>" alt="screenshot photo" />
				<br><br>
				<h3><b><?php echo $project['projectname']; ?></b></h3>
				<p>
				Link</a> to view website<br>
				<?php if (is_git_private($project['github'])) {
					echo 'GitHub repository is currently private<br>';
				} else { ?>
				Check out the code at my <a href="<?php echo $project['github']; ?>" target="_blank">GitHub</a><br>
				<?php } ?>
				Technologies Used: <i><?php echo $project['techs']?></i><br><hr>
				<div class="desc"><i><?php echo $project['description']; ?></i></div>
				</p>
			</div>
		</div>
	<?php } ?>
	</div>
	<div class="row justify-content-center align-items-center d-flex pt-5">
	    <div><img class="rounded-circle mr-1" src="media/kyle_square.jpg" alt="kyle photo" style="height: 85px"></div>
	    <form action="#contact">
	    	<button class="btn btn-outline-dark ml-1" type="submit" style="font-size:16px;">Hire Kyle</button>
	    </form>
	</div>
</div>