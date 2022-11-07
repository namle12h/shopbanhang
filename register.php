<link rel="stylesheet" type="text/css" href="admincp/css/styleadmincp.css">
<div class="login-page">
  <div class="form">
    <form class="login-form" action="" method="POST">
      <?php
	session_start();
	include('admincp/config/config.php');

	if(isset($_POST['dangky'])) {
		$tenkhachhang = $_POST['hovaten'];
		$email = $_POST['email'];
		$dienthoai = $_POST['dienthoai'];
		$matkhau = $_POST['matkhau'];
		$diachi = $_POST['diachi'];
		$sql_test = "SELECT email FROM tbl_dangky WHERE email = '".$email."'";
		$query_test = mysqli_query($mysqli, $sql_test);
		$count_test = mysqli_num_rows($query_test);
		if($count_test > 0) {
			echo '<p style="color:green">email này đã tồn tại</p>';
		} else {
			$sql_dangky = mysqli_query($mysqli,"INSERT INTO tbl_dangky(tenkhachhang,email,diachi,matkhau,dienthoai) VALUE('".$tenkhachhang."','".$email."','".$diachi."','".$matkhau."','".$dienthoai."')");
			echo '<p style="color:green">Bạn đã đăng ký thành công</p>';
			$_SESSION['dangky'] = $tenkhachhang;
			// $_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);
			// header('Location:index.php?quanly=dangnhap');
		}
	}




?>

      <P>ĐĂNG KÝ THÀNH VIÊN</p>
      <input required type="text" placeholder="Họ và tên" name="hovaten" />
      <input required type="email" placeholder="Email" name="email" />
      <input required type="text" placeholder="Điện thoại" name="dienthoai" />
      <input required type="text" placeholder="Địa chỉ" name="diachi" />
      <input required type="text" placeholder="Mật khẩu" name="matkhau" />
      <button type="submit" name="dangky" value="Đăng ký">ĐĂNG KÝ</button>
      <p class="message"><a href="login.php">Đăng nhập nếu có tài khoản</a></p>
    </form>
  </div>
</div>