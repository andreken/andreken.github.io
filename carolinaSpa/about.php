<?php
	$title = 'About Us';
    include 'templates/header.php';
    include 'templates/navigation.php';
?>

<div class="container pt-4">
	<div class="row no-gutters">
		<div class="col-12 hero">
			<img src="img/about_us.jpg" class="img-fluid">
			<h2 class="text-uppercase d-none d-md-block">about us</h2>
		</div>
	</div>
</div>

<div class="container py-4">
	<div class="row">
		<main class="col-lg-8 main-content">
			<h2 class="text-uppercase d-block d-md-none">about us</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

			<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem.</p>
			
			<div class="gallery">
				<h2 class="text-uppercase text-center p-4">
					<span class="text-lowercase">Checkout our</span>facilities
				</h2>
				<a href="#" class="p-1" data-target="#image_1" data-toggle="modal">
					<img src="img/gallery_thumb_01.jpg" class="rounded">
				</a>
				<a href="#" class="p-1" data-target="#image_2" data-toggle="modal">
					<img src="img/gallery_thumb_02.jpg" class="rounded">
				</a>
				<a href="#" class="p-1" data-target="#image_3" data-toggle="modal">
					<img src="img/gallery_thumb_03.jpg" class="rounded">
				</a>

				<div id="image_1" class="modal fade" role="dialog" tabindex="-1" aria-labelledby="modal" aria-hidden="true">
					<div class="modal-dialog modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-body">
								<img src="img/gallery_large_01.jpg" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
				<div id="image_2" class="modal fade" role="dialog" tabindex="-1" aria-labelledby="modal" aria-hidden="true">
					<div class="modal-dialog modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-body">
								<img src="img/gallery_large_02.jpg" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
				<div id="image_3" class="modal fade" role="dialog" tabindex="-1" aria-labelledby="modal" aria-hidden="true">
					<div class="modal-dialog modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-body">
								<img src="img/gallery_large_03.jpg" class="img-fluid">
							</div>
						</div>
					</div>
				</div>

			</div>
		</main>
		<aside class="col-lg-4 pt-4 pt-lg-0">
			<div class="sidebar hours p-3">
				<?php
	                include 'templates/business_hours.php'; 
	            ?>
			</div>
		</aside>
	</div>
</div>

<?php
    include 'templates/footer.php';
?>