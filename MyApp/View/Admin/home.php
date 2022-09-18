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
<!-- content -->
<div class="container-fluid container-main">
    <div class="card shadow rounded">
        <div class="card-body">
            <!-- main-nav-tab -->
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">หน้าเเรก</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-insertData-tab" data-bs-toggle="pill" data-bs-target="#pills-insertData" type="button" role="tab" aria-controls="pills-insertData" aria-selected="false">เพิ่มข้อมูล</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-editAsDelete-tab" data-bs-toggle="pill" data-bs-target="#pills-editAsDelete" type="button" role="tab" aria-controls="pills-editAsDelete" aria-selected="false">เเก้ไข / ลบ</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#pills-disabled" type="button" role="tab" aria-controls="pills-disabled" aria-selected="false" disabled>Disabled</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <!-- หน้าเเรก -->
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                    <!-- nav-chaild home -->
                    <nav>
                        <div class="nav nav-tabs nav justify-content-end" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-chartJs-tab" data-bs-toggle="tab" data-bs-target="#nav-chartJs" type="button" role="tab" aria-controls="nav-chartJs" aria-selected="true">ข้อมูลต่างๆ</button>
                            <button class="nav-link" id="nav-userData-tab" data-bs-toggle="tab" data-bs-target="#nav-userData" type="button" role="tab" aria-controls="nav-userData" aria-selected="false">สมาชิก</button>
                            <button class="nav-link" id="nav-formBlood-tab" data-bs-toggle="tab" data-bs-target="#nav-formBlood" type="button" role="tab" aria-controls="nav-formBlood" aria-selected="true">ข้อมูลเเบบฟอร์มเเสดงความประสงค์</button>
                            <button class="nav-link" id="nav-appointment-tab" data-bs-toggle="tab" data-bs-target="#nav-appointment" type="button" role="tab" aria-controls="nav-appointment" aria-selected="false">นัดหมายบริจาคโลหิต</button>
                            <button class="nav-link" id="nav-disabled-tab" data-bs-toggle="tab" data-bs-target="#nav-disabled" type="button" role="tab" aria-controls="nav-disabled" aria-selected="false" disabled>Disabled</button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-chartJs" role="tabpanel" aria-labelledby="nav-chartJs-tab" tabindex="0">...</div>
                        <!-- userData -->
                        <div class="tab-pane fade" id="nav-userData" role="tabpanel" aria-labelledby="nav-userData-tab" tabindex="0">
                            <?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Admin/Layout/userData_tb.php'); ?>
                        </div>
                        <!-- formBlood -->
                        <div class="tab-pane fade" id="nav-formBlood" role="tabpanel" aria-labelledby="nav-formBlood-tab" tabindex="0">
                            <?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Admin/Layout/formBlood.php'); ?>
                        </div>
                        <!-- appointment -->
                        <div class="tab-pane fade" id="nav-appointment" role="tabpanel" aria-labelledby="nav-appointment-tab" tabindex="0">
                            <?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Admin/Layout/appointment_tb.php'); ?>
                        </div>
                        
                        <div class="tab-pane fade" id="nav-disabled" role="tabpanel" aria-labelledby="nav-disabled-tab" tabindex="0">...</div>
                    </div>
                    <!-- nav-chaild home -->
                </div>
                <!-- จัดการ -->
                <div class="tab-pane fade" id="pills-insertData" role="tabpanel" aria-labelledby="pills-insertData-tab" tabindex="0">
                    <nav>
                        <div class="nav nav-tabs nav justify-content-end" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-insertBasicInfo-tab" data-bs-toggle="tab" data-bs-target="#nav-insertBasicInfo" type="button" role="tab" aria-controls="nav-insertBasicInfo" aria-selected="true">ข้อมูลพื้นฐาน</button>
                            <button class="nav-link" id="nav-insert-donationprocess-tab" data-bs-toggle="tab" data-bs-target="#nav-insert-donationprocess" type="button" role="tab" aria-controls="nav-insert-donationprocess" aria-selected="false">ขั้นตอนการบริจาคโลหิต</button>
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
                <!-- nav-chaild editAsDelete -->
                <div class="tab-pane fade" id="pills-editAsDelete" role="tabpanel" aria-labelledby="pills-editAsDelete-tab" tabindex="0">
                    <nav>
                        <div class="nav nav-tabs nav justify-content-end" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-editAsDelBasicInfo-tab" data-bs-toggle="tab" data-bs-target="#nav-editAsDelBasicInfo" type="button" role="tab" aria-controls="nav-editAsDelBasicInfo" aria-selected="true">ข้อมูลพื้นฐาน</button>
                            <button class="nav-link" id="nav-editAsDelDonationProcess-tab" data-bs-toggle="tab" data-bs-target="#nav-editAsDelDonationProcess" type="button" role="tab" aria-controls="nav-editAsDelDonationProcess" aria-selected="false">ขั้นตอนการบริจาคโลหิต</button>
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
                <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">...</div>
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
                                        return `<span class="badge text-bg-success">นัดหมายเเล้ว</span>`;
                                    } else {
                                        return `<span class="badge text-bg-warning">ยังไม่นัดหมาย</span>`;
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
                                            <a class="btn btn-warning btn-sm" href="../../../../bloodDonationProjectCS60/MyApp/View/Admin/appointment_edit.php?makApp_id=${row.makApp_id}" role="button">เเก้ไข</a>
                                            <button type="button" class="btn btn-danger btn-sm" onclick="btnDelete(${row.makApp_id}, 'ต้องการลบข้อมูลการนัดหมายรหัส ', '../../../../bloodDonationProjectCS60/MyApp/Web/Admin/web_AdminController_deleteAppointmentByID.php');">ลบ</button>
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
                                            <a class="btn btn-info btn-sm text-white" href="../../../../bloodDonationProjectCS60/MyApp/View/Admin/view_userData.php?user_id=${row.user_id}" role="button">ดู</a>
                                            <a class="btn btn-warning btn-sm" href="../../../../bloodDonationProjectCS60/MyApp/View/Admin/view_userEditData.php?user_id=${row.user_id}" role="button">เเก้ไข</a>
                                            <button type="button" class="btn btn-danger btn-sm" onclick="btnDelete(${row.user_id}, 'ต้องการลบข้อมูลสมาชิกรหัส ', '../../../../bloodDonationProjectCS60/MyApp/Web/Admin/web_AdminController_deleteUserByID.php');">ลบ</button>
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
                                            <a class="btn btn-info btn-sm text-white" href="../../../../bloodDonationProjectCS60/MyApp/View/Admin/view_formBlood.php?form_id=${row.form_id}" role="button">ดูรายละเอียด</a>
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
                            'สำเร็จ',
                            'เพิ่มข้อมูลศูนย์บริการโลหิตสำเร็จ',
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
                            'สำเร็จ',
                            'เพิ่มข้อมูลขั้นตอนการบริจาคโลหิต',
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
                                            <a class="btn btn-warning btn-sm" href="../../../../bloodDonationProjectCS60/MyApp/View/Admin/view_EditDataBasicInfo.php?bc_id=${row.bc_id}" role="button">เเก้ไข</a>
                                            <button type="button" class="btn btn-danger btn-sm" onclick="btnDelete(${row.bc_id}, 'ต้องการลบข้อมูลศูนย์บริการโลหิตรหัส ', '../../../../bloodDonationProjectCS60/MyApp/Web/BasicInfo/web_BasicInformationController_deleteBasicInfoByID.php');">ลบ</button>
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
                                            <a class="btn btn-warning btn-sm" href="../../../../bloodDonationProjectCS60/MyApp/View/Admin/view_EditDatDonationProcess.php?dona_id=${row.dona_id}" role="button">เเก้ไข</a>
                                            <button type="button" class="btn btn-danger btn-sm" onclick="btnDelete(${row.dona_id}, 'ต้องการลบข้อมูลขั้นตอนการบริจาคโลหิตรหัส ', '../../../../bloodDonationProjectCS60/MyApp/Web/DonationProcess/web_DonationProcessController_deleteDonationProcessByID.php');">ลบ</button>
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
            text: text + id + " หรือไม่",
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
                                'สำเร็จ',
                                'ลบข้อมูลสำเร็จ',
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

