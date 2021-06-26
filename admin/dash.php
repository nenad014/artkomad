<?php require_once 'inc/top.inc.php'; ?>
<?php
    if(!isset($_SESSION['admin'])) {
        header('Location: index.php');
        exit;
    } else {
        $kategorije = $category->index();
        $proizvodi = $products->index();
    }
?>
<?php require_once 'inc/sidebar.inc.php'; ?>

        <!-- Page Content  -->
        <div id="content">

<?php require_once 'inc/navbar.inc.php'; ?>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="card bg-primary text-white">
                                    <div class="card-body">
                                        <h2 class="card-title text-center"><i class="fas fa-ad"></i></h2>
                                        <p class="card-text text-center">Proizvoda: <?php echo count($proizvodi); ?></p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="products.php" class="btn btn-outline-light text-dark stretched-link">Vidi</a>
                                    </div> 
                                </div><br>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="card bg-yellow">
                                    <div class="card-body">
                                        <h2 class="card-title text-center"><i class="fa fa-tags" aria-hidden="true"></i></h2>
                                        <p class="card-text text-center">Kategorije proizvoda: <?php echo count($kategorije); ?></p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="category.php" class="btn btn-outline-light text-dark stretched-link">Vidi</a>
                                    </div>
                                </div><br>
                            </div>
                        </div>
        </div>
    </div>

<?php require_once 'inc/bottom.inc.php'; ?>