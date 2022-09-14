<table class="table table-bordered text-center display" id="appointmentsShowData" style="width:100%">
    <thead style="background-color: #0F3D81; color: #FFFFFF;">
        <tr>
            <td>#</td>
            <td>วันที่นัดหมาย</td>
            <td>ช่วงการนัดหมาย</td>
            <td>เวลาการนัดหมาย</td>
            <td>สถานะ</td>
        </tr>
    </thead>
    <tbody>
        <?php $makingappointments_tb = isset($_SESSION['makingappointments_tb']) ? $_SESSION['makingappointments_tb'] : []; ?>
        <?php $i = 0; foreach ($makingappointments_tb as $key => $values) : ?>
            <tr>
                <td><?= ($i + 1); ?></td>
                <td><?= $dateThai->get($values->dateApp)->dayMonthYearCut(); ?></td>
                <td><?= $values->durationApp; ?></td>
                <td><?= $values->durationTime; ?></td>
                <?php if ($values->durationStatus == 0) : ?>
                    <td><span class="badge text-bg-warning">ยังไม่นัดหมาย</span></td>
                <?php elseif ($values->durationStatus == 1) : ?>
                    <td><span class="badge text-bg-success">นัดหมายสำเร็จ</span></td>
                <?php endif; ?>
            </tr>
        <?php $i++;  endforeach; ?>
    </tbody>
</table>