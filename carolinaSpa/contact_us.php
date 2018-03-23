<?php
	$title = 'Contact us';
	// Section header
    include 'templates/header.php';
    // Section navigation
    include 'templates/navigation.php';
?>

<div class="container pt-4">
	<div class="row no-gutters">
		<div class="col-12 hero">
			<img src="img/contact_us.jpg" class="img-fluid">
			<h2 class="text-uppercase d-none d-md-block">contact us</h2>
		</div>
	</div>
</div>

<div class="container py-4">
	<div class="row">
		<main class="col-12 col-md-10 offset-md-1 main-content">
			<h2 class="text-uppercase d-block d-md-none">contact us</h2>

			<form id="contact_form" action="send.php" method="post" class="p-5 mt-5 contact-form">
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" name="name" class="form-control" placeholder="Your name" id="name">
					<div class="invalid-feedback">Name not valid</div>
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" name="email" class="form-control" placeholder="Your name" id="email">
					<div class="invalid-feedback">E-mail not valid</div>
				</div>
				<div class="form-group">
					<label for="message">Message</label>
					<textarea class="form-control" id="message" name="message" rows="6"></textarea>
					<div class="invalid-feedback">Message not valid</div>
				</div>
				<input type="submit" class="btn btn-primary text-uppercase" name="submit" value="Submit"></input>
				<div id="output" class="alert alert-success mt-3 d-none"></div>
			</form>
		</main>
	</div>	
</div>

<?php
	// Section footer
    include 'templates/footer.php';
?>