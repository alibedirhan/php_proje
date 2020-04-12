<?php
?>

<!-- banner -->
<div class="w3-banner-top" id="home">
    <div class="agileinfo-dot">
        <div class="w3layouts_menu">
            <nav class="cd-stretchy-nav edit-content">
                <a class="cd-nav-trigger" href="#0"> Menu <span aria-hidden="true"></span> </a>
                <ul>
                    <li><a href="#home" class="scroll"><span>Anasayfa</span></a></li>
                    <li><a href="#about" class="scroll"><span>Hakkımda</span></a></li>
                    <li><a href="#experiences" class="scroll"><span>Deneyim</span></a></li>
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
                    <img src="<?php echo ArrayHelper::getData($settings, 'logo')?>" alt="img">
                    <h3 class="test"><?php echo ArrayHelper::getData($settings, 'name')?></h3>
                    <p class="test" ><?php echo ArrayHelper::getData($settings, 'job')?></p>
                </div>
            </div>
            <div class="col-md-6 w3-banner-grid-right">
                <div class="w3-banner-text">
                    <h3><?php echo ArrayHelper::getData($settings, 'head')?>Kariyer Amaçlarım</h3>
                    <p><?php echo ArrayHelper::getData($settings, 'comment')?>Hayatıma yön veren temel duygu merak duygusuydu, benim gözümde insanlığın en temel ihtiyaçlarından bir tanesi, merak etmeden hayatımızı şekillendiremeyiz, bu duygu olmadan aynı günü defalarca üst üste yaşarız...
                        Bunun sayesinde sürekli gelişmekte ve güncellenmekteyim. Günümüz toplumlarında bilginin insana güç katacağı rivayet edilir, bence bu eksik ve tek başına bir işe yaramaz, güç; bilgi, hakikat ve vizyon ile sağlanır.</p>
                </div>
                <div class=" w3-right-addres-1">
                    <ul class="address">
                        <li>
                            <ul class="agileits-address-text ">
                                <li class="agile-it-adress-left"><b>Doğum Günü</b></li>
                                <li><span>:</span>27-06-1993</li>
                            </ul>
                        </li>
                        <li>
                            <ul class="agileits-address-text">
                                <li class="agile-it-adress-left"><b>Telefon</b></li>
                                <li><span>:</span>(+90) 534 088 45 63</li>
                            </ul>
                        </li>
                        <li>
                            <ul class="agileits-address-text">
                                <li class="agile-it-adress-left"><b>Adres</b></li>
                                <li><span>:</span>06190 Ankara Türkiye</li>
                            </ul>
                        </li>
                        <li>
                            <ul class="agileits-address-text">
                                <li class="agile-it-adress-left"><b>E-mail</b></li>
                                <li><span>:</span><a href="mailto:example@mail.com"> alibedirhan.d@gmail.com</a></li>
                            </ul>
                        </li>
                        <li>
                            <ul class="agileits-address-text">
                                <li class="agile-it-adress-left"><b>Blog</b></li>
                                <li><span>:</span><a href="#">www.abdrsun.wordpress.com</a></li>
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
<!-- banner -->
