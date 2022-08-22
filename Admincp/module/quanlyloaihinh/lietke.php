<?php
	$sql_quanly_loaihinh = "SELECT * FROM loaihinhdl ORDER BY idloaihinh DESC";
	$query_quanly_loaihinh = mysqli_query($mysqli,$sql_quanly_loaihinh);
?>
<br>
<h2 class="them"> Quản lý loại hình</h2>
<br>
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
 
  padding: auto;
}

tr:nth-child(even) {
  background-color: #D6EEEE;
}
</style>
<table style="width:100%" border="1"  style="border-collapse: collapse; ">
  <tr style="width:100%" bgcolor="#d3b83e" align="center">
  	<th>Id</th>
    <th>Tên loại hình</th>
  	<th>Quản lý</th>
    <th>Quản lý</th>
  </tr>
  <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_quanly_loaihinh)){
  	$i++;
  ?>
  <tr align="center">
  	<td><?php echo $i ?></td>
    <td><?php echo $row['tenloaihinh'] ?></td>
   	<td>
   		<a href="module/quanlyloaihinh/xuly.php?idlh=<?php echo $row['idloaihinh'] ?>">Xoá loại hình</a> 
      
   	</td>
   <td>
   <a href="?action=qlloaihinh&query=sua&idlh=<?php echo $row['idloaihinh'] ?>">Sửa loại hình</a> 
  </td>
  </tr>
  <?php
  } 
  ?>
 
</table>