<?php 
    require 'core/variables.php';
    require 'core/functions.php';
    $CUR_PAGE = $_GET['page'];
    $CUR_TITLE = $_GET['title'];
    $CUR_LINK_DATA = $_GET['link_data'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru-ru" lang="ru-ru">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>
	<link href="fa4/css/font-awesome.min.css" rel="stylesheet"/>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="css/bootstrap.min.css"></link>   
        <script src="js/bootstrap.min.js"></script>
        <?php
            if (!$CUR_TITLE){
                $CUR_TITLE='Перечень наборов открытых данных';
            }
        ?>
        <title><?php echo $CUR_TITLE;?></title>
        <link rel="stylesheet" type="text/css" href="css/style.css"></link>
    </head>
    <body>
        <div id="topmenu">
        <!-- Top menu -->
        <?php include 'blocks/topmenu.php';?>
        <!-- End Top menu -->
        </div>
        <div class="container-fluid">
            <!-- Хэдер -->
            <?php include 'blocks/header.html';?>
            <!-- Конец хэдера -->
            <!-- Начало блока контента -->
            <div class="content">
                 <?php if (empty($CUR_PAGE)){
                       $CUR_TITLE = 'Перечень наборов открытых данных';
                       include ("content/nabor.php");
                    }else {
                        //echo'Открываемая страница '.$CUR_PAGE;
                        include ($CUR_PAGE);
                    }?>
            </div> <!-- Конец блока контента -->
            <div class="footer">
            <!-- начало футера -->
            <?php include ("blocks/footer.php");?>
            <!-- Конец футера -->
            </div>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins)
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed
        <script src="js/bootstrap.min.js"></script> -->
        
    </body>
</html>
<script>
   
</script>             
 
    
