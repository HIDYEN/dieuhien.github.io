<div class="main">

         <?php
				if(isset($_GET['quanly'])){
					$tam=$_GET['quanly'];
				}else {
					$tam='';
				} 
				if($tam=='dulich'){
					include("pages/maincontent/dulich.php");
				}elseif($tam=='loaihinh'){
					include("pages/maincontent/loaihinh.php");
				}elseif($tam=='huyen'){
					include("pages/maincontent/huyen.php");				
				}elseif($tam=='baiviet'){
					include("pages/maincontent/baiviet.php");
				
				}
					elseif($tam=='tintuc'){
					include("pages/maincontent/tintuc.php");

				}	elseif($tam=='tintuc'){
					include("pages/maincontent/slidebar.php");
				}
					elseif($tam=='baiviettintuc'){
					include("pages/maincontent/baiviettintuc.php");
				
				}elseif($tam=='timkiem'){
					include("pages/maincontent/timkiem.php");
				
				
			
				}
				else{
					include("pages/main/maincontent/index.php");
				}
			
		?>
        </div>   