<h1>Thêm sinh viên</h1>

<form action="?controller=sinh_vien&action=insert" method="post">
    Tên sinh viên
    <input type="text" name="ten">
    Tên lớp
    <select name="ma_lop" id="">
        <?php foreach ($lops as $lop) : ?>
            <option value="<?php echo $lop['ma']; ?>">
                <?php echo $lop['ten']; ?>
            </option>
        <?php endforeach; ?>
    </select>
    <button>Thêm</button>
</form>