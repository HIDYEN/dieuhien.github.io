<?php
include('../../config/config.php');

$tenbaiviet = $_POST['tenbaiviet'];

$tomtat = $_POST['tomtat'];


$noidungtt = $_POST['noidungtt'];

$diadiem = $_POST['diadiem'];


require('../../../carbon/autoload.php');
	

	use Carbon\Carbon;
    use Carbon\CarbonInterval;
    
$now = Carbon::now('Asia/Ho_Chi_Minh');


if(isset($_POST['thembaiviet'])){
	//them
	$sql_them = "INSERT INTO tintuc(tenbaiviet,tomtat,noidungtt,ngaydangtt,iddiadiem) VALUE('".$tenbaiviet."','".$tomtat."','".$noidungtt."','".$now."','".$diadiem."')";
	mysqli_query($mysqli,$sql_them);
	header('Location:../../index.php?action=qlbaiviet&query=them');
}
elseif(isset($_POST['suabaiviet'])){
	
	
		$sql_update = "UPDATE tintuc SET tenbaiviet='".$tenbaiviet."',tomtat='".$tomtat."',noidungtt='".$noidungtt."',ngaydangtt='".$now."',iddiadiem='".$diadiem."' WHERE id='$_GET[idbaiviet]'";
	
	mysqli_query($mysqli,$sql_update);
	header('Location:../../index.php?action=qlbaiviet&query=them');

}else{
	$id=$_GET['idbaiviet'];
	$sql_xoa = "DELETE FROM tintuc WHERE id='".$id."'";
	mysqli_query($mysqli,$sql_xoa);
	header('Location:../../index.php?action=qlbaiviet&query=them');
}

?>