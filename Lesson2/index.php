<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 18.06.2016
 * Time: 18:45
 */
define('GUEST', 1);
define('AUTHORIZED_USER', 2);
define('ADMINISTRATOR', 3);
$name = 'Пользователь ';
$action =ADMINISTRATOR ;
switch ($action) {
    case GUEST:
        echo '<P>Добро пожаловать! Вы незарегистрированы на сайте чтобы просматривать новости требуется регистрация</P></br>
      <a href=/php/HomeWork/Lesson2/Registration/Registration.html>Регистрация</a>';
        break;
    case AUTHORIZED_USER:
        echo '<p>Добро пожаловать на наш сайт введите ваш логин и пароль для доступа в личный кабинет</p> </br>
        <form>
        <label><input type=“text” /> Login</br></label>
        <label><input type=“text” /> Password</br></label>
        <input type=submit value="Login"></imput>';
        break;
    case ADMINISTRATOR:
        echo '<p>Добро пожаловать для того чтобы войти в панель администратора авторизуйтесь</p></br>
        <form>
        <label><input type=“text” /> Login</br></label>
        <label><input type=“text” /> Password</br></label>
        <input type=submit value="Login"></imput>';
        break;
    default:
        echo '<p>Добро пожаловать вы зашли первый раз на наш сайт для того чтобы просматривать новости нужно авторизоваться либо зарегистрироваться </p>
        <a href=/php/HomeWork/Lesson2/Registration/Registration.html>Регистрация</a></br>
        <a href=/php/HomeWork/Lesson2/Login/login.html>Войти</a>';
        break;
                    }