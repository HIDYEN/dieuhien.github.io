<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    
    
    <link rel=" stylesheet" type= "text/CSS" href="CSSAD/CSS.css">
    <link rel=" stylesheet" type= "text/CSS" href="CSSAD/menu.css">






    <style>
      .pipe {
       
        
        padding: 5px;
        float: left;
        
      }

      .pipe .anchor {
       
        height: 10px;
        float: left;
      
      }

      .pipe .content {
       
        height: 100px;
        float: left;
        top: 0;
        padding-left: 20px;
      }
    </style>

    <script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>

    <script>
      $(document).ready(function () {
        $(window).scroll(function () {
          if ($(window).scrollTop() - $("#id_anchor").position().top < 0) {
            $("#id_content").css({ position: "relative" });
          } else {
            $("#id_content").css({ position: "fixed" });
          }
        });
      });
    </script>





</head>


<?php
 session_start();
 if(!isset($_SESSION['dangnhap'])){
 	header('Location:loginadmin.php');
 } 
?>


<body>
    <?php
    include("module/menu.php");

    ?>
    <div class="maincontent">
        <?php 
            include("config/config.php");
           
            include("module/header.php");
            
            include("module/main.php");
            include("module/footer.php");

        ?>
    </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
	<script>
		CKEDITOR.replace('tomtat');
        CKEDITOR.replace('diachi');
        CKEDITOR.replace('noidung');
        CKEDITOR.replace('noidungtt');
    </script>
</body>
 </html>   
