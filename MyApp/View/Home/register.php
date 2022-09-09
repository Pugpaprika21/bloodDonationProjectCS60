<?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Home/Layout/header.php'); ?>
<?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Home/Layout/register.php'); ?>
<?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Home/Layout/footer.php'); ?>

<script>
    $(document).ready(function () {
        $('#form-register').submit(function (e) { 
            e.preventDefault();

            console.log('hgahaha');
            
        });
    });
</script>