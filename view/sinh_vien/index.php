<h1>Danh sách sinh viên</h1>

<a href="?action=create&controller=sinh_vien">Thêm sinh viên</a>

<table border="1" width="100%">
    <tr>
        <th>Mã</th>
        <th>Tên sinh viên</th>
        <th>Tên lớp</th>
        <th>Sửa</th>
        <th>Xóa</th>
    </tr>
    <?php foreach ($arr as $each) : ?>
        <tr>
            <th><?php echo $each->show_ma();?></th>
            <th><?php echo $each->get_ten(); ?></th>
            <th><?php echo $each->get_ten_lop(); ?></th>
            <th><a href="?action=edit&controller=sinh_vien&ma=<?php echo $each->get_ma();?>">Sửa</a></th>
            <th><a href="?action=delete&controller=sinh_vien&ma=<?php echo $each->get_ma();?>">Xóa</a></th>
        </tr>
    <?php endforeach; ?>
</table>