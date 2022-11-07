<div class="container_fullwidth">
  <div class="container">

    <section class="detail">
      <div class="container">
        <div class="detail-top">
          <p>CHI TIẾT ĐƠN HÀNG</p>
          <?php
	$sql_lietke_dh = "SELECT * FROM tbl_cart,tbl_dangky WHERE tbl_cart.id_khachhang=tbl_dangky.id_dangky ORDER BY tbl_cart.id_cart DESC";
	$query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);
    $row = mysqli_fetch_array($query_lietke_dh);
?>



        </div>
        <h1>Mã đơn hàng:<span style="font-size: 20px; color: #378000;">
            <td><?php echo $row['code_cart'] ?></td>
          </span></h1>
        <div class="detail-text">
          <div class="detail-text-left-content">
            <p><span style="font-weight: bold; color:red">Thông tin giao hàng</span></p>
            <br>
            <p><span style="font-weight: bold;">Phương thức giao hàng</span>: Giao hàng chuyển phát nhanh</p>
            <p><span style="font-weight: bold;">Phương thức thanh toán</span>: Thu tiền tận nơi</p>
          </div>
          <div class="detail-text-right-content">
            <p><span style="font-weight: bold;color:red">Thông tin đơn hàng hàng</span></p>
            <br>
            <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_dh)){
  	$i++;
  ?>
            <div class="detail-text-right">

              <table>
                <tr>
                  <th>Sản phẩm</th>
                  <th>Tên sản phẩm</th>
                  <th>số lượng</th>

                  <th>Giá</th>
                </tr>

                <tr>
                  <td><img src="admin/uploads/fb63fec93c.jfif" alt=""></td>
                  <td>

                    <p>Điện Thoại IPH0NE</p>
                  </td>
                  <td><img src="admin/uploads/0fdd9af517.png" alt=""></td>

                  <td><span>1</span></td>
                  <td>
                    <p>199,000<sup>đ</sup></p>
                  </td>
                </tr>

              </table>
            </div>
            <div class="detail-content-right-bottom">
              <table>
                <tr>
                  <th colspan="2">
                    <p>TỔNG TIỀN GIỎ HÀNG</p>
                  </th>
                </tr>
                <tr>
                  <td>TỔNG SẢN PHẨM</td>
                  <td>1</td>
                </tr>
                <tr>
                  <td>TỔNG TIỀN HÀNG</td>
                  <td>
                    <p>199,000<sup>đ</sup></p>
                  </td>
                </tr>
                <tr>
                  <td>THÀNH TIỀN</td>
                  <td>
                    <p>199,000<sup>đ</sup></p>
                  </td>
                </tr>
                <tr>
                  <td>TẠM TÍNH</td>
                  <td>
                    <p style="font-weight: bold; color: black;">199,000<sup>đ</sup></p>
                  </td>
                </tr>
              </table>
            </div>

          </div>

        </div>
        <?php
  } 
  ?>
        <div class="success-button">
          <a href="index.php"><button>TIẾP TỤC MUA SẮM 1</button></a>
        </div>
        <br>
        <p style="text-align: center;">Mọi thắc mắc quý khách vui lòng liên hệ hotline <span
            style="font-size: 20px; color: red;">0973 999 949 </span> hoặc chat với kênh hỗ trợ trên website để được hỗ
          trợ
          nhanh nhất.</p>
      </div>
    </section>
  </div>
</div>