<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 18.06.2016
 * Time: 20:27
 */

$time =  (int) date (G);/*назначаем переменную*/
function gettime(){/*Функция которая определяет настоящее время*/
    global$time;
    echo "<h1>Welcome</h1>";
   if($time<= 6){
       echo "Доброе Утро";
   }
    elseif ($time>=6&&$time<=12) {
        echo "добрый день ";
    }
    elseif($time>=12&&$time<=18){
        echo "добрый вечер";
    }
    elseif ($time>=18&&$time<=24){
        echo "Доброй ночи";
    }
}
$get=gettime();/*Назначаем переменной нашу функцию*/
echo $get;/*Выводим функцию в виде переменной */