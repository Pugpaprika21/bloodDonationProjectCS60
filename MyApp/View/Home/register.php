<?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Home/Layout/header.php'); ?>
<?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Home/Layout/formRegister.php'); ?>
<?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Home/Layout/footer.php'); ?>

<script>
    $(document).ready(function() {
        $('#form-register').submit(function(e) {
            e.preventDefault();
            const Fd = new FormData($(this)[0]);

            $.ajax({
                type: "POST",
                dataType: "json",
                url: "../../../../bloodDonationProjectCS60/MyApp/Web/Home/web_RegisterController_register.php",
                data: Fd,
                contentType: false,
                processData: false,
                success: function(response) {
                    let createUrl = '../../../../../bloodDonationProjectCS60/index.php?status=ok';
                    if (response.status == 200) {
                        Swal.fire(
                            'สำเร็จ',
                            'ลงทะเบียนสำเร็จเเล้ว',
                            'success'
                        ).then(result => {
                            window.location.href = createUrl;
                        });
                    } else {
                        Swal.fire(
                            'ผิดพลาด',
                            'ลงทะเบียนไม่สำเร็จ',
                            'error'
                        ).then(result => {
                            
                        });
                    }
                }
            });
        });
    });
</script>