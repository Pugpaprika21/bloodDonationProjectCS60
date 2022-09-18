<?php

namespace MyApp\Controllers\FormBlood;

session_start();

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
            $sql = "INSERT INTO formblood_tb($str->column) VALUES($str->rows)";
            $query = (new Query())->insert($sql, (array)$str->dataRequest);

            if ($query) {
                Response::success();
            }
        }
    }
    /**
     * @param object $request
     * @return void
     */
    public function showDataFormBlood(object $request): void
    {
        $sql = "SELECT * FROM formblood_tb WHERE user_id =:user_id";
        $query = (new Query())->select($sql, [
            'user_id' => $request->user_id
        ]);

        if (count($query) > 0) {
            unset($_SESSION['formblood_tb']);
            $_SESSION['formblood_tb'] = $query;
            Response::success();
        } else {
            $_SESSION['formblood_tb'] = [];
            Response::error();
        }
    }
    /**
     * @param object $request
     * @return void
     */
    public function showDataFormBloodByID(object $request): void
    {
        $sql = "SELECT * FROM formblood_tb WHERE form_id =:form_id";
        $query = (new Query())->select($sql, [
            'form_id' => $request->form_id
        ]);

        if (count($query) > 0) {
            unset($_SESSION['formblood_tb_all']);
            $_SESSION['formblood_tb_all'] = $query;
            Response::success();
        } else {
            $_SESSION['formblood_tb_all'] = [];
            Response::error();
        }
    }
    /**
     * @return void
     */
    public function getAllformBlood(): void
    {
        $sql = "SELECT * FROM formblood_tb";
        $query = (new Query())->select($sql);

        if (count($query) > 0) { 
            Response::render($query)->jsonString();
        }
    }
    /**
     * @param object $request
     * @return void
     */
    public function getAllformBloodByID(object $request): void
    {

        $strClean = new StringDifferent();

        $sql = "SELECT * FROM formblood_tb WHERE form_id =:form_id";
        $query = (new Query())->select($sql, [
            'form_id' => $strClean->clean($request->form_id)
        ]);

        if (count($query) > 0) { 
            $_SESSION['formbloodByID'] = $query;
            Response::render($query)->jsonString();
        }
    }
}

