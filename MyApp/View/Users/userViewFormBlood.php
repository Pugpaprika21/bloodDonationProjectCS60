<?php

session_start();
$checked = "checked";
$radioCheck = isset($_SESSION['formblood_tb_all']) ? $_SESSION['formblood_tb_all'] : [];

?>
<?php ($_SESSION['role'] !== 'admin') ? header('location: ../../../../../bloodDonationProjectCS60/index.php') : ''; ?>
<?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Users/Layout/header.php'); ?>
<?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Users/Component/navbar.php'); ?>

<style>
    .container {
        margin-top: 25px;
        padding-bottom: 50px;
    }

    input[type=radio] {
        align-items: center;
    }

    .card-btn-back {
        width: 60rem;
        margin-bottom: 20px;
    }

    .card-main-bloodDonationForm1 {
        width: 60rem;
        border-color: #DA8F79;
    }

    .card-header-bloodDonationForm1 {
        padding-top: 20px;
        padding-bottom: 20px;
        background-color: #DA8F79;
        color: #FFFFFF;
    }

    /*  */
    .card-main-bloodDonationForm2 {
        width: 60rem;
        border-color: #3EC142;
    }

    .card-header-bloodDonationForm2 {
        padding-top: 20px;
        padding-bottom: 20px;
        background-color: #3EC142;
        color: #FFFFFF;
    }

    /*  */
    .card-main-bloodDonationForm3 {
        width: 60rem;
        border-color: #8E73C7;
    }

    .card-header-bloodDonationForm3 {
        padding-top: 20px;
        padding-bottom: 20px;
        background-color: #8E73C7;
        color: #FFFFFF;
    }

    /*  */
    .card-main-bloodDonationForm4 {
        width: 60rem;
        border-color: #505BB9;
        padding-bottom: 20px;
    }

    .card-header-bloodDonationForm4 {
        padding-top: 20px;
        padding-bottom: 20px;
        background-color: #505BB9;
        color: #FFFFFF;
    }
</style>

