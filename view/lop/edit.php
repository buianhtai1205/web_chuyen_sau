<form action="?action=update" method="post">
    <input hidden type="text" name="ma" value="<?php echo $each->get_ma() ; ?>">
    Tên lớp
    <input type="text" name="ten" value="<?php echo $each->get_ten() ; ?>">
    <button>Sửa</button>
</form>