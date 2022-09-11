<?php session_start(); ?>
<?php ($_SESSION['role'] !== 'admin') ? header('location: ../../../../../bloodDonationProjectCS60/index.php') : ''; ?>
<?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Appointments/Layout/header.php'); ?>
<?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Appointments/Component/navbar.php'); ?>



<?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Appointments/Layout/footer.php'); ?>
