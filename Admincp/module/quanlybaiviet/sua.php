<?php
	$sql_sua_tt = "SELECT * FROM tintuc WHERE id='$_GET[idbaiviet]' LIMIT 1";
	$query_sua_tt = mysqli_query($mysqli,$sql_sua_tt);
?>
<br>
<h2 class="them">Sửa bài viết</h2>
<br>

<table border="1" bgcolor="#d3b83e" width="100%" style="border-collapse: collapse;">
<?php
while($row = mysqli_fetch_array($query_sua_tt)) {
?>
 <form method="POST" action="module/quanlybaiviet/xuly.php?idbaiviet=<?php echo $row['id'] ?>" enctype="multipart/form-data">
	  <tr>
	  	<td>Tên bài viết</td>
	  	<td><input type="text" size="50" value="<?php echo $row['tenbaiviet'] ?>" name="tenbaiviet"></td>
	  </tr>
	 
	 <tr>
	  	<td>Tóm tắt</td>
	  	<td><textarea rows="10"  name="tomtat" style="resize: none"><?php echo  $row['tomtat'] ?></textarea></td>
	  </tr>
	 
	   <tr>
	  	<td>Nội dung</td>
	  	<td><textarea rows="10"  name="noidungtt" style="resize: none"><?php echo  $row['noidungtt'] ?></textarea></td>
	  </tr>
	  
	 
	  <tr>
	    <td>Địa điểm</td>
	    <td>
	    	<select name="diadiem">
	    		<?php
	    		$sql_diadiem = "SELECT * FROM diadiem ORDER BY iddiadiem DESC";
	    		$query_diadiem = mysqli_query($mysqli,$sql_diadiem);
	    		while($row_diadiem = mysqli_fetch_array($query_diadiem)){

	    			if($row_diadiem['iddiadiem']==$row['iddiadiem']){
	    		?>
	    		<option selected value="<?php echo $row_diadiem['iddiadiem'] ?>"><?php echo $row_diadiem['tendiadiem'] ?></option>
	    		<?php
	    			}else{
	    		?>
	    		<option value="<?php echo $row_diadiem['iddiadiem'] ?>"><?php echo $row_diadiem['tendiadiem'] ?></option>
	    		<?php
	    			}
	    		} 
	    		?>
	    	</select>
	    </td>
	  </tr>
	 
	   <tr >
	    <td colspan="2" align="center"><input type="submit" name="suabaiviet" value="Sửa bài viết"></td>
	  </tr>
 </form>
 <?php
 } 
 ?>

</table>