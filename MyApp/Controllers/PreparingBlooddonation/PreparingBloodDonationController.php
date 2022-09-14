<?php

namespace MyApp\Controllers\PreparingBlooddonation;

session_start();

use MyApp\Http\HttpResponse\Response;
use MyApp\QueryBuilder\AppQuery\Query;

require_once dirname(__DIR__) . ('../../../../bloodDonationProjectCS60/MyApp/Include/Autoload.php');

class PreparingBloodDonationController
{
    /**
     * @param object $request
     * @return void
     */
    public function showDataPreparingBlooddonation(object $request): void
    {
        $sql = "SELECT * FROM preparing_blooddonation_tb";
        $query = (new Query())->select($sql);

        if (count($query) > 0) {
            $_SESSION['preparing_blooddonation_tb'] = $query;
            Response::success();
        } else {
            $_SESSION['preparing_blooddonation_tb'] = [];
            Response::error();
        }
    }
}


