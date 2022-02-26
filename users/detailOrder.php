<!DOCTYPE html>
<html>

<head>
    <title>Đơn hàng</title>
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
        <?php include('navbar.php');
            include('config.php');
        ?>
</header>
<div class="container mt-3">
        <h2 class="heading-detal">Chi tiết đơn hàng</h2>
            <div class="container">
<a href="ordercart.php?userkh=<?php echo $_SESSION['khachhang']?>" class="link">Quay về</a>
<table class="table table-hover" style="text-align: center; margin-bottom: 200px;">
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
                            <a href="https://realmemobile.vn/" target="_blank"><i class="fab fa-linkedin-in "></i></a>
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