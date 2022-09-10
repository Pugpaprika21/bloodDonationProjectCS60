<?php require_once dirname(__DIR__) . ('../bloodDonationProjectCS60/MyApp/Include/Autoload.php'); ?>
<?php require_once('../bloodDonationProjectCS60/MyApp/Template/Index/Layout/header.php'); ?>
<?php require_once('../bloodDonationProjectCS60/MyApp/Template/Index/Layout/formLogin.php'); ?>
<?php require_once('../bloodDonationProjectCS60/MyApp/Template/Index/Layout/footer.php'); ?>

<script>

    $(document).ready(function () {
        
        $('#form-login').submit(function (e) { 
            e.preventDefault();
          
            let username = $('#username').val();
            let password = $('#password').val();

            if (username !== '' && password !== '') {
                $.ajax({
                    type: "POST",
                    dataType: "json",
                    url: "../bloodDonationProjectCS60/MyApp/Web/Home/web_LoginController_login.php",
                    data: {username: username, password: password},
                    success: function (response) {
                        if (response.status == 200) {
                            window.location.href = '../bloodDonationProjectCS60/MyApp/View/Users/home.php';
                        }
                    }
                });
            } 
        });
    });

</script>