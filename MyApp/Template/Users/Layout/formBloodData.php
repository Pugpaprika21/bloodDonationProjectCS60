<table class="table table-bordered text-center display" id="formBloodData" style="width:100%">
    <thead style="background-color: #0F3D81; color: #FFFFFF;">
        <tr>
            <td>#</td>
            <td>คำถามที่ 1</td>
            <td>คำถามที่ 2</td>
            <td>คำถามที่ 3</td>
            <td>คำถามที่ 4</td>
            <td>คำถามที่ 5</td>
            <td>คำถามที่ 6</td>
            <td>สถานะ</td>
            <td>รายละเอียด</td>
        </tr>
    </thead>
    <tbody>
        <?php $formblood_tb = isset($_SESSION['formblood_tb']) ? $_SESSION['formblood_tb'] : []; ?>
        <?php foreach ($formblood_tb  as $key => $values) : ?>
            <tr>
                <td><?= $values->form_id; ?></td>
                <td><?= $values->healthCategoryQ1; ?></td>
                <td><?= $values->healthCategoryQ2; ?></td>
                <td><?= $values->healthCategoryQ3; ?></td>
                <td><?= $values->healthCategoryQ4; ?></td>
                <td><?= $values->healthCategoryQ5; ?></td>
                <td><?= $values->healthCategoryQ6; ?></td>
                <?php if ($values->formStatus == 1) : ?>
                    <td><span class="badge text-bg-success">ทำเเบบสอบถามเเล้ว</span></td>
                <?php endif; ?>
                <td><a class="btn btn-primary btn-sm" href="../../../../bloodDonationProjectCS60/MyApp/View/Users/userViewFormBlood.php?form_id=<?= $values->form_id; ?>" role="button">เรียกดู</a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>