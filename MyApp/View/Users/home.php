<?php

use MyApp\Helper\Date\DateThai;

session_start();

require_once dirname(__DIR__) . ('../../../../bloodDonationProjectCS60/MyApp/Include/Autoload.php');

$dateThai = new DateThai();

$basicinformation_tb = isset($_SESSION['basicinformation_tb']) ? $_SESSION['basicinformation_tb'] : [] ;
$makingappointments_tb = isset($_SESSION['makingappointments_tb']) ? $_SESSION['makingappointments_tb'] : [];
$formblood_tb = isset($_SESSION['formblood_tb']) ? $_SESSION['formblood_tb'] : [];

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

    #formBloodData_info,
    #formBloodData_paginate {
        padding-top: 20px;
        padding-bottom: 20px;
    }

    #basicinformation_tb_info,
    #basicinformation_tb_paginate {
        padding-top: 20px;
        padding-bottom: 20px;
    }
</style>

<div class="container">

    <div class="card shadow-sm rounded card-main">
        <div class="card-body">

            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-basic-information-tab" data-bs-toggle="pill" data-bs-target="#pills-basic-information" type="button" role="tab" aria-controls="pills-basic-information" aria-selected="false">ข้อมูลพื้นฐานต่าง ๆ</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-bloodDonationForm-tab" data-bs-toggle="pill" data-bs-target="#pills-bloodDonationForm" type="button" role="tab" aria-controls="pills-bloodDonationForm" aria-selected="false">แบบฟอร์ม</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-appointments-tab" data-bs-toggle="pill" data-bs-target="#pills-appointments" type="button" role="tab" aria-controls="pills-appointments" aria-selected="false">ข้อมูลทั้งหมด</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <!-- ข้อมูลพื้นฐานต่าง ๆ -->
                <div class="tab-pane fade show active" id="pills-basic-information" role="tabpanel" aria-labelledby="pills-basic-information-tab" tabindex="0">
                    <!-- ข้อมูลพื้นฐานต่าง ๆ -->
                    <nav>
                        <div class="nav nav-tabs nav justify-content-end" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-blood-center-tab" data-bs-toggle="tab" data-bs-target="#nav-blood-center" type="button" role="tab" aria-controls="nav-blood-center" aria-selected="true">ศูนย์บริการโลหิต</button>
                            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</button>
                            <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</button>
                            <button class="nav-link" id="nav-disabled-tab" data-bs-toggle="tab" data-bs-target="#nav-disabled" type="button" role="tab" aria-controls="nav-disabled" aria-selected="false" disabled>Disabled</button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <!-- ศูนย์บริการโลหิต -->
                        <div class="tab-pane fade show active" id="nav-blood-center" role="tabpanel" aria-labelledby="nav-blood-center-tab" tabindex="0">
                            <table class="table table-bordered text-center display" id="basicinformation_tb" style="width:100%">
                                <thead style="background-color: #0F3D81; color: #FFFFFF;">
                                    <tr>
                                        <td>#</td>
                                        <td>ชื่อศูนย์บริการโลหิต</td>
                                        <td>ที่ตั้ง</td>
                                        <td>เปิด / ปิด</td>
                                        <td>จังหวัด</td>
                                        <td>เขต</td> 	
                                        <td>ติดต่อ</td> 
                                        <td>รายละเอียด</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 0; foreach ($basicinformation_tb as $key => $values) : ?>
                                        <tr>
                                            <td><?= ($i + 1); ?></td>
                                            <td><?= $values->nameSc; ?></td>
                                            <td><?= $values->addressSc; ?></td>
                                            <td><?= $values->officeHoursSc; ?></td>
                                            <td><?= $values->provinceSc; ?></td> 
                                            <td><?= $values->districtSc; ?></td>
                                            <td><?= $values->phoneNumberSc; ?></td>
                                            <td><a class="btn btn-primary btn-sm" href="../../../../bloodDonationProjectCS60/MyApp/View/Users/userViewBasicInformation.php?bc_id=<?= $values->bc_id; ?>" role="button">เพิ่มเติม</a></td>
                                        </tr>
                                    <?php $i++; endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">...</div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">...</div>
                        <div class="tab-pane fade" id="nav-disabled" role="tabpanel" aria-labelledby="nav-disabled-tab" tabindex="0">...</div>
                    </div>
                    <!--  -->
                </div>
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
                            <button class="nav-link" id="formBloodData-tab" data-bs-toggle="tab" data-bs-target="#formBloodData-tab-pane" type="button" role="tab" aria-controls="formBloodData-tab-pane" aria-selected="false">เเบบฟอร์มบริจาคโลหิต</button>
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
                                    <?php $i = 0;
                                    foreach ($makingappointments_tb as $key => $values) : ?>
                                        <tr>
                                            <td><?= ($i + 1); ?></td>
                                            <td><?= $dateThai->get($values->dateApp)->dayMonthYearCut(); ?></td>
                                            <td><?= $values->durationApp; ?></td>
                                            <td><?= $values->durationTime; ?></td>
                                            <?php if ($values->durationStatus == 0) : ?>
                                                <td><span class="badge text-bg-warning">ยังไม่นัดหมาย</span></td>
                                            <?php elseif ($values->durationStatus == 1) : ?>
                                                <td><span class="badge text-bg-success">นัดหมายสำเร็จ</span></td>
                                            <?php endif; ?>
                                        </tr>
                                    <?php $i++;
                                    endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- ข้อมูลเเบบฟอร์มบริจาคโลหิต -->
                        <div class="tab-pane fade" id="formBloodData-tab-pane" role="tabpanel" aria-labelledby="formBloodData-tab" tabindex="0">
                            <table class="table table-bordered text-center display" id="formBloodData" style="width:100%">
                                <thead style="background-color: #0F3D81; color: #FFFFFF;">
                                    <tr>
                                        <td>#</td>
                                        <td>คำถามที่ 1</td>
                                        <td>คำถามที่ 2</td>
                                        <td>คำถามที่ 3</td>
                                        <td>คำถามที่ 4</td>
                                        <td>คำถามที่ 5</td>
                                        <td>คำถามที่ 6</td>
                                        <td>สถานะ</td>
                                        <td>รายละเอียด</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($formblood_tb  as $key => $values) : ?>
                                        <tr>
                                            <td><?= $values->form_id; ?></td>
                                            <td><?= $values->healthCategoryQ1; ?></td>
                                            <td><?= $values->healthCategoryQ2; ?></td>
                                            <td><?= $values->healthCategoryQ3; ?></td>
                                            <td><?= $values->healthCategoryQ4; ?></td>
                                            <td><?= $values->healthCategoryQ5; ?></td>
                                            <td><?= $values->healthCategoryQ6; ?></td>
                                            <?php if ($values->formStatus == 1) : ?>
                                                <td><span class="badge text-bg-success">ทำเเบบสอบถามเเล้ว</span></td>
                                            <?php endif; ?>
                                            <td><a class="btn btn-primary btn-sm" href="../../../../bloodDonationProjectCS60/MyApp/View/Users/userViewFormBlood.php?form_id=<?= $values->form_id; ?>" role="button">เรียกดู</a></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
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
                url: "../../../../bloodDonationProjectCS60/MyApp/Web/BasicInfo/web_BasicInformationController_showDataBasicInfo.php",
                data: {
                    user_id: <?= $_SESSION['user_id']; ?>
                },
                success: function(response) {
                    if (response.status == 200) {
                        fnDataTable('#basicinformation_tb');
                    }
                }
            });
        })();

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

        (function() {
            $.ajax({
                type: "GET",
                dataType: "json",
                url: "../../../../bloodDonationProjectCS60/MyApp/Web/FormBlood/web_FormBloodController_showDataFormBlood.php",
                data: {
                    user_id: <?= $_SESSION['user_id']; ?>
                },
                success: function(response) {
                    if (response.status == 200) {
                        fnDataTable('#formBloodData');
                    }
                }
            });
        })();

        function fnDataTable(tbID) {
            return $(tbID).DataTable();
        }
    });

    function createDataTable() {
        
    }

</script>