<?php include 'db_set.php';

$ayarlar = $DB_connect ->prepare('SELECT * FROM ayarlar');
$ayarlar ->execute();
$ayarcek = $ayarlar ->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="tr">
<!-- Head -->
<head>
    <title><?php echo $ayarcek['site_title'];?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="description" content="<?php echo $ayarcek['site_desc'];?>" />
    <meta name="keywords" content="<?php echo $ayarcek['site_keyw'];?>" />
    <!-- css -->
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <!-- //font-awesome icons -->
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Yanone+Kaffeesatz:200,300,400,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="all" />
    <!-- Default-JavaScript-File -->
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- //Default-JavaScript-File -->

</head>
<body>