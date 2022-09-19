<?php session_start(); ?>
<?php ($_SESSION['role'] !== 'user') ? header('location: ../../../../../bloodDonationProjectCS60/index.php') : ''; ?>
<?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Users/Layout/header.php'); ?>
<?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Users/Component/navbar.php'); ?>

<style>
    .container {
        margin-top: 25px;
        padding-bottom: 50px;
    }

    .navbar {
        background-color: #4C5DC6;
        padding-top: 20px;
        padding-bottom: 20px;
    }

    .navbar-brand {
        color: #FFFFFF;
    }

    .container-main {
        margin-top: 30px;
    }

    input[type=radio] {
        align-items: center;
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

    input {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        border-radius: 50%;
        width: 16px;
        height: 16px;
        border: 2px solid #999;
        transition: 0.2s all linear;
        margin-right: 5px;
        position: relative;
        top: 4px;
    }

    input:checked {
        border: 6px solid #4C5DC6;
        outline: unset !important
    }
</style>

<div class="container-fluid container-main">
    <div class="card shadow rounded">
        <div class="card-body">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../../../../bloodDonationProjectCS60/MyApp/View/Users/home.php">กลับสู่หน้าหลัก</a></li>
                    <li class="breadcrumb-item active" aria-current="page">เเบบฟอร์มเเสดงความประสงค์</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="container-fluid container-main">
    <form method="post" id="formBlood-submit">
        <div class="card shadow rounded">
            <input type="hidden" id="form_id" name="form_id" value="<?= (string)('FB' . date('d') . date('m') . (date('Y') + 543)); ?>">
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
                            <td><input type="radio" name="healthCategoryQ1" value="y" required></td>
                            <td><input type="radio" name="healthCategoryQ1" value="n"></td>
                        </tr>
                        <tr>
                            <td>2. ท่านนอนหลับพักผ่อนเพียงพอ (ไม่น้อยกว่า 5 ชั่วโมง)</td>
                            <td><input type="radio" name="healthCategoryQ2" value="y" required></td>
                            <td><input type="radio" name="healthCategoryQ2" value="n"></td>
                        </tr>
                        <tr>
                            <td>3. ท่านรับประทานอาหารที่มีไขมันสูง ภายใน 6 ชั่วโมงที่ผ่านมา</td>
                            <td><input type="radio" name="healthCategoryQ3" value="y" required></td>
                            <td><input type="radio" name="healthCategoryQ3" value="n"></td>
                        </tr>
                        <tr>
                            <td>4. ท่านมีโรคประจำตัว หรือเคยเป็นโรค</td>
                            <td><input type="radio" name="healthCategoryQ4" value="y" required></td>
                            <td><input type="radio" name="healthCategoryQ4" value="n"></td>
                        </tr>
                        <tr>
                            <td> 5. ท่านรับประทานยาปฏิชีวนะ (ยาฆ่าเชื้อ) ภายใน 7 วันที่ผ่านมา :</td>
                            <td><input type="radio" name="healthCategoryQ5" value="y" required></td>
                            <td><input type="radio" name="healthCategoryQ5" value="n"></td>
                        </tr>
                        <tr>
                            <td> 6. ท่านรับประทานยาแอสไพริน ยาคลายกล้ามเนื้อ ยาแก้ปวดข้อ หรือยาอื่นๆ ในกลุ่ม เดียวกันภายใน 2 วันที่ผ่านมา</td>
                            <td><input type="radio" name="healthCategoryQ6" value="y" required></td>
                            <td><input type="radio" name="healthCategoryQ6" value="n"></td>
                        </tr>
                        <tr>
                            <td> 7. ท่านมีการใช้ ยา / สมุนไพร / อาหารเสริมที่มีไบโอตินเป็นส่วนประกอบ เป็นประจำ หรือไม่ :</td>
                            <td><input type="radio" name="healthCategoryQ7" value="y" required></td>
                            <td><input type="radio" name="healthCategoryQ7" value="n"></td>
                        </tr>
                        <tr>
                            <td> 8. ท่านดื่มแอลกอฮอล์ภายใน 24 ชั่วโมงที่ผ่านมา</td>
                            <td><input type="radio" name="healthCategoryQ8" value="y" required></td>
                            <td><input type="radio" name="healthCategoryQ8" value="n"></td>
                        </tr>
                        <tr>
                            <td> 9. ท่านเคยบริจาคเซลล์ต้นกำเนิดเม็ดโลหิตในระยะ 6 เดือนที่ผ่านมา โปรดระบุ</td>
                            <td><input type="radio" name="healthCategoryQ9" value="y" required></td>
                            <td><input type="radio" name="healthCategoryQ9" value="n"></td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>

        <div class="container-fluid container-main">
            <div class="card shadow rounded">
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
                                <td><input type="radio" name="pregnancyMaternityQ1" value="y" required></td>
                                <td><input type="radio" name="pregnancyMaternityQ1" value="n"></td>
                            </tr>
                            <tr>
                                <td>11. ท่านอยู่ในช่วงตั้งครรภ์ หรือให้นมบุตร</td>
                                <td><input type="radio" name="pregnancyMaternityQ2" value="y" required></td>
                                <td><input type="radio" name="pregnancyMaternityQ2" value="n"></td>
                            </tr>
                            <tr>
                                <td>12. ท่านคลอดบุตร หรือแท้งบุตร ภายใน 6 เดือนที่ผ่านมา</td>
                                <td><input type="radio" name="pregnancyMaternityQ3" value="y" required></td>
                                <td><input type="radio" name="pregnancyMaternityQ3" value="n"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="container-fluid container-main">
            <div class="card shadow rounded">
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
                                <td><input type="radio" name="historyOfSexQ1" value="y" required></td>
                                <td><input type="radio" name="historyOfSexQ1" value="n"></td>
                            </tr>
                            <tr>
                                <td>14. ท่านหรือคู่ของท่านมีพฤติกรรมเสี่ยงทางเพศ : มีเพศสัมพันธ์กับผู้ที่ไม่ใช่คู่ของตนเอง / ผู้ขาย บริการ / ผู้เสพยาเสพติด / ผู้ที่อาจติดเชื้อเอชไอวีหรือโรคติดต่อทางเพศสัมพันธ์อื่น</td>
                                <td><input type="radio" name="historyOfSexQ2" value="y" required></td>
                                <td><input type="radio" name="historyOfSexQ2" value="n"></td>
                            </tr>
                            <tr>
                                <td>15. ท่านเคยใช้ยารักษาหรือป้องกันโรคเอชไอวี</td>
                                <td><input type="radio" name="historyOfSexQ3" value="y" required></td>
                                <td><input type="radio" name="historyOfSexQ3" value="n"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="container-fluid container-main">
            <div class="card shadow rounded">
                <div class="card-header card-header-bloodDonationForm4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-moisture" viewBox="0 0 16 16">
                        <path d="M13.5 0a.5.5 0 0 0 0 1H15v2.75h-.5a.5.5 0 0 0 0 1h.5V7.5h-1.5a.5.5 0 0 0 0 1H15v2.75h-.5a.5.5 0 0 0 0 1h.5V15h-1.5a.5.5 0 0 0 0 1h2a.5.5 0 0 0 .5-.5V.5a.5.5 0 0 0-.5-.5h-2zM7 1.5l.364-.343a.5.5 0 0 0-.728 0l-.002.002-.006.007-.022.023-.08.088a28.458 28.458 0 0 0-1.274 1.517c-.769.983-1.714 2.325-2.385 3.727C2.368 7.564 2 8.682 2 9.733 2 12.614 4.212 15 7 15s5-2.386 5-5.267c0-1.05-.368-2.169-.867-3.212-.671-1.402-1.616-2.744-2.385-3.727a28.458 28.458 0 0 0-1.354-1.605l-.022-.023-.006-.007-.002-.001L7 1.5zm0 0-.364-.343L7 1.5zm-.016.766L7 2.247l.016.019c.24.274.572.667.944 1.144.611.781 1.32 1.776 1.901 2.827H4.14c.58-1.051 1.29-2.046 1.9-2.827.373-.477.706-.87.945-1.144zM3 9.733c0-.755.244-1.612.638-2.496h6.724c.395.884.638 1.741.638 2.496C11 12.117 9.182 14 7 14s-4-1.883-4-4.267z" />
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
                                <td><input type="radio" name="historyVariousInfectionsQ1" value="y" required></td>
                                <td><input type="radio" name="historyVariousInfectionsQ1" value="n"></td>
                            </tr>
                            <tr>
                                <td>17. ท่านท้องเสีย ท้องร่วง ภายใน 7 วันที่ผ่านมา</td>
                                <td><input type="radio" name="historyVariousInfectionsQ2" value="y" required></td>
                                <td><input type="radio" name="historyVariousInfectionsQ2" value="n"></td>
                            </tr>
                            <tr>
                                <td>18. ท่านเคยเจาะหู เจาะผิวหนัง สัก ลบรอยสัก ฝังเข็ม ภายใน 4 เดือนที่ผ่านมา</td>
                                <td><input type="radio" name="historyVariousInfectionsQ3" value="y" required></td>
                                <td><input type="radio" name="historyVariousInfectionsQ3" value="n"></td>
                            </tr>
                            <tr>
                                <td> 19. ท่านเคยได้รับการผ่าตัดเล็ก ภายใน 7 วันที่ผ่านมา</td>
                                <td><input type="radio" name="historyVariousInfectionsQ4" value="y" required></td>
                                <td><input type="radio" name="historyVariousInfectionsQ4" value="n"></td>
                            </tr>
                            <tr>
                                <td> 20. ท่านเคยผ่าตัดใหญ่ ภายใน 6 เดือนที่ผ่านมา</td>
                                <td><input type="radio" name="historyVariousInfectionsQ5" value="y" required></td>
                                <td><input type="radio" name="historyVariousInfectionsQ5" value="n"></td>
                            </tr>
                            <tr>
                                <td> 21. ท่านเคยป่วยและได้รับโลหิต / ส่วนประกอบโลหิต ภายใน 1 ปีที่ผ่านมา</td>
                                <td><input type="radio" name="historyVariousInfectionsQ6" value="y" required></td>
                                <td><input type="radio" name="historyVariousInfectionsQ6" value="n"></td>
                            </tr>
                            <tr>
                                <td> 22. ท่านเคยได้รับการปลูกถ่ายอวัยวะ หรือเซลล์ต้นกำเนิดเม็ดโลหิต</td>
                                <td><input type="radio" name="historyVariousInfectionsQ7" value="y" required></td>
                                <td><input type="radio" name="historyVariousInfectionsQ7" value="n"></td>
                            </tr>
                            <tr>
                                <td> 23. ท่านเคยถูกเข็มที่เปื้อนเลือดตำ ในระยะ 1 ปีที่ผ่านมา</td>
                                <td><input type="radio" name="historyVariousInfectionsQ8" value="y" required></td>
                                <td><input type="radio" name="historyVariousInfectionsQ8" value="n"></td>
                            </tr>
                            <tr>
                                <td> 24. ท่านเคยป่วยเป็นโรคตับอักเสบ หลังอายุ 11 ปี</td>
                                <td><input type="radio" name="historyVariousInfectionsQ9" value="y" required></td>
                                <td><input type="radio" name="historyVariousInfectionsQ9" value="n"></td>
                            </tr>
                            <tr>
                                <td> 25. คู่ของท่านหรือบุคคลในครอบครัวของท่าน เป็นโรคตับอักเสบ ในระยะเวลา 1 ปีที่ผ่านมา</td>
                                <td><input type="radio" name="historyVariousInfectionsQ10" value="y" required></td>
                                <td><input type="radio" name="historyVariousInfectionsQ10" value="n"></td>
                            </tr>
                            <tr>
                                <td> 26. ท่านเคยตรวจพบว่าเป็นพาหะของโรคตับอักเสบ</td>
                                <td><input type="radio" name="historyVariousInfectionsQ11" value="y" required></td>
                                <td><input type="radio" name="historyVariousInfectionsQ11" value="n"></td>
                            </tr>
                            <tr>
                                <td> 27. ท่านเคยป่วยเป็นโรคมาลาเรีย ในระยะ 3 ปีที่ผ่านมา</td>
                                <td><input type="radio" name="historyVariousInfectionsQ12" value="y" required></td>
                                <td><input type="radio" name="historyVariousInfectionsQ12" value="n"></td>
                            </tr>
                            <tr>
                                <td> 28. ท่านเคยเข้าไปในพื้นที่มีเชื้อมาลาเรียชุกชุม ในระยะ 1 ปีที่ผ่านมา</td>
                                <td><input type="radio" name="historyVariousInfectionsQ13" value="y" required></td>
                                <td><input type="radio" name="historyVariousInfectionsQ13" value="n"></td>
                            </tr>
                            <tr>
                                <td> 29. ท่านเคยป่วยเป็นโรคไข้หวัดใหญ่ / โรคไข้เลือดออก / โรคชิคุนกุนยา / โรคไข้ซิกา หรือ โรคโควิด-19 ในระยะ 1 เดือนที่ผ่านมา</td>
                                <td><input type="radio" name="historyVariousInfectionsQ14" value="y" required></td>
                                <td><input type="radio" name="historyVariousInfectionsQ14" value="n"></td>
                            </tr>
                            <tr>
                                <td> 30.ท่านได้รับวัคซีนเพื่อป้องกันโรคในระยะ 2 เดือนที่ผ่านมา</td>
                                <td><input type="radio" name="historyVariousInfectionsQ15" value="y" required></td>
                                <td><input type="radio" name="historyVariousInfectionsQ15" value="n"></td>
                            </tr>
                            <tr>
                                <td> 31. ท่านได้รับเซรุ่ม ภายใน 1 ปี ที่ผ่านมา</td>
                                <td><input type="radio" name="historyVariousInfectionsQ16" value="y" required></td>
                                <td><input type="radio" name="historyVariousInfectionsQ16" value="n"></td>
                            </tr>
                            <tr>
                                <td> 32. ท่านเคยมีประวัติเสพยาเสพติด</td>
                                <td><input type="radio" name="historyVariousInfectionsQ17" value="y" required></td>
                                <td><input type="radio" name="historyVariousInfectionsQ17" value="n"></td>
                            </tr>
                            <tr>
                                <td> 33. ท่านเคยถูกควบคุมตัวหรือจองจำในเรือนจำติดต่อกันเกิน 72 ชั่วโมง ในช่วง 1 ปีที่ผ่านมา</td>
                                <td><input type="radio" name="historyVariousInfectionsQ18" value="y" required></td>
                                <td><input type="radio" name="historyVariousInfectionsQ18" value="n"></td>
                            </tr>
                            <tr>
                                <td> 34. ท่านเคยมีน้ำหนักลด มีไข้ มีต่อมน้ำเหลืองโตโดยไม่ทราบสาเหตุ ในระยะ 3 เดือนที่ผ่านมา หรือเคยตรวจพบว่าติดเชื้อเอชไอวี</td>
                                <td><input type="radio" name="historyVariousInfectionsQ19" value="y" required></td>
                                <td><input type="radio" name="historyVariousInfectionsQ19" value="n"></td>
                            </tr>
                            <tr>
                                <td> 35. ช่วง พ.ศ. 2523 - 2539 ท่านเคยพำนักอาศัยอยู่ในประเทศเหล่านี้ เป็นเวลาสะสมมากกว่า 3 เดือน อังกฤษ ไอร์แลนด์เหนือ สก๊อตแลนด์ เวลส</td>
                                <td><input type="radio" name="historyVariousInfectionsQ20" value="y" required></td>
                                <td><input type="radio" name="historyVariousInfectionsQ20" value="n"></td>
                            </tr>
                            <tr>
                                <td> 36. ช่วง พ.ศ. 2523 – 2544 ท่านเคยพำนักอาศัยอยู่ในประเทศฝรั่งเศส และไอร์แลนด์ เป็นระยะเวลาสะสมมากกว่า 5 ปี</td>
                                <td><input type="radio" name="historyVariousInfectionsQ21" value="y" required></td>
                                <td><input type="radio" name="historyVariousInfectionsQ21" value="n"></td>
                            </tr>
                            <tr>
                                <td> 37. ท่านมั่นใจว่าโลหิตของท่านมีความปลอดภัยต่อผู้ป่วย</td>
                                <td><input type="radio" name="historyVariousInfectionsQ22" value="y" required></td>
                                <td><input type="radio" name="historyVariousInfectionsQ22" value="n"></td>
                            </tr>
                        </tbody>
                    </table>
                    <button class="btn btn-primary btn-sm w-100" type="submit">บันทึก</button>
                </div>
            </div>
        </div>
        <input type="hidden" id="formStatus" name="formStatus" value="1">
        <input type="hidden" id="user_id" name="user_id" value="<?= $_SESSION['user_id']; ?>">
    </form>
</div>



<?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Users/Layout/footer.php'); ?>

<script>
    $(document).ready(function() {

        $('#formBlood-submit').submit(function(e) {
            e.preventDefault();

            let form_id = $('#form_id').val();
            Swal.fire({
                title: 'Are you sure?',
                text: `คุณต้องการบันทึก เเบบสอบถามเเสดงความประสงค์บริจาคโลหิต เลขที่ ${form_id} หรือไม่`,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    const Fd = new FormData($(this)[0]);
                    $.ajax({
                        type: "POST",
                        dataType: "json",
                        url: "../../../../bloodDonationProjectCS60/MyApp/Web/FormBlood/web_FormBloodController_getDataFormBlood.php",
                        data: Fd,
                        contentType: false,
                        processData: false,
                        success: function(response) {
                            let status = response.status;
                            let massage = response.massage;

                            if (status == 200) {
                                Swal.fire(
                                    'สำเร็จ',
                                    'บันทึกข้อมูลสำเร็จ',
                                    'success'
                                ).then((result) => {
                                    let urlBooking = `../../../../bloodDonationProjectCS60/MyApp/View/Appointments/makingAppointment.php?status=${massage}&form_id=${form_id}`;
                                    window.location.href = urlBooking;
                                });

                                console.log(response);

                            } else {
                                Swal.fire(
                                    'ไม่สำเร็จ',
                                    `บันทึกข้อมูลไม่สำเร็จ ${massage}`,
                                    'error'
                                ).then((result) => {
                                    let urlBooking = `../../../../bloodDonationProjectCS60/MyApp/View/Users/home.php`;
                                    window.location.href = urlBooking;
                                });
                            }
                        }
                    });
                }
            });
        });
    });
</script>