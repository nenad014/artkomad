<?php require_once 'inc/top.inc.php'; ?>
<?php
    if(isset($_SESSION['admin'])) {
        if(isset($_GET['id'])) {
            $item = $products->show($_GET['id']);
        }
        $kategorije = $category->index();
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
                                        <i class="fa fa-pencil"></i> Ažuriraj proizvod
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <form action="update.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Naziv</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="title" id="text-input" name="title" value="<?php echo $item->title; ?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="textarea-input" class=" form-control-label">Detalji</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <textarea name="description" id="textarea-input" rows="9" class="form-control"><?php echo $item->description; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="file-input" class=" form-control-label">Naslovna slika</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="file" id="file-input" name="img[]" class="form-control-file">
                                                <br>
                                                <img src="../<?php echo $item->img1; ?>" alt="" width="120" height="180" class="img-thumbnail">
                                                <input type="hidden" name="img1" value="<?php echo str_replace('assets/images/', '', $item->img1); ?>">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="file-input" class=" form-control-label">Slika 2</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="file" id="file-input" name="img[]" class="form-control-file">
                                                <br>
                                                <img src="../<?php echo $item->img2; ?>" alt="" width="120" height="180" class="img-thumbnail">
                                                <input type="hidden" name="img2" value="<?php echo str_replace('assets/images/', '', $item->img2); ?>">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="file-input" class=" form-control-label">Slika 3</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="file" id="file-input" name="img[]" class="form-control-file">
                                                <br>
                                                <?php if($item->img3 != NULL) : ?>
                                                <img src="../<?php echo $item->img3; ?>" alt="" width="120" height="180" class="img-thumbnail">
                                                <input type="hidden" name="img3" value="<?php echo str_replace('assets/images/', '', $item->img3); ?>">
                                                <?php else : ?>
                                                <input type="hidden" name="img3" value="<?php echo str_replace('assets/images/', '', $item->img3); ?>">
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="file-input" class=" form-control-label">Slika 4</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="file" id="file-input" name="img[]" class="form-control-file">
                                                <br>
                                                <?php if($item->img4 != NULL) : ?>
                                                <img src="../<?php echo $item->img4; ?>" alt="" width="120" height="180" class="img-thumbnail">
                                                <input type="hidden" name="img4" value="<?php echo str_replace('assets/images/', '', $item->img4); ?>">
                                                <?php else : ?>
                                                <input type="hidden" name="img4" value="<?php echo str_replace('assets/images/', '', $item->img4); ?>">
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="select" class=" form-control-label">Kategorija</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <select name="cat_id" id="select" class="form-control">
                                                    <option value="<?php echo $item->cat_id; ?>"><?php echo $item->cat_name; ?></option>
                                                    <?php foreach($kategorije as $cat) : ?>
                                                    <option value="<?php echo $cat->cat_id; ?>"><?php echo $cat->cat_name; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <input type="hidden" name="item_id" value="<?php echo $item->id; ?>">
                                        <input type="submit" class="btn btn-success" name="updateItemBtn" value="Ažuriraj">
                                    </form>
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