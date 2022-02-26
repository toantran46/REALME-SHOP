<?php
$sql_lietkesp = "SELECT * FROM loaihanghoa";
$query_lietkesp = mysqli_query($mysqli,$sql_lietkesp);
?>
<h3>Thêm sản phẩm</h3>
<form method="POST" action="xuly.php">
    <div class="row">
        <div class="col-xs-12 col-lg-6">
            <table class="table">
                <tr>
                    <td>Loại hàng</td>
                    <td>
                        <select class="form-control" name="maloaihang">
                            <?php
                            while ($row = mysqli_fetch_array($query_lietkesp)){
                                ?>
                                <option value="<?php echo $row['MaLoaiHang']?>"><?php echo $row['TenLoaiHang']?></option>
                            <?php }?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Tên</td>
                    <td><input class="form-control" type="text" name="tensp"></td>
                </tr>
                <tr>
                    <td>Ảnh (địa chỉ đường dẫn)</td>
                    <td><input class="form-control" type="text" name="anh"></td>
                </tr>
                <tr>
                    <td>Màn hình</td>
                    <td><input class="form-control" type="text" name="manhinh"></td>
                </tr>
                <tr>
                    <td>Hệ điều hành</td>
                    <td><input class="form-control" type="text" name="hedieuhanh"></td>
                </tr>
                <tr>
                    <td>Camera sau</td>
                    <td><input class="form-control" type="text" name="camsau"></td>
                </tr>
                <tr>
                    <td>Camera trước</td>
                    <td><input class="form-control" type="text" name="camtruoc"></td>
                </tr>
            </table>
        </div>
        <div class="col-xs-12 col-lg-6">
         <table class="table">
            <tr>
                <td>Chip</td>
                <td><input class="form-control" type="text" name="chip"></td>
            </tr>
            <tr>
                <td>Ram</td>
                <td><input class="form-control" type="text" name="ram"></td>
            </tr>
            <tr>
                <td>Bộ nhớ</td>
                <td><input class="form-control" type="text" name="bonho"></td>
            </tr>
            <tr>
                <td>Sim</td>
                <td><input class="form-control" type="text" name="sim"></td>
            </tr>
            <tr>
                <td>Pin</td>
                <td><input class="form-control" type="text" name="pin"></td>
            </tr>
            <tr>
                <td>Số lượng</td>
                <td><input class="form-control" type="text" name="soluong"></td>
            </tr>
            <tr>
                <td>Giá</td>
                <td><input class="form-control" type="text" name="gia"></td>
            </tr>
        </table>
    </div>

</div>
<button type="submit" class="btn btn-primary" name="themsp">Thêm sản phẩm</button>
</form>
