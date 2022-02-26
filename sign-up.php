<?php
include('config.php');
if(isset($_POST['dangki'])){
  $username = $_POST['user'];
  $email = $_POST['email'];
  $password = md5($_POST['password']);
  $re_password = md5($_POST['rePassword']);
  $name = $_POST['name'];
  $cty = $_POST['cty'];
  $address = $_POST['address'];
  $ma_address = 'DC'.mt_rand(0,999999);
  $sdt = $_POST['sdt'];
  $sql_diachi = "INSERT INTO diachikh(MaDC,DiaChi,MSKH) VALUE('".$ma_address."','".$address."','".$username."')";
  $query_dc = mysqli_query($mysqli,$sql_diachi);
 
  $sql_dangki = "INSERT INTO khachhang(MSKH,Password,Email,HoTenKH,MaDC,TenCongTy,SoDienThoai) VALUE ('".$username."','".$password."','".$email."','".$name."','".$ma_address."','".$cty."','".$sdt."')";
  $query_dk = mysqli_query($mysqli,$sql_dangki);

  if($query_dk){
    ?>
    <div class="alert alert-success">
     <strong>Đăng kí thành công!</strong>. Ấn <a href="sign-in.php" class="link">vào đây </a> để đăng nhập vào hệ thống.
   </div>  
   <?php
 }else{
  ?>
  <div class="alert alert-danger">
    <strong>Đã có lỗi xảy ra!</strong> Mời bạn đăng kí lại.
  </div>
  <?php
}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Đăng kí</title>	
  <!-- Import Bootstrap and JQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
  </script>
  <link rel="stylesheet" 
  href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
  <script 
  src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js">    
</script>            
<!-- Sign-up -->
<link href="sign-up.css" rel="stylesheet">

</head>
<body>
  <div class="container-fluid bg">
    <div class="row justify-content-center">
      <div class="col-md-3 col-sm-6 col-xs-12 row-container">
        <form method="POST" action="sign-up.php" id="signup-form">
          <h1>Đăng kí</h1>
          <div class="form-group">
            <label for="user" class="label">Tên tài khoản</label>
            <input type="text" class="form-control" id="user" name="user">
            
            <label for="email" class="label">Email</label>
            <input type="text" class="form-control" id="email" name="email">

            <label for="password" class="label">Mật khẩu</label>
            <input type="password" class="form-control" id="password" name="password">  

            <label for="rePassword" class="label">Nhập lại mật khẩu</label>
            <input type="password" class="form-control" id="rePassword" name="rePassword">

            <label for="name" class="label">Họ tên</label>
            <input type="text" class="form-control" id="name" name="name">

            <label for="cty" class="label">Tên công ty</label>
            <input type="text" class="form-control" id="cty" name="cty">

            <label for="addr" class="label">Địa chỉ</label>
            <input type="text" class="form-control" id="address" name="address">

            <label for="sdt" class="label">Số điện thoại</label>
            <input type="text" class="form-control" id="sdt" name="sdt" >
          </div>
          <button type="submit" name="dangki" class="btn btn-success btn-block my-3">Đăng kí</button>
        </form>
        <p>Nếu bạn đã có tài khoản,<a href="sign-in.php" class="link">Đăng nhập</a> ngay.</p>
        <p><a href="index.php" class="link">Quay về trang chủ</a></p>
      </div>
    </div>
  </div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="validate/jquery.validate.min.js"></script>
<script type="text/javascript">
  $("#signup-form").validate({
    rules: {
      user: {
        required: true,
        minlength: 4
      },
      email: {
        required: true,
        email: true
      },
      password: {
        required: true,
        minlength: 4
      },
      rePassword: {
        required: true,
        minlength: 4,
        equalTo: "#password"
      },
      address: "required",
      sdt: {
        required: true,
        number: true,
        minlength: 10
      }
    },
    messages: {
      user: {
        required: "Vui lòng nhập tên tài khoản",
        minlength: "Tên tài khoản phải ít nhất 4 kí tự"
      },
      email: {
        required: "Vui lòng nhập email",
        email: "Vui lòng nhập đúng định dạng email"
      },
      password: {
        required: "Vui lòng nhập mật khẩu",
        minlength: "Mật khẩu phải có ít nhất 4 kí tự"
      },
      rePassword: {
        required: "Vui lòng nhập mật khẩu",
        minlength: "Mật khẩu phải có ít nhất 4 kí tự",
        equalTo: "Mật khẩu không trùng khớp"
      },
      address: "Vui lòng nhập địa chỉ",
      sdt:{
        required: "Vui lòng nhập số điện thoại",
        number: "Bạn chỉ được nhập số",
        minlength: "Số điện thoại phải ít nhất 10 chữ số"
      }
    }
      // submitHandler: function(form) {
      //   // alert("Click đăng kí");
      //   // $(form).submit();
      // }
    });
  </script>
</body>
</html>	
