<?php
	session_start();
	include('config/config.php');
	if(isset($_POST['dangnhap'])){
		$taikhoan = $_POST['username'];
		$matkhau = md5($_POST['password']);
		$sql = "SELECT * FROM tbl_admin WHERE username='".$taikhoan."' AND password='".$matkhau."' LIMIT 1";
		$row = mysqli_query($mysqli,$sql);
		$count = mysqli_num_rows($row);
		if($count>0){
			$_SESSION['dangnhap'] = $taikhoan;
			header("Location:index.php");
		}else{
			echo '<script>alert("Tài khoản hoặc Mật khẩu không đúng,vui lòng nhập lại.");</script>';
			header("Location:loginadmin.php");
		}
	} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel=" stylesheet" type= "text/CSS" href="CSSAD/login.css">

	<title>Đăng nhập Admincp</title>
	
	
</head>
<body>

<div class="form-tt">
	<form action="" autocomplete="off" method="POST">
	
	<form action="#" method="post" name="dang-ky">
			<h2>Đăng nhập</h2>
			
			
			<input type="text" name="username" placeholder="Nhập tài khoản" />
				
			
			<input type="password" name="password" placeholder="Nhập mật khẩu" />
				
			
			
				<input type="submit" name="dangnhap" value="Đăng nhập">
			
	</form>

</div>
</body>
</html>







