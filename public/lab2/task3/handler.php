<?php
$login = $_POST['login'];

switch ($login) {
	case 'log1':
		echo "Доброго дня, Рамський Петре Івановичу!";
		break;
	case 'log2':
		echo "Доброго дня, Наєнко Борисе Яновичу!";
		break;
	case 'log3':
		echo "Доброго дня, Дашук Чеславе Леонідовичу!";
		break;
	case 'log4':
		echo "Доброго дня, Чемерисе Анно Костянтинівно!";
		break;
	default:
		echo "Вибачте, Ви у нас не зареєстровані!";
}
