<?php
	if(isset($_POST['dangky'])) {
		$tenkhachhang = $_POST['hovaten'];
		$email = $_POST['email'];
		$dienthoai = $_POST['dienthoai'];
		$matkhau = $_POST['matkhau'];
		$diachi = $_POST['diachi'];
		$sql_dangky = mysqli_query($mysqli,"INSERT INTO tbl_dangky(tenkhachhang,email,diachi,matkhau,dienthoai) VALUE('".$tenkhachhang."','".$email."','".$diachi."','".$matkhau."','".$dienthoai."')");
		if($sql_dangky){
			echo '<p style="color:green">Bạn đã đăng ký thành công</p>';
			$_SESSION['dangky'] = $tenkhachhang;
			$_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);
			header('Location:index.php?quanly=canhan');
		}
	}
?>
<div class="login-page">
  <div class="form">
    <form class="login-form" action="" method="POST">
      <P>ĐĂNG KÝ THÀNH VIÊN</p>
      <input required type="text" placeholder="Họ và tên" name="hovaten" />
      <input required type="email" placeholder="Email" name="email" />
      <input required type="text" placeholder="Điện thoại" name="dienthoai" />
      <input required type="text" placeholder="Địa chỉ" name="diachi" />
      <input required type="text" placeholder="Mật khẩu" name="matkhau" />
      <button type="submit" name="dangky" value="Đăng ký">ĐĂNG KÝ</button>
      <p class="message"><a href="index.php?quanly=dangnhap">Đăng nhập nếu có tài khoản</a></p>
    </form>
  </div>
</div>