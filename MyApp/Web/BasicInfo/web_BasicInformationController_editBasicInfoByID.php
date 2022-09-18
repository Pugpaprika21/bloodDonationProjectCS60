<?php

use MyApp\Controllers\BasicInfo\BasicInformationController;
use MyApp\Http\HttpRequest\Request;

require_once dirname(__DIR__) . ('../../../../bloodDonationProjectCS60/MyApp/Include/Autoload.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $request = Request::post()->toStdClass();
    (new BasicInformationController())->editBasicInfoByID($request);
}


