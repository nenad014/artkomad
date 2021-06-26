<?php
    $title = 'Kategorija | ArtKomad';
    $metaDescription = "Najbolji proizvodi na trzistu uradjeni po vasem ukusi i meri.";
    $metaKeywords = "beli socic, beli bronzani stocic, okrugli sotcic, najbolji stocici valjevo, umetnicki stocic,vitrina sa fiokoama,oslikana zelena vitrina,valjevo najlepsa zelena vitrina, najbolji radovi od drveta,artkomad, rad sa drvetom, vitrine, komode, police, ogledala, valjevo najbolja garnitura, valjevo komode, valjevo police, valjevo ogledala, valjevo artkomad";
?>

<?php require_once 'inc/top.inc.php'; ?>
<?php require_once 'inc/navbar.inc.php'; ?>

<?php
if(isset($_GET['cat_id'])) {
    $kategorija = $category->show($_GET['cat_id']);
    $proizvodi = $products->getProductsByCategory($_GET['cat_id']);
}
?>

    <div class="container about">
        <h1 class="text-center"><?php echo $kategorija->cat_name; ?></h1>
        <div id="decoration-top" class="py-4">
            <img src="assets/images/decoration.png" class="mx-auto d-block">
        </div>
        <div class="row">
            <?php foreach($proizvodi as $single) : ?>
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="product-grid6">
                    <div class="product-image6">
                        <a href="proizvod.php?id=<?php echo $single->id; ?>">
                            <img class="pic-1" src="<?php echo $single->img1; ?>">
                        </a>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="proizvod.php?id=<?php echo $single->id; ?>"><?php echo $single->title; ?></a></h3>
                    </div>
                </div> 
                <br>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

<?php require_once 'inc/bottom.inc.php'; ?>