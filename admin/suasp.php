<?php
$sql_suasp = "SELECT * FROM hanghoa WHERE MSHH='$_GET[idsp]' LIMIT 1";
$query_suasp = mysqli_query($mysqli,$sql_suasp);
?>
<h3>Sửa sản phẩm</h3>
<form method="POST" action="xuly.php?idsp=<?php echo $_GET['idsp']?>">
    <div class="row">
        <div class="col-xs-12 col-lg-6">
            <table class="table">
                <?php
                while ($row = mysqli_fetch_array($query_suasp)){
                    ?>
                    <tr>
                    <td>Loại hàng</td>
                    <td>
                        <?php
                        $sql_lietkesp = "SELECT * FROM loaihanghoa";
                        $query_lietkesp = mysqli_query($mysqli,$sql_lietkesp);
                        ?>
                        <select class="form-control" name="maloaihang">
                            <?php
                            while ($row1 = mysqli_fetch_array($query_lietkesp)){
                                ?>
                                <option <?php echo $row['MaLoaiHang']==$row1['MaLoaiHang']?'selected ':''; ?> value="<?php echo $row1['MaLoaiHang']?>"><?php echo $row1['TenLoaiHang']?></option>
                            <?php }?>
                        </select>
                    </td>
                </tr>
                    <tr>
                        <td>Tên</td>
                        <td><input class="form-control" type="text" name="tensp" value="<?php echo $row['TenHH']?>"></td>
                    </tr>
                    <tr>
                        <td>Ảnh (địa chỉ đường dẫn)</td>
                        <td><input class="form-control" type="text" name="anh" value="<?php echo $row['Anh']?>"></td>
                    </tr>
                    <tr>
                        <td>Màn hình</td>
                        <td><input class="form-control" type="text" name="manhinh" value="<?php echo $row['MangHinh']?>"></td>
                    </tr>
                    <tr>
                        <td>Hệ điều hành</td>
                        <td><input class="form-control" type="text" name="hedieuhanh" value="<?php echo $row['HeDieuHanh']?>"></td>
                    </tr>
                    <tr>
                        <td>Camera sau</td>
                        <td><input class="form-control" type="text" name="camsau" value="<?php echo $row['CamSau']?>"></td>
                    </tr>
                    <tr>
                        <td>Camera trước</td>
                        <td><input class="form-control" type="text" name="camtruoc" value="<?php echo $row['CamTruoc']?>"></td>
                    </tr>
                </table>
            </div>
            <div class="col-xs-12 col-lg-6">
               <table class="table">
                <tr>
                    <td>Chip</td>
                    <td><input class="form-control" type="text" name="chip" value="<?php echo $row['Chip']?>"></td>
                </tr>
                <tr>
                    <td>Ram</td>
                    <td><input class="form-control" type="text" name="ram" value="<?php echo $row['Ram']?>"></td>
                </tr>
                <tr>
                    <td>Bộ nhớ</td>
                    <td><input class="form-control" type="text" name="bonho" value="<?php echo $row['BoNho']?>"></td>
                </tr>
                <tr>
                    <td>Sim</td>
                    <td><input class="form-control" type="text" name="sim" value="<?php echo $row['Sim']?>"></td>
                </tr>
                <tr>
                    <td>Pin</td>
                    <td><input class="form-control" type="text" name="pin" value="<?php echo $row['Pin']?>"></td>
                </tr>
                <tr>
                    <td>Số lượng</td>
                    <td><input class="form-control" type="text" name="soluong" value="<?php echo $row['SoLuongHang']?>"></td>
                </tr>
                <tr>
                    <td>Giá</td>
                    <td><input class="form-control" type="text" name="gia" value="<?php echo number_format($row['Gia'], 0, ',', '.');?>"></td>
                </tr>
            </table>
        </div>
        <?php
    }
    ?>
</div>
<button type="submit" class="btn btn-primary" name="suasp">Sửa sản phẩm</button>
</form>
