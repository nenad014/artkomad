<?php
    $title = 'Proizvodi | ArtKomad';
    $metaDescription = "Najbolji proizvodi na trzistu uradjeni po vasem ukusi i meri.";
    $metaKeywords = "beli socic, beli bronzani stocic, okrugli sotcic, najbolji stocici valjevo, umetnicki stocic, vitrina sa fiokoama, oslikana zelena vitrina,valjevo najlepsa zelena vitrina, najbolji radovi od drveta,artkomad, rad sa drvetom, vitrine, komode, police, ogledala, valjevo najbolja garnitura, valjevo komode, valjevo police, valjevo ogledala, valjevo artkomad";
?>

<?php require_once 'inc/top.inc.php'; ?>
<?php require_once 'inc/navbar.inc.php'; ?>

<?php
    $proizvodi = $products->index();
    $kategorije = $category->index();
?>

    <div class="container about">
        <h1 class="text-center">PROIZVODI</h1>
        <div id="decoration-top" class="py-4">
            <img src="assets/images/decoration.png" class="mx-auto d-block">
        </div>
        <div class="row">
            <?php foreach($kategorije as $single) : ?>
            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="product-grid6">
                    <div class="product-image6">
                        <a href="kategorija.php?cat_id=<?php echo $single->cat_id; ?>">
                            <img class="pic-1" src="<?php echo $single->cat_img; ?>">
                        </a>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="kategorija.php?cat_id=<?php echo $single->cat_id; ?>"><?php echo $single->cat_name; ?></a></h3>
                    </div>
                </div> 
            <br>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

<?php require_once 'inc/bottom.inc.php'; ?>