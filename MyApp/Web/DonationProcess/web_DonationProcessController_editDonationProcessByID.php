<?php

use MyApp\Controllers\DonationProcess\DonationProcessController;
use MyApp\Http\HttpRequest\Request;

require_once dirname(__DIR__) . ('../../../../bloodDonationProjectCS60/MyApp/Include/Autoload.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $request = Request::post()->toStdClass();
    (new DonationProcessController())->editDonationProcessByID($request);
}
