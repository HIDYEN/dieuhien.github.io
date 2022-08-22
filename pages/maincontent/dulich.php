<?php
		 include("slidebar.php "); 
?>



<div class="maincontent">
<?php

	$sql_pro = "SELECT * FROM  diadiem,huyen,loaihinhdl WHERE diadiem.idhuyen=huyen.idhuyen AND loaihinhdl.idloaihinh=diadiem.idloaihinh  ORDER BY iddiadiem DESC  ";
	$query_pro = mysqli_query($mysqli,$sql_pro);

	$sql_cate = "SELECT * FROM loaihinhdl WHERE loaihinhdl.idloaihinh LIMIT 1";
	$query_cate = mysqli_query($mysqli,$sql_cate);
	$row_title = mysqli_fetch_array($query_cate);

?><div class="container-fluid text-center bg-grey">
<h3 class="tieude">Điểm du lịch</h3>
						<div class="row text-center">
					<?php
					while($row = mysqli_fetch_array($query_pro)){ 
					?>
					<div class="col-sm-4">
   					   <div class="thumbnail">
                    
						<a href="index22.php?quanly=baiviet&id=<?php echo $row['iddiadiem'] ?>">
							<img class="img img-responsive" width="200px" height="330px" src="Admincp/module/quanlydiadiem/uploads/<?php echo $row['hinhanh'] ?>">
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
				
				</div>	
				<div class="clear">
</div>



			


  

    
       
        
     



