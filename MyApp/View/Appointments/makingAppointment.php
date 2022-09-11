<?php session_start(); ?>
<?php ($_SESSION['role'] !== 'admin') ? header('location: ../../../../../bloodDonationProjectCS60/index.php') : ''; ?>
<?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Appointments/Layout/header.php'); ?>
<?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Appointments/Component/navbar.php'); ?>

<style>
    .container {
        margin-top: 20px;
    }

    .card-main {
        width: 70rem;
        border-color: #FF6767;
    }

    .card-main-header {
        padding-top: 20px;
        padding-bottom: 20px;
        color: #FFFFFF;
        background-color: #FF6767;
        font-size: 18px;
    }

    .card-bookingTime {
        border-color: #455467;
    }

    .card-header-showDateThai {
        color: #FFFFFF;
        background-color: #455467;
        padding-top: 20px;
        padding-bottom: 20px;
    }
</style>

<div class="container">
    <div class="d-flex justify-content-center">
        <div class="card card-main shadow-sm rounded">
            <div class="card-header card-main-header">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-calendar-day" viewBox="0 0 16 16">
                    <path d="M4.684 11.523v-2.3h2.261v-.61H4.684V6.801h2.464v-.61H4v5.332h.684zm3.296 0h.676V8.98c0-.554.227-1.007.953-1.007.125 0 .258.004.329.015v-.613a1.806 1.806 0 0 0-.254-.02c-.582 0-.891.32-1.012.567h-.02v-.504H7.98v4.105zm2.805-5.093c0 .238.192.425.43.425a.428.428 0 1 0 0-.855.426.426 0 0 0-.43.43zm.094 5.093h.672V7.418h-.672v4.105z" />
                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                </svg> นัดหมายบริจาคโลหิต
            </div>
            <div class="card-body">
                <!--  -->
                <div class="row g-3">
                    <div class="col-sm-4">
                        <!--  -->
                        <div class="card card-bookingTime shadow-sm rounded">
                            <div class="card-header card-header-showDateThai" id="d1">
                                วันที่ :
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Special title treatment</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Appointments/Component/modal1.php'); ?>
                            </div>
                        </div>
                        <!--  -->
                    </div>
                    <div class="col-sm-4">
                        <!--  -->
                        <div class="card card-bookingTime shadow-sm rounded">
                            <div class="card-header card-header-showDateThai" id="d2">
                                วันที่ :
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Special title treatment</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Appointments/Component/modal2.php'); ?>
                            </div>
                        </div>
                        <!--  -->
                    </div>
                    <div class="col-sm-4">
                        <!--  -->
                        <div class="card card-bookingTime shadow-sm rounded">
                            <div class="card-header card-header-showDateThai" id="d3">
                                วันที่ :
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Special title treatment</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Appointments/Component/modal3.php'); ?>
                            </div>
                        </div>
                        <!--  -->
                    </div>

                    <div class="col-sm-4">
                        <!--  -->
                        <div class="card card-bookingTime shadow-sm rounded">
                            <div class="card-header card-header-showDateThai" id="d4">
                                วันที่ :
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Special title treatment</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Appointments/Component/modal4.php'); ?>
                            </div>
                        </div>
                        <!--  -->
                    </div>
                    <div class="col-sm-4">
                        <!--  -->
                        <div class="card card-bookingTime shadow-sm rounded">
                            <div class="card-header card-header-showDateThai" id="d5">
                                วันที่ :
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Special title treatment</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Appointments/Component/modal5.php'); ?>
                            </div>
                        </div>
                        <!--  -->
                    </div>
                    <div class="col-sm-4">
                        <!--  -->
                        <div class="card card-bookingTime shadow-sm rounded">
                            <div class="card-header card-header-showDateThai" id="d6">
                                วันที่ :
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Special title treatment</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Appointments/Component/modal6.php'); ?>
                            </div>
                        </div>
                        <!--  -->
                    </div>
                </div>
                <!--  -->
            </div>
        </div>
    </div>
</div>

<?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Appointments/Layout/footer.php'); ?>

<script>
    $(document).ready(function() {

        function setTimeBooking() {
            $.ajax({
                type: "POST",
                dataType: "json",
                url: "../../../../bloodDonationProjectCS60/MyApp/Web/Appointments/web_MakingAppointmentsController_createTimeThai.php",
                data: "data",
                success: function(response) {
                    console.log(response);
                }
            });
        }

        (function() {
            $.ajax({
                type: "GET",
                dataType: "json",
                url: "../../../../bloodDonationProjectCS60/MyApp/Web/Appointments/web_MakingAppointmentsController_dateAddDays.php",
                success: function(response) {

                    console.log(response);

                    let iconDate = `
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-clock-fill mb-1" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                        </svg>
                    `;

                    $('#d1').html(iconDate + ' ' + dateThai(response.day1));
                    $('#d2').html(iconDate + ' ' + dateThai(response.day2));
                    $('#d3').html(iconDate + ' ' + dateThai(response.day3));
                    $('#d4').html(iconDate + ' ' + dateThai(response.day4));
                    $('#d5').html(iconDate + ' ' + dateThai(response.day5));
                    $('#d6').html(iconDate + ' ' + dateThai(response.day6));
                }
            });
        })();

        $('#submit-modal1').submit(function (e) { 
            e.preventDefault();
            console.log('hahaha 1');
        });

        $('#submit-modal2').submit(function (e) { 
            e.preventDefault();
            console.log('hahaha 2');
        });

        $('#submit-modal3').submit(function (e) { 
            e.preventDefault();
            console.log('hahaha 3');
        });

        $('#submit-modal4').submit(function (e) { 
            e.preventDefault();
            console.log('hahaha 4');
        });

        $('#submit-modal5').submit(function (e) { 
            e.preventDefault();
            console.log('hahaha 5');
        });

        $('#submit-modal6').submit(function (e) { 
            e.preventDefault();
            console.log('hahaha 6');
        });

        function dateThai(strDate) {
            const date = new Date(strDate);
            const result = date.toLocaleDateString('th-TH', {
                year: 'numeric',
                month: 'long',
                day: 'numeric',
                weekday: 'long',
            });

            return result;
        }
    });

</script>