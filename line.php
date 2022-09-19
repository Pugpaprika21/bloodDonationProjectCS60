<?php

use MyApp\Helper\Date\DateThai;
use MyApp\Library\LineNotify\LineNotify;

require_once dirname(__DIR__) . ('../bloodDonationProjectCS60/MyApp/Include/Autoload.php');

$dateThai = (new DateThai)->get(date('Y-m-d'))->dayMonthYearCut();

$message = "เเบบฟอร์มบริจาค" . "\r\n" . "บันทึกข้อมูลเเบบฟอร์มบริจาคโลหิตในวันที่ " . $dateThai . " สำเร็จ ขอบคุณครับ";

// $message = "นัดหมายบริจาคโลหิต" . "\r\n" . "บันทึกข้อมูลการนัดหมายบริจาคโลหิตในวันที่ " . $dateThai . " สำเร็จ ขอบคุณครับ";

$notify = (new LineNotify())->setMessage($message)->sendNotify();


echo '<pre>';
print_r($notify);
echo '</pre>';

