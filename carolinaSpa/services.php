<?php
	$title = 'Services';
	// Section header
    include 'templates/header.php';
    // Section navigation
    include 'templates/navigation.php';
?>

<div class="container pt-4">
	<div class="row no-gutters">
		<div class="col-12 hero">
			<img src="img/services.jpg" class="img-fluid">
			<h2 class="text-uppercase d-none d-md-block">services</h2>
		</div>
	</div>
</div>

<div class="container py-4">
	<div class="row">
		<main class="col-lg-8 main-content">
			<h2 class="text-uppercase d-block d-md-none">services</h2>
			<!-- Tabs with accordion -->
            <div id="services" role="tablist" aria-multiselectable="true">
                <div class="card">
                    <div class="card-header" role="tab" id="heading1">
                        <a data-toggle="collapse" href="#service1" aria-expanded="true" aria-controls="service1">
                        	Service 1
                        </a>
                    </div>
                    <div id="service1" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#services">
                        <div class="card-body">
                            Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" role="tab" id="heading2">
                        <a data-toggle="collapse" href="#service2" aria-expanded="true" aria-controls="service2">
                        	Service 2
                        </a>
                    </div>
                    <div id="service2" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#services">
                        <div class="card-body">
                            Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" role="tab" id="heading3">
                        <a data-toggle="collapse" href="#service3" aria-expanded="true" aria-controls="service3">
                        	Service 3
                        </a>
                    </div>
                    <div id="service3" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#services">
                        <div class="card-body">
                            Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </div>
                    </div>
                </div>
            </div> 
		</main>
        <!-- Sidebar discount -->
        <aside class="discount col-lg-4 pt-4 pt-lg-0">
        	<div class="p-3">
        		<h3 class="text-uppercase text-center mt-4">first time costumers</h3>
        		<p class="lead text-center mt-4">Get 20% Off in any service, with this coupon:</p>
        		<div class="coupon p-1">
        			<p class="text-center text-uppercase">
        				<span class="display-4 d-block">20% off</span>
        				in any service
        			</p>
        		</div>
        	</div>
        </aside>
	</div>	
</div>

<?php
	// Section appointment
	include 'templates/appointment.php';
	// Section footer
    include 'templates/footer.php';
?>