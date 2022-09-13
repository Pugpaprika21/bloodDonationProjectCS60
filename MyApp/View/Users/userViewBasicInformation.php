<?php session_start(); ?>
<?php ($_SESSION['role'] !== 'admin') ? header('location: ../../../../../bloodDonationProjectCS60/index.php') : ''; ?>
<?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Users/Layout/header.php'); ?>
<?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Users/Component/navbar.php'); ?>

<style>

</style>

<div class="container">
    <div class="card">
        <div class="card-header">
            Featured
        </div>
        <div class="card-body">
            This is some text within a card body.
        </div>
    </div>
</div>

<?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Users/Layout/footer.php'); ?>