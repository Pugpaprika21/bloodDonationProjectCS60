<?php

namespace MyApp\Controllers\Appointments;

session_start();

use MyApp\Helper\Date\DateThai;
use MyApp\Helper\Tool\StringDifferent;
use MyApp\Http\HttpResponse\Response;
use MyApp\QueryBuilder\AppQuery\Query;

require_once dirname(__DIR__) . ('../../../../bloodDonationProjectCS60/MyApp/Include/Autoload.php');

class MakingAppointmentsController
{
    /**
     * @param object $request
     * @return void
     */
    public function getAppointmentsData(object $request): void
    {
        $str = new StringDifferent();

        $sql = "SELECT * FROM makingappointments_tb WHERE user_id =:user_id";

        $query = (new Query())->select($sql, [
            'user_id' => $str->clean($request->user_id)
        ]);

        if (isset($query[0]->dateApp) == $request->dateApp) {

            $tomorrow = date('Y-m-d', strtotime(date('Y-m-d') . '+3 days'));
            $dayMonthYearTomorrow = (new DateThai())->get($tomorrow)->dayMonthYearCut();

            Response::error('นัดหมายบริจาคโลหิตได้อีกภายในที่ ' . $dayMonthYearTomorrow);
        } else {

            $sql = "INSERT INTO makingappointments_tb(dateApp, durationApp, durationTime, durationStatus, user_id) VALUES(:dateApp, :durationApp, :durationTime, :durationStatus, :user_id)";

            $query = (new Query())->insert($sql, [
                'dateApp' => $str->clean($request->dateApp),
                'durationApp' => $str->clean($request->durationApp),
                'durationTime' => $str->clean($request->durationTime),
                'durationStatus' => $str->clean($request->durationStatus),
                'user_id' => $str->clean($request->user_id)
            ]);

            if ($query) {
                Response::success();
            }
        }
    }
    /**
     * @param object $request
     * @return void
     */
    public function updateDurationStatus(object $request): void
    {
        $sql = "UPDATE FROM makingappointments_tb SET durationStatus =:durationStatus WHERE user_id =:user_id";
        $query = (new Query())->update($sql, [
            'durationStatus' => $request->durationStatus,
            'user_id' => $request->user_id,
        ]);
    }
    /**
     * @param object $request
     * @return void
     */
    public function showDataAppointments(object $request): void
    {
        $sql = "SELECT * FROM makingappointments_tb WHERE user_id =:user_id";
        $query = (new Query())->select($sql, ['user_id' => $request->user_id]);

        if (count($query) > 0) {
            unset($_SESSION['makingappointments_tb']);
            $_SESSION['makingappointments_tb'] = $query;
            Response::success();
        } else {
            $_SESSION['makingappointments_tb'] = [];
            Response::error('no data in db');
        }
    }
    /**
     * @param object $request
     * @return void
     */
    public function countAsDateApp(object $request): void
    {
        $stackDate = [];
        $user_id = (int)$request->user_id;
        $dateThai = new DateThai();

        $day1 = $this->setDateAdd($dateThai->addDate('+ 1 days')->getdayAdd(), $user_id);
        $day2 = $this->setDateAdd($dateThai->addDate('+ 2 days')->getdayAdd(), $user_id);
        $day3 = $this->setDateAdd($dateThai->addDate('+ 3 days')->getdayAdd(), $user_id);
        $day4 = $this->setDateAdd($dateThai->addDate('+ 4 days')->getdayAdd(), $user_id);
        $day5 = $this->setDateAdd($dateThai->addDate('+ 5 days')->getdayAdd(), $user_id);
        $day6 = $this->setDateAdd($dateThai->addDate('+ 6 days')->getdayAdd(), $user_id);

        Response::render($day1)->jsonString();
    }
    /**
     * @param string $dateAdd
     * @param integer $user_id
     * @return array
     */
    private function setDateAdd(string $dateAdd, int $user_id): array
    {
        $sql = "SELECT COUNT(dateApp) FROM makingappointments_tb WHERE dateApp =:dateApp AND user_id =:user_id";
        $query = (new Query())->select($sql, [
            'dateApp' => $dateAdd,
            'user_id' => $user_id
        ]);

        return $query[0];
    }
}
