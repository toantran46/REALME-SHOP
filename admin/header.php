<?php
  if(isset($_GET['action']) == 'dangxuat'){
    unset($_SESSION['dangnhap']);
    header('Location:../sign-in.php');
  }
?>
<div class="sidebar">
  <div class="profile-inf">
        <img src="/Project_Smartphone/images/avt.jpg" width="70px" class="rounded-circle">
        <h4>Toàn</h4> 
  </div>
        <a href="index.php?quanly=sanpham">Quản lý sản phẩm</a>
        <a href="index.php?quanly=thanhvien">Quản lý thành viên</a>
        <a href="index.php?quanly=giohang">Quản lý giỏ hàng</a>
        <a href="index.php?action=dangxuat">Đăng xuất</a>
  </div>