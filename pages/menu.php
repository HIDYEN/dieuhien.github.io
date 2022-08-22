<div class =" dropdowm_menu">
	<nav class = "container">
    <a href ="" id = "logo">
        <img src=" images/logo.png"  >
    </a>
    <ul id="dropmenu">
        <li><a href="index.php?quanly=trangchu">Trang Chủ</a></li>
		<li><a href="index22.php?quanly=dulich">Du Lịch</a></li>
        <li><a href="">Loại hình du lịch</a>
			<ul class="menucon"> 
			<?php
	
					$sql_loaihinh = "SELECT * FROM loaihinhdl ORDER BY idloaihinh ASC";
					$query_loaihinh = mysqli_query($mysqli,$sql_loaihinh);
				while($row = mysqli_fetch_array($query_loaihinh)){
				
			?>
			
			<li style="text-transform: uppercase;"><a href="index22.php?quanly=loaihinh&id=<?php echo $row['idloaihinh'] ?>"><?php echo $row['tenloaihinh'] ?></a></li>
			<?php

} 
?>
			</ul>
	
		</li>
        <li><a href="">Huyện</a>

			<ul class="menucon"> 
		<?php
	
				$sql_huyen = "SELECT * FROM huyen ORDER BY idhuyen ASC";
				$query_huyen = mysqli_query($mysqli,$sql_huyen);
				while($row = mysqli_fetch_array($query_huyen)){

	?>
			<li style="text-transform: uppercase;"><a href="index22.php?quanly=huyen&id=<?php echo $row['idhuyen'] ?>"><?php echo $row['tenhuyen'] ?></a></li>
		<?php

		} 
	?>
			</ul>

		</li>
        <li><a href="index22.php?quanly=tintuc">Tin tức</a></li>
		
    
	<div class="timkiem">
			
				<form class="form-inline my-4 my-lg-0" action="index22.php?quanly=timkiem" method="POST">
					<input type="text" class="form-control mr-sm-2" placeholder="Tìm kiếm địa điểm du lịch.." name="tukhoa">
					<button type="submit" name="timkiem" class="btn btn-default" value="Tìm kiếm">
					<span class="glyphicon glyphicon-search"></span></button>
				</form>
				
				
	</div>
	</ul>
	<nav>
</div>



			
	

