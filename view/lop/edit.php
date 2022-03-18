<h1>Sửa lớp</h1>

<form action="?controller=lop&action=update" method="post">
    <input hidden type="text" name="ma" value="<?php echo $each['ma']; ?>">
    Tên lớp
    <input type="text" name="ten" value="<?php echo $each['ten']; ?>">
    <button>Sửa</button>
</form>