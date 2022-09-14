<table class="table table-bordered text-center display" id="preparing_blooddonation_tb" style="width:100%">
    <thead style="background-color: #0F3D81; color: #FFFFFF;">
        <tr>
            <td>#</td>
            <td>ส่วนที่ 1</td>
            <td>ส่วนที่ 2</td>
            <td>ส่วนที่ 3</td>
            <td>ส่วนที่ 4</td>
            <td>ส่วนที่ 5</td>
            <td>ส่วนที่ 6</td>
            <td>ส่วนที่ 7</td>
            <td>ส่วนที่ 8</td>
            <td>รายละเอียด</td>
        </tr>
    </thead>
    <tbody>
        <?php $preparing_blooddonation_tb = isset($_SESSION['preparing_blooddonation_tb']) ? $_SESSION['preparing_blooddonation_tb'] : []; ?>
        <?php $i = 0; foreach ($preparing_blooddonation_tb as $key => $values) : ?>
            <tr>
                <td>#</td>
                <td><?= $values->pbDetail1; ?></td>
                <td><?= $values->pbDetail2; ?></td>
                <td><?= $values->pbDetail3; ?></td>
                <td><?= $values->pbDetail4; ?></td>
                <td><?= $values->pbDetail5; ?></td>
                <td><?= $values->pbDetail6; ?></td>
                <td><?= $values->pbDetail7; ?></td>
                <td><?= $values->pbDetail8; ?></td>
                <td><a class="btn btn-primary btn-sm" href="../../../../bloodDonationProjectCS60/MyApp/View/Users/userViewBasicInformation.php?bc_id=<?= $values->pb_id; ?>" role="button">เพิ่มเติม</a></td>
            </tr>
        <?php $i++; endforeach; ?>
    </tbody>
</table>