<?php

use MyApp\Controllers\Home\LogoutController;
use MyApp\Http\HttpRequest\Request;

require_once dirname(__DIR__) . ('../../../../bloodDonationProjectCS60/MyApp/Include/Autoload.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $request = Request::post()->toStdClass();
    (new LogoutController())->logout($request);
}
