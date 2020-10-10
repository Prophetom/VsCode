<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Cайт с играми на JS</title>
		<link rel="stylesheet" href="style.css" />
		<script type="text/javascript">

		var answer = parseInt(Math.random() * 100);
		var tryCount = 0;
		var maxTryCount = 4;

			function readInt() {
				var number = document.getElementById("userAnswer").value;
				return parseInt(number);
				// return +document.getElementById("userAnswer").value; Короткий вариант
			}

			function write(text) {
				document.getElementById("info").innerHTML = text;
			}

			function hide (id) {
				document.getElementById(id).style.display = "none";
			}

			function guess() {
				tryCount++;
				var userAnswer = readInt();
				if(userAnswer == answer) {
					write("<b>Поздравляю, вы угадали!</b>");
					hide("userAnswer");
					hide("button");
				} else if(tryCount >= maxTryCount) {
					write("У вас закончились попытки, вы проиграли.<br>Правильный ответ: " + answer);
					hide("userAnswer");
					hide("button");
				} else if (userAnswer > answer) {
					write("Вы ввели слишком большое число<br>Попробуйте еще раз. Введите число от 1 до 100");
				} else if(userAnswer < answer) {
					write("Вы ввели слишком маленькое число<br>Попробуйте еще раз. Введите число от 1 до 100");
				}
			}

			function changePlayer() {
				if(playerNumber == 1) {
					playerNumber == 2;
				} else {
					playerNumber == 1;
				}
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

			<h1>Игра угадайка</h1>
			<div class="box">
				<p id="info">Угадайте число от 1 до 100<br>Каждый игрок имеет 2 попытки, чтобы угадать число.</p>
				<input type="text" id="userAnswer">
				<br>
				<a href="#" onclick="guess();" id="button">Начать</a>
			</div>

		</div>
	</div>
</div>
		

		<div class="footer">Copyright &copy; Prophetom</div>
	</body>
</html>