<div class="container">

    <div class="d-flex justify-content-center">
        <div class="card card-btn-back shadow rounded">
            <div class="card-body">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a class="btn btn-primary me-md-2 btn-sm" href="../../../../bloodDonationProjectCS60/MyApp/View/Users/home.php" role="button">ย้อนกลับ</a>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center">
        <!-- card-main-bloodDonationForm1 | general health category -->
        <div class="card card-main-bloodDonationForm1 shadow rounded">
            <div class="card-header card-header-bloodDonationForm1">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-clipboard-data" viewBox="0 0 16 16">
                    <path d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V7zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0V9z" />
                    <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
                    <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z" />
                </svg> หมวดหมู่สุขภาพทั่วไป
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <td></td>
                            <td>ใช่</td>
                            <td>ไม่ใช่</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1. ท่านรู้สึกสบายดี สุขภาพแข็งแรง พร้อมที่จะบริจาคโลหิต</td>
                            <?php if ($radioCheck[0]->healthCategoryQ1 == 'y') : ?>
                                <td><input type="radio" name="healthCategoryQ1" value="y" <?= $checked; ?>></td>
                                <td><input type="radio" name="healthCategoryQ1" value="n"></td>
                            <?php elseif ($radioCheck[0]->healthCategoryQ1 == 'n') : ?>
                                <td><input type="radio" name="healthCategoryQ1" value="y"></td>
                                <td><input type="radio" name="healthCategoryQ1" value="n" <?= $checked; ?>></td>
                            <?php endif; ?>
                        </tr>
                        <tr>
                            <td>2. ท่านนอนหลับพักผ่อนเพียงพอ (ไม่น้อยกว่า 5 ชั่วโมง)</td>
                            <?php if ($radioCheck[0]->healthCategoryQ2 == 'y') : ?>
                                <td><input type="radio" name="healthCategoryQ2" value="y" <?= $checked; ?>></td>
                                <td><input type="radio" name="healthCategoryQ2" value="n"></td>
                            <?php elseif ($radioCheck[0]->healthCategoryQ2 == 'n') : ?>
                                <td><input type="radio" name="healthCategoryQ2" value="y"></td>
                                <td><input type="radio" name="healthCategoryQ2" value="n" <?= $checked; ?>></td>
                            <?php endif; ?>
                        </tr>
                        <tr>
                            <td>3. ท่านรับประทานอาหารที่มีไขมันสูง ภายใน 6 ชั่วโมงที่ผ่านมา</td>
                            <?php if ($radioCheck[0]->healthCategoryQ3 == 'y') : ?>
                                <td><input type="radio" name="healthCategoryQ3" value="y" <?= $checked; ?>></td>
                                <td><input type="radio" name="healthCategoryQ3" value="n"></td>
                            <?php elseif ($radioCheck[0]->healthCategoryQ3 == 'n') : ?>
                                <td><input type="radio" name="healthCategoryQ3" value="y"></td>
                                <td><input type="radio" name="healthCategoryQ3" value="n" <?= $checked; ?>></td>
                            <?php endif; ?>
                        </tr>
                        <tr>
                            <td>4. ท่านมีโรคประจำตัว หรือเคยเป็นโรค</td>
                            <?php if ($radioCheck[0]->healthCategoryQ4 == 'y') : ?>
                                <td><input type="radio" name="healthCategoryQ4" value="y" <?= $checked; ?>></td>
                                <td><input type="radio" name="healthCategoryQ4" value="n"></td>
                            <?php elseif ($radioCheck[0]->healthCategoryQ4 == 'n') : ?>
                                <td><input type="radio" name="healthCategoryQ4" value="y"></td>
                                <td><input type="radio" name="healthCategoryQ4" value="n" <?= $checked; ?>></td>
                            <?php endif; ?>
                        </tr>
                        <tr>
                            <td> 5. ท่านรับประทานยาปฏิชีวนะ (ยาฆ่าเชื้อ) ภายใน 7 วันที่ผ่านมา :</td>
                            <?php if ($radioCheck[0]->healthCategoryQ5 == 'y') : ?>
                                <td><input type="radio" name="healthCategoryQ5" value="y" <?= $checked; ?>></td>
                                <td><input type="radio" name="healthCategoryQ5" value="n"></td>
                            <?php elseif ($radioCheck[0]->healthCategoryQ5 == 'n') : ?>
                                <td><input type="radio" name="healthCategoryQ5" value="y"></td>
                                <td><input type="radio" name="healthCategoryQ5" value="n" <?= $checked; ?>></td>
                            <?php endif; ?>
                        </tr>
                        <tr>
                            <td> 6. ท่านรับประทานยาแอสไพริน ยาคลายกล้ามเนื้อ ยาแก้ปวดข้อ หรือยาอื่นๆ ในกลุ่ม เดียวกันภายใน 2 วันที่ผ่านมา</td>
                            <?php if ($radioCheck[0]->healthCategoryQ6 == 'y') : ?>
                                <td><input type="radio" name="healthCategoryQ6" value="y" <?= $checked; ?>></td>
                                <td><input type="radio" name="healthCategoryQ6" value="n"></td>
                            <?php elseif ($radioCheck[0]->healthCategoryQ6 == 'n') : ?>
                                <td><input type="radio" name="healthCategoryQ6" value="y"></td>
                                <td><input type="radio" name="healthCategoryQ6" value="n" <?= $checked; ?>></td>
                            <?php endif; ?>
                        </tr>
                        <tr>
                            <td> 7. ท่านมีการใช้ ยา / สมุนไพร / อาหารเสริมที่มีไบโอตินเป็นส่วนประกอบ เป็นประจำ หรือไม่ :</td>
                            <?php if ($radioCheck[0]->healthCategoryQ7 == 'y') : ?>
                                <td><input type="radio" name="healthCategoryQ7" value="y" <?= $checked; ?>></td>
                                <td><input type="radio" name="healthCategoryQ7" value="n"></td>
                            <?php elseif ($radioCheck[0]->healthCategoryQ7 == 'n') : ?>
                                <td><input type="radio" name="healthCategoryQ7" value="y"></td>
                                <td><input type="radio" name="healthCategoryQ7" value="n" <?= $checked; ?>></td>
                            <?php endif; ?>
                        </tr>
                        <tr>
                            <td> 8. ท่านดื่มแอลกอฮอล์ภายใน 24 ชั่วโมงที่ผ่านมา</td>
                            <?php if ($radioCheck[0]->healthCategoryQ8 == 'y') : ?>
                                <td><input type="radio" name="healthCategoryQ8" value="y" <?= $checked; ?>></td>
                                <td><input type="radio" name="healthCategoryQ8" value="n"></td>
                            <?php elseif ($radioCheck[0]->healthCategoryQ8 == 'n') : ?>
                                <td><input type="radio" name="healthCategoryQ8" value="y"></td>
                                <td><input type="radio" name="healthCategoryQ8" value="n" <?= $checked; ?>></td>
                            <?php endif; ?>
                        </tr>
                        <tr>
                            <td> 9. ท่านเคยบริจาคเซลล์ต้นกำเนิดเม็ดโลหิตในระยะ 6 เดือนที่ผ่านมา โปรดระบุ</td>
                            <?php if ($radioCheck[0]->healthCategoryQ9 == 'y') : ?>
                                <td><input type="radio" name="healthCategoryQ9" value="y" <?= $checked; ?>></td>
                                <td><input type="radio" name="healthCategoryQ9" value="n"></td>
                            <?php elseif ($radioCheck[0]->healthCategoryQ9 == 'n') : ?>
                                <td><input type="radio" name="healthCategoryQ9" value="y"></td>
                                <td><input type="radio" name="healthCategoryQ9" value="n" <?= $checked; ?>></td>
                            <?php endif; ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <br>
    <!-- card-main-bloodDonationForm2 -->
    <div class="d-flex justify-content-center">
        <!-- card-main-bloodDonationForm2 | Category : Pregnancy / Maternity -->
        <div class="card card-main-bloodDonationForm2 shadow rounded">
            <div class="card-header card-header-bloodDonationForm2">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-gender-female" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 1a4 4 0 1 0 0 8 4 4 0 0 0 0-8zM3 5a5 5 0 1 1 5.5 4.975V12h2a.5.5 0 0 1 0 1h-2v2.5a.5.5 0 0 1-1 0V13h-2a.5.5 0 0 1 0-1h2V9.975A5 5 0 0 1 3 5z" />
                </svg> หมวดหมู่ : การตั้งครรภ์ / คลอดบุตร
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <td></td>
                            <td>ใช่</td>
                            <td>ไม่ใช่</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>10. ท่านเคยตั้งครรภ์ หรือแท้งบุตร มาก่อน</td>
                            <?php if ($radioCheck[0]->pregnancyMaternityQ1 == 'y') : ?>
                                <td><input type="radio" name="pregnancyMaternityQ1" value="y" <?= $checked; ?>></td>
                                <td><input type="radio" name="pregnancyMaternityQ1" value="n"></td>
                            <?php elseif ($radioCheck[0]->pregnancyMaternityQ1 == 'n') : ?>
                                <td><input type="radio" name="pregnancyMaternityQ1" value="y"></td>
                                <td><input type="radio" name="pregnancyMaternityQ1" value="n" <?= $checked; ?>></td>
                            <?php endif; ?>
                        </tr>
                        <tr>
                            <td>11. ท่านอยู่ในช่วงตั้งครรภ์ หรือให้นมบุตร</td>
                            <?php if ($radioCheck[0]->pregnancyMaternityQ2 == 'y') : ?>
                                <td><input type="radio" name="pregnancyMaternityQ2" value="y" <?= $checked; ?>></td>
                                <td><input type="radio" name="pregnancyMaternityQ2" value="n"></td>
                            <?php elseif ($radioCheck[0]->pregnancyMaternityQ2 == 'n') : ?>
                                <td><input type="radio" name="pregnancyMaternityQ2" value="y"></td>
                                <td><input type="radio" name="pregnancyMaternityQ2" value="n" <?= $checked; ?>></td>
                            <?php endif; ?>
                        </tr>
                        <tr>
                            <td>12. ท่านคลอดบุตร หรือแท้งบุตร ภายใน 6 เดือนที่ผ่านมา</td>
                            <?php if ($radioCheck[0]->pregnancyMaternityQ3 == 'y') : ?>
                                <td><input type="radio" name="pregnancyMaternityQ3" value="y" <?= $checked; ?>></td>
                                <td><input type="radio" name="pregnancyMaternityQ3" value="n"></td>
                            <?php elseif ($radioCheck[0]->pregnancyMaternityQ3 == 'n') : ?>
                                <td><input type="radio" name="pregnancyMaternityQ3" value="y"></td>
                                <td><input type="radio" name="pregnancyMaternityQ3" value="n" <?= $checked; ?>></td>
                            <?php endif; ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <br>
    <!-- card-main-bloodDonationForm3 -->
    <div class="d-flex justify-content-center">
        <!-- card-main-bloodDonationForm3 | Category : History of Sex -->
        <div class="card card-main-bloodDonationForm3 shadow rounded">
            <div class="card-header card-header-bloodDonationForm3">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-gender-male" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M9.5 2a.5.5 0 0 1 0-1h5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0V2.707L9.871 6.836a5 5 0 1 1-.707-.707L13.293 2H9.5zM6 6a4 4 0 1 0 0 8 4 4 0 0 0 0-8z" />
                </svg> หมวดหมู่ : ประวัติด้านเพศสัมพันธ์
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <td></td>
                            <td>ใช่</td>
                            <td>ไม่ใช่</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>13. สำหรับเพศชาย : ท่านเคยมีเพศสัมพันธ์กับชาย</td>
                            <?php if ($radioCheck[0]->historyOfSexQ1 == 'y') : ?>
                                <td><input type="radio" name="historyOfSexQ1" value="y" <?= $checked; ?>></td>
                                <td><input type="radio" name="historyOfSexQ1" value="n"></td>
                            <?php elseif ($radioCheck[0]->historyOfSexQ1 == 'n') : ?>
                                <td><input type="radio" name="historyOfSexQ1" value="y"></td>
                                <td><input type="radio" name="historyOfSexQ1" value="n" <?= $checked; ?>></td>
                            <?php endif; ?>
                        </tr>
                        <tr>
                            <td>14. ท่านหรือคู่ของท่านมีพฤติกรรมเสี่ยงทางเพศ :
                                มีเพศสัมพันธ์กับผู้ที่ไม่ใช่คู่ของตนเอง / ผู้ขาย <br> บริการ / ผู้เสพยาเสพติด /
                                ผู้ที่อาจติดเชื้อเอชไอวีหรือโรคติดต่อทางเพศสัมพันธ์อื่น</td>
                            <?php if ($radioCheck[0]->historyOfSexQ2 == 'y') : ?>
                                <td><input type="radio" name="historyOfSexQ2" value="y" <?= $checked; ?>></td>
                                <td><input type="radio" name="historyOfSexQ2" value="n"></td>
                            <?php elseif ($radioCheck[0]->historyOfSexQ2 == 'n') : ?>
                                <td><input type="radio" name="historyOfSexQ2" value="y"></td>
                                <td><input type="radio" name="historyOfSexQ2" value="n" <?= $checked; ?>></td>
                            <?php endif; ?>
                        </tr>
                        <tr>
                            <td>15. ท่านเคยใช้ยารักษาหรือป้องกันโรคเอชไอวี</td>
                            <?php if ($radioCheck[0]->historyOfSexQ3 == 'y') : ?>
                                <td><input type="radio" name="historyOfSexQ3" value="y" <?= $checked; ?>></td>
                                <td><input type="radio" name="historyOfSexQ3" value="n"></td>
                            <?php elseif ($radioCheck[0]->historyOfSexQ3 == 'n') : ?>
                                <td><input type="radio" name="historyOfSexQ3" value="y"></td>
                                <td><input type="radio" name="historyOfSexQ3" value="n" <?= $checked; ?>></td>
                            <?php endif; ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <br>
    <!-- card-main-bloodDonationForm4 -->
    <div class="d-flex justify-content-center">
        <!-- card-main-bloodDonationForm4 | Category : History of risk of various infections -->
        <div class="card card-main-bloodDonationForm4 shadow rounded">
            <div class="card-header card-header-bloodDonationForm4">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-gender-male" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M9.5 2a.5.5 0 0 1 0-1h5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0V2.707L9.871 6.836a5 5 0 1 1-.707-.707L13.293 2H9.5zM6 6a4 4 0 1 0 0 8 4 4 0 0 0 0-8z" />
                </svg> หมวดหมู่ : ประวัติความเสี่ยงของการติดเชื้อต่างๆ
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <td></td>
                            <td>ใช่</td>
                            <td>ไม่ใช่</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>16. ท่านอุดฟัน ขูดหินปูน ภายใน 3 วันที่ผ่านมา / ถอนฟัน รักษารากฟัน ภายใน 7 วันที่ผ่านมา</td>
                            <?php if ($radioCheck[0]->historyVariousInfectionsQ1 == 'y') : ?>
                                <td><input type="radio" name="historyVariousInfectionsQ1" value="y" <?= $checked; ?>></td>
                                <td><input type="radio" name="historyVariousInfectionsQ1" value="n"></td>
                            <?php elseif ($radioCheck[0]->historyVariousInfectionsQ1 == 'n') : ?>
                                <td><input type="radio" name="historyVariousInfectionsQ1" value="y"></td>
                                <td><input type="radio" name="historyVariousInfectionsQ1" value="n" <?= $checked; ?>></td>
                            <?php endif; ?>
                        </tr>
                        <tr>
                            <td>17. ท่านท้องเสีย ท้องร่วง ภายใน 7 วันที่ผ่านมา</td>
                            <?php if ($radioCheck[0]->historyVariousInfectionsQ2 == 'y') : ?>
                                <td><input type="radio" name="historyVariousInfectionsQ2" value="y" <?= $checked; ?>></td>
                                <td><input type="radio" name="historyVariousInfectionsQ2" value="n"></td>
                            <?php elseif ($radioCheck[0]->historyVariousInfectionsQ2 == 'n') : ?>
                                <td><input type="radio" name="historyVariousInfectionsQ2" value="y"></td>
                                <td><input type="radio" name="historyVariousInfectionsQ2" value="n" <?= $checked; ?>></td>
                            <?php endif; ?>
                        </tr>
                        <tr>
                            <td>18. ท่านเคยเจาะหู เจาะผิวหนัง สัก ลบรอยสัก ฝังเข็ม ภายใน 4 เดือนที่ผ่านมา</td>
                            <?php if ($radioCheck[0]->historyVariousInfectionsQ3 == 'y') : ?>
                                <td><input type="radio" name="historyVariousInfectionsQ3" value="y" <?= $checked; ?>></td>
                                <td><input type="radio" name="historyVariousInfectionsQ3" value="n"></td>
                            <?php elseif ($radioCheck[0]->historyVariousInfectionsQ3 == 'n') : ?>
                                <td><input type="radio" name="historyVariousInfectionsQ3" value="y"></td>
                                <td><input type="radio" name="historyVariousInfectionsQ3" value="n" <?= $checked; ?>></td>
                            <?php endif; ?>
                        </tr>
                        <tr>
                            <td> 19. ท่านเคยได้รับการผ่าตัดเล็ก ภายใน 7 วันที่ผ่านมา</td>
                            <?php if ($radioCheck[0]->historyVariousInfectionsQ4 == 'y') : ?>
                                <td><input type="radio" name="historyVariousInfectionsQ4" value="y" <?= $checked; ?>></td>
                                <td><input type="radio" name="historyVariousInfectionsQ4" value="n"></td>
                            <?php elseif ($radioCheck[0]->historyVariousInfectionsQ4 == 'n') : ?>
                                <td><input type="radio" name="historyVariousInfectionsQ4" value="y"></td>
                                <td><input type="radio" name="historyVariousInfectionsQ4" value="n" <?= $checked; ?>></td>
                            <?php endif; ?>
                        </tr>
                        <tr>
                            <td> 20. ท่านเคยผ่าตัดใหญ่ ภายใน 6 เดือนที่ผ่านมา</td>
                            <?php if ($radioCheck[0]->historyVariousInfectionsQ5 == 'y') : ?>
                                <td><input type="radio" name="historyVariousInfectionsQ5" value="y" <?= $checked; ?>></td>
                                <td><input type="radio" name="historyVariousInfectionsQ5" value="n"></td>
                            <?php elseif ($radioCheck[0]->historyVariousInfectionsQ5 == 'n') : ?>
                                <td><input type="radio" name="historyVariousInfectionsQ5" value="y"></td>
                                <td><input type="radio" name="historyVariousInfectionsQ5" value="n" <?= $checked; ?>></td>
                            <?php endif; ?>
                        </tr>
                        <tr>
                            <td> 21. ท่านเคยป่วยและได้รับโลหิต / ส่วนประกอบโลหิต ภายใน 1 ปีที่ผ่านมา</td>
                            <?php if ($radioCheck[0]->historyVariousInfectionsQ6 == 'y') : ?>
                                <td><input type="radio" name="historyVariousInfectionsQ6" value="y" <?= $checked; ?>></td>
                                <td><input type="radio" name="historyVariousInfectionsQ6" value="n"></td>
                            <?php elseif ($radioCheck[0]->historyVariousInfectionsQ6 == 'n') : ?>
                                <td><input type="radio" name="historyVariousInfectionsQ6" value="y"></td>
                                <td><input type="radio" name="historyVariousInfectionsQ6" value="n" <?= $checked; ?>></td>
                            <?php endif; ?>
                        </tr>
                        <tr>
                            <td> 22. ท่านเคยได้รับการปลูกถ่ายอวัยวะ หรือเซลล์ต้นกำเนิดเม็ดโลหิต</td>
                            <?php if ($radioCheck[0]->historyVariousInfectionsQ7 == 'y') : ?>
                                <td><input type="radio" name="historyVariousInfectionsQ7" value="y" <?= $checked; ?>></td>
                                <td><input type="radio" name="historyVariousInfectionsQ7" value="n"></td>
                            <?php elseif ($radioCheck[0]->historyVariousInfectionsQ7 == 'n') : ?>
                                <td><input type="radio" name="historyVariousInfectionsQ7" value="y"></td>
                                <td><input type="radio" name="historyVariousInfectionsQ7" value="n" <?= $checked; ?>></td>
                            <?php endif; ?>
                        </tr>
                        <tr>
                            <td> 23. ท่านเคยถูกเข็มที่เปื้อนเลือดตำ ในระยะ 1 ปีที่ผ่านมา</td>
                            <?php if ($radioCheck[0]->historyVariousInfectionsQ8 == 'y') : ?>
                                <td><input type="radio" name="historyVariousInfectionsQ8" value="y" <?= $checked; ?>></td>
                                <td><input type="radio" name="historyVariousInfectionsQ8" value="n"></td>
                            <?php elseif ($radioCheck[0]->historyVariousInfectionsQ8 == 'n') : ?>
                                <td><input type="radio" name="historyVariousInfectionsQ8" value="y"></td>
                                <td><input type="radio" name="historyVariousInfectionsQ8" value="n" <?= $checked; ?>></td>
                            <?php endif; ?>
                        </tr>
                        <tr>
                            <td> 24. ท่านเคยป่วยเป็นโรคตับอักเสบ หลังอายุ 11 ปี</td>
                            <?php if ($radioCheck[0]->historyVariousInfectionsQ9 == 'y') : ?>
                                <td><input type="radio" name="historyVariousInfectionsQ9" value="y" <?= $checked; ?>></td>
                                <td><input type="radio" name="historyVariousInfectionsQ9" value="n"></td>
                            <?php elseif ($radioCheck[0]->historyVariousInfectionsQ9 == 'n') : ?>
                                <td><input type="radio" name="historyVariousInfectionsQ9" value="y"></td>
                                <td><input type="radio" name="historyVariousInfectionsQ9" value="n" <?= $checked; ?>></td>
                            <?php endif; ?>
                        </tr>
                        <tr>
                            <td> 25. คู่ของท่านหรือบุคคลในครอบครัวของท่าน เป็นโรคตับอักเสบ ในระยะเวลา 1 ปีที่ผ่านมา</td>
                            <?php if ($radioCheck[0]->historyVariousInfectionsQ10 == 'y') : ?>
                                <td><input type="radio" name="historyVariousInfectionsQ10" value="y" <?= $checked; ?>></td>
                                <td><input type="radio" name="historyVariousInfectionsQ10" value="n"></td>
                            <?php elseif ($radioCheck[0]->historyVariousInfectionsQ10 == 'n') : ?>
                                <td><input type="radio" name="historyVariousInfectionsQ10" value="y"></td>
                                <td><input type="radio" name="historyVariousInfectionsQ10" value="n" <?= $checked; ?>></td>
                            <?php endif; ?>
                        </tr>
                        <tr>
                            <td> 26. ท่านเคยตรวจพบว่าเป็นพาหะของโรคตับอักเสบ</td>
                            <?php if ($radioCheck[0]->historyVariousInfectionsQ11 == 'y') : ?>
                                <td><input type="radio" name="historyVariousInfectionsQ11" value="y" <?= $checked; ?>></td>
                                <td><input type="radio" name="historyVariousInfectionsQ11" value="n"></td>
                            <?php elseif ($radioCheck[0]->historyVariousInfectionsQ11 == 'n') : ?>
                                <td><input type="radio" name="historyVariousInfectionsQ11" value="y"></td>
                                <td><input type="radio" name="historyVariousInfectionsQ11" value="n" <?= $checked; ?>></td>
                            <?php endif; ?>
                        </tr>
                        <tr>
                            <td> 27. ท่านเคยป่วยเป็นโรคมาลาเรีย ในระยะ 3 ปีที่ผ่านมา</td>
                            <?php if ($radioCheck[0]->historyVariousInfectionsQ12 == 'y') : ?>
                                <td><input type="radio" name="historyVariousInfectionsQ12" value="y" <?= $checked; ?>></td>
                                <td><input type="radio" name="historyVariousInfectionsQ12" value="n"></td>
                            <?php elseif ($radioCheck[0]->historyVariousInfectionsQ12 == 'n') : ?>
                                <td><input type="radio" name="historyVariousInfectionsQ12" value="y"></td>
                                <td><input type="radio" name="historyVariousInfectionsQ12" value="n" <?= $checked; ?>></td>
                            <?php endif; ?>
                        </tr>
                        <tr>
                            <td> 28. ท่านเคยเข้าไปในพื้นที่มีเชื้อมาลาเรียชุกชุม ในระยะ 1 ปีที่ผ่านมา</td>
                            <?php if ($radioCheck[0]->historyVariousInfectionsQ13 == 'y') : ?>
                                <td><input type="radio" name="historyVariousInfectionsQ13" value="y" <?= $checked; ?>></td>
                                <td><input type="radio" name="historyVariousInfectionsQ13" value="n"></td>
                            <?php elseif ($radioCheck[0]->historyVariousInfectionsQ13 == 'n') : ?>
                                <td><input type="radio" name="historyVariousInfectionsQ13" value="y"></td>
                                <td><input type="radio" name="historyVariousInfectionsQ13" value="n" <?= $checked; ?>></td>
                            <?php endif; ?>
                        </tr>
                        <tr>
                            <td> 29. ท่านเคยป่วยเป็นโรคไข้หวัดใหญ่ / โรคไข้เลือดออก / โรคชิคุนกุนยา / โรคไข้ซิกา หรือ โรคโควิด-19 ในระยะ 1 เดือนที่ผ่านมา</td>
                            <?php if ($radioCheck[0]->historyVariousInfectionsQ14 == 'y') : ?>
                                <td><input type="radio" name="historyVariousInfectionsQ14" value="y" <?= $checked; ?>></td>
                                <td><input type="radio" name="historyVariousInfectionsQ14" value="n"></td>
                            <?php elseif ($radioCheck[0]->historyVariousInfectionsQ14 == 'n') : ?>
                                <td><input type="radio" name="historyVariousInfectionsQ14" value="y"></td>
                                <td><input type="radio" name="historyVariousInfectionsQ14" value="n" <?= $checked; ?>></td>
                            <?php endif; ?>
                        </tr>
                        <tr>
                            <td> 30.ท่านได้รับวัคซีนเพื่อป้องกันโรคในระยะ 2 เดือนที่ผ่านมา</td>
                            <?php if ($radioCheck[0]->historyVariousInfectionsQ15 == 'y') : ?>
                                <td><input type="radio" name="historyVariousInfectionsQ15" value="y" <?= $checked; ?>></td>
                                <td><input type="radio" name="historyVariousInfectionsQ15" value="n"></td>
                            <?php elseif ($radioCheck[0]->historyVariousInfectionsQ15 == 'n') : ?>
                                <td><input type="radio" name="historyVariousInfectionsQ15" value="y"></td>
                                <td><input type="radio" name="historyVariousInfectionsQ15" value="n" <?= $checked; ?>></td>
                            <?php endif; ?>
                        </tr>
                        <tr>
                            <td> 31. ท่านได้รับเซรุ่ม ภายใน 1 ปี ที่ผ่านมา</td>
                            <?php if ($radioCheck[0]->historyVariousInfectionsQ16 == 'y') : ?>
                                <td><input type="radio" name="historyVariousInfectionsQ16" value="y" <?= $checked; ?>></td>
                                <td><input type="radio" name="historyVariousInfectionsQ16" value="n"></td>
                            <?php elseif ($radioCheck[0]->historyVariousInfectionsQ16 == 'n') : ?>
                                <td><input type="radio" name="historyVariousInfectionsQ16" value="y"></td>
                                <td><input type="radio" name="historyVariousInfectionsQ16" value="n" <?= $checked; ?>></td>
                            <?php endif; ?>
                        </tr>
                        <tr>
                            <td> 32. ท่านเคยมีประวัติเสพยาเสพติด</td>
                            <?php if ($radioCheck[0]->historyVariousInfectionsQ17 == 'y') : ?>
                                <td><input type="radio" name="historyVariousInfectionsQ17" value="y" <?= $checked; ?>></td>
                                <td><input type="radio" name="historyVariousInfectionsQ17" value="n"></td>
                            <?php elseif ($radioCheck[0]->historyVariousInfectionsQ17 == 'n') : ?>
                                <td><input type="radio" name="historyVariousInfectionsQ17" value="y"></td>
                                <td><input type="radio" name="historyVariousInfectionsQ17" value="n" <?= $checked; ?>></td>
                            <?php endif; ?>
                        </tr>
                        <tr>
                            <td> 33. ท่านเคยถูกควบคุมตัวหรือจองจำในเรือนจำติดต่อกันเกิน 72 ชั่วโมง ในช่วง 1 ปีที่ผ่านมา</td>
                            <?php if ($radioCheck[0]->historyVariousInfectionsQ18 == 'y') : ?>
                                <td><input type="radio" name="historyVariousInfectionsQ18" value="y" <?= $checked; ?>></td>
                                <td><input type="radio" name="historyVariousInfectionsQ18" value="n"></td>
                            <?php elseif ($radioCheck[0]->historyVariousInfectionsQ18 == 'n') : ?>
                                <td><input type="radio" name="historyVariousInfectionsQ18" value="y"></td>
                                <td><input type="radio" name="historyVariousInfectionsQ18" value="n" <?= $checked; ?>></td>
                            <?php endif; ?>
                        </tr>
                        <tr>
                            <td> 34. ท่านเคยมีน้ำหนักลด มีไข้ มีต่อมน้ำเหลืองโตโดยไม่ทราบสาเหตุ ในระยะ 3 เดือนที่ผ่านมา หรือเคยตรวจพบว่าติดเชื้อเอชไอวี</td>
                            <?php if ($radioCheck[0]->historyVariousInfectionsQ19 == 'y') : ?>
                                <td><input type="radio" name="historyVariousInfectionsQ19" value="y" <?= $checked; ?>></td>
                                <td><input type="radio" name="historyVariousInfectionsQ19" value="n"></td>
                            <?php elseif ($radioCheck[0]->historyVariousInfectionsQ19 == 'n') : ?>
                                <td><input type="radio" name="historyVariousInfectionsQ19" value="y"></td>
                                <td><input type="radio" name="historyVariousInfectionsQ19" value="n" <?= $checked; ?>></td>
                            <?php endif; ?>
                        </tr>
                        <tr>
                            <td> 35. ช่วง พ.ศ. 2523 - 2539 ท่านเคยพำนักอาศัยอยู่ในประเทศเหล่านี้ เป็นเวลาสะสมมากกว่า 3 เดือน อังกฤษ ไอร์แลนด์เหนือ สก๊อตแลนด์ เวลส</td>
                            <?php if ($radioCheck[0]->historyVariousInfectionsQ20 == 'y') : ?>
                                <td><input type="radio" name="historyVariousInfectionsQ20" value="y" <?= $checked; ?>></td>
                                <td><input type="radio" name="historyVariousInfectionsQ20" value="n"></td>
                            <?php elseif ($radioCheck[0]->historyVariousInfectionsQ20 == 'n') : ?>
                                <td><input type="radio" name="historyVariousInfectionsQ20" value="y"></td>
                                <td><input type="radio" name="historyVariousInfectionsQ20" value="n" <?= $checked; ?>></td>
                            <?php endif; ?>
                        </tr>
                        <tr>
                            <td> 36. ช่วง พ.ศ. 2523 – 2544 ท่านเคยพำนักอาศัยอยู่ในประเทศฝรั่งเศส และไอร์แลนด์ เป็นระยะเวลาสะสมมากกว่า 5 ปี</td>
                            <?php if ($radioCheck[0]->historyVariousInfectionsQ21 == 'y') : ?>
                                <td><input type="radio" name="historyVariousInfectionsQ21" value="y" <?= $checked; ?>></td>
                                <td><input type="radio" name="historyVariousInfectionsQ21" value="n"></td>
                            <?php elseif ($radioCheck[0]->historyVariousInfectionsQ21 == 'n') : ?>
                                <td><input type="radio" name="historyVariousInfectionsQ21" value="y"></td>
                                <td><input type="radio" name="historyVariousInfectionsQ21" value="n" <?= $checked; ?>></td>
                            <?php endif; ?>
                        </tr>
                        <tr>
                            <td> 37. ท่านมั่นใจว่าโลหิตของท่านมีความปลอดภัยต่อผู้ป่วย</td>
                            <?php if ($radioCheck[0]->historyVariousInfectionsQ22 == 'y') : ?>
                                <td><input type="radio" name="historyVariousInfectionsQ22" value="y" <?= $checked; ?>></td>
                                <td><input type="radio" name="historyVariousInfectionsQ22" value="n"></td>
                            <?php elseif ($radioCheck[0]->historyVariousInfectionsQ22 == 'n') : ?>
                                <td><input type="radio" name="historyVariousInfectionsQ22" value="y"></td>
                                <td><input type="radio" name="historyVariousInfectionsQ22" value="n" <?= $checked; ?>></td>
                            <?php endif; ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Users/Layout/footer.php'); ?>
<script src="../../../../bloodDonationProjectCS60/MyApp/Asset/Js/public/urlSearchParams.js"></script>

<script>
    $(document).ready(function() {

        var getUrl = urlSearchParams('form_id');

        (function() {
            $.ajax({
                type: "GET",
                dataType: "json",
                url: "../../../../bloodDonationProjectCS60/MyApp/Web/FormBlood/web_FormBloodController_showDataFormBloodByID.php",
                data: {
                    form_id: getUrl
                },
                success: function(response) {
                    console.log(response);
                }
            });
        })();
    });
</script>