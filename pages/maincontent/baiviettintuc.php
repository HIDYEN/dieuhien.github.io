

<?php
	$sql_tt = "SELECT * FROM tintuc WHERE tintuc.id='$_GET[id]' LIMIT 1";
	$query_tt = mysqli_query($mysqli,$sql_tt);
	$query_tt_all = mysqli_query($mysqli,$sql_tt);
	$row_tt_title = mysqli_fetch_array($query_tt);
?>
<div class="viet">
<h3 class= "tieude">Tin Tức:<?php echo $row_tt_title['tenbaiviet'] ?></h3>

				<ul class="baiviettintuc">
					<?php
					while($row_tt = mysqli_fetch_array($query_tt_all)){ 
					?>
					<li>
						<p  style="text-align:justify;margin:10px" class="title_product"><?php echo $row_tt['noidungtt'] ?></p>

							<p style="text-align:right;color:#000"><?php echo $row_tt['ngaydangtt'] ?></p>

					</li>
					<?php
					} 
					?>
					
				</ul>
				</div >