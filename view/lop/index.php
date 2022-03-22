<h1>Danh sách lớp</h1>

<a href="?action=create&controller=lop">Thêm lớp</a>

<table border="1" width="100%">
    <tr>
        <th>Mã</th>
        <th>Tên lớp</th>
        <th>Sửa</th>
        <th>Xóa</th>
    </tr>
    <?php foreach ($arr as $each) : ?>
        <tr>
            <th><?php echo $each->show_ma();?></th>
            <th><?php echo $each->get_ten(); ?></th>
            <th><a href="?action=edit&controller=lop&ma=<?php echo $each->get_ma();?>">Sửa</a></th>
            <th><a href="?action=delete&controller=lop&ma=<?php echo $each->get_ma();?>">Xóa</a></th>
        </tr>
    <?php endforeach; ?>
</table>