<?php
    $sql_lietkesp = "SELECT * FROM hanghoa ORDER BY MSHH DESC";
    $query_lietkesp = mysqli_query($mysqli,$sql_lietkesp);
?>
<h2>Danh sách sản phẩm</h2>
<div class="thaotac">
    <a href="index.php?quanly=themsp"><i class="fas fa-plus-circle"> Thêm sản phẩm</i></a>
</div>

<table class="table table-hover" style="text-align: center;">
    <tr>
        <th>Mã sản phẩm</th>
        <th>Mã loại hàng</th>
        <th>Tên</th>
        <th>Ảnh</th>
        <th>Màn hình</th>
        <th>Hệ Điều Hành</th>
        <th>Cam sau</th>
        <th>Cam trước</th>
        <th>Chip</th>
        <th>Ram</th>
        <th>Bộ nhớ</th>
        <th>Sim</th>
        <th>Pin</th>
        <th>Giá</th>
        <th>Số lượng</th>
        <th>Thao tác</th>
    </tr>
    <?php
        $i = 0;
        while ($row = mysqli_fetch_array($query_lietkesp)){
            $i++;
    ?>
    <tr>
        <td><?php echo $row['MSHH']?></td>
        <td><?php echo $row['MaLoaiHang']?></td>
        <td><?php echo $row['TenHH']?></td>
        <td><img src="<?php echo $row['Anh']?>" style = "width: 50px"></td>
        <td><?php echo $row['MangHinh']?></td>
        <td><?php echo $row['HeDieuHanh']?></td>
        <td><?php echo $row['CamSau']?></td>
        <td><?php echo $row['CamTruoc']?></td>
        <td><?php echo $row['Chip']?></td>
        <td><?php echo $row['Ram']?></td>
        <td><?php echo $row['BoNho']?></td>
        <td><?php echo $row['Sim']?></td>
        <td><?php echo $row['Pin']?></td>
        <td><?php echo number_format($row['Gia'], 0, ',', '.');?>₫</td>
        <td><?php echo $row['SoLuongHang']?></td>
        <td>
        <div class="thaotac">
            <a href="index.php?quanly=suasp&idsp=<?php echo $row['MSHH'] ?>" style="float: left;"><i class="far fa-edit"></i></a> 
            <a href="xuly.php?idsp=<?php echo $row['MSHH'] ?>" style="float: right;"><i class="fas fa-trash-alt"></i></a>
        </div>
        </td>
    </tr>
    <?php
        }
    ?>
</table>