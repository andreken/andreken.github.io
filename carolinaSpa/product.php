<?php
	// Take variable value when the product is clicked
	$id = $_GET['product'];
	// Check if the variable is a number
	if(filter_var($id,FILTER_VALIDATE_INT) === false){
		die("No valid ID");
	}
    try {
        require_once 'inc/db.php';
        $sql = 'SELECT `name`,`image_full`,`price`,`descr_short`,`descr_long` FROM `products` WHERE id='.$id;
        $result = $db->query($sql);
    } catch (Exception $e) {
        $error = $e->getMessage();
    }

    $rows = $result->num_rows;
    if(!$rows){
        echo "No results found";
    } else {
        while ($product = $result->fetch_assoc()) {

			$title = $product['name'];
			// Section header
		    include 'templates/header.php';
		    // Section navigation
		    include 'templates/navigation.php';
?>

<div class="container pt-4">
	<div class="row no-gutters">
		<div class="col-12 hero">
			<img src="img/<?php echo $product['image_full'] ?>" class="img-fluid">
			<h2 class="text-uppercase d-none d-md-block"><?php echo $product['name'] ?></h2>
		</div>
	</div>
</div>

<div class="container py-4">
	<div class="row">

		<main class="col-lg-8 main-content">
			<h2 class="text-uppercase d-block d-md-none"><?php echo $product['name'] ?></h2>
            <?php echo $product['descr_long'] ?>
		</main>
        <!-- Sidebar price -->
        <aside class="discount col-lg-4 pt-4 pt-lg-0">
            <h3 class="text-uppercase text-center mt-5">Description</h3>
            <p class="text-center lead px-3 py-2"><?php echo $product['descr_short'] ?></p>

            <h3 class="text-uppercase text-center mt-2">Price</h3>
            <p class="text-center lead p-3 price display-4">$<?php echo $product['price'] ?></p>
        </aside>
	</div>	
</div>

<?php
        }
    }
    $db->close();
	// Section footer
    include 'templates/footer.php';
?>