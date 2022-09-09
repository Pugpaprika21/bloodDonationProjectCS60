<?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Home/Layout/header.php'); ?>
<?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Home/Layout/register.php'); ?>
<?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Home/Layout/footer.php'); ?>

<script>
    $(document).ready(function () {
        $('#form-register').submit(function (e) { 
            e.preventDefault();
            const Fd = new FormData($(this)[0]);

            $.ajax({
                type: "POST",
                dataType: "json",
                url: "../../../../bloodDonationProjectCS60/MyApp/Web/Home/web_RegisterController_register.php",
                data: Fd,
                contentType: false,
                processData: false,
                success: function (response) {
                    console.log(response);
                }
            });
        });
    });
</script>