<form action="?action=store&controller=sinh_vien" method="post">
    Tên
    <input type="text" name="ten">
    Lớp
    <select name="ma_lop" id="">
        <?php foreach ($lops as $lop): ?>
            <option value="<?php echo $lop->get_ma(); ?>">
                <?php echo $lop->get_ten(); ?>
            </option>
        <?php endforeach ; ?>
    </select>
    <button>Thêm</button>
</form>