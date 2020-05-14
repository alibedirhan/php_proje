<?php

$DB_server = "db";
$DB_name = "php_proje";
$DB_user_name = "root";
$DB_user_pasw = "root";


try {
    $DB_connect = new PDO("mysql:host={$DB_server}; dbname={$DB_name}; charset=utf8", $DB_user_name,$DB_user_pasw);
    $DB_connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $Exception) {
    echo "Database Bağlantısı Kurulamadı"; $Exception -> getMessage();
}

