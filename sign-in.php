<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Đăng nhập</title>	
  <!-- Import Bootstrap and JQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
  </script>
  <link rel="stylesheet" 
    href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
  <script 
    src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js">    
  </script>            
  <!-- Sign-in -->
  <link href="sign-in.css" rel="stylesheet">
</head>
<body>
  <?php
      session_start();
      include('config.php');
      if(isset($_POST['dangnhap'])){
        $taikhoan = $_POST['userdn'];
        $matkhau = md5($_POST['passworddn']);
        $sql = "SELECT * FROM admin WHERE user_ad = '".$taikhoan."' AND pass_ad='".$matkhau."' LIMIT 1";
        $sql_kh = "SELECT * FROM khachhang WHERE  MSKH ='".$taikhoan."' AND Password = '".$matkhau."' LIMIT 1";
        
        $query = mysqli_query($mysqli, $sql_kh);
        $check = mysqli_num_rows($query);

        $dong = mysqli_fetch_array($query);

        $row = mysqli_query($mysqli,$sql);
        $count  = mysqli_num_rows($row);
        
        if($count > 0){
          header('Location:admin/index.php');
        }elseif($check > 0){
          header('Location:index.php');
          $_SESSION['khachhang'] =  $taikhoan;
        }else {
          ?>
          <div class="alert alert-danger" style="text-align: center;">
            <strong>Tên tài khoản hoặc mật khẩu không đúng!</strong> Mời bạn đăng nhập lại.
          </div>
          <?php
        }     
      }
  ?>
  <div class="container-fluid bg">
    <div class="row justify-content-center">
      <div class="col-md-3 col-sm-6 col-xs-12 row-container">
        <form method="POST" action="sign-in.php" id="signin-form">
          <h1>Đăng nhập</h1>
          <div class="form-group">
            <label for="user" class="label">Tên tài khoản</label>
            <input type="user" class="form-control" id="userdn" name="userdn" placeholder="Username">
            <p class="userError"></p>
          </div>
          <div class="form-group">
            <label for="password" class="label">Mật khẩu</label>
            <input type="password" class="form-control" id="passworddn" name="passworddn" placeholder="Password">      
            <p class="passwordError"></p>      
          </div>   
          <button type="submit" name="dangnhap" class="btn btn-success btn-block my-3">Đăng nhập</button>
        </form>
        <p>Nếu bạn chưa có tài khoản, <a href="sign-up.php" class="link">Đăng kí</a> ngay.</p>
        <p><a href="index.php" class="link">Quay về trang chủ</a></p>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="validate/jquery.validate.min.js"></script>
<script type="text/javascript">
  $("#signin-form").validate({
    rules: {
      userdn: {
        required: true,
        minlength: 4
      },
      passworddn: {
        required: true,
        minlength: 4
      }
    },
    messages: {
      userdn: {
        required: "Vui lòng nhập tên tài khoản",
        minlength: "Tên tài khoản phải ít nhất 4 kí tự"
      },
      passworddn: {
        required: "Vui lòng nhập mật khẩu",
        minlength: "Mật khẩu phải có ít nhất 4 kí tự"
      }
    }
      // submitHandler: function(form) {
      //   alert("Click đăng kí");
      //   $(form).submit();
      // }
    });
  </script>
</body>
</html>	
