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
		include "menu.php";
		?>

			<h1>Мой первый сайт с играми</h1>

			<div class="center">
				<img src="https://sun9-23.userapi.com/c834103/v834103994/170480/XrHPvgu8vXA.jpg" />
				<div class="box_text">
					<p>
						Привет, меня зовут Леонид), я уже совсем ахел так долго игнорить, приношу свои иззвинения!
					</p>

					<p>
						Я оставлю ссылку на свой
						<a href="https://github.com/Prophetom/VsCode.git"
							><b>Репозиторий,</b></a
						>
						чтобы вы могли оставлять свои предложения по поводу сайта.
					</p>
				</div>
			</div>
		</div>

		<div class="footer">
			Copyright &copy; <?php echo date("Y");?> Prophetom
		</div>
	</body>
</html>
