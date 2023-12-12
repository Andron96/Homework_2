<?php
$name = readline("Введите Ваше имя и не выебуйстесь: ");
echo "$name, а значете что? Вы ниче так нормальный пацик/типуха.\n\n";
echo "Ану ка теперь введите сколько угодно значений для вычисления их среднего арифметического.\n";
echo "Когда закончите вводить значения напишите \"Вычислить\".\n";
$cycle = true;
$elements = [];
$sum = 0;
$amount = 0;
$average = 0;
while ($cycle) {
    $inpVal = readline("Введите целое число от 1 до 100 или \"Вычислить\": ");
    if (($inpVal >= 1) && ($inpVal <= 100)) {
        $elements[] = $inpVal;
    } elseif ($inpVal === "Вычислить") {
        if (!$elements) {
            break;
        }
        $sum = array_sum($elements);
        $amount = count($elements);
        $average = $sum / $amount;
        break;
    } else {
        break;
    }
}
echo "Сумма элементов равна: $sum.\n";
echo "Количество элементов равно: $amount.\n";
echo "Сренее арифметическое равно: $average.\n";
