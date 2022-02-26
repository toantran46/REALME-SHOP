
<h3>Danh sách đơn đặt hàng</h3>
<table class="table table-hover" style="text-align: center;">
	<tr>
		<th width="5%">STT</th>
		<th>Mã đơn đặt hàng</th>
		<th>Mã số khách hàng</th>
		<th>Tên nhân viên</th>
		<th>Ngày đặt hàng</th>
		<th>Ngày giao hàng</th>
		<th>Tổng tiền</th>
		<th width="15%" style="text-align: center;">Trạng thái</th>
		<th width="7%" style="text-align: center;">Thao tác</th>
	</tr>
	<?php
	$sql = "SELECT * FROM dathang, nhanvien WHERE nhanvien.MSNV = dathang.MSNV ORDER BY NgayDH DESC";
	$query = mysqli_query($mysqli, $sql);
	$i = 0;
	while ($row = mysqli_fetch_array($query)){
		$i++;

		?>
		<tr>
			<td><?php echo $i?></td>
			<td><?php echo $row['SoDonDH']?></td>
			<td><?php echo $row['MSKH']?></td>
			<td><?php echo $row['HoTenNV']?></td>
			<td><?php echo $row['NgayDH']?></td>
			<td><?php echo $row['NgayGH']?></td>
			<td><?php echo number_format($row['tongtien'], 0, ',', '.');?>đ</td>
			<td style="text-align: center;">
				<?php
				if($row['trangthai'] == 1){
					?>
					<div class="thaotac">
						<a href="xuly.php?xatnhan=1&madon=<?php echo $row['SoDonDH']?>"><span class="status-no_check">Xát nhận</span></a>
					</div>

					<?php
				}elseif($row['trangthai'] == 2){

					?>
					<span class="status-checked">Đã xát nhận</span>
					<?php
				}else {?>
					<span class="status-cancel">Đã hủy</span>
					<?php } ?>
				</td>
				<td>
					<div class="thaotac-xem"><a href="index.php?quanly=xemdon&machitiet=<?php echo $row['SoDonDH']?>"><i class="fas fa-eye"></i></a></div>
					<div class="thaotac-xoa"><a href="xuly.php?xoa_order=<?php echo $row['SoDonDH']?>"><i class="fas fa-trash-alt"></i></a></div>
				</td>
			</tr>
			<?php
			}
		?>

	</table>