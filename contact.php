
<div class="contact" id="contact">
    <div class="container">
        <div class="w3ls-heading">
            <h3>İletişim</h3>
        </div>
        <div class="contact-w3ls">
            <form action="#" method="post">

                <div class="col-md-7 col-sm-7 contact-left agileits-w3layouts">
                    <input type="text" name="First Name" placeholder="Ad" required="">
                    <input type="text" name="Last Name" placeholder="Soyad" required="">
                    <input type="email"  class="email" name="Email" placeholder="Email" required="">

                </div>

                <div class="col-md-5 col-sm-5 contact-right agileits-w3layouts">
                    <textarea name="Message" placeholder="Mesaj" required=""></textarea>
                    <input type="submit" value="Gönder">
                </div>

            </form>


            <?php
            if (isset($_POST['Ad'], $_POST['Soyad'], $_POST['Email'], $_POST['Mesaj'])) {

                $Ad = trim(filter_input(INPUT_POST, 'Ad', FILTER_SANITIZE_STRING));
                $Soyad = trim(filter_input(INPUT_POST, 'Soyad', FILTER_SANITIZE_STRING));
                $Email = trim(filter_input(INPUT_POST, 'Email', FILTER_SANITIZE_EMAIL));
                $Mesaj = trim(filter_input(INPUT_POST, 'Mesaj', FILTER_SANITIZE_STRING));

                if (empty($Ad) || empty($Soyad) || empty($Email) || empty($Mesaj)) {
                    die("<p>Lütfen formu eksiksiz doldurun!</p>");
                }

                if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
                    die("<p>Lütfen geçerli bir e-posta adresin girin!</p>");
                }


                try {

                    $sorgu = $DB_connect->prepare("INSERT INTO iletisim (iletisim_ad, iletisim_soyad, iletisim_mail, iletisim_mesaj) VALUES($Ad, $Soyad, $Email,$Mesaj)");
                    $sorgu->bindParam(1, $Ad, PDO::PARAM_STR);
                    $sorgu->bindParam(2, $Soyad, PDO::PARAM_STR);
                    $sorgu->bindParam(3, $Email, PDO::PARAM_STR);
                    $sorgu->bindParam(4, $Mesaj, PDO::PARAM_STR);

                    $sorgu->execute();

                    echo "<p>Bilgiler başarılı bir şekilde kaydedildi.</p>";

                } catch (PDOException $e) {
                    die($e->getMessage());
                }
            }

            ?>
                        <footer class="w3-container w3-center w3-margin-top">

                            <a href="<?php echo $ayarcek['sosyal_twitter']; ?>" target="_blank"><i class="fa fa-twitter w3-hover-opacity"></i></a>
                            <a href="<?php echo $ayarcek['sosyal_linkedin']; ?>" target="_blank"><i class="fa fa-linkedin w3-hover-opacity"></i></a>
                            <a href="<?php echo $ayarcek['sosyal_github']; ?>" target="_blank"><i class="fa fa-github w3-hover-opacity"></i></a>
                       </footer>

                <div class="clearfix"> </div>



        </div>

    </div>
</div>
