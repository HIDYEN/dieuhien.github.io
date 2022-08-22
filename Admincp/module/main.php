<div class = "main">
<div class="clear"></div>
<div class="main">
<?php
				if(isset($_GET['action']) && $_GET['query']){
					$tam=$_GET['action'];
					$query = $_GET['query'];
				}else {
					$tam='';
					$query = '';
				} 
				if($tam=='qlhuyen' && $query=='them'){
					include("module/quanlyhuyen/them.php");
					include("module/quanlyhuyen/lietke.php");	
				}elseif ($tam=='qlhuyen' && $query=='sua') {
					include("module/quanlyhuyen/sua.php");
				
             
                    
				}elseif($tam=='qlloaihinh'&& $query=='them'){
					include("module/quanlyloaihinh/them.php");
					include("module/quanlyloaihinh/lietke.php");	
				}elseif ($tam=='qlloaihinh' && $query=='sua') {
					include("module/quanlyloaihinh/sua.php");
			
                    
                    
				}elseif($tam=='qldiadiem'&& $query=='them'){
					include("module/quanlydiadiem/them.php");
					include("module/quanlydiadiem/lietke.php");
				}elseif($tam=='qldiadiem' && $query=='sua'){
					include("module/quanlydiadiem/sua.php");



				}elseif($tam=='qlbaiviet' && $query=='them'){
					include("module/quanlybaiviet/them.php");
					include("module/quanlybaiviet/lietke.php");

				}elseif($tam=='qlbaiviet' && $query=='sua'){
					include("module/quanlybaiviet/sua.php");
					
					
					
				
				}else{
					include("module/welcome.php");
				}
			
		?>
</div>
</div>