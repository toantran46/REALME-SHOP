<?php
    include('../config.php');

    $masp_ = 'HH'.mt_rand(0,50000); 
    $maloaihang_=$_POST['maloaihang'];
    $tensp_ = $_POST['tensp'];
    $anh_ = $_POST['anh'];
    $mh = $_POST['manhinh'];
    $hdh = $_POST['hedieuhanh'];
    $camsau_ = $_POST['camsau'];
    $camtruoc_ = $_POST['camtruoc'];
    $chip_ = $_POST['chip'];
    $ram_ = $_POST['ram'];
    $bonho_ = $_POST['bonho'];
    $sim_ = $_POST['sim'];
    $pin_ = $_POST['pin'];
    $soluong_=$_POST['soluong'];
    $gia_ = $_POST['gia'];

    if(isset($_POST['themsp'])){
        $sql_themsp = "INSERT INTO hanghoa(MSHH,MaLoaiHang,TenHH,Anh,MangHinh,HeDieuHanh,CamTruoc,CamSau,Chip,Ram,BoNho,Sim,Pin,SoLuongHang,Gia) VALUE ('".$masp_."','".$maloaihang_."','".$tensp_."','".$anh_."','".$mh."','".$hdh."','".$camtruoc_."','".$camsau_."','".$chip_."','".$ram_."','".$bonho_."','".$sim_."','".$pin_."','".$soluong_."','".$gia_."')";
        mysqli_query($mysqli,$sql_themsp);
        header('Location:index.php?quanly=sanpham');
    }elseif(isset($_POST['suasp'])){
        $id = $_GET['idsp'];
        $sql_suasp = "UPDATE hanghoa SET MaLoaiHang='".$maloaihang_."', TenHH='".$tensp_."', Anh='".$anh_."',MangHinh='".$mh."', HeDieuHanh='".$hdh."', CamTruoc='".$camtruoc_."', CamSau='".$camsau_."',Chip='".$chip_."',Ram='".$ram_."',BoNho='".$bonho_."',Sim='".$sim_."',Pin='".$pin_."',SoLuongHang='".$soluong_."',Gia='".$gia_."' WHERE MSHH='".$id."'";
        mysqli_query($mysqli,$sql_suasp);
        header('Location:index.php?quanly=sanpham');
    }else{
        $id = $_GET['idsp'];
        $sql_xoasp = "DELETE FROM hanghoa WHERE MSHH='".$id."'";
        mysqli_query($mysqli,$sql_xoasp);
        header('Location:index.php?quanly=sanpham');
    }
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql_xoadon = "DELETE FROM dathang WHERE MSKH='".$id."'";
        mysqli_query($mysqli,$sql_xoadon);
        $sql_xoakh = "DELETE FROM khachhang WHERE MSKH='".$id."'";
        mysqli_query($mysqli,$sql_xoakh);
        $sql_xoadc = "DELETE FROM diachikh WHERE MSKH='".$id."'";
        mysqli_query($mysqli,$sql_xoadc);
        header('Location:index.php?quanly=thanhvien');
    }
    if(isset($_GET['xatnhan'])){
        $madon = $_GET['madon'];
        $sql_update = "UPDATE dathang SET trangthai ='2' WHERE SoDonDH = '".$madon."'";
        mysqli_query($mysqli,$sql_update);
        header('Location:index.php?quanly=giohang');
    }
    session_start();
    if(isset($_GET['huy'])){
        $madon = $_GET['madon'];
        $sql_update = "UPDATE dathang SET trangthai ='3' WHERE SoDonDH = '".$madon."'";
        mysqli_query($mysqli,$sql_update);
       header('Location:../ordercart.php?userkh='.$_SESSION['khachhang'].'');
    }

    if(isset($_GET['xoa_order'])){
        $madon = $_GET['xoa_order'];
        $sql_xoaorder = "DELETE FROM dathang WHERE SoDonDH='".$madon."'";
        mysqli_query($mysqli,$sql_xoaorder);
        //$sql_xoachitiet = "DELETE FROM chitietdathang WHERE SoDonDH='".$madon."'";
        //mysqli_query($mysqli,$sql_xoachitiet);
        header('Location:index.php?quanly=giohang');
    }
    
?> 