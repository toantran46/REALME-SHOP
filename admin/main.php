<div class="content">
      <?php
        if(isset($_GET['quanly'])){
            $temp = $_GET['quanly'];
        }else {
            $temp = '';
        }
        if($temp == 'sanpham'){
            include("sanpham.php");
        }elseif($temp == 'thanhvien'){
            include("thanhvien.php");
        }
        elseif($temp == 'giohang'){
            include("giohang.php");
        }elseif($temp == 'themsp'){
            include("themsp.php");
        }elseif($temp == 'suasp'){
            include("suasp.php");
        }
        elseif($temp == 'xemdon'){
            include ('chitietdonhang.php');
        }
        else{
            include("sanpham.php");
        }
      ?>

    </div>