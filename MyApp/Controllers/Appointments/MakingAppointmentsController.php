<?php

namespace MyApp\Controllers\Appointments;

session_start();

use MyApp\Helper\Date\DateThai;
use MyApp\Http\HttpResponse\Response;
use MyApp\QueryBuilder\AppQuery\Query;

require_once dirname(__DIR__) . ('../../../../bloodDonationProjectCS60/MyApp/Include/Autoload.php');

class MakingAppointmentsController
{
    /**
     * @param object $request
     * @return void
     */
    public function createTimeThai(object $request): void
    {
        $dateThai = new DateThai();
        $dateReq = $request->dateAppointments;
        $dateResult = ['date' => $dateThai->get($dateReq)->dayMonthYearCut()];
        Response::render($dateResult)->jsonString();
    }
    /**
     * @return void
     */
    public function countTotalUsersAppointments(): void
    {

    }
    /**
     * @param object $request
     * @return void
     */
    public function getAppointmentsData(object $request): void
    {
        $sql = "INSERT INTO makingappointments_tb(dateApp, durationApp, durationStatus, user_id) VALUES(:dateApp, :durationApp, :durationStatus, :user_id)";
        // $query = (new Query())->insert($sql, [
        //     'dateApp' => $request->dateApp,
        //     'durationApp' => $request->durationApp,
        //     'durationStatus' => $request->durationStatus,
        //     'user_id' => $request->user_id,
        // ]);

        Response::render((array)$request)->jsonString();
    }
}
