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
    <link href="css/adapt.css" rel="stylesheet" type="text/css"/>
	<link href="css/main.css" rel="stylesheet" type="text/css"/>
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

			<!-- Форма Регистрации -->

<div id="main">
	<div class="reg">
		<form class="contact_form" name="reg" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<ul>
				<li>
					<h3>Регистрация</h3>
					<span class="required_notification">Заполните все поля</span>
				</li>
				
				<li>
                    <div id="reg_name">
					<label for="username">Имя:</label>
					<input type="text" name="username" placeholder="Иван Иванов">
					<span class="form_hint">Введите ваши имя и фамилию</span>
                    </div>
				</li>
				
				<li>
                    <div id="reg_email">
					<label for="email">Почта:</label>
					<input type="email" name="email" placeholder="ivan@example.com">
					<span class="form_hint">Введите вашу почту</span>
                    </div>
				</li>
				
				<li>
                    <div id="reg_pass">
					<label for="password">Пароль:</label>
					<input type="password" name="password1" placeholder="******">
					<span class="form_hint">Введите пароль</span>
                    </div>
				</li>

				<li>
                    <div id="reg_pass2">
					<label for="password">Пароль:</label>
					<input type="password" name="password2" placeholder="******">
					<span class="form_hint">Введите пароль повторно</span>
                    </div>
				</li>
				
				<li>
					<button class="submitr" type="submit" name="submit">Регистрация</button>
				</li>
			</ul>
		</form>
	</div>
	
	<?php
    $dbc = mysqli_connect("localhost", "id7456934_md", "bearM!kocathostinger27", "id7456934_mdbaze");
if(isset($_POST['submit'])){
    $username = mysqli_real_escape_string($dbc, trim($_POST['username']));
    $email = mysqli_real_escape_string($dbc, trim($_POST['email']));
    $password1 = mysqli_real_escape_string($dbc, trim($_POST['password1']));
    $password2 = mysqli_real_escape_string($dbc, trim($_POST['password2']));
    if(!empty($username) && !empty($email) && !empty($password1) && !empty($password2) && ($password1 == $password2)) {
        $query = "SELECT * FROM `signup` WHERE username = '$username' && email = '$email'";
        $data = mysqli_query($dbc, $query);
        if(mysqli_num_rows($data) == 0){
            $query = "INSERT INTO `signup` (username, email, password) VALUES ('$username', '$email', SHA('$password1'))";
            mysqli_query($dbc, $query);
            echo '<div class=sup> <p>Все готово, авторизуйетсь</p> </div> ';
            mysqli_close($dbc);
        }
        else {
            echo '<div class=sup1> <p>Логин уже существует</p> </div>';
        }
    }
}
?>
	
</div>

			<!-- Боковое меню-справка -->

			<?php require_once "blocks/aside.php" ?>

			

	</div>

	<!-- Футер -->

		<?php require_once "blocks/footer.php" ?>
	</div>
    
    <script>
        // Проверка поля email
        var regEmail = document.getElementById("reg_email");
        var emailInput = regEmail.getElementsByTagName("input")[0];
        var emailSpan = regEmail.getElementsByTagName("span")[0];
        function changeEmailField(e){
            var text = emailInput.value;
            var checkRightEmail = 0;
            var exp = /@*\./;
            var result = exp.test(text);
            if(result == false){
                emailInput.style.borderColor = "red";
                emailSpan.style.color = "red";
                emailSpan.textContent = "Введите почту в формате ivan@example.com";
            }
            else{
                emailInput.removeAttribute("style");
                emailSpan.removeAttribute("style");
                emailSpan.textContent = "Введите вашу почту"
            }
        }
        emailInput.addEventListener("blur", changeEmailField);
        
        // Проверка паролей
        var passwordFieldOne = document.getElementById("reg_pass").getElementsByTagName("input")[0];
        var passwordFieldTwo = document.getElementById("reg_pass2").getElementsByTagName("input")[0];
        var passwordSpanTwo = document.getElementById("reg_pass2").getElementsByTagName("span")[0];
        function checkPasswords(e){
            if(passwordFieldOne.value != passwordFieldTwo.value){
                passwordFieldTwo.style.borderColor = "red";
                passwordSpanTwo.style.color = "red";
                passwordSpanTwo.textContent = "Пароли не совпадают"       
            }
            else{
                passwordFieldTwo.removeAttribute("style");
                passwordSpanTwo.removeAttribute("style");
                passwordSpanTwo.textContent = "Введите пароль повторно";
            }
        }
        passwordFieldTwo.addEventListener("change",checkPasswords);
        
        // Проверка имени
        var nameInput = document.getElementById("reg_name").getElementsByTagName("input")[0];
        var nameSpan = document.getElementById("reg_name").getElementsByTagName("span")[0];
        function checkName(e){
            if(nameInput.value.length < 2){
                nameInput.style.borderColor = "red";
                nameSpan.style.color = "red";
                nameSpan.textContent = "В имени должно быть минимум 2 символа"
            }
            else{
                nameInput.removeAttribute("style");
                nameSpan.removeAttribute("style");
                nameSpan.textContent = "Введите ваши имя и фамилию";
            }
        }
        nameInput.addEventListener("blur", checkName);
    </script>
</body>
</html>