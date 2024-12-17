<link rel="stylesheet" href="../style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

<h1 class="p1">
    <i class="fa-solid fa-book"></i>หน้าจอลงทะเบียนผู้ใช้</h1>
<div class="content">
    <form action="../action.php" method="post">

    <div class="mb-3">
            <label class="form-label">ชื่อ</label>
            <input type="text" class="form-control" 
            name="tName" 
            placeholder="ระบุชื่อ...."required>
</div>
    <div class="mb-3">
            <label class="form-label">นามสกุล</label>
            <input type="text" class="form-control" 
            name="tLastname" 
            placeholder="ระบุนามสกุล...."required>
</div>
    <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" class="form-control" 
            name="tUsername" 
            placeholder="กรุณาใส่ชื่อผู้ใช้..."required>
</div>
    <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" 
            name="tPassword" 
            placeholder="กรุณาใส่รหัสผ่าน..."required>

            </select> 
        </div>
        <div>
        <input type="submit" name="bSubmitUser" class="btn btn-primary" value="บันทึกข้อมูล"></div>

    </form>
</div>