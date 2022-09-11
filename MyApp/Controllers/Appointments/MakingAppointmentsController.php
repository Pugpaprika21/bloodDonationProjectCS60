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
    public function dateAddDays(): void
    {
        $dateThai = new DateThai();
        $arrayDateAdd = [
            'day1' => $dateThai->addDate('+ 1 days')->getdayAdd(),
            'day2' => $dateThai->addDate('+ 2 days')->getdayAdd(),
            'day3' => $dateThai->addDate('+ 3 days')->getdayAdd(),
            'day4' => $dateThai->addDate('+ 4 days')->getdayAdd(),
            'day5' => $dateThai->addDate('+ 5 days')->getdayAdd(),
            'day6' => $dateThai->addDate('+ 6 days')->getdayAdd()
        ];

        $_SESSION['days'] = $arrayDateAdd;

        Response::render($arrayDateAdd)->jsonString(); 
    }

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
