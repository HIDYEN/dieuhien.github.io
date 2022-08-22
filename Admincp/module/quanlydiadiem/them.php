<br>
<h2 class="them">Thêm điểm du lịch</h2>
<br>
<table border="1" width="100%" bgcolor="#d3b83e" style="border-collapse: collapse;" align="center">
 <form method="POST" action="module/quanlydiadiem/xuly.php" enctype="multipart/form-data">
	  <tr>
	  	<td align="center">Tên địa điểm</td>
	  	<td><input type="text" name="tendiadiem" size="100"></td>
	  </tr>
	   
	  <tr>
	  	<td align="center">Địa chỉ</td>
	  	<td><textarea rows="10"  name="diachi" style="resize: none"></textarea></td>
	  </tr>
	   <tr>
	  	<td align="center">Hình ảnh</td>
	  	<td><input type="file" name="hinhanh"></td>
	 </tr>
	  <tr>
	  	<td align="center">Nội dung</td>
	  	<td><textarea rows="10"  name="noidung" style="resize: none"></textarea></td>
	  </tr>
	 <tr style=" height: 70px">
	    <td align="center">Huyện</td>
	    <td>
	    	<select name="huyen">
	    		<?php
	    		$sql_huyen = "SELECT * FROM huyen ORDER BY idhuyen DESC";
	    		$query_huyen = mysqli_query($mysqli,$sql_huyen);
	    		while($row_huyen = mysqli_fetch_array($query_huyen)){
	    		?>
	    		<option value="<?php echo $row_huyen['idhuyen'] ?>"><?php echo $row_huyen['tenhuyen'] ?></option>
	    		<?php
	    		} 
	    		?>
	    	</select>
	    </td>
	  </tr>
	 
	  <tr style=" height: 70px">
	    <td align="center">loại hình</td>
	    <td>
	    	<select name="loaihinh">
	    		<?php
	    		$sql_loaihinh = "SELECT * FROM loaihinhdl ORDER BY idloaihinh DESC";
	    		$query_loaihinh = mysqli_query($mysqli,$sql_loaihinh);
	    		while($row_loaihinh = mysqli_fetch_array($query_loaihinh)){
	    		?>
	    		<option value="<?php echo $row_loaihinh['idloaihinh'] ?>"><?php echo $row_loaihinh['tenloaihinh'] ?></option>
	    		<?php
	    		} 
	    		?>
	    	</select>
	    </td>
	  </tr>
	  
	   <tr >
	    <td colspan="2" align="center" ><input type="submit" name="themdiadiem" value="Thêm điểm du lịch"></td>
	  </tr>
 </form>
</table>
<br>