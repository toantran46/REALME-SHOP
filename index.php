<!DOCTYPE html>
<html>

<head>
  <title>Realme - Niềm tin của bạn</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
    integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>


<body>
  <header>
    <?php include('navbar.php');?>
    <div class="container mt-3" style="position: relative; z-index: 0;">
      <div class="row">
      <div class="col-sm-12 col-lg-8">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-bottom: 5px">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="https://i.ytimg.com/vi/NIP8R-6r6t4/maxresdefault.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="https://onsitego.com/blog/wp-content/uploads/2021/04/Realme_8_5G_India_launch_banner-1024x576.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="https://s3.cloud.cmctelecom.vn/realmemobile.vn/landing-pages/realme-7i/sale-banner.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <div class="col-sm-12 col-lg-4">
        <a href=""><img src="https://s3.cloud.cmctelecom.vn/realmemobile.vn/landing-pages/realme-5/r5-banner.jpg" style="width: 100%; margin-bottom: 5px;"></a>
        <a href="#"><img src="https://imgs.viettelstore.vn/Images/Product/ProductArchive/27/0-Nam%202019/Thang%204/01%2004/5/dat-truoc-Realme-3-1.jpg" style="width: 100%;margin-bottom: 5px;"></a>
        <a href=""><img src="https://1.bp.blogspot.com/-RCF33LR2PR0/Xw0jnzcz4kI/AAAAAAAAQa4/VJE079-QmOo_ZJE7jDT-unN2pyxbTrO6wCLcBGAsYHQ/w1200-h630-p-k-no-nu/realme-mindyear-lazada-sale-photo-1.png" style="width: 100%;height: 95px; margin-bottom: 8px;"></a>
      </div>
    </div>
    </div>
    
    </div>
    
<!--     <section class="banner d-none d-lg-block" style="padding: 0px 100px 10px 100px;">
      <a href="#"><img class="banner-img rounded" src="/Project_Smartphone/images/banner-ads.png" alt="banner"></a>
    </section> -->
  </header>
  <div class="main">
    <!-- Container product  -->
    <div class="container mb-5 mt-5">
      <h3 class="product-title">Điện thoại</h3>
      <div class="row">
       <?php
       include('config.php');
       $sql_sp = "SELECT * FROM hanghoa WHERE MaLoaiHang ='DT' ORDER BY MSHH DESC";
       $query_sp = mysqli_query($mysqli,$sql_sp);
       $i =0;
       while ($row = mysqli_fetch_array($query_sp)){
        $i++;

       ?>
       <!-- Card -->
        <div class="col-md-4">
          <div class="card mt-3">
            <div class="product-1 align-items-center p-2 text-center">
              <div class="height-laber">
                <label class="installment">Trả góp <b>0%</b></label>
              </div>
              <a href="detailProduct.php?idsp=<?php echo $row['MSHH']?>" style="text-decoration: none; cursor: pointer;">
                <img src="<?php echo $row['Anh']?>" alt="" class="rounded" width="150px"
                  style="margin-bottom: 20px; margin-top: 5px;">
                <h5 class="heading"><?php echo $row['TenHH']?></h5>

                <!-- Card infor -->
                <div class="star mt-3 align-items-center">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
                <div class="cost mt-3 text-dark">
                  <strong><?php echo number_format($row['Gia'], 0, ',', '.');?>₫</strong>
                  <span><?php
                    $row['Gia'] = $row['Gia'] + 500000;
                   echo number_format($row['Gia'], 0, ',', '.');?>₫</span>
                </div>
              </a>
            </div>
          </div>
        </div>
        <!-- card end -->
        <?php
          }
        ?>
      </div>

      <h3 class="product-title">Phụ kiện</h3>
      <div class="row">
        <!-- Card 10 -->
        <?php
       include('config.php');
       $sql_sp = "SELECT * FROM hanghoa WHERE MaLoaiHang ='PK' ORDER BY MSHH DESC";
       $query_sp = mysqli_query($mysqli,$sql_sp);
       $i =0;
       while ($row = mysqli_fetch_array($query_sp)){
        $i++;

       ?>
        <div class="col-md-4">
          <div class="card mt-3">
            <div class="product-1 align-items-center p-2 text-center">
              <div class="height-laber">
                <label class="installment">Trả góp <b>0%</b></label>
              </div>
              <a href="detailProduct.php?idsp=<?php echo $row['MSHH']?>" style="text-decoration: none; cursor: pointer;">
                <img src="<?php echo $row['Anh']?>" alt="" class="rounded" width="150px"
                  style="margin-bottom: 20px; margin-top: 5px;">
                <h5 class="heading"><?php echo $row['TenHH']?></h5>

                <!-- Card infor -->
                <div class="star mt-3 align-items-center">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
                <div class="cost mt-3 text-dark">
                  <strong><?php echo number_format($row['Gia'], 0, ',', '.');?>₫</strong>
                  <span><?php
                    $row['Gia'] = $row['Gia'] + 500000;
                   echo number_format($row['Gia'], 0, ',', '.');?>₫</span>
                </div>
              </a>
            </div>
          </div>
        </div>
        <!-- card end -->
        <?php
          }
        ?>
        </div>
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
              <li><a href="https://realmemobile.vn/ "target="_blank">Thông tin bảo hành</a></li>
              <li><a href="https://realmemobile.vn/ "target="_blank">Phương thức thanh toán</a></li>
              <li><a href="https://realmemobile.vn/"target="_blank">Hướng dẫn mua hàng</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>Liên hệ với chúng tôi</h4>
            <div class="social-links">
              <a href="https://www.facebook.com/realmeVietnam "target="_blank"><i class="fab fa-facebook-f"></i></a>
              <a href="https://twitter.com/realmeindia "target="_blank"><i class="fab fa-twitter"></i></a>
              <a href="https://www.instagram.com/realmeindia/?hl=vi "target="_blank"><i class="fab fa-instagram"></i></a>
              <a href="https://realmemobile.vn/"><i class="fab fa-linkedin-in "target="_blank"></i></a>
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