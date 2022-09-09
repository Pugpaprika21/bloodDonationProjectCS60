<?php

use MyApp\Http\HttpRequest\Request;
use MyApp\Http\HttpResponse\Response;

require_once dirname(__DIR__) . ('../../../../bloodDonationProjectCS60/MyApp/Include/Autoload.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $request = Request::post()->toStdClass();

    
    echo '<pre>';
    print_r($request);
    echo '</pre>';
   //Response::render($request)->toArray();
}
