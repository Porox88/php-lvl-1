<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 18.06.2016
 * Time: 23:02
 */
function integer($n){
    if ($n > 0) {
        echo "$n</br> ";
        $n--;
        integer ($n);
    } elseif ($n == 0){
        echo "$n</br> ";
    } elseif ($n < 0) {
        echo "$n ";
        $n++;
        echo "$n</br> ";
    }
}


integer(10);