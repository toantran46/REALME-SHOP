
<h3>Danh sách thành viên</h3>
<table class="table table-hover">
    <tr>
        <th>Tên tài khoản</th>
        <th>Email</th>
        <th>Họ tên</th>
        <th>Tên công ty</th>
        <th>Địa chỉ</th>
        <th>Số điện thoại</th>
        <th>Thao tác</th>
    </tr>
    <?php
        $sql = "SELECT * FROM khachhang, diachikh WHERE khachhang.MaDC = diachikh.MaDC and khachhang.MSKH = diachikh.MSKH";
        $query = mysqli_query($mysqli, $sql);
        $i = 0;
        while ($row = mysqli_fetch_array($query)){
            $i++;
    ?>
    <tr>
        <td><?php echo $row['MSKH']?></td>
        <td><?php echo $row['Email']?></td>
        <td><?php echo $row['HoTenKH']?></td>
        <td><?php echo $row['TenCongTy']?></td>
        <td><?php echo $row['DiaChi']?></td>
        <td><?php echo $row['SoDienThoai']?></td>
        <td style="text-align: center;">
            <div class="thaotac"><a href="xuly.php?id=<?php echo $row['MSKH']?>&xoathanhvien=1" onclick="check_delete()"><i class="fas fa-trash-alt"></i></a></div>
        </td>
    </tr>
    <?php
        }
    ?>
    
</div>