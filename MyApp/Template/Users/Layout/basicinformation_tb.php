<table class="table table-bordered text-center display" id="basicinformation_tb" style="width:100%">
    <thead style="background-color: #0F3D81; color: #FFFFFF;">
        <tr>
            <td>#</td>
            <td>ชื่อศูนย์บริการโลหิต</td>
            <td>ที่ตั้ง</td>
            <td>เปิด / ปิด</td>
            <td>จังหวัด</td>
            <td>เขต</td>
            <td>ติดต่อ</td>
            <td>รายละเอียด</td>
        </tr>
    </thead>
    <tbody>
        <?php $basicinformation_tb = isset($_SESSION['basicinformation_tb']) ? $_SESSION['basicinformation_tb'] : []; ?>
        <?php $i = 0; foreach ($basicinformation_tb as $key => $values) : ?>
            <tr>
                <td><?= ($i + 1); ?></td>
                <td><?= $values->nameSc; ?></td>
                <td><?= $values->addressSc; ?></td>
                <td><?= $values->officeHoursSc; ?></td>
                <td><?= $values->provinceSc; ?></td>
                <td><?= $values->districtSc; ?></td>
                <td><?= $values->phoneNumberSc; ?></td>
                <td><a class="btn btn-primary btn-sm" href="../../../../bloodDonationProjectCS60/MyApp/View/Users/userViewBasicInformation.php?bc_id=<?= $values->bc_id; ?>" role="button">เพิ่มเติม</a></td>
            </tr>
        <?php $i++; endforeach; ?>
    </tbody>
</table>