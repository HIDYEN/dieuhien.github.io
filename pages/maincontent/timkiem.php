<?php
	if(isset($_POST['timkiem'])){
		$tukhoa = $_POST['tukhoa'];
	}
	$sql_pro = "SELECT * FROM diadiem,huyen,loaihinhdl WHERE diadiem.idhuyen=huyen.idhuyen AND loaihinhdl.idloaihinh=diadiem.idloaihinh AND diadiem.tendiadiem   LIKE '%".$tukhoa."%'";
	$query_pro = mysqli_query($mysqli,$sql_pro);
	
?>

<h3 class="tieude">Kết quả tìm kiếm : <?php echo $_POST['tukhoa']; ?></h3>
				<div class="row text-center">
					<?php
					while($row=mysqli_fetch_array($query_pro)){ 
					?>
					<div class="col-sm-4">
   					   <div class="thumbnail">
						  <a href="index22.php?quanly=baiviet&id=<?php echo $row['iddiadiem'] ?>">
						  <img class="img img-responsive" width="400px" height="250px" src="Admincp/module/quanlydiadiem/uploads/<?php echo $row['hinhanh'] ?>">
							<p > <strong>Điểm Du Lịch  : <?php echo $row['tendiadiem'] ?></strong></p>
							<p > <?php echo $row['diachi'] ?></p>
							<p style="text-align:center;color:#000"><?php echo $row['ngaydang'] ?></p>
							
						</a>		
										
						</div>
  					  </div>
						
					<?php
					} 
					?>
				</div>
				
					
							
					
					
					
                    
						
						

