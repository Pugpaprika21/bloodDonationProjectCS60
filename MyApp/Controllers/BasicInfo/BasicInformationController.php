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
    /**
     * @return void
     */
    public function getAllBasicInfo(): void
    {
        $sql = "SELECT * FROM basicinformation_tb";
        $query = (new Query())->select($sql);

        if (count($query) > 0) {
            Response::render($query)->jsonString();
        }
    }
    /**
     * @param object $request
     * @return void
     */
    public function getBasicInfoByID(object $request): void
    {
        $strClean = new StringDifferent();
        $sql = "SELECT * FROM basicinformation_tb WHERE bc_id =:bc_id";

        $query = (new Query())->select($sql, [
            'bc_id' =>  $strClean->clean($request->bc_id)
        ]);

        if (count($query) > 0) {
            Response::render($query)->jsonString();
        }
    }
    /**
     * @param object $request
     * @return void
     */
    public function editBasicInfoByID(object $request): void
    {
        $strClean = new StringDifferent();

        $sql = "UPDATE basicinformation_tb SET 
            nameSc =:nameSc, addressSc =:addressSc, officeHoursSc =:officeHoursSc, provinceSc =:provinceSc,
            districtSc =:districtSc, subDistrictSc =:subDistrictSc, roadSc =:roadSc, postCodeSc =:postCodeSc,
            emailSc =:emailSc, phoneNumberSc =:phoneNumberSc WHERE bc_id =:bc_id";

        $query = (new Query())->update($sql, [
            'nameSc' => $strClean->clean($request->nameSc),
            'addressSc' => $strClean->clean($request->addressSc),
            'officeHoursSc' => $strClean->clean($request->officeHoursSc),
            'provinceSc' => $strClean->clean($request->provinceSc),
            'districtSc' => $strClean->clean($request->districtSc),
            'subDistrictSc' => $strClean->clean($request->subDistrictSc),
            'roadSc' => $strClean->clean($request->roadSc),
            'postCodeSc' => $strClean->clean($request->postCodeSc),
            'emailSc' => $strClean->clean($request->emailSc),
            'phoneNumberSc' => $strClean->clean($request->phoneNumberSc),
            'bc_id' => $strClean->clean($request->bc_id)
        ]);

        if ($query) {
            Response::success();
        }
    }
    /**
     * @param object $request
     * @return void
     */
    public function deleteBasicInfoByID(object $request): void
    {
        $strClean = new StringDifferent();

        $sql = "DELETE FROM basicinformation_tb WHERE bc_id =:bc_id";
        $query = (new Query())->delete($sql, [
            'bc_id' => $strClean->clean($request->id)
        ]);

        if ($query) {
            Response::success();
        }
    }
}




