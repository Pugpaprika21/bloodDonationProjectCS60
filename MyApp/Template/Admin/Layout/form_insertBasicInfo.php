<div class="card mt-4">
    <div class="card-header" style="background-color: #4C5DC6; color: #FFFFFF;">
        ข้อมูลศูนย์บริการโลหิต
    </div>
    <div class="card-body">
        <form method="post" id="form-insertBasicInfo">
            <div class="row g-3">
                <div class="col-sm-4">
                    <div class="input-group input-group-sm mb-2">
                        <span class="input-group-text" id="inputGroup-sizing-sm">ชื่อ</span>
                        <input type="text" class="form-control" id="nameSc" name="nameSc" placeholder="ชื่อ" required>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="input-group input-group-sm mb-2">
                        <span class="input-group-text" id="inputGroup-sizing-sm">ที่ตั้ง</span>
                        <input type="text" class="form-control" id="addressSc" name="addressSc" placeholder="ที่ตั้ง" required>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="input-group input-group-sm mb-2">
                        <span class="input-group-text" id="inputGroup-sizing-sm">เปิด / ปิด</span>
                        <input type="text" class="form-control" id="officeHoursSc" name="officeHoursSc" placeholder="เปิด / ปิด" required>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="input-group input-group-sm mb-2">
                        <span class="input-group-text" id="inputGroup-sizing-sm">จังหวัด</span>
                        <input type="text" class="form-control" id="provinceSc" name="provinceSc" placeholder="จังหวัด" required>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="input-group input-group-sm mb-2">
                        <span class="input-group-text" id="inputGroup-sizing-sm">เขต</span>
                        <input type="text" class="form-control" id="districtSc" name="districtSc" placeholder="เขต" required>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="input-group input-group-sm mb-2">
                        <span class="input-group-text" id="inputGroup-sizing-sm">ตำบล</span>
                        <input type="text" class="form-control" id="subDistrictSc" name="subDistrictSc" placeholder="ตำบล" required>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="input-group input-group-sm mb-2">
                        <span class="input-group-text" id="inputGroup-sizing-sm">ถนน</span>
                        <input type="text" class="form-control" id="roadSc" name="roadSc"  placeholder="ถนน" required>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="input-group input-group-sm mb-2">
                        <span class="input-group-text" id="inputGroup-sizing-sm">รหัสไปรษณีย์</span>
                        <input type="text" class="form-control" id="postCodeSc" name="postCodeSc"  placeholder="รหัสไปรษณีย์" required>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="input-group input-group-sm mb-2">
                        <span class="input-group-text" id="inputGroup-sizing-sm">อีเมล</span>
                        <input type="text" class="form-control" id="emailSc" name="emailSc" placeholder="อีเมล" required>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="input-group input-group-sm mb-2">
                        <span class="input-group-text" id="inputGroup-sizing-sm">ติดต่อ</span>
                        <input type="text" class="form-control" id="phoneNumberSc" name="phoneNumberSc" placeholder="ติดต่อ" required>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success btn-sm w-100 mt-4">บันทึก</button>
        </form>
    </div>
</div>