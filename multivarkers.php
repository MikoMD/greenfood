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
    <!--<link href="css/adapt.css" rel="stylesheet" type="text/css"/>-->
    <link href="css/products.css" rel="stylesheet" type="text/css"/>
    <link href="auth.php"  type="text/php"/>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"/>
	<link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
	<link rel="stylesheet" href="css/fonts.css"/>
	<title>GreenFood</title>
    
    <?php 
	    require_once "functions/functions.php";
	    $multiv = getProd (20, '');
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
    <!--<link href="css/adapt.css" rel="stylesheet" type="text/css"/>-->
    <link href="css/products.css" rel="stylesheet" type="text/css"/>
    <link href="auth.php"  type="text/php"/>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"/>
	<link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
	<link rel="stylesheet" href="css/fonts.css"/>
	<title>GreenFood</title>
    
    <?php 
	    require_once "functions/functions.php";
	    $multiv = getProd (20, '');
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

			<div id="main">

					<!-- Мультиварки -->
                
                <h2 class="heading">МУЛЬТИВАРКИ</h2>
				<div style="clear: both"><br></div>
                
                <div id="pages">
                    <div id="p_number"><a href="multivarkers.php">1</a></div>
                    <div id="p_number"><a href="multivarkers2.php">2</a></div>
                </div>
                
                <div style="clear: both"><br></div>

                <div id="recipes">
                <?php
                    for ($i = 0; $i < count($multiv); $i++){      
                        echo '<div class="dws_wrpr2">			
                            <div class="container_pr2">
                                <img src="img/products/multivarkers/'.$multiv[$i]["id"].'.jpg">
                                <div class="text_pr2">
                                    <span>'.$multiv[$i]["title"].'</span><br><br>
                                    <p>'.$multiv[$i]["intro_text"].'</p>
                                </div>
                                <a href="abmult.php?id='.$multiv[$i]["id"].'" class="btn">Подробнее</a>
                            </div>
                        </div>';
                    }
                ?>
                    
				</div>
                
                <div style="clear: both"><p></div>
                
                 <div id="pages">
                    <div id="p_number"><a href="multivarkers.php">1</a></div>
                    <div id="p_number"><a href="multivarkers2.php">2</a></div>
                </div>
				
			</div>

					<!-- Боковое меню-справка -->
			<?php require_once "blocks/aside.php" ?>

		</div>

		<!-- Футер -->

		<?php require_once "blocks/footer.php" ?>
	</div>
</body>
</html>