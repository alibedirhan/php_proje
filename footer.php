<?php
?>

<div class="w3l_footer">
    <div class="w3l_footer_pos">
        <footer class="w3-container w3-teal w3-center w3-margin-top">
        <a href="<?php echo $smcek['sm_facebook'] ?>" target="_blank"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
        <a href="<?php echo $smcek['sm_instgram'] ?>" target="_blank"><i class="fa fa-instagram w3-hover-opacity"></i></a>
        <a href="<?php echo $smcek['sm_snapchat'] ?>" target="_blank"><i class="fa fa-snapchat w3-hover-opacity"></i></a>
        <a href="<?php echo $smcek['sm_pinterest'] ?>" target="_blank"><i class="fa fa-pinterest-p w3-hover-opacity"></i></a>
        <a href="<?php echo $smcek['sm_twitter'] ?>" target="_blank"><i class="fa fa-twitter w3-hover-opacity"></i></a>
        <a href="<?php echo $smcek['sm_linkedin'] ?>" target="_blank"><i class="fa fa-linkedin w3-hover-opacity"></i></a>
        <a href="<?php echo $smcek['sm_youtube'] ?>" target="_blank"><i class="fa fa-youtube w3-hover-opacity"></i></a>

        </footer>

        <?php

        $footer = $DB_connect ->prepare("SELECT * FROM footer");
        $footer ->execute();
        $footercek = $footer ->fetch(PDO:: FETCH_ASSOC);


        ?>
        <p><?php echo $footercek['foot_baslik'];?> <a href="<?php echo $footercek['foot_link'];?>"><?php echo $footercek['foot_linkisim'];?></a></p>
    </div>
</div>
