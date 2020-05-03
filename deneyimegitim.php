<div class="w3-edu-top" id="experiences">
    <div class="container">
        <div class="w3-edu-grids">
            <div class="col-md-6 w3-edu-grid-left">
                <div class="w3-edu-grid-header">
                    <h3>Deneyimler</h3>
                </div>
                    <?php
                    $deneyim = $DB_connect ->prepare("SELECT * FROM deneyimegitim ORDER BY deneyim_id DESC");
                    $deneyim ->execute();
                    $deneyimcek = $deneyim->fetchAll(PDO::FETCH_ASSOC);
                    ?>

                    <?php foreach ($deneyimcek as $row): ?>


                            <div class="col-md-4 w3-edu-info1">
                                <h3><?php echo $row['deneyim_tarih'];?></h3>
                        <?php if ($row['deneyim_devam'] ==1): ?>
                            <h6><span style="color: grey" class="w3-tag w3-teal w3-round ">Hala Devam Ediyor</span></h6>
                        <?php endif; ?>
                                <h4><?php echo $row['deneyim_is'];?></h4>
                            </div>
                            <div class="col-md-6 w3-edu-info2">
                                <h3><?php echo $row['deneyim_sirket'];?></h3>
                                <h4><i class="fa fa-users" aria-hidden="true"></i><span><?php echo $row['deneyim_gorev'];?></span></h4>
                                <p><?php echo $row['deneyim_yorum']; ?> </p>
                            </div>


                    <?php endforeach;?>

            <!-- edu -->
                <div class="clearfix"></div>
                </div>
            <div class="col-md-6 w3-edu-grid-right">
                <div class="w3-edu-grid-header">
                    <h3>Egitim</h3>
                </div>
                    <?php
                    $egitim = $DB_connect ->prepare("SELECT * FROM egitim ORDER BY egitim_id DESC");
                    $egitim ->execute();
                    $egitimcek = $egitim->fetchAll(PDO::FETCH_ASSOC);

                    ?>
                    <?php foreach ($egitimcek as $row): ?>

                            <div class="col-md-3 w3-edu-info-right1">
                                <h3><?php echo $row['egitim_tarih']; ?></h3>
                        <?php if ($row['egitim_devam'] ==1): ?>
                            <h6><span style="color: grey" class="w3-tag w3-teal w3-round ">Hala Devam Ediyor</span></h6>
                        <?php endif; ?>
                            </div>
                            <div class="col-md-9 w3-edu-info-right2">
                                <h3><?php echo $row['egitim_okul']; ?></h3>
                                <h4><?php echo $row['egitim_bolum']; ?></h4>
                                <p><?php echo $row['egitim_yorum']; ?></p>
                            </div>

                    <?php endforeach; ?>
                
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>