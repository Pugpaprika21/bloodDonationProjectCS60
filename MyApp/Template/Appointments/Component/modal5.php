<button type="button" class="btn btn-sm btn-primary w-100" data-bs-toggle="modal" data-bs-target="#modal5">
    เลือกช่วงเวลานัดหมาย
</button>

<div class="modal fade" id="modal5" tabindex="-1" aria-labelledby="modal5Label" aria-hidden="true">
    <div class="modal-dialog">
        <form method="post" id="submit-modal5">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal1Label">เลือกเวลานัดหมาย 5</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="dateApp" id="dateApp5" value="<?= $arrayDateAdd['day5']; ?>">
                    <select class="form-select" id="durationApp5" name="durationApp">
                        <option disabled>---- เลือกช่วงเวลาการนัดหมาย ----</option>
                        <option value="ช่วงเช้า">ช่วงเช้า : 8.30 ถึง 11.30 น.</option>
                        <option value="ช่วงบ่าย">ช่วงบ่าย : 13.00 ถึง 16.30 น.</option>
                    </select>
                    <input type="hidden" name="durationStatus" id="durationStatus5" value="0">
                    <input type="hidden" name="user_id" id="user_id5" value="<?= $_SESSION['user_id']; ?>">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </form>
    </div>
</div>