<?php require_once 'inc/top.inc.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <form class="box" action="adminLog.php" method="POST">
                    <h1>ARTKOMAD ADMIN</h1>
                    <p class="text-muted"> Unesi admin email i lozinku</p>
                    <input type="email" name="email" placeholder="Email">
                    <input type="password" name="password" placeholder="Lozinka">
                    <input type="submit" name="adminLogBtn" value="PRIJAVA">
                </form>
            </div>
        </div>
    </div>
</div>
<?php require_once 'inc/bottom.inc.php'; ?>