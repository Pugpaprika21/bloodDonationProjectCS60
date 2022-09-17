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
}
