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
	<link href="css/contacts.css" rel="stylesheet" type="text/css"/>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"/>
	<link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
	<link rel="stylesheet" href="css/fonts.css"/>
	<title>GreenFood</title>
</head> 
<body>
	<div id="wrapper">
		<div id="content">
			<?php require_once "blocks/header.php" ?>
		</div>
		<div id="main_block">
			
			<?php require_once "blocks/left_menu_i_c.php" ?>

			<div id="main">
					<h2 class="heading">Контакты</h2>
					<div style="clear: both"><br></div>

					<!-- Контакты -->

					<div class="block_cont">
						
						<strong>Магазины в Москве:<br><br></strong>
                            
                        <div id="map">
                            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Adc70ee200fb26908fcf6c75f72af0a11717e53c8c764b84814822017301e6adf&amp;width=650&amp;height=450&amp;lang=ru_RU&amp;scroll=true"></script>
                        </div>
                            
                        <div id="cont_text">
				            Россия, Москва, Клинская улица, 2к1<br><br>
                            GPS координаты места:<br>
                            55.8679 37.501896<br>
                            55°52'4"N 37°30'6"E
                        </div>
                        
                        <div style="clear: both"><br></div>
                            
                        <div id="map">
                            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A6b0f035857726473b38610d85c75ebcddae075c80602c8ebf1531652c77198c7&amp;width=650&amp;height=450&amp;lang=ru_RU&amp;scroll=true"></script>
                        </div>
                            
                        <div id="cont_text">
                            Россия, Москва, Каширское шоссе, 34Б<br><br>
                            GPS координаты места:<br>
                            55.650793 37.653933<br>
                            55°39'2"N 37°39'14"E
                        </div>
                        
                        <div style="clear: both"><br></div>
                        
                        <div id="map">
                            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A4e9e6782518c279d25b7b24d91181395a00620c47cad316ef759a15b1789c489&amp;width=650&amp;height=450&amp;lang=ru_RU&amp;scroll=true"></script>
                        </div>
                            
                        <div id="cont_text">
                            Россия, Москва, улица Лисицкого<br><br>
                            GPS координаты места:<br>
                            55.694658 37.640613<br>
                            55°41'40"N 37°38'26"E 
                        </div>  
                        
                        <div style="clear: both"><br></div>
                        
                        
						<strong>По вопросам звонить по телефону:<br></strong>
						+7-912-345-67-89<br><br>
						<strong>Почта:</strong>
						greenfood@gmail.com<br><br>
						Также вы можете написать нам <strong>Вконтакте</strong>:<br>
						<a href="https://vk.com/md_miko">Наша страница</a>
						
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