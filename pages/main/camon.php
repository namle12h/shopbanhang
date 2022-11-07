<div class="container_fullwidth">
  <div class="container">
    <section class="success">
      <div class="success-top">
        <p>ĐẶT HÀNG THÀNH CÔNG</p>
      </div>
      <div class="success-text">
        <p><span style="font-size: 20px; color: #378000;"> <?php
                $i=0;
  if(isset($_SESSION['dangky'])){
    echo 'Cảm ơn: '.'<span style="color:red">'.$_SESSION['dangky'].'</span>';
   
  } 
  ?></span>, đơn hàng của bạn với mã <span
            style="font-size: 20px; color: #378000;">DDV<?php $ma = $i+1; echo $ma   ?></span> đã được đặt thành công.
          <br>
          Đơn hàng của bạn đã được xác nhận tự động. <br>
          <span style="font-weight: bold;">Hiện tại do đang trong Chương trình Sale lớn, đơn hàng của quý khách sẽ gửi
            chậm hơn so với thời gian dự kiến từ 5-10 ngày.
          </span><br>
          <span style="font-weight: bold;">
            Rất mong quý khách thông cảm vì sự bất tiện này!</span> </br>
          <span style="color: red;">(Lưu ý: chúng tôi sẽ không gọi xác nhận đơn hàng, đơn hàng đươc xử lý tự động và sẽ
            giao cho bạn trong thời sớm nhất)</span><br>

          <?php
             
            ?>

      </div>
      <div class="success-button">
        <a href="index.php?quanly=chitiet"><button>XEM CHI TIẾT ĐƠN HÀNG</button></a>
        <a href="index.php"><button>TIẾP TỤC MUA SẮM </button></a>
      </div>
      <p>Mọi thắc mắc quý khách vui lòng liên hệ hotline <span style="font-size: 20px; color: red;">0977 999 666 </span>
        hoặc chat với kênh hỗ trợ trên website để được hỗ trợ nhanh nhất.</p>
    </section>
  </div>
</div>