<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Cайт с играми на JS</title>
		<link rel="stylesheet" href="style.css" />
		<script type="text/javascript">

			var letters = ["q", "w", "e", "r", "t", "y", "u", "i", "o", "p", "a", "s", "d", "f", "g", "h", "j", "k", "l", "z", "x", "c", "v", "b", "n", "m", "1", "2", "3", "4", "5", "6", "7", "8", "9", "0"];

			function readInt() {
				return +document.getElementById("userLength").value;
			}
			
			function write(text) {
				document.getElementById("password").innerHTML = text;
			}

			function getRandomNumber(max) {
				return Math.round(Math.random() * max);
			}

			function generatePassword(letters, length) {
				var text = "";
				for(var i = 0; i < length; i++) {
					var n = getRandomNumber(letters.length - 1);
					text = text + letters[n];
				}
				return text;
			}

			function generate() {
				var length = readInt();
				var password = generatePassword(letters, length);
				write("Ваш пароль готов: " + password);
				
			}

		</script>

	</head>
	<body>
	<div class="content">
	<?php
	include "menu.php"
	?>

<div class="contentWrap">
	<div class="content">
		<div class="center">

			<h1>Генератор случайного пароля</h1>
			<div class="box">
				<p id="info">Задайте длину пароля</p>
				<input type="text" id="userLength">
				<h3 id="password"></h3>
				<a href="#" onclick="generate();" id="button">Начать генерацию пароля</a>
			</div>

		</div>
	</div>
</div>
		

		<div class="footer">Copyright &copy; Prophetom</div>
	</body>
</html>