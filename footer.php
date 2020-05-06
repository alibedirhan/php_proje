<?php
?>

<div class="w3l_footer">
    <div class="w3l_footer_pos">


        <?php

        $footer = $DB_connect ->prepare("SELECT * FROM footer");
        $footer ->execute();
        $footercek = $footer ->fetch(PDO:: FETCH_ASSOC);


        ?>
        <p><?php echo $footercek['foot_baslik'];?> <a href="<?php echo $footercek['foot_link'];?>"><?php echo $footercek['foot_linkisim'];?></a></p>
    </div>
</div>
