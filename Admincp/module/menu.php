<div class= "slidebar">
<div class="pipe">
      <div class="anchor" id="id_anchor"></div>
      <div class="content" id="id_content">
     
   <ul>
   <li><a href="index.php?action=qlloaihinh&query=them">Quản lý loại hình du lịch</a></li>
            <li><a href="index.php?action=qlhuyen&query=them">Quản lý huyện</a></li>
            <li><a href="index.php?action=qldiadiem&query=them">Quản lý địa điểm</a></li>
           <li><a href="index.php?action=qlbaiviet&query=them">Quản lý tin tức</a></li>

		<?php
	if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
		unset($_SESSION['dangnhap']);
		header('Location:loginadmin.php');
	}
?>
			<li><a href="index.php?dangxuat=1" style="color:#fff" >Đăng xuất : <?php if(isset($_SESSION['dangnhap'])){
		echo $_SESSION['dangnhap'];

	} ?></a></li>

   </ul>
   </div>
    </div>
</div>

     