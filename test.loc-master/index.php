<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
/**
 * Короче в этом файле все, что ниже ты можешь трогать. в сам класс
 * ты можешь добавлять новвые методы и атрибуты
 * но все, что существует - не трогай.
 *
 * В этом файле я, помимо ошибок при работе с классом, кое что еще забыл сделать
 * и поэтому самая первая ошибка - нужно исправить в этом файле
 *
 * мои комментарии не трогай, добавляй свои ниже
 */

require __DIR__ . "/classes/example.php";
require __DIR__ . "/functions/example.php";




 showTitle('Задание. Исправление ошибок при работе с классом');

$w = new WClass('Привет');
// напиши тут коммент что я тут сделал
//объявил объект

echo $w->Getname();

// твой код

// ----------------------------------------------------------------------------
show('Теперь поменяем версию класса');
show("Текущая версия класса: ".$this->classVersion);

// твой код, но для этого задания не нужно писать отдельный метод, меняй и выводи
// прямо здесь. Новая вресия будет пускай произваольно берущееся число от 2 до 255

show("Новая версия класса: " . $this->classVersion = 2);



// ----------------------------------------------------------------------------
show('Теперь отобразим автора класса');

// твой код


// ----------------------------------------------------------------------------
show("Теперь посчитаем сколько букв, в строке, которую передали классу");

// вызови метод в классе, который будет выводит длину строки
