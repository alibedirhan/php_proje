<?php
?>

<div class="main-content">
    <!-- gallery -->
    <div class="gallery" id="projects">
        <div class="w3-gallery-head">
            <h3>Projelerim</h3>
        </div>

        <div class="container">
            <div class="gallery_gds">
                    <ul class="simplefilter ">
                        <?php
                            $projeler = $DB_connect ->prepare("SELECT * FROM galeri ORDER BY proje_id DESC");
                            $projeler ->execute();
                            $projecek = $projeler ->fetchAll(PDO::FETCH_ASSOC);
                        ?>

                    <?php foreach ($projecek as $row): ?>

                        <li class="active" data-filter="all">Tümü</li>
                        <li data-filter="1"><?php echo $projecek['proje_adi'];?></li>
                        <li data-filter="2"><?php echo $projecek['proje_adi'];?></li>
                        <li data-filter="3"><?php echo $projecek['proje_adi'];?></li>
                    </ul>
                    <?php endforeach; ?>

                <div class="filtr-container " style="padding: 0px; position: relative; height: 858px;">
                    <div class="col-md-4 col-ms-6 jm-item first filtr-item" data-category="1, 5" data-sort="Busy streets" style="opacity: 1; transform: scale(1) translate3d(0px, 0px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
                        <div class="jm-item-wrapper">
                            <div class="jm-item-image">
                                <img src="<?php echo $projecek['proje_fotograf']; ?>" alt="property" />
                                <span class="jm-item-overlay"> </span>
                                <div class="jm-item-button"><a href="#"  data-toggle="modal" data-target="#myModal1"><?php echo $projecek['proje_detay']; ?></a></div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 col-ms-6 jm-item first filtr-item" data-category="2, 5" data-sort="Luminous night" style="opacity: 1; transform: scale(1) translate3d(380px, 0px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
                        <div class="jm-item-wrapper">
                            <div class="jm-item-image">
                                <img src="<?php echo $projecek['proje_fotograf']; ?>" alt="property" />
                                <span class="jm-item-overlay"> </span>
                                <div class="jm-item-button"><a href="#"  data-toggle="modal" data-target="#myModal2"><<?php echo $projecek['proje_detay'];?>></a></div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 col-ms-6 jm-item first filtr-item" data-category="1, 4" data-sort="City wonders" style="opacity: 1; transform: scale(1) translate3d(760px, 0px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
                        <div class="jm-item-wrapper">
                            <div class="jm-item-image">
                                <img src="images/g31.jpg" alt="property" />
                                <span class="jm-item-overlay"> </span>
                                <div class="jm-item-button"><a href="#"  data-toggle="modal" data-target="#myModal3">View Details</a></div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 col-ms-6 jm-item first filtr-item" data-category="1, 3" data-sort="In production" style="opacity: 1; transform: scale(1) translate3d(0px, 286px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
                        <div class="jm-item-wrapper">
                            <div class="jm-item-image">
                                <img src="images/g4.jpg" alt="property" />
                                <span class="jm-item-overlay"> </span>
                                <div class="jm-item-button"><a href="#"  data-toggle="modal" data-target="#myModal4">View Details</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-ms-6 jm-item first filtr-item" data-category="3, 4" data-sort="Industrial site" style="opacity: 1; transform: scale(1) translate3d(380px, 286px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
                        <div class="jm-item-wrapper">
                            <div class="jm-item-image">
                                <img src="images/g5.jpg" alt="property" />
                                <span class="jm-item-overlay"> </span>
                                <div class="jm-item-button"><a href="#"  data-toggle="modal" data-target="#myModal5">View Details</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-ms-6 jm-item first filtr-item" data-category="3, 4" data-sort="Industrial site" style="opacity: 1; transform: scale(1) translate3d(380px, 286px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
                        <div class="jm-item-wrapper">
                            <div class="jm-item-image">
                                <img src="images/g6.jpg" alt="property" />
                                <span class="jm-item-overlay"> </span>
                                <div class="jm-item-button"><a href="#"  data-toggle="modal" data-target="#myModal5">View Details</a></div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 col-ms-6 jm-item first filtr-item" data-category="1, 3" data-sort="City lights" style="opacity: 1; transform: scale(1) translate3d(0px, 572px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
                        <div class="jm-item-wrapper">
                            <div class="jm-item-image">
                                <img src="images/g7.jpg" alt="property" />
                                <span class="jm-item-overlay"> </span>
                                <div class="jm-item-button"><a href="#"  data-toggle="modal" data-target="#myModal7">View Details</a></div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 col-ms-6 jm-item first filtr-item" data-category="2, 4" data-sort="Dreamhouse" style="opacity: 1; transform: scale(1) translate3d(380px, 572px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
                        <div class="jm-item-wrapper">
                            <div class="jm-item-image">
                                <img src="images/g8.jpg" alt="property" />
                                <span class="jm-item-overlay"> </span>
                                <div class="jm-item-button"><a href="#"  data-toggle="modal" data-target="#myModal8">View Details</a></div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 col-ms-6 jm-item first filtr-item" data-category="1, 3, 4" data-sort="Dreamhouse" style="opacity: 1; transform: scale(1) translate3d(760px, 572px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
                        <div class="jm-item-wrapper">
                            <div class="jm-item-image">
                                <img src="images/g9.jpg" alt="property" />
                                <span class="jm-item-overlay"> </span>
                                <div class="jm-item-button"><a href="#"  data-toggle="modal" data-target="#myModal9">View Details</a></div>
                            </div>

                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </div>
    <!--//gallery-->
</div>
