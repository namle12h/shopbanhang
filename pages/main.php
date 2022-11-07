<div id="main">

  <div class="maincontent">
    <?php
  if(isset($_GET['quanly'])){
    $tam = $_GET['quanly'];
    
  }else{
    $tam = '';
    
    
    
  }

  
  if($tam=='danhmucsanpham'){
    include("main/danhmuc.php");
  }elseif($tam=='giohang'){
    include("main/cart.php");
  }elseif($tam=='tintuc'){
    include("main/tintuc.php");
  }elseif($tam=='lienhe'){
    include("main/lienhe.php");
  }elseif($tam=='sanpham'){
    
   include("main/sanpham.php");	
  }elseif($tam=='payment'){
    include("main/payment.php");
  }elseif($tam=='dangnhap'){
    include("main/dangnhap.php");
  }elseif($tam=='timkiem'){
    include("main/timkiem.php");
  }
  elseif($tam=='chitiet'){
    include("main/detail.php");
    // include("module/detail.php");
  }
  elseif($tam=='login'){
    include("main/index.php");
  }
  elseif($tam=='camon'){
    include("main/camon.php");
  }elseif($tam=='thaydoimatkhau'){
    include("main/thaydoimatkhau.php");
  }
  elseif($tam=='canhan'){
    include("main/canhan.php");
  }
  // elseif($tam=='canhan'){
  //   include("canhan.php");
  // }
  elseif($tam=='thumuc'){
    include("main/thumuc.php");
  }elseif($tam=='quenmatkhau'){
    include("main/quenmatkhau.php");
  }elseif($tam=='capnhaptaikhoan'){
    include("main/capnhaptaikhoan.php");
  }elseif($tam=='updatecan'){
    include("main/updatecan.php");
  }
  else{
    require_once("pages/slide.php");
    require_once("pages/body.php");
     include("main/index.php");
    
  }
  ?>
  </div>

</div>