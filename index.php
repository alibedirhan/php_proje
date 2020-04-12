<?php
include 'DB_set.php';
include 'Utils/ArrayHelper.php';

    $settings = $DB_connect->prepare('SELECT * FROM SiteInfo');
    $settings->execute();
    $settings = $settings->fetchAll();

include 'head.php';

    $settings = $DB_connect->prepare('SELECT * FROM SiteInfo');
    $settings->execute();
    $settings = $settings->fetchAll();


include 'banner.php';


include 'about.php';

    $about = $DB_connect -> prepare('SELECT * FROM About');
    $about -> execute();
    $about = $about -> fetchAll();


include 'education.php';
    $experience = $DB_connect ->prepare('SELECT * FROM Experience');
    $experience ->execute();
    $experience = $experience ->fetchAll();

    $education = $DB_connect -> prepare('SELECT * FROM Education');
    $education ->execute();
    $education = $education ->fetchAll();


include 'skill.php';
    $skills = $DB_connect ->prepare('SELECT * FROM Skills');
    $skills -> execute();
    $skills = $skills -> fetchAll();


include 'main.php';


include 'menu.php';


include 'contact.php';


include 'footer.php';














