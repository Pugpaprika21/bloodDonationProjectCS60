<?php

use MyApp\Helper\Tool\StringDifferent;

require_once dirname(__DIR__) . ('../../../bloodDonationProjectCS60/MyApp/Include/Autoload.php');

$str = new StringDifferent();
$sqlStr = $str::letter($request);

$arrayData = (array)$sqlStr->data;
$arrayData['formStatus'] = 1;
$arrayData['user_id'] = $_SESSION['user_id'];

$pos = 0;
$resultRequest = array_slice($arrayData, 0, $pos) + ['form_id' => $form_id] + array_slice($arrayData, $pos);

/*  */