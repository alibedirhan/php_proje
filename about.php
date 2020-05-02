<?php

$about = $DB_connect ->prepare('SELECT * FROM about');
$about ->execute();
$aboutcek = $about ->fetch(PDO::FETCH_ASSOC);

?>

<!-- /about -->

<div class="w3-about" id="about">
    <div class="container">
        <div class="w3-about-head">
            <h3>Hakkımda</h3>
        </div>
        <div class="w3-about-grids">
            <div class=" w3-about-grids1">
                <div class="col-md-6 w3-about-grid-left1">
                    <img src="<?php echo $aboutcek['about_png1']; ?>" alt="img1">

                </div>
                <div class="col-md-6 w3-about-grid-right1">
                    <h3><?php echo $aboutcek['about_baslik1']; ?></h3>
                    <p><?php echo $aboutcek['about_yorum1']; ?> </p>
                    <!-- <h5>Lorem ipsum dolor sit amet, consectetur adipisci ask</h5>
                     <div class= "w3-about-grid-small-border">
                         <div class="col-md-4 w3-about-grid-small">
                             <h3 class="w3-head-project">20</h3>
                             <h5>web projects</h5>
                         </div>
                         <div class="col-md-4 w3-about-grid-small">
                             <h3 class="w3-head-project">30</h3>
                             <h5>php projects</h5>
                         </div>
                         <div class="col-md-4 w3-about-grid-small">
                             <h3 class="w3-head-project">50</h3>
                             <h5>java projects</h5>
                             <div class="clearfix"></div>
                         </div> -->
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="w3-about-grids2">
                <div class="col-md-6 w3-about-grid-left2">
                    <h3><?php echo $aboutcek['about_baslik2']; ?></h3>
                    <p><?php echo $aboutcek['about_yorum2']; ?> </p>
                    <!--<h4><a href="#">Readmore</a></h4> -->

                </div>
                <div class="col-md-6 w3-about-grid-right2">
                    <img src="<?php echo $aboutcek['about_png2']; ?>" alt="img1">

                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- //about  -->
