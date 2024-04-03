<?php
// Отримуємо логін та пароль від користувача
$login = $_POST['login'];
$pass = $_POST['password'];

// Перевірка логіна та пароля
switch ($login) {
	case 'log1':
		if ($pass == "qwerty1") {
			echo "Доброго дня, Рамський Петре Івановичу!";
		} else {
			echo "Невірний пароль!";
		}
		break;
	case 'log2':
		if ($pass == "qwerty2") {
			echo "Доброго дня, Наєнко Борисе Яновичу!";
		} else {
			echo "Невірний пароль!";
		}
		break;
	case 'log3':
		if ($pass == "qwerty3") {
			echo "Доброго дня, Дашук Чеславе Леонідовичу!";
		} else {
			echo "Невірний пароль!";
		}
		break;
	case 'log4':
		if ($pass == "qwerty4") {
			echo "Доброго дня, Чемерисе Анно Костянтинівно!";
		} else {
			echo "Невірний пароль!";
		}
		break;
	default:
		echo "Вибачте, Ви у нас не зареєстровані!";
}
