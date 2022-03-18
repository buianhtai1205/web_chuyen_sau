<h1>Sửa sinh viên</h1>

<form action="?controller=sinh_vien&action=update" method="post">
    <input hidden type="text" name="ma" value="<?php echo $each['ma']; ?>">
    Tên sinh viên
    <input type="text" name="ten" value="<?php echo $each['ten']; ?>">
    Tên sinh viên
    <select name="ma_lop" id="">
        <?php foreach ($lops as $lop) : ?>
            <option value="<?php echo $lop['ma']; ?>" <?php if ($lop['ma'] == $each['ma_lop']) echo 'selected'; ?>>
                <?php echo $lop['ten']; ?>
            </option>
        <?php endforeach; ?>
    </select>
    <button>Sửa</button>
</form>