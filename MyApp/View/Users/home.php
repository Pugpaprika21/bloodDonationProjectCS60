<?php

use MyApp\Http\HttpRequest\Request;

require_once dirname(__DIR__) . ('../../../../bloodDonationProjectCS60/MyApp/Include/Autoload.php');

$req = Request::multiple()->toArray();

echo "<pre>";
print_r($req);
echo "<pre>";
