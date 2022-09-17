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

        if ($query ) {
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
}







