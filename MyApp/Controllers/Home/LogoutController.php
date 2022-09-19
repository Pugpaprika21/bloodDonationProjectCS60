<?php

namespace MyApp\Controllers\Home;

session_start();

use MyApp\Http\HttpResponse\Response;

require_once dirname(__DIR__) . ('../../../../bloodDonationProjectCS60/MyApp/Include/Autoload.php');

class LogoutController
{
    /**
     * @param object $request
     * @return void
     */
    public function logout(object $request): void
    {
        if ((int)$request->logout !== 0) {
            session_destroy();
            Response::success();
        } else {
            Response::error();
        }
    }
}
