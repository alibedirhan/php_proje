<?php
?>

<!-- skills -->
<div class="skills" id="skills">
    <div class="container">
        <div class="title-w3ls">
            <h4>Yetenekler</h4>
        </div>
                <?php

                $yetenekler = $DB_connect->prepare("SELECT * FROM yetenekler ORDER BY beceri_id DESC");
                $yetenekler ->execute();
                $yetenekcek = $yetenekler->fetchAll(PDO::FETCH_ASSOC);
                ?>

                <?php foreach ($yetenekcek as $row): ?>


                        <div class="skills-bar">
                            <div class="col-md-6 w3-agile-skills-grid">
                                <section class='bar'>
                                    <section class='wrap'>
                                        <div class='wrap_right'>
                                            <div class='bar_group'>
                                                <div class='bar_group__bar thin' label='<?php echo $row['beceri_adi']?>' show_values='true' tooltip='true' value='<?php echo $row['beceri_bar']?>'</div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </section>
                                </section>
                        </div>
                            
                            <div class="clearfix"></div>
                        </div>
                <?php endforeach;?>
    </div>
</div>
<!-- //skills -->
