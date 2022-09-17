<?php session_start(); ?>
<?php ($_SESSION['role'] !== 'admin') ? header('location: ../../../../../bloodDonationProjectCS60/index.php') : ''; ?>
<?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Admin/Layout/header.php'); ?>
<?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Admin/component/navbar.php'); ?>

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

    #form-appointment-edit {
        margin-top: 25px;
    }
</style>

<div class="container-fluid container-main">
    <div class="card shadow rounded">
        <div class="card-body">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../../../../bloodDonationProjectCS60/MyApp/View/Admin/home.php">กลับสู่หน้าหลัก</a></li>
                    <li class="breadcrumb-item active" aria-current="page">เเก้ไขการนัดหมายบริจาคโลหิต</li>
                </ol>
            </nav>
            <form method="post" id="form-appointment-edit">
                <div class="row g-3">
                    <div class="col-7">
                        <div class="input-group mb-2">
                            <span class="input-group-text">วันที่นัดหมาย</span>
                            <input type="date" class="form-control" id="dateApp" name="dateApp" value="" required>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="input-group mb-2">
                            <span class="input-group-text">ช่วงที่นัดหมาย</span>
                            <input type="text" class="form-control" id="durationApp" name="durationApp" value="" required>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="input-group mb-2">
                            <span class="input-group-text">เวลาที่นัดหมาย</span>
                            <input type="text" class="form-control" id="durationTime" name="durationTime" value="" required>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="input-group mb-2">
                            <span class="input-group-text">สถานะ</span>
                            <input type="text" class="form-control" id="durationStatus" name="durationStatus" value="" required>
                        </div>
                    </div>
                    <div class="input-group mb-2">
                        <button type="submit" class="btn btn-success btn-sm w-100">เเก่ไข</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Admin/Layout/footer.php'); ?>

<script src="../../../../bloodDonationProjectCS60/MyApp/Asset/Js/public/urlSearchParams.js"></script>


<script>
    $(document).ready(function() {
        
        var url = urlSearchParams('makApp_id');

        (function () {
            $.ajax({
                type: "GET",
                dataType: "json",
                url: "../../../../bloodDonationProjectCS60/MyApp/Web/Admin/web_AdminController_getDataEditAppointmentByID.php",
                data: {
                    makApp_id: url
                },
                success: function (response) {
                    response.forEach(function (data) {
                        $('#dateApp').val(data.dateApp);
                        $('#durationApp').val(data.durationApp);
                        $('#durationTime').val(data.durationTime);
                        $('#durationStatus').val(data.durationStatus);
                    });
                }
            });
        })();

        $('#form-appointment-edit').submit(function(e) {
            e.preventDefault();

            let dateApp = $('#dateApp').val();
            let durationApp = $('#durationApp').val();
            let durationTime = $('#durationTime').val();
            let durationStatus = $('#durationStatus').val();

            $.ajax({
                type: "POST",
                dataType: "json",
                url: "url",
                data: "data",
                success: function (response) {
                    
                }
            });


        });

    });
</script>


