<?php

use MyApp\Controllers\Appointments\MakingAppointmentsController;
use MyApp\Http\HttpRequest\Request;

require_once dirname(__DIR__) . ('../../../../bloodDonationProjectCS60/MyApp/Include/Autoload.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $request = Request::post()->toStdClass();
    (new MakingAppointmentsController())->getAppointmentsData($request);
}
