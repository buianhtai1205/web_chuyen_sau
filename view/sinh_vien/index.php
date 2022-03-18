<h1>Danh sách sinh viên</h1>

<a href="?controller=sinh_vien&action=create">Thêm sinh viên</a>
<table border="1" width="100%">
    <tr>
        <th>Mã sinh viên</th>
        <th>Tên sinh viên</th>
        <th>Tên lớp</th>
        <th>Sửa</th>
        <th>Xóa</th>
    </tr>
    <?php foreach ($result as $each): ?>
    <tr>
        <th><?php echo $each['ma']; ?></th>
        <th><?php echo $each['ten']; ?></th>
        <th><?php echo $each['ten_lop']; ?></th>
        <th><a href="?controller=sinh_vien&action=edit&ma=<?php echo $each['ma']; ?>">Sửa</a></th>
        <th><a href="?controller=sinh_vien&action=delete&ma=<?php echo $each['ma']; ?>">Xóa</a></th>
    </tr>
    <?php endforeach; ?>
</table>