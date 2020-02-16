<?php
/**
 * contact form for lazymillennial.me
 */

if (isset($_POST['submit'])) {
	$email = 'kh09211@georgiasouthern.edu';
	$subject = '!!!! KYLEWEB.DEV: NEW MESSAGE FROM: ' . $_POST['the_name'] . ' !!!!';
	$message = $_POST['the_name'] . ' says: ' . $_POST['textbox'];
	$headers = "From: " . $_POST['email'];
	mail($email, $subject, $message, $_POST['email'], $headers);
	Header('Location: /index.php?submitted'); 
}
if (isset($_GET['submitted'])) {
	?>
	<script> alert('Submitted! You should hear back from me soon!') </script>
<?php } ?>

<div id="contact-form">
	<form action="lib/contact.php" method="POST">
		<label class="text-light mt-4" for="name"><input type="text" id="name" placeholder="Enter your name" name="the_name" required /></label>
		<br>
		<label class="text-light mt-3" for="email"><input type="email" placeholder="Enter email address" id="email" name="email" required /></label>
		<br>
		<label class="mt-3" for="textbox" required><textarea id="textbox" name="textbox" placeholder="How can I help you?"></textarea></label>
		<br>
		<button type="submit" name="submit" value="submit" class="btn btn-primary mt-3">Send!</button>
	</form>
</div>