<br>
<h2 class="them">Thêm tin tức</h2>
<br>

<table border="1" width="100%" bgcolor="#d3b83e" style="border-collapse: collapse;">
 <form method="POST" action="module/quanlybaiviet/xuly.php" enctype="multipart/form-data">
	  <tr>
	  	<td>Tên bài viết</td>
	  	<td><input type="text" size="150" name="tenbaiviet"></td>
	 </tr>
	 <tr>
	  	<td>Tóm tắt</td>
	  	<td><textarea rows="10"  name="tomtat" style="resize: none"></textarea></td>
	  </tr>
	   <tr>
	  	<td>Nội dung</td>
	  	<td><textarea rows="10"  name="noidungtt" style="resize: none"></textarea></td>
	  </tr>
	 
	  <tr style=" height: 50px">
	    <td>Địa điểm</td>
	    <td>
	    	<select name="diadiem">
	    		<?php
	    		$sql_diadiem = "SELECT * FROM diadiem ORDER BY iddiadiem DESC";
	    		$query_diadiem = mysqli_query($mysqli,$sql_diadiem);
	    		while($row_diadiem = mysqli_fetch_array($query_diadiem)){
	    		?>
	    		<option value="<?php echo $row_diadiem['iddiadiem'] ?>"><?php echo $row_diadiem['tendiadiem'] ?></option>
	    		<?php
	    		} 
	    		?>
	    	</select>
	    </td>
	  </tr>
	   <tr style=" height: 50px">
	    <td colspan="2" class="them"><input type="submit" name="thembaiviet" value="Thêm bài viết"></td>
	  </tr>
 </form>
</table>