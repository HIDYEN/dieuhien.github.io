<?php
include('../../config/config.php');

$tendiadiem = $_POST['tendiadiem'];
$diachi = $_POST['diachi'];
//xuly hinh anh
$hinhanh = $_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
$hinhanh = time().'_'.$hinhanh;
$noidung = $_POST['noidung'];
$huyen = $_POST['huyen'];
$loaihinh = $_POST['loaihinh'];

require('../../../carbon/autoload.php');
	

	use Carbon\Carbon;
    use Carbon\CarbonInterval;
    
$now = Carbon::now('Asia/Ho_Chi_Minh');




if(isset($_POST['themdiadiem'])){
	//them
	$sql_them = "INSERT INTO diadiem(tendiadiem,diachi,hinhanh,noidung,ngaydang,idhuyen,idloaihinh) VALUE('".$tendiadiem."','".$diachi."','".$hinhanh."','".$noidung."','".$now."','".$huyen."','".$loaihinh."')";
	mysqli_query($mysqli,$sql_them);
	move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
	header('Location:../../index.php?action=qldiadiem&query=them');
}elseif(isset($_POST['suadiadiem'])){
	//sua
	if(!empty($_FILES['hinhanh']['name'])){
		move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
		
		$sql_update = "UPDATE diadiem SET tendiadiem ='".$tendiadiem."',diachi='".$diachi."',hinhanh='".$hinhanh."',noidung='".$noidung."',idhuyen='".$huyen."',idloaihinh='".$loaihinh."' WHERE iddiadiem='$_GET[iddd]'";
		$sql = "SELECT * FROM diadiem WHERE iddiadiem = '$_GET[iddd]' LIMIT 1";
		$query = mysqli_query($mysqli,$sql);
		while($row = mysqli_fetch_array($query)){
			unlink('uploads/'.$row['hinhanh']);
		}

	}else{
		$sql_update = "UPDATE diadiem SET tendiadiem='".$tendiadiem."',diachi='".$diachi."',noidung='".$noidung."',ngaydang='".$now."',idhuyen='".$huyen."',idloaihinh='".$loaihinh."' WHERE iddiadiem='$_GET[iddd]'";
	}
	mysqli_query($mysqli,$sql_update);
		header('Location:../../index.php?action=qldiadiem&query=them');
}else{
	$id=$_GET['iddd'];
	$sql = "SELECT * FROM diadiem WHERE iddiadiem = '$id' LIMIT 1";
	$query = mysqli_query($mysqli,$sql);
	while($row = mysqli_fetch_array($query)){
		unlink('uploads/'.$row['hinhanh']);
	}
	$sql_xoa = "DELETE FROM diadiem WHERE iddiadiem='".$id."'";
	mysqli_query($mysqli,$sql_xoa);
	header('Location:../../index.php?action=qldiadiem&query=them');
}

?>