<style>
    .navbar {
        padding-top: 25px;
        padding-bottom: 25px;
        background-color: #1892EC;
    }

    .navbar-brand,
    .nav-link-bloodDonationForm {
        color: #FFFFFF;
    }
</style>

<nav class="navbar">
    <div class="container-fluid">
        <a class="navbar-brand">BDA : <?= $_SESSION['username']; ?></a>
        <form class="d-flex" role="search">
            <a class="btn btn-success btn-sm" href="../../../index.php" role="button">ออกจากระบบ</a>
        </form>
    </div>
</nav>
