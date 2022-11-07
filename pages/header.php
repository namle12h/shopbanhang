<!-- <link rel="shortcut icon" href="images/favicon.png"> -->
<?php
               if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
                  unset($_SESSION['dangky']);
               } 
            ?>
<!-- <div class="wrapper"> -->
<div class="header">
  <div class="container">
    <div class="row">
      <div class="col-md-2 col-sm-2">
        <div class="logo"><a href="index.php"><img src="images/logos2.png" alt="FlatShop"></a></div>
      </div>
      <div class="col-md-10 col-sm-10">
        <div class="header_top">
          <div class="row">
            <div class="col-md-3">
              <ul class="option_nav">
                <li class="dorpdown">

                </li>
              </ul>
            </div>
            <div class="col-md-6">
              <ul class="topmenu">
                <li><a href="#">Về Chúng Tôi</a></li>
                <li><a href="#">Tin Tức</a></li>
                <li><a href="#">Dịch Vụ</a></li>
                <li><a href="#">Hổ Trợ</a></li>
              </ul>
            </div>


            <div class="col-md-3">
              <ul class="usermenu">
                <li>
                  <?php
                  
    if(isset($_SESSION['dangky'])){ 

                           ?>

                <li><a href="index.php?dangxuat=1" class="log">Đăng xuất</a></li>

                <li><a href="index.php?quanly=canhan" class="log">Tài khoản</a></li>

                <!-- <li><a href="index.php?quanly=thaydoimatkhau">Thay đổi mật khẩu</a></li> -->
                <?php
                           }else{ 
                           ?>
                <li>
                  <a href="login.php" class="log">Đăng Nhập</a>
                </li>
                <li><a href="register.php" class="reg">Đăng ký</a></li>
                <?php
                           } 
                           ?>
                </li>



              </ul>
            </div>
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="header_bottom">
          <ul class="option">
            <li id="search" class="search">



              <form class="fromtkiem" action="index.php?quanly=timkiem" method="POST">
                <input type="text" placeholder="Tìm kiếm sản phẩm..." name="tukhoa">
                <input type="submit" name="timkiem" value="Tìm kiếm">
              </form>

            </li>
            <li class="option-cart">
              <a href="index.php?quanly=giohang" class="cart-icon">cart <span class="cart_no"></span></a>
              <ul class="option-cart-item">


                <li>
                  <?php
                          if(isset($_SESSION['cart'])){
                            $i = 0;
                            $tongtien = 0;
                            foreach($_SESSION['cart'] as $cart_item){
                              $thanhtien = $cart_item['soluong']*$cart_item['giasp'];
                              $tongtien+=$thanhtien;
                              $i++;
                            
                        ?>

                  <div class="cart-item">
                    <div class="image"><img src="admincp/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh']; ?>"
                        width="150px"></div>
                    <div class="item-description">
                      <p class="name"> <?php echo $cart_item['tensanpham']; ?></p>
                      <p>Size: <span class="light-red">One size</span><br>Quantity: <span class="light-red">01</span>
                      </p>
                    </div>
                    <div class="right">
                      <p class="price"><?php echo number_format($cart_item['giasp'],0,',','.').'vnđ'; ?> <a
                          href="pages/main/themgiohang.php?xoa=<?php echo $cart_item['id'] ?>"><img
                            src="images/remove.png" alt="remove"></a></p>

                    </div>
                  </div>
                  <?php }?>
                </li>

                <li><span class="total">Total
                    <strong><?php echo number_format($tongtien,0,',','.').'vnđ' ?></strong></span>



                  <?php
                        if(isset($_SESSION['dangky'])){
                          ?>
                  <button class="checkout" onClick="location.href='pages/main/thanhtoan.php'">CheckOut</button>

                  <?php
                        }
                        
                        
                        else{
                      ?>
                  <button class="checkout" onClick="location.href='register.php'">Đăng Ký đặt Hàng</button>


                  <?php
                        }

                        
                    ?>

                </li> -->
                <?php	
  }else{ 
  ?>
                <tr>
                  <td colspan="8">
                    <p>Hiện tại giỏ hàng trống</p>
                  </td>

                </tr>
                <?php
  } 
  ?>
              </ul>
            </li>
          </ul>
          <div class="navbar-header"><button type="button" class="navbar-toggle" data-toggle="collapse"
              data-target=".navbar-collapse"><span class="sr-only">Toggle navigation</span><span
                class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button></div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active dropdown">
                <a href="index.php"> Trang Chủ </a>
              </li>


              <li>


                <?php
                                    
                                    $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
                                    $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
                                    while($row = mysqli_fetch_array($query_danhmuc)){
                                             
                                 ?>
              <li><a
                  href="index.php?quanly=danhmucsanpham&id=<?php echo $row['id_danhmuc'] ?>"><?php echo $row['tendanhmuc'] ?></a>
              </li>
              <?php

                                 } 
                                 ?>

              </li>

              <li><a href="index.php?quanly=lienhe">LIÊN HỆ</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="clearfix"></div>