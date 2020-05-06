<?php
        $contact = $DB_connect ->prepare("SELECT * FROM iletisim");
        $contact ->execute();
        $contactadd = $contact
?>

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
                        <footer class="w3-container w3-center w3-margin-top">

                            <a href="<?php echo $ayarcek['sosyal_twitter']; ?>" target="_blank"><i class="fa fa-twitter w3-hover-opacity"></i></a>
                            <a href="<?php echo $ayarcek['sosyal_linkedin']; ?>" target="_blank"><i class="fa fa-linkedin w3-hover-opacity"></i></a>

                       </footer>
                <div class="clearfix"> </div>
            </form>
        </div>

    </div>
</div>
