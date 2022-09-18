<?php

namespace MyApp\Controllers\DonationProcess;

session_start();

use MyApp\Helper\Tool\StringDifferent;
use MyApp\Http\HttpResponse\Response;
use MyApp\QueryBuilder\AppQuery\Query;

require_once dirname(__DIR__) . ('../../../../bloodDonationProjectCS60/MyApp/Include/Autoload.php');

class DonationProcessController
{
    /**
     * @param object $request
     * @return void
     */
    public function showDataDonationProcess(object $request): void
    {
        $sql = "SELECT * FROM donationprocess_tb";
        $query = (new Query())->select($sql);

        if (count($query) > 0) {
            $_SESSION['donationprocess_tb'] = $query;
            Response::success();
        } else {
            $_SESSION['donationprocess_tb'] = [];
            Response::error();
        }
    }
    /**
     * @param object $request
     * @return void
     */
    public function insertDonationprocess(object $request): void
    {
        $strClean = new StringDifferent();
        $str = $strClean::letter($request);

        $sql = "INSERT INTO donationprocess_tb($str->column) VALUES($str->rows)";
        $query = (new Query())->insert($sql, (array)$str->dataRequest);

        if ($query) {
            Response::success();
        }
    }
}


