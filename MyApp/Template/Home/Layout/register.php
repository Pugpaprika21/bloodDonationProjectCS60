<div class="container">
    <div class="d-flex justify-content-center">
        <div class="card shadow rounded card-top" style="width: 60rem;">
            <div class="card-header card-top-header">
                Register
            </div>
            <div class="card-body">
                <form action="" method="post" id="form-register">
                    <div class="text-personal-information">
                        ข้อมูลส่วนตัว ----
                    </div>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="input-group mb-2">
                                <span class="input-group-text">ชื่อผู้ใช้</span>
                                <input type="text" class="form-control" id="username" name="username" placeholder="username">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group mb-2">
                                <span class="input-group-text">รหัสผ่าน</span>
                                <input type="text" class="form-control" id="password" name="password" placeholder="password">
                            </div>
                        </div>
                        <!--  -->
                        <div class="col-md-6">
                            <div class="input-group mb-2">
                                <span class="input-group-text">ชื่อจริง</span>
                                <input type="text" class="form-control" id="firstname" name="firstname" placeholder="firstname">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group mb-2">
                                <span class="input-group-text">นามสกุล</span>
                                <input type="text" class="form-control" id="lastname" name="lastname" placeholder="lastname">
                            </div>
                        </div>
                        <!--  -->
                        <div class="col-md-6">
                            <div class="input-group mb-2">
                                <label class="input-group-text" for="gender">เพศ</label>
                                <select class="form-select" id="gender" name="gender">
                                    <option>เลือก...</option>
                                    <option value="male">ชาย</option>
                                    <option value="female">หญิง</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group mb-2">
                                <span class="input-group-text">ว/ด/ป</span>
                                <input type="date" class="form-control" id="dateOfBirth" name="dateOfBirth">
                            </div>
                        </div>
                        <!--  -->
                        <div class="col">
                            <div class="input-group mb-2">
                                <label class="input-group-text" for="bloodType">กรุ๊ปเลือด</label>
                                <select class="form-select" id="bloodType" name="bloodType">
                                    <option>เลือก...</option>
                                    <option value="A+">หมู่เลือด A+</option>
                                    <option value="B+">หมู่เลือด B+</option>
                                    <option value="AB+">หมู่เลือด AB+</option>
                                    <option value="O+">หมู่เลือด O+ </option>
                                    <option value="A-">หมู่เลือด A-</option>
                                    <option value="B-">หมู่เลือด B-</option>
                                    <option value="AB-">หมู่เลือด AB-</option>
                                    <option value="O-">หมู่เลือด O- </option>
                                </select>
                            </div>
                        </div>
                        <!--  -->
                        <div class="col-md-3">
                            <div class="input-group mb-2">
                                <span class="input-group-text">น้ำหนัก</span>
                                <input type="number" class="form-control" id="weight" name="weight">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="input-group mb-2">
                                <span class="input-group-text">ส่วนสูง</span>
                                <input type="number" class="form-control" id="height" name="height">
                            </div>
                        </div>
                        <!--  -->

                        <div class="text-address-information">
                            ข้อมูลที่อยู่ ----
                        </div>
                        <div class="col-md-6">
                            <div class="input-group mb-2">
                                <span class="input-group-text">ที่อยู่</span>
                                <input type="text" class="form-control" id="address" name="address">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group mb-2">
                                <span class="input-group-text">ตำบล</span>
                                <input type="text" class="form-control" id="subDistrict" name="subDistrict">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-group mb-2">
                                <span class="input-group-text">ถนน</span>
                                <input type="text" class="form-control" id="road" name="road">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group mb-2">
                                <span class="input-group-text">อำเภอ</span>
                                <input type="text" class="form-control" id="district" name="district">
                            </div>
                        </div>
                        <!--  -->
                        <div class="col-md-6">
                            <div class="input-group mb-2">
                                <span class="input-group-text">จังหวัด</span>
                                <input type="text" class="form-control" id="province" name="province">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group mb-2">
                                <span class="input-group-text">รหัสไปรษณีย์</span>
                                <input type="text" class="form-control" id="postCode" name="postCode">
                            </div>
                        </div>
                        
                        <!--  -->
                        <div class="text-contact-information">
                            ข้อมูลการติดต่อ ----
                        </div>

                        <div class="col-md-6">
                            <div class="input-group mb-2">
                                <span class="input-group-text">บัตรประชาชน</span>
                                <input type="text" class="form-control" id="idCard" name="idCard">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group mb-2">
                                <span class="input-group-text">อีเมล</span>
                                <input type="text" class="form-control" id="email" name="email">
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-group mb-2">
                                <span class="input-group-text">หมายเลขโทรศัพท์</span>
                                <input type="phone" class="form-control" id="phoneNumber" name="phoneNumber">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">ลงทะเบียน</button>
                </form>
            </div>
        </div>
    </div>
</div>