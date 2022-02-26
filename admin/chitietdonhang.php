<h3>Chi tiết đơn hàng</h3>
<a href="index.php?quanly=giohang" class="link">Quay về</a>
<table class="table table-hover" style="text-align: center;">
	<tr>
		<th width="5%">STT</th>
		<th>Mã đơn hàng</th>
		<th>Ảnh</th>
		<th>Tên hàng hóa</th>
		<th>Giá</th>
		<th>Số lượng</th>
		<th>Thành tiền</th>
	</tr>
	<?php
	if(isset($_GET['machitiet'])){
		$madon = $_GET['machitiet'];
		$sql = "SELECT * FROM chitietdathang, hanghoa WHERE hanghoa.MSHH = chitietdathang.MSHH AND chitietdathang.SoDonDH = '".$madon."'";
	$query = mysqli_query($mysqli, $sql);
	$i = 0;
	$thanhtien = 0;
	while ($row = mysqli_fetch_array($query)){
		$i++;
		$thanhtien = $row['GiaDatHang'] * $row['SoLuong'];
		?>
		<tr>
			<td><?php echo $i?></td>
			<td><?php echo $row['SoDonDH']?></td>
			<td><img src="<?php echo $row['Anh']?>" style = "width: 50px"></td>
			<td><?php echo $row['TenHH']?></td>
			<td><?php echo number_format($row['GiaDatHang'], 0, ',', '.')?></td>
			<td><?php echo $row['SoLuong']?></td>
			<td><?php echo number_format($thanhtien, 0, ',', '.');?>đ</td>
			</tr>
			<?php
			}
	}
	?>
</table>