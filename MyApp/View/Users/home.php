<?php

use MyApp\Helper\Date\DateThai;

session_start();

require_once dirname(__DIR__) . ('../../../../bloodDonationProjectCS60/MyApp/Include/Autoload.php');

$dateThai = new DateThai();

?>
<?php ($_SESSION['role'] !== 'user') ? header('location: ../../../../../bloodDonationProjectCS60/index.php') : ''; ?>
<?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Users/Layout/header.php'); ?>
<?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Users/Component/navbar.php'); ?>

<style>
    .navbar {
        background-color: #4C5DC6;
        padding-top: 20px;
        padding-bottom: 20px;
    }

    .navbar-brand {
        color: #FFFFFF;
    }

    /* content */
    .container-main {
        margin-top: 30px;
    }

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

<div class="container-fluid">
    <div class="card shadow rounded card-main">
        <div class="card-body">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-basic-information-tab" data-bs-toggle="pill" data-bs-target="#pills-basic-information" type="button" role="tab" aria-controls="pills-basic-information" aria-selected="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-geo-alt-fill mb-1" viewBox="0 0 16 16">
                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                        </svg> ??????????????????????????????????????????????????? ???
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-bloodDonationForm-tab" data-bs-toggle="pill" data-bs-target="#pills-bloodDonationForm" type="button" role="tab" aria-controls="pills-bloodDonationForm" aria-selected="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-card-checklist mb-1" viewBox="0 0 16 16">
                            <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                            <path d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z" />
                        </svg> ????????????????????????
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-appointments-tab" data-bs-toggle="pill" data-bs-target="#pills-appointments" type="button" role="tab" aria-controls="pills-appointments" aria-selected="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-clipboard-data mb-1" viewBox="0 0 16 16">
                            <path d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V7zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0V9z" />
                            <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
                            <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z" />
                        </svg> ???????????????????????????????????????
                    </button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-basic-information" role="tabpanel" aria-labelledby="pills-basic-information-tab" tabindex="0">
                    <nav>
                        <div class="nav nav-tabs nav justify-content-end" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-blood-center-tab" data-bs-toggle="tab" data-bs-target="#nav-blood-center" type="button" role="tab" aria-controls="nav-blood-center" aria-selected="true">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-geo-alt-fill mb-1" viewBox="0 0 16 16">
                                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                                </svg> ????????????????????????????????????????????????
                            </button>
                            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-diagram-2-fill mb-1" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M6 3.5A1.5 1.5 0 0 1 7.5 2h1A1.5 1.5 0 0 1 10 3.5v1A1.5 1.5 0 0 1 8.5 6v1H11a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0v-1A.5.5 0 0 1 5 7h2.5V6A1.5 1.5 0 0 1 6 4.5v-1zm-3 8A1.5 1.5 0 0 1 4.5 10h1A1.5 1.5 0 0 1 7 11.5v1A1.5 1.5 0 0 1 5.5 14h-1A1.5 1.5 0 0 1 3 12.5v-1zm6 0a1.5 1.5 0 0 1 1.5-1.5h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1A1.5 1.5 0 0 1 9 12.5v-1z" />
                                </svg> ???????????????????????????????????????????????????????????????
                            </button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-blood-center" role="tabpanel" aria-labelledby="nav-blood-center-tab" tabindex="0">
                            <?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Users/Layout/basicinformation_tb.php'); ?>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                            <?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Users/Layout/donationprocess_tb.php'); ?>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-bloodDonationForm" role="tabpanel" aria-labelledby="pills-bloodDonationForm-tab" tabindex="0">
                    <?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Users/Layout/bloodDonationForm.php'); ?>
                </div>
                <div class="tab-pane fade" id="pills-appointments" role="tabpanel" aria-labelledby="pills-appointments-tab" tabindex="0">
                    <ul class="nav nav-tabs nav justify-content-end" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="appointmentsShowData-tab" data-bs-toggle="tab" data-bs-target="#appointmentsShowData-tab-pane" type="button" role="tab" aria-controls="appointmentsShowData-tab-pane" aria-selected="true">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-calendar-date mb-1" viewBox="0 0 16 16">
                                    <path d="M6.445 11.688V6.354h-.633A12.6 12.6 0 0 0 4.5 7.16v.695c.375-.257.969-.62 1.258-.777h.012v4.61h.675zm1.188-1.305c.047.64.594 1.406 1.703 1.406 1.258 0 2-1.066 2-2.871 0-1.934-.781-2.668-1.953-2.668-.926 0-1.797.672-1.797 1.809 0 1.16.824 1.77 1.676 1.77.746 0 1.23-.376 1.383-.79h.027c-.004 1.316-.461 2.164-1.305 2.164-.664 0-1.008-.45-1.05-.82h-.684zm2.953-2.317c0 .696-.559 1.18-1.184 1.18-.601 0-1.144-.383-1.144-1.2 0-.823.582-1.21 1.168-1.21.633 0 1.16.398 1.16 1.23z" />
                                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                                </svg> ????????????????????????????????????????????????
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="formBloodData-tab" data-bs-toggle="tab" data-bs-target="#formBloodData-tab-pane" type="button" role="tab" aria-controls="formBloodData-tab-pane" aria-selected="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-card-checklist mb-1" viewBox="0 0 16 16">
                                    <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                                    <path d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z" />
                                </svg> ????????????????????????????????????????????????????????????
                            </button>
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

        // ... basicinformation_tb
        (function () {
            $.ajax({
                type: "GET",
                dataType: "json",
                url: "../../../../bloodDonationProjectCS60/MyApp/Web/BasicInfo/web_BasicInformationController_getAllBasicInfo.php",
                success: function (response) {
                    let dt = $('#basicinformation_tb').DataTable({
                        data: response,
                        columns: [
                            {data: 'bc_id'},
                            {data: 'nameSc'},
                            {data: 'addressSc'},
                            {data: 'officeHoursSc'},
                            {data: 'provinceSc'},
                            {data: 'districtSc'},
                            {data: 'subDistrictSc'},
                            {data: 'null'},
                        ],
                        columnDefs: [
                            {
                                targets: 7,
                                searchable: false,
                                orderable: false,
                                render: function(data, type, row) {
                                    return `
                                        <div class="d-grid gap-2 d-md-block">
                                            <a class="btn btn-primary btn-sm" href="../../../../bloodDonationProjectCS60/MyApp/View/Users/view_basicInformation.php?bc_id=${row.bc_id}" role="button">???????????????????????????</a>
                                        </div>
                                    `;
                                }
                            }
                        ],
                        order: [
                            [1, 'asc']
                        ],
                    });

                    dt.on('order.dt search.dt', function() {
                        let i = 1;
                        dt.cells(null, 0, {
                            search: 'applied',
                            order: 'applied'
                        }).every(function(cell) {
                            this.data(i++);
                        });
                    }).draw();
                }
            });
        })();

        // ... getAllDonationProcess
        (function () {
            $.ajax({
                type: "GET",
                dataType: "json",
                url: "../../../../bloodDonationProjectCS60/MyApp/Web/DonationProcess/web_DonationProcessController_getAllDonationProcess.php",
                success: function (response) {
                    let dt = $('#donationprocess_tb').DataTable({
                        data: response,
                        columns: [
                            {data: 'dona_id'},
                            {data: 'donationStep1'},
                            {data: 'donationStep2'},
                            {data: 'donationStep3'},
                            {data: 'donationStep4'},
                            {data: 'donationStep5'},
                            {data: 'null'},
                        ],
                        columnDefs: [
                            {
                                targets: 6,
                                searchable: false,
                                orderable: false,
                                render: function(data, type, row) {
                                    return `
                                        <div class="d-grid gap-2 d-md-block">
                                            <a class="btn btn-warning btn-sm" href="../../../../bloodDonationProjectCS60/MyApp/View/Users/view_donationProcess.php?dona_id=${row.dona_id}" role="button">???????????????????????????</a>
                                        </div>
                                    `;
                                }
                            }
                        ],
                        order: [
                            [1, 'asc']
                        ],
                    });

                    dt.on('order.dt search.dt', function() {
                        let i = 1;
                        dt.cells(null, 0, {
                            search: 'applied',
                            order: 'applied'
                        }).every(function(cell) {
                            this.data(i++);
                        });
                    }).draw();
                }
            });
        })();

        // ... appointmentsShowData
        (function () {
            $.ajax({
                type: "GET",
                dataType: "json",
                url: "../../../../bloodDonationProjectCS60/MyApp/Web/Appointments/web_MakingAppointmentsController_getAppointmentsDataByID.php",
                data: {
                    user_id: <?= $_SESSION['user_id']; ?>
                },
                success: function (response) {
                    let dt = $('#appointmentsShowData').DataTable({
                        data: response,
                        columns: [
                            {data: 'makApp_id'},
                            {data: 'dateApp'},
                            {data: 'durationApp'},
                            {data: 'durationTime'},
                            {data: 'durationStatus'},
                        ],
                        columnDefs: [{
                                targets: 4,
                                searchable: false,
                                orderable: false,
                                render: function(data, type, row) {
                                    if (row.durationStatus == 0) {
                                        return `<span class="badge text-bg-success">????????????????????????????????????</span>`;
                                    } else {
                                        return `<span class="badge text-bg-warning">???????????????????????????????????????</span>`;
                                    }
                                }
                        }]
                    });

                    dt.on('order.dt search.dt', function() {
                        let i = 1;
                        dt.cells(null, 0, {
                            search: 'applied',
                            order: 'applied'
                        }).every(function(cell) {
                            this.data(i++);
                        });
                    }).draw();
                }
            });
        })();

        // ... getAllformBlood
        (function () {
            $.ajax({
                type: "GET",   
                dataType: "json",
                url: "../../../../bloodDonationProjectCS60/MyApp/Web/FormBlood/web_FormBloodController_getformBloodByID.php",
                data: {
                    user_id: <?= $_SESSION['user_id']; ?>
                },
                success: function (response) {
                    console.log(response);
                    let dt = $('#formBloodData').DataTable({
                        data: response,
                        columns: [
                            {data: 'form_id'},
                            {data: 'healthCategoryQ1'},
                            {data: 'healthCategoryQ2'},
                            {data: 'healthCategoryQ3'},
                            {data: 'healthCategoryQ4'},
                            {data: 'healthCategoryQ5'},
                            {data: 'healthCategoryQ6'},
                            {data: 'null'},
                        ],
                        columnDefs: [
                            {
                                targets: 7,
                                searchable: false,
                                orderable: false,
                                render: function(data, type, row) {
                                    return `
                                        <div class="d-grid gap-2 d-md-block">
                                            <a class="btn btn-info btn-sm text-white" href="../../../../bloodDonationProjectCS60/MyApp/View/Users/view_formBlood.php?form_id=${row.form_id}" role="button">????????????????????????????????????</a>
                                        </div>
                                    `;
                                }
                            }
                        ],
                        order: [
                            [1, 'asc']
                        ],
                    });
                }
            });
        })();




    });
</script>