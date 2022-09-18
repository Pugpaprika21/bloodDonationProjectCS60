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
    /**
     * @param object $request
     * @return void
     */
    public function getAllDonationProcess(object $request): void
    {
        $sql = "SELECT * FROM donationprocess_tb";
        $query = (new Query())->select($sql);

        if (count($query) > 0) {
            Response::render($query)->jsonString();
        }
    }
    /**
     * @param object $request
     * @return void
     */
    public function getDonationProcessByID(object $request): void
    {
        $strClean = new StringDifferent();
        $sql = "SELECT * FROM donationprocess_tb WHERE dona_id =:dona_id";

        $query = (new Query())->select($sql, [
            'dona_id' => $strClean->clean($request->dona_id)
        ]);

        if (count($query) > 0) {
            Response::render($query)->jsonString();
        }
    }
    /**
     * @param object $request
     * @return void
     */
    public function editDonationProcessByID(object $request): void
    {
        $strClean = new StringDifferent();

        $sql = "UPDATE donationprocess_tb SET 
            donationStep1 =:donationStep1, 
            donationStep2 =:donationStep2, 
            donationStep3 =:donationStep3, 
            donationStep4 =:donationStep4, 
            donationStep5 =:donationStep5 
        WHERE dona_id =:dona_id";

        $query = (new Query())->update($sql, [
            'donationStep1' => $strClean->clean($request->donationStep1),
            'donationStep2' => $strClean->clean($request->donationStep2),
            'donationStep3' => $strClean->clean($request->donationStep3),
            'donationStep4' => $strClean->clean($request->donationStep4),
            'donationStep5' => $strClean->clean($request->donationStep5),
            'dona_id' => $strClean->clean($request->dona_id)
        ]);

        if ($query) {
            Response::success();
        }
    }
    /**
     * @param object $request
     * @return void
     */
    public function deleteDonationProcessByID(object $request): void
    {
        $strClean = new StringDifferent();

        $sql = "DELETE FROM donationprocess_tb WHERE dona_id =:dona_id";

        $query = (new Query())->delete($sql, [
            'dona_id' => $strClean->clean($request->id)
        ]);

        if ($query) {
            Response::success();
        }
    }
}



