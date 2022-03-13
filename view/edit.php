<h1>Sửa sinh viên</h1>
<form action="?action=update" method="post">
    <input hidden type="text" name="ma" value="<?php echo $each['ma']; ?>">
    Tên sinh viên
    <input type="text" name="ten" value="<?php echo $each['ten']; ?>"> <br>
    <button>Sửa</button>
</form>