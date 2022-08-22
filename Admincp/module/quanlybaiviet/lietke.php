<?php
	$sql_quanly_tt = "SELECT * FROM tintuc,diadiem WHERE tintuc.iddiadiem=diadiem.iddiadiem ORDER BY tintuc.id DESC";
	$query_quanly_tt = mysqli_query($mysqli,$sql_quanly_tt);
?>
<br>
<h3 class="them">Quản lý tin tức</h3>
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
<table style="width:100%" border="1"   style="border-collapse: collapse;" >
  <tr style=" width:100%" bgcolor="#d3b83e" align="center" >
  	<th>Id</th>
    <th>Tên bài viết</th>
    <th>Tóm tắt</th>
    
  
	<th>Địa điểm</th>
  	<th>Quản lý</th>
    <th>Quản lý</th>
  
  </tr>
  <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_quanly_tt)){
  	$i++;
  ?>
  <tr align="center">
  	<td width="60px"><?php echo $i ?></td>
    <td width="250px"><?php echo $row['tenbaiviet'] ?></td>
    <td ><?php echo $row['tomtat'] ?></td>
   
	<td width="200px"><?php echo $row['tendiadiem'] ?></td>
   
   	<td width="150px">
   	 <a href="?action=qlbaiviet&query=sua&idbaiviet=<?php echo $row['id'] ?>">Sửa</a> 
   	</td>

    <td width="150px">
    <a href="module/quanlybaiviet/xuly.php?idbaiviet=<?php echo $row['id'] ?>">Xoá</a> 

  </td>
   
  </tr>
  <?php
  } 
  ?>
 
</table>