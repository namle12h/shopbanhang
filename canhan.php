<div class="canhan">
<h3 class="title"></br>THÔNG TIN KHÁCH HÀNG </h3>
<?php
  if(isset($_SESSION['dangky'])){
    echo 'xin chào: '.'<span style="color:red">'.$_SESSION['dangky'].'</span>';
   
  } 
  if(isset($_SESSION['dangky3'])){
    echo 'xin chào: '.'<span style="color:red">'.$_SESSION['dangky'].'</span>';
   
  } 
  ?>

                          <p>
                          <img src="admincp/modules/quanlysp/uploads/avata.png"alt="Product Name">

                                </p>
                              
                                <li>
                                    <a href="index.php?quanly=capnhaptaikhoan">Cập nhật tài khoản</a>

                                </li>

                                <li>
                                    <a href="index.php?quanly=thaydoimatkhau">Thay đổi mật khẩu</a>
                                </li>

                                <li>

                                    <a href="index.php?dangxuat=1">Đăng xuất</a>
                                </li>
                            </div>

                           

                      