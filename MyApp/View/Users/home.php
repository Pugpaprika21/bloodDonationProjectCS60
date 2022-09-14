<?php

use MyApp\Helper\Date\DateThai;

session_start();

require_once dirname(__DIR__) . ('../../../../bloodDonationProjectCS60/MyApp/Include/Autoload.php');

$dateThai = new DateThai();

?>
<?php ($_SESSION['role'] !== 'admin') ? header('location: ../../../../../bloodDonationProjectCS60/index.php') : ''; ?>
<?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Users/Layout/header.php'); ?>
<?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Users/Component/navbar.php'); ?>

<style>
    .card-main {
        margin-top: 30px;
        margin-bottom: 40px;
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

    #donationprocess_tb_info,
    #donationprocess_tb_paginate {
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
                <div class="tab-pane fade show active" id="pills-basic-information" role="tabpanel" aria-labelledby="pills-basic-information-tab" tabindex="0">
                    <nav>
                        <div class="nav nav-tabs nav justify-content-end" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-blood-center-tab" data-bs-toggle="tab" data-bs-target="#nav-blood-center" type="button" role="tab" aria-controls="nav-blood-center" aria-selected="true">ศูนย์บริการโลหิต</button>
                            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">ขั้นตอนการบริจาคโลหิต</button>
                            <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">การเตรียมตัวก่อนหลังบริจาคโลหิต</button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-blood-center" role="tabpanel" aria-labelledby="nav-blood-center-tab" tabindex="0">
                            <?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Users/Layout/basicinformation_tb.php'); ?>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                            <?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Users/Layout/donationprocess_tb.php'); ?>
                        </div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                            <?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Users/Layout/preparing_blooddonation_tb.php'); ?>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-bloodDonationForm" role="tabpanel" aria-labelledby="pills-bloodDonationForm-tab" tabindex="0">
                    <?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Users/Layout/bloodDonationForm.php'); ?>
                </div>
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
                        <div class="tab-pane fade show active" id="appointmentsShowData-tab-pane" role="tabpanel" aria-labelledby="appointmentsShowData-tab" tabindex="0">
                            <?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Users/Layout/appointmentsShowData.php'); ?>
                        </div>
                        <div class="tab-pane fade" id="formBloodData-tab-pane" role="tabpanel" aria-labelledby="formBloodData-tab" tabindex="0">
                            <?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Users/Layout/formBloodData.php'); ?>
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

        var url = '';

        getDataToTable('#basicinformation_tb', '../../../../bloodDonationProjectCS60/MyApp/Web/BasicInfo/web_BasicInformationController_showDataBasicInfo.php', <?= $_SESSION['user_id']; ?>);

        getDataToTable('#appointmentsShowData', '../../../../bloodDonationProjectCS60/MyApp/Web/Appointments/web_MakingAppointmentsController_showDataAppointments.php', {
            user_id: <?= $_SESSION['user_id']; ?>
        });

        getDataToTable('#preparing_blooddonation_tb', '../../../../bloodDonationProjectCS60/MyApp/Web/PreparingBlooddonation/web_PreparingBloodDonationController_showDataPreparingBlooddonation.php', <?= $_SESSION['user_id']; ?>);

        getDataToTable('#formBloodData', '../../../../bloodDonationProjectCS60/MyApp/Web/FormBlood/web_FormBloodController_showDataFormBlood.php', {
            user_id: <?= $_SESSION['user_id']; ?>
        });

        getDataToTable('#donationprocess_tb', '../../../../bloodDonationProjectCS60/MyApp/Web/DonationProcess/web_DonationProcessController_showDataDonationProcess.php', <?= $_SESSION['user_id']; ?>);

        function getDataToTable(dataTable, url, data) {
            $.ajax({
                type: "GET",
                dataType: "json",
                url: url,
                data: data,
                success: function(response) {
                    console.log(response);
                    $(dataTable).DataTable();
                }
            });
        }
    });
</script>