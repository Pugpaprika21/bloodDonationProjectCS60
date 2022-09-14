<?php session_start(); ?>
<?php ($_SESSION['role'] !== 'admin') ? header('location: ../../../../../bloodDonationProjectCS60/index.php') : ''; ?>
<?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Users/Layout/header.php'); ?>
<?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Users/Component/navbar.php'); ?>

<style>
    .container {
        margin-top: 30px;
    }

    .card-header {
        padding-top: 20px;
        padding-bottom: 20px;
        color: #FFFFFF;
        background-color: #1B5BA3;
        font-size: 18px;
    }
</style>

<div class="container">
    <div class="card shadow-sm rounded">
        <div class="card-header">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
            </svg> ข้อมูลศูนย์บริการโลหิต
        </div>
        <div class="card-body">
            <!--  -->
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-primary btn-sm me-md-2" href="../../../../bloodDonationProjectCS60/MyApp/View/Users/home.php" role="button">ย้อนกลับ</a>
            </div>
            <!--  -->
            <table class="table table-bordered text-center mt-3 display" id="basicinformation_tb" style="width:100%">
                <thead style="background-color: #0F3D81; color: #FFFFFF;">
                    <tr>
                        <td>#</td>
                        <td>ชื่อ</td>
                        <td>ที่ตั้ง</td>
                        <td>เปิด / ปิด</td>
                        <td>จังหวัด</td>
                        <td>เขต</td>
                        <td>ตำบล</td>
                        <td>ถนน</td>
                        <td>รหัสไปรษณีย์</td>
                        <td>อีเมล</td>
                        <td>ติดต่อ</td>
                    </tr>
                </thead>
                <tbody id="display-basicinformation">

                </tbody>
            </table>
        </div>
    </div>
</div>

<?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Users/Layout/footer.php'); ?>

<script src="../../../../bloodDonationProjectCS60/MyApp/Asset/Js/public/urlSearchParams.js"></script>

<script>
    $(document).ready(function() {
        let getUrl = urlSearchParams('bc_id');
        $.ajax({
            type: "GET",
            dataType: "json",
            url: "../../../../bloodDonationProjectCS60/MyApp/Web/BasicInfo/web_BasicInformationController_showDataBasicInfoByID.php",
            data: {
                bc_id: getUrl
            },
            success: function(response) {
                let html = ``;
                let num = 0;

                response.forEach(function (data) {
                    html += `
                        <tr>
                            <td>${(num + 1)}</td>
                            <td>${data.nameSc}</td>
                            <td>${data.addressSc}</td>
                            <td>${data.officeHoursSc}</td>
                            <td>${data.provinceSc}</td>
                            <td>${data.districtSc}</td>
                            <td>${data.subDistrictSc}</td>
                            <td>${data.roadSc}</td>
                            <td>${data.postCodeSc}</td>
                            <td>${data.emailSc}</td>
                            <td>${data.phoneNumberSc}</td>
                        </tr>
                    `;

                    $('#display-basicinformation').html(html);
                    num++;

                });
            }
        });
    });
</script>

