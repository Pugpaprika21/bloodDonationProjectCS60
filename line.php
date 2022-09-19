<?php

use MyApp\Library\LineNotify\LineNotify;

require_once dirname(__DIR__) . ('../bloodDonationProjectCS60/MyApp/Include/Autoload.php');

// line.php

$notify = (new LineNotify())
    ->setMessage('Hello')
    ->sendNotify();

    echo gettype($notify);


?>