<?php

namespace MyApp\Controllers\BasicInfo;

session_start();

use MyApp\Helper\Tool\StringDifferent;
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
        $sql = "SELECT * FROM basicinformation_tb";
        $query = (new Query())->select($sql);

        if (count($query) > 0) {
            $_SESSION['basicinformation_tb'] = $query;
            Response::success();
        } else {
            $_SESSION['basicinformation_tb'] = [];
            Response::error();
        }
    }
    /**
     * @param object $request
     * @return void
     */
    public function showDataBasicInfoByID(object $request): void
    {
        $strClean = new StringDifferent();

        $sql = "SELECT * FROM basicinformation_tb WHERE bc_id =:bc_id";
        $query = (new Query())->select($sql, [
            'bc_id' => $strClean->clean($request->bc_id)
        ]);

        if (count($query) > 0) {
            Response::render($query)->jsonString();
        } else {    
            Response::error();
        }
    }
    /**
     * @param object $request
     * @return void
     */
    public function insertBasicInfo(object $request): void
    {
        $strClean = new StringDifferent();
        $str = $strClean::letter($request);

        $sql = "INSERT INTO basicinformation_tb($str->column) VALUES($str->rows)";
        $query = (new Query())->insert($sql, (array)$str->dataRequest);

        if ($query) {
            Response::success();
        }
    }
}




