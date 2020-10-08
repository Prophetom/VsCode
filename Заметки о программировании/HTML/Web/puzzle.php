<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Cайт с играми на JS</title>
		<link rel="stylesheet" href="style.css" />


	</head>
	<body>
	<div class="content">
	<?php
	include "menu.php"
	?>

<div class="contentWrap">
	<div class="content">
		<div class="center">

			<h1>Игра в загадки</h1>
			<div class="box">

				<?php
					if(isset($_GET['userAnswer1']) && isset($_GET['userAnswer2']) && isset($_GET['userAnswer3'])){
							$score++;
						
						$userAnswer = $_GET["userAnswer1"];
						$score = 0;
						if($userAnswer == "водопровод" || $userAnswer == "водоснабжение") {
							$score++;
						}

						$userAnswer = $_GET["userAnswer2"];
						if($userAnswer == "патифон" || $userAnswer == "граммофон") {
							$score++;
						}

						$userAnswer = $_GET["userAnswer3"];
						if($userAnswer == "обувь" || $userAnswer == "ботинки" || $userAnswer == "сапоги") {
							$score++;
						}

						echo "Вы угадали " . $score . " из 3-х загадок";
					}
				?>

				<form method="GET">
					<p>Речка спятила с ума — По домам пошла сама. Что же это?</p>	
					<input type="text" name="userAnswer1">
					<p>Музыкант, певец, рассказчик — а всего труба да ящик. Что это?</p>
					<input type="text" name="userAnswer2">
					<p>Пустые отдыхаем, а полные шагаем. Что это?</p>
					<input type="text" name="userAnswer3">
					<br>
					<input type="submit" value="Проверить ответы" name="">
				</form>

			</div>

		</div>
	</div>
</div>
		

		<div class="footer">Copyright &copy; Prophetom</div>
	</body>
</html>
