<table class="table table-bordered display" id="donationprocess_tb" style="width:100%">
    <thead style="background-color: #0F3D81; color: #FFFFFF;">
        <tr>
            <td>#</td>
            <td>ขั้นตอนที่ 1</td>
            <td>ขั้นตอนที่ 2</td>
            <td>ขั้นตอนที่ 3</td>
            <td>ขั้นตอนที่ 4</td>
            <td>ขั้นตอนที่ 5</td>
        </tr>
    </thead>
    <tbody>
        <?php $donationprocess_tb = isset($_SESSION['donationprocess_tb']) ? $_SESSION['donationprocess_tb'] : []; ?>
        <?php $i = 0; foreach ($donationprocess_tb as $key => $values) : ?>
            <tr>
                <td><?= ($i + 1); ?></td>
                <td><?= $values->donationStep1; ?></td>
                <td><?= $values->donationStep2; ?></td>
                <td><?= $values->donationStep3; ?></td>
                <td><?= $values->donationStep4; ?></td>
                <td><?= $values->donationStep5; ?></td>
            </tr>
        <?php $i++; endforeach; ?>
    </tbody>
</table>