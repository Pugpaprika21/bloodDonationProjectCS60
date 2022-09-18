<?php

use MyApp\Controllers\Appointments\MakingAppointmentsController;
use MyApp\Http\HttpRequest\Request;

require_once dirname(__DIR__) . ('../../../../bloodDonationProjectCS60/MyApp/Include/Autoload.php');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    $request = Request::get()->toStdClass();
    (new MakingAppointmentsController())->getAppointmentsDataByID($request);
}
