<div class="clear">
</div>


<?php
$sql_pro = "SELECT * FROM  tintuc,diadiem WHERE tintuc.iddiadiem=diadiem.iddiadiem  ORDER BY id DESC";
   $query_pro = mysqli_query($mysqli,$sql_pro);
   $sql_cate = "SELECT * FROM tintuc WHERE tintuc.id LIMIT 1";
   $query_cate = mysqli_query($mysqli,$sql_cate);
   $row_title = mysqli_fetch_array($query_cate);
?>
            <div class="slidebar"> 	
			
				
					
					
						<h3 class="tieude">Tin Tức Mới</h3>
					
				
						<div class="well">
						
							<?php
								while($row = mysqli_fetch_array($query_pro)){ 
							?>
						

					<a href="index22.php?quanly=baiviettintuc&id=<?php echo $row['id'] ?>">
						<p style="text-align:left;color:#000"> Tên Tin Tức : <?php echo $row['tenbaiviet'] ?>  
							<p style="text-align:left;color:#000"><?php echo $row['ngaydangtt'] ?></p>					
						</p>
							
					</a>		
					<?php
					} 
					?>
				

					
				</div>

			
            
			

</div>