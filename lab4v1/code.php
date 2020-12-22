<!DOCTYPE html>
<html lang = "ru">
	<head>
	</head>

	<body>
		<form name = "acc" method = "POST" action = "code.php">
			<label> Логин <input type = "text" name = "login"> </label>
			<label> Пароль <input type = "text" name = "password"> </label>

			<input type = "submit"> 
		</form>

		<?php
		$z = file("data.txt");
		$f = trim($z[0]);
		if (isset($_POST["login"]) and isset($_POST["password"])){
			$f = $_POST["login"]. "";
			if ($f == $_POST["login"] and $z[1] == $_POST["password"]){
				echo "Вы залогинены";
			} else {
				echo "Ошибка";
			}
		}
		?>
	</body>
</html>







