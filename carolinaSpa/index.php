<?php
    $title = 'Home';
    include 'templates/header.php';
    include 'templates/navigation.php';
?>

    <!-- Carousel with slider images, indicators and arrow controls -->
    <div class="container">
        <div id="main-slider" class="carousel slide mt-4" data-ride="carousel">

            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>

            <!-- Elements -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <!-- Img display block and responsive -->
                    <img src="img/slide_01.jpg" class="d-block img-fluid">
                    <!-- Caption visible only for devices with display > 768px (md) -->
                    <div class="carousel-caption d-none d-md-block">
                        <!-- Transform text to uppercase letters -->
                        <h3 class="text-uppercase">Brand new facilities</h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/slide_02.jpg" class="d-block img-fluid">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="text-uppercase">Learn about our services</h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/slide_03.jpg" class="d-block img-fluid">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="text-uppercase">New website 2 for 1 in all services</h3>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="carousel-control-prev" href="#main-slider" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Prev</span>
            </a>   
            <a class="carousel-control-next" href="#main-slider" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a> 

        </div>
    </div>

    <!-- Welcome text -->
    <section class="new-website text-center py-5">
        <h2 class="text-uppercase"><span class="text-lowercase">Welcome to our new</span> website</h2>
        <p class="mt-4">Fell like new with our massages and professional <br> therapists</p>
    </section>
    
    <!-- Section images with text -->
    <div class="container pb-5">
        <div class="row">
            <div class="col-12 col-md-4 mb-4 mb-md-0">
                <div class="image-links text-center">
                    <img src="img/service_01.jpg" class="img-fluid">
                    <!-- remove the margin from rows and padding from columns with .no-gutters on the .row -->
                    <div class="row no-gutters">
                        <div class="col-8 offset-2 col-md-10 offset-md-1 image-info pt-4">
                            <h3 class="text-uppercase text-center"><span class="text-lowercase">learn more</span> about us</h3>
                            <a href="#" class="btn btn-success btn-block text-uppercase mt-4 py-3">read more</a>
                        </div>
                    </div>  
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4 mb-md-0">
                <div class="image-links text-center">
                    <img src="img/service_02.jpg" class="img-fluid">
                    <!-- remove the margin from rows and padding from columns with .no-gutters on the .row -->
                    <div class="row no-gutters">
                        <div class="col-8 offset-2 col-md-10 offset-md-1 image-info pt-4">
                            <h3 class="text-uppercase text-center"><span class="text-lowercase">about our</span> services</h3>
                            <a href="#" class="btn btn-success btn-block text-uppercase mt-4 py-3">read more</a>
                        </div>
                    </div>  
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4 mb-md-0">
                <div class="image-links text-center">
                    <img src="img/service_03.jpg" class="img-fluid">
                    <!-- remove the margin from rows and padding from columns with .no-gutters on the .row -->
                    <div class="row no-gutters">
                        <div class="col-8 offset-2 col-md-10 offset-md-1 image-info pt-4">
                            <h3 class="text-uppercase text-center"><span class="text-lowercase">visit our</span> store</h3>
                            <a href="#" class="btn btn-success btn-block text-uppercase mt-4 py-3">read more</a>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>

    <!-- Section business hours -->
    <div class="business-hours py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <?php
                        include 'templates/business_hours.php'; 
                    ?>
                </div>
                <div class="col-md-6 bg-hours d-none d-md-block">
                    
                </div>
            </div>
        </div>
    </div>

    <!-- Section products -->
    <div class="container products py-5">
        <h2 class="text-center text-uppercase"><span class="text-lowercase">checkout our</span> products</h2>
        <div class="row py-4">

            <?php

                try {
                    require_once 'inc/db.php';
                    $sql = 'SELECT `id`,`name`,`image_thumb`,`price`,`descr_short` FROM `products` LIMIT 4';
                    $result = $db->query($sql);
                } catch (Exception $e) {
                    $error = $e->getMessage();
                }

                $rows = $result->num_rows;
                if(!$rows){
                    echo "No results found";
                } else {
                    while ($products = $result->fetch_assoc()) {
            ?>  

                        <div class="col-12 col-sm-6 col-lg-3 mb-4 mb-lg-0">
                            <div class="card h-100">
                                <a href="product.php?product=<?php echo $products['id'] ?>">
                                    <img src="img/<?php echo $products['image_thumb'] ?>" class="card-img-top img-fluid">
                                    <div class="card-body">
                                        <h3 class="card-title text-center text-uppercase"><?php echo $products['name'] ?></h3>
                                        <p class="card-text text-uppercase"><?php echo $products['descr_short'] ?></p>
                                        <p class="card-text price text-center">$<?php echo $products['price'] ?></p>
                                    </div>
                                </a>
                            </div>
                        </div>

            <?php
                    }
                }
                $db->close();
            ?>
        </div>
    </div>

    <!-- Section appointment -->
    <?php
        include 'templates/appointment.php';
    ?>

<?php
    include 'templates/footer.php';
?>
