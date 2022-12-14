<?php session_start(); ?>
<?php ($_SESSION['role'] !== 'admin') ? header('location: ../../../../../bloodDonationProjectCS60/index.php') : ''; ?>
<?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Admin/Layout/header.php'); ?>

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

    /* main-nav-tab */

    .dataTables_length, .dataTables_filter {
        margin-top: 20px;
        margin-bottom: 20px;
    }

    #appointment_info, #appointment_paginate {
        margin-top: 15px;
    }

    #userData_info, #userData_paginate {
        margin-top: 15px;
    }

    #formBlood_info,
    #formBlood_paginate {
        margin-top: 15px;
    }

    #editAsDelBasicInfo_info,
    #editAsDelBasicInfo_paginate {
        margin-top: 15px;
    }

    thead {
        background-color: #4C5DC6;
        color: #FFFFFF;
    }
</style>


<?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Admin/component/navbar.php'); ?>

<div class="container-fluid container-main">
    <div class="card shadow rounded">
        <div class="card-body">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill mb-1" viewBox="0 0 16 16">
                            <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
                        </svg> ????????????????????????
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-insertData-tab" data-bs-toggle="pill" data-bs-target="#pills-insertData" type="button" role="tab" aria-controls="pills-insertData" aria-selected="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                        </svg> ?????????????????????????????????
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-editAsDelete-tab" data-bs-toggle="pill" data-bs-target="#pills-editAsDelete" type="button" role="tab" aria-controls="pills-editAsDelete" aria-selected="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-square" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z"/>
                        </svg> ?????????????????? / ??????
                    </button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                    <nav>
                        <div class="nav nav-tabs nav justify-content-end" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-userData-tab" data-bs-toggle="tab" data-bs-target="#nav-userData" type="button" role="tab" aria-controls="nav-userData" aria-selected="false">??????????????????</button>
                            <button class="nav-link" id="nav-formBlood-tab" data-bs-toggle="tab" data-bs-target="#nav-formBlood" type="button" role="tab" aria-controls="nav-formBlood" aria-selected="true">?????????????????????????????????????????????????????????????????????????????????????????????</button>
                            <button class="nav-link" id="nav-appointment-tab" data-bs-toggle="tab" data-bs-target="#nav-appointment" type="button" role="tab" aria-controls="nav-appointment" aria-selected="false">??????????????????????????????????????????????????????</button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-userData" role="tabpanel" aria-labelledby="nav-userData-tab" tabindex="0">
                            <?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Admin/Layout/userData_tb.php'); ?>
                        </div>
                        <div class="tab-pane fade" id="nav-formBlood" role="tabpanel" aria-labelledby="nav-formBlood-tab" tabindex="0">
                            <?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Admin/Layout/formBlood.php'); ?>
                        </div>
                        <div class="tab-pane fade" id="nav-appointment" role="tabpanel" aria-labelledby="nav-appointment-tab" tabindex="0">
                            <?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Admin/Layout/appointment_tb.php'); ?>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-insertData" role="tabpanel" aria-labelledby="pills-insertData-tab" tabindex="0">
                    <nav>
                        <div class="nav nav-tabs nav justify-content-end" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-insertBasicInfo-tab" data-bs-toggle="tab" data-bs-target="#nav-insertBasicInfo" type="button" role="tab" aria-controls="nav-insertBasicInfo" aria-selected="true">???????????????????????????????????????</button>
                            <button class="nav-link" id="nav-insert-donationprocess-tab" data-bs-toggle="tab" data-bs-target="#nav-insert-donationprocess" type="button" role="tab" aria-controls="nav-insert-donationprocess" aria-selected="false">???????????????????????????????????????????????????????????????</button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-insertBasicInfo" role="tabpanel" aria-labelledby="nav-insertBasicInfo-tab" tabindex="0">
                            <?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Admin/Layout/form_insertBasicInfo.php'); ?>
                        </div>
                        <div class="tab-pane fade" id="nav-insert-donationprocess" role="tabpanel" aria-labelledby="nav-insert-donationprocess-tab" tabindex="0">
                            <?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Admin/Layout/form_donationprocess.php'); ?>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-editAsDelete" role="tabpanel" aria-labelledby="pills-editAsDelete-tab" tabindex="0">
                    <nav>
                        <div class="nav nav-tabs nav justify-content-end" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-editAsDelBasicInfo-tab" data-bs-toggle="tab" data-bs-target="#nav-editAsDelBasicInfo" type="button" role="tab" aria-controls="nav-editAsDelBasicInfo" aria-selected="true">???????????????????????????????????????</button>
                            <button class="nav-link" id="nav-editAsDelDonationProcess-tab" data-bs-toggle="tab" data-bs-target="#nav-editAsDelDonationProcess" type="button" role="tab" aria-controls="nav-editAsDelDonationProcess" aria-selected="false">???????????????????????????????????????????????????????????????</button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-editAsDelBasicInfo" role="tabpanel" aria-labelledby="nav-editAsDelBasicInfo-tab" tabindex="0">
                            <?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Admin/Layout/editAsDelBasicInfo_tb.php'); ?>
                        </div>
                        <div class="tab-pane fade" id="nav-editAsDelDonationProcess" role="tabpanel" aria-labelledby="nav-editAsDelDonationProcess-tab" tabindex="0">
                            <?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Admin/Layout/editAsDelDonationProcess_tb.php'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Admin/Layout/footer.php'); ?>

