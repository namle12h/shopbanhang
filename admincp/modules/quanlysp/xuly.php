<?php
include('../../config/config.php');

$tensanpham = $_POST['tensanpham'];
$masp = $_POST['masp'];
$giasp = $_POST['giasp'];
$giagoc= $_POST['giagoc'];
$soluong = $_POST['soluong'];
//xuly hinh anh
$hinhanh = $_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
$hinhanh = time().'_'.$hinhanh;

$hinhanh1 = $_FILES['hinhanh1']['name'];
$hinhanh1_tmp = $_FILES['hinhanh1']['tmp_name'];
$hinhanh1 = time().'_'.$hinhanh1;

$hinhanh2= $_FILES['hinhanh2']['name'];
$hinhanh2_tmp = $_FILES['hinhanh2']['tmp_name'];
$hinhanh2 = time().'_'.$hinhanh2;

$hinhanh3 = $_FILES['hinhanh3']['name'];
$hinhanh3_tmp = $_FILES['hinhanh3']['tmp_name'];
$hinhanh3 = time().'_'.$hinhanh3;


$tomtat = $_POST['tomtat'];
$noidung = $_POST['noidung'];
$tinhtrang = $_POST['tinhtrang'];
$danhmuc = $_POST['danhmuc'];


if(isset($_POST['themsanpham'])){
	//them
	$sql_them = "INSERT INTO tbl_sanpham(tensanpham,masp,giasp,soluong,hinhanh,hinhanh1,hinhanh2,hinhanh3,tomtat,noidung,tinhtrang,id_danhmuc,giagoc) VALUE('".$tensanpham."','".$masp."','".$giasp."','".$soluong."','".$hinhanh."','".$hinhanh1."','".$hinhanh2."','".$hinhanh3."','".$tomtat."','".$noidung."','".$tinhtrang."','".$danhmuc."','".$giagoc."')";
	mysqli_query($mysqli,$sql_them);
	move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
	move_uploaded_file($hinhanh1_tmp,'uploads/'.$hinhanh1);
	move_uploaded_file($hinhanh2_tmp,'uploads/'.$hinhanh2);
	move_uploaded_file($hinhanh3_tmp,'uploads/'.$hinhanh3);
	header('Location:../../index.php?action=quanlysp&query=them');
}elseif(isset($_POST['suasanpham'])){
	//sua
	if($hinhanh!=''){
		move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
		move_uploaded_file($hinhanh1_tmp,'uploads/'.$hinhanh1);
		move_uploaded_file($hinhanh2_tmp,'uploads/'.$hinhanh2);
		move_uploaded_file($hinhanh3_tmp,'uploads/'.$hinhanh3);
		
		$sql_update = "UPDATE tbl_sanpham SET tensanpham='".$tensanpham."',masp='".$masp."',giasp='".$giasp."',soluong='".$soluong."',hinhanh='".$hinhanh."',hinhanh1='".$hinhanh1."',hinhanh2='".$hinhanh2."',hinhanh3='".$hinhanh3."',tomtat='".$tomtat."',noidung='".$noidung."',tinhtrang='".$tinhtrang."',id_danhmuc='".$danhmuc."',giagoc='".$giagoc."'  WHERE id_sanpham='$_GET[idsanpham]'";
		//xoa hinh anh cu
		$sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham = '$_GET[idsanpham]' LIMIT 1";
		$query = mysqli_query($mysqli,$sql);
		while($row = mysqli_fetch_array($query)){
			unlink('uploads/'.$row['hinhanh']);
			unlink('uploads/'.$row['hinhanh1']);
			unlink('uploads/'.$row['hinhanh2']);
			unlink('uploads/'.$row['hinhanh3']);
		}

	}else{
		$sql_update = "UPDATE tbl_sanpham SET tensanpham='".$tensanpham."',masp='".$masp."',giasp='".$giasp."',soluong='".$soluong."',tomtat='".$tomtat."',noidung='".$noidung."',tinhtrang='".$tinhtrang."',id_danhmuc='".$danhmuc."',giagoc='".$giagoc."'  WHERE id_sanpham='$_GET[idsanpham]'";
	}
	mysqli_query($mysqli,$sql_update);
		header('Location:../../index.php?action=quanlysp&query=them');
}else{
	$id=$_GET['idsanpham'];
	$sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham = '$id' LIMIT 1";
	$query = mysqli_query($mysqli,$sql);
	while($row = mysqli_fetch_array($query)){
		unlink('uploads/'.$row['hinhanh']);
		unlink('uploads/'.$row['hinhanh1']);
		unlink('uploads/'.$row['hinhanh2']);
		unlink('uploads/'.$row['hinhanh3']);
	}
	$sql_xoa = "DELETE FROM tbl_sanpham WHERE id_sanpham='".$id."'";
	mysqli_query($mysqli,$sql_xoa);
	header('Location:../../index.php?action=quanlysp&query=lietke');
}

?>