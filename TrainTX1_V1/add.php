<h2>Thêm mới nhân viên hoặc quản lý</h2>

<form action="actions/add.php" method="POST">
    <label>Vai trò:</label><br>
    <select name="role" required onchange="toggleFields()">
        <option value="">-- Chọn --</option>
        <option value="employee">Nhân viên</option>
        <option value="manager">Quản lý</option>
    </select><br><br>

    <div id="commonFields">
        <label>Họ tên:</label><br>
        <input type="text" name="name" required><br><br>
    </div>

    <div id="employeeFields" style="display:none;">
        <label>Email:</label><br>
        <input type="email" name="email"><br><br>

        <label>Lương:</label><br>
        <input type="number" step="0.01" name="salary"><br><br>
    </div>

    <div id="managerFields" style="display:none;">
        <label>Phòng ban:</label><br>
        <input type="text" name="department"><br><br>

        <label>Tiền thưởng:</label><br>
        <input type="number" step="0.01" name="bonus"><br><br>
    </div>

    <button type="submit">Thêm mới</button>
</form>

<br>
<a href="index.php">← Quay lại</a>

<script>
function toggleFields() {
    var role = document.querySelector('select[name="role"]').value;
    document.getElementById('employeeFields').style.display = (role === 'employee') ? 'block' : 'none';
    document.getElementById('managerFields').style.display = (role === 'manager') ? 'block' : 'none';
}
</script>
