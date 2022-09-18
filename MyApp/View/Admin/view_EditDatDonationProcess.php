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
                    <li class="breadcrumb-item active" aria-current="page">เเก้ไขข้อมูลขั้นตอนการบริจาคโลหิต</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="container-fluid container-main">
    <div class="card shadow rounded">
        <div class="card-header" style="background-color: #4C5DC6; color: #FFFFFF;">
            ขั้นตอนการบริจาคโลหิต
        </div>
        <div class="card-body">
            <form method="post" id="form-editDonationProcess">
                <div class="row g-3">
                    <div class="col-sm-4">
                        <div class="input-group input-group-sm mb-2">
                            <span class="input-group-text" id="inputGroup-sizing-sm">ขั้นตอนที่ 1</span>
                            <input type="text" class="form-control" id="donationStep1" name="donationStep1" placeholder="ขั้นตอนที่ 1" required>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="input-group input-group-sm mb-2">
                            <span class="input-group-text" id="inputGroup-sizing-sm">ขั้นตอนที่ 2</span>
                            <input type="text" class="form-control" id="donationStep2" name="donationStep2" placeholder="ขั้นตอนที่ 2" required>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="input-group input-group-sm mb-2">
                            <span class="input-group-text" id="inputGroup-sizing-sm">ขั้นตอนที่ 3</span>
                            <input type="text" class="form-control" id="donationStep3" name="donationStep3" placeholder="ขั้นตอนที่ 3" required>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="input-group input-group-sm mb-2">
                            <span class="input-group-text" id="inputGroup-sizing-sm">ขั้นตอนที่ 4</span>
                            <input type="text" class="form-control" id="donationStep4" name="donationStep4" placeholder="ขั้นตอนที่ 4" required>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="input-group input-group-sm mb-2">
                            <span class="input-group-text" id="inputGroup-sizing-sm">ขั้นตอนที่ 5</span>
                            <input type="text" class="form-control" id="donationStep5" name="donationStep5" placeholder="ขั้นตอนที่ 5" required>
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

        var url = urlSearchParams('dona_id');

        (function () {
            $.ajax({
                type: "GET",
                dataType: "json",
                url: "../../../../bloodDonationProjectCS60/MyApp/Web/DonationProcess/web_DonationProcessController_getDonationProcessByID.php",
                data: {
                    dona_id: url
                },
                success: function (response) { 
                    response.forEach(function (data) {
                        $('#donationStep1').val(data.donationStep1);
                        $('#donationStep2').val(data.donationStep2);
                        $('#donationStep3').val(data.donationStep3);
                        $('#donationStep4').val(data.donationStep4);
                        $('#donationStep5').val(data.donationStep5);
                    });
                }
            });
        })();

        $('#form-editDonationProcess').submit(function (e) { 
            e.preventDefault();
            const Fd = new FormData($(this)[0]);
            Fd.append('dona_id', url);

            $.ajax({
                type: "POST",
                dataType: "json",
                url: "../../../../bloodDonationProjectCS60/MyApp/Web/DonationProcess/web_DonationProcessController_editDonationProcessByID.php",
                data: Fd,
                cache: false,
                contentType: false,
                processData: false,
                success: function (response) {
                    if (response.status == 200) {
                        Swal.fire(
                            'สำเร็จ',
                            'เเก้ไขขั้นตอนการบริจาคโลหิตสำเร็จ',
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