<?php
                $dbc = mysqli_connect("localhost", "id7456934_md", "bearM!kocathostinger27", "id7456934_mdbaze");
                    if(!isset($_COOKIE['user_id'])) {
                        if(isset($_POST['submit'])) {
                            $user_email = mysqli_real_escape_string($dbc, trim($_POST['email']));
                            $user_password = mysqli_real_escape_string($dbc, trim($_POST['password']));
                            if(!empty($user_email) && !empty($user_password)) {
                                $query = "SELECT `user_id` , `email` FROM `signup` WHERE email = '$user_email' AND password = SHA('$user_password')";
                                $data = mysqli_query($dbc, $query);
                                if(mysqli_num_rows($data) == 1) {
                                    $row = mysqli_fetch_assoc($data);
                                    setcookie('user_id', $row['user_id'], time() + (60*60*24*30));
                                    setcookie('email', $row['email'], time() + (60*60*24*30));
                                    $home_url = 'http://' . $_SERVER['HTTP_HOST'];
                                    header('Location: '. $home_url);
                                }
                                else {
                                    echo 'неверно введены имя или пароль';
                                }
                            }
                        }
                    }
                ?>

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
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"/>
	<link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
	<link rel="stylesheet" href="css/fonts.css"/>
	<title>GreenFood</title>
</head>


		</div>
<body>
	<div id="wrapper">
		<div id="content">
            
			<?php require_once "blocks/header.php" ?>
            
		</div>
		<div id="main_block">
			
            <?php require_once "blocks/left_menu_i_c.php" ?>

			<!-- Форма Авторизации -->
            
		<div id="main">
		    
		    <?php
                if(empty($_COOKIE['email'])) {
            ?>
		    
			<div class="reg">
                 
				<form class="contact_form" name="reg" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
					<ul>
						<li>
							<h3>Вход</h3>
							<span class="required_notification">Вход в систему</span>
						</li>
				
						<li>
							<label for="email">Почта:</label>
							<input type="email" name="email" placeholder="ivan@example.com">
							<span class="form_hint">Введите вашу почту</span>
						</li>
				
						<li>
							<label for="password">Пароль:</label>
							<input type="password" name="password" placeholder="******">
							<span class="form_hint">Введите пароль</span>
						</li>

						<li>
							<button class="submita" type="submit" name="submit">Вход</button>
						</li>
					</ul>
				</form>
                
			</div>
			
			<?php
                    }
                    else {
                        ?>
                        
                        <a href="../cabinet.php" class="btn">Мой Профиль</a>
                        <a href="../exit.php" class="btn">Выйти</a>
                
                 <?php
                    }
                ?>
			
			</div>
			
			 

			<!-- Боковое меню-справка -->

			<?php require_once "blocks/aside.php" ?>
			
		</div>

		<!-- Футер -->

		<?php require_once "blocks/footer.php" ?>
	</div>
</body>
</html>