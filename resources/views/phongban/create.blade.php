<h2>Thêm phòng ban</h2>
<form method="POST" action="{{ route('phongban.store') }}">
    @csrf
    <label>Tên phòng ban:</label>
    <input type="text" name="ten_phong_ban" required>
    <br><br>
    <button type="submit">Lưu</button>
</form>