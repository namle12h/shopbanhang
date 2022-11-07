<div class="container_fullwidth">
  <div class="container">
    <h3 class="title"></br>THÔNG TIN SẢN PHẨM </h3>
    <?php
	$sql_chitiet = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.id_sanpham='$_GET[id]' LIMIT 1";
	$query_chitiet = mysqli_query($mysqli,$sql_chitiet);
	while($row_chitiet = mysqli_fetch_array($query_chitiet)){
?>
    <!-- <div class="wrapper_chitiet">
	  <div class="hinhanh_sanpham">
		<img width="100%" src="admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh'] ?>">
	  </div>
	  <form method="POST" action="pages/main/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham'] ?>">
		<div class="chitiet_sanpham">
			<h3 style="margin:0">Tên sản phẩm : <?php echo $row_chitiet['tensanpham'] ?></h3>
			<p>Mã sp: <?php echo $row_chitiet['masp'] ?></p>
			<p>Giá sp: <?php echo number_format($row_chitiet['giasp'],0,',','.').'vnđ' ?></p>
			<p>Số lượng sp: <?php echo $row_chitiet['soluong'] ?></p>
			<p>Danh mục sp: <?php echo $row_chitiet['tendanhmuc'] ?></p>
			<p>Danh mục sp: <?php echo $row_chitiet['tomtat'] ?></p>
			<p><input class="themgiohang" name="themgiohang" type="submit" value="Thêm giỏ hàng">   <input class="themgiohang" name="back" type="submit" value="Quay Lại Menu"> </p>
		</div>
	  </form> -->






    <div class="preview_image">

      <!-- /// HINH ẢNH GỐC /// -->
      <div class="preview-small">
        <!-- <img
                      id="zoom_03"
                      src="images/products/medium/products-01.jpg"
                      data-zoom-image="images/products/Large/products-01.jpg"
                      alt=""
                    /> -->
        <img id="zoom_03" width="100%" src="admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh'] ?>">
      </div>

      <!-- HÌNH ẢNH THÊM  -->
      <div class="thum-image">
        <ul id="gallery_01" class="prev-thum">
          <li>
            <a href="#" data-image="images/products/medium/products-01.jpg"
              data-zoom-image="images/products/Large/products-01.jpg">
              <img src="admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh'] ?>" alt="" />
            </a>
          </li>
          <li>
            <a href="#" data-image="images/products/medium/products-02.jpg"
              data-zoom-image="images/products/Large/products-02.jpg">
              <img src="admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh1'] ?>" alt="" />
            </a>
          </li>
          <li>
            <a href="#" data-image="images/products/medium/products-03.jpg"
              data-zoom-image="images/products/Large/products-03.jpg">
              <img src="admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh2'] ?>" alt="" />
            </a>
          </li>
          <li>
            <a href="#" data-image="images/products/medium/products-04.jpg"
              data-zoom-image="images/products/Large/products-04.jpg">
              <img src="admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh3'] ?>" alt="" />
            </a>
          </li>

        </ul>
        <a class="control-left" id="thum-prev" href="javascript:void(0);">
          <i class="fa fa-chevron-left"> </i>
        </a>
        <a class="control-right" id="thum-next" href="javascript:void(0);">
          <i class="fa fa-chevron-right"> </i>
        </a>
      </div>
    </div>



    <div class="products-description">
      <!-- <h5 class="name">Lincoln Corner Unit Products</h5> -->
      <h5 style="margin:0">Tên sản phẩm : <?php echo $row_chitiet['tensanpham'] ?></h5>
      <p>
        <img alt="" src="images/star.png" />
        <a class="review_num" href="#"> 02 Review(s) </a>
      </p>
      <p>
        <!-- Availability: -->
      <p>Mã sp: <?php echo $row_chitiet['masp'] ?></p>
      <!-- <span class="light-red"> In Stock </span> -->
      <p>Số lượng : <?php echo $row_chitiet['soluong'] ?></p>
      <p>Dòng máy: <?php echo $row_chitiet['tendanhmuc'] ?></p>
      <p>Dung lượng:



        <?php echo $row_chitiet['tomtat'] ?></p>
      </p>
      <!-- <p>
                    Proin lectus ipsum, gravida et mattis vulputate, tristique
                    ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis
                    in faucibus orci luctus et ultrie ces posuere cubilia curae.
                    Proin lectus ipsum, gravida etds mattis vulps utate,
                    tristique ut lectus. Sed et lorem nunc...
                  </p> -->
      <hr class="border" />

      <div class="price">
        Price :
        <span class="new_price">
          <?php echo number_format($row_chitiet['giasp'],0,',','.').'vnđ' ?>
          <!-- <sup> <?php echo number_format($row_chitiet['giasp'],0,',','.').'vnđ' ?></sup> -->
        </span>
        <span class="old_price">


          <?php echo number_format($row_chitiet['giagoc'],0,',','.').'vnđ' ?>
          <sup> vnđ </sup>
        </span>
      </div>
      <hr class="border" />
      <div class="wided">
        <div class="qty">
          soluong &nbsp;&nbsp;:
          <select>
            <option><?php echo $row_chitiet['soluong'] ?></option>
          </select>
        </div>

        <div class="wided">
          <br />
          <div class="qty">
            <b>Tình trạng
          </div>: <?php if($row_chitiet['tinhtrang'] == 1)
                        {
                            echo "New";
                        } 
                        else{
                         echo "repaired";
                        }
                     ?></b>

          <!-- <div class="qty">
                      Tình trạng &nbsp;&nbsp;:
                      
                        <option><?php if($row_chitiet['tinhtrang'] == 1)
                        {
                            echo "New";
                        } 
                        // echo $row_chitiet['tinhtrang'] ?></option>
                      
                    </div> -->
          <div class="button_group">
            <!-- <button class="button">Add To Cart</button> -->
            <form method="POST" action="pages/main/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham'] ?>">
              <p>
                <input class="themgiohang" name="themgiohang" type="submit" value="Thêm giỏ hàng">
                <input class="themgiohang" name="back" type="submit" value="Quay Lại Menu">
              </p>
            </form>

            <button class="button compare">
              <i class="fa fa-exchange"> </i>
            </button>
            <button class="button favorite">
              <i class="fa fa-heart-o"> </i>
            </button>
            <button class="button favorite">
              <i class="fa fa-envelope-o"> </i>
            </button>
          </div>
        </div>
        <div class="clearfix"></div>
        <hr class="border" />
        <img src="images/share.png" alt="" class="pull-right" />
      </div>




      <!-- 
FORM RIVEW  -->
    </div>
    <div class="clearfix"></div>
    <div class="tab-box">
      <div id="tabnav">
        <ul>
          <li>
            <a href=""> DESCRIPTION </a>
          </li>
          <li>
            <a href="#Reviews"> REVIEW </a>
          </li>
          <li>
            <a href="#tags"> PRODUCT TAGS </a>
          </li>
        </ul>
      </div>
      <div class="tab-content-wrap">
        <div class="tab-content" id="Descraption">


          <p> <?php echo $row_chitiet['noidung'] ?></p>
          <?php
} 
?>


        </div>


        <div class="tab-content" id="Reviews">
          <form>
            <table>
              <thead>
                <tr>
                  <th>&nbsp;</th>
                  <th>1 star</th>
                  <th>2 stars</th>
                  <th>3 stars</th>
                  <th>4 stars</th>
                  <th>5 stars</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Quality</td>
                  <td>
                    <input type="radio" name="quality" value="Blue" />
                  </td>
                  <td>
                    <input type="radio" name="quality" value="" />
                  </td>
                  <td>
                    <input type="radio" name="quality" value="" />
                  </td>
                  <td>
                    <input type="radio" name="quality" value="" />
                  </td>
                  <td>
                    <input type="radio" name="quality" value="" />
                  </td>
                </tr>
                <tr>
                  <td>Price</td>
                  <td>
                    <input type="radio" name="price" value="" />
                  </td>
                  <td>
                    <input type="radio" name="price" value="" />
                  </td>
                  <td>
                    <input type="radio" name="price" value="" />
                  </td>
                  <td>
                    <input type="radio" name="price" value="" />
                  </td>
                  <td>
                    <input type="radio" name="price" value="" />
                  </td>
                </tr>
                <tr>
                  <td>Value</td>
                  <td>
                    <input type="radio" name="value" value="" />
                  </td>
                  <td>
                    <input type="radio" name="value" value="" />
                  </td>
                  <td>
                    <input type="radio" name="value" value="" />
                  </td>
                  <td>
                    <input type="radio" name="value" value="" />
                  </td>
                  <td>
                    <input type="radio" name="value" value="" />
                  </td>
                </tr>
              </tbody>
            </table>
            <div class="row">
              <div class="col-md-6 col-sm-6">
                <div class="form-row">
                  <label class="lebel-abs">
                    Your Name
                    <strong class="red"> * </strong>
                  </label>
                  <input type="text" name="" class="input namefild" />
                </div>
                <div class="form-row">
                  <label class="lebel-abs">
                    Your Email
                    <strong class="red"> * </strong>
                  </label>
                  <input type="email" name="" class="input emailfild" />
                </div>
                <div class="form-row">
                  <label class="lebel-abs">
                    Summary of You Review
                    <strong class="red"> * </strong>
                  </label>
                  <input type="text" name="" class="input summeryfild" />
                </div>
              </div>
              <div class="col-md-6 col-sm-6">
                <div class="form-row">
                  <label class="lebel-abs">
                    Your Name
                    <strong class="red"> * </strong>
                  </label>
                  <textarea class="input textareafild" name="" rows="7">
                            </textarea>
                </div>
                <div class="form-row">
                  <input type="submit" value="Submit" class="button" />
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="tab-content">
          <div class="review">
            <p class="rating">
              <i class="fa fa-star light-red"> </i>
              <i class="fa fa-star light-red"> </i>
              <i class="fa fa-star light-red"> </i>
              <i class="fa fa-star-half-o gray"> </i>
              <i class="fa fa-star-o gray"> </i>
            </p>
            <h5 class="reviewer">Reviewer name</h5>
            <p class="review-date">Date: 01-01-2014</p>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              Integer a eros neque. In sapien est, malesuada non
              interdum id, cursus vel neque.
            </p>
          </div>
          <div class="review">
            <p class="rating">
              <i class="fa fa-star light-red"> </i>
              <i class="fa fa-star light-red"> </i>
              <i class="fa fa-star light-red"> </i>
              <i class="fa fa-star-half-o gray"> </i>
              <i class="fa fa-star-o gray"> </i>
            </p>
            <h5 class="reviewer">Reviewer name</h5>
            <p class="review-date">Date: 01-01-2014</p>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              Integer a eros neque. In sapien est, malesuada non
              interdum id, cursus vel neque.
            </p>
          </div>
        </div>
        <div class="tab-content" id="tags">
          <div class="tag">
            Add Tags :
            <input type="text" name="" />
            <input type="submit" value="Tag" />
          </div>
        </div>
      </div>
    </div>
  </div>
</div>