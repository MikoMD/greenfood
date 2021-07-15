<!DOCTYPE html> 
<html>
    <?php
    if(empty($_COOKIE['email'])) {
?>
<head>
    <script src="js/js.js" defer></script>
	<script src="https://vk.com/js/api/openapi.js?154" type="text/javascript"></script>
    <script src="js/anime.min.js"></script>
	<meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/> 
	<meta http-equiv="X-UA-Compatible" content="ie=edge"/> 
	<link href="css/style.css" rel="stylesheet" type="text/css"/>
	<link href="css/main.css" rel="stylesheet" type="text/css"/>
	<!--<link href="css/adapt.css" rel="stylesheet" type="text/css"/>-->
	<link href="auth.php"  type="text/php"/>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"/>
	<link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
	<link rel="stylesheet" href="css/fonts.css"/>
	<title>GreenFood</title>
	
	<?php 
	    require_once "functions/functions.php";
	    $news = getNews (6, '');
	?>
	
</head> 

<body>
	<div id="wrapper">
		<div id="content">
            
			<?php require_once "blocks/header.php" ?>
        </div>     
		
		<div id="main_block">
            
            <?php require_once "blocks/left_menu_i_c.php" ?>
            
            <?php
                    }
                    else {
                        ?>
    <head>
    <script src="js/js.js" defer></script>
	<script src="https://vk.com/js/api/openapi.js?154" type="text/javascript"></script>
    <script src="js/anime.min.js"></script>
	<meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/> 
	<meta http-equiv="X-UA-Compatible" content="ie=edge"/> 
	<link href="css/style_l.css" rel="stylesheet" type="text/css"/>
	<link href="css/main.css" rel="stylesheet" type="text/css"/>
	<!--<link href="css/adapt.css" rel="stylesheet" type="text/css"/>-->
	<link href="auth.php"  type="text/php"/>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"/>
	<link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
	<link rel="stylesheet" href="css/fonts.css"/>
	<title>GreenFood</title>
	
	<?php 
	    require_once "functions/functions.php";
	    $news = getNews (6, '');
	?>
	
</head> 

<body>
	<div id="wrapper">
		<div id="content">
                <?php require_once "blocks/header_l.php" ?>
        </div>     
		
		<div id="main_block">
    
            <?php require_once "blocks/left_menu_i_c_l.php" ?>
            
                <?php
                    }
                ?>
            
            <div id="main">
				<div id="news">

				<div style="clear: both"><br></div>
                    
                    <!-- Кулинарные Новости -->
                    
					<h2 class="heading">Новости</h2>
					<div style="clear: both"><br></div>
                    
                    
                         
                            <?php
                                for ($i = 0; $i < count($news); $i++){
                                        echo '<div class="dws-wrapper">
                                        <div class="boxImg">
        						<img src="img/articles/'.$news[$i]["id"].'.jpg" alt="Статья '.$news[$i]["id"].'">
        						<div class="container">
        							<div class="text">
        								<h1>'.$news[$i]["title"].'</h1>
        								<p>'.$news[$i]["intro_text"].'</p>
        							</div>
        							<a href="article.php?id='.$news[$i]["id"].'" class="btn">Подробнее</a>
        						</div>
        					</div>
        					 </div>';
        					
                                }
                            ?>
                          

					<a href="">
						<div class="btn">Посмотреть больше</div>
					</a>

				</div>
                
                <!-- Реклама на джаве номер 2 -->
            
            <div id="ad2">
                <img src="img/ad4.jpg">
            </div>
                
				</div>
            
            
			
			<!-- Боковое меню-справка -->
                        

            
			<?php require_once "blocks/aside.php" ?>


		</div>
        
        <!-- Мигающий баннер -->
    
    <script>    
    var photo = document.getElementById("ad2"); 
    var image; 
    function getChildren(elem)  { 

    for(var i in elem.childNodes)   { 

    if(elem.childNodes[i].nodeType===1) { 

    getChildren(elem.childNodes[i]); 
    if(elem.childNodes[i].tagName == "IMG") { 
    image = elem.childNodes[i]; 
                } 
            } 
        } 
    } 
    getChildren(photo); 
    var photoList = ["img/ad2.jpg","img/ad3.jpg","img/ad4.jpg"]; 
    var index = 0; 
    function updatePhoto()  { 
    image.setAttribute("src",photoList[index]); 
    index++; 
    if(index == 3)  { 
    index = 0; 
        } 
    } 
    setInterval(updatePhoto, 1500); 
    </script> 
    
		<!-- Футер -->


		<?php require_once "blocks/footer.php" ?>

        
	</div>
    
    
    
</body>
</html>
    