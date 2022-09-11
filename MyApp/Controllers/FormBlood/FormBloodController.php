<?php

namespace MyApp\Controllers\FormBlood;

use MyApp\Helper\Date\DateThai;
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
        $strClean = new StringDifferent();

        $sql = "SELECT form_id FROM formblood_tb WHERE form_id =:form_id";

        $query = (new Query())->select($sql, [
            'form_id' => $strClean->clean($request->form_id)
        ]);

        if (isset($query[0]->form_id) == $request->form_id) {

            $tomorrow = date('Y-m-d', strtotime(date('Y-m-d') . '+1 days'));
            $dayMonthYearTomorrow = (new DateThai())->get($tomorrow)->dayMonthYearCut();

            Response::error('กรุณาทำเเบบสอบถามเเสดงความประสงค์บริจาคโลหิตในวันที่ ' . $dayMonthYearTomorrow);

        } else {

            $str = $strClean::letter($request);
            $column = $str->column;
            $rows = $str->rows;
            $dataRequest = $str->dataRequest;
            $sql = "INSERT INTO formblood_tb($column) VALUES($rows)";
            $query = (new Query())->insert($sql, (array)$dataRequest);

            if ($query) {
                Response::success();
            }
        }
    }
}
