<?php
$value = readline("Введите значение от 1 до 6 и Вы узнаете кто Вы: ");
switch ($value) {
    case 1:
        echo "Вы Пёрень";
        break;
    case 2:
        echo "Вы Пацик на моцике";
        break;
    case 3:
        echo "Вы Джон";
        break;
    case 4:
        echo "Вы Кот";
        break;
    case 5:
        echo "Вы Крот";
        break;
    case 6:
        echo "Вы Сына";
        break;
    default:
        echo "Зачем вы ввели неправильное значение?";
}