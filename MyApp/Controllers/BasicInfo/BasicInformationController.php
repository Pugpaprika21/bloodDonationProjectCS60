<?php

namespace MyApp\Controllers\BasicInfo;

session_start();

use MyApp\Http\HttpResponse\Response;
use MyApp\QueryBuilder\AppQuery\Query;

require_once dirname(__DIR__) . ('../../../../bloodDonationProjectCS60/MyApp/Include/Autoload.php');

class BasicInformationController
{
    /**
     * @param object $request
     * @return void
     */
    public function showDataBasicInfo(object $request): void
    {
        $user_id = (int)$request->user_id;
        $sql = "SELECT * FROM basicinformation_tb";
        $query = (new Query())->select($sql);

        if (count($query) > 0) {
            $_SESSION['basicinformation_tb'] = $query;
            Response::render($query)->jsonString();
        } else {
            $_SESSION['basicinformation_tb'] = [];
            Response::error();
        }
    }
}


