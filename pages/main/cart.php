<div class="container_fullwidth">
  <div class="container shopping-cart">
    <div class="row">
      <div class="col-md-12">
        <h3 class="title">
          Giỏ Hàng


        </h3>
        <?php
  if(isset($_SESSION['dangky'])){
     echo '<b>xin chào: '.'<span style="color:red">'.$_SESSION['dangky'].'</b></span>';
   
  } 
  ?>
        <div class="clearfix">
        </div>
        <table class="shop-table">




          <!-- hình ảnh -->
          <thead>
            <tr>
              <th>
                Hình ảnh
              </th>
              <th>
                Thông tin sản phẩm
              </th>
              <th>
                Giá
              </th>
              <th>
                Số lượng
              </th>
              <th>
                Tổng tiền
              </th>
              <th>
                Xoá
              </th>
            </tr>
          </thead>
          <!--  bên trong-->
          <?php
	if(isset($_SESSION['cart'])){
		$i = 0;
  	$tongtien = 0;
  	foreach($_SESSION['cart'] as $cart_item){
  		$thanhtien = $cart_item['soluong']*$cart_item['giasp'];
  		$tongtien+=$thanhtien;
  		$i++;
	
?>
          <tbody>
            <tr>
              <td>
                <img src="admincp/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh']; ?>" width="150px">
              </td>
              <td>
                <div class="shop-details">
                  <div class="productname">
                    <?php echo $cart_item['tensanpham']; ?>
                  </div>
                  <p>
                    <img alt="" src="images/star.png">
                    <a class="review_num" href="#">
                      02 Review(s)
                    </a>
                  </p>

                  <p>
                    Product Code :
                    <strong class="pcode">
                      <?php echo $cart_item['masp']; ?>
                    </strong>
                  </p>
                </div>
              </td>
              <td>
                <h5>
                  <?php echo number_format($cart_item['giasp'],0,',','.').'vnđ'; ?>
                </h5>
              </td>
              <td>
                <a href="pages/main/themgiohang.php?cong=<?php echo $cart_item['id'] ?>"><i class="fa fa-plus fa-style"
                    aria-hidden="true"></i></a>
                <?php echo $cart_item['soluong']; ?>
                <a href="pages/main/themgiohang.php?tru=<?php echo $cart_item['id'] ?>"><i class="fa fa-minus fa-style"
                    aria-hidden="true"></i></a>

              </td>
              <td>
                <h5>
                  <strong class="red">
                    <?php 
                  
                        echo number_format($thanhtien,0,',','.').'vnđ' ;
                    
                    ?>
                  </strong>
                </h5>
              </td>
              <td>
                <a href="pages/main/themgiohang.php?xoa=<?php echo $cart_item['id'] ?>">
                  <img src="images/remove.png" alt="">
                </a>
              </td>
            </tr>

            <?php
    }
  	
  ?>
          </tbody>
          <tfoot>

            <tr>
              <td colspan="6">
                <button class="pull-left">

                  <div class="checkout" onClick="location.href='index.php'">Tiếp tục mua sắm </div>
                </button>
                <div class="pull-right">
                  <div class="shippingbox">
                    <div class="subtotal">

                    </div>
                    <div class="grandtotal">
                      <h5>
                        Tổng Tiền:
                      </h5>
                      <span>
                        <?php echo number_format($tongtien,0,',','.').'vnđ' ?>
                      </span>
                    </div>
                    <button class="pull-right">



                      <?php
                      if(isset($_SESSION['dangky'])){
                        ?>
                      <p><a href="index.php?quanly=payment">Thanh Toán</a></p>


                    </button>
                    <?php

                      }
        
        
                   else{
                   ?>
                    <p><a href="register.php">Đăng ký đặt hàng</a></p>
                    <?php
        }

        
      ?>


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

            </td>


            </tr>
            <?php	
   
  ?>
            </td>
            </tr>
          </tfoot>
        </table>
        <div class="clearfix">
        </div>
        <div class="row">

        </div>
      </div>