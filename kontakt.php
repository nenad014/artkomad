<?php
    $title = 'Kontakt | ArtKomad';
    $metaDescription = "ArtKomad namestaj. Kontakt adresa Brace Nedica 32d Valjevo, telefon 0652680752";
?>

<?php require_once 'inc/top.inc.php'; ?>
<?php require_once 'inc/navbar.inc.php'; ?>
    <div class="container contact">
        <h1 class="text-center">KONTAKT</h1>
        <div id="decoration-top" class="py-4">
            <img src="assets/images/decoration.png" class="mx-auto d-block">
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-5 col-lg-5">
                <h3>Kontakt podaci</h3>
                <p><strong>Adresa:</strong> Braće Nedića 32d, Valjevo</p>
                <p><strong>Telefon:</strong> 065/26-80-752</p>
                <p><strong>Email: </strong> <a href="mailto:artkomad@yahoo.com">artkomad@yahoo.com</a></p>
            </div>
            <div class="col-sm-12 col-md-7 col-lg-7">
                <h3>Pošaljite poruku</h3>
                <form action="contact.php" method="POST">
                    <div class="form-group">
                        <label for="name">Ime</label>
                        <input type="text" name="name" class="form-control" placeholder="Unesite Vaše ime" required>
                    </div>
                    <div class="form-group">
                        <label for="title">Naslov</label>
                        <input type="text" name="title" class="form-control" placeholder="Unesite naslov poruke" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Unesite Vaš email" required>    
                    </div>
                    <div class="form-group">
                        <label for="message">Poruka</label>
                        <textarea class="form-control" name="message" id="" cols="30" rows="10" placeholder="Vaša poruka" required></textarea>
                    </div>  
                    <button class="btn btn-dark" type="submit" name="sendMsgBtn" title="Pošalji">Pošaljite poruku</button>
                </form>
            </div>
        </div>
    </div>

<?php require_once 'inc/bottom.inc.php'; ?>