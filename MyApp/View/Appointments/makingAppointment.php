<?php

session_start();

use MyApp\Helper\Date\DateThai;

require_once dirname(__DIR__) . ('../../../../bloodDonationProjectCS60/MyApp/Include/Autoload.php');

$dateThai = new DateThai();

$arrayDateAdd = [
    'day1' => $dateThai->addDate('+ 1 days')->getdayAdd(),
    'day2' => $dateThai->addDate('+ 2 days')->getdayAdd(),
    'day3' => $dateThai->addDate('+ 3 days')->getdayAdd(),
    'day4' => $dateThai->addDate('+ 4 days')->getdayAdd(),
    'day5' => $dateThai->addDate('+ 5 days')->getdayAdd(),
    'day6' => $dateThai->addDate('+ 6 days')->getdayAdd()
];

?>

<?php ($_SESSION['role'] !== 'user') ? header('location: ../../../../../bloodDonationProjectCS60/index.php') : ''; ?>
<?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Appointments/Layout/header.php'); ?>
<?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Appointments/Component/navbar.php'); ?>

<style>
    .container {
        margin-top: 20px;
    }

    .card-main-header {
        padding-top: 20px;
        padding-bottom: 20px;
        color: #FFFFFF;
        background-color: #3A5063;
        font-size: 18px;
    }

    .container {
        margin-top: 25px;
        padding-bottom: 50px;
    }

    .container-main {
        margin-top: 30px;
    }

    .navbar {
        background-color: #4C5DC6;
        padding-top: 20px;
        padding-bottom: 20px;
    }

    .navbar-brand {
        color: #FFFFFF;
    }

    .card-header-showDateThai {
        color: #FFFFFF;
        background-color: #2C74B4;
        padding-top: 20px;
        padding-bottom: 20px;
    }

    .modal-header {
        color: #FFFFFF;
        background-color: #2C74B4;
    }
</style>

<div class="container-fluid container-main">
    <div class="card shadow rounded">
        <div class="card-body">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../../../../bloodDonationProjectCS60/MyApp/View/Users/home.php">กลับสู่หน้าหลัก</a></li>
                    <li class="breadcrumb-item active" aria-current="page">นัดหมายบริจาคโลหิต</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="container-fluid container-main">
    <div class="card card-main shadow rounded">
        <div class="card-header card-main-header">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-calendar-day" viewBox="0 0 16 16">
                <path d="M4.684 11.523v-2.3h2.261v-.61H4.684V6.801h2.464v-.61H4v5.332h.684zm3.296 0h.676V8.98c0-.554.227-1.007.953-1.007.125 0 .258.004.329.015v-.613a1.806 1.806 0 0 0-.254-.02c-.582 0-.891.32-1.012.567h-.02v-.504H7.98v4.105zm2.805-5.093c0 .238.192.425.43.425a.428.428 0 1 0 0-.855.426.426 0 0 0-.43.43zm.094 5.093h.672V7.418h-.672v4.105z" />
                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
            </svg> นัดหมายบริจาคโลหิต
        </div>
        <div class="card-body">
            <div class="row g-3">
                <div class="col-sm-4">
                    <div class="card card-bookingTime shadow-sm rounded">
                        <div class="card-header card-header-showDateThai" id="d1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-clock-fill mb-1" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                            </svg> วันที่ : <?= $dateThai->get($arrayDateAdd['day1'])->dayMonthYearCut(); ?>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title" id="card-title-d1"></h5>
                            <p class="card-text">กรุณาเลือกวันเวลาที่ต้องการนัดหมายบริจาคโลหิต</p>
                            <?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Appointments/Component/modal1.php'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card card-bookingTime shadow-sm rounded">
                        <div class="card-header card-header-showDateThai" id="d2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-clock-fill mb-1" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                            </svg> วันที่ : <?= $dateThai->get($arrayDateAdd['day2'])->dayMonthYearCut(); ?>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title" id="card-title-d2"></h5>
                            <p class="card-text">กรุณาเลือกวันเวลาที่ต้องการนัดหมายบริจาคโลหิต</p>
                            <?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Appointments/Component/modal2.php'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card card-bookingTime shadow-sm rounded">
                        <div class="card-header card-header-showDateThai" id="d3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-clock-fill mb-1" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                            </svg> วันที่ : <?= $dateThai->get($arrayDateAdd['day3'])->dayMonthYearCut(); ?>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title" id="card-title-d3"></h5>
                            <p class="card-text">กรุณาเลือกวันเวลาที่ต้องการนัดหมายบริจาคโลหิต</p>
                            <?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Appointments/Component/modal3.php'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card card-bookingTime shadow-sm rounded">
                        <div class="card-header card-header-showDateThai" id="d4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-clock-fill mb-1" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                            </svg> วันที่ : <?= $dateThai->get($arrayDateAdd['day4'])->dayMonthYearCut(); ?>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title" id="card-title-d4"></h5>
                            <p class="card-text">กรุณาเลือกวันเวลาที่ต้องการนัดหมายบริจาคโลหิต</p>
                            <?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Appointments/Component/modal4.php'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card card-bookingTime shadow-sm rounded">
                        <div class="card-header card-header-showDateThai" id="d5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-clock-fill mb-1" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                            </svg> วันที่ : <?= $dateThai->get($arrayDateAdd['day5'])->dayMonthYearCut(); ?>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title" id="card-title-d5"></h5>
                            <p class="card-text">กรุณาเลือกวันเวลาที่ต้องการนัดหมายบริจาคโลหิต</p>
                            <?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Appointments/Component/modal5.php'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card card-bookingTime shadow-sm rounded">
                        <div class="card-header card-header-showDateThai" id="d6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-clock-fill mb-1" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                            </svg> วันที่ : <?= $dateThai->get($arrayDateAdd['day6'])->dayMonthYearCut(); ?>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title" id="card-title-d6"></h5>
                            <p class="card-text">กรุณาเลือกวันเวลาที่ต้องการนัดหมายบริจาคโลหิต</p>
                            <?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Appointments/Component/modal6.php'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Appointments/Layout/footer.php'); ?>

