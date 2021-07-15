<!DOCTYPE html> 
<html> 
<head>
    <script src="js/js.js" defer></script>
	<script src="https://vk.com/js/api/openapi.js?154" type="text/javascript"></script>
    <script src="js/anime.min.js"></script>
	<meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/> 
	<meta http-equiv="X-UA-Compatible" content="ie=edge"/> 
	<link href="css/style.css" rel="stylesheet" type="text/css"/>
	<link href="css/main.css" rel="stylesheet" type="text/css"/>
	<link href="css/adapt.css" rel="stylesheet" type="text/css"/>
    <link href="css/articles.css" rel="stylesheet" type="text/css"/>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"/>
	<link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
	<link rel="stylesheet" href="css/fonts.css"/>
	<title>GreenFood</title>
	
	<?php 
	    require_once "functions/functions.php";
	    $news = getNews (1, $_GET["id"]);
	?>
	
</head> 

<body>
	<div id="wrapper">
		<div id="content">
			<?php require_once "blocks/header.php" ?>
        </div>     
		
		<div id="main_block">
            
            <?php require_once "blocks/left_menu_i_c.php" ?>
            
            <div id="main">
				<div id="article">

				<div style="clear: both"><br></div>
                    
                    <!-- Статья -->
                    
                    <?php echo '
					<h2 class="heading"><a href="index.php">Новости</a> > '.$news["title"].'</h2>
                    '
                    ?>
                    
                    <div style="clear: both"><br></div>
                         
                            <?php
                            echo '<div class="art_box">
                                <div class="art_img">
        						  <img src="img/articles/'.$news["id"].'.jpg" alt="Статья '.$news["id"].'">
        						</div>
                                  <div style="clear: both"><br></div>
                                    <div class="art_text">
                                        <h1>'.$news["title"].'</h1>
                                        <p>'.$news["full_text"].'</p>
        				            </div>
                            </div>';
                            ?>

				</div>
                
                <!-- Реклама на джаве номер 2 -->
            
            <div id="ad2">
                <img src="img/ad4.jpg">
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