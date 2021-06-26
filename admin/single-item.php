<?php require_once 'inc/top.inc.php'; ?>
<?php
    if(isset($_SESSION['admin'])) {
        if(isset($_GET['id'])) {
            $item = $products->show($_GET['id']);
        }
    } else {
        header('Location: index.php');
    }
?>
<?php require_once 'inc/sidebar.inc.php'; ?>

<!-- Page Content  -->
<div id="content">

<?php require_once 'inc/navbar.inc.php'; ?>
            <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 py-2">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="dash.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Ažuriraj proizvod</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-top">
                                    <h3>
                                        <i class="fa fa-pencil"></i> Vidi proizvod
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <div class="container py-5">
                                        <div class="row">
                                            <div class="col-lg-10 offset-lg-1">
                                                <h1><?php echo $item->title; ?></h1>
                                                <div class="row">
                                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                                        <img src="../<?php echo $item->img1; ?>" alt="" class="img-fluid">
                                                    </div>
                                                    <?php if(file_exists($item->img2)) : ?>
                                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                                        <img src="../<?php echo $item->img2; ?>" alt="" class="img-fluid">
                                                    </div>
                                                    <?php endif; ?>
                                                    <?php if($item->img3 != NULL) : ?>
                                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                                        <img src="../<?php echo $item->img3; ?>" alt="" class="img-fluid">
                                                    </div>
                                                    <?php endif; ?>
                                                    <?php if($item->img4 != NULL) : ?>
                                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                                        <img src="../<?php echo $item->img4; ?>" alt="" class="img-fluid">
                                                    </div>
                                                    <?php endif; ?>
                                                </div>
                                                <p class="text-justify"><?php echo $item->description; ?></p>
                                                <br>
                                                <label for="dimensions"><strong>Dimenzije:</strong></label>
                                                <p class="text-justify"><?php echo $item->dimensions; ?></p>
                                                <br>
                                                <label for="characteristics"><strong>Karakteristike:</strong></label>
                                                <p class="text-justify"><?php echo $item->characteristics; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
    <script>
        // Replace the <textarea id="editor1"> with a CKEditor 4
        // instance, using default configuration.
        CKEDITOR.replace( 'description' );
    </script>

<?php require_once 'inc/bottom.inc.php'; ?>