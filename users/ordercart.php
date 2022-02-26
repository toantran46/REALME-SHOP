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
        <?php include('navbar.php');?>
</header>
<div class="container mt-3">
        <h2 class="heading-detal">Đơn hàng</h2>
            <div class="container">
<table class="table table-hover" style="text-align: center; margin-bottom: 250px;">
    <tr>
        <th width="5%">STT</th>
        <th>Mã đơn hàng</th>
        <th>Tên nhân viên</th>
        <th>Ngày đặt hàng</th>
        <th>Ngày giao hàng</th>
        <th>Tổng tiền</th>
        <th width="15%" style="text-align: center;">Trạng thái</th>
        <th width="9%" style="text-align: center;">Thao tác</th>
    </tr>
    <?php
    include('config.php');
    $user = $_GET['userkh'];
    $sql = "SELECT * FROM dathang, nhanvien WHERE nhanvien.MSNV = dathang.MSNV AND dathang.MSKH = '".$user."' ORDER BY NgayDH DESC";
    $query = mysqli_query($mysqli, $sql);
    $i = 0;
    while ($row = mysqli_fetch_array($query)){
        $i++;

        ?>
        <tr>
            <td><?php echo $i?></td>
            <td><?php echo $row['SoDonDH']?></td>
            <td><?php echo $row['HoTenNV']?></td>
            <td><?php echo $row['NgayDH']?></td>
            <td><?php echo $row['NgayGH']?></td>
            <td><?php echo number_format($row['tongtien'], 0, ',', '.');?>đ</td>
            <td style="text-align: center; width: 20%">
                <?php
                if($row['trangthai'] == 1){
                    ?>
                    <span class="status-no_check">Chờ xát nhận</span>
                    <div class="thaotac_huy">
                        <a href="admin/xuly.php?huy=1&madon=<?php echo $row['SoDonDH']?>"><span class="status-no_check_cancel">Hủy đơn</span></a>
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
                    <div class="thaotac-xem"><a href="detailOrder.php?machitiet=<?php echo $row['SoDonDH']?>"><i class="fas fa-eye"></i></a></div>
                </td>
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