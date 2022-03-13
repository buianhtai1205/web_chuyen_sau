<h1>
    DANH SÁCH SINH VIÊN
</h1>

<a href="?action=create">Thêm sinh viên</a>
<table border="1" width="100%" >
    <tr>
        <th>Mã</th>
        <th>Tên sinh viên</th>
        <th>Sửa</th>
        <th>Xóa</th>
    </tr>
    <?php foreach ($result as $each) { ?>
        <tr>
            <th><?php echo $each['ma']; ?></th>
            <th><?php echo $each['ten']; ?></th>
            <th>
                <a href="?action=edit&ma=<?php echo $each['ma']; ?>">Sửa</a>
            </th>
            <th>
                <a href="?action=delete&ma=<?php echo $each['ma']; ?>">Xóa</a>
            </th>
        </tr>
    <?php } ?>

</table>