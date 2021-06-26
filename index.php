<?php
    $title = 'ArtKomad - Bajkovito  drugačije  kreativno';
    $metaDescription = "ArtKomad Valjevo unikatan rucno radjen namestaj. Obrada drveta i stvaranje originalnih i specificnih komada namestaja.";
    $metaKeywords = "artkomad, rad sa drvetom, vitrine, komode, police, ogledala, Valjevo najbolja garnitura, valjevo komode, valjevo police, valjevo ogledala, valjevo artkomad, namestaj valjevo";

?>

<?php require_once 'inc/top.inc.php'; ?>
<?php require_once 'inc/navbar.inc.php'; ?>

<?php $kategorije = $category->index(); ?>

<section id="banner-area">
    <div class="owl-carousel owl-theme">
        <div class="item">
            <img src="assets/images/slider-1.jpg" alt="Banner1">
        </div>
        <div class="item">
            <img src="assets/images/slider-2.jpg" alt="Banner2">
        </div>
        <div class="item">
            <img src="assets/images/slider-3.jpg" alt="Banner3">
        </div>
    </div>
</section>
    <!-- Decoration -->
    <div id="decoration-top" class="py-4">
        <img src="assets/images/decoration.png" class="mx-auto d-block">
    </div>
    <!-- About -->
    <div id="about" class="py-1">
        <div class="container text-center">
            <p>ArtKomad je mala preduzetnička radionica koja je nastala iz hobija koji sam započeo iz ljubavi prema obradi drveta i ispoljavanju sopstvene kreativnosti kroz stvaranje originalnih i specifičnih komada nameštaja.</p>
            <a href="proizvodi.php" class="btn btn-outline-brown" title="Proizvodi">Pogledajte proizvode</a>
        </div>
    </div>
    <!-- Decoration -->
    <div id="decoration-bottom" class="py-2">
        <img src="assets/images/decoration.png" class="mx-auto d-block">
    </div>

    <!-- Latest products -->
    <div id="products" class="container-fluid py-3">
        <div class="container">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <img src="assets/images/emilija_1web.jpg" class="img-fluid">
                </div>
                <div class="item">
                    <img src="assets/images/kraljica_1web.jpg" class="img-fluid">
                </div>
                <div class="item">
                    <img src="assets/images/daleki_japan_1web.jpg" class="img-fluid">
                </div>
                <div class="item">
                    <img src="assets/images/ogledalo_sa_komodom_1web.jpg" class="img-fluid">
                </div>
                <div class="item">
                    <img src="assets/images/perun_1web.jpg" class="img-fluid">
                </div>
                <div class="item">
                    <img src="assets/images/vivaldi_2web.jpg" class="img-fluid">
                </div>
                <div class="item">
                    <img src="assets/images/baron_1web.jpg" class="img-fluid">
                </div>
                <div class="item">
                    <img src="assets/images/renesansa_2web.jpg" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

<?php require_once 'inc/bottom.inc.php'; ?>