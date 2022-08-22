<?php
	$sql_pro = "SELECT * FROM diadiem WHERE diadiem.idloaihinh='$_GET[id]' ORDER BY iddiadiem DESC";
	$query_pro = mysqli_query($mysqli,$sql_pro);
	//get ten danh muc
	$sql_cate = "SELECT * FROM loaihinhdl WHERE loaihinhdl.idloaihinh='$_GET[id]' LIMIT 1";
	$query_cate = mysqli_query($mysqli,$sql_cate);
	$row_title = mysqli_fetch_array($query_cate);
?>
<td bgcolor=" #C67677"></td>
<div class="container-fluid text-center bg-grey">
<h3 class="tieude">Loại hình du lịch: <?php echo $row_title['tenloaihinh'] ?></h3>
	
			<div class="row text-center">
					<?php
					while($row = mysqli_fetch_array($query_pro)){ 
					?>
					<div class="col-sm-4">
   					   <div class="thumbnail">
                    
						<a href="index22.php?quanly=baiviet&id=<?php echo $row['iddiadiem'] ?>">
							<img class="img img-responsive" width="400px" height="230px" src="Admincp/module/quanlydiadiem/uploads/<?php echo $row['hinhanh'] ?>">
							<p > <strong>Điểm Du Lịch  : <?php echo $row['tendiadiem'] ?></strong></p>
							<p > <?php echo $row['diachi'] ?></p>
							<p style="text-align:left;color:#000"><?php echo $row['ngaydang'] ?></p>
							
						</a>
						</div>
  					  </div>
						
					<?php
					} 
					?>
				</div>
				

						
					
					
                    
						
							
							


			





