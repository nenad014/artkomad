<?php require_once 'inc/top.inc.php'; ?>
<?php
    if(isset($_SESSION['admin'])) {
        $items = $products->index();
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
                                     <li class="breadcrumb-item active" aria-current="page">Svi proizvodi</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-top px-3">
                                    <h3>
                                        <i class="fa fa-tasks"></i> Svi proizvodi
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Slika</th>
                                                    <th>Ime</th>
                                                    <th>Opis</th>
                                                    <th>Akcija</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach($items as $single) : ?>
                                                <tr>
                                                    <td><img src="../<?php echo $single->img1; ?>" alt="" width="60" height="90"></td>
                                                    <td><?php echo $single->title; ?></td>
                                                    <td class="text-justify"><?php echo $single->description; ?></td>
                                                    <td><a href="single-item.php?id=<?php echo $single->id; ?>" class="btn btn-info"><i class="fa fa-eye"></i></a> <a href="update-item.php?id=<?php echo $single->id; ?>" class="btn btn-warning"><i class="fas fa-edit"></i></a> <a href="remove.php?id=<?php echo $single->id; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                                                </tr>
                                            <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>

<?php require_once 'inc/bottom.inc.php'; ?>