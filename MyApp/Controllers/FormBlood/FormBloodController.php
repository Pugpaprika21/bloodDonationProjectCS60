<?php

namespace MyApp\Controllers\FormBlood;

session_start();

use MyApp\Helper\Tool\StringDifferent;
use MyApp\Http\HttpResponse\Response;
use MyApp\QueryBuilder\AppQuery\Query;

require_once dirname(__DIR__) . ('../../../../bloodDonationProjectCS60/MyApp/Include/Autoload.php');

class FormBloodController
{
    /**
     * @param object $request
     * @return void
     */
    public function getDataFormBlood(object $request): void
    {
        $form_id = date('d') . date('m') . (date('Y') + 543);
        $sql = "SELECT form_id FROM formblood_tb WHERE form_id =:form_id";
        $query = (new Query())->select($sql, [
            'form_id' => $form_id
        ]);

        $str = new StringDifferent();
        $sqlStr = $str::letter($request);

        $arrayData = (array)$sqlStr->data;
        $arrayData['formStatus'] = 1;
        $arrayData['user_id'] = $_SESSION['user_id'];

        $pos = 0;
        $resultRequest = array_slice($arrayData, 0, $pos) + ['form_id' => $form_id] + array_slice($arrayData, $pos);

        if (count($query) > 0) {
            Response::error();
        } else {

            $sql = "INSERT INTO formblood_tb($sqlStr->fields) VALUES($sqlStr->values)";
            $query = (new Query())->insert($sql, $resultRequest);

            if ($query) {
                Response::success();
            }
        }
    }
}
