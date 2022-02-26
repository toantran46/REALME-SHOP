<nav class="navbar navbar-expand-lg rounded navbar-dark bg-dark"
style="padding: 3px 100px 3px 100px; margin: 0 0.5px 0 0.5px;">
<a class="navbar-brand" href="index.php" style="margin-right: 0;">
  <img src="/Project_Smartphone/images/logo-realme.png" class="rounded" style="width: 50%;">
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav" style="margin-right: 300px;">
    <li class="nav-item">
      <a class="nav-link" href="index.php">Trang chủ</a>
    </li>
  </ul>
  <form class="form-inline" action="index.php" style="flex-grow: 1;" method="GET">
    <input class="form-control mr-sm-2" type="text" placeholder="Bạn muốn tìm gì?">
    <button class="btn btn-success" type="submit" name="timkiem">Tìm kiếm</button>
  </form>
  <ul class="navbar-nav">
    <li class="nav-item">
      <div class="cart">
        <a class="nav-link" href="cart.php">Giỏ hàng <i class="fa fa-shopping-cart "aria-hidden="true"></i>
          <span class="cart-notice">
            <?php
            session_start();
            $i = 0;
            if(isset($_SESSION['cart'])){
              foreach ($_SESSION['cart'] as $key) {
                $i++;
              }
              echo $i;
            } else echo $i;
            ?>
          </span>
        </a>
        <!-- No cart: cart-list--no-cart -->
        <div class="<?php if(isset($_SESSION['cart'])){ echo 'cart-list';} else echo 'cart-list--no-cart' ?>">
          <img class="cart-list-img-no-cart" src="https://sethisbakery.com/assets/website/images/empty-cart.png" ></img>
          <div class="cart-list-infor">
            <table class="table">
              <?php
              if(isset($_SESSION['cart'])){
                foreach ($_SESSION['cart'] as $cart_item) {
                  ?>
                  <a href="cart.php">
                    <tr>
                    <td style="width: 20%"><img src="<?php echo $cart_item['hinhanh']; ?>" style="width: 70%"></td>
                    <td style="width: 40%"><?php echo $cart_item['tensp']; ?></td>
                    <td style="width: 40%"><?php echo number_format($cart_item['gia'],0,",","."); ?>đ x <?php echo $cart_item['soluong']; ?></td>
                  </tr>
                  </a>
                  <?php
                }}
                ?>
              </table>
            </div>
          </div>
        </div>
      </li>
      <?php

      if(isset($_SESSION['khachhang'])){
        ?>
        <div class="dropdown">
          <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">
            Hi <?php 
            echo $_SESSION['khachhang'] 
            ?> <i class="fas fa-user"></i>
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="ordercart.php?userkh=<?php echo $_SESSION['khachhang']?>">Đơn hàng</a>
            <a class="dropdown-item" href="index.php?thaotac">Đăng xuất</a>
          </div>
        </div>
        <?php
      }else {
        ?>
        <li class="nav-item"><a class="nav-link" href="sign-in.php">Đăng nhập</a></li>
        <?php
      }
      ?>
    </ul>
  </div>
  <?php
  if(isset($_GET['thaotac'])){
    session_destroy();
    header('Location:index.php');
  }
  ?>
</nav>

