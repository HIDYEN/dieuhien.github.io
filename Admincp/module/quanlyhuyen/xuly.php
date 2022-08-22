<?php
include('../../config/config.php');

$tenhuyen = $_POST['tenhuyen'];


if(isset($_POST['themhuyen'])){
	//them
	$sql_them = "INSERT INTO huyen(tenhuyen) VALUE('".$tenhuyen."')";
	mysqli_query($mysqli,$sql_them);
	header('Location:../../index.php?action=qlhuyen&query=them');

}
elseif(isset($_POST['suahuyen'])){
	//sua
	$sql_update = "UPDATE huyen SET tenhuyen='".$tenhuyen."' WHERE idhuyen='$_GET[idh]'";
	mysqli_query($mysqli,$sql_update);
	header('Location:../../index.php?action=qlhuyen&query=them');
}else{

	$id=$_GET['idh'];
	$sql_xoa = "DELETE FROM huyen WHERE idhuyen='".$id."'";
	mysqli_query($mysqli,$sql_xoa);
	header('Location:../../index.php?action=qlhuyen&query=them');
}

?>