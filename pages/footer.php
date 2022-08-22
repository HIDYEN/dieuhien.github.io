<div class="clear">
</div>

<div class="footer">
        
           

        
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<div id="about" class="container-fluid">
<div id="services" class="container-fluid">
<div id="portfolio" class="container-fluid">
<div id="pricing" class="container-fluid">
<div id="contact" class="container-fluid">
<style>
footer .glyphicon {
  font-size: 20px;
  margin-bottom: 20px;
  color: #f4511e;
}
</style>

<footer class="container-fluid text-center">
  
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
 

  
  
  <?php
  
					$sl1="update thongke set cnt=cnt+1";
					mysqli_query($mysqli,$sl1);
					$sl2="select * from thongke";
					$kq=mysqli_query($mysqli,$sl2);
					$d=mysqli_fetch_array($kq);
					
					$chuoi=str_pad($d['cnt'],5,"0",STR_PAD_LEFT);
					
					$luottruycap="";
					
					for($i=0;$i<strlen($chuoi);$i++){
						$tam=substr($chuoi,$i,1);
						
						$luottruycap.="<img src='hinh/$tam.png'/>";
					}
					
					?>
 

				<div style= " align: center">	 <?php echo $luottruycap;?> </div>
					 
				<div style="text-align:right "> <font color="#000">Design by: Ngô Ngọc Diệu Hiền</font> <div>
       <div style="text-align:right "> <font color="#000">Email: hienngotv0@gmail.com</font> <div>
       
        
     
        
</footer>
 

</div>