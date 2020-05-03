<?php
$banner = $DB_connect ->prepare('SELECT * FROM banner');
$banner ->execute();
$bannercek = $banner ->fetch(PDO::FETCH_ASSOC);

?>
<div class="w3-banner-top">
    <div class="agileinfo-dot">
        <div class="w3layouts_menu">
            <nav class="cd-stretchy-nav edit-content">
                <a class="cd-nav-trigger" href="#0"> Menu <span aria-hidden="true"></span> </a>
                <ul>
                    <li><a href="#home" class="scroll"><span>Anasayfa</span></a></li>
                    <li><a href="#about" class="scroll"><span>Hakkımda</span></a></li>
                    <li><a href="#experiences" class="scroll"><span>Deneyimler</span></a></li>
                    <li><a href="#skills" class="scroll"><span>Yetenekler</span></a></li>
                    <li><a href="#projects" class="scroll"><span>Projeler</span></a></li>
                    <li><a href="#contact" class="scroll"><span>İletişim</span></a></li>
                </ul>
                <span aria-hidden="true" class="stretchy-nav-bg"></span>
            </nav>
        </div>

        <div class="w3-banner-grids">
            <div class="col-md-6 w3-banner-grid-left">
                <div class="w3-banner-img">
                    <img src="<?php echo $bannercek['banner_image']; ?>" alt="img">
                    <h3 class="test"><?php echo $bannercek['banner_isim']; ?></h3>
                    <p class="test" ><?php echo $bannercek['banner_meslek']; ?></p>
                </div>
            </div>
            <div class="col-md-6 w3-banner-grid-right">
                <div class="w3-banner-text">
                    <h3><?php echo $bannercek['banner_kariyeramaci']; ?></h3>
                    <p><?php echo $bannercek['banner_yorum'];?></p>
                </div>
                <div class=" w3-right-addres-1">
                    <ul class="address">
                        <li>
                            <ul class="agileits-address-text ">
                                <li class="agile-it-adress-left"><b>Doğum Günü</b></li>
                                <li><span>:</span><?php echo $bannercek['banner_dogumgunu']; ?></li>
                            </ul>
                        </li>
                        <li>
                            <ul class="agileits-address-text">
                                <li class="agile-it-adress-left"><b>Telefon</b></li>
                                <li><span>:</span><?php echo $bannercek['banner_telefon']; ?></li>
                            </ul>
                        </li>
                        <li>
                            <ul class="agileits-address-text">
                                <li class="agile-it-adress-left"><b>Adres</b></li>
                                <li><span>:</span><?php echo $bannercek['banner_adres']; ?></li>
                            </ul>
                        </li>
                        <li>
                            <ul class="agileits-address-text">
                                <li class="agile-it-adress-left"><b>Mail</b></li>
                                <li><span>:</span><a href="mailto:example@mail.com"> <?php echo $bannercek['banner_mail']; ?></a></li>
                            </ul>
                        </li>
                        <li>
                            <ul class="agileits-address-text">
                                <li class="agile-it-adress-left"><b>Blog</b></li>
                                <li><span>:</span><a href="<?php echo $bannercek['banner_blog']; ?>" target="_blank">abdrsun.wordpress.com</a></li>
                            </ul>
                        </li>
                    </ul>

                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="thim-click-to-bottom">
        <a href="#about" class="scroll">
            <i class="fa  fa-chevron-down"></i>
        </a>
    </div>

</div>