
<?php

 $sql_pro = "SELECT * FROM  tintuc,diadiem WHERE tintuc.iddiadiem=diadiem.iddiadiem  ORDER BY id DESC";
	$query_pro = mysqli_query($mysqli,$sql_pro);
	$sql_cate = "SELECT * FROM tintuc WHERE tintuc.id LIMIT 1";
	$query_cate = mysqli_query($mysqli,$sql_cate);
	$row_title = mysqli_fetch_array($query_cate);
?><div class="tieude">
<h3>Tin Tức các điểm du lịch Trà Vinh</h3>
</div>
		<div class="panel panel-success">
		<?php
					while($row = mysqli_fetch_array($query_pro)){ 
					?>
      <div class="panel-heading">
	  <a href="index22.php?quanly=baiviettintuc&id=<?php echo $row['id'] ?>">
							<h3 > Tên Tin Tức : <?php echo $row['tenbaiviet'] ?><h3>
							<p > <?php echo $row['tomtat'] ?> </p>
							<p style="text-aligh: center"> Bấm xem tin tức</p>
						</a>
	  </div>
      <div class="panel-body">


	  <a href="index22.php?quanly=baiviet&id=<?php echo $row['iddiadiem'] ?>">
							<p class="chu"> Thuộc điểm du lịch : <?php echo $row['tendiadiem'] ?></p>						
							
						</a>
	  </div>
	  			<?php
					} 
					?>
    </div>
				