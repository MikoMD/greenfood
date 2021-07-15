<!DOCTYPE html> 
<html>
    <?php
    if(empty($_COOKIE['email'])) {
?> 
<head>
    <script src="js/js.js" defer></script>
	<script src="https://vk.com/js/api/openapi.js?154" type="text/javascript"></script>
	<meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/> 
	<meta http-equiv="X-UA-Compatible" content="ie=edge"/> 
	<link href="css/style.css" rel="stylesheet" type="text/css"/>
	<link href="css/main.css" rel="stylesheet" type="text/css"/>
	<link href="css/buy_page.css" rel="stylesheet" type="text/css"/>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"/>
	<link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
	<link rel="stylesheet" href="../css/fonts.css"/>
	<title>GreenFood</title>
    
    <?php 
	    require_once "functions/functions.php";
	    $multiv = getProd (1, $_GET["id"]);
	?>
	
	<?php 
	    require_once "functions/functions.php";
	    $proiz = getChr (1, $_GET["id"]);
	?>
	
	<?php 
	    require_once "functions/functions.php";
	    $pokr_chashi = getChr1 (1, $_GET["id"]);
	?>
	
	<?php 
	    require_once "functions/functions.php";
	    $mater_multiv = getChr2 (1, $_GET["id"]);
	?>
	
	<?php 
	    require_once "functions/functions.php";
	    $prigot = getChr3 (1, $_GET["id"]);
	?>
	
	<?php 
	    require_once "functions/functions.php";
	    $cvet = getChr4 (1, $_GET["id"]);
	?>
	
	<?php 
	    require_once "functions/functions.php";
	    $ob_chashi = getChr5 (1, $_GET["id"]);
	?>
	
	<?php 
	    require_once "functions/functions.php";
	    $moshn = getChr6 (1, $_GET["id"]);
	?>
	
	<?php 
	    require_once "functions/functions.php";
	    $teh_prigot = getChr7 (1, $_GET["id"]);
	?>
	
	<?php 
	    require_once "functions/functions.php";
	    $tel_upr = getChr8 (1, $_GET["id"]);
	?>
	
 	<?php 
 	    require_once "functions/functions.php";
 	    $tip_upr = getChr9 (1, $_GET["id"]);
 	?>
	
 	<?php 
 	    require_once "functions/functions.php";
 	    $disp = getChr10 (1, $_GET["id"]);
 	?>
	
	<?php 
	    require_once "functions/functions.php";
	    $cena = getChr11 (1, $_GET["id"]);
	?>
	
	<?php 
	    require_once "functions/functions.php";
	    $sklad = getChr12 (1, $_GET["id"]);
	?>
	
	<?php 
	    require_once "functions/functions.php";
	    $krishka = getChr13 (1, $_GET["id"]);
	?>
	
	<?php 
	    require_once "functions/functions.php";
	    $garant = getChr14 (1, $_GET["id"]);
	?>
	
    
</head> 
<body>
	<div id="wrapper">
		<div id="content">
			<?php require_once "blocks/header.php" ?>
		</div>
		
		<div id="main_block">
			
			<?php require_once "blocks/left_menu_p.php" ?>
			
			 <?php
                    }
                    else {
                        ?>
                        
    <head>
    <script src="js/js.js" defer></script>
	<script src="https://vk.com/js/api/openapi.js?154" type="text/javascript"></script>
	<meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/> 
	<meta http-equiv="X-UA-Compatible" content="ie=edge"/> 
	<link href="css/style_l.css" rel="stylesheet" type="text/css"/>
	<link href="css/main.css" rel="stylesheet" type="text/css"/>
	<link href="css/buy_page.css" rel="stylesheet" type="text/css"/>
	<link href="auth.php"  type="text/php"/>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"/>
	<link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
	<link rel="stylesheet" href="../css/fonts.css"/>
	<title>GreenFood</title>
    
    <?php 
	    require_once "functions/functions.php";
	    $multiv = getProd (1, $_GET["id"]);
	?>
	
	<?php 
	    require_once "functions/functions.php";
	    $proiz = getChr (1, $_GET["id"]);
	?>
	
	<?php 
	    require_once "functions/functions.php";
	    $pokr_chashi = getChr1 (1, $_GET["id"]);
	?>
	
	<?php 
	    require_once "functions/functions.php";
	    $mater_multiv = getChr2 (1, $_GET["id"]);
	?>
	
	<?php 
	    require_once "functions/functions.php";
	    $prigot = getChr3 (1, $_GET["id"]);
	?>
	
	<?php 
	    require_once "functions/functions.php";
	    $cvet = getChr4 (1, $_GET["id"]);
	?>
	
	<?php 
	    require_once "functions/functions.php";
	    $ob_chashi = getChr5 (1, $_GET["id"]);
	?>
	
	<?php 
	    require_once "functions/functions.php";
	    $moshn = getChr6 (1, $_GET["id"]);
	?>
	
	<?php 
	    require_once "functions/functions.php";
	    $teh_prigot = getChr7 (1, $_GET["id"]);
	?>
	
	<?php 
	    require_once "functions/functions.php";
	    $tel_upr = getChr8 (1, $_GET["id"]);
	?>
	
 	<?php 
 	    require_once "functions/functions.php";
 	    $tip_upr = getChr9 (1, $_GET["id"]);
 	?>
	
 	<?php 
 	    require_once "functions/functions.php";
 	    $disp = getChr10 (1, $_GET["id"]);
 	?>
	
	<?php 
	    require_once "functions/functions.php";
	    $cena = getChr11 (1, $_GET["id"]);
	?>
	
	<?php 
	    require_once "functions/functions.php";
	    $sklad = getChr12 (1, $_GET["id"]);
	?>
	
	<?php 
	    require_once "functions/functions.php";
	    $krishka = getChr13 (1, $_GET["id"]);
	?>
	
	<?php 
	    require_once "functions/functions.php";
	    $garant = getChr14 (1, $_GET["id"]);
	?>
	
    
</head> 
<body>
	<div id="wrapper">
		<div id="content">
			<?php require_once "blocks/header_l.php" ?>
		</div>
		
		<div id="main_block">
			
			<?php require_once "blocks/left_menu_p_l.php" ?>
			
			<?php
                    }
                ?>
			
			<div id="buy_page">
                    <?php
                        echo '<h2 class="heading"><a href="multivarkers.php">Мультиварки</a> > '.$multiv["title"].'</h2>'
                ?>
                
                <div style="clear: both"><br></div>
                
                    <?php
                        echo'<div class="fotos">
                            <img src="img/products/multivarkers/'.$multiv["id"].'.jpg">
                            <img src="img/products/multivarkers/'.$multiv["id"].'.jpg">
                            <img src="img/products/multivarkers/'.$multiv["id"].'.jpg">
                        </div>'
                            ?>
                
                <div style="clear: both"><br></div>
                
                <?php
                    echo '<div class="chrcts">
                        <h1 class="heading2">Описание модели</h1>
                            <div style="clear: both"><br></div>
                        <p>'.$multiv["full_text"].'</p>
        			</div>'
                ?>
                
                <div class="buy">
                        <div class="block_one">
                        <h1>5 000 руб.</h1><br>
                        <span><strong>Товар есть в наличии</strong></span>
                        </div>

                        <div style="clear: both"><br></div>

                        <div class="block_two">
                            В КОРЗИНУ
                        </div>

                        <div class="block_three">
                            КУПИТЬ В ОДИН КЛИК
                        </div>
                    </div>
                
                <div style="clear: both"><br></div>
                
                <div class="all_chr">
                    
                    <h1 class="heading2">Характеристики</h1>
                    <div style="clear: both"><br></div>
                    <table>
                        <tr>
                            <th><b>Название</b></th>
                            <?php
                        echo '<th>'.$multiv["title"].'</th>'
                            ?>
                        </tr>
                        
                        <tr>
                            <th><b>Производитель</b></th>
                            <?php
                        echo '<th>'.$proiz["name"].'<br><br> '.$proiz["strana"].'</th>'
                            ?>
                        </tr>
                        
                        <tr>
                            <th><b>Материал покрытия чаши</b></th>
                            <?php
                        echo '<th>'.$pokr_chashi["name"].'</th>'
                            ?>
                        </tr>
                        
                        <tr>
                            <th><b>Материал мультиварки</b></th>
                            <?php
                        echo '<th>'.$mater_multiv["name"].'</th>'
                            ?>
                        </tr>
                        
                        <tr>
                            <th><b>Программы приготовления</b></th>
                            <?php
                        echo '<th>'.$prigot["number"].'</th>'
                            ?>
                        </tr>
                        
                        <tr>
                            <th><b>Цвет</b></th>
                            <?php
                        echo '<th>'.$cvet["name"].'</th>'
                            ?>
                        </tr>
                        
                        <tr>
                            <th><b>Объем чаши</b></th>
                            <?php
                        echo '<th>'.$ob_chashi["name"].'</th>'
                            ?>
                        </tr>
                        
                        <tr>
                            <th><b>Мощность</b></th>
                            <?php
                        echo '<th>'.$moshn["name"].'</th>'
                            ?>
                        </tr>
                        
                        <tr>
                            <th><b>Технология приготовления</b></th>
                            <?php
                        echo '<th>'.$teh_prigot["name"].'</th>'
                            ?>
                        </tr>
                        
                        <tr>
                            <th><b>Управление с помощью телефона</b></th>
                            <?php
                        echo '<th>'.$tel_upr["name"].'</th>'
                            ?>
                        </tr>
                        
                        <tr>
                            <th><b>Тип управления</b></th>
                            <?php
                        echo '<th>'.$tip_upr["name"].'</th>'
                            ?>
                        </tr>
                        
                        <tr>
                            <th><b>Дисплей</b></th>
                            <?php
                        echo '<th>'.$disp["name"].'</th>'
                            ?>
                        </tr>
                        
                        <tr>
                            <th><b>Цена продажи</b></th>
                            <?php
                        echo '<th>'.$cena["name"].'</th>'
                            ?>
                        </tr>
                        
                        <tr>
                            <th><b>Количество на складе</b></th>
                            <?php
                        echo '<th>'.$sklad["name"].'</th>'
                            ?>
                        </tr>
                        
                        <tr>
                            <th><b>Крышка</b></th>
                            <?php
                        echo '<th>'.$krishka["mater"].'<br><br>'.$krishka["okno"].'</th>'
                            ?>
                        </tr>
                        
                        <tr>
                            <th><b>Гарантия</b></th>
                            <?php
                        echo '<th>'.$garant["name"].'</th>'
                            ?>
                        </tr>
                        
                        <tr>
                            <th><b>Нагревательные элементы</b></th>
                            <?php
                        echo '<th>'.$nagrev_element["number"].'<br><br>'.$nagrev_element["rasp"].'</th>'
                            ?>
                        </tr>
                        
                        <tr>
                            <th><b>Завленный срок службы</b></th>
                            <?php
                        echo '<th>'.$srok["name"].'</th>'
                            ?>
                        </tr>
                        
                    </table>
                
                </div>
                
            </div>
			
		</div>

		<!-- Футер -->

		<?php require_once "blocks/footer.php" ?>
	</div>
</body>
</html>