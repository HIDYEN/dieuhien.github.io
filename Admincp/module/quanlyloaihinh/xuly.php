<?php
include('../../config/config.php');

$tenloaihinh = $_POST['tenloaihinh'];


if(isset($_POST['themloaihinh'])){
	//them
	$sql_them = "INSERT INTO loaihinhdl(tenloaihinh) VALUE('".$tenloaihinh."')";
	mysqli_query($mysqli,$sql_them);
	header('Location:../../index.php?action=qlloaihinh&query=them');

}
elseif(isset($_POST['sualoaihinh'])){
	//sua
	$sql_update = "UPDATE loaihinhdl SET tenloaihinh='".$tenloaihinh."' WHERE idloaihinh='$_GET[idlh]'";
	mysqli_query($mysqli,$sql_update);
	header('Location:../../index.php?action=qlloaihinh&query=them');
}else{

	$id=$_GET['idlh'];
	$sql_xoa = "DELETE FROM loaihinhdl WHERE idloaihinh='".$id."'";
	mysqli_query($mysqli,$sql_xoa);
	header('Location:../../index.php?action=qlloaihinh&query=them');
}

?>