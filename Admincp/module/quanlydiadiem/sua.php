<?php
	$sql_sua_dd = "SELECT * FROM diadiem WHERE iddiadiem='$_GET[iddd]' LIMIT 1";
	$query_sua_dd= mysqli_query($mysqli,$sql_sua_dd);
?>
<h2 class="them">Sửa địa điểm</h2>
<table border="1" width="100%"  bgcolor="#d3b83e" style="border-collapse: collapse;">
<?php
while($row = mysqli_fetch_array($query_sua_dd)) {
?>
 <form method="POST" action="module/quanlydiadiem/xuly.php?iddd=<?php echo $row['iddiadiem'] ?>" enctype="multipart/form-data">
	  <tr>
	  	<td align="center">Tên địa điểm</td>
	  	<td><input type="text" size="100" value="<?php echo $row['tendiadiem'] ?>" name="tendiadiem"></td>
	  </tr>
	  <tr>
	  	<td align="center">Địa chỉ</td>
		  
	  	<td><textarea rows="10"  name="diachi" style="resize: none"><?php echo $row['diachi'] ?></textarea></td>
	 </tr>
	   <tr>
	  	<td align="center">Hình ảnh</td>
	  	<td>
	  		<input type="file" name="hinhanh">
	  		<img src="module/quanlydiadiem/uploads/<?php echo $row['hinhanh'] ?>" width="150px">
	  	</td>

	  </tr>
	  <tr>
	  	<td align="center">Nội dung</td>
		  
	  	<td><textarea rows="10"  name="noidung" style="resize: none"><?php echo $row['noidung'] ?></textarea></td>
	 </tr>

	  <tr style=" height: 70px">
	    <td align="center">Huyện: </td>
	    <td>
	    	<select name="huyen">
	    		<?php
	    		$sql_cap = "SELECT * FROM huyen ORDER BY idhuyen DESC";
	    		$query_cap = mysqli_query($mysqli,$sql_cap);
	    		while($row_cap = mysqli_fetch_array($query_cap)){
	    			if($row_cap['idhuyen']==$row['idhuyen']){
	    		?>
	    		<option selected value="<?php echo $row_cap['idhuyen'] ?>"><?php echo $row_cap['tenhuyen'] ?></option>
	    		<?php
	    			}else{
	    		?>
	    		<option value="<?php echo $row_cap['idhuyen'] ?>"><?php echo $row_cap['tenhuyen'] ?></option>
	    		<?php
	    			}
	    		} 
	    		?>
	    	</select>
	    </td>
	  </tr>
	 <tr style=" height: 70px">
	    <td align="center">Loại hình du lịch</td>
	    <td>
	    	<select name="loaihinh">
	    		<?php
	    		$sql_lh= "SELECT * FROM loaihinhdl ORDER BY idloaihinh DESC";
	    		$query_lh = mysqli_query($mysqli,$sql_lh);
	    		while($row_lh= mysqli_fetch_array($query_lh)){
	    			if($row_lh ['idloaihinh']==$row['idloaihinh']){
	    		?>
	    		<option selected value="<?php echo $row_lh ['idloaihinh'] ?>"><?php echo $row_lh ['tenloaihinh'] ?></option>
	    		<?php
	    			}else{
	    		?>
	    		<option value="<?php echo $row_lh ['idloaihinh'] ?>"><?php echo $row_lh ['tenloaihinh'] ?></option>
	    		<?php
	    			}
	    		} 
	    		?>
	    	</select>
	    </td>
	  </tr>
	 
	 
	
	 
	 
	 
	  
	   <tr style=" height: 70px">
	    <td colspan="2" align="center" ><input type="submit" name="suadiadiem" value="Sửa điểm du lịch"></td>
	  </tr>
 </form>
 <?php
 } 
 ?>

</table>