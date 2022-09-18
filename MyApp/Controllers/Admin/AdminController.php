<?php

namespace MyApp\Controllers\Admin;

use MyApp\Helper\Date\DateThai;
use MyApp\Helper\Tool\StringDifferent;
use MyApp\Http\HttpResponse\Response;
use MyApp\QueryBuilder\AppQuery\Query;

session_start();

require_once dirname(__DIR__) . ('../../../../bloodDonationProjectCS60/MyApp/Include/Autoload.php');

class AdminController
{
    /**
     * to admin page
     * @return void
     */
    public function getAllDataAppointment(): void
    {
        $dateThai = new DateThai();
        $sql = "SELECT * FROM makingappointments_tb";
        $query = (new Query())->select($sql);

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
    public function getDataEditAppointmentByID(object $request): void
    {
        $strClean = new StringDifferent();

        $sql = "SELECT * FROM makingappointments_tb WHERE makApp_id =:makApp_id";
        $query = (new Query())->select($sql, [
            'makApp_id' => $strClean->clean($request->makApp_id)
        ]);

        if (count($query) > 0) {
            Response::render($query)->jsonString();
        }
    }
    /**
     * @param object $request
     * @return void
     */
    public function editAppointmentByID(object $request): void
    {
        $strClean = new StringDifferent();

        $sql = "UPDATE makingappointments_tb SET dateApp =:dateApp, durationApp =:durationApp, durationTime =:durationTime, durationStatus =:durationStatus WHERE makApp_id =:makApp_id ";
        $query = (new Query())->update($sql, [
            'dateApp' => $strClean->clean($request->dateApp),
            'durationApp' => $strClean->clean($request->durationApp),
            'durationTime' => $strClean->clean($request->durationTime),
            'durationStatus' => $strClean->clean($request->durationStatus),
            'makApp_id' => $strClean->clean($request->makApp_id)
        ]);

        if ($query) {
            Response::success();
        } else {
            Response::error();
        }
    }
    /**
     * @param object $request
     * @return void
     */
    public function deleteAppointmentByID(object $request): void
    {
        $strClean = new StringDifferent();

        $sql = "DELETE FROM makingappointments_tb WHERE makApp_id =:makApp_id";
        $query = (new Query())->delete($sql, [
            'makApp_id' => $strClean->clean($request->id)
        ]);

        if ($query) {
            Response::success();
        } else {
            Response::error();
        }
    }
    /**
     * @return void
     */
    public function getAllUserData(): void
    {
        $sql = "SELECT * FROM user_tb";
        $query = (new Query())->select($sql);

        if (count($query) > 0) {
            Response::render($query)->jsonString();
        }
    }
    /**
     * @param object $request
     * @return void
     */
    public function getUserByID(object $request): void
    {
        $strClean = new StringDifferent();

        $sql = "SELECT * FROM user_tb WHERE user_id =:user_id";
        $query = (new Query())->select($sql, [
            'user_id' => $strClean->clean($request->user_id)
        ]);

        if (count($query) > 0) {
            Response::render($query)->jsonString();
        }
    }
    /**
     * @param object $request
     * @return void
     */
    public function editUserByID(object $request): void
    {
        $strClean = new StringDifferent();

        $sql = "UPDATE user_tb SET 
                    username =:username, password =:password, firstname =:firstname, lastname =:lastname,
                    gender =:gender, dateOfBirth =:dateOfBirth, bloodType =:bloodType, weight =:weight,
                    height =:height, address =:address, subDistrict =:subDistrict, road =:road,
                    district =:district, province =:province, postCode =:postCode, idCard =:idCard,
                    email =:email, phoneNumber =:phoneNumber
                WHERE user_id =:user_id";

        $query = (new Query())->update($sql, [
            'username' => $strClean->clean($request->username),
            'password' => $strClean->clean($request->password),
            'firstname' => $strClean->clean($request->firstname),
            'lastname' => $strClean->clean($request->lastname),
            'gender' => $strClean->clean($request->gender),
            'dateOfBirth' => $strClean->clean($request->dateOfBirth),
            'bloodType' => $strClean->clean($request->bloodType),
            'weight' => $strClean->clean($request->weight),
            'height' => $strClean->clean($request->height),
            'address' => $strClean->clean($request->address),
            'subDistrict' => $strClean->clean($request->subDistrict),
            'road' => $strClean->clean($request->road),
            'district' => $strClean->clean($request->district),
            'province' => $strClean->clean($request->province),
            'postCode' => $strClean->clean($request->postCode),
            'idCard' => $strClean->clean($request->idCard),
            'email' => $strClean->clean($request->email),
            'phoneNumber' => $strClean->clean($request->phoneNumber),
            'user_id' => $strClean->clean($request->user_id)
        ]);

        if ($query) {
            Response::success();
        } else {
            Response::error();
        }
    }
}



