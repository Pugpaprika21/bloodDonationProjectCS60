<?php

use MyApp\Helper\Date\DateThai;

session_start();

require_once dirname(__DIR__) . ('../../../../bloodDonationProjectCS60/MyApp/Include/Autoload.php');

$dateThai = new DateThai();

$makingappointments_tb = isset($_SESSION['makingappointments_tb']) ? $_SESSION['makingappointments_tb'] : [];

?>
<?php ($_SESSION['role'] !== 'admin') ? header('location: ../../../../../bloodDonationProjectCS60/index.php') : ''; ?>
<?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Users/Layout/header.php'); ?>
<?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Users/Component/navbar.php'); ?>

<style>
    .card-main {
        margin-top: 30px;
    }

    /* dt */
    .dataTables_length {
        padding-top: 20px;
        padding-bottom: 20px;
    }

    .dataTables_filter {
        padding-top: 20px;
        padding-bottom: 20px;
    }

    #appointmentsShowData_info,
    #appointmentsShowData_paginate {
        padding-top: 20px;
        padding-bottom: 20px;
    }
</style>

<div class="container">

    <div class="card shadow-sm rounded card-main">
        <div class="card-body">

            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Home</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-bloodDonationForm-tab" data-bs-toggle="pill" data-bs-target="#pills-bloodDonationForm" type="button" role="tab" aria-controls="pills-bloodDonationForm" aria-selected="false">แบบฟอร์ม</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-appointments-tab" data-bs-toggle="pill" data-bs-target="#pills-appointments" type="button" role="tab" aria-controls="pills-appointments" aria-selected="false">ข้อมูลการนัดหมาย</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">...</div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">...</div>
                <!-- แบบฟอร์มบริจาคโลหิต -->
                <div class="tab-pane fade" id="pills-bloodDonationForm" role="tabpanel" aria-labelledby="pills-bloodDonationForm-tab" tabindex="0">
                    <?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Users/Layout/bloodDonationForm.php'); ?>
                </div>
                <!-- ข้อมูลการนัดหมาย -->
                <div class="tab-pane fade" id="pills-appointments" role="tabpanel" aria-labelledby="pills-appointments-tab" tabindex="0">
                    <ul class="nav nav-tabs nav justify-content-end" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="appointmentsShowData-tab" data-bs-toggle="tab" data-bs-target="#appointmentsShowData-tab-pane" type="button" role="tab" aria-controls="appointmentsShowData-tab-pane" aria-selected="true">ข้อมูลการนัดหมาย</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Profile</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Contact</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane" type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false" disabled>Disabled</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <!-- ข้อมูลการนัดหมาย -->
                        <div class="tab-pane fade show active" id="appointmentsShowData-tab-pane" role="tabpanel" aria-labelledby="appointmentsShowData-tab" tabindex="0">
                            <table class="table table-bordered text-center display" id="appointmentsShowData" style="width:100%">
                                <thead style="background-color: #0F3D81; color: #FFFFFF;">
                                    <tr>
                                        <td>#</td>
                                        <td>วันที่นัดหมาย</td>
                                        <td>ช่วงการนัดหมาย</td>
                                        <td>เวลาการนัดหมาย</td>
                                        <td>สถานะ</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 0; foreach ($makingappointments_tb as $key => $values) : ?>
                                        <tr>
                                            <td><?= ($i + 1); ?></td>
                                            <td><?= $dateThai->get($values->dateApp)->dayMonthYearCut(); ?></td>
                                            <td><?= $values->durationApp; ?></td>
                                            <td><?= $values->durationTime; ?></td>
                                            <?php if ($values->durationStatus == 0) : ?>
                                                <td><button type="button" class="btn btn-warning btn-sm text-dark">ยังไม่นัดหมาย</button></td>
                                            <?php elseif ($values->durationStatus == 1) : ?>
                                                <td><button type="button" class="btn btn-success btn-sm text-white">นัดหมายสำเร็จ</button></td>
                                            <?php endif; ?>
                                        </tr>
                                    <?php $i++; endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">...</div>
                        <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">...</div>
                        <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">...</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Users/Layout/footer.php'); ?>

<script>
    $(document).ready(function() {

        (function() {
            $.ajax({
                type: "GET",
                dataType: "json",
                url: "../../../../bloodDonationProjectCS60/MyApp/Web/Appointments/web_MakingAppointmentsController_showDataAppointments.php",
                data: {
                    user_id: <?= $_SESSION['user_id']; ?>
                },
                success: function(response) {
                    if (response.status == 200) {
                        fnDataTable('#appointmentsShowData');
                    }
                }
            });
        })();

        function fnDataTable(tbID) {
            return $(tbID).DataTable();
        }
    });
</script>