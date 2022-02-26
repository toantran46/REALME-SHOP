<!DOCTYPE html>
<html>

<head>
    <title>Chi tiết sản phẩm</title>
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
        <?php
        include('config.php');

        $sql_chitietsp = "SELECT * FROM hanghoa WHERE MSHH='$_GET[idsp]' LIMIT 1";
        $query_chitietsp = mysqli_query($mysqli,$sql_chitietsp);
        while ($row = mysqli_fetch_array($query_chitietsp)){
            ?>
            <h2><?php echo $row['TenHH']?></h1> 
                <div class="row mt-3">
                    <div class="col-xs-12 col-lg-6 mt-3">
                        <div>
                            <img src="<?php echo $row['Anh']?>" width="200px" height="200px" style="padding: auto;">
                        </div>
                        <div class="note-product">
                            <ul>
                                <li>Đổi trả trong 45 ngày (miễn phí nếu sản phẩm lỗi)</li>
                                <li>Đặt mua giao hàng từ 1-2 ngày</li>
                                <li>Bảo hành chính hãng 12 tháng</li>
                                <li>Bộ sản phẩm gồm: Hộp, Sách hướng dẫn, Cáp</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-6 mt-3">
                        <div>
                            <h3>Thông số kĩ thuật</h3>
                            <form method="POST" action="themcart.php?idsp=<?php echo $row['MSHH']?>">
                                <table class="table">
                                    <tr>
                                        <td>Màn hình:</td>
                                        <td><?php echo $row['MangHinh']?></td>
                                    </tr>
                                    <tr>
                                        <td>Hệ điều hành:</td>
                                        <td><?php echo $row['HeDieuHanh']?></td>
                                    </tr>
                                    <tr>
                                        <td>Camera sau:</td>
                                        <td><?php echo $row['CamSau']?></td>
                                    </tr>
                                    <tr>
                                        <td>Camera trước:</td>
                                        <td><?php echo $row['CamTruoc']?></td>
                                    </tr>
                                    <tr>
                                        <td>Chip:</td>
                                        <td><?php echo $row['Chip']?></td>
                                    </tr>
                                    <tr>
                                        <td>Ram:</td>
                                        <td><?php echo $row['Ram']?></td>
                                    </tr>
                                    <tr>
                                        <td>Bộ nhớ trong:</td>
                                        <td><?php echo $row['BoNho']?></td>
                                    </tr>
                                    <tr>
                                        <td>Sim:</td>
                                        <td><?php echo $row['Sim']?></td>
                                    </tr>
                                    <tr>
                                        <td>Pin, Sạc:</td>
                                        <td><?php echo $row['Pin']?></td>
                                    </tr>
                                    <tr>
                                        <td>Giá: </td>
                                        <td>
                                            <div class="cost">
                                                <strong style="font-size: 20px"><?php echo number_format($row['Gia'], 0, ',', '.');?>₫</strong>

                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                <button type="sumit" name="themgiohang" class="btn btn-primary btn-block my-3">
                                    <b>Mua ngay</b> <br>
                                    <span>Giao hàng tận nơi</span>
                                </button>
                            </form>      
                        </div>
                    </div>
                </div>

                <?php
            }
            ?>
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
