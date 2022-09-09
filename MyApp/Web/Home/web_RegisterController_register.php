<?php

use MyApp\Http\HttpRequest\Request;
use MyApp\Http\HttpResponse\Response;

require_once dirname(__DIR__) . ('../../../../bloodDonationProjectCS60/MyApp/Include/Autoload.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $request = Request::multiple()->toArray();

    Response::render($request)->toArray();
}
