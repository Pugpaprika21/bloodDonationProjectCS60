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
                    <li class="breadcrumb-item active" aria-current="page">รายละเอียดข้อมูลสมาชิก</li>
                </ol>
            </nav>
            <div class="row g-3">
                <div class="text-personal-information">
                    ข้อมูลส่วนตัว ----
                </div>
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="input-group mb-2">
                            <span class="input-group-text">ชื่อผู้ใช้</span>
                            <input type="text" class="form-control" id="username" name="username" maxlength="10" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-2">
                            <span class="input-group-text">รหัสผ่าน</span>
                            <input type="text" class="form-control" id="password" name="password" maxlength="10" required>
                        </div>
                    </div>
                    <!--  -->
                    <div class="col-md-6">
                        <div class="input-group mb-2">
                            <span class="input-group-text">ชื่อจริง</span>
                            <input type="text" class="form-control" id="firstname" name="firstname" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-2">
                            <span class="input-group-text">นามสกุล</span>
                            <input type="text" class="form-control" id="lastname" name="lastname" required>
                        </div>
                    </div>
                    <!--  -->
                    <div class="col-md-6">
                        <div class="input-group mb-2">
                            <label class="input-group-text" for="gender">เพศ</label>
                            <select class="form-select" id="gender" name="gender" required>
                                <option>---- เลือก ----</option>
                                <option value="male">ชาย</option>
                                <option value="female">หญิง</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-2">
                            <span class="input-group-text">ว/ด/ป</span>
                            <input type="date" class="form-control" id="dateOfBirth" name="dateOfBirth" required>
                        </div>
                    </div>
                    <!--  -->
                    <div class="col">
                        <div class="input-group mb-2">
                            <label class="input-group-text" for="bloodType">กรุ๊ปเลือด</label required>
                            <select class="form-select" id="bloodType" name="bloodType">
                                <option>---- เลือก ----</option>
                                <option value="A+">หมู่เลือด A+</option>
                                <option value="B+">หมู่เลือด B+</option>
                                <option value="AB+">หมู่เลือด AB+</option>
                                <option value="O+">หมู่เลือด O+ </option>
                                <option value="A-">หมู่เลือด A-</option>
                                <option value="B-">หมู่เลือด B-</option>
                                <option value="AB-">หมู่เลือด AB-</option>
                                <option value="O-">หมู่เลือด O- </option>
                            </select>
                        </div>
                    </div>
                    <!--  -->
                    <div class="col-md-3">
                        <div class="input-group mb-2">
                            <span class="input-group-text">น้ำหนัก</span>
                            <input type="number" class="form-control" id="weight" name="weight" required>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="input-group mb-2">
                            <span class="input-group-text">ส่วนสูง</span>
                            <input type="number" class="form-control" id="height" name="height" required>
                        </div>
                    </div>
                    <!--  -->

                    <div class="text-address-information">
                        ข้อมูลที่อยู่ ----
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-2">
                            <span class="input-group-text">ที่อยู่</span>
                            <input type="text" class="form-control" id="address" name="address" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-2">
                            <span class="input-group-text">ตำบล</span>
                            <input type="text" class="form-control" id="subDistrict" name="subDistrict" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="input-group mb-2">
                            <span class="input-group-text">ถนน</span>
                            <input type="text" class="form-control" id="road" name="road" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-2">
                            <span class="input-group-text">อำเภอ</span>
                            <input type="text" class="form-control" id="district" name="district" required>
                        </div>
                    </div>
                    <!--  -->
                    <div class="col-md-6">
                        <div class="input-group mb-2">
                            <span class="input-group-text">จังหวัด</span>
                            <input type="text" class="form-control" id="province" name="province" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-2">
                            <span class="input-group-text">รหัสไปรษณีย์</span>
                            <input type="text" class="form-control" id="postCode" name="postCode" required>
                        </div>
                    </div>

                    <!--  -->
                    <div class="text-contact-information">
                        ข้อมูลการติดต่อ ----
                    </div>

                    <div class="col-md-6">
                        <div class="input-group mb-2">
                            <span class="input-group-text">บัตรประชาชน</span>
                            <input type="text" class="form-control" id="idCard" name="idCard" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-2">
                            <span class="input-group-text">อีเมล</span>
                            <input type="text" class="form-control" id="email" name="email" required>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="input-group mb-2">
                            <span class="input-group-text">หมายเลขโทรศัพท์</span>
                            <input type="phone" class="form-control" id="phoneNumber" name="phoneNumber" maxlength="10" required>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Admin/Layout/footer.php'); ?>

<script src="../../../../bloodDonationProjectCS60/MyApp/Asset/Js/public/urlSearchParams.js"></script>

<script>
    $(document).ready(function() {

        var url = urlSearchParams('user_id');

        (function() {
            $.ajax({
                type: "GET",
                dataType: "json",
                url: "../../../../bloodDonationProjectCS60/MyApp/Web/Admin/web_AdminController_getUserByID.php",
                data: {
                    user_id: url
                },
                success: function(response) {
                    response.forEach(function(data) {
                        $('#username').val(data.username);
                        $('#password').val(data.password);
                        $('#firstname').val(data.firstname);
                        $('#lastname').val(data.lastname);
                        $('#gender').val(data.gender);
                        $('#dateOfBirth').val(data.dateOfBirth);
                        $('#bloodType').val(data.bloodType);
                        $('#weight').val(data.weight);
                        $('#height').val(data.height);
                        $('#address').val(data.address);
                        $('#subDistrict').val(data.subDistrict);
                        $('#road').val(data.road);
                        $('#district').val(data.district);
                        $('#province').val(data.province);
                        $('#postCode').val(data.postCode);
                        $('#idCard').val(data.idCard);
                        $('#email').val(data.email);
                        $('#phoneNumber').val(data.phoneNumber);
                    });
                }
            });
        })();
    });
</script>


