<?php
	$sql_sua_huyen = "SELECT * FROM huyen WHERE idhuyen='$_GET[idh]' LIMIT 1";
	$query_sua_huyen = mysqli_query($mysqli,$sql_sua_huyen);
?>
<p>Sửa huyện</p>
<table border="1" width="100%" bgcolor="#d3b83e"  style="border-collapse: collapse;">
 <form method="POST" action="module/quanlyhuyen/xuly.php?idh=<?php echo $_GET['idh'] ?>">
 	<?php
 	while($dong = mysqli_fetch_array($query_sua_huyen)) {
 	?>
	  <tr style=" height: 100px">
	  	<td>Tên Huyện</td>
	  	<td><input type="text" size="100" value="<?php echo $dong['tenhuyen'] ?>" name="tenhuyen"></td>
		<td colspan="2" align="center"><input type="submit" name="suahuyen" value="Sửa tên Huyện"></td>
	  </tr>
	 
	   
	  <?php
	  } 
	  ?>

 </form>
</table>