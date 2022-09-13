<button type="button" class="btn btn-sm btn-primary w-100" data-bs-toggle="modal" data-bs-target="#modal6">
    เลือกช่วงเวลานัดหมาย
</button>

<div class="modal fade" id="modal6" tabindex="-1" aria-labelledby="modal6Label" aria-hidden="true">
    <div class="modal-dialog">
        <form method="post" id="submit-modal6">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal6Label">เลือกเวลานัดหมาย 6</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="dateApp" id="dateApp6" value="<?= $arrayDateAdd['day6']; ?>">
                    <select class="form-select" id="durationApp6" name="durationApp">
                        <option disabled>---- เลือกช่วงเวลาการนัดหมาย ----</option>
                        <option value="ช่วงเช้า">ช่วงเช้า : 8.30 ถึง 11.30 น.</option>
                        <option value="ช่วงบ่าย">ช่วงบ่าย : 13.00 ถึง 16.30 น.</option>
                    </select>
                    <input type="hidden" name="durationStatus" id="durationStatus6" value="0">
                    <input type="hidden" name="user_id" id="user_id6" value="<?= $_SESSION['user_id']; ?>">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
                    <button type="submit" class="btn btn-primary">บันทึก</button>
                </div>
            </div>
        </form>
    </div>
</div>