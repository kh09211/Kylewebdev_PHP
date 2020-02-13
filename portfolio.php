<?php
/**
 * Portfolio page of kyleweb.dev
 * uses projects.json in a loop to display project data
 */
require 'lib/functions.php';
$projects = array_reverse(import_projects());
foreach ($projects as $project) {
	?>
	<div class="container-md text-center">
		<h2><?php echo $project['projectname']; ?><h2>
	</div>
<?php } ?>