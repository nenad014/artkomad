<?php $title = 'ArtKomad | Proizvod'; ?>

<?php require_once 'inc/top.inc.php'; ?>
<?php require_once 'inc/navbar.inc.php'; ?>

<?php if(isset($_GET['id'])) {
    $proizvod = $products->show($_GET['id']);
}
?>

    <div class="container about">
        <div class="row">
            <div class="col-md-10 offset-md-1 col-lg-10 offset-lg-1">
                <div class="row">
                <div class="col-sm-6 col-md-5 col-lg-5">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="<?php echo $proizvod->img1; ?>" alt="<?php echo $proizvod->title; ?>" class="d-block w-100">
                        </div>
                        <?php if(file_exists($proizvod->img2)) : ?>
                        <div class="carousel-item">
                            <img src="<?php echo $proizvod->img2; ?>" alt="<?php echo $proizvod->title; ?>" class="d-block w-100">
                        </div>
                        <?php endif; ?>
                        <?php if(file_exists($proizvod->img3)) : ?>
                        <div class="carousel-item">
                            <img src="<?php echo $proizvod->img3; ?>" alt="<?php echo $proizvod->title; ?>" class="d-block w-100">
                        </div>
                        <?php endif; ?>
                        <?php if(file_exists($proizvod->img4)) : ?>
                        <div class="carousel-item">
                            <img src="<?php echo $proizvod->img4; ?>" alt="<?php echo $proizvod->title; ?>" class="d-block w-100">
                        </div>
                        <?php endif; ?>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-sm-3 col-md-3 col-lg-3">
                        <a data-target="#carouselExampleControls" data-slide-to="0" href="#" class="thumbnail">
                            <img src="<?php echo $proizvod->img1; ?>" alt="" class="img-fluid">
                        </a>
                    </div>
                    <?php if(file_exists($proizvod->img2)) : ?>
                    <div class="col-sm-3 col-md-3 col-lg-3">
                        <a data-target="#carouselExampleControls" data-slide-to="0" href="#" class="thumbnail">
                            <img src="<?php echo $proizvod->img2; ?>" alt="" class="img-fluid">
                        </a>
                    </div>
                    <?php endif; ?>
                    <?php if($proizvod->img3 != NULL) : ?>
                    <div class="col-sm-3 col-md-3 col-lg-3">
                        <a data-target="#carouselExampleControls" data-slide-to="0" href="#" class="thumbnail">
                            <img src="<?php echo $proizvod->img3; ?>" alt="" class="img-fluid">
                        </a>
                    </div>
                    <?php endif; ?>
                    <?php if($proizvod->img4 != NULL) : ?>
                    <div class="col-sm-3 col-md-3 col-lg-3">
                        <a data-target="#carouselExampleControls" data-slide-to="0" href="#" class="thumbnail">
                            <img src="<?php echo $proizvod->img4; ?>" alt="" class="img-fluid">
                        </a>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-sm-6 col-md-7 col-lg-7">
                <div class="container pl-5">
                    <h1 class="text-center"><?php echo strtoupper($proizvod->title); ?></h1>
                    <div id="accordion">
                        <div class="card">
                            <div class="card-header">
                                <a class="card-link" data-toggle="collapse" href="#description"><strong>Opis</strong></a>
                            </div>
                            <div class="collapse show" id="description" data-target="#accordion">
                                <div class="card-body">
                                    <?php echo $proizvod->description; ?>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#dimensions"><strong>Dimenzije:</strong></a>
                            </div>
                            <div class="collapse" id="dimensions" data-parent="#accordion">
                                <div class="card-body">
                                    <p><?php echo $proizvod->dimensions; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#characteristics"><strong>Karakteristike:</strong></a>
                            </div>
                            <div class="collapse" id="characteristics" data-parent="#accordion">
                                <div class="card-body">
                                    <p><?php echo $proizvod->characteristics; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <button type="button" class="btn btn-outline-brown" title="Kontakt" data-toggle="modal" data-target="#myModal">
                    Kontaktirajte nas
                    </button>
                    <div class="modal" id="myModal">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title text-center">Za više informacija i cenu pošaljite nam upit!</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <form action="upit.php" method="POST">
                                        <input type="hidden" name="naslov" value="<?php echo $proizvod->title; ?>">
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="ime" placeholder="Vaše ime" required>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="email" name="email" placeholder="Vaša e-mail adresa" required>
                                        </div>
                                        <div class="form-group">
                                            <textarea name="poruka" class="form-control" cols="10" rows="5" placeholder="Vaša poruka"></textarea>
                                        </div>
                                        <button type="submit" class="form-control btn btn-warning" name="sendBtn">Pošalji</button>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
                </div>
            
            </div>
            
        </div>
    </div>

<?php require_once 'inc/bottom.inc.php'; ?>