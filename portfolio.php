<?php
/**
 * Portfolio page of kyleweb.dev
 * uses projects.json in a loop to display project data
 */
require 'lib/functions.php';
$projects = array_reverse(import_projects());
?>
<div class="container-md">
	<div class="row">
	<?php foreach ($projects as $project) { ?>
		<div class="col-md-4">
			<div class="rounded text-center mt-4 fulllength">
				<h3><b><?php echo $project['projectname']; ?></b></h3>
				<a href="<?php echo $project['link']; ?>" target="_blank">
				<img class="img-fluid border-bottom" src="media/<?php echo $project['filename']; ?>" alt="screenshot photo" />
				<br><br>
				<p>
				Link</a> to view website<br>
				Check out the code at my <a href="<?php echo $project['github']; ?>" target="_blank">GitHub</a><br>
				Technologies Used: <i><?php echo $project['techs']?></i><br><hr>
				<div class="desc"><i><?php echo $project['description']; ?></i></div>
				</p>
			</div>
		</div>
	<?php } ?>
	</div>
</div>