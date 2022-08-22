<div class="viet">
<?php
	$sql_dd = "SELECT * FROM diadiem WHERE diadiem.iddiadiem='$_GET[id]' LIMIT 1";
	$query_dd = mysqli_query($mysqli,$sql_dd);
	$query_dd_all = mysqli_query($mysqli,$sql_dd);
	$row_dd_title = mysqli_fetch_array($query_dd);
?>
<h3 class="tieude" >Điểm Du Lịch:<?php echo $row_dd_title['tendiadiem'] ?></span></h3>

				<ul>
					<?php
					while($row_dd = mysqli_fetch_array($query_dd_all)){ 
					?>
					<li>
						<p  style="text-align:justify;margin:10px" class="title_product"><?php echo $row_dd['noidung'] ?></p>
						<p style="text-align:right;color:#000">Ngày đăng: <?php echo $row_dd['ngaydang'] ?></p>
					</li>
					<?php
					} 
					?>
					
				</ul>

				</div>				