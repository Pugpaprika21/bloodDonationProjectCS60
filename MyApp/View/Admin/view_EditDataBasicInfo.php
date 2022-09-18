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

    .card {
        margin-bottom: 40px;
    }
</style>

<div class="container-fluid container-main">
    <div class="card shadow rounded">
        <div class="card-body">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../../../../bloodDonationProjectCS60/MyApp/View/Admin/home.php">กลับสู่หน้าหลัก</a></li>
                    <li class="breadcrumb-item active" aria-current="page">เเก้ไขข้อมูลศูนย์บริการโลหิต</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="container-fluid container-main">
    <div class="card shadow rounded">
        <div class="card-header" style="background-color: #4C5DC6; color: #FFFFFF;">
            ข้อมูลศูนย์บริการโลหิต
        </div>
        <div class="card-body">
            <form method="post" id="form-editBasicInfo">
                <div class="row g-3">
                    <div class="col-sm-4">
                        <div class="input-group input-group-sm mb-2">
                            <span class="input-group-text" id="inputGroup-sizing-sm">ชื่อ</span>
                            <input type="text" class="form-control" id="nameSc" name="nameSc" placeholder="ชื่อ" required>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="input-group input-group-sm mb-2">
                            <span class="input-group-text" id="inputGroup-sizing-sm">ที่ตั้ง</span>
                            <input type="text" class="form-control" id="addressSc" name="addressSc" placeholder="ที่ตั้ง" required>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="input-group input-group-sm mb-2">
                            <span class="input-group-text" id="inputGroup-sizing-sm">เปิด / ปิด</span>
                            <input type="text" class="form-control" id="officeHoursSc" name="officeHoursSc" placeholder="เปิด / ปิด" required>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="input-group input-group-sm mb-2">
                            <span class="input-group-text" id="inputGroup-sizing-sm">จังหวัด</span>
                            <input type="text" class="form-control" id="provinceSc" name="provinceSc" placeholder="จังหวัด" required>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="input-group input-group-sm mb-2">
                            <span class="input-group-text" id="inputGroup-sizing-sm">เขต</span>
                            <input type="text" class="form-control" id="districtSc" name="districtSc" placeholder="เขต" required>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="input-group input-group-sm mb-2">
                            <span class="input-group-text" id="inputGroup-sizing-sm">ตำบล</span>
                            <input type="text" class="form-control" id="subDistrictSc" name="subDistrictSc" placeholder="ตำบล" required>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="input-group input-group-sm mb-2">
                            <span class="input-group-text" id="inputGroup-sizing-sm">ถนน</span>
                            <input type="text" class="form-control" id="roadSc" name="roadSc" placeholder="ถนน" required>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="input-group input-group-sm mb-2">
                            <span class="input-group-text" id="inputGroup-sizing-sm">รหัสไปรษณีย์</span>
                            <input type="text" class="form-control" id="postCodeSc" name="postCodeSc" placeholder="รหัสไปรษณีย์" required>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="input-group input-group-sm mb-2">
                            <span class="input-group-text" id="inputGroup-sizing-sm">อีเมล</span>
                            <input type="text" class="form-control" id="emailSc" name="emailSc" placeholder="อีเมล" required>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="input-group input-group-sm mb-2">
                            <span class="input-group-text" id="inputGroup-sizing-sm">ติดต่อ</span>
                            <input type="text" class="form-control" id="phoneNumberSc" name="phoneNumberSc" placeholder="ติดต่อ" required>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-warning btn-sm w-100 mt-4">เเก้ไข</button>
            </form>
        </div>
    </div>
</div>

<?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Admin/Layout/footer.php'); ?>

<script src="../../../../bloodDonationProjectCS60/MyApp/Asset/Js/public/urlSearchParams.js"></script>

<script>
    $(document).ready(function() {

        var url = urlSearchParams('bc_id');

        (function() {
            $.ajax({
                type: "GET",
                dataType: "json",
                url: "../../../../bloodDonationProjectCS60/MyApp/Web/BasicInfo/web_BasicInformationController_getBasicInfoByID.php",
                data: {
                    bc_id: url
                },
                success: function(response) {
                    response.forEach(function(data) {
                        $('#nameSc').val(data.nameSc);
                        $('#addressSc').val(data.addressSc);
                        $('#officeHoursSc').val(data.officeHoursSc);
                        $('#provinceSc').val(data.provinceSc);
                        $('#districtSc').val(data.districtSc);
                        $('#subDistrictSc').val(data.subDistrictSc);
                        $('#roadSc').val(data.roadSc);
                        $('#postCodeSc').val(data.postCodeSc);
                        $('#emailSc').val(data.emailSc);
                        $('#phoneNumberSc').val(data.phoneNumberSc);
                    });
                }
            });
        })();

        $('#form-editBasicInfo').submit(function(e) {
            e.preventDefault();
            const Fd = new FormData($(this)[0]);
            Fd.append('bc_id', url);

            $.ajax({
                type: "POST",
                dataType: "json",
                url: "../../../../bloodDonationProjectCS60/MyApp/Web/BasicInfo/web_BasicInformationController_editBasicInfoByID.php",
                data: Fd,
                cache: false,
                contentType: false,
                processData: false,
                success: function(response) {
                    if (response.status == 200) {
                        Swal.fire(
                            'สำเร็จ',
                            'เเก้ไขข้อมูลศูนย์บริการโลหิตสำเร็จ',
                            'success'
                        ).then((result) => {
                            window.location.reload();
                        });
                    }
                }
            });
        });
    });
</script>