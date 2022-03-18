<h1>Danh sách lớp</h1>

<a href="?controller=lop&action=create">Thêm lớp</a>
<table border="1" width="100%">
    <tr>
        <th>Mã lớp</th>
        <th>Tên lớp</th>
        <th>Sửa</th>
        <th>Xóa</th>
    </tr>
    <?php foreach ($result as $each): ?>
    <tr>
        <th><?php echo $each['ma']; ?></th>
        <th><?php echo $each['ten']; ?></th>
        <th><a href="?controller=lop&action=edit&ma=<?php echo $each['ma']; ?>">Sửa</a></th>
        <th><a href="?controller=lop&action=delete&ma=<?php echo $each['ma']; ?>">Xóa</a></th>
    </tr>
    <?php endforeach; ?>
</table>