<?php
	$sql_quanly_dd = "SELECT * FROM diadiem,huyen,loaihinhdl WHERE diadiem.idhuyen=huyen.idhuyen AND loaihinhdl.idloaihinh=diadiem.idloaihinh  ORDER BY iddiadiem DESC";
	$query_quanly_dd = mysqli_query($mysqli,$sql_quanly_dd);
?>
<br>
<h2 class="them">Quản lý địa điểm</h2>
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
<table style="width:100%"  border="1"  style="border-collapse: collapse;">
  <tr style="width:100%" bgcolor="#d3b83e" align="center" >
  	<th height="100px">Id</th>
    <th>Tên địa điểm</th>
	 <th>Địa chỉ</th>
    <th>Hình ảnh</th>
    
    
    <th>Tên huyện</th>
	<th>Tên loại hình du lịch </th>
    
  	<th>Quản lý</th>
    <th>Quản lý</th>
  </tr>
  <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_quanly_dd)){
  	$i++;
  ?>

  <tr align="center">
  	<td width="60px" ><?php echo $i ?></td>
    <td><?php echo $row['tendiadiem'] ?></td>
	<td><?php echo $row['diachi'] ?></td>
    <td><img src="module/quanlydiadiem/uploads/<?php echo $row['hinhanh'] ?>" width="150px"></td>
    
    
    <td><?php echo $row['tenhuyen'] ?></td>
	<td><?php echo $row['tenloaihinh'] ?></td>
   
      
   
   	<td width="150px">
   	 <a href="?action=qldiadiem&query=sua&iddd=<?php echo $row['iddiadiem'] ?>">Sửa địa điểm </a> 
   	</td>
   <td width="150px">
     <a href="module/quanlydiadiem/xuly.php?iddd=<?php echo $row['iddiadiem'] ?>">Xoá địa điểm</a>
  </td>
  </tr>
  <?php
  } 
  ?>
 
</table>