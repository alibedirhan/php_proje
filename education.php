<?php
?>

<!--/ education -->
<div class="w3-edu-top" id="experiences">
    <div class="container">
        <div class="w3-edu-grids">
            <div class="col-md-6 w3-edu-grid-left">
                <div class="w3-edu-grid-header">
                    <h3>Deneyimler</h3>
                   <?php
                   $link = mysqli_connect($DB_server, $DB_name, $DB_user_name, $DB_user_pasw);
                   $mysqli_result = mysqli_query($link, "DESCRIBE Experience");
                   $mysqli_result = mysqli_query("SELECT * FROM Experience");

                   while ($row = mysqli_fetch_row($mysqli_result))
                    {
                    echo $row["id"].$row["year"].$row["job"].$row["company"].$row["assigment"].$row["comment"] ;
                    } ?>
                </div>
                <div class="col-md-4 w3-edu-info1">
                    <h3><?php echo ArrayHelper::getData($experience, 'year') ?>2020</h3>
                    <h4><?php echo ArrayHelper::getData($experience,'job')?>Stajyer Mühendis</h4>
                </div>
                <div class="col-md-6 w3-edu-info2">
                    <h3><?php echo  ArrayHelper::getData($experience, 'company') ?>Ptt Ar-Ge Yazılım</h3>
                    <h4><i class="fa fa-users" aria-hidden="true"></i><span><?php echo ArrayHelper::getData($experience,'assigment')?>Stajyer Mühendis</span></h4>
                    <p><?php echo ArrayHelper::getData($experience, 'comment') ?>Odtü Teknokent Bilişim İnovasyon Merkezi </p>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-4 w3-edu-info1">
                    <h3><?php echo ArrayHelper::getData($experience,'year')?>2018</h3>
                    <h4><?php echo ArrayHelper::getData($experience,'job')?>Stajyer Mühendis</h4>

                </div>
                <div class="col-md-6 w3-edu-info2">
                    <h3><?php echo ArrayHelper::getData($experience,'job')?>Ankara Üniversitesi Nükleer Bilimler Enstitüsü</h3>
                    <h4><i class="fa fa-code" aria-hidden="true"></i><span><?php echo ArrayHelper::getData($experience, 'assigment')?>Stajyer Mühendis</span></h4>
                    <p><?php echo ArrayHelper::getData($experience,'comment')?>Ankara Üniversitesi Nükleer Bilimler Enstitüsünde yapılan 45 iş günü stajda toplamda 5 farklı laboratuvarda yapılan çalışmalarda aktif rol oynandı. Bu laboratuvarlarda yapılan çalışmalar yerinde izlenildi ve çalışmalara katınıldı.</p>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-4 w3-edu-info1">
                   <!-- <h3>2014</h3>
                    <h4>Graphic designer</h4>

                </div>
                <div class="col-md-6 w3-edu-info2">
                    <h3>Ntt software solution</h3>
                    <h4><i class="fa fa-laptop" aria-hidden="true"></i><span>trainer</span></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tincidunt a purus et vulputate</p>
-->
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-6 w3-edu-grid-right">
                <div class="w3-edu-grid-header">
                    <h3>Eğitim</h3>
                </div>
                <div class="col-md-3 w3-edu-info-right1">
                    <h3><?php echo ArrayHelper::getData($education,'year')?>2012</h3>
                </div>
                <div class="col-md-9 w3-edu-info-right2">
                    <h3><?php echo ArrayHelper::getData($education,'school')?>Ankara Üniversitesi</h3>
                    <h4><?php echo ArrayHelper::getData($education,'department')?>Fizik Mühendisliği</h4>
                   <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tincidunt a purus et vulputate Donec tincidunt a purus et vulputate</p> -->
                </div>
                <div class="clearfix"></div>
                <div class="col-md-3 w3-edu-info-right1">
                    <h3><?php echo ArrayHelper::getData($education,'year')?>2007</h3>
                </div>
                <div class="col-md-9 w3-edu-info-right2">

                    <h3><?php echo ArrayHelper::getData($education,'school')?>Elazığ Cumhuriyet Lisesi</h3>
                    <h4><?php echo ArrayHelper::getData($education,'department')?>Sayısal </h4>
                   <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tincidunt a purus et vulputate Donec tincidunt a purus et vulputate</p> -->
                </div>
                <div class="clearfix"></div>
               <!-- <div class="col-md-3 w3-edu-info-right1">
                    <h3>2004</h3>
                </div>
                <div class="col-md-9 w3-edu-info-right2">
                    <h3>international school</h3>
                    <h4>iit certified</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tincidunt a purus et vulputate Donec tincidunt a purus et vulputate</p>
-->
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //education -->
