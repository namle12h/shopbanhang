
<link rel="stylesheet" type="text/css" href="admincp/css/styleadmincp.css">

<div class="login-page">
  <div class="form">
    <form class="login-form"  method="POST" >

    <span><?php
require_once("admincp/config/config.php");

	  if(isset($_POST['guiemail'])){
        $email = $_POST['emailn'];
        $sql = "SELECT * FROM tbl_dangky WHERE email='".$email."'";
        $row = mysqli_query($mysqli,$sql);
		    $count = mysqli_num_rows($row);
        if($count>0){
          $row_data = mysqli_fetch_array($row);
          $_SESSION['dangky1'] = $row_data['matkhau'];
          if(isset($_SESSION['dangky1'])){
            echo '<p style="color:blue">Mật khẩu của bạn là : </p>'.'<span >'.$_SESSION['dangky1'].'</span>';
        }
        }else{
          echo '<p style="color:red">Tài khoản không tồn tại</p>';
        }
    }
?></span>


		<P>Lấy lại mật khẩu</p>

      <input type="text" placeholder="Email" name="emailn" />
      <button type="submit" name="guiemail" value="lấy lại mật khẩu">lấy lại mật khẩu</button>
      <a href="login.php"> Đăng Nhập Lại</a>

      <?php
 
  ?>
    </form>
  </div>
</div>