<?php

namespace MyApp\Helper\Date;

class DateThai
{
    private string $dateResultAdd = '';
    private string $dayMonthYearCut = '';
    private string $monthYearFull = '';

    private array $strMonthCut = [
        "", "ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค."
    ];

    private array $strFullMonth = [
        "", "มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม"
    ];
    /**
     * get day-month-year Thai Format
     * @return object
     */
    public function getDMYFunction(): object
    {
        return (object)[
            'day' => date('d'),
            'month' => date('m'),
            'year' => date('Y'),
        ];
    }
    /**
     * + 1 days
     * @param string $addDays 
     * @return object
     */
    public function addDate(string $addDays): object
    {
        $this->dateResultAdd = date('Y-m-d', strtotime(date('Y-m-d') . $addDays));
        return $this;
    }
    /**
     * Thai Format
     * @param string $strDate
     * @return object
     */
    public function get(string $strDate): object
    {
        $strYear = date("Y", strtotime($strDate)) + 543;
        $strMonth = date("n", strtotime($strDate));
        $strDay = date("j", strtotime($strDate));
        $strHour = date("H", strtotime($strDate));
        $strMinute = date("i", strtotime($strDate));
        $strSeconds = date("s", strtotime($strDate));

        $strMonthThai = $this->strMonthCut[$strMonth];
        $strFullMonthThai = $this->strFullMonth[$strMonth];

        $result = (object)[
            'day' => date('d'),
            'month' => date('m'),
            'year' => substr($strYear, 2),
            'ymd' => date('Y-m-d'),
            'monthYearFull' => $strFullMonthThai . ' ' . $strYear,
            'dayMonthYearCut' => $strDay . ' ' . $strMonthThai . ' ' . substr($strYear, 2)
        ];

        $this->monthYearFull = $strFullMonthThai . ' ' . $strYear;
        $this->dayMonthYearCut = $strDay . ' ' . $strMonthThai . ' ' . substr($strYear, 2);
        return $this;
    }
    /**
     * @return string
     */
    public function getdayAdd(): string
    {
        return $this->dateResultAdd;
    }
    /**
     * @return string
     */
    public function monthYearFull(): string
    {
        return $this->monthYearFull;
    }
    /**
     * @return string
     */
    public function dayMonthYearCut(): string
    {
        return $this->dayMonthYearCut;
    }
}
