<?php
	$title = 'Products';
	// Section header
    include 'templates/header.php';
    // Section navigation
    include 'templates/navigation.php';
?>

<div class="container pt-4">
	<div class="row no-gutters">
		<div class="col-12 hero">
			<img src="img/store.jpg" class="img-fluid">
			<h2 class="text-uppercase d-none d-md-block">products</h2>
		</div>
	</div>
</div>

<div class="container py-4">
	<div class="row">
		<main class="col-lg-12 main-content">
			<h2 class="text-uppercase d-block d-md-none">products</h2>
            <div class="row products">

                <?php

                    try {
                        require_once 'inc/db.php';
                        $sql = 'SELECT `id`,`name`,`image_thumb`,`price`,`descr_short` FROM `products`';
                        $result = $db->query($sql);
                        $rows = $result->num_rows;
                    } catch (Exception $e) {
                        $error = $e->getMessage();
                    }

                    if(!$rows){
                        echo "No results found";
                    } else {
                        while ($products = $result->fetch_assoc()) {
                ?>  

                            <div class="col-12 col-sm-6 col-lg-3 mb-4">
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
		</main>
	</div>	
</div>

<?php
	// Section footer
    include 'templates/footer.php';
?>