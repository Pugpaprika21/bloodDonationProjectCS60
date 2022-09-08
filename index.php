<?php

use MyApp\Database\DbObject;

require_once dirname(__DIR__) . '../bloodDonationProjectCS60/MyApp/Include/Autoload.php';

$db = new DbObject();
$result = $db->openConnect();

echo '<pre>';
print_r($result);
echo '</pre>';