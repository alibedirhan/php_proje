<div class="skills" id="skills">
    <div class="container">
        <div class="title-w3ls">
            <h4>Yetenekler</h4>
        </div>
        <?php
            $yetenekler = $DB_connect->prepare("SELECT * FROM yetenekler ORDER BY beceri_id DESC");
            $yetenekler ->execute();
            $yetenekcek = $yetenekler->fetchAll(PDO::FETCH_ASSOC);
            $stun = $ayarcek['sayi'];; // 3
            $count = count($yetenekcek); // 9
            $array = [];
            $c = 0;
            for($i = 1; $i <= $stun; $i++){
                $limit = $count/$stun;
                if ($i == $stun){
                    $limit = $count;
                }
                $array[] = array_slice($yetenekcek, $c, $limit);
                $c += ($count/$stun);
            }
            ##die(var_dump($array));

        ?>
                    <div class="skills-bar">
                        <?php foreach($array as $item): ?>
                    <div class="col-md-<?php echo 12/$stun ?> w3-agile-skills-grid">
                            <section class='bar'>
                                <section class='wrap'>
                                    <div class='wrap_right'>
                                        <div class='bar_group'>
                                            <?php foreach ($item as $row):?>
                                                <div class='bar_group__bar thin' label='<?php echo $row['beceri_adi'];?>' show_values='true' tooltip='true' value='<?php echo $row['beceri_bar'];?>'></div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </section>
                            </section>
                        </div>
                        <?php endforeach; ?>
                    <div class="clearfix"></div>
                    </div>
    </div>
</div>