<script>
    $(document).ready(function() {

        $('#submit-modal1').submit(function(e) {
            e.preventDefault();
            sendData(this, 1);
        });

        $('#submit-modal2').submit(function(e) {
            e.preventDefault();
            sendData(this, 2);
        });

        $('#submit-modal3').submit(function(e) {
            e.preventDefault();
            sendData(this, 3);
        });

        $('#submit-modal4').submit(function(e) {
            e.preventDefault();
            sendData(this, 4);
        });

        $('#submit-modal5').submit(function(e) {
            e.preventDefault();
            sendData(this, 5);
        });

        $('#submit-modal6').submit(function(e) {
            e.preventDefault();
            sendData(this, 6);
        });

        function getCountDay() {
            $.ajax({
                type: "GET",
                dataType: "json",
                url: "../../../../bloodDonationProjectCS60/MyApp/Web/Appointments/web_MakingAppointmentsController_countAsDateApp.php",
                data: {
                    user_id: <?= $_SESSION['user_id']; ?>
                },
                success: function(response) {
                    $('#card-title-d1').html(`จำนวนผู้นัดหมาย : ${response.d1} คน`);
                    $('#card-title-d2').html(`จำนวนผู้นัดหมาย : ${response.d2} คน`);
                    $('#card-title-d3').html(`จำนวนผู้นัดหมาย : ${response.d3} คน`);
                    $('#card-title-d4').html(`จำนวนผู้นัดหมาย : ${response.d4} คน`);
                    $('#card-title-d5').html(`จำนวนผู้นัดหมาย : ${response.d5} คน`);
                    $('#card-title-d6').html(`จำนวนผู้นัดหมาย : ${response.d6} คน`);
                }
            });
        }

        getCountDay();

        var postURL = '../../../../bloodDonationProjectCS60/MyApp/Web/Appointments/web_MakingAppointmentsController_getAppointmentsData.php';

        function sendData(_this, eId) {
            let id = eId;
            const Fd = new FormData($(_this)[0]);
            Fd.append('dateApp', $(`#dateApp${id}`).val());
            Fd.append('durationApp', $(`#durationApp${id}`).val());
            Fd.append('durationTime', ($(`#durationApp${id}`).val() == 'ช่วงเช้า') ? '8.30 ถึง 11.30 น.' : '13.00 ถึง 16.30 น.');
            Fd.append('durationStatus', $(`#durationStatus${id}`).val());
            Fd.append('user_id', $(`#user_id${id}`).val());

            if (Fd.get('durationApp') !== null) {
                $.ajax({
                    type: "POST",
                    dataType: "json",
                    url: postURL,
                    data: Fd,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        let status = response.status;
                        let massage = response.massage;
                        let url = `../../../../bloodDonationProjectCS60/MyApp/View/Users/home.php?massage=${massage}`;

                        if (status == 200) {
                            Swal.fire(
                                'สำเร็จ',
                                'บันทึกข้อมูลสำเร็จ',
                                'success'
                            ).then((result) => {
                                window.location.href = url;
                            });

                        } else {

                            Swal.fire(
                                'ผิดพลาด',
                                massage,
                                'error'
                            ).then((result) => {
                                $(_this)[0].reset();
                                $(_this).modal('hide');
                            });
                        }
                    }
                });

            } else {

                Swal.fire(
                    'คำเตือน',
                    'กรุณาเลือกช่วงเวลานัดหมาย',
                    'warning'
                ).then((result) => {
                    $(_this)[0].reset();
                    $(_this).modal('hide');
                });
            }
        }
    });
</script>