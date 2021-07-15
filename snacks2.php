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
	<link href="css/recipes.css" rel="stylesheet" type="text/css"/>
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
			
			<?php require_once "blocks/left_menu_r.php" ?>

			<div id="main">

					<!-- Закуски -->
                    <h2 class="heading">ЗАКУСКИ</h2>
					<div style="clear: both"><br></div>
                
                <div id="pages">
                    <div id="p_number"><a href="snacks.php">1</a></div>
                    <div id="p_number"><a href="snacks2.php">2</a></div>
                </div>
                
                <div style="clear: both"><br></div>
                
                <div id="recipes">
                
                <div class="dws_wrpr">			
					<div class="boxImg_pr">
						<img src="img/recipes/snacks/21.jpg" alt="Статья">
						<div class="container_pr">
							<div class="text_pr">
								<span>Идея завтрака: тосты с фасолью и яичницей</span><br><br>
								<p>Идея завтрака: тосты с фасолью и яичницей Предлагаю разнообразить завтраки ещё одним быстрым рецептом. Готовить здесь почти ничего не нужно, ну разве что яичницу. Ингредиенты просты... </p>
							</div>
							<a href='#' class="btn">Подробнее</a>
						</div>
					</div>
				</div>

				<div class="dws_wrpr">	
					<div class="boxImg_pr">
						<img src="img/recipes/snacks/22.jpg" alt="Статья">
						<div class="container_pr">
							<div class="text_pr">
								<span>Идея завтрака: тосты с беконом и базиликом</span><br><br>
								<p>Сегодня новый рецепт из серии «Идея завтрака» — тосты с беконом и базиликом. Готовится не дольше яичницы, но зато ощутимо разнообразит ваше утро и подарит приятное н... </p>
							</div>
							<a href='#' class="btn">Подробнее</a>
						</div>
					</div>
				</div>

				<div class="dws_wrpr">	
					<div class="boxImg_pr">
						<img src="img/recipes/snacks/23.jpg" alt="Статья">
						<div class="container_pr">
							<div class="text_pr">
								<span>Мини-пицца с креветками и пряными травами</span><br><br>
								<p>В рамках расширения тематики блога иногда буду рассказывать рецепты и техники приготовления блюд, которые легко могли бы подаваться в хороших ресторанах. Чаще всего такие блюда боле... </p>
							</div>
							<a href='#' class="btn">Подробнее</a>
						</div>
					</div>
				</div>

				<div class="dws_wrpr">	
					<div class="boxImg_pr">
						<img src="img/recipes/snacks/24.jpg" alt="Статья">
						<div class="container_pr">
							<div class="text_pr">
								<span>Идея завтрака: тосты с рикоттой и сёмгой</span><br><br>
								<p>Периодически буду рассказывать простые и очень быстрые идеи завтраков (ну или перекусов, у кого что) на основе тостов. Пожалуй, как и многие, я пережил все стадии любви к тостам ещё... </p>
							</div>
							<a href='#' class="btn">Подробнее</a>
						</div>
					</div>
				</div>

				<div class="dws_wrpr">	
					<div class="boxImg_pr">
						<img src="img/recipes/snacks/25.jpg" alt="Статья">
						<div class="container_pr">
							<div class="text_pr">
								<span>Фалафель</span><br><br>
								<p>Говорят сложно сесть на два стула и поймать всех зайцев, неправда это всё! Давайте вместе посчитаем эффект от приготовления фалафели: простой рецепт — однозначно, постное блюд... </p>
							</div>
							<a href='#' class="btn">Подробнее</a>
						</div>
					</div>
				</div>
                    
                </div>
                
                <div id="pages">
                    <div id="p_number"><a href="snacks.php">1</a></div>
                    <div id="p_number"><a href="snacks2.php">2</a></div>
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