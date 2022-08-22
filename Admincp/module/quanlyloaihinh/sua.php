<?php
	$sql_sua_tenloaihinh = "SELECT * FROM loaihinhdl WHERE idloaihinh='$_GET[idlh]' LIMIT 1";
	$query_sua_loaihinh = mysqli_query($mysqli,$sql_sua_tenloaihinh);
?>
<br>
<h3 class="them">Sửa loại hình du lịch</h3>
<br>
<table border="1" width="100%" bgcolor="#d3b83e" style="border-collapse: collapse;">
 <form method="POST" action="module/quanlyloaihinh/xuly.php?idlh=<?php echo $_GET['idlh'] ?>">
 	<?php
 	while($dong = mysqli_fetch_array($query_sua_loaihinh)) {
 	?>
	  <tr style=" height: 100px">
	  	<td>Tên Loại Hình Du Lịch</td>
	  	<td><input type="text" size="100"  value="<?php echo $dong['tenloaihinh'] ?>" name="tenloaihinh"></td>
		<td colspan="2" align="center"><input type="submit" name="sualoaihinh" value="Sửa Loại Hình Du Lịch"></td>
	  </tr>
	 
	   
	  <?php
	  } 
	  ?>

 </form>
</table>