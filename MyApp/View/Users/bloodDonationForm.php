<?php session_start(); ?>
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
    <form method="post" id="formBlood-submit">
        <div class="d-flex justify-content-center">
            <!-- card-main-bloodDonationForm1 | general health category -->
            <div class="card card-main-bloodDonationForm1 shadow-sm rounded">
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
                            </tr>
                            <tr>
                                <td>4. ท่านมีโรคประจำตัว หรือเคยเป็นโรค</td>
                                <td><input type="radio" name="healthCategoryQ4" value="y" id="radio_margin" required></td>
                                <td><input type="radio" name="healthCategoryQ4" value="n" id="radio_margin"></td>
                            </tr>
                            <tr>
                                <td> 5. ท่านรับประทานยาปฏิชีวนะ (ยาฆ่าเชื้อ) ภายใน 7 วันที่ผ่านมา :

                                </td>
                                <td><input type="radio" name="healthCategoryQ5" value="y" id="radio_margin" required></td>
                                <td><input type="radio" name="healthCategoryQ5" value="n" id="radio_margin">
                                </td>
                            </tr>
                            <tr>
                                <td> 6. ท่านรับประทานยาแอสไพริน ยาคลายกล้ามเนื้อ ยาแก้ปวดข้อ หรือยาอื่นๆ ในกลุ่ม
                                    เดียวกันภายใน 2 วันที่ผ่านมา</td>
                                <td><input type="radio" name="healthCategoryQ6" value="y" required></td>
                                <td><input type="radio" name="healthCategoryQ6" value="n"></td>
                            </tr>
                            <tr>
                                <td> 7. ท่านมีการใช้ ยา / สมุนไพร / อาหารเสริมที่มีไบโอตินเป็นส่วนประกอบ เป็นประจำ
                                    หรือไม่ :
                                </td>
                                <td><input type="radio" name="healthCategoryQ7" value="y" id="radio_margin" required></td>
                                <td><input type="radio" name="healthCategoryQ7" value="n" id="radio_margin">
                                </td>
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
        </div>
        <br>
        <!-- card-main-bloodDonationForm2 -->
        <div class="d-flex justify-content-center">
            <!-- card-main-bloodDonationForm2 | Category : Pregnancy / Maternity -->
            <div class="card card-main-bloodDonationForm2 shadow-sm rounded">
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
        <br>
        <!-- card-main-bloodDonationForm3 -->
        <div class="d-flex justify-content-center">
            <!-- card-main-bloodDonationForm3 | Category : History of Sex -->
            <div class="card card-main-bloodDonationForm3 shadow-sm rounded">
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
                                <td>14. ท่านหรือคู่ของท่านมีพฤติกรรมเสี่ยงทางเพศ :
                                    มีเพศสัมพันธ์กับผู้ที่ไม่ใช่คู่ของตนเอง / ผู้ขาย <br> บริการ / ผู้เสพยาเสพติด /
                                    ผู้ที่อาจติดเชื้อเอชไอวีหรือโรคติดต่อทางเพศสัมพันธ์อื่น</td>
                                <td><input type="radio" name="historyOfSexQ2" value="y" id="radio_margin" required></td>
                                <td><input type="radio" name="historyOfSexQ2" value="n" id="radio_margin"></td>
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
        <br>
        <!-- card-main-bloodDonationForm4 -->
        <div class="d-flex justify-content-center">
            <!-- card-main-bloodDonationForm4 | Category : History of risk of various infections -->
            <div class="card card-main-bloodDonationForm4 shadow-sm rounded">
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
                                <td><input type="radio" name="historyVariousInfectionsQ15" value="y" id="radio_margin" required></td>
                                <td><input type="radio" name="historyVariousInfectionsQ15" value="n" id="radio_margin"></td>
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
                                <td> 33. ท่านเคยถูกควบคุมตัวหรือจองจำในเรือนจำติดต่อกันเกิน 72 ชั่วโมง ในช่วง 1
                                    ปีที่ผ่านมา</td>
                                <td><input type="radio" name="historyVariousInfectionsQ18" value="y" required></td>
                                <td><input type="radio" name="historyVariousInfectionsQ18" value="n"></td>
                            </tr>
                            <tr>
                                <td> 34. ท่านเคยมีน้ำหนักลด มีไข้ มีต่อมน้ำเหลืองโตโดยไม่ทราบสาเหตุ ในระยะ 3
                                    เดือนที่ผ่านมา หรือเคยตรวจพบว่าติดเชื้อเอชไอวี</td>
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
                    <button class="btn btn-primary w-100" type="submit">บันทึก</button>
                </div>
            </div>
        </div>
    </form>
</div>

<?php require_once('../../../../bloodDonationProjectCS60/MyApp/Template/Users/Layout/footer.php'); ?>

<script>
    $(document).ready(function() {

        $('#formBlood-submit').submit(function(e) {
            e.preventDefault();
            const Fd = new FormData($(this)[0]);

            $.ajax({
                type: "POST",
                dataType: "json",
                url: "../../../../bloodDonationProjectCS60/MyApp/Web/FormBlood/web_FormBloodController_getDataFormBlood.php",
                data: Fd,
                contentType: false,
                processData: false,
                success: function(response) {
                    console.log(response);
                }
            });
        });
    });
</script>