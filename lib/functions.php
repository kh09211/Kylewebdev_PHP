<?php
/**
 * functions.php file for kylweb.dev portfolio.php page
 */
function import_projects() {
	// Import projects json file and return var
	$projects = json_decode(file_get_contents('lib/projects.json'), TRUE);

	return $projects;
}

function export_projects($projects) {
	// Export projects variable back into the json file
	$projects = json_encode($projects, JSON_PRETTY_PRINT);
	file_put_contents('lib/projects.json', $projects);

	return true;
}

function is_git_private($link) {
	//Checks to see if the github is private or public
	if (strtolower($link) == 'private') {
		return true;
	}

	return false;
}