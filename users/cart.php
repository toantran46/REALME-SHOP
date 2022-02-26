<!DOCTYPE html>
<html>

<head>
    <title>Giỏ hàng</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
    integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>


<body>
    <header>
        <?php include('navbar.php');?>
        <?php ob_start(); ?>
    </header>
    <div class="container mt-3">
        <h2 class="heading-detal">Chi tiết giỏ hàng</h1>
            <div class="container">
               <table class="table table-hover mt-3 " style="text-align: center; margin-bottom: 150px;">
                   <tr>
                    <th style="width:5%">STT</th>
                    <th style="width:10%">Ảnh</th>
                    <th style="width:30%">Tên sản phẩm</th> 
                    <th style="width:10%">Giá</th> 
                    <th style="width:15%">Số lượng</th> 
                    <th style="width:20%" class="text-center">Thành tiền</th> 
                    <th style="width:10%" >Thao tác</th> 
                </tr>
                <?php
                if(isset($_SESSION['cart'])){
                    $i = 0;
                    $tongtien = 0;
                    foreach ($_SESSION['cart'] as $cart_item) {
                        $thanhtien = $cart_item['gia'] * $cart_item['soluong'];
                        $tongtien += $thanhtien;
                        $i++;
                        ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><img src="<?php echo $cart_item['hinhanh']; ?>" style="width: 70%"></td>
                            <td><?php echo $cart_item['tensp']; ?></td>
                            <td><?php echo number_format($cart_item['gia'],0,",","."); ?>đ</td>
                            <td>
                                <a href="themcart.php?cong=<?php echo $cart_item['masp'] ?>"><i class="fas fa-plus fa-format"></i></a>
                                <?php echo $cart_item['soluong']; ?>
                                <a href="themcart.php?tru=<?php echo $cart_item['masp'] ?>"><i class="fas fa-minus fa-format"></i></a>
                            </td>
                            <td class="text-center"><?php echo number_format($thanhtien,0,",","."); ?>đ</td>
                            <td class="actions text-center">
                                <a href="themcart.php?xoacart=<?php echo $cart_item['masp'] ?>"><i class="fa fa-trash fa-format"></i></a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                    <tr>
                        <td colspan="5"><p>Tổng tiền: <?php echo number_format($tongtien,0,",",".").'đ'; ?></p></td>
                        <?php
                        if(isset($_SESSION['khachhang'])){
                            ?>
                            <td></td>
                            <td><form method="POST" action="cart.php">
                                <button type="submit" class="btn btn-primary btn-sm" name="dathang" onclick="checkOrder()">Đặt hàng</button>
                            </form> 
                    </td>
                    <?php
                }else{
                    ?>
                    <td colspan="2"><a class="link" href="sign-in.php">Đăng nhập để đặt hàng</a></td>
                        <?php
                    }
                    ?>
                </tr>
                <?php
            } else{    
                ?>
                <tr>
                    <td colspan="7"><p>Hiện tại chưa có sản phẩm nào</p></td>
                </tr>
                <?php
            }
        
            ?>
        </table> 
    </div>
</div>

<!-- Footer -->
<footer class="footer rounded">
    <div class="container">
        <div class="row">
            <div class="footer-col">
                <h4>Thông tin liên hệ</h4>
                <ul>
                    <li><a href="#">46 Nguyễn Trãi, Hưng Lợi, Ninh Kiều, Cần Thơ </a></li>
                    <li><a href="#">0977868790 - 0331809529</a></li>
                    <li><a href="#">realme@contact.com</a></li>
                    <li><a href="#">www.realme.com</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Chính sách bán hàng</h4>
                <ul>
                    <li><a href="https://realmemobile.vn/ " target="_blank">Thông tin bảo hành</a></li>
                    <li><a href="https://realmemobile.vn/ " target="_blank">Phương thức thanh toán</a></li>
                    <li><a href="https://realmemobile.vn/" target="_blank">Hướng dẫn mua hàng</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Liên hệ với chúng tôi</h4>
                <div class="social-links">
                    <a href="https://www.facebook.com/realmeVietnam " target="_blank"><i
                        class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/realmeindia " target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/realmeindia/?hl=vi " target="_blank"><i
                            class="fab fa-instagram"></i></a>
                            <a href="https://realmemobile.vn/"><i class="fab fa-linkedin-in " target="_blank"></i></a>
                        </div>
                    </div>
                    <div class="footer-col">
                        <img src="/Project_Smartphone/images/footer-bo-cong-thuong.svg" width="50%">
                    </div>
                </div>
            </div>
            <h6 class="last-footer">®Copyright by Stephen Toan</h6>
        </footer>

    </body>

    </html>
    <script type="text/javascript">
    function checkOrder(){
        alert('Đặt hàng thành công. Đơn hàng của bạn đang chờ xát nhận !');
    }
</script>
    <?php
    include('config.php');
    if(isset($_POST['dathang'])){
        $tk = $_SESSION['khachhang'];
        $ngaydat = date("Y-m-d");
        $futureDate = mktime(0, 0, 0, date("m"), date("d")+2, date("Y"));
        $ngaygiao = date("Y-m-d", $futureDate);
        $madon = 'DH'.mt_rand(0,999999);
        $insert_cart = "INSERT INTO dathang(SoDonDH,MSKH,MSNV,NgayDH,NgayGH,trangthai,tongtien) VALUE('".$madon."','".$tk."','NV01','".$ngaydat."','".$ngaygiao."',1,'".$tongtien."')";
        // var_dump($insert_cart);
        if(mysqli_query($mysqli,$insert_cart)){
            foreach ($_SESSION['cart'] as $key => $value) {
                $masp = $value['masp'];
                $soluong = $value['soluong'];
                $gia = $value['gia'];
                $insert_cart_ct = "INSERT INTO chitietdathang(SoDonDH,MSHH,SoLuong,GiaDatHang) VALUE('".$madon."','".$masp."','".$soluong."','".$gia."')";
                mysqli_query($mysqli,$insert_cart_ct);
            }
            echo '<script>window.location="index.php"</script>';
        }
        unset($_SESSION['cart']);  
    }
    ?>