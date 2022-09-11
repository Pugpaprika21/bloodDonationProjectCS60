<button type="button" class="btn btn-sm btn-primary w-100" data-bs-toggle="modal" data-bs-target="#modal1">
    เลือกช่วงเวลานัดหมาย
</button>

<div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="modal1Label" aria-hidden="true">
    <div class="modal-dialog">
        <form method="post" id="submit-modal1">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal1Label">เลือกเวลานัดหมาย 1</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="dateApp" id="dateApp" value="<?= $_SESSION['days']['day1']; ?>">
                    <select class="form-select" id="durationApp" name="durationApp">
                        <option value="notSelect">---- เลือกช่วงเวลาการนัดหมาย ----</option>
                        <option value="morning">ช่วงเช้า</option>
                        <option value="afternoon">ช่วงบ่าย</option>
                    </select>
                    <input type="hidden" name="durationStatus" id="durationStatus" value="0">
                    <input type="hidden" name="user_id" id="user_id" value="<?= $_SESSION['user_id']; ?>">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </form>
    </div>
</div>