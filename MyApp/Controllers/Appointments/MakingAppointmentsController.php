<?php

namespace MyApp\Controllers\Appointments;

session_start();

use MyApp\Helper\Date\DateThai;
use MyApp\Helper\Tool\StringDifferent;
use MyApp\Http\HttpResponse\Response;
use MyApp\QueryBuilder\AppQuery\Query;
use MyApp\Library\LineNotify\LineNotify;

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
        $sql = "SELECT * FROM makingappointments_tb WHERE user_id =:user_id AND dateApp =:dateApp";

        $query = (new Query())->select($sql, [
            'user_id' => $str->clean($request->user_id),
            'dateApp' => $str->clean($request->dateApp),
        ]);

        if (isset($query[0]->dateApp) == $request->dateApp) {

            $tomorrow = date('Y-m-d', strtotime(date('Y-m-d') . '+2 days'));
            $dayMonthYearTomorrow = (new DateThai())->get($tomorrow)->dayMonthYearCut();

            Response::error('นัดหมายบริจาคโลหิตได้อีกภายในวันที่ ' . $dayMonthYearTomorrow);

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

                $dateThai = (new DateThai)->get($request->dateApp)->dayMonthYearCut();
                $message = "นัดหมายบริจาคโลหิต" . "\r\n" . "บันทึกข้อมูลการนัดหมายบริจาคโลหิตในวันที่ " . $dateThai  ." ". $request->durationApp . "เวลา ". $request->durationTime . " สำเร็จ ขอบคุณครับ";

                $notify = (new LineNotify())
                    ->setMessage($message)
                    ->sendNotify();

                if ($notify->status == 200) {
                    Response::success();
                }
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
    public function countAsDateApp(object $request): void
    {
        $stackDate = [];
        $user_id = (int)$request->user_id;
        $dateThai = new DateThai();

        if ($user_id !== 0) {
            $stackDate['d1'] = $this->setDateAdd($dateThai->addDate('+ 1 days')->getdayAdd());
            $stackDate['d2'] = $this->setDateAdd($dateThai->addDate('+ 2 days')->getdayAdd());
            $stackDate['d3'] = $this->setDateAdd($dateThai->addDate('+ 3 days')->getdayAdd());
            $stackDate['d4'] = $this->setDateAdd($dateThai->addDate('+ 4 days')->getdayAdd());
            $stackDate['d5'] = $this->setDateAdd($dateThai->addDate('+ 5 days')->getdayAdd());
            $stackDate['d6'] = $this->setDateAdd($dateThai->addDate('+ 6 days')->getdayAdd());

            Response::render($stackDate)->jsonString();
        } else {
            Response::error();
        }
    }
    /**
     * @param string $dateAdd
     * @return int
     */
    private function setDateAdd(string $dateAdd): int
    {
        $countResult = 0;
        $sql = "SELECT dateApp FROM makingappointments_tb WHERE dateApp =:dateApp";
        $query = (new Query())->select($sql, [
            'dateApp' => $dateAdd,
        ]);

        if (count($query) > 0) {
            $countResult = count($query);
        } else {
            $countResult = 0;
        }

        return $countResult;
    }
    /**
     * @param object $request
     * @return void
     */
    public function getAppointmentsDataByID(object $request): void
    {
        $str = new StringDifferent();

        $sql = "SELECT * FROM makingappointments_tb WHERE user_id =:user_id";
        $query = (new Query())->select($sql, [
            'user_id' => $str->clean($request->user_id)
        ]);

        if (count($query) > 0) {
            Response::render($query)->jsonString();
        }
    }
}


