<?php
/**
 * This page the basic CMS for adding projects to the projects.json file
 * A file is uploaded with php function move_uploaded_file()
 * Since it's just me using it verified with password, I'm okay with it looking plain 
 * *note to self* for use by users the file needs to be verified/sanitized
 */
require 'lib/functions.php';
$hash = '$2y$10$nqJZcc82rKSEsxJtQWouyu7cPLVrgJranLagBA1u4j3jZYozEGhDe';
if (($_SERVER['REQUEST_METHOD'] == 'POST') && (isset($_POST['submited']))) {
	$new_post = array (
		'projectname' => $_POST['projectname'],
		'link' => $_POST['link'],
		'github' => $_POST['github'],
		'filename' => basename($_FILES['file_to_upload']["name"]),
		'description' => $_POST['description'],
		'techs' => $_POST['techs']
	);
	if (! password_verify($_POST['pass'], $hash)) {
		echo 'Incorrect password or submit not clicked. Not posted';
	} else {
		if (move_uploaded_file($_FILES["file_to_upload"]["tmp_name"], 'media/' . basename($_FILES['file_to_upload']["name"]))) {
			echo 'photo upload successfully' . "\n";
			} else {
				echo 'ERROR! there was a problem uploading the file';
			}
		$projects = import_projects();
		$projects[] = $new_post;
		if (export_projects($projects)) {
			echo 'Password correct! Project Posted successfully!';
		} else {
			echo 'ERROR! There was a problem saving to file. Not posted.';
		}
	}
}
?>
<h1>Add a project</h1>
<form action="add-project.php" method="POST" enctype="multipart/form-data">
<input type="password" placeholder="password" name="pass" /><br>
<input type="text" placeholder="project name" name="projectname" /><br>
<input type="text" placeholder="Link to site" name="link" /><br>
<input type="text" placeholder="github addy" name="github" /><br>
<input type="text" placeholder="Technologies used" name="techs" /><br>
<label>Photo File: <input type="file" name="file_to_upload" id="file_to_upload"></label><br>
<textarea placeholder="description" name="description"></textarea><br>
<input type="submit" name="submited" />
</form>