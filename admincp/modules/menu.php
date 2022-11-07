<!-- <ul class="admincp_list">
	<li><a href="index.php?action=quanlydanhmucsanpham&query=them">Quản lý danh mục sản phẩm</a></li>
	<li><a href="index.php?action=quanlysp&query=them">Quản lý sản phẩm</a></li>
	<li><a href="index.php?action=quanlydonhang&query=lietke">Quản lý đơn hàng</a></li>

</ul> -->


<?php
    if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
        unset($_SESSION['dangnhap']);
        header('Location:login.php');
    }
?>
<div class="admin-content">
        <div class="admin-content-left">
            <ul>
                <li>
                    <a  href="#"> <img style="width:20px" src="icon/hi.png" alt="">Chào: <?php if(isset($_SESSION['dangnhap'])){
        echo $_SESSION['dangnhap'];
                     } ?></a>
                </li>


                <li>
                    <a href="index.php?action=quanlydonhang&query=lietke"><img style="width:30px" src="icon/note.svg" alt="">Đơn hàng</a>
                </li>

                <li>
                    <a href="index.php?action=quanlydanhmucsanpham&query=them"><img style="width:20px" src="icon/options.png" alt="">Danh Mục</a>
                </li>

                <li>
                    <a href="index.php?action=quanlysp&query=lietke"><img style="width:20px" src="icon/article.png" alt="">Sản phẩm</a>
                </li>

                <li>

                <li>
                    <a href="index.php?action=quanlysp&query=them"><img style="width:20px" src="icon/menu.png" alt="">Thêm Sản Phẩm</a>
                </li>

               <li>
                    <a href="index.php?dangxuat=1"> <img style="width:20px" src="icon/logout.png" alt="">Đăng Xuất</a>
                </li>

            </ul>
        </div>
</div> 
<!-- <div class="admin-content-right">
           <div class="admin-content-right-bg">
            
           </div>
</div> -->