<?php

use MyApp\Database\DbObject;

require_once dirname(__DIR__) . ('../bloodDonationProjectCS60/MyApp/Include/Autoload.php');

$db = new DbObject();
$query = $db->openConnect();

$username = "pugHaHa";
$password = "pug1234";



?>


<?php require_once ('../bloodDonationProjectCS60/MyApp/Template/Home/Layout/header.php'); ?>



<?php require_once ('../bloodDonationProjectCS60/MyApp/Template/Home/Layout/footer.php'); ?>