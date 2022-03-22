<form action="?action=update&controller=sinh_vien" method="post">
    <input hidden type="text" name="ma" value="<?php echo $each->get_ma() ; ?>">
    Tên sinh viên
    <input type="text" name="ten" value="<?php echo $each->get_ten() ; ?>">
    Tên lớp
    <select name="ma_lop" id="">
        <?php foreach ($lops as $lop): ?>
            <option value="<?php echo $lop->get_ma(); ?>"
                <?php if($each->get_ma_lop() === $lop->get_ma()) echo "selected" ?>>
                <?php echo $lop->get_ten(); ?>
            </option>
        <?php endforeach; ?>
    </select>
    <button>Sửa</button>
</form>