<script>
    $(document).ready(function() {

        // ... getAllDataAppointment
        (function() {
            $.ajax({
                type: "GET",
                dataType: "json",
                url: "../../../../bloodDonationProjectCS60/MyApp/Web/Admin/web_AdminController_getAllDataAppointment.php",
                success: function(response) {
                    let dt = $('#appointment').DataTable({
                        data: response,
                        columns: [
                            {data: 'makApp_id'},
                            {data: 'dateApp'},
                            {data: 'durationApp'},
                            {data: 'durationTime'},
                            {data: 'null'},
                            {data: 'null'},
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
                            },
                            {
                                targets: 5,
                                searchable: false,
                                orderable: false,
                                render: function(data, type, row) {
                                    return `
                                        <div class="d-grid gap-2 d-md-block">
                                            <a class="btn btn-warning btn-sm" href="../../../../bloodDonationProjectCS60/MyApp/View/Admin/appointment_edit.php?makApp_id=${row.makApp_id}" role="button">??????????????????</a>
                                            <button type="button" class="btn btn-danger btn-sm" onclick="btnDelete(${row.makApp_id}, '??????????????????????????????????????????????????????????????????????????????????????? ', '../../../../bloodDonationProjectCS60/MyApp/Web/Admin/web_AdminController_deleteAppointmentByID.php');">??????</button>
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

        // ... getAllUserData
        (function () {
            $.ajax({
                type: "GET",
                dataType: "json",
                url: "../../../../bloodDonationProjectCS60/MyApp/Web/Admin/web_AdminController_getAllUserData.php",
                success: function (response) {
                    let dt = $('#userData').DataTable({
                        data: response,
                        columns: [
                            {data: 'user_id'},
                            {data: 'username'},
                            {data: 'password'},
                            {data: 'firstname'},
                            {data: 'lastname'},
                            {data: 'gender'},
                            {data: 'bloodType'},
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
                                            <a class="btn btn-info btn-sm text-white" href="../../../../bloodDonationProjectCS60/MyApp/View/Admin/view_userData.php?user_id=${row.user_id}" role="button">??????</a>
                                            <a class="btn btn-warning btn-sm" href="../../../../bloodDonationProjectCS60/MyApp/View/Admin/view_userEditData.php?user_id=${row.user_id}" role="button">??????????????????</a>
                                            <button type="button" class="btn btn-danger btn-sm" onclick="btnDelete(${row.user_id}, '??????????????????????????????????????????????????????????????????????????? ', '../../../../bloodDonationProjectCS60/MyApp/Web/Admin/web_AdminController_deleteUserByID.php');">??????</button>
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

        // ... getAllformBlood
        (function () {
            $.ajax({
                type: "GET",
                dataType: "json",
                url: "../../../../bloodDonationProjectCS60/MyApp/Web/FormBlood/web_FormBloodController_getAllformBlood.php",
                success: function (response) {
                    let dt = $('#formBlood').DataTable({
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
                                            <a class="btn btn-info btn-sm text-white" href="../../../../bloodDonationProjectCS60/MyApp/View/Admin/view_formBlood.php?form_id=${row.form_id}" role="button">????????????????????????????????????</a>
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

        $('#form-insertBasicInfo').submit(function (e) { 
            e.preventDefault();
            const Fd = new FormData($(this)[0]);
            $.ajax({
                type: "POST",
                dataType: "json",
                url: "../../../../bloodDonationProjectCS60/MyApp/Web/BasicInfo/web_BasicInformationController_insertBasicInfo.php",
                data: Fd,
                cache: false,
                contentType: false,
                processData: false,
                success: function (response) {
                    if (response.status == 200) {
                        Swal.fire(
                            '??????????????????',
                            '???????????????????????????????????????????????????????????????????????????????????????????????????',
                            'success'
                        ).then((result) => {
                            window.location.reload();
                        });
                    }
                }
            });
        });

        $('#form-insertDonationprocess').submit(function (e) { 
            e.preventDefault();
            const Fd = new FormData($(this)[0]);
            $.ajax({
                type: "POST",
                dataType: "json",
                url: "../../../../bloodDonationProjectCS60/MyApp/Web/DonationProcess/web_DonationProcessController_insertDonationprocess.php",
                data: Fd,
                cache: false,
                contentType: false,
                processData: false,
                success: function (response) {
                    if (response.status == 200) {
                        Swal.fire(
                            '??????????????????',
                            '????????????????????????????????????????????????????????????????????????????????????????????????',
                            'success'
                        ).then((result) => {
                            window.location.reload();
                        }); 
                    }
                }
            });
        });

        // ... editAsDelBasicInfo
        (function () {
            $.ajax({
                type: "GET",
                dataType: "json",
                url: "../../../../bloodDonationProjectCS60/MyApp/Web/BasicInfo/web_BasicInformationController_getAllBasicInfo.php",
                success: function (response) {
                    let dt = $('#editAsDelBasicInfo').DataTable({
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
                                            <a class="btn btn-warning btn-sm" href="../../../../bloodDonationProjectCS60/MyApp/View/Admin/view_EditDataBasicInfo.php?bc_id=${row.bc_id}" role="button">??????????????????</a>
                                            <button type="button" class="btn btn-danger btn-sm" onclick="btnDelete(${row.bc_id}, '????????????????????????????????????????????????????????????????????????????????????????????????????????? ', '../../../../bloodDonationProjectCS60/MyApp/Web/BasicInfo/web_BasicInformationController_deleteBasicInfoByID.php');">??????</button>
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

        // ... editAsDelDonationProcess
        (function () {
            $.ajax({
                type: "GET",
                dataType: "json",
                url: "../../../../bloodDonationProjectCS60/MyApp/Web/DonationProcess/web_DonationProcessController_getAllDonationProcess.php",
                success: function (response) {
                    let dt = $('#editAsDelDonationProcess').DataTable({
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
                                            <a class="btn btn-warning btn-sm" href="../../../../bloodDonationProjectCS60/MyApp/View/Admin/view_EditDatDonationProcess.php?dona_id=${row.dona_id}" role="button">??????????????????</a>
                                            <button type="button" class="btn btn-danger btn-sm" onclick="btnDelete(${row.dona_id}, '???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? ', '../../../../bloodDonationProjectCS60/MyApp/Web/DonationProcess/web_DonationProcessController_deleteDonationProcessByID.php');">??????</button>
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

    });

    function btnDelete(id, text, url) {
        Swal.fire({
            title: 'Are you sure?',
            text: text + id + " ?????????????????????",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: url,
                    data: {
                        id: id
                    },
                    success: function (response) {
                        if (response.status == 200) {
                            Swal.fire(
                                '??????????????????',
                                '??????????????????????????????????????????',
                                'success'
                            ).then((result) => {
                                window.location.reload();
                            });
                        }
                    }
                });
            }
        });
    }

</script>

