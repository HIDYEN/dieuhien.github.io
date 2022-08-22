<?php
	$sql_quanly_huyen = "SELECT * FROM huyen ORDER BY idhuyen DESC";
	$query_quanly_huyen = mysqli_query($mysqli,$sql_quanly_huyen);
?>
<br>
<h2 class="them">Quản lý huyện</h2>
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

<table style="width:100%" border="1"  style="border-collapse: collapse;" >
  <tr style="width:100%" bgcolor="#d3b83e" align="center" >
  	<th>Id</th>
    <th>Tên huyện</th>
  	<th>Quản lý</th>
    <th>Quản lý</th>
  
  </tr>
  <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_quanly_huyen)){
  	$i++;
  ?>
  <tr align="center">
  	<td><?php echo $i ?></td>
    <td><?php echo $row['tenhuyen'] ?></td>
   	<td>
     <a href="?action=qlhuyen&query=sua&idh=<?php echo $row['idhuyen'] ?>">Sửa huyện</a> 
   		
   	</td>
    <td>
    <a href="module/quanlyhuyen/xuly.php?idh=<?php echo $row['idhuyen'] ?>">Xoá huyện</a> 
  </td>
   
  </tr>
  <?php
  } 
  ?>
 
</table>