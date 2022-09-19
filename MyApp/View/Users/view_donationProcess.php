<?php session_start(); ?>
<?php ($_SESSION['role'] !== 'user') ? header('location: ../../../../../bloodDonationProjectCS60/index.php') : ''; ?>
<?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Users/Layout/header.php'); ?>
<?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Users/component/navbar.php'); ?>

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

    .card-header-donationStep {
        background-color: #E2E1E2;
        color: #000000;
    }
</style>

<div class="container-fluid container-main">
    <div class="card shadow rounded">
        <div class="card-body">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../../../../bloodDonationProjectCS60/MyApp/View/Users/home.php">กลับสู่หน้าหลัก</a></li>
                    <li class="breadcrumb-item active" aria-current="page">ข้อมูลขั้นตอนการบริจาคโลหิต</li>
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
            <div class="row g-3">
                <div class="col-sm-4">
                    <div class="card shadow-sm rounded">
                        <div class="card-header card-header-donationStep">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard-plus" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8 7a.5.5 0 0 1 .5.5V9H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V10H6a.5.5 0 0 1 0-1h1.5V7.5A.5.5 0 0 1 8 7z" />
                                <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
                                <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z" />
                            </svg> ขั้นตอนที่ 1
                        </div>
                        <div class="card-body">
                            <p class="card-text" id="donationStep1"></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card shadow-sm rounded">
                        <div class="card-header card-header-donationStep">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard-plus" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8 7a.5.5 0 0 1 .5.5V9H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V10H6a.5.5 0 0 1 0-1h1.5V7.5A.5.5 0 0 1 8 7z" />
                                <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
                                <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z" />
                            </svg> ขั้นตอนที่ 2
                        </div>
                        <div class="card-body">
                            <p class="card-text" id="donationStep2"></p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card shadow-sm rounded">
                        <div class="card-header card-header-donationStep">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard-plus" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8 7a.5.5 0 0 1 .5.5V9H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V10H6a.5.5 0 0 1 0-1h1.5V7.5A.5.5 0 0 1 8 7z" />
                                <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
                                <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z" />
                            </svg> ขั้นตอนที่ 3
                        </div>
                        <div class="card-body">
                            <p class="card-text" id="donationStep3"></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card shadow-sm rounded">
                        <div class="card-header card-header-donationStep">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard-plus" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8 7a.5.5 0 0 1 .5.5V9H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V10H6a.5.5 0 0 1 0-1h1.5V7.5A.5.5 0 0 1 8 7z" />
                                <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
                                <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z" />
                            </svg> ขั้นตอนที่ 4
                        </div>
                        <div class="card-body">
                            <p class="card-text" id="donationStep4"></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card shadow-sm rounded">
                        <div class="card-header card-header-donationStep">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard-plus" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8 7a.5.5 0 0 1 .5.5V9H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V10H6a.5.5 0 0 1 0-1h1.5V7.5A.5.5 0 0 1 8 7z" />
                                <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
                                <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z" />
                            </svg> ขั้นตอนที่ 5
                        </div>
                        <div class="card-body">
                            <p class="card-text" id="donationStep5"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Users/Layout/footer.php'); ?>

<script src="../../../../bloodDonationProjectCS60/MyApp/Asset/Js/public/urlSearchParams.js"></script>

<script>
    $(document).ready(function() {

        var url = urlSearchParams('dona_id');

        (function() {
            $.ajax({
                type: "GET",
                dataType: "json",
                url: "../../../../bloodDonationProjectCS60/MyApp/Web/DonationProcess/web_DonationProcessController_getDonationProcessByID.php",
                data: {
                    dona_id: url
                },
                success: function(response) {
                    response.forEach(function(data) {
                        $('#donationStep1').html(data.donationStep1);
                        $('#donationStep2').html(data.donationStep2);
                        $('#donationStep3').html(data.donationStep3);
                        $('#donationStep4').html(data.donationStep4);
                        $('#donationStep5').html(data.donationStep5);
                    });
                }
            });
        })();
    });
</script>