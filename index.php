<?php require_once dirname(__DIR__) . ('../bloodDonationProjectCS60/MyApp/Include/Autoload.php'); ?>
<?php require_once('../bloodDonationProjectCS60/MyApp/Template/Index/Layout/header.php'); ?>
<?php require_once('../bloodDonationProjectCS60/MyApp/Template/Index/Layout/formLogin.php'); ?>
<?php require_once('../bloodDonationProjectCS60/MyApp/Template/Index/Layout/footer.php'); ?>

<script src="../bloodDonationProjectCS60/MyApp/Asset/Js/public/urlSearchParams.js"></script>

<script>
    $(document).ready(function() {

        var getUrl = urlSearchParams('logout');

        $('#form-login').submit(function(e) {
            e.preventDefault();

            let username = $('#username').val();
            let password = $('#password').val();

            if (username !== '' && password !== '') {
                $.ajax({
                    type: "POST",
                    dataType: "json",
                    url: "../bloodDonationProjectCS60/MyApp/Web/Home/web_LoginController_login.php",
                    data: {
                        username: username,
                        password: password
                    },
                    success: function(response) {
                        if (response.massage == 'user') {
                            Swal.fire(
                                'สำเร็จ',
                                'ล็อคอินสำเร็จ',
                                'success'
                            ).then((result => {
                                window.location.href = '../bloodDonationProjectCS60/MyApp/View/Users/home.php';
                            }));

                        } else if (response.massage == 'admin') {
                            Swal.fire(
                                'สำเร็จ',
                                'ล็อคอินสำเร็จ',
                                'success'
                            ).then((result => {
                                window.location.href = '../bloodDonationProjectCS60/MyApp/View/Admin/home.php';
                            }));

                        } else {
                            Swal.fire(
                                'ผิดพลาด',
                                'ล็อคอินไม่สำเร็จ',
                                'error'
                            ).then((result => {
                                window.location.reload();
                            }));
                        }
                    }
                });
            }
        });

        logout(getUrl);

        function logout(getUrl) {
            $.ajax({
                type: "POST",
                dataType: "json",
                url: "../bloodDonationProjectCS60/MyApp/Web/Home/web_LogoutController_logout.php",
                data: {
                    logout: getUrl
                },
                success: function(response) {
                    //console.log(response);
                }
            });
        }
    });
</script>