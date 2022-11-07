<?php 
require_once("admincp/config/config.php");
?>

<link rel="stylesheet" type="text/css" href="admincp/css/styleadmincp.css">
<div class="login-page">
  <div class="form">
    <form class="login-form" action="" autocomplete="off" method="POST" >
<?php
	session_start();
	include('admincp/config/config.php');
	if(isset($_POST['dangnhap'])){
		$email = $_POST['email'];
		$matkhau = $_POST['matkhau'];
		$sql = "SELECT * FROM tbl_dangky WHERE email='".$email."' AND matkhau='".$matkhau."' LIMIT 1";
		$row = mysqli_query($mysqli,$sql);
		$count = mysqli_num_rows($row);
		
		if($count>0){
			$row_data = mysqli_fetch_array($row);
			$_SESSION['dangky'] = $row_data['tenkhachhang'];
			$_SESSION['id_khachhang'] = $row_data['id_dangky'];
			header('Location:index.php?quanly=canhan');
			?>

     <?php 
		}else{
			echo '<p style="color:red">Mật khẩu hoặc Email sai ,vui lòng nhập lại.</p>';
			
		}
	
	} 
?>



	
	<P>VUI LÒNG ĐĂNG NHẬP</p>
      <input type="text" placeholder="Tài khoản" name="email" />
      <input type="password" placeholder="Mật khẩu" name="matkhau"/>
      <button type="submit" name="dangnhap" value="Đăng nhập">LOGIN</button>
			<p class="message"><a href="register.php">Đăng ký tài khoản</a>|| <a href="quenmatkhau.php">quên mật khẩu</a></p>
			

    </form>
  </div>
</div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

