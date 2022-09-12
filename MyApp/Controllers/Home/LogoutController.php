<?php

namespace MyApp\Controllers\Home;

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
        $check = session_destroy();
        if ($check) {
            Response::success('Logout success!');
        }
    }
}
